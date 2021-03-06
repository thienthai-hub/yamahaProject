﻿<?php include 'inc/config.php'; ?>
<?php include 'inc/functions.php'; ?>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	
    <!-- SEO -->
    <title>Vietnam Racing Festival 2020</title>
	<meta name="description" content="Where's your limit?">
	<meta name="keywords" content="">
	<meta name="og:title" content="Vietnam Racing Festival 2020">
	<meta name="og:description" content="Where's your limit?">
	<meta name="og:image" content="assets/images/logo.png">
    
	<meta property="og:image" content="assets/images/bg.jpg">
	<meta property="og:image:type" content="image/png">
	<meta property="og:image:width" content="1024">
	<meta property="og:image:height" content="576">

    <link rel="icon" type="image/png" href="assets/images/favicon.png">
    <meta name="robots" content="noodp, noydir">

    <!-- No Google Translate toolbar -->

    <meta name="google" content="notranslate">

    <!-- Viewport and mobile -->

    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="HandheldFriendly" content="true">
    <meta name="MobileOptimized" content="320">
    <meta http-equiv="cleartype" content="on">
	<script src="http://code.jquery.com/jquery-1.11.1.js"></script>
	<link rel="stylesheet" href="<?php echo auto_version('assets/main.css'); ?>" type="text/css" />
	<link rel="stylesheet" href="<?php echo auto_version('assets/index.css'); ?>" type="text/css" />
	<link rel="stylesheet" href="<?php echo auto_version('assets/css/desktop.css'); ?>" type="text/css" />
	<link rel="stylesheet" href="<?php echo auto_version('assets/css/tablet.css'); ?>" type="text/css" />
	<link rel="stylesheet" href="<?php echo auto_version('assets/css/mobile.css'); ?>" type="text/css" />
	
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
    <!-- CSS -->
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
	<script>
		function changeVid(youtubeUrl){
			$('.video-div').attr('src', youtubeUrl);
		};
	</script>
	<!-- Start: Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-Z2075FRD1R"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-Z2075FRD1R');
    </script>
    <!-- End: Global site tag (gtag.js) - Google Analytics -->
    
    <!-- Start: Facebook Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '2740220276218425');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=2740220276218425&ev=PageView&noscript=1"
    /></noscript>
    <!-- End: Facebook Pixel Code -->
</head>
<body style="background: #010300;">
	<?php include 'racing_register.php';?>
    <header id="header">
      <div class="contain">
        <nav>
          <ul id="nav" style="visibility: inherit; opacity: 1;">
            <li><a href="#aboutus" class="nav-left" role="aboutus"><span>giới thiệu</span></a></li>
            <li><a href="#events" class="nav-left" role="events"><span>Sự kiện</span></a></li>
            <li><a href="#plan" class="nav-left" role="plan"><span>lịch thi đấu</span></a></li>
            <li class="logo" style="visibility: visible; transform: matrix(1, 0, 0, 1, 0, 0); cursor: pointer;" onclick="location.href = '<?php echo($domain); ?>';"><a href="<?php echo($domain); ?>"></a></li>
            <li><a href="#term" class="nav-right" role="term"><span>thể lệ <br>thi đấu</span></a></li>
            <li><a href="#news" class="nav-right" role="news"><span>tin tức</span></a></li>
            <li><a href="#gallery" class="nav-right" role="gallery"><span>HÌNH ẢNH <br>&amp; KẾT QUẢ</span></a></li>
          </ul>
        </nav>
      </div>
      <div class="header-mb">
        <a href="<?php echo($domain); ?>" class="logo" style="visibility: visible; transform: matrix(1, 0, 0, 1, 0, 0);"></a>
         <div class="menu-toggle-wrapper" aria-hidden="true">
          <button class="btn-menu menu-closed">
             <span class="menu-icon"></span>
          </button>
        </div>  
      </div>
    </header>

	<section id="pHome">
	<script type="text/javascript">
	var _folder = '/';
	var _newsDetail = ''; 
	var isMobile = '0';
</script>
<!-- media style for both phone and ipad: @media screen and (max-width: 900px) -->
<section id="main" style="visibility: inherit; opacity: 1;" class="main-section">
	<script>
		const getDeviceType = () => {
		  const ua = navigator.userAgent;
		  if (/(tablet|ipad|playbook|silk)|(android(?!.*mobi))/i.test(ua)) {
			return "tablet";
		  }
		  if (
			/Mobile|iP(hone|od|ad)|Android|BlackBerry|IEMobile|Kindle|Silk-Accelerated|(hpw|web)OS|Opera M(obi|ini)/.test(
			  ua
			)
		  ) {
			return "mobile";
		  }
		  return "desktop";
		};
		
		$( document ).ready(function() {
			var currentDevice = getDeviceType();
			if (currentDevice != "desktop"){
				$('.panel_controls').hide();
				$('.panel_table_controls').show();
				if (currentDevice == "tablet"){
					$('.video-div').each(function( index ) {
						$( this ).attr("height","300px");
					});
				}
			} else {
				if($(".bg_mb").is(":visible")){
					$('.panel_controls').hide();
					$('.panel_table_controls').show();
					$('.video-div').each(function( index ) {
						$( this ).attr("height","300px");
					});
				}
			}
		});
	</script>
	<style>
		.panel_table_controls {
			top: 20%;
		}
		.panel_table_controls table tr td {
			text-align: center;
		}

	</style>
	<style>
#slider {
    width: 100%;
	overflow: hidden;
}
div#slider figure img {
	width: 20%;
	height: auto;
	float: left;
}
@keyframes slidy { 
	0%  { left: 0%; }
	20% { left: 0%; }
	25% { left: -100%; }
	45% { left: -100%; }
	50% { left: -200%; }
	70% { left: -200%; } 
	75% { left: -300%; }
	95% { left: -300%; }
	100% { left: -400%; } 
}
div#slider figure {
	display:flex;
	position: relative;
	width: 500%;
	margin: 0;
	padding: 0;
	font-size: 0;
	left: 0;
	text-align: left;
    animation: 10s slidy infinite;  
}
</style>
	<!-- <img src="assets/images/bg.jpg" alt="" class="bg_pc"> -->
	<div class="wrapimg-slider">
		<div id="slider">
			<figure>
				<img src="assets/images/slider01.jpg" alt>
				<img src="assets/images/slider02.jpg" alt>
				<img src="assets/images/slider03.jpg" alt>
				<img src="assets/images/slider04.jpg" alt>
				<img src="assets/images/slider05.jpg" alt>
				<img src="assets/images/slider04.jpg" alt>
				<img src="assets/images/slider05.jpg" alt>
			</figure>
		</div>
	</div>
	


	<img src="assets/images/bg-hmb4.jpg" alt="" class="bg_mb">
	<div class="main_copy panel_controls">
		<div class="mb-btn">
			<a href="#register" class="btn btn1 btn2 js-joinnow" role="register" style="transform: matrix(1, 0, 0, 1, 0, 0); visibility: inherit; opacity: 1;">ĐĂNG KÝ THI ĐẤU</a><br/>
			<a href="https://ticketbox.vn/vr-fest-2020#booking" class="btn btn1" role="ticket" style="transform: matrix(1, 0, 0, 1, 0, 0); visibility: inherit; opacity: 1;">MUA VÉ</a>
		</div>
	</div>
