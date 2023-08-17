$(document).ready(function () {

	$('body').on('change','.vf-agree-check', function() {
		const parentForm = $(this).closest('form');
		if( $(this).prop('checked') ) {
			parentForm.find('.vf-agree-check__button').prop('disabled', false);
		} else {
			parentForm.find('.vf-agree-check__button').prop('disabled', true);
		}
	});


	$("body").on("click",".vf-popup-button", function() {
		
		if($(this).attr("data-vfheader"))
		{
			$(".vf-popup__hdr").text($(this).attr("data-vfheader"));
		}
		if($(this).attr("data-vfmessage"))
		{
			$(".vf-popup__message").text($(this).attr("data-vfmessage"));
		}
		
		$.fancybox.close();
		$.fancybox.open({
			src  : '#vf-popup',
			type : 'inline',
			"touch":false
		});	  
	});	
	

	$("body").on("submit",".vf-popup__form", function (e) {	
		e.preventDefault();
		// const name = $("#vf-popup__name").val();
		// if(name.length < 1)
		// {
		// 	alert("Вы не указали своё имя");
		// 	return false;
		// }
		// const tel = $("#vf-popup__tel").val();
		// if(tel.length < 13)
		// {
		// 	alert("Номер телефона введен не полностью");
		// 	return false;
		// }
		const form = $(this);
		
		form.find('.vf-popup__button').prop('disabled', true);
		form.find(".vf-popup__sending-status").text("Сообщение отправляется...");
		$.ajax({
			type: "POST",
			url: "/ajax/v1rt-forms/vf-popup.php",
			data: $(this).serialize(),
			success: function(response) {
				if(response == "OK")
				{
					form.find(".vf-popup__sending-status").html("<span class='vf-color-ok'>Сообщение отправлено, мы перезвоним в ближайшее время.</span>");
					document.querySelector('.vf-popup__form').reset();
					ym(56550514,'reachGoal','Forma_otpravlena');
				}
				else
				{
					form.find(".vf-popup__sending-status").html("<span class='vf-color-neok'>Ошибка при отправке сообщения. Попробуйте еще раз чуть позже.</span>");
				}
				form.find('.vf-popup__button').prop('disabled', false);
			},
			error: function(response) {
				form.find(".vf-popup__sending-status").html("<span class='vf-color-neok'>Ошибка при отправке сообщения. Попробуйте еще раз чуть позже.</span>");
				form.find('.vf-popup__button').prop('disabled', false);
			}




		});	
		return false;	
	});


	$("body").on("submit",".vf-feedback__form", function (e) {	
		e.preventDefault();
		const name = $("#vf-feedback__name").val();
		if(name.length < 1)
		{
			alert("Вы не указали своё имя");
			return false;
		}
		const tel = $("#vf-feedback__tel").val();
		if(tel.length < 13)
		{
			alert("Вы не указали свой телефон");
			return false;
		}
		const message = $("#vf-feedback__message").val();
		if(message.length < 5)
		{
			alert("Вы не написали сообщение");
			return false;
		}

		const form = $(this);
		
		form.find('.vf-feedback__button').prop('disabled', true);
		form.find(".vf-feedback__sending-status").text("Сообщение отправляется...");
		$.ajax({
			type: "POST",
			url: "/ajax/v1rt-forms/vf-feedback.php",
			data: $(this).serialize(),
			success: function(response) {
				if(response == "OK")
				{
					form.find(".vf-feedback__sending-status").html("<span class='vf-color-ok'>Сообщение отправлено, мы ответим вам в ближайшее время.</span>");
				}
				else
				{
					form.find(".vf-feedback__sending-status").html("<span class='vf-color-neok'>Ошибка при отправке сообщения. Попробуйте еще раз чуть позже.</span>");
				}
				form.find('.vf-feedback__button').prop('disabled', false);
			},
			error: function(response) {
				form.find(".vf-feedback__sending-status").html("<span class='vf-color-neok'>Ошибка при отправке сообщения. Попробуйте еще раз чуть позже.</span>");
				form.find('.vf-feedback__button').prop('disabled', false);
			}
		});	
		return false;	
	});

});