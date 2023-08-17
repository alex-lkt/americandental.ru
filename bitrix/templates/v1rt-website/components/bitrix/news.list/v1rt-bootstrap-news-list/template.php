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

<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<?if(count($arResult["ITEMS"]) > 0):?>

<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<div class="v1rt-news-list-item row" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
			<div class="col-12 col-sm-4 col-md-6">
				<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="v1rt-news-list-item__img-link"><img			
							src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"						
							alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
							title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
							/></a>
			</div>
			<div class="col-12 col-sm-8 col-md-6">
		<?else:?>
			<div class="col-12">
		<?endif;?>
			<div class="v1rt-news-list-item__preview">		
				<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>" class="v1rt-news-list-item__name-link"><?echo $arItem["NAME"]?></a><br>
				<?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
					<time><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></time>
				<?endif?>
				<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
					<?echo $arItem["PREVIEW_TEXT"];?><br>
				<?endif;?>
				<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>" class="v1rt-news-list-item__read-more">Подробнее <i class="fas fa-arrow-right"></i></a>
			</div>
		</div>
	</div>
<?endforeach;?>

<?endif;?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>

