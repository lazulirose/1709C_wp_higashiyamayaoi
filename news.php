<?php get_header(); ?>
<main>
    <?php get_template_part('logo'); ?>
    <div class="l-hero">
        <div id="hero" class="hero">
            <img src="https://placehold.jp/350x150.png" alt="">
        </div>
    </div>
    <div class="container">
        <h2 class="title">メディア情報</h2>
        <div class="l-news">
            <?php $args = array('post_type' => 'news' );
                            $customPosts = get_posts($args);
                            if($customPosts) : foreach($customPosts as $post) : setup_postdata( $post );?>
                <div class="news">
                    <div class="news-img">
                    <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
                    </div>
                    <div class="news-text">
                        <h3 class="subheading">                        <?php the_title(); ?></h3>
                        <p class="square s-media">0000/00/00</p>
                        <p class="media-text">
                            <?php the_content(); ?>
                            <br>
                        <?php if ( get_post_meta($post->ID,'media_link1',true ) ) {
    
    echo '<a href="'; 
    echo get_post_meta($post->ID,'media_link1',true );
    echo '">';
} ?>
   <?php if ( get_post_meta($post->ID,'media_text1',true ) ) {
    
    echo get_post_meta($post->ID,'media_text1',true );
    echo '</a><br>';
} ?>     <?php if ( get_post_meta($post->ID,'media_link2',true ) ) {
    
    echo '<a href="'; 
    echo get_post_meta($post->ID,'media_link2',true );
    echo '">';
} ?>
   <?php if ( get_post_meta($post->ID,'media_text2',true ) ) {
    
    echo get_post_meta($post->ID,'media_text2',true );
    echo '</a><br>';
} ?>     <?php if ( get_post_meta($post->ID,'media_link3',true ) ) {
    
    echo '<a href="'; 
    echo get_post_meta($post->ID,'media_link3',true );
    echo '">';
} ?>
   <?php if ( get_post_meta($post->ID,'media_text3',true ) ) {
    
    echo get_post_meta($post->ID,'media_text3',true );
    echo '</a>';
} ?>   
                   </p>
                    </div>
                </div>
                <?php endforeach; ?>
                <?php else : ?>
                <p>記事がありません。</p>
                <?php endif; wp_reset_postdata(); ?>
                <div class="news">
                    <div class="news-img">
                        <img src="https://placehold.jp/240x240.png" alt="">
                    </div>
                    <div class="news-text">
                        <h3 class="subheading">たる２０１６年１月号に掲載されました。</h3>
                        <p class="square s-media">0000/00/00</p>
                        <p class="media-text">［ほろよい手帳］たる１月号
                            <br>「（特集）お酒とお漬物の美味しい関係
                            <br> 京都の冬の風物詩「千枚漬」」に当店を紹介していただきました。
                            <br><a href="">※「千枚漬」の紹介ページ（ＰＣ版）</a>
                            <br><a href="">※「千枚漬」の紹介ページ（スマートフォン版）</a>
                            <br><a href="">※「千枚漬」ギフトの紹介ページ</a></p>
                    </div>
                </div>
                <div class="news">
                    <div class="news-img">
                        <img src="https://placehold.jp/240x240.png" alt="">
                    </div>
                    <div class="news-text">
                        <h3 class="subheading">たる２０１６年１月号に掲載されました。</h3>
                        <p class="square s-media">0000/00/00</p>
                        <p class="media-text">［ほろよい手帳］たる１月号
                            <br>「（特集）お酒とお漬物の美味しい関係
                            <br> 京都の冬の風物詩「千枚漬」」に当店を紹介していただきました。
                            <br><a href="">※「千枚漬」の紹介ページ（ＰＣ版）</a>
                            <br><a href="">※「千枚漬」の紹介ページ（スマートフォン版）</a>
                            <br><a href="">※「千枚漬」ギフトの紹介ページ</a></p>
                    </div>
                </div>
                <div class="news">
                    <div class="news-img">
                        <img src="https://placehold.jp/240x240.png" alt="">
                    </div>
                    <div class="news-text">
                        <h3 class="subheading">たる２０１６年１月号に掲載されました。</h3>
                        <p class="square s-media">0000/00/00</p>
                        <p class="media-text">［ほろよい手帳］たる１月号
                            <br>「（特集）お酒とお漬物の美味しい関係
                            <br> 京都の冬の風物詩「千枚漬」」に当店を紹介していただきました。
                            <br><a href="">※「千枚漬」の紹介ページ（ＰＣ版）</a>
                            <br><a href="">※「千枚漬」の紹介ページ（スマートフォン版）</a>
                            <br><a href="">※「千枚漬」ギフトの紹介ページ</a></p>
                    </div>
                </div>
                <div class="news">
                    <div class="news-img">
                        <img src="https://placehold.jp/240x240.png" alt="">
                    </div>
                    <div class="news-text">
                        <h3 class="subheading">たる２０１６年１月号に掲載されました。</h3>
                        <p class="square s-media">0000/00/00</p>
                        <p class="media-text">［ほろよい手帳］たる１月号
                            <br>「（特集）お酒とお漬物の美味しい関係
                            <br> 京都の冬の風物詩「千枚漬」」に当店を紹介していただきました。
                            <br><a href="">※「千枚漬」の紹介ページ（ＰＣ版）</a>
                            <br><a href="">※「千枚漬」の紹介ページ（スマートフォン版）</a>
                            <br><a href="">※「千枚漬」ギフトの紹介ページ</a></p>
                    </div>
                </div>
        </div>
        <div class="l-pagination">
            <a href="" class="next-btn"><img src="./img/next-btn.svg" alt=""></a>
            <div class="pagination">
                <div class="prev"><a href="">◀</a></div>
                <div class="page-number">1<a href="">234…8</a></div>
                <div class="next"><a href="">▶</a></div>
            </div>
        </div>
    </div>
