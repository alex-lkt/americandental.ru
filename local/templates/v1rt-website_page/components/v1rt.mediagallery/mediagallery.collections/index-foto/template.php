<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?>

<p class="h2">Наши фотографии</p>

<div class="index_gallery">
    <?foreach($arResult["IMAGES"] as $img):?>
		<a href="<?=$img["URL"]["FILE"]?>" data-fancybox="gallery">
			<img src="<?=$img["URL"]["IMAGE"]?>" alt="Наши фотографии" title="Наши фотографии">
		</a>
	<?endforeach;?>
</div>


<div class="index_gallery__all">
	<a href="/fotogalereya/" class="btn btn-primary">Больше фото</a>
</div>