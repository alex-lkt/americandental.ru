<?php
$canonicalUrl = $APPLICATION->GetPageProperty("canonical");
if(strlen($canonicalUrl) > 0)
{
    $APPLICATION->AddHeadString("<link href='$canonicalUrl' rel='canonical'>",true);
}
?>
<div class="btn-page but_mob">
						<a href="#divForm" id="btnForm11-1" class="add_comment"><span><img src="/local/templates/v1rt-website/img/234-2.png" alt="American Dental" style="width: 70px; height:70px;" /></span></a>
                        </div>
                        

                                       <?if(!$bIndexBot):?><div class="block_orange">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-12 col-md-5 full-w-991">
                                    <a href="/" class="logo">
                                        <img class ="lazyload" src="/images/lazyload.jpg" data-src="/local/templates/v1rt-website/img/footer-logo.png" title="footer logo" alt="footer logo">
                                    </a>
                                </div>
                                <div class="col-12 col-md-7 full-w-991">
                                    <div class="header__info footer_info">
                                        <div style="padding-right: 40px;">
                                            <div class="button button_white"><a style="padding: 10px 20px;" href="#divForm" id="btnForm9" class="btn btn-primary btn-page">Бесплатная консультация</a></div>
                                        </div>
                                        <div class="header__contacts footer_contacts">
                                            <div>Телефон в Москве</div>
                                            <div class="block-sub-header-bold block-sub-header-black">
                                                <a href="tel:+74957745550">+7 (495) 774-55-50</a><br>
                                            </div>
                                            
                                            <div><a class="footer-callback btn-page" href="#divForm" id="btnForm10">Заказать обратный звонок</a></div>
                                            <div style="font-weight: 600;">
                                                С 9:00 до 21:00
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?endif;?>
                
        
    
