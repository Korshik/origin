/**
 * WC Add to Cart JS
 *
 * @link        https://wordpress.org/plugins/ajaxified-cart-woocommerce/
 * @since       1.0.0
 * @package     ABWC_Ajax_Cart
 */

jQuery( function ( $ ) {

	// global wc_add_to_cart_params.
	if ( typeof wc_add_to_cart_params === 'undefined' ) {
		return false;
	}

	$( document ).on( 'click', '.product-type-simple form .single_add_to_cart_button', function ( e ) {
		e.preventDefault();

		var $thisbutton = $( this );
		var $databutton = $( '.abwc-ajax-btn' );

		if ( ! $databutton.attr( 'data-product_id' ) ) {
			return true;
		}

		$thisbutton.removeClass( 'added' );
		$thisbutton.addClass( 'loading' );

		var data = {
			product_id: $databutton.data( 'product_id' ),
			product_sku: $databutton.data( 'product_sku' ),
			quantity: $( '.quantity .qty' ).val()
		};

		// Trigger event.
		$( document.body ).trigger( 'adding_to_cart', [ $thisbutton, data ] );

		// Ajax action.
		$.post( wc_add_to_cart_params.wc_ajax_url.toString().replace( '%%endpoint%%', 'add_to_cart' ), data, function ( response ) {

			if ( ! response ) {
				return;
			}

			var this_page = window.location.toString();

			this_page = this_page.replace( 'add-to-cart', 'added-to-cart' );

			if ( response.error && response.product_url ) {
				window.location = response.product_url;
				return;
			}

			// Redirect to cart option.
			if ( wc_add_to_cart_params.cart_redirect_after_add === 'yes' ) {

				window.location = wc_add_to_cart_params.cart_url;
				return;

			} else {

				$thisbutton.removeClass( 'loading' );

				var fragments = response.fragments;
				var cart_hash = response.cart_hash;

				// Block fragments class.
				if ( fragments ) {
					$.each( fragments, function ( key, val ) {
						$( key ).addClass( 'updating' );
					} );
				}

				// Block widgets and fragments.
				$( '.shop_table.cart, .updating, .cart_totals' ).fadeTo( '400', '0.6' ).block( {
					message: null,
					overlayCSS: {
						opacity: 0.6
					}
				} );

				// Changes button classes.
				$thisbutton.addClass( 'added' );

				// View cart text.
				if ( ! wc_add_to_cart_params.is_cart && $thisbutton.parent().find( '.added_to_cart' ).length === 0 ) {
					$thisbutton.after( ' <a href="' + wc_add_to_cart_params.cart_url + '" class="btn add-to-cart mb-2 btn-black added_to_cart wc-forward" title="' +
					wc_add_to_cart_params.i18n_view_cart + '">' + wc_add_to_cart_params.i18n_view_cart + '</a>' );
				}

				// Replace fragments.
				if ( fragments ) {
					$.each( fragments, function ( key, value ) {
						$( key ).replaceWith( value );
					} );
				}

				// Unblock.
				$( '.widget_shopping_cart, .updating' ).stop( true ).css( 'opacity', '1' ).unblock();

				// Cart page elements.
				$( '.shop_table.cart' ).load( this_page + ' .shop_table.cart:eq(0) > *', function () {

					$( '.shop_table.cart' ).stop( true ).css( 'opacity', '1' ).unblock();

					$( document.body ).trigger( 'cart_page_refreshed' );
				} );

				$( '.cart_totals' ).load( this_page + ' .cart_totals:eq(0) > *', function () {
					$( '.cart_totals' ).stop( true ).css( 'opacity', '1' ).unblock();
				} );

				// Trigger event so themes can refresh other areas.
				$( document.body ).trigger( 'added_to_cart', [ fragments, cart_hash, $thisbutton ] );

                $('.header-mini-cart').show();

			}// End if().

		} );

	} );

} );
