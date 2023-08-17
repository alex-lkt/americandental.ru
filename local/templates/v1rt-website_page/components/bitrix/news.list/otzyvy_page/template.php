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
<div class="feedback-slider mr-top">
	<?/*<div class="col-pading-aside-20">
        <div><iframe style="height: 300px;" class="embed-responsive-item w-100" src="https://www.youtube.com/embed/jq1h5fMg0wU" allowfullscreen></iframe></div>
        <div>Отзыв пациента об имплантации "Все-на-4" с установкой скуловых имплантов Zygoma в American Dental</div>
    </div>
    <div class="col-pading-aside-20">
        <div><iframe style="height: 300px;" class="embed-responsive-item w-100" src="https://www.youtube.com/embed/levRs9uNKBU" allowfullscreen></iframe></div>
        <div>Отзыв пациента об имплантации "Все-на-6" с установкой скуловых имплантов Zygoma в American Dental</div>
    </div>
    <div class="col-pading-aside-20">
        <div><iframe style="height: 300px;" class="embed-responsive-item w-100" src="https://www.youtube.com/embed/jAew6Kro_xk" allowfullscreen></iframe></div>
        <div>Отзыв пациента об имплантации "Все-на-4" в клинике American Dental</div>
    </div>
    <div class="col-pading-aside-20">
        <div><iframe style="height: 300px;" class="embed-responsive-item w-100" src="https://www.youtube.com/embed/v0g_kaKDLZs" allowfullscreen></iframe></div>
        <div> Отзыв пациента об имплантации "Все-на-4" в клинике American Dental</div>
</div>*/?>
    <?foreach($arResult["ITEMS"] as $arItem):?>
    <?
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>
    <div class="col-pading-aside-20">
        <div><a href="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" data-fancybox="<?echo $arItem["NAME"]?>"><img class="w-100" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="Отзывы" title="Отзывы"></a></div>
        <div><?echo $arItem["NAME"]?></div>
    </div>
    <?endforeach;?>
    <?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
        <br /><?=$arResult["NAV_STRING"]?>
    <?endif;?>
</div>
<div class="row pd-top">
    <div class="col-lg-9 col-9"></div>
    <div class="col-lg-3 col-3 pd-top">
        <div class="row">
            <div class="prev2 slick-arrow slick-disabled" style="display: block;" aria-disabled="true"><img src="/local/templates/v1rt-website/img/prev.png" title="Prev btn" alt="Prev btn"></div>
            <div class="next2 slick-arrow" style="display: block;" aria-disabled="false"><img src="/local/templates/v1rt-website/img/next.png" title="Next btn" alt="Next btn"></div>
        </div>
    </div>
</div>



