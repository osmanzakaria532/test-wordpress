jQuery(document).ready(function($) {
    $(document.body).on('added_to_cart removed_from_cart', function() {
        $.ajax({
            url: woo_modification_ajax_obj.ajax_url,
            type: 'POST',
            data: {
                action: 'update_mini_cart_count'
            },
            success: function(response) {
                $('.header-cart .cart-count').text(response);
            }
        });
    });
});
