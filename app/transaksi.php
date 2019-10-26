<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    protected $table = 'transaksi';
    protected $fillable = ['noTransaksi',  'jumlahUang', 'jenisTransaksi','mediaPembayaran', 'idAnggota','idTujuan'];
    public $timestamps = false;
}