<style>
	.wrapper-video {
				z-index:100;
		--color: white;
		font-weight:bold;
		font-size:20px;
		--color-invert: #ffffff;
		--clip-path: circle(50px at left);
		--clip-path-hover: circle(100px at left);
		--clip-path-clicked: circle(100vw at left);
		--duration: .4s;
		--timing-function: ease;
		display: -webkit-box;
		display: -ms-flexbox;
		display: flex;
		-webkit-box-pack: center;
			-ms-flex-pack: center;
				justify-content: center;
		-webkit-box-align: center;
			-ms-flex-align: center;
				align-items: center;
		width: 100%;
		position: absolute;
		top: 4%;
		right: -34%;
	}

	.wrapper-video .video {
	height: 100vh;
	overflow: hidden;
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-box-pack: center;
		-ms-flex-pack: center;
			justify-content: center;
	-webkit-box-align: center;
		-ms-flex-align: center;
			align-items: center;
	margin-left: 15px;
	-webkit-clip-path: var(--clip-path);
			clip-path: var(--clip-path);
	-webkit-transition: -webkit-clip-path var(--duration) var(--timing-function);
	transition: -webkit-clip-path var(--duration) var(--timing-function);
	transition: clip-path var(--duration) var(--timing-function);
	transition: clip-path var(--duration) var(--timing-function), -webkit-clip-path var(--duration) var(--timing-function);
	}

	.wrapper-video .video iframe {
	position: fixed;
	background: #c4cbde;
	top: 50%;
	left: 50%;
	min-width: 100%;
	min-height: 100%;
	width: auto;
	height: auto;
	-webkit-transform: translate(-50%, -50%);
			transform: translate(-50%, -50%);
	}

	.wrapper-video .text {
	position: relative;
	text-transform: uppercase;
	font-weight: 600;
	letter-spacing: .2px;
	opacity: var(--opacity, 1);
	-webkit-transition: opacity 0.3s var(--timing-function) 0.2s;
	transition: opacity 0.3s var(--timing-function) 0.2s;
	}

	.wrapper-video .text::before, .wrapper-video .text::after {
	content: "";
	position: absolute;
	bottom: 0;
	left: -1px;
	right: 25px;
	height: 0;
	}

	.wrapper-video .text::before {
	-webkit-box-shadow: 26px 0 0 1px var(--color);
			box-shadow: 26px 0 0 1px var(--color);
	right: var(--r, 100%);
	opacity: var(--opacity, 0);
	-webkit-transition: right .5s ease-in, opacity .1s linear;
	transition: right .5s ease-in, opacity .1s linear;
	}

	.wrapper-video .text::after {
	-webkit-box-shadow: 26px 0 0 1px var(--color-invert);
			box-shadow: 26px 0 0 1px var(--color-invert);
	-webkit-clip-path: var(--clip-path);
			clip-path: var(--clip-path);
	-webkit-transition: -webkit-clip-path var(--duration) var(--timing-function);
	transition: -webkit-clip-path var(--duration) var(--timing-function);
	transition: clip-path var(--duration) var(--timing-function);
	transition: clip-path var(--duration) var(--timing-function), -webkit-clip-path var(--duration) var(--timing-function);
	}

	.wrapper-video .text > span::before, .wrapper-video .text > span::after {
	content: attr(data-text);
	padding-left: 26px;
	}

	.wrapper-video .text > span::before {
	color: var(--color);
	}

	.wrapper-video .text > span::after {
	color: var(--color-invert);
	-webkit-clip-path: var(--clip-path);
			clip-path: var(--clip-path);
	-webkit-transition: -webkit-clip-path var(--duration) var(--timing-function);
	transition: -webkit-clip-path var(--duration) var(--timing-function);
	transition: clip-path var(--duration) var(--timing-function);
	transition: clip-path var(--duration) var(--timing-function), -webkit-clip-path var(--duration) var(--timing-function);
	position: absolute;
	left: 0;
	}

	.wrapper-video input {
	width: 220px;
	height: 40px;
	margin: auto;
	position: absolute;
	left: 0;
	right: 0;
	border-radius: 40px;
	z-index: 2;
	-webkit-appearance: none;
		-moz-appearance: none;
			appearance: none;
	cursor: pointer;
	}

	.wrapper-video input:focus {
	outline: 0;
	}

	.wrapper-video input:hover ~ .video {
	-webkit-clip-path: var(--clip-path-hover);
			clip-path: var(--clip-path-hover);
	}

	.wrapper-video input:hover ~ .text::before {
	--r: 25px;
	--opacity: 1;
	}

	.wrapper-video input:hover ~ .text::after {
	-webkit-clip-path: var(--clip-path-hover);
			clip-path: var(--clip-path-hover);
	}

	.wrapper-video input:hover ~ .text > span::after {
	-webkit-clip-path: var(--clip-path-hover);
			clip-path: var(--clip-path-hover);
	}

	.wrapper-video input:checked {
	width: 100%;
	height: 100%;
	border-radius: 0;
	}

	.wrapper-video input:checked ~ .video {
	-webkit-clip-path: var(--clip-path-clicked);
			clip-path: var(--clip-path-clicked);
	}

	.wrapper-video input:checked ~ .text {
	--opacity: 0;
	-webkit-transition: opacity 0.3s var(--timing-function);
	transition: opacity 0.3s var(--timing-function);
	}

	.wrapper-video input:checked ~ .text::after {
	-webkit-clip-path: var(--clip-path-clicked);
			clip-path: var(--clip-path-clicked);
	}

	.wrapper-video input:checked ~ .text > span::after {
	-webkit-clip-path: var(--clip-path-clicked);
			clip-path: var(--clip-path-clicked);
	}
	@media (max-width:900px){
		.wrapper-video{
			display:none
		}

	}
