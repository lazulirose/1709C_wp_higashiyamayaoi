<?php while (have_posts()) : the_post(); ?>
<div class="article">
<h2><?php the_title(); ?></h2>
<p class="date"><?php the_time('Y.m.d'); ?></p>
<?php the_content(); ?>
<!-- /.article --></div>
<?php endwhile; ?>