<?php

/**
 * Plugin Name: Anchor to Modal
 * Plugin URI: https://github.com/kzlucas/wp-anchor-to-modal
 * Description: Display a modal based on an anchor in the page URL. Shortcode : [anchor-to-modal anchor title title_class content content_class close_btn_class close_btn_label window_background]
 * Version: 1.0.0
 * Author: Lucas Tesseron
 * Author URI: https://github.com/kzlucas
 * License: The Unlicense
 */

/**
 * Render the modal
 *
 * @return HTML
 */

function anchor_to_modal($atts)
{
	wp_register_style('wp-anchor-to-modal', plugins_url('wp-anchor-to-modal.css', __FILE__));
	wp_enqueue_style('wp-anchor-to-modal');

	extract(shortcode_atts(
		array(
			'anchor' => '',
			'title' => '',
			'title_class' => 'modal-title',
			'content' => '',
			'content_class' => 'modal-content',
			'close_btn_class' => 'modal-close',
			'close_btn_label' => 'Close',
			'window_background' => 'rgba(36, 154, 201, .88)',
		),
		$atts
	));
?>
	<div id="<?php echo $anchor; ?>" class="modal-window" style="background-color:<?php echo $window_background; ?>;">
		<div>
			<div id="modal-title" class="<?php echo $title_class; ?>"><?php echo $title; ?></div>
			<div id="modal-content" class="<?php echo $content_class; ?>"><?php echo $content; ?></div>
			<a id="modal-close" href="#" title="<?php echo $close_btn_label; ?>" class="<?php echo $close_btn_class; ?>"><?php echo $close_btn_label; ?></a>
		</div>
	</div>
<?php
}
add_shortcode('anchor-to-modal', 'anchor_to_modal');