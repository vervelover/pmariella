<?php

/**
 *
 * Custom Flexslider implementation. Requires the Advanced Custom Fields plugin.
 *
 * @author Olaf Lederer, Alessio Pangos
 * @link https://www.web-development-blog.com/archives/wordpress-image-slider/
 *
 */

// Enqueue script only if flexslider shortcode is present

// This is commented out because Woocommerce already has flexslider registered.
// Use the following code only if you are not already using Woocommerce

// add_action('init', 'register_my_scripts');
// function register_my_scripts() {
// wp_register_script( 'flexslider', get_stylesheet_directory_uri() . '/includes/jquery.flexslider-min.js', array('jquery'), true );
// }
 

/*add_action('wp_footer', 'ap_add_flexslider_script', 90);
function ap_add_flexslider_script() {
	global $add_fs_script, $fs_atts;
	if ($add_fs_script) {
		$speed = $fs_atts['slideshowspeed']*1000;
		echo "<script type=\"text/javascript\">
            jQuery(document).ready(function($) {";

            	if( $fs_atts['location'] == 'carousel' ) {

					echo "$('.flexslider-cioccolata').flexslider({
		            		animation: 'slide',
		            		slideshow: true,
		            		controlNav: true,
		                    touch: true,
		                    itemWidth: 300,		                 
		                    itemMargin: 10,
		                    move: 1,
		                    directionNav: true
		            	});";

		            echo "$('.flexslider-pasticceria-tradizionale').flexslider({
		            		animation: 'slide',
		            		slideshow: true,
		            		controlNav: true,
		                    touch: true,
		                    itemWidth: 300,		                 
		                    itemMargin: 10,
		                    move: 1,
		                    directionNav: true
		            	});";

		            echo "$('.flexslider-festivita').flexslider({
		            		animation: 'slide',
		            		slideshow: true,
		            		controlNav: true,
		                    touch: true,
		                    itemWidth: 300,		                 
		                    itemMargin: 10,
		                    move: 1,
		                    directionNav: true
		            	});";

		            echo "$('.flexslider-torte').flexslider({
		            		animation: 'slide',
		            		slideshow: true,
		            		controlNav: true,
		                    touch: true,
		                    itemWidth: 300,		                 
		                    itemMargin: 10,
		                    move: 1,
		                    directionNav: true
		            	});";

				} 

        echo "            
	            
            });

        </script>";
		wp_print_scripts('flexslider');
	} else {
		return;
	}
}*/

// Create the shortcode
add_shortcode('shortcode-flexslider', 'ap_flexslider_shortcode');

function ap_flexslider_shortcode($atts = null) {
	global $add_fs_script, $fs_atts, $woocommerce;
	$add_fs_script = true;
	$fs_atts       = shortcode_atts(
		array(
			'location'       => '',
			'limit'          => -1,
			'ulid'           => 'flexid',
			'animation'      => 'slide',
			'slideshowspeed' => 5,
			'categoria'		 => ''
		), $atts, 'shortcode-flexslider'
	);

	

	$args = array(
		'post_type'      => 'product',
		'product_cat'	 => $fs_atts['categoria'],
		'posts_per_page' => -1,
		'orderby'        => 'rand',
	);
	
	
	$the_query = new WP_Query($args);
	$slides    = array();
	if ($the_query->have_posts()) {
		
		while ($the_query->have_posts()) {
			$the_query->the_post();

			$slideTitle = get_the_title();
           	$slideImg = woocommerce_get_product_thumbnail();
            $product = wc_get_product(get_the_ID());
            $slideLink = get_the_permalink();
        
            $slides[] = '
            <li class="product">
            	<a href="' . $slideLink . '">
                	<div class="slide-media">'.$slideImg.'</div>
                	<div class="slide-content">
                    </div>
                </a>
            </li>';
            $hasPosts = true;
            $ulSlides = '<ul class="products slides">';
			
		}
		
	}

	wp_reset_postdata();
	return '
	<div style="position:relative;" class="flexslider-'.$fs_atts['ulid'].'" id="'.$fs_atts['ulid'].'">
		'.$ulSlides.'
			'.implode('', $slides).'
		</ul>
	</div>';
}
