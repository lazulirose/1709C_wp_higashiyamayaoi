<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <div class="article">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <p class="date"><?php the_time('Y.m.d'); ?></p>
        <?php the_content(); ?>
        <!-- /.article --></div>
    <?php endwhile; ?>
    <div class="navPage">
        <div class="prev"><?php previous_posts_link(); ?></div>
        <div class="next"><?php next_posts_link(); ?></div>
    </div><!--end of .navPage-->
<?php else: ?>
    <div class="article">
        <p>現在お知らせはありません。</p>
    <!-- /.article --></div>
<?php endif; ?>