<?php
/**
 * Component Title Template.
 *
 * Override this template by copying it to 'yourtheme/woocommerce/single-product/component-title.php'.
 *
 * @version  3.0.3
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<h2 class="component_title product_title"><?php

	echo $title;

	if ( isset( $toggled ) && $toggled ) {
		?><span class="toggle_component_wrapper">
			<a class="toggle_component" href="#">
				<span class="toggle_component_text"><?php
					echo __( 'Toggle', 'woocommerce-composite-products' );
				?></span>
			</a>
		</span><?php
	}

?></h2>
<hr class="blue" />