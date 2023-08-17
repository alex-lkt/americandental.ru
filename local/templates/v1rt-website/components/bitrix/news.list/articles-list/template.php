<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<?
$count_arr = count($arResult["ITEMS"]);
$count_block = 4;
?>

	<ul class="link-inner__list">
	<?
		$j = 1;
		
		foreach( $arResult["ITEMS"] as $arItem):
			?>
				<li><a href="<?echo $arItem["DETAIL_PAGE_URL"]?>" class="link-inner__link" target="_blank"><h5><?echo $arItem["NAME"]?></h5></a></li>
			<?
			if ( $j >= (ceil($count_arr / $count_block)) ) :  
			?>
	</ul>
	<ul class="link-inner__list">  
			<?
				$j = 0;
			endif;
			$j++;    
		endforeach;
	?>
	</ul>





