<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="container mb-5 my-5">
	<div class="">

		<?$pageArray = array("/articles/obshchie-cherty-all-on-4-i-all-on-6/", "/articles/chem-otlichaetsya-protezirovanie-zubov/", "/articles/implantatsiya-vsye-na-chetyryekh/");
		if(in_array($APPLICATION->GetCurPage(), $pageArray)):?> 
		
		<div class="dzen-block">
			<img src="<?=SITE_TEMPLATE_PATH?>/images/logo-dzen.png" alt="Яндекс.Дзен" title="Яндекс.Дзен">
			<div>
				<div class="dzen-block__title">
					Читайте больше интересных статей на нашем канале в Яндекс.Дзен
				</div>
				<a href="//zen.yandex.ru/user/992917194" target="_blank" class="dzen-block__button">Перейти на канал</a>
			</div>
		</div>
		<?endif;?>

		<?/*
		<h1><?$APPLICATION->ShowTitle(false)?></h1>
		<?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "bc", Array(
					"START_FROM" => "0",	// Номер пункта, начиная с которого будет построена навигационная цепочка
					"PATH" => "",	// Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
					"SITE_ID" => "-",	// Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
					),
					false
				);?>
		*/?>