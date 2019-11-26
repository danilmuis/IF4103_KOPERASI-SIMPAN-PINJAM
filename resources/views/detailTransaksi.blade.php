@extends ('master')

@section('pojok_kanan')
<a href="{{url('logout')}}"><button style="background-color: white; width: 60px"  >Logout</button></a>
@endsection
@section('body')
@php
    if($data->jenisTransaksi=="Transfer"){
        if($data->idTujuan != $data->idAnggota){
            $x = "ke ID ".$data->idTujuan;
        }else{
            $x = "dari ID ".$data->idAnggota;
        }
    }else{
        $x = "Melalui";
    }
@endphp
{{$data}}
<div class="buktiTransaksi">

Transaksi kamu dicatat dengan nomor transaksi<br><br> <h1 style="color:red">{{$data->noTransaksi}}</h1>
    Pada waktu<br>
    
    <h1 style="color:red">{{$data->waktuTransaksi}}</h1><br>
    Transaksi {{$data->jenisTransaksi}} {{$x}} {{$data->mediaPembayaran}}<br>
    
    Sejumlah<br>
    
    <h1 style="color:red">Rp. {{$data->jumlahUang}}</h1><br>
    @isset($detail)
        @if($data->jenisTransaksi!="Pelunasan" && $data->jenisTransaksi!="Pinjaman")
        Saldo saat ini <h1 style="color:#cfc73a">Rp. {{Session::get('account')->debit}}</h1>
        @else
            Kredit saat ini <h1 style="color:#cfc73a">Rp. {{Session::get('account')->kredit}}</h1>
        @endif
    @endisset
    
</div>

</body>    
@endsection
