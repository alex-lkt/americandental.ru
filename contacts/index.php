<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
// $APPLICATION->SetPageProperty("canonical", "https://americandental.ru/contacts/");
require($_SERVER["DOCUMENT_ROOT"].SITE_TEMPLATE_PATH."/fixedwidth-header.php");
$APPLICATION->SetPageProperty("description", "American Dental - центр имплантации доктора Сойфера в Москве.");
$APPLICATION->SetPageProperty("title", "Стоматология American Dental Москва | Центр имплантации доктора Сойфера.Центр стоматологической имплантации.Центр имплантации и стоматологии.");
$APPLICATION->SetTitle("Контакты");
?>
<meta property="og:title" content="центр имплантации.центр имплантации отзывы.центр имплантации москва.мичуринский центр имплантации.мичуринский центр имплантации.центр имплантации и протезирования.центр имплантации зубов.мичуринский центр имплантации отзывы	.центр имплантации +и протезирования отзывы.центр стоматологической имплантации.центр имплантации и стоматологии."/>
<meta property="og:description" content="центр имплантации.центр имплантации отзывы.центр имплантации москва.мичуринский центр имплантации.мичуринский центр имплантации.центр имплантации +и протезирования.центр имплантации зубов.мичуринский центр имплантации отзывы	.центр имплантации и протезирования отзывы.центр стоматологической имплантации.центр имплантации и стоматологии."/>
<meta property="og:image" content="https://americandental.ru/local/templates/v1rt-website/images/new-logo.png"/>
<meta property="og:type" content="website"/>
<meta property="og:url" content= "https://americandental.ru/" />

<div class="vcard">
<h1>Контакты</h1>
			<h2><span class="category"></span>American Dental - Центр Имплантации<br>
 </h2>
			<div class="adr">
 <strong>Адрес:</strong> <span class="locality">г. Москва, Ломоносовский проспект, д. 29 корпус 2.</span><br>
<span class="street-address"><strong>Операционные:</strong>
 <br><span class="street-address">г. Москва, ул. Кастанаевская, д. 43, корп. 2</span><br> 

</span><br>
			</div>
 <strong>Телефон: </strong><span class="tel"><a href="tel:+74957745550">+7 (495) 774-55-50</a></span> <br>
 <!-- <strong>Ресепшен: </strong><span class="tel"><a href="tel:+79857635550">+7 985-763-55-50</a></span> <br> -->
 <b>Часы работы: &nbsp; &nbsp;</b><span class="workhours">пн-вс: 9.00 - 21.00</span><br>
		</div>
		<div class="contacts-map my-5">
			<h2>Схема проезда</h2>
			<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aea81ca7e0416ec27ec2bf8e84dc37bc9de34b5c515120f8f9daf353c31b4c68a&amp;width=100%25&amp;height=450&amp;lang=ru_RU&amp;scroll=true"></script>
		
		</div>
		<?/*
		<h2 id="rekvizity">Реквизиты</h2>
		<p>ООО "Евродент"</p>
		<p>Юридический адрес: 117149, г. Москва, ул. Болотниковская, д. 36, корп. 5, пом. IX<br>
		Фактический адрес: 121108, г. Москва, ул. Кастанаевская, д. 43, корп. 2<br>
		ИНН: 7727781092<br>
		КПП: 772701001<br>
		ОКПО: 09869596<br>
		ОГРН: 1127746463022<br>
		Банковские реквизиты:<br>
		Сбербанк России ОАО г. Москва<br>
		р/сч 40702810638110017161<br>
		к/сч 30101810400000000225<br>
		БИК 044525225<br>
		Генеральный директор: Дубровин Д. С.</p>
		*/?>
<?/*<h2 id="licenzii">Наши лицензии</h2>
<div class="contacts__license">
<img src="/images/lic-1-1.jpg" alt="">
<img src="/images/lic-2-1.jpg" alt="">
<img src="/images/lic-3-1.jpg" alt="">
</div>*/?>
<div class="contact-form my-5">
	
	<h3>Заказать звонок</h3>
<?$APPLICATION->IncludeComponent(
	"v1rt:form.feedback", 
	"template1", 
	array(
		"COMPONENT_TEMPLATE" => "template1",
		"EMAIL_TO" => "info@americandental.ru",
		"EVENT_MESSAGE_ID" => array(
			0 => "9",
		),
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"REQUIRED_FIELDS" => array(
			0 => "NAME",
			1 => "TEL",
		),
		"SERVICE_MESSAGE" => "",
		"USE_CAPTCHA" => "N"
	),
	false
);?>

</div>

<p>Услуги: <a href="/all-on-4/">All on 4</a>, <a href="/all-on-6/">All on 6</a>, <a href="/zuby-za-1-den/">Зубы за 1 день</a> и <a href="/skulovaya-implantaciya-zubov/">Скуловая имплантация</a></p>

</div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"].SITE_TEMPLATE_PATH."/fixedwidth-footer.php");?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>