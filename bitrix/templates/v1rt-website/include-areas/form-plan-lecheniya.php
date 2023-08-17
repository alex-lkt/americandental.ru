<?
/*
	$send = false;
	$errorText = "";
	$name = "";
	$tel = "";
	$email = "";
	$city = "";
	$snimok = "";
	if(strlen($_POST["planform_send"]))
	{
		$name = trim($_POST["planform_name"]);
		$tel = trim($_POST["planform_tel"]);
		$email = trim($_POST["planform_email"]);
		$city = trim($_POST["planform_city"]);
		$snimok = strlen(trim($_POST["planform_net"]))?"Снимка нет":"";
		
		if(!strlen($name))
		{
			$errorText .= "Укажите ФИО<br>";
		}
		if(!strlen($tel))
		{
			$errorText .= "Укажите Телефон<br>";
		}
		if(!strlen($email))
		{
			$errorText .= "Укажите E-mail<br>";
		}
		if(!strlen($city))
		{
			$errorText .= "Укажите Город<br>";
		}
		
		if(!strlen($errorText))
		{	
			$attach = "false";
			foreach ($_FILES as $file)
			{
				if(!empty($file['tmp_name']))
				{
					$attach = \CFile::SaveFile($file, "main");
				}
			}
			if($attach === false)
			{
				CEvent::SendImmediate("FEEDBACK_FILE",SITE_ID,array("NAME"=>$name,"TEL"=>$tel,"EMAIL"=>$email,"CITY"=>$city,"SNIMOK"=>$snimok),"N",11); 
			}
			else
			{
				CEvent::SendImmediate("FEEDBACK_FILE",SITE_ID,array("NAME"=>$name,"TEL"=>$tel,"EMAIL"=>$email,"CITY"=>$city,"SNIMOK"=>$snimok),"N",11,[$attach]); 
				\CFile::Delete($attach);
			}
			$send = true;	
		}
	?>
		<script>
			$(document).ready(function() {
				$.fancybox.open({
					src  : '#planform'
					
				});
				
			});
		</script>
	<?
	}

	*/
?>
<div style="display:none;" id="planform">
			<div class="js-planform">
			<div class="hdr">Заказать план лечения</div>
			<p>Форма обратной связи временно недоступна.</p>
	<p>Пожалуйста, звоните:  +7 (495) 796-43-34</p>
			<?/*
				<?if($send):?>
					<p class="text-success">Ваша заявка отправлена, мы свяжемся с Вами в ближайшее время.</p>
				<?else:?>
						<?if($errorText):?>
							<p class="text-danger"><? echo $errorText;?></p>
						<?endif;?>
						<p class="description">Заполните обязательные поля и прикрепите ОПТГ снимок для получения персонального плана лечения</p>
						<form method="post" enctype="multipart/form-data" action="#plan-form">							
							<label>
								<input type="text" placeholder="ФИО*" required name="planform_name" class="js-planform-name" value="<?=$name;?>">
							</label>
							<label>
								<input type="text" placeholder="Ваш телефон*" required name="planform_tel" class="js-planform-tel" value="<?=$tel;?>">
							</label>
							<label>
								<input type="text" placeholder="Ваш e-mail*" required name="planform_email" class="js-planform-email" value="<?=$email;?>">
							</label>
							<label>
								<input type="text" placeholder="Ваш город*" required name="planform_city" class="js-planform-city" value="<?=$city;?>">
							</label>
							<label class="planform__label-file">
								<i class="fa fa-paperclip" aria-hidden="true"></i> <span class="js-planform-file-no">Прикрепить снимок</span><span class="js-planform-file-yes">Файл прикреплен</span>
								<input type="file" value="" name="planform_zakrep" id="js-planform-file">
							</label>							

							<label><input type="checkbox" name="planform_net"> У меня нет снимка</a></label>
							<div class="agreement">Заполнив данную форму, даю согласие на обработку персональных данных в соответствии с законом N 152-ФЗ РФ «О персональных данных» от 27.07.2006</div>
							<div>
								<input type="submit" value="Заказать план лечения" name="planform_send" class="btn btn-primary">
							</div>
						</form>
				<?endif;?>
				*/?>
			</div>
	</div>