</style>
	<div class="wrapper-video">
		<input type="checkbox">
		<div class="video">
			<iframe id="ytplayer" class="responsive-iframe video-div" width="100%" height="100%" src="https://www.youtube.com/embed/Pbjhj2VnqmE?autoplay=1&mute=1&enablejsapi=1
			" frameborder="0" allow='autoplay'></iframe>
		</div>
		<div class="text">
			<span data-text="Watch the video"></span>
		</div>
	</div>
	<div class="main_copy panel_table_controls" style="display: none;">
		<table style="width: 100%;">
			<tr>
				<td>
					<iframe class="video-div" width="100%" height="100%" src="//www.youtube.com/embed/Pbjhj2VnqmE?modestbranding=1&showinfo=0&fs=0&rel=0&autohide=1&controls=0" frameborder="0" allowfullscreen></iframe>
				</td>
			</tr>
			<tr>
				<td>
					<a href="#register" class="btn js-joinnow" role="register" style="transform: matrix(1, 0, 0, 1, 0, 0); visibility: inherit; opacity: 1;">ĐĂNG KÝ THI ĐẤU</a>&nbsp;
					<a href="https://ticketbox.vn/vr-fest-2020#booking" class="btn" role="ticket" style="transform: matrix(1, 0, 0, 1, 0, 0); visibility: inherit; opacity: 1;">MUA VÉ</a>
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>
					<img src="assets/images/Logo_Vinfast.png" width="90%" />
				</td>
			</tr>
			<tr>
				<td><img src="assets/images/whereisyourlimit.png" width="100%" /></td>
			</tr>
			<tr>
				<td><img src="assets/images/don_vi_to_chuc.png" width="100%" /></td>
			</tr>
		</table>
	</div>
</section>


<section id="aboutus" class="display about-video">
	<script>
		var currentAboutContentIndex = 0;
		function ShowAboutusContent(element, className){
			var elementClass = $(element).attr("class");
			$('.' + elementClass).each(function( index ) {
				$( this ).text($( this ).attr("title") + " ►");
			});
			var elementText = $(element).attr("title");
			$(element).text(elementText + " ▼");
			
			var arr = className.split("-");
			$('.' + arr[0] + '-' + arr[1]).hide();
			$('.' + className).each(function( index ) {
				if (arr[2] != currentAboutContentIndex){
					$( this ).show();
				} else {
					$( this ).hide();
					$(element).text(elementText + " ►");
				}
			});
			if (arr[2] != currentAboutContentIndex){
				currentAboutContentIndex = arr[2];
			} else {
				currentAboutContentIndex = arr[2] + 1;
			}
		}
	</script>
	<div class="contain">
		<h4 style="text-align: center;">VỀ CHÚNG TÔI</h4>
		<h2>VIETNAM RACING FESTIVAL 2020</h2>
		<div class="about-contain display">
			<div class="copy-about">
				<div class="aboutus-paragraph">
					<h5 class="aboutus-title" style="cursor: pointer;" onclick="ShowAboutusContent(this, 'aboutus-content-1');" title="Về chúng tôi">Về chúng tôi ►</h5>
					<p class="aboutus-content aboutus-content-1" style="display: none;">Năm 2020, Học viện Đua xe Việt Nam - Vietnam Racing Academy (VR) được thành lập bởi một nhóm doanh nhân với niềm đam mê mãnh liệt với đua xe thể thao. Được hỗ trợ bởi VMA - ASN duy nhất của Liên Đoàn Ô tô Quốc tế FIA tại Việt Nam.</p>
				</div>
				<div class="aboutus-paragraph">
					<h5 class="aboutus-title" style="cursor: pointer;" onclick="ShowAboutusContent(this, 'aboutus-content-2');" title="Câu chuyện">Câu chuyện ►</h5>
					<p class="aboutus-content aboutus-content-2" style="display: none;">Học viện Đua xe Việt Nam (VR) ra đời bởi những con người tâm huyết, trăn trở với nền thể thao đua xe nước nhà. Luôn mong muốn Việt Nam có những tay đua đủ chuyên môn để thi đấu trong khu vực cũng như quốc tế.</p>
				</div>
				<div class="aboutus-paragraph">
					<h5 class="aboutus-title" style="cursor: pointer;" onclick="ShowAboutusContent(this, 'aboutus-content-3');" title="Định hướng">Định hướng ►</h5>
					<p class="aboutus-content aboutus-content-3" style="display: none;">Học viện Vietnam Racing Academy được thành lập để định hướng và đào tạo các tay đua chuyên nghiệp, đồng thời tổ chức các cuộc thi để thúc đẩy môn đua xe thể thao nước nhà trên một nền tảng vững chắc, bài bản nhằm thúc đẩy môn đua xe thể thao tại Việt Nam.</p>
				</div>
				<div class="aboutus-paragraph">
					<h5 class="aboutus-title" style="cursor: pointer;" onclick="ShowAboutusContent(this, 'aboutus-content-4');" title="Giá trị cốt lõi">Giá trị cốt lõi ►</h5>
					<p class="aboutus-content aboutus-content-4" style="display: none;">-	Chuyên Nghiệp</p>
					<p class="aboutus-content aboutus-content-4" style="display: none;">-	Đam Mê</p>
					<p class="aboutus-content aboutus-content-4" style="display: none;">-	Điêu Luyện</p>
					<p class="aboutus-content aboutus-content-4" style="display: none;">-	Tinh Thần Thể Thao</p>
				</div>
				<div class="aboutus-paragraph">
					<h5 class="aboutus-title" style="cursor: pointer;" onclick="ShowAboutusContent(this, 'aboutus-content-5');" title="Tầm nhìn tương lai">Tầm nhìn tương lai ►</h5>
					<p class="aboutus-content aboutus-content-5" style="display: none;">Quảng bá và cấu trúc hóa văn hóa đua xe thể thao tại Việt Nam, cũng như mang đến nhiều cơ hội cho các danh nghiệp trong nước và ngoài nước quảng bá thương hiệu trong môi trường an toàn và công bằng.</p>
				</div>
				<div class="aboutus-users">
					<div class="about-us">
						<div class="row">
						  <div class="aboutus-column">
							<div class="aboutus-card">
							  <div class="aboutus-image" title="GIA BẢO NGUYỄN" style="background-image: url('assets/images/person1.jpg');"></div>
							  <div class="aboutus-card-container">
								<h2>GIA BẢO NGUYỄN</h2>
								<p>Founder</p>
							  </div>
							</div>
						  </div>

						  <div class="aboutus-column">
							<div class="aboutus-card">
							  <div class="aboutus-image" title="DUY TRẦN" style="background-image: url('assets/images/person2.jpg');"></div>
							  <div class="aboutus-card-container">
								<h2>DUY TRẦN</h2>
								<p>Co-Founder</p>
							  </div>
							</div>
						  </div>
						  
						  <div class="aboutus-column">
							<div class="aboutus-card">
							  <div class="aboutus-image" title="RICH PHẠM" style="background-image: url('assets/images/person3.jpg');"></div>
							  <div class="aboutus-card-container">
								<h2>RICH PHẠM</h2>
								<p>Co-Founder</p>
							  </div>
							</div>
						  </div>
						  <div class="aboutus-column">
							<div class="aboutus-card">
							  <div class="aboutus-image" title="VINH NGUYỄN" style="background-image: url('assets/images/person4.jpg');"></div>
							  <div class="aboutus-card-container">
								<h2>VINH NGUYỄN</h2>
								<p>Co-Founder</p>
							  </div>
							</div>
						  </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<script>
