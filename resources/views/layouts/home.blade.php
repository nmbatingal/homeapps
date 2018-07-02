<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DOST Caraga Apps</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ asset('universal/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{ asset('vendor/font-awesome/css/fontawesome-all.min.css') }}">
    <!-- Google fonts - Roboto-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
    <!-- Bootstrap Select-->
    <link rel="stylesheet" href="{{ asset('universal/vendor/bootstrap-select/css/bootstrap-select.min.css') }}">
    <!-- owl carousel-->
    <link rel="stylesheet" href="{{ asset('universal/vendor/owl.carousel/assets/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('universal/vendor/owl.carousel/assets/owl.theme.default.css') }}">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ asset('universal/css/style.default.css')}}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ asset('universal/css/custom.css')}}">
    <!-- Favicon and apple touch icons-->
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico')}}" type="image/x-icon">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div id="all">

      <!-- Top bar-->
      <div class="top-bar">
        <div class="container">
          <div class="row d-flex align-items-center">
            <div class="col-md-6 d-md-block d-none">
            </div>
            <div class="col-md-6">
              <div class="d-flex justify-content-md-end justify-content-between">
                <ul class="list-inline contact-info d-block d-md-none">
                </ul>
                <div class="login">
                    <a href="#" data-toggle="modal" data-target="#login-modal" class="login-btn">
                        <i class="fa fa-sign-in-alt"></i>
                        <span class="d-none d-md-inline-block">Sign In</span>
                    </a>
                    <a href="customer-register.html" class="signup-btn">
                        <i class="fa fa-user"></i>
                        <span class="d-none d-md-inline-block">Sign Up</span>
                    </a>
                </div>
                <ul class="social-custom list-inline">
                  <li class="list-inline-item">
                    <a href="https://www.facebook.com/DOST.Caraga" target="_blank"><i class="fab fa-facebook-f"></i></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="https://plus.google.com/107519031648633946654" target="_blank"><i class="fab fa-google-plus-g"></i></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="https://twitter.com/dost_caraga" target="_blank"><i class="fab fa-twitter"></i></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#"><i class="fa fa-envelope"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Top bar end-->

      <!-- Login Modal-->
      <div id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-modalLabel" aria-hidden="true" class="modal fade">
        <div role="document" class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 id="login-modalLabel" class="modal-title">Customer Login</h4>
              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
              <form action="customer-orders.html" method="get">
                <div class="form-group">
                  <input id="email_modal" type="text" placeholder="email" class="form-control">
                </div>
                <div class="form-group">
                  <input id="password_modal" type="password" placeholder="password" class="form-control">
                </div>
                <p class="text-center">
                  <button class="btn btn-template-outlined"><i class="fa fa-sign-in"></i> Log in</button>
                </p>
              </form>
              <p class="text-center text-muted">Not registered yet?</p>
              <p class="text-center text-muted"><a href="customer-register.html"><strong>Register now</strong></a>! It is easy and done in 1 minute and gives you access to special discounts and much more!</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Login modal end-->

      <!-- Navbar Start-->
      <header class="nav-holder make-sticky">
        <div id="navbar" role="navigation" class="navbar navbar-expand-lg">
          <div class="container">
            <a href="index.html" class="navbar-brand home">
                <img src="{{ asset('img/logo.png') }}" alt="DOST logo" class="d-none d-md-inline-block">
                <img src="{{ asset('img/logo-small.png') }}" alt="DOST logo" class="d-inline-block d-md-none">
                <span class="sr-only">Universal - go to homepage</span>
            </a>
            <button type="button" data-toggle="collapse" data-target="#navigation" class="navbar-toggler btn-template-outlined">
                <span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i>
            </button>
            <div id="navigation" class="navbar-collapse collapse">
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item dropdown active">
                  <a href="{{ url('/') }}" >Home</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </header>
      <!-- Navbar End-->

      <section class="bar no-mb">
        <div data-animate="fadeInUp" class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="heading text-center">
                <h3>DOST Caraga APPS</h3>
              </div>
              <div class="row portfolio text-center no-space">
                <!-- DTR -->
                <div class="col-md-4">
                  <div class="box-image">
                    <div class="image"><img src="{{ asset('img/dtr-profile-1.jpg') }}" alt="" class="img-fluid">
                      <div class="overlay d-flex align-items-center justify-content-center">
                        <div class="content">
                          <div class="name">
                            <h3><a href="javascript:void(0)" class="color-white">DOST DTR</a></h3>
                          </div>
                          <div class="text">
                            <p class="d-none d-sm-block">Daily Time Record System of DOST Caraga</p>
                            <p class="buttons">
                                <a href="{{ route('dtr.local') }}" class="btn btn-info btn-template-outlined-white" target="_blank">
                                    Local
                                </a>
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- TRACE -->
                <div class="col-md-4">
                  <div class="box-image">
                    <div class="image"><img src="{{ asset('img/trace-profile-1.jpg') }}" alt="" class="img-fluid">
                      <div class="overlay d-flex align-items-center justify-content-center">
                        <div class="content">
                          <div class="name">
                            <h3><a href="javascript:void(0)" class="color-white">TRACE</a></h3>
                          </div>
                          <div class="text">
                            <p class="d-none d-sm-block">Tracking, Retrieval, Archiving of Communications for Efficiency of DOST Caraga</p>
                            <p class="buttons">
                                <a href="http://trace.dostcaraga.ph/" class="btn btn-primary btn-template-outlined-white" target="_blank">
                                    <i class="fa fa-globe"></i> Public Link
                                </a> 
                                <a href="{{ route('trace.local') }}" class="btn btn-info btn-template-outlined-white" target="_blank">
                                    Local
                                </a>
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- TOMS -->
                <div class="col-md-4">
                  <div class="box-image">
                    <div class="image"><img src="{{ asset('img/toms-profile-1.jpg') }}" alt="" class="img-fluid">
                      <div class="overlay d-flex align-items-center justify-content-center">
                        <div class="content">
                          <div class="name">
                            <h3><a href="javascript:void(0)" class="color-white">TOMS - Local</a></h3>
                          </div>
                          <div class="text">
                            <p class="d-none d-sm-block">Travel Order Management System - Local Travel</p>
                            <p class="buttons">
                                <a href="http://toms.dostcentral.ph/" class="btn btn-primary btn-template-outlined-white" target="_blank">
                                    <i class="fa fa-globe"></i> National
                                </a> 
                                <a href="http://toms.dostcaraga.ph/" class="btn btn-primary btn-template-outlined-white" target="_blank">
                                    <i class="fa fa-globe"></i> Public Link
                                </a> 
                                <a href="{{ route('toms.local') }}" class="btn btn-info btn-template-outlined-white" target="_blank">
                                    Local
                                </a>
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- VRAMS -->
                <div class="col-md-4">
                  <div class="box-image">
                    <div class="image"><img src="{{ asset('img/vrams-profile-1.jpg') }}" alt="" class="img-fluid">
                      <div class="overlay d-flex align-items-center justify-content-center">
                        <div class="content">
                          <div class="name">
                            <h3><a href="javascript:void(0)" class="color-white">VRAMS</a></h3>
                          </div>
                          <div class="text">
                            <p class="d-none d-sm-block">Vehicle Reservations Management System</p>
                            <p class="buttons">
                                <a href="http://vrams.dostcaraga.ph/" class="btn btn-primary btn-template-outlined-white" target="_blank">
                                    <i class="fa fa-globe"></i> Public Link
                                </a> 
                                <a href="{{ route('vrams.local') }}" class="btn btn-info btn-template-outlined-white" target="_blank">
                                    Local
                                </a>
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- SOON -->
                <div class="col-md-4">
                  <div class="box-image">
                    <div class="image"><img src="{{ asset('img/soon.jpg') }}" alt="" class="img-fluid">
                      <div class="overlay d-flex align-items-center justify-content-center">
                        <div class="content">
                          <div class="name">
                            <h3><a href="javascript:void(0)" class="color-white">COMING SOON</a></h3>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- SOON -->
                <div class="col-md-4">
                  <div class="box-image">
                    <div class="image"><img src="{{ asset('img/soon.jpg') }}" alt="" class="img-fluid">
                      <div class="overlay d-flex align-items-center justify-content-center">
                        <div class="content">
                          <div class="name">
                            <h3><a href="javascript:void(0)" class="color-white">COMING SOON</a></h3>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- FOOTER -->
      <footer class="main-footer">
        <div class="container">
          <div class="row">
            <div class="col-lg-3">
              <h4 class="h6">About Us</h4>
              <p>...</p>
              <p>...</p>
              <p>...</p>
              <hr>
              <h4 class="h6">Subscribe to our Newsletter</h4>
              <form>
                <div class="input-group">
                  <input type="email" placeholder="email address" class="form-control" required>
                  <div class="input-group-append">
                    <button type="submit" class="btn btn-secondary"><i class="fab fa-telegram-plane"></i></button>
                  </div>
                </div>
              </form>
              <hr class="d-block d-lg-none">
            </div>
            <div class="col-lg-3">
              <h4 class="h6">Follow us</h4>
              <ul class="list-unstyled footer-blog-list">
                <li class="d-flex align-items-center">
                  <div class="image"><i class="fab fa-facebook-f"></i></div>
                  <div class="text">
                    <h5 class="mb-0"> <a href="https://www.facebook.com/DOST.Caraga" target="_blank">facebook</a></h5>
                  </div>
                </li>
                <li class="d-flex align-items-center">
                  <div class="image"><i class="fab fa-google-plus-g"></i></div>
                  <div class="text">
                    <h5 class="mb-0"> <a href="https://plus.google.com/107519031648633946654" target="_blank">google plus</a></h5>
                  </div>
                </li>
                <li class="d-flex align-items-center">
                  <div class="image"><i class="fab fa-twitter"></i></div>
                  <div class="text">
                    <h5 class="mb-0"> <a href="https://twitter.com/dost_caraga" target="_blank">twitter</a></h5>
                  </div>
                </li>
              </ul>
              <hr class="d-block d-lg-none">
            </div>
            <div class="col-lg-3">
              <h4 class="h6">Contact</h4>
              <p class="text-uppercase"><strong>DOST Caraga.</strong><br>CSU Main Campus, <br>Ampayon, Butuan City, <br>Agusan del Norte <br>8600 <br><strong>Philippines</strong></p><a href="http://caraga.dost.gov.ph/" class="btn btn-template-main">Go to Website</a>
              <hr class="d-block d-lg-none">
            </div>
            <div class="col-lg-3">
              <ul class="list-inline photo-stream">
                <li class="list-inline-item"><a href="#"><img src="{{ asset('img/dost-logo.png')}}" alt="..." class="img-fluid"></a></li>
                <li class="list-inline-item"><a href="#"><img src="{{ asset('img/dost-logo.png')}}" alt="..." class="img-fluid"></a></li>
                <li class="list-inline-item"><a href="#"><img src="{{ asset('img/dost-logo.png')}}" alt="..." class="img-fluid"></a></li>
                <li class="list-inline-item"><a href="#"><img src="{{ asset('img/dost-logo.png')}}" alt="..." class="img-fluid"></a></li>
                <li class="list-inline-item"><a href="#"><img src="{{ asset('img/dost-logo.png')}}" alt="..." class="img-fluid"></a></li>
                <li class="list-inline-item"><a href="#"><img src="{{ asset('img/dost-logo.png')}}" alt="..." class="img-fluid"></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="copyrights">
          <div class="container">
            <div class="row">
              <div class="col-lg-4 text-center-md">
                <p>&copy; {{ date("Y") }}. Department of Science and Technology - Information Communications Technology.</p>
              </div>
              <div class="col-lg-8 text-right text-center-md">
                <p>Template design by <a href="https://bootstrapious.com/free-templates">Bootstrapious Templates </a></p>
                <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- Javascript files-->
    <script src="universal/vendor/jquery/jquery.min.js"></script>
    <script src="universal/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="universal/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="universal/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="universal/vendor/waypoints/lib/jquery.waypoints.min.js"> </script>
    <script src="universal/vendor/jquery.counterup/jquery.counterup.min.js"> </script>
    <script src="universal/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="universal/vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js"></script>
    <script src="universal/js/jquery.parallax-1.1.3.js"></script>
    <script src="universal/vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="universal/vendor/jquery.scrollto/jquery.scrollTo.min.js"></script>
    <script src="universal/js/front.js"></script>
  </body>
</html>