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
			'posts_per_page' => 3,
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


                <?php global $wp_rewrite;
$paginate_base = get_pagenum_link(1);
if (strpos($paginate_base, '?') || ! $wp_rewrite->using_permalinks()) {
$paginate_format = '';
$paginate_base = add_query_arg('paged', '%#%');
} else {
$paginate_format = (substr($paginate_base, -1 ,1) == '/' ? '' : '/') .
user_trailingslashit('page/%#%/', 'paged');;
$paginate_base .= '%_%';
}?>
                <?php if ( $wp_query->have_posts() ) : ?>
                <?php 

global $paged;
if(empty($paged)) $paged = 1;
 
global $wp_query;
$pages = $wp_query->max_num_pages;
if(!$pages){
  $pages = 1;
}
if($pages != 1) {
  if ( $pages == $paged ) {
    $next_page_num = $paged;
 } else {
    $next_page_num = $paged + 1;
 } 
}
            
?>
                <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); 
?>
                <?php endwhile; ?>
                <?php
    $next_link = get_next_posts_link('<img src="' .get_template_directory_uri(). '/img/dist/next-btn.svg" alt="">');

    if ( isset( $next_link ) ) {
        echo '<ul id="pagination">', PHP_EOL;
        if( isset( $next_link ) ) {
            echo '<li>',$next_link,'</li>', PHP_EOL;
        }
        echo '</ul>', PHP_EOL;
    }
?>
                    <?php endif; ?>

                    <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
                    <?php endwhile; ?>
                    <?php endif; ?>

                    <div id="pagination" class="pagination">
                        <?php
    echo paginate_links( array(
    'prev_text' => __('◀'),
    'next_text' => __('▶'),   
    'base' => $paginate_base,
    'format' => $paginate_format,
    'total' => $wp_query->max_num_pages,
    'mid_size' => 5,
    'current' => ($paged ? $paged : 1),
  ));
    ?>
                    </div>
        </div>
    </main>
    <!--main end-->
    <?php get_template_part('aside'); ?>
    <?php get_footer(); ?>