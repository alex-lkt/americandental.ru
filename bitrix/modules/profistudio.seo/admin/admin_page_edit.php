<?
require_once($_SERVER['DOCUMENT_ROOT']."/bitrix/modules/main/include/prolog_admin_before.php");

use Bitrix\Main\Loader;
use Profistudio\Seo\PageTable;
use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);

$moduleID = "profistudio.seo";

$resIncludeModule = Loader::includeSharewareModule($moduleID);

if($resIncludeModule == Loader::MODULE_NOT_FOUND)
{
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_admin_after.php");
	ShowError(str_replace('#MODULE_ID#', $moduleID, Loc::getMessage("profistudio.seo_PROFISTUDIO_SEO_MODULE_NOT_INSTALLED")));
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_admin.php");
	die();
}

$demo_version = false;

if($resIncludeModule == Loader::MODULE_DEMO || $resIncludeModule == Loader::MODULE_DEMO_EXPIRED)
{
	$demo_version = true;
}

$can_write = true;

$bFileman = Loader::includeModule("fileman");
if(!$bFileman)
{
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_admin_after.php");
	ShowError(Loc::getMessage('profistudio.seo_FILEMAN_MODULE_NOT_INSTALLED'));
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_admin.php");
	die();
}

global $APPLICATION, $DB, $USER, $USER_FIELD_MANAGER;

if(empty($_REQUEST['SITE_ID']))
{
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_admin_after.php");
	ShowError(Loc::getMessage('profistudio.seo_SITE_NOT_SELECT'));
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_admin.php");
	die();
}

$arSitePageEdit = \Profistudio\Seo\Tools::getSite(htmlspecialcharsbx($_REQUEST['SITE_ID']));

if(empty($arSitePageEdit))
{
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_admin_after.php");
	ShowError(str_replace('#SITE_ID#', htmlspecialcharsbx($_REQUEST['SITE_ID']), Loc::getMessage("profistudio.seo_SITE_NOT_FOUND")));
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_admin.php");
	die();
}

$ID = (isset($_REQUEST['id']) ? intval(htmlspecialcharsbx($_REQUEST['id'])) : 0);

$actionCopyID = null;

if(!$ID and isset($_REQUEST["copy_id"]) and intval($_REQUEST["copy_id"]) > 0)
{
	$actionCopyID = intval($_REQUEST["copy_id"]);
}

$itemsListAll = PageTable::getList(array(
	'count_total' => true
));

$countItems = $itemsListAll->getCount();

$countItemsMax = 3;

if($demo_version and $countItems >= $countItemsMax and !$ID)
{
	$can_write = false;
}

$APPLICATION->AddHeadScript('/bitrix/js/main/admin_tools.js');

\CJSCore::Init(array("jquery"));

$isAjax = (isset($_REQUEST["bxsender"]) && ($_REQUEST["bxsender"] === "core_window_cadmindialog" || $_REQUEST["bxsender"] === "core_window_cdialog"));
if($isAjax)
{
	CUtil::JSPostUnescape();
}

$action_set_page_url = (isset($_REQUEST["action"]) && $_REQUEST["action"] === "set_page_url");

$CONS_RIGHT = $APPLICATION->GetGroupRight($moduleID);   
if($CONS_RIGHT != "W")
{
    $APPLICATION->AuthForm(Loc::getMessage("profistudio.seo_ACCESS_DENIED"));
}

if(!$can_write)
{
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_admin_after.php");
	ShowError(Loc::getMessage("profistudio.seo_OPTIONS_DEMO_MAX_COUNT"));
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_admin.php");
	die();
}

if($ex = $APPLICATION->GetException())
{
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_admin_after.php");

	$strError = $ex->GetString();
	ShowError($strError);

	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_admin.php");
	die();
}

$aTabs = array(
	array(
		"DIV" => "edit1",
		"TAB" => Loc::getMessage("profistudio.seo_TAB_1"),
		"ICON" => "",
		"TITLE" => Loc::getMessage("profistudio.seo_TAB_1_TITLE")
	),
	array(
		"DIV" => "user_fields",
		"TAB" => Loc::getMessage("profistudio.seo_TAB_CUSTOM_PROPS"),
		"ICON" => "",
		"TITLE" => Loc::getMessage("profistudio.seo_TAB_CUSTOM_PROPS_TITLE")
	),
	array(
		"DIV" => "edit_help",
		"TAB" => Loc::getMessage("profistudio.seo_TAB_HELP"),
		"ICON" => "",
		"TITLE" => Loc::getMessage("profistudio.seo_TAB_HELP_TITLE")
	)
);

if($isAjax)
	$tabControl = new CAdminTabControl("tabControl", $aTabs, false);
else
	$tabControl = new CAdminTabControl("tabControl", $aTabs);

$ID = (isset($_REQUEST['id']) ? intval(htmlspecialcharsbx($_REQUEST['id'])) : 0);

$back_url = (isset($_REQUEST['back_url']) ? rawurldecode($_REQUEST['back_url']) : '');

