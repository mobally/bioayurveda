define([
        "jquery",
        'Magento_Checkout/js/model/quote',
        'mage/url',
        "jquery/ui"
    ],
    function ($, quote, urlBuilder) {

        $(document).on('click', '.continue', function (e) {
            var address = quote.shippingAddress();
            var zipcode = (address.postcode);
            if ($.trim(zipcode)) {
                var customurl = urlBuilder.build('restrictzip/restrictzip/index');
                $.ajax({
                    async: false,
                    url: customurl,
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        zipCode: zipcode
                    }
                }).done(function (data) {
                    if (data.status == 'error') {
                        e.preventDefault();
                        var errorMsg = data.message;
                        var popup = $('#popup-modal-restrict-zip')
                            .html($('<p>' + errorMsg + '</p>')).modal({
                                modalClass: 'restrict-zip',
                                buttons: [{
                                    text: 'ok',
                                    click: function () {
                                        this.closeModal();
                                    }
                                }]
                            });
                        popup.modal('openModal');
                    }
                });
            }
        });
    });