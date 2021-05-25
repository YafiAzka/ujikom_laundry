<?php

namespace App\Controllers;

use App\Models\DetailModel;
use App\Models\TransaksiModel;
use App\Models\PaketModel;


class Detail extends BaseController
{

    protected $detailModel;
    protected $transaksiModel;
    protected $paketModel;

    public function __construct()
    {

        $this->detailModel = new DetailModel();
        $this->transaksiModel = new TransaksiModel();
        $this->paketModel = new PaketModel();
    }


    //--------------------------------------------------------------------


    public function index()
    {

        $detail = $this->detailModel->findAll();
        // $paket = $this->paketModel->findAll();
        $this->detailModel->getdetail();
        $paket = $this->paketModel->getPaket();

        $data = [

            'title' => "detail",
            'detail' => $detail,
            'paket' => $paket

        ];
        return view('pages/detail', $data);
    }

    //--------------------------------------------------------------------

    public function add()
    {

        $detail = $this->detailModel->findAll();
        $transaksi = $this->transaksiModel->findAll();
        $paket = $this->paketModel->findAll();
        $this->detailModel->getDetail();

        $data = [

            'title' => "detail",
            'detail' => $detail,
            'transaksi' => $transaksi,
            'paket' => $paket,

        ];
        return view('pages/act/detail/add', $data);
    }

    public function edit($id)
    {

        $transaksi = $this->transaksiModel->findAll();
        $paket = $this->paketModel->findAll();
        $d = $this->detailModel->getDetail($id);

        $data = [

            'title' => "detail",
            'detail' => $d,
            'transaksi' => $transaksi,
            'paket' => $paket,

        ];
        return view('pages/act/detail/edit', $data);
    }


    //--------------------------------------------------------------------


    public function save()
    {
        $request = \Config\Services::request();
        $this->detailModel->insert([

            'id' => $request->getVar('id'),
            'id_transaksi' => $request->getVar('id_transaksi'),
            'id_paket' => $request->getVar('id_paket'),
            'qty' => $request->getVar('qty'),
            'keterangan' => $request->getVar('keterangan'),


        ]);
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
        return redirect()->to('/detail');
    }

    public function update($id)
    {
        $request = \Config\Services::request();
        $this->detailModel->save([

            'id' => $id,
            'id_transaksi' => $request->getVar('id_transaksi'),
            'id_paket' => $request->getVar('id_paket'),
            'qty' => $request->getVar('qty'),
            'keterangan' => $request->getVar('keterangan'),


        ]);
        session()->setFlashdata('pesan', 'Data berhasil diubah.');
        return redirect()->to('/detail');
    }

    public function delete($id)
    {
        $this->detailModel->delete($id);
        return redirect()->to('/detail');
    }
}
