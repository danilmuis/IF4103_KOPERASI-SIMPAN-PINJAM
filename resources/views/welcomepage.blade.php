@extends ('master')

@section('pojok_kanan')
<button style="background-color: white; width: 60px" onclick="document.getElementById('modal-wrapper').style.display='block'"  >Login</button>
    <a href=" {{action('anggotaController@registrasi')}}"><button style="background-color: navy; border: 1px solid white; color: white; width: 60px">Daftar</button></a>
    


    <div id="modal-wrapper" class="modal">

        <form class="modal-content animate" action="{{url('login')}}" method="post">

        <div class="imgcontainer">
            <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
            <img src="{{ url('assets/login.png')}}" alt="Avatar" class="avatar">
            
        </div>

        <div class="container" id="formLogin">
            {{csrf_field()}}
            <input style="margin-left: 100px" type="text" placeholder="Enter Username" name="username" class="ktkLogin">
            <input style="margin-left: 100px"  type="password" placeholder="Enter Password" name="password" class="ktkLogin"><br>
            <a href="registrasi" style="margin-left:180px">belum punya akun?</a>
            <button type="submit" class="myButton">Login</button>
        </div>

        </form>
    </div>
    
    <script>
    var modal = document.getElementById('modal-wrapper');
    window.onclick = function(event) {
        if (event.target == modal) {
        modal.style.display = "none";
        }
    }
    </script>
    
@endsection
@section('body')


@if(session('regis'))
  <marquee behavior="scroll" direction="left">
    <img src="{{url('assets/Smile-icon.png')}}" width="100" height="100"><br>
    {{session('regis')}}
  </marquee>
