<?php namespace app\Controllers;

use App\Controllers\BaseController;
use App\Models\barang_model;

class Barang extends BaseController
{   protected $barangmodel;
    public function __construct()
    {
        $this->barangmodel = new barang_model();
        $validation =  \Config\Services::validation();
    }
    public function index()
    {
        $data = [   
                    'judul' => 'Barang',
                    'barang' => $this->barangmodel->getBarang()
        ];
        echo view('Templates/header',$data);
        echo view('Barang/index',$data);
        echo view('Templates/footer');
    }

    public function tambah()
    {
        $valid = $this->validate([
            'namabarang' => [
                'label' => 'Nama Barang',
                'rules' => 'required' ],
            'jumlah' => [
                'label' => 'Jumlah',
                'rules' => 'required|is_numeric'],
            'satuan' => [
                'label' => 'Satuan',
                'rules' => 'required'],
            'harga' => [
                'label' => 'Harga',
                'rules' => 'required|is_numeric']
            
           
        ]);
        
        if (!$valid){
            echo \Config\Services::validation()->listErrors();
        } else {
            echo "sukses";
        }
        $data1 = [   'judul' => 'Tambah Barang',
                    
                 ];
                 
        echo view('Templates/header',$data1);
        echo view('Barang/tambah');
        echo view('Templates/footer');
        
        $data = [ 'id' => $this->request->getPost('id'),
         'namabarang' => $this->request->getPost('namabarang'),
        'jumlah' => $this->request->getPost('jumlah'),
        'satuan' => $this->request->getPost('satuan'),
        'harga' => $this->request->getPost('harga'),];

        
        $this->barangmodel->insertBarang($data);
        session()->setFlashdata('success','Data Berhasil Ditambahkan!');
        return redirect()->to(base_url('barang'));
    }


    public function detail($id)
    {
        $data = [
            'judul' => 'Detail Barang',
            'barang' => $this->barangmodel->getBarangById($id),
        ];
        echo view('Templates/header',$data);
        echo view('Barang/detail',$data);
        echo view('Templates/footer');
    }
    public function hapus($id)
    {
        $this->barangmodel->deleteBarang($id);
        session()->setFlashdata('success','Data Berhasil Dihapus!');
        return redirect()->to(base_url('barang'));
    }

    public function edit($id)
    {
        $data1 = [
            'judul' => 'Edit Data Barang',
            'barang' => $this->barangmodel->getBarangById($id),
        ];
        echo view('Templates/header',$data1);
        echo view('Barang/edit',$data1);
        echo view('Templates/footer');

        
    }
   public function update($id)
   {
    $data = [ 'id' => $this->request->getPost('id'),
    'namabarang' => $this->request->getPost('namabarang'),
   'jumlah' => $this->request->getPost('jumlah'),
   'satuan' => $this->request->getPost('satuan'),
   'harga' => $this->request->getPost('harga'),];
    
    $this->barangmodel->updateBarang($data,$id);
    session()->setFlashdata('success','Data Berhasil Diubah!');
    return redirect()->to(base_url('barang'));
   }

}



    
