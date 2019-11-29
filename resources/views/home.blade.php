@extends ('master2')

@section('pojok_kanan')
<a href="{{url('logout')}}"><button style="background-color: white; width: 60px"  >Logout</button></a>
@endsection
@section('body')
@if(count($data)==0)
<h1 style="position:relative;left:500px;color:black;">TRANSAKSI TIDAK DITEMUKAN</h1>

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
  <div style="float:right">{{$data->render()}}</div>
    @foreach($data as $x)
        
        <tr onclick="window.location='home/detail/{{$x->noTransaksi}}'">
        
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
            
            
        </tr>
        
    @endforeach
    

  </tbody>
</table>
@endif
                      <div class="container-fluid" style="background-color: navy;margin-top: 30px; margin-bottom: 100px">
                        <div id="kurs">
                            <div style="width:200px; margin-left: 50px" class="kurs">
                                <center style="padding-bottom: 20px">USD *</center>
                                <center style="padding-bottom: 20px">1.00</center>
                                <center>14,211.00</center>
                            </div>
                            <div style="width:200px" class="kurs">
                                <center style="padding-bottom: 20px">EUR *</center>
                                <center style="padding-bottom: 20px">1.00</center>
                                <center>15,681.84</center>
                            </div>
                            <div style="width:200px" class="kurs">
                                <center style="padding-bottom: 20px">CNY *</center>
                                <center style="padding-bottom: 20px">1.00</center>
                                <center>2,005.65</center>
                            </div>
                            <div class="kurs ket" style="height:200px;width: 200px;border:none;background:none;color:lightblue; overflow:block ">
                                Berikut adalah KURS beberapa Mata Uang saat ini <br>
                                <p style="font-size: 13px">* Sewaktu-waktu dapat berubah</p>
                            </div>
                        </div> 
                        <div style="background-color: lightblue; width: 100%; height: 20px; border: 2px solid white; border-bottom: none">

                        </div>   
                        
                      </div>
                      
    
@endsection

