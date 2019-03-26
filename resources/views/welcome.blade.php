<!DOCTYPE html>

<!--[if IE 8]>
<html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Head BEGIN -->
<head>
    <meta charset="utf-8">
    <title>CodeHacking</title>

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <meta content="Metronic Shop UI description" name="description">
    <meta content="Metronic Shop UI keywords" name="keywords">
    <meta content="keenthemes" name="author">

    <meta property="og:site_name" content="-CUSTOMER VALUE-">
    <meta property="og:title" content="-CUSTOMER VALUE-">
    <meta property="og:description" content="-CUSTOMER VALUE-">
    <meta property="og:type" content="website">
    <meta property="og:image" content="-CUSTOMER VALUE-"><!-- link to image for socio -->
    <meta property="og:url" content="-CUSTOMER VALUE-">

    <link rel="shortcut icon" href="favicon.ico">
    <!-- Fonts START -->
    <!-- Fonts END -->
    <!-- Global styles BEGIN -->
    <link href="{{asset('assets/assets/global/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/> -->
    <link href="{{asset('assets/assets/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css"/>

    <link href="{{asset('assets/assets/global/plugins/slider-revolution-slider/rs-plugin/css/settings.css')}}"
          rel="stylesheet">
    <!-- Global styles END -->
    <!-- Page level plugin styles BEGIN -->
    <link href="{{asset('assets/assets/global/plugins/fancybox/source/jquery.fancybox.css')}}" rel="stylesheet">
    <!-- Page level plugin styles END -->
    <!-- Theme styles BEGIN -->
    <link href="{{asset('assets/assets/global/css/components.css')}}" rel="stylesheet">
    <link href="{{asset('assets/assets/frontend/onepage/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/assets/frontend/onepage/css/style-responsive.css')}}" rel="stylesheet">
    <link href="{{asset('assets/assets/frontend/onepage/css/themes/red.css')}}" rel="stylesheet" id="style-color">
    <link href="{{asset('assets/assets/frontend/onepage/css/custom.css')}}" rel="stylesheet">
    <!-- Theme styles END -->
</head>
<!--DOC: menu-always-on-top class to the body element to set menu on top -->
<body>

<!-- Header BEGIN -->
<div class="header header-mobi-ext">
    <div class="container">
        <div class="row">
            <!-- Logo BEGIN -->
            <div class="col-md-2 col-sm-2">
                <a class="scroll site-logo" href="#promo-block"><img
                            src="{{asset('assets/assets/frontend/onepage/img/winwin/logo3.png')}}" width="100px" alt="Winery"></a>
            </div>
            <!-- Logo END -->
            <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>
            <!-- Navigation BEGIN -->
            <div class="col-md-10 ">
                <ul class="header-navigation">
                    <li class="current"><a href="#promo-block">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#team">Team</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#benefits">Benefits</a></li>
                    <li><a href="#prices">Pricing</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li class="dropdown dropdown-user">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            {{--<span class="username username-hide-on-mobile">--}}
					{{--Nick </span>--}}
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-default">

                            @if (Route::has('login'))

                                @if (Auth::check())
                                    <li><a href="{{ url('/home') }}">Winery</a></li>
                                @else

                                    <li><a href="{{ url('/login') }}">Login</a></li>
                                    <li><a href="{{ url('/register1') }}">Register</a></li>
                                @endif

                            @endif

                        </ul>
                    </li>




                </ul>
            </div>
            <!-- Navigation END -->
        </div>
    </div>
