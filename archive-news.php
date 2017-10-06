<?php
/*
Template Name: お知らせ
*/
 get_header(); ?>
    <main>
        <?php get_template_part('logo'); ?>
        <div class="l-hero">
            <div id="hero" class="hero">
        <img src="<?php bloginfo('template_directory'); ?>/img/dist/news-hero.jpg" alt="news-hero">
            </div>
        </div>
        <div class="container">
            <h2 class="title">お知らせ</h2>
            <div class="l-news">
                <?php
		$paged = (int) get_query_var('paged');
		$args = array(
			'posts_per_page' => 5,
			'paged'          => $paged,
			'orderby'        => 'post_date',
			'order'          => 'DESC',
			'post_type'      => 'news',
			'post_status'    => 'publish'
		);
		$the_query = new WP_Query($args);
		if ( $the_query->have_posts() ) :
			while ( $the_query->have_posts() ) : $the_query->the_post();
				get_template_part( 'news_item', get_post_format() );
			endwhile;
		endif;
		wp_reset_postdata();
		?>
            </div>

<?php
    $big = 9999999999;
    $arg = array(
        'prev_text' => __('◀'),
        'next_text' => __('▶'),          
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'current' => max( 1, get_query_var('paged') ),
        'total'   => $wp_query->max_num_pages
    );
    echo paginate_links($arg);
?>
        </div>
    </main>
    <!--main end-->
    <?php get_template_part('aside'); ?>
    <?php get_footer(); ?>