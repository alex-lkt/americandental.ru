<?
namespace Profistudio\Seo;

use Profistudio\Seo\PageTable;
use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);

class Url 
{	
	private static $module_id = 'profistudio.seo';
	
	function getCurUri($index = true, $decode = false)
	{
		$uri = $_SERVER["REQUEST_URI"];
		
		$uri_parts = self::getUrlParts($uri);

		$uri = '';

		if(!empty($uri_parts[0]))
		{
			if($index === true)
			{
				if(substr($uri_parts[0], -9) === 'index.php')
				{
					$uri = $uri_parts[0];
				}
				else
				{
					$uri = $uri_parts[0] . 'index.php';					
				}
			}
			elseif($index === false)
			{
				if(substr($uri_parts[0], -9) === 'index.php')
				{
					$uri = substr($uri_parts[0], 0, -9);
				}
				else
				{
					$uri = $uri_parts[0];	
				}
			}
			else
			{
				$uri = $uri_parts[0];
			}
		}

		if(!empty($uri_parts[1]))
			$uri .= '?' . $uri_parts[1];
		
		if($decode)
		{			
			$uri = self::uriDecode($uri);
		}
		
		return $uri;
	}
	
	function getCurPage($index = true)
	{
		return $GLOBALS["APPLICATION"]->GetCurPage($index);
	}
	
	function getCurDir()
	{		
		$pagePath = GetPagePath(false, true);
		$dirPath = GetDirPath($pagePath);
		
		return $dirPath;
	}
	
	function getCurDirArr()
	{
		return explode('/', self::getCurDir());
	}
	
	function isAdminPage()
	{
		$admin_page = false;
		
		if(strpos($_SERVER["REQUEST_URI"], "/bitrix/") === 0)
		{			
			return true;
		}			
		
		$dir = self::getCurDir();
		
		$dirs = explode('/', $dir);
		
		if($dirs[1] == 'bitrix')
		{
			return true;
		}
		else
		{
			$pos = strpos($dir, '/bitrix/modules/');
			
			if($pos !== false)
			{
				return true;
			}			
			
			$pos = strpos($dir, '/bitrix/admin/');
			
			if($pos !== false)
			{
				return true;
			}
		}
		
		return $admin_page;
	}
	
	function getUrlParts($uri = '')
	{		
		return explode("?", $uri);
	}
	
	function getUriByUrlParts($uri_parts = array())
	{
		$uri = '';
		
		if(empty($uri_parts[0]))
		   return $uri;
		   
		$uri = $uri_parts[0];
		
		if(!empty($uri_parts[1]))
		{
			$uri .= '?' . $uri_parts[1];
		}
		
		return $uri;
	}
	
	function uriDecode($uri = '')
	{
		$new_uri = '';
		
		$uri_parts = self::getUrlParts($uri);
		
		if(isset($uri_parts[0]))
		{
			$new_uri .= self::urlDecode($uri_parts[0]);
		}
		else
		{
			$new_uri .= self::urlDecode($uri);
		}
		
		if(!empty($uri_parts[1]))
		{
			$new_uri .= '?' . self::paramsDecode($uri_parts[1]);
		}
		
		return $new_uri;
	}
	
	function urlDecode($str = '')
	{	
		$url = rawurldecode($str);
		return $url;
	}
	
	function paramsDecode($str = '')
	{
		$params = urldecode($str);
		return $params;
	}
	
	function uriDecode2($uri = '')
	{
		$new_uri = '';
		
		$uri_parts = self::getUrlParts($uri);
		
		if(isset($uri_parts[0]))
		{
			$new_uri .= str_replace(
				array("%2F"),
				array("/"),
				$uri_parts[0]
			);
		}
		else
		{
			$new_uri .= $uri;
		}
		
		if(!empty($uri_parts[1]))
		{
			$new_uri .= '?' . str_replace(
				array("%3D", "%26"),
				array("=", "&"),
				$uri_parts[1]
			);
		}
		
		return $new_uri;
	}
	
