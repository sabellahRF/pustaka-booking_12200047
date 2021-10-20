<?php

namespace App\Models;

use CodeIgniter\Model;

class Pengguna12200047 extends Model
{
    protected $DBGroup              = 'koneksiku';
    protected $table                = 'pengguna12200047';
    protected $primaryKey           = 'id';
    protected $useAutoIncrement     = true;
    protected $returnType           = 'array';
    protected $protectFields        = true;
    protected $allowedFields        = ['nama', 'password'];

    /**
     * methode untuk cek login dari table pengguna
     * berdasarkan nama dan password
     * @var string $user
     * @var string
     */
    public function cekLogin($user, $password){
        return $this->where('nama', $user)
            ->where('password', md5($password))->first();
    }
}
