<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<?if($arResult["DETAIL_TEXT"]):?>
<div class="container mb-5">
<? echo $arResult["DETAIL_TEXT"];?>
</div>
<?endif;?>
<div class="container">
    <?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("include-areas/index-services.php"), array(), array("MODE" => "html"));?>
</div>


<div class="index__preimushestva">
		<div class="container">
			<h2 class="wow fadeInLeft">Почему стоит обратиться в Центр Имплантации American Dental?</h2>
			<p class="wow fadeInRight">
			 	Стоимость услуг ниже средней планки в Москве, в то время как результат лечения всегда превосходен. Ответственный подход отличает нас от множества других клиник
			</p>
			<div class="row">
				<div class="col-12 col-md-6">
					<ol class="wow fadeInLeft">
						<li><i class="fas fa-check-circle"></i>Гарантия на качество имплантов вневременных рамок.</li>
						<li><i class="fas fa-check-circle"></i>Применяем лучшее оборудование, в том числе и 3D-томограф KAVO OP-300 для диагностики. Это позволяет максимально точно произвести диагностику, чтобы в дальнейшем выполнить работу безошибочно.</li>
						<li><i class="fas fa-check-circle"></i>Никогда не экономим на материалах, закупаем лучшие расходники, используем качественные имплантаты от Straumann Group. Экономия - риск на здоровье пациентов, который мы не можем позволить взять на себя. Пациент приходит за решением конкретной проблемы, а врач несет ответственность за результат работы. Предоставляем личную гарантию пациентам, делаем работу за раз, и с первого раза. Здоровье для нас приоритетнее финансовых показателей.</li>
						<li><i class="fas fa-check-circle"></i>Соблюдаем все мировые и российские стоматологические стандарты, работаем по строгим протоколом. Все наши доктора проходили курсы повышения квалификации в странах зарубежья.</li>
					</ol>
				</div>
				<div class="col-12 col-md-6">
					<ol class="second wow fadeInRight">
						<li><i class="fas fa-check-circle"></i>Используем инновационные методики лечения и восстановления утраченных зубов. Наш Центр был одним из первых стоматологических клиник в Москве, который успешно внедрил технологии <a href="/all-on-4/" target="_blank">All-on-4</a> и <a href="/all-on-6/" target="_blank">All-on-6</a>, позволяющую вернуть все зубы за 1 день. Впервые мы выполнили имплантацию по технологии «Все-на-4» в 2004 году, тогда стоматологическое сообщество было крайне скептически настроено, но в скором времени, мнение в корни изменилось.</li>
						<li><i class="fas fa-check-circle"></i>Сплоченный коллектив работает как команда единомышленников: начиная от ассистентов и зубных техников, заканчивая докторами и руководством. Члены семей наших сотрудников проходят лечение только в нашей клинике, так как уверены в результате.</li>
						<li><i class="fas fa-check-circle"></i>Мы никогда не отказываем при столкновении с трудностями. Огромный опыт и неустанная работа над мастерством позволяет нам помогать тем, от кого отказались другие врачи.</li>
						<li><i class="fas fa-check-circle"></i>Предоставим особые условия на All-on-4 и All-on-6 для жителей <?=$arResult["PROPERTIES"]["CITY1"]["VALUE"];?></li>

					</ol>
				</div>
			</div>
			<?if(strlen($arResult["PROPERTIES"]["TEXT_BEFORE_PRICES"]["~VALUE"]["TEXT"]) ):?>
				<div class="mb-4"><?=$arResult["PROPERTIES"]["TEXT_BEFORE_PRICES"]["~VALUE"]["TEXT"];?></div>
			<?endif;?>

		</div>
	</div>
	<div class="page4x4__offer mb-0">
	<div class="container">
		<h2>Имплантация зубов ALL-ON-4 – цена или сколько стоит красивая улыбка</h2>
		<div class="row row-mini">
			<div class="col-12 col-md-4">
				<div class="page4x4__offer-item">
					<p class="name">
						 «Всё на 4»
					</p>
 <img src="/bitrix/templates/v1rt-website/images/vse-na-4-1.jpg" title="Всё на 4" alt="Всё на 4">&nbsp;от&nbsp;<span class="price">от 145.000 руб.</span>
					<ul>
						<li><b>Страна производства:&nbsp;</b>Израиль</li>
						<li><b>Гарантия:</b>&nbsp;обслуживание имплантов – пожизненно</li>
						<li><b>Завершающий</b>: выполняется снятие слепков, устанавливается протез</li>
						<li><b>Ортопедический этап:</b> снятие слепков, установка протеза</li>
						<li><b>Разновидность протеза:</b> композитный, 10 зубов&nbsp;композитный, 10 зубов</li>
						<li><b>Первая консультация стоматолога с КТ-исследованием:</b> входит в стоимость</li>
						<li><b>Иногородним пациентам:</b> - </li>
					</ul>
				</div>
			</div>
			<div class="col-12 col-md-4">
				<div class="page4x4__offer-item">
					<p class="name">
						 «Всё на 4+»
					</p>
 <img src="/bitrix/templates/v1rt-website/images/vse-na-4-2.png" title="Всё на 4+" alt="Всё на 4+">&nbsp;<span class="price">от 180.000 руб.</span>
					<ul>
						<li><b>Страна производства:&nbsp;</b>США</li>
						<li><b>Гарантия:</b>&nbsp;обслуживание имплантов – пожизненно</li>
						<li><b>Завершающий</b>: выполняется снятие слепков, устанавливается протез</li>
						<li><b>Ортопедический этап:</b> снятие слепков, установка протеза</li>
						<li><b>Разновидность протеза:</b> армированный,&nbsp;композитный&nbsp;на 10-12 зубов</li>
						<li><b>Первичная консультация с 3D снимком:</b> входит в стоимость</li>
						<li><b>Иногородним пациентам:</b> переезд</li>
					</ul>
				</div>
			</div>
			<div class="col-12 col-md-4">
				<div class="page4x4__offer-item">
					<p class="name">
						 All-on-4®
					</p>
 <img src="/bitrix/templates/v1rt-website/images/vse-na-4-3.jpg" title="All-on-4" alt="All-on-4">&nbsp;<span class="price">от 250.000 руб.</span>
					<ul>
 						<li><b>Страна производства:&nbsp;</b>Швеция-США</li>
						<li><b>Гарантия:</b>&nbsp;обслуживание имплантов – пожизненно</li>
						<li><b>Завершающий</b>: выполняется снятие слепков, устанавливается протез</li>
						<li><b>Ортопедический этап:</b> снятие слепков, установка протеза</li>
						<li><b>Разновидность протеза:</b> метало-композитный на 12-14 зубов</li>
						<li><b>Первичная консультация с 3D снимком:</b> входит в стоимость</li>
						<li><b>Иногородним пациентам:</b> переезд, проживание в гостинице</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container">
    <?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("include-areas/inc.block-doctors.php"), array(), array("MODE" => "html"));?>
