<?php get_header(); ?>
<?php get_template_part('logo'); ?>
<main>
    <div class="container">
        <div class="l-item">
            <?php if(have_posts()): while(have_posts()): the_post(); ?>
            <div class="item__left">
                <?php the_post_thumbnail('thumbnail'); ?>
            </div>
            <div class="item__right">
                <h2 class="subheading">
                    <?php the_title(); ?>
                </h2>
                <p class="item-description">
                    <?php the_content(); ?>

                </p>
                <table class="item-table">
                    <tr>
                        <?php if ( get_post_meta($post->ID,'item_name',true ) ) {
    echo '<tr><th>商品名</th><td>'; 
    echo get_post_meta($post->ID,'item_name',true );
    echo '</td></tr>';
} ?>

                        <?php if ( get_post_meta($post->ID,'item_code',true ) ) {
    
    echo '<tr><th>商品コード</th><td>'; 
    echo get_post_meta($post->ID,'item_code',true );
    echo '</td></tr>';
} ?>

                        <?php if ( get_post_meta($post->ID,'item_capacity',true ) ) {
    
    echo '<tr><th>内容量</th><td>'; 
    echo get_post_meta($post->ID,'item_capacity',true );
    echo '</td></tr>';
} ?>
                        <?php if ( get_post_meta($post->ID,'item_sellby',true ) ) {
    
    echo '<tr><th>賞味期限</th><td>'; 
    echo get_post_meta($post->ID,'item_sellby',true );
    echo '</td></tr>';
} ?>
                        <?php if ( get_post_meta($post->ID,'item_raw',true ) ) {
    
    echo '<tr><th>特定原材料</th><td>'; 
    echo get_post_meta($post->ID,'item_raw',true );
    echo '</td></tr>';
} ?>
                        <?php if ( get_post_meta($post->ID,'item_place',true ) ) {
    
    echo '<tr><th>原料原産地名</th><td>'; 
    echo get_post_meta($post->ID,'item_place',true );
    echo '</td></tr>';
} ?>
                    </tr>
                </table>
            </div>
        </div>
<<<<<<< HEAD
=======
        <!-- end of .events_contents -->
>>>>>>> master
        <?php endwhile; endif; ?>
    </div>
<?php get_template_part('aside'); ?>
<?php get_footer(); ?>