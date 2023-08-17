<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("American dental center, dental implantation in one day");
$APPLICATION->SetPageProperty("description", "American dental center - dental implantation in one day in Moscow. Low prices, quality assurance. Lomonosovsky ave., 29 K.2; Call +7 (495) 774-55-50");
?>

<section class="container" style="text-align: center;margin-top:50px;margin-bottom: 50px;">
  <h1>American dental center, all dental services in Moscow</h1>
</section>

<div class="index__happy">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-12 col-md-6">
				<div class="index__happy-img wow fadeInLeft">
 <img src="/bitrix/templates/v1rt-website/images/happy.jpg" alt="happy" title="happy">
				</div>
			</div>
			<div class="col-12 col-md-6">
				<h2 class="wow fadeInRight">We are proud of our work. Our dentistry is on top</h2>
				<p class="wow fadeInRight">
					 We use the best implants from Straumann Group, proven by years of practice. This allows you to give a lifetime warranty.
				</p>
 <a href="#divForm" id="btnForm4" class="btn btn-primary wow fadeInRight">Make an appointment</a>
			</div>
		</div>
	</div>
</div>
<div class="wow fadeIn">
	 <?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("include-areas/inc.block-doctors.php"), array(), array("MODE" => "html"));?>
</div>
<div class="index__moreservices">
	<div class="container uslugi__moreservices">
		<h2 class="wow fadeInRight">Basic Services</h2>
		<div class="row">
			<div class="col-sm-4 col-md-3">
 <a href="/en/services/implants/" class="wow fadeInDown"> <img src="/upload/medialibrary/f91/f917f6e1fea7123274e9c5aeed1012a7.jpg" alt="Implants" title="Implants"> <h2 class="name">Implants</h2> </a>
			</div>
			<div class="col-sm-4 col-md-3">
 <a href="/en/services/prosthetics-with-ceramic-crowns/" class="wow fadeInUp"> <img src="/upload/medialibrary/d23/d238bf3d9ae9f4bf24af08eb00622d51.jpg" alt="Prosthetics with ceramic crowns" title="Prosthetics with ceramic crowns"> <h2 class="name">Prosthetics with ceramic crowns</h2> </a>
			</div>
			<div class="col-sm-4 col-md-3">
 <a href="/en/services/crowns-bridges/" class="wow fadeInDown"> <img src="/upload/medialibrary/df5/df580ffa829d805b898fa675bba9b6f5.jpg" alt="Crowns & Bridges" title="Crowns & Bridges"> <h2 class="name">Crowns & Bridges</h2> </a>
			</div>
			<div class="col-sm-4 col-md-3">
 <a href="/en/services/veneers/" class="wow fadeInUp"> <img src="/upload/medialibrary/4d3/4d36d795005c19f5045f3c808f7565ba.jpg" alt="Veneers" title="Veneers"> <h2 class="name">Veneers</h2> </a>
			</div>
			<div class="col-sm-4 col-md-3">
 <a href="/en/services/pedodontics/" class="wow fadeInDown"> <img src="/upload/medialibrary/51b/51b746997c889d64670add09144662ff.jpg" alt="Pedodontics" title="Pedodontics"> <h2 class="name">Pedodontics</h2> </a>
			</div>
			<div class="col-sm-4 col-md-3">
 <a href="/en/services/hygiene/" class="wow fadeInUp"> <img src="/upload/medialibrary/024/0243b6c6966674231fb09ec88fa5a9ac.jpg" alt="Hygiene" title="Hygiene"> <h2 class="name">Hygiene</h2> </a>
			</div>
			<div class="col-sm-4 col-md-3">
 <a href="/en/services/orthodontics/" class="wow fadeInDown"> <img src="/upload/medialibrary/bcf/bcf11f3e5f9b95a47cfe41cd12847353.jpeg" alt="Orthodontics" title="Orthodontics"> <h2 class="name">Orthodontics</h2> </a>
			</div>
			<div class="col-sm-4 col-md-3">
 <a href="/en/services/restorations/" class="wow fadeInUp"> <img src="/upload/medialibrary/8a7/8a750a6e82b8e4d020d90d23960f2125.jpg" alt="Restorations" title="Restorations"> <h2 class="name">Restorations</h2> </a>
			</div>
		</div>
	</div>
