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
$this->setFrameMode(true);?>
<div class="container">
<div class="search-form">
<form action="<?=$arResult["FORM_ACTION"]?>">
<div class="row mobsearch" style="margin-top:30px;">
        <div class="col-12 col-md-10 search1">
          <?if($arParams["USE_SUGGEST"] === "Y"):?><?$APPLICATION->IncludeComponent(
				"bitrix:search.suggest.input",
				"",
				array(
					"NAME" => "q",
					"VALUE" => "",
					"INPUT_SIZE" => 15,
					"DROPDOWN_SIZE" => 10,
				),
				$component, array("HIDE_ICONS" => "Y")
			);?><?else:?><input class="searchinput" placeholder="Найти" type="text" name="q" value="" size="15" maxlength="50" /><?endif;?>          
        </div>        
        <div class="col-12 col-md-2 search2">
          <input class="searchbut" name="s" type="submit" value="<?=GetMessage("BSF_T_SEARCH_BUTTON");?>" />
        </div>        
      </div>
</form>
</div>
</div>