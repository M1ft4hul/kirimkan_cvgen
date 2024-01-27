<?php

namespace App\Models;

use CodeIgniter\Model;

class JastipM extends Model
{
    protected $table      = 'tb_jastip';
    protected $primaryKey = 'id';
    protected $allowedFields    = ['hari', 'tanggal', 'level'];
    protected $useTimestamps = true;

    public function getJastipByLevel()
    {
        return $this->select('MONTH(tanggal) as bulan, YEAR(tanggal) as tahun')
            ->where('level', 1)
            ->distinct()
            ->findAll();
    }

    public function getJastipIJByLevel()
    {
        return $this->select('MONTH(tanggal) as bulan, YEAR(tanggal) as tahun')
            ->where('level', 2)
            ->distinct()
            ->findAll();
    }
}
