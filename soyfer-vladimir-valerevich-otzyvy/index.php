<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("canonical", "https://americandental.ru/soyfer-vladimir-valerevich-otzyvy/");
require($_SERVER["DOCUMENT_ROOT"].SITE_TEMPLATE_PATH."/fullwidth-header.php");
$APPLICATION->SetPageProperty("title", "Стоматолог Владимир Сойфер, врач имплантолог | Отзывы пациентов и работников");
$APPLICATION->SetPageProperty("description", "Владимир Валерьевич Сойфер отзывы плохие и хорошие от сотрудников и пациентов. Является основателем и руководителем Центра имплантации American Dental Москва");
$APPLICATION->SetTitle("Владимир Сойфер - отзывы пациентов о докторе");
?><div class="gray_sect" style="padding-bottom: 20px;margin-bottom: -30px; margin-top:20px; padding-top:20px;">
	<div class="container">
		<h2 class="h2mob ofor" style="display:none">Владимир Сойфер - руководитель Центра American Dental, отзывы</h2>
		<div class="row" style="margin-top:10px; background-color:#FFF; margin-bottom:20px;border-radius:10px; border:1px solid #f1f1f1;">
			<div class="col-12 col-md-4">
				<div style="text-align:center;">
 <img alt="Доктор Сойфер Владимир Вальерьевич" src="/images/lazyload.jpg" class="lazyload" data-src="/local/templates/v1rt-website/img/dr-soyfer_16-01-min.png" title="Доктор Сойфер Владимир Вальерьевич">
				</div>
			</div>
			<div class="col-12 col-md-8">
				<h3 style="font-size:24px; margin-top:20px;">Владимир Валерьевич Сойфер</h3>
				<p>
					 Москва.
				</p>
				<p>
					 Стоматолог. Стоматолог-ортопед. Стоматолог-хирург. Имплантолог. Пластический и челюстно-лицевой хирург.
				</p>
				<p>
					 Заведующий клиниками в России и США.
				</p>
				<p>
					 Стаж 30 лет.
				</p>
				<p>
					 Запись на прием +7 (495) 774-55-50.
				</p>
			</div>
		</div>
		<div class="row" style="margin-top:10px; background-color:#FFF; margin-bottom:20px;border-radius:10px; border:1px solid #f1f1f1;">
			<div class="col-12 col-md-12">
				<h3 style="font-size:24px; margin-top:20px;">О враче</h3>
				<p>
					 Владимир Валерьевич Сойфер – это стоматолог, которого можно смело назвать экспертом по идеальным улыбкам. Сегодня этот врач обладает более чем 25-летним опытом в такой сложной, но очень необходимой людям теме, как <a href="/implantaciya-zubov/">имплантология</a> и <a href="/protezirovanie-zubov/">протезирование.</a>
				</p>
				<p>
					 Владимир Валерьевич является не только основателем и руководителем «Центра Имплантации American Dental», но и совмещает обязанности управленца с врачебной работой в клинике. Особое внимание уделяется им и его сотрудниками на внедрение в стоматологическую практику современных зарубежных методик лечения и имплантации зубов.
				</p>
				<p>
					 Ведёт общеобразовательную практику, а также уже много лет является членом многочисленных медицинских стоматологических организаций, которые имеют безупречную репутацию как у медицинского сообщества, так и у пациентов.
				</p>
				<p>
					 Свою учёную степень бакалавра доктор получил в Университете штата Огайо, после чего окончил одно из престижных образовательных учреждений - Университет Пенсильвании, а клиническую практику как специалист с прекрасным образованием он начал в Университете Джорджтауна.
				</p>
			</div>
		</div>
		<div class="row" style="margin-top:10px; background-color:#FFF; margin-bottom:20px;border-radius:10px; border:1px solid #f1f1f1;">
			<div class="col-12 col-md-12">
				<h3 style="font-size:24px; margin-top:20px;">Образование</h3>
				<ul>
					<li>Государственный медико-стоматологический университет в Москве.</li>
					<li>Университет штата Огайо.</li>
					<li>Университет Пенсильвании.</li>
					<li>Университет Джорджтауна.</li>
				</ul>
			</div>
		</div>
		<div class="row" style="margin-top:10px; background-color:#FFF; margin-bottom:20px;border-radius:10px; border:1px solid #f1f1f1;">
			<div class="col-12 col-md-12">
				<h3 style="font-size:24px; margin-top:20px;">Отзывы пациентов</h3>
				 <?
		$GLOBALS['arrFilter'] = array("PROPERTY_PAGE" => "all-on-4");

		$APPLICATION->IncludeComponent(
			"bitrix:news.list",
			"reviews-page-full",
			array(
				"ACTIVE_DATE_FORMAT" => "d.m.Y",
				"ADD_SECTIONS_CHAIN" => "N",
				"AJAX_MODE" => "N",
				"AJAX_OPTION_ADDITIONAL" => "",
				"AJAX_OPTION_HISTORY" => "N",
				"AJAX_OPTION_JUMP" => "N",
				"AJAX_OPTION_STYLE" => "Y",
				"CACHE_FILTER" => "N",
				"CACHE_GROUPS" => "Y",
				"CACHE_TIME" => "36000000",
				"CACHE_TYPE" => "A",
				"CHECK_DATES" => "Y",
				"DETAIL_URL" => "",
				"DISPLAY_BOTTOM_PAGER" => "N",
				"DISPLAY_DATE" => "N",
				"DISPLAY_NAME" => "Y",
				"DISPLAY_PICTURE" => "N",
				"DISPLAY_PREVIEW_TEXT" => "Y",
				"DISPLAY_TOP_PAGER" => "N",
				"FIELD_CODE" => array(
					0 => "",
					1 => "",
				),
				"USE_FILTER" => "Y",
				"FILTER_NAME" => "arrFilter",
				"HIDE_LINK_WHEN_NO_DETAIL" => "N",
				"IBLOCK_ID" => "4",
				"IBLOCK_TYPE" => "info",
				"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
				"INCLUDE_SUBSECTIONS" => "N",
				"MESSAGE_404" => "",
				"NEWS_COUNT" => "4",
				"PAGER_BASE_LINK_ENABLE" => "N",
				"PAGER_DESC_NUMBERING" => "N",
				"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
				"PAGER_SHOW_ALL" => "N",
				"PAGER_SHOW_ALWAYS" => "N",
				"PAGER_TEMPLATE" => ".default",
				"PAGER_TITLE" => "Отзывы",
				"PARENT_SECTION" => "",
				"PARENT_SECTION_CODE" => "",
				"PREVIEW_TRUNCATE_LEN" => "",
				"PROPERTY_CODE" => array(
					0 => "FB_DATE",
					1 => "",
				),
				"SET_BROWSER_TITLE" => "N",
				"SET_LAST_MODIFIED" => "N",
				"SET_META_DESCRIPTION" => "N",
				"SET_META_KEYWORDS" => "N",
				"SET_STATUS_404" => "N",
				"SET_TITLE" => "N",
				"SHOW_404" => "N",
				"SORT_BY1" => "ACTIVE_FROM",
				"SORT_BY2" => "SORT",
				"SORT_ORDER1" => "DESC",
				"SORT_ORDER2" => "DESC",
				"STRICT_SECTION_CHECK" => "N",
				"COMPONENT_TEMPLATE" => "custom"
			),
			false
		); ?>
			</div>
		</div>
	</div>