</div>
<div class="index__zapis-wrap">
	<div class="container wow fadeInUp">
		<div class="index__zapis">
			<div class="index__zapis-form">
				<h2>Sign up for a free appointment</h2>
				 <?$APPLICATION->IncludeComponent(
	"v1rt:callback", 
	"index__callback", 
	array(
		"COMPONENT_TEMPLATE" => "index__callback",
		"EMAIL_TO" => "info@americandental.ru",
		"EVENT_MESSAGE_ID" => array(
			0 => "10",
		),
		"USE_CAPTCHA" => "N"
	),
	false
);?>
			</div>
			<div class="index__zapis-info">
				<div class="img-wrap">
 <img src="/bitrix/templates/v1rt-website/images/index-image.jpg" alt="40 minutes" title="40 minutes">
				</div>
				<div>
					<p>
 <i class="far fa-clock"></i> 40 minutes
					</p>
					<p>
 <i class="fas fa-ruble-sign"></i> Free
					</p>
				</div>
				<p>
					 A free examination includes a CT 3D scan, 3D modeling, diagnosis, treatment plan, as well as a demonstration of implants: you can see them, hold them in your hands
				</p>
			</div>
		</div>
	</div>
</div>
<div class="index__preimushestva">
	<div class="container">
		<h3 class="wow fadeInLeft">Advantages of our Implantation Center:</h3>
		<p class="wow fadeInRight">
			The cost of services is below the average bar in Moscow, while the result of treatment is always excellent. A responsible approach distinguishes us from many other clinics:<br>
		</p>
		<div class="row">
			<div class="col-12 col-md-6">
				<ol class="wow fadeInLeft">
					<li>Timeless implant quality guarantee.</li>
					<li>We use the best equipment, including the KAVO OP-300 3D tomograph for diagnostics. This allows you to accurately diagnose in order to continue to perform the job accurately.</li>
					<li>We never save on materials, we buy the best consumables, we use high-quality implants from the Straumann Group. Savings are a risk to the health of patients that we cannot afford to take on. The patient comes to solve a specific problem, and the doctor is responsible for the result of the work. We provide a personal guarantee to patients, we do the job at a time, and the first time. Health is more important for us than financial indicators.</li>
					<li>We comply with all international and Russian dental standards, we work according to a strict protocol. All our doctors took advanced training courses in foreign countries.</li>
				</ol>
			</div>
			<div class="col-12 col-md-6">
				<ol class="second wow fadeInRight">
					<li>We use innovative methods of treatment and restoration of lost teeth. We first performed implantation using the All-on-4 technology in 2004, then the dental community was extremely skeptical, but soon, the opinion changed radically.</li>
					<li>A close-knit team works as a team of like-minded people: from assistants and dental technicians to doctors and management. Family members of our employees undergo treatment only in our clinic, as they are sure of the result.</li>
					<li>We never fail in the face of difficulties. Vast experience and tireless work on mastery allows us to help those whom other doctors have refused.</li>
				</ol>
			</div>
		</div>
	</div>
</div>
<div class="index__vazhno">
	<div class="container wow fadeIn">
		<h3>Important information!</h3>
		<ul class="fa-ul">
			<li>We guarantee the absence of pain, we carry out an individual selection of anesthetics</li>
			<li>We provide a lifetime warranty</li>
			<li>We have vast practical experience.</li>
			<li>We use high-tech equipment</li>
			<li>Only high-quality Straumann Group materials</li>
			<li>We apply innovative treatment methods</li>
			<li>We comply with international standards</li>
			<li>Restore your teeth in a few days</li>
			<li>Fair and transparent pricing, reasonable prices</li>
			<li>Several thousand satisfied patients</li>
		</ul>
	</div>
</div>
<div class="index__protivopokazaniya">
	<div class="container wow flash">
 <i class="fas fa-user-md"></i>
		<p>
			 Are there any contraindications?<br>
			 Be sure to consult a doctor!
		</p>
	</div>
</div>
<div class="index__map">
	 <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A19a44c0490896853d44f6aa15de350b536b40c3950fcdf33e30e46a8552a71ec&amp;width=100%25&amp;height=100%25&amp;lang=en_US&amp;scroll=true"></script>
</div>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>