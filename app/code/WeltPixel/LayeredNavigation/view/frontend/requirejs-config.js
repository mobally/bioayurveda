var config = {
    map: {
        '*': {
            wpFilterSelect: 'WeltPixel_LayeredNavigation/js/wpFilterSelect',
            wpInstantSearch: 'WeltPixel_LayeredNavigation/js/wpInstantSearch',
            jqueryTouch: 'WeltPixel_LayeredNavigation/js/jqueryUiTouch'
        }
    },
    shim: {
        jqueryTouch: ['jquery', 'jquery/ui','jquery/validate']

    }
};