	function uriEncode($uri = '')
	{
		$new_uri = '';
		
		$uri_parts = self::getUrlParts($uri);
		
		if(isset($uri_parts[0]))
		{
			$new_uri .= self::urlEncode($uri_parts[0]);
		}
		else
		{
			$new_uri .= self::urlEncode($uri);
		}
		
		if(!empty($uri_parts[1]))
		{
			$new_uri .= '?' . self::paramsEncode($uri_parts[1]);
		}
		
		return $new_uri;
	}
	
	function urlEncode($str = '')
	{	
		$url = rawurlencode($str);
		return $url;
	}
	
	function paramsEncode($str = '')
	{
		$params = urlencode($str);
		return $params;
	}
	
	function uriFormat($uri = '')
	{		
		$new_uri = str_replace(
			array("<", ">", "\"", "'", "%", "\r", "\n", "\t", "\\", "+", " ", "?"),
			array("&lt;", "&gt;", "&quot;", "&#039;", "%25", "%0d", "%0a", "%09", "%5C", "%2B", "+", "%3F"),
			$uri
		);
		
		return $new_uri;
	}
	
	function uriUnFormat($uri = '')
	{		
		$new_uri = str_replace(			
			array("%3F", "+", "%2B", "&lt;", "&gt;", "&quot;", "&#039;", "%0d", "%0a", "%09", "%5C", "%25"),
			array("?", " ", "+", "<", ">", "\"", "'", "\r", "\n", "\t", "\\", "%"),
			$uri
		);
		
		return $new_uri;
	}
	
	function uriFormatDB($uri = '')
	{
		$uri_new = '';
		
		$uri_parts = \Profistudio\Seo\Url::getUrlParts($uri);	
		
		if(isset($uri_parts[0]))
		{
			$uri_parts_0 = $uri_parts[0];
		}
		else
		{
			$uri_parts_0 = $uri;
		}

		$uri_parts_0 = \Profistudio\Seo\Url::uriFormat(\Profistudio\Seo\Url::urlDecode($uri_parts_0));

		if(!empty($uri_parts[1]))
		{
			$uri_parts_1 = \Profistudio\Seo\Url::uriFormat(\Profistudio\Seo\Url::paramsDecode($uri_parts[1]));
		}
		else
		{
			$uri_parts_1 = '';
		}

		$uri_new = $uri_parts_0;

		if(!empty($uri_parts_1))
		{
			$uri_new .= "?" . $uri_parts_1;	
		}
		
		return $uri_new;
	}
	
	function uriUnFormatDB($uri = '')
	{
		$uri_new = '';
		
		$uri_parts = \Profistudio\Seo\Url::getUrlParts($uri);	
		
		if(isset($uri_parts[0]))
		{
			$uri_parts_0 = $uri_parts[0];
		}
		else
		{
			$uri_parts_0 = $uri;
		}

		$uri_parts_0 = \Profistudio\Seo\Url::urlEncode(\Profistudio\Seo\Url::uriUnFormat($uri_parts_0));
		
		if(!empty($uri_parts[1]))
		{
			$uri_parts_1 = \Profistudio\Seo\Url::paramsEncode(\Profistudio\Seo\Url::uriUnFormat($uri_parts[1]));
		}
		else
		{
			$uri_parts_1 = '';
		}

		$uri_new = $uri_parts_0;

		if(!empty($uri_parts_1))
		{
			$uri_new .= "?" . $uri_parts_1;	
		}
		
		return $uri_new;
	}
	
	function getParams($params_arr)
	{
		$res = http_build_query($params_arr);
		
		$res = self::paramsDecode($res);
		
		return $res;
	}
	
	function getParamsStr($params_arr)
	{		
		$res = '';
		
		if(!empty($params_arr) and is_array($params_arr))
		{
			$i = 0;
			foreach($params_arr as $k => $v)
			{
				if($i > 0)
					$res .= '&';
				
				$res .= $k . '=' . $v;
				
				$i++;	
			}
		}
		
		return $res;
	}
	
	function parseStr($params = '', &$res = array())
	{
		$res1 = explode('&', $params);
		
		if(!empty($res1) and is_array($res1))
		{
			foreach($res1 as $res1_itm)
			{
				if(strlen($res1_itm) <= 0)
					continue;
				$pos1 = strrpos($res1_itm, '=');
				if($pos1 !== false)
				{
					$key = substr($res1_itm, 0, $pos1);
					if($key === false)
						continue;
					$val = substr($res1_itm, $pos1 + 1);
					if($val === false)
						$val = '';
					$res[$key] = $val;		
				}
				else
				{
					$key = $res1_itm;
					$val = '';
					$res[$key] = $val;
				}
			}
		}
	}
	
