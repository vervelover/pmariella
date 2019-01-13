<?php
/**
 * This file controls the Gallery Page
 * @author    Alessio Pangos
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {

	die;

}

/** Enqueue JS scripts */
add_action( 'wp_enqueue_scripts', 'ap_gallery_scripts' );
function ap_gallery_scripts() {
	wp_enqueue_script( 'gallery', get_bloginfo( 'stylesheet_directory' ) . '/assets/scripts/min/gallery.min.js', array( 'jquery' ), CHILD_THEME_VERSION );
	wp_enqueue_script('flexslider');
}

// Add a filter for search results
add_action( 'genesis_before_content', 'ap_search_results_filter', 10 );
function ap_search_results_filter() {
	?>
	<div class="gallery-filter">
		<span class="gallery-filter gallery-filter__cioccolata-filter active"><?php _e('Cioccolata', 'business-pro') ?></span>
		<span class="gallery-filter gallery-filter__torte-filter"><?php _e('Torte', 'business-pro') ?></span>
		<span class="gallery-filter gallery-filter__festivita-filter"><?php _e('Festività', 'business-pro') ?></span>
		<span class="gallery-filter gallery-filter__pasticceria-tradizionale-filter"><?php _e('Pasticceria Tradizionale', 'business-pro') ?></span>
	</div>
	<?php
}

