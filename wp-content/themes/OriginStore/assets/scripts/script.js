var $ = jQuery.noConflict();

const couponAppliedEvent = new Event('couponApplied')

;(function(ns){
    /**
     * mb_strwidth
     * @param String
     * @return int
     * @see http://php.net/manual/ja/function.mb-strwidth.php
     */
    var mb_strwidth = function(str){
        var i=0,l=str.length,c='',length=0;
        for(;i<l;i++){
            c=str.charCodeAt(i);
            if(0x0000<=c&&c<=0x0019){
                length += 0;
            }else if(0x0020<=c&&c<=0x1FFF){
                length += 1;
            }else if(0x2000<=c&&c<=0xFF60){
                length += 2;
            }else if(0xFF61<=c&&c<=0xFF9F){
                length += 1;
            }else if(0xFFA0<=c){
                length += 2;
            }
        }
        return length;
    };

    /**
     * mb_strimwidth
     * @param String
     * @param int
     * @param int
     * @param String
     * @return String
     * @see http://www.php.net/manual/ja/function.mb-strimwidth.php
     */
    var mb_strimwidth = function(str,start,width,trimmarker){
        if(typeof trimmarker === 'undefined') trimmarker='';
        var trimmakerWidth = mb_strwidth(trimmarker),i=start,l=str.length,trimmedLength=0,trimmedStr='';
        for(;i<l;i++){
            var charCode=str.charCodeAt(i),c=str.charAt(i),charWidth=mb_strwidth(c),next=str.charAt(i+1),nextWidth=mb_strwidth(next);
            trimmedLength += charWidth;
            trimmedStr += c;
            if(trimmedLength+trimmakerWidth+nextWidth>width){
                trimmedStr += trimmarker;
                break;
            }
        }
        return trimmedStr;
    };
    ns.mb_strwidth   = mb_strwidth;
    ns.mb_strimwidth = mb_strimwidth;
})(window);

function iOS() {
    return [
            'iPad Simulator',
            'iPhone Simulator',
            'iPod Simulator',
            'iPad',
            'iPhone',
            'iPod'
        ].includes(navigator.platform)
        // iPad on iOS 13 detection
        || (navigator.userAgent.includes("Mac") && "ontouchend" in document)
}
$( document ).ready( function () {
    if (!iOS()) {
        $('#applepasslink').hide()
    } else {
        $('#applepasslink').show()
    }
})

$( document ).ready( function () {
    $( 'body' ).on( 'added_to_cart', function ( event, fragments, cart_hash, $button ) {
        if (document.querySelector('.product-card__image[data-id="'+$button.data( 'product_id' )+'"]') != null) {
            addToCartWithMagic('.product-card__image[data-id="'+$button.data( 'product_id' )+'"]')
        }
        if (document.querySelector('.product-page__image__inner[data-id="'+$button.data( 'product_id' )+'"]') != null) {
            if (document.body.clientWidth >= 992) {
                addToCartWithMagic('.product-page__image__inner[data-id="'+$button.data( 'product_id' )+'"]')
            } else {
                if (document.querySelector('.cer-page__mobile-big-image') != null) {
                    addToCartWithMagic('.cer-page__mobile-big-image')
                } else {
                    addToCartWithMagic('.swiper-slide.product-page__main__carousel__slide.swiper-slide-active')
                }
            }
        }
    } );
} );

$(document).on('click', '.bag-modal .is--close', function (e) {
    bagModalOpen = false;
    setBagModalState();
})

$(document).on('click', '.btn-spn-up.from-button', function (e) {
    var spinInput = $(this).parents('.quantity').find('input')
    if (!spinInput.val() || spinInput.val()==="" || isNaN(parseInt(spinInput.val()))) {
        spinInput.val(0)
    }
    var spinValue = parseInt(spinInput.val())
    var max = parseInt(spinInput.attr('max'))
    var price = parseInt(spinInput.data('price'))
    if (!max || spinValue < max) {
        spinInput.val(spinValue+parseInt(spinInput.attr('step')))
    } else if (max && spinValue > max) {
        spinInput.val(max)
    }
    $('button[name="add-to-cart"]').text("В корзину — " + price*spinInput.val() + " р.")
})