	function getParamsArr($params, $decode = false)
	{
		$res = array();
		
		if($decode)
		{
			parse_str($params, $res);
		}
		else
		{			
			self::parseStr($params, $res);
		}
		
		return $res;
	}
	
	function getUrlByUri($uri = '')
	{
		$uri_parts = self::getUrlParts($uri);
		if(!empty($uri_parts[0]))
			return $uri_parts[0];
		
		return false;
	}
	
	function getParamsByUri($uri = '')
	{
		if(empty($uri))
			return '';
		
		$uri_parts = self::getUrlParts($uri);
		if(!empty($uri_parts[1]))
			return $uri_parts[1];
		
		return '';
	}
		
	function getParamsArrByUri($uri = '')
	{
		if(empty($uri))
			return array();
		
		$params_str = self::getParamsByUri($uri);
		
		if(empty($params_str))
			return array();
		
		$params_arr = self::getParamsArr($params_str, false);
		
		return $params_arr;
	}
	
	function getParamsArrByUriDb($uri = '', $formatDB = false)
	{
		if(empty($uri))
			return array();
		
		if($formatDB)
		{
			$uri = \Profistudio\Seo\Url::uriUnFormatDB($uri);
			$uri = \Profistudio\Seo\Url::uriDecode2($uri);
		}	
				
		if(empty($uri))
			return array();		
		
		$params_str = self::getParamsByUri($uri);
		
		if(empty($params_str))
			return array();		
		
		$arUriEncodeParamsArr = self::getParamsArr($params_str, false);
			
		$arParamsArr = array();

		if(!empty($arUriEncodeParamsArr) and is_array($arUriEncodeParamsArr))
		{				
			foreach($arUriEncodeParamsArr as $key => $val)
			{
				$arParamsArr[\Profistudio\Seo\Url::uriFormat(\Profistudio\Seo\Url::paramsDecode($key))] = \Profistudio\Seo\Url::uriFormat(\Profistudio\Seo\Url::paramsDecode($val));
			}
		}
		
		return $arParamsArr;
	}
	
	function getUrlParamsClear($formatDB = false)
	{		
		$params = \Bitrix\Main\Config\Option::get(self::$module_id, "PARAMS_NO_USE");
		$params_ar_tmp = explode(",", $params);
		$params_ar = array();
		if(!empty($params_ar_tmp) and is_array($params_ar_tmp))
		{
			foreach($params_ar_tmp as $key => $val)
			{
				$val = trim($val);
				if(!empty($val))
				{
					if($formatDB)
					{
						$params_ar[$key] = \Profistudio\Seo\Url::uriFormat(\Profistudio\Seo\Url::paramsDecode($val));
					}
					else
					{
						$params_ar[$key] = urlencode(urldecode($val));
					}
				}
			}
		}
		else
		{
			$params_ar = array('clear_cache', 'bitrix_include_areas', 'PAGEN_1', 'PAGEN_2');
		}
		
		if(!in_array('bxrand', $params_ar))
			$params_ar[] = 'bxrand';
		
		return $params_ar;
	}
	
	function getUrlParamsClear1($formatDB = false)
	{		
		$params = \Profistudio\Seo\Admin::getOptionsParamsClear();
		
		$params_ar_tmp = array();
		
		if($params)
			$params_ar_tmp = explode(",", $params);
		
		$params_ar = array();
		if(!empty($params_ar_tmp) and is_array($params_ar_tmp))
		{
			foreach($params_ar_tmp as $key => $val)
			{
				$val = trim($val);
				if(!empty($val))
				{
					if($formatDB)
					{
						$params_ar[$key] = \Profistudio\Seo\Url::uriFormat(\Profistudio\Seo\Url::paramsDecode($val));
					}
					else
					{
						$params_ar[$key] = urlencode(urldecode($val));
					}
				}
			}
		}
		else
		{
			$params_ar = array('clear_cache', 'bitrix_include_areas', 'PAGEN_1', 'PAGEN_2');
		}
		
		if(!in_array('bxrand', $params_ar))
			$params_ar[] = 'bxrand';
		
		return $params_ar;
	}
	
