<?php
/**
 * Shipping Calculator
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.8
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $woocommerce;

if ( get_option('woocommerce_enable_shipping_calc')=='no' || ! $woocommerce->cart->needs_shipping() )
	return;
?>

<?php do_action( 'woocommerce_before_shipping_calculator' ); ?>

<form class="shipping_calculator" action="<?php echo esc_url( $woocommerce->cart->get_cart_url() ); ?>" method="post">

	<div class="heading-content"><h4 class="title"><a href="#" class="shipping-calculator-button"><span><?php _e( 'Calculate Shipping', GETTEXT_DOMAIN ); ?></span></a></h4></div>

	<section class="shipping-calculator-form">
		<div class="divider10"></div>
		<p class="form-row form-row-wide">
			<select name="calc_shipping_country" id="calc_shipping_country" class="country_to_state form-control" rel="calc_shipping_state">
				<option value=""><?php _e( 'Select a country&hellip;', GETTEXT_DOMAIN ); ?></option>
				<?php
					foreach( $woocommerce->countries->get_allowed_countries() as $key => $value )
						echo '<option value="' . esc_attr( $key ) . '"' . selected( $woocommerce->customer->get_shipping_country(), esc_attr( $key ), false ) . '>' . esc_html( $value ) . '</option>';
				?>
			</select>
		</p>

		<p class="form-row form-row-wide">
			<?php
				$current_cc = $woocommerce->customer->get_shipping_country();
				$current_r  = $woocommerce->customer->get_shipping_state();
				$states     = $woocommerce->countries->get_states( $current_cc );

				// Hidden Input
				if ( is_array( $states ) && empty( $states ) ) {

					?><input type="hidden" name="calc_shipping_state" id="calc_shipping_state" placeholder="<?php _e( 'State / county', GETTEXT_DOMAIN ); ?>" /><?php

				// Dropdown Input
				} elseif ( is_array( $states ) ) {

					?><span>
						<select name="calc_shipping_state" id="calc_shipping_state" placeholder="<?php _e( 'State / county', GETTEXT_DOMAIN ); ?>">
							<option value=""><?php _e( 'Select a state&hellip;', GETTEXT_DOMAIN ); ?></option>
							<?php
								foreach ( $states as $ckey => $cvalue )
									echo '<option value="' . esc_attr( $ckey ) . '" ' . selected( $current_r, $ckey, false ) . '>' . __( esc_html( $cvalue ), GETTEXT_DOMAIN ) .'</option>';
							?>
						</select>
					</span><?php

				// Standard Input
				} else {

					?><input type="text" class="form-control" value="<?php echo esc_attr( $current_r ); ?>" placeholder="<?php _e( 'State / county', GETTEXT_DOMAIN ); ?>" name="calc_shipping_state" id="calc_shipping_state" /><?php

				}
			?>
		</p>

		<?php if ( apply_filters( 'woocommerce_shipping_calculator_enable_city', false ) ) : ?>

			<p class="form-row form-row-wide">
				<input type="text" class="form-control" value="<?php echo esc_attr( $woocommerce->customer->get_shipping_city() ); ?>" placeholder="<?php _e( 'City', GETTEXT_DOMAIN ); ?>" name="calc_shipping_city" id="calc_shipping_city" />
			</p>

		<?php endif; ?>

		<?php if ( apply_filters( 'woocommerce_shipping_calculator_enable_postcode', true ) ) : ?>

			<p class="form-row form-row-wide">
				<input type="text" class="form-control" value="<?php echo esc_attr( $woocommerce->customer->get_shipping_postcode() ); ?>" placeholder="<?php _e( 'Postcode / Zip', GETTEXT_DOMAIN ); ?>" name="calc_shipping_postcode" id="calc_shipping_postcode" />
			</p>

		<?php endif; ?>

		<p><button type="submit" name="calc_shipping" value="1" class="button1 btn btn-normal"><?php _e( 'Update Totals', GETTEXT_DOMAIN ); ?></button></p>

		<?php $woocommerce->nonce_field('cart') ?>
	</section>
</form>

<?php do_action( 'woocommerce_after_shipping_calculator' ); ?>