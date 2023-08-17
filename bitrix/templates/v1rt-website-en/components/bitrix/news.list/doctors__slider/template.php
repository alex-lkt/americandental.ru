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

<div class="index__doktora">
	<div class="container">
		<h2>Our doctors</h2>
		<div class="index__doktora-slider-wrap">
		<button class="js-doktora-prev"><i class="fas fa-chevron-left"></i></button>
		<button class="js-doktora-next"><i class="fas fa-chevron-right"></i></button>
		<div class="js-doktora-slider">
			<?foreach($arResult["ITEMS"] as $arItem):?>
			<?
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>
			<div>
				<div class="img-wrap">
					<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["NAME"]?>" title="<?=$arItem["NAME"]?>">
				</div>
				<div class="descr">
					<p class="name"><?=$arItem["PROPERTIES"]["NAME_EN"]["VALUE"]?></p>
					<?=$arItem["PROPERTIES"]["DOLZHNOST_EN"]["VALUE"]?>
				</div>
			</div>
			<?endforeach;?>
		</div>
		</div>
	</div>
</div>


