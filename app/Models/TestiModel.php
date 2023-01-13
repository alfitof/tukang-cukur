<?php

namespace App\Models;

use CodeIgniter\Model;

class TestiModel extends Model
{
    protected $table = 'testimoni';
    protected $useTimestamps = true;
    protected $allowedFields = ['id', 'nama', 'review', 'gambar'];
}
