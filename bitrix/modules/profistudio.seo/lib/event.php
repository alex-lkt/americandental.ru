<?
namespace Profistudio\Seo;

use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);

class Event 
{
	
	private static $module_id = 'profistudio.seo';
	
	function PageStart()
	{
		\Profistudio\Seo\Core::pageStartHeadIni();		
		\Profistudio\Seo\Core::pageStartCheck();
	}
	
	function OnBeforeProlog()
	{		
		\Profistudio\Seo\Admin::setPanelButton();
	}
	
	function OnBuildGlobalMenu(&$aGlobalMenu, &$aModuleMenu)
	{
		if($GLOBALS['APPLICATION']->GetGroupRight(self::$module_id) < "W")
			return;
		
		$GLOBALS['APPLICATION']->SetAdditionalCSS("/bitrix/panel/" . self::$module_id . "/admin.css");
		
		$aMenu = array(
			"parent_menu" => "global_menu_content",
			"section" => self::$module_id,
			"sort" => 100,
			"text" => Loc::getMessage("PROFISTUDIO_SEO_MENU_TITLE"),
			"title" => Loc::getMessage("PROFISTUDIO_SEO_MENU_TITLE"),
			"icon" => "profistudio_seo_menu_icon",
			"page_icon" => "profistudio_seo_menu_icon",
			"url" => "",
			"more_url" => array(			
				""
			),
			"items_id" => self::$module_id,
			"module_id" => self::$module_id,
			"items" => array()
		);
		
		$aMenu["items"][] = array(
			"text" => Loc::getMessage("PROFISTUDIO_SEO_MENU_PAGE_TITLE"),
			"title" => Loc::getMessage("PROFISTUDIO_SEO_MENU_PAGE_TITLE"),
			"icon" => "",
			"page_icon" => "",
			"url" => "",
			"more_url" => array(
			),
			"items_id" => self::$module_id."_page",
			"module_id" => self::$module_id,
			"items" => self::profistudio_seo_admin_get_menu_pages()
		);
		
		$aModuleMenu[] = $aMenu;		
	}
	
	private function profistudio_seo_admin_get_menu_pages()
	{		
		$aMenu = array();
		
		$dbSites = \CSite::GetList($by = "active", $order = "desc", array("ACTIVE" => "Y"));
		while($site = $dbSites->Fetch())
		{			
			$aMenu[] = array(
				"text" => '[' . $site["ID"] . '] ' . $site["NAME"],
				"title" => '',
				"icon" => "",
				"page_icon" => "",
				"url" => "/bitrix/admin/profistudio.seo_admin_page_list.php?SITE_ID=".$site["ID"]."&lang=".LANGUAGE_ID,
				"more_url" => array(
					"/bitrix/admin/profistudio.seo_admin_page_list.php?SITE_ID=".$site["ID"],			
					"/bitrix/admin/profistudio.seo_admin_page_edit.php?SITE_ID=".$site["ID"],
					"/bitrix/admin/profistudio.seo_admin_page_section_edit.php?SITE_ID=".$site["ID"]
				),
				"items_id" => self::$module_id."_pages_site",
				"module_id" => self::$module_id,
				"items" => self::profistudio_seo_admin_get_menu_pages_sections()
			);
		}
		
		return $aMenu;	
	}
	
	private function profistudio_seo_admin_get_menu_pages_sections()
	{		
		$aMenu = array();
	}
	
	function OnEndBufferContent(&$content)
	{			
	}
	
	function OnEpilog()
	{		
		\Profistudio\Seo\Tools::setCurPageProperty();		
	}
}
?>