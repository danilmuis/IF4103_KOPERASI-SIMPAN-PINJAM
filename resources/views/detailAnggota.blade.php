@extends('masterAdmin')

@section('pojok_kanan')
<a href="{{url('logout')}}"><button style="background-color: white; width: 60px"  >Logout</button></a>
@endsection

@section('body')
<div class="container">
    <h1>PROFILE ANGGOTA</h1>
  	<hr>
	<div class="row">
   
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        <div class="alert alert-info alert-dismissable">
          <a class="panel-close close" data-dismiss="alert">×</a> 
          <i class="fa fa-coffee"></i>
          This is an <strong>.alert</strong>. Use this to show important messages to the user.
        </div>
        <form class="form-horizontal" role="form">
          <div class="form-group">
            <label class="col-lg-3 control-label">NIK:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="{{$data->NIK}}" readonly>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Nama Lengkap:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="{{$data->namaLengkap}}" readonly>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Id Anggota</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="{{$data->idAnggota}}" readonly>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Username</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="{{$data->username}}" readonly>
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-lg-3 control-label">Debit</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="{{$data->debit}}" readonly>
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-lg-3 control-label">Kredit</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="{{$data->kredit}}" readonly>
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-md-3 control-label">TTL</label>
            <div class="col-md-8">
              <input class="form-control" type="text" value="{{$data->TTL}}" readonly>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">alamat</label>
            <div class="col-md-8">
              <input class="form-control" type="text" value="{{$data->alamat}}"readonly>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Agama</label>
            <div class="col-md-8">
              <input class="form-control" type="text" value="{{$data->agama}}" readonly>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <a href = "../riwayat/{{$data->idAnggota}}"><input type="button" class="btn btn-primary" value="Riwayat Transaksi"></a>
              
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
<hr>
        
@endsection