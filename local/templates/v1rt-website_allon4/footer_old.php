<?if($APPLICATION->GetCurPage() != "/contacts/" && $APPLICATION->GetCurPage() != "/" && !(strpos($APPLICATION->GetCurDir(),"/regiony/") === 0 && strlen($APPLICATION->GetCurDir()) > strlen("/regiony/"))): ?>
<?/*$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("include-areas/inc.footer-form.php"), array(), array("MODE" => "html"));*/?>
	<?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("include-areas/inc.footer-map.php"), array(), array("MODE" => "html"));?>
<?endif;//getcurpage?>


<div class="block_orange">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-5 full-w-991">
                <a href="/" class="logo">
                    <img src="/local/templates/v1rt-website/img/footer-logo.png" alt="aooter logo">
                </a>
            </div>
            <div class="col-12 col-md-7 full-w-991">
                <div class="header__info footer_info">
                    <div style="padding-right: 40px;">
                        <div class="button button_white"><a style="padding: 10px 20px;" href="#divForm" id="btnForm9" class="btn btn-primary">Бесплатная консультация</a></div>
                    </div>
                    <div class="header__contacts footer_contacts">
                        <div>Телефон в Москве</div>
                        <div class="block-sub-header-bold block-sub-header-black">
                            <a href="tel:+74957964334">+7 (495) 796-43-34</a><br>
                        </div>
                        <div><a class="footer-callback" href="#divForm" id="btnForm10">Заказать обратный звонок</a></div>
                        <div style="font-weight: 600;">
                            С 9:00 до 21:00
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="block-sub-header-bold" style="margin-bottom: 20px;">УСЛУГИ</div>
                <?$APPLICATION->IncludeComponent("bitrix:menu", "footer-menu", Array(
                    "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                    "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
                    "DELAY" => "N",	// Откладывать выполнение шаблона меню
                    "MAX_LEVEL" => "1",	// Уровень вложенности меню
                    "MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
                        0 => "",
                    ),
                    "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
                    "MENU_CACHE_TYPE" => "N",	// Тип кеширования
                    "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
                    "ROOT_MENU_TYPE" => "footer_left",	// Тип меню для первого уровня
                    "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                ),
                    false
                );?>
            </div>
            <div class="col-lg-3">
                <div class="block-sub-header-bold" style="margin-bottom: 20px;">ПАЦИЕНТАМ</div>
                <?$APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "footer-menu",
                    array(
                        "ALLOW_MULTI_SELECT" => "N",
                        "CHILD_MENU_TYPE" => "left",
                        "DELAY" => "N",
                        "MAX_LEVEL" => "1",
                        "MENU_CACHE_GET_VARS" => array(
                        ),
                        "MENU_CACHE_TIME" => "3600",
                        "MENU_CACHE_TYPE" => "N",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "ROOT_MENU_TYPE" => "footer_middle",
                        "USE_EXT" => "N",
                        "COMPONENT_TEMPLATE" => "footer-menu"
                    ),
                    false
                );?>
            </div>
            <div class="col-lg-3 mr-top">
                <div style="margin-top: 25px;">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:menu",
                        "footer-menu",
                        array(
                            "ALLOW_MULTI_SELECT" => "N",
                            "CHILD_MENU_TYPE" => "left",
                            "DELAY" => "N",
                            "MAX_LEVEL" => "1",
                            "MENU_CACHE_GET_VARS" => array(
                            ),
                            "MENU_CACHE_TIME" => "3600",
                            "MENU_CACHE_TYPE" => "N",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "ROOT_MENU_TYPE" => "footer_right",
                            "USE_EXT" => "N",
                            "COMPONENT_TEMPLATE" => "footer-menu"
                        ),
                        false
                    );?>
                </div>

            </div>
            <div class="col-lg-3">
                <div class="block-sub-header-bold">
                    МЫ ВСЕГДА РЯДОМ
                </div>
                <div class="mr-top">Будем рады видеть Вас в наших группах социальных сетей</div>
                <ul class="social mr-top">
					<li><a href="https://www.instagram.com/vladimir_soyfer/" target="_blank"><img src="/local/templates/v1rt-website/img/instagram.png" alt="intagram ico"></a></li>
					<li><a href="https://www.facebook.com/Americandental-107731420782471/" target="_blank"><img src="/local/templates/v1rt-website/img/facebook.png" alt="facebook ico"></a></li>
					<li><a href="https://vk.com/american_dental" target="_blank"><img src="/local/templates/v1rt-website/img/vk.png" alt="vkontakte ico"></a></li>
					<li><a href="https://www.youtube.com/channel/UCRauN_dXp6PBeQoequOE3uQ" target="_blank"><img src="/local/templates/v1rt-website/img/youtube.png" alt="youtube ico"></a></li>
					<?/*<li><a href="#"><img src="/local/templates/v1rt-website/img/odnoklassniki.png" alt="odnoklassniki ico"></a></li>*/?>
                </ul>
            </div>
        </div>
    </div>
    <div class="subfooter">
        <div class="container">
            <div class="row justify-content-between">


                <div class="col-12 col-md-7">
                    <?/*<p><a href="/contacts/#licenzii">Лицензия № ЛО-77-01-011013 от 02.10.2015 для ООО "Евродент" ОГРН: 1127746463822</a></p>*/?>
                    Copyright © <?=date("Y");?> - <?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("include-areas/inc.copyright.php"), array(), array("MODE" => "html"));?><br>
                </div>


                <div class="col-12 col-md-5" style="text-align: right;">
                    <?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("include-areas/inc.soglashenie.php"), array(), array("MODE" => "html"));?> <br>
					<a rel="nofollow" href="http://www.onlinegazeta.info/" target=_blank><img src="<?=SITE_TEMPLATE_PATH;?>/images/onlinegazeta_1.gif" width="88" height="31" border="0" title="Onlinegazeta.info - все СМИ России у вас на компьютере" alt="Onlinegazeta.info - все печатные издания вашего региона в электронном виде"></a>


                    <!-- Rating Mail.ru counter -->
                    <script type="text/javascript">
                        var _tmr = window._tmr || (window._tmr = []);
                        _tmr.push({id: "3149284", type: "pageView", start: (new Date()).getTime()});
                        (function (d, w, id) {
                            if (d.getElementById(id)) return;
                            var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true; ts.id = id;
                            ts.src = "https://top-fwz1.mail.ru/js/code.js";
                            var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};
                            if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }
                        })(document, window, "topmailru-code");
                    </script> <!-- //Rating Mail.ru counter --> 
                </div>
            </div>
        </div>
    </div>