$(window).on("load", function() {
    //Wait util all images are loaded
	$('#events').show();
});
</script>
<section id="events" class="display" style="display: none;">
	<div class="contain">
		<h4 style="text-align: center;">Sự kiện</h4>
		<h2>VIETNAM RACING FESTIVAL 2020</h2>
		<script>
			//https://sweetalert.js.org/guides/
			function ShowExpiredRegistryMessage(){
				swal({
				  title: '<strong>Thông báo</strong>',
				  html: 'HẾT HẠN ĐĂNG KÝ',
				  type: 'error',
				  confirmButtonText: 'Ok'
				}).then((result) => {
					
				});
				return false;
			}
			
			//https://sweetalert2.github.io/#icons
			function ShowRegistryBox(){
				swal({
				  title: '<strong>Thông báo</strong>',
				  html: 'ĐĂNG KÝ CHO MỤC NÀY CHƯA CÓ',
				  type: 'success',
				  confirmButtonText: 'Ok'
				}).then((result) => {
					
				});
				return false;
			}
		</script>
		<ul class="gallery-tabs js-about--tabs1" style="transform: matrix(1, 0, -0.26795, 1, 0, 0);">
			<li class="active" style="width: 100%;">Event Hightlights</li>
		</ul>
		<div class="about-contain display register-contain">
			<div class="js-highlights js-slider" role="toolbar" style="height: 500px; text-align: center;">
				 <div class="slider-box">
					<p>Đường Đua</p>
					<img src="assets/sukien/Truong_dua_tieu_chuan.jpg"/>
					<h5 style="position: absolute; z-index: 1001; color: #33c331; top: 80px; margin-left: 12px; font-size: 13px;">Đường Đua Chuẩn An Toàn VMA</h5>
				 </div>
				 <div class="slider-box">
					<p>Trọng Tài</p>
					<img src="assets/sukien/1907178_vietnam.jpg"/>
					<h5 style="position: absolute; z-index: 1001; color: #33c331; top: 80px; margin-left: 12px; font-size: 13px;">Trọng Tài Được Huấn Luyện & Cấp Bằng VMA</h5>
				 </div>
				 <div class="slider-box">
					<p>Trưng Bày</p>
					<img src="assets/sukien/Sieu_xe.jpg"/>
					<h5 style="position: absolute; z-index: 1001; color: #33c331; top: 80px; margin-left: 12px; font-size: 13px;">Trưng Bày Siêu Xe & Test Drive</h5>
				 </div>
				 <div class="slider-box">
					<p>VIP Lounge</p>
					<img src="assets/sukien/VIP_Lounge_01.jpg"/>
				 </div>
			</div>
		</div>
		<ul class="gallery-tabs js-about--tabs1" style="transform: matrix(1, 0, -0.26795, 1, 0, 0);">
			<li class="active" style="width: 100%;">Line up</li>
		</ul>
		<div class="about-contain display register-contain">
			<div class="js-rappers js-slider" role="toolbar" style="height: 500px; text-align: center;">
				<div class="slider-box">
					<p>Rapper Karik</p>
					<img src="assets/sukien/Karik.jpg">
				</div>
				<div class="slider-box">
					<p>Rapper Dế Choắt</p>
					<img src="assets/sukien/DECHOAT.jpg">
				</div>
				<div class="slider-box">
					<p>Rapper Yuno BigBoi</p>
					<img src="assets/sukien/YunoBigboi.jpg">
				</div>
				<div class="slider-box">
					<p>Rapper Lowkey</p>
					<img src="assets/sukien/LowKey.jpg"/>
				 </div>
				 <div class="slider-box">
					<p>Rapper Mess</p>
					<img src="assets/sukien/Mes.jpg">
				</div>
				 <div class="slider-box">
					<p>Rapper KOO</p>
					<img src="assets/sukien/KOO.jpg">
				</div>
				 <div class="slider-box">
					<p>Rapper Kenji</p>
					<img src="assets/sukien/Kenji.jpg">
				</div>
			</div>
			<div class="js-djs js-slider" role="toolbar" style="height: 500px; text-align: center;">
				<div class="slider-box">
					<p>DJ Vinjaz</p>
					<img src="assets/sukien/DJ_VINJAZ_01.jpg">
				</div>
				<div class="slider-box">
					<p>DJ Mie</p>
					<img src="assets/sukien/Mie.jpg">
				</div>
				<div class="slider-box">
					<p>DJ Lại Thanh Hương</p>
					<img src="assets/sukien/DJThanhHuong.jpg">
				</div>
				<div class="slider-box">
					<p>DJ Nicky</p>
					<img src="assets/sukien/DJ_Nicky.jpg">
				</div>
				<div class="slider-box">
					<p>DJ Tio</p>
					<img src="assets/sukien/DJ_Tio.jpg">
				</div>
				<div class="slider-box">
					<p>DJ Miki</p>
					<img src="assets/sukien/DJ_Miki.jpg">
				</div>
			</div>
			<div class="js-mcs js-slider" role="toolbar" style="height: 500px; text-align: center;">
				<div class="slider-box">
					<p>MC Goku</p>
					<img src="assets/sukien/MCGOKU.jpg">
				</div>
				<div class="slider-box">
					<p>MC LIL 'Vinx</p>
					<img src="assets/sukien/MC_LIL_Vinx.jpg">
				</div>
			</div>
		</div>
