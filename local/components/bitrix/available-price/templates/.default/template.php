<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="available">
	<div class="available__servHolder">
		<div class="available__serv">
			<p class="available__servText"><?=$arResult['~BLOCK_1_TITLE']?></p>
			<p class="available__servBullet"><?=$arResult['~BLOCK_1_TEXT']?></p>
			<img class="available__servLogo" src=<?=SITE_TEMPLATE_PATH."/img/available/1.webp" ?> alt="All-on-4">
		</div>

		<div class="available__serv">
			<p class="available__servText"><?=$arResult['~BLOCK_2_TITLE']?></p>
			<p class="available__servBullet"><?=$arResult['~BLOCK_2_TEXT']?></p>
			<img class="available__servLogo" src=<?=SITE_TEMPLATE_PATH. "/img/available/1.webp" ?> alt="All-on-4">
		</div>      
	</div>

	<div class="available__cards">
		<div class="available__card">
			<img class="available__cardImg" src="<?=$arResult['BLOCK_AVL_1_IMG']?>" alt="<?=$arResult['BLOCK_AVL_1_TITLE']?>">
			<p class="available__cardTitle"><?=$arResult['~BLOCK_AVL_1_TITLE']?></p>
			<p class="available__cardPrice"><?=$arResult['~BLOCK_AVL_1_PRICE']?></p>
			<p class="available__cardNote"><?=$arResult['~BLOCK_AVL_1_TEXT']?></p>

			<div class="available__cardButton">
			  <p class="available__buttonText vf-popup-button">
			    <a href="#divForm" id="btnForm3">Записаться на прием</a>
			  </p>
			</div>
		</div>

		<div class="available__card">
			<img class="available__cardImg" src="<?=$arResult['BLOCK_AVL_2_IMG']?>" alt="<?=$arResult['BLOCK_AVL_2_TITLE']?>">
			<p class="available__cardTitle"><?=$arResult['~BLOCK_AVL_2_TITLE']?></p>
			<p class="available__cardPrice"><?=$arResult['~BLOCK_AVL_2_PRICE']?></p>
			<p class="available__cardNote"><?=$arResult['~BLOCK_AVL_2_TEXT']?></p>

			<div class="available__cardButton">
			  <p class="available__buttonText vf-popup-button">
			    <a href="#divForm" id="btnForm3">Записаться на прием</a>
			  </p>
			</div>
		</div>

		<div class="available__card">
			<img class="available__cardImg" src="<?=$arResult['BLOCK_AVL_3_IMG']?>" alt="<?=$arResult['BLOCK_AVL_3_TITLE']?>">
			<p class="available__cardTitle"><?=$arResult['~BLOCK_AVL_3_TITLE']?></p>
			<p class="available__cardPrice"><?=$arResult['~BLOCK_AVL_3_PRICE']?></p>
			<p class="available__cardNote"><?=$arResult['~BLOCK_AVL_3_TEXT']?></p>

			<div class="available__cardButton">
			  <p class="available__buttonText vf-popup-button">
			    <a href="#divForm" id="btnForm3">Записаться на прием</a>
			  </p>
			</div>
		</div> 
	</div>
</div>
