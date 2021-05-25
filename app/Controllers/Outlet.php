<?php

namespace App\Controllers;

use App\Models\OutletModel;

class Outlet extends BaseController
{

    protected $outletModel;

    public function __construct()
    {

        $this->outletModel = new OutletModel();
    }


    //--------------------------------------------------------------------


    public function index()
    {

        $outlet = $this->outletModel->findAll();
        $this->outletModel->getoutlet();

        $data = [

            'title' => "Outlet",
            'outlet' => $outlet

        ];
        return view('pages/outlet', $data);
    }

    //--------------------------------------------------------------------

    public function add()
    {

        $outlet = $this->outletModel->findAll();
        $this->outletModel->getOutlet();

        $data = [

            'title' => "Outlet",
            'outlet' => $outlet

        ];
        return view('pages/act/outlet/add', $data);
    }

    public function edit($id)
    {

        $outlet = $this->outletModel->findAll();
        $o = $this->outletModel->getOutlet($id);

        $data = [

            'title' => "outlet",
            'outlet' => $o,

        ];
        return view('pages/act/outlet/edit', $data);
    }


    //--------------------------------------------------------------------

    public function save()
    {
        $request = \Config\Services::request();
        $this->outletModel->insert([

            'id' => $request->getVar('id'),
            'nama' => $request->getVar('nama'),
            'alamat' => $request->getVar('alamat'),
            'tlp' => $request->getVar('tlp'),


        ]);
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
        return redirect()->to('/outlet');
    }

    public function update($id)
    {
        $request = \Config\Services::request();
        $this->outletModel->save([

            'id' => $id,
            'nama' => $request->getVar('nama'),
            'alamat' => $request->getVar('alamat'),
            'tlp' => $request->getVar('tlp'),


        ]);
        session()->setFlashdata('pesan', 'Data berhasil diubah.');
        return redirect()->to('/outlet');
    }

    public function delete($id)
    {
        $this->outletModel->delete($id);
        return redirect()->to('/outlet');
    }
}
