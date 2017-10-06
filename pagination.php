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
  //現在のページ番号が全ページ数よりも少ないときは「次のページ」タグを出力
  if ( $paged < $pages ) {
    echo '<a href="'.get_pagenum_link($paginate_base).'" class="next-btn"><img src="';
    echo bloginfo('template_directory');
    echo '/img/dist/next-btn.svg" alt=""></a>';
  }
 
}
?>

<?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
 <?php endwhile; ?>
    <?php endif; ?>
<!--    <?php next_posts_link('◀'); ?>-->
<div id="pagination" class="pagination">
<?php echo bmPageNavi(); // ページネーション出力
$wp_query = null; 
$wp_query = $temp;
?> 
</div>