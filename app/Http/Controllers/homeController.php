<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index()
    {
       // $view = View::make('welcome.blade');
       // $view -> nest('welcome');
       $data_anggota = \App\anggota::all();
       return view('welcomepage',['data' => $data_anggota]);
        //return $view;
    }
    public function home()
    {
        return view('home');
        
    }
    public function registrasi()
    {
        return view('registrasi');
    }
    public function login(Request $data)
    {
        $uname = $data->username;
        $psw = encrypt($data->password);

        $check = \App\akun::where('username',$uname)->first();
        if($check){
            if(\App\akun::where('password',$psw)){
                #Session::put('username',$uname);
                #Session::put('login',TRUE);
                return redirect('home')->with('login',$check);
            }else{
                return redirect('/')->with('alert',"Username atau Password salah");
            }

        }else{
            return redirect('/')->with('alert','Username atau Password salah');
        }
        #return $data->belongsTo('App\akun');
    }
    public function create(Request $data)
    {
        
        #\App\anggota::firstOrCreate($data->all());
       # return hehehe;
        #var_dump(request('title'));
        #var_dump(request('publisher'));
        #var_dump(request('releasedate'));
        $anggota =[
            'nik' => $data->nik,
            'namaLengkap' => $data->namaLengkap,
            'alamat' => $data->alamat,
            'TTL' => $data->tempat.", ".$data->tanggal,
            'agama' => $data->agama
        ];

        $akun =[
            'nik' => $data->nik,
            'username' => $data->uname,
            'password' => encrypt($data->psw)
        ];
        \App\anggota::create($anggota);
        \App\akun::create($akun);
        return redirect('/')->with('regis','Registerasi telah berhasil');
        #return $data->ttl;

    }

}
