<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();use \Bitrix\Main\Page\Asset;?>
<!DOCTYPE html>
<html lang="ru-RU">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="yandex-verification" content="ad5d9302e5f47638" />
		<title><?$APPLICATION->ShowTitle()?></title>	
		<?$APPLICATION->ShowMeta("keywords")?>
		<?$APPLICATION->ShowMeta("description")?>

		<?$APPLICATION->ShowCSS();?>

		<?$APPLICATION->ShowHeadStrings()?>
		<?$APPLICATION->ShowHeadScripts()?>

		<?Asset::getInstance()->addCss( SITE_TEMPLATE_PATH.'/css-js/bootstrap-4.0.0-dist/css/bootstrap.min.css');?>
		<?Asset::getInstance()->addCss( SITE_TEMPLATE_PATH.'/css-js/fancybox3/jquery.fancybox.min.css');?>
		<?Asset::getInstance()->addCss( SITE_TEMPLATE_PATH.'/css-js/mmenu/jquery.mmenu.css');?>
		<?Asset::getInstance()->addCss( SITE_TEMPLATE_PATH.'/css-js/slick-1.8.1/slick.css');?>

		<? if (($APPLICATION->GetCurPage() === '/en/all-on-4/') || ($APPLICATION->GetCurPage() === '/en/all-on-6/') || ($APPLICATION->GetCurPage() === '/en/zygomatic-implants/')) : ?>
		<?Asset::getInstance()->addCss( '/local/templates/v1rt-website/template_styles.css');?>
		<? endif; ?>
		
		<?Asset::getInstance()->addCss( 'https://fonts.googleapis.com/css?family=Alegreya+Sans:400,400i,700&display=swap&subset=cyrillic,cyrillic-ext,latin-ext');?>

		<?Asset::getInstance()->addJs( SITE_TEMPLATE_PATH.'/css-js/jquery.min.js');?>
		
<script src="//code.jivosite.com/widget.js" data-jv-id="dAA5IEtOor" async></script>
		

		
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-3N7VXJJ33X"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());
		
		  gtag('config', 'G-3N7VXJJ33X');
		</script>
		<!-- calltouch -->
<script>
(function(w,d,n,c){w.CalltouchDataObject=n;w[n]=function(){w[n]["callbacks"].push(arguments)};if(!w[n]["callbacks"]){w[n]["callbacks"]=[]}w[n]["loaded"]=false;if(typeof c!=="object"){c=[c]}w[n]["counters"]=c;for(var i=0;i<c.length;i+=1){p(c[i])}function p(cId){var a=d.getElementsByTagName("script")[0],s=d.createElement("script"),i=function(){a.parentNode.insertBefore(s,a)},m=typeof Array.prototype.find === 'function',n=m?"init-min.js":"init.js";s.async=true;s.src="https://mod.calltouch.ru/"+n+"?id="+cId;if(w.opera=="[object Opera]"){d.addEventListener("DOMContentLoaded",i,false)}else{i()}}})(window,document,"ct","b53f8ucw");
</script>
<!-- calltouch -->
	</head>

	<body>
		
		<?$APPLICATION->ShowPanel();?>
		<?/*
		<div id="page-wrap">
		*/?>
		<div class="wrapper">
			<header>
				<div class="container topheader">
					<div class="row align-items-center">
						<div class="col-12 col-md-5">
							<a href="/en/" class="logo">
								<img src="<?=SITE_TEMPLATE_PATH;?>/images/new-logo.png" alt="American dent Soyfer" title="American dent Soyfer">
							</a>
						</div>
						<div class="col-12 col-md-7">
							<div class="header__info">
								<div class="header__contacts">
									<a href="tel:+74957635550">+7(495)763-55-50</a><br>
									9:00 &ndash; 21:00
								</div>
								<a href="#divForm" id="btnForm3" class="btn btn-primary btn-page">Free consultaion</a>
								<div class="ru-en">
									<a href="/">RU</a> / ENG
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
						"ROOT_MENU_TYPE" => "top_en",
						"MENU_CACHE_TYPE" => "N",
						"MENU_CACHE_TIME" => "3600",
						"MENU_CACHE_USE_GROUPS" => "Y",
						"MENU_CACHE_GET_VARS" => array(
						),
						"MAX_LEVEL" => "1",
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
			<main class="main">
				<div class="content">
					<div itemscope="" itemtype="http://schema.org/Article">
						<?/*
						<? if (($APPLICATION->GetCurPage() === '/en/all-on-4/') || ($APPLICATION->GetCurPage() === '/en/all-on-6/') || ($APPLICATION->GetCurPage() === '/en/zygomatic-implants/')) : ?>
							<?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("include-areas/inc.header-banner.php"), array(), array("MODE" => "html"));?>
							<?$APPLICATION->IncludeComponent(
								"bitrix:breadcrumb",
								"custom",
								Array(
									"PATH" => "",
									"SITE_ID" => "s1",
									"START_FROM" => "1"
								)
							);?>
						<? endif; ?>
						*/?>
						<div itemprop="articleBody">