<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<!-- Mirrored from ZipShip.goldeyestheme.com/v2/pages-account-login-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Apr 2018 13:38:01 GMT -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login </title>
    <meta name="description" content="ZipShip is a super easy customizing, creative, professional design, bootstrap responsive and high performance website template and 700+ pages for multi-purpose using to agencies, portfolio, photographers and your all wishes." />
    <!--Keywords -->
    <meta name="keywords" content="modern, creative, website, html5, bootstrap responsive, parallax, soft, front-end, designer, coming soon, account, portfolio, photographer, grid, social, modules, design, personal, faq, one page, multi-purpose, branding, studio, agency, templates, css3, carousel, slider, corporate, theme, ZipShip, demos, blog, shop" />
    <meta name="author" content="GoldEyes" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
    <!--Favicon -->
	<link rel="icon" type="image/png" href="images/finalOld.jpg" />
    <!-- Apple Touch Icon -->
    <link rel="apple-touch-icon" href="images/finalOld.jpg"/>

	<!-- CSS Files -->
    <link rel="stylesheet" href="{{asset('css/ContactCss/css/plugins6da2.css?v=2.2')}}"/>
    <!-- Main Styles -->
    <link rel="stylesheet" href="{{asset('css/ContactCss/css/theme6da2.css?v=2.2')}}"/>
    <!-- Color Skins -->
    <link rel="stylesheet" href="{{asset('css/ContactCss/css/skins/default.css')}}" />
	<!-- End Page Styles -->

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:300i" rel="stylesheet">
</head>

<!-- BODY START -->
<body>




    <!-- LOADER -->
    <div class="page-loader bg-white">
        <div class="v-center t-center">
            <div class="spinner">
                <div class="spinner__item1 bg-dark"></div>
                <div class="spinner__item2 bg-dark"></div>
                <div class="spinner__item3 bg-dark"></div>
                <div class="spinner__item4 bg-dark"></div>
            </div>
        </div>
    </div>





    <!-- NAVIGATION -->
    <nav id="navigation" class="white-nav jump modern hover4 radius-drop" data-offset="55">
        <!-- Columns -->
        <div class="columns clearfix container-xl">
            <!-- Logo -->
            <div class="logo">
                <a href="index.html">
                    <!-- Retina Logo -->
                    <img src="{{asset('images/final.jpg')}}"  class="retina-logo" alt="ZipShip Logo">
                </a>
            </div>
        </div>
        <!-- End Columns -->
    </nav>
    <!-- END NAVIGATION -->





    <!-- CONTENT -->
    <section id="home" class="fullscreen t-center fullwidth cover" data-background="{{asset('images/ContactImages/images/backgrounds/background_05.jpg')}}">
        <!-- Container -->
        <div class="container-xs mxw-350 v-center">
           <div class="t-center white">
               <h1 class="bold-title">Login On ZipShip</h1>
               <h4 class="xxs-mt merriweather italic light">
                   Nice to see you! Please log in with your account.
               </h4>
               <div class="form dark xs-mt normal-title">
                   <form action="{{ route('login') }}" method="post">
                        {{ csrf_field() }}
                       <!-- Email -->
                       <span class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                         <input type="email" name="email" id="email" placeholder="username" class="classic_form bg-white radius">
                         @if ($errors->has('email'))
                             <span class="help-block">
                                 <strong>{{ $errors->first('email') }}</strong>
                             </span>
                         @endif
                       </span>
                       <!-- Email -->
                       <span class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                           @if ($errors->has('password'))
                               <span class="help-block">
                                   <strong>{{ $errors->first('password') }}</strong>
                               </span>
                           @endif
                           <input type="password" name="password" id="password" placeholder="Password" class="classic_form bg-white radius">
                       </span>
                       <!-- Send Button -->
                       <button type="submit" id="submit" class="bg-colored1 click-effect white bold qdr-hover-6 classic_form uppercase no-border radius">Send</button>
                       <!-- End Send Button -->
                   </form>
               </div>
               <h5>Did you lost your password? <a href="#" class="underline">Click Here.</a></h5>
               <h5>Do you want see more? <a href="index.html" class="underline">Back to ZipShip.</a></h5>
           </div>
        </div>
        <!-- End Container -->
    </section>
    <!-- END CONTENT -->


    <!-- Quick Contact Form -->
    <div class="quick-contact-form border-colored1">
        <h5 class="uppercase t-center extrabold">Drop us a message</h5>
        <p class="t-center normal">You're in the right place! Just drop us a message. How can we help?</p>
        <!-- Contact Form -->
        <form class="quick_form" name="quick_form" method="post" action="#">
            <!-- Name -->
            <input type="text" name="qname" id="qname" required placeholder="Name" class="no-mt">
            <!-- Email -->
            <input type="email" name="qemail" id="qemail" required placeholder="E-Mail">
            <!-- Message -->
            <textarea name="qmessage" id="qmessage" required placeholder="Message"></textarea>
            <!-- Send Button -->
            <button type="submit" id="qsubmit" class="bg-colored1 white qdr-hover-6 uppercase extrabold">Send</button>
            <!-- End Send Button -->
        </form>
        <!-- End Form -->
        <a href="https://themeforest.net/user/goldeyes#contact" target="_blank" class="inline-block colored-hover uppercase extrabold h6 qdr-hover-5">Or see contact page</a>
    </div>
    <!-- Contact us button -->
    <a href="#" class="drop-msg click-effect dark-effect"><i class="fa fa-envelope-o"></i></a>

    <!-- Messages for contact form -->
    <div id="error_message" class="clearfix">
        <i class="fa fa-warning"></i>
        <span>Validation error occured. Please enter the fields and submit it again.</span>
    </div>
    <!-- Submit Message -->
    <div id="submit_message" class="clearfix">
        <i class="fa fa-check"></i>
        <span>Thank You ! Your email has been delivered.</span>
    </div>


	<!-- jQuery -->
    <script type="text/javascript" src="{{asset('js/ContactJss/js/jquery.min.js')}}"></script>
    <!-- MAIN SCRIPTS - Classic scripts for all theme -->
    <script type="text/javascript" src="{{asset('js/ContactJss/js/scripts6da2.js?v=2.2')}}"></script>
    <!-- END JS FILES -->

</body>
<!-- Body End -->

<!-- Mirrored from ZipShip.goldeyestheme.com/v2/pages-account-login-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Apr 2018 13:38:01 GMT -->
</html>