	function deleteParamsClear($uri = '')
	{		
		$params_clear_ar = self::getUrlParamsClear();
		$uri_parts = self::getUrlParts($uri);		
		
		if(!empty($uri_parts[1]) and !empty($params_clear_ar))
		{
			$params_arr = self::getParamsArr($uri_parts[1]);
			
			foreach($params_arr as $param_key => $param_val)
			{
				if(in_array($param_key, $params_clear_ar))
				{
					unset($params_arr[$param_key]);	
				}
			}
		}		
		
		if(!empty($params_arr))
		{
			$uri_parts[1] = self::getParamsStr($params_arr);
		}
		else
		{
			$uri_parts[1] = array();
		}		
		
		$uri = self::getUriByUrlParts($uri_parts);
		
		return $uri;
	}
	
	function deleteParamsNoClear($uri = '')
	{
		$params_clear_ar = self::getUrlParamsClear();
		$uri_parts = self::getUrlParts($uri);
		
		if(!empty($uri_parts[1]) and !empty($params_clear_ar))
		{
			$params_arr = self::getParamsArr($uri_parts[1]);			
			
			foreach($params_arr as $param_key => $param_val)
			{
				if(!in_array($param_key, $params_clear_ar))
				{
					unset($params_arr[$param_key]);	
				}
			}
		}
		else if(empty($params_clear_ar))
		{
			$uri_parts[1] = array();	
		}		
		
		if(!empty($params_arr))
		{
			$uri_parts[1] = self::getParamsStr($params_arr);
		}
		else
		{
			$uri_parts[1] = array();
		}		
		
		$uri = self::getUriByUrlParts($uri_parts);
		
		return $uri;
	}
	
	function addClearParamsUri($uri = '', $uri_clear = '')
	{
		$uri_delete_params_no_clear = \Profistudio\Seo\Url::deleteParamsNoClear($uri_clear);
				
		$uri_clear_params_arr = \Profistudio\Seo\Url::getParamsArrByUri($uri_delete_params_no_clear);
		$uri_params_arr = \Profistudio\Seo\Url::getParamsArrByUri($uri);		
		
		$uri_new_params_arr = array_merge($uri_params_arr, $uri_clear_params_arr);
		
		$url_new = \Profistudio\Seo\Url::getUrlByUri($uri);

		$uri_new_parts = array();
		$uri_new_parts[0] = $url_new;

		if(!empty($uri_new_params_arr))
			$uri_new_parts[1] = \Profistudio\Seo\Url::getParams($uri_new_params_arr);

		$uri_new = \Profistudio\Seo\Url::getUriByUrlParts($uri_new_parts);
		
		return $uri_new;
	}
	
	function getCurUriInfo($uri = '', $index = true, $formatDB = false)
	{
		$arResult = array();
		
		$arUriEncode = '';
		
		if(empty($uri))
		{
			$arUriEncode = self::getCurUri($index, false);
		}
		else
		{
			$arUriEncode = $uri;
		}
		
		if(\CHTTP::isPathTraversalUri($arUriEncode))
		{
			$arResult["URI"] = '';
			$arResult["URI_PARTS"] = array('');
			$arResult["URL"] = $arResult["URL_FILTER"] = '';
			$arResult["URL_PARAMS"] = '';
			$arResult["URL_PARAMS_ARR"] = array();
			return $arResult;
		}
		
		$arResult["URI_ENCODE"] = $arUriEncode;
		$arResult["URI_ENCODE_PARTS"] = self::getUrlParts($arResult["URI_ENCODE"]);
			
		
		if($formatDB)
		{
			$arResult["URI"] = self::uriFormatDB($arUriEncode);
		}
		else
		{
			$arResult["URI"] = $arUriEncode;
		}	
				
		$arResult["URI_PARTS"] = self::getUrlParts($arResult["URI"]);
		
		$arResult["URL"] = (!empty($arResult["URI_PARTS"][0]) ? $arResult["URI_PARTS"][0] : "");
		
		$arResult["URL_FILTER"] = $arResult["URL"];
				
		$arResult["URL_PARAMS"] = (!empty($arResult["URI_PARTS"][1]) ? $arResult["URI_PARTS"][1] : "");
		
		if($formatDB)
		{
			$arResult["URL_PARAMS_ARR"] = self::getParamsArrByUriDb($arUriEncode, false);
		}
		else
		{
			$arResult["URL_PARAMS_ARR"] = self::getParamsArrByUri($arUriEncode);
		}
		
		return $arResult;
	}
	
