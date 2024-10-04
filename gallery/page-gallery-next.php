<?php
/*
Template Name: gallery-next
*/
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8"><!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TVLVV6');</script>
<!-- End Google Tag Manager -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>もし10億円を手に入れたら...</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="<?php echo get_template_directory_uri(); ?>/gallery/css/common.css" rel="stylesheet" type="text/css">
<link href="<?php echo get_template_directory_uri(); ?>/gallery/css/style.css" rel="stylesheet" type="text/css">
<link href="<?php echo get_template_directory_uri(); ?>/gallery/css/slick.css" rel="stylesheet" type="text/css">
<link href="<?php echo get_template_directory_uri(); ?>/gallery/css/slick-theme.css" rel="stylesheet" type="text/css">
<link href="<?php echo get_template_directory_uri(); ?>/gallery/css/jquery.fancybox.min.css" rel="stylesheet" type="text/css">
 <link rel="shortcut icon" href="https://www.seisakujyo.co.jp/wp-content/themes/seisakujyo/img/common/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="https://www.seisakujyo.co.jp/wp-content/themes/seisakujyo/img/common/apple-touch-icon.png" sizes="180x180">
<link rel="icon" type="image/png" href="https://www.seisakujyo.co.jp/wp-content/themes/seisakujyo/img/common/android-touch-icon.png" sizes="192x192">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500;700;900&display=swap" rel="stylesheet">
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/gallery/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/gallery/js/slick.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/gallery/js/jquery.fancybox.min.js"></script>
<script>
    
    $(function() {
		$('.multiple-item').slick({
          dots: true,
		  arrows: true,
          autoplay: false,
          infinite: true,
		  fade: true,
          speed: 400,
			autoplaySpeed: 3500,
          slidesToShow: 1,
          slidesToScroll: 1,
			centerPadding: '0%'
        }).on('beforeChange', function(event, slick, currentSlide, nextSlide) {
            var $mainBox = $('.main-box2');
            if (nextSlide === 0) {
                $mainBox.css('background-position', '0 center');
            } else if (nextSlide === 1) {
                $mainBox.css('background-position', '25% center');
            } else if (nextSlide === 2) {
                $mainBox.css('background-position', '50% center');
            } else if (nextSlide === 3) {
                $mainBox.css('background-position', '75% center');
            } else if (nextSlide === 4) {
                $mainBox.css('background-position', '100% center');
            }
        });
    });
</script>
<script type="text/javascript">
	$(function() {
		$('.fancybox').fancybox({
			// オプションを下記に記載していきます
			transitionEffect: "slide", //アニメーションをズームインアウトに
			loop : true, // 複数画像表示時に最初と最後をループさせる
			infobar : false,
			autoFocus : false,
			hash : false,
			keyboard : false,
			animationEffect : false,
			image : {
				preload : "auto",
			},
  
		});
	});
  
  </script>
