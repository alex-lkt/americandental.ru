<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="gaonutosal">
      <?
      $i = 1;
      foreach( $arResult as $item ):
        if ( !empty($arResult['QUESTION_' . $i]) ):
      ?>
        <div class="pesontedan">
            <input id="pesontedan-<?=$i?>" type="checkbox" name="pesontedans">
            <label for="pesontedan-<?=$i?>"><b><?=$arResult['QUESTION_' . $i]?></b></label>
            <div class="pesontedan-content">
                <p><?=$arResult['~ANSWER_' . $i]?></p>
            </div>
        </div>
      <?
         $i++;
        endif;
      endforeach?>
</div>
