<?php namespace App\Controllers;
class About extends BaseController
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
        $data = ['judul' => 'About',
                'isi' => 'about/index'];
         
        echo view('layout/v_wrapper',$data);
        
    }
}
