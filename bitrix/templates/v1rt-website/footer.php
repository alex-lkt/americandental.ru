<?if($APPLICATION->GetCurPage() != "/contacts/" && $APPLICATION->GetCurPage() != "/" && !(strpos($APPLICATION->GetCurDir(),"/regiony/") === 0 && strlen($APPLICATION->GetCurDir()) > strlen("/regiony/"))): ?>
<?/*$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("include-areas/inc.footer-form.php"), array(), array("MODE" => "html"));*/?> 
	<?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("include-areas/inc.footer-map.php"), array(), array("MODE" => "html"));?> 
<?endif;//getcurpage?> 

<footer>
<div class="container">
	<div class="row justify-content-between">
		<div class="col-12 col-md-8 footer__menus">
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
		<div class="col-12 col-md-4">
			<div class="footer__contacts">
 				<?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("include-areas/inc.footer-phone.php"), array(), array("MODE" => "html"));?>
				<?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("include-areas/inc.footer-email.php"), array(), array("MODE" => "html"));?>
				<span class="workhours"><?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("include-areas/inc.footer-time.php"), array(), array("MODE" => "html"));?></span> 
				<a href="#divForm" id="btnForm2" class="btn btn-primary">Записаться</a> 
				<span class="address"><?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("include-areas/inc.footer-adress.php"), array(), array("MODE" => "html"));?></span>
			</div>
		</div>
	</div>
	<div class="subfooter">
		<div class="row justify-content-between">
			<div class="col-12 col-md-7">
				<p><a href="/contacts/#licenzii">Лицензия № ЛО-77-01-011013 от 02.10.2015 для ООО "Евродент" ОГРН: 1127746463822</a></p>
				 Copyright © <?=date("Y");?> - <?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("include-areas/inc.copyright.php"), array(), array("MODE" => "html"));?><br>
			</div>
			<div class="col-12 col-md-5">
 				<?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("include-areas/inc.soglashenie.php"), array(), array("MODE" => "html"));?> <br>
				<a rel="nofollow" href="http://www.onlinegazeta.info/" target=_blank><img src="<?=SITE_TEMPLATE_PATH;?>/images/onlinegazeta_1.gif" width="88" height="31" border="0" title="Onlinegazeta.info - все СМИ России у вас на компьютере" alt="Onlinegazeta.info - все печатные издания вашего региона в электронном виде"></a>
				<!-- Rating Mail.ru counter --> <script type="text/javascript">
					var _tmr = window._tmr || (window._tmr = []);
					_tmr.push({id: "3149284", type: "pageView", start: (new Date()).getTime()});
					(function (d, w, id) {
					  if (d.getElementById(id)) return;
					  var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true; ts.id = id;
					  ts.src = "https://top-fwz1.mail.ru/js/code.js";
					  var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};
					  if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }
					})(document, window, "topmailru-code");
					</script> <!-- //Rating Mail.ru counter --> <!-- Yandex.Metrika counter --> <script type="text/javascript" > (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)}; m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)}) (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym"); ym(56550514, "init", { clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); </script> <noscript><div><img src="https://mc.yandex.ru/watch/56550514" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
			</div>
		</div>
	</div>
</div>
 </footer>
 <?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("include-areas/form-plan-lecheniya.php"), array(), array("MODE" => "html"));?>
