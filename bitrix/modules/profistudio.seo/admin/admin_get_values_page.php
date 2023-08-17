<?
define("NO_AGENT_CHECK", true);
define("NO_AGENT_STATISTIC", true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

global $APPLICATION, $USER;

if(strtolower(SITE_CHARSET) != 'utf-8')
	$_POST = $APPLICATION->ConvertCharsetArray($_POST, 'utf-8', SITE_CHARSET);

$moduleID = "profistudio.seo";

$arResult = array(
	"RESULT" => "OK",
	"ERROR" => array()
);

use Bitrix\Main\Loader;
use Profistudio\Seo\PageTable;
use \Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);

$CONS_RIGHT = $APPLICATION->GetGroupRight($moduleID);   
if($CONS_RIGHT != "W")
{
    $arResult["ERROR"][] = array('ACCESS_DENIED', Loc::getMessage("PROFISTUDIO_SEO_GENERATE_ERROR_ACCESS_DENIED"));
}

if(empty($arResult["ERROR"]))
{
	if(!check_bitrix_sessid())
	{		
		$arResult["ERROR"][] = array('SESSION_HAS_EXPIRED', Loc::getMessage("PROFISTUDIO_SEO_GENERATE_ERROR_SESSION_HAS_EXPIRED"));
	}
}

if(empty($arResult["ERROR"]))
{
	if(empty($_POST['action']))
	{
		$arResult["ERROR"][] = array('NOT_FIND_ACTION', Loc::getMessage("PROFISTUDIO_SEO_GENERATE_ERROR"));
	}
}

if(empty($arResult["ERROR"]) and $_POST['action'] === 'get_values_last_page')
{	
	if(!Loader::includeModule($moduleID))
	{
		$arResult["ERROR"][] = array('MODULE_NOT_INSTALLED', Loc::getMessage("PROFISTUDIO_SEO_GENERATE_ERROR"));
	}
	
	if(empty($_POST['site_id']))
	{
		$arResult["ERROR"][] = array('SITE_EMPTY', Loc::getMessage("PROFISTUDIO_SEO_GENERATE_ERROR"));		
	}
	else
	{
		$arSite = \Profistudio\Seo\Tools::getSite($_POST['site_id']);
		
		if(empty($arSite))
		{
			$arResult["ERROR"][] = array('SITE_EMPTY', Loc::getMessage("PROFISTUDIO_SEO_GENERATE_ERROR"));
		}		
	}	
	
	if(empty($arResult["ERROR"]))
	{
		$result = PageTable::getList(array(
			'filter' => array("=SITE_ID" => $arSite["ID"]),
			'order' => array("TIMESTAMP_X" => "DESC")
		))->fetch();
		
		if(!empty($result))
		{
			$arResult["RESULT_DATA"]["FIELDS"] = $result;
		}
		else
		{
			$arResult["ERROR"][] = array('PAGE_NOT_FOUND', Loc::getMessage("PROFISTUDIO_SEO_GENERATE_ERROR"));
		}
	}
}

if(empty($arResult["ERROR"]))
{
	$arResult["RESULT"] = "OK";
}
else
{
	$arResult["RESULT"] = "ERROR";
	$arResult["RESULT_DETAIL"] = '';
	foreach($arResult["ERROR"] as $error)
	{
		$arResult["RESULT_DETAIL"] .= $error[1].'<br>';
	}
}

if(strtolower(SITE_CHARSET) != 'utf-8')
	$arResult = $APPLICATION->ConvertCharsetArray($arResult, SITE_CHARSET, 'utf-8');

header('Content-Type: application/json');
echo json_encode($arResult);

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");