<div class="index__zapis-wrap">
	<div class="container">
		<div class="index__zapis">
			<div class="index__zapis-form">
				<h3>Free consultation</h3>
				 <?$APPLICATION->IncludeComponent(
	"v1rt:callback",
	"index__callback",
	array(
	"COMPONENT_TEMPLATE" => ".default",
		"EMAIL_TO" => "info@americandental.ru",	// Email получателя заявок на звонок
		//"EMAIL_TO" => "aleksandr@virt.info",	// Email получателя заявок на звонок
		"EVENT_MESSAGE_ID" => array(	// Шаблон письма
			0 => "10",
		),
		"USE_CAPTCHA" => "N",	// Использовать каптчу
	)
);?>
			</div>
			<div class="index__zapis-info">
				<div class="img-wrap">
 <img src="/bitrix/templates/v1rt-website-en/images/index-image.jpg" alt="A free examination includes a CT 3D scan" title="A free examination includes a CT 3D scan">
				</div>
				<div>
					<p>
						<i class="far fa-clock"></i> 40 minutes
					</p>
					<p>
						<i class="fas fa-ruble-sign"></i> Free
					</p>
				</div>
				<p>
					A free examination includes a CT 3D scan, 3D modeling, diagnosis, treatment plan, as well as a demonstration of implants: you can see them, hold them in your hands
				</p>
			</div>
		</div>
	</div>
</div>
<?/*
<div class="index__map">
	 <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A19a44c0490896853d44f6aa15de350b536b40c3950fcdf33e30e46a8552a71ec&amp;width=100%25&amp;height=100%25&amp;lang=en_US&amp;scroll=true"></script>
</div>
*/?>
<br>