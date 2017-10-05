<?php
/*
Template Name: media
*/
 get_header(); ?>
    <main>
        <?php get_template_part('logo'); ?>
        <div class="l-hero">
            <div id="hero" class="hero">
                <img src="<?php bloginfo('template_directory'); ?>/img/dist/media-hero" alt="media-hero">
            </div>
        </div>
        <div class="container">
            <h2 class="title">メディア情報</h2>
            <?php
		$paged = (int) get_query_var('paged');
		$args = array(
			'posts_per_page' => 5,
			'paged'          => $paged,
			'orderby'        => 'post_date',
			'order'          => 'DESC',
			'post_type'      => 'media',
			'post_status'    => 'publish'
		);
		$the_query = new WP_Query($args);
		if ( $the_query->have_posts() ) :
			while ( $the_query->have_posts() ) : $the_query->the_post();
				get_template_part( 'media_item', get_post_format() );
			endwhile;
		endif;
		wp_reset_postdata();
		?>        
        <?php get_template_part('pagination'); ?>
        </div>
    </main>
    <!--main end-->
    <?php get_template_part('aside'); ?>
    <?php get_footer(); ?>