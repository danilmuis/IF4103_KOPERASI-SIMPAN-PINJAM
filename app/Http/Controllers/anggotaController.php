<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class anggotaController extends Controller
{
    public function home()
    {
        if(!Session::get('login'))
        {
           return redirect('/')->with('alert','Silahkan Login terlebih dahulu');
        }else
        {
            $data = DB::table('akun')
            ->Join('transaksi', 'akun.idAnggota', '=', 'transaksi.idAnggota')
            ->where('akun.idAnggota',Session::get('account')->idAnggota)
            ->orWhere('transaksi.idTujuan',Session::get('account')->idAnggota)
            ->select('*')
            ->orderBy('transaksi.noTransaksi','desc')
            ->paginate(10);
            return view('home',['data'=>$data]);
        }    
    }
    
    
    public function create(Request $data)
    {
        $validator = Validator::make($data->all(),[
            'nik' => 'required|numeric|digits:16|unique:anggota',
            'namaLengkap' => 'required',
            'alamat' => 'required',
            'username' => 'required|alpha_num|unique:akun|min:4|max:10',
            'psw' => 'required|alpha_num|min:4|max:10',
            'tempat' => 'required'
        ]);
        if ($data->psw != $data->psw2){
            return redirect('registrasi')
                ->with('alert','Password dengan Re-Enter Password harus sama');
        }
        if($validator ->fails())
        {
            return redirect('registrasi')
                ->withErrors($validator)
                ->withInput();
        }
        $anggota =[
            'nik' => $data->nik,
            'namaLengkap' => $data->namaLengkap,
            'alamat' => $data->alamat,
            'TTL' => $data->tempat.", ".$data->tanggal,
            'agama' => $data->agama
        ];
        $akun =[
            'nik' => $data->nik,
            'username' => $data->username,
            'password' => Hash::make($data->psw)
        ];
        \App\anggota::create($anggota);
        \App\akun::create($akun);
        return redirect('/')->with('regis','Registerasi telah berhasil');
    }
    
    public function registrasi()
    {
        return view('registrasi');
    }
}
