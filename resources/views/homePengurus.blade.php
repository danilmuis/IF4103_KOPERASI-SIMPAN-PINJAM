@extends('master')

@section('pojok_kanan')
<a href="{{url('logout')}}"><button style="background-color: white; width: 60px"  >Logout</button></a>
@endsection

@section ('body')
<table class="table table-hover table-info">
  <thead>
    <tr >
      <th scope="col">Id Anggota</th>
      <th scope="col">Nama Lengkap</th>
      
    </tr>
  </thead>
  <tbody>
  
    @foreach($data as $x)
        <tr onclick="window.location='homePengurus/detail/{{$x->NIK}}'">
            <th scope="row">{{$x->idAnggota}}</th>
            <td>{{$x->namaLengkap}}</td>
            
            
        </tr>
    @endforeach
    
  </tbody>
</table>

@endsection