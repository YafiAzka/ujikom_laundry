<?php

namespace App\Controllers;

use App\Models\PaketModel;
use App\Models\OutletModel;

class Paket extends BaseController
{

    protected $paketModel;
    protected $outletModel;

    public function __construct()
    {

        $this->paketModel = new PaketModel();
        $this->outletModel = new OutletModel();
    }


    //--------------------------------------------------------------------

    public function index()
    {

        $paket = $this->paketModel->findAll();
        $this->paketModel->getpaket();

        $data = [

            'title' => "Paket",
            'paket' => $paket

        ];
        return view('pages/paket', $data);
    }

    //--------------------------------------------------------------------

    public function add()
    {

        $paket = $this->paketModel->findAll();
        $outlet = $this->outletModel->findAll();
        $this->paketModel->getPaket();

        $data = [

            'title' => "paket",
            'paket' => $paket,
            'outlet' => $outlet

        ];
        return view('pages/act/paket/add', $data);
    }

    public function edit($id)
    {

        $outlet = $this->outletModel->findAll();
        $p = $this->paketModel->getPaket($id);

        $data = [

            'title' => "paket",
            'paket' => $p,
            'outlet' => $outlet,

        ];
        return view('pages/act/paket/edit', $data);
    }

    //--------------------------------------------------------------------

    public function save()
    {
        $request = \Config\Services::request();
        $this->paketModel->insert([

            'id' => $request->getVar('id'),
            'id_outlet' => $request->getVar('id_outlet'),
            'nama_paket' => $request->getVar('nama_paket'),
            'jenis' => $request->getVar('jenis'),
            'harga' => $request->getVar('harga'),


        ]);
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
        return redirect()->to('/paket');
    }

    public function update($id)
    {
        $request = \Config\Services::request();
        $this->paketModel->save([

            'id' => $id,
            'id_outlet' => $request->getVar('id_outlet'),
            'nama_paket' => $request->getVar('nama_paket'),
            'jenis' => $request->getVar('jenis'),
            'harga' => $request->getVar('harga'),


        ]);
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
        return redirect()->to('/paket');
    }

    public function delete($id)
    {
        $this->paketModel->delete($id);
        return redirect()->to('/paket');
    }
}
