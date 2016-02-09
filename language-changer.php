<?php
/**
 * Plugin Name: Language changer
 * Description: Different language on admin and frontend
 * Version:     1.0
 * Author:      Andras MATAI
 * Author URI:  http://mataiandras.com/
 */

function set_my_locale($locale) {

	if (is_admin() ) {
		return 'en_US';
	} else {
		return 'hu_HU';
	}
	//return $locale;

}
add_filter( 'locale', 'set_my_locale' );
