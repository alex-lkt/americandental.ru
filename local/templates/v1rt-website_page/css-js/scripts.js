$(document).ready(function () {


// валидация номера телефона
const phones = document.querySelectorAll('.js-validate-phone');
phones.forEach(item => {
  IMask(item, {
    mask: '+{7} ({9}00) 000-00-00'
  });
console.log('done');
}); 

$('.vf-popup__box form').validate({
    rules: {
		popup__name: {
		  required: true,
		  minlength: 3,
		  maxlength: 30,
		  regex: /^[а-яА-ЯёЁ ]+$/,
		},
		// popup__tel:  {
		//   required: true,
		//   regex: /([\+]?[7|8][\s-(]?[9][0-9]{2}[\s-)]?)?([\d]{3})[\s-]?([\d]{2})[\s-]?([\d]{2})/, // ^((8|\+7)[\- ]?)?(\(?(9)?\d{2}\)?[\- ]?)?[\d\- ]{7,10}$
		//   minlength: 5,
		// }
	},
	  messages: {
		popup__name: {
		  required: "Пожалуйста введите свое имя",
		  regex: "Не верно введено Имя",
		  minlength: "Имя должно быть не меньше 3 символов",
		  maxlength: "Имя должно быть не больше 30 символов"
		},
		// popup__tel: {
		//   required: "Пожалуйста введите свой телефон",
		//   regex: "Телефон должен содержать только цифры и +",
		//   minlength: "Телефон должен быть не меньше 5 цифр",
		//   maxlength: "Телефон должен быть не больше 12 цифр"
		// },
	}
});

$.validator.addMethod(
	"regex",
	function(value, element, regexp) {
	  var re = new RegExp(regexp);
	  return this.optional(element) || re.test(value);
	},
	"Please check your input."
);

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


	$('.scroll').on('click', function(e){
		var daSelector = "#"+$(this).attr("href").substr(1);
		$("html, body").stop().animate({
		scrollTop: $(daSelector).offset().top + "px"
		}, {
			duration: 1000
		});
		e.preventDefault();
	});

/*$("#btnForm1").fancybox();
$("#btnForm2").fancybox();
$("#btnForm3").fancybox();
$("#btnForm4").fancybox();
$("#btnForm5").fancybox();
$("#btnForm6").fancybox();
$("#btnForm7").fancybox();
$("#btnForm8").fancybox();

$("#btnForm9").fancybox();
$("#btnForm10").fancybox();
$("#btnForm11").fancybox();
$("#btnForm12").fancybox();
$("#btnForm13").fancybox();
$("#btnForm14").fancybox();
$("#btnForm15").fancybox();
$("#btnForm16").fancybox();
$("#btnForm17").fancybox();
$("#btnForm20").fancybox();
$("#btnForm21").fancybox();
$("#btnForm22").fancybox();
$("#btnForm23").fancybox();
$("#btnForm24").fancybox();
$("#btnForm25").fancybox();
$("#btnForm26").fancybox();
$("#btnForm27").fancybox();
$("#btnForm28").fancybox();
$("#btnForm29").fancybox();
$("#btnForm30").fancybox();*/
$(".btnArticles").fancybox();

$("#btnCallback").fancybox();

const simpleTestButton1 = document.querySelectorAll('.btn-page');
  simpleTestButton1.forEach((item) => {
   item.addEventListener('click', () => {
    $.fancybox.close();
    ym(56550514,'reachGoal','bespl_consultazia');
    $.fancybox.open({ // FancyBox 3
      src: '#vf-popup', 
      type : 'inline',
      "touch":false
    });   

  });
 });


new WOW().init();


	$(".js-planform").on('change','#js-planform-file' , function(){
		 if($("#js-planform-file").val()) {
			$(".js-planform-file-no").hide();
			$(".js-planform-file-yes").show();
		 } else {
			$(".js-planform-file-yes").hide();
			$(".js-planform-file-no").show(); }
	 });

if (window.location.href.indexOf("regiony") == -1) 
{	 
	if(location.hash == "#call")
	{
		setTimeout(function () {
			$("#btnForm3").trigger("click");
		},1500);
		
	}
}

});

$(document).ready(function(){

	$('.doctors-slider').slick({
		infinite: false,
		speed: 300,
		slidesToShow: 3,
		slidesToScroll: 1,
		prevArrow: $('.prev'),
		nextArrow: $('.next'),
		responsive: [
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1,
					prevArrow: $('.prev'),
					nextArrow: $('.next'),
				}
			},
			{
				breakpoint: 600,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}
		]
	});

	$('.feedback-slider').slick({
		infinite: false,
		speed: 300,
		slidesToShow: 2,
		slidesToScroll: 1,
		prevArrow: $('.prev2'),
		nextArrow: $('.next2'),
		responsive: [
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1,
					infinite: true,
					dots: true
				}
			},
			{
				breakpoint: 600,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}
			// You can unslick at a given breakpoint now by adding:
			// settings: "unslick"
			// instead of a settings object
		]
	});

});

$('.faq-button').on('click', function() {
	this.classList.toggle('faq-button-active');
	let index = $(this).parent().parent().index();
	$('.faq-header')[index].classList.toggle('faq-header-active');
	$('.faq-text')[index].classList.toggle('faq-text-active');
})

