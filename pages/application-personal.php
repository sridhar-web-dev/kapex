<?php
require_once '../config/config.php';
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
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+3:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
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
    <?php require_once ABS_PATH . 'includes/vendor-plugin.php'; ?>
    <?php require_once ABS_PATH . 'includes/template-css.php'; ?>
    <?php TagManager::head_tracker(); ?>
</head>

<body class="custom-cursor">
    <?php TagManager::body_tracker(); ?>
    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <!-- /.preloader -->


    <div class="page-wrapper">
        <?php require ABS_PATH . 'includes/header-menu.php'; ?>

        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg);">
            </div>
            <div class="page-header__shape-2 float-bob-x">
                <img src="assets/images/shapes/page-header-shape-2.png" alt="">
            </div>
            <div class="page-header__shape-1 float-bob-y">
                <img src="assets/images/shapes/page-header-shape-1.png" alt="">
            </div>
            <div class="page-header__shape-3 float-bob-x">
                <img src="assets/images/shapes/page-header-shape-3.png" alt="">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>Personal Details</h2>
                    <div class="thm-breadcrumb__inner">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="<?php echo ABS_URL; ?>">Home</a></li>
                            <li><span>/</span></li>
                            <li><a href="#">Step - 01</a></li>
                            <li><span>/</span></li>
                            <li>Personal Details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Services Details Start-->
        <section class="services-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5">
                        <div class="services-details__left">
                            <div class="services-details__category">
                                <h3 class="services-details__category-title">Application Process</h3>
                                <ul class="services-details__category-list list-unstyled">
                                    <li class="active"><a href="#">Your Personal Profile<span class="icon-right-arrow"></span></a>
                                    </li>
                                    <li><a href="#">Your Company Profile<span class="icon-right-arrow"></span></a></li>
                                    <li><a href="#">Upload Finanacial documents<span class="icon-right-arrow"></span></a>
                                    </li>
                                    <li><a href="#">Our Decision<span class="icon-right-arrow"></span></a>
                                    </li>
                                    <li><a href="#">KYC & Auto Debit Setup<span class="icon-right-arrow"></span></a>
                                    <li><a href="#">Agreement<span class="icon-right-arrow"></span></a>
                                    </li>
                                    <li><a href="#">Disbursement<span class="icon-right-arrow"></span></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="services-details__need-help">
                                <div class="services-details__need-help-bg"></div>
                                <div class="services-details__need-help-shape-1 float-bob-x">
                                    <img src="assets/images/shapes/need-help-shape-1.png" alt="">
                                </div>
                                <div class="services-details__need-help-shape-2 float-bob-x">
                                    <img src="assets/images/shapes/need-help-shape-2.png" alt="">
                                </div>
                                <div class="services-details__need-help-shape-3 float-bob-y">
                                    <img src="assets/images/shapes/need-help-shape-3.png" alt="">
                                </div>
                                <div class="services-details__need-help-icon">
                                    <span class="icon-consultant"></span>
                                </div>
                                <h3 class="services-details__need-help-title">Looking
                                    <br> for a Top
                                    <br> Consulting?
                                </h3>
                                <div class="services-details__need-help-btn-box">
                                    <a href="contact.html" class="services-details__need-help-btn thm-btn">Contact
                                        Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7">
                        <div class="services-details__right">
                            <div class="contact-page__form-box">
                                <form action="https://thegenius.co/html/sinace2/assets/inc/sendemail.php" class="contact-page__form contact-form-validated" novalidate="novalidate">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group my-3">
                                                <label for="customRange1" class="form-label"><strong>How much would you like to unlock?</strong></label>
                                                <input type="range" class="form-range" id="customRange1">
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="contact-page__input-box">
                                                <label for="name">Your Good Name? (As per PAN records)</label>
                                                <input type="text" placeholder="Enter first name and Last name" name="name">
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="contact-page__input-box">
                                                <label for="name">Your Date of Birth</label>
                                                <input type="date" name="name">
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="contact-page__input-box">
                                                <label for="name">Your Mobile Number (This will be username)</label>
                                                <input type="tel" placeholder="XXXXX XXXXX" name="name">
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="contact-page__input-box">
                                                <label for="name">Your Email Address</label>
                                                <input type="email" placeholder="joebiden@gmail.com" name="name">
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="contact-page__input-box text-message-box">
                                                <label for="">Your current residential Address</label>
                                                <textarea name="message" placeholder="Write message"></textarea>
                                            </div>

                                        </div>
                                    
                                        <div class="col-lg-12">
                                            <div class="contact-page__input-box">
                                                <label for="name">Your Father's Name?</label>
                                                <input type="text" placeholder="Enter first name and Last name" name="name">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                        <label for="">Your Pan Number</label>
                                        <div class="contact-page__input-box d-flex" >
                                        
                                            <input type="number" id="digit1" maxlength="1" min="0" max="9" required>
                                            <input type="number" id="digit2" maxlength="1" min="0" max="9" required>
                                            <input type="number" id="digit3" maxlength="1" min="0" max="9" required>
                                            <input type="number" id="digit4" maxlength="1" min="0" max="9" required>
                                        </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="contact-page__btn-box">
                                                <button type="submit" class="thm-btn contact-page__btn float-end">Next : Your Profile</button>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                                <div class="result"></div>
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
    <!--Services Details End-->


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
                <a href="<?php echo ABS_URL; ?>" aria-label="logo image"><img src="assets/images/resources/logo-2.png" width="135" alt="" /></a>
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
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-pinterest-p"></a>
                    <a href="#" class="fab fa-instagram"></a>
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


    <!-- template js -->
    <script src="assets/js/sinace.js"></script>
    <script>
    // JavaScript to auto-advance to the next input field
    document.querySelectorAll('input[type="number"]').forEach(function(input) {
        input.addEventListener('input', function() {
            var nextInput = this.nextElementSibling;
            if (nextInput !== null && this.value.length === this.maxLength) {
                nextInput.focus();
            }
        });
    });
</script>
</body>

</html>