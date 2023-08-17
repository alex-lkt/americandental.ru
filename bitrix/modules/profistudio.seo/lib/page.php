<?
namespace Profistudio\Seo;

use Bitrix\Main;
use Bitrix\Main\Entity;
use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);

class PageTable extends Entity\DataManager 
{	
	const TYPE_TEXT = 'text';
	const TYPE_HTML = 'html';
	
	private static $site_id = '';
	
	public static function getTableName()
	{
		return 'b_profistudio_seo_page';
	}
	
	public static function getMap()
    {
        return array(
			new Entity\IntegerField(
				'ID',
				array(
					'primary' => true,
					'autocomplete' => true
				)
			),
			new Entity\StringField(
				'SITE_ID',
				array(
					'required' => true,
					'validation' => array(__CLASS__, 'validateSiteId'),
					'title' => Loc::getMessage('PROFISTUDIO_SEO_TABLE_PAGE_SITE_ID')
				)
			),
			new Entity\IntegerField(
				'SECTION_ID',
				array(
					'title' => Loc::getMessage('PROFISTUDIO_SEO_TABLE_PAGE_SECTION_ID')
				)
			),
			new Entity\BooleanField(
				'ACTIVE',
				array(
					'values' => array('N', 'Y'),
					'default_value' => 'Y',
					'title' => Loc::getMessage('PROFISTUDIO_SEO_TABLE_PAGE_ACTIVE')
				)
			),
			new Entity\IntegerField(
				'SORT',
				array(
					'default_value' => 500,
					'title' => Loc::getMessage('PROFISTUDIO_SEO_TABLE_PAGE_SORT')
				)
			),
			new Entity\StringField(
				'NAME',
				array(
					'required' => true,
					'validation' => array(__CLASS__, 'validateName'),
					'title' => Loc::getMessage('PROFISTUDIO_SEO_TABLE_PAGE_NAME')
				)
			),
			new Entity\DatetimeField(
				'TIMESTAMP_X',
				array(
					'default_value' => new Main\Type\DateTime(),
					'title' => Loc::getMessage('PROFISTUDIO_SEO_TABLE_PAGE_TIMESTAMP_X')
				)
			),
			new Entity\DatetimeField(
				'DATE_CREATE',
				array(
					'default_value' => new Main\Type\DateTime(),
					'title' => Loc::getMessage('PROFISTUDIO_SEO_TABLE_PAGE_DATE_CREATE')
				)
			),
			new Entity\BooleanField(
				'NO_INDEX',
				array(
					'values' => array('N', 'Y'),
					'default_value' => 'N',
					'title' => Loc::getMessage('PROFISTUDIO_SEO_TABLE_PAGE_NO_INDEX')
				)
			),
			new Entity\BooleanField(
				'REDIRECT_ON',
				array(
					'values' => array('N', 'Y'),
					'default_value' => 'Y',
					'title' => Loc::getMessage('PROFISTUDIO_SEO_TABLE_PAGE_REDIRECT_ON')
				)
			),
			new Entity\TextField(
				'URL',
				array(
					'required' => true,
					'validation' => array(__CLASS__, 'validateUrl'),
					'title' => Loc::getMessage('PROFISTUDIO_SEO_TABLE_PAGE_URL')
				)
			),
			new Entity\TextField(
				'URL_NEW',
				array(
					'validation' => array(__CLASS__, 'validateUrlNew'),
					'title' => Loc::getMessage('PROFISTUDIO_SEO_TABLE_PAGE_URL_NEW')
				)
			),
			new Entity\TextField(
				'URL_NEW_FORMAT',
				array(
					'validation' => array(__CLASS__, 'validateUrlNew'),
					'title' => 'URL_NEW_FORMAT'
				)
			),
			new Entity\TextField(
				'BREAD_CRUMB',
				array(
					'title' => Loc::getMessage('PROFISTUDIO_SEO_TABLE_PAGE_BREAD_CRUMB')
				)
			),
			new Entity\EnumField(
				'BREAD_CRUMB_TYPE',
				array(
					'values' => array('N', 'C', 'A'),
					'default_value' => 'N',
					'title' => Loc::getMessage('PROFISTUDIO_SEO_TABLE_PAGE_BREAD_CRUMB_TYPE')
				)
			),
			new Entity\BooleanField(
				'CANONICAL_ON',
				array(
					'values' => array('N', 'Y'),
					'default_value' => 'N',
					'title' => Loc::getMessage('PROFISTUDIO_SEO_TABLE_PAGE_CANONICAL_ON')
				)
			),
			new Entity\BooleanField(
				'SITEMAP',
				array(
					'values' => array('N', 'Y'),
					'default_value' => 'Y',
					'title' => Loc::getMessage('PROFISTUDIO_SEO_TABLE_PAGE_SITEMAP')
				)
			),
			new Entity\TextField(
				'TITLE',
				array(
					'validation' => array(__CLASS__, 'validateTitle'),
					'title' => Loc::getMessage('PROFISTUDIO_SEO_TABLE_PAGE_TITLE')
				)
			),
			new Entity\TextField(
				'ADDITIONAL_TITLE',
				array(
					'validation' => array(__CLASS__, 'validateAdditionalTitle'),
					'title' => Loc::getMessage('PROFISTUDIO_SEO_TABLE_PAGE_ADDITIONAL_TITLE')
				)
			),
			new Entity\TextField(
				'META_DESCRIPTION',
				array(
					'validation' => array(__CLASS__, 'validateMetaDescription'),
					'title' => Loc::getMessage('PROFISTUDIO_SEO_TABLE_PAGE_META_DESCRIPTION')
				)
			),
			new Entity\TextField(
				'META_KEYWORDS',
				array(
					'validation' => array(__CLASS__, 'validateMetaKeywords'),
					'title' => Loc::getMessage('PROFISTUDIO_SEO_TABLE_PAGE_META_KEYWORDS')
				)
			),
			new Entity\TextField(
				'DETAIL_TEXT',
				array(
					'title' => Loc::getMessage('PROFISTUDIO_SEO_TABLE_PAGE_DETAIL_TEXT')
				)
			),
			new Entity\EnumField(
				'DETAIL_TEXT_TYPE',
				array(
					'values' => array(self::TYPE_TEXT, self::TYPE_HTML),
					'default_value' => self::TYPE_TEXT,
					'title' => Loc::getMessage('PROFISTUDIO_SEO_TABLE_PAGE_DETAIL_TEXT_TYPE')
				)
			),
        );
    }
	
