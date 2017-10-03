<?php
/*
Template Name: media
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
<?php
$param = array(
    'posts_per_page' => 2,
    'paged'          => $paged,
    'post_type'      => 'media',
    'orderby'        => 'post_date',
    'order'          => 'DESC'
);
$wp_query->query($param); ?>
   
 <?php if ( $wp_query->have_posts() ) : ?>
        <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
 <?php endwhile; ?>
    <?php endif; ?>
<?php echo bmPageNavi(); // ページネーション出力
//echo '<div class="l-pagination">
//            <a href="' .get_pagenum_link($paged_s - 1) .'" class="next-btn"><img src="./img/next-btn.svg" alt="">>>></a>"';
//printf('<a href="">%1$s</a>', $total);
$wp_query = null; 
$wp_query = $temp;
?>        
           
            </div>
    </main>
    <!--main end-->
    <?php get_template_part('aside'); ?>
    <?php get_footer(); ?>