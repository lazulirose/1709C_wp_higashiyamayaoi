<div class="l-media">
    <div class="media">
        <div class="media-img">
            <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
        </div>
        <div class="media-text">
            <h3 class="subheading">
                <?php the_title(); ?>
            </h3>
            <p class="square s-media"><time><?php the_time('Y/m/d') ?></time></p>
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
            </p>
        </div>
    </div>
</div>