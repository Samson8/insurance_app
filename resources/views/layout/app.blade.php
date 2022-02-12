<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>INSURANCE AGENCY </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}">
 <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" type="text/less" href="{{ asset('assets/css/style.less') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/colorbox.css') }}">
  </head>
  <body>
  <div class="bodywrapper">
  <header>
  <div class="navbar-fixed-top">
  <div class="top1 top">
  <div class="container">
 <div class="row">
        <div class="col-lg-12">
          <a href=""><i class="fa fa-twitter"></i></a>
          <a href=""><i class="fa fa-facebook"></i></a>
          <a href=""><i class="fa fa-linkedin"></i></a>
          <a href="skype:...?call"><i class="fa fa-phone"> <span>+41 79 272 92 27</span></i></a>
          <a href="mailto:info@mia-vita.ch"><i class="fa fa-envelope last"> <span> info@mia-vita.ch</span></i></a>
        </div>
      </div>
    </div>
  </div>
  <!-- menu -->
    <nav class="navbar navbar-height1 scroll menuswitch-js">
 <div class="container navbar-inner">
 <div class="row">
      <div class="col-lg-12">
      <div class="responsive-wrapper">
          <a class="navbar-brand" href="#">
            <img src="{{ asset('assets/images/Miavita.png') }}" height="50"alt=""/>
          </a>
        <div class="navbar-header">
          <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse" type="button">
            <span class="sr-only"></span>
            <span class="icon-bar icon-bar1"></span>
            <span class="icon-bar icon-bar2"></span>
            <span class="icon-bar icon-bar3"></span>
          </button>
        </div>
      </div>
      <div class="collapse navbar-collapse navbar-ex1-collapse">
          <div class="cl-effect-12">
            <ul class="nav navbar-nav pull-right">
              <li><a href="#menu1">Home</a></li>
              <li><a href="#menu2">Insurance products</a></li>
              <li><a href="{{ route('me') }}">About</a></li>
              <li><a href="#menu4">Team</a></li>
              <li><a href="#menu5">Blog</a></li>
              <li><a href="#menu6">Contact</a></li>
            </ul>
          </div>
        </div>
 </div>
 </div>
    </div>
    </nav>
    <!-- menu end -->
    </div>
  </header>

  @yield('content')


  <!-- /footer is below this -->
  <footer class="bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h4>COPYRIGHT DISCLAIMER</h4>
          <p>
          Bassumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
          </p>
          <h4>Read more</h4>
          <ul>
            <li>
            <a href="">Ne nec detracto appellantur <i class="fa fa-angle-right"></i></a>
            </li>
            <li>
            <a href="">Aperiam accusamus vel eu <i class="fa fa-angle-right"></i></a>
            </li>
            <li>
            <a href="">Nam albucius ponderum rationibu <i class="fa fa-angle-right"></i></a>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <h4>KEEP IN TOUCH</h4>
          <p>
          Bassumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes. Bassumenda shoreditch et.
          </p>
          <h4>Read more</h4>
          <ul>
            <li>
            <a href="">Ne nec detracto appellantur <i class="fa fa-angle-right"></i></a>
            </li>
            <li>
            <a href="">Aperiam accusamus vel eu <i class="fa fa-angle-right"></i></a>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <h4>CONTACT INFORMATION</h4>
          <ul>
            <li>
            miavita GmbH, Weidstrasse 1 4656 Starrkirch-Wil
            </li>
            <li>
            Phone: +41 79 272 92 27
            </li>
            <li>
            <a href="mailto:info@mia-vita.ch">email: info@mia-vita.ch</a>
            </li>
          </ul>
          <h4>Open Hours</h4>
          <ul>
            <li>
            Monday/Friday: 09:00am/17:00pm
            </li>
            <li>
            Saturday and Sunday: Off
            </li>
          </ul>
        </div>
        <div class="col-md-12">
          <div class="twitter">
            <div id="example1"></div>
          </div>
     <ul class="socialicons">
     <li>
      <a href=""><i class="fa fa-facebook"></i></a>
     </li>
     <li>
      <a href=""><i class="fa fa-twitter"></i></a>
     </li>
     <li>
      <a href=""><i class="fa fa-linkedin"></i></a>
     </li>
          <li>
      <a href=""><i class="fa fa-instagram"></i></a>
     </li>
          <li>
      <a href=""><i class="fa fa-skype"></i></a>
     </li>
          <li>
      <a href=""><i class="fa fa-reddit"></i></a>
     </li>
     <li>
      <a href=""><i class="fa fa-youtube"></i></a>
     </li>
    </ul>
        <div class="copyright">
          <p>Copyright <a href="">&copy; 2020 - miavita GmbH | created by ThaDeveloper
        </div>
        <div class="scrollbutton">
          <a href="javascript:scrollToTop()" title="go to top"><i class="fa fa-chevron-up"></i></a>
        </div>
      </div>
    </div>
  </div>
  </footer>

  <script src="{{ asset('assets/js/jquery.js') }}"></script>
  <script src="{{ asset('assets/js/jquery-migrate.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
  <script src="{{ asset('assets/js/flexslider.js') }}"></script>
  <script src="{{ asset('assets/js/flickity.js') }}"></script>
  <script src="{{ asset('assets/js/waypoints.js') }}"></script>
  <script src="{{ asset('assets/js/masonry.js') }}"></script>
  <script src="{{ asset('assets/js/twitter.js') }}"></script>
  <script src="{{ asset('assets/js/scriptcontact.js') }}"></script>
  <script src="{{ asset('assets/js/countto.js') }}"></script>
  <script src="{{ asset('assets/js/colorbox.js') }}"></script>
  <script src="{{ asset('assets/js/isotope.js') }}"></script>
  <script src="{{ asset('assets/js/retina.js') }}"></script>
  <script src="{{ asset('assets/js/less.js') }}"></script>
  <script src="{{ asset('assets/js/scripts.js') }}"></script>
  </body>
</html>
