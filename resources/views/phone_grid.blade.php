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
}s

.supermarket_deals_item .item_title a{
  font-size: 20px;
}
.home_supermarket h1, .home_supermarket h2, .home_supermarket h3, .home_supermarket h4, .home_supermarket h5, .home_supermarket h6 {
font-family: "Lexend Deca", Arial, Helvetica, sans-serif;
}
  .supermarket_tab_nav a:hover, .supermarket_tab_nav a.active {
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
    <header class="header_section supermarket_header bg-white clearfix">
        <div class="header_top text-white clearfix">
            <div class="container maxw_1460">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-5">
                        <p class="welcome_text mb-0">Luxury In Every Touch</p>
                    </div>

                    <div class="col-lg-7">
                        <ul class="info_list ul_li_right clearfix">
                            <li><a href="#!"><i class="fal fa-map-marker-alt"></i> Store Locator</a></li>
                            <li><a href="#!"><i class="fal fa-truck"></i> Track Your Order</a></li>
                            <li>
                                <form action="#">
                                    <div class="currency_select option_select mb-0">
                                        <select>
                                            <option value="USD" selected>LKR</option>

                                        </select>
                                    </div>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="header_middle clearfix">
            <div class="container maxw_1460">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-3">
                        <div class="brand_logo">
                            <a class="brand_link" href="/">
                                <img src="assets/images/logo/fonivo2.png" srcset="assets/images/logo/fonivo2.png"
                                    class="logo_img" alt="logo_not_found" style="height: 60px;">
                            </a>

                            <ul class="mh_action_btns ul_li clearfix">
                                {{-- <li>
                                    <button type="button" class="search_btn" data-toggle="collapse"
                                        data-target="#search_body_collapse" aria-expanded="false"
                                        aria-controls="search_body_collapse">
                                        <i class="fal fa-search"></i>
                                    </button>
                                </li> --}}
                                <li>
                                    <button type="button" class="cart_btn" onclick="window.location.href='/contact'"
                                        title="Contact Support">
                                        <i class="fal fa-headset" style="font-size: 25px; font-wight: 400;"></i>
                                    </button>
                                </li>
                                <li><button type="button" class="mobile_menu_btn"><i class="far fa-bars"
                                            style="font-size: 25px; font-wight: 400;"></i></button>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="container maxw_1460">
                            <nav class="main_menu d-flex justify-content-center">
                                <ul class="ul_li d-flex justify-content-center align-items-center">

                                    <li>
                                        <a href="/">Home</a>

                                    </li>
                                    <li>
                                        <a href="#!">Phones</a>


                                    </li>
                                    <li>
                                        <a href="#!">Accessories</a>

                                    </li>
                                    <li><a href="#!">About us</a></li>
                                    <li><a href="contact.html">Contact us</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>


                    <div class="col-lg-3">
                        <div class="supermarket_header_btns clearfix">
                            <ul class="action_btns_group ul_li_right clearfix">
                                <li>
                                    <button type="button">
                                        <span>Need</span>
                                        <strong>Help?</strong>
                                    </button>
                                </li>
                                {{-- <li>
										<button type="button">
											<span>Shop</span>
									<strong>Smart Deals</strong>
										</button>
									</li> --}}
                                <li>
                                    <button type="button" class="cart_btn" onclick="window.location.href='/contact'">
                                        <i class="fal fa-headset"></i>
                                    </button>
                                </li>
                            </ul>
                            <span class="alart_text float-right  fonivo-note">
                                <small>✔</small>
                                Trusted service!
                            </span>
                        </div>
                    </div>

                </div>
            </div>
        </div>



        <div id="search_body_collapse" class="search_body_collapse collapse">
            <div class="search_body">
                <div class="container-fluid prl_90">
                    <form action="#">
                        <div class="form_item mb-0">
                            <input type="search" name="search" placeholder="Type here...">
                            <button type="submit"><i class="fal fa-search"></i></button>
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
            <button type="button" class="close_btn"><i class="fal fa-times"></i></button>

            <div class="msb_widget brand_logo text-center">
                <a href="index.html">
                    <img src="assets/images/logo/fonivo2.png" alt="Fonivo Logo" style="max-height: 70px;">
                </a>
            </div>

            <div class="msb_widget mobile_menu_list clearfix">
                <h3 class="title_text mb_15 text-uppercase">
                    {{-- <i class="far fa-bars mr-2"></i>  --}}
                    Menu List
                </h3>

                <ul class="ul_li_block clearfix fonivo_mobile_nav">
                    <li><a href="/"><i class="fal fa-home mr-2"></i> Home</a></li>
                    <li><a href="#!"><i class="fal fa-mobile-alt mr-2"></i> Phones</a></li>
                    <li><a href="#!"><i class="fal fa-headphones-alt mr-2"></i> Accessories</a></li>
                    <li><a href="#!"><i class="fal fa-info-circle mr-2"></i> About Us</a></li>
                    <li><a href="/contact"><i class="fal fa-envelope mr-2"></i> Contact Us</a></li>
                </ul>
            </div>

            {{-- <div class="msb_widget fonivo_mobile_actions">
        <h3 class="title_text mb_15 text-uppercase">
            <i class="fal fa-bolt mr-2"></i> Quick Access
        </h3>

        <ul class="ul_li_block clearfix">
            <li>
                <a href="/contact">
                    <i class="fal fa-headset mr-2"></i> Need Help?
                </a>
            </li>
            <li>
                <a href="/shop">
                    <i class="fal fa-tags mr-2"></i> Smart Deals
                </a>
            </li>
            <li>
                <a href="/contact">
                    <i class="fal fa-tools mr-2"></i> Support Service
                </a>
            </li>
        </ul>
    </div> --}}

            <div class="msb_widget fonivo_mobile_note">
                <span><i class="fas fa-check-circle mr-1"></i> Genuine trusted service!</span>
            </div>
        </div>
        <!-- sidebar mobile menu & sidebar cart - end
   ================================================== -->




        <!-- breadcrumb_section - start
   ================================================== -->
        <section
            class="">

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



			<!-- product_section - start
			================================================== -->
			<section class="product_section clearfix">
				<div class="container maxw_1600">
					<div class="row justify-content-lg-between">

						<div class="col-lg-9 order-last">
				
							<div class="tab-content mb_50">
    <div id="grid_layout" class="tab-pane active">

        <ul class="electronic_product_columns ul_li has_4columns clearfix">

            <!-- 1 -->
            <li>
                <div class="electronic_product_item">
                    <ul class="product_label ul_li clearfix">
                        <li>NEW</li>
                    </ul>
                    <div class="item_image">
                        <img src="assets/images/mobiles/16series.png" alt="iPhone 16 Pro">
                    </div>
                    <div class="item_content">
                        
                        <h3 class="item_title">
                            <a href="#!">iPhone 16 Pro</a>
                        </h3>
                        <span class="item_price">Rs. 245,000</span>

                        <div class="koko_wrap">
                            <span>Or Rs. 61,250 x 4 with</span>
                            <img src="assets/images/payment/koko.png" class="koko_logo">
                        </div>
                    </div>
                </div>
            </li>

            <!-- 2 -->
            <li>
                <div class="electronic_product_item">
                    <ul class="product_label ul_li clearfix">
                        <li>NEW</li>
                    </ul>
                    <div class="item_image">
                        <img src="assets/images/mobiles/11series.png" alt="iPhone 11">
                    </div>
                    <div class="item_content">
                        
                        <h3 class="item_title">
                            <a href="#!">iPhone 11</a>
                        </h3>
                        <span class="item_price">Rs. 245,000</span>

                        <div class="koko_wrap">
                            <span>Or Rs. 61,250 x 4 with</span>
                            <img src="assets/images/payment/koko.png" class="koko_logo">
                        </div>
                    </div>
                </div>
            </li>

            <!-- 3 -->
            <li>
                <div class="electronic_product_item">
                    <ul class="product_label ul_li clearfix">
                        <li>NEW</li>
                    </ul>
                    <div class="item_image">
                        <img src="assets/images/mobiles/14series.png" alt="iPhone 14 Pro">
                    </div>
                    <div class="item_content">
                        
                        <h3 class="item_title">
                            <a href="#!">iPhone 14 Pro</a>
                        </h3>
                        <span class="item_price">Rs. 245,000</span>

                        <div class="koko_wrap">
                            <span>Or Rs. 61,250 x 4 with</span>
                            <img src="assets/images/payment/koko.png" class="koko_logo">
                        </div>
                    </div>
                </div>
            </li>

            <!-- 4 -->
            <li>
                <div class="electronic_product_item">
                    <ul class="product_label ul_li clearfix">
                        <li>NEW</li>
                    </ul>
                    <div class="item_image">
                        <img src="assets/images/mobiles/15series.png" alt="iPhone 15">
                    </div>
                    <div class="item_content">
                        
                        <h3 class="item_title">
                            <a href="#!">iPhone 15</a>
                        </h3>
                        <span class="item_price">Rs. 245,000</span>

                        <div class="koko_wrap">
                            <span>Or Rs. 61,250 x 4 with</span>
                            <img src="assets/images/payment/koko.png" class="koko_logo">
                        </div>
                    </div>
                </div>
            </li>

            <!-- 5 -->
            <li>
                <div class="electronic_product_item">
                    <ul class="product_label ul_li clearfix">
                        <li>NEW</li>
                    </ul>
                    <div class="item_image">
                        <img src="assets/images/mobiles/xsseries.png" alt="iPhone X">
                    </div>
                    <div class="item_content">
                        
                        <h3 class="item_title">
                            <a href="#!">iPhone X</a>
                        </h3>
                        <span class="item_price">Rs. 245,000</span>

                        <div class="koko_wrap">
                            <span>Or Rs. 61,250 x 4 with</span>
                            <img src="assets/images/payment/koko.png" class="koko_logo">
                        </div>
                    </div>
                </div>
            </li>

            <!-- 6 -->
            <li>
                <div class="electronic_product_item">
                    <ul class="product_label ul_li clearfix">
                        <li>NEW</li>
                    </ul>
                    <div class="item_image">
                        <img src="assets/images/mobiles/13series.png" alt="iPhone 13">
                    </div>
                    <div class="item_content">
                        
                        <h3 class="item_title">
                            <a href="#!">iPhone 13</a>
                        </h3>
                        <span class="item_price">Rs. 245,000</span>

                        <div class="koko_wrap">
                            <span>Or Rs. 61,250 x 4 with</span>
                            <img src="assets/images/payment/koko.png" class="koko_logo">
                        </div>
                    </div>
                </div>
            </li>

            <!-- 7 -->
            <li>
                <div class="electronic_product_item">
                    <ul class="product_label ul_li clearfix">
                        <li>NEW</li>
                    </ul>
                    <div class="item_image">
                        <img src="assets/images/mobiles/seseries.png" alt="iPhone SE">
                    </div>
                    <div class="item_content">
                        
                        <h3 class="item_title">
                            <a href="#!">iPhone SE</a>
                        </h3>
                        <span class="item_price">Rs. 245,000</span>

                        <div class="koko_wrap">
                            <span>Or Rs. 61,250 x 4 with</span>
                            <img src="assets/images/payment/koko.png" class="koko_logo">
                        </div>
                    </div>
                </div>
            </li>

            <!-- 8 -->
            <li>
                <div class="electronic_product_item">
                    <ul class="product_label ul_li clearfix">
                        <li>NEW</li>
                    </ul>
                    <div class="item_image">
                        <img src="assets/images/mobiles/12series.png" alt="iPhone 12">
                    </div>
                    <div class="item_content">
                        
                        <h3 class="item_title">
                            <a href="#!">iPhone 12</a>
                        </h3>
                        <span class="item_price">Rs. 245,000</span>

                        <div class="koko_wrap">
                            <span>Or Rs. 61,250 x 4 with</span>
                            <img src="assets/images/payment/koko.png" class="koko_logo">
                        </div>
                    </div>
                </div>
            </li>

        </ul>
    </div>
</div>

							<div class="abtn_wrap text-center mb_50">
								<a href="#!" class="custom_btn btn_border border_electronic">Load more</a>
							</div>

							<div class="advertisement_image">
								<a href="#!">
									<img src="assets/images/offer/electronic/img_04.jpg" alt="image_not_found">
								</a>
							</div>
						</div>

						<div class="col-lg-3">
							<aside class="electronic_sidebar sidebar_section">
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

								<div class="sb_widget sb_pricing_range">
									<h3 class="sb_widget_title text-uppercase">Filters</h3>
									<form action="#">
										<div class="price-range-area clearfix">
											<div id="slider-range" class="slider-range"></div>
											<div class="price-text d-flex align-items-center">
												<span>Price:</span>
												<input type="text" id="amount" readonly>
											</div>
										</div>
									</form>
								</div>

								<div class="sb_widget sb_color_checkbox">
									<h3 class="sb_widget_title text-uppercase">Series</h3>
									<form action="#">
										<ul class="ul_li_block clearfix">
											<li>
												<div class="checkbox_item">
													<input id="oculus_rift_checkbox" type="checkbox" checked>
													<label for="oculus_rift_checkbox">iPhone X</label>
												</div>
											</li>
											<li>
												<div class="checkbox_item">
													<input id="huawei_checkbox" type="checkbox">
													<label for="huawei_checkbox">iPhone 11</label>
												</div>
											</li>
											<li>
												<div class="checkbox_item">
													<input id="htc_checkbox" type="checkbox">
													<label for="htc_checkbox">iPhone 12</label>
												</div>
											</li>
											<li>
												<div class="checkbox_item">
													<input id="samsung_checkbox" type="checkbox">
													<label for="samsung_checkbox">iPhone 13</label>
												</div>
											</li>
											<li>
												<div class="checkbox_item">
													<input id="envato_checkbox" type="checkbox">
													<label for="envato_checkbox">iPhone SE</label>
												</div>
											</li>
										</ul>
									</form>
								</div>

								<div class="sb_widget sb_color_checkbox">
									<h3 class="sb_widget_title text-uppercase">Color</h3>
									<form action="#">
										<ul class="ul_li_block clearfix">
											<li>
												<div class="checkbox_item">
													<input id="black_color_checkbox" type="checkbox" checked>
													<label for="black_color_checkbox">Black</label>
												</div>
											</li>
											<li>
												<div class="checkbox_item">
													<input id="white_color_checkbox" type="checkbox">
													<label for="white_color_checkbox">White</label>
												</div>
											</li>
											<li>
												<div class="checkbox_item">
													<input id="blue_color_checkbox" type="checkbox">
													<label for="blue_color_checkbox">Blue</label>
												</div>
											</li>
											<li>
												<div class="checkbox_item">
													<input id="green_color_checkbox" type="checkbox">
													<label for="green_color_checkbox">Green</label>
												</div>
											</li>
											<li>
												<div class="checkbox_item">
													<input id="yellow_color_checkbox" type="checkbox">
													<label for="yellow_color_checkbox">Yellow</label>
												</div>
											</li>
										</ul>
									</form>
								</div>
							</aside>
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