$url_now = (isset($_REQUEST['back_url']) ? $_REQUEST['back_url'] : '');

$url_now = \Profistudio\Seo\Url::uriFormatDB($url_now);

$url_now = \Profistudio\Seo\Url::uriUnFormatDB($url_now);
$url_now = \Profistudio\Seo\Url::uriDecode2($url_now);

$url_now = \Profistudio\Seo\Url::deleteParamsClear($url_now);	
$url_now = \Profistudio\Seo\Url::uriFormatDB($url_now);

if($ID > 0)
	$TITLE = Loc::getMessage("profistudio.seo_TITLE_EDIT");
else
	$TITLE = Loc::getMessage("profistudio.seo_TITLE_ADD");

$APPLICATION->SetTitle($TITLE);

$errorMessage = '';
$message = null;
$bVarsFromForm = false;

$defaultOptions = array(
	"SITE_ID" => (isset($_REQUEST['SITE_ID']) ? htmlspecialcharsbx($_REQUEST['SITE_ID']) : ''),
	"ACTIVE" => 'Y',
	"SORT" => 500,
	"NAME" => "",	
	"URL" => "",
	"URL_NEW" => "",
	"BREAD_CRUMB" => "",
	"BREAD_CRUMB_TYPE" => "N",
	"CANONICAL_ON" => "N",
	"REDIRECT_ON" => "Y",
	"NO_INDEX" => "N",
	"SITEMAP" => "Y",
	"TITLE" => "",
	"ADDITIONAL_TITLE" => "",
	"META_DESCRIPTION" => "",
	"META_KEYWORDS" => "",
	"DETAIL_TEXT" => "",
	"DETAIL_TEXT_TYPE" => "text",
);

if($isAjax && !empty($url_now) && empty($ID))
{
	$defaultOptions["URL"] = $url_now;
}

if($action_set_page_url && !empty($url_now) && empty($ID))
{
	$defaultOptions["URL"] = $url_now;
}

if($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['UPDATE']) && $CONS_RIGHT >= "W" && check_bitrix_sessid())
{	
	$arFields = array(
		"SITE_ID" => (isset($_POST['SITE_ID']) ? $_POST['SITE_ID'] : ''),
		"ACTIVE" => (isset($_POST['ACTIVE']) && $_POST['ACTIVE'] == 'Y' ? 'Y' : 'N'),
		"SORT" => ((isset($_POST['SORT']) and intval($_POST['SORT']) > 0) ? intval($_POST['SORT']) : '500'),
		"NAME" => (isset($_POST['NAME']) ? $_POST['NAME'] : ''),
		"URL" => (isset($_POST['URL']) ? trim($_POST['URL']) : ''),
		"URL_NEW" => (isset($_POST['URL_NEW']) ? trim($_POST['URL_NEW']) : ''),
		"BREAD_CRUMB" => (isset($_POST['BREAD_CRUMB']) ? $_POST['BREAD_CRUMB'] : ''),
		"BREAD_CRUMB_TYPE" => (isset($_POST['BREAD_CRUMB_TYPE']) ? $_POST['BREAD_CRUMB_TYPE'] : 'N'),
		"REDIRECT_ON" => (isset($_POST['REDIRECT_ON']) && $_POST['REDIRECT_ON'] == 'Y' ? 'Y' : 'N'),
		"NO_INDEX" => (isset($_POST['NO_INDEX']) && $_POST['NO_INDEX'] == 'Y' ? 'Y' : 'N'),
		"CANONICAL_ON" => (isset($_POST['CANONICAL_ON']) && $_POST['CANONICAL_ON'] == 'Y' ? 'Y' : 'N'),
		"SITEMAP" => (isset($_POST['SITEMAP']) && $_POST['SITEMAP'] == 'Y' ? 'Y' : 'N'),
		"TIMESTAMP_X" => new \Bitrix\Main\Type\DateTime(),
		"TITLE" => (isset($_POST['TITLE']) ? $_POST['TITLE'] : ''),
		"ADDITIONAL_TITLE" => (isset($_POST['ADDITIONAL_TITLE']) ? $_POST['ADDITIONAL_TITLE'] : ''),
		"META_DESCRIPTION" => (isset($_POST['META_DESCRIPTION']) ? $_POST['META_DESCRIPTION'] : ''),
		"META_KEYWORDS" => (isset($_POST['META_KEYWORDS']) ? $_POST['META_KEYWORDS'] : ''),
		"DETAIL_TEXT" => (isset($_POST['DETAIL_TEXT']) ? $_POST['DETAIL_TEXT'] : ''),
		"DETAIL_TEXT_TYPE" => (isset($_POST['DETAIL_TEXT_TYPE']) ? $_POST['DETAIL_TEXT_TYPE'] : 'text'),
	);	
		
	$arFields["URL"] = \Profistudio\Seo\Url::uriFormatDB($arFields["URL"]);	
	$arFields['URL'] = \Profistudio\Seo\Url::uriUnFormatDB($arFields['URL']);
	$arFields['URL'] = \Profistudio\Seo\Url::uriDecode2($arFields['URL']);	
	$arFields["URL"] = \Profistudio\Seo\Url::deleteParamsClear($arFields["URL"]);	
	$arFields["URL"] = \Profistudio\Seo\Url::uriFormatDB($arFields["URL"]);	
	
	$arFields["URL_NEW_FORMAT"] = \Profistudio\Seo\Url::uriFormatDB($arFields["URL_NEW"]);	
	$arFields['URL_NEW_FORMAT'] = \Profistudio\Seo\Url::uriUnFormatDB($arFields['URL_NEW_FORMAT']);
	$arFields['URL_NEW_FORMAT'] = \Profistudio\Seo\Url::uriDecode2($arFields['URL_NEW_FORMAT']);
	$arFields["URL_NEW_FORMAT"] = \Profistudio\Seo\Url::uriFormatDB($arFields["URL_NEW_FORMAT"]);
		
	if(empty($errorMessage))
	{		
		if($ID > 0)
		{
			$result = PageTable::update($ID, $arFields);			
		}
		else
		{
			$result = PageTable::add($arFields);
		}
		
		if($result->isSuccess())
		{
			$ID = $result->getId();
			
			$entity_id = "PROFI_SEO_PAGE_" . strtoupper($arFields["SITE_ID"]);
			
			$arUserFields = $USER_FIELD_MANAGER->GetUserFields($entity_id, $ID, LANGUAGE_ID);
			
			$arr_uf = array();
			
			foreach($_POST as $post_key => $post_val)
			{
				if(!empty($arUserFields[$post_key]))
				{
					$arr_uf[$post_key] = $_POST[$post_key];
				}
			}
			
			$USER_FIELD_MANAGER->EditFormAddFields($entity_id, $arr_uf);
			
			$USER_FIELD_MANAGER->Update($entity_id, $ID, $arr_uf);			
		}
		else
		{
			$errorMessage .= implode('<br>', $result->getErrorMessages());
		}
	}
	
	if($isAjax and empty($errorMessage))
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
		die();
	}
	
	$arOptions = $arFields;
	
	if(!empty($_POST["save"]) and !$isAjax and empty($errorMessage))
	{
		LocalRedirect("/bitrix/admin/profistudio.seo_admin_page_list.php?SITE_ID=" . $arOptions['SITE_ID'] . "&lang=".LANGUAGE_ID);
	}
	elseif(empty($errorMessage) and $ID)
	{
		LocalRedirect("/bitrix/admin/profistudio.seo_admin_page_edit.php?SITE_ID=" . $arOptions['SITE_ID'] . "&lang=" . LANGUAGE_ID . '&id=' . $ID . '&tabControl_active_tab=' . htmlspecialcharsbx($_REQUEST["tabControl_active_tab"]));
	}	
}
else
{
	$arOptions = $defaultOptions;
}
	