</main>
<!--main end-->
<aside class="l-links">
    <ul class="link">
        <li class="link-item">
            <a href="">メディア出演情報</a>
        </li>
        <li class="link-item">
            <a href="">高台寺御用達店 京・洛市「ねね」</a>
        </li>
        <li class="link-item">
            <svg class="fb" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13.22 26.43"><defs><style>.cls-1{fill:#fff;}</style></defs><path class="cls-1" d="M9.86,5.11h3.35V0H8.33C5.09,0,3,2.28,3,4.77V8.1H0v5.12H3V26.43H9V13.21H12.6l.32-5.12H9V5.89C9,5.21,9.22,5.11,9.86,5.11Z"/></svg>
            <a href="">facebook</a>
        </li>
        <li class="link-item">
            <svg class="in" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24.95 24.95"><defs><style>.cls-1{fill:#fff;}</style></defs>
    <path class="cls-1" d="M12.48,2.25c3.33,0,3.73,0,5,.07a6.91,6.91,0,0,1,2.32.43,3.87,3.87,0,0,1,1.43.93,3.86,3.86,0,0,1,.93,1.43,6.91,6.91,0,0,1,.43,2.32c.06,1.32.07,1.71.07,5s0,3.73-.07,5a6.91,6.91,0,0,1-.43,2.32,4.13,4.13,0,0,1-2.37,2.37,6.9,6.9,0,0,1-2.32.43c-1.32.06-1.71.07-5,.07s-3.73,0-5-.07a6.91,6.91,0,0,1-2.32-.43,3.87,3.87,0,0,1-1.43-.93,3.87,3.87,0,0,1-.93-1.43,6.91,6.91,0,0,1-.43-2.32c-.06-1.32-.07-1.71-.07-5s0-3.73.07-5a6.91,6.91,0,0,1,.43-2.32,3.87,3.87,0,0,1,.93-1.43,3.87,3.87,0,0,1,1.43-.93,6.91,6.91,0,0,1,2.32-.43c1.32-.06,1.71-.07,5-.07m0-2.25C9.09,0,8.66,0,7.33.08a9.16,9.16,0,0,0-3,.58A6.12,6.12,0,0,0,2.09,2.09,6.12,6.12,0,0,0,.65,4.3a9.16,9.16,0,0,0-.58,3C0,8.66,0,9.09,0,12.48s0,3.81.08,5.14a9.15,9.15,0,0,0,.58,3,6.12,6.12,0,0,0,1.44,2.21A6.12,6.12,0,0,0,4.3,24.3a9.16,9.16,0,0,0,3,.58c1.33.06,1.76.08,5.14.08s3.81,0,5.14-.08a9.16,9.16,0,0,0,3-.58,6.38,6.38,0,0,0,3.65-3.65,9.15,9.15,0,0,0,.58-3c.06-1.33.08-1.76.08-5.14s0-3.81-.08-5.14a9.16,9.16,0,0,0-.58-3,6.11,6.11,0,0,0-1.44-2.21A6.12,6.12,0,0,0,20.65.66a9.16,9.16,0,0,0-3-.58C16.29,0,15.87,0,12.48,0"/><path class="cls-1" d="M12.48,6.07a6.41,6.41,0,1,0,6.41,6.41,6.41,6.41,0,0,0-6.41-6.41m0,10.57a4.16,4.16,0,1,1,4.16-4.16,4.16,4.16,0,0,1-4.16,4.16"/><path class="cls-1" d="M20.63,5.82a1.5,1.5,0,1,1-1.5-1.5,1.5,1.5,0,0,1,1.5,1.5"/></svg>
            <a href="">instagram</a>
        </li>
    </ul>
</aside>
<!--aside end-->
<footer class="l-footer">
    <h1 class="l-logo-row">
        <a href="./index.html" class="footer-logo logo"><img src="./img/logo_row.svg" alt=""></a>
    </h1>
    <div class="footer__inner">
        <small class="copyright">Copyright &#169; 2017 Higashiyama YAOI. All rights reserved.</small>
        <ul class="footer-link">
            <li>
                <a href="">サイトマップ</a>
            </li>
            <li>
                <a href="./privacy.html">プライバシーポリシー</a>
            </li>
        </ul>
    </div>
</footer>
<!--footer end-->
<!-- SCRIPTS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
    $(function() {
        var windowH = $(window).height();
        var logo = $('#hero-logo').height();

        function elementHeight() {
            $('#hero').css('height', windowH - logo - 60 + 'px');
        };

        elementHeight();
        $(window).on('resize', function() {
            elementHight();
        });
    });

    $(document).ready(function() {
        $('.dc-menu-trigger').click(function() {
            $('.dc-menu').toggleClass("dc-menu-open");
            $('.menu-overlay').toggleClass("open");
            $('#header').toggleClass("shownav");
        });
    });
</script>
</body>

</html>