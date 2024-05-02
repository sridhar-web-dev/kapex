<?php
require_once './config/config.php';
//require_once ABS_PATH . 'includes/classes/class.tagmanager.php';
require_once ABS_PATH . 'includes/support/class-auto-load.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo COMPANY_NAME; ?></title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="assets/images/favicons/site.html" />
    <meta name="description" content=" " />

    <!-- fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+3:ital,wght@0,200..900;1,200..900&display=swap"
        rel="stylesheet">
    <!-- Meta Tags for SEO -->

    <!-- Primary Meta Tags -->
    <meta name="title" content="<?php echo COMPANY_NAME; ?>" />
    <meta name="description" content="<?php echo COMPANY_NAME; ?>" />
    <meta content="" name="keywords">
    <link rel="canonical" href="<?php echo ABS_URL; ?>">
    <!-- Open Graph / Facebook -->
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo ABS_URL; ?>" />
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:image" content="images/icon.png" />
    <meta property="og:site_name" content="<?php echo COMPANY_NAME; ?>" />
    <meta property="og:image:width" content="267" />
    <meta property="og:image:height" content="267" />
    <meta property="og:image:type" content="image/png" />
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="<?php echo ABS_URL; ?>" />
    <meta property="twitter:title" content="" />
    <meta property="twitter:description" content="" />
    <meta property="twitter:image" content="images/icon.png" />
    <!-- Other Tgs -->
    <meta content="<?php echo COMPANY_NAME; ?>" name="author">
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
    <meta name="audience" content="all" />
    <meta name="allow-search" content="yes" />
    <meta name="author" content="Maverico Technologies Private Limited">
    <meta name="dc.title" content="">
    <meta name="dc.description" content="">

    <!-- Plugins -->
    <?php require_once ABS_PATH . 'includes/vendor-plugin.php';?>
    <?php require_once ABS_PATH . 'includes/template-css.php';?>
    <?php TagManager::head_tracker();?>
    <style>
        .owl-carousel .owl-item img {
    display: inline !important;
    width: 100%;
}
    </style>
</head>

