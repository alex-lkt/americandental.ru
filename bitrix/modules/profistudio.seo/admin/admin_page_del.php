<?
use Bitrix\Main;
use Bitrix\Main\Loader;
use Profistudio\Seo\PageTable;
use Bitrix\Main\Localization\Loc;

require_once($_SERVER['DOCUMENT_ROOT']."/bitrix/modules/main/include/prolog_admin_before.php");

$moduleID = "profistudio.seo";

if(!Loader::includeModule($moduleID))
{	
	die();
}

Loc::loadMessages(__FILE__);

global $APPLICATION, $DB, $USER;

if(empty($_REQUEST['SITE_ID']))
{
	die();
}

$CONS_RIGHT = $APPLICATION->GetGroupRight($moduleID);   
if($CONS_RIGHT != "W")
{
    $APPLICATION->AuthForm(Loc::getMessage("profistudio.seo_ACCESS_DENIED"));
}

$isAjax = (isset($_REQUEST["bxsender"]) && $_REQUEST["bxsender"] === "core_window_cadmindialog");
if($isAjax)
{
	CUtil::JSPostUnescape();
}

if($ex = $APPLICATION->GetException())
{
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_admin_after.php");

	$strError = $ex->GetString();
	ShowError($strError);

	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_admin.php");
	die();
}

$APPLICATION->SetTitle(Loc::getMessage("profistudio.seo_DEL_TITLE"));

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_admin_after.php");

$ID = (isset($_REQUEST['id']) ? intval(htmlspecialcharsbx($_REQUEST['id'])) : 0);
$back_url = (isset($_REQUEST['back_url']) ? rawurldecode($_REQUEST['back_url']) : '');

if($ID)
{			
	$DB->StartTransaction();		
	
	$arFields = PageTable::getList(array('filter' => array("=ID" => $ID)))->fetch();
	
	if(empty($arFields['ID']))
	{		
		ShowError(Loc::getMessage("profistudio.seo_ERROR_DELETE"));
		//echo CAdminMessage::ShowMessage(Loc::getMessage("profistudio.seo_ERROR_DELETE"), $ID);		
	}
	else
	{
		if(!PageTable::delete($arFields['ID']))
		{
			$DB->Rollback();
			
			ShowError(Loc::getMessage("profistudio.seo_ERROR_DELETE"));
		}
	}
	
	$DB->Commit();
}

if($isAjax)
{	
	?>
	<script type="text/javascript" bxrunfirst="true">		
		top.BX.closeWait();			
		top.window.reloadAfterClose = true;
		top.BX.WindowManager.Get().SetContent('');
		top.BX.reload('<?=CUtil::JSEscape($back_url)?>', true);
		top.BX.WindowManager.Get().Close();
	</script>
	<?
}

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_admin.php");
?>