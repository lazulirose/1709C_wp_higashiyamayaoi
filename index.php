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
                    <a href="<?php echo home_url('/store#honten'); ?>">	&#x25B6; 詳しい地図</a><br> TEL(075)525-0801　FAX(075)561-4682
                </p>
            </div>
            <div class="shoparea">
                <p class="shoparea-label">高台寺店：</p>
                <p class="shoparea-address">京都市東山区高台寺下河原町530<br>
                    <a href="<?php echo home_url('/store#koudaiji'); ?>">	&#x25B6; 詳しい地図</a><br> TEL(075)551-5311
                </p>
            </div>
        </div>
        <div class="l-recommend">
            <h2 class="title">おすすめ商品</h2>
            <ul class="recommend">

                <?php $args = array(
        'numberposts' => 6,                //表示（取得）する記事の数
        'post_type' => 'recommended_item'    //投稿タイプの指定
    );
    $posts = get_posts( $args );
    if( $posts ) : foreach( $posts as $post ) : setup_postdata( $post ); ?>
                <li class="recommend__inner">
                    <a class="recommend-item item" itemprop="image" href="<?php the_permalink() ?>">
                        <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
                        <h3 class="item-title" itemprop="name">
                            <?php the_title(); ?>
                        </h3>
                        <div class="recommend-description">
                            <?php the_content(); ?>
                            <?php if ( get_post_meta($post->ID,'remarks',true ) ) {
    
    echo '<p class="focus">'; 
    echo get_post_meta($post->ID,'remarks',true );
    echo '</p>';
} ?>
                        </div>
                    </a>
                    <?php endforeach; ?>
                    <?php else : //記事が無い場合 ?>
                    <li>
                        <p>記事はまだありません。</p>
                    </li>
                    <?php endif; wp_reset_postdata();?>
            </ul>
        </div>
        <?php get_template_part('banner'); ?>
        <div class="l-newsfeed">
            <h2 class="title">新着情報</h2>
            <ul class="newsfeed__inner">
                <?php $args = array(
        'numberposts' => 6,                //表示（取得）する記事の数
        'post_type' => 'news'    //投稿タイプの指定
    );
    $posts = get_posts( $args );
    if( $posts ) : foreach( $posts as $post ) : setup_postdata( $post ); ?>

                <li class="newsfeed-item">
                    <time><?php the_time('Y/m/d') ?></time>
                    <?php the_title();?>
                </li>
                <?php endforeach; ?>
                <?php else : //記事が無い場合 ?>
                <li>
                    <p>記事はまだありません。</p>
                </li>
                <?php endif;
    wp_reset_postdata(); //クエリのリセット ?>
            </ul>
        </div>
    </div>
</main>
<!--main end-->
<?php get_template_part('aside'); ?>
<?php get_footer(); ?>