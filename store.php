<?php
/*
Template Name: store
*/
?>
    <?php get_header(); ?>
    <main>
        <?php get_template_part('logo'); ?>
        <div class="l-hero">
            <div id="hero" class="hero">
                <img src="<?php bloginfo('template_directory'); ?>/img/dist/store-hero.jpg" alt="store-hero">
            </div>
        </div>
        <div class="container">
            <div class="l-store">
                <h2 class="title">本店</h2>
                <div class="store">
                    <div class="store__inner">
                        <div class="store__left">
                            <img src="<?php bloginfo('template_directory'); ?>/img/dist/store-honten.jpg" alt="store-honten">
                        </div>
                        <div class="store__right">
                            <p class="store-heading">■ 東山 八百伊 《本店》</p>
                            <p>京都市東山区東大路松原上ル4丁目毘沙門町44　</p>
                            <p class="store-number">電話（075）525-0801</p>
                            <p class="store-number">FAX （075）561-4682</p>
                            <p class="receptiontime"><span class="circle">受付時間</span>　午前10時～午後5時30分</p>
                            <p class="receptiontime"><span class="circle">定休日</span>　火曜日</p>
                        </div>
                    </div>
                    <div class="ggmap"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3268.2644552008824!2d135.77460541524027!3d35.000084580358774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x600108c445e1bc0b%3A0x56feefa56bbc648b!2z5p2x5bGx5YWr55m-5LyK!5e0!3m2!1sja!2sjp!4v1506070143706" width="700" height="370" frameborder="0" style="border:0" allowfullscreen></iframe></div>
                    <div class="ggmap-link"><a href="https://maps.google.com/maps?ll=34.997194,135.781962&z=15&t=m&hl=en-US&gl=JP&mapclient=embed&cid=6268711225102460043" target="blank">大きな地図で見る  ▶︎</a><a href="#easymap-area">略地図を見る  ▶︎</a></div>
                </div>
                <h2 class="title">高台寺店</h2>
                <div class="store">
                    <div class="store__inner">
                        <div class="store__left">
                            <img src="<?php bloginfo('template_directory'); ?>/img/dist/store-koudaiji.jpg" alt="store-koudaiji">
                        </div>
                    <div class="store__right">
                        <p class="store-heading">■ 東山 八百伊 《本店》</p>
                        <p>京都市東山区東大路松原上ル4丁目毘沙門町44　</p>
                        <p class="store-number">電話（075）525-0801</p>
                        <p class="store-number">FAX （075）561-4682</p>
                        <p class="receptiontime"><span class="circle">受付時間</span>　午前10時～午後5時30分</p>
                        <p class="receptiontime"><span class="circle">定休日</span>　火曜日</p>
                    </div>
                </div>
                <div class="ggmap"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3268.217982770064!2d135.7776108145271!3d35.00124808035838!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x26145e78e2168775!2z5p2x5bGx5YWr55m-5LyK6auY5Y-w5a-65bqX!5e0!3m2!1sja!2sjp!4v1506070327419" width="700" height="370" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="ggmap-link"><a href="https://maps.google.com/maps?ll=34.997433,135.784506&z=15&t=m&hl=en-US&gl=JP&mapclient=embed&cid=2743921946257688437" target="blank">大きな地図で見る  ▶︎</a>
                </div>
            </div>
            <h2 id="easymap-area" class="title">略地図</h2>
            <div class="easymap"><img src="<?php bloginfo('template_directory'); ?>/img/dist/map.svg" alt="map"></div>
        </div>
        </div>
    </main>
    <!--main end-->
    <?php get_template_part('aside'); ?>
    <?php get_footer(); ?>