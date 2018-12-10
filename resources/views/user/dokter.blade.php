<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
	<meta name="viewport" content="width=device-width" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Profil Dokter - Syifa Medika</title>
	<link rel="icon" href="user/images/logo1.png">
	<link rel="stylesheet" href="user/css/foundation.min.css">
	<link rel="stylesheet" href="user/css/normalize.css">
	<link rel="stylesheet" href="user/css/fgx-foundation.css" />
	<link rel="stylesheet" href="user/plugins/prettyphoto/prettyPhoto.css" />
	<!--[if IE 8]><link rel="stylesheet" href="user/css/ie8-grid-foundation-4.css" /><![endif]-->

	<!-- Font Awesome - Retina Icons -->
	<link rel="stylesheet" href="user/plugins/fontawesome/css/font-awesome.min.css">

	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="user/css/style.css">

	<!-- Main scripts -->
	<script src="user/js/vendor/jquery.js"></script>
	<script src="user/js/vendor/custom.modernizr.js"></script>
	</head>
<body>
@include('user/header')
<script type="text/javascript">
	document.getElementById("beranda").classList.remove("active")
	document.getElementById("profil").classList.add("active")
	document.getElementById("rj").classList.remove("active")
	document.getElementById("bpjs").classList.remove("active")
	document.getElementById("ri").classList.remove("active")
	document.getElementById("infosehat").classList.remove("active")
	document.getElementById("jadwal").classList.remove("active")
	document.getElementById("kerjasama").classList.remove("active")
</script>

<div class="main-content-top">
	<div class="main-wrapper">
		<div class="row">
			<div class="large-6 columns">
				<h2>Profil Dokter di RS Syifa Medika</h2>
			</div>
			<div class="large-6 columns">
				<ul class="breadcrumbs right">
					<li>Posisi Anda: </li>
					<li><a href="index.html">Beranda</a></li>
					<li><span>Profil Dokter</span></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- End Main Content Top -->
<div class="main-wrapper">
	<div class="content_wrapper">
		<div class="row">
			 <div class="large-12 columns">
				<ul class="splitter portfolio-main filter portmenu">
					<li class="segment-0 selected-1 active"><a href="#" class="all">Semua</a></li>
					<li class="segment-1"><a href="#" class="Umum">Umum</a></li>
					<li class="segment-2"><a href="#" class="Spesialis">Spesialis</a></li>
				</ul>
			 </div>
			<div class="large-12 columns">
				<ul class="portfolio-content large-block-grid-4">
					@foreach ($dokters as $dt=>$dokter)
						@if ($doktype = $dokter->spesialis['nama_spesialis']=='Umum')
							<li data-id="{{ $dt }}" data-type="Umum">
						@else
							<li data-id="{{ $dt }}" data-type="Spesialis">
						@endif
							<div class="view view-one">
								<img src="{{$dokter->foto}}" alt="" />
								<div class="mask">
									{{-- <p>Researchers can identify modifications to the chemical structure.</p> --}}
									<a href="{{$dokter->foto}}" class="picon-zoom" rel="prettyPhoto" title="{{$dokter->nama_dokter}}">
										<i class="icon-zoom-in icon-large"></i>
									</a>
								</div>
							</div>
							<div class="project-info">
								<h3>{{ $dokter->nama_dokter }}</h3>
								<p>{{ $dokter->spesialis['nama_spesialis'] }}</p>
							</div>
						</li>
					@endforeach
				</ul>
			</div>
		</div>
	</div>
</div>

@include('user/footer')
<script src="user/js/foundation.min.js"></script>
<!--Quicksand-->
<script type="text/javascript" src="user/plugins/prettyphoto/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="user/js/jquery.quicksand.js"></script>
<script type="text/javascript">

$(document).ready(function() {
	//$("a[rel^='prettyPhoto']").click(function() {alert ('gag') });
	$('a[rel^="prettyPhoto"]').prettyPhoto({theme: "dark_square"});

	var $filterType = $('.portfolio-main li.active a').attr('class');
	var $holder = $('ul.portfolio-content');
	var $data = $holder.clone();
	jQuery('.portfolio-main li a').click(function(e) {

		$('.portfolio-main li').removeClass('active');
		var $filterType = $(this).attr('class');
		$(this).parent().addClass('active');

		if ($filterType == 'all') {
			var $filteredData = $data.find('li');
		}
		else {
			var $filteredData = $data.find('li[data-type=' + $filterType + ']');
		}
		$holder.quicksand($filteredData,
			{duration: 800,easing: 'easeInOutQuad'},
			function() {
				$("a[rel^='prettyPhoto']").prettyPhoto({theme: 'dark_square'});

			}
		);
		return false;
	});
});
</script>
<!-- Scripts Initialize -->
<script src="user/js/app-head-calls.js"></script>

<script>
$(document).foundation();
</script>

<!-- Smallipop JS - Tooltips -->
<script type="text/javascript" src="user/plugins/smallipop/lib/contrib/prettify.js"></script>
<script type="text/javascript" src="user/plugins/smallipop/lib/jquery.smallipop.js"></script>
<script type="text/javascript" src="user/plugins/smallipop/lib/smallipop.calls.js"></script>

<!-- Initialize JS Plugins -->
<script src="user/js/app-bottom-calls.js"></script>
</body>
</html>