	public static function validateSiteId()
	{
		return array(
			new Entity\Validator\Length(null, 2),
		);
	}
		
	public static function validateName()
	{
		return array(
			new Main\Entity\Validator\Length(null, 255),
		);
	}
	
	public static function validateUrl()
	{
		return array(
			new Main\Entity\Validator\Length(null, 65535),
		);
	}
	
	public static function validateUrlNew()
	{
		return array(
			new Main\Entity\Validator\Length(null, 65535),
		);
	}
	
	public static function validateTitle()
	{
		return array(
			new Main\Entity\Validator\Length(null, 65535),
		);
	}
	
	public static function validateAdditionalTitle()
	{
		return array(
			new Main\Entity\Validator\Length(null, 65535),
		);
	}
	
	public static function validateMetaDescription()
	{
		return array(
			new Main\Entity\Validator\Length(null, 65535),
		);
	}
	
	public static function validateMetaKeywords()
	{
		return array(
			new Main\Entity\Validator\Length(null, 65535),
		);
	}
	
	public static function getCurPage($uri = '', $arSelect = array())
	{
		if(\CHTTP::isPathTraversalUri($uri))
			return array();
		
		if(\Profistudio\Seo\Url::isAdminPage())
			return array();
		
		$arResult = array();
		
		$arResult["URL"] = \Profistudio\Seo\Url::getCurUriInfo($uri, true, true);
		
		if(empty($arResult["URL"]["URL_FILTER"]))
			return array();
		
		if(empty($arSelect))
		{
			$arSelect = array(
				'ID',
				'SITE_ID',
				'SECTION_ID',
				'ACTIVE',
				'SORT',
				'NAME',
				'TIMESTAMP_X',
				'DATE_CREATE',
				'NO_INDEX',
				'REDIRECT_ON',
				'URL',
				'URL_NEW',
				'CANONICAL_ON',
				'TITLE',
				'ADDITIONAL_TITLE',
				'META_DESCRIPTION',
				'META_KEYWORDS',
			);
		}		
		
		$arFilter = array(
			"SITE_ID" => SITE_ID,
			"ACTIVE" => "Y",
		);
		
		$arFilterUrl = array("LOGIC" => "AND");
		
		$find = false;
		
		if(!empty($arResult["URL"]["URL_PARAMS_ARR"]))
		{
			$paramsClearArr = \Profistudio\Seo\Url::getUrlParamsClear(true);			
			
			foreach($arResult["URL"]["URL_PARAMS_ARR"] as $key => $param)
			{
				if(!empty($paramsClearArr) and is_array($paramsClearArr))
				{					
					if(in_array($key, $paramsClearArr))
					{						
						unset($arResult["URL"]["URL_PARAMS_ARR"][$key]);
						continue;
					}
				}
				
				$arFilterUrl[] = array("URL" => "%" . $key . "=" . $param . "%");
				
				$find = true;
			}		
		}
		
		if($find)
		{				
			$arFilterUrl[] = array("URL" => $arResult["URL"]["URL_FILTER"] . "?%");
		}
		else
		{
			$arFilterUrl[] = array("URL" => $arResult["URL"]["URL_FILTER"]);
		}
		
		$arFilter[] = $arFilterUrl;		
		
		$arResult["PAGES"] = array();
			
		$res = PageTable::getList(array('order' => array('SORT' => 'ASC'), 'filter' => $arFilter, 'select' => $arSelect));

		while($arPage = $res->fetch())
		{
			if(empty($arPage["URL"]))
				continue;
			
			$uri_parts = \Profistudio\Seo\Url::getUrlParts($arPage["URL"]);
			
			if(empty($uri_parts[0]))
				continue;
			
			$uri_url = $uri_parts[0];
						
			if($arResult["URL"]["URL_FILTER"] !== $uri_url)
				continue;
			
			$arPage["URL_PARAMS_ARR"] = \Profistudio\Seo\Url::getParamsArrByUriDb($arPage["URL"], true);			
			
			$find = false;			
			
			if(empty($arResult["URL"]["URL_PARAMS_ARR"]) and empty($arPage["URL_PARAMS_ARR"]))
				$find = true;
			
			if(empty($arResult["URL"]["URL_PARAMS_ARR"]) and !empty($arPage["URL_PARAMS_ARR"]))
				continue;
			
			if(!empty($arResult["URL"]["URL_PARAMS_ARR"]) and empty($arPage["URL_PARAMS_ARR"]))
				continue;
			
			if(!$find)
			{
				if(!empty($arPage["URL_PARAMS_ARR"]) and is_array($arPage["URL_PARAMS_ARR"]))
				{
					$find = true;
					
					foreach($arPage["URL_PARAMS_ARR"] as $param_key => $param_val)
					{						
						if(isset($arResult["URL"]["URL_PARAMS_ARR"][$param_key]) and $arResult["URL"]["URL_PARAMS_ARR"][$param_key] == $param_val)
						{
							continue;
						}
						
						$find = false;
						break;
					}			
				}

				if($find)
				{
					$find = false;
					
					if(!empty($arResult["URL"]["URL_PARAMS_ARR"]) and is_array($arResult["URL"]["URL_PARAMS_ARR"]))
					{
						$find = true;

						foreach($arResult["URL"]["URL_PARAMS_ARR"] as $param_key => $param_val)
						{							
							if(isset($arPage["URL_PARAMS_ARR"][$param_key]) and $arPage["URL_PARAMS_ARR"][$param_key] == $param_val)
							{
								continue;
							}

							$find = false;
							break;
						}			
					}
				}
			}

			if($find)
			{
				$arResult["PAGE"] = $arPage;
				$arResult["PAGES"][] = $arPage["ID"];
				break;
			}
		}

		if(empty($arResult["PAGE"]))
		{
			$arResult = array();
		}
		
		return $arResult;
	}
	