	function setCurUriNew($uri = "", $new_uri_backup = "")
	{		
		global $profi_seo_page_id;
		
		if(empty($profi_seo_page_id))
			return;
		
		if(self::isAdminPage())
			return;
		
		$uri = trim($uri);
		
		if(empty($uri)) return;
		
		$new_uri_backup = trim($new_uri_backup);
		
		if(empty($new_uri_backup)) return;
		
		global $APPLICATION;
		
		$uri = \Profistudio\Seo\Url::uriUnFormatDB($uri);
		$uri = \Profistudio\Seo\Url::uriDecode2($uri);		
				
		$uri_parts = self::getUrlParts($uri);
		
		$uri_params = (!empty($uri_parts[1]) ? $uri_parts[1] : "");
		parse_str($uri_params, $request_vars);

		$context = \Bitrix\Main\Context::getCurrent();
		$server = $context->getServer();
		$request = $context->getRequest();
		$response = $context->getResponse();
		$server_array = $server->toArray();

		$cur_url = self::getCurUri(true, false);
		$new_uri_parts  = self::getUrlParts($cur_url);
		$new_uri_params = (!empty($new_uri_parts[1]) ? $new_uri_parts[1] : "");
		parse_str($new_uri_params, $new_request_vars);
				
		if(!empty($new_uri_backup))
		{
			$new_uri_backup_parts = self::getUrlParts($new_uri_backup);
			$new_uri_backup_params = (!empty($new_uri_backup_parts[1]) ? $new_uri_backup_parts[1] : "");
			parse_str($new_uri_backup_params, $new_backup_request_vars);
		}
		
		$request_vars_all = array();

		if(!empty($request_vars) and is_array($request_vars))
		{
			$request_vars_all = array_merge($request_vars_all, $request_vars);
		}		

		if(!empty($new_request_vars) and is_array($new_request_vars))
		{
			if(!empty($new_backup_request_vars) and is_array($new_backup_request_vars))
			{
				foreach($new_request_vars as $new_request_vars_key => $new_request_vars_val)
				{
					if(isset($new_backup_request_vars[$new_request_vars_key]) and $new_backup_request_vars[$new_request_vars_key] == $new_request_vars_val)
					{
						unset($new_request_vars[$new_request_vars_key]);
					}
				}
			}
			
			$request_vars_all = array_merge($request_vars_all, $new_request_vars);
		}
		
		$requestParams_all = '';		

		if($request_vars_all and is_array($request_vars_all))
		{			
			$requestParams_all = http_build_query($request_vars_all);			
		}
		
		$url = $uri_parts[0];
		$uri = $url;
		
		if(!empty($requestParams_all))
		{
			$uri .= '?' . $requestParams_all;
		}
		
		if(\CHTTP::isPathTraversalUri($uri))
		{
			return;
		}
		
		$_GET += $request_vars_all;
		$_REQUEST += $request_vars_all;
		
		$requestParams_all_encode = \CHTTP::urnEncode($requestParams_all);
		
		$_SERVER['REQUEST_URI'] = $uri;
		$server_array["REQUEST_URI"] = $uri;
		$_SERVER["QUERY_STRING"] = $requestParams_all_encode;
		$server_array["QUERY_STRING"] = $requestParams_all_encode;

		$server->set($server_array);

		$context->initialize(new \Bitrix\Main\HttpRequest($server, array(), array(), array(), $_COOKIE), $response, $server);
		
		$GLOBALS["APPLICATION"]->reinitPath();
		
		$APPLICATION->SetCurPage($url, $requestParams_all_encode);
	}
	
