<?php namespace App\Controllers;
use App\Models\user_model;
class Profile extends BaseController {
    protected $usermodel;
    public function __construct()
    {   
        $this->usermodel = new user_model();
        $this->cek_status();
    }
    public function index()
    {
        if ($this->cek_status()){
			return redirect()->to(base_url('Auth'));
        }
        $data = [
            'judul' => 'User Profile',
            'isi' => 'profile/index',
            'user' => session()->getTempdata('username'),
            'role_id' => session()->getTempdata('role_id')
        ];
        echo view('layout/v_wrapper',$data);
    }
    public function ubahPassword()
    {
        $val = $this->validate([
                                'passwordbaru' => 'required|min_length[8]|regex_match[/^[A-Za-z0-9]+$/]',
                                'ulangipasswordbaru' => 'required|matches[passwordbaru]',]);
        if ($val == false) {
            $data = [
                'judul' => 'Ubah Password',
                'isi' => 'profile/ubahpassword',
                'user' => session()->getTempdata('username'),
                'role_id' => session()->getTempdata('role_id')
            ];
            echo view('layout/v_wrapper',$data);

        }
        else {
            $username = session()->getTempdata('username');
            $passwordbaru =$this->request->getPost('passwordbaru');
            $user = $this->usermodel->getWhere($username);
            if ($user)
            {
                    $data = ['password' => password_hash($passwordbaru,PASSWORD_DEFAULT)];
                    
                    $this->usermodel->updateUser($data,$username);
                    session()->setFlashdata('success','password berhasil diubah!');
                    return redirect()->to(base_url('profile'));
                    
                
            }
            

             
    }
    }
}