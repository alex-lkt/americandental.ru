<div class="index__zapis-wrap inner__zapis-wrap">
	<div class="container">
		<div class="index__zapis">
			<div class="index__zapis-form">
				<h3>Запись на бесплатный прием</h3>
				 <?$APPLICATION->IncludeComponent(
	"v1rt:callback",
	"index__callback",
	array(
	"COMPONENT_TEMPLATE" => "index__callback",
		"EMAIL_TO" => "info@americandental.ru",	// Email получателя заявок на звонок
		"EVENT_MESSAGE_ID" => array(	// Шаблон письма
			0 => "10",
		),
		"USE_CAPTCHA" => "N",	// Использовать каптчу
	)
);?>
			</div>
			<div class="index__zapis-info">
				<div class="img-wrap">
 <img src="<?=SITE_TEMPLATE_PATH;?>/images/index-image.jpg" alt="В бесплатный осмотр входит КТ 3D снимок"  title="В бесплатный осмотр входит КТ 3D снимок">
				</div>
				<div>
					<p>
						<i class="far fa-clock"></i> 40 минут
					</p>
					<p>
						<i class="fas fa-ruble-sign"></i> Бесплатно
					</p>
				</div>
				<p>
					 В бесплатный осмотр входит КТ 3D снимок, 3Д-моделирование, а также демонстрация имплантов: сможете их посмотреть, подержать в руках
				</p>
			</div>
		</div>
	</div>
</div>
<br>