</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TVLVV6"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<script type="text/javascript" src="//tm.r-ad.ne.jp/118/ra030472000.js" charset="utf-8"></script>	
<div class="main-box2 position">
    <div class="slide-box">
        <div class="multiple-item">
			<div class="slide-item">
				<div class="slide-flex">
					<div class="slide-left">
						<ul>
							<li>
								<div class="slide-img">
									<div class="slide-waku1">
										<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/fuchi-01.png" alt="">
									</div>
									<a class="fancybox" data-type="inline" href="#prizeModal1"><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/pic-01.jpg" alt=""></a>
								</div>
							</li>
						</ul>
					</div>
					<div class="slide-center">
						<ul>
							<li>
								<div class="slide-img">
									<div class="slide-waku2">
										<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/fuchi-02.png" alt="">
									</div>
									<a class="fancybox" data-type="inline" href="#prizeModal2"><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/pic-02.jpg" alt=""></a>
								</div>
							</li>
							<li>
								<div class="slide-img">
									<div class="slide-waku3">
										<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/fuchi-03.png" alt="">
									</div>
									<a class="fancybox" data-type="inline" href="#prizeModal3"><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/pic-03.jpg" alt=""></a>
								</div>
							</li>
							<li>
								<div class="slide-img">
									<div class="slide-waku4">
										<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/fuchi-04.png" alt="">
									</div>
									<a class="fancybox" data-type="inline" href="#prizeModal4"><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/pic-04.jpg" alt=""></a>
								</div>
							</li>
							<li>
								<div class="slide-img">
									<div class="slide-waku6">
										<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/fuchi-06.png" alt="">
									</div>
									<a class="fancybox" data-type="inline" href="#prizeModal6"><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/pic-06.jpg" alt=""></a>
								</div>
							</li>
							<li>
								<div class="slide-img">
									<div class="slide-waku7">
										<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/fuchi-07.png" alt="">
									</div>
									<a class="fancybox" data-type="inline" href="#prizeModal7"><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/pic-07.jpg" alt=""></a>
								</div>
							</li>
						</ul>
					</div>
					<div class="slide-right">
						<ul>
							<li>
								<div class="slide-img">
									<div class="slide-waku5">
										<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/fuchi-05.png" alt="">
									</div>
									<a class="fancybox" data-type="inline" href="#prizeModal5"><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/pic-05.jpg" alt=""></a>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<ul class="sp-list ptn1">
					<li>
						<div class="slide-img">
							<div class="slide-waku1">
								<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/fuchi-01.png" alt="">
							</div>
							<a class="fancybox" data-type="inline" href="#prizeModal1"><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/pic-01.jpg" alt=""></a>
						</div>
					</li>
					<li>
						<div class="slide-img">
							<div class="slide-waku2">
								<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/fuchi-02.png" alt="">
							</div>
							<a class="fancybox" data-type="inline" href="#prizeModal2"><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/pic-02.jpg" alt=""></a>
						</div>
					</li>
					<li>
						<div class="slide-img">
							<div class="slide-waku3">
								<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/fuchi-03.png" alt="">
							</div>
							<a class="fancybox" data-type="inline" href="#prizeModal3"><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/pic-03.jpg" alt=""></a>
						</div>
					</li>
					<li>
						<div class="slide-img">
							<div class="slide-waku4">
								<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/fuchi-04.png" alt="">
							</div>
							<a class="fancybox" data-type="inline" href="#prizeModal4"><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/pic-04.jpg" alt=""></a>
						</div>
					</li>
					<li>
						<div class="slide-img">
							<div class="slide-waku6">
								<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/fuchi-06.png" alt="">
							</div>
							<a class="fancybox" data-type="inline" href="#prizeModal6"><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/pic-06.jpg" alt=""></a>
						</div>
					</li>
					<li>
						<div class="slide-img">
							<div class="slide-waku7">
								<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/fuchi-07.png" alt="">
							</div>
							<a class="fancybox" data-type="inline" href="#prizeModal7"><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/pic-07.jpg" alt=""></a>
						</div>
					</li>
					<li>
						<div class="slide-img">
							<div class="slide-waku5">
								<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/fuchi-05.png" alt="">
							</div>
							<a class="fancybox" data-type="inline" href="#prizeModal5"><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/pic-05.jpg" alt=""></a>
						</div>
					</li>
				</ul>
			</div>
			<div class="slide-item">
				<div class="slide-flex ptn2">
					<div class="slide-left2">
						<ul>
							<li>
								<div class="slide-img">
									<div class="slide-waku8">
										<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/fuchi-08.png" alt="">
									</div>
									<a class="fancybox" data-type="inline" href="#prizeModal8"><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/pic-08.jpg" alt=""></a>
								</div>
							</li>
							<li>
								<div class="slide-img">
									<div class="slide-waku9">
										<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/fuchi-09.png" alt="">
									</div>
									<a class="fancybox" data-type="inline" href="#prizeModal9"><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/pic-09.jpg" alt=""></a>
								</div>
							</li>
						</ul>
					</div>
					<div class="slide-center2">
						<ul>
							<li>
								<div class="slide-img">
									<div class="slide-waku10">
										<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/fuchi-10.png" alt="">
									</div>
									<a class="fancybox" data-type="inline" href="#prizeModal10"><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/pic-10.jpg" alt=""></a>
								</div>
							</li>
							<li>
								<div class="slide-img">
									<div class="slide-waku11">
										<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/fuchi-11.png" alt="">
									</div>
									<a class="fancybox" data-type="inline" href="#prizeModal11"><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/pic-11.jpg" alt=""></a>
								</div>
							</li>
						</ul>
					</div>
					<div class="slide-right2">
						<ul>
							<li>
								<div class="slide-img">
									<div class="slide-waku12">
										<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/fuchi-12.png" alt="">
									</div>
									<a class="fancybox" data-type="inline" href="#prizeModal12"><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/pic-12.jpg" alt=""></a>
								</div>
							</li>
							<li>
								<div class="slide-img">
									<div class="slide-waku13">
										<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/fuchi-13.png" alt="">
									</div>
									<a class="fancybox" data-type="inline" href="#prizeModal13"><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/pic-13.jpg" alt=""></a>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<ul class="sp-list ptn2">
					<li>
						<div class="slide-img">
							<div class="slide-waku8">
								<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/fuchi-08.png" alt="">
							</div>
							<a class="fancybox" data-type="inline" href="#prizeModal8"><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/pic-08.jpg" alt=""></a>
						</div>
					</li>
					<li>
						<div class="slide-img">
							<div class="slide-waku9">
								<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/fuchi-09.png" alt="">
							</div>
							<a class="fancybox" data-type="inline" href="#prizeModal9"><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/pic-09.jpg" alt=""></a>
						</div>
					</li>
					<li>
						<div class="slide-img">
							<div class="slide-waku12">
								<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/fuchi-12.png" alt="">
							</div>
							<a class="fancybox" data-type="inline" href="#prizeModal12"><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/pic-12.jpg" alt=""></a>
						</div>
					</li>
					<li>
						<div class="slide-img">
							<div class="slide-waku10">
								<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/fuchi-10.png" alt="">
							</div>
							<a class="fancybox" data-type="inline" href="#prizeModal10"><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/pic-10.jpg" alt=""></a>
						</div>
					</li>
					<li>
						<div class="slide-img">
							<div class="slide-waku11">
								<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/fuchi-11.png" alt="">
							</div>
							<a class="fancybox" data-type="inline" href="#prizeModal11"><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/pic-11.jpg" alt=""></a>
						</div>
					</li>
					<li>
						<div class="slide-img">
							<div class="slide-waku13">
								<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/fuchi-13.png" alt="">
							</div>
							<a class="fancybox" data-type="inline" href="#prizeModal13"><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/pic-13.jpg" alt=""></a>
						</div>
					</li>
				</ul>
			</div>
			<div class="slide-item">
				<div class="slide-flex ptn3">
					<div class="slide-left3-1">
						<ul>
							<li>
								<div class="slide-img">
									<div class="slide-waku14">
										<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/fuchi-14.png" alt="">
									</div>
									<a class="fancybox" data-type="inline" href="#prizeModal14"><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/pic-14.jpg" alt=""></a>
								</div>
							</li>
						</ul>
					</div>
					<div class="slide-left3-2">
						<ul>
							<li>
								<div class="slide-img">
									<div class="slide-waku15">
										<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/fuchi-15.png" alt="">
									</div>
									<a class="fancybox" data-type="inline" href="#prizeModal15"><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/pic-15.jpg" alt=""></a>
								</div>
							</li>
							<li>
								<div class="slide-img">
									<div class="slide-waku16">
										<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/fuchi-16.png" alt="">
									</div>
									<a class="fancybox" data-type="inline" href="#prizeModal16"><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/pic-16.jpg" alt=""></a>
								</div>
							</li>
						</ul>
					</div>
					<div class="slide-center3">
						<ul>
							<li>
								<div class="slide-img">
									<div class="slide-waku10">
										<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/fuchi-17.png" alt="">
									</div>
									<a class="fancybox" data-type="inline" href="#prizeModal17"><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/pic-17.jpg" alt=""></a>
								</div>
							</li>
						</ul>
					</div>
					<div class="slide-right3-1">
						<ul>
							<li>
								<div class="slide-img">
									<div class="slide-waku18">
										<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/fuchi-18.png" alt="">
									</div>
									<a class="fancybox" data-type="inline" href="#prizeModal18"><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/pic-18.jpg" alt=""></a>
								</div>
							</li>
							<li>
								<div class="slide-img">
									<div class="slide-waku19">
										<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/fuchi-19.png" alt="">
									</div>
									<a class="fancybox" data-type="inline" href="#prizeModal19"><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/pic-19.jpg" alt=""></a>
								</div>
							</li>
						</ul>
					</div>
					<div class="slide-right3-2">
						<ul>
							<li>
								<div class="slide-img">
									<div class="slide-waku20">
										<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/fuchi-20.png" alt="">
									</div>
									<a class="fancybox" data-type="inline" href="#prizeModal20"><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/pic-20.jpg" alt=""></a>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<ul class="sp-list ptn3">
					<li>
						<div class="slide-img">
							<div class="slide-waku14">
								<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/fuchi-14.png" alt="">
							</div>
							<a class="fancybox" data-type="inline" href="#prizeModal14"><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/pic-14.jpg" alt=""></a>
						</div>
					</li>
					<li>
						<div class="slide-left">
							<ul>
								<li>
									<div class="slide-img">
										<div class="slide-waku15">
											<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/fuchi-15.png" alt="">
										</div>
										<a class="fancybox" data-type="inline" href="#prizeModal15"><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/pic-15.jpg" alt=""></a>
									</div>
								</li>
								<li>
									<div class="slide-img">
										<div class="slide-waku16">
											<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/fuchi-16.png" alt="">
										</div>
										<a class="fancybox" data-type="inline" href="#prizeModal16"><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/pic-16.jpg" alt=""></a>
									</div>
								</li>
							</ul>
						</div>
						<div class="slide-center">
							<ul>
								<li>
									<div class="slide-img">
										<div class="slide-waku10">
											<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/fuchi-17.png" alt="">
										</div>
										<a class="fancybox" data-type="inline" href="#prizeModal17"><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/pic-17.jpg" alt=""></a>
									</div>
								</li>
							</ul>
						</div>
						<div class="slide-right">
							<ul>
								<li>
									<div class="slide-img">
										<div class="slide-waku18">
											<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/fuchi-18.png" alt="">
										</div>
										<a class="fancybox" data-type="inline" href="#prizeModal18"><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/pic-18.jpg" alt=""></a>
									</div>
								</li>
								<li>
									<div class="slide-img">
										<div class="slide-waku19">
											<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/fuchi-19.png" alt="">
										</div>
										<a class="fancybox" data-type="inline" href="#prizeModal19"><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/pic-19.jpg" alt=""></a>
									</div>
								</li>
							</ul>
						</div>
					</li>
					<li>
						<div class="slide-img">
							<div class="slide-waku20">
								<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/fuchi-20.png" alt="">
							</div>
							<a class="fancybox" data-type="inline" href="#prizeModal20"><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/pic-20.jpg" alt=""></a>
						</div>
					</li>
				</ul>
			</div>
			<div class="slide-item">
				<div class="slide-flex ptn4">
					<div class="slide-left4-1">
						<ul>
							<li>
								<div class="slide-img">
									<div class="slide-waku21">
										<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/fuchi-21.png" alt="">
									</div>
									<a class="fancybox" data-type="inline" href="#prizeModal21"><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/pic-21.jpg" alt=""></a>
								</div>
							</li>
						</ul>
					</div>
					<div class="slide-left4-2">
						<ul>
							<li>
								<div class="slide-img">
									<div class="slide-waku22">
										<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/fuchi-22.png" alt="">
									</div>
									<a class="fancybox" data-type="inline" href="#prizeModal22"><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/pic-22.jpg" alt=""></a>
								</div>
							</li>
						</ul>
					</div>
					<div class="slide-center4">
						<ul>
							<li>
								<div class="slide-img">
									<div class="slide-waku23">
										<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/fuchi-23.png" alt="">
									</div>
									<a class="fancybox" data-type="inline" href="#prizeModal23"><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/pic-23.jpg" alt=""></a>
								</div>
							</li>
							<li>
								<div class="slide-img">
									<div class="slide-waku24">
										<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/fuchi-24.png" alt="">
									</div>
									<a class="fancybox" data-type="inline" href="#prizeModal24"><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/pic-24.jpg" alt=""></a>
								</div>
							</li>
						</ul>
					</div>
					<div class="slide-right4-1">
						<ul>
							<li>
								<div class="slide-img">
									<div class="slide-waku25">
										<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/fuchi-25.png" alt="">
									</div>
									<a class="fancybox" data-type="inline" href="#prizeModal25"><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/pic-25.jpg" alt=""></a>
								</div>
							</li>
						</ul>
					</div>
					<div class="slide-right4-2">
						<ul>
							<li>
								<div class="slide-img">
									<div class="slide-waku26">
										<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/fuchi-26.png" alt="">
									</div>
									<a class="fancybox" data-type="inline" href="#prizeModal26"><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/pic-26.jpg" alt=""></a>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<ul class="sp-list ptn2">
					<li>
						<div class="slide-img">
							<div class="slide-waku21">
								<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/fuchi-21.png" alt="">
							</div>
							<a class="fancybox" data-type="inline" href="#prizeModal21"><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/pic-21.jpg" alt=""></a>
						</div>
					</li>
					<li>
						<div class="slide-img">
							<div class="slide-waku23">
								<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/fuchi-23.png" alt="">
							</div>
							<a class="fancybox" data-type="inline" href="#prizeModal23"><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/pic-23.jpg" alt=""></a>
						</div>
					</li>
					<li>
						<div class="slide-img">
							<div class="slide-waku24">
								<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/fuchi-24.png" alt="">
							</div>
							<a class="fancybox" data-type="inline" href="#prizeModal24"><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/pic-24.jpg" alt=""></a>
						</div>
					</li>
					<li>
						<div class="slide-img">
							<div class="slide-waku22">
								<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/fuchi-22.png" alt="">
							</div>
							<a class="fancybox" data-type="inline" href="#prizeModal22"><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/pic-22.jpg" alt=""></a>
						</div>
					</li>
					<li>
						<div class="slide-img">
							<div class="slide-waku25">
								<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/fuchi-25.png" alt="">
							</div>
							<a class="fancybox" data-type="inline" href="#prizeModal25"><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/pic-25.jpg" alt=""></a>
						</div>
					</li>
					<li>
						<div class="slide-img">
							<div class="slide-waku26">
								<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/fuchi-26.png" alt="">
							</div>
							<a class="fancybox" data-type="inline" href="#prizeModal26"><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/pic-26.jpg" alt=""></a>
						</div>
					</li>
				</ul>
			</div>
			<div class="slide-item">
				<div class="slide-flex ptn5">
					<div class="slide-left5">
						<ul>
							<li>
								<div class="slide-img">
									<div class="slide-waku27">
										<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/fuchi-27.png" alt="">
									</div>
									<a class="fancybox" data-type="inline" href="#prizeModal27"><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/pic-27.jpg" alt=""></a>
								</div>
							</li>
							<li>
								<div class="slide-img">
									<div class="slide-waku28">
										<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/fuchi-28.png" alt="">
									</div>
									<a class="fancybox" data-type="inline" href="#prizeModal28"><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/pic-28.jpg" alt=""></a>
								</div>
							</li>
						</ul>
					</div>
					<div class="slide-center5">
						<ul>
							<li>
								<div class="slide-img">
									<div class="slide-waku29">
										<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/fuchi-29.png" alt="">
									</div>
									<a class="fancybox" data-type="inline" href="#prizeModal29"><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/pic-29.jpg" alt=""></a>
								</div>
							</li>
							<li>
								<div class="slide-img">
									<div class="slide-waku30">
										<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/fuchi-30.png" alt="">
									</div>
									<a class="fancybox" data-type="inline" href="#prizeModal30"><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/pic-30.jpg" alt=""></a>
								</div>
							</li>
							<li>
								<div class="slide-img">
									<div class="slide-waku31">
										<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/fuchi-31.png" alt="">
									</div>
									<a class="fancybox" data-type="inline" href="#prizeModal31"><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/pic-31.jpg" alt=""></a>
								</div>
							</li>
						</ul>
					</div>
					<div class="slide-right5">
						<ul>
							<li>
								<div class="slide-img">
									<div class="slide-waku32">
										<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/fuchi-32.png" alt="">
									</div>
									<a class="fancybox" data-type="inline" href="#prizeModal32"><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/pic-32.jpg" alt=""></a>
								</div>
							</li>
							<li>
								<div class="slide-img">
									<div class="slide-waku33">
										<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/fuchi-33.png" alt="">
									</div>
									<a class="fancybox" data-type="inline" href="#prizeModal33"><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/pic-33.jpg" alt=""></a>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<ul class="sp-list ptn4">
					<li>
						<div class="slide-img">
							<div class="slide-waku27">
								<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/fuchi-27.png" alt="">
							</div>
							<a class="fancybox" data-type="inline" href="#prizeModal27"><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/pic-27.jpg" alt=""></a>
						</div>
					</li>
					<li>
						<div class="slide-img">
							<div class="slide-waku28">
								<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/fuchi-28.png" alt="">
							</div>
							<a class="fancybox" data-type="inline" href="#prizeModal28"><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/pic-28.jpg" alt=""></a>
						</div>
					</li>
					<li>
						<div class="slide-img">
							<div class="slide-waku29">
								<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/fuchi-29.png" alt="">
							</div>
							<a class="fancybox" data-type="inline" href="#prizeModal29"><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/pic-29.jpg" alt=""></a>
						</div>
					</li>
					<li>
						<div class="slide-img">
							<div class="slide-waku30">
								<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/fuchi-30.png" alt="">
							</div>
							<a class="fancybox" data-type="inline" href="#prizeModal30"><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/pic-30.jpg" alt=""></a>
						</div>
					</li>
					<li>
						<div class="slide-img">
							<div class="slide-waku31">
								<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/fuchi-31.png" alt="">
							</div>
							<a class="fancybox" data-type="inline" href="#prizeModal31"><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/pic-31.jpg" alt=""></a>
						</div>
					</li>
					<li>
						<div class="slide-img">
							<div class="slide-waku32">
								<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/fuchi-32.png" alt="">
							</div>
							<a class="fancybox" data-type="inline" href="#prizeModal32"><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/pic-32.jpg" alt=""></a>
						</div>
					</li>
					<li>
						<div class="slide-img">
							<div class="slide-waku33">
								<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/fuchi-33.png" alt="">
							</div>
							<a class="fancybox" data-type="inline" href="#prizeModal33"><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/pic-33.jpg" alt=""></a>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="close-btn min">
		<a href="../../" target="_blank">
			出口
		</a>
	</div>