</div>
<!-- Header END -->
<!-- Promo block BEGIN -->
<div class="promo-block" id="promo-block">
    <div class="tp-banner-container">
        <div class="tp-banner">
            <ul>
                <li data-transition="fade" data-slotamount="5" data-masterspeed="700" data-delay="9400"
                    class="slider-item-1">
                    <img src="{{asset('assets/assets/frontend/onepage/img/winwin/slider2.jpg')}}" alt=""
                         data-bgfit="cover" style="opacity:0.4 !important;" data-bgposition="center center"
                         data-bgrepeat="no-repeat">
                    <div class="tp-caption large_text customin customout start"
                         data-x="center"
                         data-hoffset="0"
                         data-y="center"
                         data-voffset="60"
                         data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="1000"
                         data-start="500"
                         data-easing="Back.easeInOut"
                         data-endspeed="300">
                        <div class="promo-like"><i class="fa fa-thumbs-up"></i></div>
                        <div class="promo-like-text">
                            <h2>Let's just taste it</h2>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing<br> elit amet sed diam nonummy nibh
                                <a href="javascript:void(0);">dolore</a></p>
                        </div>
                    </div>
                    <div class="tp-caption large_bold_white fade"
                         data-x="center"
                         data-y="center"
                         data-voffset="-110"
                         data-speed="300"
                         data-start="1700"
                         data-easing="Power4.easeOut"
                         data-endspeed="500"
                         data-endeasing="Power1.easeIn"
                         data-captionhidden="off"
                         style="z-index: 6">The Best <span>WINE</span> Has Arrived
                    </div>
                </li>
                <li data-transition="fadefromright" data-slotamount="5" data-masterspeed="700" data-delay="9400"
                    class="slider-item-2">
                    <img src="{{asset('assets/assets/frontend/onepage/img/winwin/slide3.jpg')}}" alt="slidebg2"
                         data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">

                    <div class="caption lft start"
                         data-y="center"
                         data-voffset="130"
                         data-x="center"
                         data-hoffset="170"
                         data-speed="600"
                         data-start="1200"
                         data-easing="easeOutBack"><img
                                src="{{asset('assets/assets/frontend/onepage/img/winwin/logo1.png')}}"
                                alt="">
                    </div>
                    <div class="tp-caption large_bold_white fade"
                         data-x="center"
                         data-y="40"
                         data-speed="300"
                         data-start="1700"
                         data-easing="Power4.easeOut"
                         data-endspeed="500"
                         data-endeasing="Power1.easeIn"
                         data-captionhidden="off"
                         style="z-index: 6">Extremely <span>Delicious</span> Wine
                    </div>
                </li>
                 <li data-transition="fade" data-slotamount="5" data-masterspeed="700" data-delay="9400" class="slider-item-3">
                     <img src="{{asset('assets/assets/frontend/onepage/img/winwin/slider3.jpg')}}"  alt="video_woman_cover3"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">

                     <div class="tp-caption tp-fade fadeout fullscreenvideo"
                          data-x="0"
                          data-y="0"
                          data-speed="1000"
                          data-start="1100"
                          data-easing="Power4.easeOut"
                          data-endspeed="1500"
                          data-endeasing="Power4.easeIn"
                          data-autoplay="true"
                          data-autoplayonlyfirsttime="false"
                          data-nextslideatend="true"
                          data-forceCover="1"
                          data-dottedoverlay="twoxtwo"
                          data-aspectratio="16:9"
                          data-forcerewind="on"
                          style="z-index: 2">

                     </div>
                     <div class="tp-caption large_bold_white_25 customin customout tp-resizeme"
                          data-x="center" data-hoffset="0"
                          data-y="170"
                          data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:5;scaleY:5;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                          data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                          data-speed="600"
                          data-start="1400"
                          data-easing="Power4.easeOut"
                          data-endspeed="600"
                          data-endeasing="Power0.easeIn"
                          style="z-index: 3">The clearest way into the Universe<br/>is through a forest wilderness.
                     </div>
                     <div class="tp-caption medium_text_shadow customin customout tp-resizeme"
                          data-x="center" data-hoffset="0"
                          data-y="bottom" data-voffset="-140"
                          data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:5;scaleY:5;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                          data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                          data-speed="600"
                          data-start="1700"
                          data-easing="Power4.easeOut"
                          data-endspeed="600"
                          data-endeasing="Power0.easeIn"
                          style="z-index: 4">John Muir
                     </div>
                 </li>
            </ul>
        </div>
    </div>
</div>
<!-- Promo block END -->
<!-- About block BEGIN -->
<div class="about-block content content-center" id="about">
    <div class="container">
        <h2><strong>Wine</strong> Inspires</h2>
        <h4>Accept What life offers you & try to drink from every bottle </h4>
        <div class="ab-trio" style="text-align: center">
            <img src="{{asset('assets/assets/frontend/onepage/img/winwin/28.png')}}" alt=""  class="img-responsive" style="display:inline">

        </div>
    </div>
