<?php

namespace App\Models;

use CodeIgniter\Model;

class PageModel extends Model
{
    protected $table      = 'tb_user';
    protected $useTimestamps = false;

    protected $allowedFields = ['id', 'id_transaksi', 'id_paket', 'qty', 'keterangan'];

    public function getPage($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
