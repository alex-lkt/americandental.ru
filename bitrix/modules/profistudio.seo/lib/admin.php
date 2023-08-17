<?
namespace Profistudio\Seo;

use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);

class Admin 
{	
	private static $module_id = 'profistudio.seo';
	
	private static $file_rewrite_path = '/profistudio_seo_file_rewrite.php';
	
	private static $file_params_clear = 'profistudio_seo_file_params_clear.php';
	
	private static $page404 = '/404.php';
	
	function setPanelButton()
	{
		global $APPLICATION;
		
		if($GLOBALS['APPLICATION']->GetGroupRight(self::$module_id) < "W")
			return;
		
		$id = $GLOBALS['profi_seo_page_id'];
		
		if(empty($id))
		{
			$id = 0;
		}
		else
		{
			$id = intval($id);
		}
		
		$btnId = "seoprofi-panel-icon";
		
		$cur_uri = htmlspecialcharsbx(rawurlencode(\Bitrix\Main\Context::getCurrent()->getRequest()->getRequestUri()));
		
		$strAddAction = "javascript:(new BX.CAdminDialog({'content_url':'/bitrix/admin/profistudio.seo_admin_page_edit.php?SITE_ID=" . SITE_ID . "&lang=" . LANGUAGE_ID . "&back_url=" . $cur_uri . "', 'width':'1000', 'height':'600', 'buttons': [BX.CAdminDialog.btnSave, BX.CAdminDialog.btnCancel], 'content_post': {'bxpublic': 'Y', 'sessid': '" . bitrix_sessid() . "'}})).Show()";
		
		$strEditAction = "javascript:(new BX.CAdminDialog({'content_url':'/bitrix/admin/profistudio.seo_admin_page_edit.php?SITE_ID=" . SITE_ID . "&lang=" . LANGUAGE_ID . "&id=" . $id . "&back_url=" . $cur_uri . "', 'width':'1000', 'height':'600', 'buttons': [BX.CAdminDialog.btnSave, BX.CAdminDialog.btnCancel], 'content_post': {'bxpublic': 'Y', 'sessid': '" . bitrix_sessid() . "'}})).Show()";
		
		$strDeleteAction = "javascript:(new BX.CAdminDialog({'content_url':'/bitrix/admin/profistudio.seo_admin_page_del.php?SITE_ID=" . SITE_ID . "&lang=" . LANGUAGE_ID . "&id=" . $id . "&back_url=" . $cur_uri . "', 'width':'800', 'height':'400', 'content_post': {'bxpublic': 'Y', 'sessid': '" . bitrix_sessid() . "'}})).Show()";
		
		$btn_arr = Array(
			"ID" => $btnId,
			"TEXT" => Loc::getMessage("PROFISTUDIO_SEO_PANEL_BTN_TEXT"),
			"TYPE" => "BIG",
			"MAIN_SORT" => 200,
			"SORT" => 50,
			"HREF" => "",
			"ICON" => "seoprofi-panel-icon",			
			"ALT" => Loc::getMessage("PROFISTUDIO_SEO_PANEL_BTN_ALT"),
			"HINT" => array(
				"TITLE" => Loc::getMessage("PROFISTUDIO_SEO_PANEL_BTN_HINT_TITLE"),
				"TEXT" => Loc::getMessage("PROFISTUDIO_SEO_PANEL_BTN_HINT_ADD_TEXT") 
			),
			"HINT_MENU" => array(
				"TITLE" => Loc::getMessage("PROFISTUDIO_SEO_PANEL_BTN_HINT_MENU_TITLE"),
				"TEXT" => Loc::getMessage("PROFISTUDIO_SEO_PANEL_BTN_HINT_MENU_ADD_TEXT")
			),
		);
		
		if($id > 0)
		{
			$btn_arr["HINT"]["TEXT"] = Loc::getMessage("PROFISTUDIO_SEO_PANEL_BTN_HINT_EDIT_TEXT");
			$btn_arr["HINT_MENU"]["TEXT"] = Loc::getMessage("PROFISTUDIO_SEO_PANEL_BTN_HINT_MENU_EDIT_TEXT");
			$btn_arr["SRC"]	= "/bitrix/panel/profistudio.seo/images/icon-panel-seo-edit2.png";
			$btn_arr["HREF"] = $strEditAction;
		}
		else
		{
			$btn_arr["SRC"]	= "/bitrix/panel/profistudio.seo/images/icon-panel-seo-add2.png";
			$btn_arr["HREF"] = $strAddAction;
		}
		
		$APPLICATION->AddPanelButton($btn_arr, $bReplace = false);
		
		$arMenuItem_add = Array(
			"TEXT" => Loc::getMessage("PROFISTUDIO_SEO_PANEL_BTN_MENU_ADD_TEXT"),
			"TITLE" => Loc::getMessage("PROFISTUDIO_SEO_PANEL_BTN_MENU_ADD_TITLE"),
			"SORT" => 10,
			"ICON" => "",
			"ACTION" => "",
			"SEPARATOR" => false,
			"DEFAULT" => true,         
		);
		if($id > 0)
		{
			$arMenuItem_add["ACTION"] = $strEditAction;
			$arMenuItem_add["TEXT"] = Loc::getMessage("PROFISTUDIO_SEO_PANEL_BTN_MENU_EDIT_TEXT");
			$arMenuItem_add["TITLE"] = Loc::getMessage("PROFISTUDIO_SEO_PANEL_BTN_MENU_EDIT_TITLE");
		}
		else
		{
			$arMenuItem_add["ACTION"] = $strAddAction;
		}
		
		if($id > 0)
		{
			$arMenuItem_del = Array(
				"TEXT" => Loc::getMessage("PROFISTUDIO_SEO_PANEL_BTN_MENU_DELETE_TEXT"),
				"TITLE" => Loc::getMessage("PROFISTUDIO_SEO_PANEL_BTN_MENU_DELETE_TITLE"),
				"SORT" => 20, 
				"ICON" => "",
				"ACTION" => $strDeleteAction,
				"SEPARATOR" => false,
				"DEFAULT" => false,          
			);
		}
		
		$arMenuItem_sep = Array(
			"TEXT" => '',
			"TITLE" => '',
			"SORT" => 20, 
			"ICON" => "", 
			"ACTION" => "",
			"SEPARATOR" => true,
			"DEFAULT" => false,          
		);
		
		$arMenuItem_admin = Array(
			"TEXT" => Loc::getMessage("PROFISTUDIO_SEO_PANEL_BTN_MENU_ADMIN_TEXT"),
			"TITLE" => Loc::getMessage("PROFISTUDIO_SEO_PANEL_BTN_MENU_ADMIN_ADD_TITLE"),
			"SORT" => 20, 
			"ICON" => "",			
			"ACTION" => "",
			"SEPARATOR" => false,
			"DEFAULT" => false,          
		);
		
		if($id > 0)
		{
			$arMenuItem_admin["ACTION"] = "location.href='/bitrix/admin/profistudio.seo_admin_page_edit.php?SITE_ID=" . SITE_ID . "&lang=" . LANGUAGE_ID . "&id=" . $id . "&back_url=" . $cur_uri . "'";
			$arMenuItem_admin["TITLE"] = Loc::getMessage("PROFISTUDIO_SEO_PANEL_BTN_MENU_ADMIN_EDIT_TITLE");
		}
		else
		{
			$arMenuItem_admin["ACTION"] = "location.href='/bitrix/admin/profistudio.seo_admin_page_edit.php?SITE_ID=" . SITE_ID . "&lang=" . LANGUAGE_ID . "&action=set_page_url&back_url=" . $cur_uri . "'";
		}
		
		$APPLICATION -> AddPanelButtonMenu($btnId, $arMenuItem_add);
		if(!empty($arMenuItem_del))
		{
			$APPLICATION -> AddPanelButtonMenu($btnId, $arMenuItem_del);
		}		
		$APPLICATION -> AddPanelButtonMenu($btnId, $arMenuItem_sep);
		$APPLICATION -> AddPanelButtonMenu($btnId, $arMenuItem_admin);
	}
	
