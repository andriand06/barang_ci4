<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data= ['judul' => 'Home',
				'isi' => 'v_home'];
		
		echo view('layout/v_wrapper',$data);
		
	}



}
