<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("canonical", "https://americandental.ru/");
require($_SERVER["DOCUMENT_ROOT"] . SITE_TEMPLATE_PATH . "/fullwidth-header.php");
$APPLICATION->SetPageProperty("title", "Стоматология в Москве для взрослых и детей | Стоматологические услуги American Dental. Стоматология москва.");
$APPLICATION->SetPageProperty("description", "Стоматология в Москве. Полный комплекс стоматологических услуг для взрослых и детей в клинике American Dental.");
$APPLICATION->SetPageProperty("not_show_nav_chain", "Y");
$APPLICATION->SetTitle("Стоматология в Москве - полный комплекс услуг");
?>

    <meta property="og:title"
          content="Стоматология в Москве для взрослых и детей | Стоматологические услуги American Dental. стоматология москва,  взрослая стоматология москва,стоматология отзывы москва, клиника стоматология москва, стоматология поликлиника москва, стоматология хирургия москва, круглосуточная стоматология в москве."/>
    <meta property="og:description"
          content="Стоматология в Москве. Полный комплекс стоматологических услуг для взрослых и детей в клинике American Dental.стоматология москва, детская стоматология москва, взрослая стоматология москва,стоматология отзывы москва, клиника стоматология москва, стоматология поликлиника москва, стоматология хирургия москва, круглосуточная стоматология в москве."/>
    <meta property="og:image"
          content="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/Marilyn_Monroe_-_publicity.JPG/210px-Marilyn_Monroe_-_publicity.JPG"/>
    <meta property="og:type" content="profile"/>
    <meta property="og:url" content="https://ru.wikipedia.org/wiki/Мэрилин_Монро"/>
    <!--TOP SECTION-->

    <section style="background-color: #f9f9f9;margin-top: 20px;">
        <div class="container">
            <div class="row top-uslugi">
                <div class="col-12 col-md-12">
                    <div class="topdiv">
                        <h2 class="h2mob_top"
                            style="color: #444; text-align: left; font-size: 32px; font-weight: 400; text-transform:uppercase; margin-bottom:30px">
                            Стоматология в Москве под ключ с гарантией</h2>
                        <p class="h2mob_top"
                           style="color: #F00; text-align: left; font-size: 38px; font-weight: 400;margin-bottom:30px;margin-top: -20px;">
                            Клиника American Dental</p>
                    </div>
                    <div class="button button_blue btn-page zapic" style="margin-bottom: 20px;">
                        <a style="padding: 10px 20px;" href="#divForm" class="btn btn-primary">Записаться на прием</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--END TOP SECTION-->

    <?php $APPLICATION->IncludeFile("/include/menu-oglavlenie.php", [], ["MODE" => "html",]); ?>

    <!--CENA SECTION-->
    <div class="white_sect" id="q1" style="padding-bottom: 20px;margin-bottom: -20px; margin-top:40px">
        <div class="container">
            <h2 class="h2mob ofor" style="margin-bottom:20px;">Цены на услуги стоматологии</h2>
            <div class="row">
                <div class="col-12 col-md-9">
                    <div class="table-responsive">
                        <p style=" font-size:18px; font-weight:600;">Стоматологическая хирургия</p>
                        <table class="table table-bordered">
                            <tbody>

                            <tr>
                                <td>
                                    Удаление зуба (хирургическое)
                                </td>
                                <td style="text-align:center;">
                                    от 2 500 руб. до 9 000 руб.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Удаление зуба сложное (ретинированный зуб)
                                </td>
                                <td style="text-align:center;">
                                    от 9 000 руб.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Остеопластика
                                </td>
                                <td style="text-align:center;">
                                    от 20 000 руб.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Синуслифтинг (закрытый односторонний)
                                </td>
                                <td style="text-align:center;">
                                    от 20 000 руб.
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Синуслифтинг (открытый односторонний)
                                </td>
                                <td style="text-align:center;">
                                    от 30 000 руб.
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>


                    <div class="table-responsive">
                        <p style=" font-size:18px; font-weight:600;">Установка виниров</p>
                        <table class="table table-bordered">
                            <tbody>

                            <tr>
                                <td>
                                    Виниры из прессованной керамики E-max
                                </td>
                                <td style="text-align:center;">
                                    от 23 900 руб.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Виниры из диоксида циркония CEREC
                                </td>
                                <td style="text-align:center;">
                                    от 35 000 руб.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Ультратонкие виниры - Люминиры
                                </td>
                                <td style="text-align:center;">
                                    от 65 000 руб.
                                </td>
                            </tr>


                            </tbody>
                        </table>
                    </div>


                    <div class="table-responsive">
                        <p style=" font-size:18px; font-weight:600;">Протезирование керамическими коронками</p>
                        <table class="table table-bordered">
                            <tbody>

                            <tr>
                                <td>
                                    Металлокерамическая коронка (кобальт-хром)
                                </td>
                                <td style="text-align:center;">
                                    от 15 000 руб.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Коронка из прессованной керамики E-max
                                </td>
                                <td style="text-align:center;">
                                    от 25 000 руб.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Безметалловая коронка на основе диоксида циркония
                                </td>
                                <td style="text-align:center;">
                                    от 35 000 руб.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Безметалловая коронка на основе диоксида циркония
                                </td>
                                <td style="text-align:center;">
                                    от 35 000 руб.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Безметалловая коронка Cerec
                                </td>
                                <td style="text-align:center;">
                                    от 65 000 руб.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Бюгельный протез на замках (1 челюсть)
                                </td>
                                <td style="text-align:center;">
                                    от 60 000 руб.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Временная коронка лабораторная
                                </td>
                                <td style="text-align:center;">
                                    от 5 000 руб.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Временная коронка прямым методом
                                </td>
                                <td style="text-align:center;">
                                    от 3 500 руб.
                                </td>
                            <tr>
                                <td>
                                    Керамическая вкладка
                                </td>
                                <td style="text-align:center;">
                                    от 20 000 руб.
                                </td>

                            <tr>
                                <td>
                                    Постоянный полный съёмный протез (1 челюсть)
                                </td>
                                <td style="text-align:center;">
                                    от 28 000 руб.
                                </td>

                            <tr>
                                <td>
                                    Цельнолитая культевая вкладка кобальт-хром
                                </td>
                                <td style="text-align:center;">
                                    от 4 500 до 6 900 руб.
                                </td>

                            <tr>
                                <td>
                                    Частично-съёмный протез
                                </td>
                                <td style="text-align:center;">
                                    от 26 000 руб.
                                </td>

                            </tr>


                            </tbody>
                        </table>
                    </div>


                    <div class="table-responsive">
                        <p style=" font-size:18px; font-weight:600;">Имплантация</p>
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <td>
                                    Установка импланта Konmet
                                </td>
                                <td style="text-align:center;">
                                     от 17 990 руб.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/articles/implanty-nobel-biocare/">Установка импланта Nobel Biocare</a>
                                    (США-Швеция)
                                </td>
                                <td style="text-align:center;">
                                     от 42 000 руб.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="https://americandental.ru/all-on-6/">All-on-4</a> Konmet (Russia) + протез
                                </td>
                                <td style="text-align:center;">
                                     от 140 000 руб.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="https://americandental.ru/all-on-4/">All-on-4 Nobel</a> + протез
                                </td>
                                <td style="text-align:center;">
                                     от 300 000 руб.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="https://americandental.ru/all-on-6/">All-on-6</a> Konmet (Russia) + протез
                                </td>
                                <td style="text-align:center;">
                                     от 210 000 руб.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/articles/implanty-nobel-biocare/">All-on-6 Nobel Biocare</a> + протез
                                </td>
                                <td style="text-align:center;">
                                     от 400 000 руб.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Несъемное протезирование на 4 имплантах Cortex (Израиль)
                                </td>
                                <td style="text-align:center;">
                                    от 315 000 руб.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Несъемное протезирование на 4 титановых штифтах Noris Medical (Израиль)
                                </td>
                                <td style="text-align:center;">
                                    от 465 000 руб.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/all-on-6/">Имплантация All-on-6 на имплантах Nobel Biocare (Швеция)</a>
                                </td>
                                <td style="text-align:center;">
                                    от 670 000 руб.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Установка мини импланта
                                </td>
                                <td style="text-align:center;">
                                    от 10 000 руб.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Операция по установке винтового искусственного корня
                                </td>
                                <td style="text-align:center;">
                                    от 30 000 руб.
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Операция по установке формирователя десны
                                </td>
                                <td style="text-align:center;">
                                    от 2 000 руб.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/sinus-lifting/"> Синус-лифтинг закрытый</a> (без стоимости материалов)
                                </td>
                                <td style="text-align:center;">
                                    от 20 000 руб.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Синус-лифтинг открытый (без стоимости материалов)
                                </td>
                                <td style="text-align:center;">
                                    от 30 000 руб.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Пластика альвеолярного гребня (метод расщепления)
                                </td>
                                <td style="text-align:center;">
                                    от 20 000 руб.
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Установка заглушки на имплант
                                </td>
                                <td style="text-align:center;">
                                    от 1 500 руб.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Удаление одного импланта
                                </td>
                                <td style="text-align:center;">
                                    от 5 000 руб.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Удаление одного искусственного корня, установленного в клинике
                                </td>
                                <td style="text-align:center;">
                                    Бесплатно
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Изготовление стериолитографической модели челюсти на 3D принтере
                                </td>
                                <td style="text-align:center;">
                                    от 25 000 руб.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Изготовление хирургического шаблона на 3D принтере
                                </td>
                                <td style="text-align:center;">
                                    от 15 000 руб.
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Имплант Noris Medical (Израиль)
                                </td>
                                <td style="text-align:center;">
                                    от 7 500 руб.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Имплант OSSTEM (Корея)
                                </td>
                                <td style="text-align:center;">
                                    от 9 500 руб.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Имплант Nobel Biocare Conical Connection (Швеция)
                                </td>
                                <td style="text-align:center;">
                                    от 16 000 руб.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/articles/implanty-nobel-biocare/">Имплант Nobel Biocare Active
                                        (Швеция)</a>
                                </td>
                                <td style="text-align:center;">
                                    от 19 000 руб.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Первичная консультация <a href="/soyfer-vladimir-valerevich-otzyvy/">стоматолога -
                                        имплантолога</a>
                                </td>
                                <td style="text-align:center;">
                                    Бесплатно
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-12 col-md-3">
                    <div style="background-color: #FFFFFF;width:100%;margin-left: auto; margin-right: auto; border:1px solid #c9c9c9;border-radius:5px;position: sticky;top: 0;min-height: 2em;">
                        <p style="font-weight: 500;font-size: 20px;margin-top:15px; text-align:center; margin-bottom:35px;">
                            Записаться на прием или получить консультацию стоматолога</p>
                        <div class="button button_blue btn-page zapic" style="margin:auto;"><a
                                    style="padding: 10px 20px;font-size: 18px;" href="#divForm" class="btn btn-primary">Записаться</a>
                        </div>
                        <p style="margin-top: 30px;margin-bottom: 0;font-size: 14px; text-align:center">Или
                            позвоните</p>
                        <p style="text-align:center"><a
                                    style="font-size:20px;text-align: center;color:#0257b2; font-weight:300;text-decoration: none;"
                                    href="tel:+74957745550">+7(495) 774-55-50</a></p>
                        <p style="margin-top:-15px;margin-bottom: 5px;font-size: 12px; text-align:center;color: #c30;">
                            Стоматология в Москве с гарантией</p>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!--END CENA SECTION-->

    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Product",
            "name": "Стоматология в Москве для взрослых и детей | Стоматологические услуги American Dental",
            "url": "https://americandental.ru/",
            "image": "/local/templates/v1rt-website/img/fon11-01-min.png",
            "description": "Стоматология в Москве. Полный комплекс стоматологических услуг для взрослых и детей в клинике American Dental. Записаться на прием +7 (495) 774-55-50",
            "aggregateRating": {
                "@type": "AggregateRating",
                "ratingValue": 4.5,
                "reviewCount": 24
            },
            "offers": {
                "@type": "AggregateOffer",
                "highPrice": 465000,
                "lowPrice": 1500,
                "priceCurrency": "RUB",
                "offerCount": 15
            }
        }
    </script>
    <!--STOMAT USLUGI SECTION-->
    <div class="white_sect" style="margin-top:40px" id="q2">
        <div class="container">
            <h2 class="h2mob ofor">Популярные услуги</h2>
            <p style="margin-top:10px;font-size: 20px;margin-bottom: 40px;padding: 10px;background-color: #ebf2f6;text-align: center;">
                Полный комплекс услуг стоматологии для взрослых и детей<br>От консультации до сложных хирургических
                операций в рамках одной клиники.</p>
            <div class="row" style="margin-bottom:20px;margin-top: 20px; font-size:14px;text-transform: uppercase;">
                <div class="col-12 col-md-6">
                    <ul>

                        <li style="margin-bottom:20px;"><a href="/implantaciya-zubov/">Имплантация</a></li>
                        <li style="margin-bottom:20px;"><a href="/protezirovanie-zubov/">Протезирование </a></li>
                        <li style="margin-bottom:20px;"><a href="/viniry/">Установка виниров </a></li>
                        <li><a href="/detskaya-stomatologiya/">Детская стоматология</a></li>
                    </ul>
                </div>

                <div class="col-12 col-md-6">
                    <ul>
                        <li style="margin-bottom:20px;"><a href="/endodontiya/">Эндодонтия </a></li>
                        <li style="margin-bottom:20px;"><a href="/otbelivanie-brite-smile/">Отбеливание</a></li>
                        <li style="margin-bottom:20px;"><a href="/restavratsii-zubov/">Реставрация зубов</a></li>
                        <li><a href="/ortodontiya/">Ортодонтия</a></li>
                    </ul>
                </div>
            </div>


            <div class="row">


            </div>
        </div>
    </div>
    <!--END STOMAT USLUGI SECTION-->


    <!--POCHEMU SECTION-->
    <div class="white_sect" style="margin-top:40px">
        <div class="container">
            <h2 class="h2mob ofor">Почему обращаются к нам</h2>
            <p style="margin-top:10px;font-size: 20px;margin-bottom: 40px;padding: 10px;background-color: #ebf2f6;text-align: center;">
                Стоимость работы наших стоматологов ниже средней планки в Москве.<br>Результат лечения всегда
                превосходен.<br> Ответственный подход отличает нас от множества других клиник</p>
            <div>
                <div class="row pochem" style="margin-top: 20px;margin-bottom: 30px;">

                    <div class="col-12 col-md-12 size_100">

                        <div style="display: flex;flex-direction: row;padding: 10px;background-color: #f6f6f6;margin-bottom: 25px;">
                            <div style=" color:#F75D19; font-size:36px; font-weight:600;margin-right: 20px;margin-top: -20px;">
                                &#10004;
                            </div>
                            <div style="color: #888; font-size: 17px; font-weight: 300; text-transform: none;margin-bottom: 10px;">
                                Многопрофильность - от консультации до сложных хирургических операций в рамках нашей
                                клиники. Стоматология в Москве с гарантией
                            </div>
                        </div>

                        <div style="display: flex;flex-direction: row;padding: 10px;background-color: #f6f6f6;margin-bottom: 25px;">
                            <div style=" color:#F75D19; font-size:36px; font-weight:600;margin-right: 20px;margin-top: -20px;">
                                &#10004;
                            </div>
                            <div style="color: #888; font-size: 17px; font-weight: 300; text-transform: none;margin-bottom: 10px;">
                                Собственная зуботехническая лаборатория
                            </div>
                        </div>


                        <div style="display: flex;flex-direction: row;padding: 10px;background-color: #f6f6f6;margin-bottom: 25px;">
                            <div style=" color:#F75D19; font-size:36px; font-weight:600;margin-right: 20px;margin-top: -20px;">
                                &#10004;
                            </div>
                            <div style="color: #888; font-size: 17px; font-weight: 300; text-transform: none;margin-bottom: 10px;">
                                Гарантия на качество услуг стоматологии вне временных рамок
                            </div>
                        </div>

                        <div style="display: flex;flex-direction: row;padding: 10px;background-color: #f6f6f6;margin-bottom: 25px;">
                            <div style=" color:#F75D19; font-size:36px; font-weight:600;margin-right: 20px;margin-top: -20px;">
                                &#10004;
                            </div>
                            <div style="color: #888; font-size: 17px; font-weight: 300; text-transform: none;margin-bottom: 10px;">
                                Применяем инновационное оборудование стоматологии в Москве, в том числе и 3D-томограф
                                KAVO OP-300 для диагностики.<br> Поэтому мы производим диагностику, чтобы в дальнейшем
                                сделать работу безошибочно
                            </div>
                        </div>

                        <div style="display: flex;flex-direction: row;padding: 10px;background-color: #f6f6f6;margin-bottom: 25px;">
                            <div style=" color:#F75D19; font-size:36px; font-weight:600;margin-right: 20px;margin-top: -20px;">
                                &#10004;
                            </div>
                            <div style="color: #888; font-size: 17px; font-weight: 300; text-transform: none;margin-bottom: 10px;">
                                Никогда не экономим на материалах, закупая расходники в Москве, мы выбираем лучшее — <a
                                        href="/articles/implanty-straumann/">имплантаты от Straumann Group</a>.<br>
                                Экономия - риск на здоровье пациентов, который мы считаем недопустимым.<br> Пациент
                                приходит за решением конкретной проблемы, а врач несет ответственность за результат
                                работы
                            </div>
                        </div>

                        <div style="display: flex;flex-direction: row;padding: 10px;background-color: #f6f6f6;margin-bottom: 25px;">
                            <div style=" color:#F75D19; font-size:36px; font-weight:600;margin-right: 20px;margin-top: -20px;">
                                &#10004;
                            </div>
                            <div style="color: #888; font-size: 17px; font-weight: 300; text-transform: none;margin-bottom: 10px;">
                                Для <a href="/implantaciya-zubov/">протезирования и имплантации по системам all-on-4,
                                    all-on-6</a> мы закупаем качественные оборудование и материалы.<br> Соблюдаем все
                                мировые и российские стоматологические стандарты.<br> Все наши доктора проходили курсы
                                повышения квалификации в странах зарубежья
                            </div>
                        </div>

                        <div style="display: flex;flex-direction: row;padding: 10px;background-color: #f6f6f6;margin-bottom: 25px;">
                            <div style=" color:#F75D19; font-size:36px; font-weight:600;margin-right: 20px;margin-top: -20px;">
                                &#10004;
                            </div>
                            <div style="color: #888; font-size: 17px; font-weight: 300; text-transform: none;margin-bottom: 10px;">
                                Применение последних методик протезирования, лечения и восстановления утраченных
                                зубов.<br> Наш Центр был одним из первых стоматологических клиник в Москве, который
                                внедрил <a href="/all-on-4/">технологии All-on-4</a> и All-on-6 — шанс вернуть все зубы
                                за 1 день
                            </div>
                        </div>

                        <div style="display: flex;flex-direction: row;padding: 10px;background-color: #f6f6f6;margin-bottom: 25px;">
                            <div style=" color:#F75D19; font-size:36px; font-weight:600;margin-right: 20px;margin-top: -20px;">
                                &#10004;
                            </div>
                            <div style="color: #888; font-size: 17px; font-weight: 300; text-transform: none;margin-bottom: 10px;">
                                Наш коллектив работает как единая команда: начиная от ассистентов и зубных техников,
                                заканчивая докторами и руководством.<br> Члены семей наших сотрудников проходят
                                стоматологическое лечение только в нашей клинике, так как уверены в результате
                            </div>
                        </div>

                        <div style="display: flex;flex-direction: row;padding: 10px;background-color: #f6f6f6;margin-bottom: 25px;">
                            <div style=" color:#F75D19; font-size:36px; font-weight:600;margin-right: 20px;margin-top: -20px;">
                                &#10004;
                            </div>
                            <div style="color: #888; font-size: 17px; font-weight: 300; text-transform: none;margin-bottom: 10px;">
                                Мы никогда не отказываем при столкновении с трудностями.<br> Опыт и неустанная работа
                                над мастерством дают возможность нам помогать тем, от кого отказались другие
                                врачи-стоматологи
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--END POCHEMU SECTION-->

    <!--LICNO OTVECHAY SECTION-->
    <div class="white_sect" style="padding-bottom: 10px;margin-top:40px;">
        <div class="container">
            <div class="row" style="border:2px dashed #03F;border-radius:10px;">
                <h3 class="h2mob ofor" style="margin-bottom:20px; font-size:24px; text-align:center; margin-top:20px;">
                    Лично отвечаю за результаты лечения наших пациентов</h3>
                <div class="col-12 col-md-7">
                    <p style="font-weight:500">Владимир Сойфер - основатель клиники, хирург-имплантолог, 30 лет
                        клинической практики</p>
                    <p>Основным направлением деятельности доктора является имплантация зубов по методам All-on-4,
                        All-on-6, реконструктивная хирургия. Первые операции на скуловой кости были проведены нами в
                        1995 году. Первые работы по угловой имплантации, далее получившими название All-on-4 по Нобелю,
                        были проведены нашими хирургами-имплантологами в 1994 году.</p>
                    <p>Практикующий хирург по методике all on 4, All-on-6, гибридной имплантации и <a
                                href="/skulovaya-implantaciya-zubov/">скуловой имплантации</a> (двухсторонняя скуловая
                        имплантация) с 2003 года.</p>
                    <p>Первый хирург, который поставил импланты по <a href="/all-on-4/">методике "всё на 4"</a> в Москве
                        в 2004 году. Первый хирург, который начал ставить скуловые импланты в Москве.</p>
                </div>
                <div class="col-12 col-md-5">
                    <div style="text-align:center">
                        <img class="lazyload" alt="Хирург имплантолог Сойфер Владимир" src="/images/lazyload.jpg"
                             data-src="/local/templates/v1rt-website/img/dr-soyfer222.jpg" title="Хирург имплантолог"
                             style="width: 280px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--END LICNO OTVECHAY SECTION-->

    <!--ZAPISATSYA NA PRIEM SECTION-->
    <div style="padding-top: 0px;margin-bottom: 40px; margin-top:60px;">
        <div class="container">
            <div class="row align-items-center"
                 style="background-color: #FFFFFF;width:70%;margin-left: auto; margin-right: auto;box-shadow: 0px 0px 15px 6px #ccc; ">
                <div class="col-12 order-md-2 col-md-6">
                    <img class="lazyload" alt="Стоматология в Москве" src="/images/lazyload.jpg"
                         data-src="/local/templates/v1rt-website/img/ulybka_semyi-033.jpg" style="margin-bottom: 0;">
                </div>
                <div class="col-12 order-md-1 col-md-6">
                    <div class="">
                        <p style="text-transform: uppercase;font-weight: 500;font-size: 18px;margin-top:-25px;">
                            Записаться на бесплатный прием</p>
                        <div class="button button_blue btn-page zapic"><a style="padding: 10px 20px;font-size: 18px;"
                                                                          href="#divForm" class="btn btn-primary">Записаться</a>
                        </div>
                        <p style="margin-top: 20px;margin-bottom: 0;font-size: 14px;">Или можете позвонить по
                            телефону</p>
                        <a style="font-size:22px;text-align: center;color:#0257b2; font-weight:300;text-decoration: none;"
                           href="tel:+74957745550">+7(495) 774-55-50</a>
                        <p style="margin-top:15px;margin-bottom: 5px;font-size: 12px;color: #c30;">Стоматология в Москве
                            с гарантией</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--ZAPISATSYA NA PRIEM-->

    <!--PRIMERY SECTION-->
    <div class="white_sect" style="margin-top:40px">
        <div class="container">
            <h2 class="h2mob ofor">Наши пациенты "До" и "После" протезирования зубов</h2>

            <p style="margin-top:40px;">Пациент 1</p>
            <div class="row" style=" margin-top:30px;">
                <div class="col-12 col-md-3">
                    <div style="text-align:center">
                        <img class="lazyload" alt="Пациент 1 All-on-4 имплантация" src="/images/lazyload.jpg"
                             data-src="/local/templates/v1rt-website/img/primer-all-on-4-6-skull_001.jpg">
                    </div>
                </div>

                <div class="col-12 col-md-3">
                    <div style="text-align:center">
                        <img class="lazyload" alt="Пациент 1 All-on-4" src="/images/lazyload.jpg"
                             data-src="/local/templates/v1rt-website/img/primer-all-on-4-6-skull_002.jpg">
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div style="text-align:center">
                        <img class="lazyload" alt="Пациент 1 Allon4 имплантация" src="/images/lazyload.jpg"
                             data-src="/local/templates/v1rt-website/img/primer-all-on-4-6-skull_003.jpg">
                    </div>
                </div>

                <div class="col-12 col-md-3">
                    <div style="text-align:center">
                        <img class="lazyload" alt="Пациент 1 имплантации Все на четырех" src="/images/lazyload.jpg"
                             data-src="/local/templates/v1rt-website/img/primer-all-on-4-6-skull_004.jpg">
                    </div>
                </div>
            </div>

            <p style="margin-top:40px;">Пациент 2</p>
            <div class="row" style=" margin-top:30px;">
                <div class="col-12 col-md-3">
                    <div style="text-align:center">
                        <img class="lazyload" alt="Пациент 2 All-on-4 имплантация" src="/images/lazyload.jpg"
                             data-src="/local/templates/v1rt-website/img/primer-all-on-4_101.jpg">
                    </div>
                </div>

                <div class="col-12 col-md-3">
                    <div style="text-align:center">
                        <img class="lazyload" alt="Пациент 2 All-on-4" src="/images/lazyload.jpg"
                             data-src="/local/templates/v1rt-website/img/primer-all-on-4_102.jpg">
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div style="text-align:center">
                        <img class="lazyload" alt="Пациент 2 Allon4 имплантация" src="/images/lazyload.jpg"
                             data-src="/local/templates/v1rt-website/img/primer-all-on-4_103.jpg">
                    </div>
                </div>

                <div class="col-12 col-md-3">
                    <div style="text-align:center">
                        <img class="lazyload" alt="Пациент 2 имплантации Все на четырех" src="/images/lazyload.jpg"
                             data-src="/local/templates/v1rt-website/img/primer-all-on-4_104.jpg">
                    </div>
                </div>
            </div>

            <p style="margin-top:40px;">Пациент 3</p>
            <div class="row" style=" margin-top:30px;">
                <div class="col-12 col-md-3">
                    <div style="text-align:center">
                        <img class="lazyload" alt="Пациент 3-1 скуловая имплантация" src="/images/lazyload.jpg"
                             data-src="/local/templates/v1rt-website/img/primer-skul_201.jpg">
                    </div>
                </div>

                <div class="col-12 col-md-3">
                    <div style="text-align:center">
                        <img class="lazyload" alt="Пациент 3-2 скуловая имплантация" src="/images/lazyload.jpg"
                             data-src="/local/templates/v1rt-website/img/primer-skul_202.jpg">
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div style="text-align:center">
                        <img class="lazyload" alt="Пациент 3-3 скуловая имплантация" src="/images/lazyload.jpg"
                             data-src="/local/templates/v1rt-website/img/primer-skul_203.jpg">
                    </div>
                </div>

                <div class="col-12 col-md-3">
                    <div style="text-align:center">
                        <img class="lazyload" alt="Пациент 3-4 скуловая имплантация" src="/images/lazyload.jpg"
                             data-src="/local/templates/v1rt-website/img/primer-skul_204.jpg">
                    </div>
                </div>
            </div>

            <p style="margin-top:40px;">Пациент 4</p>
            <div class="row" style=" margin-top:30px;">
                <div class="col-12 col-md-3">
                    <div style="text-align:center">
                        <img class="lazyload" alt="Пациент 4 All-on-4 имплантация" src="/images/lazyload.jpg"
                             data-src="/local/templates/v1rt-website/img/primer-all-on-4-skul_301.jpg">
                    </div>
                </div>

                <div class="col-12 col-md-3">
                    <div style="text-align:center">
                        <img class="lazyload" alt="Пациент 4 All-on-4" src="/images/lazyload.jpg"
                             data-src="/local/templates/v1rt-website/img/primer-all-on-4-skul_302.jpg">
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div style="text-align:center">
                        <img class="lazyload" alt="Пациент 4 Allon4 имплантация" src="/images/lazyload.jpg"
                             data-src="/local/templates/v1rt-website/img/primer-all-on-4-skul_303.jpg">
                    </div>
                </div>

                <div class="col-12 col-md-3">
                    <div style="text-align:center">
                        <img class="lazyload" alt="Пациент 4 имплантации Все на четырех" src="/images/lazyload.jpg"
                             data-src="/local/templates/v1rt-website/img/primer-all-on-4-skul_304.jpg">
                    </div>
                </div>
            </div>

            <p style="margin-top:40px;">Пациент 5</p>
            <div class="row" style=" margin-top:30px;">
                <div class="col-12 col-md-3">
                    <div style="text-align:center">
                        <img class="lazyload" alt="Пациент 5 All-on-6 имплантация" src="/images/lazyload.jpg"
                             data-src="/local/templates/v1rt-website/img/primer-all-on-6-skul_401.jpg">
                    </div>
                </div>

                <div class="col-12 col-md-3">
                    <div style="text-align:center">
                        <img class="lazyload" alt="Пациент 5 All-on-6" src="/images/lazyload.jpg"
                             data-src="/local/templates/v1rt-website/img/primer-all-on-6-skul_402.jpg">
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div style="text-align:center">
                        <img class="lazyload" alt="Пациент 5 Allon6 имплантация" src="/images/lazyload.jpg"
                             data-src="/local/templates/v1rt-website/img/primer-all-on-6-skul_403.jpg">
                    </div>
                </div>

                <div class="col-12 col-md-3">
                    <div style="text-align:center">
                        <img class="lazyload" alt="Пациент 5 имплантации Все на шести" src="/images/lazyload.jpg"
                             data-src="/local/templates/v1rt-website/img/primer-all-on-6-skul_404.jpg">
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--END PRIMERY SECTION-->

    <!--VIDEO OTZYVY S RAZMETKOY-->
    <div class="" style="background-color:#fff;margin-top:20px; padding-bottom:20px;">
        <div class="container">
            <h2 class="h2mob ofor">Видео-отзывы пациентов</h2>
            <div class="row" style="margin-top: 10px;">
                <div class="col-12 col-md-6" style="margin-top: 25px;">

                    <div class="youtube" itemscope itemtype="http://schema.org/VideoObject">
                        <div class="video-schema-meta">
                            <meta itemprop="description"
                                  content="All-on-4 - имплантация и протезирование зубов за 1 день от 120 000 руб. в клинике доктора Сойфера"/>
                            <meta itemprop="duration" content="PT1M30S"/>
                            <meta itemprop="director" content="Американ Дентал"/>
                            <link itemprop="url" href="https://www.youtube.com/embed/Tadh6iNgdZw"/>
                            <link itemprop="thumbnailUrl" href="https://i.ytimg.com/vi/Tadh6iNgdZw/0.jpg"/>
                            <link itemprop="embedUrl" href="https://www.youtube.com/embed/Tadh6iNgdZw"/>
                            <meta itemprop="name"
                                  content="All-on-4 - имплантация и протезирование зубов за 1 день от 120 000 руб."/>
                            <meta itemprop="uploadDate" content="2022-04-22 21:33:32"/>
                            <meta itemprop="isFamilyFriendly" content="true"/>
                            <span style=" display:none;" itemprop="thumbnail" itemscope
                                  itemtype="http://schema.org/ImageObject">