$(document).on('click', '.btn-spn-down.from-button', function (e) {
    var spinInput = $(this).parents('.quantity').find('input')
    if (!spinInput.val() || spinInput.val()==="" || isNaN(parseInt(spinInput.val()))) {
        spinInput.val(0)
    }
    var spinValue = parseInt(spinInput.val())
    var min = parseInt(spinInput.attr('min'))
    var price = parseInt(spinInput.data('price'))
    if (!min || spinValue > min) {
        spinInput.val(spinValue-parseInt(spinInput.attr('step')))
    } else if (min && spinValue < min) {
        spinInput.val(min)
    }
    $('button[name="add-to-cart"]').text("В корзину — " + price*spinInput.val() + " р.")
})

$(document).on('click', '.btn-spn-up.from-cart', function (e) {
    showMainLoader();
    var updateCartBtn = $(this).parents('.woocommerce-cart-form').find('button[name="update_cart"]')
    updateCartBtn.removeAttr( 'disabled' )
    var spinInput = $(this).parents('.quantity').find('input')
    if (!spinInput.val() || spinInput.val()==="" || isNaN(parseInt(spinInput.val()))) {
        spinInput.val(0)
    }
    var spinValue = parseInt(spinInput.val())
    var max = parseInt(spinInput.attr('max'))
    if (!max || spinValue < max) {
        spinInput.val(spinValue+parseInt(spinInput.attr('step')))
    } else if (max && spinValue > max) {
        spinInput.val(max)
    }
    updateCartBtn.trigger("click");
})

$(document).on('click', '.btn-spn-down.from-cart', function (e) {
    showMainLoader();
    var updateCartBtn = $(this).parents('.woocommerce-cart-form').find('button[name="update_cart"]')
    updateCartBtn.removeAttr( 'disabled' )
    var spinInput = $(this).parents('.quantity').find('input')
    if (!spinInput.val() || spinInput.val()==="" || isNaN(parseInt(spinInput.val()))) {
        spinInput.val(0)
    }
    var spinValue = parseInt(spinInput.val())
    var min = parseInt(spinInput.attr('min'))
    if (!min || spinValue > min) {
        spinInput.val(spinValue-parseInt(spinInput.attr('step')))
    } else if (min && spinValue < min) {
        spinInput.val(min)
    }
    updateCartBtn.trigger("click");
})

$(document).on('click', '.btn-spn-up.from-mini-cart', function (e) {
    var spinInput = $(this).parents('.quantity').find('input')
    if (!spinInput.val() || spinInput.val()==="" || isNaN(parseInt(spinInput.val()))) {
        spinInput.val(0)
    }
    var spinValue = parseInt(spinInput.val())
    var max = parseInt(spinInput.attr('max'))
    if (!max || spinValue < max) {
        spinInput.val(spinValue+parseInt(spinInput.attr('step')))
    } else if (max && spinValue > max) {
        spinInput.val(max)
    }
    var new_qty = parseInt(spinInput.val())

    if (new_qty !== spinValue) {
        e.preventDefault();
        setBagLoadedState(true)
        var product_id = $(this).attr("data-product_id"),
            cart_item_key = $(this).attr("data-cart_item_key"),
            product_container = $(this).parents('.mini_cart_item');
        // Add loader
        product_container.block({
            message: null,
            overlayCSS: {
                cursor: 'none'
            }
        });
        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: '/wp-admin/admin-ajax.php',
            data: {
                action: "change_item_quantity",
                product_id: product_id,
                cart_item_key: cart_item_key,
                qty: new_qty
            },
            success: function(response) {
                if ( ! response || response.error )
                    return;

                var fragments = response.fragments;

                // Replace fragments
                if ( fragments ) {
                    $.each( fragments, function( key, value ) {
                        $( key ).replaceWith( value );
                    });
                    setBagModalContentHeight();
                }
            }
        }).always(function() {
            setBagLoadedState(false)
        });
    }
})

