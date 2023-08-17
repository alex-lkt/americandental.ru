<?php
namespace Profistudio\Seo;

use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);

class Tools 
{	
	private static $module_id = 'profistudio.seo';	
	
	public static function getSite($site_id = null)
	{
		if(!$site_id)
			$site_id = SITE_ID;
		
		$rsSites = \CSite::GetById($site_id);
		
		return $rsSites->Fetch();
	}
	
	public static function setCurPageProperty()
	{
		\Profistudio\Seo\PageProperty::setCurPageProperty();
	}	
}
?>