@endif

    <div class="hero-area">
        <div class="hero-slideshow owl-carousel">

            <!-- Single Slide -->
            <div class="single-slide bg-img">

                <div class="slide-bg-img bg-img bg-overlay" style="background-image: url(img/bg-img/1.jpg);"></div>
                <!-- Welcome Text -->
                <div class="container h-100">
                    <div class="row h-100 align-items-center justify-content-center">
                        <div class="col-12 col-lg-9">
                            <div class="welcome-text text-center">
                                <h6 data-animation="fadeInUp" data-delay="100ms">2 years interest</h6>
                                <h2 data-animation="fadeInUp" data-delay="300ms">get your <span>loan</span> now</h2>
                                <p data-animation="fadeInUp" data-delay="500ms">Vestibulum eu vehicula elit, nec elementum orci. Praesent aliquet ves tibulum tempus. Pellentesque posuere pharetra turpis, eget finibus erat porta placerat.</p>
                                <a href="#" class="btn credit-btn mt-50" data-animation="fadeInUp" data-delay="700ms">Discover</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide Duration Indicator -->
                <div class="slide-du-indicator"></div>
            </div>

            <!-- Single Slide -->
            <div class="single-slide bg-img">
                <!-- Background Image-->
                <div class="slide-bg-img bg-img bg-overlay" style="background-image: url(img/bg-img/5.jpg);"></div>
                <!-- Welcome Text -->
                <div class="container h-100">
                    <div class="row h-100 align-items-center justify-content-center">
                        <div class="col-12 col-lg-9">
                            <div class="welcome-text text-center">
                                <h6 data-animation="fadeInDown" data-delay="100ms">2 years interest</h6>
                                <h2 data-animation="fadeInDown" data-delay="300ms">get your <span>loan</span> now</h2>
                                <p data-animation="fadeInDown" data-delay="500ms">Vestibulum eu vehicula elit, nec elementum orci. Praesent aliquet ves tibulum tempus. Pellentesque posuere pharetra turpis, eget finibus erat porta placerat.</p>
                                <a href="#" class="btn credit-btn mt-50" data-animation="fadeInDown" data-delay="700ms">Discover</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide Duration Indicator -->
                <div class="slide-du-indicator"></div>
            </div>

            <!-- Single Slide -->
            <div class="single-slide bg-img">
                <!-- Background Image-->
                <div class="slide-bg-img bg-img bg-overlay" style="background-image: url(img/bg-img/1.jpg);"></div>
                <!-- Welcome Text -->
                <div class="container h-100">
                    <div class="row h-100 align-items-center justify-content-center">
                        <div class="col-12 col-lg-9">
                            <div class="welcome-text text-center">
                                <h6 data-animation="fadeInUp" data-delay="100ms">2 years interest</h6>
                                <h2 data-animation="fadeInUp" data-delay="300ms">get your <span>loan</span> now</h2>
                                <p data-animation="fadeInUp" data-delay="500ms">Vestibulum eu vehicula elit, nec elementum orci. Praesent aliquet ves tibulum tempus. Pellentesque posuere pharetra turpis, eget finibus erat porta placerat.</p>
                                <a href="#" class="btn credit-btn mt-50" data-animation="fadeInUp" data-delay="700ms">Discover</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide Duration Indicator -->
                <div class="slide-du-indicator"></div>
            </div>

            <!-- Single Slide -->
            <div class="single-slide bg-img">
                <!-- Background Image-->
                <div class="slide-bg-img bg-img bg-overlay" style="background-image: url(img/bg-img/5.jpg);"></div>
                <!-- Welcome Text -->
                <div class="container h-100">
                    <div class="row h-100 align-items-center justify-content-center">
                        <div class="col-12 col-lg-9">
                            <div class="welcome-text text-center">
                                <h6 data-animation="fadeInDown" data-delay="100ms">2 years interest</h6>
                                <h2 data-animation="fadeInDown" data-delay="300ms">get your <span>loan</span> now</h2>
                                <p data-animation="fadeInDown" data-delay="500ms">Vestibulum eu vehicula elit, nec elementum orci. Praesent aliquet ves tibulum tempus. Pellentesque posuere pharetra turpis, eget finibus erat porta placerat.</p>
                                <a href="#" class="btn credit-btn mt-50" data-animation="fadeInDown" data-delay="700ms">Discover</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide-du-indicator"></div>
            </div>

        </div>
    </div>

    <section class="features-area section-padding-100-0">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-features-area mb-100 wow fadeInUp" data-wow-delay="100ms">
                        <!-- Section Heading -->
                        <div class="section-heading">
                            <div class="line"></div>
                            <p>Take look at our</p>
                            <h2>Our Loans</h2>
                        </div>
                        <h6>In vitae nisi aliquam, scelerisque leo a, volutpat sem. Viva mus rutrum dui fermentum eros hendrerit.</h6>
                        <a href="#" class="btn credit-btn mt-50">Discover</a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-features-area mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <img src="img/bg-img/2.jpg" alt="">
                        <h5>We take care of you</h5>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-features-area mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <img src="img/bg-img/3.jpg" alt="">
                        <h5>No documents needed</h5>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-features-area mb-100 wow fadeInUp" data-wow-delay="700ms">
                        <img src="img/bg-img/4.jpg" alt="">
                        <h5>Fast &amp; easy loans</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-area d-flex flex-wrap">
        <!-- Cta Thumbnail -->
        <div class="cta-thumbnail bg-img jarallax" style="background-image: url(img/bg-img/5.jpg);"></div>

        <!-- Cta Content -->
        <div class="cta-content">
            <!-- Section Heading -->
            <div class="section-heading white">
                <div class="line"></div>
                <p>Bold desing and beyound</p>
                <h2>Helping small businesses like yours</h2>
            </div>
            <h6>Morbi ut dapibus dui. Sed ut iaculis elit, quis varius mauris. Integer ut ultricies orci, lobortis egestas sem. Duis non volutpat arcu, eu mollis tellus. Sed finibus aliquam neque sit amet sod ales. Maecenas sed magna tempor, efficitur maur is in, sollicitudin augue. Praesent pretium finibus quam.</h6>
            <div class="d-flex flex-wrap mt-50">
                <!-- Single Skills Area -->
                <div class="single-skils-area mb-70 mr-5">
                    <div id="circle" class="circle" data-value="0.90">
                        <div class="skills-text">
                            <span>90%</span>
                        </div>
                    </div>
                    <p>Energy</p>
                </div>

                <!-- Single Skills Area -->
                <div class="single-skils-area mb-70 mr-5">
                    <div id="circle2" class="circle" data-value="0.75">
                        <div class="skills-text">
                            <span>75%</span>
                        </div>
                    </div>
                    <p>power</p>
                </div>

                <!-- Single Skills Area -->
                <div class="single-skils-area mb-70">
                    <div id="circle3" class="circle" data-value="0.97">
                        <div class="skills-text">
                            <span>97%</span>
                        </div>
                    </div>
                    <p>resource</p>
                </div>
            </div>
            <a href="#" class="btn credit-btn box-shadow btn-2">Read More</a>
        </div>
    </section>

    <section class="cta-2-area wow fadeInUp" data-wow-delay="100ms">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Cta Content -->
                    <div class="cta-content d-flex flex-wrap align-items-center justify-content-between">
                        <div class="cta-text">
                            <h4>Are you in need for a load? Get in touch with us.</h4>
                        </div>
                        <div class="cta-btn">
                            <a href="#" class="btn credit-btn box-shadow">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mb-100 wow fadeInUp" data-wow-delay="100ms">
                        <div class="line"></div>
                        <p>Take look at our</p>
                        <h2>Our services</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-service-area d-flex mb-100 wow fadeInUp" data-wow-delay="200ms">
                        <div class="icon">
                            <i class="icon-profits"></i>
                        </div>
                        <div class="text">
                            <h5>All the loans</h5>
                            <p>Morbi ut dapibus dui. Sed ut iaculis elit, quis varius mauris. Integer ut ultricies orci, lobortis egestas sem.</p>
                        </div>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-service-area d-flex mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <div class="icon">
                            <i class="icon-money-1"></i>
                        </div>
                        <div class="text">
                            <h5>Easy and fast answer</h5>
                            <p>Morbi ut dapibus dui. Sed ut iaculis elit, quis varius mauris. Integer ut ultricies orci, lobortis egestas sem.</p>
                        </div>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-service-area d-flex mb-100 wow fadeInUp" data-wow-delay="400ms">
                        <div class="icon">
                            <i class="icon-coin"></i>
                        </div>
                        <div class="text">
                            <h5>No additional papers</h5>
                            <p>Morbi ut dapibus dui. Sed ut iaculis elit, quis varius mauris. Integer ut ultricies orci, lobortis egestas sem.</p>
                        </div>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-service-area d-flex mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <div class="icon">
                            <i class="icon-smartphone-1"></i>
                        </div>
                        <div class="text">
                            <h5>Secure financial services</h5>
                            <p>Morbi ut dapibus dui. Sed ut iaculis elit, quis varius mauris. Integer ut ultricies orci, lobortis egestas sem.</p>
                        </div>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-service-area d-flex mb-100 wow fadeInUp" data-wow-delay="600ms">
                        <div class="icon">
                            <i class="icon-diamond"></i>
                        </div>
                        <div class="text">
                            <h5>Good investments</h5>
                            <p>Morbi ut dapibus dui. Sed ut iaculis elit, quis varius mauris. Integer ut ultricies orci, lobortis egestas sem.</p>
                        </div>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-service-area d-flex mb-100 wow fadeInUp" data-wow-delay="700ms">
                        <div class="icon">
                            <i class="icon-piggy-bank"></i>
                        </div>
                        <div class="text">
                            <h5>Accumulation goals</h5>
                            <p>Morbi ut dapibus dui. Sed ut iaculis elit, quis varius mauris. Integer ut ultricies orci, lobortis egestas sem.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="miscellaneous-area bg-gray section-padding-100-0">
        <div class="container">
            <div class="row align-items-end justify-content-center">
                <!-- Add Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="add-area mb-100 wow fadeInUp" data-wow-delay="100ms">
                        <a href="#"><img src="img/bg-img/add.png" alt=""></a>
                    </div>
                </div>

                <!-- Contact Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="contact--area mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <!-- Section Heading -->
                        <div class="section-heading mb-50">
                            <div class="line"></div>
                            <h2>Get in touch</h2>
                        </div>
                        <!-- Contact Content -->
                        <div class="contact-content">
                            <!-- Single Contact Content -->
                            <div class="single-contact-content d-flex align-items-center">
                                <div class="icon">
                                    <img src="img/core-img/location.png" alt="">
                                </div>
                                <div class="text">
                                    <p>3007 Sarah Drive <br> Franklin, LA 70538</p>
                                </div>
                            </div>
                            <!-- Single Contact Content -->
                            <div class="single-contact-content d-flex align-items-center">
                                <div class="icon">
                                    <img src="img/core-img/call.png" alt="">
                                </div>
                                <div class="text">
                                    <p>337-413-9538</p>
                                    <span>mon-fri , 08.am - 17.pm</span>
                                </div>
                            </div>
                            <!-- Single Contact Content -->
                            <div class="single-contact-content d-flex align-items-center">
                                <div class="icon">
                                    <img src="img/core-img/message2.png" alt="">
                                </div>
                                <div class="text">
                                    <p>contact@yourbusiness.com</p>
                                    <span>we reply in 24 hrs</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- News Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="news--area mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <!-- Section Heading -->
                        <div class="section-heading mb-50">
                            <div class="line"></div>
                            <h2>The news</h2>
                        </div>

                        <!-- Single News Area -->
                        <div class="single-news-area d-flex align-items-center">
                            <div class="news-thumbnail">
                                <img src="img/bg-img/10.jpg" alt="">
                            </div>
                            <div class="news-content">
                                <span>July 18, 2018</span>
                                <a href="#">How to get the best loan online</a>
                                <div class="news-meta">
                                    <a href="#" class="post-author"><img src="img/core-img/pencil.png" alt=""> Jane Smith</a>
                                    <a href="#" class="post-date"><img src="img/core-img/calendar.png" alt=""> April 26</a>
                                </div>
                            </div>
                        </div>

                        <div class="single-news-area d-flex align-items-center">
                            <div class="news-thumbnail">
                                <img src="img/bg-img/11.jpg" alt="">
                            </div>
                            <div class="news-content">
                                <span>July 18, 2018</span>
                                <a href="#">A new way to finance your dream home</a>
                                <div class="news-meta">
                                    <a href="#" class="post-author"><img src="img/core-img/pencil.png" alt=""> Jane Smith</a>
                                    <a href="#" class="post-date"><img src="img/core-img/calendar.png" alt=""> April 26</a>
                                </div>
                            </div>
                        </div>

                        <div class="single-news-area d-flex align-items-center">
                            <div class="news-thumbnail">
                                <img src="img/bg-img/12.jpg" alt="">
                            </div>
                            <div class="news-content">
                                <span>July 18, 2018</span>
                                <a href="#">10 tips to get the best loan for you</a>
                                <div class="news-meta">
                                    <a href="#" class="post-author"><img src="img/core-img/pencil.png" alt=""> Jane Smith</a>
                                    <a href="#" class="post-date"><img src="img/core-img/calendar.png" alt=""> April 26</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>    
@endsection

