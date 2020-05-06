<?php namespace App\Models;
use CodeIgniter\Model;
class user_model extends Model {
    protected $table = 'user';
    public function get()
    {
        return $this->db->table('user')->get()->getResultArray();
    }
    
    public function insertUser($data)
    {
        return $this->db->table('user')->insert($data);
    }
  
    public function getUserByID($id)
    {
        return $this->db->table('user')->getWhere(['id' => $id])->getResultArray();
    }
    public function deleteUser($id)
    {   
        $this->db->table('user')->delete(['id' => $id]);
    }

    public function editUser($id) 
    {
        return $this->db->table('user')->where('id',$id)->get()->getRowArray();
    }
    public function updateUser($data,$id)
    {  
        return $this->db->table('user')->update($data,array('id'=>$id));
    }
    public function getLike($keyword)
    {
        
     return $this->db->table('user')->like('namabarang',$keyword)->orLike('jumlah',$keyword)->orLike('harga',$keyword)->get()->getResultArray();
     
        
    }
 
}