</footer>

<!--<footer>
<div class="container">
	<div class="row justify-content-between">
		<div class="col-12 col-md-8 footer__menus">
			 <?/*$APPLICATION->IncludeComponent("bitrix:menu", "footer-menu", Array(
				"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
					"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
					"DELAY" => "N",	// Откладывать выполнение шаблона меню
					"MAX_LEVEL" => "1",	// Уровень вложенности меню
					"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
						0 => "",
					),
					"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
					"MENU_CACHE_TYPE" => "N",	// Тип кеширования
					"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
					"ROOT_MENU_TYPE" => "footer_left",	// Тип меню для первого уровня
					"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
				),
				false
			);*/?>
			<?/*$APPLICATION->IncludeComponent(
				"bitrix:menu",
				"footer-menu",
				array(
					"ALLOW_MULTI_SELECT" => "N",
					"CHILD_MENU_TYPE" => "left",
					"DELAY" => "N",
					"MAX_LEVEL" => "1",
					"MENU_CACHE_GET_VARS" => array(
					),
					"MENU_CACHE_TIME" => "3600",
					"MENU_CACHE_TYPE" => "N",
					"MENU_CACHE_USE_GROUPS" => "Y",
					"ROOT_MENU_TYPE" => "footer_right",
					"USE_EXT" => "N",
					"COMPONENT_TEMPLATE" => "footer-menu"
				),
				false
			);*/?>
		</div>
		<div class="col-12 col-md-4">
			<div class="footer__contacts">
 				<?/*$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("include-areas/inc.footer-phone.php"), array(), array("MODE" => "html"));*/?>
				<?/*$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("include-areas/inc.footer-email.php"), array(), array("MODE" => "html"));*/?>
				<span class="workhours"><?/*$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("include-areas/inc.footer-time.php"), array(), array("MODE" => "html"));*/?></span>
				<a href="#divForm" id="btnForm2" class="btn btn-primary">Записаться</a>
				<span class="address"><?/*$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("include-areas/inc.footer-adress.php"), array(), array("MODE" => "html"));*/?></span>
			</div>
		</div>
	</div>

</div>
 </footer>-->


	  <?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("include-areas/form-plan-lecheniya.php"), array(), array("MODE" => "html"));?>
