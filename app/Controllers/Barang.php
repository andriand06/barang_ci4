<?php namespace app\Controllers;

use App\Controllers\BaseController;
use App\Models\barang_model;

class Barang extends BaseController
{   protected $barangmodel;
    public function __construct()
    {
        $this->barangmodel = new barang_model();
        $pager = \Config\Services::pager();
        $this->cek_status();
        
      
        
    }
    public function index()
    {if ($this->cek_status()){
        return redirect()->to(base_url('Auth'));
    }
        
        if ($this->request->getPost('keyword')) {
            $keyword = $this->request->getPost('keyword');
           $data = [
               'judul' => 'Barang',
               'isi' => 'barang/index',
               'barang' => $this->barangmodel->getLike($keyword),
               'user' => session()->getTempdata('username'),
				'role_id' => session()->getTempdata('role_id'),
           ];
           echo view('layout/v_wrapper',$data);
        } else 
        {
            $data = [   
                'judul' => 'Barang',
                'isi' => 'barang/index',
                'barang' => $this->barangmodel->getBarang(),
                //'barang' => $this->barangmodel->paginate(5),
                 //'pager' => $this->barangmodel->pager,
                 'user' => session()->getTempdata('username'),
				'role_id' => session()->getTempdata('role_id'),
    ];
    
    echo view('layout/v_wrapper',$data);
        }
        
    }

    public function tambah()
    { 
        if ($this->cek_status()){
			return redirect()->to(base_url('Auth'));
		}
        helper(['form','url']);
        $val = $this->validate (['namabarang' => 'required',
                                'satuan' => 'required',
                                'jumlah' => 'required|numeric',
                                'harga' => 'required|numeric']);

        if($val == false)
        {
            $data = [
                'judul' => 'Data Barang',
                'isi' => 'barang/tambah',
                'user' => session()->getTempdata('username'),
				'role_id' => session()->getTempdata('role_id')
            ];
                 
            
            echo view('layout/v_wrapper',$data);
            
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
        if ($this->cek_status()){
			return redirect()->to(base_url('Auth'));
		}
        $data = [
            'judul' => 'Detail Barang',
            'isi' => 'barang/detail',
            'barang' => $this->barangmodel->getBarangById($id),
            'user' => session()->getTempdata('username'),
				'role_id' => session()->getTempdata('role_id')
        ];
       
        echo view('layout/v_wrapper',$data);
        
    }
    public function hapus($id)
    {
        if ($this->cek_status()){
			return redirect()->to(base_url('Auth'));
		}
        $this->barangmodel->deleteBarang($id);
        session()->setFlashdata('success','Data Berhasil Dihapus!');
        return redirect()->to(base_url('barang'));
    }

    public function edit($id)
    {
        if ($this->cek_status()){
			return redirect()->to(base_url('Auth'));
		}
        $data = [
            'judul' => 'Edit Data Barang',
            'isi' => 'barang/edit',
            'barang' => $this->barangmodel->editBarang($id),
            'user' => session()->getTempdata('username'),
				'role_id' => session()->getTempdata('role_id')
        ];
        
        echo view('layout/v_wrapper',$data);
       

        
    }
   public function update($id)
   {
    if ($this->cek_status()){
        return redirect()->to(base_url('Auth'));
    }
    helper(['form','url']);
    $val = $this->validate (['namabarang' => 'required',
                            'satuan' => 'required',
                            'jumlah' => 'required|numeric',
                            'harga' => 'required|numeric']);

    if($val == false) {
        $data = [
            'judul' => 'Edit Data Barang',
            'isi' => 'barang/edit',
            'barang' => $this->barangmodel->editBarang($id),
            'user' => session()->getTempdata('username'),
				'role_id' => session()->getTempdata('role_id')
        ];
        
        echo view('layout/v_wrapper',$data);
       
    } else {
        $data = [ 'id' => $this->request->getPost('id'),
        'namabarang' => $this->request->getPost('namabarang'),
       'jumlah' => $this->request->getPost('jumlah'),
       'satuan' => $this->request->getPost('satuan'),
       'harga' => $this->request->getPost('harga'),];
        
        $this->barangmodel->updateBarang($data,$id);
        session()->setFlashdata('success','Data Berhasil Diubah!');
        return redirect()->to(base_url('barang/index'));
    }
    
   }

  
}



    
