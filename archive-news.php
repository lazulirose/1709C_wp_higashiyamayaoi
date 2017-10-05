<?php
/*
Template Name: news
*/
 get_header(); ?>
    <main>
        <?php get_template_part('logo'); ?>
        <div class="l-hero">
            <div id="hero" class="hero">
                <img src="https://placehold.jp/350x150.png" alt="">
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
<?php global $wp_rewrite;
$paginate_base = get_pagenum_link(1);
if (strpos($paginate_base, '?') || ! $wp_rewrite->using_permalinks()) {
$paginate_format = '';
$paginate_base = add_query_arg('paged', '%#%');
} else {
$paginate_format = (substr($paginate_base, -1 ,1) == '/' ? '' : '/') .
user_trailingslashit('page/%#%/', 'paged');;
$paginate_base .= '%_%';
}
echo paginate_links( array(
'base' => $paginate_base,
'format' => $paginate_format,
'total' => $wp_query->max_num_pages,
'mid_size' => 5,
'current' => ($paged ? $paged : 1),
)); ?>
</div>
<div class="pagination-box right">
 <?php if (function_exists('responsive_pagination')) {
  responsive_pagination($wp_query->max_num_pages);
} ?>
</div>
<?php
$param = array(
    'posts_per_page' => 2,
    'paged'          => $paged,
    'post_type'      => 'news',
    'orderby'        => 'post_date',
    'order'          => 'DESC'
);
$wp_query->query($param); ?>
   
 <?php if ( $wp_query->have_posts() ) : ?>
        <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
 <?php endwhile; ?>
    <?php endif; ?>

<!-- <?php echo bmPageNavi(); // ページネーション出力
$wp_query = null; 
$wp_query = $temp;
?> -->       
           
            </div>
    </main>
    <!--main end-->
    <?php get_template_part('aside'); ?>
    <?php get_footer(); ?>