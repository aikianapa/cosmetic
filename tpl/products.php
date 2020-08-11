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
                            <li>{{_lang.products}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--shop  area start-->
    <div class="shop_area shop_reverse mb-60">
        <div class="container">

            <div class="row">
                <div class="col-lg-3 col-md-12">
                   <!--sidebar widget start-->
                    <aside class="sidebar_widget">
                        <div class="widget_inner">
                            <div class="widget_list widget_categories">
                                <h3>Women</h3>
                                <ul>
                                    <li class="widget_sub_categories sub_categories1"><a href="javascript:void(0)">Shoes</a>
                                        <ul class="widget_dropdown_categories dropdown_categories1">
                                            <li><a href="shop.html#">Document</a></li>
                                            <li><a href="shop.html#">Dropcap</a></li>
                                            <li><a href="shop.html#">Dummy Image</a></li>
                                            <li><a href="shop.html#">Dummy Text</a></li>
                                            <li><a href="shop.html#">Fancy Text</a></li>
                                        </ul>
                                    </li>
                                    <li class="widget_sub_categories sub_categories2"><a href="javascript:void(0)">Bags</a>
                                        <ul class="widget_dropdown_categories dropdown_categories2">
                                            <li><a href="shop.html#">Flickr</a></li>
                                            <li><a href="shop.html#">Flip Box</a></li>
                                            <li><a href="shop.html#">Cocktail</a></li>
                                            <li><a href="shop.html#">Frame</a></li>
                                            <li><a href="shop.html#">Flickrq</a></li>
                                        </ul>
                                    </li>
                                    <li class="widget_sub_categories sub_categories3"><a href="javascript:void(0)">Clothing</a>
                                        <ul class="widget_dropdown_categories dropdown_categories3">
                                            <li><a href="shop.html#">Platform Beds</a></li>
                                            <li><a href="shop.html#">Storage Beds</a></li>
                                            <li><a href="shop.html#">Regular Beds</a></li>
                                            <li><a href="shop.html#">Sleigh Beds</a></li>
                                            <li><a href="shop.html#">Laundry</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="widget_list widget_filter">
                                <h3>Filter by price</h3>
                                <form action="shop.html#">
                                    <div id="slider-range"></div>
                                    <button type="submit">Filter</button>
                                    <input type="text" name="text" id="amount" />
                                </form>
                            </div>
                            <div class="widget_list widget_color">
                                <h3>Select By Color</h3>
                                <ul>
                                    <li>
                                        <a href="shop.html#">Black  <span>(6)</span></a>
                                    </li>
                                    <li>
                                        <a href="shop.html#"> Blue <span>(8)</span></a>
                                    </li>
                                    <li>
                                        <a href="shop.html#">Brown <span>(10)</span></a>
                                    </li>
                                    <li>
                                        <a href="shop.html#"> Green <span>(6)</span></a>
                                    </li>

                                </ul>
                            </div>
                            <div class="widget_list widget_color">
                                <h3>Select By SIze</h3>
                                <ul>
                                    <li>
                                        <a href="shop.html#">S  <span>(6)</span></a>
                                    </li>
                                    <li>
                                        <a href="shop.html#"> M <span>(8)</span></a>
                                    </li>
                                    <li>
                                        <a href="shop.html#">L <span>(10)</span></a>
                                    </li>
                                    <li>
                                        <a href="shop.html#"> XL <span>(6)</span></a>
                                    </li>

                                </ul>
                            </div>
                            <div class="widget_list widget_manu">
                                <h3>Manufacturer</h3>
                                <ul>
                                    <li>
                                        <a href="shop.html#">Brake Parts <span>(6)</span></a>
                                    </li>
                                    <li>
                                        <a href="shop.html#">Accessories <span>(10)</span></a>
                                    </li>
                                    <li>
                                        <a href="shop.html#">Engine Parts <span>(4)</span></a>
                                    </li>
                                    <li>
                                        <a href="shop.html#">hermes <span>(10)</span></a>
                                    </li>

                                </ul>
                            </div>
                            <div class="widget_list tags_widget">
                                <h3>Product tags</h3>
                                <div class="tag_cloud">
                                    <a href="shop.html#">Men</a>
                                    <a href="shop.html#">Women</a>
                                    <a href="shop.html#">Watches</a>
                                    <a href="shop.html#">Bags</a>
                                    <a href="shop.html#">Dress</a>
                                </div>
                            </div>
                            <div class="widget_list widget_banner">
                                <a href="shop.html#"><img src="{{_var.base}}/assets/img/bg/banner17.jpg" alt=""></a>
                            </div>
                            <div class="small_product_area widget_sid_product">
                                <div class="section_title">
                                   <h2>Trending</h2>
                                </div>
                                <div class="small_product_container product_column1 owl-carousel">
                                    <div class="product_items">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="{{_var.base}}/assets/img/product/product13.jpg" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="{{_var.base}}/assets/img/product/product12.jpg" alt=""></a>
                                            </div>
                                            <div class="product_content">
                                                <h4 class="product_name"><a href="product-details.html">Calvin Klein Jeans Reflective</a></h4>
                                                <div class="price_box">
                                                    <span class="old_price">$186.00</span>
                                                    <span class="current_price">$56.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="{{_var.base}}/assets/img/product/product14.jpg" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="{{_var.base}}/assets/img/product/product15.jpg" alt=""></a>
                                            </div>
                                            <div class="product_content">
                                                <h4 class="product_name"><a href="product-details.html">New Balance Arishi Sport v1</a></h4>
                                                <div class="price_box">
                                                    <span class="old_price">$210.00</span>
                                                    <span class="current_price">$68.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="{{_var.base}}/assets/img/product/product16.jpg" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="{{_var.base}}/assets/img/product/product17.jpg" alt=""></a>
                                            </div>
                                            <div class="product_content">
                                                <h4 class="product_name"><a href="product-details.html">Brixton Patrol All Terrain Ano</a></h4>
                                                <div class="price_box">
                                                    <span class="old_price">$136.00</span>
                                                    <span class="current_price">$76.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product_items">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="{{_var.base}}/assets/img/product/product6.jpg" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="{{_var.base}}/assets/img/product/product7.jpg" alt=""></a>
                                            </div>
                                            <div class="product_content">
                                                <h4 class="product_name"><a href="product-details.html">Originals Kaval Windbreaker</a></h4>
                                                <div class="price_box">
                                                    <span class="old_price">$245.00</span>
                                                    <span class="current_price">$76.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="{{_var.base}}/assets/img/product/product8.jpg" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="{{_var.base}}/assets/img/product/product9.jpg" alt=""></a>
                                            </div>
                                            <div class="product_content">
                                                <h4 class="product_name"><a href="product-details.html">Juicy Couture Juicy Quilted</a></h4>
                                                <div class="price_box">
                                                    <span class="old_price">$180.00</span>
                                                    <span class="current_price">$58.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="{{_var.base}}/assets/img/product/product11.jpg" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="{{_var.base}}/assets/img/product/product10.jpg" alt=""></a>
                                            </div>
                                            <div class="product_content">
                                                <h4 class="product_name"><a href="product-details.html">Water and Wind Resistant</a></h4>
                                                <div class="price_box">
                                                    <span class="old_price">$176.00</span>
                                                    <span class="current_price">$86.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </aside>
                    <!--sidebar widget end-->
                </div>
                <div class="col-lg-9 col-md-12">
                    <div class="shop_banner_area">
                        <img src="{{_var.base}}/assets/img/bg/banner16.jpg" alt="">
                    </div>

                    <!--shop toolbar start-->
                    <div class="shop_toolbar_wrapper">
                        <div class="shop_toolbar_btn">

                            <button data-role="grid_3" type="button" class="active btn-grid-3" data-toggle="tooltip" title="3"></button>

                            <button data-role="grid_4" type="button"  class=" btn-grid-4" data-toggle="tooltip" title="4"></button>

                            <button data-role="grid_list" type="button"  class="btn-list" data-toggle="tooltip" title="List"></button>
                        </div>
                        <div class=" niceselect_option">
                            <form class="select_option" action="shop.html#">
                                <select name="orderby" id="short">

                                    <option selected value="1">Sort by average rating</option>
                                    <option  value="2">Sort by popularity</option>
                                    <option value="3">Sort by newness</option>
                                    <option value="4">Sort by price: low to high</option>
                                    <option value="5">Sort by price: high to low</option>
                                    <option value="6">Product Name: Z</option>
                                </select>
                            </form>
                        </div>
                        <div class="page_amount">
                            <p>Showing 1–12 of 21 results</p>
                        </div>
                    </div>
                     <!--shop toolbar end-->
                     <div class="row shop_wrapper" id="productsList">
                        <wb-foreach wb="{'table':'products','size':'{{_sett.page_size}}','pos':'bottom'}" wb-filter="{'active':'on'}">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 ">
                            <wb-include wb-tpl="proditem.php" />
                        </div>
                        </wb-foreach>
                    </div>
                    <!--shop wrapper end-->
                </div>
            </div>
        </div>
    </div>
    <!--shop  area end-->
<wb-lang>
[ru]
toCart = В корзину
toWishlist = В закладки
toView = Быстрый просмотр
products = Продукция
[en]
toCart = Add to cart
toWishlist = Add to Wishlist
toView = Quick view
products = Products
</wb-lang>

</wb-jq>
