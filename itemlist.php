<?php
/*
Template Name: 商品登録
*/
?>
    <?php get_header(); ?>
    <main>
        <?php get_template_part('logo'); ?>
        <div class="l-hero">
            <div id="hero" class="hero">
                <img src="https://placehold.jp/350x150.png" alt="">
            </div>
        </div>
        <div class="container">
            <h2 class="title">おすすめ商品</h2>
            <?php $s = $_GET['s']; ?>
            <?php if (is_page() && $post->post_parent) { ?>
            <div class="container__inner">
                <div class="l-recommend l-itemlist">
                    <h3 class="subheading">
                        <?php
$parent_id = $post->post_parent;
if ($parent_id) {
echo get_the_title($parent_id);
} else {
  echo get_the_title();
}
?>
                    </h3>
                    <div class="itemlist">
                        <ul class="itemlist">
                            <li class="itemlist__inner">
                                <a href="" class="item itemlist-item">
                                     <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
                                    <h4 class="item-title"><?php the_title(); ?></h4>
                                    <?php the_content(); ?>
                                    <span class="focus">平成八年度 京都府優秀技能彰<br>(京の現代の名工)受賞</span>
                                    <p class="itemlist-price"><span>486</span>円（税込）</p>
                                    <p>※送料別途、クール便でのお届けとなります。</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <?php } else { ?>
    <main>
        <div class="first-effect effect">
            <p class="l-page-header">
                <?php
$parent_id = $post->post_parent;
if ($parent_id) {
echo get_the_title($parent_id);
} else {
  echo get_the_title();
}
?>
            </p>
            <div class="l-page">
                <div class="l-speaker none">
                    <?php 
 $args = array(
    'post_parent' => 7,
    'post_type' => 'page'
    ); 
    
$posts = get_posts($args);
foreach($posts as $post) {
    $post_id = $post->ID; 
    $page_id = get_page($post_id);
    echo '<a class="speaker-avatar effect" href="'; 
    echo the_permalink();
    echo '">';
    echo the_post_thumbnail();
    echo '<h3 class="speaker-name effect">';
    the_title();
    echo '</h3>';
    echo  '</a>';
};
?>
                </div>
            </div>
        </div>
    </main>
    <?php }?>

    <div class="itemlist">
        <ul class="itemlist">
            <li class="itemlist__inner">
                <a href="" class="item itemlist-item">
                    <img src="https://placehold.jp/200x150.png" alt="">
                    <h4 class="item-title">山のいもわさび風味</h4>
                    <p>“京の底冷え”と呼ばれる風土が育てた聖護院かぶらを、こだわりの利尻の天然昆布と共に、家伝独自の素朴な漬け方で仕上げた、東山八百伊の自信作です。 《120ｇ》
                    </p>
                    <span class="focus">平成八年度 京都府優秀技能彰<br>(京の現代の名工)受賞</span>
                    <p class="itemlist-price"><span>486</span>円（税込）</p>
                    <p>※送料別途、クール便でのお届けとなります。</p>
                </a>
            </li>
            <li class="itemlist__inner">
                <a href="" class="item itemlist-item">
                    <img src="https://placehold.jp/200x150.png" alt="">
                    <h4 class="item-title">山のいもわさび風味</h4>
                    <p>“京の底冷え”と呼ばれる風土が育てた聖護院かぶらを、こだわりの利尻の天然昆布と共に、家伝独自の素朴な漬け方で仕上げた、東山八百伊の自信作です。 《120ｇ》
                    </p>
                    <span class="focus">平成八年度 京都府優秀技能彰<br>(京の現代の名工)受賞</span>
                    <p class="itemlist-price"><span>486</span>円（税込）</p>
                    <p>※送料別途、クール便でのお届けとなります。</p>
                </a>
            </li>
            <li class="itemlist__inner">
                <a href="" class="item itemlist-item">
                    <img src="https://placehold.jp/200x150.png" alt="">
                    <h4 class="item-title">山のいもわさび風味</h4>
                    <p>“京の底冷え”と呼ばれる風土が育てた聖護院かぶらを、こだわりの利尻の天然昆布と共に、家伝独自の素朴な漬け方で仕上げた、東山八百伊の自信作です。 《120ｇ》
                    </p>
                    <span class="focus">平成八年度 京都府優秀技能彰<br>(京の現代の名工)受賞</span>
                    <p class="itemlist-price"><span>486</span>円（税込）</p>
                    <p>※送料別途、クール便でのお届けとなります。</p>
                </a>
            </li>
            <li class="itemlist__inner">
                <a href="" class="item itemlist-item">
                    <img src="https://placehold.jp/200x150.png" alt="">
                    <h4 class="item-title">山のいもわさび風味</h4>
                    <p>“京の底冷え”と呼ばれる風土が育てた聖護院かぶらを、こだわりの利尻の天然昆布と共に、家伝独自の素朴な漬け方で仕上げた、東山八百伊の自信作です。 《120ｇ》
                    </p>
                    <span class="focus">平成八年度 京都府優秀技能彰<br>(京の現代の名工)受賞</span>
                    <p class="itemlist-price"><span>486</span>円（税込）</p>
                    <p>※送料別途、クール便でのお届けとなります。</p>
                </a>
            </li>
            <li class="itemlist__inner">
                <a href="" class="item itemlist-item">
                    <img src="https://placehold.jp/200x150.png" alt="">
                    <h4 class="item-title">山のいもわさび風味</h4>
                    <p>“京の底冷え”と呼ばれる風土が育てた聖護院かぶらを、こだわりの利尻の天然昆布と共に、家伝独自の素朴な漬け方で仕上げた、東山八百伊の自信作です。 《120ｇ》
                    </p>
                    <span class="focus">平成八年度 京都府優秀技能彰<br>(京の現代の名工)受賞</span>
                    <p class="itemlist-price"><span>486</span>円（税込）</p>
                    <p>※送料別途、クール便でのお届けとなります。</p>
                </a>
            </li>
            <li class="itemlist__inner">
                <a href="" class="item itemlist-item">
                    <img src="https://placehold.jp/200x150.png" alt="">
                    <h4 class="item-title">山のいもわさび風味</h4>
                    <p>“京の底冷え”と呼ばれる風土が育てた聖護院かぶらを、こだわりの利尻の天然昆布と共に、家伝独自の素朴な漬け方で仕上げた、東山八百伊の自信作です。 《120ｇ》
                    </p>
                    <span class="focus">平成八年度 京都府優秀技能彰<br>(京の現代の名工)受賞</span>
                    <p class="itemlist-price"><span>486</span>円（税込）</p>
                    <p>※送料別途、クール便でのお届けとなります。</p>
                </a>
            </li>
        </ul>
    </div>
    </div>
        <?php get_template_part('itemnav'); ?>
    </div>
    </div>
    </main>
    <!--main end-->
    <?php get_template_part('aside'); ?>
    <?php get_footer(); ?>
   