if($ID and empty($errorMessage))
{
	$apiOptions = PageTable::getList(array('filter' => array("=ID" => $ID)))->fetch();
	if(empty($apiOptions))
	{
		$ID = 0;
		$arOptions = $defaultOptions;
	}
	else
	{		
		$arOptions = $apiOptions;
	}
}
elseif(!$ID and !empty($actionCopyID) and $actionCopyID > 0 and empty($errorMessage))
{
	$apiOptions = PageTable::getList(array('filter' => array("=ID" => $actionCopyID)))->fetch();
	if(empty($apiOptions))
	{		
		$arOptions = $defaultOptions;
	}
	else
	{		
		$arOptions = $apiOptions;
	}
	
	if(isset($arOptions['DATE_CREATE']))
	{
		unset($arOptions['DATE_CREATE']);
	}
	
	if(isset($arOptions['TIMESTAMP_X']))
	{
		unset($arOptions['TIMESTAMP_X']);
	}
}

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_admin_after.php");

$aMenu = array();
if(!$isAjax)
{
	$aMenu = array(
		array(
			"TEXT" => Loc::getMessage("profistudio.seo_BTN_LIST"),
			"LINK" => "/bitrix/admin/profistudio.seo_admin_page_list.php?SITE_ID=" . $arOptions['SITE_ID'] . "&lang=".LANGUAGE_ID,
			"ICON" => "btn_list"
		)
	);	
	$context = new CAdminContextMenu($aMenu);
	$context->Show();
}

if(!empty($errorMessage))
{
	echo CAdminMessage::ShowMessage(Array("DETAILS" => $errorMessage, "TYPE" => "ERROR", "MESSAGE" => '', "HTML" => true));
}