$(document).on('click', '.btn-spn-down.from-mini-cart', function (e) {
    var spinInput = $(this).parents('.quantity').find('input')
    if (!spinInput.val() || spinInput.val()==="" || isNaN(parseInt(spinInput.val()))) {
        spinInput.val(0)
    }
    var spinValue = parseInt(spinInput.val())
    var min = parseInt(spinInput.attr('min'))
    if (!min || spinValue > min) {
        spinInput.val(spinValue-parseInt(spinInput.attr('step')))
    } else if (min && spinValue < min) {
        spinInput.val(min)
    }
    var new_qty = parseInt(spinInput.val())

    if (new_qty !== spinValue) {
        e.preventDefault();
        setBagLoadedState(true)
        var product_id = $(this).attr("data-product_id"),
            cart_item_key = $(this).attr("data-cart_item_key"),
            product_container = $(this).parents('.mini_cart_item');
        // Add loader
        product_container.block({
            message: null,
            overlayCSS: {
                cursor: 'none'
            }
        });
        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: '/wp-admin/admin-ajax.php',
            data: {
                action: "change_item_quantity",
                product_id: product_id,
                cart_item_key: cart_item_key,
                qty: new_qty
            },
            success: function(response) {
                if ( ! response || response.error )
                    return;

                var fragments = response.fragments;

                // Replace fragments
                if ( fragments ) {
                    $.each( fragments, function( key, value ) {
                        $( key ).replaceWith( value );
                    });
                    setBagModalContentHeight();
                }
            }
        }).always(function() {
            setBagLoadedState(false)
        });
    }
})

$(document).on('submit', '.coupon_form', function (e) {
    setBagLoadedState(true)
    e.preventDefault(); // avoid to execute the actual submit of the form.
    var form = $(this);
    var coupon = form.find('.coupon_code').val()
    if (coupon == "") {
        return
    }
    var data = {
        action : "apply_coupon",
        couponcode : coupon,
    }
    $.ajax({
        type: 'POST',
        dataType: 'json',
        url: '/wp-admin/admin-ajax.php',
        data: data,
        success: function(response) {
            if ( ! response || response.error )
                return;

            if (response.applied) {
                document.body.dispatchEvent(couponAppliedEvent)
            }

            var fragments = response.fragments;

            // Replace fragments
            if ( fragments ) {
                $.each( fragments, function( key, value ) {
                    $( key ).replaceWith( value );
                });
                setBagModalContentHeight();
            }
        }
    }).always(function() {
        setBagLoadedState(false)
    });
})

$(document).on('click', '.remove-coupon-btn', function (e) {
    setBagLoadedState(true)
    var data = {
        action: "remove_coupon",
        couponcode: $(this).data("coupon"),
    }
    $.ajax({
        type: 'POST',
        dataType: 'json',
        url: '/wp-admin/admin-ajax.php',
        data: data,
        success: function(response) {
            if ( ! response || response.error )
                return;

            var fragments = response.fragments;

            // Replace fragments
            if ( fragments ) {
                $.each( fragments, function( key, value ) {
                    $( key ).replaceWith( value );
                });
                setBagModalContentHeight();
            }
        }
    }).always(function() {
        setBagLoadedState(false)
    });
})

jQuery( function ( $ ) {
    $( document ).on( 'click', 'button.add_to_wishlist_not_login', function ( e ) {
        e.preventDefault();
        location.href = $(this).data("href");
    })
})

jQuery( function ( $ ) {
    $( document ).on( 'click', '.product-card__content__brand', function ( e ) {
        e.preventDefault();
        location.href = $(this).data("href");
    })
})

