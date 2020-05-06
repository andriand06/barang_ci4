<?php namespace App\Controllers;

use App\Models\user_model;
class Registration extends BaseController {
    protected $usermodel;
    public function __construct()
    {
        $this->usermodel = new user_model();
    }
    public function index()
    {
        helper(['form','url']);
        $val = $this->validate(['username' => 'required|is_unique[user.username]|min_length[8]',
                                'password' => 'required|min_length[8]|regex_match[/^[A-Za-z0-9]+$/]',
                                'ulangipassword' => 'required|matches[password]',
                                'email' => 'required|valid_email']);

        if ($val == false) {
            $data = [
                'judul' => 'Registrasi',
                'isi' => 'Registration/index',
                'username' => $this->request->getPost('username'),
                'password' => $this->request->getPost('password'),
                'email' => $this->request->getPost('email'),
                
            ];
            
            echo view('layout/v_wrapper',$data);

        } else 
        {
            $data = [
                
                'id' => '',
                'username' => $this->request->getPost('username'),
                'password' => $this->request->getPost('password'),
                'email' => $this->request->getPost('email'),
            ];
            $this->usermodel->insertUser($data);
            session()->setFlashdata('success','Anda Berhasil Registrasi!');
            return redirect()->to(base_url('Login/index'));
            $data1 = [
                'isi'=> 'Registration/index',
                'judul' => 'Registrasi',];
            echo view('layout/v_wrapper',$data1);
        }
           
            
        
    }
}