<div class="index__zapis-wrap inner__zapis-wrap">
	<div class="container">
		<div class="index__zapis">
			<div class="index__zapis-form">
				<h2>Запись на бесплатный прием</h2>
				<?$APPLICATION->IncludeComponent(
	"v1rt:callback", 
	"index__callback", 
	array(
		"COMPONENT_TEMPLATE" => "index__callback",
		"USE_CAPTCHA" => "N",
		"EMAIL_TO" => "info@americandental.ru",
		"EVENT_MESSAGE_ID" => array(
			0 => "10",
		)
	),
	false
);?>
			</div>
			<div class="index__zapis-info">
				<div class="img-wrap">
					<img src="<?=SITE_TEMPLATE_PATH;?>/images/index-image.jpg" alt="">					
				</div>
				<div>
				<p><i class="far fa-clock"></i> 40 минут</p>
				<p><i class="fas fa-ruble-sign"></i> Бесплатно</p>
				</div>
				<p>
					В бесплатный осмотр входит КТ 3D снимок, 3Д-моделирование, а также демонстрация имплантов: сможете их посмотреть, подержать в руках
				</p>
				
			</div>
			
		</div>
	</div>
</div>