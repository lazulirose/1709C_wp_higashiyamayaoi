<?php get_header(); ?>
<main>
    <?php get_template_part('logo'); ?>
    <div class="container">
        <h2 class="title">商品一覧</h2>
        <div class="container__inner">
            <div class="l-recommend l-itemlist">
                <h3 class="subheading">秋・冬のおすすめ商品</h3>
                <div class="l-itemlist">
                    <ul class="itemlist">
                        <?php $args = array('post_type' => 'aw_item' );
                            $customPosts = get_posts($args);
                            if($customPosts) : foreach($customPosts as $post) : setup_postdata( $post );?>
                        <li class="itemlist__inner">
                            <a class="item itemlist-item" href="<?php the_permalink(); ?>">
                                <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
                                <h4 class="item-title">
                                    <?php the_title(); ?>
                                </h4>
                                <?php the_content(); ?>
                                <?php if ( get_post_meta($post->ID,'focus',true ) ) {
    
    echo '<span class="focus">'; 
    echo get_post_meta($post->ID,'focus',true );
    echo '</span>';
} ?>

                                <?php if ( get_post_meta($post->ID,'price',true ) ) {
    
    echo '<p class="itemlist-price"><span>'; 
    echo get_post_meta($post->ID,'price',true );
    echo '</span>円（税込）</p>';
} ?>

                                <?php if ( get_post_meta($post->ID,'remarks',true ) ) {
    
    echo '<p>'; 
    echo get_post_meta($post->ID,'remarks',true );
    echo '</p>';
} ?>


                            </a>
                        </li>
                        <?php endforeach; ?>
                        <?php else : ?>
                        <p>商品がありません。</p>
                        <?php endif;
                            wp_reset_postdata(); ?>
                    </ul>
                </div>
            </div>
            <?php get_template_part('itemnav'); ?>
        </div>
    </div>
</main>
<?php get_footer(); ?>