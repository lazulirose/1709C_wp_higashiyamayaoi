<?php
/*
Template Name: committed
*/
?>
   <?php get_header(); ?>
    <main class="parallax-bg">
        <div class="container">
            <div id="parallax-hero">
                <section>
                    <div class="parallax-one"></div>
                </section>
                <section>
                    <div class="page-heading">
                        <h1>東山八百伊のこだわり</h1>
                    </div>
                </section>
                <section>
                    <div class="block">
                        <div class="block__inner">
                            <div class="block__left">
                                <h2>東山八百伊のご紹介</h2>
                                <img src="<?php bloginfo('template_directory'); ?>/img/dist/committed-about.jpg" alt="committed">
                            </div>
                            <div class="block__right">
                                <p>京都のお漬けものは、なぜこんなにおいしいのですかと、よくおたずねをうけます。</p>
                                <p>昔から、陶器の発達したところの土で育つ野菜は、
                                    <br class="pc-only"> やわらかくて味がよく、したがってお漬けものもおいしいのですが、
                                    <br class="pc-only"> 京都はその上に、山紫水明の処といわれますように
                                    <br class="pc-only"> 琵琶湖を水源とする地下水が豊富ですし、一千有余年の歴史が、
                                    <br class="pc-only"> お野菜の栽培、お漬けものの漬け方を、育ててきたのであります。
                                </p>
                                <p>世界共通の言葉「古都に美味あり」を、そのままあてはめられるのが、
                                    <br class="pc-only"> 京都の美味の数々であります。
                                </p>
                                <p>ところが、お漬けものは、どんなによい野菜でも、
                                    <br class="pc-only"> 漬ける人の良心と勤勉さによって味が異なります。
                                    <br class="pc-only"> 東山の八百伊さんは、その点では理想の人柄でお漬けものに一生をささげておられ、
                                    <br class="pc-only"> おいしい漬けものの生まれるのももっともだと、いつも感心しております。
                                </p>
                                <p>(辻留　辻嘉一さまのご紹介文＝当店パンフレットより)</p>
                            </div>
                        </div>
                    </div>
                </section>
                <section>
                    <div class="left effect shadow">
                        <div class="effect__inner two">
                            <img src="<?php bloginfo('template_directory'); ?>/img/dist/committed-1.jpg" alt="committed" class="effect shadow">
                            <p class="text skill effect-slow left-slow">
                                <span>伝承の技</span> 伝統に裏打ちされた製法と、独特な工夫を重ねた熟練の職人が、自然の恵みを熟成の美味しさへと心を込めて漬け込みます。 京仕立ての伝統手法をしっかりと受け継ぎ、日々新たな丹精で大切に守り続けています。
                            </p>
                        </div>

                    </div>

                </section>

                <section>
                    <div class="right effect shadow">
                        <div class="effect__inner shadow">
                            <img src="<?php bloginfo('template_directory'); ?>/img/dist/committed-2.jpg" alt="committed" class="effect shadow">
                            <p class="text susai effect-slow right-slow">
                                <span>素菜</span> 盆地特有の夏の暑さと冬の底冷えで知られる京都独特の気候と、肥沃な土壌と良質で豊かな水が育てた京野菜。素菜（そざい）の持つ本来の旨味と味わいを、丁寧にそして存分に引き出した、美味しさ作りをしています。

                            </p>
                        </div>
                    </div>
                </section>
                <section>
                    <div class="left effect shadow">
                        <div class="effect__inner shadow">
                            <img src="<?php bloginfo('template_directory'); ?>/img/dist/committed-3.jpg" alt="committed" class="effect">
                            <p class="text fresh effect-slow left-slow">
                                <span>新鮮さ</span> 「樽から出したての新鮮なお漬け物をお届けしたい」 野菜の新鮮さにこだわっているので、大量に漬け込んだり、保存料や着色料を使用せず、毎日必要な分だけ漬けています。
                            </p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>
    <?php get_template_part('banner'); ?>
    <!--main end-->
    <?php get_template_part('aside'); ?>
<?php get_footer(); ?>
    <script type="text/javascript">
        $(function() {
            $(window).on('scroll', function() {
                var scroll_top = $(window).scrollTop();
                $('.effect').each(function() {
                    var offset_top = $(this).offset().top,
                        top_margin = 1000;
                    if (scroll_top > offset_top - top_margin) {
                        $(this).addClass('fadein');
                    } else {
                        $(this).removeClass('fadein');
                    }
                });
                $('.effect-slow').each(function() {
                    var offset_top = $(this).offset().top,
                        top_margin = 900;
                    if (scroll_top > offset_top - top_margin) {
                        $(this).addClass('fadein');

                    } else {
                        $(this).removeClass('fadein');
                    }
                });
            });
        });
        if (feature.webGL) {
            $("html").addClass("webgl");
        }
    </script>
</body>

</html>