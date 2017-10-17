<div class="news">
    <div class="news-img">
        <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
    </div>
    <div class="news-text">
        <h3 class="subheading"><?php the_title(); ?></h3>
        <p class="media-text">
           <?php the_content(); ?>
            <br>
                <?php if ( get_post_meta($post->ID,'media_link1',true ) ) {    
    echo get_post_meta($post->ID,'media_link1',true );
} ?><br>
                <?php if ( get_post_meta($post->ID,'media_link2',true ) ) {
    echo get_post_meta($post->ID,'media_link2',true );
} ?>
                <br>
                <?php if ( get_post_meta($post->ID,'media_link3',true ) ) {    
    echo get_post_meta($post->ID,'media_link3',true );
} ?>
    </div>
</div>