<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();?>

<div class="index__form" id="index__form">
		<div class="container">
			<?if(!empty($arResult["ERROR_MESSAGE"]))
			{
				foreach($arResult["ERROR_MESSAGE"] as $v)
					ShowError($v);
			}
			if(strlen($arResult["OK_MESSAGE"]) > 0)
			{
				?><p class="text-success"><?=$arResult["OK_MESSAGE"]?></p><?
			}
			?>
			<form action="#index__form" method="POST">
				<?=bitrix_sessid_post()?>
				<p class="index__form-h1">Напишите нам</p>
				<div class="row">				
					<div class="col-12 col-lg-3">
						<input type="text" name="user_name" placeholder="Ваше имя" id="form_name" value="<?=$arResult["AUTHOR_NAME"]?>">
					</div>
					<div class="col-12 col-lg-3">
						<?foreach($arParams["NEW_EXT_FIELDS"] as $i => $ext_field):?>		
							<input type="text" name="custom[<?$i?>]" value="<?=$arResult["custom_$i"]?>" placeholder="<?=$ext_field;?>">
						<?endforeach;?>
					</div>
					<div class="col-12 col-lg-3">
						<input type="text" name="MESSAGE" placeholder="Сообщение" id="form_message" value="<?=$arResult["MESSAGE"]?>">
					</div>
					<div class="col-12 col-lg-3">
						<input type="submit" name="submit" value="<?=GetMessage("MFT_SUBMIT")?>" class="agree-button">				
					</div>
					<div class="col">
						<input type="checkbox" checked="checked" class="agree-check"> Нажимая кнопку "Отправить" я принимаю условия <a href="/soglashenie/">пользовательского соглашения</a>
						
					</div>
				</div>
			</form>
		</div>
	</div>