$arSite = \Profistudio\Seo\Tools::getSite($arOptions['SITE_ID']);
$siteServerName = '';
if(!empty($arSite))
{
	$siteServerName = trim($arSite['SERVER_NAME']);
	
	if(empty($arSite['SERVER_NAME']))
	{			
		$siteServerName = trim(\COption::GetOptionString('main', 'server_name', ''));		
	}

	$siteServerName = str_replace(array("https://", "http://"), '', $siteServerName);

	$siteServerName = trim($siteServerName);
	$siteServerName1 = $siteServerName;
	$siteServerName1 = rtrim($siteServerName, "/");

	$siteDir = trim($arSite['DIR']);
	$siteDir1 = ltrim($siteDir, "/");
	$siteDir1 = rtrim($siteDir1, "/");

	if(strlen($siteDir1) > 0 and preg_match('/(' . $siteDir1 . ')/', $siteServerName1, $matches, PREG_OFFSET_CAPTURE))
	{			
		if(!empty($matches[1]))
		{
			$matches_last = array_pop($matches);
		}

		if(!empty($matches_last[1]))
		{
			$siteServerName1 = substr($siteServerName1, 0 , $matches_last[1]);
			$siteServerName1 = rtrim($siteServerName1, "/");
		}
	}
}

$isSiteOptionsCheck = \Profistudio\Seo\Admin::isSiteOptionsCheck(htmlspecialcharsbx($arOptions['SITE_ID']));

if(!$isSiteOptionsCheck)
{	
	$str_help = str_replace('#LANGUAGE_ID#', LANGUAGE_ID, Loc::getMessage("profistudio.seo_HELP"));
	echo BeginNote();
	echo($str_help);
	echo EndNote();
}

$form_uri = $APPLICATION->GetCurPage() . '?SITE_ID=' . $arOptions['SITE_ID'] . '&amp;lang=' . LANGUAGE_ID;

if(isset($ID) and $ID > 0)
{
	$form_uri .= '&amp;id=' . $ID;
}
elseif(!$ID and !empty($actionCopyID) and $actionCopyID > 0)
{
	$form_uri .= '&amp;copy_id=' . $actionCopyID;
}
?>
<form method="POST" action="<?=$form_uri?>" name="form1" id="profistudio_seo_page_form" enctype="multipart/form-data">
<? if(isset($ID) and $ID > 0):?>
	<input type="hidden" name="id" value="<?=htmlspecialcharsbx($ID)?>">
<? endif;?>
<input type="hidden" name="UPDATE" value="Y">
<input type="hidden" name="lang" value="<?=htmlspecialcharsbx(LANGUAGE_ID)?>">
<input type="hidden" name="SITE_ID" value="<?=htmlspecialcharsbx($arOptions['SITE_ID'])?>">
<?=bitrix_sessid_post()?>