</div>
<!-- About block END -->
<!-- Services block BEGIN -->
<div class="services-block content content-center" id="services">
    <div class="container">
        <h2>Our <strong>services</strong></h2>
        <h4>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</h4>
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-12 item">
                <i class="fa fa-heart"></i>
                <h3>Fantastic Support</h3>
                <p>Lorem ipsum et dolor amet<br> consectetuer diam</p>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12 item">
                <i class="fa fa-gears"></i>
                <h3>Wine Factories</h3>
                <p>Lorem ipsum et dolor amet<br> consectetuer diam</p>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12 item">
                <i class="fa fa-diamond"></i>
                <h3>Market Screaming</h3>
                <p>Lorem ipsum et dolor amet<br> consectetuer diam</p>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12 item">
                <i class="fa fa-globe"></i>
                <h3>Globally</h3>
                <p>Lorem ipsum et dolor amet<br> consectetuer diam</p>
            </div>
        </div>
    </div>
</div>
<!-- Services block END -->
<!-- Message block BEGIN -->
<div class="message-block content content-center valign-center" id="message-block">
    <div class="valign-center-elem">
        <h2>Wine is The Answer <strong>What Was The Question?</strong></h2>
        <em>LEO</em>
    </div>
</div>
<!-- Message block END -->
<!-- Team block BEGIN -->
<div class="team-block content content-center margin-bottom-40" id="team">
    <div class="container">
        <h2>Meet <strong>the team</strong></h2>
        <h4>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</h4>
        <div class="row">
            <div class="col-md-4 item">
                <img src="{{asset('assets/assets/frontend/onepage/img/winwin/team2.jpg')}}" alt="Marcus Doe"
                     class="img-responsive">
                <h3>Marcus Doe</h3>
                <em>Founder</em>
                <p>Lorem ipsum dolor amet, tempor ut labore magna tempor dolore</p>
                <div class="tb-socio">
                    <a href="javascript:void(0);" class="fa fa-facebook"></a>
                    <a href="javascript:void(0);" class="fa fa-twitter"></a>
                    <a href="javascript:void(0);" class="fa fa-google-plus"></a>
                </div>
            </div>
            <div class="col-md-4 item">
                <img src="{{asset('assets/assets/frontend/onepage/img/winwin/tester.jpg')}}" alt="Elena Taylor"
                     class="img-responsive">
                <h3>Elena Taylor</h3>
                <em>Tester</em>
                <p>Lorem ipsum dolor amet, tempor ut labore magna tempor dolore</p>
                <div class="tb-socio">
                    <a href="javascript:void(0);" class="fa fa-facebook"></a>
                    <a href="javascript:void(0);" class="fa fa-twitter"></a>
                    <a href="javascript:void(0);" class="fa fa-google-plus"></a>
                </div>
            </div>
            <div class="col-md-4 item">
                <img src="{{asset('assets/assets/frontend/onepage/img/winwin/waiter.jpg')}}" alt="Cris Nilson"
                     class="img-responsive">
                <h3>Cris Nilson</h3>
                <em>Waiter Chif</em>
                <p>Lorem ipsum dolor amet, tempor ut labore magna tempor dolore</p>
                <div class="tb-socio">
                    <a href="javascript:void(0);" class="fa fa-facebook"></a>
                    <a href="javascript:void(0);" class="fa fa-twitter"></a>
                    <a href="javascript:void(0);" class="fa fa-google-plus"></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team block END -->
