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
                        <li>{{lang.{{_sess.lang}}.data.header}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<!--shopping cart area start -->
<div class="shopping_cart_area">
    <div class="container">
        <form action="cart.html#">
            <div class="row">
                <div class="col-12">
                    <div class="table_desc">
                        <div class="cart_page table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="product_remove">{{_lang.delete}}</th>
                                        <th class="product_thumb">{{_lang.image}}</th>
                                        <th class="product_name">{{_lang.product}}</th>
                                        <th class="product-price">{{_lang.price}}</th>
                                        <th class="product_quantity">{{_lang.quantity}}</th>
                                        <th class="product_total">{{_lang.total}}</th>
                                    </tr>
                                </thead>
                                <tbody wb="module=cart&list">
                                    <tr>
                                        <td class="product_remove">
                                            <a href="javascript:void(0)" class="mod-cart-remove">
                                                <i class="fa fa-trash-o"></i></a>
                                        </td>
                                        <td class="product_thumb">
                                            <a href="#"><img data-src="/thumbc/100x75/src/{{img}}" alt=""></a>
                                        </td>
                                        <td class="product_name"><a href="#">{{name}}</a></td>
                                        <td class="product-price">{{price}} ₽</td>
                                        <td class="product_quantity">
                                            <input class="mod-cart-qty" min="1" max="100" value="{{qty}}" type="number">
                                        </td>
                                        <td class="product_total">{{sum}} ₽</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="cart_submit">
                            <button type="submit">update cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--coupon code area start-->
            <div class="coupon_area">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="coupon_code left">
                            <h3>{{_lang.coupon}}</h3>
                            <div class="coupon_inner">
                                <p>Enter your coupon code if you have one.</p>
                                <input placeholder="Coupon code" type="text">
                                <button type="submit">Apply coupon</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="coupon_code right">
                            <h3>Cart Totals</h3>
                            <div class="coupon_inner">
                                <div class="cart_subtotal">
                                    <p>Subtotal</p>
                                    <p class="cart_amount">£215.00</p>
                                </div>
                                <div class="cart_subtotal ">
                                    <p>Shipping</p>
                                    <p class="cart_amount"><span>Flat Rate:</span> £255.00</p>
                                </div>
                                <a href="#">Calculate shipping</a>

                                <div class="cart_subtotal">
                                    <p>{{_lang.grandtotal}}</p>
                                    <p class="cart_amount"><span class="mod-cart-total-sum"></span> ₽</p>
                                </div>
                                <div class="checkout_btn">
                                    <a href="#">Proceed to Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--coupon code area end-->
        </form>
    </div>
</div>
<!--shopping cart area end -->
<wb-lang>
   [ru]
   delete = Удалить
   image = Изображение
   product = Наименование
   price = Цена
   quantity = Количество
   total = Всего
   grandtotal = Итого
   coupon = Купон
    [en]
   delete = Delete
   image = Image
   product = Product
   price = Price
   quantity = Quantity
   total = Total
   grandtotal = Total
   coupon = Coupon
</wb-lang>
</wb-jq>
</html>