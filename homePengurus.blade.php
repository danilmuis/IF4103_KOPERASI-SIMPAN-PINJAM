@extends('master')

@section('pojok_kanan')
<a href="logout"><h3 class="fas fa-user" style="height: 40px; width: 40px; text-align: center; padding-top: 6px; color: lightblue; margin-right: 50px;border-radius: 100px; border: 4px solid lightblue"></h3></a>
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