<!doctype html>
<html class="no-js" lang="en">
<wb-var base="/tpl" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{header}}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{_var.base}}/assets/img/favicon.ico">
    <link rel="stylesheet" href="{{_var.base}}/assets/css/loader.css">

    <!-- CSS
    ========================= -->
    <!--bootstrap min css-->

    <wb-snippet name="wbapp" />
    <wb-snippet name="bootstrap" />
</head>

<body class="loader">
    <div id="loader"></div>
    <!--header area start-->
    <!--offcanvas menu area start-->
    <div class="off_canvars_overlay">

    </div>
    <div class="offcanvas_menu">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="canvas_open">
                        <a href="javascript:void(0)"><i class="icon-menu"></i></a>
                    </div>
                    <div class="offcanvas_menu_wrapper">
                        <div class="canvas_close">
                            <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                        </div>
                        <div class="language_currency top">
                            <ul>
                                <li><a href="#">ru</a></li>
                                <li><a href="#">en</a></li>
                                <li><a href="tel:{{_var.phone}}">{{_var.phone}}</a></li>
                            </ul>
                        </div>
                        <div class="language_currency bottom">
                            <ul>
                                <li><span>Mon - Fri: 8:00 - 18:00</span></li>
                            </ul>
                        </div>
                        <div class="header_account_area">
                            <div class="header_account_list search_list">
                                <a href="javascript:void(0)"><i class="icon-magnifier icons"></i></a>
                                <div class="dropdown_search">
                                    <form action="index.html#">
                                        <input placeholder="Search entire store here ..." type="text">
                                         <button type="submit"><i class="icon-magnifier icons"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="header_account_list  mini_cart_wrapper">
                                <a href="javascript:void(0)"><i class="icon-bag icons"></i>
                                    <span class="cart_itemtext">{{_lang.cart}}:</span>
                                    <span class="cart_itemtotal mod-cart-total-sum"></span>
                                    <span class="item_count mod-cart-count"></span>
                                </a>
                                <!--mini cart-->
                                <div class="mini_cart">
                                    <div class="cart_gallery" wb="module=cart&list">

                                        <div class="cart_item">
                                           <div class="cart_img">
                                               <a href="#"><img data-src="/thumbc/100x75/src/{{img}}" alt=""></a>
                                           </div>
                                            <div class="cart_info">
                                                <a href="{{_var.base}}/">{{name}}</a>
                                                <p>{{qty}} x <span> {{price}} </span></p>
                                            </div>
                                            <div class="cart_remove">
                                                <a href="javascript:void(0)" class="mod-cart-remove"><i class="ion-ios-close-outline"></i></a>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="mini_cart_table">
                                        <div class="cart_table_border">
                                            <div class="cart_total mt-10">
                                                <span>{{_lang.total}}:</span>
                                                <span class="price mod-cart-total-sum"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mini_cart_footer">
                                       <div class="cart_button">
                                            <a href="/cart"><i class="fa fa-shopping-cart"></i> {{_lang.viewcart}}</a>
                                        </div>
                                        <div class="cart_button">
                                            <a href="{{_var.base}}/checkout.html"><i class="fa fa-sign-in"></i> {{_lang.checkout}}</a>
                                        </div>

                                    </div>
                                </div>
                                <!--mini cart end-->
                           </div>
                        </div>

                        <div id="menu" class="text-left ">

                            <ul  class="offcanvas_main_menu" wb-tree="{
                                  'table':'_settings',
                                  'item':'settings',
                                  'field':'cmsmenu.sitemenu.ru',
                                  'parent':'false',
                                  'children':'false'}">
                                <li wb-if="'{{children}}' == ''"><a href="{{data.link}}">{{name}}</a></li>
                                <li wb-if="'{{children}}' >  ''" class="menu-item-has-children">
                                       <a href="#">{{name}}</a>
                                        <ul class="sub-menu">
                                           <wb-foreach wb="{'from':'children'}">
                                               <li><a href="{{data.link}}">{{name}}</a></li>
                                            </wb-foreach>
                                        </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="offcanvas_footer">
                            <span><a href="mailto:{{_var.email}}"><i class="fa fa-envelope-o"></i> {{_var.email}}</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--offcanvas menu area end-->

    <header>
        <div class="main_header">
            <div class="header_top">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-4">
                            <div class="language_currency top_left">
                                <ul>
                                    <li><a href="#">ru</a></li>
                                    <li><a href="#">en</a></li>
                                    <li><a href="tel:{{_var.phone}}">{{_var.phone}}</a></li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8">
                            <div class="language_currency text-right">
                                <ul>
                                    <li><span>Mon - Fri: 8:00 - 18:00</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header_middle sticky-header">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-2">
                            <div class="logo">
                                <a href="/"><img src="{{_var.base}}/assets/img/logo/logo.png" alt=""></a>
                            </div>

                        </div>
                        <div class="col-lg-10">
                            <div class="header_right_info menu_position">
                                <!--main menu start-->
                                <div class="main_menu">
                                    <nav>
                            <ul wb-tree="{
                                  'table':'_settings',
                                  'item':'settings',
                                  'field':'cmsmenu.sitemenu.ru',
                                  'parent':'false',
                                  'children':'false'}">
                                <li wb-if="'{{children}}' == ''"><a href="{{data.link}}">{{name}}</a></li>
                                <li wb-if="'{{children}}' >  ''">
                                       <a href="javascript:void(0)">{{name}}</a>
                                        <ul class="sub_menu">
                                           <wb-foreach wb="{'from':'children'}">
                                               <li><a href="{{data.link}}">{{name}}</a></li>
                                            </wb-foreach>
                                        </ul>
                                </li>
                            </ul>
                            <wb-jq wb='$dom->find("li:first-child > a")->addClass("active")'/>

                                    </nav>
                                </div>
                                <!--main menu end-->
                                <div class="header_account_area">
                                    <div class="header_account_list search_list">
                                        <a href="javascript:void(0)"><i class="icon-magnifier icons"></i></a>
                                        <div class="dropdown_search">
                                            <form action="index.html#">
                                                <input placeholder="Search entire store here ..." type="text">
                                                 <button type="submit"><i class="icon-magnifier icons"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="header_account_list  mini_cart_wrapper">
                                        <a href="javascript:void(0)"><i class="icon-bag icons"></i>
                                            <span class="cart_itemtext">{{_lang.cart}}:</span>
                                            <span class="cart_itemtotal mod-cart-total-sum"></span>
                                            <span class="item_count mod-cart-count"></span>
                                        </a>
                                        <!--mini cart-->
                                        <div class="mini_cart">
                                            <div class="cart_gallery" wb="module=cart&list">

                                                    <div class="cart_item">
                                                       <div class="cart_img">
                                                           <a href="#"><img data-src="/thumbc/100x75/src/{{img}}" alt=""></a>
                                                       </div>
                                                        <div class="cart_info">
                                                            <a href="#">{{name}}</a>
                                                            <p>{{qty}} x <span> {{price}} </span></p>
                                                        </div>
                                                        <div class="cart_remove">
                                                            <a href="javascript:void(0)" class="mod-cart-remove"><i class="ion-ios-close-outline"></i></a>
                                                        </div>
                                                    </div>

                                            </div>
                                            <div class="mini_cart_table">
                                                <div class="cart_table_border">
                                                    <!--div class="cart_total">
                                                        <span>Sub total:</span>
                                                        <span class="price">$125.00</span>
                                                    </div-->
                                                    <div class="cart_total mt-10">
                                                        <span>{{_lang.total}}:</span>
                                                        <span class="price mod-cart-total-sum"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mini_cart_footer">
                                               <div class="cart_button">
                                                    <a href="/cart"><i class="fa fa-shopping-cart"></i> {{_lang.viewcart}}</a>
                                                </div>
                                                <div class="cart_button">
                                                    <a href="{{_var.base}}/checkout.html"><i class="fa fa-sign-in"></i> {{_lang.checkout}}</a>
                                                </div>

                                            </div>
                                        </div>
                                        <!--mini cart end-->
                                   </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--header area end-->

