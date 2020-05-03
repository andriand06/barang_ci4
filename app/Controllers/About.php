<?php namespace App\Controllers;
class About extends BaseController
{
    public function index()
    {  
        $data = ['judul' => 'About'];
         echo view('Templates/header',$data);
        echo view('about/index');
        echo view('Templates/footer');
    }
}