</div>
 <!--SERT-->
<div style="background-color:#fff;margin-top:40px; margin-bottom:40px">
	<div class="container">
		<div style="padding-top: 0; margin-bottom:30px;">
			<h3 class="h2mob ofor">Сертификаты</h3>
		</div>
		<div class="row photo-sertif">
 <a data-fancybox="photo-sertif" href="/images/docs/Scan2.jpg" class="col-lg-3 col-md-4 col-sm-6 col-6"> <img alt="Сертификат 1 хирург-имплантолог Владимир Сойфер" src="/images/docs/prev.jpg" class="lazyload" data-src="/images/docs/sert-001.jpg" title="Сертификат хирург-имплантолог Владимир Сойфер"> </a> <a data-fancybox="photo-sertif" href="/images/docs/Scan3.jpg" class="col-lg-3 col-md-4 col-sm-6 col-6"> <img alt="Сертификат 2 хирург-имплантолог Владимир Сойфер" src="/images/docs/prev.jpg" class="lazyload" data-src="/images/docs/sert-002.jpg" title="Сертификат хирург-имплантолог Владимир Сойфер"> </a> <a data-fancybox="photo-sertif" href="/images/docs/Scan4.jpg" class="col-lg-3 col-md-4 col-sm-6 col-6"> <img alt="Сертификат 3 хирург-имплантолог Владимир Сойфер" src="/images/docs/prev.jpg" class="lazyload" data-src="/images/docs/sert-003.jpg" title="Сертификат хирург-имплантолог Владимир Сойфер"> </a> <a data-fancybox="photo-sertif" href="/images/docs/Scan5.jpg" class="col-lg-3 col-md-4 col-sm-6 col-6"> <img alt="Сертификат 4 хирург-имплантолог Владимир Сойфер" src="/images/docs/prev.jpg" class="lazyload" data-src="/images/docs/sert-004.jpg" title="Сертификат хирург-имплантолог Владимир Сойфер"> </a> <a data-fancybox="photo-sertif" href="/images/docs/Scan6.jpg" class="col-lg-3 col-md-4 col-sm-6 col-6"> <img alt="Сертификат 5 хирург-имплантолог Владимир Сойфер" src="/images/docs/prev.jpg" class="lazyload" data-src="/images/docs/sert-005.jpg" title="Сертификат хирург-имплантолог Владимир Сойфер"> </a> <a data-fancybox="photo-sertif" href="/images/docs/Scan7.jpg" class="col-lg-3 col-md-4 col-sm-6 col-6"> <img alt="Сертификат 6 хирург-имплантолог Владимир Сойфер" src="/images/docs/prev.jpg" class="lazyload" data-src="/images/docs/sert-006.jpg" title="Сертификат хирург-имплантолог Владимир Сойфер"> </a> <a data-fancybox="photo-sertif" href="/images/docs/Scan8.jpg" class="col-lg-3 col-md-4 col-sm-6 col-6"> <img alt="Сертификат 7 хирург-имплантолог Владимир Сойфер" src="/images/docs/prev.jpg" class="lazyload" data-src="/images/docs/sert-007.jpg" title="Сертификат хирург-имплантолог Владимир Сойфер"> </a> <a data-fancybox="photo-sertif" href="/images/docs/Scan9.jpg" class="col-lg-3 col-md-4 col-sm-6 col-6"> <img alt="Сертификат 8 хирург-имплантолог Владимир Сойфер" src="/images/docs/prev.jpg" class="lazyload" data-src="/images/docs/sert-008.jpg" title="Сертификат хирург-имплантолог Владимир Сойфер"> </a> <a data-fancybox="photo-sertif" href="/images/docs/Scan10.jpg" class="col-lg-3 col-md-4 col-sm-6 col-6"> <img alt="Сертификат 9 хирург-имплантолог Владимир Сойфер" src="/images/docs/prev.jpg" class="lazyload" data-src="/images/docs/sert-009.jpg" title="Сертификат хирург-имплантолог Владимир Сойфер"> </a> <a data-fancybox="photo-sertif" href="/images/docs/Scan11.jpg" class="col-lg-3 col-md-4 col-sm-6 col-6"> <img alt="Сертификат 10 хирург-имплантолог Владимир Сойфер" src="/images/docs/prev.jpg" class="lazyload" data-src="/images/docs/sert-010.jpg" title="Сертификат хирург-имплантолог Владимир Сойфер"> </a> <a data-fancybox="photo-sertif" href="/images/docs/Scan12.jpg" class="col-lg-3 col-md-4 col-sm-6 col-6"> <img alt="Сертификат 11 хирург-имплантолог Владимир Сойфер" src="/images/docs/prev.jpg" class="lazyload" data-src="/images/docs/sert-011.jpg" title="Сертификат хирург-имплантолог Владимир Сойфер"> </a> <a data-fancybox="photo-sertif" href="/images/docs/Scan13.jpg" class="col-lg-3 col-md-4 col-sm-6 col-6"> <img alt="Сертификат 12 хирург-имплантолог Владимир Сойфер" src="/images/docs/prev.jpg" class="lazyload" data-src="/images/docs/sert-012.jpg" title="Сертификат хирург-имплантолог Владимир Сойфер"> </a> <a data-fancybox="photo-sertif" href="/images/docs/Scan14.jpg" class="col-lg-3 col-md-4 col-sm-6 col-6"> <img alt="Сертификат 13 хирург-имплантолог Владимир Сойфер" src="/images/docs/prev.jpg" class="lazyload" data-src="/images/docs/sert-013.jpg" title="Сертификат хирург-имплантолог Владимир Сойфер"> </a> <a data-fancybox="photo-sertif" href="/images/docs/Scan15.jpg" class="col-lg-3 col-md-4 col-sm-6 col-6"> <img alt="Сертификат 14 хирург-имплантолог Владимир Сойфер" src="/images/docs/prev.jpg" class="lazyload" data-src="/images/docs/sert-014.jpg" title="Сертификат хирург-имплантолог Владимир Сойфер"> </a> <a data-fancybox="photo-sertif" href="/images/docs/Scan16.jpg" class="col-lg-3 col-md-4 col-sm-6 col-6"> <img alt="Сертификат 15 хирург-имплантолог Владимир Сойфер" src="/images/docs/prev.jpg" class="lazyload" data-src="/images/docs/sert-015.jpg" title="Сертификат хирург-имплантолог Владимир Сойфер"> </a> <a data-fancybox="photo-sertif" href="/images/docs/Scan18.jpg" class="col-lg-3 col-md-4 col-sm-6 col-6"> <img alt="Сертификат 16 хирург-имплантолог Владимир Сойфер" src="/images/docs/prev.jpg" class="lazyload" data-src="/images/docs/sert-016.jpg" title="Сертификат хирург-имплантолог Владимир Сойфер"> </a> <a data-fancybox="photo-sertif" href="/images/docs/Scan19.jpg" class="col-lg-3 col-md-4 col-sm-6 col-6"> <img alt="Сертификат 17 хирург-имплантолог Владимир Сойфер" src="/images/docs/prev.jpg" class="lazyload" data-src="/images/docs/sert-017.jpg" title="Сертификат хирург-имплантолог Владимир Сойфер"> </a> <a data-fancybox="photo-sertif" href="/images/docs/Scan20.jpg" class="col-lg-3 col-md-4 col-sm-6 col-6"> <img alt="Сертификат 18 хирург-имплантолог Владимир Сойфер" src="/images/docs/prev.jpg" class="lazyload" data-src="/images/docs/sert-018.jpg" title="Сертификат хирург-имплантолог Владимир Сойфер"> </a> <a data-fancybox="photo-sertif" href="/images/docs/Scan21.jpg" class="col-lg-3 col-md-4 col-sm-6 col-6"> <img alt="Сертификат 19 хирург-имплантолог Владимир Сойфер" src="/images/docs/prev.jpg" class="lazyload" data-src="/images/docs/sert-019.jpg" title="Сертификат хирург-имплантолог Владимир Сойфер"> </a> <a data-fancybox="photo-sertif" href="/images/docs/Scan22.jpg" class="col-lg-3 col-md-4 col-sm-6 col-6"> <img alt="Сертификат 20 хирург-имплантолог Владимир Сойфер" src="/images/docs/prev.jpg" class="lazyload" data-src="/images/docs/sert-020.jpg" title="Сертификат хирург-имплантолог Владимир Сойфер"> </a> <a data-fancybox="photo-sertif" href="/images/docs/Scan23.jpg" class="col-lg-3 col-md-4 col-sm-6 col-6"> <img alt="Сертификат 21 хирург-имплантолог Владимир Сойфер" src="/images/docs/prev.jpg" class="lazyload" data-src="/images/docs/sert-021.jpg" title="Сертификат хирург-имплантолог Владимир Сойфер"> </a> <a data-fancybox="photo-sertif" href="/images/docs/Scan24.jpg" class="col-lg-3 col-md-4 col-sm-6 col-6"> <img alt="Сертификат 22 хирург-имплантолог Владимир Сойфер" src="/images/docs/prev.jpg" class="lazyload" data-src="/images/docs/sert-022.jpg" title="Сертификат хирург-имплантолог Владимир Сойфер"> </a> <a data-fancybox="photo-sertif" href="/images/docs/Scan25.jpg" class="col-lg-3 col-md-4 col-sm-6 col-6"> <img alt="Сертификат 23 хирург-имплантолог Владимир Сойфер" src="/images/docs/prev.jpg" class="lazyload" data-src="/images/docs/sert-023.jpg" title="Сертификат хирург-имплантолог Владимир Сойфер"> </a> <a data-fancybox="photo-sertif" href="/images/docs/Scan26.jpg" class="col-lg-3 col-md-4 col-sm-6 col-6"> <img alt="Сертификат 24 хирург-имплантолог Владимир Сойфер" src="/images/docs/prev.jpg" class="lazyload" data-src="/images/docs/sert-024.jpg" title="Сертификат хирург-имплантолог Владимир Сойфер"> </a> <a data-fancybox="photo-sertif" href="/images/docs/Scan27.jpg" class="col-lg-3 col-md-4 col-sm-6 col-6"> <img alt="Сертификат 25 хирург-имплантолог Владимир Сойфер" src="/images/docs/prev.jpg" class="lazyload" data-src="/images/docs/sert-025.jpg" title="Сертификат хирург-имплантолог Владимир Сойфер"> </a> <a data-fancybox="photo-sertif" href="/images/docs/Scan28.jpg" class="col-lg-3 col-md-4 col-sm-6 col-6"> <img alt="Сертификат 26 хирург-имплантолог Владимир Сойфер" src="/images/docs/prev.jpg" class="lazyload" data-src="/images/docs/sert-026.jpg" title="Сертификат хирург-имплантолог Владимир Сойфер"> </a> <a data-fancybox="photo-sertif" href="/images/docs/Scan29.jpg" class="col-lg-3 col-md-4 col-sm-6 col-6"> <img alt="Сертификат 27 хирург-имплантолог Владимир Сойфер" src="/images/docs/prev.jpg" class="lazyload" data-src="/images/docs/sert-027.jpg" title="Сертификат хирург-имплантолог Владимир Сойфер"> </a> <a data-fancybox="photo-sertif" href="/images/docs/Scan30.jpg" class="col-lg-3 col-md-4 col-sm-6 col-6"> <img alt="Сертификат 28 хирург-имплантолог Владимир Сойфер" src="/images/docs/prev.jpg" class="lazyload" data-src="/images/docs/sert-028.jpg" title="Сертификат хирург-имплантолог Владимир Сойфер"> </a> <a data-fancybox="photo-sertif" href="/images/docs/Scan31.jpg" class="col-lg-3 col-md-4 col-sm-6 col-6"> <img alt="Сертификат 29 хирург-имплантолог Владимир Сойфер" src="/images/docs/prev.jpg" class="lazyload" data-src="/images/docs/sert-029.jpg" title="Сертификат хирург-имплантолог Владимир Сойфер"> </a> <a data-fancybox="photo-sertif" href="/images/docs/Scan32.jpg" class="col-lg-3 col-md-4 col-sm-6 col-6"> <img alt="Сертификат 30 хирург-имплантолог Владимир Сойфер" src="/images/docs/prev.jpg" class="lazyload" data-src="/images/docs/sert-030.jpg" title="Сертификат хирург-имплантолог Владимир Сойфер"> </a> <a data-fancybox="photo-sertif" href="/images/docs/Scan34.jpg" class="col-lg-3 col-md-4 col-sm-6 col-6"> <img alt="Сертификат 31 хирург-имплантолог Владимир Сойфер" src="/images/docs/prev.jpg" class="lazyload" data-src="/images/docs/sert-031.jpg" title="Сертификат хирург-имплантолог Владимир Сойфер"> </a>
		</div>
	</div>
