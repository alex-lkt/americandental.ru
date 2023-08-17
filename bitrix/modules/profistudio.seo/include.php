<?
use Bitrix\Main\Loader;
use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);

Loader::registerAutoLoadClasses(
	"profistudio.seo",
	array(
		'Profistudio\Seo\PageTable' => 'lib/page.php',
		'Profistudio\Seo\Url' => 'lib/url.php',
		'Profistudio\Seo\Core' => 'lib/core.php',
		'Profistudio\Seo\Event' => 'lib/event.php',
		'Profistudio\Seo\Admin' => 'lib/admin.php',
		'Profistudio\Seo\Tools' => 'lib/tools.php',
		'Profistudio\Seo\Sitemap' => 'lib/sitemap.php',
		'Profistudio\Seo\PageProperty' => 'lib/pageproperty.php',
	)
);

if(class_exists('\COption'))
{
	if(class_exists('\CAdminNotify'))
	{
		if(\COption::GetOptionString("profistudio.seo", "site_options", "N") != "Y")
		{	
			if(\CAdminNotify::Add(array(          
				'MESSAGE' => \Bitrix\Main\Localization\Loc::getMessage('PROFISTUDIO_SEO_INCLUDE_NOTIFY_SITE_OPTIONS'),          
				'TAG' => 'profistudio_seo_site_options',          
				'MODULE_ID' => 'profistudio.seo',          
				'ENABLE_CLOSE' => 'Y'
			)))
			{	
				\COption::SetOptionString("profistudio.seo", "site_options", "Y");
			}
		}
	}
	
	if(\COption::GetOptionString("profistudio.seo", "site_options_params_clear", "N") != "Y")
	{	
		if(\Profistudio\Seo\Admin::saveOptionsParamsClear())
		{		
			\COption::SetOptionString("profistudio.seo", "site_options_params_clear", "Y");
		}
	}
}
?>