@extends('masterAdmin')
@section('pojok_kanan')
<a href="{{url('logout')}}"><button style="background-color: white; width: 60px"  >Logout</button></a>
@endsection

@section('body')
@if(count($data)==0)
<h1>TRANSAKSI TIDAK DITEMUKAN</h1>

@else
<table class="table table-hover table-info">
  <thead>
    <tr>
      <th scope="col">No Transaksi</th>
      <th scope="col">ID Anggota</th>
      <th scope="col">Jumlah</th>
      <th scope="col">Jenis Transaksi</th>
      <th scope="col">Waktu Transaksi</th>
      <th scope="col">Media</th>
      <th scope="col">Pengirim/Penerima</th>
      
      
    </tr>
  </thead>
  
  <tbody>
  <div style="float:right">{{$data->render()}}</div>
    @foreach($data as $x)
        
        <tr >
            
            <th scope="row">{{$x->noTransaksi}}</th>
            <th scope="row">{{$x->idAnggota}}</th>
            @if($x->jenisTransaksi=="Simpanan" || $x->idTujuan==$x->idAnggota)
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
            @if(isset($x->idTujuan) && $x->idTujuan!=$x->idAnggota)
            <td style="color:red;">-Rp. {{$x->jumlahUang}}</td>
            @endif
            <td>{{$x->jenisTransaksi}}</td>
            <td>{{$x->waktuTransaksi}}</td>
            <td>{{$x->mediaPembayaran}}
            @if($x->idTujuan==$x->idAnggota)
            <td>{{$x->idAnggota}}</td>
            @elseif($x->idTujuan!=$x->idAnggota)
            <td>{{$x->idTujuan}}</td>
            @endif
        </tr>
        
    @endforeach
  </tbody>
@endif
  <table>
</table>
@endsection