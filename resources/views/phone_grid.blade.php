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

/* ── Product image: fixed height, full cover, no overlap ── */
.electronic_product_item .item_image {
    display: block;
    width: 100%;
    height: 280px;              /* one value controls all cards */
    overflow: hidden;
    position: relative;
    min-height: unset !important;   /* kill the conflicting min-height */
    aspect-ratio: unset !important; /* kill the conflicting aspect-ratio */
    border-radius: 8px 8px 0 0;
}

.electronic_product_item .item_image a {
    display: block;
    width: 100%;
    height: 100%;
    position: absolute;
    inset: 0;
}

.electronic_product_item .item_image img {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
    max-height: unset !important;   /* kill the conflicting max-height */
    display: block;
    transition: transform 0.4s ease;
    border-radius: 8px;
}

.electronic_product_item .item_image:hover img {
    transform: scale(1.04);
}

/* ── Tablet ── */
@media (max-width: 1199px) {
    .electronic_product_item .item_image {
        height: 240px;
    }
}

/* ── Mobile: 2 columns ── */
@media (max-width: 767px) {
    .electronic_product_item .item_image {
        height: 180px;
    }

    ul.electronic_product_columns.has_4columns > li {
        width: 50% !important;
        padding: 4px !important;
        box-sizing: border-box;
    }
}

    /* ── Mobile: 2 columns for electronic_product_columns ── */
