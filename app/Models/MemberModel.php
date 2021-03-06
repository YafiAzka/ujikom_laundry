<?php

namespace App\Models;

use CodeIgniter\Model;

class MemberModel extends Model
{
    protected $table      = 'tb_member';
    protected $useTimestamps = false;

    protected $allowedFields = ['id', 'nama', 'alamat', 'jenis_kelamin', 'tlp'];

    public function getMember($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
