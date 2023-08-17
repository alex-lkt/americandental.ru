<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$ext = 'jpg,jpeg,gif,png';
$arComponentParameters = array(
  'PARAMETERS'=> array(
    'BLOCK_1_TITLE' => array(
      'PARENT' => 'BASE',
      'NAME' => 'Заголовок блока-1',
      'TYPE' => 'STRING',
      'MULTIPLE' => 'N',
      'ADDITIONAL_VALUE' => 'Y',
      'DEFAULT' => null
    ),
    'BLOCK_1_TEXT' => array(
      'PARENT' => 'BASE',
      'NAME' => 'Текст блока-1',
      'TYPE' => 'STRING',
      'MULTIPLE' => 'N',
      'ADDITIONAL_VALUE' => 'Y',
      'DEFAULT' => null
    ),
    'BLOCK_2_TITLE' => array(
      'PARENT' => 'BASE',
      'NAME' => 'Заголовок блока-2',
      'TYPE' => 'STRING',
      'MULTIPLE' => 'N',
      'ADDITIONAL_VALUE' => 'Y',
      'DEFAULT' => null
    ),
    'BLOCK_2_TEXT' => array(
      'PARENT' => 'BASE',
      'NAME' => 'Текст блока-2',
      'TYPE' => 'STRING',
      'MULTIPLE' => 'N',
      'ADDITIONAL_VALUE' => 'Y',
      'DEFAULT' => null
    ),
    'BLOCK_AVL_1_TITLE' => array(
      'PARENT' => 'BASE',
      'NAME' => 'Заголовок услуги 1',
      'TYPE' => 'STRING',
      'MULTIPLE' => 'N',
      'ADDITIONAL_VALUE' => 'Y',
      'DEFAULT' => null
    ),
    'BLOCK_AVL_1_PRICE' => array(
      'PARENT' => 'BASE',
      'NAME' => 'Цена услуги 1',
      'TYPE' => 'STRING',
      'MULTIPLE' => 'N',
      'ADDITIONAL_VALUE' => 'Y',
      'DEFAULT' => null
    ),
    'BLOCK_AVL_1_TEXT' => array(
      'PARENT' => 'BASE',
      'NAME' => 'Текст услуги 1',
      'TYPE' => 'STRING',
      'MULTIPLE' => 'N',
      'ADDITIONAL_VALUE' => 'Y',
      'DEFAULT' => null
    ),
    'BLOCK_AVL_1_IMG' => array(
      "PARENT" => "BASE_SETTINGS",
      "NAME" => 'Выберите файл услуги 1:',
      "TYPE" => "FILE",
      "FD_TARGET" => "F",
      "FD_EXT" => $ext,
      "FD_UPLOAD" => true,
      "FD_USE_MEDIALIB" => true,
    ),
    'BLOCK_AVL_2_TITLE' => array(
      'PARENT' => 'BASE',
      'NAME' => 'Заголовок услуги 2',
      'TYPE' => 'STRING',
      'MULTIPLE' => 'N',
      'ADDITIONAL_VALUE' => 'Y',
      'DEFAULT' => null
    ),
    'BLOCK_AVL_2_PRICE' => array(
      'PARENT' => 'BASE',
      'NAME' => 'Цена услуги 2',
      'TYPE' => 'STRING',
      'MULTIPLE' => 'N',
      'ADDITIONAL_VALUE' => 'Y',
      'DEFAULT' => null
    ),
    'BLOCK_AVL_2_TEXT' => array(
      'PARENT' => 'BASE',
      'NAME' => 'Текст услуги 2',
      'TYPE' => 'STRING',
      'MULTIPLE' => 'N',
      'ADDITIONAL_VALUE' => 'Y',
      'DEFAULT' => null
    ),
    'BLOCK_AVL_2_IMG' => array(
      "PARENT" => "BASE_SETTINGS",
      "NAME" => 'Выберите файл услуги 2:',
      "TYPE" => "FILE",
      "FD_TARGET" => "F",
      "FD_EXT" => $ext,
      "FD_UPLOAD" => true,
      "FD_USE_MEDIALIB" => true,
    ),
    'BLOCK_AVL_3_TITLE' => array(
      'PARENT' => 'BASE',
      'NAME' => 'Заголовок услуги 3',
      'TYPE' => 'STRING',
      'MULTIPLE' => 'N',
      'ADDITIONAL_VALUE' => 'Y',
      'DEFAULT' => null
    ),
    'BLOCK_AVL_3_PRICE' => array(
      'PARENT' => 'BASE',
      'NAME' => 'Цена услуги 3',
      'TYPE' => 'STRING',
      'MULTIPLE' => 'N',
      'ADDITIONAL_VALUE' => 'Y',
      'DEFAULT' => null
    ),
    'BLOCK_AVL_3_TEXT' => array(
      'PARENT' => 'BASE',
      'NAME' => 'Текст услуги 3',
      'TYPE' => 'STRING',
      'MULTIPLE' => 'N',
      'ADDITIONAL_VALUE' => 'Y',
      'DEFAULT' => null
    ),
    'BLOCK_AVL_3_IMG' => array(
      "PARENT" => "BASE_SETTINGS",
      "NAME" => 'Выберите файл услуги 3:',
      "TYPE" => "FILE",
      "FD_TARGET" => "F",
      "FD_EXT" => $ext,
      "FD_UPLOAD" => true,
      "FD_USE_MEDIALIB" => true,
    ),

  ),
);

?>