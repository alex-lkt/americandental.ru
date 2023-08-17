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
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
		<?/*
		<meta charset="UTF-8">
		<meta name="robots" content="index, follow">
		<meta name="HandheldFriendly" content="true">
		<meta name="theme-color" content="#0267B4">
		<meta name="msapplication-TileColor" content="#FFFFFF">
		<meta name="msapplication-TileImage" content="/favicon.png">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-title" content="American Dental">
		<meta name="application-name" content="American Dental">
		<meta name="geo.placename" content="ул. Ломоносовский проспект, 25, корп. 5, Москва, Россия">
		<meta name="geo.position" content="55.692338;37.531559">
		<meta name="geo.region" content="RU-Москва">
		<meta name="ICBM" content="55.692338, 37.531559">
		<base href="https://americandental.ru/">
		<link rel="icon" href="/favicon_16x16.png" type="image/png" sizes="16x16">
		<link rel="icon" href="/favicon_32x32.png" type="image/png" sizes="32x32">
		<link rel="icon" href="/favicon_96x96.png" type="image/png" sizes="96x96">
		<link rel="icon" href="/favicon_192x192.png" type="image/png" sizes="192x192">
		<link rel="mask-icon" href="/favicon_1333.333x1333.333.svg" color="#0267B4">
		<link rel="apple-touch-icon" href="/favicon.png">
		<link rel="apple-touch-startup-image" href="/favicon.png">
		<link rel="apple-touch-icon" sizes="57x57" href="/favicon_57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="/favicon_60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="/favicon_72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="/favicon_76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="/favicon_114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="/favicon_120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="/favicon_144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="/favicon_152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="/favicon_180x180.png">
		*/?>
		
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
					"telephone": "+7 (495) 796-43-34",
					"email": "americandental@yandex.ru",
					"contactType": "customer support"
				}],
				"address": [{
					"@type": "PostalAddress",
					"addressCountry": "Россия",
					"addressLocality": "г. Москва",
					"addressRegion": "Москва",
					"streetAddress": "ул. Ломоносовский проспект, 25, корп. 5"
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
		<?Asset::getInstance()->addJs( SITE_TEMPLATE_PATH.'/css-js/fontawesome-5.0.6/js/fontawesome-all.min.js');?>
		<?Asset::getInstance()->addJs( SITE_TEMPLATE_PATH.'/css-js/bootstrap-4.0.0-dist/js/bootstrap.min.js');?>
		<?Asset::getInstance()->addJs( SITE_TEMPLATE_PATH.'/css-js/slick-1.8.1/slick.min.js');?>
		<?Asset::getInstance()->addJs( SITE_TEMPLATE_PATH.'/css-js/wow.min.js');?>
		<?Asset::getInstance()->addJs( SITE_TEMPLATE_PATH.'/css-js/lazysizes.min.js');?>
		<?Asset::getInstance()->addJs( SITE_TEMPLATE_PATH.'/css-js/v1rt-forms/v1rt-forms1.js');?>
		<?Asset::getInstance()->addJs( SITE_TEMPLATE_PATH.'/vendor/imask.min.js');?>
		<?Asset::getInstance()->addJs( SITE_TEMPLATE_PATH.'/css-js/scripts.js');?>


		<?Asset::getInstance()->addCss( SITE_TEMPLATE_PATH.'/css-js/bootstrap-4.0.0-dist/css/bootstrap.min.css');?>
		<?Asset::getInstance()->addCss( SITE_TEMPLATE_PATH.'/css-js/fancybox3/jquery.fancybox.min.css');?>
		<?Asset::getInstance()->addCss( SITE_TEMPLATE_PATH.'/css-js/mmenu/jquery.mmenu.css');?>
		<?Asset::getInstance()->addCss( SITE_TEMPLATE_PATH.'/css-js/slick-1.8.1/slick.css');?>
		<?Asset::getInstance()->addCss( SITE_TEMPLATE_PATH.'/css-js/v1rt-components.min.css');?>
		<?Asset::getInstance()->addCss( SITE_TEMPLATE_PATH.'/css-js/animate.css');?>
		<?Asset::getInstance()->addCss( SITE_TEMPLATE_PATH.'/css-js/v1rt-forms/v1rt-forms.min.css');?>
		<?Asset::getInstance()->addCss( SITE_TEMPLATE_PATH.'/css-js/SimpleTest/simple-test.css');?>
		<?Asset::getInstance()->addCss( 'https://script.donkin-leads.ru/v2/dentolo.css');?>
		<?Asset::getInstance()->addCss( 'https://fonts.googleapis.com/css?family=Alegreya+Sans:400,400i,700&display=swap&subset=cyrillic,cyrillic-ext,latin-ext');?>
		

		<?/*
		<script src="//code.jivosite.com/widget.js" data-jv-id="dAA5IEtOor" async></script>
		*/?>
		<script src="<?=SITE_TEMPLATE_PATH;?>/css-js/mmenu/jquery.mmenu.js" defer></script>
		<script src="<?=SITE_TEMPLATE_PATH;?>/css-js/fancybox3/jquery.fancybox.min.js" defer></script>

		<?/*
		<!-- Google Tag Manager -->
		<script>
			(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
			new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
			j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
			'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
			})(window,document,'script','dataLayer','GTM-T4GHDNV');
		</script>
		<!-- End Google Tag Manager -->
		*/?>

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-121915568-26"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'UA-121915568-26');
		</script>
		<?endif;?>
		<?/*
		<!-- Marquiz script start -->
		<script>
			(function(w, d, s, o){
			if (!window.__marquiz) window.__marquiz=[];
			window.marquiz = function(){window.Marquiz ? Marquiz.add(arguments) : window.__marquiz.push(arguments)}
			var j = d.createElement(s); j.async = true; j.src = '//script.marquiz.ru/v2.js';j.onload = function() {
			if (document.readyState !== 'loading') Marquiz.init(o);
			else document.addEventListener("DOMContentLoaded", function() {
			Marquiz.init(o);
			});
			};
			d.head.insertBefore(j, d.head.firstElementChild);
			})(window, document, 'script', {
			host: '//quiz.marquiz.ru',
			id: '5fe8d7b0a3d6220044946abb',
			autoOpen: 10,
			autoOpenFreq: 'once',
			openOnExit: false,
			disableOnMobile: false
			}
			);
		</script>
		<!-- Marquiz script end -->
		*/?>
	</head>
	<body>


		<?$APPLICATION->ShowPanel();?>

		
			<header class="header">
				<div class="container topheader">
					<div class="row align-items-center">
						<div class="col-12 col-md-5 full-w-991">
							<a href="/" class="logo">
								<img src="<?=SITE_TEMPLATE_PATH;?>/images/new-logo.png" alt="">
							</a>
			                <div class="logo-text">
			                    <?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("include-areas/inc.header-logo-text.php"), array(), array("MODE" => "html"));?>
			                </div>
						</div>
						<div class="col-12 col-md-7 full-w-991">
							<div class="header__info">
			                    <div style="padding-right: 40px;">
			                        <div class="ru-en">
			                            RU / <a href="/en/">ENG</a>
			                        </div>
			                        <div class="button button_green hidden-sm"><a style="padding: 10px 20px;" href="#divForm" id="btnForm3" class="btn btn-primary">Бесплатная консультация</a></div>
			                    </div>
								<div class="header__contacts">
			                        <div>Телефон в Москве</div>
			                        <div class="block-sub-header-bold block-sub-header-black">
			                            <?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("include-areas/inc.header-phone.php"), array(), array("MODE" => "html"));?><br>
			                        </div>
			                        <div>
			                        	<a class="collback-text-button" href="#divForm" id="btnForm11">Заказать обратный звонок</a>
			                        </div>
			                        <div style="font-weight: 600;">
			                            <?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("include-areas/inc.header-time.php"), array(), array("MODE" => "html"));?>
			                        </div>
			                        <ul class="social">
										<li>
											<a href="https://www.instagram.com/vladimir_soyfer/" target="_blank">
												<img src="/local/templates/v1rt-website/img/instagram.png" alt="intagram ico">
											</a>
										</li>
										<li>
											<a href="https://www.facebook.com/Americandental-107731420782471/" target="_blank">
												<img src="/local/templates/v1rt-website/img/facebook.png" alt="facebook ico">
											</a>
										</li>
										<li>
											<a href="https://vk.com/american_dental" target="_blank">
												<img src="/local/templates/v1rt-website/img/vk.png" alt="vkontakte ico">
											</a>
										</li>
										<li>
											<a href="https://www.youtube.com/channel/UCRauN_dXp6PBeQoequOE3uQ" target="_blank">
												<img src="/local/templates/v1rt-website/img/youtube.png" alt="youtube ico">
											</a>
										</li>
			                        </ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?$APPLICATION->IncludeComponent(
					"bitrix:menu",
					"v1rt-bootstrap-topmenu-2-level",
						array(
							"COMPONENT_TEMPLATE" => "v1rt-bootstrap-topmenu-2-level",
							"ROOT_MENU_TYPE" => "top",
							"MENU_CACHE_TYPE" => "N",
							"MENU_CACHE_TIME" => "3600",
							"MENU_CACHE_USE_GROUPS" => "Y",
							"MENU_CACHE_GET_VARS" => array(
							),
							"MAX_LEVEL" => "2",
							"CHILD_MENU_TYPE" => "left",
							"USE_EXT" => "N",
							"DELAY" => "N",
							"ALLOW_MULTI_SELECT" => "N",
							"COMPOSITE_FRAME_MODE" => "A",
							"COMPOSITE_FRAME_TYPE" => "AUTO"
						),
					false
				);?>
			</header>

			
				<div role="main" class="content">
					
						<? if ($APPLICATION->GetCurPage(false) !== '/'): ?>
							<?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("include-areas/inc.header-banner.php"), array(), array("MODE" => "html"));?>
							<?$APPLICATION->IncludeComponent(
								"bitrix:breadcrumb",
								"custom",
								Array(
									"PATH" => "",
									"SITE_ID" => "s1",
									"START_FROM" => "0"
								)
							);?>
						<? endif; ?>
						<div itemprop="articleBody">