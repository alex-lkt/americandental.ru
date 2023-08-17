$(document).ready(function () {
	$("body").wrapInner( "<div id='js-page-wrap'></div>");

	var clonned = $(".js-topmenu-ul").clone();
	clonned.appendTo("#js-topmenu-mmenu");

	$("#js-topmenu-mmenu").mmenu(
		
		{ navbar: {
	 title: "Меню"
	 },
		     // options
		  }, {
		     // configuration
		     offCanvas: {
		        pageSelector: "#js-page-wrap"
		     }
		
		});
	
	var menuAPI = $("#js-topmenu-mmenu").data( "mmenu" );
	$(".js-topmenu-button").click(function(e) {
		
         menuAPI.open();
        // e.preventDefaults();
      });
      
     $(".js-item-hover").hover(function(){
			$(".js-dropmenu",this).addClass("js-dropmenu-active");
		});
		
		$(".js-item-hover").hover(function(){
			clearTimeout($.data(this,'timer'));
     		$('.js-dropmenu',this).stop(true,true).slideDown(200);
			}, function () {
    			$.data(this,'timer', setTimeout($.proxy(function() {
      			$('.js-dropmenu',this).stop(true,true).slideUp(200);
    			}, this), 100));

		});
		$(".js-item-hover").mouseleave(function(){
			$(".js-dropmenu").removeClass("js-dropmenu-active");
			$(".js-item-hover .js-dropmenu").css("display", "none");
		});





});
      

