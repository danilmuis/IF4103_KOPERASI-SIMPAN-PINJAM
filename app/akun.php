<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Eloquent;
class akun extends Eloquent
{
    protected $table = 'akun';
    protected $fillable = ['nik',  'debit', 'username', 'password'];
    public $timestamps = false;

    public function anggota()
    {
        return $this->hasMany('App\anggota');
    }
}
