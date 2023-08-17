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
    <?//$APPLICATION->SetAdditionalCSS("https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&amp;subset=cyrillic");?>	
    <?$APPLICATION->SetAdditionalCSS("https://fonts.googleapis.com/css?family=Alegreya+Sans:400,400i,700&display=swap&subset=cyrillic,cyrillic-ext,latin-ext");?>	


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
	<div class="topline">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-auto header__socials">
					<a href="#"><i class="fab fa-vk"></i></a>
					<a href="#"><i class="fab fa-facebook-f"></i></a>
					<a href="#"><i class="fab fa-instagram"></i></a>
					<a href="#"><i class="fab fa-youtube"></i></a>
				</div>
				<div class="col-auto">
					<a href="#"><i class="fas fa-edit"></i>Записаться на прием</a>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row justify-content-between align-items-center">
			<div class="col-12 col-lg-auto">
				<a href="/" class="header__logo"><img src="<?=SITE_TEMPLATE_PATH;?>/images/logo.png" alt=""></a>
			</div>
			<div class="col-12 col-lg-auto header__contacts">
				<div class="header__tel">
					<i class="fas fa-phone"></i> 
					<div>
						<span>Телефон:</span>
						<a href="tel:+74957964334">+7 (495) 796-43-34</a>
					</div>
				</div>
				<div class="header__adr">
					<i class="fas fa-map-signs"></i> 
					<div>
						<span>Адрес:</span>
						г. Москва, ул. Кастанаевская, д. 43/2
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
<?if($APPLICATION->GetCurPage() == "/"):?>
<div class="index__header">
	<img src="<?=SITE_TEMPLATE_PATH;?>/images/doctor.jpg" alt="">
	<div class="index__header_text_wrap">
		<div class="container">
			<div class="index__header_text">
				<p class="hdr">Имплантация зубов в Москве</p>
				<div class="descr">American Dentistry является уникальной московской клиникой, в которой ведёт прием американский стоматолог - имплантолог Сойфер Владимир Валерьевич. Доктор Владимир Валерьевич Сойфер - специалист с 26-ти летним стажем в США и России включая Georgetown University Hospital, Hospital of University of Pennsylvania and DC General Hospital.</div>
				<a href="#" class="btn btn-primary">Записаться</a>
			</div>
		</div>
	</div>
</div>
<?endif;?>
<?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb", 
	"bc", 
	array(
		"START_FROM" => "0",
		"PATH" => "",
		"SITE_ID" => "s1",
		"COMPONENT_TEMPLATE" => "bc",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO"
	),
	false
);?>

<?if($APPLICATION->GetCurPage() == "/"):?>


<?else:?>
<div class="container middle-container">
<div class="row">
<article class="content order-lg-2 col-lg-8 col-xl-9">
<h1><?$APPLICATION->ShowTitle(false)?></h1>


<?endif;?>