	public static function getCurPagebyNewUri($uri = '', $arSelect = array())
	{
		if(\CHTTP::isPathTraversalUri($uri))
			return array();		
		
		if(\Profistudio\Seo\Url::isAdminPage())
			return array();
		
		$arResult = array();
				
		$arResult["URL"] = \Profistudio\Seo\Url::getCurUriInfo($uri, false, true);
		
		if(empty($arResult["URL"]["URL_FILTER"]))
			return array();
						
		if(empty($arSelect))
		{
			$arSelect = array(
				'ID',
				'SITE_ID',
				'SECTION_ID',
				'ACTIVE',
				'SORT',
				'NAME',
				'TIMESTAMP_X',
				'DATE_CREATE',
				'NO_INDEX',
				'REDIRECT_ON',
				'URL',
				'URL_NEW',
				'CANONICAL_ON',
				'TITLE',
				'ADDITIONAL_TITLE',
				'META_DESCRIPTION',
				'META_KEYWORDS',
			);
		}		
		
		$arFilter = array(
			"SITE_ID" => SITE_ID,
			"ACTIVE" => "Y"
		);
		
		$arFilterUrl = array("LOGIC" => "OR");
		$arFilterUrlNewFormat = array("LOGIC" => "AND");
		
		$find = false;		
		
		if(!empty($arResult["URL"]["URL_PARAMS_ARR"]))
		{				
			$paramsClearArr = \Profistudio\Seo\Url::getUrlParamsClear(true);
				
			foreach($arResult["URL"]["URL_PARAMS_ARR"] as $key => $param)
			{
				if(!empty($paramsClearArr) and is_array($paramsClearArr))
				{
					if(in_array($key, $paramsClearArr))
					{
						unset($arResult["URL"]["URL_PARAMS_ARR"][$key]);
						continue;
					}
				}
				
				$arFilterUrlNewFormat[] = array("URL_NEW_FORMAT" => "%" . $key . "=" . $param . "%");
				
				$find = true;
			}		
		}
		
		if($find)
		{				
			$arFilterUrlNew = array("URL_NEW" => $arResult["URL"]["URL_FILTER"] . "?%");
			$arFilterUrlNewFormat[] = array("URL_NEW_FORMAT" => $arResult["URL"]["URL_FILTER"] . "?%");
		}
		else
		{
			$arFilterUrlNew = array("URL_NEW" => $arResult["URL"]["URL_FILTER"]);
			$arFilterUrlNewFormat[] = array("URL_NEW_FORMAT" => $arResult["URL"]["URL_FILTER"]);
		}
		
		$arFilterUrl[] = $arFilterUrlNew;
		$arFilterUrl[] = $arFilterUrlNewFormat;	
				
		$arFilter[] = $arFilterUrl;
				
		$arResult["PAGES"] = array();
		
		$res = PageTable::getList(array('order' => array('SORT' => 'ASC'), 'filter' => $arFilter, 'select' => $arSelect));
		
		while($arPage = $res->fetch())
		{			
			if(empty($arPage["URL_NEW"]))
				continue;
			
			$uri_new = \Profistudio\Seo\Url::uriFormatDB($arPage["URL_NEW"]);			
			$uri_new = \Profistudio\Seo\Url::uriUnFormatDB($uri_new);
			$uri_new = \Profistudio\Seo\Url::uriDecode2($uri_new);
			
			$uri_new_parts = \Profistudio\Seo\Url::getUrlParts($uri_new);
			
			if(empty($uri_new_parts[0]))
				continue;
			
			$uri_new_url = $uri_new_parts[0];
			
			$uri_new_url_format = \Profistudio\Seo\Url::uriFormat(\Profistudio\Seo\Url::urlDecode($uri_new_url));
			
			if($arResult["URL"]["URL_FILTER"] !== $uri_new_url_format)
				continue;
			
			$arPage["URL_PARAMS_ARR"] = \Profistudio\Seo\Url::getParamsArrByUriDb($uri_new, false);			
						
			$find = false;			
			
			if(empty($arResult["URL"]["URL_PARAMS_ARR"]) and empty($arPage["URL_PARAMS_ARR"]))
				$find = true;
			
			if(empty($arResult["URL"]["URL_PARAMS_ARR"]) and !empty($arPage["URL_PARAMS_ARR"]))
				continue;
			
			if(!empty($arResult["URL"]["URL_PARAMS_ARR"]) and empty($arPage["URL_PARAMS_ARR"]))
				continue;
			
			if(!$find)
			{
				if(!empty($arPage["URL_PARAMS_ARR"]) and is_array($arPage["URL_PARAMS_ARR"]))
				{
					$find = true;
					
					foreach($arPage["URL_PARAMS_ARR"] as $param_key => $param_val)
					{
						if(isset($arResult["URL"]["URL_PARAMS_ARR"][$param_key]) and $arResult["URL"]["URL_PARAMS_ARR"][$param_key] == $param_val)
						{
							continue;
						}
						
						$find = false;
						break;
					}			
				}

				if($find)
				{
					$find = false;
					
					if(!empty($arResult["URL"]["URL_PARAMS_ARR"]) and is_array($arResult["URL"]["URL_PARAMS_ARR"]))
					{
						$find = true;

						foreach($arResult["URL"]["URL_PARAMS_ARR"] as $param_key => $param_val)
						{
							if(isset($arPage["URL_PARAMS_ARR"][$param_key]) and $arPage["URL_PARAMS_ARR"][$param_key] == $param_val)
							{
								continue;
							}

							$find = false;
							break;
						}			
					}
				}
			}			

			if($find)
			{
				$arResult["PAGE"] = $arPage;
				$arResult["PAGES"][] = $arPage["ID"];
				break;
			}
		}

		if(empty($arResult["PAGE"]))
		{
			$arResult = array();
		}			
		
		return $arResult;
	}	
	
