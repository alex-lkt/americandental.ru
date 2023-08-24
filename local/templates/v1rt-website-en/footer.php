 
					</div>
				</div>
			</div>
		</main>
			<footer>
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-12 col-md-8 footer__menus">
							<ul>
								<li><a href="/en/" class="root-item">Home</a></li>
								<li><a href="/en/about" class="root-item">About</a></li>
								<li><a href="/en/services/" class="root-item">Services</a></li>					
								<li><a href="/en/price/" class="root-item">Price</a></li>
								<li><a href="/en/contacts/" class="root-item">Contacts</a></li>
							</ul>
							<ul>
								<li><a href="/en/all-on-4/" class="root-item">All on 4</a></li>
								<li><a href="/en/all-on-6/" class="root-item">All on 6</a></li>
								<li><a href="/en/teeth-for-1-day/" class="root-item">Teeth for 1 day</a></li>
								<li><a href="/en/zygomatic-implants/" class="root-item">Zygomatic implants</a></li>
							</ul>
						</div>
						<div class="col-12 col-md-4">
							<div class="footer__contacts">
								<a href="tel:+74957635550" class="tel">+7(495)763-55-50</a>
								<a href="mailto:info@americandental.ru" class="f-mail">info@americandental.ru</a>
								<span class="workhours">9:00 &ndash; 21:00</span>
								<a href="#divForm" id="btnForm2" class="btn btn-primary">Free consultation</a>
							</div>
						</div>
					</div>
					<div class="subfooter">

						<div class="row justify-content-between">				
							<div class="col-12 col-md-7">
								Copyright &copy; <?=date("Y");?> - American Dental: Implantation Center<br>

							</div>
							<div class="col-12 col-md-5">
								<a href="/en/user-agreement/">Privacy policy</a>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>

		<div id="divForm" style="display:none;">
			<h2>Free consultation</h2>
			<?$APPLICATION->IncludeComponent("v1rt:callback", "index__callback", Array(
				"COMPONENT_TEMPLATE" => ".default",
				"USE_CAPTCHA" => "N",	// Использовать каптчу
				"EMAIL_TO" => "info@americandental.ru",	// Email получателя заявок на звонок		
				"EVENT_MESSAGE_ID" => array(	// Шаблон письма
				0 => "10",
				)
				),
				false
			);?>
		</div>

		<div id="mmenu">
			<?$APPLICATION->IncludeComponent(
				"bitrix:menu", 
				"left-menu", 
				array(
					"COMPONENT_TEMPLATE" => "left-menu",
					"ROOT_MENU_TYPE" => "top",
					"MENU_CACHE_TYPE" => "N",
					"MENU_CACHE_TIME" => "3600",
					"MENU_CACHE_USE_GROUPS" => "Y",
					"MENU_CACHE_GET_VARS" => array(
					),
					"MAX_LEVEL" => "1",
					"CHILD_MENU_TYPE" => "left",
					"USE_EXT" => "N",
					"DELAY" => "N",
					"ALLOW_MULTI_SELECT" => "N",
					"COMPOSITE_FRAME_MODE" => "A",
					"COMPOSITE_FRAME_TYPE" => "AUTO"
					),
				false
			);?>
		</div>



        <script src="<?=SITE_TEMPLATE_PATH;?>/css-js/fontawesome-5.0.6/js/fontawesome-all.min.js" defer></script>
        <script src="<?=SITE_TEMPLATE_PATH;?>/css-js/bootstrap-4.0.0-dist/js/bootstrap.min.js" defer></script>
		<script src="<?=SITE_TEMPLATE_PATH;?>/css-js/fancybox3/jquery.fancybox.min.js" defer></script>
		<script src="<?=SITE_TEMPLATE_PATH;?>/css-js/mmenu/jquery.mmenu.js" defer></script>
		<script src="<?=SITE_TEMPLATE_PATH;?>/css-js/slick-1.8.1/slick.min.js" defer></script>  
		<script src="<?=SITE_TEMPLATE_PATH;?>/css-js/scripts.js" defer></script> 


		<!-- Rating Mail.ru counter -->
		<script type="text/javascript">
		var _tmr = window._tmr || (window._tmr = []);
		_tmr.push({id: "3149284", type: "pageView", start: (new Date()).getTime()});
		(function (d, w, id) {
		if (d.getElementById(id)) return;
		var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true; ts.id = id;
		ts.src = "https://top-fwz1.mail.ru/js/code.js";
		var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};
		if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }
		})(document, window, "topmailru-code");
		</script><noscript><div>
		<img src="https://top-fwz1.mail.ru/counter?id=3149284;js=na" style="border:0;position:absolute;left:-9999px;" alt="Top.Mail.Ru" />
		</div></noscript>
		<!-- //Rating Mail.ru counter -->
		
		<!-- Yandex.Metrika counter --> <script type="text/javascript" > (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)}; m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)}) (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym"); ym(56550514, "init", { clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); </script> <noscript><div><img src="https://mc.yandex.ru/watch/56550514" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->

		<!-- RedConnect -->
		<!-- <script id="rhlpscrtg" async="async" src="https://web.redhelper.ru/service/main.js?c=americandental"></script> -->
		<!--/RedConnect -->

	</body>
</html>