<!-- Portfolio block BEGIN -->
<div class="portfolio-block content content-center" id="portfolio">
    <div class="container">
        <h2 class="margin-bottom-50">Latest <strong>works</strong></h2>
    </div>
    <div class="row">
        <div class="item col-md-2 col-sm-6 col-xs-12">
            <img src="{{asset('assets/assets/frontend/onepage/img/portfolio/2.jpg')}}" alt="NAME"
                 class="img-responsive">
            <a href="{{asset('assets/assets/frontend/onepage/img/portfolio/2.jpg')}}" class="zoom valign-center">
                <div class="valign-center-elem">
                    <strong>London City Project</strong>
                    <em>Property</em>
                    <b>Details</b>
                </div>
            </a>
        </div>
        <div class="item col-md-2 col-sm-6 col-xs-12">
            <img src="{{asset('assets/assets/frontend/onepage/img/portfolio/13.jpg')}}" alt="NAME"
                 class="img-responsive">
            <a href="{{asset('assets/assets/frontend/onepage/img/portfolio/13.jpg')}}" class="zoom valign-center">
                <div class="valign-center-elem">
                    <strong>London City Project</strong>
                    <em>Property</em>
                    <b>Details</b>
                </div>
            </a>
        </div>
        <div class="item col-md-2 col-sm-6 col-xs-12">
            <img src="{{asset('assets/assets/frontend/onepage/img/portfolio/8.jpg')}}" alt="NAME"
                 class="img-responsive">
            <a href="{{asset('assets/assets/frontend/onepage/img/portfolio/8.jpg')}}" class="zoom valign-center">
                <div class="valign-center-elem">
                    <strong>London City Project</strong>
                    <em>Property</em>
                    <b>Details</b>
                </div>
            </a>
        </div>
        <div class="item col-md-2 col-sm-6 col-xs-12">
            <img src="{{asset('assets/assets/frontend/onepage/img/portfolio/3.jpg')}}" alt="NAME"
                 class="img-responsive">
            <a href="{{asset('assets/assets/frontend/onepage/img/portfolio/3.jpg')}}" class="zoom valign-center">
                <div class="valign-center-elem">
                    <strong>London City Project</strong>
                    <em>Property</em>
                    <b>Details</b>
                </div>
            </a>
        </div>
        <div class="item col-md-2 col-sm-6 col-xs-12">
            <img src="{{asset('assets/assets/frontend/onepage/img/portfolio/11.jpg')}}" alt="NAME"
                 class="img-responsive">
            <a href="{{asset('assets/assets/frontend/onepage/img/portfolio/11.jpg')}}" class="zoom valign-center">
                <div class="valign-center-elem">
                    <strong>London City Project</strong>
                    <em>Property</em>
                    <b>Details</b>
                </div>
            </a>
        </div>
        <div class="item col-md-2 col-sm-6 col-xs-12">
            <img src="{{asset('assets/assets/frontend/onepage/img/portfolio/4.jpg')}}" alt="NAME"
                 class="img-responsive">
            <a href="{{asset('assets/assets/frontend/onepage/img/portfolio/4.jpg')}}" class="zoom valign-center">
                <div class="valign-center-elem">
                    <strong>London City Project</strong>
                    <em>Property</em>
                    <b>Details</b>
                </div>
            </a>
        </div>
        <div class="item col-md-2 col-sm-6 col-xs-12">
            <img src="{{asset('assets/assets/frontend/onepage/img/portfolio/1.jpg')}}" alt="NAME"
                 class="img-responsive">
            <a href="{{asset('assets/assets/frontend/onepage/img/portfolio/1.jpg')}}" class="zoom valign-center">
                <div class="valign-center-elem">
                    <strong>London City Project</strong>
                    <em>Property</em>
                    <b>Details</b>
                </div>
            </a>
        </div>
        <div class="item col-md-2 col-sm-6 col-xs-12">
            <img src="{{asset('assets/assets/frontend/onepage/img/portfolio/10.jpg')}}" alt="NAME"
                 class="img-responsive">
            <a href="{{asset('assets/assets/frontend/onepage/img/portfolio/10.jpg')}}" class="zoom valign-center">
                <div class="valign-center-elem">
                    <strong>London City Project</strong>
                    <em>Property</em>
                    <b>Details</b>
                </div>
            </a>
        </div>
        <div class="item col-md-2 col-sm-6 col-xs-12">
            <img src="{{asset('assets/assets/frontend/onepage/img/portfolio/9.jpg')}}" alt="NAME"
                 class="img-responsive">
            <a href="{{asset('assets/assets/frontend/onepage/img/portfolio/9.jpg')}}" class="zoom valign-center">
                <div class="valign-center-elem">
                    <strong>London City Project</strong>
                    <em>Property</em>
                    <b>Details</b>
                </div>
            </a>
        </div>
        <div class="item col-md-2 col-sm-6 col-xs-12">
            <img src="{{asset('assets/assets/frontend/onepage/img/portfolio/7.jpg')}}" alt="NAME"
                 class="img-responsive">
            <a href="{{asset('assets/assets/frontend/onepage/img/portfolio/7.jpg')}}" class="zoom valign-center">
                <div class="valign-center-elem">
                    <strong>London City Project</strong>
                    <em>Property</em>
                    <b>Details</b>
                </div>
            </a>
        </div>
        <div class="item col-md-2 col-sm-6 col-xs-12">
            <img src="{{asset('assets/assets/frontend/onepage/img/portfolio/2.jpg')}}" alt="NAME"
                 class="img-responsive">
            <a href="{{asset('assets/assets/frontend/onepage/img/portfolio/2.jpg')}}" class="zoom valign-center">
                <div class="valign-center-elem">
                    <strong>London City Project</strong>
                    <em>Property</em>
                    <b>Details</b>
                </div>
            </a>
        </div>
        <div class="item col-md-2 col-sm-6 col-xs-12">
            <img src="{{asset('assets/assets/frontend/onepage/img/portfolio/8.jpg')}}" alt="NAME"
                 class="img-responsive">
            <a href="{{asset('assets/assets/frontend/onepage/img/portfolio/8.jpg')}}" class="zoom valign-center">
                <div class="valign-center-elem">
                    <strong>London City Project</strong>
                    <em>Property</em>
                    <b>Details</b>
                </div>
            </a>
        </div>
    </div>
