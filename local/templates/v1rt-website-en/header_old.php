<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="yandex-verification" content="ad5d9302e5f47638" />
    <title><?$APPLICATION->ShowTitle()?></title>	
    <?$APPLICATION->ShowMeta("keywords")?>
	<?$APPLICATION->ShowMeta("description")?>

    <!-- Bootstrap -->
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css-js/bootstrap-4.0.0-dist/css/bootstrap.min.css");?>	
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css-js/fancybox3/jquery.fancybox.min.css");?>	
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css-js/mmenu/jquery.mmenu.css");?>	
	 <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css-js/slick-1.8.1/slick.css");?>	
    <?//$APPLICATION->SetAdditionalCSS("https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&amp;subset=cyrillic");?>	
    <?$APPLICATION->SetAdditionalCSS("https://fonts.googleapis.com/css?family=Alegreya+Sans:400,400i,700&display=swap&subset=cyrillic,cyrillic-ext,latin-ext");?>	

	<script src="//code.jivosite.com/widget.js" data-jv-id="dAA5IEtOor" async></script>


    <?$APPLICATION->ShowCSS();?>
    
	<?$APPLICATION->ShowHeadStrings()?>
	<?$APPLICATION->ShowHeadScripts()?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-T4GHDNV');</script>
<!-- End Google Tag Manager -->
  </head>

  <body>
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T4GHDNV"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
  <div id="page-wrap">
<?$APPLICATION->ShowPanel();?>
<header>
	<div class="container topheader">
		<div class="row align-items-center">
			<div class="col-12 col-md-5">
				<a href="/en/" class="logo">
					<img src="<?=SITE_TEMPLATE_PATH;?>/images/new-logo.png" alt="">
				</a>
			</div>
			<div class="col-12 col-md-7">
				<div class="header__info">
					<div class="header__contacts">
						<a href="tel:+74957964334">+7 (495) 796-43-34</a><br>
						9:00 &ndash; 21:00
					</div>
					<a href="#divForm" id="btnForm3" class="btn btn-primary">Free consultaion</a>
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
	  <?/*if($APPLICATION->GetCurPage() != "/en/"):?>
<div class="container mb-5 my-5">
	<div class="">
		<h1><?$APPLICATION->ShowTitle(false)?></h1>
<?endif;?>
			<?if($APPLICATION->GetCurDir() != "/en/"):
				$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb", 
	"bc", 
	array(
		"START_FROM" => "1",
		"PATH" => "",
		"SITE_ID" => "s1",
		"COMPONENT_TEMPLATE" => "bc"
	),
	false
);
endif;*/?>