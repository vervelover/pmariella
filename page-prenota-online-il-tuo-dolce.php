<?php
/**
 * This file controls the Prenota Ora il Tuo Dolce Page
 * @author    Alessio Pangos
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {

	die;

}

// remove_action( 'genesis_before_content_sidebar_wrap', 'business_page_header' );

// Run the Genesis loop
genesis();
