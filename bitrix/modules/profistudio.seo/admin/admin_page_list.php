<?
require_once($_SERVER['DOCUMENT_ROOT']."/bitrix/modules/main/include/prolog_admin_before.php");

use Bitrix\Main\Loader;
use Profistudio\Seo\PageTable;
use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);

$moduleID = "profistudio.seo";

$resIncludeModule = Loader::includeSharewareModule($moduleID);

if($resIncludeModule === Loader::MODULE_NOT_FOUND)
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

global $APPLICATION, $DB;

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

$CONS_RIGHT = $APPLICATION->GetGroupRight($moduleID);   
if($CONS_RIGHT != "W")
{
    $APPLICATION->AuthForm(Loc::getMessage("profistudio.seo_ACCESS_DENIED"));
}

if($ex = $APPLICATION->GetException())
{
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_admin_after.php");

	$strError = $ex->GetString();
	ShowError($strError);

	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_admin.php");
	die();
}

$tableID = "tbl_seo_list";
$oSort = new CAdminSorting($tableID, "ID", "asc");
$adminList = new CAdminList($tableID, $oSort);

$arFilterFields = array(
    "find_id",
    "find_name",
    "find_active",
    "find_url",
    "find_url_new",
	"find_redirect_on",
	"find_no_index",
	"find_canonical_on",
	"find_sitemap",
	"find_bread_crumb_type"
);

$adminList->InitFilter($arFilterFields);

$arFilter = array();

if(isset($find_id))
	$find_id = trim($find_id);
if(isset($find_id) and $find_id !== '')
{	
	if(filter_var($find_id, FILTER_VALIDATE_INT) !== false)
	{
		$find_id = intval($find_id);
		
		if($find_id > 0)
		{
			$arFilter["ID"] = $find_id;		
		}
		else
		{
			$arFilter["ID"] = -1;
		}
	}
	else
	{
		$arFilter["ID"] = -1;
	}
}

if($find_name = trim($find_name))
{
	$arFilter["NAME"] = '%' . $find_name . '%';
}

if($find_active = trim($find_active))
{
	$arFilter["ACTIVE"] = $find_active;
}

if($find_url = trim($find_url))
{
	$find_url1 = \Profistudio\Seo\Url::uriFormatDB($find_url);	
	$find_url1 = \Profistudio\Seo\Url::uriUnFormatDB($find_url1);
	$find_url1 = \Profistudio\Seo\Url::uriDecode2($find_url1);
	$find_url1 = \Profistudio\Seo\Url::deleteParamsClear($find_url1);
	$find_url1 = \Profistudio\Seo\Url::uriFormatDB($find_url1);
	$arFilter["URL"] = '%' . $find_url1 . '%';
}

if($find_url_new = trim($find_url_new))
{
	$arFilterNew = array("LOGIC" => "OR");
	
	$arFilterNew["URL_NEW"] = '%' . $find_url_new . '%';
	
	$find_url_new1 = \Profistudio\Seo\Url::uriFormatDB($find_url_new);	
	$find_url_new1 = \Profistudio\Seo\Url::uriUnFormatDB($find_url_new1);
	$find_url_new1 = \Profistudio\Seo\Url::uriDecode2($find_url_new1);
	$find_url_new1 = \Profistudio\Seo\Url::uriFormatDB($find_url_new1);	
	$arFilterNew["URL_NEW_FORMAT"] = '%' . $find_url_new1 . '%';
	
	if(!empty($arFilterNew["URL_NEW"]))
	{
		$arFilter[] = $arFilterNew;
	}
}

if($find_redirect_on = trim($find_redirect_on))
{
	$arFilter["REDIRECT_ON"] = $find_redirect_on;
}

if($find_no_index = trim($find_no_index))
{
	$arFilter["NO_INDEX"] = $find_no_index;
}

if($find_canonical_on = trim($find_canonical_on))
{
	$arFilter["CANONICAL_ON"] = $find_canonical_on;
}

if($find_sitemap = trim($find_sitemap))
{
	$arFilter["SITEMAP"] = $find_sitemap;
}

if($find_bread_crumb_type = trim($find_bread_crumb_type))
{
	$arFilter["BREAD_CRUMB_TYPE"] = $find_bread_crumb_type;
}

