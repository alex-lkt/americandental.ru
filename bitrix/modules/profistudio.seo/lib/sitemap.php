<?
namespace Profistudio\Seo;

use Bitrix\Main\Localization\Loc;
use Profistudio\Seo\PageTable;
Loc::loadMessages(__FILE__);

class Sitemap 
{	
	private static $module_id = 'profistudio.seo';
	
	function generate($site_id = '', $delete = false)
	{		
		if(empty($site_id))
			return false;
		
		$arSite = \Profistudio\Seo\Tools::getSite($site_id);
		
		if(empty($arSite))
			return false;
					
		$sitemap_generate = \COption::GetOptionString(self::$module_id, "SITEMAP_GENERATE_" . $arSite["ID"]);
		
		if($sitemap_generate != 'Y' and !$delete)
			return;
		
		$siteProto = trim(\COption::GetOptionString(self::$module_id, "PROTO_" . $arSite["ID"]));
		
		if(empty($siteProto))
			$siteProto = 'http';
				
		$siteServerName = trim($arSite['SERVER_NAME']);
		
		if(empty($arSite['SERVER_NAME']))
		{			
			$siteServerName = trim(\COption::GetOptionString('main', 'server_name', ''));		
		}
		
		if(empty($siteServerName))
			return;
		
		$siteServerName = str_replace(array("https://", "http://"), '', $siteServerName);
		
		$siteServerName = trim($siteServerName);
		$siteServerName1 = $siteServerName;
		$siteServerName1 = rtrim($siteServerName, "/");
		
		$siteDir = trim($arSite['DIR']);
		$siteDir1 = ltrim($siteDir, "/");
		$siteDir1 = rtrim($siteDir1, "/");
		
		if(strlen($siteDir1) > 0 and preg_match('/(' . $siteDir1 . ')/', $siteServerName1, $matches, PREG_OFFSET_CAPTURE))
		{			
			if(!empty($matches[1]))
			{
				$matches_last = array_pop($matches);
			}
			
			if(!empty($matches_last[1]))
			{
				$siteServerName1 = substr($siteServerName1, 0 , $matches_last[1]);
				$siteServerName1 = rtrim($siteServerName1, "/");
			}
		}
		
		$siteServerName2 = \Bitrix\Main\IO\Path::combine($siteServerName1, $siteDir1);
		
		$site_url1 = $siteProto . '://' . $siteServerName1;
		$site_url2 = $siteProto . '://' . $siteServerName2;
		
		$siteDocRoot = $arSite["DOC_ROOT"];

		if(!empty($siteDocRoot))
		{
			$siteDocRoot = \Bitrix\Main\IO\Path::normalize($siteDocRoot);
		}
		else
		{
			$siteDocRoot = \Bitrix\Main\Application::getDocumentRoot();
		}
		
		$sitePath = \Bitrix\Main\IO\Path::combine($siteDocRoot, $siteDir);
		
		$xml_main_name = trim(\COption::GetOptionString(self::$module_id, "SITEMAPNAME_" . $arSite["ID"]));
		$xml_main_path = \Bitrix\Main\IO\Path::combine($sitePath, $xml_main_name);
		
		$xml_profiseo_name = 'sitemap_profiseo.xml';
		$xml_profiseo_url = $site_url2 . '/' . $xml_profiseo_name;
		$xml_profiseo_path = \Bitrix\Main\IO\Path::combine($sitePath, $xml_profiseo_name);
				
		$xmlns = "http://www.sitemaps.org/schemas/sitemap/0.9";
		
		$xml = null;
		
		if(\Bitrix\Main\IO\File::isFileExists($xml_main_path))
		{
			$xml = simplexml_load_file($xml_main_path);
		}
		
		if(!is_object($xml) and $sitemap_generate == 'Y')
		{			
			$xml = new \SimpleXMLElement("<sitemapindex></sitemapindex>");
    		$xml->addAttribute("xmlns", $xmlns);
		}		
		
		if(!is_object($xml))
			return false;
		
		if($sitemap_generate == 'Y')
		{
			$find = false;
			$rewrite_xml_profiseo = false;

			$elementsDelete = array();

			foreach($xml->sitemap as $sitemap_obj)
			{			
				if(isset($sitemap_obj->loc) && strripos($sitemap_obj->loc, $xml_profiseo_name) !== false)
				{				
					if($sitemap_obj->loc == $xml_profiseo_url and !$find)
					{
						$find = true;
					}
					else
					{					
						$elementsDelete[] = $sitemap_obj;
						$rewrite_xml_profiseo = true;
					}
				}
			}

			if(!empty($elementsDelete))
			{
				foreach($elementsDelete as $el)
				{
					unset($el[0]);
				}
			}

			if($rewrite_xml_profiseo || !$find) 
			{
				if(!$find)
				{
					$profi_seo_sitemap = $xml->addChild("sitemap");
					$profi_seo_sitemap->addChild("loc", $xml_profiseo_url);
					$profi_seo_sitemap->addChild("lastmod", date('c', time() - \CTimeZone::getOffset()));
				}
				$xml->asXML($xml_main_path);
			}	

			unset($xml);		

			$xml_profiseo = new \SimpleXMLElement("<urlset></urlset>");
			$xml_profiseo->addAttribute("xmlns", $xmlns);

			$arFilter = array(
				"SITE_ID" => $arSite['ID'],
				"ACTIVE" => "Y",
				"SITEMAP" => "Y"
			);

			$itemsList = PageTable::getList(array(
				'filter' => $arFilter,
				'select' => array('ID', 'URL', 'URL_NEW', 'TIMESTAMP_X')
			));

			while($arPage = $itemsList->fetch())
			{			
				$date_obj = $arPage['TIMESTAMP_X'];
				$date = $date_obj->toString(new \Bitrix\Main\Context\Culture(array("FORMAT_DATETIME" => "DD.MM.YYYY HH:MI:SS")));
				$time = MakeTimeStamp($date, "DD.MM.YYYY HH:MI:SS");

				if(!empty($arPage["URL_NEW"]))
				{
					$uri = \Profistudio\Seo\Url::uriFormatDB($arPage["URL_NEW"]);
					$uri = \Profistudio\Seo\Url::uriUnFormatDB($uri);
					$uri = \Profistudio\Seo\Url::uriDecode2($uri);

					$url_new_str = $site_url1 . $uri;
					$url = $xml_profiseo->addChild("url");
					$loc = $url->addChild("loc", htmlentities($url_new_str));
					$lastmod = $url->addChild("lastmod", date('c', $time - \CTimeZone::getOffset()));
				}

				if(empty($arPage["URL_NEW"]))
				{				
					$uri = \Profistudio\Seo\Url::uriUnFormatDB($arPage["URL"]);
					$uri = \Profistudio\Seo\Url::uriDecode2($uri);

					$url_str = $site_url1 . $uri;

					$url = $xml_profiseo->addChild("url");
					$loc = $url->addChild("loc", htmlentities($url_str));
					$lastmod = $url->addChild("lastmod", date('c', $time - \CTimeZone::getOffset()));
				}
			}		

			$xml_profiseo->asXML($xml_profiseo_path);

			unset($xml_profiseo);
		}
		else
		{
			$rewrite_xml_profiseo = false;
			
			$elementsDelete = array();

			foreach($xml->sitemap as $sitemap_obj)
			{			
				if(isset($sitemap_obj->loc) && strripos($sitemap_obj->loc, $xml_profiseo_name) !== false)
				{				
					$elementsDelete[] = $sitemap_obj;
					$rewrite_xml_profiseo = true;
				}
			}

			if(!empty($elementsDelete))
			{
				foreach($elementsDelete as $el)
				{
					unset($el[0]);
				}
			}
			
			if($rewrite_xml_profiseo) 
			{				
				$xml->asXML($xml_main_path);
			}
			
			if(\Bitrix\Main\IO\File::isFileExists($xml_profiseo_path))
			{
				$xml_profiseo = new \SimpleXMLElement("<urlset></urlset>");
				$xml_profiseo->addAttribute("xmlns", $xmlns);
				
				$xml_profiseo->asXML($xml_profiseo_path);
				
				unset($xml_profiseo);
			}			
		}
		
		return true;
	}		
}
?>