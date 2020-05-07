<?php namespace App\Controllers;

class User extends BaseController {

    public function index()
    {
        $data = ['judul' => 'a',
                'isi' => 'User/index',
                'user' => session()->getTempdata('username'),
                'role_id' => session()->getTempdata('role_id')
    ];
    echo view('layout/v_wrapper',$data);
    }
}