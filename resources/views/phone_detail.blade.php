<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    {{-- SEO DYNAMIC TITLE --}}
    <title>@yield('title', config('app.name', 'Fonivo.lk'))</title>

    {{-- META DESCRIPTION --}}
    <meta name="description" content="@yield('meta_description', 'Fonivo.lk - Best mobile phones and accessories in Sri Lanka')">

    {{-- FAVICON --}}
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/fav.jpg') }}">

    {{-- CSRF (IMPORTANT FOR LARAVEL FORMS + AJAX) --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- ================= CSS ================= --}}

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    {{-- CDN (Swiper) --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    {{-- PAGE SPECIFIC STYLES --}}
    @stack('styles')

</head>
<style>
    .koko_wrap {
        display: flex;
        align-items: center;
        gap: 6px;
        font-weight: 600 !important;
        margin-top: 5px;
        font-size: 18px;
        color: #687188;
        ;
    }


    .koko_inline {
        display: inline-flex;
        align-items: center;
        gap: 5px;
        font-size: 13px;
        color: #687188;
    }

    .koko_inline img {
        height: 14px;
    }

    .koko_logo {
        height: 25px;
        width: auto;
    }

    .fonivo_price_box {
        margin-bottom: 15px;
    }

    /* Main Price */
    .fonivo_price {
        font-size: 28px;
        font-weight: 700;
        color: #e60023;
        margin-bottom: 8px;
    }


    .fonivo_meta_grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 15px;
        margin-top: 21px;
        margin-bottom: 20px;
    }

    .fonivo_meta_card {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 15px;
        border-radius: 12px;
        color: #333e48;
        border: 1px solid #eee;
        transition: 0.3s;
    }

    .fonivo_meta_card:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.05);
    }

    .fonivo_meta_card .icon {
        font-size: 22px;
        color: #e60023;
        min-width: 35px;
    }

    .fonivo_meta_card .content span {
        font-size: 16px;
        font-weight: 600;
        display: block;
        margin-bottom: 3px;
    }

    .fonivo_meta_card .content p {
        font-size: 14px;
        color: #6b6b6b;
        margin: 0;
        line-height: 1.4;
    }

    /* CTA Box */
    .fonivo_cta_box {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        background: linear-gradient(135deg, #e60023, #ff4d6d);
        color: #fff;
        padding: 14px 18px;
        border-radius: 10px;
        font-weight: 600;
        font-size: 14px;
        box-shadow: 0 5px 15px rgba(230, 0, 35, 0.2);
    }

    .fonivo_cta_box i {
        font-size: 18px;
    }

    /* Mobile */
    @media (max-width: 768px) {
        .fonivo_meta_grid {
            grid-template-columns: 1fr;
        }
    }

    .fonivo_brand {
        display: inline-flex;
        align-items: center;
        gap: 8px;
    }

    .fonivo_brand img {
        height: 24px;
    }

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
        .inq-mob {
            margin-top: -20px !important;
        }

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
    /* .supermarket_section_title .title_text {
        font-family: "Lexend Deca", Arial, Helvetica, sans-serif;
        font-size: 40px;
    } */

    s .supermarket_deals_item .item_title a {
        font-size: 20px;
    }

    /* .home_supermarket h1,
    .home_supermarket h2,
    .home_supermarket h3,
    .home_supermarket h4,
    .home_supermarket h5,
    .home_supermarket h6 {
        font-family: "Lexend Deca", Arial, Helvetica, sans-serif;
    } */

    .supermarket_tab_nav a:hover,
    .supermarket_tab_nav a.active {
        color: #333e48;
        background-color: #ffffff;
        border-color: #000000;
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
                                <img src="{{ asset('assets/images/logo/fonivo2.png') }}" class="logo_img"
                                    alt="logo" style="height: 60px;">
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
        <section class="">

            <div class="container maxw_1600">
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



        <!-- electronic_details - start
   ================================================== -->
        <section class="electronic_details clearfix">
            <div class="container maxw_1600">
                <div class="row mb_50 justify-content-lg-between">

                    {{-- LEFT: IMAGES --}}
                    <div class="col-lg-5">
                        <div class="details_image mb_30 position-relative">

                            {{-- MAIN IMAGE --}}
                            <div class="tab-content">

                                <div class="tab-pane active">
                                    <div class="image_wrap">
                                        <img src="{{ $product->main_image
                                            ? asset('storage/products/' . $product->main_image)
                                            : asset('assets/images/no-image.png') }}"
                                            alt="{{ $product->name }}">
                                    </div>
                                </div>

                                {{-- ADDITIONAL IMAGES --}}
                                {{-- @if (!empty($product->images))
                            @foreach ($product->images as $key => $img)
                                <div class="tab-pane fade" id="di_tab_{{ $key }}">
                                    <div class="image_wrap">
                                        <img src="{{ asset('storage/products/' . $img) }}"
                                             alt="{{ $product->name }}">
                                    </div>
                                </div>
                            @endforeach
                        @endif --}}

                            </div>

                            {{-- THUMBNAILS --}}
                            <ul class="nav ul_li clearfix" role="tablist">

                                @if (!empty($product->images))
                                    @foreach ($product->images as $key => $img)
                                        <li>
                                            <a data-toggle="tab" href="#di_tab_{{ $key }}"
                                                class="{{ $key == 0 ? 'active' : '' }}">
                                                <img src="{{ asset('storage/products/' . $img) }}"
                                                    alt="{{ $product->name }}">
                                            </a>
                                        </li>
                                    @endforeach
                                @endif

                            </ul>

                        </div>
                    </div>

                    {{-- RIGHT: CONTENT --}}
                    <div class="col-lg-7">
                        <div class="details_content fonivo_details_content">

                            {{-- BRAND + STOCK --}}
                            <div class="fonivo_top_row d-flex align-items-center justify-content-between mb_20">

                                <span class="item_brand text-uppercase fonivo_brand"> <img
                                        src="assets/images/add/apple3.png" alt="Apple"> Apple </span>

                                <span class="instock_text fonivo_availability">
                                    Availability:
                                    <strong class="fonivo_stock_badge {{ $product->status == 1 ? '' : 'sold_out' }}">
                                        {{ $product->status == 1 ? 'In Stock' : 'Sold Out' }}
                                    </strong>
                                </span>

                            </div>

                            {{-- TITLE --}}
                            <h2 class="item_title fonivo_title mb_20">
                                {{ $product->name }}
                            </h2>

                            <hr>

                            {{-- PRODUCT INFO --}}
                            <ul class="product_info_list ul_li_block mb_15 clearfix">

                                @if ($product->storage)
                                    <li>
                                        <span class="label">Storage</span>
                                        <strong>{{ $product->storage }}</strong>
                                    </li>
                                @endif

                                @if ($product->condition)
                                    <li>
                                        <span class="label">Condition</span>
                                        <strong>{{ $product->condition }}</strong>
                                    </li>
                                @endif

                                @if ($product->colour)
                                    <li>
                                        <span class="label">Colour</span>
                                        <strong>{{ $product->colour }}</strong>
                                    </li>
                                @endif

                                @if ($product->battery)
                                    <li>
                                        <span class="label">Battery</span>
                                        <strong>{{ $product->battery }}%</strong>
                                    </li>
                                @endif

                                @if ($product->region)
                                    <li>
                                        <span class="label">Region</span>
                                        <strong>{{ $product->region }}</strong>
                                    </li>
                                @endif

                            </ul>

                            {{-- DESCRIPTION --}}
                            <p class="mb-2 mt-2">
                                {!! $product->description !!}
                            </p>

                            {{-- PRICE --}}
                            <span class="item_price mb_10">
                                <strong>Rs. {{ number_format($product->price) }}</strong>
                            </span>

                            {{-- INSTALLMENT --}}
                            @if ($product->koko_installment_price && $product->koko_installment_part)
                                <div class="koko_wrap">
                                    <span>
                                        Or Rs. {{ number_format($product->koko_installment_price) }}
                                        x {{ $product->koko_installment_part }} with
                                    </span>
                                    <img src="{{ asset('assets/images/payment/koko.png') }}" class="koko_logo">
                                </div>
                            @endif


                            {{-- META BOXES --}}
                            <div class="fonivo_meta_grid mb_25">

                                <div class="fonivo_meta_card">
                                    <div class="icon"><i class="fal fa-shield-check"></i></div>
                                    <div class="content">
                                        <span>Warranty</span>
                                        <p>{{ $product->warranty ?? 'N/A' }}</p>
                                    </div>
                                </div>

                                <div class="fonivo_meta_card">
                                    <div class="icon"><i class="fal fa-credit-card"></i></div>
                                    <div class="content">
                                        <span>Payments</span>
                                        <p>KOKO Installments<br>Credit & Debit Cards</p>
                                    </div>
                                </div>

                                <div class="fonivo_meta_card">
                                    <div class="icon"><i class="fal fa-truck"></i></div>
                                    <div class="content">
                                        <span>Delivery</span>
                                        <p>{{ $product->delivery_note ?? 'Islandwide Delivery' }}</p>
                                    </div>
                                </div>

                            </div>

                            {{-- CTA --}}
                            <div class="row align-items-center">
                                <div class="col-lg-10">
                                    <div class="product_tag_list d-flex align-items-center clearfix">
                                        <h4 class="list_title">
                                            Order Now – Limited Stock Available!
                                        </h4>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <hr>

            </div>
        </section>
        <!-- electronic_details - end
   ================================================== -->

        <section class="main_contact_section sec_ptb_50 clearfix">
            <div class="container">
                <div class="row justify-content-lg-between">

                    <!-- LEFT SIDE -->
                    <div class="col-lg-5 inq-mob">
                        <div class="main_contact_content fonivo_inquiry_content">
                            <h3 class="title_text mb_15">Product Inquiry</h3>
                            <p class="mb_30">
                                Interested in this product? Contact us for availability, best price, or more details.
                            </p>

                            <ul class="main_contact_info ul_li_block clearfix">
                                <li>
                                    <span class="icon">
                                        <i class="fal fa-phone-volume"></i>
                                    </span>
                                    <p class="mb-0">Call / WhatsApp<br><strong>077 400 6216</strong></p>
                                </li>

                                <li>
                                    <span class="icon">
                                        <i class="fab fa-whatsapp"></i>
                                    </span>
                                    <p class="mb-0">
                                        Quick WhatsApp Support<br>
                                        <a href="https://wa.me/94774006216" target="_blank">Chat Now</a>
                                    </p>
                                </li>

                                <li>
                                    <span class="icon">
                                        <i class="fal fa-truck"></i>
                                    </span>
                                    <p class="mb-0">Islandwide Delivery Available</p>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- RIGHT SIDE -->
                    <div class="col-lg-7 inq-mob">
                        <div class="main_contact_form fonivo_inquiry_form">
                            <h3 class="title_text mb_30">Send Inquiry</h3>

                            <form action="#">
                                <div class="row">

                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form_item">
                                            <input type="text" name="name" placeholder="Your Name">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form_item">
                                            <input type="text" name="phone" placeholder="Phone Number">
                                        </div>
                                    </div>

                                </div>

                                <div class="form_item">
                                    <textarea name="message">Hi, I'm interested in iPhone 14 Pro Max. Please share more details.</textarea>
                                </div>

                                <button type="submit" class="custom_btn bg_default_red text-uppercase">
                                    Send Inquiry
                                </button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </section>


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


    {{-- ================= CORE JS ================= --}}
    <script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    {{-- ================= PLUGINS ================= --}}
    <script src="{{ asset('assets/js/mCustomScrollbar.js') }}"></script>
    <script src="{{ asset('assets/js/parallaxie.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/countdown.js') }}"></script>
    <script src="{{ asset('assets/js/magnific-popup.min.js') }}"></script>

    {{-- ================= LAYOUT / UI ================= --}}
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui.js') }}"></script>

    {{-- ================= CUSTOM ================= --}}
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    {{-- ================= CDN (Swiper if needed) ================= --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    {{-- PAGE SPECIFIC SCRIPTS --}}
    @stack('scripts')

</body>

</html>
