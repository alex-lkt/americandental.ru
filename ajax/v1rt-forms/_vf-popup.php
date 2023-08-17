<?
$name = htmlspecialchars($_POST["vf-popup__name"]);
$tel = htmlspecialchars($_POST["vf-popup__tel"]);
$message = htmlspecialchars($_POST["vf-popup__message"]);

if(!strlen($name) || !strlen($tel))
{
	die("ERROR 001");
}

require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");

$formData = "<b>Имя:</b> $name<br>";
$formData .= "<b>Телефон:</b> $tel<br>";
$formData .= "<b>Сообщение:</b> $message<br>";
$formData .= "<b>Страница-источник:</b> ".$_SERVER['HTTP_REFERER'];

$arFields = [
	"EMAIL_TO"=>"admin-info@americandental.ru",
	"FORM_DATA" => $formData
];

CEvent::SendImmediate("V1RT_FORMS",SITE_ID,$arFields);

die("OK");