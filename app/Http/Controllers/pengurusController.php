<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class pengurusController extends Controller
{
    public function index()
    {
       if(!Session::get('login'))
        {
           return redirect('/')->with('alert','Silahkan Login terlebih dahulu');
        }else
        {
            $data_anggota =DB::table('akun')
            ->join('anggota', 'akun.nik', '=', 'anggota.nik')
            ->select('*')
            ->get();
            return view('homePengurus',['data' => $data_anggota]);
        }
    }
}
