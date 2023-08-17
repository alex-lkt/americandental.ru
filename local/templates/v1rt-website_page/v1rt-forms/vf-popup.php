<div class="d-none">
	<div id="vf-popup" class="vf-popup vf-popup__box">
		<div class="vf-popup__hdr">Напишите нам</div>
		<form method="post" class="vf-popup__form" >							
			<label for="vf-popup__name" class="vf-popup__label">Ваше имя: <span class="vf-req">*</span></label>
			<input type="text" name="popup__name" id="vf-popup__name" value="" class="vf-popup__input" maxlength="12">
			<?/*<label for="vf-popup__lastname" class="vf-popup__label">Ваша фамилия: <span class="vf-req">*</span></label>
			<input type="text" required name="vf-popup__lastname" id="vf-popup__lastname" value="" class="vf-popup__input" maxlength="12">*/?>
			<label for="vf-popup__tel" class="vf-popup__label">Ваш телефон: <span class="vf-req">*</span></label>
			<input type="text" name="popup__tel" id="vf-popup__tel" value="" class="vf-popup__input js-validate-phone" placeholder="+7 (___) ___-__-__">
			<label for="vf-popup__message" class="vf-popup__label">Сообщение:</label>
			<textarea name="vf-popup__message" id="vf-popup__message" class="vf-popup__message"></textarea>
			<label class="vf-popup__agreement" for="vf-popup__agree-check">
				<input type="checkbox" checked="" class="vf-agree-check" id="vf-popup__agree-check"> Нажимая кнопку "Отправить", я принимаю условия <a href="/soglashenie/" target="_blank">пользовательского соглашения</a>
			</label>
			<div class="vf-popup__sending-status"></div>
			<button type="submit" class="btn btn-primary vf-popup__button vf-agree-check__button" onclick="ym(56550514,'reachGoal','submit'); return true;">Отправить</button>
		</form>
	</div>
</div>