</div>
<div id="prizeModal1" style="display: none;">
	<div class="modal-content">
		<div class="modal-body">
			<div class="modal-img">
				<div class="img-waku-01">
					<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/modal-fuchi-01.png" alt="">
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/modalpic-01.jpg" alt="">
			</div>
			<div class="modal-text">
				<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/text-bg.png" alt="">
				<div class="text-box min">
				<p class="ttl">イチゴ農家になります</p>
				<p class="name">Masakazu Kokado</p>
				<p class="text left">AIとドローンを駆使したスマート農業を目指して起業。自分でつくったWEBページで直販しダイレクトにイチゴを提供します。Youtubeチャンネルをつくり、TikTokでイチゴ体操を実施。</p>
				</div>
			</div>
			<button type="button" class="modalclose-btn rounded-pill" data-fancybox-close><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/batsu.png""></button>
		</div>
	</div>
</div>
<div id="prizeModal2" style="display: none;">
	<div class="modal-content">
		<div class="modal-body">
			<div class="modal-img">
				<div class="img-waku-02">
					<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/modal-fuchi-02.png" alt="">
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/modalpic-02.jpg" alt="">
			</div>
			<div class="modal-text">
				<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/text-bg.png" alt="">
				<div class="text-box min">
				<p class="ttl">カワウソを我が子に迎える</p>
				<p class="name">Yoshiyuki Takeuchi</p>
				<p class="text left">オレはデカイ一戸建て住宅を手に入れた。庭はむちゃくちゃ広い。そして、可愛くて仕方がないカワウソちゃんは今日も元気だ。ここに写ってはいないけど、柴犬ちゃんも一緒に暮らしている。心が癒やされて、満たされて、オレは自分の腕までカワウソちゃんみたいになってきたぜ。だから、とっても幸せだ！</p>
				</div>
			</div>
			<button type="button" class="modalclose-btn rounded-pill" data-fancybox-close><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/batsu.png""></button>
		</div>
	</div>
