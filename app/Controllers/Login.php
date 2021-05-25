<?php


namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{

    protected $userModel;

    public function __construct()
    {

        $this->userModel = new UserModel();
    }


    public function index()
    {
        $data = [
            'title' => '',
        ];
        return view('pages/login', $data);
    }

    public function login_action()
    {
        $request = \Config\Services::request();
        $user = new UserModel();

        $username = $request->getPost('username');
        $password = $request->getPost('password');

        $cek = $user->get_data($username, $password);

        if (($cek['username'] == $username) && ($cek['password'] == $password)) {
            session()->set('username', $cek['username']);
            session()->set('nama', $cek['nama']);
            session()->set('id', $cek['id']);
            return redirect()->to(base_url('/'));
        } else {
            session()->setFlashdata('gagal', 'Username / Password salah');
            return redirect()->to(base_url('login'));
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('login'));
    }

    //--------------------------------------------------------------------

}
