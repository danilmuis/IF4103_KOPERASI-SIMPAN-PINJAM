@extends('master')
@section('pojok_kanan')
addslashes
@endsection

@section('body')
@if(count($data)==0)
<h1>TRANSAKSI TIDAK DITEMUKAN</h1>

@else
<table class="table table-hover table-info">
  <thead>
    <tr>
      <th scope="col">No Transaksi</th>
      <th scope="col">Jumlah</th>
      <th scope="col">Jenis Transaksi</th>
      <th scope="col">Waktu Transaksi</th>
      
    </tr>
  </thead>
  
  <tbody>
    
    @foreach($data as $x)
        
        <tr>
        
            <th scope="row">{{$x->noTransaksi}}</th>
            @if($x->jenisTransaksi=="Simpanan" || $x->idTujuan==Session::get('account')->idAnggota)
            <td style="color:green;">+Rp. {{$x->jumlahUang}}</td>
            @endif
            @if($x->jenisTransaksi=="Penarikan")
            <td style="color:red;">-Rp. {{$x->jumlahUang}}</td>
            @endif
            @if($x->jenisTransaksi=="Pinjaman")
            <td style="color:orange;">+Rp. {{$x->jumlahUang}}</td>
            @endif
            @if($x->jenisTransaksi=="Pelunasan")
            <td style="color:orange;">-Rp. {{$x->jumlahUang}}</td>
            @endif
            @if(isset($x->idTujuan) && $x->idTujuan!=Session::get('account')->idAnggota)
            <td style="color:red;">-Rp. {{$x->jumlahUang}}</td>
            @endif
            <td>{{$x->jenisTransaksi}}</td>
            <td>{{$x->waktuTransaksi}}</td>
            <td>{{$x->idTujuan}}</td>
        </tr>
        
    @endforeach
  </tbody>
@endif
  <table>
</table>
@endsection