</div>
<div id="prizeModal3" style="display: none;">
	<div class="modal-content">
		<div class="modal-body">
			<div class="modal-img">
				<div class="img-waku-03">
					<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/modal-fuchi-03.png" alt="">
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/modalpic-03.jpg" alt="">
			</div>
			<div class="modal-text">
				<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/text-bg.png" alt="">
				<div class="text-box min">
				<p class="ttl">ずっと行きたかった海外旅行</p>
				<p class="name">Kazuki Kiryu</p>
				<p class="text">悲願の海外旅行に初挑戦!<br>
					香港に行ってブラブラすることが夢です!</p>
				</div>
			</div>
			<button type="button" class="modalclose-btn rounded-pill" data-fancybox-close><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/batsu.png""></button>
		</div>
	</div>
</div>
<div id="prizeModal4" style="display: none;">
	<div class="modal-content">
		<div class="modal-body">
			<div class="modal-img">
				<div class="img-waku-04">
					<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/modal-fuchi-04.png" alt="">
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/modalpic-04.jpg" alt="">
			</div>
			<div class="modal-text">
				<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/text-bg.png" alt="">
				<div class="text-box min">
				<p class="ttl">自宅の庭にマイ・プライベート、ドッグラン</p>
				<p class="name">Takako Morinaga</p>
				<p class="text">広い庭にかわいいワンコたちを放牧して、のんびり過ごします。<br>
					もふもふの癒しに包まれながら、ワンコたちと遊んだり、楽しい時間を過ごします。</p>
				</div>
			</div>
			<button type="button" class="modalclose-btn rounded-pill" data-fancybox-close><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/batsu.png""></button>
		</div>
	</div>