add_action('genesis_entry_content', 'ap_gallery_content',5);
function ap_gallery_content() {
	echo "<div class='slider-container'>";
	echo do_shortcode('[shortcode-flexslider limit=-1 ulid="cioccolata" location="carousel" animation="slide" slideshowspeed="6" categoria="cioccolata"]');
}
add_action('genesis_entry_content', 'ap_gallery_content_festivita', 10);
function ap_gallery_content_festivita() {
	echo do_shortcode('[shortcode-flexslider limit=-1 ulid="festivita" location="carousel" animation="slide" slideshowspeed="6" categoria="festivita"]');
}
add_action('genesis_entry_content', 'ap_gallery_content_pasticceria_tradizionale', 15);
function ap_gallery_content_pasticceria_tradizionale() {
	echo do_shortcode('[shortcode-flexslider limit=-1 ulid="pasticceria-tradizionale" location="carousel" animation="slide" slideshowspeed="6" categoria="pasticceria-tradizionale"]');
}
add_action('genesis_entry_content', 'ap_gallery_content_torte', 20);
function ap_gallery_content_torte() {
	?>
	
		<div style="position:relative;" class="flexslider-torte" id="torte">
			<ul class="products slides">

				<li class="product">
		            <div class="slide-media">
		            	<img src="<?php site_url(); ?>/wp-content/uploads/2018/10/Copia-di-DSC_0826.jpg" class="attachment- size-" alt="Torta della nonna" draggable="false" width="3000" height="3000">
		            </div>
		            <div class="slide-content">
		            </div> 
		        </li>
		        <li class="product">
		            <div class="slide-media">
		            	<img src="<?php site_url(); ?>/wp-content/uploads/2018/10/Copia-di-DSC_0831.jpg" class="attachment- size-" alt="Marengo con cioccolato" draggable="false" width="3000" height="3000">
		            </div>
		            <div class="slide-content">
		            </div> 
		        </li>
		        <li class="product">
		            <div class="slide-media">
		            	<img src="<?php site_url(); ?>/wp-content/uploads/2018/10/Copia-di-DSC_0830.jpg" class="attachment- size-" alt="S.Honoré" draggable="false" width="3000" height="3000">
		            </div>
		            <div class="slide-content">
		            </div> 
		        </li>
		        <li class="product">
		            <div class="slide-media">
		            	<img src="<?php site_url(); ?>/wp-content/uploads/2018/10/DSC_0812.jpg" class="attachment- size-" alt="Tiramisu" draggable="false" width="3000" height="3000">
		            </div>
		            <div class="slide-content">
		            </div> 
		        </li> 
		        <li class="product">
		            <div class="slide-media">
		            	<img src="<?php site_url(); ?>/wp-content/uploads/2018/10/DSC_0793.jpg" class="attachment- size-" alt="Bongo o Profiterol" draggable="false" width="3000" height="3000">
		            </div>
		            <div class="slide-content">
		            </div> 
		        </li>
		        <li class="product">
		            <div class="slide-media">
		            	<img src="<?php site_url(); ?>/wp-content/uploads/2018/10/DSC_0799.jpg" class="attachment- size-" alt="Dolce alla frutta" draggable="false" width="3000" height="3000">
		            </div>
		            <div class="slide-content">
		            </div> 
		        </li>
		        <li class="product">
		            <div class="slide-media">
		            	<img src="<?php site_url(); ?>/wp-content/uploads/2018/10/Copia-di-DSC_0839.jpg" class="attachment- size-" alt="Zuccotto" draggable="false" width="3000" height="3000">
		            </div>
		            <div class="slide-content">
		            </div> 
		        </li> 
		        <li class="product">
		            <div class="slide-media">
		            	<img src="<?php site_url(); ?>/wp-content/uploads/2018/10/DSC_0806.jpg" class="attachment- size-" alt="Nuvola" draggable="false" width="3000" height="3000">
		            </div>
		            <div class="slide-content">
		            </div> 
		        </li>
		        <li class="product">
		            <div class="slide-media">
		            	<img src="<?php site_url(); ?>/wp-content/uploads/2018/10/Copia-di-DSC_0819.jpg" class="attachment- size-" alt="Gianduia" draggable="false" width="3000" height="3000">
		            </div>
		            <div class="slide-content">
		            </div> 
		        </li> 
		        <li class="product">
		            <div class="slide-media">
		            	<img src="<?php site_url(); ?>/wp-content/uploads/2018/10/Copia-di-DSC_0824.jpg" class="attachment- size-" alt="Pannoso" draggable="false" width="3000" height="3000">
		            </div>
		            <div class="slide-content">
		            </div> 
		        </li>
		        <li class="product">
		            <div class="slide-media">
		            	<img src="<?php site_url(); ?>/wp-content/uploads/2018/10/DSC_0803.jpg" class="attachment- size-" alt="Millefoglie" draggable="false" width="3000" height="3000">
		            </div>
		            <div class="slide-content">
		            </div> 
		        </li>
		        <li class="product">
		            <div class="slide-media">
		            	<img src="<?php site_url(); ?>/wp-content/uploads/2018/10/DSC_0814.jpg" class="attachment- size-" alt="Gianduiotto" draggable="false" width="3000" height="3000">
		            </div>
		            <div class="slide-content">
		            </div> 
		        </li>
		        <li class="product">
		            <div class="slide-media">
		            	<img src="<?php site_url(); ?>/wp-content/uploads/2018/10/Copia-di-DSC_0832.jpg" class="attachment- size-" alt="Marengo" draggable="false" width="3000" height="3000">
		            </div>
		            <div class="slide-content">
		            </div> 
		        </li>
		        <li class="product">
		            <div class="slide-media">
		            	<img src="<?php site_url(); ?>/wp-content/uploads/2018/10/DSC_0796.jpg" class="attachment- size-" alt="Mimosa" draggable="false" width="3000" height="3000">
		            </div>
		            <div class="slide-content">
		            </div> 
		        </li>
		        <li class="product">
		            <div class="slide-media">
		            	<img src="<?php site_url(); ?>/wp-content/uploads/2018/10/DSC_0801.jpg" class="attachment- size-" alt="Millefoglie Toscano" draggable="false" width="3000" height="3000">
		            </div>
		            <div class="slide-content">
		            </div> 
		        </li>

			</ul>
		</div>
	</div>
	<?php 
}
// Run the Genesis loop
genesis();