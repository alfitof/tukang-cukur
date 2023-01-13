<?php

namespace App\Models;

use CodeIgniter\Model;

class AccountModel extends Model
{
    protected $table = 'akun';
    protected $useTimestamps = true;
    protected $allowedFields = ['id', 'member_username', 'member_password', 'nama', 'email'];
}