<?
$tabControl->Begin();
$tabControl->BeginNextTab();
?>
	
	<? if($ID > 0):?>
	<tr>
        <td class="adm-detail-content-cell-l" width="40%">ID:</td>
        <td class="adm-detail-content-cell-r" width="60%"><?=$ID?></td>
	</tr>
	<? elseif($countItems > 0):?>
	<tr>
		<td class="adm-detail-content-cell-l"></td>
		<td class="adm-detail-content-cell-r"><a id="profistudio_seo_insert_values_link" href="javascript:void(0);" style="text-decoration: none !important; border-bottom: 1px dashed;"><?=Loc::getMessage("profistudio.seo_INSERT_VALUES")?></a></td>
	</tr>
	<? endif;?>
    <tr>
		<td class="adm-detail-content-cell-l"><?=Loc::getMessage("profistudio.seo_ACTIVE")?>:</td>
		<td class="adm-detail-content-cell-r">
			<input type="checkbox" name="ACTIVE" value="Y" <? if($arOptions['ACTIVE'] == "Y") echo " checked"?>>
		</td>
	</tr>
    <tr>
		<td class="adm-detail-content-cell-l" width="40%"><?=Loc::getMessage("profistudio.seo_SORT")?>:</td>
		<td class="adm-detail-content-cell-r" width="60%">
			<input type="text" name="SORT" size="30" value="<?=htmlspecialcharsbx($arOptions['SORT']);?>" id="profistudio_seo_page_SORT">
		</td>
	</tr>
    <tr class="adm-detail-required-field">
		<td class="adm-detail-content-cell-l" width="40%"><?=Loc::getMessage("profistudio.seo_NAME")?>:</td>
		<td class="adm-detail-content-cell-r" width="60%">
			<input type="text" name="NAME" size="50" value="<?=htmlspecialcharsbx($arOptions['NAME']);?>" id="profistudio_seo_page_NAME">
		</td>
	</tr>
    <?	
	$arOptions['URL'] = \Profistudio\Seo\Url::uriUnFormatDB($arOptions['URL']);
	$arOptions['URL'] = \Profistudio\Seo\Url::uriDecode2($arOptions['URL']);
	?>
    <tr class="adm-detail-required-field">
		<td class="adm-detail-content-cell-l" width="40%"><span id="profistudio.seo_hint_url"></span> <?=Loc::getMessage("profistudio.seo_URL")?>:</td>
		<td class="adm-detail-content-cell-r" width="60%">
        <? if($isAjax && !empty($back_url)):?>
        	<textarea name="URL_DISABLED" cols="70" rows="3" disabled><?=htmlspecialcharsbx($arOptions['URL']);?></textarea>
        	<input name="URL" type="hidden" value="<?=htmlspecialcharsbx($arOptions['URL']);?>">
        <? else:?>      
            <textarea name="URL" cols="70" rows="3" id="profistudio_seo_page_URL"><?=htmlspecialcharsbx($arOptions['URL']);?></textarea>
        <? endif;?>
        	<? if($ID > 0 and !empty($siteServerName1) and !empty($arOptions['URL'])):?>
        		<?
				$url_link = $arOptions['URL'];
				$url_link_full = $siteServerName1 . $url_link;
				?>
        	<div style="max-width: 520px;">
				<a style="word-wrap: break-word; font-size: 12px; font-weight: bold;" href="<?=htmlspecialcharsbx('//' . $url_link_full);?>"><?=htmlspecialcharsbx($url_link_full);?></a>
			</div>
			<? endif;?>
		</td>
	</tr>
    <tr>
		<td class="adm-detail-content-cell-l" width="40%"><span id="profistudio.seo_hint_url_new"></span> <?=Loc::getMessage("profistudio.seo_URL_NEW")?>:</td>
		<td class="adm-detail-content-cell-r" width="60%">
        	<textarea name="URL_NEW" cols="70" rows="3" id="profistudio_seo_page_URL_NEW"><?=htmlspecialcharsbx($arOptions['URL_NEW']);?></textarea>
        	<? if($ID > 0 and !empty($siteServerName1) and !empty($arOptions['URL_NEW'])):?>
        		<?
				$url_new_link = \Profistudio\Seo\Url::uriFormatDB($arOptions['URL_NEW']);
				$url_new_link = \Profistudio\Seo\Url::uriDecode2(\Profistudio\Seo\Url::uriUnFormatDB($url_new_link));
				$url_new_link_full = $siteServerName1 . $url_new_link;
				?>
        	<div style="max-width: 520px;">
				<a style="word-wrap: break-word; font-size: 12px; font-weight: bold;" href="<?=htmlspecialcharsbx('//' . $url_new_link_full);?>"><?=htmlspecialcharsbx($url_new_link_full);?></a>
			</div>
			<? endif;?>
		</td>
	</tr>
    <tr>
		<td class="adm-detail-content-cell-l"><span id="profistudio.seo_hint_redirect_on"></span> <?=Loc::getMessage("profistudio.seo_REDIRECT_ON")?>:</td>
		<td class="adm-detail-content-cell-r">
			<input type="checkbox" name="REDIRECT_ON" value="Y" <? if($arOptions['REDIRECT_ON'] == "Y") echo " checked"?>>
		</td>
	</tr>
    <tr>
		<td class="adm-detail-content-cell-l"><span id="profistudio.seo_hint_no_index"></span> <?=Loc::getMessage("profistudio.seo_NO_INDEX")?>:</td>
		<td class="adm-detail-content-cell-r">
			<input type="checkbox" name="NO_INDEX" value="Y" <? if($arOptions['NO_INDEX'] == "Y") echo " checked"?>>
		</td>
	</tr>
    <tr>
		<td class="adm-detail-content-cell-l"><span id="profistudio.seo_hint_canonical_on"></span> <?=Loc::getMessage("profistudio.seo_CANONICAL_ON")?>:</td>
		<td class="adm-detail-content-cell-r">
			<input type="checkbox" name="CANONICAL_ON" value="Y" <? if($arOptions['CANONICAL_ON'] == "Y") echo " checked"?>>
		</td>
	</tr>
    <tr>
		<td class="adm-detail-content-cell-l"><span id="profistudio.seo_hint_sitemap"></span> <?=Loc::getMessage("profistudio.seo_SITEMAP")?>:</td>
		<td class="adm-detail-content-cell-r">
			<input type="checkbox" name="SITEMAP" value="Y" <? if($arOptions['SITEMAP'] == "Y") echo " checked"?>>
		</td>
	</tr>     
    <tr>
		<td class="adm-detail-content-cell-l" width="40%"><?=Loc::getMessage("profistudio.seo_TITLE")?>:</td>
		<td class="adm-detail-content-cell-r" width="60%">
        	<textarea name="TITLE" cols="70" rows="3" id="profistudio_seo_page_TITLE"><?=htmlspecialcharsbx($arOptions['TITLE']);?></textarea>
		</td>
	</tr>
    <tr>
		<td class="adm-detail-content-cell-l" width="40%"><?=Loc::getMessage("profistudio.seo_ADDITIONAL_TITLE")?>:</td>
		<td class="adm-detail-content-cell-r" width="60%">
        	<textarea name="ADDITIONAL_TITLE" cols="70" rows="3" id="profistudio_seo_page_ADDITIONAL_TITLE"><?=htmlspecialcharsbx($arOptions['ADDITIONAL_TITLE']);?></textarea>
		</td>
	</tr>
    <tr>
		<td class="adm-detail-content-cell-l" width="40%"><?=Loc::getMessage("profistudio.seo_META_DESCRIPTION")?>:</td>
		<td class="adm-detail-content-cell-r" width="60%">
        	<textarea name="META_DESCRIPTION" cols="70" rows="3" id="profistudio_seo_page_META_DESCRIPTION"><?=htmlspecialcharsbx($arOptions['META_DESCRIPTION']);?></textarea>
		</td>
	</tr>
    <tr>
		<td class="adm-detail-content-cell-l" width="40%"><?=Loc::getMessage("profistudio.seo_META_KEYWORDS")?>:</td>
		<td class="adm-detail-content-cell-r" width="60%">
        	<textarea name="META_KEYWORDS" cols="70" rows="3" id="profistudio_seo_page_META_KEYWORDS"><?=htmlspecialcharsbx($arOptions['META_KEYWORDS']);?></textarea>
		</td>
	</tr>
   
    <tr class="heading">
		<td colspan="2"><?=GetMessage("profistudio.seo_BREAD_CRUMB_HEAD")?></td>
	</tr>
	<? $str_BREAD_CRUMB_TYPE = $arOptions['BREAD_CRUMB_TYPE'];?>
	<tr>
		<td><?=GetMessage("profistudio.seo_BREAD_CRUMB_TYPE")?></td>
		<td>
			<input type="radio" name="BREAD_CRUMB_TYPE" id="BREAD_CRUMB_TYPE_N" value="N"<? if($str_BREAD_CRUMB_TYPE == "N")echo " checked"?>> <label for="BREAD_CRUMB_TYPE_N"><?=GetMessage("profistudio.seo_BREAD_CRUMB_TYPE_N")?></label>&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="radio" name="BREAD_CRUMB_TYPE" id="BREAD_CRUMB_TYPE_C" value="C"<? if($str_BREAD_CRUMB_TYPE == "C")echo " checked"?>> <label for="BREAD_CRUMB_TYPE_C"><?=GetMessage("profistudio.seo_BREAD_CRUMB_TYPE_C")?></label>&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="radio" name="BREAD_CRUMB_TYPE" id="BREAD_CRUMB_TYPE_A" value="A"<? if($str_BREAD_CRUMB_TYPE == "A")echo " checked"?>> <label for="BREAD_CRUMB_TYPE_A"><?=GetMessage("profistudio.seo_BREAD_CRUMB_TYPE_A")?></label>
		</td>
	</tr>
    <tr>
		<td class="adm-detail-content-cell-l" width="40%"><?=Loc::getMessage("profistudio.seo_BREAD_CRUMB")?>:</td>
		<td class="adm-detail-content-cell-r" width="60%">
        	<textarea name="BREAD_CRUMB" cols="70" rows="3" id="profistudio_seo_page_BREAD_CRUMB"><?=htmlspecialcharsbx($arOptions['BREAD_CRUMB']);?></textarea>
		</td>
	</tr>       
    
    <tr class="heading">
		<td colspan="2"><?=GetMessage("profistudio.seo_DETAIL_TEXT_HEAD")?></td>
	</tr>
    <? $str_DESCRIPTION = $arOptions['DETAIL_TEXT'];?>
    <? $str_DESCRIPTION_TYPE = $arOptions['DETAIL_TEXT_TYPE'];?>
	<? if(COption::GetOptionString("iblock", "use_htmledit", "Y") == "Y" && $bFileman):?>
	<tr>
		<td colspan="2" align="center">
			<? CFileMan::AddHTMLEditorFrame(
				"DETAIL_TEXT",
				$str_DESCRIPTION,
				"DETAIL_TEXT_TYPE",
				$str_DESCRIPTION_TYPE,
				array(
					'height' => 450,
					'width' => '100%'
				),
				"Y",
				0,
				"",
				"",
				false,
				false,
				true
			);?>
		</td>
	</tr>
	<? else:?>
	<tr>
		<td><?=GetMessage("profistudio.seo_DETAIL_TEXT_TYPE")?></td>
		<td>
			<input type="radio" name="DETAIL_TEXT_TYPE" id="DETAIL_TEXT_TYPE_text" value="text"<? if($str_DESCRIPTION_TYPE != "html")echo " checked"?>> <label for="DETAIL_TEXT_TYPE_text"><?=GetMessage("profistudio.seo_TEXT_TYPE_TEXT")?></label> /
			<input type="radio" name="DETAIL_TEXT_TYPE" id="DETAIL_TEXT_TYPE_html" value="html"<? if($str_DESCRIPTION_TYPE == "html")echo " checked"?>> <label for="DETAIL_TEXT_TYPE_html"><?=GetMessage("profistudio.seo_TEXT_TYPE_HTML")?></label>
		</td>
	</tr>
	<tr>
		<td colspan="2" align="center">
			<textarea cols="60" rows="15"  name="DETAIL_TEXT" id="profistudio_seo_page_DETAIL_TEXT" style="width:100%"><?=$str_DESCRIPTION?></textarea>			
		</td>
	</tr>    
	<? endif;?>
	
