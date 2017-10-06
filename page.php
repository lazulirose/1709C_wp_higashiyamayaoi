<?php get_header(); ?>
<?php
if (have_posts()) : while (have_posts()) : the_post(); ?>
    <main>
        <div class="container">
        <h2 class="title"><?php the_title(); ?></h2>
           <div class="l-page">
            <?php the_content(); ?>
            </div>
        </div>
    </main>
    <!--main end-->
    <?php endwhile; endif; ?>
    <?php get_template_part('aside'); ?>
    <?php get_footer(); ?>