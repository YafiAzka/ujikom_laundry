<?php

namespace App\Controllers;

use App\Models\MemberModel;

class Member extends BaseController
{

    protected $memberModel;
    protected $request;

    public function __construct()
    {
        $this->memberModel = new MemberModel();
    }


    //--------------------------------------------------------------------


    public function index()
    {

        $member = $this->memberModel->findAll();
        $this->memberModel->getmember();

        $data = [

            'title' => "Member",
            'member' => $member

        ];
        return view('pages/member', $data);
    }

    //--------------------------------------------------------------------


    public function add()
    {

        $member = $this->memberModel->findAll();
        $this->memberModel->getmember();

        $data = [

            'title' => "Member",
            'member' => $member

        ];
        return view('pages/act/member/add', $data);
    }

    public function edit($id)
    {

        $member = $this->memberModel->findAll();
        $m = $this->memberModel->getMember($id);

        $data = [

            'title' => "Member",
            'member' => $m,

        ];
        return view('pages/act/member/edit', $data);
    }

    //--------------------------------------------------------------------

    public function save()
    {
        $request = \Config\Services::request();
        $this->memberModel->insert([

            'id' => $request->getVar('id'),
            'nama' => $request->getVar('nama'),
            'alamat' => $request->getVar('alamat'),
            'jenis_kelamin' => $request->getVar('jenis_kelamin'),
            'tlp' => $request->getVar('tlp'),


        ]);
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
        return redirect()->to('/member');
    }

    public function update($id)
    {
        $request = \Config\Services::request();
        $this->memberModel->save([

            'id' => $id,
            'nama' => $request->getVar('nama'),
            'alamat' => $request->getVar('alamat'),
            'jenis_kelamin' => $request->getVar('jenis_kelamin'),
            'tlp' => $request->getVar('tlp'),


        ]);
        session()->setFlashdata('pesan', 'Data berhasil diubah.');
        return redirect()->to('/member');
    }

    public function delete($id)
    {
        $this->memberModel->delete($id);
        return redirect()->to('/member');
    }
}