<?
$tabControl->BeginNextTab();	

$entity_id = "PROFI_SEO_PAGE_" . strtoupper($arOptions['SITE_ID']);	
	
if($USER_FIELD_MANAGER->GetRights($entity_id) >= "W")
{		
	?>
		<tr>
			<td align="left" colspan="2">
				<a href="/bitrix/admin/userfield_edit.php?lang=<?=LANGUAGE_ID?>&amp;ENTITY_ID=<?=urlencode($entity_id)?>&amp;back_url=<?=urlencode($APPLICATION->GetCurPageParam('', array('bxpublic', 'ajax_action'))."&tabControl_active_tab=user_fields")?>"><?=Loc::getMessage("profistudio.seo_TAB_CUSTOM_PROPS_LINK_ADD")?></a>
			</td>
		</tr>			
	<?
}

if(count($USER_FIELD_MANAGER->GetUserFields($entity_id)) > 0)
{
	$arUserFields = $USER_FIELD_MANAGER->GetUserFields($entity_id, $ID, LANGUAGE_ID);
	foreach($arUserFields as $FIELD_NAME => $arUserField)
	{
		$arUserField["VALUE_ID"] = $ID;			
		$arUserField["EDIT_FORM_LABEL"] = ($arUserField["EDIT_FORM_LABEL"] ? $arUserField["EDIT_FORM_LABEL"] : $arUserField["FIELD_NAME"]);

		echo $USER_FIELD_MANAGER->GetEditFormHTML(false, $GLOBALS[$FIELD_NAME], $arUserField);
	}
}

