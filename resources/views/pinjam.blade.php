@extends('master2')
@section('pojok_kanan')
<a href="{{url('logout')}}"><button style="background-color: white; width: 60px"  >Logout</button></a>
@endsection
@section('body')
<div class="kotakTf">
    <center><h1 style="font-size: 30px; font-family: sans-serif">Pinjaman</h1></center>
    <div id="formTarik">
    <form method="post" action="transaksi/pinjam">
    {{csrf_field()}}
                Pilih tempat pengambilan uang
                <div class="form-check">
                    <label class="form-check-label">
                       <input type="radio" class="form-check-input" value="Indomaret" name="pembayaran" checked>Indomaret
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                       <input type="radio" class="form-check-input" value="Alfamart" name="pembayaran">Alfamart
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                       <input type="radio" class="form-check-input" value="Koperasi" name="pembayaran">Koperasi
                    </label>
                </div>
            </div>
            <div class="posisi" id="formTarik">
                Nominal uang yang akan dipinjam <br>
                Rp. <input type="text" name="jumlahUang" required id="ktk" placeholder="@if($errors->any()) {{$errors->first()   }} @endif">
                <br> <br>
                <input id="tmbl" type="submit" value="Selesai" id="tmbl">
            </div>
    </form>
    </div>    
            
            

@endsection