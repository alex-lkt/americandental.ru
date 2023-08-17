<?
$MESS["PROFISTUDIO_SEO_TAB_BASE"] = "Основные настройки";
$MESS["PROFISTUDIO_SEO_TAB_BASE_TITLE"] = "Основные настройки SEO";
$MESS["PROFISTUDIO_SEO_PARAMS_NO_USE"] = "Игнорировать параметры в адресе (список параметров GET через запятую)";

$MESS["PROFISTUDIO_SEO_PARAMS_PAGE404"] = "Страница 404";

$MESS["PROFISTUDIO_SEO_SITE_OPTIONS_REWRITE_HELP_TITLE_N"] = '<b>Для возможности работы с новыми адресами необходимо создать настройки</b>';
$MESS["PROFISTUDIO_SEO_SITE_OPTIONS_REWRITE_HELP_TITLE_Y"] = '<b>Для возможности работы с новыми адресами созданы настройки</b>';

$MESS["PROFISTUDIO_SEO_SITE_OPTIONS_REWRITE_HELP_MESS_TITLE_N"] = '<b>При нажатии кнопки "Создать" автоматически создаются настройки.</b><br><br>';
$MESS["PROFISTUDIO_SEO_SITE_OPTIONS_REWRITE_HELP_MESS_TITLE_Y"] = '<b>Настройки созданы.</b><br><br>';

$MESS["PROFISTUDIO_SEO_SITE_OPTIONS_REWRITE_HELP_MESS_FILE"] = '<b>Проверка созданных настроек:</b><br><br>1. В корневой папке сайта должен быть файл <b>#SITE_DIR#profistudio_seo_file_rewrite.php</b><br>В этом файле устанавливается константа <b>define("PROFISTUDIO_SEO_SITE_ID", "#SITE_ID#");</b> Где #SITE_ID# это ID сайта.';
$MESS["PROFISTUDIO_SEO_SITE_OPTIONS_REWRITE_HELP_MESS_RULE"] = '2. В <a href="/bitrix/admin/urlrewrite_list.php?filter_site_id=#SITE_ID#&filter=Y&set_filter=Y&lang=#LANGUAGE_ID#">правилах обработки адресов</a> должна быть запись вида:<br>Условие: <b>#^#SITE_DIR#.*#</b> &nbsp;&nbsp; (Где <b>"#SITE_DIR#"</b> - папка сайта)<br>Компонент: <b>profistudio.seo</b><br>Файл:  <b>#SITE_DIR#profistudio_seo_file_rewrite.php</b> &nbsp;&nbsp; (Где <b>"#SITE_DIR#"</b> - папка сайта)<br>Правило: &nbsp; &nbsp;&nbsp; (Пустое значение. Не заполнять)';

$MESS["PROFISTUDIO_SEO_SITE_OPTIONS_REWRITE_HELP_FILE"] = '<br>Пример файла:<br>&lt;?php<br>define("PROFISTUDIO_SEO_SITE_ID", "#SITE_ID#");<br>include_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/profistudio.seo/include/file_rewrite.php");<br>include($_SERVER["DOCUMENT_ROOT"] . "/404.php");<br>die();';

$MESS["PROFISTUDIO_SEO_SITE_OPTIONS_REWRITE_HELP_FILE1"] = '<br>Создан файл:<br>';

$MESS["PROFISTUDIO_SEO_SITE_OPTIONS_REWRITE_CREATED"] = "<b>Настройки созданы</b><br>Пересоздать настройки для работы с новыми адресами";
$MESS["PROFISTUDIO_SEO_SITE_OPTIONS_REWRITE_AUTO_TITLE"] = "<b>Настройки не созданы</b><br>Автоматически создать настройки для работы с новыми адресами";
$MESS["PROFISTUDIO_SEO_SITE_OPTIONS_REWRITE_GENERATE_BTN"] = "Создать";
$MESS["PROFISTUDIO_SEO_SITE_OPTIONS_REWRITE_REGENERATE_BTN"] = "Пересоздать";
$MESS["PROFISTUDIO_SEO_SITE_OPTIONS_REWRITE_DELETE_BTN"] = "Удалить";

$MESS["PROFISTUDIO_SEO_TAB_SITEMAP"] = "Карта сайта";
$MESS["PROFISTUDIO_SEO_TAB_SITEMAP_TITLE"] = "Генерация карты сайта";
$MESS["PROFISTUDIO_SEO_PARAMS_PROTO"] = "Протокол";
$MESS["PROFISTUDIO_SEO_PARAMS_SITEMAP_GENERATE"] = "Генерировать карту сайта";
$MESS["PROFISTUDIO_SEO_PARAMS_SITEMAP_NAME"] = "Файл карты сайта";
$MESS["PROFISTUDIO_SEO_PARAMS_SITEMAP_ADDR"] = "Адрес карты сайта";

$MESS["PROFISTUDIO_SEO_TAB_CANONICAL"] = "Каноникал";
$MESS["PROFISTUDIO_SEO_TAB_CANONICAL_TITLE"] = "Генерация канонического адреса (тег canonical)";
$MESS["PROFISTUDIO_SEO_PARAMS_CANONICAL_ADDR"] = "<b>Канонический URL</b><br>Может быть относительным (например: /)<br>Может быть абсолютным (например:  http://mysite.ru/)";
?>