$tabControl->BeginNextTab();

echo BeginNote();
	
	echo(Loc::getMessage("profistudio.seo_TAB_HELP_URL"));
	
	echo(Loc::getMessage("profistudio.seo_TAB_HELP_URL_NEW"));
	
	echo(Loc::getMessage("profistudio.seo_TAB_HELP_REDIRECT_ON"));
	
	echo(Loc::getMessage("profistudio.seo_TAB_HELP_NO_INDEX"));
	
	echo(Loc::getMessage("profistudio.seo_TAB_HELP_CANONICAL_ON"));
	
	$str_tab_help_sitemap = str_replace('#LANGUAGE_ID#', LANGUAGE_ID, Loc::getMessage("profistudio.seo_TAB_HELP_SITEMAP"));	
	echo($str_tab_help_sitemap);
	
	echo(Loc::getMessage("profistudio.seo_TAB_HELP_DETAIL_TEXT"));
	
	echo(Loc::getMessage("profistudio.seo_TAB_HELP_CUSTOM_PROPS"));
	
	echo(Loc::getMessage("profistudio.seo_TAB_HELP_CODE"));
echo EndNote();
 
if(!$isAjax)
{
	$tabControl->Buttons(
		array(
			"disabled" => ($CONS_RIGHT < "W"),
			"back_url" => "/bitrix/admin/profistudio.seo_admin_page_list.php?SITE_ID=" . $arOptions['SITE_ID'] . "&lang=".LANGUAGE_ID
		)
	);
}
$tabControl->End();
?>
</form>
<script type="text/javascript">
BX.hint_replace(BX('profistudio.seo_hint_url'), '<?=CUtil::JSEscape(Loc::getMessage('profistudio.seo_URL_HINT')); ?>');
BX.hint_replace(BX('profistudio.seo_hint_url_new'), '<?=CUtil::JSEscape(Loc::getMessage('profistudio.seo_URL_NEW_HINT')); ?>');
BX.hint_replace(BX('profistudio.seo_hint_redirect_on'), '<?=CUtil::JSEscape(Loc::getMessage('profistudio.seo_REDIRECT_ON_HINT')); ?>');
BX.hint_replace(BX('profistudio.seo_hint_no_index'), '<?=CUtil::JSEscape(Loc::getMessage('profistudio.seo_NO_INDEX_HINT')); ?>');
BX.hint_replace(BX('profistudio.seo_hint_canonical_on'), '<?=CUtil::JSEscape(Loc::getMessage('profistudio.seo_CANONICAL_ON_HINT')); ?>');
BX.hint_replace(BX('profistudio.seo_hint_sitemap'), '<?=CUtil::JSEscape(Loc::getMessage('profistudio.seo_SITEMAP_HINT')); ?>');
	
