@extends ('master')


@section('body')


<form method="POST" action="{{url('registrasi/create')}}">
    {{csrf_field()}}
        <div id="first_registrasi">
            <input type="text" placeholder="Nama Lengkap" name="namaLengkap">
            <input type="text" placeholder="NIK" name="nik">
            <input type="text" placeholder="Alamat" name="alamat">
            <input type="text" placeholder="Tempat Lahir" name="tempat">
            <input type="date" name="tanggal"><br>
            <input type="radio" name="agama" value="Islam">Islam    
            <input type="radio" name="agama" value="Kristen">Kristen<br>
            <input type="radio" name="agama" value="Katholik">Katholik
            <input type="radio" name="agama" value="Budha">Budha<br>
            <input type="radio" name="agama" value="Hindu">Hindu<br>
            <button id="next"> next
        </div>
        <div id="second_registrasi">
            <input type="text" placeholder="Username" name="uname">
            <input type="password" placeholder="Password" name="psw">
            <button type="submit">registrasi
        </div>
</form>   
    
@endsection
