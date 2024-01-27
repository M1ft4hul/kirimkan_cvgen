<?php

namespace App\Models;

use CodeIgniter\Model;

class KirimanM extends Model
{
    protected $table = 'tb_kiriman';
    protected $allowedFields = ['id_user', 'kode_paket', 'nama_paket', 'nama_penerima', 'wa_penerima', 'hp_penerima', 'email_penerima', 'alamat_penerima', 'negara', 'status', 'catatan', 'negara', 'harga', 'harga_euro', 'kodepos', 'bayar_sebelum', 'berat'];

    // Dates
    protected $useTimestamps = true;

    public function bayar($kode_paket)
    {
        return $this->db->table("tb_kiriman as a")
            ->join('tb_user as b', 'b.id=a.id_user')
            ->select('a.id_user, a.kode_paket, a.nama_paket,a.harga,a.harga_euro,a.negara, b.nama, b.email, b.wa, b.hp,a.bayar_sebelum,a.berat')
            ->where('a.kode_paket', $kode_paket)->get();
    }
    public function paket_jerman()
    {
        return $this->db->table("tb_kiriman as a")
            ->join('tb_user as b', 'b.id=a.id_user')
            ->select('a.id,a.id_user, a.kode_paket,a.nama_paket,a.nama_penerima,a.alamat_penerima,a.kodepos,a.email_penerima,a.wa_penerima,a.hp_penerima,a.harga,a.harga_euro,a.negara,a.bayar_sebelum,a.berat,a.status,a.catatan, b.nama, b.alamat,b.email, b.wa, b.hp')
            ->where(['a.negara' => "Indonesia", 'status' => 0])->get();
    }
    public function paket_indonesia()
    {
        return $this->db->table("tb_kiriman as a")
            ->join('tb_user as b', 'b.id=a.id_user')
            ->select('a.id,a.id_user, a.kode_paket,a.nama_paket,a.nama_penerima,a.alamat_penerima,a.kodepos,a.email_penerima,a.wa_penerima,a.hp_penerima,a.harga,a.harga_euro,a.negara,a.bayar_sebelum,a.berat,a.status,a.catatan, b.nama, b.alamat,b.email, b.wa, b.hp')
            ->where(['a.negara' => "Jerman", 'status' => 0])->get();
    }

    // public function proses_jerman()
    // {
    //     return $this->db->table("tb_kiriman as a")
    //         ->join('tb_user as b', 'b.id=a.id_user')
    //         ->select('a.id,a.id_user, a.kode_paket,a.nama_paket,a.nama_penerima,a.alamat_penerima,a.kodepos,a.email_penerima,a.wa_penerima,a.hp_penerima,a.harga,a.harga_euro,a.negara,a.bayar_sebelum,a.berat,a.status,a.catatan, b.nama, b.alamat,b.email, b.wa, b.hp')
    //         ->where(['a.negara' => "Indonesia", 'status !=' => 0, 'status !=' => 5])->get();
    // }
    // public function proses_indonesia()
    // {
    //     return $this->db->table("tb_kiriman as a")
    //         ->join('tb_user as b', 'b.id=a.id_user')
    //         ->select('a.id,a.id_user, a.kode_paket,a.nama_paket,a.nama_penerima,a.alamat_penerima,a.kodepos,a.email_penerima,a.wa_penerima,a.hp_penerima,a.harga,a.harga_euro,a.negara,a.bayar_sebelum,a.berat,a.status,a.catatan, b.nama, b.alamat,b.email, b.wa, b.hp')
    //         ->where(['a.negara' => "Jerman", 'status !=' => 0, 'status !=' => 5])->get();
    // }
    public function tuntas_jerman()
    {
        return $this->db->table("tb_kiriman as a")
            ->join('tb_user as b', 'b.id=a.id_user')
            ->select('a.id,a.id_user, a.kode_paket,a.nama_paket,a.nama_penerima,a.alamat_penerima,a.kodepos,a.email_penerima,a.wa_penerima,a.hp_penerima,a.harga,a.harga_euro,a.negara,a.bayar_sebelum,a.berat,a.status,a.updated_at,a.catatan, b.nama, b.alamat,b.email, b.wa, b.hp')
            ->where(['a.negara' => "Indonesia", 'status' => 5])->get();
    }
    public function tuntas_indonesia()
    {
        return $this->db->table("tb_kiriman as a")
            ->join('tb_user as b', 'b.id=a.id_user')
            ->select('a.id,a.id_user, a.kode_paket,a.nama_paket,a.nama_penerima,a.alamat_penerima,a.kodepos,a.email_penerima,a.wa_penerima,a.hp_penerima,a.harga,a.harga_euro,a.negara,a.bayar_sebelum,a.berat,a.status,a.updated_at,a.catatan, b.nama, b.alamat,b.email, b.wa, b.hp')
            ->where(['a.negara' => "Jerman", 'status' => 5])->get();
    }


    //    super
    public function paket()
    {
        return $this->db->table("tb_kiriman as a")
            ->join('tb_user as b', 'b.id=a.id_user')
            ->select('a.id,a.id_user, a.kode_paket,a.nama_paket,a.nama_penerima,a.alamat_penerima,a.kodepos,a.email_penerima,a.wa_penerima,a.hp_penerima,a.harga,a.harga_euro,a.negara,a.bayar_sebelum,a.berat,a.status,a.catatan,b.kode_admin, b.nama, b.alamat,b.email, b.wa, b.hp')
            ->where('status', 0)->get();
    }
    public function proses()
    {
        return $this->db->table("tb_kiriman as a")
            ->join('tb_user as b', 'b.id=a.id_user')
            ->select('a.id,a.id_user, a.kode_paket,a.nama_paket,a.nama_penerima,a.alamat_penerima,a.kodepos,a.email_penerima,a.wa_penerima,a.hp_penerima,a.harga,a.harga_euro,a.negara,a.bayar_sebelum,a.berat,a.status,a.catatan, b.kode_admin, b.nama, b.alamat,b.email, b.wa, b.hp')->get();
    }
    public function tuntas()
    {
        return $this->db->table("tb_kiriman as a")
            ->join('tb_user as b', 'b.id=a.id_user')
            ->select('a.id,a.id_user, a.kode_paket,a.nama_paket,a.nama_penerima,a.alamat_penerima,a.kodepos,a.email_penerima,a.wa_penerima,a.hp_penerima,a.harga,a.harga_euro,a.negara,a.bayar_sebelum,a.berat,a.status,a.updated_at,a.catatan,b.kode_admin, b.nama, b.alamat,b.email, b.wa, b.hp')
            ->where('status', 6)->get();
    }
}
