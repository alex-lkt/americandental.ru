$(document).ready(function () {
	
	$("#responsive-top-menu").mmenu(
	
	{ navbar: {
 title: "Меню"
 },
         // options
      }, {
         // configuration
         offCanvas: {
            pageSelector: "#page-wrap"
         }
	
	});
	
	var menuAPI = $("#responsive-top-menu").data( "mmenu" );
	$(".header__menu-button").click(function(e) {
		
         menuAPI.open();
        // e.preventDefaults();
      });
	
	
});
