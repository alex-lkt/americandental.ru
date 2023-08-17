<?php
	class star_totop extends CModule {
		var $MODULE_ID = "star.totop";
		var $MODULE_VERSION;
		var $MODULE_VERSION_DATE;
		var $MODULE_NAME;
		var $MODULE_DESCRIPTION;
		var $MODULE_GROUP_RIGHTS = "N";
		var $PARTNER_NAME;
		var $PARTNER_URI;

		function __construct() {
			IncludeModuleLangFile(__FILE__);
			include(dirname(__FILE__)."/version.php");

			$this->MODULE_VERSION = $arModuleVersion["VERSION"];
			$this->MODULE_VERSION_DATE = $arModuleVersion["VERSION_DATE"];
			$this->MODULE_NAME = GetMessage("STAR_TOTOP_MODULE_NAME");
			$this->MODULE_DESCRIPTION = GetMessage("STAR_TOTOP_MODULE_DESC");
			$this->PARTNER_NAME = GetMessage("STAR_TOTOP_PARTNER_NAME");
			$this->PARTNER_URI = GetMessage("STAR_TOTOP_PARTNER_URI");
		}

		function InstallFiles() {
			CopyDirFiles($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/".$this->MODULE_ID."/images/", $_SERVER["DOCUMENT_ROOT"]."/bitrix/images/".$this->MODULE_ID, true, true);
			return true;
		}

		function UnInstallFiles() {
			DeleteDirFilesEx("/bitrix/images/".$this->MODULE_ID."/");

			$res = CFile::GetList(array(), array("MODULE_ID" => $this->MODULE_ID));
			while($res_arr = $res->GetNext()) {
				CFile::Delete($res_arr["ID"]);
			}

			return true;
		}

		function DoInstall() {
			$this->InstallFiles();
			RegisterModule($this->MODULE_ID);
			RegisterModuleDependences("main", "OnEpilog", $this->MODULE_ID);
		}
	 
		function DoUninstall() {
			$this->UnInstallFiles();
			
			COption::RemoveOption($this->MODULE_ID);

			UnRegisterModuleDependences("main", "OnEpilog", $this->MODULE_ID);
			UnRegisterModule($this->MODULE_ID);
		}
	}
?>