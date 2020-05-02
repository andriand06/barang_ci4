<?php namespace App\Controllers;
class About extends BaseController
{
    public function index()
    {   return view('Templates/header');
        return view('about/index');
    }
}
