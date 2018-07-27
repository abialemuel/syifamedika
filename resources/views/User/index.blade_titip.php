<!DOCTYPE html>
<!--[if IE 8]> 	<html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width" />
	<title>Syifa Medika - Beranda</title>
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

<!-- Begin Main Wrapper -->
<div class="main-wrapper">
	<!-- Main Navigation -->
	<header class="row main-navigation">
		<div class="large-3 columns">
			<a href="index.html" id="logo"><img src="user/images/logo.png" alt="Medico Logo" /></a>
		</div>
		<div class="large-9 columns">
			<nav class="top-bar">
				<ul class="title-area">
				  <!-- Title Area -->
				  <li class="name"></li>
				  <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
				  <li class="toggle-topbar menu-icon"><a href="#"><span>Main Menu</span></a></li>
				</ul>

				<section class="top-bar-section">
					<!-- Left Nav Section -->
					  <ul class="right">
						<li class=""><a href="#" class="active">Beranda</a></li>
						<li class="has-dropdown"><a href="#">Profil</a>
						  <ul class="dropdown">
							<li><a href="about.html">Profil Rumah Sakit</a></li>
							<li><a href="grid.html">Profil Dokter</a></li>
							<li><a href="navigation.html">Dokter Spesialis</a></li>
						  </ul>
						</li>
						<li class="has-dropdown"><a href="#">Rawat Jalan</a>
						  <ul class="dropdown">
            	<li><a href="shortcodes.html">Klinik Mata</a></li>
							<li><a href="alert-boxes.html">Klinik Gigi</a></li>
							<li><a href="panels.html">Klinik Jantung & Pembuluh Darah</a></li>
							<li><a href="pricing-tables.html">Klinik Anak</a></li>
							<li><a href="bars.html">Klinik Bedah</a></li>
							<li><a href="tables.html">Klinik Syaraf</a></li>
							<li><a href="thumbnails.html">Klinik Rehabilitasi Medis</a></li>
							<li><a href="flex-video.html">Klinik Penyakit Dalam</a></li>
							<li><a href="bars.html">Klinik Kebidanan dan Kandungan</a></li>
							<li><a href="tables.html">Klinik Umum</a></li>
						  </ul>
						</li>
						<li class=""><a href="#">Rawat Inap</a></li>
					  </ul>
					  <!-- End Left Nav Section -->
				</section>
			</nav>
		</div>
	</header>
	
</div>

<div class="slider-wrapper theme-default">
    <div id="slider" class="nivoSlider">
		<img src="user/images/demo/slider/1.jpg" data-thumb="user/images/demo/news/1.jpg" alt="" title="#caption1" />
		<a href="http://www.google.com"><img src="user/images/demo/slider/2.jpg" data-thumb="user/images/demo/news/2.jpg" alt="" title="#caption2"  /></a>
		<img src="user/images/demo/slider/3.jpg" data-thumb="user/images/demo/news/3.jpg" alt="" title="#caption3" />
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
                <div class="large-3 columns red">
                    <p>Reservasi</p>
                    &nbsp;<!-- Put appointemnt label here -->
                </div>
                <div class="large-9 columns">
                    <form method="POST" action="#" id="appointment-contact-form">
                        <div class="row">
                            <div class="large-3 columns">
                                <input type="text" placeholder="Full Name" name="name" />
                                <input type="text" placeholder="Phone Nomber" name="name" />
                            </div>
                            <div class="large-3 columns">
                                <input type="text" placeholder="E-mail Address" name="name" />
                                <input class="datepicker" type="text" placeholder="Appointment Date"  name="name" />
                            </div>
                            <div class="large-3 columns">
                                <textarea cols="10" rows="15"  name="message" placeholder="Message"></textarea>
                            </div>
                            <div class="large-3 columns">
                                <input type="submit" class="purple button radius" value="Daftar" / style="width:100%;">
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
						<a href="#">
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
						<a href="/blog">
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
						<a href="#">
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
						<a href="#">
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

