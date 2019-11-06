@extends ('master')


@section('body')


<form method="POST" action="{{url('registrasi/create')}}">
    {{csrf_field()}}
        <div id="first_registrasi">
            <input type="text" class="ktkRegis" placeholder="Nama Lengkap" name="namaLengkap"><br>
            <input type="text" class="ktkRegis" placeholder="NIK" name="nik"><br>
            <input type="text" class="ktkRegis" placeholder="Alamat" name="alamat"><br>
            <input type="text" class="ktkRegis" placeholder="Tempat Lahir" name="tempat"><br>
            <input type="date" class="dateRegis" name="tanggal"><br>
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
