<?
// Удаляем лишние пробелы и пустые строки в html перед выводом пользователю
AddEventHandler("main", "OnEndBufferContent", "ChangeMyContent");
function ChangeMyContent(&$content)    
{
   $content = sanitize_output($content);
}
function sanitize_output($buffer)
{
$buffer = str_replace('type="text/javascript"', '', $buffer);
    return $buffer;
}
AddEventHandler("main", "OnEndBufferContent", "deleteKernelJs");
AddEventHandler("main", "OnEndBufferContent", "deleteKernelCss");
// Удаляем JS и CSS
function deleteKernelJs(&$content) {
   global $USER, $APPLICATION;
   if((is_object($USER) && $USER->IsAuthorized()) || strpos($APPLICATION->GetCurDir(), "/bitrix/")!==false) return;
   if($APPLICATION->GetProperty("save_kernel") == "Y") return;

   $arPatternsToRemove = Array(
      '/<script.+?src=".+?kernel_main\/kernel_main\.js\?\d+"><\/script\>/',
      '/<script.+?src=".+?bitrix\/js\/main\/core\/core[^"]+"><\/script\>/',
      '/<script.+?>BX\.(setCSSList|setJSList)\(\[.+?\]\).*?<\/script>/',
      '/<script.+?>if\(\!window\.BX\)window\.BX.+?<\/script>/',
      '/<script[^>]+?>\(window\.BX\|\|top\.BX\)\.message[^<]+<\/script>/',
     '/<script.+?src=".+?bitrix\/cache\/js\/s1\/solod\/kernel_main\/kernel_main[^"]+"><\/script\>/',
      '/<script.+?src=".+?bitrix\/cache\/js\/s1\/solod\/kernel_currency\/kernel_currency[^"]+"><\/script\>/',

     
   );

   $content = preg_replace($arPatternsToRemove, "", $content);
   $content = preg_replace("/\n{2,}/", "\n\n", $content);
}

function deleteKernelCss(&$content) {
   global $USER, $APPLICATION;
   if((is_object($USER) && $USER->IsAuthorized()) || strpos($APPLICATION->GetCurDir(), "/bitrix/")!==false) return;
   if($APPLICATION->GetProperty("save_kernel") == "Y") return;

   $arPatternsToRemove = Array(
      '/<link.+?href=".+?kernel_main\/kernel_main\.css\?\d+"[^>]+>/',
      '/<link.+?href=".+?bitrix\/js\/main\/core\/css\/core[^"]+"[^>]+>/',
      '/<link.+?href=".+?bitrix\/templates\/[\w\d_-]+\/styles.css[^"]+"[^>]+>/',
      '/<link.+?href=".+?bitrix\/templates\/[\w\d_-]+\/template_styles.css[^"]+"[^>]+>/',
   );

   $content = preg_replace($arPatternsToRemove, "", $content);
   $content = preg_replace("/\n{2,}/", "\n\n", $content);
}


AddEventHandler('main', 'OnEpilog', array('CMainHandlers', 'OnEpilogHandler'));  
class CMainHandlers
{
	public static function OnEpilogHandler() 
	{
		if ( isset($_GET['PAGEN_1']) && (intval($_GET['PAGEN_1'])>0) && (!defined('ERROR_404')) ) 
		{
			$title = $GLOBALS['APPLICATION']->GetProperty('title');
			$GLOBALS['APPLICATION']->SetPageProperty('title', $title.' - страница '.intval($_GET['PAGEN_1']));
			$description = $GLOBALS['APPLICATION']->GetProperty('description');
			$GLOBALS['APPLICATION']->SetPageProperty('description', $description.' - страница '.intval($_GET['PAGEN_1']));   
			$h1 = $GLOBALS['APPLICATION']->GetTitle();     
			$GLOBALS['APPLICATION']->SetTitle($h1." - страница ".intval($_GET['PAGEN_1']));     
		}
	}
}

function makeWebp ($src) {
	$newImgPath = false;

	if (function_exists('imagewebp')) {
		$newImgPath = str_replace(array('.jpg', '.jpeg', '.gif', '.png'), '.webp', $src);
		if (!file_exists($_SERVER['DOCUMENT_ROOT'].$newImgPath)) {
			$info = getimagesize($_SERVER['DOCUMENT_ROOT'].$src);
			if ($info !== false && ($type = $info[2])) {
				switch ($type) {
					case IMAGETYPE_JPEG:
						$newImg = imagecreatefromjpeg($_SERVER['DOCUMENT_ROOT'].$src);
						break;
					case IMAGETYPE_GIF:
						$newImg = imagecreatefromgif($_SERVER['DOCUMENT_ROOT'].$src);
						break;
					case IMAGETYPE_PNG:
						$newImg = imagecreatefrompng($_SERVER['DOCUMENT_ROOT'].$src);
						break;
				}
				if ($newImg) {
					imagewebp($newImg, $_SERVER['DOCUMENT_ROOT'].$newImgPath, 90);
					imagedestroy($newImg);
				}
			}
		}
	}

	return $newImgPath;
}
?>