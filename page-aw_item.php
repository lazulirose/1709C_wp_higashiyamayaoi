<?php get_header(); ?>
<div id="main">
 
<?php query_posts('post_type=aw_item'); ?>

 
<?php if(have_posts()): while(have_posts()): the_post(); ?>


<div class="events_contents">
<h2 class="<?php echo esc_attr(get_post_type()); ?>"><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h2>

<?php if(has_post_thumbnail()): ?>

<p><a href="<?php the_permalink(); ?>" ><?php the_post_thumbnail('medium'); ?></a></p>

<?php endif; ?>

</div><!-- end of .events_contents -->

<?php endwhile; endif; ?>

</div><!--/#main -->
<?php get_footer(); ?>