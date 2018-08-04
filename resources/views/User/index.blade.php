<!DOCTYPE html>
<!--[if IE 8]> 	<html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width" />
	<title>Beranda - RS Syifa Medika</title>
	<link rel="icon" href="user/images/logo1.png">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,700' rel='stylesheet' type='text/css'>
	<!-- Smallipop CSS - Tooltips -->
	<link rel="stylesheet" href="user/plugins/smallipop/css/contrib/animate.min.css" type="text/css" media="all" title="Screen" />
	<link rel="stylesheet" href="user/plugins/smallipop/css/jquery.smallipop.css" type="text/css" media="all" title="Screen" />

	<!-- Default CSS -->
	<link rel="stylesheet" href="user/css/normalize.css" />
	<link rel="stylesheet" href="user/css/foundation.css" />
	<link rel="stylesheet" href="user/css/fgx-foundation.css" />
	<!--[if IE 8]>
		<link rel="stylesheet" href="user/css/ie8-grid-foundation-4.css" />

	<![endif]-->

	<!-- Font Awesome - Retina Icons -->
	<link rel="stylesheet" href="user/plugins/fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="user/css/nivo-slider.css" />
	<link rel="stylesheet" href="user/css/themes/default/default.css" />
	<link rel="stylesheet" href="user/css/datepicker/metallic.css" />
	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="user/css/style.css" />

	<!-- Included JS Files -->
	<script src="user/js/vendor/jquery.js"></script>
	<script src="user/js/vendor/custom.modernizr.js"></script>
</head>
<body onload="initialize()">
@include('user/header')

<div class="slider-wrapper theme-default">
    <div id="slider" class="nivoSlider">
		<img src="user/images/slider/1.jpg" alt="" title="#gambar RS" />
		<a href=""><img src="user/images/slider/2.jpg" alt="" title="#gambar RS"  /></a>
		<img src="user/images/slider/3.jpg" alt="" title="#gambar RS" />
	</div>
	<div id="caption1" class="nivo-html-caption">
		<p class="nivotitle v1">Selamat Datang</p>
		<p class="nivotitle v2">Rumah Sakit Syifa Medika</p>
		<p class="nivotitle v3">Banjar Baru</p>
	</div>
	<div id="caption2" class="nivo-html-caption">
		<p class="nivotitle v1">Selamat Datang</p>
		<p class="nivotitle v2">Rumah Sakit Syifa Medika</p>
		<p class="nivotitle v3">Banjar Baru</p>
	</div>
	<div id="caption3" class="nivo-html-caption">
		<p class="nivotitle v1">Selamat Datang</p>
		<p class="nivotitle v2">Rumah Sakit Syifa Medika</p>
		<p class="nivotitle v3">Banjar Baru</p>
	</div>

    <div class="main-wrapper app-wrapper">

		<div class="appointment-block grey-bg">
            <div class="row">
                <div class="large-2 columns red">
                    <a href="form">Registrasi <br>Pasien Baru</a>
                    &nbsp;<!-- Put appointemnt label here -->
                </div>
                <div class="large-10 columns">
                    <form method="POST" action="#" id="appointment-contact-form">
                        <div class="row">
                            <div class="large-3 columns">
                                <input type="text" placeholder="No. Rekam Medis" name="no_rekam_medis" />
                                <input type="text" placeholder="Nama Pasien" name="name" />
                            </div>
                            <div class="large-2 columns">

															<select class="choose_clinic">
																<option value="volvo">Clinic</option>
																<option value="mercedes">Mercedes</option>
																<option value="saab">Saab</option>
																<option value="audi">Audi</option>
															</select>
															<select class="choose_doctor">
																<option value="volvo">doctor</option>
																<option value="mercedes">Mercedes</option>
																<option value="saab">Saab</option>
																<option value="audi">Audi</option>
															</select>
                            </div>
                            <div class="large-4 columns">
															<input class="datepicker" type="text" placeholder="Pilih Tanggal"  name="name" />

															<div class="row">
															  <div class="large-6 columns">
																	<select class="choose_schedule">
																		<option value="volvo">Pilih Jadwal</option>
																		<option value="mercedes">Mercedes</option>
																		<option value="saab">Saab</option>
																		<option value="audi">Audi</option>
																	</select>
																</div>
															  <div class="large-6 columns">
																	<select class="choose_payment_method">
																		<option value="volvo">Cara Bayar</option>
																		<option value="mercedes">Mercedes</option>
																		<option value="saab">Saab</option>
																		<option value="audi">Audi</option>
																	</select>
																</div>
															</div>
                            </div>
                            <div class="large-3 columns">
                                <input type="submit" class="purple button radius" value="Reservasi" / style="width:100%;">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- End Main Slider -->

	<!-- Main Content -->
