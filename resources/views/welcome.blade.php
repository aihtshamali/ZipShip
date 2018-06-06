<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ZipShip</title>
  <meta name="description" content="Quadra Theme Herakles Version" />
  <!--Keywords -->
  <meta name="keywords" content="modern, creative, website, html5, bootstrap responsive, parallax, soft, front-end, designer, coming soon, account, portfolio, photographer, grid, social, modules, design, personal, faq, one page, multi-purpose, branding, studio, agency, templates, css3, carousel, slider, corporate, theme, quadra, demos, blog, shop" />
  <meta name="author" content="ZipShip" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
  <!--Favicon -->
  <link rel="icon" type="image/png" href="images/finalOld.jpg" />

  <!-- CSS Files -->
  <link rel="stylesheet" href="{{asset('css/ContactCss/css/plugins6da2.css?v=2.2')}}"/>
  <!-- Demo Styles -->
  <link rel="stylesheet" href="{{asset('herakles/css/herakles.css')}}" />
  <!-- Main Styles -->
  <link rel="stylesheet" href="{{asset('css/ContactCss/css/theme6da2.css?v=2.2')}}"/>
  <!-- Color Skins -->
  <link rel="stylesheet" href="{{asset('css/ContactCss/css/custom.css')}}" />
  <!-- Color Skins -->
  <link rel="stylesheet" href="{{asset('css/ContactCss/css/revolutionslider/settings.css')}}" />


</head>

