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
<h2>Отзывы и интервью на других площадках</h2>
<p>Мы собрали отзывы, рейтинг и интервью доктора Сойфера на других ресурсах. Вы можете перейти в источник и проверить достоверность информации нажав соответствующую кнопку под изображением.</p>
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<div class="otzyv" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<p class="otzyv__name"><?=$arItem["NAME"];?></p>
		<img class="otzyv__picture"	src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="Отзывы" title="Отзывы" >
		
		<?if(strlen($arItem["PREVIEW_TEXT"])):?>
			<!--noindex--><a class="btn btn-primary" href="<?=$arItem["~PREVIEW_TEXT"];?>" target="_blank" rel="nofollow">Перейти в источник</a><!--/noindex-->
		<?endif;?>



	</div>
<?endforeach;?>

<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>

