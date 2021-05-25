<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'tb_user';
    protected $useTimestamps = false;

    protected $allowedFields = ['id', 'id_outlet', 'nama', 'alamat', 'username', 'password', 'role'];

    public function getUser($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
    public function get_data($username, $password)
    {
        return $this->db->table('tb_user')
            ->where(array('username' => $username, 'password' => $password))
            ->get()->getRowArray();
    }
}
