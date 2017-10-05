<?php get_header(); ?>
<main>
    <?php get_template_part('logo'); ?>
    <?php get_template_part('slider'); ?>
    <div class="container">
        <div class="l-description">
            漬物の原料である野菜は気候によって味や形を変えます。
            <br><br class="sp-only"> 私たちは日々欠かすことなく野菜と触れ合うことで、その変化を感じ、塩加減や重石加減を微調整します。
            <br><br class="sp-only"> それは大量生産を行わず、手作りにこだわっている私たちの強みであると感じています。
            <br><br class="sp-only"> 「京漬物」として古くから伝えられてきた伝統を大切にしながら、
            <br class="pc-only"> お客様に安心してお召し上がりいただける心のこもった漬物を作り続けることが私たちの使命です。
            <br><br class="sp-only"> それを築きあげていくことが、お客様の「おいしい」を追求することだと思っています。
        </div>
        <div class="l-shoparea">
            <div class="shoparea">
                <p class="shoparea-label">本　　店：</p>
                <p class="shoparea-address">京都市東山区東大路松原上ル4丁目毘沙門町44<br>
                    <a href="">	&#x25B6; 詳しい地図</a><br> TEL(075)525-0801　FAX(075)561-4682
                </p>
            </div>
            <div class="shoparea">
                <p class="shoparea-label">高台寺店：</p>
                <p class="shoparea-address">京都市東山区高台寺下河原町530<br>
                    <a href="">	&#x25B6; 詳しい地図</a><br> TEL(075)551-5311
                </p>
            </div>
        </div>
        <div class="l-recommend">
            <h2 class="title">おすすめ商品</h2>
            <ul class="recommend">
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 38871e0fbb628bf3d6fc94875bf3363ca6bccff7

                <?php $args = array(
        'numberposts' => 8,                //表示（取得）する記事の数
        'post_type' => 'recommended_item'    //投稿タイプの指定
    );
<<<<<<< HEAD
=======
                <?php $args = array(
        'numberposts' => 8,
        'post_type'   => 'recommended_item');
>>>>>>> master
=======
>>>>>>> 38871e0fbb628bf3d6fc94875bf3363ca6bccff7
    $posts = get_posts( $args );
    if( $posts ) : foreach( $posts as $post ) : setup_postdata( $post ); ?>
                <li class="recommend__inner">
                    <a class="recommend-item item" itemprop="image" href="<?php the_permalink() ?>">
                        <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
                        <h3 class="item-title" itemprop="name">
                            <?php the_title(); ?>
                        </h3>
                        <p class="recommend-description">シャリっとした歯ざわりと<br>ほどよいわさびの風味がきいた<br>長いものお漬物です</p>
                        <?php endforeach; ?>
<<<<<<< HEAD
<<<<<<< HEAD
                        <?php else : //記事が無い場合 ?>
                        <li>
                            <p>記事はまだありません。</p>
                        </li>
                        <?php endif;
    wp_reset_postdata(); //クエリのリセット ?>
=======
=======

>>>>>>> 38871e0fbb628bf3d6fc94875bf3363ca6bccff7
                        <?php else : ?>
                        <li>
                            <p>記事はまだありません。</p>
                        </li>
                        <?php endif; wp_reset_postdata(); ?>
<<<<<<< HEAD
>>>>>>> master
=======
>>>>>>> 38871e0fbb628bf3d6fc94875bf3363ca6bccff7
                        <li class="recommend__inner">
                            <a href="" class="recommend-item item">
                                <img src="https://placehold.jp/200x150.png" alt="">
                                <h3 class="item-title">山のいもわさび風味</h3>
                                <p class="recommend-description">シャリっとした歯ざわりと<br>ほどよいわさびの風味がきいた<br>長いものお漬物です</p>
                            </a>
                        </li>
                        <li class="recommend__inner">
                            <a href="" class="recommend-item item">
                                <img src="https://placehold.jp/200x150.png" alt="">
                                <h3 class="item-title">山のいもわさび風味</h3>
                                <p class="recommend-description">シャリっとした歯ざわりと<br>ほどよいわさびの風味がきいた<br>長いものお漬物です</p>
                            </a>
                        </li>
            </ul>
        </div>
        <?php get_template_part('banner'); ?>
        <div class="l-other">
            <div class="other">
                <div class="message">
                    <p><span>ご注文は、店舗または、電話・FAX<br class="sp-only">お手紙でお願いしております。</span>現在ホームページやメールからの注文は受け付けておりません。<br class="sp-only">ご不便をおかけいたしますがご了承ください。</p>
                </div>
                <a href="" class="pdf-dl"><img src="<?php echo get_template_directory_uri(); ?>/img/pdf.png" alt="FAX用のプリントアウトデータはこちら"></a>
            </div>
        </div>
        <div class="l-newsfeed">
            <h2 class="title">新着情報</h2>
            <ul class="newsfeed__inner">
                <?php $args = array(
<<<<<<< HEAD
<<<<<<< HEAD
        'numberposts' => 8,                //表示（取得）する記事の数
        'post_type' => 'news'    //投稿タイプの指定
=======
        'numberposts' => 8,
        'post_type'   => 'news' 
>>>>>>> master
=======
        'numberposts' => 8,                //表示（取得）する記事の数
        'post_type' => 'news'    //投稿タイプの指定
>>>>>>> 38871e0fbb628bf3d6fc94875bf3363ca6bccff7
    );
    $posts = get_posts( $args );
    if( $posts ) : foreach( $posts as $post ) : setup_postdata( $post ); ?>

                <li class="newsfeed-item">
                    <time><?php the_time('Y/m/d') ?></time>
                    <?php the_title();?>
                </li>
                <?php endforeach; ?>
<<<<<<< HEAD
<<<<<<< HEAD
                <?php else : //記事が無い場合 ?>
                <li>
                    <p>記事はまだありません。</p>
                </li>
                <?php endif;
    wp_reset_postdata(); //クエリのリセット ?>
=======
=======

>>>>>>> 38871e0fbb628bf3d6fc94875bf3363ca6bccff7
                <?php else : ?>
                <li>
                    <p>お知らせはまだありません。</p>
                </li>
                <?php endif; wp_reset_postdata(); ?>
<<<<<<< HEAD
>>>>>>> master
            </ul>
=======
          </ul>
>>>>>>> 38871e0fbb628bf3d6fc94875bf3363ca6bccff7
        </div>
    </div>
</main>
<!--main end-->
<?php get_template_part('aside'); ?>
<<<<<<< HEAD
<<<<<<< HEAD
<?php get_footer(); ?>
=======
<?php get_footer(); ?>
>>>>>>> master
=======
<?php get_footer(); ?>

>>>>>>> 38871e0fbb628bf3d6fc94875bf3363ca6bccff7
