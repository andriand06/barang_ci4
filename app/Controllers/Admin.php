<?php namespace App\Controllers;

class Admin extends BaseController{
    
    protected $db;
    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->cek_status();
        
    }
    public function index()
    {
       
            $data = [
                'judul' => 'Dashboard',
                'isi' => 'Admin/index',
                'user' => session()->getTempdata('username'),
                'role_id' => session()->getTempdata('role_id')
            ];
            echo view('layout/v_wrapper',$data);
      
       
       
    }
    public function menu()
    {
       

        $data = [
            'judul' => 'Menu Management',
            'isi' => 'Admin/menu',
            'user' => session()->getTempdata('username'),
            'role_id' => session()->getTempdata('role_id'),
            'menu' => $this->db->table('user_menu')->get()->getResultArray()
        ];
        
        echo view('layout/v_wrapper',$data);
    }
    
    
    public function addmenu()
    {
        $val = $this->validate(['menu' => 'required']);
        if ($val == false)
        {
        $data = [
            'judul' => 'Add New Menu',
            'isi' => 'Admin/addmenu',
            'user' => session()->getTempdata('username'),
            'role_id' => session()->getTempdata('role_id'),
            'menu' => $this->db->table('user_menu')->get()->getResultArray()
        ];
        echo view('layout/v_wrapper',$data);
        }else {
        $data = [
            
            'menu' => $this->request->getPost('menu')
            
        ];
        $this->db->table('user_menu')->insert($data);
        $data1 = [
            'judul' => 'Menu Management',
            'isi' => 'Admin/menu',
            'user' => session()->getTempdata('username'),
            'role_id' => session()->getTempdata('role_id'),
            'menu' => $this->db->table('user_menu')->get()->getResultArray()
        ];
        
        echo view('layout/v_wrapper',$data1);
        session()->setFlashdata('success','Data berhasil ditambahkan!');
        return redirect()->to(base_url('admin/menu'));
        }
        
    }
    public function deletemenu($id)
    {
        
        $this->db->table('user_menu')->delete(['id' => $id]);
        session()->setFlashdata('success','Data berhasil dihapus!');
        return redirect()->to(base_url('admin/menu'));
        
    }
    public function editmenu($id)
    {
        $val =$this->validate(['menu' => 'required']);
        if($val == false)
        {
            $data = [
                'judul' => 'Edit Menu',
                'isi' => 'Admin/editmenu',
                'user' => session()->getTempdata('username'),
                'role_id' => session()->getTempdata('role_id'),
                'menu' => $this->db->table('user_menu')->where('id',$id)->get()->getRowArray()
            ];
            
            echo view('layout/v_wrapper',$data);
        }
        else {
            $data = [
                'judul' => 'Edit Menu',
                'isi' => 'Admin/editmenu',
                'user' => session()->getTempdata('username'),
                'role_id' => session()->getTempdata('role_id'),
                'menu' => $this->db->table('user_menu')->where('id',$id)->get()->getRowArray()
            ];
            
            echo view('layout/v_wrapper',$data);
        }
      
    }
    public function updatemenu($id)
    {
        
        $data = ['menu' => $this->request->getPost('menu')];
        $this->db->table('user_menu')->update($data,array('id'=>$id));
        session()->setFlashdata('success','Data berhasil diubah!');
        return redirect()->to(base_url('admin/menu'));
    }

    public function submenu()
    {
        $data = [
            'judul' => 'Menu Management',
            'isi' => 'Admin/submenu',
            'user' => session()->getTempdata('username'),
            'role_id' => session()->getTempdata('role_id'),
            'submenu' => $this->db->table('user_sub_menu')->get()->getResultArray()
        ];
        
        echo view('layout/v_wrapper',$data);
    }
    public function addsubmenu()
    {
        $val = $this->validate(['menuid' => 'required|is_numeric',
                                'title' => 'required',
                                'url' => 'required',
                                'icon' => 'required']);
        if ($val == false)
        {
        $data = [
            'judul' => 'Add New  Sub Menu',
            'isi' => 'Admin/addsubmenu',
            'user' => session()->getTempdata('username'),
            'role_id' => session()->getTempdata('role_id'),
            'submenu' => $this->db->table('user_sub_menu')->get()->getResultArray()
        ];
        echo view('layout/v_wrapper',$data);
        }else {
        $data = [
            
            'menuid' => $this->request->getPost('menuid'),
            'title' => $this->request->getPost('title'),
            'url' => $this->request->getPost('url'),
            'icon' => $this->request->getPost('icon'),
            
        ];
        $this->db->table('user_sub_menu')->insert($data);
        $data1 = [
            'judul' => 'Sub Menu Management',
            'isi' => 'Admin/submenu',
            'user' => session()->getTempdata('username'),
            'role_id' => session()->getTempdata('role_id'),
            'submenu' => $this->db->table('user_sub_menu')->get()->getResultArray()
        ];
        
        echo view('layout/v_wrapper',$data1);
        session()->setFlashdata('success','Data berhasil ditambahkan!');
        return redirect()->to(base_url('admin/submenu'));
        }
        
    }
    public function deletesubmenu($id)
    {
        $this->db->table('user_sub_menu')->delete(['id' => $id]);
        session()->setFlashdata('success','Data berhasil dihapus!');
        return redirect()->to(base_url('admin/submenu'));
    }
    public function editsubmenu($id)
    {
        $val =$this->validate(['menuid' => 'required|is_numeric',
                                'title' => 'required',
                                'url' => 'required',
                                'icon' => 'required']);
        if($val == false)
        {
            $data = [
                'judul' => 'Edit Sub Menu',
                'isi' => 'Admin/editsubmenu',
                'user' => session()->getTempdata('username'),
                'role_id' => session()->getTempdata('role_id'),
                'submenu' => $this->db->table('user_sub_menu')->where('id',$id)->get()->getRowArray()
            ];
            
            echo view('layout/v_wrapper',$data);
        }
        else {
            $data = [
                'judul' => 'Edit Sub Menu',
                'isi' => 'Admin/editsubmenu',
                'user' => session()->getTempdata('username'),
                'role_id' => session()->getTempdata('role_id'),
                'submenu' => $this->db->table('user_sub_menu')->where('id',$id)->get()->getRowArray()
            ];
            
            echo view('layout/v_wrapper',$data);
        }
    }
    public function updatesubmenu($id)
    {
        
        $data = ['menuid' => $this->request->getPost('menuid'),
                'title' => $this->request->getPost('title'),
                'url' => $this->request->getPost('url'),
                'icon' => $this->request->getPost('icon')];
        $this->db->table('user_sub_menu')->update($data,array('id'=>$id));
        session()->setFlashdata('success','Data berhasil diubah!');
        return redirect()->to(base_url('admin/submenu'));
    }
    public function role()
    {
        $val = $this->validate(['role' => 'required']);
        if ($val == false)
        {
            $data = ['judul' => 'Role',
                    'isi' => 'admin/role',
                    'user' => session()->getTempdata('username'),
                    'role_id' => session()->getTempdata('role_id'),
                    'role' => $this->db->table('roleid')->get()->getResultArray()
                ];
                echo view('layout/v_wrapper',$data);

        } else {
            $data = ['judul' => 'Role',
            'isi' => 'admin/role',
            'user' => session()->getTempdata('username'),
            'role_id' => session()->getTempdata('role_id'),
            'role' => $this->db->table('roleid')->get()->getResultArray()
        ];
        echo view('layout/v_wrapper',$data);
        }
    }
    public function deleterole($id)
    {
        $this->db->table('roleid')->delete(['id' => $id]);
        session()->setFlashdata('success','Data berhasil dihapus!');
        return redirect()->to(base_url('admin/role'));
    }
    public function editrole($id)
    {
        $val =$this->validate(['role' => 'required',
                                ]);
        if($val == false)
        {
            $data = [
                'judul' => 'Edit Role',
                'isi' => 'Admin/editrole',
                'user' => session()->getTempdata('username'),
                'role_id' => session()->getTempdata('role_id'),
                'role' => $this->db->table('roleid')->where('id',$id)->get()->getRowArray()
            ];
            
            echo view('layout/v_wrapper',$data);
        }
        else {
            $data = [
                'judul' => 'Edit Role',
                'isi' => 'Admin/editrole',
                'user' => session()->getTempdata('username'),
                'role_id' => session()->getTempdata('role_id'),
                'role' => $this->db->table('roleid')->where('id',$id)->get()->getRowArray()
            ];
            
            echo view('layout/v_wrapper',$data);
        }
    }
    public function updaterole($id)
    {
        
        $data = ['role' => $this->request->getPost('role'),
               ];
        $this->db->table('roleid')->update($data,array('id'=>$id));
        session()->setFlashdata('success','Data berhasil diubah!');
        return redirect()->to(base_url('admin/role'));
    }
    public function addRole()
    {
        $val = $this->validate(['role' => 'required']);
        if ($val == false)
        {
        $data = [
            'judul' => 'Add New Role',
            'isi' => 'Admin/addrole',
            'user' => session()->getTempdata('username'),
            'role_id' => session()->getTempdata('role_id'),
            'role' => $this->db->table('roleid')->get()->getResultArray()
        ];
        echo view('layout/v_wrapper',$data);
        }else {
        $data = [
            
            'role' => $this->request->getPost('role')
            
        ];
        $this->db->table('roleid')->insert($data);
        $data1 = [
            'judul' => 'Add New Role ',
            'isi' => 'Admin/role',
            'user' => session()->getTempdata('username'),
            'role_id' => session()->getTempdata('role_id'),
            'role' => $this->db->table('roleid')->get()->getResultArray()
        ];
        
        echo view('layout/v_wrapper',$data1);
        session()->setFlashdata('success','Data berhasil ditambahkan!');
        return redirect()->to(base_url('admin/role'));
        }
        
    }
   

    
}