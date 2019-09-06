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
/* This is
a multi-line
comment */
</style>
</head>
<body>
              <nav class="navbar navbar-dark sticky-top nav1">
                <a class="navbar-brand" href="#"><img src="logo1.png" style="height: 50px" alt=""></a>
                <div id="ld" style="float:right">
                    @yield('pojokkanan')
                </div>
              </nav>
              <nav id="bawah" class="navbar navbar-expand-sm nav2">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                Transaksi
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Simpan</a>
                                <a class="dropdown-item" href="#">Pinjam</a>
                                <a class="dropdown-item" href="#">Transfer</a>
                                <a class="dropdown-item" href="#">Tarik</a>
                                <a class="dropdown-item" href="#">Bayar Pinjaman</a>
                            </div>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                      </li>
                    </ul>
                  </nav>
 
	<!-- bagian konten blog -->
	@yield('body')
 
    <h1>footer ni dek </h1>
    </body>
</html>