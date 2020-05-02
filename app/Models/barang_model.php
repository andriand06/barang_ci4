<?php namespace App\Models;
use CodeIgniter\Model;
class barang_model extends Model {

        
    

    public function getBarang()
    {
        return $this->db->table('barang')->get()->getResultArray();
    }   
}