<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();?>
<?/*<a name="call"></a>*/?>
<div class="v1rt_callback">
<?if(!empty($arResult["ERROR_MESSAGE"]))
{
	foreach($arResult["ERROR_MESSAGE"] as $v)
		ShowError($v);
}
if($arResult["OK_MESSAGE"] == true)
{
	?><script>
		document.location.href = "/en/thank-you/";
	</script><!--<p class="v1rt_callback__ok"><?=GetMessage("V1RT_OK_MESSAGE")?></p>--><?
}
?>

<form action="<?=$APPLICATION->GetCurPage()?>#call" method="POST">
<?=bitrix_sessid_post()?>
	<input type="text" name="user_name" value="<?=$arResult["AUTHOR_NAME"]?>" placeholder="Name"/>

           <input type="text" name="user_phone" value="<?=$arResult["AUTHOR_PHONE"]?>" placeholder="Phone number"/>
           <input type="text" name="user_date" value="<?=$arResult["AUTHOR_DATE"]?>" placeholder="Date and time"/>

    <?if($arParams["USE_CAPTCHA"] == "Y"):?>
        <p>
                <?/*<?=GetMessage("MFT_CAPTCHA")?><br />*/?>
                <input type="hidden" name="captcha_sid" value="<?=$arResult["capCode"]?>"/>
                <img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["capCode"]?>" width="180" height="40" alt="CAPTCHA"/><br>
                <?/*<label><?=GetMessage("MFT_CAPTCHA_CODE")?> <span>*</span></label><br />*/?>
                <input type="text" name="captcha_word" size="30" maxlength="50" value=""/>
         </p>
    <?endif;?>
		<p>
            <input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>"/>
            <input type="submit" name="submit" value="Send" class="btn btn-primary"/>
        </p>
	<p class="personal-text">I agree to the <a href="/en/user-agreement/">privacy policy</a>.</p>
</form>
</div>
