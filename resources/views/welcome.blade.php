<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    
    <!--====== Title ======-->
    <title>{{ config('app.name') }} Home </title>
    
    <meta name="description" content="Bitworq is a crypto Freelancing platform where people interact to get access to crypto currencies">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">
        
    <!--====== Animate CSS ======-->
    <link rel="stylesheet" href="assets/css/animate.css">
                
    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="assets/css/LineIcons.2.0.css">
        
    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="assets/css/bootstrap-4.5.0.min.css">
    
    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="assets/css/default.css">
    
    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="assets/css/style.css">
    
</head>

<body>
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->    
   
   
    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER PART ENDS ======-->
    
    <!--====== HEADER PART START ======-->
    
    <header class="header-area">
        <div class="navbar-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="index.html">
                                <img src="assets/images/logo.png" alt="Logo" height="50px">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="page-scroll" href="#home">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#features">Features</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#membership">Membership</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#about">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#facts">Why</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#team">Team</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#blog">Blog</a>
                                    </li>
                                </ul>
                            </div> <!-- navbar collapse -->
                            
                            <div class="navbar-btn d-none d-sm-inline-block">
                                <a class="btn btn-primary" data-scroll-nav="0" href="{{ route('login') }}" rel="nofollow">Login</a>
                            </div>
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- navbar area -->
        
        <div id="home" class="header-hero bg_cover" style="background-image: url(assets/images/banner-bg.svg)">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="header-hero-content text-center">
                            <h3 class="header-sub-title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">{{ config('app.name') }}</h3>
                            <h2 class="header-title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.5s">KickStart your CryptoLancing Career</h2>
                            <p class="text wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.8s">
                                We will give you a platform to Earn and Hire without Any Charge Backs. Save Some Bucks!!!
                            </p>
                            <a href="{{ route('register') }}" class="main-btn wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="1.1s">Join Us</a>
                        </div> <!-- header hero content -->
                    </div>
                </div> <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-hero-image text-center wow fadeIn" data-wow-duration="1.3s" data-wow-delay="1.4s">
                            <img src="assets/images/banner.svg" alt="hero">
                        </div> <!-- header hero image -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
            <div id="particles-1" class="particles"></div>
        </div> <!-- header hero -->
    </header>
    
    <!--====== HEADER PART ENDS ======-->
    
    <!--====== SERVICES PART START ======-->
    
    <section id="features" class="services-area pt-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="section-title text-center pb-40">
                        <div class="line m-auto"></div>
                        <h3 class="title">Hire In Any Category, <span> We wil pay back in Crypto!</span></h3>
                        <h6 class="title">Show Your Skills, <span>And  Get Hired</span></h6>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single-services text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <div class="services-icon">
                            <img class="shape" src="assets/images/services-shape.svg" alt="shape">
                            <img class="shape-1" src="assets/images/services-shape-1.svg" alt="shape">
                            <i class="lni lni-bolt-alt"></i>
                        </div>
                        <div class="services-content mt-30">
                            <h4 class="services-title"><a href="#">Fast</a></h4>
                            <p class="text">We Deliver Fast modes of payments.Its Instant and the Amount paid instantly reflects to your Account</p>
                            <a class="more" href="#">Learn More <i class="lni lni-chevron-right"></i></a>
                        </div>
                    </div> <!-- single services -->
                </div>
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single-services text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="services-icon">
                            <img class="shape" src="assets/images/services-shape.svg" alt="shape">
                            <img class="shape-1" src="assets/images/services-shape-2.svg" alt="shape">
                            <i class="lni lni-lock-alt"></i>
                        </div>
                        <div class="services-content mt-30">
                            <h4 class="services-title"><a href="#">Secure</a></h4>
                            <p class="text">With your Crypto Address, Its all you need so you are guaranteed that When you withdraw, The Coins are only yours.</p>
                            <a class="more" href="#">Learn More <i class="lni lni-chevron-right"></i></a>
                        </div>
                    </div> <!-- single services -->
                </div>
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single-services text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                        <div class="services-icon">
                            <img class="shape" src="assets/images/services-shape.svg" alt="shape">
                            <img class="shape-1" src="assets/images/services-shape-3.svg" alt="shape">
                            <i class="lni lni-users"></i>
                        </div>
                        <div class="services-content mt-30">
                            <h4 class="services-title"><a href="#">Creative</a></h4>
                            <p class="text">We are Creative.We  give you the chance to deposit in &dollar; and trade them to us for  Crypto Currency. All in one platform</p>
                            <a class="more" href="#">Learn More <i class="lni lni-chevron-right"></i></a>
                        </div>
                    </div> <!-- single services -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== SERVICES PART ENDS ======-->
    

    <!--====== MEMBERSHIP PART START ======-->
    
    <section id="membership" class="services-area pt-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="section-title text-center pb-40">
                        <div class="line m-auto"></div>
                        <h3 class="title">Check Our Subscription Plans(Freelancers Only)</h3>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <!--Start SIngle panel-->
                <div class="col-lg-3 col-md-7 col-sm-8">
                    <div class="single-services mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s" style="background-color:#ff7f06 !important">
                        <div class="services-icon">
                            <h1 style="color:purple" class="text-center">Basic</h1>
                            <h6 class="services-title text-center">0.00/ Mo</h6>
                        </div>
                        <div class="services-content text-white">
                            <ul class="style-none">
                                <li><span class="pull-left" style="color:purple;font-weight:bold">&check;</span>50 Monthly Bids</li>
                                <li><span class="text-left" style="color:purple;font-weight:bold">&check;</span>5 Bitcoins Trades/Month</li>
                                <li><span class="text-left" style="color:purple;font-weight:bold">&check;</span>Single Withdrawal Cycle/Week</li>
                                <li><span class="text-left" style="color:purple;font-weight:bold">&check;</span>Full Support</li>
                                <li><span class="text-left" style="color:purple;font-weight:bold">&check;</span>Withdraw Method  Bitcoins Only</li>
                                <li><span class="text-left" style="color:purple;font-weight:bold">&check;</span>Bids Not refundable</li>
                                <li><span class="text-left" style="color:purple;font-weight:bold">&check;</span>Withdrawal Limit $500 in BTC</li>   
                                <li><span class="text-left" style="color:purple;font-weight:bold">&check;</span><div class="badge badge-primary">New Member Badge</div> in Bids Placed</li>
                                <div class="container text-center">
                                    <br>
                                 <a href="#" class="btn" data-wow-duration="1.3s" data-wow-delay="0.5s" style="background-color:purple;color:white !important">
                                    <i class="lni lni-chevron-up-circle"></i> Default
                                 </a>
                                </div>
                            </ul>
                        </div>
                    </div> 
                </div>
                <!-- single Membership Panel -->
                <!--Start SIngle panel-->
                <div class="col-lg-3 col-md-7 col-sm-8">
                    <div class="single-services mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s" style="background-color:#7505fe">
                        <div class="services-icon">
                            <h1 style="color:purple" class="text-center">Plus</h1>
                            <h6 class="services-title text-center">$50.00/ Mo</h6>
                        </div>
                        <div class="services-content text-white">
                            <ul class="style-none">
                                <li><span class="pull-left" style="color:purple">&check;</span>100 Monthly Bids</li>
                                <li><span class="text-left" style="color:purple">&check;</span>10  Trades/Month</li>
                                <li><span class="text-left" style="color:purple">&check;</span>Double Withdrawal Cycle/Week</li>
                                <li><span class="text-left" style="color:purple">&check;</span>Full Support</li>
                                <li><span class="text-left" style="color:purple">&check;</span>Withdraw Method  Bitcoins &amp; USD</li>
                                <li><span class="text-left" style="color:purple">&check;</span>Bids Not refundable</li>
                                <li><span class="text-left" style="color:purple">&check;</span>Withdrawal Limit $500 in BTC</li>   
                                <li><span class="text-left" style="color:purple">&check;</span><div class="badge badge-primary">Rising CryptoLancer badge</div> in Bids Placed</li>
                                <div class="container text-center">
                                    <br>
                                 <a href="#" class="btn" data-wow-duration="1.3s" data-wow-delay="0.5s" style="background-color:purple;color:white !important">
                                    <i class="lni lni-chevron-up-circle"></i> Upgrade Plan
                                 </a>
                                </div>
                            </ul>
                        </div>
                    </div> 
            </div>
            <!-- single Membership Panel -->
            <!--Start SIngle panel-->
            <div class="col-lg-3 col-md-7 col-sm-8">
                <div class="single-services mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s"style="background-color:silver !important">
                    <div class="services-icon">
                        <h1 style="color:purple" class="text-center">Silver</h1>
                        <h6 class="services-title text-center">100.00/ Mo</h6>
                    </div>
                    <div class="services-content text-white">
                        <ul class="style-none">
                            <li><span class="pull-left" style="color:purple">&check;</span>300 Monthly Bids</li>
                            <li><span class="text-left" style="color:purple">&check;</span>20 Trades/Month</li>
                            <li><span class="text-left" style="color:purple">&check;</span>Triple Withdrawal Cycle/Week</li>
                            <li><span class="text-left" style="color:purple">&check;</span>Full Prioritized Support</li>
                            <li><span class="text-left" style="color:purple">&check;</span>Withdraw Method  Bitcoins &amp USD </li>
                            <li><span class="text-left" style="color:purple">&check;</span>Bids Not refundable</li>
                            <li><span class="text-left" style="color:purple">&check;</span>Withdrawal Limit $2500 in BTC & USD</li>   
                            <li><span class="text-left" style="color:purple">&check;</span><div class="badge badge-primary">Sponsored badge</div> in Bids Placed</li>
                           <div class="container text-center">
                               <br>
                            <a href="#" class="btn" data-wow-duration="1.3s" data-wow-delay="0.5s" style="background-color:purple;color:white !important">
                                <i class="lni lni-chevron-up-circle"></i> Upgrade Plan
                            </a>
                           </div>
                        </ul>
                    </div>
                </div> 
            </div>
            <!-- single Membership Panel -->
            <!--Start SIngle panel-->
            <div class="col-lg-3 col-md-7 col-sm-8">
                <div class="single-services mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s"style="background-color:gold !important">
                    <div class="services-icon">
                        <h1 style="color:purple" class="text-center">Gold</h1>
                        <h6 class="services-title text-center">250.00/ Mo</h6>
                    </div>
                    <div class="services-content">
                        <ul class="style-none text-bold" style="color:purple">
                            <li><span class="pull-left" style="color:purple">&check;</span>Unlimited Monthly Bids</li>
                            <li><span class="text-left" style="color:purple">&check;</span>100  Trades/Month</li>
                            <li><span class="text-left" style="color:purple">&check;</span>Daily Withdrawal Cycle/Week</li>
                            <li><span class="text-left" style="color:purple">&check;</span>Full Priority Support</li>
                            <li><span class="text-left" style="color:purple">&check;</span>Withdraw  Bitcoins and USD only</li>
                            <li><span class="text-left" style="color:purple">&check;</span>Bids  refundable</li>
                            <li><span class="text-left" style="color:purple">&check;</span>Withdrawal Limit $10000 in BTC & USD</li>   
                            <li><span class="text-left" style="color:purple">&check;</span><div class="badge badge-primary">
                            <small>Preferred CryptoLancer Badg</small>    
                            </div> in Bids Placed</li>
                            <div class="container text-center">
                                <br>
                             <a href="#" class="btn" data-wow-duration="1.3s" data-wow-delay="0.5s" style="background-color:purple;color:white !important">
                                <i class="lni lni-chevron-up-circle"></i> Upgrade Plan
                             </a>
                            </div>
                        </ul>
                    </div>
                </div> 
        </div>
        <!-- single Membership Panel -->

            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== Membership PART ENDS ======-->
    
    <!--====== ABOUT PART START ======-->
    
    <section id="about" class="about-area pt-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-content mt-50 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="section-title">
                            <div class="line"></div>
                            <h3 class="title">Easy to Use <span>&amp; Ask For Help From Your Colleagues</span></h3>
                        </div> <!-- section title -->
                        <p class="text">
                            Sometimes, You get Hired to build a software or any perform any other task but  later, you learn that you might need some help. 
                            With Our {{ config('app.name') }} collaboration tools, you can easily collaborate with anyone else and make the task easier and also perform in fast.
                            We Streamline it for you.
                        </p>
                        <a href="javascript::void(0)" class="main-btn">How It Works</a>
                    </div> <!-- about content -->
                </div>
                <div class="col-lg-6">
                    <div class="about-image text-center mt-50 wow fadeInRightBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <img src="assets/images/about1.svg" alt="about">
                    </div> <!-- about image -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="about-shape-1">
            <img src="assets/images/about-shape-1.svg" alt="shape">
        </div>
    </section>
    
    <!--====== ABOUT PART ENDS ======-->
    
    <!--====== ABOUT PART START ======-->
    
    <section class="about-area pt-70">
        <div class="about-shape-2">
            <img src="assets/images/about-shape-2.svg" alt="shape">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-lg-last">
                    <div class="about-content mt-50 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="section-title">
                            <div class="line"></div>
                            <h3 class="title">Track Your Project <span>Using Our Project Tracking Board</span></h3>
                        </div> <!-- section title -->
                        <p class="text">
                            If you Hire a freelancer to work on your project, then at some time, you may need to know the progress of the project. How do you get this? 
                            By Using our Platform, we have a special tool to trace the project progress based on the freelancer hired. Sounds Good? Join Us and Experience the best 
                            of It.
                        </p>
                        <a href="#" class="main-btn">{{ config('app.name') }} Tracker</a>
                    </div> <!-- about content -->
                </div>
                <div class="col-lg-6 order-lg-first">
                    <div class="about-image text-center mt-50 wow fadeInRightBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <img src="assets/images/about2.svg" alt="about">
                    </div> <!-- about image -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>


    <!--====== ABOUT PART START ======-->
    
    <section class="about-area pt-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-content mt-50 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="section-title">
                            <div class="line"></div>
                            <h3 class="title"><span>A platform</span> Crafted for Netizens. This is your Home</h3>
                        </div> <!-- section title -->
                        <p class="text">
                            With the rising demand of cryptos, we foresaw the future, where crypto is the only mode of accepted payments.
                            We though of taking you to the future. Welcome to the future 
                        </p>
                        <a href="/register" class="main-btn">Try it Free</a>
                    </div> <!-- about content -->
                </div>
                <div class="col-lg-6">
                    <div class="about-image text-center mt-50 wow fadeInRightBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <img src="assets/images/about3.svg" alt="about">
                    </div> <!-- about image -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="about-shape-1">
            <img src="assets/images/about-shape-1.svg" alt="shape">
        </div>
    </section>
    
    <!--====== ABOUT PART ENDS ======-->

    
    <!--====== ABOUT PART ENDS ======-->
    
    <!--====== VIDEO COUNTER PART START ======-->
    
    <section id="facts" class="video-counter pt-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="video-content mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        <img class="dots" src="assets/images/dots.svg" alt="dots">
                        <div class="video-wrapper">
                            <div class="video-image">
                                <img src="assets/images/video.png" alt="video">
                            </div>
                            <div class="video-icon">
                                <a href="https://www.youtube.com/watch?v=r44RKWyfcFw" class="video-popup"><i class="lni lni-play"></i></a>
                            </div>
                        </div> <!-- video wrapper -->
                    </div> <!-- video content -->
                </div>
                <div class="col-lg-6">
                    <div class="counter-wrapper mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                        <div class="counter-content">
                            <div class="section-title">
                                <div class="line"></div>
                                <h3 class="title">Manage Everything  <span> Under a Single Place</span></h3>
                            </div> <!-- section title -->
                            <p class="text">Get coordinated quality from demonstrated free experts and specific organizations since our moment 
                                coordinating calculation creates a waitlist dependent on the measures you select as a customer who need an errand performed. 
                                Effectively track venture achievements and progress toward the consummation of your employments..</p>
                        </div> <!-- counter content -->
                        <div class="row no-gutters">
                            <div class="col-4">
                                <div class="single-counter counter-color-1 d-flex align-items-center justify-content-center">
                                    <div class="counter-items text-center">
                                        <span class="count"><span class="counter">125</span>K</span>
                                        <p class="text">Visitors</p>
                                    </div>
                                </div> <!-- single counter -->
                            </div>
                            <div class="col-4">
                                <div class="single-counter counter-color-2 d-flex align-items-center justify-content-center">
                                    <div class="counter-items text-center">
                                        <span class="count"><span class="counter">107</span>K</span>
                                        <p class="text">Active Users</p>
                                    </div>
                                </div> <!-- single counter -->
                            </div>
                            <div class="col-4">
                                <div class="single-counter counter-color-3 d-flex align-items-center justify-content-center">
                                    <div class="counter-items text-center">
                                        <span class="count"><span class="counter">5</span></span>
                                        <p class="text">User Rating</p>
                                    </div>
                                </div> <!-- single counter -->
                            </div>
                        </div> <!-- row -->
                    </div> <!-- counter wrapper -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== VIDEO COUNTER PART ENDS ======-->
    

    

    
    <!--====== FOOTER PART START ======-->
    
    <footer id="footer" class="footer-area pt-120">
        <div class="container">
            <div class="subscribe-area wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="subscribe-content mt-45">
                            <h2 class="subscribe-title">Subscribe Our Newsletter </h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="subscribe-form mt-50">
                            <form action="#">
                                <input type="text" placeholder="Enter eamil">
                                <button class="main-btn">Subscribe</button>
                            </form>
                        </div>
                    </div>
                 </div> <!-- row -->
            </div> <!-- subscribe area -->
            <div class="footer-widget pb-100">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="footer-about mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                            <a class="logo" href="#">
                                <img src="assets/images/logo.svg" alt="logo">
                            </a>
                            <p class="text">Rapidly create a waitlist of qualified specialists in different controls from around the world with our restrictive AI coordinating innovation. 
                                With each shortlisted up-and-comer, you'll have the option to audit itemized profiles, portfolios, and customer surveys and appraisals so you can locate the 
                                ideal counterpart for your task.</p>
                            <ul class="social">
                                <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni lni-twitter-filled"></i></a></li>
                                <li><a href="#"><i class="lni lni-instagram-filled"></i></a></li>
                                <li><a href="#"><i class="lni lni-linkedin-original"></i></a></li>
                            </ul>
                        </div> <!-- footer about -->
                    </div>
                    <div class="col-lg-5 col-md-7 col-sm-7">
                        <div class="footer-link d-flex mt-50 justify-content-md-between">
                            <div class="link-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                                <div class="footer-title">
                                    <h4 class="title">Quick Link</h4>
                                </div>
                                <ul class="link">
                                    <li><a href="#">Road Map</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Refund Policy</a></li>
                                    <li><a href="#">Terms of Service</a></li>
                                    <li><a href="#">Pricing</a></li>
                                </ul>
                            </div> <!-- footer wrapper -->
                            <div class="link-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                                <div class="footer-title">
                                    <h4 class="title">Resources</h4>
                                </div>
                                <ul class="link">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Page</a></li>
                                    <li><a href="#">Portfolio</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div> <!-- footer wrapper -->
                        </div> <!-- footer link -->
                    </div>
                    <div class="col-lg-3 col-md-5 col-sm-5">
                        <div class="footer-contact mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                            <div class="footer-title">
                                <h4 class="title">Contact Us</h4>
                            </div>
                            <ul class="contact">
                                <li>+809272561823</li>
                                <li>info@gmail.com</li>
                                <li>www.yourweb.com</li>
                                <li>123 Stree New York City , United <br> States Of America 750.</li>
                            </ul>
                        </div> <!-- footer contact -->
                    </div>
                </div> <!-- row -->
            </div> <!-- footer widget -->
            <div class="footer-copyright">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright d-sm-flex justify-content-between">
                            <div class="copyright-content pull0right">
                                <p class="text">&copy; <?php echo  date('Y')?> {{ config('app.name') }} Inc.</p>
                            </div> <!-- copyright content -->
                        </div> <!-- copyright -->
                    </div>
                </div> <!-- row -->
            </div> <!-- footer copyright -->
        </div> <!-- container -->
        <div id="particles-2"></div>
    </footer>
    
    <!--====== FOOTER PART ENDS ======-->
    
    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->   


    <!--====== Jquery js ======-->
    <script src="assets/js/vendor/jquery-3.5.1-min.js"></script>
    <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>
    
    <!--====== Bootstrap js ======-->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap-4.5.0.min.js"></script>
    
    <!--====== Plugins js ======-->
    <script src="assets/js/plugins.js"></script>
    
    <!--====== Counter Up js ======-->
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    

    
    <!--====== Scrolling Nav js ======-->
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/scrolling-nav.js"></script>
    
    <!--====== wow js ======-->
    <script src="assets/js/wow.min.js"></script>
    
    <!--====== Particles js ======-->
    <script src="assets/js/particles.min.js"></script>
    
    <!--====== Main js ======-->
    <script src="assets/js/main.js"></script>
    
</body>

</html>
