<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width" />
	<title>Pendaftaran Pasien Baru - RS Syifa Medika</title>

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
<div class="main-content-top">
	<div class="main-wrapper">
		<div class="row">
			<div class="large-6 columns">
				<h2>Pendaftaran Pasien Baru - RSU Syifa Medika</h2>
			</div>
			<div class="large-6 columns">
				<ul class="breadcrumbs right">
					<li>POSISI ANDA: </li>
					<li><a href="index.html">BERANDA</a></li>
					<li><a href="#">Form Pendaftaran</a></li>
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
					<h3>Formulir Pendaftaran Pasien Baru RSU Syifa Medika</h3>
          <form class="custom">
						<fieldset>
							<legend>Data Pasien</legend>
							<div class="row">
								<div class="large-6 columns">
									<label for="customDropdown3">ID</label>
									<select id="customDropdown3" class="medium">
										<option>KTP</option>
										<option>SIM</option>
									</select>
								</div>
								<div class="large-6 columns">
									<label>Nomor ID (Nomor KTP, Nomor SIM)</label>
									<input type="text" placeholder="Isikan dengan nama pasien">
								</div>
							</div>
							<div class="row">
								<div class="large-12 columns">
									<label>Nama Pasien</label>
									<input type="text" placeholder="Isikan dengan nama pasien">
								</div>
							</div>
							<div class="row">
								<div class="large-6 columns">
									<label>Tempat Lahir</label>
									<input type="text" placeholder="ISIKAN DENGAN TEMPAT LAHIR PASIEN">
								</div>
								<div class="large-6 columns">
									<label>Tanggal Lahir</label>
									<input class="datepicker" type="text" placeholder="ISIKAN DENGAN TANGGAL LAHIR PASIEN"  name="name" />
								</div>
							</div>
							<div class="row">
								<div class="large-6 columns">
									<label for="customDropdown1">Jenis Kelamin</label>
									<select id="customDropdown1" class="medium">
										<option>Laki - laki</option>
										<option>Perempuan</option>
									</select>
								</div>
								<div class="large-6 columns">
									<label for="customDropdown2">Golongan Darah</label>
									<select id="customDropdown2" class="medium">
										<option>O</option>
										<option>A</option>
										<option>B</option>
										<option>AB</option>
									</select>
								</div>
							</div>
							<div class="row">
								<div class="large-6 columns">
									<label>No. Telp</label>
									<input type="text" placeholder="ISIKAN DENGAN NOMOR TELEPON PASIEN">
								</div>
								<div class="large-6 columns">
									<label>Email</label>
									<input type="email" placeholder="ISIKAN DENGAN E-MAIL PASIEN">
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<label>Kewarganegaraan</label>
									<input type="text" placeholder="ISIKAN SESUAI KEWARGANEGARAAN PASIEN">
								</div>
								<div class="large-4 columns">
									<label for="customDropdown3">Agama</label>
									<select id="customDropdown3" class="medium">
										<option>Islam</option>
										<option>Kristen</option>
										<option>Katholik</option>
										<option>Hindu</option>
										<option>Budha</option>
									</select>
								</div>
								<div class="large-4 columns">
									<label for="customDropdown4">Status</label>
									<select id="customDropdown4" class="medium">
										<option>Menikah</option>
										<option>Lajang</option>
									</select>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<label>Pekerjaan</label>
									<input type="email" placeholder="ISIKAN DENGAN PEKERJAAN PASIEN">
								</div>
								<div class="large-4 columns">
									<label for="customDropdown4">Pendidikan Terakhir</label>
									<select id="customDropdown4" class="medium">
										<option>SMP</option>
										<option>SMA</option>
										<option>S1</option>
										<option>S2</option>
									</select>
								</div>
								<div class="large-4 columns">
									<label>Tanggungan</label>
									<input type="email" placeholder="ISIKAN DENGAN TANGGUNGAN PASIEN">
								</div>
							</div>
							<div class="row">
								<div class="large-6 columns">
									<label>Nama Ayah</label>
									<input type="text" placeholder="ISIKAN DENGAN NAMA AYAH PASIEN">
								</div>
								<div class="large-6 columns">
									<label>Nama Ibu</label>
									<input type="email" placeholder="ISIKAN DENGAN NAMA IBU PASIEN">
								</div>
							</div>
							<div class="row">
								<div class="large-12 columns">
									<label>Nomor BPJS.</label>
									<input type="text" placeholder="ISIKAN SESUAI NOMOR BPJS PASIEN">
								</div>
							</div>
						</fieldset>
						<fieldset>
							<legend>Alamat Pasien</legend>
							<div class="row">
								<div class="large-3 columns">
									<label for="customDropdown5">Provinsi</label>
									<select id="customDropdown5" class="medium">
										<option>Kalimantan Tengah</option>
										<option>SMA</option>
										<option>S1</option>
										<option>S2</option>
									</select>
								</div>
								<div class="large-3 columns">
									<label for="customDropdown6">Kabupaten / Kota</label>
									<select id="customDropdown6" class="medium">
										<option>Banjarmasin</option>
										<option>SMA</option>
										<option>S1</option>
										<option>S2</option>
									</select>
								</div>
								<div class="large-3 columns">
									<label for="customDropdown7">Kecamatan</label>
									<select id="customDropdown7" class="medium">
										<option>Banjarmasin</option>
										<option>SMA</option>
										<option>S1</option>
										<option>S2</option>
									</select>
								</div>
								<div class="large-3 columns">
									<label for="customDropdown8">Kelurahan</label>
									<select id="customDropdown8" class="medium">
										<option>Banjarmasin</option>
										<option>SMA</option>
										<option>S1</option>
										<option>S2</option>
									</select>
								</div>
							</div>
							<div class="row">
								<div class="large-12 columns">
									<label>Alamat</label>
									<textarea placeholder="ISIKAN DENGAN ALAMAT PASIEN."></textarea>
								</div>
							</div>
						</fieldset>
					</form>
					<input type="submit" class="purple button radius" value="Daftar" / style="width:100%;">
					<!--  Form End -->
				</div>
        <div class="large-3 pull-9 columns widgets side-widgets">
					<img src="user/images/rsp-1.png" alt="">
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
