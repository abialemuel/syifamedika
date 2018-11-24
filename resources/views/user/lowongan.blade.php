<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width" />
	<title>Profil Rumah Sakit - RS Syifa Medika</title>

	<!-- Smallipop CSS - Tooltips -->
	<link rel="stylesheet" href="user/plugins/smallipop/css/contrib/animate.min.css" type="text/css" media="all" title="Screen" />
	<link rel="stylesheet" href="user/plugins/smallipop/css/jquery.smallipop.css" type="text/css" media="all" title="Screen" />

	<!-- Default CSS -->
	<link rel="stylesheet" href="user/css/normalize.css" />
	<link rel="stylesheet" href="user/css/foundation.css" />
	<link rel="stylesheet" href="user/css/fgx-foundation.css" />
	<!--[if IE 8]><link rel="stylesheet" href="user/css/ie8-grid-foundation-4.css" /><![endif]-->

	<!-- Font Awesome - Retina Icons -->
	<link rel="stylesheet" href="user/plugins/fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="user/css/nivo-slider.css" />
	<link rel="stylesheet" href="user/css/themes/default/default.css" />
	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="user/css/style.css" />

	<!-- Main JS Files -->
	<script src="user/js/vendor/jquery.js"></script>
	<script src="user/js/vendor/custom.modernizr.js"></script>

</head>
<body onload="initialize()">

@include('user/header')
<script type="text/javascript">
	document.getElementById("beranda").classList.remove("active")
	document.getElementById("profil").classList.remove("active")
	document.getElementById("rj").classList.remove("active")
	document.getElementById("bpjs").classList.remove("active")
	document.getElementById("ri").classList.remove("active")
	document.getElementById("info").classList.remove("active")
	document.getElementById("jadwal").classList.remove("active")
	document.getElementById("kerjasama").classList.remove("active")
</script>
	<!-- Start Main Slider -->

	<!-- End Main Slider -->
	<div class="main-content-top">
		<div class="main-wrapper">
			<div class="row">
				<div class="large-6 columns">
					<h2>Lowongan Pekerjaan</h2>
				</div>
				<div class="large-6 columns">
					<ul class="breadcrumbs right">
						<li>Posisi Anda: </li>
						<li><a href="#">Beranda</a></li>
						<li>Lowongan</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

<div class="row main-content text-center">
	<div class="large-12 columns">
		<div class="row">
			<div class="large-12 columns">
				<div class="divider"><span></span></div>
				<img src="user/images/lowongankerja.jpg" alt="Lowongan Kerja" height="750" width="750">
			</div>
		</div>
	</div>
</div>

@include('user/footer')

<script src="user/js/foundation.min.js"></script>
<script src="user/js/foundation/foundation.js"></script>
<script src="user/js/foundation/foundation.topbar.js"></script>


<script src="user/js/app-head-calls.js"></script>
<script src="user/js/jquery.validate.min.js"></script>

<!-- for Google Map-->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTSJ4nigiCUcS_KdUEvTfegUWC2EPbP_Q&amp;sensor=false"></script>
<script type="text/javascript">
function initialize() {

var mapOptions = {
  center: new google.maps.LatLng(-3.4594135223177336, 114.81616330129327),
  zoom: 15,
  mapTypeId: google.maps.MapTypeId.ROADMAP
};
var map = new google.maps.Map(document.getElementById("map_canvas"),
	mapOptions);
var myLatlng = new google.maps.LatLng(-3.4594135223177336, 114.81616330129327);
var marker = new google.maps.Marker({
	position: myLatlng,
	title:"Rumah Sakit Syifa Medika - Banjar Baru"
});
var contentString = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h1 id="firstHeading" class="firstHeading">RS Syifa Medika</h1>'+
      '<div id="bodyContent">'+
      '<p><b>Rumah Sakit Syifa </b>, Jl. R.O. Ulin No. 93, Banjarbaru 70712.</p><br>' +
			'<h3>Sehat Adalah Berkah.</h3><br>'+
      'Telepon : 0511-5910889 <br>'+
      'Handphone : 0857 0542 2267 <br>'+
      'Whatsapp : 0821 5342 4447 <br>'+
      '</div>'+
      '</div>';
var infowindow = new google.maps.InfoWindow({
   content: contentString
});
marker.addListener('click', function() {
    infowindow.open(map, marker);
  });


// To add the marker to the map, call setMap();
marker.setMap(map);
}
</script>
<script>
	$(document).foundation();
</script>


<!-- carouFredSel plugin -->
<script src="user/plugins/carouFredSel/jquery.carouFredSel-6.2.0-packed.js"></script>
<script src="user/plugins/carouFredSel/helper-plugins/jquery.touchSwipe.min.js"></script>

<!-- Scripts Initialize -->
<script type="text/javascript" src="user/js/app-head-calls.js"></script>
<script type="text/javascript" src="user/js/jquery.nivo.slider.pack.js"></script>
<script src="user/js/foundation.min.js"></script>


<!-- Smallipop JS - Tooltips -->
<script type="text/javascript" src="user/plugins/smallipop/lib/contrib/prettify.js"></script>
<script type="text/javascript" src="user/plugins/smallipop/lib/jquery.smallipop.js"></script>
<script>
jQuery.noConflict();

jQuery(window).load(function() {
	jQuery('#slider').nivoSlider();
});
jQuery(document).ready(function() {
	// Carousel
	jQuery("#carousel-type1").carouFredSel({
		responsive: true,
		width: '100%',
		auto: false,
		circular : false,
		infinite : false,
			items: {visible: {min: 1,max: 4},
		},
		scroll: {
			items: 1,
			pauseOnHover: true
		},
		prev: {
			button: "#prev2",
			key: "left"
		},
		next: {
			button: "#next2",
			key: "right"
		},
		swipe: true
	});

	jQuery(".work_slide ul").carouFredSel({
		circular: false,
		infinite: true,
		auto: false,
		scroll:{items:1},
		prev: {	button: "#slide_prev", key: "left"},
		next: { button: "#slide_next",key: "right"}
	});
	jQuery("#testimonial_slide").carouFredSel({
		circular: false,
		infinite: true,
		auto: false,
		scroll:{items:1},
		prev: {	button: "#slide_prev1", key: "left"},
		next: { button: "#slide_next1",key: "right"}
	});


});

</script>
<!-- Initialize JS Plugins -->
<script src="user/js/app-bottom-calls.js"></script>

<!-- End Main Wrapper -->


</body>
</html>
