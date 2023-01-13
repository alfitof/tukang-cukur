<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderModel extends Model
{
    protected $table = 'order_cukur';
    protected $useTimestamps = true;
    protected $allowedFields = ['id', 'pemesan', 'alamat', 'tanggal'];

    public function getQueue($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }


        return $this->where(['id' => $id])->first();
    }
}