<img class="lazyload" itemprop="contentUrl" src="/images/lazyload.jpg"
     data-src="https://img.youtube.com/vi/Tadh6iNgdZw/0.jpg" alt="All-on-4 - имплантация"/>
<meta itemprop="width" content="1387"/>
<meta itemprop="height" content="581"/>
</span>
                        </div>
                    </div>


                    <div class="lazyframe" data-src="https://www.youtube.com/embed/Tadh6iNgdZw" data-vendor="youtube"
                         data-thumbnail="https://americandental.ru/local/templates/v1rt-website/img/yt1-01.jpg">
                    </div>


                </div>
                <div class="col-12 col-md-6" style="margin-top: 25px;">

                    <div class="youtube" itemscope itemtype="http://schema.org/VideoObject">
                        <div class="video-schema-meta">
                            <meta itemprop="description"
                                  content="Отзыв пациента об имплантации зубов All-on-4 в клинике American Dental 20.04.2022"/>
                            <meta itemprop="duration" content="PT1M30S"/>
                            <meta itemprop="director" content="Американ Дентал"/>
                            <link itemprop="url" href="https://www.youtube.com/embed/_SRCg1z2ObA"/>
                            <link itemprop="thumbnailUrl" href="https://i.ytimg.com/vi/_SRCg1z2ObA/0.jpg"/>
                            <link itemprop="embedUrl" href="https://www.youtube.com/embed/_SRCg1z2ObA"/>
                            <meta itemprop="name"
                                  content="Отзыв пациента об имплантации All-on-4 в клинике American Dental 20.04.2022"/>
                            <meta itemprop="uploadDate" content="2022-04-22 21:33:32"/>
                            <meta itemprop="isFamilyFriendly" content="true"/>
                            <span style=" display:none;" itemprop="thumbnail" itemscope
                                  itemtype="http://schema.org/ImageObject">
