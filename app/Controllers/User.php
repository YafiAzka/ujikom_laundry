<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\OutletModel;

class User extends BaseController
{

    protected $userModel;
    protected $outletModel;

    public function __construct()
    {

        $this->userModel = new UserModel();
        $this->outletModel = new OutletModel();
    }


    //--------------------------------------------------------------------


    public function index()
    {

        $user = $this->userModel->findAll();
        $this->userModel->getUser();


        $data = [

            'title' => "user",
            'user' => $user

        ];

        if (session()->get('username') == '') {
            session()->setFlashdata('gagal', 'Anda belum login');
            return redirect()->to(base_url('login'));
        }
        return view('pages/user', $data);
    }

    //--------------------------------------------------------------------


    public function add()
    {

        $user = $this->userModel->findAll();
        $outlet = $this->outletModel->findAll();
        $this->userModel->getUser();

        $data = [

            'title' => "user",
            'user' => $user,
            'outlet' => $outlet,

        ];
        return view('pages/act/user/add', $data);
    }

    public function edit($id)
    {

        $user = $this->userModel->findAll();
        $u = $this->userModel->getUser($id);
        $outlet = $this->outletModel->findAll();

        $data = [

            'title' => "user",
            'user' => $u,
            'outlet' => $outlet,

        ];
        return view('pages/act/user/edit', $data);
    }

    //--------------------------------------------------------------------

    public function save()
    {
        $request = \Config\Services::request();
        $this->userModel->insert([

            'id' => $request->getVar('id'),
            'id_outlet' => $request->getVar('id_outlet'),
            'nama' => $request->getVar('nama'),
            'username' => $request->getVar('username'),
            'password' => $request->getVar('password'),
            'role' => $request->getVar('role'),


        ]);
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
        return redirect()->to('/user');
    }

    public function update($id)
    {
        $request = \Config\Services::request();
        $this->userModel->save([

            'id' => $id,
            'id_outlet' => $request->getVar('id_outlet'),
            'nama' => $request->getVar('nama'),
            'username' => $request->getVar('username'),
            'password' => $request->getVar('password'),
            'role' => $request->getVar('role'),


        ]);
        session()->setFlashdata('pesan', 'Data berhasil diubah.');
        return redirect()->to('/user');
    }

    public function delete($id)
    {
        $this->userModel->delete($id);
        return redirect()->to('/user');
    }
}