jQuery(document).ready(function(){	
	var $form = jQuery('#profistudio_seo_page_form');
	
	if(jQuery('#profistudio_seo_insert_values_link').length){
		$form.on('click', '#profistudio_seo_insert_values_link', function(){
			insert_values_page();
			
			return false;
		});
	}
	
	function insert_values_page(){		
		
		var site_id = "<?=(!empty($arOptions["SITE_ID"]) ? CUtil::JSEscape($arOptions["SITE_ID"]) : '')?>";
		
		if(!site_id)
			return;
		
		var url = '/bitrix/admin/profistudio.seo_admin_get_values_page.php';
		
		BX.showWait();			
		
		jQuery.post(
			url,
			{
				sessid: '<?=bitrix_sessid()?>',
				action: 'get_values_last_page',
				site_id: site_id
			},
			function(data){
				BX.closeWait();
				
				var result = data || [];						
				
				if(typeof result["RESULT"] !== "Undefined" && result["RESULT"] === "OK"){
					if(typeof result["RESULT_DATA"] !== "Undefined" && typeof result["RESULT_DATA"]["FIELDS"] !== "Undefined"){
						if(result["RESULT_DATA"]["FIELDS"]["ACTIVE"] === "Y"){
							jQuery('#profistudio_seo_page_form input[name="ACTIVE"]').prop("checked", true);
						} else {
							jQuery('#profistudio_seo_page_form input[name="ACTIVE"]').prop("checked", false);
						}
						
						jQuery('#profistudio_seo_page_SORT').val(result["RESULT_DATA"]["FIELDS"]["SORT"]);
						jQuery('#profistudio_seo_page_NAME').val(result["RESULT_DATA"]["FIELDS"]["NAME"]);
						jQuery('#profistudio_seo_page_URL').val(result["RESULT_DATA"]["FIELDS"]["URL"]);
						jQuery('#profistudio_seo_page_URL_NEW').val(result["RESULT_DATA"]["FIELDS"]["URL_NEW"]);
						jQuery('#profistudio_seo_page_TITLE').val(result["RESULT_DATA"]["FIELDS"]["TITLE"]);
						jQuery('#profistudio_seo_page_ADDITIONAL_TITLE').val(result["RESULT_DATA"]["FIELDS"]["ADDITIONAL_TITLE"]);
						jQuery('#profistudio_seo_page_META_DESCRIPTION').val(result["RESULT_DATA"]["FIELDS"]["META_DESCRIPTION"]);
						jQuery('#profistudio_seo_page_META_KEYWORDS').val(result["RESULT_DATA"]["FIELDS"]["META_KEYWORDS"]);
						
						if(result["RESULT_DATA"]["FIELDS"]["REDIRECT_ON"] === "Y"){
							jQuery('#profistudio_seo_page_form input[name="REDIRECT_ON"]').prop("checked", true);
						} else {
							jQuery('#profistudio_seo_page_form input[name="REDIRECT_ON"]').prop("checked", false);
						}
						
						if(result["RESULT_DATA"]["FIELDS"]["NO_INDEX"] === "Y"){
							jQuery('#profistudio_seo_page_form input[name="NO_INDEX"]').prop("checked", true);
						} else {
							jQuery('#profistudio_seo_page_form input[name="NO_INDEX"]').prop("checked", false);
						}
						
						if(result["RESULT_DATA"]["FIELDS"]["CANONICAL_ON"] === "Y"){
							jQuery('#profistudio_seo_page_form input[name="CANONICAL_ON"]').prop("checked", true);
						} else {
							jQuery('#profistudio_seo_page_form input[name="CANONICAL_ON"]').prop("checked", false);
						}
						
						if(result["RESULT_DATA"]["FIELDS"]["SITEMAP"] === "Y"){
							jQuery('#profistudio_seo_page_form input[name="SITEMAP"]').prop("checked", true);
						} else {
							jQuery('#profistudio_seo_page_form input[name="SITEMAP"]').prop("checked", false);
						}
						
						jQuery('#profistudio_seo_page_form input[name="BREAD_CRUMB_TYPE"][value="' + result["RESULT_DATA"]["FIELDS"]["BREAD_CRUMB_TYPE"] + '"]').prop("checked", true);						
						jQuery('#profistudio_seo_page_BREAD_CRUMB').val(result["RESULT_DATA"]["FIELDS"]["BREAD_CRUMB"]);
						
						if(result["RESULT_DATA"]["FIELDS"]["DETAIL_TEXT_TYPE"] === "text"){
							jQuery('#profistudio_seo_page_form #DETAIL_TEXT_TYPE_text').prop("checked", true);
							jQuery('#profistudio_seo_page_form #bxed_DETAIL_TEXT_text').click();
						} else {
							jQuery('#profistudio_seo_page_form #DETAIL_TEXT_TYPE_html').prop("checked", true);
							jQuery('#profistudio_seo_page_form #bxed_DETAIL_TEXT_html').click();
						}
						jQuery('#profistudio_seo_page_DETAIL_TEXT, #profistudio_seo_page_form #bxed_DETAIL_TEXT').val(result["RESULT_DATA"]["FIELDS"]["DETAIL_TEXT"]);
					} else {						
					}						
				}
				else if(typeof result["RESULT"] !== "Undefined" && result["RESULT"] === "ERROR" && typeof result["RESULT_DETAIL"] !== "Undefined"){					
				}
				else {					
				};
			},
			"json"
		).fail(
			function(XMLHttpRequest, textStatus, errorThrown){				
			}
		);
	};
});
</script>
<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_admin.php");?>