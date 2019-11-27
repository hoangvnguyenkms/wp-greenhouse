<?php $themeURL =  get_template_directory_uri(); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" >

<head>
	<!-- <link rel="SHORTCUT ICON" href="https://nhakinhtrongrau.net/themes/template/images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="https://nhakinhtrongrau.net/themes/template/images/favicon.ico" type="image/gif"> -->

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- <script type="text/javascript" src="<?php echo $themeURL; ?>/assets/js/jquery-1.8.3.min.js"></script> -->
	<?php wp_head(); ?>
	<!-- <script type="text/javascript">
		$(document).ready(
			function() {
				$('.carousel').carousel({
				interval: 500
			})
			}
		);
	</script> -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php bloginfo('title'); ?></title>
	<meta name="keywords"
		content="nhakinhtrongrau.net, nhà kính trồng rau, nha kinh trong rau, he nha kinh trong rau, nha kinh trong rau sach">
	<meta name="description"
		content="nhakinhtrongrau.net, nhà kính trồng rau, nha kinh trong rau, he nha kinh trong rau, nha kinh trong rau sach">

	<!--[if lt IE 8]><link rel="stylesheet" type="text/css" href="/themes/template/css/ie6.css" /><![endif]-->
	<script>
		(function (i, s, o, g, r, a, m) {
		i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
			(i[r].q = i[r].q || []).push(arguments)
		}, i[r].l = 1 * new Date(); a = s.createElement(o),
			m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
		})(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
		ga('create', 'UA-50802420-29', 'auto');
		ga('send', 'pageview');
	</script>
	<style type="text/css">
		@keyframes tawkMaxOpen {
			0% {
				opacity: 0;
				transform: translate(0, 30px);
				;
			}

			to {
				opacity: 1;
				transform: translate(0, 0px);
			}
		}

		@-moz-keyframes tawkMaxOpen {
			0% {
				opacity: 0;
				transform: translate(0, 30px);
				;
			}

			to {
				opacity: 1;
				transform: translate(0, 0px);
			}
		}

		@-webkit-keyframes tawkMaxOpen {
			0% {
				opacity: 0;
				transform: translate(0, 30px);
				;
			}

			to {
				opacity: 1;
				transform: translate(0, 0px);
			}
		}

		#EVMGo2o-1573267231955 {
			outline: none !important;
			visibility: visible !important;
			resize: none !important;
			box-shadow: none !important;
			overflow: visible !important;
			background: none !important;
			opacity: 1 !important;
			filter: alpha(opacity=100) !important;
			-ms-filter: progid:DXImageTransform.Microsoft.Alpha(Opacity1) !important;
			-moz-opacity: 1 !important;
			-khtml-opacity: 1 !important;
			top: auto !important;
			right: 10px !important;
			bottom: 0px !important;
			left: auto !important;
			position: fixed !important;
			border: 0 !important;
			min-height: 0 !important;
			min-width: 0 !important;
			max-height: none !important;
			max-width: none !important;
			padding: 0 !important;
			margin: 0 !important;
			-moz-transition-property: none !important;
			-webkit-transition-property: none !important;
			-o-transition-property: none !important;
			transition-property: none !important;
			transform: none !important;
			-webkit-transform: none !important;
			-ms-transform: none !important;
			width: auto !important;
			height: auto !important;
			display: none !important;
			z-index: 2000000000 !important;
			background-color: transparent !important;
			cursor: auto !important;
			float: none !important;
			border-radius: unset !important;
			pointer-events: auto !important
		}

		#Ca8CUP8-1573267231956.open {
			animation: tawkMaxOpen .25s ease !important;
		}
	</style>
</head>

<body data-gr-c-s-loaded="true">
	<div id="header">
		<div class="main-page">
			<div id="logo">
				<a class="logo" href="https://nhakinhtrongrau.net/" title="Logo"><img
						src="<?php echo $themeURL; ?>/assets/images/logo.png" alt="Logo" width="100%"></a>
				<div class="clear"></div>
			</div>
			<div class="position">
				<ul id="nav">
					<li class="selected first"><a title="Trang chủ" href="https://nhakinhtrongrau.net">Trang
							chủ</a></li>
					<li><a title="Sản phẩm" href="https://nhakinhtrongrau.net/san-pham">Sản phẩm</a></li>
					<li><a title="Tin tức" href="https://nhakinhtrongrau.net/tin-tuc-su-kien">Tin tức</a></li>
					<li><a title="Công trình" href="https://nhakinhtrongrau.net/du-an">Công trình</a></li>
					<li><a title="Video" href="https://nhakinhtrongrau.net/video">Video</a></li>
					<li class="last"><a title="Liên hệ" href="https://nhakinhtrongrau.net/lien-he">Liên hệ</a></li>
				</ul>
				<div class="clear"></div>
				<div class="lang">
				</div>
			</div>
		</div>
	</div>
	<div class="header-line"></div>
	<div id="wrapper">
		<!-- <ul id="banner" class="slider advanced-slider pixel webkit">			
		</ul> -->

		<div id="carousel-header" class="carousel slide slider" data-ride="carousel" data-interval="2500">
			<ol class="carousel-indicators">
				<li data-target="#carousel-header1" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-header2" data-slide-to="1"></li>
				<li data-target="#carousel-header3" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
				<img class="d-block w-100" src="<?php echo $themeURL; ?>/assets/images/banners/banner-1.jpg" alt="First slide">
				</div>
				<div class="carousel-item">
				<img class="d-block w-100" src="<?php echo $themeURL; ?>/assets/images/banners/banner-3.jpg" alt="Second slide">
				</div>
				<div class="carousel-item">
				<img class="d-block w-100" src="<?php echo $themeURL; ?>/assets/images/banners/nha-kinh-trong-rau.jpg" alt="Third slide">
				</div>
			</div>
			<a class="carousel-control-prev" href="#carousel-header" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carousel-header" role="button" data-slide="next">
				<span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>