<?if(!$bIndexBot):?>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="block-sub-header-bold" style="margin-bottom: 20px;">УСЛУГИ</div>
                    <?$APPLICATION->IncludeComponent("bitrix:menu", "footer-menu", Array(
                        "ALLOW_MULTI_SELECT" => "N",    // Разрешить несколько активных пунктов одновременно
                        "CHILD_MENU_TYPE" => "left",    // Тип меню для остальных уровней
                        "DELAY" => "N", // Откладывать выполнение шаблона меню
                        "MAX_LEVEL" => "1", // Уровень вложенности меню
                        "MENU_CACHE_GET_VARS" => array( // Значимые переменные запроса
                            0 => "",
                        ),
                        "MENU_CACHE_TIME" => "3600",    // Время кеширования (сек.)
                        "MENU_CACHE_TYPE" => "N",   // Тип кеширования
                        "MENU_CACHE_USE_GROUPS" => "Y", // Учитывать права доступа
                        "ROOT_MENU_TYPE" => "footer_left",  // Тип меню для первого уровня
                        "USE_EXT" => "N",   // Подключать файлы с именами вида .тип_меню.menu_ext.php
                    ),
                        false
                    );?>
                </div>
                <div class="col-lg-3">
                    <div class="block-sub-header-bold" style="margin-bottom: 20px;">ПАЦИЕНТАМ</div>
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:menu",
                        "footer-menu",
                        array(
                            "ALLOW_MULTI_SELECT" => "N",
                            "CHILD_MENU_TYPE" => "left",
                            "DELAY" => "N",
                            "MAX_LEVEL" => "1",
                            "MENU_CACHE_GET_VARS" => array(
                            ),
                            "MENU_CACHE_TIME" => "3600",
                            "MENU_CACHE_TYPE" => "N",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "ROOT_MENU_TYPE" => "footer_middle",
                            "USE_EXT" => "N",
                            "COMPONENT_TEMPLATE" => "footer-menu"
                        ),
                        false
                    );?>
                </div>
                <div class="col-lg-3 mr-top">
                    <div style="margin-top: 25px;">
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:menu",
                            "footer-menu",
                            array(
                                "ALLOW_MULTI_SELECT" => "N",
                                "CHILD_MENU_TYPE" => "left",
                                "DELAY" => "N",
                                "MAX_LEVEL" => "1",
                                "MENU_CACHE_GET_VARS" => array(
                                ),
                                "MENU_CACHE_TIME" => "3600",
                                "MENU_CACHE_TYPE" => "N",
                                "MENU_CACHE_USE_GROUPS" => "Y",
                                "ROOT_MENU_TYPE" => "footer_right",
                                "USE_EXT" => "N",
                                "COMPONENT_TEMPLATE" => "footer-menu"
                            ),
                            false
                        );?>
                    </div>

                </div>
                <div class="col-lg-3">
                    <div class="block-sub-header-bold">
                        МЫ ВСЕГДА РЯДОМ
                    </div>
                    <div class="mr-top">Будем рады видеть Вас в наших группах социальных сетей</div>
                    <ul class="social mr-top">
                        <li><a href="https://vk.com/american_dental" target="_blank" rel="nofollow"><img src="/local/templates/v1rt-website/img/vk.png" title="vkontakte ico" alt="vkontakte"></a></li>
                        <li><a href="https://www.youtube.com/channel/UCRauN_dXp6PBeQoequOE3uQ" target="_blank" rel="nofollow"><img src="/local/templates/v1rt-website/img/youtube.png" title="youtube ico" alt="youtube"></a></li>
                        
                    </ul>
                    <div class="developer">
                        <div class="developerTitle">СОЗДАНИЕ И ПРОДВИЖЕНИЕ САЙТОВ</div>
                        <a class="developerName" target="_blank" href="https://tierfirst.com/" rel="nofollow">
                            <svg width="135" height="32" viewBox="0 0 135 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_13_67)">
                            <path d="M42.0673 11.9639H37.96V9.51984H49.1461V11.9639H45.038V22.4801H42.068L42.0673 11.9639Z" fill="black"/>
                            <path d="M50.7411 9.51984H53.7111V22.4801H50.7411V9.51984Z" fill="black"/>
                            <path d="M66.6947 20.0736V22.4801H56.7554V9.51984H66.4558V11.9271H59.7058V14.7419H65.6654V17.0748H59.7078V20.0736H66.6947Z" fill="black"/>
                            <path d="M77.2382 22.4801L74.763 18.8679H72.0306V22.4801H69.0605V9.51984H74.6165C75.7536 9.51984 76.7409 9.71112 77.5784 10.0937C78.4159 10.4763 79.0614 11.0192 79.515 11.7226C79.9672 12.426 80.1922 13.259 80.19 14.2218C80.1877 15.1846 79.9585 16.0148 79.5022 16.7122C79.0441 17.4097 78.3931 17.9435 77.5494 18.3138L80.4283 22.4795L77.2382 22.4801ZM76.4862 12.5466C76.0218 12.1581 75.3435 11.9639 74.4511 11.9639H72.0306V16.4812H74.4525C75.3448 16.4812 76.0232 16.2837 76.4876 15.8889C76.952 15.4941 77.1844 14.9386 77.1849 14.2225C77.184 13.4946 76.9511 12.936 76.4862 12.5466V12.5466Z" fill="black"/>
                            <path d="M85.5083 11.9271V15.3525H91.4483V17.7597H85.5083V22.4808H82.5383V9.51984H92.2388V11.9271H85.5083Z" fill="black"/>
                            <path d="M94.255 9.51984H97.225V22.4801H94.255V9.51984Z" fill="black"/>
                            <path d="M108.448 22.4801L105.972 18.8679H103.24V22.4801H100.27V9.51984H105.827C106.963 9.51984 107.95 9.71112 108.788 10.0937C109.625 10.4763 110.27 11.0192 110.722 11.7226C111.172 12.426 111.397 13.259 111.397 14.2218C111.397 15.1846 111.168 16.0148 110.709 16.7122C110.25 17.4097 109.599 17.9435 108.756 18.3138L111.635 22.4795L108.448 22.4801ZM107.696 12.5466C107.231 12.1581 106.552 11.9639 105.66 11.9639H103.24V16.4812H105.66C106.553 16.4812 107.231 16.2837 107.696 15.8889C108.161 15.4941 108.393 14.9386 108.393 14.2225C108.393 13.4946 108.161 12.936 107.696 12.5466Z" fill="black"/>
                            <path d="M115.02 22.2866C114.075 22.009 113.314 21.648 112.737 21.2036L113.747 18.947C114.345 19.3785 115.007 19.7099 115.709 19.9284C116.443 20.1718 117.211 20.2969 117.983 20.2992C118.827 20.2992 119.45 20.1726 119.854 19.9196C120.257 19.6665 120.46 19.33 120.461 18.9102C120.464 18.7631 120.433 18.6174 120.371 18.4842C120.309 18.3511 120.217 18.2341 120.103 18.1421C119.832 17.9204 119.521 17.7538 119.187 17.6514C118.813 17.5282 118.309 17.3919 117.674 17.2425C116.86 17.0566 116.058 16.8217 115.272 16.5391C114.651 16.3062 114.099 15.9176 113.667 15.4098C113.221 14.8913 112.998 14.2 112.998 13.3358C112.991 12.608 113.203 11.8953 113.605 11.2912C114.01 10.6805 114.618 10.1962 115.428 9.83812C116.238 9.48008 117.231 9.30106 118.408 9.30106C119.217 9.30004 120.024 9.39938 120.81 9.59685C121.534 9.77041 122.227 10.0579 122.864 10.4488L121.947 12.7258C120.761 12.0479 119.575 11.7085 118.389 11.7076C117.558 11.7076 116.944 11.8439 116.546 12.1165C116.148 12.3892 115.95 12.7472 115.95 13.1907C115.95 13.635 116.179 13.9651 116.638 14.1809C117.097 14.3968 117.797 14.6096 118.738 14.8196C119.552 15.0059 120.354 15.241 121.14 15.5236C121.757 15.7539 122.309 16.1356 122.744 16.6345C123.19 17.1402 123.413 17.8252 123.414 18.6894C123.419 19.4127 123.205 20.1204 122.799 20.717C122.389 21.3276 121.775 21.812 120.957 22.17C120.138 22.5281 119.142 22.7071 117.968 22.7071C116.97 22.7091 115.978 22.5675 115.02 22.2866V22.2866Z" fill="black"/>
                            <path d="M127.922 11.9639H123.814V9.51984H135V11.9639H130.893V22.4801H127.923L127.922 11.9639Z" fill="black"/>
                            <path d="M26.5606 3.77709C23.7923 1.34155 20.2447 -0.000152588 16.5729 -0.000152588C12.9012 -0.000152588 9.35354 1.34155 6.5853 3.77709H0.2403L0 4.99501H32.6835L32.9346 3.77709H26.5606Z" fill="black"/>
                            <path d="M2.31728 10.0085C1.22728 12.9825 1.07538 16.2242 1.88243 19.2889C2.68949 22.3535 4.41594 25.0909 6.82493 27.1256L5.85901 32H7.15028L7.94476 27.9877L11.5074 10.0085H2.31728V10.0085Z" fill="black"/>
                            <path d="M17.762 10.0085H17.6945L16.283 17.1464H28.703L27.6723 22.1619H15.3272L13.6924 30.4222C13.7133 30.427 13.7342 30.4318 13.7558 30.4352C14.6846 30.6108 15.6276 30.6989 16.5726 30.6982C24.9683 30.6982 31.775 23.8262 31.775 15.3491C31.778 13.5263 31.4579 11.7176 30.83 10.0085H17.762Z" fill="black"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_13_67">
                            <rect width="135" height="32" fill="white"/>
                            </clipPath>
                            </defs>
                            </svg>
                            <span>.com</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="subfooter" style="background-color: #202021; padding:10px 0 10px 0;">
            <div class="container">
                <div class="row justify-content-between">

