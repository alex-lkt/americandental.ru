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
<?echo $arResult["DETAIL_TEXT"];?>
<div class="gallery__detail">

<?foreach($arResult["DISPLAY_PROPERTIES"]["PICTURES"]["VALUE"] as $image):?>
			<?
				$arFile = CFile::GetFileArray($image);
			?>
			<a href="<?=$arFile["SRC"];?>" data-fancybox="gallery-picture"><img src="<?=$arFile["SRC"];?>" alt=""></a>
		<?endforeach;?>
</div>