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
		<p><b><?echo $arItem["NAME"]?></b></p>
	<div class="services__photo-line">
		<div class="services__photo-before-after">
			<?/*<p><b>Фото ДО</b></p>*/?>
			<div class="services__photo-before-after--photos">
				<?foreach($arItem["PROPERTIES"]["PHOTO_BEFORE"]["VALUE"] as $imageBefore):?>
						<?
							$arFile = CFile::GetFileArray($imageBefore);

							$arWaterMark = Array(
							array(
								"name" => "watermark",
								"position" => "center", // Положение
								"type" => "image",
								"size" => "real",
								"file" => $_SERVER["DOCUMENT_ROOT"].'/upload/ad_wat.png', // Путь к картинке
								"fill" => "exact",
								)
							);
							
							$waterImageB = CFile::ResizeImageGet(
								$imageBefore,
								array(),
								BX_RESIZE_IMAGE_EXACT,
								true,
								$arWaterMark
							);
						?>
						<a href="<?=$waterImageB['src'];?>" data-fancybox="gallery-picture"><img src="<?=$waterImageB['src'];?>" alt="До" title="После"></a>
				<?endforeach;?>
			</div>
		</div>
		<div class="services__photo-before-after services__photo-before-after--after">
			<?/*<p><b>Фото ПОСЛЕ</b></p>*/?>
			<div class="services__photo-before-after--photos">
				<?foreach($arItem["PROPERTIES"]["PHOTO_AFTER"]["VALUE"] as $imageAfter):?>
						<?
							$arFile = CFile::GetFileArray($imageAfter);

							$arWaterMark = Array(
							array(
								"name" => "watermark",
								"position" => "center", // Положение
								"type" => "image",
								"size" => "real",
								"file" => $_SERVER["DOCUMENT_ROOT"].'/upload/ad_wat.png', // Путь к картинке
								"fill" => "exact",
								)
							);
							
							$waterImageA = CFile::ResizeImageGet(
								$imageAfter,
								array(),
								BX_RESIZE_IMAGE_EXACT,
								true,
								$arWaterMark
							);
						?>
						<a href="<?=$waterImageA['src'];?>" data-fancybox="gallery-picture"><img src="<?=$waterImageA['src'];?>" alt="До" title="После"></a>
					<?endforeach;?>
			</div>
		</div>
	</div>
</div>
<?endforeach;?>
</div>
