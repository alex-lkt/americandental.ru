<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();use \Bitrix\Main\Page\Asset;?>
<!DOCTYPE html>
<html lang="ru-RU">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?$APPLICATION->ShowTitle()?></title>
		<?$APPLICATION->ShowMeta("keywords")?>
		<?$APPLICATION->ShowMeta("description")?>
		<!-- Bootstrap -->

		<?$APPLICATION->ShowCSS();?>

		<?$APPLICATION->ShowHeadStrings()?>
		<?$APPLICATION->ShowHeadScripts()?>

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


		<?Asset::getInstance()->addJs( SITE_TEMPLATE_PATH.'/css-js/jquery.min.js');?>
		<?Asset::getInstance()->addJs( SITE_TEMPLATE_PATH.'/css-js/fancybox3/jquery.fancybox.min.js');?>
		<?Asset::getInstance()->addJs( SITE_TEMPLATE_PATH.'/css-js/fontawesome-5.0.6/js/fontawesome-all.min.js');?>
		<?Asset::getInstance()->addJs( SITE_TEMPLATE_PATH.'/css-js/bootstrap-4.0.0-dist/js/bootstrap.min.js');?>
		<?Asset::getInstance()->addJs( SITE_TEMPLATE_PATH.'/css-js/slick-1.8.1/slick.min.js');?>
		<?Asset::getInstance()->addJs( SITE_TEMPLATE_PATH.'/css-js/wow.min.js');?>
		<?Asset::getInstance()->addJs( SITE_TEMPLATE_PATH.'/css-js/lazysizes.min.js');?>
		<?Asset::getInstance()->addJs( SITE_TEMPLATE_PATH.'/css-js/v1rt-forms/v1rt-forms1.js');?>
		<?Asset::getInstance()->addJs( SITE_TEMPLATE_PATH.'/vendor/imask.min.js');?>
		<?Asset::getInstance()->addJs( SITE_TEMPLATE_PATH.'/css-js/scripts.js');?>
		<script src="//code.jivosite.com/widget.js" data-jv-id="dAA5IEtOor" async></script>
		<script src="<?=SITE_TEMPLATE_PATH;?>/css-js/mmenu/jquery.mmenu.js" defer></script>

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
		<!-- Yandex.Metrika counter --> <script type="text/javascript" > (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)}; m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)}) (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym"); ym(56550514, "init", { clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); </script> <noscript><div><img src="https://mc.yandex.ru/watch/56550514" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
		<?/*<div id="page-wrap">*/?>

		<!-- Google Tag Manager (noscript) -->
		<noscript>
			<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T4GHDNV" height="0" width="0" style="display:none;visibility:hidden">
			</iframe>
		</noscript>
		<!-- End Google Tag Manager (noscript) -->

		<?$APPLICATION->ShowPanel();?>
		<div class="wrapper">
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
			<main role="main" class="main">
				<div class="content">
					<div itemscope="" itemtype="http://schema.org/Article">
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