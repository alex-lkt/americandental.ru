<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<div class="v1rt-news-detail">
	<div class="container">
	<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"])):?>
		<img class="v1rt-news-detail__img" src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="Новость" title="Новость" />
	<?endif?>
	
	<?if($arParams["DISPLAY_DATE"]!="N" && $arResult["DISPLAY_ACTIVE_FROM"]):?>
	<?
		list($date,$time)=explode(" ", $arResult["DISPLAY_ACTIVE_FROM"]);
    	list($day,$month,$year)=explode(".", $date);
	?>
		<time datetime="<?=$year?>-<?=$month?>-<?=$day?>"><?=$year?>-<?=$month?>-<?=$day?></time>
	<?endif;?>
	
	<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arResult["FIELDS"]["PREVIEW_TEXT"]):?>
		<p><?=$arResult["FIELDS"]["PREVIEW_TEXT"];unset($arResult["FIELDS"]["PREVIEW_TEXT"]);?></p>
	<?endif;?>
	<div class="v1rt-news-detail__text">
		<?echo $arResult["DETAIL_TEXT"];?>
	</div>
    <?
    $APPLICATION->IncludeComponent(
        'bitrix:main.include', '',
        Array(
            'AREA_FILE_SHOW' => 'file',
            'PATH'           => '/local/templates/v1rt-website/include-areas/social_widget.php'
        )
    );
    ?>
	</div>
</div>

<div id="divForm" style="display:none;">
	<h2>Заказать звонок</h2>
	 <?$APPLICATION->IncludeComponent(
	"v1rt:callback",
	"index__callback",
	Array(
		"COMPONENT_TEMPLATE" => ".default",
		"EMAIL_TO" => "info@americandental.ru",
		"EVENT_MESSAGE_ID" => array(0=>"10",),
		"USE_CAPTCHA" => "N"
	)
);?>
</div>
