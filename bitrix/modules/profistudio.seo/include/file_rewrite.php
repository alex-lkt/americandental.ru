<?
if(strpos($_SERVER["REQUEST_URI"], "/bitrix/admin/") === 0)
{
	$_SERVER["REAL_FILE_PATH"] = "/bitrix/admin/404.php";
	include($_SERVER["DOCUMENT_ROOT"] . "/bitrix/admin/404.php");
	die();
}

$script_name = str_replace($_SERVER["DOCUMENT_ROOT"], '', $_SERVER["SCRIPT_FILENAME"]);

if(defined("BX_URLREWRITE") and !defined("PROFISTUDIO_SEO_FILE_REWRITE") and defined("PROFISTUDIO_SEO_SITE_ID") and strlen(PROFISTUDIO_SEO_SITE_ID) > 0 and  ($script_name === "/bitrix/urlrewrite.php" || $script_name === "/404.php") and !empty($_SERVER["REAL_FILE_PATH"]) and strpos($_SERVER["REAL_FILE_PATH"], '/profistudio_seo_file_rewrite.php') !== false and file_exists($_SERVER['DOCUMENT_ROOT'] . '/bitrix/admin/profistudio.seo_admin_page_edit.php'))
{	
	define("PROFISTUDIO_SEO_FILE_REWRITE", true);		
	
	$file_module_profistudio_seo_abs = $_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/profistudio.seo/include.php";
	
	if(file_exists($file_module_profistudio_seo_abs))
	{	
		include_once($file_module_profistudio_seo_abs);

		if(class_exists('\Profistudio\Seo\Url') and isset($DBType) and $DBType === "mysql")
		{
			$page_arr_new = \Profistudio\Seo\Url::getPageByNewUri(PROFISTUDIO_SEO_SITE_ID, array(
				'DBType' => $DBType, 'DBHost' => $DBHost, 'DBName' => $DBName, 'DBLogin' => $DBLogin, 'DBPassword' => $DBPassword
			));

			if(!empty($page_arr_new))
			{
				global $profi_seo_page_id, $profi_seo_page_url, $profi_seo_page_url_new;
				$profi_seo_page_id = $page_arr_new["ID"];
				$profi_seo_page_url = $page_arr_new["URL"];
				$profi_seo_page_url_new = $page_arr_new["URL_NEW"];

				\Profistudio\Seo\Url::setCurUriNewRewrite($page_arr_new["URL"], $page_arr_new["URL_NEW"]);
			}
		}
	}
}

$_SERVER["REAL_FILE_PATH"] = NULL;