<?/* page-wrap*/?>
<div id="divForm" style="display:none;">
	<h2>Заказать звонок</h2>
	<?$APPLICATION->IncludeComponent(
	"v1rt:callback", 
	"index__callback", 
	array(
		"COMPONENT_TEMPLATE" => "index__callback",
		"EMAIL_TO" => "admin1@americandental.ru",
		"EVENT_MESSAGE_ID" => array(
			0 => "10",
		),
		"USE_CAPTCHA" => "Y"
	),
	false
);?>
</div>
<div id="mmenu">
	 <?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"left-menu",
	Array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"COMPONENT_TEMPLATE" => "left-menu",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "N"
	)
);?>
</div>
<?require($_SERVER["DOCUMENT_ROOT"].SITE_TEMPLATE_PATH."/includes/simple-test.php");?>
<?require_once('v1rt-forms/vf-popup.php');?>

	<script src="<?=SITE_TEMPLATE_PATH;?>/css-js/fontawesome-5.0.6/js/fontawesome-all.min.js" defer></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="<?=SITE_TEMPLATE_PATH;?>/css-js/bootstrap-4.0.0-dist/js/bootstrap.min.js" defer></script>
	<script src="<?=SITE_TEMPLATE_PATH;?>/css-js/fancybox3/jquery.fancybox.min.js" defer></script>
	<script src="<?=SITE_TEMPLATE_PATH;?>/css-js/mmenu/jquery.mmenu.js" defer></script>
	<script src="<?=SITE_TEMPLATE_PATH;?>/css-js/slick-1.8.1/slick.min.js" defer></script>
	<script src="<?=SITE_TEMPLATE_PATH;?>/css-js/wow.min.js" defer></script>
	<script src="<?=SITE_TEMPLATE_PATH;?>/css-js/lazysizes.min.js" defer></script>
    <script src="<?=SITE_TEMPLATE_PATH;?>/css-js/v1rt-forms/v1rt-forms1.js" defer></script>
    <script src="<?=SITE_TEMPLATE_PATH;?>/vendor/imask.min.js" defer></script>

	<script src="<?=SITE_TEMPLATE_PATH;?>/css-js/scripts.js" defer></script>
	<!-- RedConnect -->
	<script id="rhlpscrtg" type="text/javascript" charset="utf-8" async="async"
	src="https://web.redhelper.ru/service/main.js?c=americandental"></script>
	<!--/RedConnect -->
<script type='text/javascript'>
<?/*
var _ctreq = function(data) {
    var sid = '36590', nid = '14';
    var request = window.ActiveXObject?new ActiveXObject("Microsoft.XMLHTTP"):new XMLHttpRequest();
    var post_data = Object.keys(data).reduce(function(a,k){if(!!data[k]){a.push(k+'='+encodeURIComponent(data[k]));}return a},[]).join('&');
    var url = 'https://api-node'+nid+'.calltouch.ru/calls-service/RestAPI/'+sid+'/requests/orders/register/';
    request.open("POST", url, true); request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded'); request.send(post_data);
};
*/?>
window.jivo_onIntroduction = function() {
    var jct_data = {}, jc = jivo_api.getContactInfo();
    jct_data.phoneNumber = jc.phone; jct_data.email = jc.email; jct_data.fio = jc.client_name; jct_data.sessionId = window.call_value; jct_data.subject = 'JivoSite посетитель оставил контакты';
    _ctreq(jct_data)
};
window.jivo_onCallStart = function() {
    var jct_data = {}, jc = jivo_api.getContactInfo();
    jct_data.phoneNumber = jc.phone; jct_data.sessionId = window.call_value; jct_data.subject = 'JivoSite обратный звонок';
    _ctreq(jct_data)
};
window.jivo_onMessageSent = function() { ct('goal','jivo_ms'); }
</script>
<script>(function(t, p) {if (!window.__marquiz) window.__marquiz = []; window.marquiz ? marquiz(t, p) : window.__marquiz.push([t, p]);})('Widget', {id: '5fe8d7b0a3d6220044946abb', position: 'right', delay: 10, autoOpen: 10})</script>
<?php
$canonicalUrl = $APPLICATION->GetPageProperty("canonical");
if(strlen($canonicalUrl) > 0)
{
    $APPLICATION->AddHeadString("<link href='$canonicalUrl' rel='canonical'>",true);
}
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js" integrity="sha512-d4KkQohk+HswGs6A1d6Gak6Bb9rMWtxjOa0IiY49Q3TeFd5xAzjWXDCBW9RS7m86FQ4RzM2BdHmdJnnKRYknxw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
$(window).on("load", function(){
	$.mask.definitions['h'] = "[0-6-9]";
  $(".js-validate-phone").mask("+7 (h99) 999-9999");
});
</script>
</body>
</html>