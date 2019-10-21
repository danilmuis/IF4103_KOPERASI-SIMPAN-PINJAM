<!DOCTYPE html>
<html lang="en">
<head>
        <title>Koperasi Simpan Pinjam</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        
<style>
    .nav1{
        background-color: navy
    }
    .nav2{
        background-color: lightblue
    }
    #ld button{
        border-radius: 3px;
        border: none;
    }
    .carousel-inner img {
        width: 100%;
        height: 100%;
    }
    #demo{
        width: 600px;
        margin: auto;
        position: fix;
        top: 0; left: 0; bottom: 0; right: 0;
        margin-top: 30px
    }
    .navbar-brand{
        font-size: 40px;
        
    }
    #bawah{
        height: 40px;
    }
    .navbar{
        padding-left: 100px
    }
    .dropdown-menu{
        background-color: lightblue;
        text-decoration: none
    }
    .ha li{
        padding-left: 50px;
        text-decoration: none;
        color: navy;
    }
    .ha li a{
        color: navy;
    }
    .ha li a:active{
        color: yellow;
    }
    .col-3{
        padding-left: 350px
    }
    .kotak{
        margin-top: 5px;
        margin-bottom: 5px;
        padding-top:5px;
        padding-bottom: 5px;
        background-color: white;
        width: 100%;
    }
    .kurs{
        background-color: white;
        display: inline-block;
        margin-left: 100px;
        padding-top: 30px;
        padding-bottom: 30px;
        border-radius: 10px;
        border: 2px solid lightblue;
        font-size: 20px;
        color: navy;
        font-family: garamond;
        align-items: center;
    }
    #kurs{
        padding: 50px 50px 70px 50px;
    }
    .foot{
        width 100px;
        display: inline-block;
        padding-top: 50px;
        padding-bottom: 30px;
        font-size: 14px;
        color: white;
        font-family: sans-serif;
        align-items: center;
    }/* */
    .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
        position: relative;
    }
    .avatar {
        width: 200px;
        height:200px;
        border-radius: 50%;
    }
    .modal {
        display:none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0,0,0,0.4);
    }
    .modal-content {
        background-color: #fefefe;
        margin: 4% auto 15% auto;
        border: 1px solid #888;
        width: 40%;
        padding-bottom: 30px;
    }
    .close {
        position: absolute;
        right: 25px;
        top: 0;
        color: #000;
        font-size: 35px;
        font-weight: bold;
    }
    .close:hover,.close:focus {
        color: red;
        cursor: pointer;
    }
    .animate {
        animation: zoom 0.6s
    }
    @keyframes zoom {
        from {transform: scale(0)}
        to {transform: scale(1)}
    }
    input[type=text], input[type=password] {
        width: 90%;
        padding: 12px 20px;
        margin: 8px 26px;
        display: inline-block;
        border-radius:42px;
        border:6px solid #29668f;
        box-sizing: border-box;
        font-size:16px;
    }
    .myButton {
        box-shadow: 0px 10px 14px -7px #276873;
        background:linear-gradient(to bottom, #00b7fa 5%, #00c5e3 100%);
        background-color:#00b7fa;
        border-radius:42px;
        border:6px solid #29668f;
        display:inline-block;
        cursor:pointer;
        color:#f5f5f5;
        font-family:Arial;
        font-size:21px;
        font-weight:bold;
        padding:10px 20px;
        margin: 8px 200px;
        text-decoration:none;
        text-shadow:0px 1px 0px #3d768a;
    }
    .myButton:hover {
        background:linear-gradient(to bottom, #00c5e3 5%, #00b7fa 100%);
        background-color:#00c5e3;
    }
    .myButton:active {
        position:relative;
        top:1px;
        
    }

      
/* This is
a multi-line
comment */
</style>
</head>
<body>
    <header>
              <nav class="navbar navbar-dark sticky-top nav1">
                <a class="navbar-brand" href="{{ url('/')}}"><img id="logo" src="../assets/logo1.png" style="height: 50px" alt=""></a>
                <div id="ld" style="float:right">
                    @yield('pojok_kanan')
                
                    
                </div>
              </nav>
              <nav id="bawah" class="bawah navbar navbar-expand-sm nav2 justify-content-end" style="padding-right:100px">
                    <ul class="navbar-nav ha">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item dropright">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                Transaksi
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Simpan</a>
                                <a class="dropdown-item" href="#">Pinjam</a>
                                <a class="dropdown-item" href="#">Transfer</a>
                                <a class="dropdown-item" href="#">Penarikan</a>
                                <a class="dropdown-item" href="#">Bayar Pinjaman</a>
                            </div>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#us">About Us</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#kontak" style="">Contact Us</a>
                      </li>
                    </ul>
                  </nav>
                </header>
 
	<!-- bagian konten blog -->
	@yield('body')
 
 
    @extends('footer')