</div>
 <!--END SERT--> <!--KONTAKT SECTION-->
<div class="white_sect" id="q10" style="padding-bottom: 20px;margin-top: 40px;">
	<div class="container">
		<h4 class="h2mob ofor">Наши контакты</h4>
		<div class="row" style="margin-bottom: 20px;margin-top: 40px;">
			<div class="col-12 order-md-1 col-md-6">
				<p style="font-size: 20px; font-weight: 400; text-align: center; margin-bottom: 0;">
					 Адрес: <br>
 <span style="font-size: 17px; font-weight: 300; text-align: center;">
					г. Москва, Ломоносовский проспект, д. 25 корпус 5<br>
					 г. Москва, ул.Кастанаевская, д.43 к.2 </span>
				</p>
				<p style="font-size: 20px; font-weight: 400; text-align: center; margin-bottom: 0;">
					 Режим работы: <br>
 <span style="font-size: 17px; font-weight: 300; text-align: center;">
					Пн-Вс: c 09.00 до 21.00 </span>
				</p>
			</div>
			<div class="col-12 order-md-2 col-md-6">
				<p style="font-size: 20px; font-weight: 400; text-align: center; margin-bottom: 0;">
					 Телефон: <br>
 <span style="font-size: 17px; font-weight: 300; text-align: center;"> <a href="tel:+74957745550">+7 (495) 774-55-50</a> </span>
				</p>
			</div>
		</div>
		<div style="margin-bottom: 20px;">
			 <script async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aea81ca7e0416ec27ec2bf8e84dc37bc9de34b5c515120f8f9daf353c31b4c68a&amp;width=100%25&amp;height=450&amp;lang=ru_RU&amp;scroll=true"></script>
		</div>
	</div>
</div>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>