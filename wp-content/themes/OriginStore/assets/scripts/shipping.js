var $ = jQuery.noConflict();

$(document).on('click', '#place_order', function (e) {
    if ($('input[name="shipping_method[0]"]').val().startsWith("local_pickup")) {
        $('#billing_city').val('Орел')
        $('#billing_postcode').val('302001')
        $('#billing_address_1').val('ул. 2-Посадская д. 14')
        $('#billing_boxberry_id').val('')
        $('#billing_cdek_id').val('')
    }
})

$(document).on('click', '.patchandgo_pvz_title', function (e) {
    e.preventDefault();
    openDeliveryWidget($('#billing_country').val(), pvz_callback)
    //return false
})

function showAddressBlock() {
    $('.patchandgo_pvz_title_block').addClass('d-none')
    $('.patchandgo_local_pickup_title_block').addClass('d-none')
    $('.patchandgo_address_block').removeClass('d-none')
}

function showLocalPickupBlock() {
    $('.patchandgo_pvz_title_block').addClass('d-none')
    $('.patchandgo_local_pickup_title_block').removeClass('d-none')
    $('.patchandgo_address_block').addClass('d-none')
}

function showPvzBlock() {
    $('.patchandgo_pvz_title_block').removeClass('d-none')
    $('.patchandgo_local_pickup_title_block').addClass('d-none')
    $('.patchandgo_address_block').addClass('d-none')
}

$(document).on('change', 'input[name="shipping_method[0]"]', function (e) {
    console.log(this.value)
    $('.shipping-method-form').addClass('is--overlay-loader');
    if (this.value.startsWith("patchandgo_pvz")) {
        showPvzBlock();
        openDeliveryWidget($('#billing_country').val(), pvz_callback)
    } else if (this.value.startsWith("local_pickup")) {
        console.log("local_pickup")
        showLocalPickupBlock();
        $('#billing_city').val('Орел')
        $('#billing_postcode').val('302028')
        $('#billing_address_1').val('Полесская улица, 6')
        $('#billing_pvz_id').val('')
        $('#billing_pvz_type').val('')
    } else {
        showAddressBlock()
        $('.patchandgo_pvz_title span').text("Выбрать пункт выдачи")
        $('#billing_city').val('')
        $('#billing_postcode').val('')
        $('#billing_address_1').val('')
        $('#billing_pvz_id').val('')
        $('#billing_pvz_type').val('')
    }
    $('.shipping-method-form').removeClass('is--overlay-loader');
})

function pvz_callback(result) {
    console.log(result)
    var zipStr = result['zip']
    var zip = parseInt(result['zip'], 10)
    if (zip > 0) {
        zipStr = zip + ""
    } else {
        zipStr = '000000'
    }
    $('.patchandgo_pvz_title span').text(result['address'])
    $('#billing_pvz_id').val(result['code'])
    $('#billing_pvz_type').val(result['type'])
    $('#billing_city').val(result['city_name'])
    $('#billing_postcode').val(zipStr)
    $('#billing_address_1').val(result['address'])
    var data = {
        pvz_code: result['code'],
        pvz_type: result['type'],
        action: "set_chosen_pvz",
    }
    $.ajax({
        type: 'POST',
        dataType: 'json',
        url: '/wp-admin/admin-ajax.php',
        data: data,
        success: function(response) {
        }
    }).always(function() {
        $( document.body ).trigger( 'update_checkout' );
    });
}
