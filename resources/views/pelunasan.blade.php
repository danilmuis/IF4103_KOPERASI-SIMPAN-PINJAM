@extends('master')
@section('pojok_kanan')
    {{Session::get('account')}}
@endsection
@section('body')
<div class="kotakTf">
    <center><h1 style="font-size: 30px; font-family: sans-serif">Penarikan</h1></center>
    <div id="formTarik">
    <form method="post" action="transaksi/lunas">
    {{csrf_field()}}
                Pilih tata cara pengambilan
                <div class="form-check">
                    <label class="form-check-label">
                       <input type="radio" class="form-check-input" name="pembayaran">Indomart
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                       <input type="radio" class="form-check-input" name="pembayaran">Alfamart
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                       <input type="radio" class="form-check-input" name="pembayaran">Koperasi
                    </label>
                </div>
            </div>
            <div class="posisi" id="formBayar">
                Nominal uang yang akan ditarik <br>
                Rp. <input type="text" name="jumlahUang" required id="ktk">
                <br> <br>
                <input id="tmbl" type="submit" value="Selesai" id="tmbl">
            </div>
    </form>
    </div>    
@endsection