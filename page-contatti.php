<?php
/**
 * This file controls the Contacts Page
 * @author    Alessio Pangos
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {

	die;

}

remove_action( 'genesis_before_footer_wrap', 'business_before_footer_widget_area', 5 );

//* Add woocommere body classes to the head
add_filter('body_class', 'ap_woo_body_class');
function ap_woo_body_class($classes) {

	$classes[] = 'contatti';
	return $classes;

}


add_action('genesis_entry_content', 'ap_contatti_content');
function ap_contatti_content() {
	?>
	<div class="one-half first">
		<h4>Contattaci</h4>
		<h6>Indirizzo:</h6>
		<p>Via Roma, 480, 59100 Prato PO</p>
		<h6>Telefono / Fax:</h6>
		<p>0574 635722</p>
		<h6>Orario di apertura:</h6>
		<p>Lun - Dom 05:00/20:30</p>
	</div>
	<div class="one-half">
		<h4>Inviaci un messaggio</h4>
		<?php echo do_shortcode('[contact-form-7 id="5" title="Modulo di contatto 1"]') ?>
	</div>
	<?php 
}

add_action( 'genesis_after_content_sidebar_wrap', 'ap_google_maps_embed');
function ap_google_maps_embed() {
	?>
	<iframe style="margin:0 auto;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2877.1278840527343!2d11.075131315426606!3d43.853177979114825!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132a58ae7a84af81%3A0x7db29a44334cdd9b!2sPasticceria+Mariella!5e0!3m2!1sit!2sit!4v1540029344811" width="1920" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	<?php 
}

// Run the Genesis loop
genesis();