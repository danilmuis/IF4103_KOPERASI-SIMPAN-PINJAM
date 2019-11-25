@extends('master2')
@section('pojok_kanan')
<a href="{{url('logout')}}"><button style="background-color: white; width: 60px"  >Logout</button></a>
@endsection
@section('body')
<div class="kotakTf">
    <center><h1 style="font-size: 30px; font-family: sans-serif">Transfer</h1></center>
    <form method="post" action="transaksi/transfer">
        {{csrf_field()}}
    
        <div style="margin-bottom: 50px" class="formTf">
            Masukkan nomor ID tujuan : <br>
            <input style="width: 320px" type="text" name="tujuan" required class="ktkTf"placeholder="@if($errors->any()) {{$errors->first()   }} @endif">
            <br> <br>
            <input type="submit" value="Lanjut" id="tmbl">
        </div>            
        <div style="margin-bottom: 50px" class="formTf">
            Nominal uang yang akan disimpan <br>
            Rp. <input type="text" name="jumlahUang" required class="ktkTf"placeholder="@if($errors->any()) {{$errors->first()   }} @endif">
            <br> <br>
            <input type="submit" value="Selesai" id="tmbl">
        </div>
    </form>
</div>
            
            

@endsection