</div>
<!-- Portfolio block END -->
<!-- Choose us block BEGIN -->
<div class="choose-us-block content text-center margin-bottom-40" id="benefits">
    <div class="container">
        <h2>Why to <strong>choose us</strong></h2>
        <h4>Lorem ipsum dolor sit amet, <a href="javascript:void(0);">consectetuer adipiscing</a> elit, sed diam nonummy<br>
            nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</h4>
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12 text-left">
                <img src="{{asset('assets/assets/frontend/onepage/img/winwin/logo2.png')}}" alt="Why to choose us"
                     class="img-responsive">
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 text-left">
                <div class="panel-group" id="accordion1">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h5 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1"
                                   href="#accordion1_1">Lorem ipsum dolor sit amet</a>
                            </h5>
                        </div>
                        <div id="accordion1_1" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim minim veniam quis nostrud
                                    exercitation dolore magna ullamco.</p>
                                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco sed eiusmod tempor ut
                                    labore et dolore.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h5 class="panel-title">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1"
                                   href="#accordion1_2">Consectetur adipisicing elit</a>
                            </h5>
                        </div>
                        <div id="accordion1_2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim minim veniam quis nostrud
                                    exercitation dolore magna ullamco.</p>
                                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco sed eiusmod tempor ut
                                    labore et dolore.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h5 class="panel-title">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1"
                                   href="#accordion1_3">Augue assum anteposuerit dolore</a>
                            </h5>
                        </div>
                        <div id="accordion1_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim minim veniam quis nostrud
                                    exercitation dolore magna ullamco.</p>
                                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco sed eiusmod tempor ut
                                    labore et dolore.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h5 class="panel-title">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1"
                                   href="#accordion1_4">Sollemnes in futurum</a>
                            </h5>
                        </div>
                        <div id="accordion1_4" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim minim veniam quis nostrud
                                    exercitation dolore magna ullamco.</p>
                                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco sed eiusmod tempor ut
                                    labore et dolore.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h5 class="panel-title">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1"
                                   href="#accordion1_5">Nostrud Tempor veniam</a>
                            </h5>
                        </div>
                        <div id="accordion1_5" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim minim veniam quis nostrud
                                    exercitation dolore magna ullamco.</p>
                                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco sed eiusmod tempor ut
                                    labore et dolore.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h5 class="panel-title">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1"
                                   href="#accordion1_6">Ut enem magana sed dolore</a>
                            </h5>
                        </div>
                        <div id="accordion1_6" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim minim veniam quis nostrud
                                    exercitation dolore magna ullamco.</p>
                                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco sed eiusmod tempor ut
                                    labore et dolore.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Choose us block END -->
<!-- Checkout block BEGIN -->
<div class="checkout-block content">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h2>CHECK OUT ADMIN THEME! <em>Most Full Featured &amp; Powerfull Admin Theme</em></h2>
            </div>
            <div class="col-md-2 text-right">
                <a href="http://www.keenthemes.com/preview/index.php?theme=metronic_admin&amp;page=index.html"
                   target="_blank" class="btn btn-primary">Live preview</a>
            </div>
        </div>
    </div>