$(document).on('click', '.mini_cart_item_remove', function (e) {
    e.preventDefault();
    setBagLoadedState(true)

    var product_id = $(this).attr("data-product_id"),
        cart_item_key = $(this).attr("data-cart_item_key"),
        product_container = $(this).parents('.mini_cart_item');

    // Add loader
    product_container.block({
        message: null,
        overlayCSS: {
            cursor: 'none'
        }
    });

    $.ajax({
        type: 'POST',
        dataType: 'json',
        url: '/wp-admin/admin-ajax.php',
        data: {
            action: "product_remove",
            product_id: product_id,
            cart_item_key: cart_item_key
        },
        success: function(response) {
            if ( ! response || response.error )
                return;

            var fragments = response.fragments;

            // Replace fragments
            if ( fragments ) {
                $.each( fragments, function( key, value ) {
                    $( key ).replaceWith( value );
                });
                setBagModalContentHeight();
            }
        }
    }).always(function() {
        setBagLoadedState(false)
    });
});

$(document).on('click', '.reset-filter-btn', function (e) {
    $('input[name=price_min]').val('');
    $('input[name=price_max]').val('');
    $('input[name=skin_type]').val('');
    $('input[name="skin_condition[]"]').prop('checked', false);
    $('input[name="ingredient[]"]').prop('checked', false);
    $('input[name="effect[]"]').prop('checked', false);
    $('input[name="brand[]"]').prop('checked', false);
    $(this).closest( 'form' ).submit();
})

$(document).ready(function() {
    $('input[type=radio][name=orderby].order-radio').change(function() {
        $('#filterOrderBy').val($( this ).val())
        $('#filterOrderBy').closest( 'form' ).submit();
    });
});

$(document).on('click', '#load_more_btn', function (e) {
    $('#loadMoreContainer .loader-container').show();
    var data = {
        skin_type: $(this).attr("data-skin_type"),
        skin_condition: $(this).attr("data-skin_condition").split(","),
        ingredient : $(this).attr("data-ingredient").split(","),
        effect: $(this).attr("data-effect").split(","),
        brand: $(this).attr("data-brand").split(","),
        orderby: $(this).attr("data-orderby"),
        sale: $(this).attr("data-sale"),
        hits: $(this).attr("data-hits"),
        search: $(this).attr("data-search"),
        catalog: $(this).attr("data-catalog").split(","),
        price_min: $(this).attr("data-price_min"),
        price_max: $(this).attr("data-price_max"),
        offset: document.querySelectorAll('.catalog-page__card-container').length,
    }
    data.action = "get_product"
    $.ajax({
        type: 'POST',
        dataType: 'json',
        url: '/wp-admin/admin-ajax.php',
        data: data,
        success: function(response) {
            response.products.forEach(element => $('#catalogPageMainContainer').append(element))
            setCatalogPageState();
            $('#loadMoreContainer .loader-container').hide()
            if (document.querySelectorAll('.catalog-page__card-container').length >= response.total) {
                $('#loadMoreContainer').hide()
            }
            const url = new URL(window.location);
            url.searchParams.set('cnt', document.querySelectorAll('.catalog-page__card-container').length);
            window.history.pushState({}, '', url);
        }
    }).always(function() {
        $('#loadMoreContainer .loader-container').hide()
    });
})

$(document).ready(function() {
    $('#billing_country').on( 'change', function (){
        $('.shipping-method-form').addClass('is--overlay-loader');
        $('.woocommerce-checkout-payment').addClass('is--overlay-loader');
        var t = { updateTimer: !1,  dirtyInput: !1,
            reset_update_checkout_timer: function() {
                clearTimeout(t.updateTimer)
            },
            trigger_update_checkout: function() {
                t.reset_update_checkout_timer(), t.dirtyInput = !1,
                    $(document.body).trigger("update_checkout")
            }
        };
        $(document.body).trigger('update_checkout');
        console.log('Event: update_checkout');
    });
});

document.body.addEventListener("bagButtonClicked", function() {
})

document.body.addEventListener("bagModalClosed", function() {
})

$(document).on('change', 'input[name="cert_value"]', function (e) {
    $('.cert_add_to_cart_button').text('В корзину — ' + this.value + ' р.')
    $('.cert_add_to_cart_button').attr('data-product_price', this.value)
    $('.product-page__dolyami button').text('4 платежа по ' + Math.ceil(this.value / 4) + ' ₽')
})

