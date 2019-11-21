@extends ('master')

@section('pojok_kanan')
asd
@endsection
@section('body')

<div class="buktiTransaksi">

Transaksi kamu dicatat dengan nomor transaksi<br> <h1 style="color:red">{{$data->noTransaksi}}</h1>
    Pada waktu<br>
    
    <h1 style="color:red">{{$data->waktuTransaksi}}</h1><br>
    Transaksi {{$data->jenisTransaksi}} Menggunakan {{$data->mediaPembayaran}}<br>
    
    Sejumlah<br>
    
    <h1 style="color:red">Rp. {{$data->jumlahUang}}</h1><br>
    @isset($detail)
        Saldo saat ini <h1 style="color:#cfc73a">Rp. {{Session::get('account')->debit}}</h1>
        
    @endisset
    
</div>

</body>    
@endsection