if($_REQUEST['del_filter'] == "Y")
{
	$arFilter = array();
}

$arFilter["SITE_ID"] = htmlspecialcharsbx($_REQUEST['SITE_ID']);
$arFilter["!SITE_ID"] = false;

if($arID = $adminList->GroupAction())
{
	if(isset($_REQUEST['action_target']) && $_REQUEST['action_target'] === 'selected')
	{
		$arID = array();
		
		$rsData = PageTable::getList(array(
			'filter' => $arFilter,
			'select' => array("ID")
		));			
		while($arItem = $rsData->Fetch())
		{
			$arID[] = $arItem['ID'];
		}
		unset($arItem, $rsData);
	}
	
	if(!empty($arID))
	{
		foreach($arID as $ID)
		{
			if(intval($ID) <= 0)
				continue;

			$ID = intval($ID);

			if($_REQUEST['action'] == "delete")
			{
				@set_time_limit(0);

				$DB->StartTransaction();

				$APPLICATION->ResetException();

				if(!PageTable::delete($ID))
				{
					$DB->Rollback();
					
					if($ex = $APPLICATION->GetException())
						$adminList->AddGroupError($ex->GetString(), $ID);
					else
						$adminList->AddGroupError(str_replace("#ID#", $ID, GetMessage("profistudio.seo_ERROR_DELETE")), $ID);
				}

				$DB->Commit();
			}
			elseif($_REQUEST['action'] == "activate" || $_REQUEST['action'] == "deactivate")
			{
				if(!PageTable::update($ID, array("ACTIVE" => (($_REQUEST['action'] == "activate" ? "Y" : "N")), "TIMESTAMP_X" => new \Bitrix\Main\Type\DateTime())))
				{
					if($ex = $APPLICATION->GetException())
						$adminList->AddGroupError($ex->GetString(), $ID);
					else
						$adminList->AddGroupError(str_replace("#ID#", $ID, GetMessage("profistudio.seo_ERROR_UPDATE")), $ID);
				}
			}
		}
	}		
}

$itemsList = PageTable::getList(array(
	'order' => array($by => $order),
	'filter' => $arFilter
));

$itemsListAll = PageTable::getList(array(
	'count_total' => true
));

$countItems = $itemsListAll->getCount();

$countItemsMax = 3;

if($demo_version and $countItems >= $countItemsMax)
{
	$can_write = false;
}

