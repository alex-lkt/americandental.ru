<?
$error = true;
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');
CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("not_show_nav_chain", "Y");
$APPLICATION->SetTitle("404 Not Found");
?>

<?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("include-areas/404.php"), array(), array("MODE" => "html"));?>
<div class="container mb-5 mt-5 uslugi__moreservices">
        <?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/local/templates/v1rt-website/include-areas/inc.index-main-services.php"), array(), array("MODE" => "html"));?>
</div>
<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>