@media (max-width: 767px) {

  ul.electronic_product_columns.has_4columns {
    display: flex;
    flex-wrap: wrap;
  }

  ul.electronic_product_columns.has_4columns > li {
    width: 50% !important;
    padding: 4px !important;
    box-sizing: border-box;
  }

 

 

  
  .koko_wrap {
  font-size: 8px !important;
  
}
.mob-bred{
    margin-top: -35px !important;
}
}
  .supermarket_product_item .item_image img {
        max-height: 100% !important;
        transition: 0.6s cubic-bezier(0.25, 1, 0.5, 1);
    }
  

       .supermarket_footer .form_item .submit_btn {
        top: 50%;
        right: 0px;
        height: 60px;
        color: #ffffff;
        line-height: 60px;
        padding: 0px 35px;
        text-align: center;
        position: absolute;
        margin-right: -1px;
        background-color: #090909;
        transform: translateY(-50%);
        border-top-right-radius: 45px;
        border-bottom-right-radius: 45px;
    }

    @media (max-width: 991px) {

        .mh_action_btns .cart_btn,
        .mh_action_btns .mobile_menu_btn {
            background: transparent !important;
            box-shadow: none !important;
            border: none !important;
            color: #fff !important;
        }

        .mh_action_btns .cart_btn i,
        .mh_action_btns .mobile_menu_btn i {
            color: #fff !important;
        }
    }

    .supermarket_header .main_menu>ul>li>a {
        color: #ffffff !important;
    }


   
    
    .supermarket_product_item .product_label li {
        height: 25px;
        font-size: 12px;
        padding: 0 10px;
        /* give some breathing space */
        line-height: 25px;
        text-align: center;
        border-radius: 3px;

        display: inline-block;
        /* important */
        width: auto;
        /* content-based width */
        min-width: unset;
        /* remove fixed constraint */
    }

    /* Mobile only breadcrumb spacing */
    @media (max-width: 991px) {
        .breadcrumb_mob {
            margin-top: 40px !important;
            /* adjust value as you like */
            margin-bottom: -50px !important;
        }
    }

    /* ==================================================
   MOBILE PAGE + SIDEBAR FILTER FIX
================================================== */

    /* =========================================
   Mobile filter toggle
========================================= */
    .mobile_filter_toggle_wrap {
        margin-bottom: 18px;
    }

    .mobile_filter_toggle_btn {
        width: 100%;
        border: none;
        background: #111;
        color: #fff;
        font-size: 14px;
        font-weight: 600;
        padding: 12px 16px;

        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .mobile_filter_toggle_btn:hover,
    .mobile_filter_toggle_btn:focus {
        outline: none;
        background: #000;
    }

    .mobile_filter_sidebar_wrap {
        transition: all 0.3s ease;
    }

    @media (max-width: 991px) {
        .mobile_filter_sidebar_wrap {
            display: none;
            margin-bottom: 20px;
        }

        .mobile_filter_sidebar_wrap.active {
            display: block;
        }

        .mobile_filter_sidebar {
            animation: fadeSlideDown 0.3s ease;
        }
    }

    @keyframes fadeSlideDown {
        from {
            opacity: 0;
            transform: translateY(-8px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Keep desktop always visible */
    @media (min-width: 992px) {
        .mobile_filter_toggle_wrap {
            display: none !important;
        }

        .mobile_filter_sidebar_wrap {
            display: block !important;
        }
    }

    /* General mobile spacing */
    @media (max-width: 991px) {
        .product_section {
            padding-top: 20px;
            padding-bottom: 30px;
        }

        .container.maxw_1600,
        .container.maxw_1460 {
            padding-left: 15px;
            padding-right: 15px;
        }

        .f2_breadcrumb_nav_wrap {
            margin-top: 0 !important;
            margin-bottom: 15px !important;
            padding: 6px 0 !important;
        }

        .ce_breadcrumb_nav {
            display: flex;
            flex-wrap: wrap;
            gap: 6px 10px;
            font-size: 12px;
            line-height: 1.5;
        }

        .ce_breadcrumb_nav li {
            margin-bottom: 0;
        }
    }

    /* Sidebar filter mobile fix */
    .mobile_filter_sidebar {
        width: 100%;
    }

    @media (max-width: 991px) {
        .mobile_filter_sidebar {
            margin-bottom: 20px;
        }


        .mobile_filter_sidebar .sb_widget_title {
            font-size: 15px;
            line-height: 1.4;
            margin-bottom: 12px;
        }

        .mobile_filter_sidebar .price-text {
            flex-wrap: wrap;
            gap: 8px;
            font-size: 13px;
        }

        .mobile_filter_sidebar #amount {
            width: 100%;
            min-width: 0;
            font-size: 13px;
        }

        .mobile_filter_sidebar .ul_li_block li {
            margin-bottom: 10px;
        }

        .mobile_filter_sidebar .checkbox_item {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .mobile_filter_sidebar .checkbox_item input[type="checkbox"] {
            margin: 0;
            flex: 0 0 auto;
        }

        .mobile_filter_sidebar .checkbox_item label {
            margin: 0;
            font-size: 14px;
            line-height: 1.4;
            word-break: break-word;
        }
    }

    /* Product grid fix */
    .electronic_product_columns {
        display: flex;
        flex-wrap: wrap;
        margin: 0 -8px;
        padding: 0;
    }

    .electronic_product_columns>li {
        list-style: none;
        padding: 8px;
    }

    @media (min-width: 1200px) {
        .electronic_product_columns>li {
            width: 25%;
        }
    }

    @media (min-width: 768px) and (max-width: 1199px) {
        .electronic_product_columns>li {
            width: 33.3333%;
        }
    }

    @media (min-width: 576px) and (max-width: 767px) {
        .electronic_product_columns>li {
            width: 50%;
        }
    }

    @media (max-width: 575px) {
        .electronic_product_columns>li {
            width: 100%;
        }

      
    }

    /* Product card mobile fix */
    .electronic_product_item {
        height: 100%;
        border-radius: 12px;
        overflow: hidden;
    }







/* Mobile: 2 columns */
@media (max-width: 767px) {
    ul.electronic_product_columns.has_4columns > li {
        width: 50% !important;
        padding: 4px !important;
        box-sizing: border-box;
    }

    
}

    .electronic_product_item .item_content {
        padding: 12px 14px 16px;
    }

    .electronic_product_item .item_title {
        font-size: 15px;
        line-height: 1.4;
        margin-bottom: 8px;
    }

    .electronic_product_item .item_price {
        font-size: 16px;
        display: block;
        margin-bottom: 8px;
    }

    .koko_wrap {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        gap: 6px;
        font-size: 12px;
        line-height: 1.5;
    }

    .koko_logo {
        height: 14px;
        width: auto;
    }

    @media (max-width: 575px) {
       

        

        .electronic_product_item .item_content {
            padding: 12px;
        }

        .electronic_product_item .item_title {
            font-size: 14px;
        }

        .electronic_product_item .item_price {
            font-size: 15px;
        }

        .koko_wrap {
            font-size: 11px;
        }
    }

    /* Header/mobile menu spacing fix */
    @media (max-width: 991px) {
        .sidebar_mobile_menu {
            margin-top: 0 !important;
            padding-top: 18px;
        }

        .header_middle {
            padding: 10px 0;
        }

        .brand_logo {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 10px;
        }

        .logo_img {
            height: 42px !important;
            margin-left: 0 !important;
            max-width: 140px;
        }

        .mh_action_btns {
            display: flex;
            align-items: center;
            margin: 0;
            gap: 8px;
        }

        .mh_action_btns li {
            margin: 0;
        }
    }

    /* Banner and load more button fix */
    @media (max-width: 991px) {
        .advertisement_image img {
            width: 100%;
            height: auto;

        }

        .abtn_wrap {
            margin-bottom: 25px !important;
        }
    }

    /* Extra small device polish */
    @media (max-width: 480px) {
        .mobile_filter_sidebar .sb_widget {
            padding: 14px;
            border-radius: 10px;
            margin-bottom: 0px !important;
        }

        .mobile_filter_sidebar .sb_widget_title {
            font-size: 14px;
        }

        .mobile_filter_sidebar .checkbox_item label {
            font-size: 13px;
        }

        .ce_breadcrumb_nav {
            font-size: 11px;
        }
    }
</style>
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


<style>
    .breadcrumb_section {
        padding-top: 5px !important;
        padding-bottom: 5px !important;
        margin: 0 !important;
    }

    .f2_breadcrumb_nav_wrap {
        padding: 8px 0 !important;
        margin-top: 5px !important;
        margin-bottom: 20px !important;
    }

    .ce_breadcrumb_nav {
        margin: 0 !important;
    }
</style>

<style>
    .supermarket_section_title .title_text {
        font-family: "Lexend Deca", Arial, Helvetica, sans-serif;
        font-size: 40px;
    }

    s .supermarket_deals_item .item_title a {
        font-size: 20px;
    }

    .home_supermarket h1,
    .home_supermarket h2,
    .home_supermarket h3,
    .home_supermarket h4,
    .home_supermarket h5,
    .home_supermarket h6 {
        font-family: "Lexend Deca", Arial, Helvetica, sans-serif;
    }

    .supermarket_tab_nav a:hover,
    .supermarket_tab_nav a.active {
        color: #333e48;
        background-color: #ffffff;
        border-color: #000000;
    }

    .koko_wrap {
        display: flex;
        align-items: center;
        gap: 6px;
        margin-top: 5px;
        font-size: 13px;
        color: #687188;
        ;
    }

    .koko_logo {
        height: 16px;
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
    <header class="header_section supermarket_header bg-white clearfix"
        style="background-color: rgba(0, 0, 0, 1) !important;">

        {{-- TOP BAR --}}
        {{-- <div class="header_top text-white clearfix">
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
        </div> --}}

        {{-- MIDDLE HEADER --}}
        <div class="header_middle clearfix">
            <div class="container">
                <div class="row align-items-center justify-content-lg-between">

                    {{-- LOGO --}}
                    <div class="col-lg-3">
                        <div class="brand_logo">

                            <a class="brand_link" href="{{ url('/') }}">
                                <img src="{{ asset('assets/images/logo/fonivow3.png') }}" class="logo_img"
                                    alt="logo" style="height: 70px;">
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
                        <nav class="main_menu d-flex justify-content-center" style=" color: #ffffff !important; ">
                            <ul class="ul_li d-flex justify-content-center align-items-center"
                                style=" color: #ffffff !important; ">

                                <li><a href="{{ url('/') }}">Home</a></li>

                                <li>
                                    <a href="{{ route('products.index') }}">Phones</a>
                                </li>

                                <li><a href="{{ route('accessories.grid') }}">Accessories</a></li>

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
                                        <span style="color: #373333;">Need</span>
                                        <strong style="color: #ffffff;">Help?</strong>
                                    </button>
                                </li>

                                <li>
                                    <button type="button" class="cart_btn"
                                        onclick="window.location.href='{{ url('/contact') }}'">
                                        <i class="fal fa-headset" style="color: #ffffff;"></i>
                                    </button>
                                </li>
                            </ul>



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
        <div class="sidebar_mobile_menu " style="background: #000;">

            {{-- CLOSE BUTTON --}}
            <button type="button" class="close_btn">
                <i class="fal fa-times" style="color: #fff"></i>
            </button>

            {{-- LOGO --}}
            <div class="msb_widget brand_logo text-center mb-3">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('assets/images/logo/fonivow3.png') }}" alt="Fonivo Logo"
                        style="max-height: 70px;">
                </a>
            </div>

            {{-- MENU --}}
            <div class=" mobile_menu_list clearfix">

                
                <ul class="ul_li_block clearfix fonivo_mobile_nav">

                    <li>
                        <a href="{{ url('/') }}" style="color: #fff;">
                           Home
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('products.index') }}" style="color: #fff; ">
                             Phones
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('accessories.grid') }}" style="color: #fff; ">
                            Accessories
                        </a>
                    </li>



                    <li>
                        <a href="{{ url('/contact') }}" style="color: #fff; ">
                           Contact Us
                        </a>
                    </li>

                </ul>
            </div>

          

        </div>
        <!-- sidebar mobile menu & sidebar cart - end
   ================================================== -->




        <!-- breadcrumb_section - start
   ================================================== -->
        <section class="mob-bred" >

            <div class="container maxw_1600 breadcrumb_mob" >
                <div class="f2_breadcrumb_nav_wrap">
                    <ul class="ce_breadcrumb_nav ul_li clearfix">
                        <li><a href="#!">Home</a></li>
                        <li>Shop</li>
                        <li>Furniture Store</li>
                        <li>Shop Page</li>
                    </ul>
                </div>
            </div>

        </section>
        <!-- breadcrumb_section - end
   ================================================== -->



        <!-- product_section - start
   ================================================== -->
        <section class="product_section clearfix">
            <div class="container maxw_1600">
                <div class="row justify-content-lg-between align-items-start">


                    <div class="col-12 col-lg-9 order-2 order-lg-2">

                        <div class="mobile_filter_toggle_wrap d-lg-none">
                            <button type="button" class="mobile_filter_toggle_btn" id="mobileFilterToggle">
                                <i class="far fa-sliders-h mr-2"></i>
                                Filters
                            </button>
                        </div>

                        <div class="tab-content mb_50">
                            <div id="grid_layout" class="tab-pane active">

                                <ul class="electronic_product_columns ul_li has_4columns clearfix">

                                    @forelse($products as $product)
                                        <li>
                                            <div class="electronic_product_item">

                                                {{-- STATUS --}}
                                                <ul class="product_label ul_li clearfix">
                                                    <li
                                                        data-bg-color="{{ $product->status == 1 ? '#28a745' : '#dc3545' }}">
                                                        {{ $product->status == 1 ? 'Available' : 'Sold Out' }}
                                                    </li>
                                                </ul>

                                                {{-- IMAGE --}}
                                            @php

    $backendUrl = config('app.backend_url');

    $image = $product->main_image;

    $webpImage = $image
        ? pathinfo($image, PATHINFO_FILENAME) . '.webp'
        : null;