</section>

<section id="register" class="display">
		<h2>Đăng ký thi đấu</h2>
		<ul class="gallery-tabs js-about--tabs1" style="transform: matrix(1, 0, -0.26795, 1, 0, 0);">
			<li class="active" style="width: 100%;">hạng mục thi đấu</li>
		</ul>
		<div class="about-contain display register-contain">
			<ul class="race-league">
				<li>
					<h2>Moto</h2>
					<div class="copy copy-a" style="background: url(assets/images/motorlogo.png);">
						<div class="note">
							<h6>Motul Motor Racing Cup</h6>
							<p>Hệ 300 - 400cc</p>
							<p><a style="cursor: pointer;" onclick="OpenRegisterPopup('semipro-300-400cc');" class="registry-link">- Semi-Pro</a></p>
						</div>
						<div class="note">
							<h6>Motul Motor Racing Cup</h6>
							<p>Hệ UB150</p>
							<p><a style="cursor: pointer;" onclick="OpenRegisterPopup('moto-ub150-pro');" class="registry-link">- Pro</a></p>
							<p><a style="cursor: pointer;" onclick="OpenRegisterPopup('moto-ub150-semipro');" class="registry-link">- Semi-Pro</a></p>
						</div>
					</div>
				</li>
				<li>
					<h2>Go kart</h2>
					<div class="copy copy-a" style="background: url(assets/images/go-kartlogo.png);">
						<div class="note">
							<h6 style="margin-bottom: 0px;"><a href='#' onclick="return ShowExpiredRegistryMessage();" class="registry-link">VR Go-Kart Cup Hệ 2 THÌ</a></h6>
							<h6 style="margin-bottom: 0px;"><a href='#' onclick="return ShowRegistryBox('4 Thi');" class="registry-link">VR Go-Kart Cup Hệ 4 THÌ</a></h6>
						</div>
					</div>
				</li>
				<li>
					<h2>Oto</h2>
					<div class="copy copy-a" style="background: url(assets/images/otologo.png);">
						<div class="note">
							<h6><a style="cursor: pointer;" onclick="ShowExpiredRegistryMessage();" class="registry-link">Vinfast Autogymkhana Cup</a></h6>
							<h6><a style="cursor: pointer;" onclick="OpenRegisterPopup('oto-track-attack');" class="registry-link">Vinfast Track Attact Cup</a></h6>
							<h6><a href='#' onclick="return ShowExpiredRegistryMessage();" class="registry-link">VR Drift Battle</a></h6>
						</div>
					</div>
				</li>
				<li>
					<h2>Roller Sport</h2>
					<div class="copy copy-a" style="background: url(assets/images/rollerlogo.png);">
						<div class="note">
							<h6><a href='#' onclick="OpenRegisterPopup('vr-roller-sport-cup');" class="registry-link">VR Roller Sport Cup</a></h6>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
</section>

<section id="plan" class="display">
	<div class="contain">
		<h4 style="text-align: center;">lịch trình</h4>
		<h2>VIETNAM RACING FESTIVAL 2020</h2>

		<div class="plan-wrap">
			<ul class="plan-list">
				
				<li class="disable" style="transform: matrix(1, 0, -0.17632, 0.99999, 0, 0);">
					<span>Lịch thi đấu</span>
					<div class="plan-item">
						<h3>Vòng loại</h3>
						<p><img src="assets/images/i-time.png">6/12/2020 Vòng loại giải MOTUL MOTOR RACING CUP</p>
						<p><img src="assets/images/i-time.png">11/12/2020 Vòng loại VINFAST AUTOGYMKHANA, VINFAST TRACK ATTACK CUP</p>
						<p><img src="assets/images/i-location.png">Trường Đua Xe Đại Nam, Bình Dương, Xã Hiệp An, Thủ Dầu Một, Bình Dương.</p>
						<h4>1</h4>
					</div>
				</li>

				<li class="disable" style="transform: matrix(1, 0, -0.17632, 0.99999, 0, 0);">
					<span>Lịch thi đấu</span>
					<div class="plan-item">
						<h3>Vòng chung kết</h3>
						<p><img src="assets/images/i-time.png">12/12/2020<br/>
							&nbsp;&nbsp;&nbsp;&nbsp;- Chung kết các giải đua<br/>
							&nbsp;&nbsp;&nbsp;&nbsp;- VINFAST AUTOGYMKHANA<br/>
							&nbsp;&nbsp;&nbsp;&nbsp;- VINFAST TRACK ATTACK CUP<br/>
							&nbsp;&nbsp;&nbsp;&nbsp;- MOTUL MOTOR RACING CUP<br/>
							&nbsp;&nbsp;&nbsp;&nbsp;- ROLLER SPORT<br/>
							&nbsp;&nbsp;&nbsp;&nbsp;- VR GO-KART CUP<br/>
							&nbsp;&nbsp;&nbsp;&nbsp;- VR DRIFT BATTLE<br/>
						</p>
						<p><img src="assets/images/i-location.png">Trường Đua Xe Đại Nam, Bình Dương, Xã Hiệp An, Thủ Dầu Một, Bình Dương.</p>
						<h4>2</h4>
					</div>
				</li>

			</ul>
		</div>
	</div>

	<div class="cld-popup">
		<div class="cld-detail">
			<h3><img src="assets/images/lct-title.png"></h3>
			<h4>Tại <span>Cần Thơ</span> ngày <span>28/5/2017</span></h4>
			<table cellspacing="0" cellpadding="0" border="0" class="cld-item">
				<tbody><tr>
					<th width="40%">thời gian</th>
					<th>nội dung</th>
				</tr>
				<tr>
					<td>6:00 – 8:00:</td>
					<td>Tiếp nhận VĐV</td>
				</tr>
				<tr>
					<td>8:00 – 9:00:</td>
					<td>Hướng dẫn luật thi đấu</td>
				</tr>
				<tr>
					<td>9:00 – 10:20: </td>
					<td>Vòng loại 1</td>
				</tr>
				<tr>
					<td>10:20 – 10:50: </td>
					<td>Lễ khai mạc</td>
				</tr>
				<tr>
					<td>10:50 – 12:10:</td>
					<td>Vòng loại 2</td>
				</tr>
				<tr>
					<td>12:10 – 13:10:</td>
					<td>Thi chọn vị trí xuất phát</td>
				</tr>
				<tr>
					<td>13:20 – 15:20:</td>
					<td>Vòng chung kết và trao giải</td>
				</tr>
			</tbody></table>
			<span class="bg"></span>
			<span class="btn js-close--cld">đóng</span>
		</div>

		<span class="ovl"></span>
	</div>
