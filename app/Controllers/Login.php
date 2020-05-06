<?php namespace App\Controllers;

class Login extends BaseController {
    public function index()
    {   
        $data = [
            'judul' => 'Login',
            'isi' => 'Login/index',
        ];
        echo view('layout/v_wrapper',$data);
    }
}