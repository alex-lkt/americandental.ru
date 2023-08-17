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

<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();?>
<div class="v1rt-form-feedback" id="form_feedback">
<?if(!empty($arResult["ERROR_MESSAGE"]))
{
	foreach($arResult["ERROR_MESSAGE"] as $v)
		ShowError($v);
}
if(strlen($arResult["OK_MESSAGE"]) > 0)
{
	?><p class='text-success'><?=GetMessage("MF_OK_MESSAGE")?></p><?
}
?>

<form action="<?=$APPLICATION->GetCurPage()?>#form_feedback" method="POST">
<?=bitrix_sessid_post()?>
	<div class="row">
		<div class="col-12 col-sm-4">
			<label><?=GetMessage("MFT_NAME")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])):?> <span class="text-danger">*</span><?endif?></label>
			 <input type="text" name="user_name" value="<?=$arResult["AUTHOR_NAME"]?>"/>
		</div>
		<div class="col-12 col-sm-4">
			<label><?=GetMessage("MFT_TEL")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("TEL", $arParams["REQUIRED_FIELDS"])):?> <span class="text-danger">*</span><?endif?></label>
			  <input type="text" name="user_tel" value="<?=$arResult["AUTHOR_TEL"]?>"/>
		</div>
		<div class="col-12 col-sm-4">
			<label><?=GetMessage("MFT_EMAIL")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("EMAIL", $arParams["REQUIRED_FIELDS"])):?> <span class="text-danger">*</span><?endif?></label>
			  <input type="text" name="user_email" value="<?=$arResult["AUTHOR_EMAIL"]?>"/>
		</div>
		<div class="col-12">
			<label><?=GetMessage("MFT_MESSAGE")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("MESSAGE", $arParams["REQUIRED_FIELDS"])):?><span class="text-danger">*</span><?endif?></label>
			 <textarea name="MESSAGE" rows="5" cols="40"><?=($arResult["MESSAGE"] == "" ? $arParams["SERVICE_MESSAGE"] : $arResult["MESSAGE"])?></textarea>
		</div>
		<?if($arParams["USE_CAPTCHA"] == "Y"):?>
		<div class="col-12">
			<input type="hidden" name="captcha_sid" value="<?=$arResult["capCode"]?>"/>
			<img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["capCode"]?>" width="180" height="40" alt="CAPTCHA" class="captcha"/>
		</div>
		<div class="col-12">
			<label><?=GetMessage("MFT_CAPTCHA_CODE")?> <span class="text-danger">*</span></label>
			<input type="text" name="captcha_word" size="30" maxlength="50" value=""/>
		</div>
		<?endif;?>
		<div class="col-12">			
			<input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>"/>
			<p><input type="checkbox" checked="" class="agree-check"> Нажимая кнопку "Отправить", я принимаю условия <a href="/soglashenie/">пользовательского соглашения</a></p>
			<input type="submit" name="submit" value="Отправить" class="agree-button btn btn-primary"/>
		</div>
	</div>
</form>
</div>