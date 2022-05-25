<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AkunModel;

class AuthController extends BaseController
{
    public function __construct()
    {
        $this->AkunModel = new AkunModel();
    }

    public function login()
    {
        $data = [
            'listAkun' => $this->AkunModel->findAll(),
            'title' => "Form Login"
        ];

        return view('auth/login', $data);
    }

    public function postlogin()
    {
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $log = $this->AkunModel->getData($username);

        if($log == null) {
            return redirect()->to('/login')->with('gagalLogin', 'Data yang dimasukan salah');
        }

        if ($password == $log->password) {
            $data = [
                'login' => true,
                'username' => $log->username,
                'password' => $log->password
            ];

            session()->set($data);

            return redirect()->to('/')->with('msg', 'Anda berhasil login');
        }

        if($password == null || $password != $log->password) {
            return redirect()->to('/login')->with('gagalLogin', 'Data yang dimasukan salah');
        }
    }

    public function logout()
    {
        session()->destroy();

        return redirect()->to('/login');
    }

    public function register()
    {
        $data = [
            'title' => 'Form Register'
        ];

        return view('auth/register', $data);
    }

    public function tambahakun()
    {
        $data = [
            'username' => $this->request->getVar('username'),
            'password' => $this->request->getVar('password'),
        ];

        $this->AkunModel->insert($data);
        return redirect()->to('/login')->with('berhasilDaftar', 'Berhasil Mendaftar');
    }
}
