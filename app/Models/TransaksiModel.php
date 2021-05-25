<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiModel extends Model
{
    protected $table      = 'tb_transaksi';
    protected $useTimestamps = false;

    protected $allowedFields = [
        'id', 'id_outlet', 'id_member', 'id_user', 'kode_invoice', 'tgl',
        'batas_waktu', 'tgl_bayar', 'biaya_tambahan', 'diskon', 'pajak', 'status', 'dibayar'
    ];

    public function getTransaksi($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
