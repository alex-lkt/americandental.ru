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


<div class="feedback feedback-allon4" itemscope itemtype="https://schema.org/Review">

<?//echo "<pre>"; print_r($arResult['ITEMS']); echo "</pre>"?>
	
	<?foreach($arResult["ITEMS"] as $arItem):?>
	
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>

	<div class="feedbackBlock" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<meta itemprop="datePublished" content="<?=ConvertDateTime($arItem['TIMESTAMP_X'], "YYYY-MM-DD HH:MI:SS", "ru"); ?>">

		<div class="feedbackTitle" itemprop="author" itemscope itemtype="https://schema.org/Person">
			<div class="feedbackNumber" itemprop="name"><?=$arItem["NAME"]?></div>
			<div class="feedbackDate"><?=$arItem["PROPERTIES"]['DATE_REVIEWS']['VALUE']?></div>
		</div>

		<div class="feedbackSubtitle">
			<div class="feedbackStars">
				<svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M62 25.2H39.1L32 3L24.9 25.2H2L20.5 38.9L13.5 61L32 47.3L50.5 61L43.4 38.8L62 25.2Z" fill="#FFCE31"/>
				</svg>
				<svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M62 25.2H39.1L32 3L24.9 25.2H2L20.5 38.9L13.5 61L32 47.3L50.5 61L43.4 38.8L62 25.2Z" fill="#FFCE31"/>
				</svg>
				<svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M62 25.2H39.1L32 3L24.9 25.2H2L20.5 38.9L13.5 61L32 47.3L50.5 61L43.4 38.8L62 25.2Z" fill="#FFCE31"/>
				</svg>
				<svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M62 25.2H39.1L32 3L24.9 25.2H2L20.5 38.9L13.5 61L32 47.3L50.5 61L43.4 38.8L62 25.2Z" fill="#FFCE31"/>
				</svg>
				<svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M62 25.2H39.1L32 3L24.9 25.2H2L20.5 38.9L13.5 61L32 47.3L50.5 61L43.4 38.8L62 25.2Z" fill="#FFCE31"/>
				</svg>
			</div>
			<div class="feedbackSource" itemprop="name">Источник: 
				<a itemprop="url" href="<?=$arItem["PROPERTIES"]['SOURCE']['VALUE']?>" target="_blank" rel="nofollow">
					<span><?=$arItem["PROPERTIES"]['SOURCE_TITLE']['VALUE']?></span>
				</a>
			</div>
		</div>

		<div itemprop="itemReviewed" itemscope itemtype="https://schema.org/MedicalOrganization">
			<meta itemprop="name" content="Отзыв на протезирование all-on-4">
			<meta itemprop="telephone" content="8-495-235-5550">
			<link itemprop="url" href="https://soyfer.ru/">
			<meta itemprop="email" content="info@soyfer.ru">
            <meta itemprop="image" content="https://soyfer.ru/local/templates/v1rt-soyfer_copy/img/laborat0024.jpg">
			<meta itemprop="medicalSpecialty" content="стоматология">
			<meta itemprop="slogan" content="Новые зубы и улыбка за один день">
			<meta itemprop="description" content="Протезирование и имплантация зубов по технологии all-on-4">
			<meta itemprop="description" content="100% гарантия качества и сервиса">
			<p itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
				<meta itemprop="addressLocality" content="Москва">
				<meta itemprop="streetAddress" content="Ленинский проспект, 68/10">
			</p>
		</div>

		<div itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
			<meta itemprop="worstRating" content="1">
			<meta itemprop="ratingValue" content="5">
			<meta itemprop="bestRating" content="5"/>
		</div>

		<div class="feedbackInfo" itemprop="reviewBody"><?=$arItem['PREVIEW_TEXT']?></div>
		<div class="feedbackHide">Показать полностью</div>

	</div>
	<?endforeach;?>
</div>