<img class="lazyload" itemprop="contentUrl" src="/images/lazyload.jpg"
     data-src="https://img.youtube.com/vi/_SRCg1z2ObA/0.jpg" alt="All-on-4 - имплантация зубов"/>
<meta itemprop="width" content="560"/>
<meta itemprop="height" content="315"/>
</span>
                        </div>
                    </div>

                    <div class="lazyframe" data-src="https://www.youtube.com/embed/_SRCg1z2ObA" data-vendor="youtube"
                         data-thumbnail="https://americandental.ru/local/templates/v1rt-website/img/yt2-01.jpg">
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!--END VIDEO OTZYVY S RAZMETKOY-->

    <!--OTZYV SECTION-->
    <div class="white_sect" id="q3" style="margin-top:40px">
        <div class="container">
            <h3 class="h2mob ofor" style="margin-bottom:40px;">Отзывы пациентов</h3>
            <div class="row" style="margin-top:40px">
                <div class="col-12 col-md-9">
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
                <div class="col-12 col-md-3">
                    <div style="background-color: #ebf2f6;width:100%;margin-left: auto; margin-right: auto; border:1px solid #c9c9c9;border-radius:5px;position: sticky;top: 0;min-height: 2em;">
                        <p style="font-weight: 500;font-size: 21px;margin-top:15px; text-align:center; margin-bottom:35px;color: #c30;">
                            Получите бесплатное обследование уже сейчас</p>
                        <div class="button button_blue btn-page zapic" style="margin:auto;"><a
                                    style="padding: 10px 20px;font-size: 18px;" href="#divForm" class="btn btn-primary">Записаться</a>
                        </div>
                        <p style="margin-top: 30px;margin-bottom: 0;font-size: 14px; text-align:center">Или
                            позвоните</p>
                        <p style="text-align:center"><a
                                    style="font-size:20px;text-align: center;color:#0257b2; font-weight:300;text-decoration: none;"
                                    href="tel:+74957745550">+7(495) 774-55-50</a></p>
                        <p style="margin-top:-15px;margin-bottom: 5px;font-size: 12px; text-align:center;color: #c30;">
                            Стоматология в Москве с гарантией</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--END OTZYV SECTION-->

    <!--FIXCENA SECTION-->
    <div class="white_sect" style="margin-top:40px">
        <div class="container">
            <h3 class="h2mob ofor">Мы гарантируем честное ценообразование</h3>
            <p style="margin-top:10px;">Мы удерживаем приемлемые цены на услуги стоматологии в Москве и регулярно
                проводим акции, предлагаем скидки на услуги</p>
            <div style="margin-bottom: 20px; margin-top:20px">
                <ul>
                    <li>Отсутствие конечной цены в Договоре - это риск для пациентов: поскольку предсказать рост валют и
                        перебои с поставками материалов, которые часто приобретают клиники, невозможно.
                    </li>
                    <li>Отсутствие окончательной цены может повлечь за собой увеличение стоимости до 40%.</li>
                    <li>Мы обозначаем стоимость в Договоре, поэтому Вы можете не сомневаться, что после окончания
                        лечения не увидите в счете цену, которая в разы превышает оговоренную изначально.
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-12 col-md-12">
                    <p>Наша клиника выполняет централизованные закупки партий систем для имплантации и расходных
                        материалов.</p>
                    <p><a href="/zubotehnicheskaya-laboratoria/">Собственная зуботехническая лаборатория в Москве</a>
                        позволяет нам исключить наценку на поставке ортопедических конструкций и совершать <a
                                href="/protezirovanie-zubov/">протезирование по приемлемой цене</a>.</p>
                    <div class="beware">
                        <p>
                            Используем лучшие имплантаты от <span style=" font-weight:600"><a
                                        href="/articles/implanty-straumann/" target="_blank">Straumann Group</a></span>
                            и <span style=" font-weight:600"><a href="/articles/implanty-nobel-biocare/"
                                                                target="_blank">Nobel Biocare</a></span>, проверенные
                            годами практики.
                        </p>
                    </div>

                    <div><p style="margin-top:20px;">Наша клиника работает по международным стандартам комплексной
                            диагностики: сбор анамнеза, комплексные анализы, визуальный осмотр полости рта, анализ
                            компьютерной томографии, фотометрия лица пациента и снятие параметров прикуса. И только
                            после этого составляется план лечения.</p></div>

                </div>
            </div>
        </div>
    </div>
    <!--END FIXCENA SECTION-->

    <!--OTVETSTVENNOST SECTION-->
    <div class="white_sect" style="margin-top:40px">
        <div class="container">
            <h3 class="h2mob ofor">Полная ответственность и гарантия</h3>
            <div class="row garant" style="margin-top:50px">
                <div class="col-12 col-md-3 size_50 interval" style="text-align: center;">
                    <div class="stom-uslug-item1">
                        <img class="lazyload" alt="Гарантия на имплантацию зубов в American Dental"
                             src="/images/lazyload.jpg" data-src="/local/templates/v1rt-website/img/guarantee.png"
                             title="Мы даем гарантию на хирургию">
                        <p style="text-align: center; margin-top:10px;">
                            Мы даем гарантию на хирургию, в том числе пожизненную гарантию на системы на 4 имплантах и
                            <a href="/all-on-6/">на 6 имплантах</a>
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-3 size_50 interval" style="text-align: center;">
                    <div class="stom-uslug-item1">
                        <img class="lazyload" alt="Честные отношения с клиентами в American Dental"
                             src="/images/lazyload.jpg" data-src="/local/templates/v1rt-website/img/handshake.png"
                             title="честные отношения с клиентами">
                        <p style="text-align: center;margin-top:10px;">
                            Мы дорожим своей репутацией и строим честные отношения с клиентами
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-3 size_50 interval" style="text-align: center;">
                    <div class="stom-uslug-item1">
                        <img class="lazyload" alt="Фиксированная цена на имплантацию зубов в American Dental"
                             src="/images/lazyload.jpg" data-src="/local/templates/v1rt-website/img/tag.png"
                             title="Фиксированная цена">
                        <p style="text-align: center;margin-top:10px;">
                            Фиксированная <a href="/price/">цена</a> имплантации зубов и на постоянный протез
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-3 size_50" style="text-align: center;">
                    <div class="stom-uslug-item1">
                        <img class="lazyload" alt="Беспроцентная рассрочка в American Dental" src="/images/lazyload.jpg"
                             data-src="/local/templates/v1rt-website/img/discount.png"
                             title="Вы можете воспользоваться беспроцентной рассрочкой">
                        <p style="text-align: center;margin-top:10px;">
                            Вы можете воспользоваться беспроцентной рассрочкой без скрытых платежей
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--END OTVETSTVENNOST SECTION-->


    <!--VRACHI SECTION-->
    <div class="white_sect" id="q5" style="margin-top:40px">
        <div class="container">
            <h4 class="h2mob ofor">Наши врачи</h4>
            <p style="margin-top:0px;">Профессионализм наших врачей подтверждают многочисленные дипломы, сертификаты и
                отзывы благодарных людей.<br>Все врачи проходят регулярное обучение всем новым технологиям, которые
                появляются, как в России, так и за рубежом.</p>
            <div class="row" style="margin-top:40px;">
                <div class="col-12 col-md-3 zapis_blue otstup10mob">
                    <div style="display: table;margin: auto;box-shadow: 0 0px 20px rgba(196, 196, 196, 0.8);">
                        <div class="vrach-img" style="text-align: center;">
                            <img class="lazyload" alt="Владимир Сойфер Хирург имплантолог" src="/images/lazyload.jpg"
                                 data-src="/images/dr-soyfer_1.jpg" style="width:300px;">
                        </div>
                        <div style="text-align: center;font-weight: 500;margin-top: 10px;margin-bottom: 10px;">
                            <span style="font-size:20px">Владимир Сойфер</span><br>
                            <span style="">Хирург-имплантолог</span><br>
                            <span style="">30 лет клинической практики</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 zapis_blue1">
                    <div style="display: table;margin: auto;box-shadow: 0 0px 20px rgba(196, 196, 196, 0.8);">
                        <div class="vrach-img" style="text-align: center;">
                            <img class="lazyload" src="/images/lazyload.jpg"
                                 data-src="/local/templates/v1rt-website/img/doc0.jpg" alt="Джованни Фаверо Имплантолог"
                                 style="width:300px;">
                        </div>
                        <div style="text-align: center;font-weight: 500;margin-top: 10px;margin-bottom: 10px;">
                            <span style=" font-size:20px">Джованни Фаверо</span><br>
                            <span style="">Ведущий стоматолог-терапевт</span><br>
                            <span style="">50 лет клинической практики</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 zapis_blue1">
                    <div style="display: table;margin: auto;box-shadow: 0 0px 20px rgba(196, 196, 196, 0.8);">
                        <div class="vrach-img" style="text-align: center;">
                            <img class="lazyload" alt="Стоматолог-терапевт Александр Антипов" src="/images/lazyload.jpg"
                                 data-src="/local/templates/v1rt-website/img/doc1.jpg" style="width:300px;">
                        </div>
                        <div style="text-align: center;font-weight: 500;margin-top: 10px;margin-bottom: 10px;">
                            <span style="font-size:20px;">Александр Антипов</span><br>
                            <span style="">Стоматолог-ортопед</span><br>
                            <span style="">15 лет клинической практики</span>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-3" style="margin-top: 10px;">
                    <div style="background-color: #FFFFFF;width:100%;margin-left: auto; margin-right: auto; border:1px solid #c9c9c9;border-radius:5px;position: sticky;top: 0;min-height: 2em;">
                        <p style="font-weight: 500;font-size: 20px;margin-top:15px; text-align:center; margin-bottom:35px;">
                            Записаться на прием или получить консультацию стоматолога</p>
                        <div class="button button_blue btn-page zapic" style="margin:auto;"><a
                                    style="padding: 10px 20px;font-size: 18px;" href="#divForm" class="btn btn-primary">Записаться</a>
                        </div>
                        <p style="margin-top: 30px;margin-bottom: 0;font-size: 14px; text-align:center">Или
                            позвоните</p>
                        <p style="text-align:center"><a
                                    style="font-size:20px;text-align: center;color:#0257b2; font-weight:300;text-decoration: none;"
                                    href="tel:+74957745550">+7(495) 774-55-50</a></p>
                        <p style="margin-top:-15px;margin-bottom: 5px;font-size: 12px; text-align:center;color: #c30;">
                            Стоматология в Москве с гарантией</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--END VRACHI SECTION-->

    <div class="gray_sect" style="margin-top:40px; padding-top:40px;">
        <div class="container">
            <h4 class="h2mob ofor">Дипломы, сертификаты</h4>

            <div class="row" style="margin-top:40px;">
                <div class="col-12 col-md-12">

                    <? $APPLICATION->IncludeComponent(
                        "star:owlcarousel",
                        "owl1",
                        array(
                            "AUTO" => "true",
                            "COMPOSITE_FRAME_MODE" => "A",
                            "COMPOSITE_FRAME_TYPE" => "AUTO",
                            "CONTROLS" => "true",
                            "COUNT_SLIDES" => "4",
                            "DATA_TYPE" => "FOLDER",
                            "FOLDER" => "/owlslide",
                            "JQUERY" => "Y",
                            "LOOP" => "true",
                            "MARGIN" => "20",
                            "PAGER" => "true",
                            "PAUSE" => "5",
                            "COMPONENT_TEMPLATE" => "owl1",
                            "LINK" => "N",
                            "NEW_WINDOW" => "N",
                            "IBLOCK_TYPE" => "photo",
                            "IBLOCK_ID" => "2",
                            "COUNT" => "5",
                            "IMAGE" => "PREVIEW",
                            "PROPERTY_CODE" => "DOLZHNOST",
                            "SORT_BY1" => "SORT",
                            "SORT_ORDER1" => "DESC"
                        ),
                        false
                    ); ?>
                </div>
            </div>
        </div>
    </div>

    <!--KONTAKT SECTION-->
    <div class="white_sect" style="margin-top:40px">
        <div class="container">
            <h4 class="h2mob ofor">Наши контакты</h4>
            <div class="row" style="margin-bottom: 20px;margin-top: 40px;">
                <div class="col-12 order-md-1 col-md-6">
                    <p style="font-size: 20px; font-weight: 400; text-align: center; margin-bottom: 0;">
                        Адрес:
                        <br><span style="font-size: 17px; font-weight: 300; text-align: center;">
                      г. Москва, Ломоносовский проспект, д. 25 корпус 5<br>г. Москва, ул.Кастанаевская, д.43 к.2 
                  </span></p>
                    <p style="font-size: 20px; font-weight: 400; text-align: center; margin-bottom: 0;">
                        Режим работы:
                        <br>
                        <span style="font-size: 17px; font-weight: 300; text-align: center;">
                      Пн-Вс: c 09.00 до 21.00
                  </span></p>

                </div>
                <div class="col-12 order-md-2 col-md-6">
                    <p style="font-size: 20px; font-weight: 400; text-align: center; margin-bottom: 0;">
                        Телефон:
                        <br>
                        <span style="font-size: 17px; font-weight: 300; text-align: center;">
                   <a href="tel:+74957745550">+7 (495) 774-55-50</a>
                    </span>
                    </p>

                </div>
            </div>
            <div style="margin-bottom: 20px;">
                <script defer
                        src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aea81ca7e0416ec27ec2bf8e84dc37bc9de34b5c515120f8f9daf353c31b4c68a&amp;width=100%25&amp;height=450&amp;lang=ru_RU&amp;scroll=true"></script>
            </div>
        </div>
    </div>
    <!--END KONTAKT SECTION-->
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>