$arHeaders = array(
	array(    
        "id"         => "ID",
        "content"    => Loc::getMessage("profistudio.seo_OPTIONS_ID"),
        "sort"       => "ID",
        "default"    => true,
    ),
	array(    
        "id"         => "ACTIVE",
        "content"    => Loc::getMessage("profistudio.seo_OPTIONS_ACTIVE"),
		"sort"       => "ACTIVE",
        "default"    => true,
    ),
	array(    
        "id"         => "NAME",
        "content"    => Loc::getMessage("profistudio.seo_OPTIONS_NAME"),
        "sort"       => "NAME",
        "default"    => true,
    ),
	array(    
        "id"         => "URL",
        "content"    => Loc::getMessage("profistudio.seo_OPTIONS_URL"),
		"sort"       => "URL",
        "default"    => true,
    ),
	array(    
        "id"         => "URL_NEW",
        "content"    => Loc::getMessage("profistudio.seo_OPTIONS_URL_NEW"),
		"sort"       => "URL_NEW",
        "default"    => true,
    ),
	array(    
        "id"         => "REDIRECT_ON",
        "content"    => Loc::getMessage("profistudio.seo_OPTIONS_REDIRECT_ON"),
		"sort"       => "REDIRECT_ON",
        "default"    => true,
    ),
	array(    
        "id"         => "NO_INDEX",
        "content"    => Loc::getMessage("profistudio.seo_OPTIONS_NO_INDEX"),
		"sort"       => "NO_INDEX",
        "default"    => true,
    ),
	array(    
        "id"         => "CANONICAL_ON",
        "content"    => Loc::getMessage("profistudio.seo_OPTIONS_CANONICAL_ON"),
		"sort"       => "CANONICAL_ON",
        "default"    => true,
    ),
	array(    
        "id"         => "SITEMAP",
        "content"    => Loc::getMessage("profistudio.seo_OPTIONS_SITEMAP"),
		"sort"       => "SITEMAP",
        "default"    => true,
    ),
	array(    
        "id"         => "TIMESTAMP_X",
        "content"    => Loc::getMessage("profistudio.seo_OPTIONS_TIMESTAMP_X"),
        "sort"       => "TIMESTAMP_X",
        "default"    => true,
    ),
	array(    
        "id"         => "DATE_CREATE",
        "content"    => Loc::getMessage("profistudio.seo_OPTIONS_DATE_CREATE"),
        "sort"       => "DATE_CREATE",
        "default"    => false,
    ),
	array(    
        "id"         => "SORT",
        "content"    => Loc::getMessage("profistudio.seo_OPTIONS_SORT"),
        "sort"       => "SORT",
        "default"    => false,
    ),
	array(    
        "id"         => "TITLE",
        "content"    => Loc::getMessage("profistudio.seo_OPTIONS_TITLE"),
		"sort"		 => "TITLE",
        "default"    => false,
    ),
	array(    
        "id"         => "ADDITIONAL_TITLE",
        "content"    => Loc::getMessage("profistudio.seo_OPTIONS_ADDITIONAL_TITLE"),
		"sort"		 => "ADDITIONAL_TITLE",
        "default"    => false,
    ),
	array(    
        "id"         => "META_DESCRIPTION",
        "content"    => Loc::getMessage("profistudio.seo_OPTIONS_META_DESCRIPTION"),
		"sort"		 => "META_DESCRIPTION",
        "default"    => false,
    ),
	array(    
        "id"         => "META_KEYWORDS",
        "content"    => Loc::getMessage("profistudio.seo_OPTIONS_META_KEYWORDS"),
		"sort"		 => "META_KEYWORDS",
        "default"    => false,
    ),
	array(    
        "id"         => "BREAD_CRUMB",
        "content"    => Loc::getMessage("profistudio.seo_OPTIONS_BREAD_CRUMB"),
		"sort"		 => "BREAD_CRUMB",
        "default"    => false,
    ),
	array(    
        "id"         => "BREAD_CRUMB_TYPE",
        "content"    => Loc::getMessage("profistudio.seo_OPTIONS_BREAD_CRUMB_TYPE"),
		"sort"		 => "BREAD_CRUMB_TYPE",
        "default"    => true,
    ),
);

$data = new CAdminResult($itemsList, $tableID);
$data->NavStart("20");
$adminList->NavText($data->GetNavPrint(Loc::getMessage("profistudio.seo_PAGES")));
$adminList->AddHeaders($arHeaders);

