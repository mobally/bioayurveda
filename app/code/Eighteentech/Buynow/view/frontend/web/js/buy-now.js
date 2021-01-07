define([
    'jquery'
], function ($) {
    "use strict";
    return function (config, element) {
        $(element).click(function () {
			if($('#product-addtocart-button').length && $('#product-addtocart-button-duplicate').length){
				$('#product-addtocart-button').hide();
				$('#product-addtocart-button-duplicate').show();
				$('#redirect_checkout').val('yes');
			}
            var form = $(config.form);
            var baseUrl = form.attr('action'),
                buyNowUrl = baseUrl.replace('checkout/cart/add', 'buynow/cart/add');
            form.attr('action', buyNowUrl);
            form.trigger('submit');
            form.attr('action', baseUrl);
            return false;
        });
    }
});
