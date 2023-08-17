<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Title");
?>

<?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("include-areas/inc.tseny-na-implanty.cost.php"), array(), array("MODE" => "html"));?>
<?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("include-areas/inc.tseny-na-implanty.implanty.php"), array(), array("MODE" => "html"));?>
<?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("include-areas/inc.tseny-na-implanty.cost-table.php"), array(), array("MODE" => "html"));?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>