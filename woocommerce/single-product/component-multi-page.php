<?php
/**
 * Multi-Page Component Template.
 *
 * Override this template by copying it to 'yourtheme/woocommerce/single-product/component-multi-page.php'.
 *
 * @version 3.1.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$component_classes = $product->get_component_classes( $component_id );

?><div id="component_<?php echo $component_id; ?>" class="<?php echo esc_attr( implode( ' ', $component_classes ) ); ?>" data-nav_title="<?php echo esc_attr( apply_filters( 'woocommerce_composite_component_title', $component_data[ 'title' ], $component_id, $product->id ) ); ?>" data-item_id="<?php echo $component_id; ?>" style="display:none;">

	<div class="component_title_wrapper"><?php

		$title = apply_filters( 'woocommerce_composite_component_title', $component_data[ 'title' ], $component_id, $product->id );

		wc_get_template( 'single-product/component-title.php', array(
			'title'   => apply_filters( 'woocommerce_composite_component_step_title', sprintf( __( '<span class="step_index">%d</span> <span class="step_title">%s</span>', 'woocommerce-composite-products' ), $step, $title ), $title, $step, $steps, $product ),
			'toggled' => false,
		), '', WC_CP()->plugin_path() . '/templates/' );

	?></div>

	<div class="component_inner">
		<div class="component_description_wrapper"><?php

			if ( $component_data[ 'description' ] != '' ) {
				wc_get_template( 'single-product/component-description.php', array(
					'description' => apply_filters( 'woocommerce_composite_component_description', wpautop( do_shortcode( wp_kses_post( $component_data[ 'description' ] ) ) ), $component_id, $product->id )
				), '', WC_CP()->plugin_path() . '/templates/' );
			}

		?></div>
		<div class="component_selections"><?php

			/**
			 * woocommerce_composite_component_selections_multi hook (multi-page)
			 *
			 * @hooked wc_cp_add_sorting - 15
			 * @hooked wc_cp_add_filtering - 20
			 * @hooked wc_cp_add_component_options - 25
			 * @hooked wc_cp_add_component_options_pagination - 26
			 * @hooked wc_cp_add_current_selection_details - 30
			 */
			do_action( 'woocommerce_composite_component_selections_multi', $component_id, $product );

		?></div>
	</div>
</div>
