<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class akun extends Model
{
    protected $table = 'akun';
    protected $fillable = ['nik',  'debit', 'username', 'password'];
    public $timestamps = false;
}