	public static function OnBeforeAdd(Entity\Event $event)
    {
		$result = new Entity\EventResult;
		$fields = $event->getParameter("fields");
		$data = $event->getParameter("id");
		//$parameters = $event->getParameters();		
		$fields = self::checkProps($fields);		
		$result->modifyFields($fields);
		self::checkUrl($data, $fields, $result, $event);
		if(!empty($fields["URL_NEW"]))
		{
			self::checkUrlNew($data, $fields, $result, $event);				
		}			
		return $result;
    }
	
	public static function OnBeforeUpdate(Entity\Event $event)
    {
		$result = new Entity\EventResult;
		$fields = $event->getParameter("fields");
		$data = $event->getParameter("id");
		//$parameters = $event->getParameters();		
		$fields = self::checkProps($fields);		
		$result->modifyFields($fields);		
		self::checkUrl($data, $fields, $result, $event);
		if(!empty($fields["URL_NEW"]))
		{
			self::checkUrlNew($data, $fields, $result, $event);				
		}
		return $result;
    }
	
	public static function OnAfterAdd(Entity\Event $event)
    {
		$result = new Entity\EventResult;
		$fields = $event->getParameter("fields");
		self::sitemap($fields["SITE_ID"]);
		return $result;
    }
	
	public static function OnAfterUpdate(Entity\Event $event)
    {
		$result = new Entity\EventResult;
		$fields = $event->getParameter("fields");
		
		$data = $event->getParameter("id");
		$pageId = intval($data["ID"]);
		
		if($pageId > 0 and defined("BX_COMP_MANAGED_CACHE") and is_object($GLOBALS["CACHE_MANAGER"]))
		{
			$GLOBALS['CACHE_MANAGER']->ClearByTag("profistudio_seo_page_tag");
			$GLOBALS['CACHE_MANAGER']->ClearByTag("profistudio_seo_page_tag" . $pageId);
		}
		
		self::sitemap($fields["SITE_ID"]);		
		
		return $result;
    }
	
