<?
$APPLICATION->SetAdditionalCSS('/local/templates/v1rt-website/css-js/homepage/twentytwenty.css');
$APPLICATION->AddHeadScript('/local/templates/v1rt-website/css-js/homepage/jquery.event.move.js');
$APPLICATION->AddHeadScript('/local/templates/v1rt-website/css-js/homepage/jquery.twentytwenty.js');
?>

<?if(!$bIndexBot):?>
	<h2 class="wow slideInLeft" style="text-align: center;">Примеры работ:</h2>

	<div class="slider-item">
		<div class="slider-item__img doposle-box" id="">
			<img itemprop="image" src="<?=SITE_TEMPLATE_PATH?>/img/block-1/do-1.jpg" title="Примеры работ" alt="Примеры работ">
			<img itemprop="image" src="<?=SITE_TEMPLATE_PATH?>/img/block-1/posle-1.jpg" title="Примеры работ" alt="Примеры работ">
		</div>
		<div class="slider-item__text">
		Пациент 65 лет. Проведена реабилитация с помощью дентальных имплантатов по системе "Все на 4-х". Одновременно с удалением оставшихся зубов были установлены имплантаты с немедленной нагрузкой временными конструкциями. Затем пациенту были установлены окончательные металлокерамические коронки.
		</div>
	</div>

<?endif;?>

<script>
	$(window).load(function() {
		$('.doposle-box').twentytwenty();
	});
</script>