$arActions = Array();
while($item = $data->NavNext(true, "f_"))
{
	$id = intval($item['ID']);
	
	$strEditLink =  "profistudio.seo_admin_page_edit.php?SITE_ID=" . (isset($_REQUEST['SITE_ID']) ? htmlspecialcharsbx($_REQUEST['SITE_ID']) : '') . "&lang=" . LANGUAGE_ID . "&id=" . $id;
	
	$strCopyLink =  "profistudio.seo_admin_page_edit.php?SITE_ID=" . (isset($_REQUEST['SITE_ID']) ? htmlspecialcharsbx($_REQUEST['SITE_ID']) : '') . "&lang=" . LANGUAGE_ID . "&copy_id=" . $id;

	$row = &$adminList->AddRow($item["ID"], $item, $strEditLink, Loc::getMessage("profistudio.seo_EDIT_TITLE"));
	
	$row->AddViewField("ACTIVE", ($item['ACTIVE'] == "Y" ? Loc::getMessage("profistudio.seo_OPTIONS_Y") : Loc::getMessage("profistudio.seo_OPTIONS_N")));
	
	$row->AddViewField("NAME", '<a href="' . $strEditLink . '" class="adm-list-table-icon-link" title="'.GetMessage("IBLIST_A_LIST").'">' . $item["NAME"] . '</a>');
	
	
	$item['URL'] = \Profistudio\Seo\Url::uriUnFormatDB($item['URL']);
	$item['URL'] = \Profistudio\Seo\Url::uriDecode2($item['URL']);
	$row->AddViewField("URL", htmlspecialcharsbx($item["URL"]));
	
	$row->AddViewField("REDIRECT_ON", ($item['REDIRECT_ON'] == "Y" ? Loc::getMessage("profistudio.seo_OPTIONS_Y") : Loc::getMessage("profistudio.seo_OPTIONS_N")));
	
	$row->AddViewField("NO_INDEX", ($item['NO_INDEX'] == "Y" ? Loc::getMessage("profistudio.seo_OPTIONS_Y") : Loc::getMessage("profistudio.seo_OPTIONS_N")));
	
	$row->AddViewField("CANONICAL_ON", ($item['CANONICAL_ON'] == "Y" ? Loc::getMessage("profistudio.seo_OPTIONS_Y") : Loc::getMessage("profistudio.seo_OPTIONS_N")));
	
	$row->AddViewField("SITEMAP", ($item['SITEMAP'] == "Y" ? Loc::getMessage("profistudio.seo_OPTIONS_Y") : Loc::getMessage("profistudio.seo_OPTIONS_N")));
	
	$row->AddViewField("BREAD_CRUMB_TYPE", Loc::getMessage("profistudio.seo_OPTIONS_BREAD_CRUMB_TYPE_" . $item['BREAD_CRUMB_TYPE']));
	
	$arActions = array();
	$arActions[] = array(
		"ICON" => "edit",
		"TEXT" => GetMessage("profistudio.seo_UPDATE_ALT"),
		"ACTION" => $adminList->ActionRedirect($strEditLink),
		"DEFAULT" => true
	);
	if($item["ACTIVE"] == 'Y')
	{
		$arActions[] = array(
			"ICON" => "deactivate",
			"TEXT" => Loc::getMessage("profistudio.seo_DEACTIVATE_ALT"),
			"ACTION" => $adminList->ActionDoGroup($item["ID"], "deactivate", "SITE_ID=" . (isset($_REQUEST['SITE_ID']) ? htmlspecialcharsbx($_REQUEST['SITE_ID']) : ''))
		);
	}
	else
	{
		$arActions[] = array(
			"ICON" => "activate", 
			"TEXT" => Loc::getMessage("profistudio.seo_ACTIVATE_ALT"),
			"ACTION" => $adminList->ActionDoGroup($item["ID"], "activate", "SITE_ID=" . (isset($_REQUEST['SITE_ID']) ? htmlspecialcharsbx($_REQUEST['SITE_ID']) : '')) 
		);
	}
	$arActions[] = array(
		"SEPARATOR" => true
	);
	$arActions[] = array(
		"ICON" => "delete",
		"TEXT" => GetMessage("profistudio.seo_DELETE_ALT"),
		"ACTION" => "if(confirm('".GetMessageJS('profistudio.seo_DELETE_JS')."')) " . $adminList->ActionDoGroup($item["ID"], "delete", "SITE_ID=" . (isset($_REQUEST['SITE_ID']) ? htmlspecialcharsbx($_REQUEST['SITE_ID']) : ''))
	);
	$arActions[] = array(
		"SEPARATOR" => true
	);
	$arActions[] = array(
		"ICON" => "copy",
		"TEXT" => Loc::getMessage("profistudio.seo_COPY_ALT"),
		"ACTION" => $adminList->ActionRedirect($strCopyLink),
		"DEFAULT" => true
	);	
	$row->AddActions($arActions); 
	unset($arActions);
};

if(isset($row))
{
	unset($row);
}

if($CONS_RIGHT == 'W')
{
	$adminList->AddGroupActionTable(
		array(
			"delete" => Loc::getMessage("profistudio.seo_DELETE_ALT"),
			"activate" => Loc::getMessage("profistudio.seo_ACTIVATE_ALT"),
			"deactivate" => Loc::getMessage("profistudio.seo_DEACTIVATE_ALT")
		)
	);
}

