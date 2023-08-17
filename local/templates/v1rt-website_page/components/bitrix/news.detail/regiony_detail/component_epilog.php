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
<?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("include-areas/inc.footer-form.php"), array(), array("MODE" => "html"));?>
<?if($arResult["PROPERTIES"]["MAP"]["VALUE"]):?>
<div class="index__map">
<?
$point = explode(",",$arResult["PROPERTIES"]["MAP"]["VALUE"]);

		$APPLICATION->IncludeComponent("bitrix:map.yandex.view", ".default", array(
			"INIT_MAP_TYPE" => "MAP",
			"MAP_DATA" => serialize(array(
				'yandex_lat' => $point[0],
				'yandex_lon' => $point[1],
				'yandex_scale' => 12
			)),
			"MAP_WIDTH" => "AUTO",
			"MAP_HEIGHT" => "450",
			"CONTROLS" => array(
				"TOOLBAR",
				"ZOOM",
				"MINIMAP",
				"TYPECONTROL",
				"SCALELINE"
			),
			"OPTIONS" => array(
				"ENABLE_SCROLL_ZOOM",
				"ENABLE_DBLCLICK_ZOOM",
				"ENABLE_DRAGGING",
				"ENABLE_KEYBOARD"
			),
			"MAP_ID" => ""
		),
		false
	);
?>
			</div>

<?else:?>
<?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("include-areas/inc.footer-map.php"), array(), array("MODE" => "html"));?>
			<?endif;?>