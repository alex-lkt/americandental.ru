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
<?if(!$bIndexBot):?>
<div class="doctors-slider-main">
    <div class="container">
        <h2 style="font-size: 34px;margin-bottom: 40px;">Наша команда</h2>
        <div class="doctors-slider">
            <?foreach($arResult["ITEMS"] as $arItem):
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));?>
                <div class="col-pading-aside-20">
                    <div class="doctors-slider-image-wrapper"><img class="w-100" src="<?=$arItem["PREVIEW_PICTURE"]["SRC_WEBP"]?>" title="Доктор" alt="Доктор"></div>
                    <div><b><?=$arItem["NAME"]?></b></div>
                    <div><?=$arItem["PROPERTIES"]["DOLZHNOST"]["VALUE"]?></div>
                </div>
            <?endforeach;?>
        </div>
        <div class="row pd-top">
            <div class="col-lg-9 col-9"></div>
            <div class="col-lg-3 col-3 pd-top">
                <div class="row">
                    <div class="prev"><img src="/local/templates/v1rt-website/img/prev.png" title="Prev btn" alt="Prev btn"></div>
                    <div class="next"><img src="/local/templates/v1rt-website/img/next.png" title="Next btn" alt="Next btn"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<?endif;?>


<!--<div class="index__doktora">
	<div class="container">
		<h2>Наша команда</h2>
		<div class="index__doktora-slider-wrap">
		<button class="js-doktora-prev"><i class="fas fa-chevron-left"></i></button>
		<button class="js-doktora-next"><i class="fas fa-chevron-right"></i></button>
		<div class="js-doktora-slider">
			<?/*foreach($arResult["ITEMS"] as $arItem):*/?>
			<?/*
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			*/?>
			<div id="<?/*=$this->GetEditAreaId($arItem['ID']);*/?>">
				<div class="img-wrap">
					<img src="<?/*=$arItem["PREVIEW_PICTURE"]["SRC"]*/?>">
				</div>
				<div class="descr">
					<p class="name"><?/*=$arItem["NAME"]*/?></p>
					<?/*=$arItem["PROPERTIES"]["DOLZHNOST"]["VALUE"]*/?>
				</div>
			</div>
			<?/*endforeach;*/?>
		</div>
		</div>
	</div>
</div>-->


