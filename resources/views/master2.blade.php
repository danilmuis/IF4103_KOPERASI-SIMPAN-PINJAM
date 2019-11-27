<!DOCTYPE html>
<html lang="en">
<head>
        <link rel="shortcut icon" href="http://localhost/IF4103_KOPERASI-SIMPAN-PINJAM/public/assets/logo.png=">
        <title>Koperasi Simpan Pinjam</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="jquery-2.1.4.js"></script>
<style>
    #error{
        color:red;
    }
    a:hover{
        text-decoration:none;
    }
    .nav1{
        background-color: navy
    }
    .nav2{
        background-color: lightblue
    }

    #koperas {
        position:absolute;
        top:15px;
        left:100px;
    }
    #ld button{
        position:absolute;
        top:30px;
        left:1385px;
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
        padding-left: 100pxz
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
 /** NAVIGATION HOME */
 @import url(http://pablogarciafernandez.com/css/reset.css);

/* Typography
------------------------------------- */
@charset "UTF-8";
@import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,700);

body {
	  font-family: 'Open Sans', sans-serif;
	  font-size: 1em;
	  font-weight: 300;	
	  font-style: normal;
	  word-spacing: normal;
	  letter-spacing: normal;
	  text-rendering: optimizeLegibility;
	  line-height: 1.8em;
	  color:#717171;
      padding:0px;
}

h1 {
	  font-size: 2em;
  	font-weight: 300;
	  line-height: 4em;
  	text-transform: uppercase;
  	color: #BDBDBD;
}
h2 {
	  font-size: 1.4em;
  	font-weight: 400;
	  line-height: 1em;
}

p {
  font-size: 1.16em;
  line-height: 4em;
}

p svg {
  display: inline-block;
  vertical-align: middle;
}

a {
	  font-size: 1em;
	  font-weight: 400;
	  line-height: 100%;
	  color: #3A53BD;
}
a:hover { text-decoration: none; }

a[href$="http://pablogarciafernandez.com"] {
	font-size: 1em;
	font-weight: 700;
	letter-spacing: -0.04em;
	text-decoration: none;
	text-transform: uppercase;
	color: #575757;
	margin: 1.4em 0 1.4em;
	display: inline;
}

	/* ----------- CodePen styles ----------- */
	.codepen-style {
		padding: 2em 0 0 0;

	}

		.codepen-style h1 {
			  font-family: 'Open Sans', sans-serif;
			  font-size:3em; 
			  font-weight: 300;
			  color:#000;
			  line-height:1.8em;
			  text-transform: none;
		}

		.codepen-style h1 span {
			  font-style: italic;
			  font-weight: 700;
			  text-transform: none;
			  color: red;
		}

		.codepen-style h2 {
			  font-weight: 300;
			  text-transform: none;
		}

		.codepen-style h2 a {
		  	font-weight: 700;
		}
/* ----------- End CodePen styles ----------- */


/* Structure MOBILE FIRST
------------------------------------- */

body {
  background: #f1f1f1;
  padding: 1em 8% 10em;
}

	/* Navigation
	----------------- */
	
	.navigation {
	  height: auto;
		 width: 100%;
		 display: block;
    box-shadow: #D4D4D4 -1px 1px, #D4D4D4 -2px 2px, #D4D4D4 -3px 3px, #D4D4D4 -4px 4px, #D4D4D4 -5px 5px, #D4D4D4 -6px 6px;
    transform: translate3d(4px, 0px, 0);
    background-color: #D4D4D4;
	}

	.navigation li { width: 100%; }

	.navigation a {
		  display: block;
		  padding: 0.5em 0 0.5em 1em;
		  margin: 0;
		  line-height: 2em;
		  font-weight: 400;
		  color: #333;
		  text-transform: uppercase;
	}
	.navigation a:hover {
		  background-color: #666;
		  color: #333;
     box-shadow: -1px 1px, -2px 2px, -3px 3px, -4px 4px;
      transform: translate3d(4px, -4px, 0);
      transition: .15s;
	}