</section>

<section id="term" class="display ">
	<div class="contain">
		<h4 style="text-align: center;">thể lệ thi đấu</h4>
		<h2>VIETNAM RACING FESTIVAL 2020</h2>
		<ul class="gallery-tabs js-term--tabs">
			<li class="active" style="width: 100%;">QUY ĐỊNH TRANG PHỤC VÀ XE THI ĐẤU</li>
		</ul>
		<div class="about-contain display term-content">
			<ul class="race-league">
				<li>
					<div class="copy">
						<h5>ĐIỀU LỆ GIẢI VINFAST AUTOGYMKHANA CUP</h5>
						<p>Các quy định và lịch tập luyện trong quá trình tham gia thi đấu giải</p>
						<p><a class="red_link" href="assets/docs/ĐIEU_LE_VINFAST_AUTOGYMKHANA_CUP.pdf" target="_blank">Xem Thêm >></a></p>
					</div>
				</li>
				<li>
					<div class="copy">
						<h5>ĐIỀU LỆ GIẢI VINFAST TRACK ATTACT CUP</h5>
						<p>Các quy định và lịch tập luyện trong quá trình tham gia thi đấu giải</p>
						<p><a class="red_link" href="assets/docs/ĐIEU_LE_VINFAST_TRACK_ATTACK_CUP.pdf" target="_blank">Xem Thêm >></a></p>
					</div>
				</li>
				<li>
					<div class="copy">
						<h5>ĐIỀU LỆ GIẢI VR Drift Battle</h5>
						<p>Các quy định và lịch tập luyện trong quá trình tham gia thi đấu giải</p>
						<p><a class="red_link" href="assets/docs/ĐIEU_LE_CAC_GIAI_VR_DRIFT_BATTLE.pdf" target="_blank">Xem Thêm >></a></p>
					</div>
				</li>
				<li>
					<div class="copy">
						<h5>ĐIỀU LỆ GIẢI MOTUL MOTOR RACING CUP HỆ 300 - 400CC</h5>
						<p>Các quy định và lịch tập luyện trong quá trình tham gia thi đấu giải</p>
						<p><a class="red_link" href="assets/docs/ĐIEU_LE_CAC_GIAI_MOTUL_MOTOR_RACING_CUP_300_400cc.pdf" target="_blank">Xem Thêm >></a></p>
					</div>
				</li>
				<li>
					<div class="copy">
						<h5>ĐIỀU LỆ GIẢI MOTUL MOTOR RACING CUP HỆ UB150</h5>
						<p>Các quy định và lịch tập luyện trong quá trình tham gia thi đấu giải</p>
						<p><a class="red_link" href="assets/docs/ĐIEU_LE_CAC_GIAI_MOTUL_MOTOR_RACING_CUP_UB150.pdf" target="_blank">Xem Thêm >></a></p>
					</div>
				</li>
				<li>
					<div class="copy">
						<h5>ĐIỀU LỆ GIẢI VR GO-KART CUP</h5>
						<p>Các quy định và lịch tập luyện trong quá trình tham gia thi đấu giải</p>
						<p><a class="red_link" href="assets/docs/ĐIEU_LE_CAC_GIAI_GO_KART_CUP.pdf" target="_blank">Xem Thêm >></a></p>
					</div>
				</li>
				<li>
					<div class="copy">
						<h5>ĐIỀU LỆ GIẢI VR Roller Sport Cup</h5>
						<p>Các quy định và lịch tập luyện trong quá trình tham gia thi đấu giải</p>
						<p><a class="red_link" href="assets/docs/The_thuc_VR_ROLLER_SPORTS.pdf" target="_blank">Xem Thêm >></a></p>
					</div>
				</li>
			</ul>
		</div>
	</div>
</section>

