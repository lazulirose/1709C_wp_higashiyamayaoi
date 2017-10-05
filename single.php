<<<<<<< HEAD
<?php get_header(); ?>
<main>
    <?php get_template_part('logo'); ?>
    <div class="container">
<?php
if (have_posts()) : while (have_posts()) : the_post();
//base
=======
<?php
if (have_posts()) : while (have_posts()) : the_post();
//singlebase
>>>>>>> master
//例えば下記のように、カテゴリによってdivのクラス名を変えたりできる
//投稿がカテゴリ「1」に属していれば、CSSクラス"post-cat-one"のdivを、
//それ以外なら、CSSクラス"post"のdivを表示
      if (in_category('1')) { ?>
      <div class="post-cat-one">
      <?php } else{ ?>
      <div class="post">
      <?php } ?>
//タイトルとパーマリンクを表示
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
//日時を表示
        <small><?php the_time('Y年n月j日'); ?></small>
//カテゴリをカンマ区切りで表示
        <p class="postmetadata"><?php the_category(', '); ?></p>
//投稿本文を表示
        <div class="entry"><?php the_content(); ?></div>
        </div> //最初のdiv（クラス名post-cat-oneかpost）を閉じ
<?php endwhile; else: ?> //whileを終了し、投稿がないなら以下を表示
      <p>記事が見つかりませんでした。</p>
<<<<<<< HEAD
<?php endif; ?>
    </div>
</main>


<?php get_template_part('aside'); ?>
<?php get_footer(); ?>
=======
<?php endif; ?>
>>>>>>> master