	public static function OnBeforeDelete(Entity\Event $event)
    {
		$result = new Entity\EventResult;
		$data = $event->getParameter("id");
		$parameters = $event->getParameters();
		
		$res = PageTable::getList(array('filter' => array('ID' => $data), 'select' => array("*")));
		if($fields = $res->fetch())
		{
			self::$site_id = $fields["SITE_ID"];
		}
		
		return $result;
    }
	
	public static function OnAfterDelete(Entity\Event $event)
    {
		$result = new Entity\EventResult;
		
		$data = $event->getParameter("id");
		$pageId = intval($data["ID"]);
		
		$entity_id = "PROFI_SEO_PAGE_" . strtoupper(self::$site_id);
		
		$GLOBALS['USER_FIELD_MANAGER']->Delete($entity_id, $pageId);
		
		if($pageId > 0 and defined("BX_COMP_MANAGED_CACHE") and is_object($GLOBALS["CACHE_MANAGER"]))
		{
			$GLOBALS['CACHE_MANAGER']->ClearByTag("profistudio_seo_page_tag");
			$GLOBALS['CACHE_MANAGER']->ClearByTag("profistudio_seo_page_tag" . $pageId);
		}
		
		self::sitemap(self::$site_id);
		
		return $result;
    }
	
	
	
