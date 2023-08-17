<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("");
?><?$pageArray = array("/articles/obshchie-cherty-all-on-4-i-all-on-6/", "/articles/chem-otlichaetsya-protezirovanie-zubov/", "/articles/implantatsiya-vsye-na-chetyryekh/");
if(!in_array($APPLICATION->GetCurPage(), $pageArray)):?> 

<div class="dzen-block" style="margin-top:30px;">
	<div class="container"  style="display:flex;">
		<img src="/bitrix/templates/v1rt-website/images/logo-dzen.png" title="Яндекс.Дзен" alt="Яндекс.Дзен">
		<div>
			<div class="dzen-block__title">
				Читайте больше интересных статей на нашем канале в Яндекс.Дзен
			</div>
			<a href="https://zen.yandex.ru/user/992917194" class="dzen-block__button" rel="nofollow" target="_blank">Перейти на канал</a>
		</div>
	</div>
</div>

<?endif;?>

<?$APPLICATION->IncludeComponent(
	"bitrix:news.detail", 
	"v1rt-bootstrap-news-detail", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_ELEMENT_CHAIN" => "Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "v1rt-bootstrap-news-detail",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_CODE" => $_REQUEST["ELEMENT_CODE"],
		"ELEMENT_ID" => "",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"IBLOCK_ID" => "3",
		"IBLOCK_TYPE" => "ifno",
		"IBLOCK_URL" => "",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "Y",
		"META_KEYWORDS" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Страница",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_CANONICAL_URL" => "Y",
"DETAIL_SET_CANONICAL_URL" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "Y",
		"SET_TITLE" => "Y",
		"SHOW_404" => "Y",
		"STRICT_SECTION_CHECK" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_SHARE" => "N",
		"FILE_404" => ""
	),
	false
);?>
<?/*require($_SERVER["DOCUMENT_ROOT"].SITE_TEMPLATE_PATH."/fixedwidth-footer.php");*/?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>