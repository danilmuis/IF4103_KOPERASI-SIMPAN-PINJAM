<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class homeController extends Controller
{
    public function index()
    {
       $data_anggota = \App\anggota::all();
       return view('welcomepage',['data' => $data_anggota]);
    }
    public function indexPengurus()
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
            ->select('*')
            ->get();
            return view('home',['data'=>$data]);
        }    
    }
    public function simpanan()
    {
        if(!Session::get('login'))
        {
           return redirect('/')->with('alert','Silahkan Login terlebih dahulu');
        }else
        {
            return view('simpan');
        }
    }
    public function simpan(Request $data)
    {
        
        $akun = Session::get('account');
        $noTransaksi = DB::table('transaksi')->count()+1;
        $transaksi=[
           'noTransaksi' => "T0".$noTransaksi,
           'jumlahUang' => $data->jumlahUang,
           'jenisTransaksi' => "Simpanan",
           'mediaPembayaran' => $data->pembayaran,
           'idAnggota' => $akun->idAnggota
        ];
       \App\transaksi::create($transaksi);

        \App\akun::where('idAnggota', $akun->idAnggota)
          ->update(['debit' => $akun->debit+$data->jumlahUang]);
        $hasilupdate = \App\akun::where('idAnggota', $akun->idAnggota)->first();
        Session::put('account', $hasilupdate);
        return redirect()->action('homeController@detailx',['noTransaksi'=>$transaksi['noTransaksi']]);
        
    }
    public function pinjaman()
    {
        if(!Session::get('login'))
        {
           return redirect('/')->with('alert','Silahkan Login terlebih dahulu');
        }else
        {
            return view('pinjam');
            
        }
    }
    public function pinjam(Request $data)
    {
        $akun = Session::get('account');
        $noTransaksi = DB::table('transaksi')->count()+1;
        
        
        $transaksi=[
           'noTransaksi' => "T0".$noTransaksi,
           'jumlahUang' => $data->jumlahUang,
           'jenisTransaksi' => "Pinjaman",
           'idAnggota' => $akun->idAnggota
        ];
        \App\transaksi::create($transaksi);

        \App\akun::where('idAnggota', $akun->idAnggota)
          ->update(['kredit' => $data->jumlahUang]);
        $hasilupdate = \App\akun::where('idAnggota', $akun->idAnggota)->first();
        Session::put('account', $hasilupdate);
        return redirect('home')->with('alert',"transaksi sukses");
        
    }
    public function transferan()
    {
        if(!Session::get('login'))
        {
            return redirect('/')->with('alert','Silahkan Login terlebih dahulu');
        }else{   
            return view('transfer');
        }
    }
    public function transfer(Request $data)
    {
        $akun = Session::get('account');
        $noTransaksi = DB::table('transaksi')->count()+1;
        $transaksi=[
           'noTransaksi' => "T0".$noTransaksi,
           'jumlahUang' => $data->jumlahUang,
           'jenisTransaksi' => "Transfer",
           'idAnggota' => $akun->idAnggota,
           'idTujuan' =>$data->tujuan
        ];
        \App\transaksi::create($transaksi);

        \App\akun::where('idAnggota', $akun->idAnggota)
          ->update(['debit' => $akun->debit - $data->jumlahUang]);
        $hasilupdate = \App\akun::where('idAnggota', $akun->idAnggota)->first();
        Session::put('account', $hasilupdate);
        
        $akun_tujuan = \App\akun::where('idAnggota',$data->tujuan)->first();
        \App\akun::where('idAnggota',$data->tujuan)
            ->update(['debit' => $akun_tujuan->debit + $data->jumlahUang]);
        return redirect('home')->with('alert',"transaksi sukses");
        
    }
    public function penarikan()
    {
        if(!Session::get('login'))
        {
           return redirect('/')->with('alert','Silahkan Login terlebih dahulu');
        }else
        {
            return view('penarikan');
    
        }   
    }
    
    public function tarik(Request $data)
    {
        $akun = Session::get('account');
        $noTransaksi = DB::table('transaksi')->count()+1;
        $transaksi=[
           'noTransaksi' => "T0".$noTransaksi,
           'jumlahUang' => $data->jumlahUang,
           'jenisTransaksi' => "Penarikan",
           'mediaPembayaran' => $data->pembayaran,
           'idAnggota' => $akun->idAnggota
        ];
        \App\transaksi::create($transaksi);
        \App\akun::where('idAnggota', $akun->idAnggota)
          ->update(['debit' => $akun->debit-$data->jumlahUang]);
        $hasilupdate = \App\akun::where('idAnggota', $akun->idAnggota)->first();
        Session::put('account', $hasilupdate);
        return redirect('home')->with('alert','transaksi sukses');        
    }
    public function pelunasan()
    {
        if(!Session::get('login'))
        {
           return redirect('/')->with('alert','Silahkan Login terlebih dahulu');
        }else
        {
            return view('pelunasan');
    
        }
    }
    public function lunas(Request $data)
    {
        $akun = Session::get('account');
        $noTransaksi = DB::table('transaksi')->count()+1;
        $transaksi=[
           'noTransaksi' => "T0".$noTransaksi,
           'jumlahUang' => $data->jumlahUang,
           'jenisTransaksi' => "Pelunasan",
           'mediaPembayaran' => $data->pembayaran,
           'idAnggota' => $akun->idAnggota
        ];
       \App\transaksi::create($transaksi);

        \App\akun::where('idAnggota', $akun->idAnggota)
          ->update(['kredit' => $akun->kredit-$data->jumlahUang]);
        $hasilupdate = \App\akun::where('idAnggota', $akun->idAnggota)->first();
        Session::put('account', $hasilupdate);
        return redirect('home')->with('alert','transaksi sukses');   
    }
    public function registrasi()
    {
        return view('registrasi');
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
                return redirect('/')->with('alert',"Username atau Password salwah");
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
    public function create(Request $data)
    {
        $validator = Validator::make($data->all(),[
            'nik' => 'required|numeric|min:16|unique:anggota',
            'namaLengkap' => 'required|alpha',
            'alamat' => 'required|alpha_num|',
            'TTL' => 'required|alpha_num|',
            'username' => 'required|alpha_num|unique:akun|min:4|max:10',
            'psw' => 'required|alpha_num|min:4|max:10',
            'tempat' => 'required|alpha'
        ]);
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
    public function new(){
        $data_anggota = \App\anggota::all();
        return view('newWelcome',['data' =>$data_anggota]);
    }
    public function detail($noTransaksi)
    {
        $data_transaksi = \App\Transaksi::where('noTransaksi','like',$noTransaksi)->first();
        return view('detailTransaksi',['data'=>$data_transaksi]);
    }
    public function detailx($noTransaksi)
    {
        $data_transaksi = \App\Transaksi::where('noTransaksi','like',$noTransaksi)->first();
        return view('detailTransaksi',['data'=>$data_transaksi])->with('detail','detail');
    }
    public function bukti($noTransaksi)
    {

    }
    public function hasil(){
        return view('hasilTransaksi');
    }

}
