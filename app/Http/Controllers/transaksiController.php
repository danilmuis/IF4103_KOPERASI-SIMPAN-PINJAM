<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class transaksiController extends Controller
{
    public function simpan(Request $data)
    {
        $validator = Validator::make($data->all(),[
            
            'jumlahUang' => 'required|numeric|gt:0'
        ]);
        if($validator ->fails())
        {
            return redirect('home/simpanan')
                ->withErrors($validator)
                ->withInput();
        }
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
        return redirect()->action('transaksiController@detailx',['noTransaksi'=>$transaksi['noTransaksi']]);
        
    }
    public function pinjam(Request $data)
    {
        $validator = Validator::make($data->all(),[
            
            'jumlahUang' => 'required|numeric|gt:0'
        ]);
        if($validator ->fails())
        {
            return redirect('home/pinjaman')
                ->withErrors($validator)
                ->withInput();
        }
        $akun = Session::get('account');
        $noTransaksi = DB::table('transaksi')->count()+1;
        
        
        $transaksi=[
           'noTransaksi' => "T0".$noTransaksi,
           'jumlahUang' => $data->jumlahUang,
           'jenisTransaksi' => "Pinjaman",
           'mediaPembayaran' => $data->pembayaran,
           'idAnggota' => $akun->idAnggota
        ];
        \App\transaksi::create($transaksi);

        \App\akun::where('idAnggota', $akun->idAnggota)
          ->update(['kredit' => $data->jumlahUang]);
        $hasilupdate = \App\akun::where('idAnggota', $akun->idAnggota)->first();
        Session::put('account', $hasilupdate);
        return redirect()->action('transaksiController@detailx',['noTransaksi'=>$transaksi['noTransaksi']]);
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
        $akun_tujuan = \App\akun::where('idAnggota',$data->tujuan)->first();
        if(!isset($akun_tujuan)){
            return redirect('/home/transferan')->with('akun1','NO AKUN TIDAK DITEMUKAN');
        }
        if($akun_tujuan->idAnggota == $akun->idAnggota){
            return redirect('/home/transferan')->with('akun1','TIDAK BOLEH TRANSFER KE AKUN SENDIRI');
        }
        $validator = Validator::make($data->all(),[
            
            'jumlahUang' => 'required|numeric|lte:'.$akun->debit
        ]);
        if($validator ->fails())
        {
            return redirect('home/transferan')
                ->withErrors($validator)
                ->withInput();
        }
        \App\transaksi::create($transaksi);

        \App\akun::where('idAnggota', $akun->idAnggota)
          ->update(['debit' => $akun->debit - $data->jumlahUang]);
        $hasilupdate = \App\akun::where('idAnggota', $akun->idAnggota)->first();
        Session::put('account', $hasilupdate);
        
        
        \App\akun::where('idAnggota',$data->tujuan)
            ->update(['debit' => $akun_tujuan->debit + $data->jumlahUang]);
        return redirect()->action('transaksiController@detailx',['noTransaksi'=>$transaksi['noTransaksi']]);
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
        $validator = Validator::make($data->all(),[
            
            'jumlahUang' => 'required|numeric|gt:0|lte:'.$akun->debit
        ]);
        if($validator ->fails())
        {
            return redirect('home/penarikan')
                ->withErrors($validator)
                ->withInput();
        }
        \App\transaksi::create($transaksi);
        \App\akun::where('idAnggota', $akun->idAnggota)
          ->update(['debit' => $akun->debit-$data->jumlahUang]);
        $hasilupdate = \App\akun::where('idAnggota', $akun->idAnggota)->first();
        Session::put('account', $hasilupdate);
        return redirect()->action('transaksiController@detailx',['noTransaksi'=>$transaksi['noTransaksi']]);        
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
        $validator = Validator::make($data->all(),[
            
            'jumlahUang' => 'required|numeric|gt:0|lte:'.$akun->kredit
        ]);
        if($validator ->fails())
        {
            return redirect('home/pelunasan')
                ->withErrors($validator)
                ->withInput();
        }
       \App\transaksi::create($transaksi);

        \App\akun::where('idAnggota', $akun->idAnggota)
          ->update(['kredit' => $akun->kredit-$data->jumlahUang]
                    
        );
        $hasilupdate = \App\akun::where('idAnggota', $akun->idAnggota)->first();
        Session::put('account', $hasilupdate);
        return redirect()->action('transaksiController@detailx',['noTransaksi'=>$transaksi['noTransaksi']]);
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
    
    public function transferan()
    {
        if(!Session::get('login'))
        {
            return redirect('/')->with('alert','Silahkan Login terlebih dahulu');
        }else{   
            return view('transfer');
        }
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
}
