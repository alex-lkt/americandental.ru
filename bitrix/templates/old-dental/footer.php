<?if($APPLICATION->GetCurPage() == "/"):?>

<?else:?>
</article>

<aside class="sidebar order-2 order-lg-1 col-lg-4 col-xl-3">
<p class="h1">Услуги</p>
<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"left-menu", 
	array(
		"ROOT_MENU_TYPE" => "left",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MAX_LEVEL" => "2",
		"CHILD_MENU_TYPE" => "sub",
		"USE_EXT" => "N",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N",
		"COMPONENT_TEMPLATE" => "left-menu",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO"
	),
	false
);?>	
</aside>
</div>
</div>

<?endif;?>

<footer>	
	<div class="subfooter">
		<div class="container">
			<div class="row justify-content-between">
				
				<div class="col-auto">
					Copyright &copy; <?=date("Y");?> - Центр имплантации доктора Сойфера
				</div>
				<div class="col-auto">
					<a href="/soglashenie/">Соглашение об использовании сайта</a>
				</div>
				<div class="col-auto">
					Создание сайта: <a href="https://v1rt.ru/" target="_blank">Виртуальная недвижимость</a>
				</div>
			</div>
		</div>
	</div>
</footer>


	  </div><?/* page-wrap*/?>
	<script src="<?=SITE_TEMPLATE_PATH;?>/css-js/jquery.min.js"></script>	
	<script src="<?=SITE_TEMPLATE_PATH;?>/css-js/fontawesome-5.0.6/js/fontawesome-all.min.js" defer></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="<?=SITE_TEMPLATE_PATH;?>/css-js/bootstrap-4.0.0-dist/js/bootstrap.min.js" defer></script>
	<script src="<?=SITE_TEMPLATE_PATH;?>/css-js/fancybox3/jquery.fancybox.min.js" defer></script>
	<script src="<?=SITE_TEMPLATE_PATH;?>/css-js/mmenu/jquery.mmenu.js" defer></script>
	<script src="<?=SITE_TEMPLATE_PATH;?>/css-js/scripts.js" defer></script>
	</body>
</html>
