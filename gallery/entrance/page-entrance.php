
<?php
/*
Template Name: entrance
*/
?>
<!DOCTYPE html>
<html lang="ja">

<head>
 <meta charset="UTF-8">
 <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TVLVV6');</script>
<!-- End Google Tag Manager -->
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>部屋の内部</title>
 <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/gallery/entrance/css/style_entrance.css">
 <link rel="shortcut icon" href="https://www.seisakujyo.co.jp/wp-content/themes/seisakujyo/img/common/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="https://www.seisakujyo.co.jp/wp-content/themes/seisakujyo/img/common/apple-touch-icon.png" sizes="180x180">
<link rel="icon" type="image/png" href="https://www.seisakujyo.co.jp/wp-content/themes/seisakujyo/img/common/android-touch-icon.png" sizes="192x192">
</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TVLVV6"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
 <div id="letter" class="letterAnim"></div>
 <div class="letterBg"></div>
 <div id="room-container"></div>
 <div class="controls">
  <button id="leftBtn">左へ</button>
  <button id="rightBtn">右へ</button>
 </div>

 <div id="wall-buttons" style="display: none;">
  <a href="../" id="frontLink" class="wall-link no1_img">
   <img src="<?php echo get_template_directory_uri(); ?>/gallery/entrance/img/no1_img.png" alt="">
  </a>
  <a href="#" id="rightLink" class="wall-link comingsoon">
   <img src="<?php echo get_template_directory_uri(); ?>/gallery/entrance/img/comingsoon.png" alt="">
  </a>
  <a href="#" id="backLink" class="wall-link comingsoon">
   <img src="<?php echo get_template_directory_uri(); ?>/gallery/entrance/img/comingsoon.png" alt="">
  </a>
  <a href="#" id="leftLink" class="wall-link comingsoon">
   <img src="<?php echo get_template_directory_uri(); ?>/gallery/entrance/img/comingsoon.png" alt="">
  </a>
 </div>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.9.6/lottie.min.js"></script>
 <script type="module" src="<?php echo get_template_directory_uri(); ?>/gallery/entrance/js/lottie.js"></script>
 <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
 <script type="module" src="<?php echo get_template_directory_uri(); ?>/gallery/entrance/js/room.js"></script>
 <script type="module" src="<?php echo get_template_directory_uri(); ?>/gallery/entrance/js/style.js"></script>
</body>

</html>