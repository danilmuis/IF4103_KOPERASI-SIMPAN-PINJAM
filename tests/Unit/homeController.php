<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class homeController extends TestCase
{
    public function index()
    {
       $data_anggota = \App\anggota::all();
       return view('welcomepage',['data' => $data_anggota]);
    }
    
    public function login(Request $data)
    {
        $uname = $data->username;
        $psw = ($data->password);
        $login = ['username' => $uname, 'password' =>$psw];
        $check = \App\akun::where('username',$uname)->first();    
        if($check){
            if(Hash::check($psw,$check->password)){
                Session::put('account',$check);
                Session::put('login',TRUE);
                return redirect('home');
            }else{
                return redirect('/')->with('alert',"Username atau Password salah");
            }            
        }else if($check = \App\pengurus::where($login)->first())
        {
            Session::put('account',$check);
            Session::put('login',TRUE);
            return redirect('homePengurus');
        }
        else{
            return redirect('/')->with('alert','Username atau Password salah');
        }
    }

    public function logout()
    {
        Session::flush();
        return redirect('/')->with('alert','Anda sudah logout');
    }
    
}