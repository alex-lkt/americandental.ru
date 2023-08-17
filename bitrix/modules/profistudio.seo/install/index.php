<?
use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);
Class profistudio_seo extends CModule
{
	const MODULE_ID = 'profistudio.seo';
	var $MODULE_ID = 'profistudio.seo'; 
	var $MODULE_VERSION;
	var $MODULE_VERSION_DATE;
	var $MODULE_NAME;
	var $MODULE_DESCRIPTION;
	var $MODULE_CSS;
	var $strError = '';

	function __construct()
	{
		$arModuleVersion = array();
		include(dirname(__FILE__)."/version.php");
		$this->MODULE_VERSION = $arModuleVersion["VERSION"];
		$this->MODULE_VERSION_DATE = $arModuleVersion["VERSION_DATE"];
		$this->MODULE_NAME = GetMessage("profistudio.SEO_MODULE_NAME");
		$this->MODULE_DESCRIPTION = GetMessage("profistudio.SEO_MODULE_DESC");

		$this->PARTNER_NAME = GetMessage("profistudio.SEO_PARTNER_NAME");
		$this->PARTNER_URI = GetMessage("profistudio.SEO_PARTNER_URI");
	}

	function InstallDB($arParams = array())
	{
		global $DB, $DBType, $APPLICATION;
		
		$eventManager = \Bitrix\Main\EventManager::getInstance();
		$eventManager->registerEventHandler('main', 'OnPageStart', self::MODULE_ID, '\Profistudio\Seo\Event', 'PageStart');
		$eventManager->registerEventHandler('main', 'OnBeforeProlog', self::MODULE_ID, '\Profistudio\Seo\Event', 'OnBeforeProlog');
		$eventManager->registerEventHandler('main', 'OnBuildGlobalMenu', self::MODULE_ID, '\Profistudio\Seo\Event', 'OnBuildGlobalMenu');
		$eventManager->registerEventHandler('main', 'OnEndBufferContent', self::MODULE_ID, '\Profistudio\Seo\Event', 'OnEndBufferContent');
		$eventManager->registerEventHandler('main', 'OnEpilog', self::MODULE_ID, '\Profistudio\Seo\Event', 'OnEpilog');
		
		global $DB, $APPLICATION;
		
		$this->errors = false;
		
		if (!$DB->Query("SELECT * FROM b_profistudio_seo_page WHERE 1", true)):
			$this->errors = $DB->RunSQLBatch($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/".self::MODULE_ID."/install/db/".strtolower($DB->type)."/install.sql");
		endif;
		
        if ($this->errors !== false)
		{
			$APPLICATION->ThrowException(implode("", $this->errors));
			return false;
		}
		
		return true;
	}

	function UnInstallDB($arParams = array())
	{
		
		global $DB, $DBType, $APPLICATION;
		
		$eventManager = \Bitrix\Main\EventManager::getInstance();
		
		$eventManager->unRegisterEventHandler('main', 'OnPageStart', self::MODULE_ID, '\Profistudio\Seo\Event', 'PageStart');
		$eventManager->unRegisterEventHandler('main', 'OnBeforeProlog', self::MODULE_ID, '\Profistudio\Seo\Event', 'OnBeforeProlog');
		$eventManager->unRegisterEventHandler('main', 'OnBuildGlobalMenu', self::MODULE_ID, '\Profistudio\Seo\Event', 'OnBuildGlobalMenu');
		$eventManager->unRegisterEventHandler('main', 'OnEndBufferContent', self::MODULE_ID, '\Profistudio\Seo\Event', 'OnEndBufferContent');
		$eventManager->unRegisterEventHandler('main', 'OnEpilog', self::MODULE_ID, '\Profistudio\Seo\Event', 'OnEpilog');
		
		$this->errors = false;
		if (!isset($arParams["savedata"]) || $arParams["savedata"] != "Y")
		{
			$this->errors = $DB->RunSQLBatch($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/".self::MODULE_ID."/install/db/".strtolower($DB->type)."/uninstall.sql");
			if($this->errors !== false)
			{
				$APPLICATION->ThrowException(implode('', $this->errors));
				return false;
			}
		}
		$this->UnInstallEvents();
		$this->UnInstallFiles();
		$this->UnInstallSiteOptions();
		UnRegisterModule(self::MODULE_ID);		
		return true;
	}	

	function InstallEvents()
	{
		return true;
	}

	function UnInstallEvents()
	{
		return true;
	}

	function InstallFiles($arParams = array())
	{    	
		if (is_dir($p = $_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/'.self::MODULE_ID.'/install/admin'))
		{
			if ($dir = opendir($p))
			{
				while (false !== $item = readdir($dir))
				{
					if ($item == '..' || $item == '.')
						continue;
					CopyDirFiles($p.'/'.$item, $_SERVER['DOCUMENT_ROOT'].'/bitrix/admin/'.$item, $ReWrite = True, $Recursive = True);
				}
				closedir($dir);
			}
		}
		if (is_dir($p = $_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/'.self::MODULE_ID.'/install/components'))
		{
			if ($dir = opendir($p))
			{
				while (false !== $item = readdir($dir))
				{
					if ($item == '..' || $item == '.')
						continue;
					CopyDirFiles($p.'/'.$item, $_SERVER['DOCUMENT_ROOT'].'/bitrix/components/'.$item, $ReWrite = True, $Recursive = True);
				}
				closedir($dir);
			}
		}
		if (is_dir($p = $_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/'.self::MODULE_ID.'/install/js'))
		{
			if ($dir = opendir($p))
			{
				while (false !== $item = readdir($dir))
				{
					if ($item == '..' || $item == '.')
						continue;
					CopyDirFiles($p.'/'.$item, $_SERVER['DOCUMENT_ROOT'].'/bitrix/js/'.self::MODULE_ID.'/'.$item, $ReWrite = True, $Recursive = True);
				}
				closedir($dir);
			}
		}
		if (is_dir($p = $_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/'.self::MODULE_ID.'/install/panel'))
		{
			if ($dir = opendir($p))
			{
				while (false !== $item = readdir($dir))
				{
					if ($item == '..' || $item == '.')
						continue;
					CopyDirFiles($p.'/'.$item, $_SERVER['DOCUMENT_ROOT'].'/bitrix/panel/'.self::MODULE_ID.'/'.$item, $ReWrite = True, $Recursive = True);
				}
				closedir($dir);
			}
		}
		if (is_dir($p = $_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/'.self::MODULE_ID.'/install/images'))
		{
			if ($dir = opendir($p))
			{
				while (false !== $item = readdir($dir))
				{
					if ($item == '..' || $item == '.')
						continue;
					CopyDirFiles($p.'/'.$item, $_SERVER['DOCUMENT_ROOT'].'/bitrix/images/'.self::MODULE_ID.'/'.$item, $ReWrite = True, $Recursive = True);
				}
				closedir($dir);
			}
		}			
		return true;
	}

	function UnInstallFiles()
	{        
		if (is_dir($p = $_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/'.self::MODULE_ID.'/install/admin'))
		{
			if ($dir = opendir($p))
			{
				while (false !== $item = readdir($dir))
				{
					if ($item == '..' || $item == '.')
						continue;
					unlink($_SERVER['DOCUMENT_ROOT'].'/bitrix/admin/'.$item);
				}
				closedir($dir);
			}
		}
		if (is_dir($p = $_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/'.self::MODULE_ID.'/install/components'))
		{
			if ($dir = opendir($p))
			{
				while (false !== $item = readdir($dir))
				{
					if ($item == '..' || $item == '.' || !is_dir($p0 = $p.'/'.$item))
						continue;

					$dir0 = opendir($p0);
					while (false !== $item0 = readdir($dir0))
					{
						if ($item0 == '..' || $item0 == '.')
							continue;
						DeleteDirFilesEx('/bitrix/components/'.$item.'/'.$item0);
					}
					closedir($dir0);
				}
				closedir($dir);
			}			
		}
		if (is_dir($p = $_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/'.self::MODULE_ID.'/install/js'))
		{
			DeleteDirFilesEx("/bitrix/js/".self::MODULE_ID."/");		
		}
		if (is_dir($p = $_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/'.self::MODULE_ID.'/install/panel'))
		{
			DeleteDirFilesEx("/bitrix/panel/".self::MODULE_ID."/");		
		}
		if (is_dir($p = $_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/'.self::MODULE_ID.'/install/images'))
		{
			DeleteDirFilesEx("/bitrix/images/".self::MODULE_ID."/");		
		}		
		return true;
	}
	
	function InstallModule()
	{	
		return true;
	}
	
	function UnInstallModule()
	{
		return true;
	}
	
	function InstallAgents()
	{				
		return true;
	}

	function UnInstallAgents()
	{		
		return true;
	}
	
	function UnInstallSiteOptions()
	{
		global $APPLICATION;
		
		if(!isset($APPLICATION))
			return;
		
		$arResult = array();
		$rsSites = \Bitrix\Main\SiteTable::getList(
			array(
				"select" => array("LID", "DOC_ROOT", "DIR")
			)
		);
		while($arSite = $rsSites->Fetch())
		{
			$arResult["SITE"][] = $arSite;
		}
		
		if(empty($arResult["SITE"]) || !is_array($arResult["SITE"]))
			return;
		
		$file_rewrite_path = '/profistudio_seo_file_rewrite.php';
		
		foreach($arResult["SITE"] as $arSite)
		{									  
			\COption::SetOptionString(self::MODULE_ID, "PAGE404_".$arSite["LID"], "/404.php");
			
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
			
			$arUrlRewriter = \Bitrix\Main\UrlRewriter::getList($arSite["LID"], array("ID" => self::MODULE_ID));
			
			if(!empty($arUrlRewriter))
			{				
				\Bitrix\Main\UrlRewriter::delete($arSite["LID"], array("ID" => self::MODULE_ID));
			}
		}
		
		\COption::SetOptionString(self::MODULE_ID, "site_options", "N");
		\COption::SetOptionString(self::MODULE_ID, "site_options_params_clear", "N");
	}

	function DoInstall()
	{
		global $APPLICATION;
		$this->InstallFiles();		
		RegisterModule(self::MODULE_ID);
		$this->InstallDB();
		$this->InstallModule();
		$this->InstallAgents();
	}

	function DoUninstall()
	{
		global $APPLICATION, $step, $errors;
		$this->UnInstallAgents();
		$this->UnInstallModule();		
				
		$step = (int)$step;
		if ($step < 2)
		{
			$APPLICATION->IncludeAdminFile(Loc::getMessage("profistudio.SEO_UNINSTALL_TITLE"), $_SERVER['DOCUMENT_ROOT']."/bitrix/modules/".self::MODULE_ID."/install/unstep1.php");
		}
		elseif ($step == 2)
		{
			$errors = false;

			$this->UnInstallDB(array(
				"savedata" => $_REQUEST["savedata"],
			));

			$APPLICATION->IncludeAdminFile(Loc::getMessage("profistudio.SEO_UNINSTALL_TITLE"), $_SERVER['DOCUMENT_ROOT']."/bitrix/modules/".self::MODULE_ID."/install/unstep2.php");
		}
								
		$this->UnInstallFiles();
		$this->UnInstallSiteOptions();
		UnRegisterModule(self::MODULE_ID);				
	}
	
	function GetModuleRightList()
	{
		global $MESS;
		$arr = array(
			//"reference_id" => array("D","R","W"),
			"reference_id" => array("D","W"),
			"reference" => array(
				"[D] ".GetMessage("profistudio.SEO_DENIED"),
				//"[R] ".GetMessage("profistudio.SEO_OPENED"),
				"[W] ".GetMessage("profistudio.SEO_FULL"))
			);
		return $arr;
	}
}
?>