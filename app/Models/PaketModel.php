<?php

namespace App\Models;

use CodeIgniter\Model;

class PaketModel extends Model
{
    protected $table      = 'tb_paket';
    protected $useTimestamps = false;

    protected $allowedFields = ['id', 'id_outlet', 'jenis', 'nama_paket', 'harga'];

    public function getPaket($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
