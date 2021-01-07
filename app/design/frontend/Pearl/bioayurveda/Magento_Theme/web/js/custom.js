require(['jquery'],function($){

      /*****************Show/hide categories menu on the click of hamburger***************/
      $(document).ready(function() {
		   $(document).on('click','#desktop_menu',function(){
			   if($(this).hasClass('active')){
				   $(this).removeClass('active');
				   $('.header-navigation-section').addClass('hide');
			   }else{
				   $(this).addClass('active');
				   $('.header-navigation-section').removeClass('hide');
			   }
		   }); 
      });
	  
		$(document).on('touchstart click', ".block-search .block-title", function(){
			$(".block-search .block-content").toggle();
		});
		$(document).on("click", function(e){
			var $trigger = $(".block-search .block-title");
			if (!$trigger.is(e.target) && ($trigger.has(e.target).length === 0) && ($(".header .block-search.block-search .block").has(e.target).length === 0) ){
				$(".block-search .block-content").hide(); 
			} 
		});
});
/***************** Footer for mobile ***************/
require([
'jquery',
'jquery/ui'
], function($) {
	$(document).on('click', '.footer-v1-content .nopaddingleft .footer-title', function() {
	if ($('.footer-v1-content .footer.links').is(':visible')) {
	  $(".footer-v1-content .footer.links").slideUp(300);
	  $(this).closest('.nopaddingleft').removeClass('expand');
	}
	if ($(this).next(".footer-v1-content .footer.links").is(':visible')) {
	  $(this).next(".footer-v1-content .footer.links").slideUp(300);
	  $(this).closest('.nopaddingleft').removeClass('expand');
	} else {
	  $(this).next(".footer-v1-content .footer.links").slideDown(300);
	  $(".footer-v1-content .nopaddingleft").removeClass('expand');
	  $(this).closest('.nopaddingleft').addClass('expand');
	}
});
});

