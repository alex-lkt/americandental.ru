	function openTab(evt, tabName) {
		var i, tabcontent, tablinks;
		tabcontent = document.getElementsByClassName("tabcontent");
		for (i = 0; i < tabcontent.length; i++) {
			tabcontent[i].style.display = "none";
		}
		tablinks = document.getElementsByClassName("tablinks");
		for (i = 0; i < tablinks.length; i++) {
			tablinks[i].className = tablinks[i].className.replace(" active", "");
		}
		document.getElementById(tabName).style.display = "block";
		evt.currentTarget.className += " active";
	}
	
	// Get the element with id="defaultOpen" and click on it
	if (document.getElementById("defaultOpen")) {
		document.getElementById("defaultOpen").click();
	}

	var acc = document.getElementsByClassName("accordion");
	var i;

	for (i = 0; i < acc.length; i++) {
	  acc[i].addEventListener("click", function() {
		this.classList.toggle("active");
		var panel = this.nextElementSibling;
		if (panel.style.maxHeight){
		  panel.style.maxHeight = null;
		} else {
		  panel.style.maxHeight = panel.scrollHeight + "px";
		} 
	  });
	}

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

	$('.under-header__slider').slick({
		infinite: true,
		slidesToShow: 6,
		slidesToScroll: 1,
		autoplay: true,
 		autoplaySpeed: 2000,
		arrows: false
	});

	$('.masonry__wrapper').masonry({
        // options
        itemSelector: '.reviews__item',
        columnWidth: '.resizer',
		percentPosition: true,
		horizontalOrder: true,
		gutter: 30
    });

	$('.custom-slider').slick({
		dots: true,
		customPaging: function(slider, i) { 
			return `<button class="tab"> <span> ${i + 1} </span> <span>${$(slider.$slides[i]).attr('title')}</span> </button>`;
		},
		arrows: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		responsive: [
			{
			  breakpoint: 1200,
			  settings: {
				arrows: false
			  }
			}
		  ]
	});

	$('.doctors__slider').slick({
		infinite: true,
		slidesToShow: 4,
		slidesToScroll: 4,
		autoplay: false,
		arrows: true,
		responsive: [
			{
			  breakpoint: 768,
			  settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			  }
			}
		  ]
	});

	$('.clinik-slider').slick({
		infinite: true,
		slidesToShow: 3,
		slidesToScroll: 3,
		autoplay: false,
		arrows: true,
		dots: true
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
	
	$(".js-planform").on('change','#js-planform-file' , function(){
		 if($("#js-planform-file").val()) { 
			$(".js-planform-file-no").hide(); 
			$(".js-planform-file-yes").show(); 
		 } else { 
			$(".js-planform-file-yes").hide(); 
			$(".js-planform-file-no").show(); }
	 }); 


	const questionsQuestion = document.querySelectorAll(".feedbackHide"); // feedbackHide
	const questionsItem = document.querySelectorAll(".feedbackInfo");

	if (questionsQuestion[0]) {
		for (let o = 0; o < questionsItem.length; o++) {
			questionsQuestion[o].addEventListener("click", function (e) {
				e.preventDefault(), questionsItem[o].classList.toggle("view");
				e.preventDefault(), questionsQuestion[o].innerHTML="Свернуть отзыв";
			});
		}
	}

});
