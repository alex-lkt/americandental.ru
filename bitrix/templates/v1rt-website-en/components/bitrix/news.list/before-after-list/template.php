<?/*php var_dump($arResult["ITEMS"])*/?>
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
<div class="row before-after-list">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<div class="services__photo-before-after__item">
	<?/*<h3><?echo $arItem["NAME"]?></h3>*/?>
	<div class="services__photo-line">
		<div class="services__photo-before-after">
		<p><b>Before</b></p>
			<div class="services__photo-before-after--photos">
				<?foreach($arItem["PROPERTIES"]["PHOTO_BEFORE"]["VALUE"] as $imageBefore):?>
						<?
							$arFile = CFile::GetFileArray($imageBefore);
						?>
						<a href="<?=$arFile["SRC"];?>" data-fancybox="gallery-picture"><img src="<?=$arFile["SRC"];?>" alt="Before" title="Befor"></a>
				<?endforeach;?>
			</div>
		</div>
		<div class="services__photo-before-after services__photo-before-after--after">
		<p><b>After</b></p>
			<div class="services__photo-before-after--photos">
				<?foreach($arItem["PROPERTIES"]["PHOTO_AFTER"]["VALUE"] as $imageAfter):?>
						<?
							$arFile = CFile::GetFileArray($imageAfter);
						?>
						<a href="<?=$arFile["SRC"];?>" data-fancybox="gallery-picture"><img src="<?=$arFile["SRC"];?>" alt="eAfter" title="After"></a>
					<?endforeach;?>
			</div>
		</div>
	</div>
</div>
<?endforeach;?>
</div>
