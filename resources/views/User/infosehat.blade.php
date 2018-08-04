<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
	<meta name="viewport" content="width=device-width" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Informasi Sehat - Syifa Medika</title>
	<link rel="icon" href="user/images/logo1.png">
	<link rel="stylesheet" href="user/css/foundation.min.css">
	<link rel="stylesheet" href="user/css/normalize.css">
	<link rel="stylesheet" href="user/css/fgx-foundation.css" />

	<!--[if IE 8]><link rel="stylesheet" href="user/css/ie8-grid-foundation-4.css" /><![endif]-->

	<!-- Font Awesome - Retina Icons -->
	<link rel="stylesheet" href="user/plugins/fontawesome/css/font-awesome.min.css">

	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="user/css/style.css">

	<!-- Main JS Files -->
	<script src="user/js/vendor/jquery.js"></script>
	<script src="user/js/vendor/custom.modernizr.js"></script>
</head>
<body>

@include('user/header')

<div class="main-content-top">
	<div class="main-wrapper">
		<div class="row">
			<div class="large-6 columns">
				<h2>Info Sehat</h2>
			</div>
			<div class="large-6 columns">
				<ul class="breadcrumbs right">
					<li>Posisi Anda:: </li>
					<li><a href="index.html">Beranda</a></li>
					<li><span>Informasi Kesehatan</span></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- End Main Content Top -->
<div class="main-wrapper">
	<div class="row main-content">
		<div class="large-9 columns">
			@foreach ($artikels as $dt=>$artikel)
			<article class="post col1-alternative">
				<div class="row">
					<div class="large-12 columns">
						<h2>{{$artikel->judul}}</h2>
						<div class="divline"><span></span></div>
						<ul class="meta">
							<li><i class="icon-calendar"></i>{{$artikel->updated_at}}</li>
							<li><i class="icon-user"></i>Administrator</li>
						</ul>
						<p class="post_text">{{$artikel->text}}</p>
					</div>
				</div>
			</article>
			@endforeach

			<div class="pagination-wrapper">
				<ul class="pagination">
					<li class="current"><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
				</ul>
				<div class="clearfix"></div>
			</div>
		</div>
		<aside class="large-3 columns">
			<div class="widgets">
				<form method="get" id="search-global-form">
					<input type="text" placeholder="Cari Artikel.." name="s" id="search" value="" />
					<button type="submit" value="" name="search" id="search-submit"><i class="icon-search"></i></button>
				</form>
			</div>
		</aside>
	</div>
</div>

@include('user/footer')
<script type="text/javascript" src="user/js/jquery.accordion.js"></script>
<!-- Flickr -->
<script type="text/javascript" src="user/plugins/flickr/jflickrfeed.min.js"></script>
<!-- Scripts Initialize -->
<script src="user/js/app-head-calls.js"></script>
<script src="user/js/foundation.min.js"></script>
<script>
$(document).foundation();
jQuery(document).ready(function() {
	// Flickr




	// Accordion
	jQuery('#example1').accordion({
		handle: ".handle", // Default: "h3"
		panel: ".panel", // Default: ".panel"
		speed: 500, // Default: 200
		easing: "easeInOutQuad", // Default "swing"
		canOpenMultiple: false, // Default: false
		canToggle: false, // Default: false
		activeClassPanel: "open", // Default: "open"
		activeClassLi: "active", // Default: "active"
		lockedClass: "locked", // Default: "locked"
		loadingClass: "loading" // Default: "loading"
	});
});
</script>

<!-- Smallipop JS - Tooltips -->
<script type="text/javascript" src="user/plugins/smallipop/lib/contrib/prettify.js"></script>
<script type="text/javascript" src="user/plugins/smallipop/lib/jquery.smallipop.js"></script>
<script type="text/javascript" src="user/plugins/smallipop/lib/smallipop.calls.js"></script>

<!-- Initialize JS Plugins -->
<script src="user/js/app-bottom-calls.js"></script>
</body>
</html>
