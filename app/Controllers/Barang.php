<?php namespace app\Controllers;

use App\Controllers\BaseController;
use App\Models\barang_model;

class Barang extends BaseController
{   protected $barangmodel;
    public function __construct()
    {
        $this->barangmodel = new barang_model();
    }
    public function index()
    {
        $data = [
                    'barang' => $this->barangmodel->getBarang()
        ];
        echo view('Templates/header');
        echo view('barang/index',$data);
        echo view('Templates/footer');
    }

    
}