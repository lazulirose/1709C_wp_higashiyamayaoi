<?php
/*
Template Name: お知らせ
*/
 get_header(); ?>
    <main>
        <?php get_template_part('logo'); ?>
        <div class="l-hero">
            <div id="hero" class="hero">
        <img src="<?php bloginfo('template_directory'); ?>/img/dist/news-hero" alt="news-hero">
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
			'post_type'      => 'media',
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
            <div id="pagination">
            <?php get_template_part('pagination'); ?>
            </div>
        </div>
    </main>
    <!--main end-->
    <?php get_template_part('aside'); ?>
    <?php get_footer(); ?>