<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="row articles__page">
<?if($arParams["DISPLAY_TOP_PAGER"]):?><?=$arResult["NAV_STRING"]?><br /><?endif;?>

<?foreach($arResult["ITEMS"] as $arItem):
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
    
<div class="col-12 col-sm-6 col-md-4 col-lg-6 col-xl-4" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
	<div class="articles__block">
		<?if(is_array($arItem["PREVIEW_PICTURE"])):?>
			<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
				<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="articles__img-link"><img class="img-l" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="Новость" title="Новость"/></a>
			<?else:?>
				<img class="img-l" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="Новость" title="Новость"/>
			<?endif;?>
		<?endif?>
		<div class="articles__preview">
			<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>" class="articles__name-link"><?echo $arItem["NAME"]?></a>
		</div>
		<?if($arItem["PREVIEW_TEXT"]):?>
				<div class="preview-text"><?=$arItem["PREVIEW_TEXT"];?></div>
			<?endif;?>
		<?if(is_array($arItem["PREVIEW_PICTURE"])):?><div style="clear:both"></div><?endif?>
	</div>
</div>
<?endforeach;?>

<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?><br /><?=$arResult["NAV_STRING"]?><?endif;?>
</div>