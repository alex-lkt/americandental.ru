<?php
$arUrlRewrite=array (
  3 => 
  array (
    'CONDITION' => '#/zygomatic-implants\\.html(.*)#',
    'RULE' => '/skulovaya-implantatsiya/index.php',
    'ID' => '',
    'PATH' => '',
    'SORT' => 100,
  ),
  5 => 
  array (
    'CONDITION' => '#^/articles/([a-zA-Z0-9_-]*)/#',
    'RULE' => 'ELEMENT_CODE=$1',
    'ID' => '',
    'PATH' => '/articles/detail.php',
    'SORT' => '100',
  ),
  6 => 
  array (
    'CONDITION' => '#^/regiony/([a-zA-Z0-9_-]*)/#',
    'RULE' => 'ELEMENT_CODE=$1',
    'ID' => '',
    'PATH' => '/regiony/detail_region.php',
    'SORT' => '100',
  ),
  2 => 
  array (
    'CONDITION' => '#/all-on-6\\.html(.*)#',
    'RULE' => '/all-on-6/index.php',
    'ID' => '',
    'PATH' => '',
    'SORT' => 100,
  ),
  1 => 
  array (
    'CONDITION' => '#/all-on-4\\.html(.*)#',
    'RULE' => '/all-on-4/index.php',
    'ID' => '',
    'PATH' => '',
    'SORT' => 100,
  ),
  12 => 
  array (
    'CONDITION' => '#/akcia\\.html(.*)#',
    'RULE' => '/akcia/index.php',
    'ID' => '',
    'PATH' => '',
    'SORT' => 100,
  ),
  4 => 
  array (
    'CONDITION' => '/zuby-za-1-den/',
    'RULE' => '/zuby-za-1-den/',
    'ID' => '',
    'PATH' => '',
    'SORT' => 100,
  ),
  0 => 
  array (
    'CONDITION' => '#^/rest/#',
    'RULE' => '',
    'ID' => NULL,
    'PATH' => '/bitrix/services/rest/index.php',
    'SORT' => 100,
  ),
);