</div>
<div id="prizeModal5" style="display: none;">
	<div class="modal-content">
		<div class="modal-body">
			<div class="modal-img">
				<div class="img-waku-05">
					<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/modal-fuchi-05.png" alt="">
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/modalpic-05.jpg" alt="">
			</div>
			<div class="modal-text">
				<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/text-bg.png" alt="">
				<div class="text-box min">
				<p class="ttl">世界の子どもたちに笑顔を</p>
				<p class="name">Takeshi Kato</p>
				<p class="text left">世界には毎日の食事にさえ困っている子どもたちがいますが、食事は生きる上で最も重要です。飢えを恐れずに済むことで、子どもたちは学び、遊び、夢を追いかける力を得られます。私は、世界の子どもたちに笑顔を届ける旅に出ます。</p>
				</div>
			</div>
			<button type="button" class="modalclose-btn rounded-pill" data-fancybox-close><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/batsu.png""></button>
		</div>
	</div>
</div>
<div id="prizeModal6" style="display: none;">
	<div class="modal-content">
		<div class="modal-body">
			<div class="modal-img">
				<div class="img-waku-06">
					<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/modal-fuchi-06.png" alt="">
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/modalpic-06.jpg" alt="">
			</div>
			<div class="modal-text">
				<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/text-bg.png" alt="">
				<div class="text-box min">
				<p class="ttl">全身を整形します！</p>
				<p class="name">Chie Ide</p>
				<p class="text left">しかしお金が足りず身長だけが伸びました。とりあえず調子にのってパーティーに行ってみたりします。本当は赤いドレスが着たかったけどいざとなると恥ずかしがるのが悪いクセです。</p>
				</div>
			</div>
			<button type="button" class="modalclose-btn rounded-pill" data-fancybox-close><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/batsu.png""></button>
		</div>
	</div>
</div>
<div id="prizeModal7" style="display: none;">
	<div class="modal-content">
		<div class="modal-body">
			<div class="modal-img">
				<div class="img-waku-07">
					<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/modal-fuchi-07.png" alt="">
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/modalpic-07.jpg" alt="">
			</div>
			<div class="modal-text">
				<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/text-bg.png" alt="">
				<div class="text-box min">
				<p class="ttl">宇宙旅行</p>
				<p class="name">Sakuya Uno</p>
				<p class="text">BUMPのライブアルバムを流して<br>
					宇宙をライブ会場にしたい。</p>
				</div>
			</div>
			<button type="button" class="modalclose-btn rounded-pill" data-fancybox-close><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/batsu.png""></button>
		</div>
	</div>
</div>
<div id="prizeModal8" style="display: none;">
	<div class="modal-content">
		<div class="modal-body">
			<div class="modal-img">
				<div class="img-waku-08">
					<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/modal-fuchi-08.png" alt="">
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/modalpic-08.jpg" alt="">
			</div>
			<div class="modal-text">
				<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/text-bg.png" alt="">
				<div class="text-box min">
				<p class="ttl">アジアの学校に寄付</p>
				<p class="name">Takeshi Takahashi</p>
				<p class="text">子どもたちの輝かしい未来をお手伝いがしたいです。</p>
				</div>
			</div>
			<button type="button" class="modalclose-btn rounded-pill" data-fancybox-close><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/batsu.png""></button>
		</div>
	</div>
</div>
<div id="prizeModal9" style="display: none;">
	<div class="modal-content">
		<div class="modal-body">
			<div class="modal-img">
				<div class="img-waku-09">
					<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/modal-fuchi-09.png" alt="">
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/modalpic-09.jpg" alt="">
			</div>
			<div class="modal-text">
				<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/text-bg.png" alt="">
				<div class="text-box min">
				<p class="ttl">シャチ飼います</p>
				<p class="name">Kuroudo Ueno</p>
				<p class="text">小学校の卒業文集に書いてた将来の夢がシャチを飼うことでした。<br>
					12年前の自分の夢叶えてあげます。</p>
				</div>
			</div>
			<button type="button" class="modalclose-btn rounded-pill" data-fancybox-close><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/batsu.png""></button>
		</div>
	</div>
</div>
<div id="prizeModal10" style="display: none;">
	<div class="modal-content">
		<div class="modal-body">
			<div class="modal-img">
				<div class="img-waku-10">
					<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/modal-fuchi-10.png" alt="">
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/modalpic-10.jpg" alt="">
			</div>
			<div class="modal-text">
				<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/text-bg.png" alt="">
				<div class="text-box min">
				<p class="ttl">通学路に植樹をしたい</p>
				<p class="name">Ryotoku Hara</p>
				<p class="text left">我が家は小学校の通学路に隣接。暑い時期、汗だくで重たいランドセルを背負い下を見ながら歩く子供たちを見て毎年思うこと。「木漏れ日の下を歩ければ少しは涼しくなるかな」を実現したいです。</p>
				</div>
			</div>
			<button type="button" class="modalclose-btn rounded-pill" data-fancybox-close><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/batsu.png""></button>
		</div>
	</div>