	public static function isSiteOptionsCheck($siteId = '')
	{
		$isCheck = false;
		
		global $APPLICATION;
		
		if(!isset($APPLICATION))
			return $isCheck;
		
		if(empty($siteId))
			return $isCheck;
		
		$rsSites = \Bitrix\Main\SiteTable::getList(
			array(
				"select" => array("LID", "DOC_ROOT", "DIR"),
				"filter" => array("LID" => $siteId),
			)
		);
		
		$arSite = $rsSites->Fetch();		
		
		if(empty($arSite))
		{
			return $isCheck;
		}		
		
		$file_rewrite_path = self::$file_rewrite_path;
		
		$doc_root = $arSite["DOC_ROOT"];
			
		if(!empty($doc_root))
		{
			$doc_root = \Bitrix\Main\IO\Path::normalize($doc_root);
		}
		else
		{
			$doc_root = \Bitrix\Main\Application::getDocumentRoot();
		}

		$site_dir = $arSite["DIR"];

		$site_path = \Bitrix\Main\IO\Path::combine($doc_root, $site_dir);
		
		if(!\Bitrix\Main\IO\Directory::isDirectoryExists($site_path))
		{
			return $isCheck;
		}		
		
		$file_rewrite_abs = \Bitrix\Main\IO\Path::combine($site_path, $file_rewrite_path);

		if(!\Bitrix\Main\IO\File::isFileExists($file_rewrite_abs))
		{
			return $isCheck;
		}		
		
		$file_path = \Bitrix\Main\IO\Path::combine($site_dir, self::$file_rewrite_path);
			
		$arUrlRewriter = \Bitrix\Main\UrlRewriter::getList($arSite["LID"], array("CONDITION" => '#^' . $site_dir . '.*#', "PATH" => $file_path, "ID" => self::$module_id));

		if(!empty($arUrlRewriter))
		{			
			$isCheck = true;
		}
		
		return $isCheck;
	}
	
