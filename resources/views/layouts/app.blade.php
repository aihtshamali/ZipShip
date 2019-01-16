<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png"  href="{{asset('images/finalOld.jpg')}}" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('Pagetitle')</title>
    <meta name="author" content="ZipShip" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
    <link rel="stylesheet" href="{{asset('herakles/css/herakles.css')}}" />
    <link rel="stylesheet" href="{{asset('css/ContactCss/css/theme6da2.css?v=2.2')}}"/>
    <link rel="stylesheet" href="{{asset('css/ContactCss/css/custom.css')}}" />
    <link rel="stylesheet" href="{{asset('css/ContactCss/css/revolutionslider/settings.css')}}" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="
    sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('styleTags')
    <style media="screen">
      @yield('style')
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">

            <div class="container-fluid">
                <div class="navbar-header" style="margin-top:5px">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class=""  href="{{ url('/') }}">
                       <img src="{{ asset('images/finalOld.jpg') }}" width="40" height="40" style="border-radius:150px" alt="ZipShip-Logo">
                        <!-- {{ config('app.name', 'ZipShip') }} -->
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="border-radius: 50%;">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('profile.index') }}">
                                            Profile
                                        <span class="right">
                                            <i class="fas fa-user"></i>
                                        </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('flight.index') }}">
                                            Deliveries
                                        <span class="right">
                                            <i class="fa fa-code-branch"></i>
                                        </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('post.index') }}">
                                            My Posts
                                        <span class="right">
                                            <i class="fa fa-shopping-bag"></i>
                                        </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('makeOffer.index') }}">
                                            Get Orders
                                        <span class="right">
                                            <i class="fa fa-shopping-bag"></i>
                                        </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('order.index') }}">
                                            My Orders
                                        <span class="right">
                                            <i class="fa fa-shopping-bag"></i>
                                        </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('coupons') }}">
                                            Coupons
                                        <span class="right">
                                            <i class="fa fa-tags"></i>
                                        </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('post.create') }}">
                                            Create Order
                                        <span class="right">
                                            <i class="fab fa-first-order"></i>
                                        </span>
                                        </a>
                                    </li>
                                    <li>
                                      <a href="{{ route('logout') }}"
                                          onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                          Logout
                                        <span class="right">
                                            <i class="fas fa-sign-out-alt"></i>
                                        </span>
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>
     <!-- FOOTER -->
    <footer id="footer" class="classic_footer marginTopTen">
        <!-- Container -->
        <div class="container footer-body">
            <div class="row clearfix">
                <!-- Column -->
                <div class="col-md-3 col-sm-6 col-xs-12 sm-mb-mobile">
                    <!-- Title -->
                    <h6 class="uppercase white extrabold">Quadra Exclusive Theme</h6>
                    <h6 class="sm-mt bold gray8">ABOUT US</h6>
                    <p class="mini-mt">It is a long established fact that a read page when looking at its layout. </p>
                    <h6 class="xs-mt bold gray8"><i class="fa fa-map-marker mini-mr"></i>OUR ADDRESS</h6>
                    <p class="mini-mt">PO Box 16122 Collins Street West <br class="hidden-xs"> Victoria 8007 Australia</p>
                    <!-- Google Map -->
                    <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.9916256937586!2d2.2922926156743895!3d48.858370079287475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e2964e34e2d%3A0x8ddca9ee380ef7e0!2sEyfel+Kulesi!5e0!3m2!1str!2s!4v1491905379246" data-iframe="true" class="lightbox underline-hover colored-hover">
                        Find us on Google Map
                    </a>
                    <h6 class="xs-mt bold gray8"><i class="fa fa-envelope mini-mr"></i>CONTACT US</h6>
                    <p class="mini-mt">Pbx: <a href="tel:+0123456790" class="underline-hover colored-hover">+0123456789</a></p>
                    <a href="mailto:goldeyestheme@gmail.com" class="underline-hover colored-hover">example@example.com</a>
                </div>
                <!-- Column -->
                <div class="col-md-3 col-sm-6 col-xs-12 all-block-links sm-mb-mobile">
                    <h6 class="uppercase white extrabold sm-mb">Latest News</h6>
                    <!-- You can edit footer-news.html file in js/ajax folder. Will be changed on all website -->
                    <div data-ajax-load="js/ajax/footer-news.html"><i class="fa fa-refresh fa-2x fa-spin"></i></div>
                </div>
                <!-- End Column -->
                <!-- Column -->
                <div class="col-md-3 col-sm-6 col-xs-12 sm-mb-mobile">
                    <h6 class="uppercase white extrabold sm-mb">recent Comments</h6>
                    <!-- Clients Slider one - You can find details in footer-client-comments.html file, #post1 div -->
                    <!-- When you edit ajax file, the details will be changed on all website -->
                    <div data-ajax-load="js/ajax/footer-client-comments.html #post1" class="ajax-slider"></div>
                    <!-- Clients Slider two -->
                    <div data-ajax-load="js/ajax/footer-client-comments.html #post2" class="ajax-slider"></div>
                    <!-- Sub Title -->
                    <h6 class="xxs-mt bold gray8">ADD YOUR COMMENT</h6>
                    <p class="mini-mt gray8"><a href="http://goldeyestheme.com/envato/quadra/wishbox.html" target="_blank" class="mini-mt underline-hover gray6-hover gray7">Drop us your comment!</a> All images are placeholders.</p>
                </div>
                <!-- End Column -->
                <!-- Column -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <!-- Title -->
                    <h5 class="uppercase white extrabold">SUBSCRIBE US</h5>
                    <!-- Sub Title -->
                    <h6 class="sm-mt bold gray8">GET UPDATED</h6>
                    <p class="mini-mt">The standard chunk of Lorem Ipsum used.</p>
                    <div id="newsletter-form" class="footer-newsletter clearfix xs-mt">
                        <form id="newsletter_form" name="newsletter_form" method="post" action="http://quadra.goldeyestheme.com/v2/php/newsletter.php">
                            <input type="email" name="n-email" id="n-email" required placeholder="Add your E-Mail address" class="font-12 borderRad7px form-control">
                            <button type="submit" id="n-submit" name="submit" class="btn-lg fullwidth borderRad7px bg-colored white qdr-hover-6 click-effect bold font-11">SUBSCRIBE</button>
                        </form>
                    </div>
                    <!-- End Form -->
                    <h6 class="xs-mt xxs-mb bold gray8">FOLLOW US</h6>
                    <a href="#" class="icon-xs radius bg-dark facebook white-hover slow1"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="icon-xs radius bg-dark twitter white-hover slow1"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="icon-xs radius bg-dark instagram white-hover slow1"><i class="fa fa-instagram"></i></a>
                    <a href="#" class="icon-xs radius bg-dark pinterest white-hover slow1"><i class="fa fa-pinterest"></i></a>
                </div>
                <!-- End Column -->
            </div>
        </div>
        <!-- End Container -->
        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row clearfix calculate-height t-center-xs">
                    <div class="col-sm-6 col-xs-12 table-im t-left height-auto-mobile t-center-xs">
                        <div class="v-middle">
                            <img src="{{asset('images/final.jpg')}}" alt="logo icon" class="logo">
                        </div>
                    </div>
                    <!-- Bottom Note -->
                    <div class="col-sm-6 col-xs-12 table-im t-right height-auto-mobile t-center-xs xxs-mt-mobile">
                        <p class="v-middle">
                            <a href="#" target="_blank" class="gray6-hover underline-hover">Term and Condition</a> |
                            <a href="#" target="_blank" class="gray6-hover underline-hover">Privacy Policy</a> <br class="hidden-xs">
                            © 2018. Powered By
                            <a href="mailto:aihtshamali@gmail.com" target="_blank" class="colored-hover underline-hover">CodeXStudio</a>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <script type="text/javascript">
      @yield('script')

      // Get the modal
      var modal = document.getElementById('myModal');

      // Get the button that opens the modal
      var btn = document.getElementsByClassName("myBtn");
      if(btn){

      // Get the <span> element that closes the modal
      var span = document.getElementById("close")[0];
      // When the user clicks the button, open the modal
      $('.myBtn').on('click' , function() {
          modal.style.display = "block";
          $('input[name="post_id"]').val($(this).data('id'));
      });

      // When the user clicks on <span> (x), close the modal
      span.onclick = function() {
          modal.style.display = "none";
      }

      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) {
          if (event.target == modal) {
              modal.style.display = "none";
          }
      }
      }
    </script>
    @yield('scriptTags')

</body>
</html>
