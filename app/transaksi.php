<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    private $debit=50000;
    protected $table = 'transaksi';
    protected $fillable = ['noTransaksi',  'jumlahUang', 'jenisTransaksi','mediaPembayaran', 'idAnggota','idTujuan'];
    public $timestamps = false;

    public function simpan($uang){
        return $this->debit + $uang;
    }
}
