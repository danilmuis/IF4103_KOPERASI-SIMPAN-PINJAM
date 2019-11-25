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
    public function detail($nik){
        //$data_anggota = \App\akun::where('idAnggota',$idAnggota)->first();
        $data_anggota = DB::table('akun')
            ->join('anggota','akun.nik' ,'=' ,'anggota.nik')
            ->where('akun.nik','=', $nik)
            ->select('*')
            ->first();
        //return var_dump($data_anggota);
        return view('detailAnggota',['data' => $data_anggota]);
    }
    public function riwayat($idAnggota){
        $data = DB::table('akun')
            ->Join('transaksi', 'akun.idAnggota', '=', 'transaksi.idAnggota')
            ->where('akun.idAnggota',$idAnggota)
            ->orWhere('transaksi.idTujuan',$idAnggota)
            ->select('*')
            ->orderBy('transaksi.noTransaksi','asc')
            ->get();
            return view('riwayatTransaksi',['data'=>$data]);
    }
}
