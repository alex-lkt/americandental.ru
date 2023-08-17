<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!DOCTYPE html>
<html>
  <head>
	<meta name="yandex-verification" content="50cbb8a682800efa" /> 

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
	 <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css-js/animate.css");?>	
    <?//$APPLICATION->SetAdditionalCSS("https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&amp;subset=cyrillic");?>	
    <?$APPLICATION->SetAdditionalCSS("https://fonts.googleapis.com/css?family=Alegreya+Sans:400,400i,700&display=swap&subset=cyrillic,cyrillic-ext,latin-ext");?>	
	<script src="<?=SITE_TEMPLATE_PATH;?>/css-js/jquery.min.js"></script>	



    <?$APPLICATION->ShowCSS();?>
    
	<?$APPLICATION->ShowHeadStrings()?>
	<?$APPLICATION->ShowHeadScripts()?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	


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

  <div id="page-wrap">
<?$APPLICATION->ShowPanel();?>
<header>
	<div class="container topheader">
		<div class="row align-items-center">
			<div class="col-12 col-md-5 full-w-991">
				<a href="/" class="logo">
					<img src="<?=SITE_TEMPLATE_PATH;?>/images/new-logo.png" alt="">
				</a>
			</div>
			<div class="col-12 col-md-7 full-w-991">
				<div class="header__info">
					<div class="header__contacts">
						<?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("include-areas/inc.header-phone.php"), array(), array("MODE" => "html"));?><br>
						<?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("include-areas/inc.header-time.php"), array(), array("MODE" => "html"));?>
					</div>
					<a href="#divForm" id="btnForm3" class="btn btn-primary">Бесплатная консультация</a>
					<div class="ru-en">
						RU / <a href="/en/">ENG</a>
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