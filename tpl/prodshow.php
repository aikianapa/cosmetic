<!DOCTYPE html>
<html>
<wb-include wb-tpl="wrapper.inc.php" />

<wb-jq wb-html="main">

    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="/"><i class="icon-home icons"></i></a></li>
                            <li><a href="/products">{{_lang.products}}</a></li>
                            <li>{{main.{{_sess.lang}}.data.name}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--product details start-->
    <div class="product_details mb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5">
                    <div class="product-details-tab">
                        <div id="img-1" class="zoomWrapper single-zoom">
                            <a href="#">
                                <img id="zoom1" src="/thumbc/800x800/src/{{images.0.img}}" data-zoom-image="{{images.0.img}}" alt="big-1">
                            </a>
                        </div>
                        <div class="single-zoom-thumb">
                            <ul class="s-tab-zoom owl-carousel single-product-active" id="gallery_01">
                                <wb-foreach wb="from=images">
                                    <li>
                                        <a href="#" class="elevatezoom-gallery" data-update="" data-image="/thumb/800x800/src/{{img}}" data-zoom-image="{{img}}">
                                            <img src="/thumbc/200x200/src/{{img}}" alt="zo-th-1" />
                                        </a>

                                    </li>
                                </wb-foreach>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7">
                    <div class="product_d_right">
                        <form action="#">
                            <div class="productd_title_nav">
                                <h1><a href="#">{{main.{{_sess.lang}}.data.name}}</a></h1>
                                <div class="product_nav">
                                    <ul>
                                        <li class="prev"><a href="product-details.html"><i class="fa fa-angle-left"></i></a></li>
                                        <li class="next"><a href="variable-product.html"><i class="fa fa-angle-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class=" product_ratting">
                                <ul>
                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                    <li class="review"><a href="#"> (customer review ) </a></li>
                                </ul>
                            </div>
                            <div class="price_box">
                                <span class="current_price">£70.00</span>
                                <span class="old_price">£80.00</span>
                            </div>
                            <div class="product_desc">
                                <p>eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in </p>
                            </div>
                            <div class="product_variant color">
                                <h3>Available Options</h3>
                                <label>color</label>
                                <ul>
                                    <li class="color1">
                                        <a href="#"></a>
                                    </li>
                                    <li class="color2">
                                        <a href="#"></a>
                                    </li>
                                    <li class="color3">
                                        <a href="#"></a>
                                    </li>
                                    <li class="color4">
                                        <a href="#"></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product_variant quantity">
                                <label>quantity</label>
                                <input min="1" max="100" value="1" type="number">
                                <button class="button" type="submit">add to cart</button>

                            </div>
                            <div class=" product_d_action">
                                <ul>
                                    <li><a href="#" title="Add to wishlist">+ Add to Wishlist</a></li>
                                    <li><a href="#" title="Add to wishlist">+ Compare</a></li>
                                </ul>
                            </div>
                            <div class="product_meta">
                                <span>Category: <a href="#">Clothing</a></span>
                            </div>

                        </form>
                        <div class="priduct_social">
                            <ul>
                                <li><a class="facebook" href="#" title="facebook"><i class="fa fa-facebook"></i> Like</a></li>
                                <li><a class="twitter" href="#" title="twitter"><i class="fa fa-twitter"></i> tweet</a></li>
                                <li><a class="pinterest" href="#" title="pinterest"><i class="fa fa-pinterest"></i> save</a></li>
                                <li><a class="google-plus" href="#" title="google +"><i class="fa fa-google-plus"></i> share</a></li>
                                <li><a class="linkedin" href="#" title="linkedin"><i class="fa fa-linkedin"></i> linked</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--product details end-->

    <!--product info start-->
    <div class="product_d_info mb-57">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product_d_inner">
                        <div class="product_info_button">
                            <ul class="nav" role="tablist">
                                <li>
                                    <a class="active" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="false">{{_lang.description}}</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#sheet" role="tab" aria-controls="sheet" aria-selected="false">{{_lang.ingredients}}</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Reviews (1)</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="info" role="tabpanel">
                                <div class="product_info_content">
                                    {{main.{{_sess.lang}}.data.text}}
                                </div>
                                
                                <h4>{{_lang.ingredients}}</h4>

                                <div id="accordion" role="tablist">
                                    <wb-foreach wb="{'from':'prop.{{_sess.lang}}.data.ingredients'}">
                                        <a class="d-block" data-toggle="collapse" href="#collapse{{_idx}}" aria-expanded="true" aria-controls="collapse{{_idx}}">
                                        {{_ndx}}. {{name}}
                                        </a>
                                        <!-- Add .show class to this item to make it visible on page load -->
                                        <div id="collapse{{_idx}}" class="collapse" role="tabpanel" aria-labelledby="heading{{_idx}}" data-parent="#accordion">
                                            {{descr}}
                                        </div>
                                    </wb-foreach>



                                </div>

                            </div>
                            <div class="tab-pane fade" id="sheet" role="tabpanel">
                                <div class="product_d_table">
                                    <form action="#">
                                        <table>
                                            <tbody>
                                                <wb-foreach wb="{'from':'prop.{{_sess.lang}}.data.ingredients'}">
                                                    <tr>
                                                        <td class="first_child">{{name}}</td>
                                                        <td>{{descr}}</td>
                                                    </tr>
                                                </wb-foreach>
                                            </tbody>
                                        </table>
                                    </form>
                                </div>
                                
                                <div class="product_info_content">
                                    <p>Fashion has been creating well-designed collections since 2010. The brand offers feminine designs delivering stylish separates and statement dresses which have since evolved into a full ready-to-wear collection in which every item is a vital part of a woman's wardrobe. The result? Cool, easy, chic looks with youthful elegance and unmistakable signature style. All the beautiful pieces are made in Italy and manufactured with the greatest attention. Now Fashion extends to a range of accessories including shoes, hats, belts and more!</p>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="reviews" role="tabpanel">
                                <div class="reviews_wrapper">
                                    <h2>1 review for Donec eu furniture</h2>
                                    <div class="reviews_comment_box">
                                        <div class="comment_thmb">
                                            <img src="{{_var.base}}/assets/img/blog/comment2.jpg" alt="">
                                        </div>
                                        <div class="comment_text">
                                            <div class="reviews_meta">
                                                <div class="star_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <p><strong>admin </strong>- September 12, 2018</p>
                                                <span>roadthemes</span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="comment_title">
                                        <h2>Add a review </h2>
                                        <p>Your email address will not be published. Required fields are marked </p>
                                    </div>
                                    <div class="product_ratting mb-10">
                                        <h3>Your rating</h3>
                                        <ul>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_review_form">
                                        <form action="#">
                                            <div class="row">
                                                <div class="col-12">
                                                    <label for="review_comment">Your review </label>
                                                    <textarea name="comment" id="review_comment"></textarea>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <label for="author">Name</label>
                                                    <input id="author" type="text">

                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <label for="email">Email </label>
                                                    <input id="email" type="text">
                                                </div>
                                            </div>
                                            <button type="submit">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--product info end-->

    <!--product area start-->
    <section class="product_area related_products mb-57">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title psec_title">
                        <h2>Возможно, вас заинтересует!</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="product_carousel product_column4 owl-carousel">
                    <wb-foreach wb="{'table':'products','limit':'5','rand':'true'}" ___wb-filter="{'active':'on'}">
                        <div class="col-lg-3">
                            <wb-include wb-tpl="proditem.php" />
                        </div>
                    </wb-foreach>
                </div>
            </div>
        </div>
    </section>
    <!--product area end-->

    <!--brand area start-->
    <div class="brand_area brand_padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="brand_container owl-carousel ">
                        <div class="single_brand">
                            <a href="#"><img src="{{_var.base}}/assets/img/brand/brand1.jpg" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="{{_var.base}}/assets/img/brand/brand2.jpg" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="{{_var.base}}/assets/img/brand/brand3.jpg" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="{{_var.base}}/assets/img/brand/brand4.jpg" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="{{_var.base}}/assets/img/brand/brand5.jpg" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="{{_var.base}}/assets/img/brand/brand1.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--brand area end-->
<wb-lang>
[ru] 
products = Продукция
description = Описание
ingredients = Ингредиенты
[en] 
products = Products
description = Description
ingredients = Ingredients
</wb-lang>
</wb-jq>
