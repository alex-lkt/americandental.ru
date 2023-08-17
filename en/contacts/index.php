<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "American Dental - Dr. Soifer Implantation Center");
require($_SERVER["DOCUMENT_ROOT"].SITE_TEMPLATE_PATH."/fixedwidth-header.php");
$APPLICATION->SetTitle("Contacts American dental center");
$APPLICATION->SetPageProperty("description", "American Dental - Dr. Soifer Implantation Center - more than 25 years of clinical dental experience, confirmed by Nobel Branemark System USA certificates");
?>
<div class="vcard">
			<h2><span class="category"></span>American Dentistry<br>
 </h2>
			<div class="adr">
 <strong>Address:</strong> <span class="locality">Moscow</span>, <span class="street-address">Lomonosovsky prospect, 25/5</span><br>
			</div>
 <strong>Phone: </strong><span class="tel"><a href="tel:+74957635550">+7(495)763-55-50</a></span> <br>
 <strong>E-mail:</strong> <a href="mailto:info@americandental.ru"><span class="email">info@americandental.ru</span></a>  <br>
 <b>Opening hours:</b><span class="workhours">from 9 to 9 including weekends</span><br>
		</div>
		<div class="contacts-map my-5">
			<h2>Map</h2>
			 <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A19a44c0490896853d44f6aa15de350b536b40c3950fcdf33e30e46a8552a71ec&amp;width=100%25&amp;height=400&amp;lang=en_US&amp;scroll=true"></script>
		</div>
<h2>License</h2>
<div class="contacts__license">
<img src="/images/lic-1-1.jpg" alt="license" title="license">
<img src="/images/lic-2-1.jpg" alt="license" title="license">
<img src="/images/lic-3-1.jpg" alt="license" title="license">
</div>
<div class="contact-form my-5">
	<h2>Feedback</h2>
<?$APPLICATION->IncludeComponent(
	"v1rt:form.feedback", 
	"contacts__feedback", 
	array(
		"EMAIL_TO" => "info@americandental.ru",
		"EVENT_MESSAGE_ID" => array(
			0 => "9",
		),
		"OK_TEXT" => "Your message has been sent",
		"REQUIRED_FIELDS" => array(
			0 => "NAME",
			1 => "TEL",
			2 => "MESSAGE",
		),
		"USE_CAPTCHA" => "N",
		"COMPONENT_TEMPLATE" => "contacts__feedback",
		"SERVICE_MESSAGE" => ""
	),
	false
);?>
</div>

<p>Services: <a href="/en/all-on-4/">All on 4</a>, <a href="/en/all-on-6/">All on 6</a>, <a href="/en/teeth-for-1-day/">Teeth for 1 day</a> and <a href="/en/zygomatic-implants/">Zygomatic implants</a></p>

<?require($_SERVER["DOCUMENT_ROOT"].SITE_TEMPLATE_PATH."/fixedwidth-footer.php");?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>