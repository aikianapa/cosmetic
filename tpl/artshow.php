<!DOCTYPE html>
<html>
<wb-include wb-tpl="wrapper.inc.php" />

<wb-jq wb-html="main">
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="{{_var.base}}//"><i class="icon-home icons"></i></a></li>
                            <li><a href="{{_var.base}}//articles"><wb-data wb='table=pages&item=articles'>{{lang.{{_sess.lang}}.data.header}}</wb-data></a></li>
                            <li>{{lang.{{_sess.lang}}.data.header}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->
    
    <!--blog body area start-->
    <div class="blog_details">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12">
                    <!--blog grid area start-->
                    <div class="blog_wrapper blog_wrapper_details">
                        <article class="single_blog">
                            <figure>
                               <div class="post_header">
                                   <h3 class="post_title">{{lang.{{_sess.lang}}.data.header}}</h3>
                                    <!--div class="blog_meta">   
                                       <p>Posted by : <a href="{{_var.base}}/blog-details.html#">admin</a> / On : <a href="{{_var.base}}/blog-details.html#">April 10, 2019</a> / In : <a href="{{_var.base}}/blog-details.html#">Company, Image, Travel</a></p>                                     
                                    </div-->
                                </div>
                                <div class="blog_d_thumb" wb-if='"{{images.0.img}}">""'>
                                   <img data-src="{{images.0.img}}" alt="{{lang.{{_sess.lang}}.data.header}}">
                               </div>
                               <figcaption class="blog_content">
                                    <div class="post_content">
                        {{lang.{{_sess.lang}}.data.text}}
                                    </div>
                                    <div class="entry_content">
                                        <div class="post_meta">
                                            <span>Tags: </span>
                                            <span><a href="{{_var.base}}/blog-details.html#">, fashion</a></span>
                                            <span><a href="{{_var.base}}/blog-details.html#">, t-shirt</a></span>
                                            <span><a href="{{_var.base}}/blog-details.html#">, white</a></span>
                                        </div>

                                        <div class="social_sharing">
                                            <p>share this post:</p>
                                            <ul>
                                                <li><a href="{{_var.base}}/blog-details.html#" title="facebook"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="{{_var.base}}/blog-details.html#" title="twitter"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="{{_var.base}}/blog-details.html#" title="pinterest"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a href="{{_var.base}}/blog-details.html#" title="google+"><i class="fa fa-google-plus"></i></a></li>
                                                <li><a href="{{_var.base}}/blog-details.html#" title="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                               </figcaption>
                            </figure>
                        </article>
                        <div class="related_posts">
                           <h3>Related posts</h3>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <article class="single_related">
                                        <figure>
                                            <div class="related_thumb">
                                                <a href="{{_var.base}}/blog-details.html"><img data-src="{{_var.base}}/assets/img/blog/blog1.jpg" alt=""></a>
                                            </div>
                                            <figcaption class="related_content">
                                               <h4><a href="{{_var.base}}/blog-details.html#">Post with Gallery</a></h4>
                                               <div class="blog_meta">                                        
                                                    <span class="author">By : <a href="{{_var.base}}/blog-details.html#">admin</a> / </span>
                                                    <span class="meta_date"> April 11, 2019	</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <article class="single_related">
                                        <figure>
                                            <div class="related_thumb">
                                                <a href="{{_var.base}}/blog-details.html"><img data-src="{{_var.base}}/assets/img/blog/blog2.jpg" alt=""></a>
                                            </div>
                                            <figcaption class="related_content">
                                               <h4><a href="{{_var.base}}/blog-details.html#">Post with Audio</a></h4>
                                               <div class="blog_meta">                                        
                                                    <span class="author">By : <a href="{{_var.base}}/blog-details.html#">admin</a> / </span>
                                                    <span class="meta_date"> April 11, 2019	</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <article class="single_related">
                                        <figure>
                                            <div class="related_thumb">
                                                <a href="{{_var.base}}/blog-details.html"><img data-src="{{_var.base}}/assets/img/blog/blog3.jpg" alt=""></a>
                                            </div>
                                            <figcaption class="related_content">
                                               <h4><a href="{{_var.base}}/blog-details.html#">Maecenas ultricies</a></h4>
                                               <div class="blog_meta">                                        
                                                    <span class="author">By : <a href="{{_var.base}}/blog-details.html#">admin</a> / </span>
                                                    <span class="meta_date"> April 11, 2019	</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                            </div>
                       </div> 
                        <div class="comments_box">
                            <h3>3 Comments	</h3>
                            <div class="comment_list">
                                <div class="comment_thumb">
                                    <img data-src="{{_var.base}}/assets/img/blog/comment3.png.jpg" alt="">
                                </div>
                                <div class="comment_content">
                                    <div class="comment_meta">
                                        <h5><a href="{{_var.base}}/blog-details.html#">Admin</a></h5>
                                        <span>October 16, 2018 at 1:38 am</span> 
                                    </div>
                                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure</p>
                                    <div class="comment_reply">
                                        <a href="{{_var.base}}/blog-details.html#">Reply</a>
                                    </div>
                                </div>

                            </div>
                            <div class="comment_list list_two">
                                <div class="comment_thumb">
                                    <img data-src="{{_var.base}}/assets/img/blog/comment3.png.jpg" alt="">
                                </div>
                                <div class="comment_content">
                                    <div class="comment_meta">
                                        <h5><a href="{{_var.base}}/blog-details.html#">Demo</a></h5>
                                        <span>October 16, 2018 at 1:38 am</span> 
                                    </div>
                                    <p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur</p>
                                    <div class="comment_reply">
                                        <a href="{{_var.base}}/blog-details.html#">Reply</a>
                                    </div>
                                </div>
                            </div>
                            <div class="comment_list">
                                <div class="comment_thumb">
                                    <img data-src="{{_var.base}}/assets/img/blog/comment3.png.jpg" alt="">
                                </div>
                                <div class="comment_content">
                                    <div class="comment_meta">
                                        <h5><a href="{{_var.base}}/blog-details.html#">Admin</a></h5>
                                        <span>October 16, 2018 at 1:38 am</span> 
                                    </div>
                                    <p>Quisque orci nibh, porta vitae sagittis sit amet, vehicula vel mauris. Aenean at</p>
                                    <div class="comment_reply">
                                        <a href="{{_var.base}}/blog-details.html#">Reply</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="comments_form">
                            <h3>Leave a Reply </h3>
                            <p>Your email address will not be published. Required fields are marked *</p>
                            <form action="blog-details.html#">
                                <div class="row">
                                    <div class="col-12">
                                        <label for="review_comment">Comment </label>
                                        <textarea name="comment" id="review_comment" ></textarea>
                                    </div> 
                                    <div class="col-lg-4 col-md-4">
                                        <label for="author">Name</label>
                                        <input id="author"  type="text">

                                    </div> 
                                    <div class="col-lg-4 col-md-4">
                                        <label for="email">Email </label>
                                        <input id="email"  type="text">
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <label for="website">Website </label>
                                        <input id="website"  type="text">
                                    </div>   
                                </div>
                                <button class="button" type="submit">Post Comment</button>
                             </form>    
                        </div>
                    </div>
                    <!--blog grid area start-->
                </div>
                <div class="col-lg-3 col-md-12">
                    <div class="blog_sidebar_widget">
                        <div class="widget_list widget_search">
                            <div class="widget_title">
                                <h3>Search</h3>
                            </div>
                            <form action="blog-details.html#">
                                <input placeholder="Search..." type="text">
                                <button type="submit">search</button>
                            </form>
                        </div>
                        <div class="widget_list comments">
                           <div class="widget_title">
                                <h3>Recent Comments</h3>
                            </div>
                            <div class="post_wrapper">
                                <div class="post_thumb">
                                    <a href="{{_var.base}}/blog-details.html"><img data-src="{{_var.base}}/assets/img/blog/comment2.png.jpg" alt=""></a>
                                </div>
                                <div class="post_info">
                                    <span> <a href="{{_var.base}}/blog-details.html#">demo</a> says:</span>
                                    <a href="{{_var.base}}/blog-details.html">Quisque semper nunc</a>
                                </div>
                            </div>
                             <div class="post_wrapper">
                                <div class="post_thumb">
                                    <a href="{{_var.base}}/blog-details.html"><img data-src="{{_var.base}}/assets/img/blog/comment2.png.jpg" alt=""></a>
                                </div>
                                <div class="post_info">
                                    <span><a href="{{_var.base}}/blog-details.html#">admin</a> says:</span>
                                    <a href="{{_var.base}}/blog-details.html">Quisque orci porta...</a>
                                </div>
                            </div>
                            <div class="post_wrapper">
                                <div class="post_thumb">
                                    <a href="{{_var.base}}/blog-details.html"><img data-src="{{_var.base}}/assets/img/blog/comment2.png.jpg" alt=""></a>
                                </div>
                                <div class="post_info">
                                    <span><a href="{{_var.base}}/blog-details.html#">demo</a> says:</span>
                                    <a href="{{_var.base}}/blog-details.html">Quisque semper nunc</a>
                                </div>
                            </div>
                        </div>
                        <div class="widget_list widget_post">
                            <div class="widget_title">
                                <h3>Recent Posts</h3>
                            </div>
                            <div class="post_wrapper">
                                <div class="post_thumb">
                                    <a href="{{_var.base}}/blog-details.html"><img data-src="{{_var.base}}/assets/img/blog/blogs1.jpg" alt=""></a>
                                </div>
                                <div class="post_info">
                                    <h4><a href="{{_var.base}}/blog-details.html">Blog image post</a></h4>
                                    <span>March 16, 2018 </span>
                                </div>
                            </div>
                             <div class="post_wrapper">
                                <div class="post_thumb">
                                    <a href="{{_var.base}}/blog-details.html"><img data-src="{{_var.base}}/assets/img/blog/blogs2.jpg" alt=""></a>
                                </div>
                                <div class="post_info">
                                    <h4><a href="{{_var.base}}/blog-details.html">Post with Gallery</a></h4>
                                    <span>March 16, 2018 </span>
                                </div>
                            </div>
                             <div class="post_wrapper">
                                <div class="post_thumb">
                                    <a href="{{_var.base}}/blog-details.html"><img data-src="{{_var.base}}/assets/img/blog/blogs3.jpg" alt=""></a>
                                </div>
                                <div class="post_info">
                                    <h4><a href="{{_var.base}}/blog-details.html">Post with Audio</a></h4>
                                    <span>March 16, 2018 </span>
                                </div>
                            </div>
                        </div>
                        <div class="widget_list widget_categories">
                            <div class="widget_title">
                                <h3>Categories</h3>
                            </div>
                            <ul>
                                <li><a href="{{_var.base}}/blog-details.html#">Audio</a></li>
                                <li><a href="{{_var.base}}/blog-details.html#">Company</a></li>
                                <li><a href="{{_var.base}}/blog-details.html#">Gallery</a></li>
                                <li><a href="{{_var.base}}/blog-details.html#">Image</a></li>
                                <li><a href="{{_var.base}}/blog-details.html#">Other</a></li>
                                <li><a href="{{_var.base}}/blog-details.html#">Travel</a></li>
                            </ul>
                        </div>
                        <div class="widget_list widget_tag">
                            <div class="widget_title">
                                <h3>Tag products</h3>
                            </div>
                            <div class="tag_widget">
                                <ul>
                                    <li><a href="{{_var.base}}/blog-details.html#">asian</a></li>
                                    <li><a href="{{_var.base}}/blog-details.html#">brown</a></li>
                                    <li><a href="{{_var.base}}/blog-details.html#">euro</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--blog section area end-->
</wb-jq>