$(document).on('change', 'input[name="giftcard_email"]', function (e) {
    var giftcard_email = $(this).val()
    if (giftcard_email == "") {
        $('.email_error_block').text("Введите E-Mail")
        $('.email_error_block').removeClass("d-none")
        $('.cer-page__forms__field.is--email').addClass('is--error')
    } else if (!ValidateEmail(giftcard_email)) {
        $('.email_error_block').text("Неправильный E-Mail")
        $('.email_error_block').removeClass("d-none")
        $('.cer-page__forms__field.is--email').addClass('is--error')
    } else {
        $('.email_error_block').addClass("d-none")
        $('.cer-page__forms__field.is--email').removeClass('is--error')
    }
})

$(document).on('change', 'input[name="giftcard_date"]', function (e) {
    $('.date_error_block').addClass("d-none")
    $('.cer-page__forms__field.is--date').removeClass('is--error')
})

$(document).on('click', '.cert_add_to_cart_button', function (e) {
    e.preventDefault();

    var $thisbutton = $(this),
        $form = $thisbutton.closest('form.add-to-cart-form')

    var cert_value = $form.find('input[name=cert_value]').val()
    var design = $form.find('input[name=design]').val()
    var giftcard_email = $form.find('input[name=giftcard_email]').val()
    var giftcard_date = $form.find('input[name=giftcard_date]').val()
    var giftcard_comment = $form.find('textarea[name=giftcard_comment]').val()

    var validationPassed = true
    if (giftcard_email == "") {
        $('.email_error_block').text("Введите E-Mail")
        $('.email_error_block').removeClass("d-none")
        $('.cer-page__forms__field.is--email').addClass('is--error')
        validationPassed = false
    } else if (!ValidateEmail(giftcard_email)) {
        $('.email_error_block').text("Неправильный E-Mail")
        $('.email_error_block').removeClass("d-none")
        $('.cer-page__forms__field.is--email').addClass('is--error')
        validationPassed = false
    } else {
        $('.email_error_block').addClass("d-none")
        $('.cer-page__forms__field.is--email').removeClass('is--error')
    }
    if (giftcard_date == "") {
        $('.date_error_block').text("Выберите дату")
        $('.date_error_block').removeClass("d-none")
        $('.cer-page__forms__field.is--date').addClass('is--error')
        validationPassed = false
    } else {
        $('.date_error_block').addClass("d-none")
        $('.cer-page__forms__field.is--date').removeClass('is--error')
    }

    if (!validationPassed) {
        return
    }

    $form.addClass('is--overlay-loader')

    var data = {
        action: 'cert_ajax_add_to_cart',
        product_id: $thisbutton.data( 'product_id' ),
        cert_value: cert_value,
        design: design,
        giftcard_email: giftcard_email,
        giftcard_date: giftcard_date,
        giftcard_comment: giftcard_comment,
    };

    $(document.body).trigger('adding_to_cart', [$thisbutton, data]);

    $.ajax({
        type: 'post',
        url: wc_add_to_cart_params.ajax_url,
        data: data,
        success: function (response) {
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

                var fragments = response.fragments;
                var cart_hash = response.cart_hash;

                // Replace fragments.
                if ( fragments ) {
                    $.each( fragments, function ( key, value ) {
                        $( key ).replaceWith( value );
                    } );
                    setBagModalContentHeight();
                }

                // Trigger event so themes can refresh other areas.
                $( document.body ).trigger( 'added_to_cart', [ fragments, cart_hash, $thisbutton ] );

            }// End if().
        },
    }).always(function() {
        $form.removeClass('is--overlay-loader');
    });

    return false;
});

/*function ValidateEmail(email) {
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
}*/
/*function ValidateEmail(email) {
    return email.match(
        /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
    );
}*/
function ValidateEmail(inputText) {
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    return !!inputText.match(mailformat);
}

