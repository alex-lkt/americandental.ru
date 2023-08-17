<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentDescription = array(
	"NAME" => GetMessage("PAGE_DESCR_NAME"),
	"DESCRIPTION" => GetMessage("PAGE_DESCR_DESCR"),
	"ICON" => "",
	"CACHE_PATH" => "Y",
	"PATH" => array(
		"ID" => "profistudio",
		"CHILD" => array(
			"ID" => "seo",
			"NAME" => GetMessage("PAGE_DESCR_NAME1")
		)
	),
);

?>