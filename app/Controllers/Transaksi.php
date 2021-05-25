<?php

namespace App\Controllers;

use App\Models\TransaksiModel;
use App\Models\OutletModel;
use App\Models\MemberModel;
use App\Models\UserModel;

class Transaksi extends BaseController
{

    protected $transaksiModel;
    protected $outletModel;
    protected $memberModel;
    protected $userModel;

    public function __construct()
    {

        $this->transaksiModel = new TransaksiModel();
        $this->outletModel = new OutletModel();
        $this->memberModel = new MemberModel();
        $this->userModel = new UserModel();
    }


    //--------------------------------------------------------------------


    public function index()
    {

        $transaksi = $this->transaksiModel->findAll();
        // $this->transaksiModel->getTransaksi();

        $data = [

            'title' => "Transaksi",
            'transaksi' => $transaksi

        ];
        return view('pages/transaksi', $data);
    }

    //--------------------------------------------------------------------

    public function add()
    {

        $transaksi = $this->transaksiModel->findAll();
        $outlet = $this->outletModel->findAll();
        $member = $this->memberModel->findAll();
        $user = $this->userModel->findAll();
        // $this->$transaksiModel->getTransaksi();

        $data = [

            'title' => "transaksi",
            'transaksi' => $transaksi,
            'outlet' => $outlet,
            'member' => $member,
            'user' => $user,

        ];
        return view('pages/act/transaksi/add', $data);
    }

    public function edit($id)
    {

        $outlet = $this->outletModel->findAll();
        $member = $this->memberModel->findAll();
        $user = $this->userModel->findAll();
        $t = $this->transaksiModel->getTransaksi($id);

        $data = [

            'title' => "paket",
            'transaksi' => $t,
            'outlet' => $outlet,
            'member' => $member,
            'user' => $user,

        ];
        return view('pages/act/transaksi/edit', $data);
    }

    //--------------------------------------------------------------------

    public function save()
    {
        $request = \Config\Services::request();
        $this->transaksiModel->insert([

            'id' => $request->getVar('id'),
            'id_outlet' => $request->getVar('id_outlet'),
            'id_member' => $request->getVar('id_member'),
            'id_user' => $request->getVar('id_user'),
            'kode_invoice' => $request->getVar('kode_invoice'),
            'tgl' => $request->getVar('tgl'),
            'batas_waktu' => $request->getVar('batas_waktu'),
            'tgl_bayar' => $request->getVar('tgl_bayar'),
            'biaya_tambahan' => $request->getVar('biaya_tambahan'),
            'diskon' => $request->getVar('diskon'),
            'pajak' => $request->getVar('pajak'),
            'status' => $request->getVar('status'),
            'dibayar' => $request->getVar('dibayar'),


        ]);
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
        return redirect()->to('/transaksi');
    }

    public function update($id)
    {
        $request = \Config\Services::request();
        $this->transaksiModel->save([

            'id' => $id,
            'id_outlet' => $request->getVar('id_outlet'),
            'id_member' => $request->getVar('id_member'),
            'id_user' => $request->getVar('id_user'),
            'kode_invoice' => $request->getVar('kode_invoice'),
            'tgl' => $request->getVar('tgl'),
            'batas_waktu' => $request->getVar('batas_waktu'),
            'tgl_bayar' => $request->getVar('tgl_bayar'),
            'biaya_tambahan' => $request->getVar('biaya_tambahan'),
            'diskon' => $request->getVar('diskon'),
            'pajak' => $request->getVar('pajak'),
            'status' => $request->getVar('status'),
            'dibayar' => $request->getVar('dibayar'),


        ]);
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
        return redirect()->to('/transaksi');
    }

    public function delete($id)
    {
        $this->transaksiModel->delete($id);
        return redirect()->to('/transaksi');
    }
}
