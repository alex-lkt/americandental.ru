<?php
	global $APPLICATION;
	$module_id = "star.totop";

	if (strpos($_SERVER['REQUEST_URI'], 'bitrix/') === FALSE && php_sapi_name() != "cli" && COption::GetOptionString($module_id, "ENABLED") == "Y"):
		IncludeModuleLangFile(__FILE__);

		$device = COption::GetOptionString($module_id, "DEVICE");

		if ($device != "all") {
			require_once(dirname(__FILE__)."/lib/Mobile_Detect.php");

			$detect = new Mobile_Detect();
			$isMobile = $detect->isMobile();
			if (($device == "desktop" && $isMobile) || ($device == "mobile" && !$isMobile)) return FALSE;
		}

		$type = COption::GetOptionString($module_id, "TYPE");
		$fontSize = COption::GetOptionString($module_id, "FONT_SIZE");
		$text = COption::GetOptionString($module_id, "TEXT");
		if (empty($text)) $text = GetMessage("STAR_TOTOP_DEFAULT_TEXT");
		$textColor = COption::GetOptionString($module_id, "TEXT_COLOR");
		$backgroundColor = COption::GetOptionString($module_id, "BACKGROUND_COLOR");
		$opacity = COption::GetOptionString($module_id, "OPACITY");
		$speed = COption::GetOptionString($module_id, "SPEED");
		$position = COption::GetOptionString($module_id, "POSITION");
		$offsetX = COption::GetOptionString($module_id, "OFFSET_X");
		$offsetY = COption::GetOptionString($module_id, "OFFSET_Y");
		$distance = COption::GetOptionString($module_id, "DISTANCE");
		$image = COption::GetOptionString($module_id, "IMAGE");
	?>
		<div id="star-to-top"><?if ($type == "text"):?><?=$text?><?else:?><?=CFile::ShowImage($image, 0, 0);?><?endif;?></div>

		<script>
			document.addEventListener('DOMContentLoaded', function () {
				let toTopElement = document.getElementById('star-to-top');

				window.onscroll = function() {
					if (window.scrollY > <?=$distance?>) {
						toTopElement.style.display = 'block';
						window.setTimeout(function() {toTopElement.style.opacity = <?=$opacity/100?>;}, 1);
						
					}
					else {
						toTopElement.style.opacity = 0;
						window.setTimeout(function() {if (window.scrollY < <?=$distance?>) toTopElement.style.display = 'none';}, 450);
					}
				};

				toTopElement.onclick = function() {
					let scrollDuration = <?=$speed?>;
					let scrollStep = -window.scrollY / (scrollDuration / 15),
					scrollInterval = setInterval(function() {
						if ( window.scrollY != 0 ) {
							window.scrollBy( 0, scrollStep );
						}
						else clearInterval(scrollInterval);
					}, 15);
				};
			});
		</script>

		<style>
			#star-to-top {
				z-index: 99999;
				display: none;
				cursor: pointer;
				transition: .5s;
				position: fixed;
				bottom: <?=$offsetY?>px;
				<?if ($position == "left"):?>left: <?=$offsetX?>px<?else:?>right: <?=$offsetX?>px<?endif;?>;
				opacity: <?=$opacity/100?>;
				<?if ($type == "text"):?>
					color: <?=$textColor?>;
					background-color: <?=$backgroundColor?>;
					font-size: <?=$fontSize?>;
					padding: 15px 30px;
				<?else:?>
					line-height: 0;
				<?endif;?>
			}
			#star-to-top:hover {
				opacity: 1 !important;
				display: block !important;
			}
		</style>
	<?endif;
?>

