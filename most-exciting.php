<?php
/*
 * Plugin Name: Most Happy
 * Plugin URI: trepmal.com
 * Description: Make WordPress more happy
 * Version: 2013.03.30
 * Author: Kailey Lampert and Ryan Hellyer
 * Author URI: kaileylampert.com
 * License: GPLv2 or later
 * TextDomain:
 * DomainPath:
 * Network: false
 */

add_filter( 'gettext', 'most_happy', 99 );
function most_happy( $t ) {
	return "$t :)";
}