<div class="main-wrapper">
   	<div class="row main-content">
        <div class="large-12 columns">
			<div class="row">
				<div class="large-3 columns">
					<div class="featured-block">
						<a href="jadwalpoliklinik">
							<span class="icon-calendar fblock-icon"></span>
							<div class="fblock-content">
								<p class="fblock-main">Jadwal <strong>Poliklinik</strong></p>
								<p class="fblock-sub">Lihat Detail</p>
							</div>
						</a>
					</div>
				</div>
				<div class="large-3 columns">
					<div class="featured-block">
						<a href="/infosehat">
							<span class="icon-lightbulb fblock-icon"></span>
							<div class="fblock-content">
								<p class="fblock-main">Kumpulan <strong>Info Sehat</strong></p>
								<p class="fblock-sub">Lihat Detail</p>
							</div>
						</a>
					</div>
				</div>
				<div class="large-3 columns">
					<div class="featured-block">
						<a href="profilrs">
							<span class="icon-group fblock-icon"></span>
							<div class="fblock-content">
								<p class="fblock-main">Kerjasama <strong>Kesehatan</strong></p>
								<p class="fblock-sub">Lihat Detail</p>
							</div>
						</a>
					</div>
				</div>
				<div class="large-3 columns">
					<div class="featured-block">
						<a href="profilrs">
							<span class="icon-info-sign fblock-icon"></span>
							<div class="fblock-content">
								<p class="fblock-main">Lowongan <strong>Kerja</strong></p>
								<p class="fblock-sub">Lihat Detail</p>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
		<hr>
		<div class="clearfix"></div>
	</div>
</div>

<div class="grey-bg" style="">
	<h1 class="text-center" style="padding-top:75px;"><strong>Rumah Sakit Syifa Medika</strong></h1>
	<h3 class="text-center">“Menjadi Rumah Sakit Terdepan di <code>Kalimantan Selatan</code>.“</h3>

		<!-- Flex Videos-->

			<div class="large-6 push-3 columns row"  style="padding-bottom: 75px;">

				<div class="flex-video">
					<iframe width="854" height="480" src="https://www.youtube.com/embed/4BhghZahtuM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
				</div>

				<p>Dok. Pribadi.</p>
					<a href="#" class="button aboutrs">
							Tentang RS Syifa
					</a>
				</div>


		<!-- Flex Videos -->
		<hr/>
</div>

<div class="main-wrapper" style="padding: 100px 0px 220px 0px;">
   	<div class="row main-content">

		<div class="large-12 columns">
			<div class="title-block">
				<h3>Dokter di RS Syifa Medika</h3>
				<div class="divider"><span></span></div>
			</div>
			<div class="work_slide">
				<ul id="work_slide">
					@foreach ($dokters as $dt=>$dokter)
					<li>
						<div class="view view-two">
							<img src="user/images/demo/doctors/1.jpg" alt="" />
							<div class="mask">
								<h3>{{ $dokter->spesialis['nama_spesialis'] }}</h3>
							</div>
						</div>
						<div class="doctor-name">{{ $dokter->nama_dokter }}</div>
					</li>
					@endforeach
				</ul>


				<div class="clearfix"></div>
				<a class="prev" id="slide_prev" href="#"><img src="user/images/arrow_left.png" alt="Previous" /></a>
				<a class="next" id="slide_next" href="#"><img src="user/images/arrow_right.png" alt="Next" /></a>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>

<section class="row section-gallery" style="margin-bottom: 50px;">
	<div class="title-block">
		<h3>Kamar di RS Syifa Medika</h3>
		<div class="divider"><span></span></div>
	</div>
	<ul class="gallery-showcase clearfix">
		<li>
			<figure class="gallery-photo">
				<img src="user/images/gallery/kelas1a-min.png" alt="Kamar kelas 1A">
			</figure>
		</li>
		<li>
			<figure class="gallery-photo">
				<img src="user/images/gallery/kelas1b-min.png" alt="Kamar kelas 1B">
			</figure>
		</li>
		<li>
			<figure class="gallery-photo">
				<img src="user/images/gallery/kelas2a-min.png" alt="Kamar kelas 2A">
			</figure>
		</li>
		<li>
			<figure class="gallery-photo">
				<img src="user/images/gallery/kelas2b-min.png" alt="Kamar kelas 2B">
			</figure>
		</li>
	</ul>
	<ul class="gallery-showcase">
		<li>
			<figure class="gallery-photo">
				<img src="user/images/gallery/kelas3a-min.png" alt="Kamar kelas 3A">
			</figure>
		</li>
		<li>
			<figure class="gallery-photo">
				<img src="user/images/gallery/kelas3b-min.png" alt="Kamar kelas 3B">
			</figure>
		</li>
		<li>
			<figure class="gallery-photo">
				<img src="user/images/gallery/kelas3c-min.png" alt="Kamar kelas 3C">
			</figure>
		</li>
		<li>
			<figure class="gallery-photo">
				<img src="user/images/gallery/kelas3d-min.png" alt="Kamar kelas 3D">
			</figure>
		</li>
	</ul>
</section>


@include('user/footer')


<!-- carouFredSel plugin -->
<script src="user/plugins/carouFredSel/jquery.carouFredSel-6.2.0-packed.js"></script>
<script src="user/plugins/carouFredSel/helper-plugins/jquery.touchSwipe.min.js"></script>

<!-- Scripts Initialize -->
<script type="text/javascript" src="user/js/app-head-calls.js"></script>
<script type="text/javascript" src="user/js/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript" src="user/js/datepicker.js"></script>
<script src="user/js/foundation.min.js"></script>

<!-- Smallipop JS - Tooltips -->
<script type="text/javascript" src="user/plugins/smallipop/lib/contrib/prettify.js"></script>
<script type="text/javascript" src="user/plugins/smallipop/lib/jquery.smallipop.js"></script>


<script>$(document).foundation();</script>


<script>
/*jshint jquery:true */
jQuery.noConflict();

jQuery(window).load(function() {
	"use strict";
	jQuery('#slider').nivoSlider({ controlNav: false});
});
jQuery(document).ready(function() {
	"use strict";
	jQuery('input.datepicker').Zebra_DatePicker();
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
		items: {visible: {min: 3,max: 3}},
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
<script>$(document).foundation();</script>


</body>
</html>