<?/* page-wrap*/?>
<div id="divForm" style="display:none;">
	<h2>Заказать звонок</h2>
	<p>Форма обратной связи временно недоступна.</p>
	<p>Пожалуйста, звоните:  +7 (495) 796-43-34</p>
	<?/*
	 <?$APPLICATION->IncludeComponent(
	"v1rt:callback",
	"index__callback",
	Array(
		"COMPONENT_TEMPLATE" => ".default",
		"EMAIL_TO" => "info@americandental.ru",
		"EVENT_MESSAGE_ID" => array(0=>"10",),
		"USE_CAPTCHA" => "N"
	)
);?>
*/?>
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
	
	<script src="<?=SITE_TEMPLATE_PATH;?>/css-js/fontawesome-5.0.6/js/fontawesome-all.min.js" defer></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="<?=SITE_TEMPLATE_PATH;?>/css-js/bootstrap-4.0.0-dist/js/bootstrap.min.js" defer></script>
	<script src="<?=SITE_TEMPLATE_PATH;?>/css-js/fancybox3/jquery.fancybox.min.js" defer></script>
	<script src="<?=SITE_TEMPLATE_PATH;?>/css-js/mmenu/jquery.mmenu.js" defer></script>
	<script src="<?=SITE_TEMPLATE_PATH;?>/css-js/slick-1.8.1/slick.min.js" defer></script>
	<script src="<?=SITE_TEMPLATE_PATH;?>/css-js/wow.min.js" defer></script>
	<script src="<?=SITE_TEMPLATE_PATH;?>/css-js/scripts.js" defer></script>
	
    <script src="//code.jivosite.com/widget.js" data-jv-id="dAA5IEtOor" async></script>
    
<script type='text/javascript'>
var _ctreq = function(data) {
    var sid = '36590', nid = '14';
    var request = window.ActiveXObject?new ActiveXObject("Microsoft.XMLHTTP"):new XMLHttpRequest();
    var post_data = Object.keys(data).reduce(function(a,k){if(!!data[k]){a.push(k+'='+encodeURIComponent(data[k]));}return a},[]).join('&');
    var url = 'https://api-node'+nid+'.calltouch.ru/calls-service/RestAPI/'+sid+'/requests/orders/register/';
    request.open("POST", url, true); request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded'); request.send(post_data);
}
window.jivo_onIntroduction = function() {  
    var jct_data = {}, jc = jivo_api.getContactInfo();
    jct_data.phoneNumber = jc.phone; jct_data.email = jc.email; jct_data.fio = jc.client_name; jct_data.sessionId = window.call_value; jct_data.subject = 'JivoSite посетитель оставил контакты';
    _ctreq(jct_data)
}
window.jivo_onCallStart = function() {
    var jct_data = {}, jc = jivo_api.getContactInfo();
    jct_data.phoneNumber = jc.phone; jct_data.sessionId = window.call_value; jct_data.subject = 'JivoSite обратный звонок';
    _ctreq(jct_data)
}
window.jivo_onMessageSent = function() { ct('goal','jivo_ms'); }
</script>
<script type='text/javascript'>
redhlpSettings = {
onEvent: function(e) {
if (e == 'callOrdered' || e == 'Offline message sent' || e == 'Chat started'){
var sub = e;
if (e == 'callOrdered'){ sub = 'Обратный звонок RedConnect'; }
if (e == 'Offline message sent'){ sub = 'Оффлайн чат RedConnect'; }
if (e == 'Chat started'){ sub = 'Онлайн чат RedConnect'; }
var ct_site_id = '36590';
jQuery.getJSON('https://api-node14.calltouch.ru/calls-service/RestAPI/requests/'+ct_site_id+'/register/', {
subject: sub, sessionId: window.call_value });
};
}
}
</script>
<script type="text/javascript">
jQuery(document).on('click', 'input[type="submit"]', function() { 
var m = jQuery(this).closest('form'); 
var fio = m.find('input[name*="name"]').val(); 
var phone = m.find('input[name*="phone"]').val(); 
var ct_site_id = '36590';
var sub = 'Заявка';
var ct_data = {   
fio: fio,        
phoneNumber: phone,
subject: sub,
sessionId: window.call_value
};
if (!!phone && !!fio){
jQuery.ajax({  
  url: 'https://api-node14.calltouch.ru/calls-service/RestAPI/requests/'+ct_site_id+'/register/', 
  dataType: 'json', type: 'POST', data: ct_data, async: false
}); 
}
});
</script>