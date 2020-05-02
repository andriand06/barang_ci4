<?php namespace App\Models;
use CodeIgniter\Model;
class barang_model extends Model {

        
    public function getBarang()
    {
        return $this->db->table('barang')->get()->getResultArray();
    }
    
    public function insertBarang($data)
    {

        return $this->db->table('barang')->insert($data);
    }

    public function getBarangById($id)
    {
        return $this->db->table('barang')->getWhere(['id' => $id])->getResultArray();
    }
    public function deleteBarang($id)
    {   
        $this->db->table('barang')->delete(['id' => $id]);
    }

    public function updateBarang($data,$id)
    {  
        return $this->db->table('barang')>update($data,array('id'=>$id));
    }
 
}