$(document).ready(function () {

	$("#mmenu").mmenu(
	
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
	
	var menuAPI = $("#mmenu").data( "mmenu" );
	$(".view-mmenu").click(function(e) {
		
         menuAPI.open();
        // e.preventDefaults();
      });
	
	
	$(".js-doktora-slider").slick({
		infinite: true,
		slidesToShow: 4,
		slidesToScroll: 1,
		arrows:false,
		responsive: [
			{
			  breakpoint: 1100,
			  settings: {
				slidesToShow: 3
			  }
			},
			{
			  breakpoint: 991,
			  settings: {
				slidesToShow: 2
			  }
			},
			{
			  breakpoint: 768,
			  settings: {
				slidesToShow: 1
			  }
			}
		]
	});
	 $('.js-doktora-prev').click(function () {
 	 	$('.js-doktora-slider').slick("slickPrev");
 	 });
 	 
 	 $('.js-doktora-next').click(function () {
 	 	$('.js-doktora-slider').slick("slickNext");
 	 });

	 $(".agree-check").change(function() {
    	var parentForm = $(this).parents('form:first');		
		if(this.checked) {			
			parentForm.find(".agree-button").prop('disabled',false);			
		}
		else
		{
			parentForm.find(".agree-button").prop('disabled',true);
		}
	}); 


$("#btnForm1").fancybox();
$("#btnForm2").fancybox();
$("#btnForm3").fancybox();
$("#btnForm4").fancybox();
$("#btnForm5").fancybox();
$("#btnForm6").fancybox();
$("#btnForm7").fancybox();
$("#btnForm8").fancybox();
$(".btnArticles").fancybox();

$("#btnCallback").fancybox();


new WOW().init();


	$(".js-planform").on('change','#js-planform-file' , function(){
		 if($("#js-planform-file").val()) { 
			$(".js-planform-file-no").hide(); 
			$(".js-planform-file-yes").show(); 
		 } else { 
			$(".js-planform-file-yes").hide(); 
			$(".js-planform-file-no").show(); }
	 }); 



});

