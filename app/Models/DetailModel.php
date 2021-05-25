<?php

namespace App\Models;

use CodeIgniter\Model;

class DetailModel extends Model
{
    protected $table      = 'tb_detail_transaksi';
    protected $useTimestamps = false;

    protected $allowedFields = ['id', 'id_transaksi', 'id_paket', 'qty', 'keterangan'];

    public function getDetail($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

    public function getPaket()
    {
        return $this->db->table('tb_paket')
            ->join('tb_paket', 'tb_paket.id=tb_detail_transaksi.id')
            ->get()->getResultArray();
    }
}
