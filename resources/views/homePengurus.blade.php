@extends('master')

@section('pojok_kanan')
<a href="{{url('logout')}}"><button style="background-color: white; width: 60px"  >Logout</button></a>
@endsection

@section ('body')
<table class="table table-hover table-info">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nama Lengkap</th>
      <th scope="col">Username</th>
      <th scope="col">Kredit</th>
      <th scope="col">Debit</th>
    </tr>
  </thead>
  <tbody>
    @foreach($data as $x)
        <tr>
            <th scope="row">{{$x->idAnggota}}</th>
            <td>{{$x->namaLengkap}}</td>
            <td>{{$x->username}}</td>
            <td>{{$x->kredit}}</td>
            <td>{{$x->debit}}</td>
        </tr>
    @endforeach
    
  </tbody>
</table>

@endsection