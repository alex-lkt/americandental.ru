<?
foreach ($arResult["ITEMS"] as $i => $arItem) {
	// resize image
	if ($arItem['PREVIEW_PICTURE']['SRC']) 
	{		
		$arResult["ITEMS"][$i]['PREVIEW_PICTURE']['SRC_WEBP'] = makeWebp($arResult["ITEMS"][$i]['PREVIEW_PICTURE']['SRC']);
	}
}