</div>

	<div class="container mt-4">
	<h2>Экспресс имплантация зубов за 1 день: что такое "Всё-на-4"</h2>
	 <!--noindex-->
	<p class="text-center">
 <img alt="Виды установки имплантов All-on-4" title="Виды установки имплантов All-on-4" src="/images/vidy-ustanovki-vse-na-4.png">
		<!--/noindex-->
	</p>
	<p>
		 Технология предусматривает установку несъемного мостовидного протеза с опорой на 4 импланта, которые в то же время служат опорой для остальных "зубов". Процедура включает в себя установку имплантов для пациентов с полным отсутствием зубов, или пациентов с сильно разрушенными зубами, которые подлежат удалению. Протезирование производится в тот же день, после окончания операции по восстановлению зубов за 1 день.
	</p>
	</div>
	<div class="index__moreservices">
		<div class="container uslugi__moreservices">
			<h2 class="wow fadeInRight">Основные услуги</h2>
			<div class="row">
				<div class="col-12 col-md-6">
 <a href="/implanty/" class="wow fadeInDown"> <img src="/upload/medialibrary/f91/f917f6e1fea7123274e9c5aeed1012a7.jpg" title="Имплантация" alt="Имплантация"> <span class="name">Имплантация</span> </a>
				</div>
				<div class="col-12 col-md-6">
 <a href="/protezirovanie-keramicheskimi-koronkami/" class="wow fadeInUp"> <img src="/upload/medialibrary/d23/d238bf3d9ae9f4bf24af08eb00622d51.jpg" title="Протезирование керамическими коронками" alt="Протезирование керамическими коронками"> <span class="name">Протезирование керамическими коронками</span> </a>
				</div>
				<div class="col-12 col-md-6">
 <a href="/protezirovanie-zubov/" class="wow fadeInDown"> <img src="/upload/medialibrary/df5/df580ffa829d805b898fa675bba9b6f5.jpg" title="Протезирование" alt="Протезирование"> <span class="name">Протезирование</span> </a>
				</div>
				<div class="col-12 col-md-6">
 <a href="/viniry/" class="wow fadeInUp"> <img src="/upload/medialibrary/4d3/4d36d795005c19f5045f3c808f7565ba.jpg" title="Установка виниров" alt="Установка виниров"> <span class="name">Установка виниров</span> </a>
				</div>
				<div class="col-12 col-md-6">
 <a href="/detskaya-stomatologiya/" class="wow fadeInDown"> <img src="/upload/medialibrary/51b/51b746997c889d64670add09144662ff.jpg" title="Детская стоматология" alt="Детская стоматология"> <span class="name">Детская стоматология</span> </a>
				</div>
				<div class="col-12 col-md-6">
 <a href="/gigiena-profilaktika-i-chistka-zubov/" class="wow fadeInUp"> <img src="/upload/medialibrary/024/0243b6c6966674231fb09ec88fa5a9ac.jpg" title="Гигиена, профилактика и чистка зубов" alt="Гигиена, профилактика и чистка зубов"> <span class="name">Гигиена, профилактика и чистка зубов</span> </a>
				</div>
				<div class="col-12 col-md-6">
 <a href="/ortodontiya/" class="wow fadeInDown"> <img src="/upload/medialibrary/bcf/bcf11f3e5f9b95a47cfe41cd12847353.jpeg" title="Ортодонтия" alt="Ортодонтия"> <span class="name">Ортодонтия</span> </a>
				</div>
				<div class="col-12 col-md-6">
 <a href="/restavratsii-zubov/" class="wow fadeInUp"> <img src="/upload/medialibrary/8a7/8a750a6e82b8e4d020d90d23960f2125.jpg" title="Реставрация зубов" alt="Реставрация зубов"> <span class="name">Реставрация зубов</span> </a>
				</div>
			</div>
		</div>
	</div>