	function getUriRewrite($url = '', $params = '')
	{		
		$arResult = array(
			'URI' => '',
			'PATH' => '',
			'PARAMS' => '',
			'PARAMS_ARR' => array()
		);
		
		if(empty($url))
			return $arResult;
				
		$uri = urldecode($url);
		
		if(!empty($params))
		{			
			$uri .= '?' . $params;
		}		
		
		if(\CHTTP::isPathTraversalUri($uri))
			return $arResult;		
		
		global $APPLICATION;
						
		include_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/classes/general/virtual_io.php");
		$io = \CBXVirtualIo::GetInstance();

		$arUrlRewrite = array();
		$urlRewriteFile = $_SERVER['DOCUMENT_ROOT'] . "/urlrewrite.php";
		if(file_exists($urlRewriteFile))
		{
			include($urlRewriteFile);
		}		

		foreach($arUrlRewrite as $urlRewriteItem)
		{			
			if(strpos($urlRewriteItem["PATH"], '/profistudio_seo_file_rewrite.php') !== false)
				continue;
			
			if(!preg_match($urlRewriteItem["CONDITION"], $uri))
				continue;
			
			if (!empty($urlRewriteItem["RULE"]))
			{
				$replacement = (!empty($urlRewriteItem["PATH"]) ? $urlRewriteItem["PATH"] . '?' : '') . $urlRewriteItem["RULE"];
				$uri_new = preg_replace($urlRewriteItem["CONDITION"], $replacement, $uri);
			}
			else
			{				
				$uri_new = $urlRewriteItem["PATH"];
			}		

			$pos = strpos($uri_new, "?");
			if($pos !== false)
			{
				$params_new = substr($uri_new, $pos + 1);
				parse_str($params_new, $params_new_arr);				
				$url_new = substr($uri_new, 0, $pos);
			}
			else
			{
				$url_new = $uri_new;
			}

			$url_new = _normalizePath($url_new);			

			if(!$io->FileExists($_SERVER['DOCUMENT_ROOT'] . $url_new))
				continue;

			if(!$io->ValidatePathString($url_new))
				continue;

			$url1 = strtolower(ltrim($url_new, "/\\"));
			$url1 = str_replace(".", "", $url1);
			if(substr($url1, 0, 7) === "bitrix/" || substr($url1, 0, 7) === "upload/")
				continue;

			$urlExt = strtolower(GetFileExtension($url_new));
			if($urlExt !== "php")
				continue;
			
			$arResult['URI'] = $url_new;
			$arResult['PATH'] = $url_new;
			
			if(!empty($params_new))
			{
				$arResult['URI'] .= '?' . $params_new;
				$arResult['PARAMS'] = $params_new;
				$arResult['PARAMS_ARR'] = $params_new_arr;
			}
			
			return $arResult;
		}
		
		return $arResult;
	}
	
	function getPath($uri = '')
	{
		$path = '';
		
		if(empty($uri))
			return $path;
		
		if(\CHTTP::isPathTraversalUri($uri))
			return $path;		
		
		global $APPLICATION;
		
		include_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/classes/general/virtual_io.php");
		$io = \CBXVirtualIo::GetInstance();
		
		$url = $uri;

		$pos = strpos($url, "?");
		if($pos !== false)
		{						
			$url = substr($url, 0, $pos);
		}

		$url = _normalizePath($url);		

		if(!$io->FileExists($_SERVER['DOCUMENT_ROOT'] . $url))
			return $path;

		if(!$io->ValidatePathString($url))
			return $path;

		$url1 = strtolower(ltrim($url, "/\\"));
		$url1 = str_replace(".", "", $url1);
		if(substr($url1, 0, 7) === "bitrix/" || substr($url1, 0, 7) === "upload/")
			return $path;

		$urlExt = strtolower(GetFileExtension($url));
		if($urlExt !== "php")
			return $path;

		$path = $url;
		
		return $path;
	}
	
