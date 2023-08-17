<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if(count($arResult["LINKED"]["ELEMENTS"]))
{
?>
	<p class="h2">Читайте также</p>
	
	<div class="row article_more">
		<?foreach($arResult["LINKED"]["ELEMENTS"] as $element):?>
			<div class="col-12 col-sm-6 col-lg-6 col-xl-3">
				<div class="article_more__block">
					<a href="<?=$element["DETAIL_PAGE_URL"];?>" class="article_more__img-link">
						<img src="<?=$element["PREVIEW_PICTURE"];?>" alt="<?=$element["NAME"];?>" title="<?=$element["NAME"];?>">
					</a>
					<div class="article_more__preview">
						<a href="<?=$element["DETAIL_PAGE_URL"];?>" class="article_more__name-link"><?=$element["NAME"];?></a>
					</div>
				</div>
			</div>
		<?endforeach;?>
    
    </div>

<?
}
?>