<main>
    sdfasfd
</main>

    <!--shipping area start-->
    <div class="shipping_area shipping_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_shipping">
                        <div class="shipping_icone">
                            <i class="icon-call-out icons"></i>
                        </div>
                        <div class="shipping_content">
                            <h3><a href="tel:{{_var.phone}}">{{_var.phone}}</a></h3>
                            <p>/ {{_lang.phone}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_shipping">
                        <div class="shipping_icone">
                            <i class="icon-location-pin icons"></i>
                        </div>
                        <div class="shipping_content">
                            <h3>{{_var.address}}</h3>
                            <p>/ {{_lang.address}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_shipping col3">
                        <div class="shipping_icone">
                            <i class="icon-envelope icons"></i>
                        </div>
                        <div class="shipping_content">
                            <h3><a href="mailto:{{_var.email}}">{{_var.email}}</a></h3>
                            <p>/ {{_lang.email}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--shipping area end-->

    <!--footer area start-->
    <footer class="footer_widgets">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="widgets_container widget_menu">
                            <h3>{{_lang.menu}}</h3>
                            <div class="footer_menu">
                            <ul wb-tree="{
                                  'table':'_settings',
                                  'item':'settings',
                                  'field':'cmsmenu.sitemenu.ru',
                                  'parent':'false',
                                  'children':'false'}">
                                <li><a href="{{data.link}}">{{name}}</a></li>
                            </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="widgets_container widget_menu">
                            <h3>Custom Links</h3>
                            <div class="footer_menu">
                                <ul>
                                    <li><a href="{{_var.base}}/">Legal Notice</a></li>
                                    <li><a href="{{_var.base}}/">  Prices dro</a></li>
                                    <li><a href="{{_var.base}}/">New products</a></li>
                                    <li><a href="{{_var.base}}/">Best sales</a></li>
                                    <li><a href="{{_var.base}}/login.html">Login</a></li>
                                    <li><a href="{{_var.base}}/my-account.html"> My account</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="widgets_container widget_menu">
                            <h3>My Account</h3>
                            <div class="footer_menu">
                                <ul>
                                    <li><a href="{{_var.base}}/">Personal info</a></li>
                                    <li><a href="{{_var.base}}/"> Orders</a></li>
                                    <li><a href="{{_var.base}}/">Affiliate</a></li>
                                    <li><a href="{{_var.base}}/">Credit slips</a></li>
                                    <li><a href="{{_var.base}}/">Addresses</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="widgets_container widget_menu">
                            <h3>Follow us on</h3>
                            <div class="footer_menu">
                                <ul>
                                    <li><a href="{{_var.base}}/"><i class="fa fa-facebook" aria-hidden="true"></i>  Facebook</a></li>
                                    <li><a href="{{_var.base}}/"><i class="fa fa-twitter" aria-hidden="true"></i>   Twitter</a></li>
                                    <li><a href="{{_var.base}}/"><i class="fa fa-youtube-play" aria-hidden="true"></i> YouTube</a></li>
                                    <li><a href="{{_var.base}}/"><i class="fa fa-google-plus" aria-hidden="true"></i>  Google +</a></li>
                                    <li><a href="{{_var.base}}/"><i class="fa fa-instagram" aria-hidden="true"></i>  Instagram</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-8 col-sm-12">
                        <div class="widgets_container widget_newsletter">
                            <h3>Subscribe</h3>
                            <p>You may unsubscribe at any moment. For that purpose, please find our contact info in the legal notice.</p>
                            <div class="subscribe_form">
                                <form id="mc-form" class="mc-form footer-newsletter" >
                                    <input id="mc-email" type="email" autocomplete="off" placeholder="Your email address" />
                                    <button id="mc-submit"><i class="icon-arrow-right-circle icons"></i></button>
                                </form>
                                <!-- mailchimp-alerts Start -->
                                <div class="mailchimp-alerts text-centre">
                                    <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                    <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                    <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                                </div><!-- mailchimp-alerts end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="copyright_area">
                            <p>Copyright  © 2020  <a href="/">Bonique</a>.  <a href="/" target="_blank">All rights reserved.</a></p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="footer_payment text-right">
                            <a href="{{_var.base}}/"><img src="{{_var.base}}/assets/img/icon/payment.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--footer area end-->

    <!-- modal area start-->
    <div class="modal fade" id="modal_box" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true"><i class="ion-android-close"></i></span>
                </button>
                <div class="modal_body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-12">
                                <div class="modal_tab">
                                    <div class="tab-content product-details-large">
                                        <div class="tab-pane fade show active" id="tab1" role="tabpanel" >
                                            <div class="modal_tab_img">
                                                <a href="{{_var.base}}/"><img src="{{_var.base}}/assets/img/product/productbig1.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab2" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="{{_var.base}}/"><img src="{{_var.base}}/assets/img/product/productbig2.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab3" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="{{_var.base}}/"><img src="{{_var.base}}/assets/img/product/productbig3.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab4" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="{{_var.base}}/"><img src="{{_var.base}}/assets/img/product/productbig4.jpg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal_tab_button">
                                        <ul class="nav product_navactive owl-carousel" role="tablist">
                                            <li >
                                                <a class="nav-link active" data-toggle="tab" href="{{_var.base}}/tab1" role="tab" aria-controls="tab1" aria-selected="false"><img src="{{_var.base}}/assets/img/product/product2.jpg" alt=""></a>
                                            </li>
                                            <li>
                                                 <a class="nav-link" data-toggle="tab" href="{{_var.base}}/tab2" role="tab" aria-controls="tab2" aria-selected="false"><img src="{{_var.base}}/assets/img/product/product10.jpg" alt=""></a>
                                            </li>
                                            <li>
                                               <a class="nav-link button_three" data-toggle="tab" href="{{_var.base}}/tab3" role="tab" aria-controls="tab3" aria-selected="false"><img src="{{_var.base}}/assets/img/product/product5.jpg" alt=""></a>
                                            </li>
                                            <li>
                                               <a class="nav-link" data-toggle="tab" href="{{_var.base}}/tab4" role="tab" aria-controls="tab4" aria-selected="false"><img src="{{_var.base}}/assets/img/product/product4.jpg" alt=""></a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-12">
                                <div class="modal_right">
                                    <div class="modal_title mb-10">
                                        <h2>Donec Ac Tempus</h2>
                                    </div>
                                    <div class="modal_price mb-10">
                                        <span class="new_price">$64.99</span>
                                        <span class="old_price" >$78.99</span>
                                    </div>
                                    <div class="modal_description mb-15">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam in quos qui nemo ipsum numquam, reiciendis maiores quidem aperiam, rerum vel recusandae </p>
                                    </div>
                                    <div class="variants_selects">
                                        <div class="variants_size">
                                           <h2>size</h2>
                                           <select class="select_option">
                                               <option selected value="1">s</option>
                                               <option value="1">m</option>
                                               <option value="1">l</option>
                                               <option value="1">xl</option>
                                               <option value="1">xxl</option>
                                           </select>
                                        </div>
                                        <div class="variants_color">
                                           <h2>color</h2>
                                           <select class="select_option">
                                               <option selected value="1">purple</option>
                                               <option value="1">violet</option>
                                               <option value="1">black</option>
                                               <option value="1">pink</option>
                                               <option value="1">orange</option>
                                           </select>
                                        </div>
                                        <div class="modal_add_to_cart">
                                            <form action="index.html#">
                                                <input min="1" max="100" step="2" value="1" type="number">
                                                <button type="submit">add to cart</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="modal_social">
                                        <h2>Share this product</h2>
                                        <ul>
                                            <li class="facebook"><a href="{{_var.base}}/"><i class="fa fa-facebook"></i></a></li>
                                            <li class="twitter"><a href="{{_var.base}}/"><i class="fa fa-twitter"></i></a></li>
                                            <li class="pinterest"><a href="{{_var.base}}/"><i class="fa fa-pinterest"></i></a></li>
                                            <li class="google-plus"><a href="{{_var.base}}/"><i class="fa fa-google-plus"></i></a></li>
                                            <li class="linkedin"><a href="{{_var.base}}/"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal area end-->

    <!--news letter popup start-->
    <div class="newletter-popup">
        <div id="boxes" class="newletter-container">
            <div id="dialog" class="window">
                <div id="popup2">
                    <span class="b-close"><span>close</span></span>
                </div>
                <div class="box">
                    <div class="newletter-title">
                        <h2>Newsletter</h2>
                    </div>
                    <div class="box-content newleter-content">
                        <label class="newletter-label">Enter your email address to subscribe our notification of our new post &amp; features by email.</label>
                        <div id="frm_subscribe">
                            <form name="subscribe" id="subscribe_popup">
                                    <!-- <span class="required">*</span><span>Enter you email address here...</span>-->
                                    <input type="text" value="" name="subscribe_pemail" id="subscribe_pemail" placeholder="Enter you email address here...">
                                    <input type="hidden" value="" name="subscribe_pname" id="subscribe_pname">
                                    <div id="notification"></div>
                                    <a class="theme-btn-outlined" onclick="email_subscribepopup()"><span>Subscribe</span></a>
                            </form>
                            <div class="subscribe-bottom">
                                <input type="checkbox" id="newsletter_popup_dont_show_again">
                                <label for="newsletter_popup_dont_show_again">Don't show this popup again</label>
                            </div>
                        </div>
                        <!-- /#frm_subscribe -->
                    </div>
                    <!-- /.box-content -->
                </div>
            </div>

        </div>
        <!-- /.box -->
    </div>
    <!--news letter popup start-->

    <script type="wbapp">
        wbapp.loadStyles([
            "{{_var.base}}/assets/css/owl.carousel.min.css",
            "{{_var.base}}/assets/css/slick.css",
            "{{_var.base}}/assets/css/magnific-popup.css",
            "{{_var.base}}/assets/css/font.awesome.css",
            "{{_var.base}}/assets/css/ionicons.min.css",
            "{{_var.base}}/assets/css/simple-line-icons.css",
            "{{_var.base}}/assets/css/animate.css",
            "{{_var.base}}/assets/css/jquery-ui.min.css",
            "{{_var.base}}/assets/css/slinky.menu.css",
            "{{_var.base}}/assets/css/plugins.css",
            "{{_var.base}}/assets/css/style.css"
        ]);
        wbapp.loadScripts([
            "{{_var.base}}/assets/js/popper.js",
            "{{_var.base}}/assets/js/owl.carousel.min.js",
            "{{_var.base}}/assets/js/slick.min.js",
            "{{_var.base}}/assets/js/jquery.magnific-popup.min.js",
            "{{_var.base}}/assets/js/jquery.counterup.min.js",
            "{{_var.base}}/assets/js/jquery.countdown.js",
            "{{_var.base}}/assets/js/jquery.ui.js",
            "{{_var.base}}/assets/js/jquery.elevatezoom.js",
            "{{_var.base}}/assets/js/isotope.pkgd.min.js",
            "{{_var.base}}/assets/js/slinky.menu.js",
            "{{_var.base}}/assets/js/plugins.js"
        ],"siteready");
    </script>


<!-- JS
============================================ -->
<script src="{{_var.base}}/assets/js/plugins.js"></script>
<!-- Main JS -->
<script src="{{_var.base}}/assets/js/main.js"></script>


<wb-lang>
[ru]
cart = "Корзина"
menu = "Меню"
phone = "Телефон"
email = "Эл.почта"
address = "Адрес"
home = "Главная"
total = "Итого"
viewcart = "В корзину"
checkout = "Оформить"
[en]
cart = "Cart"
menu = "Menu"
phone = "Phone"
email = "Email"
address = "Address"
home = "Home"
total = "Total"
viewcart = "View cart"
checkout = "Checkout"
</wb-lang>


</body>
</html>
