<?
namespace Profistudio\Seo;

use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);

class PageProperty
{	
	private static $module_id = 'profistudio.seo';
	
	public static function setCurPageProperty()
	{
		if(\Profistudio\Seo\Url::isAdminPage())
			return;
		
		global $profi_seo_page_id;
		
		if(empty($profi_seo_page_id))
			return;
		
		$ID = intval($profi_seo_page_id);
		
		if(empty($ID) || $ID < 1)
			return;
		
		$page_arr = \Profistudio\Seo\PageTable::getList(array('order' => array('SORT' => 'ASC'), 'filter' => array("=ID" => $ID, "ACTIVE" => 'Y', "SITE_ID" => SITE_ID), 'select' => array('ID', 'URL', 'URL_NEW', 'BREAD_CRUMB', 'BREAD_CRUMB_TYPE', 'TITLE', 'ADDITIONAL_TITLE', 'META_DESCRIPTION', 'META_KEYWORDS', 'NO_INDEX', 'CANONICAL_ON', 'REDIRECT_ON')))->fetch();
		
		if(empty($page_arr))
			return;		
		
		\Profistudio\Seo\PageProperty::setProperty($page_arr);

		unset($page_arr);
	}
	
	public static function setProperty($arPage)
	{
		global $APPLICATION;
		
		global $profi_seo_page_id, $profi_seo_page_url, $profi_seo_page_url_new;
		
		if(!empty($arPage))
		{
			if(!empty($arPage["URL_NEW"]))
			{
				$uri_new = \Profistudio\Seo\Url::uriFormatDB($arPage["URL_NEW"]);
				$uri_new = \Profistudio\Seo\Url::uriUnFormatDB($uri_new);
				$uri_new = \Profistudio\Seo\Url::uriDecode2($uri_new);
			}

			if(!empty($arPage["URL"]))
			{
				$uri = $arPage["URL"];
				$uri = \Profistudio\Seo\Url::uriUnFormatDB($uri);
				$uri = \Profistudio\Seo\Url::uriDecode2($uri);
			}
			
			if(!empty($arPage["BREAD_CRUMB"]) and !empty($arPage["BREAD_CRUMB_TYPE"]) and ($arPage["BREAD_CRUMB_TYPE"] == "C" || $arPage["BREAD_CRUMB_TYPE"] == "A"))				
			{				
				if(!empty($profi_seo_page_url_new) and !empty($uri_new))
				{
					$chain_link = $uri_new;
				}
				elseif(!empty($profi_seo_page_url))
				{
					$chain_link = $uri;
				}
				
				if($arPage["BREAD_CRUMB_TYPE"] == "C")
				{
					$arAdditionalChain = $APPLICATION->arAdditionalChain;
					
					if(!empty($arAdditionalChain) and is_array($arAdditionalChain))
					{
						$arAdditionalChainLast = array_pop($arAdditionalChain);

						$arAdditionalChainLast["TITLE"] = $arPage["BREAD_CRUMB"];
						
						$arAdditionalChainLast["LINK"] = $chain_link;

						$arAdditionalChain[] = $arAdditionalChainLast;
						
						$APPLICATION->arAdditionalChain = $arAdditionalChain;
					}
				}
				elseif($arPage["BREAD_CRUMB_TYPE"] == "A")
				{
					$APPLICATION->AddChainItem($arPage["BREAD_CRUMB"], $chain_link);
				}
			}
			
			if(!empty($arPage["TITLE"]))
			{
				$APPLICATION->SetPageProperty("TITLE", $arPage["TITLE"]);
			}
			
			if(!empty($arPage["ADDITIONAL_TITLE"]))
			{
				$APPLICATION->SetTitle($arPage["ADDITIONAL_TITLE"]);
			}
			
			if(!empty($arPage["META_DESCRIPTION"]))
			{
				$APPLICATION->SetPageProperty("description", $arPage["META_DESCRIPTION"]);
			}
			
			if(!empty($arPage["META_KEYWORDS"]))
			{
				$APPLICATION->SetPageProperty("keywords", $arPage["META_KEYWORDS"]);
			}
			
			if(!empty($arPage['NO_INDEX']) && $arPage['NO_INDEX'] == 'Y')
			{
				$APPLICATION->SetPageProperty("robots", 'noindex, nofollow');
			}
			
			if(!empty($arPage['CANONICAL_ON']) && $arPage['CANONICAL_ON'] == 'Y')
			{
				$canonical_url = '';
				
				$arSite = \Profistudio\Seo\Tools::getSite($site_id);
		
				if(!empty($arSite))
				{					
					$canonical_url = trim(\COption::GetOptionString(self::$module_id, "CANONICAL_ADDR_" . $arSite["ID"]));
					$canonical_url = rtrim($canonical_url, "/");
				}
				
				if(!empty($arPage["URL_NEW"]) and !empty($uri_new))
				{					
					$canonical_url .= $uri_new;
				} 
				else
				{					
					$canonical_url .= $uri;
				}
								
				$APPLICATION->SetPageProperty('canonical', $canonical_url);
			}
		}
	}
}
?>