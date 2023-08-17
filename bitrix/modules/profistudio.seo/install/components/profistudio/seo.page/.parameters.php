<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

use Bitrix\Main\Loader;
use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);

if (!Loader::IncludeModule('profistudio.seo'))
	return;

$fields = array(
	"NAME" => Loc::getMessage("PROFISTUDIO_SEO_FIELDS_NAME"),
	"DETAIL_TEXT" => Loc::getMessage("PROFISTUDIO_SEO_FIELDS_DETAIL_TEXT"),
);

$arComponentParameters = array(
	"GROUPS" => array(
	),
	"PARAMETERS" => array(
		"CACHE_TIME"  =>  array("DEFAULT"=>36000000),
		"FIELDS" => array(
			"PARENT" => "BASE",
			"NAME" => Loc::getMessage("PROFISTUDIO_SEO_FIELDS_TITLE"),
			"TYPE" => "LIST",
			"MULTIPLE" => "Y",
			"VALUES" => $fields,
		),
	)	
);