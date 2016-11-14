$(function(){ 
	(function() {
		var meuemporio = {
	        init: function() {
	            this.carrossel();
	            this.menu();
	            //this.toTop('.toTop');
	        },
	        menu: function() {
        		var _opnd, _c;
        		$('main header nav > a').click(function(){
        			$(this).closest('nav').toggleClass('active').closest('width');
        		});
	        },
	        toTop : function(elem){
		        var offset = 1;
		        var duration = 500;
		        jQuery(window).scroll(function() {
					if( !$('body main').attr('id') ){ //&& $(window).width() > 1024 
						if (jQuery(this).scrollTop() > offset) {
							$('body main').addClass('internal');
						} else {
							$('body main').removeClass('internal');
						}
					}
				});
		        jQuery(elem).click(function(event) {
					event.preventDefault();
					jQuery('html, body').animate({scrollTop: 0}, duration);
					return false;
		        })
	        },
	        carrossel: function() {
				var owl = $("section.carrossel > div");
				if(!owl.length) return -1;
				owl.owlCarousel({
					slideSpeed : 1500,
					paginationSpeed : 1000,
					singleItem:true,
					autoPlay:4000
				}); 
	        }
    	}
		meuemporio.init();
	})();
});