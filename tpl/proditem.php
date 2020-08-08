<article class="single_product">
    <wb-var prodlink="/products/{{id}}/{{wbUrlOnly({{main.ru.data.name}})}}/" />
    <div class="product_thumb">
        <a class="primary_img" href="{{_var.prodlink}}">
            <img width="256" height="256" data-src="/thumbc/265x256/src/{{images.0.img}}" alt="">
        </a>
        <a class="secondary_img" href="{{_var.prodlink}}">
            <img width="256" height="256" src="/thumbc/256x256/src/{{images.1.img}}" alt="" wb-if="'{{images.1.img}}'">
        </a>
        <!--div class="label_product">
                                        <span class="label_sale">-15%</span>
                                    </div-->
        <div class="action_links">
            <ul>
                <li class="wishlist"><a href="#" title="{{_lang.toWishlist}}"><i class="icon-heart icons"></i></a></li>
                <li class="compare"><a href="#" title="{{_lang.toCart}}"><i class="icon-basket icons"></i></a></li>
                <li class="quick_button">
                    <a href="#" data-toggle="modal" data-target="#modal_box" title="{{_lang.toView}}"> <i class="icon-magnifier-add icons"></i></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="product_content grid_content">
        <h4 class="product_name"><a href="{{_var.prodlink}}">{{name}}</a></h4>
        <div class="price_box">
            <!--span class="old_price">$245.00</span-->
            <span class="current_price">{{price}} ₽</span>
        </div>
        <div class="add_to_cart">
            <a href="#" 
                wb-module="module=cart&add&ajax=/api/query/products/{{id}}/"
                wb-data="{
                    'name':'{{main.{{_sess.lang}}.data.name}}',
                    'img':'{{images.0.img}}'
                }"
            >+ {{_lang.toCart}}</a>
        </div>
    </div>

</article>
