<?php

namespace App\Controllers;

use App\Models\AsistenModel;
use App\Models\UserModel;

class userController extends BaseController
{
    protected $asisten;

    public function __construct()
    {
        $this->asisten = new AsistenModel();
    }

    public function index()
    {
        $daftar = $this->asisten->findAll();
        $data = ['List' => $daftar];
        return view('AsistenView', $data);
    }
    public function register()
    {
        // Tampilkan halaman registrasi
        return view('register');
    }

    public function processRegister()
    {
        helper('form');

        // Memeriksa apakah melakukan submit data atau tidak.
        if (!$this->request->is('post')) {
            return redirect()->to('register');
        }

        // Mengambil data yang disubmit dari form
        $post = $this->request->getPost([
            'username', 'email', 'password'
        ]);

        // Validasi data

        // Hash password
        $post['password'] = password_hash($post['password'], PASSWORD_DEFAULT);

        // Mengakses Model untuk menyimpan data
        $userModel = new UserModel();
        $userModel->insert($post);

        // Setelah registrasi berhasil, bisa dilakukan redirect ke halaman login atau menampilkan pesan sukses
        return redirect()->to('login')->with('success', 'Registrasi berhasil. Silakan login.');
    }


    public function login()
    {
        // Tampilkan halaman login
        return view('login');
    }

    public function processLogin()
    {
        // Memeriksa apakah melakukan submit data atau tidak.
        if (!$this->request->is('post')) {
            return redirect()->to('login');
        }

        // Mengambil data yang disubmit dari form
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Validasi data

        // Proses login

        // Setelah login berhasil, bisa dilakukan redirect ke halaman lain atau menampilkan pesan sukses
        $daftar = $this->asisten->findAll();
        $data = ['List' => $daftar];
        return view('AsistenView', $data);
    }

    public function logout()
    {
        // Proses logout

        // Setelah logout berhasil, bisa dilakukan redirect ke halaman login atau halaman lain
        return redirect()->to('login')->with('success', 'Logout berhasil.');
    }
}
