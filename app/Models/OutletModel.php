<?php

namespace App\Models;

use CodeIgniter\Model;

class OutletModel extends Model
{
    protected $table      = 'tb_outlet';
    protected $useTimestamps = false;

    protected $allowedFields = ['id', 'nama', 'alamat', 'tlp'];

    public function getOutlet($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
