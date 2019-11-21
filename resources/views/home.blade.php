@extends ('master')

@section('pojok_kanan')
<a href="{{url('logout')}}"><button style="background-color: white; width: 60px"  >Logout</button></a>
@endsection
@section('body')
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
    
    @foreach($data as $x)
        
        <tr onclick="window.location='home/detail/{{$x->noTransaksi}}'">
        
            <th scope="row">{{$x->noTransaksi}}</th>
            
            <td>{{$x->jumlahUang}}</td>
            <td>{{$x->jenisTransaksi}}</td>
            <td>{{$x->waktuTransaksi}}</td>
            
        </tr>
        
    @endforeach

  </tbody>
</table>
<div id="demo" class="carousel slide" data-ride="carousel">
                        <ul class="carousel-indicators">
                          <li data-target="#demo" data-slide-to="0" class="active"></li>
                          <li data-target="#demo" data-slide-to="1"></li>
                          <li data-target="#demo" data-slide-to="2"></li>
                        </ul>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="a.jpg" alt="Los Angeles" width="1100" height="500">
                          </div>
                          <div class="carousel-item">
                            <img src="b.jpg" alt="Chicago" width="1100" height="500">  
                          </div>
                          <div class="carousel-item">
                            <img src="a.jpg" alt="New York" width="1100" height="500">   
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                          <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next">
                          <span class="carousel-control-next-icon"></span>
                        </a>
                      </div>
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

