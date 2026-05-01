<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Fonivo.lk - Contact</title>
    <link rel="shortcut icon" href="assets/images/logo/fav.jpg">

    <!-- fraimwork - css include -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <!-- icon - css include -->
    <link rel="stylesheet" type="text/css" href="assets/css/fontawesome.css">

    <!-- animation - css include -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">

    <!-- nice select - css include -->
    <link rel="stylesheet" type="text/css" href="assets/css/nice-select.css">

    <!-- carousel - css include -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css">

    <!-- popup images & videos - css include -->
    <link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">

    <!-- jquery ui - css include -->
    <link rel="stylesheet" type="text/css" href="assets/css/jquery-ui.css">

    <!-- custom - css include -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

</head>

<style>
    .map_wrapper {
        width: 100%;
        overflow: hidden;
    }

    .map_wrapper iframe {
        width: 100%;
        height: 450px;
        border: 0;
        display: block;
    }

    /* Mobile fix */
    @media (max-width: 991px) {
        .map_wrapper iframe {
            height: 300px;
        }
    }

    @media (max-width: 991px) {

        .supermarket_section_title {
            margin-top: -22px !important;
        }

        .carousel_nav {
            margin-top: 12px;
        }

        /* .policy_section{
      display: none;
    }
     */
        .accessoriese_more {
            display: none
        }


    }

    /* Desktop - keep nice aligned layout */
    .policy_swiper {
        overflow: hidden;
    }

    .policy_swiper .swiper-slide {
        height: auto;
    }

    .supermarket_policy_item {
        display: flex;
        align-items: center;
        background: #fff;
        height: 100%;
    }

    .supermarket_policy_item .item_icon {
        flex: 0 0 auto;
    }

    .supermarket_policy_item .item_icon img {
        display: block;
        max-width: 100%;
        height: auto;
    }

    /* Desktop settings */
    @media (min-width: 992px) {
        .policy_swiper .swiper-wrapper {
            display: flex;
            gap: 0;
        }

        .policy_swiper .swiper-slide {
            width: 20% !important;
        }
    }

    /* Mobile slider style only */
    @media (max-width: 991px) {
        .policy_section {
            padding-top: 25px !important;
            padding-bottom: 0 !important;
        }

        .policy_swiper {
            overflow: hidden;
            padding-bottom: 8px;
        }

        .swiper-slide {
            width: 220px !important;
        }

        /* .policy_swiper .swiper-slide {
        width: auto;
    } */

        .supermarket_policy_item {
            display: flex;
            align-items: center;
            /* padding: 12px 14px; */
            border-radius: 10px;
            background: #fff;
            min-height: 78px;
        }

        .supermarket_policy_item .item_icon {
            width: 42px;
            min-width: 42px;
            margin-right: 10px;
        }

        .supermarket_policy_item .item_icon img {
            width: 100%;
            height: auto;
        }

        .supermarket_policy_item .item_content h3 {
            font-size: 12px;
            line-height: 1.3;
            margin-bottom: 3px;
        }

        .supermarket_policy_item .item_content p {
            font-size: 11px;
            line-height: 1.4;
            margin: 0;
        }
    }

    @media (max-width: 991px) {


        .header_top {
            padding: 8px 0;
            font-size: 13px;

        }

        .header_top .row {
            flex-direction: column;
            text-align: center;
        }

        .header_top .col-lg-5,
        .header_top .col-lg-7 {
            width: 100%;
            max-width: 100%;
        }

        .welcome_text {
            margin-bottom: 5px;
        }

        .info_list {
            justify-content: center !important;
            flex-wrap: wrap;
            gap: 10px;
        }

        .info_list li {
            font-size: 12px;
        }

        .info_list li a {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .currency_select select {
            font-size: 12px;
            padding: 2px 6px;
        }
    }

    @media (max-width: 575px) {
        .header_top {

            min-height: 40px !important;
        }

        .welcome_text {
            font-size: 12px !important;

        }

        .info_list li:nth-child(1),
        .info_list li:nth-child(2) {
            display: none;
            /* hide locator + tracking */
        }

        .currency_select {
            display: none !important;
        }

        .fonivo-note {
            display: none !important;
        }
    }

    .msb_widget.brand_logo {
        display: flex;
        justify-content: center;
        /* horizontal center */
        align-items: center;
        /* vertical center */
        text-align: center;
        padding-bottom: 0px !important;
    }

    .sidebar_mobile_menu {
        margin-top: -63px;
    }

    /* Rating */
    .rating_star_wrap {
        margin-bottom: 5px;
    }

    .rating_star li {
        color: #f5b301;
        font-size: 12px;
    }

    .video_banner {
        position: relative;
        width: 100%;

    }

    .video_wrapper {
        position: relative;
        width: 100%;
        overflow: hidden;
        border-radius: 10px;
    }

    .bg_video {
        width: 100%;
        height: auto;
        /* Let the video keep its natural height */
        display: block;
        object-fit: cover;
    }

    .video_overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;

    }

    .supermarket_deals_item img {
        height: 180px;
        object-fit: contain;
    }

    .item_title {
        font-size: 14px;
        font-weight: 600;
        margin-top: 10px;
    }

    .item_price {
        display: block;
        margin-top: 5px;
        font-weight: bold;
        color: #e60023;
    }

    .supermarket_advertisement_3 {
        position: relative;
        overflow: hidden;
        border-radius: 10px;
    }

    .ad_video {
        width: 100%;
        height: 100%;
        object-fit: cover;
        /* fill nicely */
        display: block;
    }

    .supermarket_advertisement_3 .item_content {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;

        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;

        z-index: 2;
    }

    /* Optional overlay */
    .supermarket_advertisement_3::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.3);
        z-index: 1;
    }

    @media (max-width: 991px) {
        .header_middle .main_menu {
            display: none !important;
        }

        .video_banner {
            padding-bottom: 20px !important;
        }

        .brand_logo {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .logo_img {
            height: 40px !important;
            margin-left: 17px;
        }

        .clearfixsuper::after {
            margin-top: 9px !important;
        }

        .supermarket_product_columns {
            margin-top: 40px;
        }
    }

    /* Image fix */
    .product_img {
        width: 100%;
        height: 250px;
        max-width: 180px;
        margin: 0 auto;
        display: block;
    }

    /* Product layout fix */
    .supermarket_product_columns {
        display: flex;
        flex-wrap: wrap;
    }

    /* Desktop (3 columns) */
    .supermarket_product_columns li {
        width: 33.33%;

        padding: 10px;
    }

    /* Tablet (2 columns) */
    @media (max-width: 991px) {
        .supermarket_product_columns li {
            width: 50%;
        }
    }

    /* Mobile (1 column) */
    @media (max-width: 575px) {
        .supermarket_product_columns li {
            width: 100%;
        }
    }

    /* Card styling */
    .supermarket_product_listlayout {
        background: #fff;
        border-radius: 10px;
        padding: 15px;
        text-align: center;
        height: 100%;
        transition: 0.3s;
    }

    .supermarket_product_listlayout:hover {
        transform: translateY(-5px);
    }

    /* Title fix */
    .item_title {
        font-size: 14px;
        margin-top: 10px;
    }

    .item_image_accessories {
        min-width: 220px;
        height: 220px;

    }

    @media (min-width: 992px) {

        .accessoriese_more_desk {
            display: none !important;
        }

        .accossories_li {
            height: 250px;
        }

        .video_banner {
            margin-top: -40px !important;
        }

    }

    .video_breadcrumb {
        position: relative;
        height: 300px;
        overflow: hidden;
    }

    /* Video */
    .breadcrumb_video {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 100%;
        height: 100%;
        object-fit: cover;
        transform: translate(-50%, -50%);
        z-index: 1;
    }

    /* Overlay */
    .video_breadcrumb .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;

        background: rgba(0, 0, 0, 0.5);
        z-index: 2;
    }

    /* Content on top */
    .video_breadcrumb .container {
        position: relative;
        z-index: 3;
    }

    @media (max-width: 991px) {
        .video_breadcrumb {
            height: 200px;
        }
    }
