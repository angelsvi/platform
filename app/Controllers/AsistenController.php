<?php

namespace App\Controllers;

use App\Models\AsistenModel;

class AsistenController extends BaseController
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

    public function simpan()
    {
        helper('form');

        // Memeriksa apakah melakukan submit data atau tidak.
        if (!$this->request->is('post')) {
            return view('/asisten/simpan');
        }
        // Mengambil data yang disubmit dari form
        $post = $this->request->getPost([
            'nim', 'nama', 'praktikum', 'ipk'
        ]);

        // Mengakses Model untuk menyimpan data
        $model = model(AsistenModel::class);
        $model->simpan($post);

        return view('/asisten/success');
    }

    public function update($id)
    {
        // Ambil data asisten dari database berdasarkan ID yang diberikan
        // Misalnya, menggunakan model AsistenModel untuk mengakses database dan mengambil data asisten
        $asistenModel = new AsistenModel();
        $asisten = $asistenModel->find($id);

        // Tampilkan halaman formulir pembaruan dengan data asisten
        return view('asisten/update', ['asisten' => $asisten]);
    }

    public function processUpdate($id)
    {
        // Lakukan validasi input jika diperlukan

        // Ambil data yang dikirimkan melalui metode POST
        $nim = $this->request->getPost('nim');
        $nama = $this->request->getPost('nama');
        $praktikum = $this->request->getPost('praktikum');
        $ipk = $this->request->getPost('ipk');

        // Lakukan pembaruan data asisten berdasarkan ID yang diberikan
        // Misalnya, menggunakan model AsistenModel untuk mengakses database dan melakukan pembaruan data
        $asistenModel = new AsistenModel();
        $asistenData = [
            'nim' => $nim,
            'nama' => $nama,
            'praktikum' => $praktikum,
            'ipk' => $ipk
        ];
        $asistenModel->update($id, $asistenData);

        // Setelah pembaruan data berhasil, bisa dilakukan redirect ke halaman lain atau menampilkan pesan sukses
        return redirect()->to('asisten/success')->with('success', 'Data asisten berhasil diperbarui.');
    }
    public function success()
    {
        return view('asisten/success');
    }
    public function delete($id)
    {
        // Menghapus data asisten berdasarkan ID yang diberikan
        $asistenModel = new AsistenModel();
        $asistenModel->delete($id);

        // Setelah penghapusan data berhasil, bisa dilakukan redirect ke halaman lain atau menampilkan pesan sukses
        return redirect()->to('asisten')->with('success', 'Data asisten berhasil dihapus.');
    }

    
}
