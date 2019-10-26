<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Eloquent;

class anggota extends Eloquent
{
    protected $table = 'anggota';
    protected $fillable = ['nik', 'namaLengkap', 'alamat', 'TTL', 'agama'];
    public $timestamps = false;

    public function akun()
    {
        return $this->belongsTo('App\anggota');
    }
}
