<section class="blog_section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section_title" wb-if='"{{_sess.lang}}" !== "ru"'>
                    <h2>From Our Articles</h2>
                    <p>There are latest articles </p>
                </div>
                <div class="section_title" wb-if='"{{_sess.lang}}" == "ru"'>
                    <h2>Статьи</h2>
                    <p>Последние статьи из нашей подборки</p>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="blog_carousel blog_column3 owl-carousel">
                <wb-foreach wb="{'table':'blog','sort':'date:d','limit':'5','filter':{'active':'on','type':'article'}}">
                <div class="col-lg-3">
                    <wb-include wb-tpl="artitem.inc.php" />
                </div>
                </wb-foreach>
            </div>
        </div>
    </div>
</section>