	public static function siteUpdateOptions($siteId = '')
	{
		global $APPLICATION;
		
		if(!isset($APPLICATION))
			return;
		
		$arResult = array();
		if(empty($siteId))
		{
			$rsSites = \Bitrix\Main\SiteTable::getList(
				array(
					"select" => array("LID", "DOC_ROOT", "DIR")
				)
			);
		}
		else
		{
			$rsSites = \Bitrix\Main\SiteTable::getList(
				array(
					"select" => array("LID", "DOC_ROOT", "DIR"),
					"filter" => array("LID" => $siteId),
				)
			);
		}
		while($arSite = $rsSites->Fetch())
		{
			$arResult["SITE"][] = $arSite;
		}
		
		if(empty($arResult["SITE"]) || !is_array($arResult["SITE"]))
			return;
		
		$file_rewrite_path = self::$file_rewrite_path;
		
		foreach($arResult["SITE"] as $arSite)
		{
			$doc_root = $arSite["DOC_ROOT"];
			
			if(!empty($doc_root))
			{
				$doc_root = \Bitrix\Main\IO\Path::normalize($doc_root);
			}
			else
			{
				$doc_root = \Bitrix\Main\Application::getDocumentRoot();
			}
			
			$site_dir = $arSite["DIR"];
			
			$site_path = \Bitrix\Main\IO\Path::combine($doc_root, $site_dir);
			
			if(\Bitrix\Main\IO\Directory::isDirectoryExists($site_path))
			{
				$file_rewrite_abs = \Bitrix\Main\IO\Path::combine($site_path, $file_rewrite_path);
								
				$page404 = trim(\Bitrix\Main\Config\Option::get(self::$module_id, "PAGE404_" . $siteId));

				if(empty($page404))
					$page404 = self::$page404;

				\Bitrix\Main\IO\File::putFileContents($file_rewrite_abs, "<" . "?php" . "\n" . "define(\"PROFISTUDIO_SEO_SITE_ID\", \"" . $arSite["LID"] . "\");" . "\n" . 'include_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/profistudio.seo/include/file_rewrite.php");' . "\n" . 'include($_SERVER["DOCUMENT_ROOT"] . "' . $page404 . '");' . "\n" . "die();");
			}
			
			$file_path = \Bitrix\Main\IO\Path::combine($site_dir, self::$file_rewrite_path);
			
			$arUrlRewriter = \Bitrix\Main\UrlRewriter::getList($arSite["LID"], array("CONDITION" => '#^' . $site_dir . '.*#', "PATH" => $file_path, "ID" => self::$module_id));
			
			if(empty($arUrlRewriter))
			{
				\Bitrix\Main\UrlRewriter::add(
					$arSite["LID"],
					array(
						"CONDITION" => '#^' . $site_dir . '.*#',
						"ID" => self::$module_id,
						"PATH" => $file_path,
						"RULE" => '',
						"SORT" => 10000
					)
				);
			}
		}
	}
	