</style>

<body class="home_supermarket">


    <!-- backtotop - start -->
    <div id="thetop"></div>
    <div class="backtotop bg_supermarket_red">
        <a href="#" class="scroll">
            <i class="far fa-arrow-up"></i>
        </a>
    </div>
    <!-- backtotop - end -->

    <!-- preloader - start -->
    <!-- <div id="preloader"></div> -->
    <!-- preloader - end -->


    <!-- header_section - start
  ================================================== -->
    <header class="header_section supermarket_header bg-white clearfix">

        {{-- TOP BAR --}}
        <div class="header_top text-white clearfix">
            <div class="container maxw_1460">
                <div class="row align-items-center justify-content-lg-between">

                    <div class="col-lg-5">
                        <p class="welcome_text mb-0">Luxury In Every Touch</p>
                    </div>

                    <div class="col-lg-7">
                        <ul class="info_list ul_li_right clearfix">
                            <li>
                                <a href="#!">
                                    <i class="fal fa-map-marker-alt"></i> Store Locator
                                </a>
                            </li>
                            <li>
                                <a href="#!">
                                    <i class="fal fa-truck"></i> Track Your Order
                                </a>
                            </li>
                            <li>
                                <form action="#">
                                    <div class="currency_select option_select mb-0">
                                        <select>
                                            <option value="LKR" selected>LKR</option>
                                        </select>
                                    </div>
                                </form>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>

        {{-- MIDDLE HEADER --}}
        <div class="header_middle clearfix">
            <div class="container maxw_1460">
                <div class="row align-items-center justify-content-lg-between">

                    {{-- LOGO --}}
                    <div class="col-lg-3">
                        <div class="brand_logo">

                            <a class="brand_link" href="{{ url('/') }}">
                                <img src="{{ asset('assets/images/logo/fonivo2.png') }}" class="logo_img" alt="logo"
                                    style="height: 60px;">
                            </a>

                            <ul class="mh_action_btns ul_li clearfix">
                                <li>
                                    <button type="button" class="cart_btn"
                                        onclick="window.location.href='{{ url('/contact') }}'" title="Contact Support">
                                        <i class="fal fa-headset" style="font-size: 25px;"></i>
                                    </button>
                                </li>

                                <li>
                                    <button type="button" class="mobile_menu_btn">
                                        <i class="far fa-bars" style="font-size: 25px;"></i>
                                    </button>
                                </li>
                            </ul>

                        </div>
                    </div>

                    {{-- MENU --}}
                    <div class="col-lg-6">
                        <nav class="main_menu d-flex justify-content-center">
                            <ul class="ul_li d-flex justify-content-center align-items-center">

                                <li><a href="{{ url('/') }}">Home</a></li>

                                <li>
                                    <a href="{{ route('products.index') }}">Phones</a>
                                </li>

                                <li><a href="#!">Accessories</a></li>
                                <li><a href="#!">About us</a></li>
                                <li><a href="{{ url('/contact') }}">Contact us</a></li>

                            </ul>
                        </nav>
                    </div>

                    {{-- RIGHT ACTION --}}
                    <div class="col-lg-3">
                        <div class="supermarket_header_btns clearfix">

                            <ul class="action_btns_group ul_li_right clearfix">
                                <li>
                                    <button type="button">
                                        <span>Need</span>
                                        <strong>Help?</strong>
                                    </button>
                                </li>

                                <li>
                                    <button type="button" class="cart_btn"
                                        onclick="window.location.href='{{ url('/contact') }}'">
                                        <i class="fal fa-headset"></i>
                                    </button>
                                </li>
                            </ul>

                            <span class="alart_text float-right fonivo-note">
                                <small>✔</small>
                                Trusted service!
                            </span>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        {{-- SEARCH --}}
        <div id="search_body_collapse" class="search_body_collapse collapse">
            <div class="search_body">
                <div class="container-fluid prl_90">
                    <form action="#">
                        <div class="form_item mb-0">
                            <input type="search" name="search" placeholder="Type here...">
                            <button type="submit">
                                <i class="fal fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </header>
    <!-- header_section - end
  ================================================== -->




    <!-- main body - start
  ================================================== -->
    <main>



        <!-- sidebar mobile menu & sidebar cart - start
   ================================================== -->
        <div class="sidebar_mobile_menu">

            {{-- CLOSE BUTTON --}}
            <button type="button" class="close_btn">
                <i class="fal fa-times"></i>
            </button>

            {{-- LOGO --}}
            <div class="msb_widget brand_logo text-center">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('assets/images/logo/fonivo2.png') }}" alt="Fonivo Logo"
                        style="max-height: 70px;">
                </a>
            </div>

            {{-- MENU --}}
            <div class="msb_widget mobile_menu_list clearfix">

                <h3 class="title_text mb_15 text-uppercase">
                    Menu List
                </h3>

                <ul class="ul_li_block clearfix fonivo_mobile_nav">

                    <li>
                        <a href="{{ url('/') }}">
                            <i class="fal fa-home mr-2"></i> Home
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('products.index') }}">
                            <i class="fal fa-mobile-alt mr-2"></i> Phones
                        </a>
                    </li>

                    <li>
                        <a href="#!">
                            <i class="fal fa-headphones-alt mr-2"></i> Accessories
                        </a>
                    </li>

                    <li>
                        <a href="#!">
                            <i class="fal fa-info-circle mr-2"></i> About Us
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('/contact') }}">
                            <i class="fal fa-envelope mr-2"></i> Contact Us
                        </a>
                    </li>

                </ul>
            </div>

            {{-- NOTE --}}
            <div class="msb_widget fonivo_mobile_note">
                <span>
                    <i class="fas fa-check-circle mr-1"></i>
                    Genuine trusted service!
                </span>
            </div>

        </div>
        <!-- sidebar mobile menu & sidebar cart - end
   ================================================== -->




        <!-- breadcrumb_section - start
   ================================================== -->
        <section
            class="breadcrumb_section text-white text-center text-uppercase d-flex align-items-end clearfix video_breadcrumb">

            <!-- Video -->
            <video autoplay muted loop playsinline class="breadcrumb_video">
                <source src="{{ asset('assets/videos/contcat_banner.mp4') }}" type="video/mp4">
            </video>

            <!-- Overlay -->
            <div class="overlay"></div>

            <!-- Content -->
            <div class="container position-relative">
                <h1 class="page_title text-white">Contact Us</h1>
                <ul class="breadcrumb_nav ul_li_center clearfix">
                    <li><a href="/">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>

        </section>
        <!-- breadcrumb_section - end
   ================================================== -->


        <!-- map_section - start -->
        <div class="map_section clearfix">
            <div class="map_wrapper">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.142304412891!2d79.8503429!3d7.2246048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2ef0033ee4af5%3A0x6e9b4d74d58405cc!2sfonivo%20mobile%20%EF%A3%BF!5e0!3m2!1sen!2slk!4v1776489003081!5m2!1sen!2slk"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy">
                </iframe>
            </div>
        </div>
        <!-- map_section - end -->

        <!-- main_contact_section - start
   ================================================== -->
        <section class="main_contact_section sec_ptb_100 clearfix">
            <div class="container">
                <div class="row justify-content-lg-between">

                    <div class="col-lg-5">
                        <div class="main_contact_content">
                            <h3 class="title_text mb_15">Get In Touch</h3>
                            <p class="mb_50">
                                If you are interested in working with us, please get in touch.
                            </p>
                            <ul class="main_contact_info ul_li_block clearfix">
                                <li>
                                    <span class="icon">
                                        <i class="fal fa-map-marked-alt"></i>
                                    </span>
                                    <p class="mb-0">
                                        12 St.Lazarus Road, Negombo, Sri Lanka.
                                    </p>
                                </li>
                                <li>
                                    <span class="icon">
                                        <i class="fal fa-phone-volume"></i>
                                    </span>
                                    <p class="mb-0">077 400 6216 - 077 075 6216</p>
                                </li>
                                <li>
                                    <span class="icon">
                                        <i class="fal fa-paper-plane"></i>
                                    </span>
                                    <p class="mb-0">shafan0614@gmail.com</p>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="main_contact_form">
                            <h3 class="title_text mb_30">FeedBack</h3>
                            <form action="#">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                        <div class="form_item">
                                            <input type="text" name="name" placeholder="Your Name">
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                        <div class="form_item">
                                            <input type="email" name="email" placeholder="Your Email">
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form_item">
                                            <input type="text" name="subject" placeholder="Subject">
                                        </div>
                                    </div>
                                </div>

                                <div class="form_item">
                                    <textarea name="message" placeholder="Your Message"></textarea>
                                </div>
                                <button type="submit" class="custom_btn bg_default_red text-uppercase">view
                                    projects</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- main_contact_section - end
   ================================================== -->


    </main>
    <!-- main body - end
  ================================================== -->



    <!-- footer_section - start
  ================================================== -->
    <footer class="footer_section supermarket_footer clearfix">


        <div class="footer_middle sec_ptb_50 text-white clearfix" data-bg-color="#23292d">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-5 col-md-7 col-sm-9 col-xs-12">
                        <div class="form_item mb-0">
                            <form action="#">
                                <input type="email" name="email" placeholder="Enter Your Email Address">
                                <button type="submit" class="submit_btn">Enquire</button>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-7 col-sm-9 col-xs-12">
                        <div class="footer_electronic_hotline mb_30">
                            <i class="fal fa-headset"></i>
                            <h4 class="text-white">GOT QUESTION? CALL US 24/7!</h4>
                            <span>+94 77 400 6216</span>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-7 col-sm-9 col-xs-12">
                        <ul class="circle_social_links ul_li_right clearfix">
                            <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#!"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href="#!"><i class="fab fa-dribbble"></i></a></li>
                            <li><a href="#!"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer_bottom text-white clearfix" data-bg-color="#191e22">
            <div class="container">
                <div class="row justify-content-lg-between">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <p class="copyright_text mb-0">© <a href="#!"
                                class="author_link text-white">fonivo.lk</a> - All rights Reserved</p>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="payment_methods float-lg-right float-md-right">
                            <img src="assets/images/payment_methods_01.png" alt="image_not_found">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer_section - end
  ================================================== -->


    <!-- fraimwork - jquery include -->
    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- mobile menu - jquery include -->
    <script src="assets/js/mCustomScrollbar.js"></script>

    <!-- google map - jquery include -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDk2HrmqE4sWSei0XdKGbOMOHN3Mm2Bf-M&ver=2.1.6"></script>
    <script src="assets/js/gmaps.min.js"></script>

    <!-- animation - jquery include -->
    <script src="assets/js/parallaxie.js"></script>
    <script src="assets/js/wow.min.js"></script>

    <!-- nice select - jquery include -->
    <script src="assets/js/nice-select.min.js"></script>

    <!-- carousel - jquery include -->
    <script src="assets/js/slick.min.js"></script>

    <!-- countdown timer - jquery include -->
    <script src="assets/js/countdown.js"></script>

    <!-- popup images & videos - jquery include -->
    <script src="assets/js/magnific-popup.min.js"></script>

    <!-- filtering & masonry layout - jquery include -->
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/masonry.pkgd.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>

    <!-- jquery ui - jquery include -->
    <script src="assets/js/jquery-ui.js"></script>

    <!-- custom - jquery include -->
    <script src="assets/js/custom.js"></script>


</body>

</html>
