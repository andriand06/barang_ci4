<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data= ['judul' => 'Home'];
		echo view('Templates/header',$data);
		echo view('home/index');
		echo view('Templates/footer');
	}



}