	public static function siteDeleteOptions($siteId = '')
	{
		global $APPLICATION;
		
		if(!isset($APPLICATION))
			return;
		
		$arResult = array();
		if(empty($siteId))
		{
			$rsSites = \Bitrix\Main\SiteTable::getList(
				array(
					"select" => array("LID", "DOC_ROOT", "DIR")
				)
			);
		}
		else
		{
			$rsSites = \Bitrix\Main\SiteTable::getList(
				array(
					"select" => array("LID", "DOC_ROOT", "DIR"),
					"filter" => array("LID" => $siteId),
				)
			);
		}
		while($arSite = $rsSites->Fetch())
		{
			$arResult["SITE"][] = $arSite;
		}
		
		if(empty($arResult["SITE"]) || !is_array($arResult["SITE"]))
			return;
		
		$file_rewrite_path = self::$file_rewrite_path;
		
		foreach($arResult["SITE"] as $arSite)
		{
			$doc_root = $arSite["DOC_ROOT"];
			
			if(!empty($doc_root))
			{
				$doc_root = \Bitrix\Main\IO\Path::normalize($doc_root);
			}
			else
			{
				$doc_root = \Bitrix\Main\Application::getDocumentRoot();
			}
			
			$site_dir = $arSite["DIR"];
			
			$site_path = \Bitrix\Main\IO\Path::combine($doc_root, $site_dir);
			
			if(\Bitrix\Main\IO\Directory::isDirectoryExists($site_path))
			{
				$file_rewrite_abs = \Bitrix\Main\IO\Path::combine($site_path, $file_rewrite_path);

				if(\Bitrix\Main\IO\File::isFileExists($file_rewrite_abs))
				{
					\Bitrix\Main\IO\File::deleteFile($file_rewrite_abs);
				}
			}
			
			$file_path = \Bitrix\Main\IO\Path::combine($site_dir, self::$file_rewrite_path);
			
			$arUrlRewriter = \Bitrix\Main\UrlRewriter::getList($arSite["LID"], array("PATH" => $file_path, "ID" => self::$module_id));
			
			if(!empty($arUrlRewriter))
			{				
				\Bitrix\Main\UrlRewriter::delete($arSite["LID"], array("PATH" => $file_path, "ID" => self::$module_id));
			}
		}
	}
	
	public static function saveOptionsParamsClear()
	{
		global $APPLICATION;
		
		if(!isset($APPLICATION))
			return false;
		
		$file_abs = $_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/profistudio.seo/include/' . self::$file_params_clear;
		
		$params = \Bitrix\Main\Config\Option::get(self::$module_id, "PARAMS_NO_USE");
		
		\Bitrix\Main\IO\File::putFileContents($file_abs, $params);
		
		if(!\Bitrix\Main\IO\File::isFileExists($file_abs))
			return false;
		
		return true;
	}
	
	public static function getOptionsParamsClear()
	{		
		$file_abs = $_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/profistudio.seo/include/' . self::$file_params_clear;
		
		if(!file_exists($file_abs))
			return false;
		
		return file_get_contents($file_abs);
	}
}
?>