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
                        <ul>
                            <li><a href="/"><i class="icon-home icons"></i></a></li>
                            <li>{{lang.{{_sess.lang}}.data.header}}</li>
                        </ul>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->
    
    <!--contact map start-->
    <div class="contact_map">
<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ad281f01e744099e1f895aeb3ca9483df7b2bb8dd21083f7e45d407e21f2d18b1&amp;width=100%25&amp;height=600&amp;lang=ru_RU&amp;scroll=false"></script>
    </div>
    <!--contact map end-->
    
    <!--contact area start-->
    <div class="contact_area">
        <div class="container">   
            <div class="row">
                <div class="col-lg-6 col-md-6">
                   <div class="contact_message content">
                        <h3>{{lang.{{_sess.lang}}.data.header}}</h3>
                             {{lang.{{_sess.lang}}.data.text}}
                        <ul>
                            <li><i class="fa fa-fax"></i>  {{_lang.address}} : {{_var.address}}</li>
                            <li><i class="fa fa-phone"></i> <a href="mailto:{{_var.email}}">{{_var.email}}</a></li>
                            <li><i class="fa fa-envelope-o"></i><a href="tel:{{_var.phone}}">{{_var.phone}}</a>  </li>
                        </ul>             
                    </div> 
                </div>
                <div class="col-lg-6 col-md-6">
                   <div class="contact_message form">
                        <h3>{{_lang.feedback}}</h3>   
                        <form id="contact-form" method="POST">
                            <p>  
                               <label> {{_lang.yourname}}</label>
                                <input name="name" placeholder="{{_lang.yourname}}" type="text" required> 
                            </p>
                            <p>       
                               <label>  {{_lang.youremail}}</label>
                                <input name="email" placeholder="{{_lang.yourname}}" type="email" required>
                            </p>
                            <p>          
                               <label>  {{_lang.subject}}</label>
                                <input name="subject" placeholder="{{_lang.subject}}" type="text">
                            </p>    
                            <div class="contact_textarea">
                                <label>  {{_lang.message}}</label>
                                <textarea placeholder="{{_lang.message}}" name="message"  class="form-control2" ></textarea>     
                            </div>   
                            <button type="button"><i class="fa fa-envelope"></i> &nbsp; {{_lang.send}}</button>  
                            <p class="form-messege"></p>
                            <wb-lang>
                                [ru]
                                send = "Отправить"
                                yourname = "Ваше Имя"
                                youremail = "Ваша эл.почта"
                                subject = "Тема"
                                message = "Ваше сообщение"
                                feedback = "Обратная связь"
                                [en]
                                send = "Send"
                                yourname = "Your Name"
                                youremail = "Your Email"
                                subject = "Subject"
                                message = "Your Message"
                                feedback = "Feedback"
                            </wb-lang>
                        </form> 

                    </div> 
                </div>
            </div>
        </div>    
    </div>
    <!--contact area end-->

    <!--brand area start-->
    <div class="brand_area brand_padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="brand_container owl-carousel ">
                        <div class="single_brand">
                            <a href="contact.html#"><img src="assets/img/brand/brand1.jpg" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="contact.html#"><img src="assets/img/brand/brand2.jpg" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="contact.html#"><img src="assets/img/brand/brand3.jpg" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="contact.html#"><img src="assets/img/brand/brand4.jpg" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="contact.html#"><img src="assets/img/brand/brand5.jpg" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="contact.html#"><img src="assets/img/brand/brand1.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--brand area end-->
<wb-lang>
[ru]
address = "Адрес"
[en]
address = "Address"
</wb-lang>
</wb-jq>
</html>