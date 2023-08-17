<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Отзывы пациентов на имплантацию all-on-4");
$APPLICATION->SetPageProperty("description", "Отзывы пациентов на лечение, протезирование all-on-4, имплантацию зубов в Москве. Отзывы о стоматологах Москвы.");
$APPLICATION->SetPageProperty("canonical", "https://americandental.ru/all-on-4/otzyvy-allon4/");
$APPLICATION->SetTitle("Отзывы пациентов на протезирование all-on-4");
require($_SERVER["DOCUMENT_ROOT"].SITE_TEMPLATE_PATH."/fullwidth-header.php");
?>

<div class="main-page">
    <div class="container">
        <div class="main-page__block-one">

            <!-- <section class="reviews-page"> -->
                <?/*
                $GLOBALS['arrFilter'] = array("PROPERTY_PAGE" => "all-on-4");

                $APPLICATION->IncludeComponent(
                    "bitrix:news.list", 
                    "reviews-page", 
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
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                        "INCLUDE_SUBSECTIONS" => "N",
                        "MESSAGE_404" => "",
                        "NEWS_COUNT" => "25",
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
                );*/?>

            <!-- </section> -->

            <asside class="-page-right page-full">
                <div class="page-right__box">        
                    <a href="/all-on-4/">
                        <h2 class="page-right__title">
                        Что такое имплантация <span class="title-color__style1">all-on-4</span>
                        </h2>
                    </a>
                    <div class="page-right__content">
                        <div class="page-right__img">
                            <a href="/all-on-4/">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/all_on4_01.png" alt="">
                            </a>
                        </div>
                        <h3 class="page-right__prew">
                        Совсем недавно в стоматологической практике протезирование зубов проводилось путем вживления каждого импланта – искусственного корня – по отдельности или же выбором съемных протезов...
                        </h3>
                        <div class="page-right__btn">
                            <a href="/all-on-4/">Подробнее</a>
                            <svg class="svg-inline--fa fa-arrow-right fa-w-14" aria-hidden="true" data-prefix="fas" data-icon="arrow-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"></path></svg>
                        </div>
                    </div>
                </div>

                <div class="page-right__box">
                    <a href="/articles/sovremennye-metody-protezirovaniya-zubov/">
                        <h2 class="page-right__title">
                        Современные методы <span class="title-color__style1">протезирования зубов</span>
                        </h2>
                    </a>
                    <div class="page-right__content">
                        <div class="page-right__img">
                            <a href="/articles/sovremennye-metody-protezirovaniya-zubov/">
                                <img src="<?=SITE_DIR?>upload/iblock/655/65581ed48ffe1d7904f6a50fe26fcdaf.jpg" alt="">
                            </a>
                        </div>
                        <h3 class="page-right__prew">
                        С проблемой протезирования зубов приходится сталкиваться чуть ли не каждому человеку. У кого-то возникает необходимость довести до совершенства внешний облик, придав ему голливудскую улыбку...
                        </h3>
                        <div class="page-right__btn">
                            <a href="/articles/sovremennye-metody-protezirovaniya-zubov/">Подробнее</a>
                            <svg class="svg-inline--fa fa-arrow-right fa-w-14" aria-hidden="true" data-prefix="fas" data-icon="arrow-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"></path></svg>
                        </div>
                    </div>
                </div>

                <div class="page-right__box">
                    <a href="/articles/konsultatsiya-stomatologa-implantologa/">
                        <h2 class="page-right__title">
                        Консультация стоматолога имплантолога <span class="title-color__style1">имплантолога</span>
                        </h2>
                    </a>
                    <div class="page-right__content">
                        <div class="page-right__img">
                            <a href="/articles/konsultatsiya-stomatologa-implantologa/">
                                <img src="<?=SITE_DIR?>upload/iblock/df8/df835dc35b13912067999ab1e3cda099.jpg" alt="">
                            </a>
                        </div>
                        <h3 class="page-right__prew">
                        Ни один лечебный процесс не обходится без грамотной консультации. Врач стоматолог имплантолог должен максимально тщательно обследовать пациента и составить подробный план лечения, ознакомив с ним клиента...
                        </h3>
                        <div class="page-right__btn">
                            <a href="/articles/konsultatsiya-stomatologa-implantologa/">Подробнее</a>
                            <svg class="svg-inline--fa fa-arrow-right fa-w-14" aria-hidden="true" data-prefix="fas" data-icon="arrow-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"></path></svg>
                        </div>
                    </div>
                </div>
            </asside>

         </div>
    
        <!--VIDEO OTZYV SECTION-->
        <div class="" style="padding-bottom: 20px !important;margin-bottom: 30px; margin-top:-30px">
            <div class="container">
                <h2 class="h2mob" style="color: #333; font-size: 36px; font-weight: 400; text-transform: uppercase;padding-top: 30px;margin-bottom: 30px; margin-top:20px;">Видео отзывы <span style="color: #0257b2;">о нашей работе</span></h2>

                <div class="row" style="margin-bottom:30px">
                    <div class="col-12 col-xl-3 col-md-6">				
                        <div style="background-color: #fff; text-align: center;">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/jq1h5fMg0wU" allowfullscreen="" style="border:none;width:100%;"></iframe>

                            <h2 style="text-align: center;padding: 5px;height: 115px;font-size: 18px;">
                                Отзыв пациента об имплантации "All-on-4" с установкой скуловых имплантов Zygoma в American Dental
                            </h2>
                        </div>
                    </div>
                    <div class="col-12 col-xl-3 col-md-6">				
                        <div style="background-color: #fff; text-align: center;">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/levRs9uNKBU" allowfullscreen="" style="border:none;width:100%;"></iframe>

                            <h2 style="text-align: center;padding: 5px;height: 115px;font-size: 18px;">
                                Отзыв пациента об имплантации "All-on-6" с установкой скуловых имплантов Zygoma в American Dental
                            </h2>
                        </div>
                    </div>

                    <div class="col-12 col-xl-3 col-md-6">				
                        <div style="background-color: #fff; text-align: center;">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/jAew6Kro_xk" allowfullscreen="" style="border:none;width:100%;"></iframe>

                            <h2 style="text-align: center;padding: 5px;height: 115px;font-size: 18px;">
                                Отзыв пациента об имплантации "All-on-4" в клинике American Dental
                            </h2>
                        </div>
                    </div>
                    <div class="col-12 col-xl-3 col-md-6">				
                        <div style="background-color: #fff; text-align: center;">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/KtL8dsZFeU0" allowfullscreen="" style="border:none;width:100%;"></iframe>

                            <h2 style="text-align: center;padding: 5px;height: 115px;font-size: 18px;">
                                Отзыв пациента об имплантации "All-on-4" в клинике American Dental
                            </h2>
                        </div>
                    </div>

                </div>

                <div class="button button_blue btn-page" style="text-align: center;margin: auto;"><a style="padding: 10px 20px;" href="/otzyvy/" class="btn btn-primary"><h6 style="margin:0;padding:0;">Больше отзывов</h6></a></div>       
                </div>
            </div>
        </div>
        <!--END VIDEO OTZYV SECTION-->
    </div>
</div>


<?require($_SERVER["DOCUMENT_ROOT"].SITE_TEMPLATE_PATH."/fullmenu-footer.php");?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>