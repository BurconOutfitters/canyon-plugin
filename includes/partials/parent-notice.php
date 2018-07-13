<?php
/**
 * Admin notice that this plugin needs its parent plugin.
 *
 * @package    Canyon_Plugin
 * @subpackage Includes\Partials
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 */

namespace CC_Addon\Includes\Partials;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
} ?>
<div class="notice notice-error">
	<?php
	echo sprintf(
		'<p>%1s %2s <a href="%3s" target="_blank">%4s</a> %5s</p>',
		esc_html( CANYON_CHILD_NAME ),
		esc_html__( 'needs the', 'canyon-plugin' ),
		esc_url( 'https://github.com/ControlledChaos/controlled-chaos-plugin' ),
		esc_html( CANYON_PARENT_NAME ),
		esc_html__( 'to be installed and activated' )
	); ?>
</div>