<?php
/*
Template Name: test
*/
 get_header(); ?>

<div class="container">
            <h2 class="title">メディア情報</h2>
            <?php
		$paged = (int) get_query_var('paged');
		$args = array(
			'posts_per_page' => 3,
			'paged'          => $paged,
			'orderby'        => 'post_date',
			'order'          => 'DESC',
			'post_type'      => 'media',
			'post_status'    => 'publish'
		);
		$wp_query = new WP_Query($args);
		if ( $wp_query->have_posts() ) :
			while ( $wp_query->have_posts() ) : $wp_query->the_post();
				get_template_part( 'media_item', get_post_format() );
			endwhile;
		endif;
		wp_reset_postdata();
		?>        
</div>

<?php
    $big = 9999999999;
    $arg = array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'current' => max( 1, get_query_var('paged') ),
        'total'   => $wp_query->max_num_pages
    );
    echo paginate_links($arg);
?>

    <?php get_template_part('aside'); ?>
    <?php get_footer(); ?>