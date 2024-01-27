<?php

namespace App\Models;

use CodeIgniter\Model;

class UserM extends Model
{
    protected $table    = 'tb_user';
    protected $allowedFields    = ['kode_admin', 'ref', 'upline', 'nama', 'wa', 'hp', 'email', 'password', 'alamat', 'kodepos', 'level', 'aktif', 'setuju'];

    // Dates
    protected $useTimestamps = true;
    
    // new
    public function deleteData($data)
    {
        $this->db->table('tb_jastip')
            ->where('id', $data['id'])
            ->delete($data);
    }

    public function Tampil_data()
    {
        return $this->db->table('tb_jastip')
            ->orderBy('id', 'ASC')
            ->get();
    }
    
    public function editData($data)
    {
        $this->db->table('tb_user')
            ->where('id', $data['id'])
            ->update($data);
    }

    public function insertData($data)
    {
        $this->db->table('tb_jastip')->insert($data);
    }

    // end new
}