<body class="custom-cursor">
    <?php TagManager::body_tracker();?>
    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>
    <!-- <div class="preloader">
        <div class="preloader__image"></div>
    </div> -->
    <!-- /.preloader -->
    <div class="page-wrapper">
        <?php require ABS_PATH . 'includes/header-menu.php';?>
        <!-- Main Sllider Start -->
        <!-- Main Sllider Start -->
        <section class="main-slider-two">
            <div class="main-slider-two__bottom-shape"
                style="background-image: url(assets/images/shapes/main-slider-two-bottom-shape-1.png);"></div>
            <div class="main-slider__carousel owl-carousel owl-theme thm-owl__carousel"
                data-owl-options='{"loop": false, "items": 1, "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"], "margin": 0, "dots": false, "nav": false, "animateOut": "slideOutDown", "animateIn": "fadeIn", "active": true, "smartSpeed": 1000, "autoplay": false, "autoplayTimeout": 7000, "autoplayHoverPause": false}'>

                <div class="item main-slider-two__slide-1">
                    <div class="main-slider-two__bg"
                        style="background-image: url(assets/images/backgrounds/main-slider-2-1.jpg);">
                    </div><!-- /.slider-one__bg -->
                    <div class="main-slider-two__shadow"></div>
                    <div class="main-slider-two__shape-1">
                        <img src="assets/images/shapes/main-slider-two-shape-1.png" alt="">
                    </div>
                    <div class="container">
                        <div class="main-slider-two__content">
                            <div class="row justify-content-between ">
                                <div class="col-lg-6 my-auto">
                                    <h2 class="main-slider-two__title">Unlock your own money. Empower your
                                        <span>business growth</span>
                                    </h2>
                                    <p class="main-slider-two__text">India's first affordable business loans against
                                        security deposits</p>
                                    <p class="main-slider-two__text">Powered by <a href="#" class="text-danger">Kapex</a></p>

                                </div>
                                <div class="col-lg-6">
                                    <div class="card p-3 text-light" style="border-radius:25px;background:#0f213c95">
                                        <div class="card-body">
                                            <h3 style="color:#e40013">Check how we are different and apply</h3>
                                            <form action="" method="post">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group my-3">
                                                            <label for="customRange1" class="form-label"><strong>How much would you like to borrow?</strong></label>
                                                            <input type="range" class="form-range" id="customRange1">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group my-3">
                                                            <label for="customRange1" class="form-label w-100"><strong>How long would you need to repay?</strong></label>
                                                            <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                                    <label class="form-check-label" for="inlineRadio1">1 Year</label>
                                                                    </div>
                                                                    <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                                    <label class="form-check-label" for="inlineRadio2">2 Years</label>
                                                                    </div>

                                                                    <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                                    <label class="form-check-label" for="inlineRadio2">3 Years</label>
                                                                    </div>

                                                                    <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                                    <label class="form-check-label" for="inlineRadio2">4 Years</label>
                                                                    </div>
                                                                    <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                                    <label class="form-check-label" for="inlineRadio2">5 Years</label>
                                                                    </div>


                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="col-lg-6 text-center my-3">
                                                        <h5 style="color:#e40013">Kapex offerings</h5>
                                                        <p><strong>EMI:</strong>  ₹12,000</p>

                                                    </div>
                                                    <div class="col-lg-6 text-center my-3">
                                                    <h5 style="color:#e40013">Other products </h5>
                                                    <p><strong>EMI:</strong>  ₹25,000</p>
                                                    </div>
                                                    <div class="col-lg-12 my-3">
                                                    <span class="d-flex"><small><img src="./assets/images/question.png" alt="" class="" style="max-width:12px" srcset=""> You only pay interest as your EMI and repay principal at the end of the tenure</small></span>
                                                    </div>
                                                    <div class="main-slider-two__btn-box text-center">
                                        <a href="#" class="main-slider-two__btn thm-btn">Apply Today</a>
                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>



            </div>
        </section>
        <!--Main Sllider Start -->
        <!--Main Sllider Start -->

        <!--About One Start-->
        <section class="about-one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-one__left">
                            <div class="about-one__img-box wow slideInLeft" data-wow-delay="100ms"
                                data-wow-duration="2500ms">
                                <div class="about-one__img">
                                    <img src="assets/images/resources/about-one-img-1.jpg" alt="">
                                    <div class="about-one__shape-1 float-bob-x">
                                        <img src="assets/images/shapes/about-one-shape-1.png" alt="">
                                    </div>
                                    <div class="about-one__shape-2 img-bounce">
                                        <img src="assets/images/shapes/about-one-shape-2.png" alt="">
                                    </div>
                                </div>
                                <div class="about-one__img-2">
                                    <img src="assets/images/resources/about-one-img-2.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 my-auto ">
                        <div class="about-one__right">
                            <div class="section-title text-left">
                                <div class="section-title__tagline-box">
                                    <span class="section-title__tagline">Welcome to <?php echo COMPANY_NAME; ?></span>
                                </div>
                                <h2 class="section-title__title">What we <span>do?</span></h2>
                            </div>
                            <p class="about-one__text">At Kapex, we're not just a fintech platform; we're pioneers in
                                reshaping the commercial real estate leasing business in India. We aim to bridge
                                critical financial gaps by instantly unlocking security deposits paid by the high street
                                Retail stores with Kapex innovative lending solutions through leading lending
                                institutions</p>

                            <div class="about-one__btn-box">
                                <div class="about-one__shape-3 float-bob-x">
                                    <img src="assets/images/shapes/about-one-shape-3.png" alt="">
                                </div>
                                <a href="<?php echo ABS_URL; ?>" class="about-one__btn thm-btn mt-4">Apply Today</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About One End-->

        <!--Services One Start-->
        <section class="services-one">
            <div class="services-one__bg" style="background-image: url(assets/images/backgrounds/services-one-bg.png);">
            </div>
            <div class="container">
                <div class="services-one__top">
                    <div class="row">
                        <div class="col-xl-7 col-lg-6">
                            <div class="services-one__left">
                                <div class="section-title text-left">
                                    <div class="section-title__tagline-box">
                                        <!-- <span class="section-title__tagline">What we offer?</span> -->
                                    </div>
                                    <h2 class="section-title__title">What we <span>offer?</span></h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6">
                            <div class="services-one__right">
                                <p class="services-one__text">Our mission is to bring retail tenants, landlords and
                                    lending institutions together to disrupt the commercial real estate landscape</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="services-one__bottom">
                    <div class="row">
                        <!--Services One Single Start-->
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="services-one__single">
                                <div class="services-one__title-box">
                                    <h3 class="services-one__title"><a href="<?php echo ABS_URL; ?>">For Retail tenants</a>
                                    </h3>
                                </div>
                                <div class="services-one__img-box">
                                    <div class="services-one__img">
                                        <img src="assets/images/services/services-1-1.jpg" alt="">
                                    </div>
                                    <div class="services-one__icon">
                                        <span class="icon-pie-chart"></span>
                                    </div>
                                </div>
                                <div class="services-one__read-more">
                                    <!-- <a href="<?php echo ABS_URL; ?>">Read More<span class="icon-right-arrow"></span></a> -->
                                    <div class="about-one__points-and-experience m-0">
                                        <div class="about-one__points-box px-0">
                                            <ul class="about-one__points-list list-unstyled">
                                                <li>
                                                    <div class="d-flex align-items-center">
                                                        <div class="icon">
                                                            <span class="fa fa-check"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Unlock security deposit:</p>
                                                        </div>
                                                    </div>
                                                    <p class="d-block w-100">Release your tied-up security deposit and
                                                        reinvest in your business.</p>
                                                </li>
                                                <li>
                                                    <div class="d-flex align-items-center">
                                                        <div class="icon">
                                                            <span class="fa fa-check"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Improved cash flow:</p>
                                                        </div>
                                                    </div>
                                                    <p class="d-block w-100"> Pay only interest on the amount borrowed
                                                        so less burden on cash flows</p>
                                                </li>
                                                <li>
                                                    <div class="d-flex align-items-center">
                                                        <div class="icon">
                                                            <span class="fa fa-check"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Uninterrupted business:</p>
                                                        </div>
                                                    </div>
                                                    <p class="d-block w-100">Focus on your business while Kapex will
                                                        solve the cash worries.</p>
                                                </li>

                                            </ul>

                                        </div>

                                    </div>
                                    <a href="<?php echo ABS_URL; ?>">Read More<span class="icon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                        <!--Services One Single End-->
                        <!--Services One Single Start-->
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="services-one__single">
                                <div class="services-one__title-box">
                                    <h3 class="services-one__title"><a href="<?php echo ABS_URL; ?>">For Lenders</a>
                                    </h3>
                                </div>
                                <div class="services-one__img-box">
                                    <div class="services-one__img">
                                        <img src="assets/images/services/services-1-1.jpg" alt="">
                                    </div>
                                    <div class="services-one__icon">
                                        <span class="icon-pie-chart"></span>
                                    </div>
                                </div>
                                <div class="services-one__read-more">
                                    <!-- <a href="<?php echo ABS_URL; ?>">Read More<span class="icon-right-arrow"></span></a> -->
                                    <div class="about-one__points-and-experience m-0">
                                        <div class="about-one__points-box px-0">
                                            <ul class="about-one__points-list list-unstyled">
                                                <li>
                                                    <div class="d-flex align-items-center">
                                                        <div class="icon">
                                                            <span class="fa fa-check"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Risk free borrowers: </p>
                                                        </div>
                                                    </div>
                                                    <p class="d-block w-100">Immediate access to risk free borrowers to
                                                        strengthen the portfolio </p>
                                                </li>
                                                <li>
                                                    <div class="d-flex align-items-center">
                                                        <div class="icon">
                                                            <span class="fa fa-check"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Higher returns at low risk:</p>
                                                        </div>
                                                    </div>
                                                    <p class="d-block w-100"> Comes with the higher ticket size loans
                                                        with near to zero risk on the amount lent</p>
                                                </li>
                                                <li>
                                                    <div class="d-flex align-items-center">
                                                        <div class="icon">
                                                            <span class="fa fa-check"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Seamless lending service:</p>
                                                        </div>
                                                    </div>
                                                    <p class="d-block w-100">Invest only cash and Kapex will manage the
                                                        end-end lending experience.</p>
                                                </li>

                                            </ul>

                                        </div>

                                    </div>
                                    <a href="<?php echo ABS_URL; ?>">Read More<span class="icon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                        <!--Services One Single End-->
                        <!--Services One Single Start-->
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="services-one__single">
                                <div class="services-one__title-box">
                                    <h3 class="services-one__title"><a href="<?php echo ABS_URL; ?>">For Landlords</a>
                                    </h3>
                                </div>
                                <div class="services-one__img-box">
                                    <div class="services-one__img">
                                        <img src="assets/images/services/services-1-1.jpg" alt="">
                                    </div>
                                    <div class="services-one__icon">
                                        <span class="icon-pie-chart"></span>
                                    </div>
                                </div>
                                <div class="services-one__read-more">

                                    <div class="about-one__points-and-experience m-0">
                                        <div class="about-one__points-box px-0">
                                            <ul class="about-one__points-list list-unstyled">
                                                <li>
                                                    <div class="d-flex align-items-center">
                                                        <div class="icon">
                                                            <span class="fa fa-check"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Satisfied & sticky tenants:</p>
                                                        </div>
                                                    </div>
                                                    <p class="d-block w-100">Access to better tenants so less worry on
                                                        cash inflow through rent</p>
                                                </li>
                                                <li>
                                                    <div class="d-flex align-items-center">
                                                        <div class="icon">
                                                            <span class="fa fa-check"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Higher occupancy rates:</p>
                                                        </div>
                                                    </div>
                                                    <p class="d-block w-100"> Gain more customers through our platform
                                                        which keeps the occupancy rate always high</p>
                                                </li>
                                                <li>
                                                    <div class="d-flex align-items-center">
                                                        <div class="icon">
                                                            <span class="fa fa-check"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Stable income:</p>
                                                        </div>
                                                    </div>
                                                    <p class="d-block w-100">Worrysome tenants through Kapex so earn
                                                        continous income</p>
                                                </li>

                                            </ul>

                                        </div>

                                    </div>
                                    <a href="<?php echo ABS_URL; ?>">Read More<span class="icon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                        <!--Services One Single End-->

                    </div>
                </div>
            </div>
        </section>
        <!--Services One End-->



        <!--Video One Start-->
        <section class="video-one">
            <div class="video-one__bg" style="background-image: url(assets/images/backgrounds/video-one-bg.jpg);"></div>
            <div class="container">
                <div class="video-one__inner">
                    <div class="video-one__video-link">
                        <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                            <div class="video-one__video-icon">
                                <img src="assets/images/icon/video-one-icon.png" alt="">
                                <i class="ripple"></i>
                            </div>
                        </a>
                    </div>
                    <h3 class="video-one__title">How it works?</h3>
                    <div class="video-one__btn-box">
                        <a href="<?php echo ABS_URL; ?>" class="video-one__btn thm-btn">Discover More</a>
                    </div>
                </div>
            </div>
        </section>
        <!--Video One End-->
        <section class="brand-one">
            <div class="brand-one__title"></div>
            <div class="container">
                <div class="brand-one__carousel thm-owl__carousel owl-theme owl-carousel owl-loaded owl-drag"
                    data-owl-options="{
                    &quot;items&quot;: 3,
                    &quot;margin&quot;: 30,
                    &quot;smartSpeed&quot;: 700,
                    &quot;loop&quot;:true,
                    &quot;autoplay&quot;: 6000,
                    &quot;nav&quot;:true,
                    &quot;dots&quot;:false,
                    &quot;navText&quot;: [&quot;<span class=\&quot;fa fa-angle-left\&quot;></span>&quot;,&quot;<span class=\&quot;fa fa-angle-right\&quot;></span>&quot;],
                    &quot;responsive&quot;:{
                        &quot;0&quot;:{
                            &quot;items&quot;:1
                        },
                        &quot;768&quot;:{
                            &quot;items&quot;:3
                        },
                        &quot;992&quot;:{
                            &quot;items&quot;: 5
                        }
                    }
                }">
                    <!--Brand One Single-->

                    <!--Brand One Single-->

                    <!--Brand One Single-->

                    <!--Brand One Single-->

                    <!--Brand One Single-->

                    <div class="owl-stage-outer">
                        <div class="owl-stage"
                            style="transform: translate3d(-1680px, 0px, 0px); transition: all 0.7s ease 0s; width: 3600px;">
                            <div class="owl-item cloned" style="width: 210px; margin-right: 30px;">
                                <div class="brand-one__single">
                                    <div class="brand-one__img">
                                        <img src="assets/images/brand/brand-1-1.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 210px; margin-right: 30px;">
                                <div class="brand-one__single">
                                    <div class="brand-one__img">
                                        <img src="assets/images/brand/brand-1-2.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 210px; margin-right: 30px;">
                                <div class="brand-one__single">
                                    <div class="brand-one__img">
                                        <img src="assets/images/brand/brand-1-3.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 210px; margin-right: 30px;">
                                <div class="brand-one__single">
                                    <div class="brand-one__img">
                                        <img src="assets/images/brand/brand-1-4.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 210px; margin-right: 30px;">
                                <div class="brand-one__single">
                                    <div class="brand-one__img">
                                        <img src="assets/images/brand/brand-1-5.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 210px; margin-right: 30px;">
                                <div class="brand-one__single">
                                    <div class="brand-one__img">
                                        <img src="assets/images/brand/brand-1-1.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 210px; margin-right: 30px;">
                                <div class="brand-one__single">
                                    <div class="brand-one__img">
                                        <img src="assets/images/brand/brand-1-2.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 210px; margin-right: 30px;">
                                <div class="brand-one__single">
                                    <div class="brand-one__img">
                                        <img src="assets/images/brand/brand-1-3.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 210px; margin-right: 30px;">
                                <div class="brand-one__single">
                                    <div class="brand-one__img">
                                        <img src="assets/images/brand/brand-1-4.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 210px; margin-right: 30px;">
                                <div class="brand-one__single">
                                    <div class="brand-one__img">
                                        <img src="assets/images/brand/brand-1-5.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item cloned active" style="width: 210px; margin-right: 30px;">
                                <div class="brand-one__single">
                                    <div class="brand-one__img">
                                        <img src="assets/images/brand/brand-1-1.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item cloned active" style="width: 210px; margin-right: 30px;">
                                <div class="brand-one__single">
                                    <div class="brand-one__img">
                                        <img src="assets/images/brand/brand-1-2.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 210px; margin-right: 30px;">
                                <div class="brand-one__single">
                                    <div class="brand-one__img">
                                        <img src="assets/images/brand/brand-1-3.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 210px; margin-right: 30px;">
                                <div class="brand-one__single">
                                    <div class="brand-one__img">
                                        <img src="assets/images/brand/brand-1-4.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 210px; margin-right: 30px;">
                                <div class="brand-one__single">
                                    <div class="brand-one__img">
                                        <img src="assets/images/brand/brand-1-5.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span
                                class="fa fa-angle-left"></span></button><button type="button" role="presentation"
                            class="owl-next"><span class="fa fa-angle-right"></span></button></div>
                    <div class="owl-dots disabled"></div>
                </div>
                <!-- If we need navigation buttons -->
            </div>
        </section>
        <!--Testimonial One Start-->
        <section class="testimonial-one">
            <div class="testimonial-one__bg"
                style="background-image: url(assets/images/backgrounds/testimonial-one-bg.jpg);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4">
                        <div class="testimonial-one__left">
                            <div class="section-title text-left">
                                <div class="section-title__tagline-box">
                                    <span class="section-title__tagline">our feedbacks</span>
                                </div>
                                <h2 class="section-title__title">Clients are
                                    <span>Talking</span>
                                </h2>
                            </div>
                            <p class="testimonial-one__left-text">Lorem Ipsum. Proin gravida nibh vel velit auctor
                                aliquet. Aenean solldin, lorem is simply.</p>
                            <div class="testimonial-one__rounded-text">
                                <a href="<?php echo ABS_URL; ?>" class="testimonial-one__curved-circle-box">
                                    <div class="curved-circle">
                                        <span class="curved-circle--item">
                                            380 satisfied clients
                                        </span>
                                    </div><!-- /.curved-circle -->
                                    <div class="testimonial-one__icon">
                                        <img src="assets/images/icon/main-slider-two-rounded-icon.png" alt="">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8">
                        <div class="testimonial-one__right">
                            <div class="testimonial-one__carousel owl-carousel owl-theme thm-owl__carousel"
                                data-owl-options='{
                                "loop": true,
                                "autoplay": true,
                                "margin": 30,
                                "nav": false,
                                "dots": false,
                                "smartSpeed": 500,
                                "autoplayTimeout": 10000,
                                "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
                                "responsive": {
                                    "0": {
                                        "items": 1
                                    },
                                    "768": {
                                        "items": 2
                                    },
                                    "992": {
                                        "items": 2
                                    },
                                    "1200": {
                                        "items": 3
                                    }
                                }
                            }'>
                                <!--Testimonial One Single Start-->
                                <div class="item">
                                    <div class="testimonial-one__single">
                                        <div class="testimonial-one__content">
                                            <div class="testimonial-one__shape-1"></div>
                                            <div class="testimonial-one__shape-2"></div>
                                            <div class="testimonial-one__img">
                                                <img src="assets/images/testimonial/testimonial-1-1.jpg" alt="">
                                            </div>
                                            <div class="testimonial-one__ratting">
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                            </div>
                                            <p class="testimonial-one__text">Lorem ipsum is simply free text dolor
                                                not sit amet,
                                                notted adipisicing elit sed do eiusmod incididunt labore et dolore
                                                text.</p>
                                        </div>
                                        <div class="testimonial-one__client-info">
                                            <h3><a href="<?php echo ABS_URL; ?>">Aleesha Brown</a></h3>
                                            <p>Happy Client</p>
                                        </div>
                                    </div>
                                </div>
                                <!--Testimonial One Single End-->
                                <!--Testimonial One Single Start-->
                                <div class="item">
                                    <div class="testimonial-one__single">
                                        <div class="testimonial-one__content">
                                            <div class="testimonial-one__shape-1"></div>
                                            <div class="testimonial-one__shape-2"></div>
                                            <div class="testimonial-one__img">
                                                <img src="assets/images/testimonial/testimonial-1-2.jpg" alt="">
                                            </div>
                                            <div class="testimonial-one__ratting">
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                            </div>
                                            <p class="testimonial-one__text">Lorem ipsum is simply free text dolor
                                                not sit amet,
                                                notted adipisicing elit sed do eiusmod incididunt labore et dolore
                                                text.</p>
                                        </div>
                                        <div class="testimonial-one__client-info">
                                            <h3><a href="<?php echo ABS_URL; ?>">Mike Hardson</a></h3>
                                            <p>Happy Client</p>
                                        </div>
                                    </div>
                                </div>
                                <!--Testimonial One Single End-->
                                <!--Testimonial One Single Start-->
                                <div class="item">
                                    <div class="testimonial-one__single">
                                        <div class="testimonial-one__content">
                                            <div class="testimonial-one__shape-1"></div>
                                            <div class="testimonial-one__shape-2"></div>
                                            <div class="testimonial-one__img">
                                                <img src="assets/images/testimonial/testimonial-1-3.jpg" alt="">
                                            </div>
                                            <div class="testimonial-one__ratting">
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                            </div>
                                            <p class="testimonial-one__text">Lorem ipsum is simply free text dolor
                                                not sit amet,
                                                notted adipisicing elit sed do eiusmod incididunt labore et dolore
                                                text.</p>
                                        </div>
                                        <div class="testimonial-one__client-info">
                                            <h3><a href="<?php echo ABS_URL; ?>">Sarah Albert</a></h3>
                                            <p>Happy Client</p>
                                        </div>
                                    </div>
                                </div>
                                <!--Testimonial One Single End-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Testimonial One End-->



        <!--Team One Start-->
        <section class="team-one">
            <div class="container">
                <div class="team-one__top">
                    <div class="row">
                        <div class="col-xl-7 col-lg-6">
                            <div class="team-one__left">
                                <div class="section-title text-left">
                                    <div class="section-title__tagline-box">
                                        <span class="section-title__tagline">meet our team</span>
                                    </div>
                                    <h2 class="section-title__title">Meet the People Behind
                                        <br> the High <span>Success</span>
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6">
                            <div class="team-one__right">
                                <p class="team-one__text">Lorem ipsum dolor sit amet, consectetur notted adipisicing
                                    elit sed do eiusmod tempor incididunt ut labore et simply free text dolore magna
                                    aliqua lonm andhn.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-one__bottom">
                    <div class="row">
                        <!--Team One Single Start-->
                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                            <div class="team-one__single">
                                <div class="team-one__img-box">
                                    <div class="team-one__img">
                                        <img src="assets/images/team/team-1-1.jpg" alt="">
                                    </div>
                                    <div class="team-one__hover-content">
                                        <div class="team-one__hover-arrow-box">
                                            <a href="<?php echo ABS_URL; ?>" class="team-one__hover-arrow"><span
                                                    class="fas fa-share-alt"></span></a>
                                            <ul class="list-unstyled team-one__social">
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            </ul>
                                        </div>
                                        <h3 class="team-one__hover-title"><a href="<?php echo ABS_URL; ?>">Kevin Martin</a>
                                        </h3>
                                        <p class="team-one__hover-sub-title">Consultant</p>
                                        <p class="team-one__hover-text">There are many vartion of passages of available.
                                        </p>
                                    </div>
                                </div>
                                <div class="team-one__content">
                                    <div class="team-one__arrow-box">
                                        <a href="<?php echo ABS_URL; ?>" class="team-one__arrow"><span
                                                class="fas fa-share-alt"></span></a>
                                    </div>
                                    <h3 class="team-one__title"><a href="<?php echo ABS_URL; ?>">Kevin Martin</a></h3>
                                    <p class="team-one__sub-title">Consultant</p>
                                </div>
                            </div>
                        </div>
                        <!--Team One Single End-->
                        <!--Team One Single Start-->
                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                            <div class="team-one__single">
                                <div class="team-one__img-box">
                                    <div class="team-one__img">
                                        <img src="assets/images/team/team-1-2.jpg" alt="">
                                    </div>
                                    <div class="team-one__hover-content">
                                        <div class="team-one__hover-arrow-box">
                                            <a href="<?php echo ABS_URL; ?>" class="team-one__hover-arrow"><span
                                                    class="fas fa-share-alt"></span></a>
                                            <ul class="list-unstyled team-one__social">
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            </ul>
                                        </div>
                                        <h3 class="team-one__hover-title"><a href="<?php echo ABS_URL; ?>">Jeesica Brown</a>
                                        </h3>
                                        <p class="team-one__hover-sub-title">Consultant</p>
                                        <p class="team-one__hover-text">There are many vartion of passages of available.
                                        </p>
                                    </div>
                                </div>
                                <div class="team-one__content">
                                    <div class="team-one__arrow-box">
                                        <a href="<?php echo ABS_URL; ?>" class="team-one__arrow"><span
                                                class="fas fa-share-alt"></span></a>
                                    </div>
                                    <h3 class="team-one__title"><a href="<?php echo ABS_URL; ?>">Jeesica Brown</a></h3>
                                    <p class="team-one__sub-title">Consultant</p>
                                </div>
                            </div>
                        </div>
                        <!--Team One Single End-->
                        <!--Team One Single Start-->
                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                            <div class="team-one__single">
                                <div class="team-one__img-box">
                                    <div class="team-one__img">
                                        <img src="assets/images/team/team-1-3.jpg" alt="">
                                    </div>
                                    <div class="team-one__hover-content">
                                        <div class="team-one__hover-arrow-box">
                                            <a href="<?php echo ABS_URL; ?>" class="team-one__hover-arrow"><span
                                                    class="fas fa-share-alt"></span></a>
                                            <ul class="list-unstyled team-one__social">
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            </ul>
                                        </div>
                                        <h3 class="team-one__hover-title"><a href="<?php echo ABS_URL; ?>">Mike Hardson</a>
                                        </h3>
                                        <p class="team-one__hover-sub-title">Consultant</p>
                                        <p class="team-one__hover-text">There are many vartion of passages of available.
                                        </p>
                                    </div>
                                </div>
                                <div class="team-one__content">
                                    <div class="team-one__arrow-box">
                                        <a href="<?php echo ABS_URL; ?>" class="team-one__arrow"><span
                                                class="fas fa-share-alt"></span></a>
                                    </div>
                                    <h3 class="team-one__title"><a href="<?php echo ABS_URL; ?>">Mike Hardson</a></h3>
                                    <p class="team-one__sub-title">Consultant</p>
                                </div>
                            </div>
                        </div>
                        <!--Team One Single End-->
                    </div>
                </div>
            </div>
        </section>
        <!--Team One End-->

        <!--Counter One Start-->
        <section class="counter-one">
            <div class="counter-one__inner">
                <div class="counter-one__shadow"></div>
                <div class="counter-one__bg"
                    style="background-image: url(assets/images/backgrounds/counter-one-bg.jpg);"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-5">
                            <div class="counter-one__left">
                                <div class="section-title text-left">
                                    <div class="section-title__tagline-box">
                                        <span class="section-title__tagline">fun facts</span>
                                    </div>
                                    <h2 class="section-title__title">Consultancy Funfacts
                                        <br> in Great <span>Numbers</span>
                                    </h2>
                                </div>
                                <p class="counter-one__text">Leverage agile frameworks to provide a robust synopsis for
                                    high level overviews. Iterative approaches to corporate strategy data foster to
                                    collaborative thinking.</p>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7">
                            <div class="counter-one__right">
                                <ul class="counter-one__count-box list-unstyled">
                                    <li>
                                        <div class="counter-one__icon">
                                            <span class="icon-checking"></span>
                                        </div>
                                        <div class="counter-one__count count-box">
                                            <h3 class="count-text" data-stop="886" data-speed="1500">00</h3>
                                        </div>
                                        <p class="counter-one__text">Projects Completed</p>
                                    </li>
                                    <li>
                                        <div class="counter-one__icon">
                                            <span class="icon-recommend"></span>
                                        </div>
                                        <div class="counter-one__count count-box">
                                            <h3 class="count-text" data-stop="600" data-speed="1500">00</h3>
                                        </div>
                                        <p class="counter-one__text">Satisfied Customers</p>
                                    </li>
                                    <li>
                                        <div class="counter-one__icon">
                                            <span class="icon-consulting"></span>
                                        </div>
                                        <div class="counter-one__count count-box">
                                            <h3 class="count-text" data-stop="960" data-speed="1500">00</h3>
                                        </div>
                                        <p class="counter-one__text">Expert Consultants</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="counter-one__bottom">
                <div class="container">
                    <div class="counter-one__bottom-inner">
                        <p class="counter-one__bottom-text">Need best business consultation solutions & services? <a
                                href="#">Send a Request</a></p>
                        <div class="counter-one__call-box">
                            <p>Call Free <a href="tel:9200009850">+92 (0000)-9850</a></p>
                            <div class="counter-one__call-icon">
                                <span class="icon-telephone-1"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Counter One End-->




        <!--Site Footer Start-->
        <?php require ABS_PATH . 'includes/footer-menu.php';?>
        <!--Site Footer End-->


    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="<?php echo ABS_URL; ?>" aria-label="logo image"><img src="assets/images/resources/logo-2.png"
                        width="135" alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:needhelp@packageName__.com">needhelp@sinace.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:666-888-0000">666 888 0000</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                <a href="<?php echo FACEBOOK_LINK; ?>"><i class="fab fa-facebook"></i></a>
                                    <a href="<?php echo TWITTER_LINK; ?>"><i class="fab fa-twitter"></i></a>
                                    <a href="<?php echo INSTRAGRAM_LINK; ?>"><i class="fab fa-instagram"></i></a>
                                    <a href="<?php echo YOUTUBE_LINK; ?>"><i class="fab fa-youtube"></i></a>
                                    <a href="<?php echo TELEGRAM_LINK; ?>"><i class="fab fa-telegram"></i></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="icon-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="icon-right-arrow"></i></a>
    <script>
    $(document).ready(function() {
        $(".owl-carousel").owlCarousel({
            // Other options...
            disable: true
        });
    });
    </script>

    <script src="assets/vendors/jquery/jquery-3.6.4.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="assets/vendors/nouislider/nouislider.min.js"></script>
    <script src="assets/vendors/odometer/odometer.min.js"></script>
    <script src="assets/vendors/swiper/swiper.min.js"></script>
    <script src="assets/vendors/tiny-slider/tiny-slider.min.js"></script>
    <script src="assets/vendors/wnumb/wNumb.min.js"></script>
    <script src="assets/vendors/wow/wow.js"></script>
    <script src="assets/vendors/isotope/isotope.js"></script>
    <script src="assets/vendors/countdown/countdown.min.js"></script>
    <script src="assets/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="assets/vendors/bxslider/jquery.bxslider.min.js"></script>
    <script src="assets/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="assets/vendors/vegas/vegas.min.js"></script>
    <script src="assets/vendors/jquery-ui/jquery-ui.js"></script>
    <script src="assets/vendors/timepicker/timePicker.js"></script>
    <script src="assets/vendors/circleType/jquery.circleType.js"></script>
    <script src="assets/vendors/circleType/jquery.lettering.min.js"></script>
    <script src="assets/vendors/highcharts/highcharts.min.js"></script>
    <script src="assets/vendors/touch/touch-paid-min.js"></script>
    <script src="assets/js/sip-calculator.js"></script>
    <script src="assets/js/lumpsum-calculator.js"></script>
    <script src="assets/js/inflation.js"></script>
    <script src="assets/js/target-amount-calculator.js"></script>
    <script src="assets/js/tab.js"></script>
    <script src="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="assets/js/sinace.js"></script>
</body>

</html>