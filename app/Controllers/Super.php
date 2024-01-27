<?php

namespace App\Controllers;

class Super extends BaseController
{
    public function index()
    {

        $data['admin'] = $this->UserM->where('id', session()->get('id'))->get()->getRow();
        return view('super/index', $data);
    }
    // new
    public function jadwal()
    {
        $jastip = $this->UserM->Tampil_data()->getResult();
        $data = [
            'jastip' => $jastip,
        ];
        return view('super/jadwal', $data);
    }
    
    public function addJadwal()
    {
        $data = [
            'hari' => $this->request->getPost('hari'),
            'tanggal' => $this->request->getPost('tanggal'),
            'level' => $this->request->getPost('level'),
            'wa' => $this->request->getPost('wa'),
            'catatan' => $this->request->getPost('catatan'),
        ];
        $this->UserM->insertData($data);
        session()->setFlashdata('berhasil', 'Data Berhasil Di Tambahkan !!!');
        return redirect()->to(base_url('/Pagejadwal'));
    }

    public function hapus($id)
    {
        $data = [
            'id' => $id,
        ];
        $this->UserM->deleteData($data);
        session()->setFlashdata('hapus', 'Data Terhapus!');
        return redirect()->to(base_url('/Pagejadwal'));
    }
    // new
    public function profil_admin()
    {
        $data['admin'] = $this->UserM->where('id', session()->get('id'))->get()->getRow();
        return view('super/profil_admin', $data);
    }
    
    public function EditProfil()
    {
        $admin = $this->UserM->where('id', session()->get('id'))->get()->getRow();
        $data = [
            'admin' => $admin,
        ];
        return view('super/profil_edit_admin', $data);
    }

    public function UpdateProfil($id)
    {
        $password = password_hash($this->request->getVar('password'), PASSWORD_DEFAULT);
        $nama = strtoupper($this->request->getVar('nama'));

        $data = [
            'id' => $id,
            'nama' => $nama,
            'email' => $this->request->getPost('email'),
            'wa' => $this->request->getPost('wa'),
            'password' => $password,
        ];
        $this->UserM->editData($data);

        session()->setFlashdata('editProfil', 'Data berhasil Di Edit !!!');
        return redirect()->to(base_url('/profil-admins'));
    }
    
    public function paket()
    {
        $cek = $this->KirimanM->paket()->getResult();
        $data = [
            'validation' => \Config\Services::validation(),
            'paketku' => $cek,
        ];
        return view('super/paket', $data);
    }
    public function proses()
    {
        $cek = $this->KirimanM->proses()->getResult();
        $data = [
            'validation' => \Config\Services::validation(),
            'paketku' => $cek,
        ];
        return view('super/proses', $data);
    }
    public function tuntas()
    {
        $cek = $this->KirimanM->tuntas()->getResult();
        $data = [
            'validation' => \Config\Services::validation(),
            'paketku' => $cek,
        ];
        return view('super/tuntas', $data);
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
        return redirect()->to('pakets');
    }
    public function ubah_proses()
    {
        $id_paket = $this->request->getVar('id_paket');
        $cek = $this->KirimanM->where('kode_paket', $id_paket)->get()->getRow();
        if (!$cek) {
            session()->destroy();
            return redirect()->to('/');
        }
        $this->KirimanM->save(
            [
                'id' => $cek->id,
                'status' => 2,
            ]
        );
        session()->setFlashdata('pesan', 'Berhasil, Status paket telah diperbaharui.');
        return redirect()->to('prosess');
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
        return redirect()->to('prosess');
    }
}
