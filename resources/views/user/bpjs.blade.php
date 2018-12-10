<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width" />
	<title>Layanan BPJS - RS Syifa Medika</title>

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

	<!-- Google Fonts -->
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
	document.getElementById("bpjs").classList.add("active")
	document.getElementById("ri").classList.remove("active")
	document.getElementById("infosehat").classList.remove("active")
	document.getElementById("jadwal").classList.remove("active")
	document.getElementById("kerjasama").classList.remove("active")
</script>
<div class="main-content-top">
	<div class="main-wrapper">
		<div class="row">
			<div class="large-6 columns">
				<h2>Layanan BPJS - RSU Syifa Medika</h2>
			</div>
			<div class="large-6 columns">
				<ul class="breadcrumbs right">
					<li>Posisi Anda: </li>
					<li><a href="index.html">Beranda</a></li>
					<li><a href="#">Info BPJS</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- End Main Content Top -->
<div class="main-wrapper">
	<div class="row main-content"><!-- Main Content -->
    	<div class="large-12 columns">
			<div class="row"><!-- Row -->
				<div class="large-9 push-3 columns">
          <ol>
          	<li><h3>Daftar dokter spesialis Layanan BPJS RSU Syifa Medika Banjarbaru.</h3></li>
						<li>
							<h3>Keterangan layanan BPJS di RSU Syifa Medika Banjarbaru.</h3>
							<ul>
								<li><h3>Penanggungan Biaya Berobat BPJS.<br>RSU Syifa Medika TIDAK MEMUNGUT biaya tambahan bagi pasien BPJS, kecuali atas permintaan sendiri, seperti antara lain: Pasien naik kelas Rawat Inap, Permintaan perubahan merek obat, atau kondisi lainnya atas permintaan/persetujuan pasien.</h3></li>
								<li><h3>Ketentuan Pasien Naik Kelas Rawat Inap BPJS.<br>Merujuk pada ketentuan BPJS, pasien diperbolehkan naik kelas rawat inap atas permintaan pasien sendiri jika pasien bersedia membayar selisih biaya paket BPJS yang telah ditentukan.</h3></li>
								<li><h3>Ketentuan Penggunaan Obat Paten.<br>Pasien diperbolehkan menggunakan obat-obatan paten (Generic Branded) atas permintaan sendiri jika pasien bersedia membayar biaya obat di luar tanggungan BPJS.</h3></li>
								<li><h3>Kualitas Layanan BPJS.<br>RSU Syifa Medika TIDAK MEMBEDAKAN kualitas layanan pasien BPJS dengan pasien Non BPJS.</h3></li>
								<li><h3>Alur Layanan Rawat Jalan BPJS.<br>Pasien yang berobat ke Poliklinik spesialis wajib membawa rujukan dari Fasilitas Kesehatan Tingkat I.</h3></li>
								<li><h3>Alur Layanan Rawat Inap BPJS.<br>Semua pasien rawat inap melalui Instalasi Gawat Darurat tidak perlu membawa surat rujukan.</h3></li>
								<li><h3>TIDAK MELAKUKAN praktek “Pengarahan Negatif” dalam rangka mengambil keuntungan Rumah Sakit, misalnya: mengarahkan pasien BPJS untuk naik kelas dengan memberi keterangan tidak benar. Atau mempermainkan pasien BPJS yang mengakibatkan pasien terdesak untuk membeli obat merek lain yg tidak ditanggung BPJS.</h3></li>

							</ul>
						</li>
          </ol>
				</div>
				<div class="large-3 pull-9 columns widgets side-widgets">
					<div class="section-container accordion"><!-- Sidebar Navigation -->
						<img src="rsp-1.png" alt="">
					</div><!-- End Sidebar Navigation -->
				</div>
			</div><!-- End Row -->
        </div>
	</div><!-- End Main Content -->
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
