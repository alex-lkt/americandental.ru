<?
Class CNigesCookiesAcceptPublic
{
	public static function OnEpilog()
	{
		global $APPLICATION;

		if (COption::GetOptionString(cookiesaccept_MODULE_ID, "ACTIVE", 'N', SITE_ID) == 'Y'
			&& !$_REQUEST['ajax']
			&& !defined('PUBLIC_AJAX_MODE')
			&& $APPLICATION->buffer_content
		) {
			$APPLICATION->IncludeComponent(
			    str_replace('.', ':', cookiesaccept_MODULE_ID),
			    "",
			    Array(),
			    false,
			    array("HIDE_ICONS" => "Y")
			);
		}
	}
}
?>