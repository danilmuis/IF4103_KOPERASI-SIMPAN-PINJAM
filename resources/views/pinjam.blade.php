@extends('master')
@section('pojok_kanan')
    {{Session::get('account')}}
@endsection
@section('body')
<div class="kotakPinjam">
    <center><h1 style="font-size: 30px; font-family: sans-serif">Pinjam</h1></center>
    <form method="post" action="transaksi/pinjam">
        {{csrf_field()}}
        <div class="posisi" id="formPinjam">
            Nominal uang yang akan dipinjam <br>
            Rp. <input type="text" name="jumlahUang" required id="ktkPinjam">
            <br> <br>
            <input id="tmbl" type="submit" value="Selesai">
        </div>
    </form>
</div>
            
            

@endsection