<section id="news">
	<div class="contain">
		<h4 style="text-align: center;">tin tức</h4>
		<h2>Mới Nhất</h2>
		<div class="js-news" role="toolbar">
			<div class="js-news--detail">
			  <div class="news-item">
				 <p class="thumb"><a href="assets/news/Giai_dua_Motul_Motor_Racing_Cup_sap.htm" tabindex="0"><img src="assets/images/Poster-Sponsor-VR-Event-3-1068x1488.jpg"></a></p>
				 <div class="copy">
					<h4><a href="assets/news/Giai_dua_Motul_Motor_Racing_Cup_sap.htm" tabindex="0">Giải đua Motul Motor Racing Cup sắp “Bùng nổ” tại chương trình Vietnam Racing Festival 2020</a></h4>
					<p>Ngày 12/12 tới đây, GIẢI ĐUA MOTUL MOTOR RACING CUP hệ UB150 sẽ “BÙNG NỔ” tại Trường đua Đại Nam. Được biết giải đua này nằm trong chuỗi sự kiện VIETNAM RACING FESTIVAL 2020 do VR Academy tổ chức.</p>
					<a href="assets/news/Giai_dua_Motul_Motor_Racing_Cup_sap.htm" class="viewmore" tabindex="0">Xem chi tiết</a>
				 </div>
			  </div>
		   </div>
		   <div class="js-news--detail">
			  <div class="news-item">
				 <p class="thumb"><a href="assets/news/Hop_bao_le_hoi_dua_xe_VietNam_Racing_Fest_2020.htm" tabindex="0"><img src="assets/news/images/Họp-báo-VR-Fest-2020-5-1.jpg"></a></p>
				 <div class="copy">
					<h4><a href="assets/news/Hop_bao_le_hoi_dua_xe_VietNam_Racing_Fest_2020.htm" tabindex="0">Họp báo Lễ hội đua xe VietNam Racing Fest 2020, chuyên nghiệp đầu tiên tại Việt Nam</a></h4>
					<p>Sáng này 03/11/2020 tại sân Golf Tân Sơn Nhất – Tp.Hồ Chí Minh, vừa diễn ra họp báo công bố chiến dịch Race To Miền Trung bao gồm: Một giải Golf lớn nhất trong năm 2020 và đặc biệt là sự kiện VietNam Racing Fest 2020 (VR Fest 2020) lễ hội đua xe chuyên nghiệp lần đầu tiên tổ chức tại Việt Nam.</p>
					<a href="assets/news/Hop_bao_le_hoi_dua_xe_VietNam_Racing_Fest_2020.htm" class="viewmore" tabindex="0">Xem chi tiết</a>
				 </div>
			  </div>
		   </div>
		   <div class="js-news--detail">
			  <div class="news-item">
				 <p class="thumb"><a href="assets/news/Nhung_nguoi_viet_nam_dau_tien_nhan_bang_dua_xe_o_to_the_thao.htm" tabindex="0"><img src="assets/news/images/VMA47C.jpg"></a></p>
				 <div class="copy">
					<h4><a href="assets/news/Nhung_nguoi_viet_nam_dau_tien_nhan_bang_dua_xe_o_to_the_thao.htm" tabindex="0">Những người Việt Nam đầu tiên nhận bằng đua xe ô tô thể thao</a></h4>
					<p>Ngày 04/07/2020, Hiệp hội Ô tô Thể thao Việt Nam phối hợp cùng Công ty TNHH Hiệp hội Thể thao Xe động cơ (VMA) - thành viên của Liên đoàn Ô tô Quốc tế (FIA) tổ chức Lễ trao bằng đua xe ô tô thể thao cho 32 tay đua người Việt Nam tại Trường đua Công thức 1 Hà Nội, nhằm công nhận thành tích và ghi nhận nỗ lực của các VĐV đua xe ô thể thao đầu tiên của Việt Nam khi là những người tiên phong trong môn thể thao tốc độ này.</p>
					<a href="assets/news/Nhung_nguoi_viet_nam_dau_tien_nhan_bang_dua_xe_o_to_the_thao.htm" class="viewmore" tabindex="0">Xem chi tiết</a>
				 </div>
			  </div>
		   </div>
		   <div class="js-news--detail">
			  <div class="news-item">
				 <p class="thumb"><a href="assets/news/Thong_tin_chuong_trinh_VIETNAM_RACING_FESTIAL_2020.htm" tabindex="0"><img src="assets/images/Thong_tin_chuong_trinh_VIETNAM_RACING_FESTIAL_2020.jpg"></a></p>
				 <div class="copy">
					<h4><a href="assets/news/Thong_tin_chuong_trinh_VIETNAM_RACING_FESTIAL_2020.htm" tabindex="0">Thông tin chương trình VIETNAM RACING FESTIAL 2020</a></h4>
					<p>Ngày hội đua xe thể thao chuyên nghiệp do Vietnam Racing Academy - VR tổ chức nhầm phát động phong trào RACE TO MIỀN TRUNG. Chương trình với sự đồng hành của hai thương hiệu lớn VINFAST và MOTUL. Ngày hội đua xe cũng là lễ hội âm nhạc EDM hoành tráng - WHERE’S YOUR LIMIT? với sự góp mặt của nhiều ca sĩ - DJ nổi tiếng và chương trình MOTUL STUNT SHOW 2020.</p>
					<a href="assets/news/Thong_tin_chuong_trinh_VIETNAM_RACING_FESTIAL_2020.htm" class="viewmore" tabindex="0">Xem chi tiết</a>
				 </div>
			  </div>
		   </div>
		</div>
	</div>
</section>

