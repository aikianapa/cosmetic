<!DOCTYPE html>
<html>
<wb-include wb-tpl="wrapper.inc.php" />

<wb-jq wb-html="main">
    <!--slider area start-->
    <section class="slider_section">

        <div class="slider_area owl-carousel" wb-tree="{'field':'prop.slider','parent':'false'}">
            <div class="single_slider d-flex align-items-center" data-bgimg="{{data.image.0.img}}">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="slider_content">
                                <h2>{{name}}</h2>
                                <h1>{{data.header}}</h1>
                                <p>
                                    {{data.text}}
                                </p>
                                <a href="{{data.link}}">+ Подробно </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--slider area end-->

    <!--banner area start-->
    <div class="banner_gallery_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2>2020 top collections</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="banner_gallery_left">
                        <div class="single_banner mb-30">
                            <div class="banner_thumb">
                                <a href="{{_var.base}}/shop.html"><img data-src="{{_var.base}}/assets/img/bg/banner1.jpg" alt=""></a>
                            </div>
                            <div class="banner_text">
                                <h3>Skin care</h3>
                                <p>/ 09 items</p>
                            </div>
                        </div>
                        <div class="banner_left_top">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="single_banner">
                                        <div class="banner_thumb">
                                            <a href="{{_var.base}}/shop.html"><img data-src="{{_var.base}}/assets/img/bg/banner2.jpg" alt=""></a>
                                        </div>
                                        <div class="banner_text">
                                            <h3>Lips</h3>
                                            <p>/ 09 items</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="single_banner">
                                        <div class="banner_thumb">
                                            <a href="{{_var.base}}/shop.html"><img data-src="{{_var.base}}/assets/img/bg/banner3.jpg" alt=""></a>
                                        </div>
                                        <div class="banner_text">
                                            <h3>Make-Up</h3>
                                            <p>/ 09 items</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="banner_gallery_right">
                        <div class="single_banner mb-30">
                            <div class="banner_thumb">
                                <a href="{{_var.base}}/shop.html"><img data-src="{{_var.base}}/assets/img/bg/banner4.jpg" alt=""></a>
                            </div>
                            <div class="banner_text">
                                <h3>Brushes</h3>
                                <p>/ 09 items</p>
                            </div>
                        </div>
                        <div class="single_banner">
                            <div class="banner_thumb">
                                <a href="{{_var.base}}/shop.html"><img data-src="{{_var.base}}/assets/img/bg/banner5.jpg" alt=""></a>
                            </div>
                            <div class="banner_text">
                                <h3>Accessories</h3>
                                <p>/ 09 items</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--banner area end-->

    <!--product area start-->
    <div class="product_area product_deals mb-95">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2>Deal of the week</h2>
                        <p>Sale off 30% all products </p>
                    </div>
                </div>
            </div>
            <div class="product_container">
                <div class="row">
                    <div class="col-12">
                        <div class="product_carousel product_dl_column3 owl-carousel">
                            <div class="deals_item_product">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="{{_var.base}}/product-details.html"><img data-src="{{_var.base}}/assets/img/product/product1.jpg" alt=""></a>
                                            <a class="secondary_img" href="{{_var.base}}/product-details.html"><img data-src="{{_var.base}}/assets/img/product/product2.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">-15%</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="wishlist"><a href="{{_var.base}}/wishlist.html" title="Add to Wishlist"><i class="icon-heart icons"></i></a></li>
                                                    <li class="compare"><a href="{{_var.base}}/" title="Add to Compare"><i class="icon-refresh icons"></i></a></li>
                                                    <li class="quick_button">
                                                        <a href="{{_var.base}}/" data-toggle="modal" data-target="#modal_box" title="quick view"> <i class="icon-magnifier-add icons"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <h4 class="product_name"><a href="{{_var.base}}/product-details.html">Juicy Couture Juicy Quilted Terry Track</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">$235.00</span>
                                                <span class="current_price">$30.00</span>
                                            </div>
                                            <div class="add_to_cart">
                                                <a href="{{_var.base}}/cart.html">+ Add to cart</a>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                                <div class="product_timing">
                                    <div data-countdown="2022/12/15"></div>
                                </div>
                            </div>
                            <div class="deals_item_product">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="{{_var.base}}/product-details.html"><img data-src="{{_var.base}}/assets/img/product/product3.jpg" alt=""></a>
                                            <a class="secondary_img" href="{{_var.base}}/product-details.html"><img data-src="{{_var.base}}/assets/img/product/product4.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">-15%</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="wishlist"><a href="{{_var.base}}/wishlist.html" title="Add to Wishlist"><i class="icon-heart icons"></i></a></li>
                                                    <li class="compare"><a href="{{_var.base}}/" title="Add to Compare"><i class="icon-refresh icons"></i></a></li>
                                                    <li class="quick_button">
                                                        <a href="{{_var.base}}/" data-toggle="modal" data-target="#modal_box" title="quick view"> <i class="icon-magnifier-add icons"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <h4 class="product_name"><a href="{{_var.base}}/product-details.html">Fila Locker Room Varsity Jacket</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">$255.00</span>
                                                <span class="current_price">$40.00</span>
                                            </div>
                                            <div class="add_to_cart">
                                                <a href="{{_var.base}}/cart.html">+ Add to cart</a>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                                <div class="product_timing">
                                    <div data-countdown="2022/12/15"></div>
                                </div>
                            </div>
                            <div class="deals_item_product">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="{{_var.base}}/product-details.html"><img data-src="{{_var.base}}/assets/img/product/product5.jpg" alt=""></a>
                                            <a class="secondary_img" href="{{_var.base}}/product-details.html"><img data-src="{{_var.base}}/assets/img/product/product1.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">-15%</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="wishlist"><a href="{{_var.base}}/wishlist.html" title="Add to Wishlist"><i class="icon-heart icons"></i></a></li>
                                                    <li class="compare"><a href="{{_var.base}}/" title="Add to Compare"><i class="icon-refresh icons"></i></a></li>
                                                    <li class="quick_button">
                                                        <a href="{{_var.base}}/" data-toggle="modal" data-target="#modal_box" title="quick view"> <i class="icon-magnifier-add icons"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <h4 class="product_name"><a href="{{_var.base}}/product-details.html">Originals Kaval Windbreaker Winter</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">$225.00</span>
                                                <span class="current_price">$35.00</span>
                                            </div>
                                            <div class="add_to_cart">
                                                <a href="{{_var.base}}/cart.html">+ Add to cart</a>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                                <div class="product_timing">
                                    <div data-countdown="2022/12/15"></div>
                                </div>
                            </div>
                            <div class="deals_item_product">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="{{_var.base}}/product-details.html"><img data-src="{{_var.base}}/assets/img/product/product4.jpg" alt=""></a>
                                            <a class="secondary_img" href="{{_var.base}}/product-details.html"><img data-src="{{_var.base}}/assets/img/product/product3.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">-15%</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="wishlist"><a href="{{_var.base}}/wishlist.html" title="Add to Wishlist"><i class="icon-heart icons"></i></a></li>
                                                    <li class="compare"><a href="{{_var.base}}/" title="Add to Compare"><i class="icon-refresh icons"></i></a></li>
                                                    <li class="quick_button">
                                                        <a href="{{_var.base}}/" data-toggle="modal" data-target="#modal_box" title="quick view"> <i class="icon-magnifier-add icons"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <h4 class="product_name"><a href="{{_var.base}}/product-details.html">Juicy Couture Solid Sleeve Puffer</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">$180.00</span>
                                                <span class="current_price">$80.00</span>
                                            </div>
                                            <div class="add_to_cart">
                                                <a href="{{_var.base}}/cart.html">+ Add to cart</a>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                                <div class="product_timing">
                                    <div data-countdown="2022/12/15"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--product area end-->

    <!--testimonial area start-->
    <div class="testimonial_area mb-95">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title testi_title">
                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                        <h2>Client testimonials</h2>
                    </div>
                </div>
            </div>
            <div class="testimonial_container">
                <div class="row">
                    <div class="testimonial_carousel testimonial_column3 owl-carousel">
                        <div class="col-lg-4">
                            <div class="single_testimonial">
                                <div class="testimonial_thumb">
                                    <img data-src="{{_var.base}}/assets/img/about/testimonial1.png" alt="">
                                </div>
                                <div class="testimonial_content">
                                    <h3>orando BLoom</h3>
                                    <a href="{{_var.base}}/https://hasthemes.com/">/demo@hasthemes.com</a>
                                    <p>Perfect Themes and the best of all that you have many options to choose! Best Support team ever!Very fast responding and experts on their fields! Thank you very much!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="single_testimonial">
                                <div class="testimonial_thumb">
                                    <img data-src="{{_var.base}}/assets/img/about/testimonial2.png" alt="">
                                </div>
                                <div class="testimonial_content">
                                    <h3>orando BLoom</h3>
                                    <a href="{{_var.base}}/https://hasthemes.com/">/demo@posthemes.com</a>
                                    <p>Perfect Themes and the best of all that you have many options to choose! Best Support team ever!Very fast responding and experts on their fields! Thank you very much!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="single_testimonial">
                                <div class="testimonial_thumb">
                                    <img data-src="{{_var.base}}/assets/img/about/testimonial3.png" alt="">
                                </div>
                                <div class="testimonial_content">
                                    <h3>orando BLoom</h3>
                                    <a href="{{_var.base}}/https://hasthemes.com/">/demo@hasthemes.com</a>
                                    <p>Perfect Themes and the best of all that you have many options to choose! Best Support team ever!Very fast responding and experts on their fields! Thank you very much!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="single_testimonial">
                                <div class="testimonial_thumb">
                                    <img data-src="{{_var.base}}/assets/img/about/testimonial1.png" alt="">
                                </div>
                                <div class="testimonial_content">
                                    <h3>orando BLoom</h3>
                                    <a href="{{_var.base}}/https://hasthemes.com/">/demo@hasthemes.com</a>
                                    <p>Perfect Themes and the best of all that you have many options to choose! Best Support team ever!Very fast responding and experts on their fields! Thank you very much!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--testimonial area end-->

    <!--banner static area start-->
    <div class="banner_static_area mb-95">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-5">
                    <div class="banner_static_content">
                        <h3>Stop & wear</h3>
                        <h2>Model Skin Care <br> Essentials</h2>
                        <p>The concentration of a perfume is the percentage of pure fragrance oil to stabilizing ingredients, which determines lasting power.</p>
                        <a href="{{_var.base}}/shop.html">+ Shop Now</a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7">
                    <div class="banner_thumb static_b_thumb">
                        <a href="{{_var.base}}/shop.html"><img data-src="{{_var.base}}/assets/img/bg/banner6.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--banner static area end-->

    <!--blog area start-->
    <wb-include wb-tpl="widget.articles.inc.php" />
    <!--blog area end-->

    <!--brand area start-->
    <wb-include wb-tpl="widget.brands.inc.php" />
    <!--brand area end-->

    <!--bonique messages area start-->
    <div class="bonique_messages_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bonique_messages_text">
                        <h3>bonique</h3>
                        <p>The concentration of a perfume is the percentage of pure fragrance oil to stabilizing ingredients, which determines lasting power. Lorem ipsum dolor sit amet, consectetur cing elit. Suspe ndissesuscipit sagittis leo sit met condimentum estibulum issim Lorem ipsum dolor sit amet, consectetur cing elit.</p>
                        <a href="{{_var.base}}/">+ Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--bonique messages area end-->

</wb-jq>

</html>
