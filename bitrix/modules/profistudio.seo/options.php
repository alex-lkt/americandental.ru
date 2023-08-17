<?
use Bitrix\Main\Loader;
use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);

$module_id = "profistudio.seo";

global $APPLICATION;
$POST_RIGHT = $APPLICATION->GetGroupRight($module_id);
if($POST_RIGHT < "W")
	$APPLICATION->AuthForm(Loc::getMessage("ACCESS_DENIED"));

ClearVars();

if(!Loader::IncludeModule('iblock') || !Loader::IncludeModule($module_id))
	return;

IncludeModuleLangFile($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/options.php");
IncludeModuleLangFile($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/".$module_id."/include.php");
IncludeModuleLangFile(__FILE__);

\CJSCore::Init(array("jquery"));

$arSitemapOptions = array(
	"SITEMAP_GENERATE_" => array(
		"SITEMAP_GENERATE_",
		Loc::getMessage("PROFISTUDIO_SEO_PARAMS_SITEMAP_GENERATE"),
		"N",
		array("checkbox", "N"),
	),
	"PROTO_" => array(
		"PROTO_",
		Loc::getMessage("PROFISTUDIO_SEO_PARAMS_PROTO"),
		'http',
		array("list"),
	),
	"SITEMAPNAME_" => array(
		"SITEMAPNAME_",
		Loc::getMessage("PROFISTUDIO_SEO_PARAMS_SITEMAP_NAME"),
		'sitemap.xml',
		array("text"),
	)
);

$arCanonicalOptions = array(
	"CANONICAL_ADDR_" => array(
		"CANONICAL_ADDR_",
		Loc::getMessage("PROFISTUDIO_SEO_PARAMS_CANONICAL_ADDR"),
		'/',
		array("text"),
	)
);
			
$aTabs = array(
	array(
		"DIV" => "base",
		"TAB" => Loc::getMessage("PROFISTUDIO_SEO_TAB_BASE"),
		"ICON" => "support_settings",
		"TITLE" => Loc::getMessage("PROFISTUDIO_SEO_TAB_BASE_TITLE"),
		"OPTIONS" => array(),	
	),
	array(
		"DIV" => "sitemap",
		"TAB" => Loc::getMessage("PROFISTUDIO_SEO_TAB_SITEMAP"),
		"ICON" => "support_settings",
		"TITLE" => Loc::getMessage("PROFISTUDIO_SEO_TAB_SITEMAP_TITLE"),
		"OPTIONS" => array(),	
	),
	array(
		"DIV" => "canonical",
		"TAB" => Loc::getMessage("PROFISTUDIO_SEO_TAB_CANONICAL"),
		"ICON" => "support_settings",
		"TITLE" => Loc::getMessage("PROFISTUDIO_SEO_TAB_CANONICAL_TITLE"),
		"OPTIONS" => array(),	
	),
	array(
		"DIV" => "rights",
		"TAB" => Loc::getMessage("MAIN_TAB_RIGHTS"),
		"ICON" => "",
		"TITLE" => Loc::getMessage("MAIN_TAB_TITLE_RIGHTS")
	),
);

$dbSites = CSite::GetList($by = "active", $order = "desc", array("ACTIVE" => "Y"));
$arSites = array();
$arSitesFull = array();
while($site = $dbSites->Fetch())
{	
	$arSites[] = $site["ID"];
	$arSitesFull[] = $site;
}

$aSubTabs0 = array();
foreach($arSitesFull as $arSite)
{
	$aSubTabs0[] = array(
		"DIV" => "site0_".$arSite['ID'],
		"TAB" => $arSite["NAME"]."(".$arSite['ID'].")",
		'TITLE' => ''
	);
}
$subTabControl0 = new CAdminViewTabControl("subTabControl0", $aSubTabs0);

$aSubTabs1 = array();
foreach($arSitesFull as $arSite)
{
	$aSubTabs1[] = array(
		"DIV" => "site1_".$arSite['ID'],
		"TAB" => $arSite["NAME"]."(".$arSite['ID'].")",
		'TITLE' => ''
	);
}
$subTabControl1 = new CAdminViewTabControl("subTabControl1", $aSubTabs1);

$aSubTabs2 = array();
foreach($arSitesFull as $arSite)
{
	$aSubTabs2[] = array(
		"DIV" => "site2_".$arSite['ID'],
		"TAB" => $arSite["NAME"]."(".$arSite['ID'].")",
		'TITLE' => ''
	);
}
$subTabControl2 = new CAdminViewTabControl("subTabControl2", $aSubTabs2);

$tabControl = new \CAdminTabControl("tabControl", $aTabs);

if($REQUEST_METHOD == "POST" && $POST_RIGHT == "W" && check_bitrix_sessid())
{	
	if(strlen($_POST["RestoreDefaults"]) > 0)
	{
		COption::RemoveOption($module_id);
		$z = CGroup::GetList($v1 = "id", $v2 = "asc", array("ACTIVE" => "Y", "ADMIN" => "N"));
		while($zr = $z->Fetch())
		{
			$APPLICATION->DelGroupRight($module_id, array($zr["ID"]));
		}
	}
	elseif(strlen($Update) > 0 || strlen($_POST['update_site_options_site_id']) > 0 || strlen($_POST['delete_site_options_site_id']) > 0)
	{
		COption::SetOptionString($module_id, "PARAMS_NO_USE", trim($_POST["PARAMS_NO_USE"]));
		
		\Profistudio\Seo\Admin::saveOptionsParamsClear();
		
		foreach($arSites as $key => $arSite)
		{			
			if($_POST["SITEMAP_GENERATE_".$arSite] != 'Y') $_POST["SITEMAP_GENERATE_".$arSite] = 'N';
			COption::SetOptionString($module_id, "SITEMAP_GENERATE_".$arSite, trim($_POST["SITEMAP_GENERATE_".$arSite]));
			COption::SetOptionString($module_id, "PROTO_".$arSite, trim($_POST["PROTO_".$arSite]));
			COption::SetOptionString($module_id, "SITEMAPNAME_".$arSite, trim($_POST["SITEMAPNAME_".$arSite]));
			
			COption::SetOptionString($module_id, "CANONICAL_ADDR_".$arSite, trim($_POST["CANONICAL_ADDR_".$arSite]));			
			
			\Profistudio\Seo\Sitemap::generate($arSite, true);
		}
		
		if(strlen($_POST['update_site_options_site_id']) > 0)
		{
			COption::SetOptionString($module_id, "PAGE404_".htmlspecialcharsbx($_POST['update_site_options_site_id']), trim($_POST["PAGE404_".htmlspecialcharsbx($_POST['update_site_options_site_id'])]));
			
			\Profistudio\Seo\Admin::siteUpdateOptions(htmlspecialcharsbx($_POST['update_site_options_site_id']));
		}
		
		if(strlen($_POST['delete_site_options_site_id']) > 0)
		{			
			\Profistudio\Seo\Admin::siteDeleteOptions(htmlspecialcharsbx($_POST['delete_site_options_site_id']));
			
			COption::SetOptionString($module_id, "PAGE404_".htmlspecialcharsbx($_POST['delete_site_options_site_id']), "/404.php");
		}
	}
	
	$Update = $Update.$Apply;
	ob_start();
	require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/admin/group_rights.php");
	ob_end_clean();
	
	if(strlen($_REQUEST["back_url_settings"]) > 0)
	{
		if((strlen($Apply) > 0) || (strlen($RestoreDefaults) > 0))
			LocalRedirect($APPLICATION->GetCurPage()."?mid=".urlencode($module_id)."&mid_menu=1&lang=".urlencode(LANGUAGE_ID)."&back_url_settings=".urlencode($_REQUEST["back_url_settings"])."&".$tabControl->ActiveTabParam());
		else
			LocalRedirect($_REQUEST["back_url_settings"]);
	}
	else
	{
		LocalRedirect($APPLICATION->GetCurPage()."?mid=".urlencode($module_id)."&mid_menu=1&lang=".urlencode(LANGUAGE_ID)."&".$tabControl->ActiveTabParam());
	}
}

$tabControl->Begin();
?>
<form method="post" action="<?=$APPLICATION->GetCurPage();?>?mid=<?=urlencode($mid)?>&amp;mid_menu=1&amp;lang=<?=LANGUAGE_ID?>" id="profistudio_form_settings">
	<input type="hidden" name="update_site_options_site_id" value="">
	<input type="hidden" name="delete_site_options_site_id" value="">
	<? $tabControl->BeginNextTab();?>
  	<tr>
		<td width="40%"><?=Loc::getMessage("PROFISTUDIO_SEO_PARAMS_NO_USE")?>:</td>
		<td>
			<textarea rows="5" cols="70" name="PARAMS_NO_USE"><?=htmlspecialcharsbx(COption::GetOptionString($module_id, "PARAMS_NO_USE", 'clear_cache, clear_cache_session, bitrix_include_areas, PAGEN_1, PAGEN_2, back_url_admin, BACKURL, backurl, BACK_URL, back_url, lang, Lang, action, from, ADD_TO_COMPARE_LIST, ORDER_BY, register, forgot_password, change_password, login, logout, auth, print, print_course, how'))?></textarea>
		</td>
	</tr>
	<tr>
    	<td colspan="2">
        <?			
        $subTabControl0->Begin();
		foreach($aSubTabs0 as $key => $aSubTab0):
			$arSite = $arSites[$key];
			$site_dir = $arSitesFull[$key]["DIR"];
			$subTabControl0->BeginNextTab();			
			
			$isSiteOptionsCheck = \Profistudio\Seo\Admin::isSiteOptionsCheck($arSite);
			
			if($isSiteOptionsCheck)
				$str_site_help = Loc::getMessage("PROFISTUDIO_SEO_SITE_OPTIONS_REWRITE_HELP_MESS_TITLE_Y");
			else
				$str_site_help = Loc::getMessage("PROFISTUDIO_SEO_SITE_OPTIONS_REWRITE_HELP_MESS_TITLE_N");				
			
			$str_site_help .= str_replace('#SITE_ID#', htmlspecialcharsbx($arSite), Loc::getMessage("PROFISTUDIO_SEO_SITE_OPTIONS_REWRITE_HELP_MESS_FILE"));
			$str_site_help = str_replace('#SITE_DIR#', $site_dir, $str_site_help);
			$str_site_help = str_replace('#LANGUAGE_ID#', LANGUAGE_ID, $str_site_help);
			
			$doc_root = $arSitesFull[$key]["DOC_ROOT"];
			
			if(!empty($doc_root))
			{
				$doc_root = \Bitrix\Main\IO\Path::normalize($doc_root);
			}
			else
			{
				$doc_root = \Bitrix\Main\Application::getDocumentRoot();
			}
			
			$site_dir = $arSitesFull[$key]["DIR"];
			
			$site_path = \Bitrix\Main\IO\Path::combine($doc_root, $site_dir);
			
			$file_url = \Bitrix\Main\IO\Path::combine($site_path, '/profistudio_seo_file_rewrite.php');
			
			if(\Bitrix\Main\IO\File::isFileExists($file_url))
			{
				$file_str = Loc::getMessage("PROFISTUDIO_SEO_SITE_OPTIONS_REWRITE_HELP_FILE1") . TxtToHTML(htmlspecialcharsbx(\Bitrix\Main\IO\File::getFileContents($file_url)));
			}
			else
			{
				$file_str = str_replace('#SITE_ID#', htmlspecialcharsbx($arSite), Loc::getMessage("PROFISTUDIO_SEO_SITE_OPTIONS_REWRITE_HELP_FILE"));
			}
			
			$file_str .= '<br><br>';			
			
			$str_site_help .= $file_str;
			
			$str_rule = str_replace('#SITE_ID#', htmlspecialcharsbx($arSite), Loc::getMessage("PROFISTUDIO_SEO_SITE_OPTIONS_REWRITE_HELP_MESS_RULE"));
			$str_rule = str_replace('#SITE_DIR#', $site_dir, $str_rule);
			$str_rule = str_replace('#LANGUAGE_ID#', LANGUAGE_ID, $str_rule);
			
			$str_site_help .= $str_rule;			
			?>
			<table id="edit0_edit_table" class="adm-detail-content-table edit-table">
				<tr class="heading">
					<? if($isSiteOptionsCheck):?>
					<td colspan="2"><?=Loc::getMessage("PROFISTUDIO_SEO_SITE_OPTIONS_REWRITE_HELP_TITLE_Y")?></td>
					<? else:?>
					<td colspan="2"><?=Loc::getMessage("PROFISTUDIO_SEO_SITE_OPTIONS_REWRITE_HELP_TITLE_N")?></td>
					<? endif;?>
				</tr>
				<tr>
					<td width="40%"><?=Loc::getMessage("PROFISTUDIO_SEO_PARAMS_PAGE404")?>:</td>
					<td>
						<input type="text" name="PAGE404_<?=htmlspecialcharsbx($arSite)?>" value="<?=htmlspecialcharsbx(COption::GetOptionString($module_id, "PAGE404_" . htmlspecialcharsbx($arSite), '/404.php'))?>">
					</td>
				</tr> 				          		
           		<tr class="profistudio_seo_site_options_box_created" <? if(!$isSiteOptionsCheck):?>style="display:none;"<? endif;?>>
					<td width="40%"><?=Loc::getMessage("PROFISTUDIO_SEO_SITE_OPTIONS_REWRITE_CREATED")?>:</td>
					<td>
                    	<input type="button" class="profistudio_seo_site_options_generate" data-siteid="<?=$arSite?>" value="<?=Loc::getMessage("PROFISTUDIO_SEO_SITE_OPTIONS_REWRITE_REGENERATE_BTN")?>">
                    	<input type="button" class="profistudio_seo_site_options_delete" data-siteid="<?=$arSite?>" value="<?=Loc::getMessage("PROFISTUDIO_SEO_SITE_OPTIONS_REWRITE_DELETE_BTN")?>">
					</td>
				</tr>				        	
            	<tr class="profistudio_seo_site_options_box_not_created" <? if($isSiteOptionsCheck):?>style="display:none;"<? endif;?>>
					<td width="40%"><?=Loc::getMessage("PROFISTUDIO_SEO_SITE_OPTIONS_REWRITE_AUTO_TITLE")?>:</td>
					<td>
                    	<input type="button" class="profistudio_seo_site_options_generate" data-siteid="<?=$arSite?>" value="<?=Loc::getMessage("PROFISTUDIO_SEO_SITE_OPTIONS_REWRITE_GENERATE_BTN")?>">
					</td>
				</tr>
				<tr class="profistudio_seo_site_options_box_created_ok" style="display:none; color: #090; font-weight: bold;">
					<td colspan="2" style="text-align: center;"><?=Loc::getMessage("PROFISTUDIO_SEO_SITE_OPTIONS_OK_CREATED")?></td>
				</tr>
				<tr class="profistudio_seo_site_options_box_created_error" style="display:none; color: #f00; font-weight: bold;">
					<td colspan="2"></td>
				</tr>
				<tr>
					<td colspan="2">
						<?
						echo BeginNote();
						echo($str_site_help);
						echo EndNote();
						?>
					</td>
				</tr>
			</table>
			<?
		endforeach;
		$subTabControl0->End();
		?>
		</td>
	</tr>
	<?
	$tabControl->BeginNextTab();
	?>		
	<tr>
    	<td colspan="2">
        <?			
        $subTabControl1->Begin();
		foreach($aSubTabs1 as $key => $aSubTab1):
			$arSite = $arSites[$key];
			$subTabControl1->BeginNextTab();
			?>
			<table id="edit1_edit_table" class="adm-detail-content-table edit-table">
				<tr>
					<td width="40%"><?=Loc::getMessage("PROFISTUDIO_SEO_PARAMS_SITEMAP_GENERATE")?>:</td>
					<td>
						<?
						$Option = $arSitemapOptions['SITEMAP_GENERATE_'];
						$code = $Option[0] . $arSite;
						$val = COption::GetOptionString($module_id, $code, $Option[2]);
						?>
						<input type="checkbox" name="<?=htmlspecialcharsbx($code)?>" value="Y"<? if($val == "Y") echo " checked";?>>
					</td>
				</tr>           	
            	<tr>
					<td width="40%"><?=Loc::getMessage("PROFISTUDIO_SEO_PARAMS_SITEMAP_ADDR")?>:</td>
					<td>
						<?
						$Option = $arSitemapOptions['PROTO_'];
						$code = $Option[0] . $arSite;
						$val = COption::GetOptionString($module_id, $code, $Option[2]);
						$siteServerName = $arSitesFull[$key]['SERVER_NAME'];
						if(empty($siteServerName))
						{			
							$siteServerName = trim(\COption::GetOptionString('main', 'server_name', ''));		
						}
						?>
						<select name="<?=htmlspecialcharsbx($code)?>">
							<option value="http" <?=($val == "http" ? 'selected' : '')?>>http</option>
							<option value="https" <?=($val == "https" ? 'selected' : '')?>>https</option>
						</select>
						<b> : // <?=$siteServerName?> / </b>
						<?
						$Option = $arSitemapOptions['SITEMAPNAME_'];
						$code = $Option[0] . $arSite;
						$val = COption::GetOptionString($module_id, $code, $Option[2]);
						?>
						<input type="text" name="<?=htmlspecialcharsbx($code)?>" value="<?=$val?>">
					</td>
				</tr>
			</table>
			<?
		endforeach;
		$subTabControl1->End();
		?>
        </td>
	</tr>
    <?    
	$tabControl->BeginNextTab();
	?>		
	<tr>
    	<td colspan="2">
        <?			
        $subTabControl2->Begin();
		foreach($aSubTabs2 as $key => $aSubTab2):
			$arSite = $arSites[$key];
			$subTabControl2->BeginNextTab();
			?>
			<table id="edit2_edit_table" class="adm-detail-content-table edit-table">				        	
            	<tr>
					<td width="40%"><?=Loc::getMessage("PROFISTUDIO_SEO_PARAMS_CANONICAL_ADDR")?>:</td>
					<td>
                    	<?
						$Option = $arCanonicalOptions['CANONICAL_ADDR_'];
						$code = $Option[0] . $arSite;
						$val = COption::GetOptionString($module_id, $code, $Option[2]);
						?>
						<input type="text" name="<?=htmlspecialcharsbx($code)?>" value="<?=$val?>">
					</td>
				</tr>
			</table>
			<?
		endforeach;
		$subTabControl2->End();
		?>
		</td>
	</tr>
	<?
	$tabControl->BeginNextTab();
	require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/admin/group_rights.php");
	$tabControl->Buttons();
	?>
	<input <?if ($POST_RIGHT < "W") echo "disabled" ?> type="submit" name="Update" value="<?=Loc::getMessage("MAIN_SAVE")?>" class="adm-btn-save">
	<input type="hidden" name="Update" value="Y">
	<input type="reset" name="reset" value="<?=Loc::getMessage("MAIN_RESET")?>">
	<input <?if ($POST_RIGHT < "W") echo "disabled" ?> type="submit" title="<?=Loc::getMessage("MAIN_HINT_RESTORE_DEFAULTS")?>" OnClick="return confirm('<?=AddSlashes(Loc::getMessage("MAIN_HINT_RESTORE_DEFAULTS_WARNING"))?>')" value="<?=Loc::getMessage("MAIN_RESTORE_DEFAULTS")?>" name="RestoreDefaults">
	<?=bitrix_sessid_post();?>
	<?$tabControl->End();?>
</form>
<script>
jQuery(document).ready(function(){	
	var $form = jQuery('#profistudio_form_settings');
	
	var is_ajax = false;
	
	jQuery('.profistudio_seo_site_options_generate').on('click', function(){	
		
		var $btn = jQuery(this);
		var site_id = $btn.attr('data-siteid');
		$form.find('input[name="update_site_options_site_id"]').val(site_id);
		
		$form.submit();
		
		return false;
	});
	
	jQuery('.profistudio_seo_site_options_delete').on('click', function(){	
		
		var $btn = jQuery(this);
		var site_id = $btn.attr('data-siteid');
		$form.find('input[name="delete_site_options_site_id"]').val(site_id);
		
		$form.submit();
		
		return false;
	});
});
</script>