</div>
<div id="prizeModal11" style="display: none;">
	<div class="modal-content">
		<div class="modal-body">
			<div class="modal-img">
				<div class="img-waku-11">
					<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/modal-fuchi-11.png" alt="">
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/modalpic-11.jpg" alt="">
			</div>
			<div class="modal-text">
				<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/text-bg.png" alt="">
				<div class="text-box min">
				<p class="ttl">Macao</p>
				<p class="name">Yugo Wakakonai</p>
				<p class="text">Macaoにて、全額をBETです。<br>
					スリルと興奮を味わいます。</p>				
				</div>
			</div>
			<button type="button" class="modalclose-btn rounded-pill" data-fancybox-close><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/batsu.png""></button>
		</div>
	</div>
</div>
<div id="prizeModal12" style="display: none;">
	<div class="modal-content">
		<div class="modal-body">
			<div class="modal-img">
				<div class="img-waku-12">
					<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/modal-fuchi-12.png" alt="">
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/modalpic-12.jpg" alt="">
			</div>
			<div class="modal-text">
				<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/text-bg.png" alt="">
				<div class="text-box min">
				<p class="ttl">南極探検隊を結成！</p>
				<p class="name">Noriko Idota</p>
				<p class="text">地球・生物の歴史を感じるために、南極大陸へ。<br>
					フサフサの頼もしいサモエド犬を相棒に、<br>
					誰のものでもない永久氷床を勇敢に探検！</p>
				</div>
			</div>
			<button type="button" class="modalclose-btn rounded-pill" data-fancybox-close><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/batsu.png""></button>
		</div>
	</div>
</div>
<div id="prizeModal13" style="display: none;">
	<div class="modal-content">
		<div class="modal-body">
			<div class="modal-img">
				<div class="img-waku-13">
					<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/modal-fuchi-13.png" alt="">
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/modalpic-13.jpg" alt="">
			</div>
			<div class="modal-text">
				<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/text-bg.png" alt="">
				<div class="text-box min">
				<p class="ttl">宇宙ステーションにて異星人とパーティーを通じて異文化交流</p>
				<p class="name">Tsukasa Yamamoto</p>
				<p class="text">何を言っているのか理解できない、<br>
					何を食べさせられているかも分からないけれど、<br>
					なんとなく楽しい、有意義な時を過ごしている。</p>
				</div>
			</div>
			<button type="button" class="modalclose-btn rounded-pill" data-fancybox-close><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/batsu.png""></button>
		</div>
	</div>
</div>
<div id="prizeModal14" style="display: none;">
	<div class="modal-content">
		<div class="modal-body">
			<div class="modal-img">
				<div class="img-waku-14">
					<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/modal-fuchi-14.png" alt="">
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/modalpic-14.jpg" alt="">
			</div>
			<div class="modal-text">
				<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/text-bg.png" alt="">
				<div class="text-box min">
				<p class="ttl">休日はプライベートジェットで</p>
				<p class="name">Yuji Yamagishi</p>
				<p class="text left">行きたい時に行きたい場所へひとっ飛び。バカンスはもちろん、これで世界中の美味しいお酒と食べ物を仕入れたり、日本の鮮度抜群のお魚を海外セレブに売るのだ。</p>
				</div>
			</div>
			<button type="button" class="modalclose-btn rounded-pill" data-fancybox-close><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/batsu.png""></button>
		</div>
	</div>
</div>
<div id="prizeModal15" style="display: none;">
	<div class="modal-content">
		<div class="modal-body">
			<div class="modal-img">
				<div class="img-waku-15">
					<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/modal-fuchi-15.png" alt="">
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/modalpic-15.jpg" alt="">
			</div>
			<div class="modal-text">
				<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/text-bg.png" alt="">
				<div class="text-box min">
				<p class="ttl">高級リトリート施設での集中トレーニング</p>
				<p class="name">Koji Kamiya</p>
				<p class="text">世界中の高級リトリート施設での長期滞在を計画し、集中トレーニングと健康プログラムに参加する。エキスパートの指導の下、心身ともに健康的な体を手に入れる。</p>
				</div>
			</div>
			<button type="button" class="modalclose-btn rounded-pill" data-fancybox-close><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/batsu.png""></button>
		</div>
	</div>
</div>
<div id="prizeModal16" style="display: none;">
	<div class="modal-content">
		<div class="modal-body">
			<div class="modal-img">
				<div class="img-waku-16">
					<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/modal-fuchi-16.png" alt="">
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/modalpic-16.jpg" alt="">
			</div>
			<div class="modal-text">
				<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/text-bg.png" alt="">
				<div class="text-box min">
				<p class="ttl">ご機嫌人生</p>
				<p class="name">Minori Kamiya</p>
				<p class="text">朝はサーフィン。昼はビール。昼寝のあともサーフィン。夜はビール。<br>
					そんな南の島でのご機嫌人生を夢見ています。</p>
				</div>
			</div>
			<button type="button" class="modalclose-btn rounded-pill" data-fancybox-close><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/batsu.png""></button>
		</div>
	</div>
</div>
<div id="prizeModal17" style="display: none;">
	<div class="modal-content">
		<div class="modal-body">
			<div class="modal-img">
				<div class="img-waku-17">
					<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/modal-fuchi-17.png" alt="">
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/modalpic-17.jpg" alt="">
			</div>
			<div class="modal-text">
				<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/text-bg.png" alt="">
				<div class="text-box min">
				<p class="ttl">世界一の魔術師になります！</p>
				<p class="name">Yudai Ishikawa</p>
				<p class="text left">アラビアンな雰囲気の場所へ行き、その地にしかない魔術を習得し、世界一の魔術師になって、虎を携え、残ったお金で世界を巡り日本まで帰ります。</p>
				</div>
			</div>
			<button type="button" class="modalclose-btn rounded-pill" data-fancybox-close><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/batsu.png""></button>
		</div>
	</div>
</div>
<div id="prizeModal18" style="display: none;">
	<div class="modal-content">
		<div class="modal-body">
			<div class="modal-img">
				<div class="img-waku-18">
					<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/modal-fuchi-18.png" alt="">
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/modalpic-18.jpg" alt="">
			</div>
			<div class="modal-text">
				<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/text-bg.png" alt="">
				<div class="text-box min">
				<p class="ttl">大きな庭をつくる</p>
				<p class="name">Hikari Morishima</p>
				<p class="text">自然いっぱいの大きな庭をつくって、<br>
					そこでゆっくりティータイムを楽しむ。</p>
				</div>
			</div>
			<button type="button" class="modalclose-btn rounded-pill" data-fancybox-close><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/batsu.png""></button>
		</div>
	</div>
