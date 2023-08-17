<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?
//echo "<pre>111 "; print_r($arResult); echo "</pr>";
$arAnchor = [];
$count_arr = 0;
$i = 1;

foreach ($arResult as $key => $item) {
    if ( strpos($key, 'LINK') AND !strpos($key, '~LINK') AND !empty($item) ) {
        $data = explode("|", $item); 
        $arAnchor[$data[0]] = [
            'anchor' => $data[1],
            'text'   => $data[2],
        ];

        $count_arr++;
    }
}

ksort($arAnchor);

//echo "<pre>  "; print_r($arAnchor); echo "</pr>";

?>

<section class="section-article bg-color__2 availables">
    <div class="container">
        <div class="ex3"><h2 class="h2 title-1"><?=$arResult['TITLE']?></h2></div>
        <div class="availables__content">
            <div class="content-text">
                <ul class="soderzhanie">
                <?
                    $j = 1;
                    
                    foreach( $arAnchor as $key => $item):
                        ?>
                        <li><a href="#<?=$item['anchor']?>" class="pseudo scroll"><?=$item['text']?></a></li>
                        <?
                        if ( $j == (ceil($count_arr / 2)) ) :  
                ?>
                </ul>
                <ul class="soderzhanie">  
                <?
                        endif;
                        $j++;    
                    endforeach;
                ?>
                </ul>
            </div>
        </div>
    </div>
</section>