@extends('master2')
@section('pojok_kanan')
<a href="{{url('logout')}}"><button style="background-color: white; width: 60px"  >Logout</button></a>
@endsection
@section('body')
<div class="kotakTf">
    <center><h1 style="font-size: 30px; font-family: sans-serif">Pelunasan</h1></center>
    <div id="formTarik">
    <form method="post" action="transaksi/lunas">
    {{csrf_field()}}
                           </div>
            <div class="posisi" id="formBayar">
                Nominal uang yang akan ditarik <br>
                Rp. <input type="text" name="jumlahUang" required id="ktk" placeholder="@if($errors->any()) {{$errors->first()   }} @endif">
                <br> <br>
                
                <input id="tmbl" type="submit" value="Selesai" id="tmbl">
            </div>
    </form>
    </div>    
@endsection