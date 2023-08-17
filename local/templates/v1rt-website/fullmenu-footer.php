<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>
<section class="page-menu bg-color__1">
    <div class="container">
        <div class="page-menu__wrapper">
            <h2 class="link-inner__title text-h2__style-1">Услуги <span style="color: #0257b2;">клиники</span></h2>

            <div class="link-inner">
                <ul class="link-inner__list">
                    <li><a href="/all-on-4/" class="link-inner__link" target="_blank"><h4>All on 4</h4></a></li>
                    <li><a href="/all-on-6/" class="link-inner__link" target="_blank"><h4>All on 6</h4></a></li>
                    <li><a href="/zuby-za-1-den/" class="link-inner__link" target="_blank"><h4>Зубы за 1 день</h4></a></li>
                    <li><a href="/skulovaya-implantaciya-zubov/" class="link-inner__link" target="_blank"><h4>Скуловая имплантация</h4></a></li>
                    <li><a href="/implantaciya-zubov/" class="link-inner__link" target="_blank"><h4>Имплантация</h4></a></li>
                </ul>

                <ul class="link-inner__list">
                    <li><a href="/sinus-lifting/" class="link-inner__link" target="_blank"><h4>Синус-лифтинг</h4></a></li>
                    <li><a href="/ortodontiya/" class="link-inner__link" target="_blank"><h4>Ортодонтия</h4></a></li>
                    <li><a href="/detskaya-stomatologiya/" class="link-inner__link" target="_blank"><h4>Детская стоматология</h4></a></li>
                    <li><a href="/periodontology/" class="link-inner__link" target="_blank"><h4>Пародонтология</h4></a></li>
                    <li><a href="/travmy-zubov/" class="link-inner__link" target="_blank"><h4>Травмы</h4></a></li>
                </ul>

                <ul class="link-inner__list">
                    <li><a href="/khirurgiya-zubov/" class="link-inner__link" target="_blank"><h4>Хирургия</h4></a></li>
                    <li><a href="/protezirovanie-zubov/" class="link-inner__link" target="_blank"><h4>Протезирование</h4></a></li>
                    <li><a href="/endodontiya/" class="link-inner__link" target="_blank"><h4>Эндодонтия</h4></a></li>
                    <li><a href="/restavratsii-zubov/" class="link-inner__link" target="_blank"><h4>Реставрации</h4></a></li>
                    <li><a href="/viniry/" class="link-inner__link" target="_blank"><h4>Виниры</h4></a></li>
                </ul>

                <ul class="link-inner__list">
                    <li><a href="/kostnaya-plastika/" class="link-inner__link" target="_blank"><h4>Костная пластика</h4></a></li>
                    <li><a href="/otbelivanie-brite-smile/" class="link-inner__link" target="_blank"><h4>Отбеливание Brite Smile</h4></a></li>
                    <li><a href="/protezirovanie-keramicheskimi-koronkami/" class="link-inner__link" target="_blank"><h4>Гигиена, профилактика и чистка зубов</h4></a></li>
                    <li><a href="/ortognaticheskaya-khirurgiya/" class="link-inner__link" target="_blank"><h4>Ортогнатическая хирургия</h4></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="page-menu">
    <div class="container">
        <div class="page-menu__wrapper page-block__article-list">
            <h2 class="link-inner__title text-h2__style-1">Полезная <span style="color: #0257b2;">информация</span></h2>

            <div class="link-inner">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:news.list", 
                    "articles-list", 
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
                        "COMPONENT_TEMPLATE" => "articles-list",
                        "COMPOSITE_FRAME_MODE" => "A",
                        "COMPOSITE_FRAME_TYPE" => "AUTO",
                        "DETAIL_URL" => "",
                        "DISPLAY_BOTTOM_PAGER" => "Y",
                        "DISPLAY_DATE" => "Y",
                        "DISPLAY_NAME" => "Y",
                        "DISPLAY_PICTURE" => "Y",
                        "DISPLAY_PREVIEW_TEXT" => "Y",
                        "DISPLAY_TOP_PAGER" => "N",
                        "FIELD_CODE" => array(
                            0 => "",
                            1 => "",
                        ),
                        "FILTER_NAME" => "",
                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                        "IBLOCK_ID" => "3",
                        "IBLOCK_TYPE" => "-",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                        "INCLUDE_SUBSECTIONS" => "Y",
                        "MESSAGE_404" => "",
                        "NEWS_COUNT" => "100",
                        "PAGER_BASE_LINK_ENABLE" => "N",
                        "PAGER_DESC_NUMBERING" => "N",
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                        "PAGER_SHOW_ALL" => "N",
                        "PAGER_SHOW_ALWAYS" => "N",
                        "PAGER_TEMPLATE" => "modern",
                        "PAGER_TITLE" => "Новости",
                        "PARENT_SECTION" => "",
                        "PARENT_SECTION_CODE" => "",
                        "PREVIEW_TRUNCATE_LEN" => "",
                        "PROPERTY_CODE" => array(
                            0 => "",
                            1 => "",
                        ),
                        "SET_BROWSER_TITLE" => "N",
                        "SET_LAST_MODIFIED" => "N",
                        "SET_META_DESCRIPTION" => "Y",
                        "SET_META_KEYWORDS" => "N",
                        "SET_STATUS_404" => "N",
                        "SET_TITLE" => "N",
                        "SHOW_404" => "N",
                        "SORT_BY1" => "SORT",
                        "SORT_BY2" => "ACTIVE_FROM",
                        "SORT_ORDER1" => "ASC",
                        "SORT_ORDER2" => "DESC",
                        "STRICT_SECTION_CHECK" => "N"
                    ),
                    false
                );?>
           </div>
        </div>
    </div>
</section>