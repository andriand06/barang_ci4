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
  
    public function getWhere($username)
    {
        return $this->db->table('user')->getWhere(['username' => $username])->getRowArray();
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
    public function login()
    {
        $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');
            $user = $this->db->table('user')->getWhere(['username' => $username])->getRowArray();
            if ($user)
            {
                if ($user['is_active'] == 1){
                    if(password_verify($password,$user['password'])){
                        $data = [
                            'username' => $user['username'],
                            'role_id' => $user['role_id']
                        ];
                        session()->set($data);
                        if($user['role_id'] == 1){
                            echo "abc";
                           //return redirect()->to(base_url('Home'));
                        } else
                        {
                            return redirect()->to(base_url('User'));
                        }
                    }
                }
            }
    }
 
}