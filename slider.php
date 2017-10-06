<div id="slider" class="slider">
    <?php $header_images = get_uploaded_header_images();

if ($header_images) {
foreach ($header_images as $header_image) {
    echo '<img src="'.$header_image['url'].'" alt="slider_images">';
    }} ?>
</div>
<div class="arrows">
    <img id="prev" src="<?php bloginfo('template_directory'); ?>/img/dist/arrow.svg">
    <img id="next" src="<?php bloginfo('template_directory'); ?>/img/dist/arrow.svg">
</div>