</div>
<!-- Checkout block END -->
<!-- Facts block BEGIN -->
<div class="facts-block content content-center" id="facts-block">
    <h2>Some facts about us</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="item">
                    <strong>2 million</strong>
                    Bottle Sold
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="item">
                    <strong>140</strong>
                    Team Members Crew
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="item">
                    <strong>290k+</strong>
                    online Sold
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="item">R
                    <strong>5k</strong>
                    Weekly Sales
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Facts block END -->
<!-- Prices block BEGIN -->
<div class="prices-block content content-center" id="prices">
    <div class="container">
        <h2 class="margin-bottom-50"><strong>Pricing</strong> Tables</h2>
        <div class="row">
            <!-- Pricing item BEGIN -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="pricing-item">
                    <div class="pricing-head">
                        <h3>Beginner</h3>
                        <p>Lorem ipsum dolor</p>
                    </div>
                    <div class="pricing-content">
                        <div class="pi-price">
                            <strong>$<em>19</em></strong>
                            <p>Per Month</p>
                        </div>
                        <ul class="list-unstyled">
                            <li><i class="fa fa-circle"></i> Lorem ipsum dolor</li>
                            <li><i class="fa fa-circle"></i> Lorem ipsum dolor</li>
                            <li><i class="fa fa-circle"></i> Lorem ipsum dolor</li>
                        </ul>
                    </div>
                    <div class="pricing-footer">
                        <a class="btn btn-default" href="javascript:void(0);">Sign Up</a>
                    </div>
                </div>
            </div>
            <!-- Pricing item END -->
            <!-- Pricing item BEGIN -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="pricing-item">
                    <div class="pricing-head">
                        <h3>Pro</h3>
                        <p>Lorem ipsum dolor</p>
                    </div>
                    <div class="pricing-content">
                        <div class="pi-price">
                            <strong>$<em>25</em></strong>
                            <p>Per Month</p>
                        </div>
                        <ul class="list-unstyled">
                            <li><i class="fa fa-circle"></i> Lorem ipsum dolor</li>
                            <li><i class="fa fa-circle"></i> Lorem ipsum dolor</li>
                            <li><i class="fa fa-circle"></i> Lorem ipsum dolor</li>
                        </ul>
                    </div>
                    <div class="pricing-footer">
                        <a class="btn btn-default" href="javascript:void(0);">Sign Up</a>
                    </div>
                </div>
            </div>
            <!-- Pricing item END -->
            <!-- Pricing item BEGIN -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="pricing-item">
                    <div class="pricing-head">
                        <h3>Expert</h3>
                        <p>Lorem ipsum dolor</p>
                    </div>
                    <div class="pricing-content">
                        <div class="pi-price">
                            <strong>$<em>59</em></strong>
                            <p>Per Month</p>
                        </div>
                        <ul class="list-unstyled">
                            <li><i class="fa fa-circle"></i> Lorem ipsum dolor</li>
                            <li><i class="fa fa-circle"></i> Lorem ipsum dolor</li>
                            <li><i class="fa fa-circle"></i> Lorem ipsum dolor</li>
                        </ul>
                    </div>
                    <div class="pricing-footer">
                        <a class="btn btn-default" href="javascript:void(0);">Sign Up</a>
                    </div>
                </div>
            </div>
            <!-- Pricing item END -->
            <!-- Pricing item BEGIN -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="pricing-item">
                    <div class="pricing-head">
                        <h3>Hi-Tech</h3>
                        <p>Lorem ipsum dolor</p>
                    </div>
                    <div class="pricing-content">
                        <div class="pi-price">
                            <strong>$<em>98</em></strong>
                            <p>Per Month</p>
                        </div>
                        <ul class="list-unstyled">
                            <li><i class="fa fa-circle"></i> Lorem ipsum dolor</li>
                            <li><i class="fa fa-circle"></i> Lorem ipsum dolor</li>
                            <li><i class="fa fa-circle"></i> Lorem ipsum dolor</li>
                        </ul>
                    </div>
                    <div class="pricing-footer">
                        <a class="btn btn-default" href="javascript:void(0);">Sign Up</a>
                    </div>
                </div>
            </div>
            <!-- Pricing item END -->
        </div>
    </div>
