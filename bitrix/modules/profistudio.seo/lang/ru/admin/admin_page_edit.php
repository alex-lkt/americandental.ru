<?
$MESS["profistudio.seo_PROFISTUDIO_SEO_MODULE_NOT_INSTALLED"] = 'Модуль "#MODULE_ID#" не установлен';
$MESS["profistudio.seo_FILEMAN_MODULE_NOT_INSTALLED"] = 'Модуль "Управление структурой" не установлен';

$MESS["profistudio.seo_ACCESS_DENIED"] = 'Доступ запрещен.';

$MESS["profistudio.seo_SITE_NOT_SELECT"] = 'Не выбран сайт';

$MESS["profistudio.seo_SITE_NOT_FOUND"] = 'Не найден сайт "#SITE_ID#"';

$MESS["profistudio.seo_TAB_1"] = "SEO-страница";
$MESS["profistudio.seo_TAB_1_TITLE"] = "Параметры SEO-страницы";
$MESS["profistudio.seo_BTN_LIST"] = "Назад в список";
$MESS["profistudio.seo_TITLE_ADD"] = "SEO-страница: добавление новой страницы";
$MESS["profistudio.seo_TITLE_EDIT"] = "SEO-страница: редактирование страницы";
$MESS["profistudio.seo_INSERT_VALUES"] = "Заполнить поля значениями из последней сохраненной SEO-страницы";
$MESS["profistudio.seo_ACTIVE"] = "Активность";
$MESS["profistudio.seo_NAME"] = "Название";
$MESS["profistudio.seo_SORT"] = "Сортировка";
$MESS["profistudio.seo_URL"] = "Адрес SEO-страницы";
$MESS["profistudio.seo_URL_HINT"] = "Относительный путь. Например: /catalog/test1/";
$MESS["profistudio.seo_URL_NEW"] = "Новый адрес SEO-страницы";
$MESS["profistudio.seo_URL_NEW_HINT"] = "Относительный путь. Например: /catalog/1/, /test1/, /test1.html";

$MESS["profistudio.seo_BREAD_CRUMB_HEAD"] = "Цепочка навигации";
$MESS["profistudio.seo_BREAD_CRUMB"] = "Заголовок пункта навигационной цепочки";
$MESS["profistudio.seo_BREAD_CRUMB_TYPE"] = "";
$MESS["profistudio.seo_BREAD_CRUMB_TYPE_N"] = "Не изменять";
$MESS["profistudio.seo_BREAD_CRUMB_TYPE_C"] = "Изменить";
$MESS["profistudio.seo_BREAD_CRUMB_TYPE_A"] = "Добавить";

$MESS["profistudio.seo_REDIRECT_ON"] = "Редирект на новый адрес";
$MESS["profistudio.seo_REDIRECT_ON_HINT"] = "301 редирект с \"Адреса SEO-страницы\" на \"Новый адрес SEO-страницы\"";
$MESS["profistudio.seo_NO_INDEX"] = "Закрыть от индексации";
$MESS["profistudio.seo_NO_INDEX_HINT"] = 'На странице добавляется тег &lt;meta name="robots" content="noindex, nofollow"/&gt;';
$MESS["profistudio.seo_CANONICAL_ON"] = "Установить канонический урл";
$MESS["profistudio.seo_CANONICAL_ON_HINT"] = 'На странице добавляется тег &lt;link rel="canonical" href="URL"/&gt;. Если заполнено поле "Новый адрес SEO-страницы", то в href="URL" подставляется форматированное значение из этого поля. Если поле "Новый адрес SEO-страницы" не заполнено, то в href="URL" подставляется форматированное значение из поля "Адрес SEO-страницы"';
$MESS["profistudio.seo_SITEMAP"] = "Включить в карту сайта (sitemap.xml)";
$MESS["profistudio.seo_SITEMAP_HINT"] = 'В карту сайта добавляется ссылка из поля "Адрес SEO-страницы". Если заполнено поле "Новый адрес SEO-страницы", то адрес ссылки меняется на форматированное значение из этого поля';
$MESS["profistudio.seo_TITLE"] = "Заголовок TITLE";
$MESS["profistudio.seo_ADDITIONAL_TITLE"] = "Заголовок H1";
$MESS["profistudio.seo_META_DESCRIPTION"] = "META_DESCRIPTION";
$MESS["profistudio.seo_META_KEYWORDS"] = "META_KEYWORDS";
$MESS["profistudio.seo_DETAIL_TEXT_HEAD"] = "Детальный текст";
$MESS["profistudio.seo_DETAIL_TEXT"] = "Детальный текст";
$MESS["profistudio.seo_DETAIL_TEXT_TYPE"] = "Тип детального текста";
$MESS["profistudio.seo_TEXT_TYPE_TEXT"] = "Текст";
$MESS["profistudio.seo_TEXT_TYPE_HTML"] = "Html";

