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
                    'judul' => 'Barang',
                    'barang' => $this->barangmodel->getBarang()
        ];
        echo view('Templates/header',$data);
        echo view('Barang/index',$data);
        echo view('Templates/footer');
    }

    public function tambah()
    { 
        helper(['form','url']);
        $val = $this->validate (['namabarang' => 'required',
                                'satuan' => 'required',
                                'jumlah' => 'required|numeric',
                                'harga' => 'required|numeric']);

        if(!$val)
        {
            $data['judul'] = 'Tambah Data';
                 
            echo view('Templates/header',$data);
            echo view('Barang/tambah');
            echo view('Templates/footer');
        } else 
        {
            $data = [ 'id' => $this->request->getPost('id'),
                    'namabarang' => $this->request->getPost('namabarang'),
                    'jumlah' => $this->request->getPost('jumlah'),
                    'satuan' => $this->request->getPost('satuan'),
                    'harga' => $this->request->getPost('harga')];
                    $this->barangmodel->insertBarang($data);
            session()->setFlashdata('success','Data Berhasil Ditambahkan!');
            return redirect()->to(base_url('barang/index'));
        }          
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
        $data = [
            'judul' => 'Edit Data Barang',
            'barang' => $this->barangmodel->editBarang($id),
        ];
        echo view('Templates/header',$data);
        echo view('Barang/edit',$data);
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
    return redirect()->to(base_url('barang/index'));
   }

   public function upload()
   {

   }

}



    