<div class="index__vazhno">
		<div class="container wow fadeIn">
			<h2>All on 4 и All on 6 для жителей <?=$arResult["PROPERTIES"]["CITY2"]["VALUE"];?></h2>
			<ul class="fa-ul">
				<li><span class="fa-li"><i class="far fa-thumbs-up"></i></span>Мы гарантируем отсутствие боли, выполняем индивидуальный подбор анестетиков</li>
				<li><span class="fa-li"><i class="far fa-thumbs-up"></i></span>Предоставляем пожизненную гарантию</li>
				<li><span class="fa-li"><i class="far fa-thumbs-up"></i></span>Имеем огромный практический опыт</li>
				<li><span class="fa-li"><i class="far fa-thumbs-up"></i></span>Используем высокотехнологичное оборудование</li>
				<li><span class="fa-li"><i class="far fa-thumbs-up"></i></span>Только качественные материалы Straumann Group</li>
				<li><span class="fa-li"><i class="far fa-thumbs-up"></i></span>Применяем инновационные методики лечения</li>
				<li><span class="fa-li"><i class="far fa-thumbs-up"></i></span>Соблюдаем мировые стандарты</li>
				<li><span class="fa-li"><i class="far fa-thumbs-up"></i></span>Восстанавливаем зубы за несколько дней</li>
				<li><span class="fa-li"><i class="far fa-thumbs-up"></i></span>Справедливое и прозрачное ценообразование, адекватные цены</li>
				<li><span class="fa-li"><i class="far fa-thumbs-up"></i></span>Несколько тысяч довольных пациентов</li>

			</ul>
		</div>
	</div>