	function setCurUriNewRewrite($uri = "", $new_uri_backup = "")
	{		
		if(empty($_SERVER["REAL_FILE_PATH"]) || strpos($_SERVER["REAL_FILE_PATH"], '/profistudio_seo_file_rewrite.php') === false)
			return;
		
		global $profi_seo_page_id;
		
		if(empty($profi_seo_page_id))
			return;
		
		$uri = trim($uri);
		
		if(empty($uri)) return;
		
		$new_uri_backup = trim($new_uri_backup);
		
		if(empty($new_uri_backup)) return;
		
		$uri = \Profistudio\Seo\Url::uriUnFormatDB($uri);
		$uri = \Profistudio\Seo\Url::uriDecode2($uri);
				
		$uri_parts = self::getUrlParts($uri);
		
		$uri_params = (!empty($uri_parts[1]) ? $uri_parts[1] : "");
		parse_str($uri_params, $request_vars);		

		$cur_url = self::getCurUri(true, false);
		$new_uri_parts  = self::getUrlParts($cur_url);
		$new_uri_params = (!empty($new_uri_parts[1]) ? $new_uri_parts[1] : "");
		parse_str($new_uri_params, $new_request_vars);
				
		if(!empty($new_uri_backup))
		{
			$new_uri_backup_parts = self::getUrlParts($new_uri_backup);
			$new_uri_backup_params = (!empty($new_uri_backup_parts[1]) ? $new_uri_backup_parts[1] : "");
			parse_str($new_uri_backup_params, $new_backup_request_vars);
		}
		
		$request_vars_all = array();

		if(!empty($request_vars) and is_array($request_vars))
		{
			$request_vars_all = array_merge($request_vars_all, $request_vars);
		}

		if(!empty($new_request_vars) and is_array($new_request_vars))
		{
			if(!empty($new_backup_request_vars) and is_array($new_backup_request_vars))
			{
				foreach($new_request_vars as $new_request_vars_key => $new_request_vars_val)
				{
					if(isset($new_backup_request_vars[$new_request_vars_key]) and $new_backup_request_vars[$new_request_vars_key] == $new_request_vars_val)
					{
						unset($new_request_vars[$new_request_vars_key]);
					}
				}
			}
			
			$request_vars_all = array_merge($request_vars_all, $new_request_vars);
		}
		
		$requestParams_all = '';		

		if($request_vars_all and is_array($request_vars_all))
		{			
			$requestParams_all = http_build_query($request_vars_all);			
		}
		
		$url = $uri_parts[0];
		$uri = $url;
		
		if(!empty($requestParams_all))
		{
			$uri .= '?' . $requestParams_all;
		}
		
		if(\CHTTP::isPathTraversalUri($uri))
		{
			return;
		}
		
		$path = '';				
				
		$uri_new_arr = \Profistudio\Seo\Url::getUriRewrite($url, $requestParams_all);

		if(!empty($uri_new_arr["PATH"]))
		{				
			$path = $uri_new_arr["PATH"];				

			if(!empty($uri_new_arr["PARAMS"]))
			{
				$requestParams_all = $uri_new_arr["PARAMS"];
			}

			if(!empty($uri_new_arr["PARAMS_ARR"]) and is_array($uri_new_arr["PARAMS_ARR"]))
			{
				$request_vars_all = array_merge($request_vars_all, $uri_new_arr["PARAMS_ARR"]);
			}
			
			$_SERVER["REAL_FILE_PATH"] = $path;
		}
		else
		{
			$path = \Profistudio\Seo\Url::getPath($uri);
			
			$_SERVER["REAL_FILE_PATH"] = NULL;
		}
					
		$_GET += $request_vars_all;
		$_REQUEST += $request_vars_all;

		$requestParams_all_encode = \CHTTP::urnEncode($requestParams_all);

		$_SERVER['REQUEST_URI'] = $REQUEST_URI = $uri;		
		$_SERVER["QUERY_STRING"] = $QUERY_STRING = $requestParams_all_encode;
		
		if(!empty($path) and strpos($path, '/profistudio_seo_file_rewrite.php') === false)
		{			
			include_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/classes/general/virtual_io.php");
			$io = \CBXVirtualIo::GetInstance();

			\CHTTP::SetStatus("200 OK");
			include_once($io->GetPhysicalName($_SERVER['DOCUMENT_ROOT'] . $path));
			die();
		}
	}	
	