</div>
<!-- Prices block END -->
<!-- Testimonials block BEGIN -->
<div class="testimonials-block content content-center margin-bottom-65">
    <div class="container">
        <h2>Customer <strong>testimonials</strong></h2>
        <h4>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</h4>
        <div class="carousel slide" data-ride="carousel" id="testimonials-block">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <!-- Carousel items -->
                <div class="active item">
                    <blockquote>
                        <p>This is the most awesome, full featured, easy, costomizeble theme. It’s extremely responsive
                            and very helpful to all suggestions.</p>
                    </blockquote>
                    <span class="testimonials-name">Mark Doe</span>
                </div>
                <!-- Carousel items -->
                <div class="item">
                    <blockquote>
                        <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown
                            aliqua, retro synth master cleanse.</p>
                    </blockquote>
                    <span class="testimonials-name">Joe Smith</span>
                </div>
                <!-- Carousel items -->
                <div class="item">
                    <blockquote>
                        <p>Williamsburg carles vegan helvetica. Cosby sweater eu banh mi, qui irure terry richardson ex
                            squid Aliquip placeat salvia cillum iphone.</p>
                    </blockquote>
                    <span class="testimonials-name">Linda Adams</span>
                </div>
            </div>
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#testimonials-block" data-slide-to="0" class="active"></li>
                <li data-target="#testimonials-block" data-slide-to="1"></li>
                <li data-target="#testimonials-block" data-slide-to="2"></li>
            </ol>
        </div>
    </div>
</div>
<!-- Testimonials block END -->
<!-- Partners block BEGIN -->
<div class="partners-block">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-3 col-xs-6">
                <img src="{{asset('assets/assets/frontend/onepage/img/partners/cisco.png')}}" alt="cisco">
            </div>
            <div class="col-md-2 col-sm-3 col-xs-6">
                <img src="{{asset('assets/assets/frontend/onepage/img/partners/walmart.png')}}" alt="walmart">
            </div>
            <div class="col-md-2 col-sm-3 col-xs-6">
                <img src="{{asset('assets/assets/frontend/onepage/img/partners/gamescast.png')}}" alt="gamescast">
            </div>
            <div class="col-md-2 col-sm-3 col-xs-6">
                <img src="{{asset('assets/assets/frontend/onepage/img/partners/spinwokrx.png')}}" alt="spinwokrx">
            </div>
            <div class="col-md-2 col-sm-3 col-xs-6">
                <img src="{{asset('assets/assets/frontend/onepage/img/partners/ngreen.png')}}" alt="ngreen">
            </div>
            <div class="col-md-2 col-sm-3 col-xs-6">
                <img src="{{asset('assets/assets/frontend/onepage/img/partners/vimeo.png')}}" alt="vimeo">
            </div>
        </div>
    </div>
</div>
<!-- Partners block END -->
<!-- BEGIN PRE-FOOTER -->
<div class="pre-footer" id="contact">
    <div class="container">
        <div class="row">
            <!-- BEGIN BOTTOM ABOUT BLOCK -->
            <div class="col-md-4 col-sm-6 pre-footer-col">
                <h2>About us</h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam sit nonummy nibh euismod tincidunt
                    ut laoreet dolore magna aliquarm erat sit volutpat. Nostrud exerci tation ullamcorper suscipit
                    lobortis nisl aliquip commodo consequat. </p>
                <p>Duis autem vel eum iriure dolor vulputate velit esse molestie at dolore.</p>
            </div>
            <!-- END BOTTOM ABOUT BLOCK -->
            <!-- BEGIN TWITTER BLOCK -->
            {{--<div class="col-md-4 col-sm-6 pre-footer-col">--}}
                {{--<h2 class="margin-bottom-0">Latest Tweets</h2>--}}
                {{--<a class="twitter-timeline"  data-tweet-limit="2" data-theme="dark"--}}
                   {{--data-link-color="#57C8EB" data-widget-id="455411516829736961"--}}
                   {{--data-chrome="noheader nofooter noscrollbar noborders transparent">Loading tweets by--}}
                    {{--@keenthemes...</a>--}}
            {{--</div>--}}
            <!-- END TWITTER BLOCK -->
            <div class="col-md-4 col-sm-6 pre-footer-col">
                <!-- BEGIN BOTTOM CONTACTS -->
                <h2>Our Contacts</h2>
                <address class="margin-bottom-20">
                    35, Lorem Lis Street, Park Ave<br>
                    California, US<br>
                    Phone: 300 323 3456<br>
                    Fax: 300 323 1456<br>
                    Email: <a href="mailto:info@metronic.com">info@metronic.com</a><br>
                    Skype: <a href="skype:metronic">metronic</a>
                </address>
                <!-- END BOTTOM CONTACTS -->
                <div class="pre-footer-subscribe-box">
                    <h2>Newsletter</h2>
                    <form action="javascript:void(0);">
                        <div class="input-group">
                            <input type="text" placeholder="youremail@mail.com" class="form-control">
                            <span class="input-group-btn">
                <button class="btn btn-primary" type="submit">Subscribe</button>
                </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END PRE-FOOTER -->
