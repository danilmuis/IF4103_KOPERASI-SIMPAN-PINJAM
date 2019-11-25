@extends('master2')
@section('pojok_kanan')
<a href="{{url('logout')}}"><button style="background-color: white; width: 60px"  >Logout</button></a>
@endsection
@section('body')
<div class="kotakPinjam">
    <center><h1 style="font-size: 30px; font-family: sans-serif">Pinjam</h1></center>
    <form method="post" action="transaksi/pinjam">
        {{csrf_field()}}
        <div class="posisi" id="formPinjam">
            Nominal uang yang akan dipinjam <br>
            Rp. <input type="text" name="jumlahUang" required id="ktkPinjam" placeholder="@if($errors->any()) {{$errors->first()   }} @endif">
            <br> <br>
            <input id="tmbl" type="submit" value="Selesai" >
        </div>
    </form>
</div>
            
            

@endsection