	function getPageByNewUri($site_id, $ar_dbconn)
	{
		if(!file_exists($_SERVER['DOCUMENT_ROOT'] . '/bitrix/admin/profistudio.seo_admin_page_edit.php'))
			return false;
		
		if(!defined("PROFISTUDIO_SEO_FILE_REWRITE"))
			return false;
		
		if(defined("PROFISTUDIO_SEO_FILE_REWRITE_ON"))
			return false;
		
		define("PROFISTUDIO_SEO_FILE_REWRITE_ON", true);
		
		$site_id = trim($site_id);
		
		if(empty($site_id))
			return false;
		
		$site_id = substr($site_id, 0, 2);

		if(empty($ar_dbconn) || !isset($ar_dbconn['DBHost']) || !isset($ar_dbconn['DBName']) || !isset($ar_dbconn['DBLogin']) || !isset($ar_dbconn['DBPassword']))
			return false;
		
		if(!class_exists('\CHTTP'))
			return false;
		
		if(\CHTTP::isPathTraversalUri($_SERVER["REQUEST_URI"]))
			return false;
		
		if(self::isAdminPage())
			return false;
		
		if(!class_exists('\mysqli'))
			return false;

		$arResult = array();
		
		$mysqli = new \mysqli($ar_dbconn['DBHost'], $ar_dbconn['DBLogin'], $ar_dbconn['DBPassword'],  $ar_dbconn['DBName']);
		
		if($mysqli->connect_errno)
		{				
			return false;
		}		
		
		$arResult["URL"] = \Profistudio\Seo\Url::getCurUriInfo($_SERVER['REQUEST_URI'], false, true);

		$find = false;

		$url_new_format_params = array();

		if(!empty($arResult["URL"]["URL_PARAMS_ARR"]))
		{				
			$paramsClearArr = \Profistudio\Seo\Url::getUrlParamsClear1(true);

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

				$url_new_format_params[] = "%" . $key . "=" . $param . "%";

				$find = true;
			}		
		}

		if($find)
		{
			$url_new = $arResult["URL"]["URL_FILTER"] . "?%";
			$url_new_format = $arResult["URL"]["URL_FILTER"] . "?%";
		}
		else
		{
			$url_new = $arResult["URL"]["URL_FILTER"];
			$url_new_format = $arResult["URL"]["URL_FILTER"];
		}

		$whereUrl = "( UPPER(`profistudio_seo_page`.`URL_NEW`) like upper('".$mysqli->real_escape_string($url_new)."') )";

		$whereUrlFormat = "( ";
		$whereUrlFormat .= "( UPPER(`profistudio_seo_page`.`URL_NEW_FORMAT`) like upper('".$mysqli->real_escape_string($url_new_format)."') )";
		if(!empty($url_new_format_params) and is_array($url_new_format_params))
		{
			foreach($url_new_format_params as $url_new_format_param)
			{
				$whereUrlFormat .= " AND ( UPPER(`profistudio_seo_page`.`URL_NEW_FORMAT`) like upper('".$mysqli->real_escape_string($url_new_format_param)."') )";
			}
		}
		$whereUrlFormat .= " )";

		$db_str_select = "`profistudio_seo_page`.`ID` AS `ID`, `profistudio_seo_page`.`URL` AS `URL`, `profistudio_seo_page`.`URL_NEW` AS `URL_NEW`";
		$db_str_from = "`b_profistudio_seo_page` `profistudio_seo_page`";			
		$db_str_where = "UPPER(`profistudio_seo_page`.`SITE_ID`) like upper('".$mysqli->real_escape_string($site_id)."') AND UPPER(`profistudio_seo_page`.`ACTIVE`) like upper('Y') AND ( " . $whereUrl . " OR " . $whereUrlFormat . " )";
		$db_str_order_by = "`profistudio_seo_page`.`SORT` ASC";
		
		$sql = "SELECT ".$db_str_select." FROM ".$db_str_from." WHERE ".$db_str_where." ORDER BY ".$db_str_order_by;
		
		if(!$result = $mysqli->query($sql))
		{			
			$mysqli->close();
			return false;
		}		

		while($arPage = $result->fetch_assoc())
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
				break;
			}
		}
		
		$result->free();
		$mysqli->close();

		if(!empty($arResult["PAGE"]))
		{
			return $arResult["PAGE"];
		}		
		
		return false;
	}
}
?>