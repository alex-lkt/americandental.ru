<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>
<div class="contacts__form">
<?if(!empty($arResult["ERROR_MESSAGE"]))
{
	foreach($arResult["ERROR_MESSAGE"] as $v)
		ShowError($v);
}
if(strlen($arResult["OK_MESSAGE"]) > 0)
{
	?><div class="mf-ok-text"><?=$arResult["OK_MESSAGE"]?></div><?
}
?>

<form action="<?=POST_FORM_ACTION_URI?>" method="POST">
<?=bitrix_sessid_post()?>
	<label>
		<?=GetMessage("MFT_NAME")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])):?><span class="req">*</span><?endif?>
		<br>
		<input type="text" name="user_name" value="<?=$arResult["AUTHOR_NAME"]?>">
	</label>
	<label>
		<?=GetMessage("MFT_EMAIL")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("EMAIL", $arParams["REQUIRED_FIELDS"])):?><span class="req">*</span><?endif?>
		<br>
		<input type="text" name="user_email" value="<?=$arResult["AUTHOR_EMAIL"]?>">
	</label>

	<label>
		<?=GetMessage("MFT_MESSAGE")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("MESSAGE", $arParams["REQUIRED_FIELDS"])):?><span class="req">*</span><?endif?>
		<br>
		<textarea name="MESSAGE" rows="5" cols="40"><?=$arResult["MESSAGE"]?></textarea>
	</label>
	<label>
	<div class="col">
		<input type="checkbox" checked="checked" class="agree-check"> Нажимая кнопку "Отправить" я принимаю условия <a href="/soglashenie/">пользовательского соглашения</a>
	</div>
	</label>
	<?if($arParams["USE_CAPTCHA"] == "Y"):?>
	<label>
		<?=GetMessage("MFT_CAPTCHA")?><br>
		<input type="hidden" name="captcha_sid" value="<?=$arResult["capCode"]?>">
		<img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["capCode"]?>" width="180" height="40" alt="CAPTCHA">
		<br>
		<?=GetMessage("MFT_CAPTCHA_CODE")?><span class="req">*</span>
		<br>
		<input type="text" name="captcha_word" size="30" maxlength="50" value="">
	</label>
	<?endif;?>
	<input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
	<input type="submit" name="submit" value="<?=GetMessage("MFT_SUBMIT")?>" class="btn btn-primary">
</form>
</div>