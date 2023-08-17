<!DOCTYPE html>
<html class="wide smoothscroll wow-animation" lang="ru">
  <head>
    <!-- Site Title-->
    <title>Спасибо, Ваша заявка принята!</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <!-- Stylesheets-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i&display=swap&subset=cyrillic,cyrillic-ext" rel="stylesheet">
    <!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
    <![endif]-->
    <?php

    
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $to = "vladdmd@mail.ru";
    $subject = "Заявка!";
    $txt = "Hello world!";
    $headers = "From: promo@americandental.ru" . "\r\n" .
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    mail($to,$subject,"Имя: " . $name ." | Телефон: ". $phone,$headers);

    ?>
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
  </head>
  <body> 
    <!-- Page-->
    <div class="page"> 
      <section class="section one-screen-page bg-image-3">
        <div class="one-screen-page-inner">
          <!-- Page Header-->
          <header class="page-head">
            <div class="rd-navbar-brand brand"><a class="brand-logo" href="/"><img src="images/logo.png" width="146" alt=""></a></div>
          </header>
          <!-- Page Content-->
          <section>
            <div class="container">
              <div class="row no-gutters justify-content-center">
                <div class="col-md-10 col-xl-6">
                  <h2 class="page-subtitle">Спасибо! <br>Ваша заявка принята!</h2>
                  <div class="progress-linear">
                  </div>
                  <div class="group-xl"><a class="button button-secondary" href="https://americandental.ru/promo/">Вернуться на страницу</a></div>
                </div>
              </div>
            </div>
          </section>

          <!-- Page Footer-->
          <footer class="page-foot text-center">
            <p class="copyright small">&nbsp;&#169;&nbsp;<span class="copyright-year"></span>All Rights Reserved>
            </p>
          </footer>
        </div>
      </section>
    </div>

    <style>
      body {
        margin: 0;
      }
      body * {
        font-family: "Roboto";
      }
      .page {
        min-height: 100vh;
        background-color: black;
      }
      .brand {
        padding-top: 35px;
      }
      .bg-image-3 {
        background-image: url(images/bg.jpg);
        max-height: 100vh;
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
      }
      .one-screen-page,
      .one-screen-page-inner {
        min-height: 100vh;
        text-align: center;
      }
      .one-screen-page-inner {
        display: -webkit-flex;
        display: -moz-flex;
        display: -ms-flex;
        display: -o-flex;
        display: flex;
        flex-direction: column;
        justify-content: space-between; 
      }
      h2 {
        font-weight: 700;
        color: white;
        font-family: "Roboto";
        font-size: 52px;
        line-height: 1.1;
      }
      .button {
        display: inline-block;
        position: relative;
        text-decoration: none;
        padding: 10px;
        font-size: 14px;
        line-height: 30px;
        border-radius: 0;
        white-space: nowrap;
        letter-spacing: .9px;
        overflow: hidden;
        text-overflow: ellipsis;
        border-style: solid;
        border-width: 2px;
        font-weight: 700;
        text-align: center;
        text-transform: uppercase;
        cursor: pointer;
        vertical-align: middle;
        user-select: none;
        transition: .5s;
        z-index: 1;
        display: inline-block;
        margin-top: 0;
        margin-bottom: 25px;
        margin-left: 25px;
      }
      .button-secondary {
        color: #292929;
        background-color: transparent;
        border-color: #ffba00;
        background-color: #ffba00;
      }
      .button-white-outline {
        color: #fff;
        background-color: transparent;
        border-color: #fff;
      }
      .copyright {
        opacity: .5;
        color: #fff;
        font-size: 12px;
        padding-bottom: 35px;
      }
      @media (max-width: 580px) {
        h2 {
          font-size: 28px;
        }
      }
    </style>
<script type="text/javascript">
setTimeout('location.replace("https://americandental.ru/promo/")', 2000);
</script>

  </body>
</html>