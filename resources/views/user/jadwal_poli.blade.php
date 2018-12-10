<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width" />
	<title>Jadwal Poliklinik</title>

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

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="user/css/style.css" />

	<!-- Main JS Files -->
	<script src="user/js/vendor/jquery.js"></script>
	<script src="user/js/vendor/custom.modernizr.js"></script>
</head>
<body>
@include('user/header')
<script type="text/javascript">
	document.getElementById("beranda").classList.remove("active")
	document.getElementById("profil").classList.remove("active")
	document.getElementById("rj").classList.remove("active")
	document.getElementById("bpjs").classList.remove("active")
	document.getElementById("ri").classList.remove("active")
	document.getElementById("infosehat").classList.remove("active")
	document.getElementById("jadwal").classList.add("active")
	document.getElementById("kerjasama").classList.remove("active")
</script>
<div class="main-content-top">
	<div class="main-wrapper">
		<div class="row">
			<div class="large-6 columns">
				<h2>Jadwal Poliklinik RSU Syifa Medika</h2>
			</div>
			<div class="large-6 columns">
				<ul class="breadcrumbs right">
					<li>Posisi Anda: </li>
					<li><a href="index.html">Beranda</a></li>
					<li><span>Jadwal Poliklinik</span></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- End Main Content Top -->
<div class="main-wrapper">
	<div class="row main-content">
		<div class="large-12 columns">
			<div class="row">
				<div class="large-10 push-1 columns" style="margin: 25px 0;">
					<div class="row">
						<div class="large-12 columns">
							<table>
								<thead>
									<tr>
										<th style="width:200px">Kategori</th>
										<th>Klinik</th>
										<th style="width:150px">Hari</th>
										<th style="width:100px">Jam</th>
										<th style="width:150px">Dokter</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($jadwal_polis1 as $jadwal=>$jadwal_poli1)
									<tr>
										<td>POLI SPESIALIS NON BPJS</td>
										<td>Klinik Bedah Sub Onkologi</td>
										<td>Senin, Kamis, Jum’at</td>
										<td>09.00 – 10.00</td>
										<td>dr.Yamsun,Sp.BK(K)Onkologi</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div><!-- End Row -->
		</div>
	</div>
</div>

@include('user/footer')

<!-- carouFredSel plugin -->
<script type="text/javascript" src="user/plugins/carouFredSel/jquery.carouFredSel-6.2.0-packed.js"></script>
<script type="text/javascript" src="user/plugins/carouFredSel/helper-plugins/jquery.touchSwipe.min.js"></script>

<!-- Scripts Initialize -->
<script src="user/js/app-head-calls.js"></script>
<script src="user/js/foundation.min.js"></script>

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
