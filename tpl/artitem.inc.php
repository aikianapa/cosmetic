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
    <wb-lang>
      [ru]
      posted = Опубликовано
      readmore = Подробней
      [en]
      posted = Posted
      readmore = Read more
    </wb-lang>
</article>