if($can_write)
{	
	$aContext = array(	
		array(
			"TEXT" => Loc::getMessage("profistudio.seo_page_ADD"),
			"ICON" => "btn_new",
			"LINK" => "profistudio.seo_admin_page_edit.php?SITE_ID=" . (isset($_REQUEST['SITE_ID']) ? htmlspecialcharsbx($_REQUEST['SITE_ID']) : '') . "&lang=".LANGUAGE_ID,
			"TITLE" => Loc::getMessage("profistudio.seo_page_ADD_TITLE")
		),
	);
}
else
{
	$aContext = array();
}	

$adminList->AddAdminContextMenu($aContext);

$adminList->CheckListMode();

$APPLICATION->SetTitle(str_replace('#SITE_ID#', '[' . htmlspecialcharsbx($_REQUEST['SITE_ID']) . ']' , Loc::getMessage("profistudio.seo_TITLE")));

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_admin_after.php");
?>
<form method="GET" name="find_form" id="find_form" action="<?=$APPLICATION->GetCurPage()?>">
<?
$filterUrl = $APPLICATION->GetCurPageParam();
$oFilter = new CAdminFilter(
	$tableID . "_filter",
	array(
		"ID" => "ID",
		"NAME" => Loc::getMessage("profistudio.seo_OPTIONS_NAME"),
		"ACTIVE" => Loc::getMessage("profistudio.seo_OPTIONS_ACTIVE"),
		"URL" => Loc::getMessage("profistudio.seo_OPTIONS_URL"),
		"URL_NEW" => Loc::getMessage("profistudio.seo_OPTIONS_URL_NEW"),
		"REDIRECT_ON" => Loc::getMessage("profistudio.seo_OPTIONS_REDIRECT_ON"),
		"NO_INDEX" => Loc::getMessage("profistudio.seo_OPTIONS_NO_INDEX"),
		"CANONICAL_ON" => Loc::getMessage("profistudio.seo_OPTIONS_CANONICAL_ON"),
		"SITEMAP" => Loc::getMessage("profistudio.seo_OPTIONS_SITEMAP"),
		"BREAD_CRUMB_TYPE" => Loc::getMessage("profistudio.seo_OPTIONS_BREAD_CRUMB_TYPE")
	),
	array("table_id" => $tableID, "url" => $filterUrl)
); 
?>
<? $oFilter->Begin();?> 
<tr> 
	<td>ID:</td> 
	<td> 
		<input type="text" name="find_id" size="10" value="<? htmlspecialcharsex($find_id)?>"> 
	</td> 
</tr>
<tr> 
	<td><?=Loc::getMessage("profistudio.seo_OPTIONS_NAME")?>:</td> 
	<td> 
		<input type="text" name="find_name" size="47" value="<? htmlspecialcharsex($find_name)?>"> 
	</td> 
</tr>
<tr> 
	<td><?=Loc::getMessage("profistudio.seo_OPTIONS_ACTIVE")?>:</td> 
	<td>
		<select name="find_active" >
			<option value="" <?if($find_active == "") echo " selected"?>><?=Loc::getMessage("profistudio.seo_OPTIONS_ALL")?></option>
			<option value="Y" <?if($find_active == "Y") echo " selected"?>><?=Loc::getMessage("profistudio.seo_OPTIONS_Y")?></option>
			<option value="N" <?if($find_active == "N") echo " selected"?>><?=Loc::getMessage("profistudio.seo_OPTIONS_N")?></option>
		</select>
	</td> 
</tr>
<tr> 
	<td><?=Loc::getMessage("profistudio.seo_OPTIONS_URL")?>:</td> 
	<td> 
		<input type="text" name="find_url" size="47" value="<? htmlspecialcharsex($find_url)?>"> 
	</td> 
</tr>
<tr> 
	<td><?=Loc::getMessage("profistudio.seo_OPTIONS_URL_NEW")?>:</td> 
	<td> 
		<input type="text" name="find_url_new" size="47" value="<? htmlspecialcharsex($find_url_new)?>"> 
	</td> 
</tr>
<tr> 
	<td><?=Loc::getMessage("profistudio.seo_OPTIONS_REDIRECT_ON")?>:</td> 
	<td>
		<select name="find_redirect_on" >
			<option value="" <?if($find_redirect_on == "") echo " selected"?>><?=Loc::getMessage("profistudio.seo_OPTIONS_ALL")?></option>
			<option value="Y" <?if($find_redirect_on == "Y") echo " selected"?>><?=Loc::getMessage("profistudio.seo_OPTIONS_Y")?></option>
			<option value="N" <?if($find_redirect_on == "N") echo " selected"?>><?=Loc::getMessage("profistudio.seo_OPTIONS_N")?></option>
		</select> 
	</td> 
