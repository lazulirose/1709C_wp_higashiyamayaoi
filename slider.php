<?php $header_images = get_uploaded_header_images();

if ($header_images) {
	echo '<div class="l-slider">';
		echo '<div id="slider" class="slider__inner">';
		echo '<ul>';
			foreach ($header_images as $header_image) {
				echo '<li><img src="'.$header_image['url'].'" /></li>';
			}
		echo '</ul>';
		echo '<a id="prev">prev</a>';
		echo '<a id="next">next</a>';
	echo '</div>';
	echo '</div>';
} ?>