</div>
<div id="prizeModal19" style="display: none;">
	<div class="modal-content">
		<div class="modal-body">
			<div class="modal-img">
				<div class="img-waku-19">
					<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/modal-fuchi-19.png" alt="">
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/modalpic-19.jpg" alt="">
			</div>
			<div class="modal-text">
				<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/text-bg.png" alt="">
				<div class="text-box min">
				<p class="ttl">豪邸を建てます！</p>
				<p class="name">Yutaro Shindo</p>
				<p class="text">大きな豪邸で悠々自適に暮らしたい。<br>
					執事や家事代行を雇い、生活のお世話をしてもらいたい。</p>
				</div>
			</div>
			<button type="button" class="modalclose-btn rounded-pill" data-fancybox-close><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/batsu.png""></button>
		</div>
	</div>
</div>
<div id="prizeModal20" style="display: none;">
	<div class="modal-content">
		<div class="modal-body">
			<div class="modal-img">
				<div class="img-waku-20">
					<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/modal-fuchi-20.png" alt="">
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/modalpic-20.jpg" alt="">
			</div>
			<div class="modal-text">
				<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/text-bg.png" alt="">
				<div class="text-box min">
				<p class="ttl">キャンピングカーに乗って、家族で世界を旅します！</p>
				<p class="name">Futoshi Masujima</p>
				<p class="text left">自然の美しさや異文化の魅力を満喫する冒険へ。各地で出会う人々との交流、美味しい料理の発見、ユニークな体験を通じて、この世界を家族でまるごと楽しむ毎日を過ごします。</p>
				</div>
			</div>
			<button type="button" class="modalclose-btn rounded-pill" data-fancybox-close><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/batsu.png""></button>
		</div>
	</div>
</div>
<div id="prizeModal21" style="display: none;">
	<div class="modal-content">
		<div class="modal-body">
			<div class="modal-img">
				<div class="img-waku-21">
					<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/modal-fuchi-21.png" alt="">
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/modalpic-21.jpg" alt="">
			</div>
			<div class="modal-text">
				<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/text-bg.png" alt="">
				<div class="text-box min">
				<p class="ttl">道楽本屋</p>
				<p class="name">Noriko Hiroshima</p>
				<p class="text">気が向いたときに自分のやりたいフェア開催。<br>
					犬や猫が店内をウロウロしてるような本屋。</p>
				</div>
			</div>
			<button type="button" class="modalclose-btn rounded-pill" data-fancybox-close><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/batsu.png""></button>
		</div>
	</div>
</div>
<div id="prizeModal22" style="display: none;">
	<div class="modal-content">
		<div class="modal-body">
			<div class="modal-img">
				<div class="img-waku-22">
					<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/modal-fuchi-22.png" alt="">
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/modalpic-22.jpg" alt="">
			</div>
			<div class="modal-text">
				<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/text-bg.png" alt="">
				<div class="text-box min">
				<p class="ttl">芸妓さんとお遊びする</p>
				<p class="name">Mitsunobu Hattori</p>
				<p class="text">10億円なんかどうでもいいので、どうせなら自堕落に使いすてる。
				</p>
				</div>
			</div>
			<button type="button" class="modalclose-btn rounded-pill" data-fancybox-close><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/batsu.png""></button>
		</div>
	</div>
</div>
<div id="prizeModal23" style="display: none;">
	<div class="modal-content">
		<div class="modal-body">
			<div class="modal-img">
				<div class="img-waku-23">
					<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/modal-fuchi-23.png" alt="">
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/modalpic-23.jpg" alt="">
			</div>
			<div class="modal-text">
				<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/text-bg.png" alt="">
				<div class="text-box min">
				<p class="ttl">世界中でキャンプ</p>
				<p class="name">Nakagawa Masaki</p>
				<p class="text">フィンランドのオーロラの空の下、オーストラリアのエアーズロックの前など<br>
					世界各国、さまざまな場所でキャンプがしてみたいです。</p>
				</div>
			</div>
			<button type="button" class="modalclose-btn rounded-pill" data-fancybox-close><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/batsu.png""></button>
		</div>
	</div>
</div>
<div id="prizeModal24" style="display: none;">
	<div class="modal-content">
		<div class="modal-body">
			<div class="modal-img">
				<div class="img-waku-24">
					<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/modal-fuchi-24.png" alt="">
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/modalpic-24.jpg" alt="">
			</div>
			<div class="modal-text">
				<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/text-bg.png" alt="">
				<div class="text-box min">
				<p class="ttl">沢山の車のオーナー</p>
				<p class="name">Daisuke Takeuchi</p>
				<p class="text">もし10億手に入ったらめっちゃ沢山車買います。<br>
					税金とかその辺かかるのはわかるんですけど、それでも沢山買います。<br>
					複数の車を使い分けて自分の車で遠方に旅しに行きたいです。
					</p>
				</div>
			</div>
			<button type="button" class="modalclose-btn rounded-pill" data-fancybox-close><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/batsu.png""></button>
		</div>
	</div>
</div>
<div id="prizeModal25" style="display: none;">
	<div class="modal-content">
		<div class="modal-body">
			<div class="modal-img">
				<div class="img-waku-25">
					<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/modal-fuchi-25.png" alt="">
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/modalpic-25.jpg" alt="">
			</div>
			<div class="modal-text">
				<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/text-bg.png" alt="">
				<div class="text-box min">
				<p class="ttl">形から飛行士</p>
				<p class="name">Shotaro Tochii</p>
				<p class="text">体裁よりロマン。<br>
					「いつまで経っても冒険心を忘れない」という言葉をそのまま体現。<br>
					「何事も形から入る。」と衣装を整え、空の旅を楽しむ。
					</p>
				</div>
			</div>
			<button type="button" class="modalclose-btn rounded-pill" data-fancybox-close><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/batsu.png""></button>
		</div>
	</div>
</div>
<div id="prizeModal26" style="display: none;">
	<div class="modal-content">
		<div class="modal-body">
			<div class="modal-img">
				<div class="img-waku-26">
					<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/modal-fuchi-26.png" alt="">
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/modalpic-26.jpg" alt="">
			</div>
			<div class="modal-text">
				<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/text-bg.png" alt="">
				<div class="text-box min">
				<p class="ttl">のんびりカフェを開きます</p>
				<p class="name">Katsuya Wada</p>
				<p class="text">現在彼女と運営しているコーヒースタンドの実店舗を<br>
					沖縄を舞台に遂にオープンします。<br>
					自然と海に囲まれ、のどかな空気感が僕らにはお似合いです。</p>
				</div>
			</div>
			<button type="button" class="modalclose-btn rounded-pill" data-fancybox-close><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/batsu.png""></button>
		</div>
	</div>