</tr>
<tr> 
	<td><?=Loc::getMessage("profistudio.seo_OPTIONS_NO_INDEX")?>:</td> 
	<td>
		<select name="find_no_index" >
			<option value="" <?if($find_no_index == "") echo " selected"?>><?=Loc::getMessage("profistudio.seo_OPTIONS_ALL")?></option>
			<option value="Y" <?if($find_no_index == "Y") echo " selected"?>><?=Loc::getMessage("profistudio.seo_OPTIONS_Y")?></option>
			<option value="N" <?if($find_no_index == "N") echo " selected"?>><?=Loc::getMessage("profistudio.seo_OPTIONS_N")?></option>
		</select>
	</td> 
</tr>
<tr> 
	<td><?=Loc::getMessage("profistudio.seo_OPTIONS_CANONICAL_ON")?>:</td> 
	<td>
		<select name="find_canonical_on" >
			<option value="" <?if($find_canonical_on == "") echo " selected"?>><?=Loc::getMessage("profistudio.seo_OPTIONS_ALL")?></option>
			<option value="Y" <?if($find_canonical_on == "Y") echo " selected"?>><?=Loc::getMessage("profistudio.seo_OPTIONS_Y")?></option>
			<option value="N" <?if($find_canonical_on == "N") echo " selected"?>><?=Loc::getMessage("profistudio.seo_OPTIONS_N")?></option>
		</select>
	</td> 
</tr>
<tr> 
	<td><?=Loc::getMessage("profistudio.seo_OPTIONS_SITEMAP")?>:</td> 
	<td>
		<select name="find_sitemap" >
			<option value="" <?if($find_sitemap == "") echo " selected"?>><?=Loc::getMessage("profistudio.seo_OPTIONS_ALL")?></option>
			<option value="Y" <?if($find_sitemap == "Y") echo " selected"?>><?=Loc::getMessage("profistudio.seo_OPTIONS_Y")?></option>
			<option value="N" <?if($find_sitemap == "N") echo " selected"?>><?=Loc::getMessage("profistudio.seo_OPTIONS_N")?></option>
		</select>
	</td> 
</tr>
<tr> 
	<td><?=Loc::getMessage("profistudio.seo_OPTIONS_BREAD_CRUMB_TYPE")?>:</td> 
	<td>
		<select name="find_bread_crumb_type" >
			<option value="" <?if($find_bread_crumb_type == "") echo " selected"?>><?=Loc::getMessage("profistudio.seo_OPTIONS_ALL")?></option>
			<option value="N" <?if($find_bread_crumb_type == "N") echo " selected"?>><?=Loc::getMessage("profistudio.seo_OPTIONS_BREAD_CRUMB_TYPE_N")?></option>
			<option value="C" <?if($find_bread_crumb_type == "C") echo " selected"?>><?=Loc::getMessage("profistudio.seo_OPTIONS_BREAD_CRUMB_TYPE_C")?></option>
			<option value="A" <?if($find_bread_crumb_type == "A") echo " selected"?>><?=Loc::getMessage("profistudio.seo_OPTIONS_BREAD_CRUMB_TYPE_A")?></option>
		</select>
	</td> 
</tr>
<? 
$oFilter->Buttons(array("table_id" => $tableID, "url" => $APPLICATION->GetCurPage() . "?SITE_ID=" . (isset($_REQUEST['SITE_ID']) ? htmlspecialcharsbx($_REQUEST['SITE_ID']) : '') . "&lang=".LANGUAGE_ID, "form" => "find_form")); 
$oFilter->End(); 
?> 
</form>
<?
if($demo_version)
{
	echo BeginNote();
	echo(Loc::getMessage("profistudio.seo_OPTIONS_DEMO_MAX_COUNT"));
	echo EndNote();
}

$adminList->DisplayList();

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_admin.php");
?>