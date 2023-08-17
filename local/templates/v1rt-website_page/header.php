<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
use \Bitrix\Main\Page\Asset;
$uri_parts = explode('?', $_SERVER['REQUEST_URI'], 2);
$uri_parts = str_replace('/index.php', '/', $uri_parts);
global $bIndexBot;
?>
<!DOCTYPE html>
<html dir="ltr" lang="ru-RU" prefix="og: https://ogp.me/ns#" itemscope itemtype="https://schema.org/WebPage">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">		
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="geo.placename" content="проспект Ломоносовский, дом 29, корпус 2, Москва, Россия">
        <meta name="geo.position" content="55.702307,37.515093">
        <meta name="geo.region" content="RU-Москва">
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
		<meta property="og:image" content="https://americandental.ru/local/templates/v1rt-website/img/implantac-077.jpg">
		<meta property="og:image:secure_url" content="https://americandental.ru/local/templates/v1rt-website/img/implantac-077.jpg">
		<meta property="og:image:type" content="image/jpg">		
		<link rel="icon" href="/favicon.svg" type="image/svg">
		<link rel="icon" href="/favicon.svg" type="image/svg+xml">
		<link rel="icon" href="/favicon.ico" type="image/x-icon">
		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
		<meta name="yandex-verification" content="add36dc43a2d9cc9">		
		<meta name="google-site-verification" content="WdZ9ACkYFzKnqcylAK68UjPsk_l6D2ni9c2q4o_0kUo">		
		<script type="application/ld+json">
			{
				"@context": "http://schema.org/",
				"@type": "Organization",
				"name": "American Dental",
				"alternateName": "Профессиональная стоматология в Москве",
				"logo": "/logo.png",
				"url": "https://americandental.ru/",
				"contactPoint": [{
					"@type": "ContactPoint",
					"telephone": "+7 (495) 763-55-50",
					"email": "americandental@yandex.ru",
					"contactType": "customer support"
				}],
				"address": [{
					"@type": "PostalAddress",
					"addressCountry": "Россия",
					"addressLocality": "г. Москва",
					"addressRegion": "Москва",
					"streetAddress": "ул. Ломоносовский проспект, 29, корп. 2"
				}],
				"sameAs": [
					"https://www.facebook.com/Americandental-107731420782471/",
					"https://vk.com/american_dental",
					"https://www.instagram.com/vladimir_soyfer/"
				]
			}
		</script>

		<?$APPLICATION->ShowCSS();?>
		<?$bIndexBot = (isset($_SERVER['HTTP_ACCEPT_LANGUAGE']) && strpos($_SERVER['HTTP_ACCEPT_LANGUAGE'], ',') === false);?>
		<?if(!$bIndexBot):?>
		<?$APPLICATION->ShowHeadStrings()?>
		<?$APPLICATION->ShowHeadScripts()?>
		
		<?Asset::getInstance()->addJs( SITE_TEMPLATE_PATH.'/css-js/jquery.min.js');?>
		<?Asset::getInstance()->addJs( SITE_TEMPLATE_PATH.'/css-js/fancybox3/jquery.fancybox.min.js');?>
		<?Asset::getInstance()->addJs( SITE_TEMPLATE_PATH.'/css-js/fontawesome-5.0.6/js/fontawesome-all.min.js');?>
		<?Asset::getInstance()->addJs( SITE_TEMPLATE_PATH.'/css-js/bootstrap-4.0.0-dist/js/bootstrap.min.js');?>
		<?Asset::getInstance()->addJs( SITE_TEMPLATE_PATH.'/css-js/slick-1.8.1/slick.min.js');?>
		<?Asset::getInstance()->addJs( SITE_TEMPLATE_PATH.'/css-js/wow.min.js');?>
		<?Asset::getInstance()->addJs( SITE_TEMPLATE_PATH.'/css-js/lazysizes.min.js');?>
		<?Asset::getInstance()->addJs( SITE_TEMPLATE_PATH.'/css-js/v1rt-forms/v1rt-forms1.js');?>
		<?Asset::getInstance()->addJs( SITE_TEMPLATE_PATH.'/vendor/imask.min.js');?>
		<?Asset::getInstance()->addJs( SITE_TEMPLATE_PATH.'/vendor/jquery.validate.min.js');?>
		<?Asset::getInstance()->addJs( SITE_TEMPLATE_PATH.'/css-js/scripts.js');?>


		<?Asset::getInstance()->addCss( SITE_TEMPLATE_PATH.'/css-js/bootstrap-4.0.0-dist/css/bootstrap.min.css');?>
		<?Asset::getInstance()->addCss( SITE_TEMPLATE_PATH.'/css-js/fancybox3/jquery.fancybox.min.css');?>
		<?Asset::getInstance()->addCss( SITE_TEMPLATE_PATH.'/css-js/mmenu/jquery.mmenu.css');?>
		<?Asset::getInstance()->addCss( SITE_TEMPLATE_PATH.'/css-js/slick-1.8.1/slick.css');?>
		<?Asset::getInstance()->addCss( SITE_TEMPLATE_PATH.'/css-js/v1rt-components.min.css');?>
		<?Asset::getInstance()->addCss( SITE_TEMPLATE_PATH.'/css-js/animate.css');?>
		<?Asset::getInstance()->addCss( SITE_TEMPLATE_PATH.'/css-js/v1rt-forms/v1rt-forms.min.css');?>
		<?Asset::getInstance()->addCss( SITE_TEMPLATE_PATH.'/css-js/SimpleTest/simple-test.css');?>
		<?Asset::getInstance()->addCss( 'https://fonts.googleapis.com/css?family=Alegreya+Sans:400,400i,700&display=swap&subset=cyrillic,cyrillic-ext,latin-ext');?>
		
<?endif;?>
		
		<script src="<?=SITE_TEMPLATE_PATH;?>/css-js/mmenu/jquery.mmenu.js" defer></script>
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
						</div>
						<div class="col-12 col-md-7 full-w-991">
							<div class="header__info">
								<div class="header__contacts">
									<div class="button button_green btn-page"><a style="padding: 10px 20px;margin-top:20px" href="#divForm" id="btnForm21" class="btn btn-primary">Заказать обратный звонок</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

			
				<div role="main" class="content">
					
						<div itemprop="articleBody">