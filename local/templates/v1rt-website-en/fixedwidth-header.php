<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="container mb-5 my-5">
	<div class="">
		<h1 style="margin-top: 50px; margin-bottom: 35px;"><?$APPLICATION->ShowTitle(false)?> </h1>
		<?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb", 
	"bc", 
	array(
		"START_FROM" => "1",
		"PATH" => "",
		"SITE_ID" => "s1",
		"COMPONENT_TEMPLATE" => "bc"
	),
	false
);?>