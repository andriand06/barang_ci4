<?php namespace App\Controllers;
class About extends BaseController
{
    public function index()
    {  
        $data = ['judul' => 'About',
                'isi' => 'about/index'];
         
        echo view('layout/v_wrapper',$data);
        
    }
}
