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

    <!--blog area start-->
    <div class="blog_page_section mb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12">
                    <div class="blog_wrapper">
                        <div class="row">
                           <wb-foreach wb="table=blog&size={{_sett.page_size}}&pos=bottom&sort=date:d" wb-filter="{'active':'on','type':'news'}">
                            <div class="col-lg-4 col-md-6">
                                <article class="single_blog">
                                   <wb-var link="/article/{{id}}/{{wbFurlGenerate({{lang.{{_sess.lang}}.data.header}})}}/" />
                                    <figure>
                                        <div class="blog_thumb">
                                            <a href="{{_var.link}}"><img data-src="/thumbc/450x340/src/{{images.0.img}}" alt=""></a>
                                        </div>
                                        <figcaption class="blog_content">
                                           <h4 class="post_title"><a href="{{_var.link}}">{{lang.{{_sess.lang}}.data.header}}</a></h4>
                                           <p>{{_lang.posted}} <span>{{date("d.m.Y",strtotime({{date}}))}}</span></p>
                                           <footer class="blog_footer">
                                                <a href="{{_var.link}}">+ {{_lang.readmore}}</a>
                                            </footer>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            </wb-foreach>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12">
                    <div class="blog_sidebar_widget">
                        <div class="widget_list widget_search">
                            <div class="widget_title">
                                <h3>Search</h3>
                            </div>
                            <form action="blog.html#">
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
                                    <a href="blog-details.html"><img data-src="{{_var.base}}/assets/img/blog/comment2.png.jpg" alt=""></a>
                                </div>
                                <div class="post_info">
                                    <span> <a href="blog.html#">demo</a> says:</span>
                                    <a href="blog-details.html">Quisque semper nunc</a>
                                </div>
                            </div>
                             <div class="post_wrapper">
                                <div class="post_thumb">
                                    <a href="blog-details.html"><img data-src="{{_var.base}}/assets/img/blog/comment2.png.jpg" alt=""></a>
                                </div>
                                <div class="post_info">
                                    <span><a href="blog.html#">admin</a> says:</span>
                                    <a href="blog-details.html">Quisque orci porta...</a>
                                </div>
                            </div>
                            <div class="post_wrapper">
                                <div class="post_thumb">
                                    <a href="blog-details.html"><img data-src="{{_var.base}}/assets/img/blog/comment2.png.jpg" alt=""></a>
                                </div>
                                <div class="post_info">
                                    <span><a href="blog.html#">demo</a> says:</span>
                                    <a href="blog-details.html">Quisque semper nunc</a>
                                </div>
                            </div>
                        </div>
                        <div class="widget_list widget_post">
                            <div class="widget_title">
                                <h3>Recent Posts</h3>
                            </div>
                            <div class="post_wrapper">
                                <div class="post_thumb">
                                    <a href="blog-details.html"><img data-src="{{_var.base}}/assets/img/blog/blogs1.jpg" alt=""></a>
                                </div>
                                <div class="post_info">
                                    <h4><a href="blog-details.html">Blog image post</a></h4>
                                    <span>March 16, 2018 </span>
                                </div>
                            </div>
                             <div class="post_wrapper">
                                <div class="post_thumb">
                                    <a href="blog-details.html"><img data-src="{{_var.base}}/assets/img/blog/blogs2.jpg" alt=""></a>
                                </div>
                                <div class="post_info">
                                    <h4><a href="blog-details.html">Post with Gallery</a></h4>
                                    <span>March 16, 2018 </span>
                                </div>
                            </div>
                             <div class="post_wrapper">
                                <div class="post_thumb">
                                    <a href="blog-details.html"><img data-src="{{_var.base}}/assets/img/blog/blogs3.jpg" alt=""></a>
                                </div>
                                <div class="post_info">
                                    <h4><a href="blog-details.html">Post with Audio</a></h4>
                                    <span>March 16, 2018 </span>
                                </div>
                            </div>
                        </div>
                        <div class="widget_list widget_categories">
                            <div class="widget_title">
                                <h3>Categories</h3>
                            </div>
                            <ul>
                                <li><a href="blog.html#">Audio</a></li>
                                <li><a href="blog.html#">Company</a></li>
                                <li><a href="blog.html#">Gallery</a></li>
                                <li><a href="blog.html#">Image</a></li>
                            </ul>
                        </div>
                        <div class="widget_list widget_tag">
                            <div class="widget_title">
                                <h3>Tag products</h3>
                            </div>
                            <div class="tag_widget">
                                <ul>
                                    <li><a href="blog.html#">asian</a></li>
                                    <li><a href="blog.html#">brown</a></li>
                                    <li><a href="blog.html#">euro</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--blog area end-->

   <!--brand area start-->
        <wb-include wb-tpl="widget.brands.inc.php" />
    <!--brand area end-->
<wb-lang>
    [ru]
    readmore = "Читать"
    posted = "Опубликовано"
    [en]
    readmore = "Read more"
    posted = "Posted"
</wb-lang>
</wb-jq>
