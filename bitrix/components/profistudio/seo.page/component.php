<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

use Bitrix\Main\Loader;

if(!Loader::includeModule("profistudio.seo"))
{
	return;
}

use Profistudio\Seo\PageTable;
use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);

global $USER, $CACHE_MANAGER, $APPLICATION;

if(!isset($arParams["CACHE_TIME"]))
	$arParams["CACHE_TIME"] = 36000000;

if(!is_array($arParams["FIELDS"]))
	$arParams["FIELDS"] = array();
foreach($arParams["FIELDS"] as $key=>$val)
	if($val==="")
		unset($arParams["FIELDS"][$key]);

global $profi_seo_page_id;
if(!empty($profi_seo_page_id))
	$ID = intval($profi_seo_page_id);
else
	return false;

if($this->StartResultCache(false, array(($arParams["CACHE_GROUPS"] === "N" ? false : $USER->GetGroups()), $ID), \Bitrix\Main\Context::getCurrent()->getSite() . "/profistudio/seo.page/" . $ID))
{
	if($ID < 1)
	{
		$this->AbortResultCache();
		return false;
	}
	
	if(!Loader::includeModule("profistudio.seo"))
	{
		$this->AbortResultCache();
		ShowError(GetMessage("PROFISTUDIO_SEO_MODULE_NOT_INSTALLED"));
		return false;
	}
	
	if(!Loader::includeModule("profistudio.seo"))
	{
		$this->AbortResultCache();
		ShowError(GetMessage("PROFISTUDIO_SEO_IBLOCK_MODULE_NOT_INSTALLED"));
		return false;
	}	
	
	$arResult = array();
	
	$arResultTemp = PageTable::getList(array(
		'filter' => array("=ID" => $ID, "=ACTIVE" => "Y", "=SITE_ID" => \Bitrix\Main\Context::getCurrent()->getSite())
	))->fetch();
	
	if(!empty($arResultTemp))
	{
		$arResult = $arResultTemp;
		unset($arResultTemp);
		
		if(defined("BX_COMP_MANAGED_CACHE") and is_object($GLOBALS["CACHE_MANAGER"]))
		{
			$GLOBALS['CACHE_MANAGER']->RegisterTag("profistudio_seo_page_tag" . $arResult["ID"]);
		}
		
		$arResult["DISPLAY_FIELDS"] = array();
		foreach($arParams["FIELDS"] as $pid)
		{
			$arResult["DISPLAY_FIELDS"][$pid] = $arResult[$pid];
		}				
		
		global $USER_FIELD_MANAGER;
		
		$entity_id = "PROFI_SEO_PAGE_" . strtoupper($arResult["SITE_ID"]);
			
		$arResult["USER_FIELDS"] = $USER_FIELD_MANAGER->GetUserFields($entity_id, $arResult["ID"], LANGUAGE_ID);		
		
		$this->IncludeComponentTemplate();
	}
	else
	{
		$this->AbortResultCache();
	}					
}

if(isset($arResult["ID"]))
{
	return $arResult;
}
else
{
	return false;
}
?>