	public static function checkProps($fields)
	{
		if(isset($fields["NAME"]))
		{
			$fields["NAME"] = trim($fields["NAME"]);
		}
		
		if(isset($fields["URL"]))
		{
			$fields["URL"] = trim($fields["URL"]);
		}
		
		if(isset($fields["URL_NEW"]))
		{
			$fields["URL_NEW"] = trim($fields["URL_NEW"]);
		}
		
		if(isset($fields["TITLE"]))
		{
			$fields["TITLE"] = trim($fields["TITLE"]);
		}
		
		if(isset($fields["ADDITIONAL_TITLE"]))
		{
			$fields["ADDITIONAL_TITLE"] = trim($fields["ADDITIONAL_TITLE"]);
		}
		
		if(isset($fields["META_DESCRIPTION"]))
		{
			$fields["META_DESCRIPTION"] = trim($fields["META_DESCRIPTION"]);
		}
		
		if(isset($fields["META_KEYWORDS"]))
		{
			$fields["META_KEYWORDS"] = trim($fields["META_KEYWORDS"]);
		}
		
		if(isset($fields["URL"]))
		{
			$uri_parts = explode("?", $fields["URL"]);
			if(substr($uri_parts[0], -1) == '/')
			{
				$uri_parts[0] .= 'index.php';
				$fields["URL"] = $uri_parts[0];
				if(!empty($uri_parts[1]))
				{
					$fields["URL"] .= '?' . $uri_parts[1];
				}
			};
		}
		
		return $fields; 	
	}
	
	public static function checkUrl($data, $fields, &$result, &$event)
	{
		if(!empty($fields["URL"]))
		{
			$arSite = \Profistudio\Seo\Tools::getSite($fields["SITE_ID"]);

			if(strpos($fields["URL"], $arSite["DIR"]) !== 0)
			{
				$result->addError(new Entity\FieldError($event->getEntity()->getField('URL'), str_replace('#DIR#', $arSite["DIR"], Loc::getMessage("PROFISTUDIO_SEO_TABLE_PAGE_URL_ERROR"))));			
			}

			$arFilter = array(
				"!ID" => $data["ID"],
				"SITE_ID" => $fields["SITE_ID"],
				"=URL" => $fields["URL"]
			);

			$res = PageTable::getList(array('filter' => $arFilter, 'select' => array("ID", "URL")));
			while($arPage = $res->fetch())
			{
				$result->addError(new Entity\FieldError($event->getEntity()->getField('URL'), Loc::getMessage("PROFISTUDIO_SEO_TABLE_PAGE_URL_DUBLICATE")));
				break;
			}
		}
	}
	
	public static function checkUrlNew($data, $fields, &$result, &$event)
	{
		$arSite = \Profistudio\Seo\Tools::getSite($fields["SITE_ID"]);
		
		if(strpos($fields["URL_NEW"], $arSite["DIR"]) !== 0)
		{
			$result->addError(new Entity\FieldError($event->getEntity()->getField('URL_NEW'), str_replace('#DIR#', $arSite["DIR"], Loc::getMessage("PROFISTUDIO_SEO_TABLE_PAGE_URL_NEW_ERROR"))));			
		}
		
		$uri_new_format = \Profistudio\Seo\Url::uriFormatDB($fields["URL_NEW"]);	
		$uri_new_format = \Profistudio\Seo\Url::uriUnFormatDB($uri_new_format);
		$uri_new_format = \Profistudio\Seo\Url::uriDecode2($uri_new_format);
		$uri_new_format = \Profistudio\Seo\Url::uriFormatDB($uri_new_format);
		
		$arFilter = array(
			"!ID" => $data["ID"],
			"SITE_ID" => $fields["SITE_ID"],
			array(
				"LOGIC" => "OR",
				"=URL_NEW" => $fields["URL_NEW"],
				"=URL_NEW_FORMAT" => $uri_new_format
			)
		);
		
		$res = PageTable::getList(array('filter' => $arFilter, 'select' => array("ID", "URL_NEW", "URL_NEW_FORMAT")));
		while($arPage = $res->fetch())
		{
			$result->addError(new Entity\FieldError($event->getEntity()->getField('URL_NEW'), Loc::getMessage("PROFISTUDIO_SEO_TABLE_PAGE_URL_NEW_DUBLICATE")));
			break;
		}
	}
	
	public static function ClearCachePageById($ID)
	{		
		if($ID > 0 and defined("BX_COMP_MANAGED_CACHE") and is_object($GLOBALS["CACHE_MANAGER"]))
		{
			$GLOBALS['CACHE_MANAGER']->ClearByTag('profiseo_page_id_' . $ID);
			$GLOBALS['CACHE_MANAGER']->ClearByTag("profistudio_seo_page_tag" . $ID);
		}
	}
	
	public static function sitemap($site_id = '')
	{
		if(empty($site_id))
			return;
		
		\Profistudio\Seo\Sitemap::generate($site_id);
	}
}
?>