<?php namespace App\Controllers;

class Home extends BaseController
{
	public function __construct()
	{
		$this->cek_status();
		
	}
	public function index()
	{
		if ($this->cek_status()){
			return redirect()->to(base_url('Auth'));
		}
		$data= ['judul' => 'Home',
				'isi' => 'v_home',
				'user' => session()->getTempdata('username'),
				'role_id' => session()->getTempdata('role_id')];
		
		echo view('layout/v_wrapper',$data);
		
	}



}
