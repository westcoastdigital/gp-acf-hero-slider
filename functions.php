<?php

// Create our hero slider
function wcd_hero_slider_shortcode()
{
  
  // check if the there are any slides
	if (have_rows('hero_slides')) :

		$content = '<div class="hero-slides">';
  
      // loop through the slides
	while (have_rows('hero_slides')) : the_row();

          // display our slide content
	$content .= '<div class="slide" style="background-image:url(' . get_sub_field('image') . ');">';
	$content .= '<div class="slide-container">';
	$content .= '<h3 class="slide-title">' . get_sub_field('heading') . '</h3>';
	$content .= '<p class="slide-content">' . get_sub_field('content') . '</p>';
              
              // loop through our buttons
	$content .= '<div class="buttons">';
	if (have_rows('buttons')) :
		while (have_rows('buttons')) : the_row();
	$link = get_sub_field('button');
	$content .= '<a class="button" href="' . $link['url'] . '" target="' . $link['target'] . '">' . $link['title'] . '</a>';
	endwhile;
	else : endif;
	$content .= '</div>';
	$content .= '</div>';
	$content .= '</div>';

	endwhile;

	$content .= '</div>';

	else : endif;

	return $content;

}
add_shortcode('hero-slider', 'wcd_hero_slider_shortcode');
