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
       // $view = View::make('welcome.blade');
       // $view -> nest('welcome');
       
       $data_anggota = \App\anggota::all();
       return view('welcomepage',['data' => $data_anggota]);
        //return $view;
    }
    public function indexPengurus()
    {
       // $view = View::make('welcome.blade');
       // $view -> nest('welcome');
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
       
        //return $view;
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
            //return view('homePengurus',['data' => $data_anggota]);
        
            return view('home',['data'=>$data]);
        }
        
        
    }
    public function simpanan()
    {
        return view('simpan');
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
        return redirect('home')->with('alert','transaksi sukses');
        
        
    }
    public function pinjaman()
    {
        return view('pinjam');
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
        return view('transfer');
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
        return view('penarikan');
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
        return view('pelunasan');
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
        #return $data->belongsTo('App\akun');
    }
    public function logout()
    {
        Session::flush();
        return redirect('/')->with('alert','Anda sudah logout');
    }
    public function create(Request $data)
    {
        
        #\App\anggota::firstOrCreate($data->all());
       # return hehehe;
        #var_dump(request('title'));
        #var_dump(request('publisher'));
        #var_dump(request('releasedate'));
        $validator = Validator::make($data->all(),[
            'nik' => 'required|numeric|max:10',
            'namaLengkap' => 'required|alpha' 
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
            'username' => $data->uname,
            'password' => Hash::make($data->psw)
        ];
        \App\anggota::create($anggota);
        \App\akun::create($akun);
        return redirect('/')->with('regis','Registerasi telah berhasil');
        #return $data->ttl;

    }
    

}
