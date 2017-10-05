<?php
/*
Template Name: about
*/
?>
    <?php get_header(); ?>
    <main>
        <?php get_template_part('logo'); ?>
        <div class="l-hero">
            <div id="hero" class="hero">
                <img src="<?php bloginfo('template_directory'); ?>/img/dist/about-hero" alt="about-hero">
            </div>
        </div>
        <div class="container">
            <h2 class="title">会社概要</h2>
            <div class="about">
                <table class="table" height=30>
                    <tr>
                        <th vAlign="middle">商　号</th>
                        <td valign="middle">有限会社　東山八百伊</td>
                    </tr>
                    <tr>
                        <th valign="middle">創　業</th>
                        <td valign="middle">昭和9年2月10日</td>
                    </tr>
                    <tr>
                        <th valign="middle">設　立</th>
                        <td valign="middle">昭和45年5月4日</td>
                    </tr>
                    <tr>
                        <th valign="middle">所在地</th>
                        <td valign="middle">京都府京都市東山区東大路松原上ル4丁目毘沙門町44</td>
                    </tr>
                    <tr>
                        <th valign="middle">資本金</th>
                        <td valign="middle">300万円</td>
                    </tr>
                    <tr>
                        <th valign="middle">代表者</th>
                        <td valign="middle">村井 季亮</td>
                    </tr>
                    <tr>
                        <th valign="middle">営業品目京漬物製造販売</th>
                        <td valign="middle">千枚漬、すぐき、しば漬、懐石たくあん、その他</td>
                    </tr>
                    <tr>
                        <th valign="middle">会社沿革</th>
                        <td valign="middle">
                            昭和09年 初代　村井久吉が現所在地にて創業する<br> 昭和45年 二代目　村井明　有限会社　東山八百伊を設立<br> 昭和51年 京滋漬物品評会にて農林流通局長賞受賞<br> 昭和54年 現住所に店舗新築<br> 平成06年 新工場を新築<br> 平成08年 京都府優秀技能賞(京の現代の名工)を受賞<br> 平成10年 現三代目　村井季亮　東山高台寺に新店舗開設</td>
                    </tr>
                </table>
            </div>
        </div>
    </main>
    <!--main end-->
<?php get_template_part('aside'); ?>
<?php get_footer(); ?>