<div class="main-wrapper">
   	<div class="row main-content">

		<div class="large-12 columns">
			<div class="title-block">
				<h3>Dokter di RS Syifa Medika</h3>
				<div class="divider"><span></span></div>
			</div>
			<div class="work_slide">
				<ul id="work_slide">
					<li>
						<div class="view view-two">
							<img src="user/images/demo/doctors/1.jpg" alt="" />
							<div class="mask">
								<h3>Specialties</h3>
								<p>Colon and rectal surgery, Dental surgery, Oral and maxillofacial surgery.</p>
								<a class="button btn-icon icon-2" href="portfolio-single.html"><i class="icon-external-link icon-large"></i></a>
							</div>
						</div>
						<div class="doctor-name">John Smith</div>
					</li>
					<li>
						<div class="view view-two">
							<img src="user/images/demo/doctors/2.jpg" alt="" />
							<div class="mask">
								<h3>Specialties</h3>
								<p>Pediatric surgery, Plastic surgery, Podiatric surgery.</p>
								<a class="button btn-icon icon-2" href="#"><i class="icon-external-link icon-large"></i></a>
							</div>
						</div>
						<div class="doctor-name">Adriana Lima</div>
					</li>
					 <li>
						<div class="view view-two">
							<img src="user/images/demo/doctors/3.jpg" alt="" />
							<div class="mask">
								<h3>Specialties</h3>
								<p>Trauma surgery, Thoracic surgery, Urology, Veterinary surgery.</p>
								<a class="button btn-icon icon-2" href="#"><i class="icon-external-link icon-large"></i></a>
							</div>
						</div>
						<div class="doctor-name">M.D. House</div>
					</li>
					<li>
						<div class="view view-two">
							<img src="user/images/demo/doctors/4.jpg" alt="" />
							<div class="mask">
								<h3>Specialties</h3>
								<p>All in one master, the genius, the man behind the curtain.</p>
								<a class="button btn-icon icon-2" href="#"><i class="icon-external-link icon-large"></i></a>
							</div>
						</div>
						<div class="doctor-name">Lonely Shepherd</div>
					</li>
					 <li>
						<div class="view view-two">
							<img src="user/images/demo/doctors/5.jpg" alt="" />
							<div class="mask">
								<h3>Specialties</h3>
								<p>Aenean eget mauris nibh, eu pellentesque ipsum. The lorem is totally site amet.</p>
								<a class="button btn-icon icon-2" href="#"><i class="icon-external-link icon-large"></i></a>
							</div>
						</div>
						<div class="doctor-name">Lisa Minelly</div>
					</li>
					 <li>
						<div class="view view-two">
							<img src="user/images/demo/doctors/6.jpg" alt="" />
							<div class="mask">
								<h3>Specialties</h3>
								<p>Aenean eget mauris nibh, eu pellentesque ipsum. The lorem is totally site amet.</p>
								<a class="button btn-icon" href="#"><i class="icon-zoom-in icon-large"></i></a>
							</div>
						</div>
						<div class="doctor-name">Enzo Ferrari</div>
					</li>
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
				<img src="user/images/gallery/kelas1a-min.png" alt="Korean bibimbap with egg and vegetables">
			</figure>
		</li>
		<li>
			<figure class="gallery-photo">
				<img src="user/images/gallery/kelas1b-min.png" alt="Simple italian pizza with cherry tomatoes">
			</figure>
		</li>
		<li>
			<figure class="gallery-photo">
				<img src="user/images/gallery/kelas2a-min.png" alt="Chicken breast steak with vegetables">
			</figure>
		</li>
		<li>
			<figure class="gallery-photo">
				<img src="user/images/gallery/kelas2b-min.png" alt="Autumn pumpkin soup">
			</figure>
		</li>
	</ul>
	<ul class="gallery-showcase">
		<li>
			<figure class="gallery-photo">
				<img src="user/images/gallery/kelas3a-min.png" alt="Korean bibimbap with egg and vegetables">
			</figure>
		</li>
		<li>
			<figure class="gallery-photo">
				<img src="user/images/gallery/kelas3b-min.png" alt="Simple italian pizza with cherry tomatoes">
			</figure>
		</li>
		<li>
			<figure class="gallery-photo">
				<img src="user/images/gallery/kelas3c-min.png" alt="Chicken breast steak with vegetables">
			</figure>
		</li>
		<li>
			<figure class="gallery-photo">
				<img src="user/images/gallery/kelas3d-min.png" alt="Autumn pumpkin soup">
			</figure>
		</li>
	</ul>
</section>


<footer class="footer_wrapper">
	<div class="row footer-part">
		<div class="large-12 columns">
			<div class="row">
				<div class="large-3 columns">
					<h4 class="footer-title">About Us</h4>
					<div class="divdott"></div>
					<img class="botlogo" src="user/images/logo.png" alt="" />
					<div class="footer_part_content">
						<p>Medico Theme Bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate</p>
					</div>
				</div>
				<div class="large-3 columns">
					<h4 class="footer-title">Latest Posts</h4>
					<div class="divdott"></div>
					<div class="footer_part_content">
						<ul class="latest-posts">
							<li>
								Update: WordPress Theme Submission Requirements
								<div class="divline"><span></span></div>
							</li>
							<li>
								Envato's Most Wanted - $5,000 Reward for the First 15 Hosting Templates
								<div class="divline"><span></span></div>
							</li>
							<li>
								Does a well designed thumbnail increase your sales?
								<div class="divline"><span></span></div>
							</li>
						</ul>
					</div>
				</div>


				<div class="large-3 columns">
					<h4 class="footer-title">Contact info</h4>
					<div class="divdott"></div>
					<div class="footer_part_content">
						<p>Medico Bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id </p>
						<ul class="about-info">
							<li><i class="icon-home"></i><span>lorem ipsum street</span></li>
							<li><i class="icon-phone"></i><span>+399 (500) 321 9548</span></li>
							<li><i class="icon-envelope"></i><a href="mailto:info@Medico.com">info@Medico.com</a></li>
						</ul>
						<ul class="social-icons">
						<li><a href="#"><i class="icon-pinterest"></i></a></li>
						<li><a href="#"><i class="icon-twitter"></i></a></li>
						<li><a href="#"><i class="icon-facebook"></i></a></li>
					</ul>
					</div>
				</div>

				<div class="large-3 columns">
					<h4 class="footer-title">Quick Contact</h4>
					<div class="divdott"></div>
					<form method="POST" action="#" id="footer-contact-form">
						<div class="footer_part_content">
							<div class="row">
								<div class="large-6 columns">
									<input type="text" placeholder="Name"  name="name" />
								</div>
								<div class="large-6 columns">
									<input type="text" placeholder="E-mail" name="email" />
								</div>
								<div class="large-12 columns">
									<textarea cols="10" rows="15"  name="message" placeholder="Message"></textarea>
								</div>
								<div class="large-12 columns text-right">
									<input type="submit" class="button" value="Send" name="send" />
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<div class="privacy footer_bottom">
		<div class="footer-part">
			<div class="row">
				<div class="large-10 columns copyright">
					<p >&copy; 2013 Medico Theme, All Rights Reserved.</p>
				</div>
				<div class="large-2 columns">
					<div id="back-to-top"><a href="#top"></a></div>
				</div>
			</div>
		</div>
	</div>
</footer>


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