$MESS["profistudio.seo_TAB_CUSTOM_PROPS"] = "Доп. поля";
$MESS["profistudio.seo_TAB_CUSTOM_PROPS_TITLE"] = "Дополнительные поля";
$MESS["profistudio.seo_TAB_CUSTOM_PROPS_LINK_ADD"] = "Добавить пользовательское свойство";

$MESS["profistudio.seo_TAB_HELP"] = "Помощь";

$MESS["profistudio.seo_TAB_HELP_TITLE"] = "Помощь в настройке и работе с модулем";

$MESS["profistudio.seo_TAB_HELP_URL"] = '<b>Адрес SEO-страницы</b><p>Если адрес заканчивается на символ "/", то при сохранении страницы к адресу добавляется "index.php".</p><p>Если в адресе есть параметры из поля "Игнорировать параметры в адресе", указанные в <a href="/bitrix/admin/settings.php?mid=profistudio.seo&mid_menu=1&lang=#LANGUAGE_ID#">настройках модуля "SEO-шаман"</a>, то такие параметры удаляются при сохранении. Если открыть страницу с такими параметрами, то страница будет определяться как страница без этих параметров. Например, если указать в настройках модуля в поле "Игнорировать параметры в адресе" параметр "PAGEN_1" и создать SEO-страницу, например /catalog/test1/, то при открытии страницы по адресам, например таким<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/catalog/test1/<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/catalog/test1/?PAGEN_1=1<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/catalog/test1/?PAGEN_1=2<br>эта страница будет определяться как созданная SEO-страница с адресом /catalog/test1/. Такая настройка может быть полезна для страниц с постраничной навигацией.</p>';

$MESS["profistudio.seo_TAB_HELP_URL_NEW"] = '<b>Новый адрес SEO-страницы</b><p>Необязательное поле. Задается новый адрес, по которому будет открываться созданная SEO-страница. Если не поставить галочку "Редирект на новый адрес", то страница будет открываться как SEO-страница по двум разным адресам.</p><p>При заполнении поля "Новый адрес SEO-страницы" не рекомендуется добавлять параметры из поля "Игнорировать параметры в адресе" указанных в <a href="/bitrix/admin/settings.php?mid=profistudio.seo&mid_menu=1&lang=#LANGUAGE_ID#">настройках модуля "SEO-шаман"</a>, т.к. эти параметры игнорируются и страница по данному адресу не будет определяться как SEO-страница.</p><p>Для работы с новыми адресами необходимы настройки для сайта. Создать или проверить их можно в <a href="/bitrix/admin/settings.php?mid=profistudio.seo&mid_menu=1&lang=#LANGUAGE_ID#">настройках модуля "SEO-шаман"</a>.</p>';

$MESS["profistudio.seo_TAB_HELP_REDIRECT_ON"] = '<b>Редирект на новый адрес</b><p>Если установить галочку "Редирект на новый адрес", то при открытии страницы из поля "Адрес SEO-страницы" будет происходить 301 редирект на страницу из поля "Новый адрес SEO-страницы", если это поле заполнено.</p><p>Если галочка "Редирект на новый адрес" не установлена и заполнены поля "Адрес SEO-страницы" и "Новый адрес SEO-страницы", то страница будет открываться по двум разным адресам.</p>';

$MESS["profistudio.seo_TAB_HELP_NO_INDEX"] = '<b>Закрыть от индексации</b><p>Если установлена галочка "Закрыть от индексации", то на страницах "Адрес SEO-страницы" и "Новый адрес SEO-страницы" добавляется тег &lt;meta name="robots" content="noindex, nofollow"/&gt;</p>';