</div>
<div id="prizeModal27" style="display: none;">
	<div class="modal-content">
		<div class="modal-body">
			<div class="modal-img">
				<div class="img-waku-27">
					<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/modal-fuchi-27.png" alt="">
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/modalpic-27.jpg" alt="">
			</div>
			<div class="modal-text">
				<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/text-bg.png" alt="">
				<div class="text-box min">
				<p class="ttl">シベリアン・ハスキーと私</p>
				<p class="name">Mei Sugamura</p>
				<p class="text">広大な土地を買って動物をたくさん飼いたい。<br>
					特にシベリアン・ハスキーがユーモア溢れてて大好き。<br>
					一緒に庭を走り回りたいです。</p>
				</div>
			</div>
			<button type="button" class="modalclose-btn rounded-pill" data-fancybox-close><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/batsu.png""></button>
		</div>
	</div>
</div>
<div id="prizeModal28" style="display: none;">
	<div class="modal-content">
		<div class="modal-body">
			<div class="modal-img">
				<div class="img-waku-28">
					<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/modal-fuchi-28.png" alt="">
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/modalpic-28.jpg" alt="">
			</div>
			<div class="modal-text">
				<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/text-bg.png" alt="">
				<div class="text-box min">
				<p class="ttl">宇宙旅行をします</p>
				<p class="name">Yoshihiro Kataoka</p>
				<p class="text left">未知の宇宙に思いを馳せ、無重力の宇宙ステーションから無数の星々を眺める瞬間は、きっと人生で最も素晴らしい体験になるはずです。人類がこのツアーをもっと気軽に体験出来る日を願って...</p>
				</div>
			</div>
			<button type="button" class="modalclose-btn rounded-pill" data-fancybox-close><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/batsu.png""></button>
		</div>
	</div>
</div>
<div id="prizeModal29" style="display: none;">
	<div class="modal-content">
		<div class="modal-body">
			<div class="modal-img">
				<div class="img-waku-29">
					<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/modal-fuchi-29.png" alt="">
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/modalpic-29.jpg" alt="">
			</div>
			<div class="modal-text">
				<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/text-bg.png" alt="">
				<div class="text-box min">
				<p class="ttl">宇宙空間で撮影する映画監督</p>
				<p class="name">Jun Adachi</p>
				</div>
			</div>
			<button type="button" class="modalclose-btn rounded-pill" data-fancybox-close><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/batsu.png""></button>
		</div>
	</div>
</div>
<div id="prizeModal30" style="display: none;">
	<div class="modal-content">
		<div class="modal-body">
			<div class="modal-img">
				<div class="img-waku-30">
					<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/modal-fuchi-30.png" alt="">
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/modalpic-30.jpg" alt="">
			</div>
			<div class="modal-text">
				<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/text-bg.png" alt="">
				<div class="text-box min">
				<p class="ttl">リゾートホテルオーナー</p>
				<p class="name">Sayumi Murayama</p>
				<p class="text">南国のリゾートで日頃の疲れを癒して頂きたいです。<br>
					都会の喧騒を離れ、全ての電子機器からも解放され<br>
					素朴で自然あふれるこの島へようこそ。
					</p>
				</div>
			</div>
			<button type="button" class="modalclose-btn rounded-pill" data-fancybox-close><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/batsu.png""></button>
		</div>
	</div>
</div>
<div id="prizeModal31" style="display: none;">
	<div class="modal-content">
		<div class="modal-body ex">
			<div class="modal-img">
				<div class="img-waku-31">
					<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/modal-fuchi-31.png" alt="">
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/modalpic-31.jpg" alt="">
			</div>
			<div class="modal-text">
				<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/text-bg.png" alt="">
				<div class="text-box min">
				<p class="ttl">アイドルグループをつくる</p>
				<p class="name">Kenichi Kobayashi</p>
				<p class="text">この年齢でのアイドルグループのリーダー！<br>
					かっこよくないですか？<br>
					可能なら、バンドでリードギターもぜひやりたい！？
					</p>
				</div>
			</div>
			<button type="button" class="modalclose-btn rounded-pill" data-fancybox-close><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/batsu.png""></button>
		</div>
	</div>
</div>
<div id="prizeModal32" style="display: none;">
	<div class="modal-content">
		<div class="modal-body">
			<div class="modal-img">
				<div class="img-waku-32">
					<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/modal-fuchi-32.png" alt="">
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/modalpic-32.jpg" alt="">
			</div>
			<div class="modal-text">
				<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/text-bg.png" alt="">
				<div class="text-box min">
				<p class="ttl">ご用達BAR経営</p>
				<p class="name">Yasunori Tagai</p>
				<p class="text">社員契約形態から、福利厚生サービス提供的な存在の在席に変更し<br>
					会社併設のBARを経営。</p>
				</div>
			</div>
			<button type="button" class="modalclose-btn rounded-pill" data-fancybox-close><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/batsu.png""></button>
		</div>
	</div>
</div>
<div id="prizeModal33" style="display: none;">
	<div class="modal-content">
		<div class="modal-body">
			<div class="modal-img">
				<div class="img-waku-33">
					<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/modal-fuchi-33.png" alt="">
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/modalpic-33.jpg" alt="">
			</div>
			<div class="modal-text">
				<img src="<?php echo get_template_directory_uri(); ?>/gallery/images/text-bg.png" alt="">
				<div class="text-box min">
				<p class="ttl">憧れの戦闘機パイロット</p>
				<p class="name">Isao Saito</p>
				<p class="text left">子どもの頃、親父と一緒に見た映画で戦闘機が登場した時に操縦してみたい！という思いがあった。大空に描かれる飛行機雲や重厚なプロペラのエンジン音に憧れたのは忘れられない。休日に自慢の愛機に乗って大空に飛び立つのが夢。</p>
				</div>
			</div>
			<button type="button" class="modalclose-btn rounded-pill" data-fancybox-close><img src="<?php echo get_template_directory_uri(); ?>/gallery/images/batsu.png""></button>
		</div>
	</div>
</div>
</body>
</html>