<!-- BODY START -->
<body>

    <!-- LOADER -->
    <div class="page-loader bg-white">
        <div class="v-center t-center">
            <div class="spinner">
                <div class="spinner__item1 bg-colored"></div>
                <div class="spinner__item2 bg-colored"></div>
                <div class="spinner__item3 bg-colored"></div>
                <div class="spinner__item4 bg-colored"></div>
            </div>
        </div>
    </div>
    <!-- PAGETOP -->
    <!-- <div id="pagetop">
        <div class="container">

            <div class="left font-12">
                <a href="tel:000000" class="colored-hover">+01 234 567 890</a>
                <a href="mailto:support@goldeyestheme.com" class="colored-hover" data-toggle="tooltip" data-placement="bottom" title="Send us an e-mail">info@goldeyestheme.com</a>
            </div>
            <div class="right clearfix">
                <a href="#" target="_blank" class="fa fa-twitter twitter"></a>
                <a href="#" target="_blank" class="fa fa-pinterest pinterest"></a>
                <a href="#" target="_blank" class="fa fa-instagram instagram"></a>
                <a href="#" target="_blank" class="fa fa-envelope mail"></a>
                <a href="#" target="_blank" class="fa fa-facebook facebook"></a>
            </div>
        </div>
    </div> -->
    <!--END PAGETOP -->
    <!-- Dotted Navigation -->
    <section id="dotted-navigation" class="nav-menu">
        <ul id="side-dotted-navigation" class="spy nav hide-on-home font-11 extrabold uppercase">
            <!-- <li style="border: 1px solid #fff;border-radius: 10px;position: absolute;"></li> -->
            <li><a href="#home"><span>Home</span></a></li>
            <li><a href="#about"><span>About</span></a></li>
            <li><a href="#works"><span>Works</span></a></li>
            <li><a href="#team"><span>Team</span></a></li>
            <li><a href="#prices"><span>Prices</span></a></li>
            <li><a href="#contact"><span>Contact</span></a></li>
            <li><a class="bg-colored" href="https://themeforest.net/item/quadra-creative-multipurpose-template/21409528" target="_blank"><span>Buy Quadra</span></a></li>
        </ul>
    </section>

    <!-- HOME SECTION -->
    <section id="home" class="rev_slider_wrapper">
        <!-- Start Slider -->
        <div id="home_slider" class="rev_slider fullscreenbanner white">
            <!-- Slider Container -->
            <!-- NAVIGATION - Select nav color and offset -->
            <nav id="navigation" style="background-color:transparent;height:50px" class="white-nav static modern hover4 radius-drop" data-offset="0">
              <!-- Columns -->
              <div class="columns clearfix container">
                <!-- Logo -->
                <div class="logo" data-infocard="#infocard">
                  <a href="/">
                    <img src="images/final.jpg" data-second-logo="images/finalOld.jpg" alt="ZipShip Logo">
                    <!-- Retina Logo -->
                    <img src="images/final.jpg"  data-second-logo="images/finalOld.jpg" style="height:64px" class="retina-logo" alt="ZipShip Logo">
                  </a>
                </div>
                <div class="pull-right" style="background-color: white;border-radius: 73px;height: 35px;line-height: 0;margin-top: 4px;">
                  <a href="{{route('post.create')}}" class="slow lg-btn uppercase radius-lg font-11 extrabold bs-inset-hover qdr-hover-6">
                    Post an Order
                  </a>
                </div>
              </div>
              <!-- End Columns -->
            </nav>
            <!-- END NAVIGATION -->
            <ul>
                <!-- Slide -->
                <li data-masterspeed="300" data-transition="fade" data-thumb="content/herakles/images/home_01.jpg" data-saveperformance="off"  data-title="Check the features" data-description="Home Slider">
                    <!-- Background Image -->
                    <img src="images/Slider_1.jpg"  alt="Image Background"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="0" data-scaleend="110" data-scalestart="100" data-duration="10000" data-kenburns="on" class="rev-slidebg" data-no-retina>
                    <!-- Layer -->
                    <div class="tp-caption italic gray3 playfair bold rs-parallaxlevel-1"
                        data-x="['center','center','center','center']"
                        data-y="['middle','middle','middle','middle']"
                        data-fontsize="['17','17','17','15']"
                        data-type="text"
                        data-frames='[{"delay":"+1200","speed":2000,"frame":"0","from":"y:50px;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                        data-hoffset="['0','0','0','0']"
                        data-voffset="['-95','-80','-70','-65']">
                        Meet With Quadra
                    </div>
                    <!-- Layer -->
                    <div class="tp-caption bold rs-parallaxlevel-1"
                        data-x="['center','center','center','center']"
                        data-y="['middle','middle','middle','middle']"
                        data-lineheight="['55','53','45','32']"
                        data-fontsize="['50','50','40','26']"
                        data-textalign="center"
                        data-letterspacing="['-3','-2','-1','-1']"
                        data-frames='[{"delay":"+1400","speed":2000,"frame":"0","from":"y:50px;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                        data-hoffset="['0','0','0','0']"
                        data-voffset="['-24','-10','-7','-5']">
                        Train for push <span class="playfair italic">your limits.</span> Get stronger, <br>
                        be healthy. Live the better.
                    </div>

                    <!-- Layer -->
                    <!-- <div class="tp-caption rs-parallaxlevel-1"
                        data-x="['center','center','center','center']"
                        data-y="['middle','middle','middle','middle']"
                        data-frames='[{"delay":"+1600","speed":2000,"frame":"0","from":"y:50px;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                        data-voffset="['69','77','73','70']">
                        <a href="#about" class="slow lg-btn bg-colored uppercase radius-lg font-11 extrabold bs-inset-hover qdr-hover-6">
                            Explore more
                        </a>
                    </div> -->
                </li>
                <!-- End Slide -->

                <!-- Slide -->
                <li data-masterspeed="300" data-transition="fade" data-thumb="content/herakles/images/home_02.jpg" data-saveperformance="off"  data-title="Check the features" data-description="Home Slider">
                    <!-- Background Image -->
                    <img src="images/Slider_2.jpg"  alt="Image Background"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="0" data-scaleend="110" data-scalestart="100" data-duration="10000" data-kenburns="on" class="rev-slidebg" data-no-retina>
                    <!-- Layer -->
                    <div class="tp-caption italic gray3 playfair bold rs-parallaxlevel-1"
                        data-x="['center','center','center','center']"
                        data-y="['middle','middle','middle','middle']"
                        data-fontsize="['17','17','17','15']"
                        data-type="text"
                        data-frames='[{"delay":"+1200","speed":2000,"frame":"0","from":"y:50px;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                        data-hoffset="['0','0','0','0']"
                        data-voffset="['-95','-80','-70','-65']">
                        Meet With Quadra
                    </div>
                    <!-- Layer -->
                    <div class="tp-caption bold rs-parallaxlevel-1"
                        data-x="['center','center','center','center']"
                        data-y="['middle','middle','middle','middle']"
                        data-lineheight="['55','53','45','32']"
                        data-fontsize="['50','50','40','26']"
                        data-textalign="center"
                        data-letterspacing="['-3','-2','-1','-1']"
                        data-frames='[{"delay":"+1400","speed":2000,"frame":"0","from":"y:50px;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                        data-hoffset="['0','0','0','0']"
                        data-voffset="['-24','-10','-7','-5']">
                        Train for push <span class="playfair italic">your limits.</span> Get stronger, <br>
                        be healthy. Live the better.
                    </div>

                    <!-- Layer -->
                    <div class="tp-caption rs-parallaxlevel-1"
                        data-x="['center','center','center','center']"
                        data-y="['middle','middle','middle','middle']"
                        data-frames='[{"delay":"+1600","speed":2000,"frame":"0","from":"y:50px;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                        data-voffset="['69','77','73','70']">
                        <!-- Video will be playable when you upload the files to server - Thumbnail image will come automatically. -->
                        <a href="#about" class="slow lg-btn bg-colored uppercase radius-lg font-11 extrabold bs-inset-hover qdr-hover-6">
                            Explore more
                        </a>
                    </div>
                </li>
                <!-- End Slide -->

            </ul>
            <!-- End Container -->
        </div>

        <!-- End Slider -->

        <!-- Gradient or SVg -->

        <div class="wave-decooration is-bottom is-white-light" style="position:relative;top:-88px">
          <!-- wave start -->
          <svg width="2000" height="128" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="2000" y="128" viewBox="0 0 2000 128" enable-background="new 0 0 2000 128" xml:space="preserve">
              <path opacity="0.2" fill="#f7f7f7" d="M1999.5,22.2c-346-0.6-524.6-4.7-878.8,4.4c-286.6,7.4-442.3,54-608.1,51.2C307.3,74.3,202.5,5-0.5,28.1v100.4l2000-0.5V22.2z"></path>
              <path opacity="0.2" fill="#f7f7f7" d="M-0.3,46.1C251,15.3,440.9,84.7,499.6,98.4c54.7,12.8,122.5,12,186.7-5.3c154.2-41.6,315.5-70.9,475.2-67.5s324.6,22.4,484.3,19.7c133-2.3,302.8,1.7,352.8,3.7c0,21.3,0,80,0,80H-0.5L-0.3,46.1z"></path>
              <path opacity="0.4" fill="#f7f7f7" d="M2000,41.2c-139.8-12.7-219.9-10.8-360.2-11.2c-285.5-0.8-487.5,18-736.2,51.1C647,115.4,546.7,116.4,199.2,53.6C140.3,43,59.5,45.6-0.5,52.3V130h2000L2000,41.2z"></path>
              <path fill="#f7f7f7" d="M1634.6,50.1c-193.8,11.9-366.9,24.9-569,50c-110.2,13.7-221.2,21.5-332.3,19.6c-187-3.3-344.5-29.7-560.9-69.8c-122.2-22.6-172.8-4-172.8-4V130h1998V46C1997.5,46,1831,38.1,1634.6,50.1z"></path>
          </svg>
          <!-- wave end -->
        </div>


    </section>
    <!-- END HOME SECTION -->

    <!-- BLOCK NAVIGATION -->
    <div class="sticky-item fullwidth hidden-xs" data-top-spacing="25">
        <!-- Container for nav -->
        <div class="block-navigation top-moved nav-menu bg-colored container bs-lg radius-lg o-hidden">
            <!-- Link Styles -->
            <ul class="nav uppercase font-12 extrabold calculate-width white">
                <li><a href="#top" class="click-effect">Home</a></li>
                <li><a href="#about" class="click-effect">About Us</a></li>
                <li><a href="#works" class="click-effect">Gallery</a></li>
                <li><a href="#team" class="click-effect">Team</a></li>
                <li><a href="#prices" class="click-effect">Prices</a></li>
                <li><a href="#contact" class="click-effect">contact</a></li>
            </ul>
        </div>
    </div>
    <!-- END BLOCK NAVIGATION -->
    <!-- ABOUT SECTION -->
    <section id="about" class="container t-center py" style="padding-top:40px !important">
        <!-- Title -->
        <h4 class="playfair italic light gray7">Welcome To ZipShip</h4>
        <!-- Title Slider Texts - For #type span. -->
         <div id="type-get">
             <p>With ZipShip.</p>
             <p>With Our Team.</p>
             <p>With Awesome Services.</p>
         </div>
        <h1 class="extrabold-title">Feel like a hero. Live a better life. <span id="type" class="playfair italic"></span></h1>
        <!-- Divider -->
        <!-- <div class="divider-3 container-xs font-13 uppercase extrabold xs-mt">
            <span><i class="icon-home font-20 gray6"></i></span>
        </div>
        <!-- Description>
        <p class="lh-lg font-16 xs-mt gray6 font-13-mobile">
            It is a long established fact that a reader will be distracted by the readable content of The point using Lorem a page when looking at <br class="visible-lg">
            its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, of using Lorem Ipsum as opposed to <br class="visible-lg">
            'Content here, content here', making it look like readable English
        </p> -->
        <!-- attiq -->
    <div class="container-fluid main-content">
        <div class="row margintop10">
            <div class="col-md-4 marginLefRigZero">
                <div class="col-md-12 ft-img marginLefRigZero">
                    <div class="col-md-11 textOver marginLefRigZero">
                        <center><p>UAE</p></center>
                    </div>
                    <img src="images/ContactImages/images/blog/blog_post_02.jpg">
                </div>
            </div>
            <div class="col-md-4 marginLefRigZero">
                <div class="col-md-12 ft-img marginLefRigZero">
                    <div class="col-md-11 textOver marginLefRigZero">
                        <center><p>USA</p></center>
                    </div>
                    <img src="images/ContactImages/images/blog/blog_post_03.jpg">
                </div>

            </div>
            <div class="col-md-4 marginLefRigZero">
                <div class="col-md-12 ft-img marginLefRigZero">
                    <div class="col-md-11 textOver marginLefRigZero">
                        <center><p>UK</p></center>
                    </div>
                    <img src="images/ContactImages/images/blog/blog_post_05.jpg">
                </div>
            </div>
        </div> <!-- END OF ROW 1 -->
    </div>  <!-- END OF CONTAINER -->
    <div class="container-fluid main-content">
        <div class="row margintop10">
            <div class="col-md-3 marginLefRigZero">
                <div class="col-md-12 ft-img marginLefRigZero BigHeight">
                    <div class="col-md-11 textOver marginLefRigZero">
                        <center><p>Testing 1</p></center>
                    </div>
                    <img class="fullimagewidth" src="images/ContactImages/images/gallery/mosaic_05.jpg">
                </div>
            </div>
            <div class="col-md-6 marginLefRigZero">
                <div class="col-md-12 ft-img marginLefRigZero SmallHeight">
                    <div class="col-md-12 textOver marginLefRigZero">
                        <center><p>Testing 2</p></center>
                    </div>
                    <img class="fullimagewidth" src="images/ContactImages/images/gallery/mosaic_07.jpg">
                    <img class="halfimagewidthleft" src="images/ContactImages/images/gallery/mosaic_07.jpg">
                    <img class="halfimagewidthright" src="images/ContactImages/images/gallery/mosaic_07.jpg">
                </div>
            </div>
            <div class="col-md-3 marginLefRigZero">
                <div class="col-md-12 ft-img marginLefRigZero BigHeight">
                    <div class="col-md-11 textOver marginLefRigZero">
                        <center><p>Testing 3</p></center>
                    </div>
                    <img src="images/ContactImages/images/gallery/mosaic_06.jpg">
                </div>
            </div>
        </div> <!-- END OF ROW 2 -->
    </div>  <!-- END OF CONTAINER -->
        <!-- end attiq -->

        <div class="boxes container sm-mt t-left">
            <div class="row clearfix">
                <!-- Box -->
                <div class="col-md-3 col-sm-6 col-12 xs-mt-mobile">
                    <div class="row">
                        <!-- Icon -->
                        <div class="col-4 t-right gray3 xxs-mt">
                            <i class="fa fa-superpowers fa-4x"></i>
                        </div>
                        <div class="col-8">
                            <div class="fact" data-source="110000">
                                <div><h1 class="factor colored extrabold-title italic playfair">0</h1></div>
                            </div>
                            <h5 class="italic gray5">Totally Steps for daily.</h5>
                        </div>
                    </div>
                </div>
                <!-- Box -->
                <div class="col-md-3 col-sm-6 col-12 xs-mt-mobile">
                    <div class="row">
                        <!-- Icon -->
                        <div class="col-4 t-right gray3 xxs-mt">
                            <i class="fa fa-ravelry fa-4x"></i>
                        </div>
                        <div class="col-8">
                            <div class="fact" data-source="2200">
                                <div><h1 class="factor colored extrabold-title italic playfair">0</h1></div>
                            </div>
                            <h5 class="italic gray6">Spent calories for daily.</h5>
                        </div>
                    </div>
                </div>
                <!-- Box -->
                <div class="col-md-3 col-sm-6 col-12 xs-mt-mobile">
                    <div class="row">
                        <!-- Icon -->
                        <div class="col-4 t-right gray3 xxs-mt">
                            <i class="fa fa-thermometer-4 fa-4x"></i>
                        </div>
                        <div class="col-8">
                            <div class="fact" data-source="3000">
                                <div><h1 class="factor colored extrabold-title italic playfair">0</h1></div>
                            </div>
                            <h5 class="italic gray6">ML Water for daily.</h5>
                        </div>
                    </div>
                </div>
                <!-- Box -->
                <div class="col-md-3 col-sm-6 col-12 xs-mt-mobile">
                    <div class="row">
                        <!-- Icon -->
                        <div class="col-4 t-right gray3 xxs-mt">
                            <i class="fa fa-shower fa-4x"></i>
                        </div>
                        <div class="col-8">
                            <div class="fact" data-source="14000">
                                <div><h1 class="factor colored extrabold-title italic playfair">0</h1></div>
                            </div>
                            <h5 class="italic gray6">Totally Steps for daily.</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END ABOUT SECTION -->
    <!-- WORKS -->
    <section class="bg-soft-colored2 bg-soft lg-mt pb cover" data-background="content/herakles/images/background_01.jpg">

        <!-- Carousel Works -->
        <section id="works" class="works container-lg">
            <!-- Portfolio Items -->
            <div id="work-items" class="cbp lightbox_gallery white t-left">

                <!-- Item -->
                <div class="cbp-item">
                    <!-- Your Url -->
                    <a href="content/herakles/images/works_01_b.jpg" class="cbp-caption">
                        <!-- Your Image -->
                        <div class="cbp-caption-defaultWrap ">
                            <img src="content/herakles/images/works_01.jpg" alt="">
                        </div>
                        <!-- Details -->
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignLeft">
                                <div class="cbp-l-caption-body">
                                    <!-- Texts -->
                                    <h2>Don't miss the life</h2>
                                    <p>Photography</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- End Item -->

                <!-- Item -->
                <div class="cbp-item">
                    <!-- Your Url -->
                    <a href="content/herakles/images/works_02_b.jpg" class="cbp-caption">
                        <!-- Your Image -->
                        <div class="cbp-caption-defaultWrap">
                            <img src="content/herakles/images/works_02.jpg" alt="">
                        </div>
                        <!-- Details -->
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignLeft">
                                <div class="cbp-l-caption-body">
                                    <!-- Texts -->
                                    <h2>The best gyms</h2>
                                    <p>Video, GYM</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- End Item -->

                <!-- Item -->
                <div class="cbp-item">
                    <!-- Your Url -->
                    <a href="content/herakles/images/works_03_b.jpg" class="cbp-caption">
                        <!-- Your Image -->
                        <div class="cbp-caption-defaultWrap">
                            <img src="content/herakles/images/works_03.jpg" alt="">
                        </div>
                        <!-- Details -->
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignLeft">
                                <div class="cbp-l-caption-body">
                                    <!-- Texts -->
                                    <h2>Warm-up tours</h2>
                                    <p>Photography, gyms</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- End Item -->

                <!-- Item -->
                <div class="cbp-item">
                    <!-- Your Url -->
                    <a href="content/herakles/images/works_04_b.jpg" class="cbp-caption">
                        <!-- Your Image -->
                        <div class="cbp-caption-defaultWrap">
                            <img src="content/herakles/images/works_04.jpg" alt="">
                        </div>
                        <!-- Details -->
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignLeft">
                                <div class="cbp-l-caption-body">
                                    <!-- Texts -->
                                    <h2>The best assistant</h2>
                                    <p>health, water</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- End Item -->

                <!-- Item -->
                <div class="cbp-item">
                    <!-- Your Url -->
                    <a href="content/herakles/images/works_05_b.jpg" class="cbp-caption">
                        <!-- Your Image -->
                        <div class="cbp-caption-defaultWrap">
                            <img src="content/herakles/images/works_05.jpg" alt="">
                        </div>
                        <!-- Details -->
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignLeft">
                                <div class="cbp-l-caption-body">
                                    <!-- Texts -->
                                    <h2>Fitness center</h2>
                                    <p>Team, work</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- End Item -->

                <!-- Item -->
                <div class="cbp-item">
                    <!-- Your Url -->
                    <a href="content/herakles/images/works_01_b.jpg" class="cbp-caption">
                        <!-- Your Image -->
                        <div class="cbp-caption-defaultWrap">
                            <img src="content/herakles/images/works_01.jpg" alt="">
                        </div>
                        <!-- Details -->
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignLeft">
                                <div class="cbp-l-caption-body">
                                    <!-- Texts -->
                                    <h2>Don't stop the music</h2>
                                    <p>Music, Lifestyle</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- End Item -->

                <!-- Item -->
                <div class="cbp-item">
                    <!-- Your Url -->
                    <a href="content/herakles/images/works_02_b.jpg" class="cbp-caption">
                        <!-- Your Image -->
                        <div class="cbp-caption-defaultWrap">
                            <img src="content/herakles/images/works_02.jpg" alt="">
                        </div>
                        <!-- Details -->
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignLeft">
                                <div class="cbp-l-caption-body">
                                    <!-- Texts -->
                                    <h2>The best gyms</h2>
                                    <p>Video, GYM</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- End Item -->
            </div>
            <!-- End Portfolio Items -->
        </section>


        <!-- Skills -->
        <div class="container skills white t-center">
            <!-- Title -->
            <h1 class="normal-title">Meet With <span class="extrabold"> Quadra Multi Purpose </span> &amp; Creative Theme.</h1>
            <h4 class="gray4 xxs-mt font-16 lh-md font-13-mobile">
                It is a long established fact that a reader will be distracted by the readable content of <br class="hidden-xs">
                a page when looking at its layout. The point of using Lorem Ipsum.
            </h4>

            <div class="sm-mt">
                <a href="https://vimeo.com/46491619" class="lightbox border-btn border-dashed lg-btn mnw-180 radius-lg inline-block bg-white-hover dark-hover qdr-hover-3 fa fa-play bs-light-hover"><i class="fa fa-play"></i></a>
            </div>

            <!-- Skills -->
            <div class="container qdr-col-2 gap-5 skills-type-2 progress-sm uppercase">
                <!-- Item -->
                <div class="item">
                    <!-- Title -->
                    <h5 class="xxs-mb">Web Design %92</h5>
                    <!-- Bar Container -->
                    <div class="progress">
                        <!-- Bar - You can edit the data-value area -->
                        <div class="progress-bar bg-white" data-value="92"></div>
                    </div>
                </div>
                <!-- End Item -->
                <!-- Item -->
                <div class="item">
                    <!-- Title -->
                    <h5 class="xxs-mb">HTML&amp;CSS %89</h5>
                    <!-- Bar Container -->
                    <div class="progress">
                        <!-- Bar - You can edit the data-value area -->
                        <div class="progress-bar bg-white" data-value="89"></div>
                    </div>
                </div>
                <!-- End Item -->
                <!-- Item -->
                <div class="item">
                    <!-- Title -->
                    <h5 class="xxs-mb">Wordpress 80%</h5>
                    <!-- Bar Container -->
                    <div class="progress">
                        <!-- Bar - You can edit the data-value area -->
                        <div class="progress-bar bg-white" data-value="80"></div>
                    </div>
                </div>
                <!-- End Item -->
                <!-- Item -->
                <div class="item">
                    <!-- Title -->
                    <h5 class="xxs-mb">Photoshop %90</h5>
                    <!-- Bar Container -->
                    <div class="progress">
                        <!-- Bar - You can edit the data-value area -->
                        <div class="progress-bar bg-white" data-value="90"></div>
                    </div>
                </div>
                <!-- End Item -->
                <!-- Item -->
                <div class="item">
                    <!-- Title -->
                    <h5 class="xxs-mb">Graphic 95%</h5>
                    <!-- Bar Container -->
                    <div class="progress">
                        <!-- Bar - You can edit the data-value area -->
                        <div class="progress-bar bg-white" data-value="95"></div>
                    </div>
                </div>
                <!-- End Item -->
                <!-- Item -->
                <div class="item">
                    <!-- Title -->
                    <h5 class="xxs-mb">Videography %80</h5>
                    <!-- Bar Container -->
                    <div class="progress">
                        <!-- Bar - You can edit the data-value area -->
                        <div class="progress-bar bg-white" data-value="94"></div>
                    </div>
                </div>
                <!-- End Item -->
            </div>
            <!-- End Container -->


            <!-- Call To Action -->
            <div class="t-left container bg-gradient1 white radius bs-lg">
                <div class="row no-mx calculate-height">
                    <div class="col-md-9 col-12 t-center-sm height-auto-mobile xs-py xs-pl">
                        <h3 class="playfair italic light lh-sm">Create a <strong> pixel perfect</strong> web site with the <strong>Quadra!</strong></h3>
                        <p class="gray4 mini-mt">This is a modified jumbotron that occupies the.</p>
                    </div>
                    <div class="col-md-3 col-12 t-center height-auto-mobile xs-mb-mobile">
                        <div class="v-center">
                            <a href="#" class="stay qfm-trigger lg-btn radius-lg border-btn border-dashed bg-white-hover slow1 dark-hover inline-block">Learn more</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Call To Action -->

        </div>
        <!-- End Skills -->

    </section>
    <!-- END WORKS -->
    <!-- Boxes With Slider -->
    <section id="boxes" class="py">

        <!-- BOXES -->
        <div class="t-center container custom-slider c-resize circle-dots dark-dots" data-slick='{"dots": true, "autoplay": false, "autoplaySpeed": 3000, "arrows": false, "draggable":true, "slidesToShow": 3, "slidesToScroll": 1}'>
            <!-- Box -->
            <div class="xxs-px xxs-pt qdr-hover-">
                <!-- Icon -->
                <div class="icon-extreme circle bg-white gray6 border-1 border-dashed border-gray6 relative">
                    <i class="icon-layers text-lg"></i>
                    <div class="basic-mark icon-mark to-right to-bottom font-10 circle white bg-colored bold">1</div>
                </div>
                <h4 class="xxs-mt bold-subtitle">Exclusive Design</h4>
                <p class="gray6">Discovered the undoubtable source.</p>
                <p class="xxs-mt gray6 font15">There are many variations of passages of Lorem load Ipsum available, predefined but the majority have suffe alteration in some form, by injected humour.</p>
            </div>
            <!-- End Box -->
            <!-- Box -->
            <div class="xxs-px xxs-pt">
                <!-- Icon -->
                <div class="icon-extreme circle bg-white gray6 border-1 border-dashed border-gray6 relative">
                    <i class="icon-rocket text-lg"></i>
                    <div class="basic-mark icon-mark to-right to-bottom font-10 circle white bg-colored bold">2</div>
                </div>
                <h4 class="xxs-mt bold-subtitle">Super Responsive</h4>
                <p class="gray6">Discovered the undoubtable source.</p>
                <p class="xxs-mt gray6 font15">There are many variations of passages of Lorem load Ipsum available, predefined but the majority have suffe alteration in some form, by injected humour.</p>
            </div>
            <!-- End Box -->
            <!-- Box -->
            <div class="xxs-px xxs-pt">
                <!-- Icon -->
                <div class="icon-extreme circle bg-white gray6 border-1 border-dashed border-gray6 relative">
                    <i class="icon-trophy text-lg"></i>
                    <div class="basic-mark icon-mark to-right to-bottom font-10 circle white bg-colored bold">3</div>
                </div>
                <h4 class="xxs-mt bold-subtitle">Unlimited Helpers</h4>
                <p class="gray6">Discovered the undoubtable source.</p>
                <p class="xxs-mt gray6 font15">There are many variations of passages of Lorem load Ipsum available, predefined but the majority have suffe alteration in some form, by injected humour.</p>
            </div>
            <!-- End Box -->
            <!-- Box -->
            <div class="xxs-px xxs-pt">
                <!-- Icon -->
                <div class="icon-extreme circle bg-white gray6 border-1 border-dashed border-gray6 relative">
                    <i class="icon-options text-lg"></i>
                    <div class="basic-mark icon-mark to-right to-bottom font-10 circle white bg-colored bold">4</div>
                </div>
                <h4 class="xxs-mt bold-subtitle">High Performance</h4>
                <p class="gray6">Discovered the undoubtable source.</p>
                <p class="xxs-mt gray6 font15">There are many variations of passages of Lorem load Ipsum available, predefined but the majority have suffe alteration in some form, by injected humour.</p>
            </div>
            <!-- End Box -->
        </div>

    </section>
    <!-- TEAM SECTION -->
    <section id="team" class="team-type-2 t-center py bg-gray1 border-1 border-gray1">

        <!-- Title -->
        <h1 class="normal-title">Meet With Our <span class="extrabold">Professional</span> Coaches.</h1>
        <h4 class="xs-mt font-15 gray7 font-13-mobile">
            It is a long established fact that a reader will be distracted by the readable content of a page when looking at <br class="hidden-xs">
            its layout. The point of using Lorem Ipsum.
        </h4>

        <!-- Container -->
        <div class="container custom-slider strip-dots dark-dots" data-slick='{"dots": true, "arrows": false, "fade": false, "slidesToShow": 3, "slidesToScroll": 2}'>

            <!-- Member -->
            <div class="member">
                <!-- Container for details -->
                <div class="member-body">
                    <img src="content/herakles/images/team_01.jpg" alt="team member">
                    <!-- Socials -->
                    <div class="member-socials">
                         <!-- Social -->
                        <div><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></div>
                        <!-- Social -->
                        <div><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></div>
                        <!-- Social -->
                        <div><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></div>
                        <!-- Social -->
                        <div><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a></div>
                    </div>
                </div>
                <!-- End Container for details -->
                <!-- Description -->
                <div class="member-description">
                    <h2>
                        Amelia Anderson
                    </h2>
                    <h4 class="colored">
                        Fitness trainer
                    </h4>
                    <p>
                        There are many variations of passages of Lorem Ipsum available, in some form.
                    </p>
                </div>
                <!-- Progress Bars -->
                <div class="team-progress">
                    <!-- Title -->
                    <h3>FITNESS 82%</h3>
                    <!-- Bar -->
                    <div class="prg-bg"><div class="progress-bar bg-colored t-left" data-value="82"></div></div>
                    <!-- Title -->
                    <h3>YOGA 91%</h3>
                    <!-- Bar -->
                    <div class="prg-bg"><div class="progress-bar bg-colored t-left" data-value="91"></div></div>
                </div>
                <!-- End Progress Bars -->
            </div>

            <!-- Member -->
            <div class="member">
                <!-- Container for details -->
                <div class="member-body">
                    <img src="content/herakles/images/team_02.jpg" alt="team member">
                    <!-- Socials -->
                    <div class="member-socials">
                         <!-- Social -->
                        <div><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></div>
                        <!-- Social -->
                        <div><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></div>
                        <!-- Social -->
                        <div><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></div>
                        <!-- Social -->
                        <div><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a></div>
                    </div>
                </div>
                <!-- End Container for details -->
                <!-- Description -->
                <div class="member-description">
                    <h2>
                        Carter Cox
                    </h2>
                    <h4 class="colored">
                        Fitness trainer
                    </h4>
                    <p>
                        There are many variations of passages of Lorem Ipsum available, in some form.
                    </p>
                </div>
                <!-- Progress Bars -->
                <div class="team-progress">
                    <!-- Title -->
                    <h3>FITNESS 80%</h3>
                    <!-- Bar -->
                    <div class="prg-bg"><div class="progress-bar bg-colored t-left" data-value="80"></div></div>
                   <!-- Title -->
                    <h3>BODY BUILDING 91%</h3>
                    <!-- Bar -->
                    <div class="prg-bg"><div class="progress-bar bg-colored t-left" data-value="80"></div></div>
                </div>
                <!-- End Progress Bars -->
            </div>

            <!-- Member -->
            <div class="member">
                <!-- Container for details -->
                <div class="member-body">
                    <img src="content/herakles/images/team_03.jpg" alt="team member">
                    <!-- Socials -->
                    <div class="member-socials">
                         <!-- Social -->
                        <div><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></div>
                        <!-- Social -->
                        <div><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></div>
                        <!-- Social -->
                        <div><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></div>
                        <!-- Social -->
                        <div><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a></div>
                    </div>
                </div>
                <!-- End Container for details -->
                <!-- Description -->
                <div class="member-description">
                    <h2>
                        Eva Holmes
                    </h2>
                    <h4 class="colored">
                        Fitness trainer
                    </h4>
                    <p>
                        There are many variations of passages of Lorem Ipsum available, in some form.
                    </p>
                </div>
                <!-- Progress Bars -->
                <div class="team-progress">
                    <!-- Title -->
                    <h3>FITNESS 80%</h3>
                    <!-- Bar -->
                    <div class="prg-bg"><div class="progress-bar bg-colored t-left" data-value="75"></div></div>
                   <!-- Title -->
                    <h3>YOGA 75%</h3>
                    <!-- Bar -->
                    <div class="prg-bg"><div class="progress-bar bg-colored t-left" data-value="75"></div></div>
                </div>
                <!-- End Progress Bars -->
            </div>

        </div>
        <!-- End Team Slider -->
    </section>
    <!-- END TEAM -->
    <!-- MODAL TRIGGER -->
    <section id="modal-hider" class="qfm-trigger qdr-hover-6 c-pointer py bg-gradient white t-center">
        <div class="container">
            <span class="icon-plus text-lg"></span>
            <h5 class="extrabold mt-7">SEE OUR PLANS</h5>
        </div>
    </section>
    <!-- END MODAL TRIGGER -->
    <!-- QUADRA FIXED MODAL - you can leave empty showme and hideme areas -->
    <section id="quadra_fixed_modal" class="faq bg-white slow-qdr" data-showme="#works" data-hideme="#modal-hider">
        <!-- Modal title and title -->
        <div class="quadra_fixed_modal_top slow-qdr no-border">
            <!-- Button, select your color and background color. you can use data-color="#" attribute. -->
            <div id="qfm_button" class="white bg-gradient">
                <!-- Comp. Hide Modal -->
                <span class="hide-modal"></span>
                <!-- Plus icon -->
                <i class="icon-plus fa-2x gray1"></i>
            </div>
            <!-- Title, select your color and background color. you can use data-color="#" attribute. -->
            <div id="qfm_title" class="dark bg-white">
                <i class="fa fa-close close_modal"></i>
                <span class="modal_title font-16 extrabold">Read more about us.</span>
            </div>
        </div>
        <!-- Modal Body -->
        <div class="qfm-body bg-gray2 clearfix">
            <!-- Filters -->
            <div id="works-without-images-filters" class="cbp-l-filters-work uppercase">
                <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">
                    SHOW ALL
                </div>
                <div data-filter=".design" class="cbp-filter-item">
                    design <div class="cbp-filter-counter"></div>
                </div>
                <div data-filter=".logo" class="cbp-filter-item">
                    logo <div class="cbp-filter-counter"></div>
                </div>
                <div data-filter=".branding" class="cbp-filter-item">
                    branding <div class="cbp-filter-counter"></div>
                </div>
                <div data-filter=".wordpress" class="cbp-filter-item">
                    wordpress <div class="cbp-filter-counter"></div>
                </div>
            </div>
            <!-- Works -->
            <div id="works-without-images" class="works-without-images cbp container t-left font-14">
                <!-- Item -->
                <div class="cbp-item logo wordpress">
                    <a href="#" target="_blank" class="cbp-caption item-body icon-arrow-trigger bg-white slow">
                        <h3 class="title">Our Vision</h3>
                        <p class="desc">
                            The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. accompanied by English versions from the 1914 translation by H. Rackham.
                        </p>
                        <span class="icon-arrow bg-colored"></span>
                    </a>
                </div>
                <!-- Item -->
                <div class="cbp-item logo branding">
                    <a href="#" target="_blank" class="cbp-caption item-body icon-arrow-trigger bg-white slow">
                        <h3 class="title">Our Mission</h3>
                        <p class="desc">
                            The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
                        </p>
                        <span class="icon-arrow bg-colored"></span>
                    </a>
                </div>
                <!-- Item -->
                <div class="cbp-item design branding wordpress">
                    <a href="#" target="_blank" class="cbp-caption item-body icon-arrow-trigger bg-white slow">
                        <h3 class="title">About Quadra</h3>
                        <p class="desc">
                            Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
                        </p>
                        <span class="icon-arrow bg-colored"></span>
                    </a>
                </div>
                <!-- Item -->
                <div class="cbp-item logo wordpress">
                    <a href="#" target="_blank" class="cbp-caption item-body icon-arrow-trigger bg-white slow">
                        <h3 class="title">Our Vision</h3>
                        <p class="desc">
                            The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
                        </p>
                        <span class="icon-arrow bg-colored"></span>
                    </a>
                </div>
                <!-- Item -->
                <div class="cbp-item design logo branding">
                    <a href="#" target="_blank" class="cbp-caption item-body icon-arrow-trigger bg-white slow">
                        <h3 class="title">
                            <img src="content/atlas/images/logo_01.png" alt="logo image">
                        </h3>
                        <p class="desc">
                            The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
                        </p>
                        <span class="icon-arrow bg-colored"></span>
                    </a>
                </div>
                <!-- Item -->
                <div class="cbp-item design wordpress">
                    <a href="#" target="_blank" class="cbp-caption item-body icon-arrow-trigger bg-white slow">
                        <h3 class="title">
                            <img src="images/logos/logo_02.png" alt="logo image">
                        </h3>
                        <p class="desc">
                            The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
                        </p>
                        <span class="icon-arrow bg-colored"></span>
                    </a>
                </div>
                <!-- Item -->
                <div class="cbp-item design branding">
                    <a href="#" target="_blank" class="cbp-caption item-body icon-arrow-trigger bg-white slow">
                        <h3 class="title extrabold-title">
                            Extrabold Title
                        </h3>
                        <p class="desc">
                            The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
                        </p>
                        <span class="icon-arrow bg-colored"></span>
                    </a>
                </div>
                <!-- Item -->
                <div class="cbp-item design logo branding wordpress">
                    <a href="#" target="_blank" class="cbp-caption item-body icon-arrow-trigger bg-white slow">
                        <h2 class="title colored playfair italic">Styled Title</h2>
                        <p class="desc">
                            The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
                        </p>
                        <span class="icon-arrow bg-colored"></span>
                    </a>
                </div>
                <!-- Item -->
                <div class="cbp-item logo wordpress">
                    <a href="#" target="_blank" class="cbp-caption item-body icon-arrow-trigger bg-white slow">
                        <h4 class="title">Extra long description</h4>
                        <p class="desc">
                            TheOn the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, standard chunk of Lorem Ipsum used since the 1500s is
                        </p>
                        <p class="desc">
                            reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
                        </p>
                        <span class="icon-arrow bg-colored"></span>
                    </a>
                </div>
                <!-- Item -->
                <div class="cbp-item design branding">
                    <a href="#" target="_blank" class="cbp-caption item-body icon-arrow-trigger bg-white slow">
                        <h3 class="title">Attach an image</h3>
                        <p class="desc">
                            The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.
                        </p>
                        <p class="desc">
                            <img src="images/blocks/text-background.jpg" alt="">
                        </p>
                        <p class="desc">
                            Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
                        </p>
                        <span class="icon-arrow bg-colored"></span>
                    </a>
                </div>
                <!-- Item -->
                <div class="cbp-item design logo branding">
                    <a href="#" target="_blank" class="cbp-caption item-body icon-arrow-trigger bg-white slow">
                        <h3 class="title">
                            <i class="icon-home"></i>
                            Flat Icon
                        </h3>
                        <p class="desc">
                            The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
                        </p>
                        <span class="icon-arrow bg-colored"></span>
                    </a>
                </div>
                <!-- Item -->
                <div class="cbp-item design branding wordpress">
                    <a href="#" target="_blank" class="cbp-caption item-body icon-arrow-trigger bg-white slow">
                        <h3 class="title">Only Title</h3>

                        <span class="icon-arrow bg-colored"></span>
                    </a>
                </div>
            </div>
        </div>
        <!-- Modal Body End -->
    </section>
    <!-- END QUADRA FIXED MODAL -->
    <!-- PRICES SECTION -->
    <section id="prices" class="py bg-gray border-gray2 border-1 t-center">

        <!-- Title -->
        <h1 class="text-lg normal-title">Our <span class="extrabold italic playfair"> Package Prices </span></h1>
        <h4 class="gray7 xxs-mt font-15">
            It is a long established fact that a reader will be distracted by the readable content of a page when looking at <br>
            its layout. The point of using Lorem Ipsum.
        </h4>
        <!-- Divider -->
        <div class="clearfix">
            <div class="divider-3 font-13 uppercase extrabold col-md-6 offset-md-3 col-sm-12 xs-mt">
                <span><i class="fa fa-gift fa-2x gray6"></i></span>
            </div>
        </div>

        <div class="qdr-col-3 container t-center gray7 sm-pb pt">
            <!-- Box -->
            <div>
                <!-- Box Border -->
                <div class="bs-light bs-hover slow xs-pb relative">
                    <!-- Mark -->
                    <div class="basic-mark bold uppercase font-10 radius bg-white dark">
                        Hot!
                    </div>
                    <!-- Box Top -->
                    <div class="xs-py bg-gradient white">
                        <h4 class="extrabold">Standart Package</h4>
                        <h5 class="gray4">Package Subtitle</h5>
                        <!-- Price -->
                        <h3>$<span class="text-lg2 extrabold-title">19</span></h3>
                        <p class="uppercase">Per Monthly / USD</p>
                    </div>
                    <!-- List -->
                    <ul class="basic-list list-lg xs-my">
                        <li>PREMIUM PROFILE LISTING</li>
                        <li>UNLIMITED FILE ACCESS</li>
                        <li>FREE APPOINTMENTS</li>
                        <li>5 BONUS POINTS PERMONTH</li>
                        <li>2 MONTHS SUPPORT</li>
                        <li>2 SUBDOMAINS</li>
                    </ul>
                    <!-- Button -->
                    <div class="xs-mt xs-pl xs-pr">
                        <!-- Button -->
                        <a href="#" class="xl-btn block font-11 uppercase bold border-btn border-gray6 border-dashed bg-colored-hover white-hover radius-lg slow">Select This Plan</a>
                    </div>
                </div>
            </div>
            <!-- Box -->
            <div class="scaled">

                <!-- Box Border -->
                <div class="bg-gradient white bs-inset slow xs-pb relative">
                    <!-- Mark -->
                    <div class="basic-mark bold dark uppercase font-10 radius bg-white">
                        Best Deal!
                    </div>
                    <!-- Box Top -->
                    <div class="xs-py">
                        <h4 class="extrabold">Gold Package</h4>
                        <h5 class="gray4">Package Subtitle</h5>
                        <!-- Price -->
                        <h3>$<span class="text-lg2 extrabold-title">39</span></h3>
                        <p class="uppercase">Per Monthly / USD</p>
                    </div>
                    <!-- List -->
                    <ul class="basic-list list-lg border-white xs-my">
                        <li>PREMIUM PROFILE LISTING</li>
                        <li>UNLIMITED FILE ACCESS</li>
                        <li>FREE APPOINTMENTS</li>
                        <li>5 BONUS POINTS PERMONTH</li>
                        <li>2 MONTHS SUPPORT</li>
                        <li>2 SUBDOMAINS</li>
                    </ul>
                    <!-- Button -->
                    <div class="xs-mt xs-pl xs-pr">
                        <!-- Button -->
                        <a href="#" class="xl-btn block font-11 uppercase bold white border-btn border-dashed bg-white-hover colored1-hover radius-lg slow">Select This Plan</a>
                    </div>
                </div>
            </div>
            <!-- Box -->
            <div>
                <!-- Box Border -->
                <div class="bs-light bs-hover slow xs-pb relative">

                    <!-- Box Top -->
                    <div class="xs-py bg-gradient white">
                        <h4 class="extrabold">Platinium Package</h4>
                        <h5 class="gray4">Package Subtitle</h5>
                        <!-- Price -->
                        <h3>$<span class="text-lg2 extrabold-title">59</span></h3>
                        <p class="uppercase">Per Monthly / USD</p>
                    </div>
                    <!-- List -->
                    <ul class="basic-list list-lg xs-my">
                        <li>PREMIUM PROFILE LISTING</li>
                        <li>UNLIMITED FILE ACCESS</li>
                        <li>FREE APPOINTMENTS</li>
                        <li>5 BONUS POINTS PERMONTH</li>
                        <li>2 MONTHS SUPPORT</li>
                        <li>2 SUBDOMAINS</li>
                    </ul>
                    <!-- Button -->
                    <div class="xs-mt xs-pl xs-pr">
                        <!-- Button -->
                        <a href="#" class="xl-btn block font-11 uppercase bold border-btn border-gray6 border-dashed bg-colored-hover white-hover radius-lg slow">Select This Plan</a>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- TESTIMONIALS -->
    <section class="testimonials bg-soft-colored2">
        <!-- Background image - you can choose parallax ratio and offset -->
        <div class="bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="content/herakles/images/background_02.jpg"></div>
        <!-- Container -->
        <div class="container t-center white">
            <!-- Icon -->
            <div class="testimonials-icon"><i class="fa fa-quote-left"></i></div>
            <!-- Slider -->
            <div class="custom-slider qdr-controls-3 uppercase c-grab" data-slick='{"slidesToShow": 1, "arrows":true, "slidesToScroll": 1, "draggable": true, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 1}}]}'>
                <!-- Slide -->
                <div>
                    <!-- Title -->
                    <h2>
                        Consultants have credibility because they are not dumb enough to work at your company.
                    </h2>
                    <!-- Author or a note -->
                    <p>
                        Scott Adams
                    </p>
                </div>
                <!-- Slide -->
                <div>
                    <!-- Title -->
                    <h2>
                        Informed decision-making comes from a long tradition of guessing and then blaming others for inadequate results.
                    </h2>
                    <!-- Author or a note -->
                    <p>
                        Scott Adams
                    </p>
                </div>
                <!-- Slide -->
                <div>
                    <!-- Title -->
                    <h2>
                        Rotten bosses don't get better. Any strategy that assumes they can is doomed.
                    </h2>
                    <!-- Author or a note -->
                    <p>
                        Scott Adams
                    </p>
                </div>

            </div>
            <!-- End Slider -->
        </div>
    </section>
    <!-- END TESTIMONIALS -->
    <!-- CONTACT SECTION -->
    <section id="contact" class="py">

        <div class="t-center">
            <h1 class="bold-title lh-sm">
                Drop Us a Message
            </h1>
            <p class="gray6">It is a long established fact that.</p>
        </div>

        <!-- Container for form -->
        <div class="container">
            <!-- Form -->
            <div id="form" class="sm-mt t-center gray7">
                <!-- Contact Form -->
                <form id="contact_form" name="contact_form" method="post" action="http://quadra.goldeyestheme.com/v2/php/mail.php">
                    <!-- Half Inputs -->
                    <div class="half clearfix">
                        <!-- Name -->
                        <input type="text" name="name" id="name" required placeholder="Name" class="classic_form big radius-lg bg-gray3 bs-light-focus">
                        <!-- Email -->
                        <input type="email" name="email" id="email" required placeholder="E-Mail" class="classic_form big radius-lg bg-gray3 bs-light-focus">
                    </div>
                    <!-- Subject -->
                    <input type="text" name="subject" id="subject" required placeholder="Subject" class="classic_form big radius-lg bg-gray3 bs-light-focus">
                    <!-- Message -->
                    <textarea name="message" id="message" placeholder="Message" class="classic_form big radius bg-gray3 bs-light-focus"></textarea>
                    <!-- Half Inputs -->
                    <div class="half clearfix">
                        <select name="subject" form="contact_form" required class="classic_form big radius-lg bg-gray3 bs-light-focus">
                            <option value="">Select an Option</option>
                            <option value="opt1">Option 1</option>
                            <option value="opt2">Option 2</option>
                            <option value="opt3">Option 3</option>
                        </select>
                        <!-- Verify -->
                        <input type="text" name="verify" id="verify" required class="classic_form f-right big radius-lg bg-gray3 bs-light-focus">

                    </div>
                    <!-- Send Button -->
                    <button type="submit" id="submit" class="bg-colored lh-lg xl-btn font-12 bs-inset-hover long-btn xxs-mt slow width-auto click-effect white bold qdr-hover-6 radius-lg">SEND MESSAGE</button>
                </form>
                <!-- End Form -->
            </div>
            <!-- End #form div -->
        </div>
        <!-- Divider -->
        <div class="divider-1 font-11 gray6 uppercase container extrabold sm-mt xs-mb">
            <span>Stalk Us</span>
        </div>

        <!-- Buttons -->
        <div class="qdr-col-5 gap-15 container t-center">
            <!-- Button -->
            <div><a href="#" class="xl-btn block-im qdr-hover-3 fa fa-facebook facebook-bg white radius-lg bs-inset-hover qdr-hover-4">Facebook</a></div>
            <!-- Button -->
            <div><a href="#" class="xl-btn block-im qdr-hover-3 fa fa-twitter twitter-bg white radius-lg bs-inset-hover qdr-hover-4">Twitter</a></div>
            <!-- Button -->
            <div><a href="#" class="xl-btn block-im qdr-hover-3 fa fa-pinterest pinterest-bg white radius-lg bs-inset-hover qdr-hover-4">Pinterest</a></div>
            <!-- Button -->
            <div><a href="#" class="xl-btn block-im qdr-hover-3 fa fa-linkedin linkedin-bg white radius-lg bs-inset-hover qdr-hover-4">Linkedin</a></div>
            <!-- Button -->
            <div><a href="#" class="xl-btn block-im qdr-hover-3 fa fa-google-plus google-plus-bg white radius-lg bs-inset-hover qdr-hover-4">Google+</a></div>
        </div>

    </section>
    <!-- END CONTACT SECTION -->
    <!-- FOOTER -->
    <footer id="footer" class="classic_footer">
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
                            <input type="email" name="n-email" id="n-email" required placeholder="Add your E-Mail address" class="font-12 radius-lg form-control">
                            <button type="submit" id="n-submit" name="submit" class="btn-lg fullwidth radius-lg bg-colored white qdr-hover-6 click-effect bold font-12">SUBSCRIBE</button>
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
                            <img src="images/logos/icon_02_b.png" alt="logo icon" class="logo">
                        </div>
                    </div>
                    <!-- Bottom Note -->
                    <div class="col-sm-6 col-xs-12 table-im t-right height-auto-mobile t-center-xs xxs-mt-mobile">
                        <p class="v-middle">
                            <a href="#" target="_blank" class="gray6-hover underline-hover">Term and Condition</a> |
                            <a href="#" target="_blank" class="gray6-hover underline-hover">Privacy Policy</a> <br class="hidden-xs">
                            © 2018. Powered By
                            <a href="https://themeforest.net/item/quadra-creative-multipurpose-template/21409528" target="_blank" class="colored-hover underline-hover">Elite Themeforest Author</a>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- END FOOTER -->
    <!-- Quick Contact Form -->
    <div class="quick-contact-form dark border-colored">
        <h5 class="uppercase t-center extrabold h5">Drop us a message</h5>
        <p class="t-center normal h5 lh-normal">You're in the right place! Just drop us a message. How can we help?</p>
        <!-- Contact Form -->
        <form class="quick_form" name="quick_form" method="post" action="http://quadra.goldeyestheme.com/v2/php/quick-contact-form.php">
            <!-- Name -->
            <input type="text" name="qname" id="qname" required placeholder="Name" class="no-mt">
            <!-- Email -->
            <input type="email" name="qemail" id="qemail" required placeholder="E-Mail">
            <!-- Message -->
            <textarea name="qmessage" id="qmessage" required placeholder="Message"></textarea>
            <!-- Send Button -->
            <button type="submit" id="qsubmit" class="bg-colored white click-effect qdr-hover-2-rotate uppercase extrabold">Send</button>
            <!-- End Send Button -->
        </form>
        <!-- End Form -->
        <a href="https://themeforest.net/user/goldeyes#contact" target="_blank" class="inline-block colored-hover uppercase extrabold h6 no-pm qdr-hover-5">Or see contact page</a>
    </div>
    <!-- Contact us button -->
    <div class="drop-msg hide-on-home dark"><i class="fa fa-envelope-o"></i></div>
    <!-- Back To Top -->
    <a id="back-to-top" class="dark" href="#top"><i class="fa fa-angle-up"></i></a>




    <!-- SEARCH FORM FOR NAV -->
    <div class="fs-searchform">
        <form id="fs-searchform" class="v-center container" action="http://quadra.goldeyestheme.com/v2/pages-search-results.html" method="get">
            <!-- Input -->
            <input type="search" name="q" id="q" placeholder="Search on website.com" autocomplete="off">
            <!-- Search Button -->
            <button type="submit">
                <i class="fa fa-search"></i>
            </button>
            <div class="recommended font-14 normal">
                <h5 class="rcm-title">Recommend Links;</h5>
                <a href="demo-antares.html">Quadra, Antares version</a>
                <a href="demo-athena.html">Beautiful Athena demo</a>
                <a href="elements-all.html">Awesome Quadra Elements</a>
                <a href="demo-feronia.html">Why i will use the Quadra?</a>
                <a href="demo-sun.html">Checkout the Sun demo</a>
                <a href="index.html">See 600+ templates</a>
            </div>
        </form>
        <div class="form-bg"></div>
    </div>
    <!-- END SEARCH FORM -->

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
    <!-- REVOLUTION SLIDER -->
	<script type="text/javascript" src="{{asset('js/ContactJss/js/revolutionslider/jquery.themepunch.revolution.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/ContactJss/js/revolutionslider/jquery.themepunch.tools.min.js')}}"></script>
    <!-- PAGE OPTIONS - You can find special scripts for this version -->
    <script type="text/javascript" src="{{asset('herakles/js/pluginsf195.js?v=2.1')}}"></script>
    <!-- MAIN SCRIPTS - Classic scripts for all theme -->
    <script type="text/javascript" src="{{asset('js/scripts6da2.js?v=2.2')}}"></script>
    <!-- END JS FILES -->

</body>
<!-- Body End -->
</html>


<!-- <!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravelsss</title>

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    <form class="" action="" id="testing" method="post">
                      <input type="text" class="form-control" name="name" value="">
                      <input type="submit" name="submit" class="btn btn-success" value="Submit">
                    </form>
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>

    <script
      src="https://code.jquery.com/jquery-3.3.1.js"
      integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
      crossorigin="anonymous"></script>
    </script>
</html> -->
