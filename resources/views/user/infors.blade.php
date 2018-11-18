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
	document.getElementById("profil").classList.add("active")
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
					<h2>Informasi Rumah Sakit</h2>
				</div>
				<div class="large-6 columns">
					<ul class="breadcrumbs right">
						<li>Direktori: </li>
						<li><a href="#">beranda</a></li>
						<li><a href="#">informasi klinik</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

<div class="main-wrapper">
	<div id="map_canvas"></div>
	<!-- Main Content -->
	<div class="row main-content" style="margin-top: 25px;">
		<div class="large-12 columns">
			<div class="row">
				<div class="large-12 columns">
					<h3>Tentang Rs Syifa Medika</h3>
					<div class="divider"><span></span></div>
					<img src="user/images/banner.png" alt="post-img">
					<div class="large-12 columns">
						<h3 class="text-center">“Menjadi Rumah Sakit Terdepan di <code>Kalimantan Selatan</code>.“</h3></br>
						<h4><strong>Dengan beroperasinya Rumah Sakit Umum Syifa Medika diharapkan dapat:</strong></h4>
						<ol>
							<li><h6>Memberikan kontribusi dalam peningkatan kesadaran dan mutu kesehatan masyarakat Kota Banjarbaru.</h6></li>
							<li><h6>Memberikan kontribusi dalam penyerapan tenaga kerja di Kota Banjarbaru.</h6></li>
							<li><h6>Memberikan dampak tumbuhnya ekonomi masyarakat di sekitar lokasi rumah sakit, pertumbuhan ekonomi Kota Banjarbaru dan pertumbuhan ekonomi Kalimantan Selatan pada umumnya.</h6></li>
						</ol>
						<h4><strong>Misi Rumah Sakit, disebut juga sebagai 8 pilar organisasi adalah:</strong></h4>
						<ol>
							<li><h6>Superiority, selalu unggul dalam pelayanan.</h6></li>
							<li><h6>Hospitality, melayani dengan hati, keahlian dan keramah-tamahan.</h6></li>
							<li><h6>Priority, keselamatan, kualitas, kecepatan dan kenyamanan.</h6></li>
							<li><h6>Proactive, proaktif dalam memahami kebutuhan dan keinginan pasien dan masyarakat.</h6></li>
							<li><h6>Ethic, memegang teguh etika pelayanan.</h6></li>
							<li><h6>Knowledge, mencerdaskan pasiendan masyarakat.</h6></li>
							<li><h6>Environmental friendly, berperan serta dalam bina lingkungan (ekosistem, sosial dan ekonomi).</h6></li>
							<li><h6>Dynamic, dinamis dalam setiap situasi.</h6></li>
						</ol>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<img src="user/images/main1.jpg" alt="post-img" class="cs-bg" style="margin-top: 25px;">
<!-- Edit : Colouring agar senada dan berikan teks sehat adalah berkah -->
<!-- <div class="main-wrapper">
	<div class="row">
		<div class="large-12 columns service-block">
			<div class="row">
				<div class="large-6 columns">
					<h3>Statistik</h3>
					<div class="divider"><span></span></div>
					<p class="client-statistics">Pasien Puas:</p>
					<div class="figures">-</div>
					<p class="client-statistics">Operasi Berhasil</p>
					<div class="figures">-</div>
				</div>
				<div class="large-6 columns">
					<div class="title-block">
						<h5>Testimoni Pasien</h5>
						<div class="divider"><span></span></div>
						<div class="clearfix"></div>
					</div>
					<div class="module_content testimonial-block">
						<ul id="testimonial_slide">
							<li>
								<div class="testimonial-content">
									<p>
										-
									</p>
								</div>
								<span class="testimonial-divider"></span>
								<div class="testimonial-meta"><cite>Pasien</cite> - Title</div>

							</li>
						</ul>
						<div class="clearfix"></div>
						<a class="prev" id="slide_prev1" href="#"><img src="user/images/arrow_left.png" alt="Previous" /></a>
						<a class="next" id="slide_next1" href="#"><img src="user/images/arrow_right.png" alt="Next" /></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> -->



<div class="row" style="margin-top: 80px;">
	<div class="large-12 columns">
		<div class="title-block">
			<h1><strong>Kerjasama Kesehatan</strong> 17 Perusahaan</h1>
		</div>
		<div class="divider"><span></span></div>
		<div class="work_slide" id="kerjasama">
			<ul id="work_slide">
				<li>
					<div class="view view-two">
						<img src="user/images/Kerjasama/1.jpg" alt="" />
					</div>
				</li>
				<li>
					<div class="view view-two">
						<img src="user/images/kerjasama/2.png" alt="" />
					</div>
				</li>
				 <li>
					<div class="view view-two">
						<img src="user/images/kerjasama/3.png" alt="" />
					</div>
				</li>
				<li>
					<div class="view view-two">
						<img src="user/images/kerjasama/4.png" alt="" />
					</div>
				</li>
			 	<li>
					<div class="view view-two">
						<img src="user/images/kerjasama/5.png" alt="" />
					</div>
				</li>
				<li>
				 <div class="view view-two">
					 <img src="user/images/kerjasama/6.jpg" alt="" />
				 </div>
			 </li>
			 <li>
				<div class="view view-two">
					<img src="user/images/kerjasama/7.jpg" alt="" />
				</div>
			</li>
			<li>
				<div class="view view-two">
					<img src="user/images/kerjasama/8.png" alt="" />
				</div>
			</li>
			<li>
			 <div class="view view-two">
				 <img src="user/images/kerjasama/9.jpg" alt="" />
			 </div>
		 </li>
		 <li>
			 <div class="view view-two">
				 <img src="user/images/kerjasama/10.png" alt="" />
			 </div>
		 </li>
		 <li>
			 <div class="view view-two">
				 <img src="user/images/kerjasama/11.png" alt="" />
			 </div>
		 </li>
		 <li>
			<div class="view view-two">
				<img src="user/images/kerjasama/12.jpg" alt="" />
			</div>
		</li>
		 <li>
			 <div class="view view-two">
				 <img src="user/images/kerjasama/13.png" alt="" />
			 </div>
		 </li>
		 <li>
			 <div class="view view-two">
				 <img src="user/images/kerjasama/14.png" alt="" />
			 </div>
		 </li>
		 <li>
			 <div class="view view-two">
				 <img src="user/images/kerjasama/15.png" alt="" />
			 </div>
		 </li>
		 <li>
			<div class="view view-two">
				<img src="user/images/kerjasama/16.jpg" alt="" />
			</div>
		</li>
		<li>
		 <div class="view view-two">
			 <img src="user/images/kerjasama/17.jpg" alt="" />
		 </div>
	 </li>
	</ul>

			<div class="clearfix"></div>
			<a class="prev" id="slide_prev" href="#"><img src="user/images/arrow_left.png" alt="Previous" /></a>
			<a class="next" id="slide_next" href="#"><img src="user/images/arrow_right.png" alt="Next" /></a>
		</div>
	</div>
</div>



<div class="main-content-top" id="lowongankerja" style="margin-top: 80px; background-color: #ebebeb">
	<div class="main-wrapper">
		<div class="row">
			<div class="large-12 columns">
					<h1><strong>Lowongan Pekerjaan</strong></h1>
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
