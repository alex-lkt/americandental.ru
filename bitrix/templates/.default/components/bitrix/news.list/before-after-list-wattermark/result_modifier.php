<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

	$arWaterMark = Array(
	array(
		"name" => "watermark",
		"position" => "center", // Положение
		"type" => "image",
		"size" => "real",
		"file" => $_SERVER["DOCUMENT_ROOT"].'/upload/watermark.png', // Путь к картинке
		"fill" => "exact",
		)
	);
	
	$waterImage = CFile::ResizeImageGet(
		$imageBefore,
		array("width" => 275, "height" => 300),
		BX_RESIZE_IMAGE_EXACT,
		true,
		$arWaterMark
	);

?>