<section id="gallery" class="display">
   <script type="text/javascript">
		function ViewPigsizeImage(element){
			var src = $(element).attr("src");
			var larger_src = src.replace("/small/", "/large/");
			swal({
			  imageUrl: larger_src,
			  imageWidth: '100%',
			  width: '1200px',
			  imageAlt: 'BG Gallery',
			});
      	}
   </script>
   <div class="contain">
		<h2>HÌNH ẢNH & SỰ KIỆN NĂM 2020</h2>
		<ul class="gallery-tabs" style="transform: matrix(1, 0, -0.26795, 1, 0, 0);">
			<li class="active" style="width: 100%;">HÌNH ẢNH CHƯƠNG TRÌNH</li>
		</ul>
		<select id="type-photo-select">
		  <option value="1">1.	HỌP BÁO KỸ THUẬT NGÀY HỘI ĐUA XE VIETNAM RACING FESTIVAL 2020</option>
		  <option value="2">2.	PHÁT ĐỘNG PHONG TRÀO ĐUA XE THỂ THAO VIỆT NAM</option>
	   </select>
	   <div class="gallery-item display" id="type-photo1" style="display: none;">
		   <div class="gallery-item-wrap">
			  <div class="gallery-photo js-photo">
				 <div class="js-img" style="transform: matrix(1, 0, 0, 1, 0, 0);"><img style="cursor: pointer;" src="assets/gallery/small/PHU_2669.jpg" onclick="ViewPigsizeImage(this);"></div>
				 <div class="js-img" style="transform: matrix(1, 0, 0, 1, 0, 0);"><img style="cursor: pointer;" src="assets/gallery/small/PHU_2729.jpg" onclick="ViewPigsizeImage(this);"></div>
				 <div class="js-img" style="transform: matrix(1, 0, 0, 1, 0, 0);"><img style="cursor: pointer;" src="assets/gallery/small/PHU_2394.jpg" onclick="ViewPigsizeImage(this);"></div>
				 <div class="js-img" style="transform: matrix(1, 0, 0, 1, 0, 0);"><img style="cursor: pointer;" src="assets/gallery/small/PHU_2445.jpg" onclick="ViewPigsizeImage(this);"></div>
				 <div class="js-img" style="transform: matrix(1, 0, 0, 1, 0, 0);"><img style="cursor: pointer;" src="assets/gallery/small/PHU_2688.jpg" onclick="ViewPigsizeImage(this);"></div>
				 <div class="js-img" style="transform: matrix(1, 0, 0, 1, 0, 0);"><img style="cursor: pointer;" src="assets/gallery/small/PHU_1797.jpg" onclick="ViewPigsizeImage(this);"></div>
				 <div class="js-img" style="transform: matrix(1, 0, 0, 1, 0, 0);"><img style="cursor: pointer;" src="assets/gallery/small/PHU_2168.jpg" onclick="ViewPigsizeImage(this);"></div>
				 <div class="js-img" style="transform: matrix(1, 0, 0, 1, 0, 0);"><img style="cursor: pointer;" src="assets/gallery/small/PHU_2843.jpg" onclick="ViewPigsizeImage(this);"></div>
			  </div>
		   </div>
		   <a class="btn" href="#">Xem thêm</a>
		</div>
		<div class="gallery-item display" id="type-photo2" style="display: none;">
		   <div class="gallery-item-wrap">
			  <div class="gallery-photo js-photo">
				 <div class="js-img" style="transform: matrix(1, 0, 0, 1, 0, 0);"><img style="cursor: pointer;" src="assets/gallery/small/viber_image_2020-11-10_12-32-25.jpg" onclick="ViewPigsizeImage(this);"></div>
				 <div class="js-img" style="transform: matrix(1, 0, 0, 1, 0, 0);"><img style="cursor: pointer;" src="assets/gallery/small/viber_image_2020-11-10_12-32-26.jpg" onclick="ViewPigsizeImage(this);"></div>
				 <div class="js-img" style="transform: matrix(1, 0, 0, 1, 0, 0);"><img style="cursor: pointer;" src="assets/gallery/small/viber_image_2020-11-10_12-32-30.jpg" onclick="ViewPigsizeImage(this);"></div>
				 <div class="js-img" style="transform: matrix(1, 0, 0, 1, 0, 0);"><img style="cursor: pointer;" src="assets/gallery/small/viber_image_2020-11-10_12-32-31.jpg" onclick="ViewPigsizeImage(this);"></div>
				 <div class="js-img" style="transform: matrix(1, 0, 0, 1, 0, 0);"><img style="cursor: pointer;" src="assets/gallery/small/viber_image_2020-11-10_12-32-32.jpg" onclick="ViewPigsizeImage(this);"></div>
				 <div class="js-img" style="transform: matrix(1, 0, 0, 1, 0, 0);"><img style="cursor: pointer;" src="assets/gallery/small/viber_image_2020-11-10_12-32-33.jpg" onclick="ViewPigsizeImage(this);"></div>
				 <div class="js-img" style="transform: matrix(1, 0, 0, 1, 0, 0);"><img style="cursor: pointer;" src="assets/gallery/small/viber_image_2020-11-10_12-32-25.jpg" onclick="ViewPigsizeImage(this);"></div>
				 <div class="js-img" style="transform: matrix(1, 0, 0, 1, 0, 0);"><img style="cursor: pointer;" src="assets/gallery/small/viber_image_2020-11-10_12-32-26.jpg" onclick="ViewPigsizeImage(this);"></div>
			  </div>
		   </div>
		   <a class="btn" href="#">Xem thêm</a>
		</div>
	</div>
   <footer style="margin-top: 50px;">
      <p class="socials" style="margin-top: 20px;">
         <a href="https://www.facebook.com/vietnamracingacademy" class="fb" target="_blank"></a> 
         <a href="#" class="ytb" target="_blank"></a>
      </p>
	  <p><img src="assets/images/i-location.png" style="width: 15px; height: 15px;"> 87 Nguyễn Cơ Thạch, Khu đô thị Sala, Phường An Lợi Đông, Quận 2, Thành phố Hồ Chí Minh, Việt Nam</p>
	  <p><img src="assets/images/i-phone.png" style="width: 15px; height: 15px;"> <a href="tel:+84-907879999">+84-907879999</a></p>
	  <p><img src="assets/images/i-email.png" style="width: 15px; height: 15px;"> <a href="mailto:vietnam.racing.academy@gmail.com">vietnam.racing.academy@gmail.com</a></p>
      <p class="copyright">© 2020 Copyright <a href="https://www.facebook.com/vietnamracingacademy" target="_blank">Vietnam Racing Academy</a>. All rights reserved.</p>
   </footer>
</section>

<script src="http://code.jquery.com/jquery-1.11.1.js"></script>

<script src="assets/js/underscore.js"></script>
<script src="assets/js/jquery.history.js"></script>

<script src="assets/js/gscript.js"></script>
<script src="<?php echo auto_version('assets/main.js'); ?>"></script>

<!-- endinject -->

<!--[if lt IE 9]>-->
<!--<script src="assets/js/ie.body.min.js"></script>-->
<!--<![endif]-->


<!--Call me, register, booking ticket block-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
<script type="text/javascript">
	$(document).scroll(function() {
	  var y = $(this).scrollTop();
	  if (y > 600) {
	    $('.wrap-ticket-regi').fadeIn();
	  } else {
	    $('.wrap-ticket-regi').fadeOut();
	  }
	});
</script>
<div class="wrap-phone">
	<div class="wrap-ticket-regi" style="display: none">
		<div class="muave animate__animated animate__zoomIn animate__slower"><span>Mua Vé</span></div>
		<div class="wrap-ticket phoneamination-new ticket animate__animated animate__zoomIn animate__infinite animate__slower">
		</div>
		<a href="https://ticketbox.vn/vr-fest-2020#booking"><img class="img-ticket" src="assets/images/ticket.png"></a>
		<div class="dangky animate__animated animate__zoomIn  animate__slower"><span>Đăng Ký Thi Đấu</span></div>
		<div class="wrap-regi phoneamination-new ticket animate__animated animate__zoomIn animate__infinite animate__slower">
		</div>
		<a href="#register" role="register" class="js-joinnow"><img class="img-regi" src="assets/images/register.png"></a>
	</div>

	<div class="numbershow animate__animated animate__zoomIn animate__slower"><span style="color:white">☎ 0909337777</span></div>
	<div class="phoneamination animate__animated animate__zoomIn animate__infinite animate__slower"></div>
	<a href="tel:0909337777" title="Tel: 0909337777"><i class="material-icons call-me shak-icon">phone</i></a>
</div>
<!--Call me block-->


<!-- Load Facebook Messenger -->
<!-- https://wiki.matbao.net/kb/huong-dan-tich-hop-facebook-chat-vao-website-ma-khong-can-dung-plugin/ -->
<div class="wrap-phone">
	<div class="phoneamination phoneamination1 animate__animated animate__zoomIn  animate__infinite animate__slower"></div>
	<div id="fb-root"></div>
  <script>
	window.fbAsyncInit = function() {
	  FB.init({
		xfbml            : true,
		version          : 'v9.0'
	  });
	};

	(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
	fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

  <!-- Your Chat Plugin code -->
  <div class="fb-customerchat shak-icon"
	attribution=setup_tool
	page_id="104362934697822"
	theme_color="#67b868">
  </div>
</div>
	  
</body></html>