@endphp

{{-- IMAGE --}}
<div class="item_image">

    <a href="{{ route('product.details', $product->slug ?? $product->id) }}">

        <img src="{{ $image
                ? $backendUrl . '/storage/products/' . $webpImage
                : asset('assets/images/no-image.png') }}"

             alt="{{ $product->name }}"
             loading="lazy"

             onerror="this.onerror=null;
                      this.src='{{ $image
                        ? $backendUrl . '/storage/products/' . $image
                        : asset('assets/images/no-image.png') }}';">

    </a>

</div>

                                                {{-- CONTENT --}}
                                                <div class="item_content">

                                                    <h3 class="item_title">
                                                        <a
                                                            href="{{ route('product.details', $product->slug ?? $product->id) }}">
                                                            {{ $product->name }}
                                                        </a>
                                                    </h3>

                                                    <span class="item_price">
                                                        Rs. {{ number_format($product->price) }}
                                                    </span>

                                                    @if ($product->koko_installment_price && $product->koko_installment_part)
                                                        <div class="koko_wrap">
                                                            <span>
                                                                Or Rs.
                                                                {{ number_format($product->koko_installment_price) }}
                                                                x {{ $product->koko_installment_part }} with
                                                            </span>
                                                            <img src="{{ asset('assets/images/payment/koko.png') }}"
                                                                class="koko_logo">
                                                        </div>
                                                    @endif

                                                </div>

                                            </div>
                                        </li>
                                    @empty
                                        <li>
                                            <p>No products found</p>
                                        </li>
                                    @endforelse

                                </ul>
                            </div>
                        </div>

                        <div class="abtn_wrap text-center mb_50">
                            <a href="#!" class="custom_btn btn_border border_electronic">Load more</a>
                        </div>

                    </div>
                    <div class="col-12 col-lg-3 order-1 order-lg-1 mb-4 ">
                        <div class="mobile_filter_sidebar_wrap" id="mobileFilterWrapper">
                            <aside class="electronic_sidebar sidebar_section mobile_filter_sidebar">
                                {{-- <div class="sb_widget sb_collapse_category">
									<h3 class="sb_widget_title">All Categories</h3>
									<div id="sb_category_accordion" class="sb_category_accordion">
										<div class="card">
											<div class="card-header">
												<a data-toggle="collapse" href="#collapse_one">
													Wearable Technology (84)
												</a>
											</div>
											<div id="collapse_one" class="collapse show" data-parent="#sb_category_accordion">
												<div class="card-body p-0">
													<ul class="ul_li_block clearfix">
														<li><a href="#!">Lights</a></li>
														<li><a href="#!">Raincoats</a></li>
														<li><a href="#!">Shorts</a></li>
														<li><a href="#!">Pants</a></li>
														<li><a href="#!">Shirts</a></li>
														<li><a href="#!">Tires</a></li>
													</ul>
												</div>
											</div>
										</div>

										<div class="card">
											<div class="card-header">
												<a class="collapsed" data-toggle="collapse" href="#collapse_two">
													Android VR  (36)
												</a>
											</div>
											<div id="collapse_two" class="collapse" data-parent="#sb_category_accordion">
												<div class="card-body p-0">
													<ul class="ul_li_block clearfix">
														<li><a href="#!">Lights</a></li>
														<li><a href="#!">Raincoats</a></li>
														<li><a href="#!">Shorts</a></li>
														<li><a href="#!">Pants</a></li>
														<li><a href="#!">Shirts</a></li>
														<li><a href="#!">Tires</a></li>
													</ul>
												</div>
											</div>
										</div>

										<div class="card">
											<div class="card-header">
												<a class="collapsed" data-toggle="collapse" href="#collapse_three">
													iOS VR (8)
												</a>
											</div>
											<div id="collapse_three" class="collapse" data-parent="#sb_category_accordion">
												<div class="card-body p-0">
													<ul class="ul_li_block clearfix">
														<li><a href="#!">Lights</a></li>
														<li><a href="#!">Raincoats</a></li>
														<li><a href="#!">Shorts</a></li>
														<li><a href="#!">Pants</a></li>
														<li><a href="#!">Shirts</a></li>
														<li><a href="#!">Tires</a></li>
													</ul>
												</div>
											</div>
										</div>
										
										<div class="card">
											<div class="card-header">
												<a class="collapsed" data-toggle="collapse" href="#collapse_four">
													Video Consoles (18)
												</a>
											</div>
											<div id="collapse_four" class="collapse" data-parent="#sb_category_accordion">
												<div class="card-body p-0">
													<ul class="ul_li_block clearfix">
														<li><a href="#!">Lights</a></li>
														<li><a href="#!">Raincoats</a></li>
														<li><a href="#!">Shorts</a></li>
														<li><a href="#!">Pants</a></li>
														<li><a href="#!">Shirts</a></li>
														<li><a href="#!">Tires</a></li>
													</ul>
												</div>
											</div>
										</div>
										
										<div class="card">
											<div class="card-header">
												<a class="collapsed" data-toggle="collapse" href="#collapse_five">
													Accesories (31)
												</a>
											</div>
											<div id="collapse_five" class="collapse" data-parent="#sb_category_accordion">
												<div class="card-body p-0">
													<ul class="ul_li_block clearfix">
														<li><a href="#!">Lights</a></li>
														<li><a href="#!">Raincoats</a></li>
														<li><a href="#!">Shorts</a></li>
														<li><a href="#!">Pants</a></li>
														<li><a href="#!">Shirts</a></li>
														<li><a href="#!">Tires</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div> --}}


                                <form method="GET" action="{{ route('products.index') }}">

                                    {{-- PRICE SLIDER (EXACT YOUR DESIGN) --}}
                                    <div class="sb_widget sb_pricing_range filter_card">
                                        <h3 class="sb_widget_title text-uppercase">Price Range</h3>

                                        <div class="price-range-area clearfix">

                                            {{-- Slider --}}
                                            <div id="slider-range" class="slider-range"></div>

                                            <div class="price-text d-flex align-items-center">
                                                <span>Price:</span>

                                                <input type="text" id="amount" readonly>
                                            </div>

                                            {{-- Hidden inputs (IMPORTANT for backend) --}}
                                            <input type="hidden" name="min_price" id="min_price">
                                            <input type="hidden" name="max_price" id="max_price">

                                        </div>
                                    </div>

                                    {{-- SERIES (DB) --}}
                                    <div class="sb_widget sb_color_checkbox">
                                        <h3 class="sb_widget_title text-uppercase">iPhone Series</h3>

                                        <ul class="ul_li_block clearfix">
                                            @foreach ($seriesList as $series)
                                                <li>
                                                    <div class="checkbox_item">
                                                        <input type="checkbox" name="series[]"
                                                            value="{{ $series }}"
                                                            id="series_{{ $loop->index }}"
                                                            {{ request()->has('series') && in_array($series, request()->series ?? []) ? 'checked' : '' }}>
                                                        <label
                                                            for="series_{{ $loop->index }}">{{ $series }}</label>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>

                                    {{-- COLOR (DB) --}}
                                    <div class="sb_widget sb_color_checkbox">
                                        <h3 class="sb_widget_title text-uppercase">Color</h3>

                                        <ul class="ul_li_block clearfix">
                                            @foreach ($colorList as $color)
                                                <li>
                                                    <div class="checkbox_item">
                                                        <input type="checkbox" name="color[]"
                                                            value="{{ $color }}"
                                                            id="color_{{ $loop->index }}"
                                                            {{ request()->has('color') && in_array($color, request()->color ?? []) ? 'checked' : '' }}>
                                                        <label
                                                            for="color_{{ $loop->index }}">{{ $color }}</label>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>

                                    {{-- APPLY --}}
                                    <div class="mt-3">
                                        <button type="submit" class="btn btn-dark w-100">
                                            Apply Filters
                                        </button>
                                    </div>

                                    {{-- RESET --}}
                                    <div class="mt-2">
                                        <a href="{{ route('products.index') }}" class="btn btn-light w-100">
                                            Clear Filters
                                        </a>
                                    </div>

                                </form>

                            </aside>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- product_section - end
   ================================================== -->


    </main>
    <!-- main body - end
  ================================================== -->


    <!-- footer_section - start
  ================================================== -->
    <footer class="footer_section supermarket_footer clearfix">


        <div class="footer_middle sec_ptb_50 text-white clearfix" data-bg-color="#000" style="border-bottom: 1px solid #333;">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-4 col-md-7 col-sm-9 col-xs-12">
                        <div class="form_item mb-0">
                            <form action="#">
                                <input type="email" name="email" placeholder="Enter Your Email Address">
                                <button type="submit" class="submit_btn">Enquire</button>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-7 col-sm-9 col-xs-12">
                        <div class="footer_electronic_hotline mb_30">
                            <i class="fal fa-headset"></i>
                            <h4 class="text-white">GOT QUESTION? CALL US 24/7!</h4>
                            <strong>077 400 6216 / 077 075 6216</strong>

                        </div>
                    </div>

                         <div class="col-lg-4 col-md-7 col-sm-9 col-xs-12">
                        <ul class="circle_social_links ul_li_right clearfix">

                            <!-- WhatsApp Channel -->
                            <li>
                                <a href="https://whatsapp.com/channel/0029VbC0B2J0VycJlGijoZ3E" target="_blank">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                            </li>

                            <!-- YouTube -->
                            <li>
                                <a href="https://youtube.com/@fonivomobile?si=pWYeHuQIrie8qKK1" target="_blank">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>

                            <!-- TikTok -->
                            <li>
                                <a href="https://www.tiktok.com/@fonivoo?_r=1&_t=ZS-96N8Mh2d5fA" target="_blank">
                                    <i class="fab fa-tiktok"></i>
                                </a>
                            </li>

                            <!-- Facebook -->
                            <li>
                                <a href="https://www.facebook.com/share/1EQieD35Kq/?mibextid=wwXIfr" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>

                            <!-- Instagram -->
                            <li>
                                <a href="https://www.instagram.com/fonivo.lk?igsh=MXV5bWpnb3I3aWxrYw%3D%3D&utm_source=qr"
                                    target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer_bottom text-white clearfix" data-bg-color="#000">
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


    <script>
        $(document).ready(function() {
            $('#mobileFilterToggle').on('click', function() {
                $('#mobileFilterWrapper').toggleClass('active');

                if ($('#mobileFilterWrapper').hasClass('active')) {
                    $(this).html('<i class="far fa-times mr-2"></i> Close Filters');
                } else {
                    $(this).html('<i class="far fa-sliders-h mr-2"></i> Filter Products');
                }
            });
        });
    </script>

    <script>
        $(function() {

            let min = {{ $minPrice ?? 0 }};
            let max = {{ $maxPrice ?? 500000 }};

            $("#slider-range").slider({
                range: true,
                min: min,
                max: max,
                values: [
                    {{ request('min_price') ?? ($minPrice ?? 0) }},
                    {{ request('max_price') ?? ($maxPrice ?? 500000) }}
                ],
                slide: function(event, ui) {
                    $("#amount").val("Rs. " + ui.values[0] + " - Rs. " + ui.values[1]);

                    $("#min_price").val(ui.values[0]);
                    $("#max_price").val(ui.values[1]);
                }
            });

            // initial display
            $("#amount").val(
                "Rs. " + $("#slider-range").slider("values", 0) +
                " - Rs. " + $("#slider-range").slider("values", 1)
            );

            $("#min_price").val($("#slider-range").slider("values", 0));
            $("#max_price").val($("#slider-range").slider("values", 1));

        });
    </script>
    <div class="filter_overlay" id="filterOverlay"></div>
</body>

</html>
