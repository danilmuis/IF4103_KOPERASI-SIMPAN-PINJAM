@extends ('master')


@section('body')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if(session('alert'))
    {{session('alert')}}
@endif
<form method="POST" action="{{url('registrasi/create')}}">
    {{csrf_field()}}
        <div id="first_registrasi">
            <input id="reg1" type="text" class="ktkRegis" placeholder="Nama Lengkap" name="namaLengkap">@error('namaLengkap')<h7 id="error"> {{$message}}</h7> @enderror<br>
            <input id="reg2"  type="text" class="ktkRegis" placeholder="NIK" name="nik">@error('nik')<h7 id="error"> {{$message}}</h7> @enderror<br>
            <input id="reg3"  type="text" class="ktkRegis" placeholder="Alamat" name="alamat">@error('alamat') <h7 id="error"> {{$message}} </h7> @enderror<br>
            <input id="reg4"  type="text" class="ktkRegis" placeholder="Tempat Lahir" name="tempat">@error('tempat') <h7 id="error"> {{$message}} </h7> @enderror<br>
            <div id="dalam">
                <input id="reg5" type="date" class="dateRegis" name="tanggal" required><br><br>
                <input class="reg6" type="radio" name="agama" value="Islam" checked>Islam    
                <input class="reg6" type="radio" name="agama" value="Kristen">Kristen
                <input class="reg6" type="radio" name="agama" value="Katholik">Katholik
                <input class="reg6" type="radio" name="agama" value="Budha">Budha
                <input class="reg6" type="radio" name="agama" value="Hindu">Hindu <br><br>
               
            </div>
        </div>
        <div id="second_registrasi">
            <input type="text" placeholder="Username" name="username" required>@error('uname') <h7 id="error"> {{$message}} </h7> @enderror<br>
            <span style="margin-left:30px; color:red"> *username harus minimal 4 karakter</span> <br>
            <input type="password" placeholder="Password" name="psw" required>@error('psw') <h7 id="error"> {{$message}} </h7> @enderror<br>
            <input type="password" placeholder="Re-Enter Password" name="psw2" required><br><br>
            <input id="reg" type="submit" style="margin-left:50px" value="registrasi">
        </div>
</form>   
<div id="porm">
    <button id="next" style="margin-right:200px"> next</button>
</div>



    
@endsection
