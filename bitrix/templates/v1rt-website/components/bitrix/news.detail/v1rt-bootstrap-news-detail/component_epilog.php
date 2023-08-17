<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if(count($arResult["LINKED"]["ELEMENTS"]))
{
?>
<div class="container">
	<p class="h2">Читайте также</p>
	
	<div class="row v1rt-news-detail__more-row">
		<?foreach($arResult["LINKED"]["ELEMENTS"] as $element):?>
			<div class="col-12 col-sm-6 col-lg-6 col-xl-3">
				<div class="v1rt-news-detail__more-block">
					<a href="<?=$element["DETAIL_PAGE_URL"];?>" class="v1rt-news-detail__more-img-link">
						<img src="<?=$element["PREVIEW_PICTURE"];?>" alt="<?=$element["NAME"];?>" title="<?=$element["NAME"];?>">
					</a>
					<div class="v1rt-news-detail__more-preview">
						<a href="<?=$element["DETAIL_PAGE_URL"];?>" class="v1rt-news-detail__more-name-link"><?=$element["NAME"];?></a>
					</div>
				</div>
			</div>
		<?endforeach;?>
    
    </div>
</div>
<?
}
?>