<!-- BEGIN FOOTER -->
<div class="footer">
    <div class="container">
        <div class="row">
            <!-- BEGIN COPYRIGHT -->
            <div class="col-md-6 col-sm-6">
                <div class="copyright">2018 © Leo One Page. ALL Rights Reserved.</div>
            </div>
            <!-- END COPYRIGHT -->
            <!-- BEGIN SOCIAL ICONS -->
            <div class="col-md-6 col-sm-6 pull-right">
                <ul class="social-icons">
                    <li><a class="rss" data-original-title="rss" href="javascript:void(0);"></a></li>
                    <li><a class="facebook" data-original-title="facebook" href="javascript:void(0);"></a></li>
                    <li><a class="twitter" data-original-title="twitter" href="javascript:void(0);"></a></li>
                    <li><a class="googleplus" data-original-title="googleplus" href="javascript:void(0);"></a></li>
                    <li><a class="linkedin" data-original-title="linkedin" href="javascript:void(0);"></a></li>
                    <li><a class="youtube" data-original-title="youtube" href="javascript:void(0);"></a></li>
                    <li><a class="vimeo" data-original-title="vimeo" href="javascript:void(0);"></a></li>
                    <li><a class="skype" data-original-title="skype" href="javascript:void(0);"></a></li>
                </ul>
            </div>
            <!-- END SOCIAL ICONS -->
        </div>
    </div>
</div>
<!-- END FOOTER -->
<a href="#promo-block" class="go2top scroll"><i class="fa fa-arrow-up"></i></a>
{{--<!--[if lt IE 9]>--}}
{{--<script src="{{asset('assets/assets/global/plugins/respond.min.js')}}"></script>--}}
{{--<![endif]-->--}}
<!-- Load JavaScripts at the bottom, because it will reduce page load time -->
<!-- Core plugins BEGIN (For ALL pages) -->
<script src="{{asset('assets/assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/assets/global/plugins/jquery-migrate.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/assets/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
<!-- Core plugins END (For ALL pages) -->
<!-- BEGIN RevolutionSlider -->
<script src="{{asset('assets/assets/global/plugins/slider-revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('assets/assets/global/plugins/slider-revolution-slider/rs-plugin/js/jquery.themepunch.tools.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('assets/assets/frontend/onepage/scripts/revo-ini.js')}}" type="text/javascript"></script>
<!-- END RevolutionSlider -->
<!-- Core plugins BEGIN (required only for current page) -->
<script src="{{asset('assets/assets/global/plugins/fancybox/source/jquery.fancybox.pack.js')}}"
        type="text/javascript"></script><!-- pop up -->
<script src="{{asset('assets/assets/global/plugins/jquery.easing.js')}}"></script>
<script src="{{asset('assets/assets/global/plugins/jquery.parallax.js')}}"></script>
<script src="{{asset('assets/assets/global/plugins/jquery.scrollTo.min.js')}}"></script>
<script src="{{asset('assets/assets/frontend/onepage/scripts/jquery.nav.js')}}"></script>
<!-- Core plugins END (required only for current page) -->
<!-- Global js BEGIN -->
<script src="{{asset('assets/assets/frontend/onepage/scripts/layout.js')}}" type="text/javascript"></script>
<script>
    $(document).ready(function () {
        Layout.init();
    });
</script>
<!-- Global js END -->
</body>
</html>