.navigation a > span:after {
  content: " /";
  padding-left: 0.2em;
}

	.navigation li:nth-child(1) a { background-color: #00FF96 ; }
	.navigation li:nth-child(2) a { background-color: #FF6524 ; }
	.navigation li:nth-child(3) a { background-color: #FFA300 ; }
	.navigation li:nth-child(4) a { background-color: #FFCD00 ; }
	.navigation li:nth-child(5) a { background-color: #F2F600 ; }

	.navigation li:nth-child(1) a:hover,
	.navigation li:nth-child(2) a:hover,
	.navigation li:nth-child(3) a:hover,
	.navigation li:nth-child(4) a:hover,
	.navigation li:nth-child(5) a:hover { background-color: #666; }

	.navigation svg {
		  width: 30px;
		  height: 1.5em;
		  vertical-align: text-top;
	}
	svg {
		  opacity:1;
		  fill-opacity:1;
		  fill-rule:nonzero;
		  vertical-align: top;
		  fill: #333;
	}

	.navigation a:hover svg { fill: #333; }

	.navigation span{
		  display: inline-block;
		  padding-left: 0.5em;
	}

	/* END Navigation 
	----------------- */


/* Structure DESKTOP
------------------------------------- */
@media only screen and (min-width: 1024px) {

	body { padding: 2em 0 0 4em; }

	header, article, section, footer {
	  margin: 0 auto;
	  
	  width: auto;
	  display: block;
	}

	header { padding-top: 0; }

	/* Navigation
	----------------- */

	.navigation {
	    transition-delay: 0s;
	    transition-duration: 0.4s;
	    transition-property: all;
	    transition-timing-function: line;
    
    box-shadow: 0 0;
    transform: translate3d(0px, 0px, 0);
	}

	.navigation a:hover {
	    transition-delay: 0s;
	    transition-duration: 0.2s;
	    transition-property: all;
	    transition-timing-function: line;
    
    box-shadow: #303030 -1px 1px, #333 -2px 2px, #2E2E2E -3px 3px, #2B2B2B -4px 4px, #292929 -5px 5px, #262626 -6px 6px;
    transform: translate3d(6px, 0px, 0);
	}

	.navigation {
		  position: fixed;
	  	left: 0;
		  top: 0;
		  bottom: 0;
		  height: 100%;
		  width: 4em;
		  background-color: #333;
	}
	.navigation:hover {
		  position: fixed;
	    width: 10em;
	}

	.navigation ul { display: block; }

	.navigation li { display: block; }

	.navigation a {
		  padding: 0.8em 0.6em 0.8em 1em;
		  color: #F1F1F1;
		  border-bottom: 1px solid transparent;
		  border-top: 1px solid transparent;
	}

	.navigation li:nth-child(1) a,
	.navigation li:nth-child(2) a,
	.navigation li:nth-child(3) a,
	.navigation li:nth-child(4) a,
	.navigation li:nth-child(5) a { background-color: transparent; }
	.navigation a:hover {
		  display: inline-block;
		  padding: 0 0 0 1em;
		  margin: 0;
		  line-height: 2em;
		  font-weight: 400;
	  	width: 6em; 
	}

	.navigation:hover a {
		  display: inline-block;
		  width: 9em;
		  padding: 0.8em 0 0.8em 1em;
	}
	.navigation span { text-indent: -200px; }

  .navigation:hover span {
		  display: inline-block;
		  text-indent: 0;
	}
	.active { background-color: #F1F1F1; }
  
.navigation a > span:after { color: #666; }
.navigation a:hover > span:after { color: #333; }

	.navigation svg {
		  width: 30px;
		  height: 2em;
		  vertical-align: top;
	}

	.navigation svg:hover { fill: #333; }

	.home { fill: #00FF96; }
	.about { fill: #FF6524; }
	.work { fill: #FFA300; }
	.lab { fill: #FFCD00; }
	.contact { fill: #F2F600; }

	/* Menu position on the navigation bar */
	.menu {
		  left: 0;
		  position: fixed;
          padding-left:0;
		  height: auto;
		  width: auto;
	}
	.menu { top: 0; }
	/* END Menu position on the navigation bar */
	

	/* ----------------- 
		End Navigation */

}

 /* Structure DESKTOP when is 1920px height or more
------------------------------------- */
@media only screen and (min-height: 1920px){
	.navigation:hover { width: 8.592em; }
	.navigation a {
		  font-size: 0.9em;
		  padding: 0.8em 0.8259em 0.8em 1em;
	}

}
/**END NEW NAVIGATION */

.kotakSimpan{
        border-width: 10px;
        margin:20px 20px 20px 20px;
        margin:auto;
        padding:30px;
        width:400px;
        
        justify-content: center;
    }
    
    #formSimpan{
        margin: 30px 30px 30px 30px;
    }
    #formSimpan #ktk{
        width: 300px;
        border: none;
        border-bottom: 1px solid lightblue
    }
    #formSimpan #tmbl{
        width: 100px;
        height: 30px;
        border: none;
        float: right;
        background-color: lightblue;
        border-radius: 7px;
        border-radius: 5px;
        font-family: sans-serif;
    }
    #tmbl:hover{
        text-decoration-style: solid
    }
    .kotakPinjam{
        border-width: 10px;
        margin:20px 20px 20px 20px;
        margin:auto;
        padding:30px;
        width:400px;
        
        justify-content: center;
    }
    #formPinjam{
        margin: 30px 30px 30px 30px;
    }
    #formPinjam #ktkPinjam{
        width: 300px;
        border: none;
        border-bottom: 1px solid lightblue
    }
    #formPinjam #tmbl{
        width: 100px;
        height: 30px;
        border: none;
        float: right;
        background-color: lightblue;
        border-radius: 7px;
        border-radius: 5px;
        font-family: sans-serif;
    }
    .kotakTf{
        border-width: 10px;
        margin:20px 20px 20px 20px;
        margin:auto;
        padding:30px;
        width:400px;
    }
    .formTf {
        margin: 30px 30px 30px 30px;
        background-color: white
    }
    .formTf .ktkTf{
        width: 300px;
        border: none;
        border-bottom: 1px solid lightblue
    }
    .formTf #tmbl{
        width: 100px;
        height: 30px;
        border: none;
        float: right;
        background-color: lightblue;
        border-radius: 7px;
        border-radius: 5px;
        font-family: sans-serif;
    }
    #formTarik{
        margin: 30px 30px 30px 30px;
    }
    #formTarik #ktk{
        width: 300px;
        border: none;
        border-bottom: 1px solid lightblue
    }
    #formTarik #tmbl{
        width: 100px;
        height: 30px;
        border: none;
        float: right;
        background-color: lightblue;
        border-radius: 7px;
        border-radius: 5px;
        font-family: sans-serif;
    }
    #formBayar{
        margin: 30px 30px 30px 30px;
    }
    #formBayar #ktk{
        width: 300px;
        border: none;
        border-bottom: 1px solid lightblue
    }
    #formBayar #tmbl{
        width: 100px;
        height: 30px;
        border: none;
        float: right;
        background-color: lightblue;
        border-radius: 7px;
        border-radius: 5px;
        font-family: sans-serif;
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
    
    .bukti{
        border-width: 10px;
        margin:20px 20px 20px 20px;
        margin:auto;
        padding:30px;
        width:400px;
        
        justify-content: center;
    }
    .buktiTransaksi {
        -webkit-box-sizing: content-box;
        -moz-box-sizing: content-box;
        box-sizing: content-box;
        width: 533px;
        height: 330px;
        padding:30px;
        margin: 109px 309px 109px 509px;
        border: 4px solid rgba(93,178,234,0.91);
        -webkit-border-radius: 17px;
        border-radius: 17px;
        font: normal 20px/1 Impact, Charcoal, sans-serif;
        color: rgba(255,255,255,1);
        text-align: center;
        -o-text-overflow: ellipsis;
        text-overflow: ellipsis;
        color:black;
    }

    </style>
</head>
<body style="padding-top:0px;">
@if(session('alert'))
    <script>
      alert('{{session('alert')}}');
    </script>
@endif
    <header>
    @php
    if(Session::get('login'))
    {
        $x="/home";
    }else{
        $x="";
    }
    @endphp            
            <nav class="navbar navbar-dark sticky-top nav1" style="height: 87px; z-index:-1;">
            </nav>
            <nav id="bawah" class="bawah navbar navbar-expand-sm nav2 justify-content-end" style="padding-right:100px">
                    <ul class="navbar-nav ha">
                        <li class="nav-item">
                            
                            
                            <a class="nav-link" href="{{ url('')}}{{$x}}">Home</a>
                        </li>
                        <li class="nav-item dropright">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                Transaksi
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{url('home/simpanan')}}">Simpan</a>
                                @if(Session::get('account')->kredit > 0)
                                <a class="dropdown-item" href="{{url('home/pelunasan')}}">Bayar Pinjaman</a>
                                @else
                                <a class="dropdown-item" href="{{url('home/pinjaman')}}">Pinjam</a>
                                @endif
                                <a class="dropdown-item" href="{{url('home/transferan')}}">Transfer</a>
                                <a class="dropdown-item" href="{{url('home/penarikan')}}">Penarikan</a>
                                
                                
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
                
            <div id="ld" style="float:right">
                    @yield('pojok_kanan')
                    
                    
            </div>   
            <div id=koperas>
            <a class="navbar-brand" href="{{ url('/')}}{{$x}}" ><img id="logo" src="{{ url('assets/logo1.png')}}"  style="height: 50px"alt=""></a>
            </div>           
            <nav class="navigation">

                <ul class="menu"><br><br><br><li><a class="active" href="#"><img src="{{url('assets/username.png')}}" width="30px" height="30px"><span title="Username">{{Session::get('account')->username}}</span></a></li>
                <li><a href="#"><img src="{{url('assets/id.png')}}" width="30px" height="30px"><span title="ID Anggota">{{Session::get('account')->idAnggota}}</span></a></li>
                <li><a href="#"><img src="{{url('assets/balance.png')}}" width="30px" height="30px"><span title="Debit">Rp. {{Session::get('account')->debit}}</span></a></li>
                <li><a href="#"><img src="{{url('assets/debt.png')}}" width="30px" height="30px"><span title="Kredit">Rp. {{Session::get('account')->kredit}}</span></a></li>
                
            </nav>

</header>
                @if(session('login'))
  {{Session::get('account')}}   
@endif

	<!-- bagian konten blog -->
	@yield('body')
 
 
    @extends('footer')