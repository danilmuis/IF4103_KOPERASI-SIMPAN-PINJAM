@extends ('master')

@section('pojok_kanan')
<h3 class="fas fa-user" style="height: 40px; width: 40px; text-align: center; padding-top: 6px; color: lightblue; margin-right: 50px;border-radius: 100px; border: 4px solid lightblue"></h3>
@endsection
@section('body')
@if(session('login'))
  mdm tes

    {{session('login')}}

@endif
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

