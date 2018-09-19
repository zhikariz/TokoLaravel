<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
  <!-- Mobile Specific Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Favicon-->
  <link rel="shortcut icon" href="user/img/fav.png">
  <!-- Author Meta -->
  <meta name="author" content="codepixer">
  <!-- Meta Description -->
  <meta name="description" content="">
  <!-- Meta Keyword -->
  <meta name="keywords" content="">
  <!-- meta character set -->
  <meta charset="UTF-8">
  <!-- Site Title -->
  <title>Tokoku</title>

  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
    CSS
    ============================================= -->

    <link rel="stylesheet" href="{{ URL::asset('user/css/linearicons.css')}}      ">
    <link rel="stylesheet" href="{{ URL::asset('user/css/font-awesome.min.css')}} ">
    <link rel="stylesheet" href="{{ URL::asset('user/css/bootstrap.css')}}        ">
    <link rel="stylesheet" href="{{ URL::asset('user/css/magnific-popup.css')}}   ">
    <link rel="stylesheet" href="{{ URL::asset('user/css/nice-select.css')}}      ">
    <link rel="stylesheet" href="{{ URL::asset('user/css/hexagons.min.css')}}     ">
    <link rel="stylesheet" href="{{ URL::asset('user/css/animate.min.css')}}      ">
    <link rel="stylesheet" href="{{ URL::asset('user/css/owl.carousel.css')}}     ">
    <link rel="stylesheet" href="{{ URL::asset('user/css/main.css')}}             ">
    @yield('css')
  </head>
  <body>
      <header id="header" id="home">
        <div class="container main-menu">
          <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
              <a href="/" style="color:white; font-size:24px;"><img src="user/img/book.png" width="50px" height="50px" alt="" title="Tokoku" />Tokoku</a>
            </div>
            <nav id="nav-menu-container">
              <ul class="nav-menu">
                <li class="menu-active"><a href="/">Beranda</a></li>
                <li><a href="/list">List Buku</a></li>
                @if (!\Auth::user())
                  <li><a href="/login">Login</a></li>
                  <li><a href="/register">Register</a></li>
                @else
                  <li><a href="/logout">Logout</a></li>
                @endif
                @if(\Auth::check()&&\Auth::user()->hasRole('admin'))
                <li class="nav-item">
                <a class="nav-link" href="/admin">Panel Admin</a>
                </li>
              @endif
              @if(\Auth::check()&&\Auth::user()->hasRole('member'))
                <li class="nav-item">
                <a class="nav-link" href="/user/mybook">Bukuku</a>
                </li>
              @endif


              </ul>
            </nav><!-- #nav-menu-container -->
          </div>
        </div>
      </header><!-- #header -->

      @yield('content')


    <!-- start footer Area -->
    <footer class="footer-area section-gap">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-12">
            <div class="single-footer-widget">
              <h6>Top Products</h6>
              <ul class="footer-nav">
                <li><a href="#">Books 1</a></li>
                <li><a href="#">Books 2</a></li>
                <li><a href="#">Books 3</a></li>
                <li><a href="#">Books 4</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6  col-md-12">
            <div class="single-footer-widget newsletter">
              <h6>Newsletter</h6>
              <p>You can trust us. we only send promo offers, not a single spam.</p>
              <div id="mc_embed_signup">
                <form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">

                  <div class="form-group row" style="width: 100%">
                    <div class="col-lg-8 col-md-12">
                      <input name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
                      <div style="position: absolute; left: -5000px;">
                        <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                      </div>
                    </div>

                    <div class="col-lg-4 col-md-12">
                      <button class="nw-btn primary-btn">Subscribe<span class="lnr lnr-arrow-right"></span></button>
                    </div>
                  </div>
                  <div class="info"></div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-lg-3  col-md-12">
            <div class="single-footer-widget mail-chimp">
              <h6 class="mb-20">Instagram Feed</h6>
              <ul class="instafeed d-flex flex-wrap">
                <li><img src="user/img/i1.jpg" alt=""></li>
                <li><img src="user/img/i2.jpg" alt=""></li>
                <li><img src="user/img/i3.jpg" alt=""></li>
                <li><img src="user/img/i4.jpg" alt=""></li>
                <li><img src="user/img/i5.jpg" alt=""></li>
                <li><img src="user/img/i6.jpg" alt=""></li>
                <li><img src="user/img/i7.jpg" alt=""></li>
                <li><img src="user/img/i8.jpg" alt=""></li>
              </ul>
            </div>
          </div>
        </div>

        <div class="row footer-bottom d-flex justify-content-between">
          <p class="col-lg-8 col-sm-12 footer-text m-0 text-white"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          <div class="col-lg-4 col-sm-12 footer-social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-dribbble"></i></a>
            <a href="#"><i class="fa fa-behance"></i></a>
          </div>
        </div>
      </div>
    </footer>
    <!-- End footer Area -->

    <script src="{{URL::asset('user/js/vendor/jquery-2.2.4.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="{{URL::asset('user/js/vendor/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
      <script src="{{URL::asset('user/js/easing.min.js')}}"></script>
    <script src="{{URL::asset('user/js/hoverIntent.js')}}"></script>
    <script src="{{URL::asset('user/js/superfish.min.js')}}"></script>
    <script src="{{URL::asset('user/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{URL::asset('user/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{URL::asset('user/js/owl.carousel.min.js')}}"></script>
    <script src="{{URL::asset('user/js/hexagons.min.js')}}"></script>
    <script src="{{URL::asset('user/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{URL::asset('user/js/jquery.counterup.min.js')}}"></script>
    <script src="{{URL::asset('user/js/waypoints.min.js')}}"></script>
    <script src="{{URL::asset('user/js/mail-script.js')}}"></script>
    <script src="{{URL::asset('user/js/main.js')}}"></script>
    @yield('js')
  </body>
</html>
