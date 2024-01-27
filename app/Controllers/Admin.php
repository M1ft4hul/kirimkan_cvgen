<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {

        $data['admin'] = $this->UserM->where('id', session()->get('id'))->get()->getRow();
        return view('admin/index', $data);
    }
    public function profil_admin()
    {
        $data['admin'] = $this->UserM->where('id', session()->get('id'))->get()->getRow();
        return view('admin/profil_admin', $data);
    }
    public function paket()
    {
        // $cek = $this->KirimanM->paket()->getResult();
        if (session()->get('kode_admin') == 'JR') {
            $cek = $this->KirimanM->paket_jerman()->getResult();
        } else {
            $cek = $this->KirimanM->paket_indonesia()->getResult();
        }
        $data = [
            'validation' => \Config\Services::validation(),
            'paketku' => $cek,
        ];
        return view('admin/paket', $data);
    }
    public function proses()
    {
        $cek = $this->KirimanM->proses()->getResult();
        // if (session()->get('kode_admin') == 'JR') {
        //     $cek = $this->KirimanM->proses_jerman()->getResult();
        // } else {
        //     $cek = $this->KirimanM->proses_indonesia()->getResult();
        // }
        $data = [
            'validation' => \Config\Services::validation(),
            'paketku' => $cek,
        ];
        return view('admin/proses', $data);
    }
    public function tuntas()
    {
        $cek = $this->KirimanM->tuntas()->getResult();
        // if (session()->get('kode_admin') == 'JR') {
        //     $cek = $this->KirimanM->tuntas_jerman()->getResult();
        // } else {
        //     $cek = $this->KirimanM->tuntas_indonesia()->getResult();
        // }
        $data = [
            'validation' => \Config\Services::validation(),
            'paketku' => $cek,
        ];
        return view('admin/tuntas', $data);
    }

    public function ubah_paket()
    {
        $id_paket = $this->request->getVar('id_paket');
        $cek = $this->KirimanM->where('kode_paket', $id_paket)->get()->getRow();
        if (!$cek) {
            session()->destroy();
            return redirect()->to('/');
        }
        $berat = $this->request->getVar('berat');
        $harga_indo = $this->request->getVar('hargarp');
        $harga_jerman = $this->request->getVar('harga');
        $bayar_sebelum = $this->request->getVar('bayar_sebelum');

        $this->KirimanM->save(
            [
                'id' => $cek->id,
                'berat' => $berat,
                'harga' => $harga_indo,
                'harga_euro' => $harga_jerman,
                'bayar_sebelum' => $bayar_sebelum,
                'status' => 1,
            ]
        );
        session()->setFlashdata('pesan', 'Berhasil, Paket telah dipindahkan ke tabel Proses.');
        return redirect()->to('paket');
    }
    public function ubah_proses()
    {
        $id_paket = $this->request->getVar('id_paket');
        $status_paket = $this->request->getVar('status_paket');
        $cek = $this->KirimanM->where('kode_paket', $id_paket)->get()->getRow();
        if (!$cek) {
            session()->destroy();
            return redirect()->to('/');
        }
        $this->KirimanM->save(
            [
                'id' => $cek->id,
                'status' => $status_paket,
            ]
        );
        session()->setFlashdata('pesan', 'Berhasil, Status paket telah diperbaharui.');
        return redirect()->to('proses');
    }
    public function ubah_kirim()
    {
        $id_paket = $this->request->getVar('id_paket2');
        $cek = $this->KirimanM->where('kode_paket', $id_paket)->get()->getRow();
        if (!$cek) {
            session()->destroy();
            return redirect()->to('/');
        }
        $this->KirimanM->save(
            [
                'id' => $cek->id,
                'status' => 3,
            ]
        );
        session()->setFlashdata('pesan', 'Berhasil, Status paket telah diperbaharui.');
        return redirect()->to('proses');
    }
}
