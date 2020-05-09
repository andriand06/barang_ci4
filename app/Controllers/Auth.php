<?php namespace App\Controllers;
use App\Models\user_model;

use DateTime;
use CodeIgniter\Model;
use CodeIgniter\I18n\Time;

class Auth extends BaseController {
    protected $usermodel;
    public function __construct()
    {
        $this->usermodel = new user_model();
    }
    public function index()
    {   
        helper(['form','url']);
        $val = $this->validate(['username' => 'required|min_length[8]',
                                'password' => 'required|min_length[8]|regex_match[/^[A-Za-z0-9]+$/]',
                                
                                ]);

        if ($val == false) {
            $data = [
                'judul' => 'Login',
                'isi' => 'Auth/index',
                'username' => $this->request->getPost('username'),
                'password' => $this->request->getPost('password'),
                
               
                
            ];
            
            echo view('layout/v_wrapper',$data);
        } else
        {
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');
            $user = $this->usermodel->getWhere($username);
            
            if ($user)
            {
                if ($user['is_active'] == '1'){
                    if(password_verify($password,$user['password'])){
                       
                            $data = [
                                'username' => $user['username'],
                                'role_id' => $user['role_id']
                            ];
                            session()->setTempdata($data);                        
                        }
                            else {
                                session()->setFlashdata('error','Maaf Username atau password salah');
                                return redirect()->to(base_url('Auth'));
                            }
                    
                        if($user['role_id'] == '1' || $user['role_id'] == '2'){
                            
                           return redirect()->to(base_url('Home'));
                        } 
                     
                        
                    }
                }
            }
            
        }

    
    
   
    public function Registration()
    {
        
       
       
        helper(['form','url','date']);
        $val = $this->validate(['username' => 'required|is_unique[user.username]|min_length[8]',
                                'password' => 'required|min_length[8]|regex_match[/^[A-Za-z0-9]+$/]',
                                'ulangipassword' => 'required|matches[password]',
                                'email' => 'required|valid_email|is_unique[user.email]']);

        if ($val == false) {
            $data = [
                'judul' => 'Registrasi',
                'isi' => 'Auth/registration',
                'username' => $this->request->getPost('username'),
                'password' => $this->request->getPost('password'),
                'email' => $this->request->getPost('email'),
               
                
            ];
            
            echo view('layout/v_wrapper',$data);

        } else 
        {
            $data = [
                
                'id' => '',
                'username' => htmlspecialchars($this->request->getPost('username')),
                'password' => password_hash($this->request->getPost('password'),PASSWORD_DEFAULT),
                'email' => htmlspecialchars($this->request->getPost('email')),
                'role_id' => 1,
                'is_active' =>1,
                'datecreated' => '',
            ];
            $this->usermodel->insertUser($data);
            session()->setFlashdata('success','Anda Berhasil Registrasi!');
            return redirect()->to(base_url('Auth/index'));
            $data1 = [
                'isi'=> 'Auth/registration',
                'judul' => 'Registrasi',];
            echo view('layout/v_wrapper',$data1);
        }
           
            
        
    }
    public function logout()
    {
       // unset($_SESSION['username']);
        //unset($_SESSION['role_id']);
        session()->removeTempdata('username');
        session()->removeTempdata('role_id');
        session()->setFlashdata('success','Anda Berhasil Logout!');
        return redirect()->to(base_url('Auth/index'));
    }
}