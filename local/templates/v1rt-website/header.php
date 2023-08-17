<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
use \Bitrix\Main\Page\Asset;
$uri_parts = explode('?', $_SERVER['REQUEST_URI'], 2);
$uri_parts = str_replace('/index.php', '/', $uri_parts);
global $bIndexBot;
?>
<!DOCTYPE html>
<html dir="ltr" lang="ru-RU" prefix="og: https://ogp.me/ns#">
	<head>			
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="yandex-verification" content="add36dc43a2d9cc9">		
		<meta name="google-site-verification" content="WdZ9ACkYFzKnqcylAK68UjPsk_l6D2ni9c2q4o_0kUo">
    <meta name="google-site-verification" content="Iqc0UyWhquia5oZ2VINTTgF1deg9bTcoIJiyJGAE4L0" /><?/* чужой, для теста! 08.06.2023. Удалить через 3-4 дня */?>
    <meta name="geo.placename" content="проспект Ломоносовский, дом 29, корпус 2, Москва, Россия">
    <meta name="geo.position" content="55.702307,37.515093">
    <meta name="geo.region" content="RU-Москва">
    <meta name="og:locale" content="ru_RU">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title><?$APPLICATION->ShowTitle()?></title>
        <?$APPLICATION->ShowMeta("description")?>	
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
		<script type="application/ld+json">
			{
				"@context": "http://schema.org/",
				"@type": "Organization",
				"name": "American Dental",
				"alternateName": "Американская стоматологическая ассоциация",
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
		<?Asset::getInstance()->addJs( SITE_TEMPLATE_PATH.'/css-js/bootstrap-4.0.0-dist/js/bootstrap.min.js');?>		
		<?Asset::getInstance()->addJs( SITE_TEMPLATE_PATH.'/css-js/lazysizes.min.js');?>
		<?Asset::getInstance()->addJs( SITE_TEMPLATE_PATH.'/css-js/v1rt-forms/v1rt-forms1.js');?>		
		<?Asset::getInstance()->addJs( SITE_TEMPLATE_PATH.'/css-js/scripts.js');?>


		<?Asset::getInstance()->addCss( SITE_TEMPLATE_PATH.'/css-js/bootstrap-4.0.0-dist/css/bootstrap.min.css');?>
		<?Asset::getInstance()->addCss( SITE_TEMPLATE_PATH.'/css-js/fancybox3/jquery.fancybox.min.css');?>
		<?Asset::getInstance()->addCss( SITE_TEMPLATE_PATH.'/css-js/mmenu/jquery.mmenu.css');?>
		<?Asset::getInstance()->addCss( SITE_TEMPLATE_PATH.'/css-js/slick-1.8.1/slick.css');?>
		<?Asset::getInstance()->addCss( SITE_TEMPLATE_PATH.'/css-js/v1rt-components.min.css');?>
		<?Asset::getInstance()->addCss( SITE_TEMPLATE_PATH.'/css-js/animate.css');?>
		<?Asset::getInstance()->addCss( SITE_TEMPLATE_PATH.'/css-js/v1rt-forms/v1rt-forms.min.css');?>
        <?Asset::getInstance()->addCss( SITE_TEMPLATE_PATH.'/css-js/lazyframe.css');?>
		
		
<?endif;?>
		
		<script src="<?=SITE_TEMPLATE_PATH;?>/css-js/mmenu/jquery.mmenu.js" defer></script>
<!-- calltouch -->
<script>
(function(w,d,n,c){w.CalltouchDataObject=n;w[n]=function(){w[n]["callbacks"].push(arguments)};if(!w[n]["callbacks"]){w[n]["callbacks"]=[]}w[n]["loaded"]=false;if(typeof c!=="object"){c=[c]}w[n]["counters"]=c;for(var i=0;i<c.length;i+=1){p(c[i])}function p(cId){var a=d.getElementsByTagName("script")[0],s=d.createElement("script"),i=function(){a.parentNode.insertBefore(s,a)},m=typeof Array.prototype.find === 'function',n=m?"init-min.js":"init.js";s.async=true;s.src="https://mod.calltouch.ru/"+n+"?id="+cId;if(w.opera=="[object Opera]"){d.addEventListener("DOMContentLoaded",i,false)}else{i()}}})(window,document,"ct","b53f8ucw");
</script>
<!-- calltouch -->

	</head>
	<body>



		<?$APPLICATION->ShowPanel();?>

		
			<header class="header" style="background-color: #f8fbfc;">
				<div class="container topheader">
					<div class="row align-items-center">
                    
                    <!--1-->
						<div class="col-12 col-md-3 full-w-991">
							<a href="/" class="logo" style="margin-top: -12px;">
								<img src="<?=SITE_TEMPLATE_PATH;?>/images/new-logo.png" title="Americandental" alt="Americandental">
							</a>
			                <div class="logo-text">
			                    <?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("include-areas/inc.header-logo-text.php"), array(), array("MODE" => "html"));?>
			                </div>
						</div>
                        
                        
                        <!--2-->
                        
						<div class="col-12 col-md-3 full-w-991">
							<div class="" itemscope itemtype="http://schema.org/Organization">
								<meta itemprop="name" content="Американская стоматологическая ассоциация">
                                <meta itemprop="image" content="https://americandental.ru/upload/iblock/df8/df835dc35b13912067999ab1e3cda099.jpg">
                                
                                <!--1/1-->
								<div class="header__contacts" style="margin-top: 30px;">
									<div class="header-address" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
										<meta itemprop="addressLocality" content="г. Москва"><meta itemprop="streetAddress" content="Ломоносовский проспект, д.29 корп 2">
										<meta itemprop="addressLocality" content="г. Москва"><meta itemprop="streetAddress" content="ул. Кастанаевская, д.43 к.2">
                                        <meta itemprop="telephone" content="+74957745550">
                                        
										
									<p class="adre1 adre3" style="font-size: 14px; font-weight: 400; text-align:left;">
											 г. Москва, Ломоносовский пр., д.29 к.2<br>
                                             <span style="font-size: 12px; color:#F00;">5 мин. от станции м. Ломоносовский проспект</span><br>
											 г. Москва, ул.Кастанаевская, д.43 к.2
										</p>
									</div>
								</div>
                                </div>
                                </div>
                           
                           
                        <!--1/3-->
                <div class="col-12 col-md-3 full-w-991">
								<div class="header__contacts header__contacts-mob" style="text-align: center;margin-top: 0;">
                                <div class="block-sub-header-bold block-sub-header-black">
                      <?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("include-areas/inc.header-phone1.php"), array(), array("MODE" => "html"));?><br>
                      <div class="vremya" style="font-weight: 400; text-align:center;">
                      <?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("include-areas/inc.header-time.php"), array(), array("MODE" => "html"));?>
                  </div>
                  </div>
                                    
                  
								</div>
							</div>          
                           
                                
                                
                                <!--1/2-->
                    <div class="col-12 col-md-3 full-w-991">            
                <div style="padding-right: 10px;">
                  <div class="ru-en" style="font-size: 14px;margin-top: -20px;">
                      RU / <a href="/en/">ENG</a>
                  </div>
                  
                  <!--2-->
                  <div style="display: flex;margin-top: -5px;">
                  <div class="button button_blue btn-page but_mob" style="margin: auto;margin-bottom: 5px;"><a style="padding: 10px 10px;" href="#divForm" id="btnForm11" class="btn btn-primary">Заказать звонок</a></div>
                  
                 
                  
                  <div class="social" style="margin-top: 7px;">
                  <div>
											<a href="https://wa.me/79253370055" target="_blank" rel="nofollow">
												<img src="/local/templates/v1rt-website/img/whatsapp-32.png" title="whatsapp" alt="whatsapp">
											</a>
										</div>
                  
										<div style="margin-left: 2px;margin-right: 5px;">
											<a href="https://vk.com/american_dental" target="_blank" rel="nofollow">
												<img src="/local/templates/v1rt-website/img/vk.png" title="vkontakte ico" alt="vkontakte ico">
											</a>
										</div>
                                        
                                        <div>
											<a href="https://www.youtube.com/channel/UCRauN_dXp6PBeQoequOE3uQ" target="_blank" rel="nofollow">
												<img src="/local/templates/v1rt-website/img/youtube.png" title="youtube ico" alt="youtube ico">
											</a>
                                            </div>
										
                  </div> 
                  </div>
                  
                  <!-- END 2-->
                  
                  
                  
                  
                </div>
                </div>
                
         
						</div>
                        </div>
                        <div class="poisk poisk-mob">
                      <?$APPLICATION->IncludeComponent(
	"bitrix:search.form",
	"",
	Array(
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"PAGE" => "#SITE_DIR#search/index.php",
		"USE_SUGGEST" => "N"
	)
);?>  
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
                        