$MESS["profistudio.seo_TAB_HELP_CANONICAL_ON"] = '<b>Установить канонический урл</b><p>Если установлена галочка "Установить канонический урл", то на странице добавляется тег &lt;link rel="canonical" href="URL"/&gt;.</p><p>В href="URL" подставляется форматированное значение из поля "Адрес SEO-страницы".</p><p>Если заполнено поле "Новый адрес SEO-страницы", то в href="URL" подставляется форматированное значение из этого поля, которое будет одинаковым на страницах "Адрес SEO-страницы" и "Новый адрес SEO-страницы".</p>';

$MESS["profistudio.seo_TAB_HELP_SITEMAP"] = '<b>Карта сайта</b><p>Для добавления страницы в карту сайта, нужно в <a href="/bitrix/admin/settings.php?mid=profistudio.seo&mid_menu=1&lang=#LANGUAGE_ID#">настройках модуля "SEO-шаман"</a> во вкладке "Карта сайта" установить галочку "Генерировать карту сайта" и в поле "Адрес карты сайта" установить нужные значения.</p><p>При создании или редактировании страницы при установленной галочке "Включить в карту сайта" в карту сайта добавляется ссылка из поля "Адрес SEO-страницы". Если заполнено поле "Новый адрес SEO-страницы", то адрес ссылки меняется на форматированное значение из этого поля.</p>';

$MESS["profistudio.seo_TAB_HELP_DETAIL_TEXT"] = '<b>Детальный текст</b><p>Для вывода текста из поля "Детальный текст" нужно на странице в выбранном месте разместить компонент:</p><p>&lt;?$APPLICATION->IncludeComponent(<br>&nbsp;&nbsp;&nbsp;&nbsp;"profistudio:seo.page",<br>&nbsp;&nbsp;&nbsp;&nbsp;".default",<br>&nbsp;&nbsp;&nbsp;&nbsp;array(<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"COMPONENT_TEMPLATE" => ".default",&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"FIELDS" => array(<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0 => "DETAIL_TEXT",<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;),<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"CACHE_TYPE" => "A",<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"CACHE_TIME" => "36000000"<br>&nbsp;&nbsp;&nbsp;&nbsp;),<br>&nbsp;&nbsp;&nbsp;&nbsp;false<br>);?&gt;</p>';

$MESS["profistudio.seo_TAB_HELP_CUSTOM_PROPS"] = '<b>Дополнительные поля</b><p>На вкладке "Доп. поля" можно создавать пользовательские свойства. Значения из этих свойств можно выводить на странице в разных местах. Для этого используется компонент "profistudio:seo.page". Чтобы вывести значения пользовательских свойств, необходимо обратиться к услугам программиста. Программисту нужно скопировать шаблон компонента "profistudio:seo.page" и изменить в нем вывод используя массив $arResult. В  массиве $arResult содержатся данные из полей и свойств SEO-страницы.</p>';

$MESS["profistudio.seo_TAB_HELP_CODE"] = '<b>Помощь при программировании</b><p>Есть три глобальные переменные:</p><p>global $profi_seo_page_id; // Глобальная переменная, содержит ID SEO-страницы</p><p>global $profi_seo_page_url; // Глобальная переменная, содержит старый адрес SEO-страницы</p><p>global $profi_seo_page_url_new; // Глобальная переменная, содержит новый адрес SEO-страницы. Если она установлена, то страница открыта по новому адресу.</p><p>Проверка, что это открыта SEO-страница:<br>&lt;?<br>global $profi_seo_page_id;<br>if(!empty($profi_seo_page_id))<br>&nbsp;&nbsp;&nbsp;&nbsp;echo("Это SEO-страница. ID=" . $profi_seo_page_id);<br>?&gt;</p>';

$MESS["profistudio.seo_HELP"] = '<b>Для возможности работы с новыми адресами необходимы настройки для сайта, которые можно создать и проверить в <a href="/bitrix/admin/settings.php?mid=profistudio.seo&mid_menu=1&lang=#LANGUAGE_ID#">настройках модуля "SEO-шаман"</a>.</b>';

$MESS["profistudio.seo_OPTIONS_DEMO_MAX_COUNT"] = 'Модуль работает в демо-режиме. В демо-режиме можно создать не более трех SEO-страниц.';
?>