<?php namespace App\Controllers;
class Admin extends BaseController {
    public function __construct()
    {
        $this->cek_status();
    }
    public function index()
    {
        $data = [
            'judul' => 'Dashboard',
            'isi' => 'Admin/index',
            'user' => session()->getTempdata('username'),
            'role_id' => session()->getTempdata('role_id')
        ];

        echo view('layout/v_wrapper',$data);
    }
    public function menu()
    {
        
        $data = [
            'judul' => 'Menu Management',
            'isi' => 'Admin/menu',
            'user' => session()->getTempdata('username'),
            'role_id' => session()->getTempdata('role_id')
        ];

        echo view('layout/v_wrapper',$data);
    }
}