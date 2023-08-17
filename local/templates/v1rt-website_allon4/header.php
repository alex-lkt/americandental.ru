<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
use \Bitrix\Main\Page\Asset;
$uri_parts = explode('?', $_SERVER['REQUEST_URI'], 2);
$uri_parts = str_replace('/index.php', '/', $uri_parts);

$APPLICATION->ShowPanel = true;
global $bIndexBot;
?>
<!DOCTYPE html>
<html dir="ltr" lang="ru-RU" prefix="og: https://ogp.me/ns#" itemscope itemtype="https://schema.org/WebPage">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title><?$APPLICATION->ShowTitle()?></title>
		<?$APPLICATION->ShowMeta("description")?>
		<?$APPLICATION->ShowMeta("keywords")?>
		<meta name="og:locale" content="ru_RU">
		<meta property="og:url" content="https://americandental.ru<?= $uri_parts[0] ?>">
		<meta property="og:title" content="<?$APPLICATION->ShowTitle()?>">
		<meta property="og:description" content="<?$APPLICATION->ShowProperty('description');?>">
		<meta property="og:type" content="website">
		<meta property="og:site_name" content="American Dental">
		<meta property="og:image" content="/og.png">
		<meta property="og:image:secure_url" content="/og.png">
		<meta property="og:image:type" content="image/jpg">
		<link rel="canonical" href="https://americandental.ru<?= $uri_parts[0] ?>">
		<link rel="icon" href="/favicon.svg" type="image/svg">
		<link rel="icon" href="/favicon.svg" type="image/svg+xml">
		<link rel="icon" href="/favicon.ico" type="image/x-icon">
		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
		<meta name="yandex-verification" content="add36dc43a2d9cc9" />
		<meta name="google-site-verification" content="18daf9bad0feb357" />

		<?$APPLICATION->ShowCSS();?>
		<?$bIndexBot = (isset($_SERVER['HTTP_ACCEPT_LANGUAGE']) && strpos($_SERVER['HTTP_ACCEPT_LANGUAGE'], ',') === false);?>
		<?if(!$bIndexBot):?>
		<?$APPLICATION->ShowHeadStrings()?>
		<?$APPLICATION->ShowHeadScripts()?>
		
		<?Asset::getInstance()->addJs( SITE_TEMPLATE_PATH.'/css-js/jquery.min.js');?>
		<?/*Asset::getInstance()->addJs( SITE_TEMPLATE_PATH.'/css-js/fancybox3/jquery.fancybox.min.js');*/?>
		<?/*Asset::getInstance()->addJs( SITE_TEMPLATE_PATH.'/css-js/fontawesome-5.0.6/js/fontawesome-all.min.js');*/?>
		<?/*Asset::getInstance()->addJs( SITE_TEMPLATE_PATH.'/css-js/bootstrap-4.0.0-dist/js/bootstrap.min.js');*/?>
		<?Asset::getInstance()->addJs( SITE_TEMPLATE_PATH.'/css-js/slick-1.8.1/slick.min.js');?>
		<?/*Asset::getInstance()->addJs( SITE_TEMPLATE_PATH.'/css-js/wow.min.js');*/?>
		<?/*Asset::getInstance()->addJs( SITE_TEMPLATE_PATH.'/css-js/lazysizes.min.js');*/?>
		<?/*Asset::getInstance()->addJs( SITE_TEMPLATE_PATH.'/css-js/v1rt-forms/v1rt-forms1.js');*/?>
		<?/*Asset::getInstance()->addJs( SITE_TEMPLATE_PATH.'/vendor/imask.min.js');*/?>
		<?/*Asset::getInstance()->addJs( SITE_TEMPLATE_PATH.'/vendor/jquery.validate.min.js');*/?>
		<?/*Asset::getInstance()->addJs( SITE_TEMPLATE_PATH.'/css-js/scripts.js');*/?>


		<?//Asset::getInstance()->addCss( SITE_TEMPLATE_PATH.'/css-js/bootstrap-4.0.0-dist/css/bootstrap.min.css');?>
		<?/*Asset::getInstance()->addCss( SITE_TEMPLATE_PATH.'/css-js/fancybox3/jquery.fancybox.min.css');*/?>
		<?/*Asset::getInstance()->addCss( SITE_TEMPLATE_PATH.'/css-js/mmenu/jquery.mmenu.css');*/?>
		<?Asset::getInstance()->addCss( SITE_TEMPLATE_PATH.'/css-js/slick-1.8.1/slick.css');?>
		<?/*Asset::getInstance()->addCss( SITE_TEMPLATE_PATH.'/css-js/v1rt-components.min.css');*/?>
		<?/*Asset::getInstance()->addCss( SITE_TEMPLATE_PATH.'/css-js/animate.css');*/?>
		<?/*Asset::getInstance()->addCss( SITE_TEMPLATE_PATH.'/css-js/v1rt-forms/v1rt-forms.min.css');*/?>
		<?/*Asset::getInstance()->addCss( SITE_TEMPLATE_PATH.'/css-js/SimpleTest/simple-test.css');*/?>
		<?//Asset::getInstance()->addCss( 'https://script.donkin-leads.ru/v2/dentolo.css');?>
		
		<!-- <script src="<?=SITE_TEMPLATE_PATH;?>/css-js/mmenu/jquery.mmenu.js" defer></script> -->
		<?endif;?>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-3N7VXJJ33X"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());
		
		  gtag('config', 'G-3N7VXJJ33X');
		</script>
	</head>
	<body>

		<?$APPLICATION->ShowPanel();?>

			<header class="header">
				<div class="container topheader">
					<div class="row align-items-center">
						<div class="col-12 col-md-5 full-w-991">
							<a href="/" class="logo">
								<img src="<?=SITE_TEMPLATE_PATH;?>/images/new-logo.png" title="Americandental" alt="Americandental">
							</a>
			                <div class="logo-text">
			                    <?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("include-areas/inc.header-logo-text.php"), array(), array("MODE" => "html"));?>
			                </div>
						</div>
					</div>
				</div>

			</header>
		
			<div role="main" class="content">