<div class="col-12 col-md-5 sogl-mob">
                    <div style="line-height: 20px; font-size:13px;"> 
                        <?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("include-areas/inc.soglashenie.php"), array(), array("MODE" => "html"));?>
                        </div>
                        </div>
                        
                    <div class="col-12 col-md-7">
                    <div style="color:#666; line-height: 20px; font-size:13px;">                        
                        © 2023.ООО"ИмпроДент" 119415, г. Москва, ул. Удальцова, д. 5 к. 1, эт/пом/ком 1/3/1-16, ОГРН 1197746395505 от 20 июня 2019 г. ИНН 7716938425. Все права защищены.
                        </div>
                    </div>


                    
                        
                        


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
                        </script> <!-- //Rating Mail.ru counter --> 
                    </div>
                </div>
            </div>
        </div>
    </footer><?endif;?>


<?if(!$bIndexBot):?>



<div id="mmenu">
     <?$APPLICATION->IncludeComponent(
        "bitrix:menu",
        "left-menu",
        Array(
            "ALLOW_MULTI_SELECT" => "N",
            "CHILD_MENU_TYPE" => "left",
            "COMPONENT_TEMPLATE" => "left-menu",
            "COMPOSITE_FRAME_MODE" => "A",
            "COMPOSITE_FRAME_TYPE" => "AUTO",
            "DELAY" => "N",
            "MAX_LEVEL" => "1",
            "MENU_CACHE_GET_VARS" => array(),
            "MENU_CACHE_TIME" => "3600",
            "MENU_CACHE_TYPE" => "N",
            "MENU_CACHE_USE_GROUPS" => "Y",
            "ROOT_MENU_TYPE" => "top",
            "USE_EXT" => "N"
        )
    );?>
</div>



<?require_once('v1rt-forms/vf-popup.php');?>


        <!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();
   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(56550514, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/56550514" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
    
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-5F20TKM1G2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-5F20TKM1G2');
</script>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-T5Q43HS');</script>
<!-- End Google Tag Manager -->  
    
        
  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T5Q43HS"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->          
        
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js" integrity="sha512-d4KkQohk+HswGs6A1d6Gak6Bb9rMWtxjOa0IiY49Q3TeFd5xAzjWXDCBW9RS7m86FQ4RzM2BdHmdJnnKRYknxw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://americandental.ru/lazyframe.min.js"></script>
<script>
   lazyframe('.lazyframe');
</script>
<script src="https://americandental.ru/local/templates/v1rt-website/css-js/fontawesome-5.0.6/js/fontawesome-all.min.js"></script>
<script defer src="https://americandental.ru/local/templates/v1rt-website/css-js/fancybox3/jquery.fancybox.min.js"></script>
<script src="https://americandental.ru/local/templates/v1rt-website/css-js/slick-1.8.1/slick.min.js"></script>
<script src="https://americandental.ru/local/templates/v1rt-website/css-js/wow.min.js"></script>
<script src="https://americandental.ru/local/templates/v1rt-website/vendor/imask.min.js"></script>
<script src="https://americandental.ru/local/templates/v1rt-website/vendor/jquery.validate.min.js"></script>

<?endif;?>
</body>
</html>