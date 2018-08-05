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
					@if (session()->has('message'))
						<div data-alert class="alert-box success">
							{{ session()->get('message') }}
							<a href="" class="close">&times;</a>
						</div>
					@endif
					<form method="POST" action="{{ url('/form') }}" class="custom">
						@csrf
						<fieldset>
							<legend>Data Pasien</legend>
							<div class="row">
								<div class="large-6 columns">
									<label for="customDropdown3">ID</label>
									<select name="kartu_id" id="customDropdown3" class="medium">
										<option value="KTP">KTP</option>
										<option value="SIM">SIM</option>
									</select>
								</div>
								<div class="large-6 columns">
									<label>Nomor ID (Nomor KTP, Nomor SIM)</label>
									<input name="no_kartuid" type="text" placeholder="Isikan dengan nama pasien" required>
								</div>
							</div>
							<div class="row">
								<div class="large-2 columns">
									<label>Awalan</label>
									<select class="medium" name="awalan">
										<option value="Tn">Tn</option>
										<option value="Ny">Ny</option>
									</select>
								</div>
								<div class="large-10 columns">
									<label>Nama Pasien</label>
									<input name="nama_pasien" type="text" placeholder="Isikan dengan nama pasien" required>
								</div>
							</div>
							<div class="row">
								<div class="large-6 columns">
									<label>Tempat Lahir</label>
									<input name="tempat_lahir" type="text" placeholder="ISIKAN DENGAN TEMPAT LAHIR PASIEN" required>
								</div>
								<div class="large-6 columns">
									<label>Tanggal Lahir</label>
									<input name="tgl_lahir" class="datepicker" type="date" placeholder="ISIKAN DENGAN TANGGAL LAHIR PASIEN"  name="name" required>
								</div>
							</div>
							<div class="row">
								<div class="large-6 columns">
									<label for="customDropdown1">Jenis Kelamin</label>
									<select name="jk" id="customDropdown1" class="medium">
										<option value="P">Laki - laki</option>
										<option value="W">Perempuan</option>
									</select>
								</div>
								<div class="large-6 columns">
									<label for="customDropdown2">Golongan Darah</label>
									<select name="gol_darah" id="customDropdown2" class="medium">
										<option value="O">O</option>
										<option value="A">A</option>
										<option value="B">B</option>
										<option value="AB">AB</option>
									</select>
								</div>
							</div>
							<div class="row">
								<div class="large-6 columns">
									<label>No. Telp</label>
									<input name="no_telp" type="text" placeholder="ISIKAN DENGAN NOMOR TELEPON PASIEN" required>
								</div>
								<div class="large-6 columns">
									<label>Email</label>
									<input name="email" type="email" placeholder="ISIKAN DENGAN E-MAIL PASIEN" required>
								</div>
							</div>
							<div class="row">
								<div class="large-4 columns">
									<label>Kewarganegaraan</label>
									<select name="kewarganegaraan" id="customDropdown2" class="medium">
										<option value="WNI">WNI</option>
										<option value="WNA">WNA</option>
									</select>
								</div>
								<div class="large-4 columns">
									<label for="customDropdown3">Agama</label>
									<select name="agama" id="customDropdown3" class="medium">
										@foreach ($agamas as $agama)
											<option value="{{ $agama->no }}">{{ $agama->agama }}</option>
										@endforeach
									</select>
								</div>
								<div class="large-4 columns">
									<label for="customDropdown4">Status</label>
									<select name="status" id="customDropdown4" class="medium">
										@foreach ($statuss as $status)
											<option value="{{ $status->no }}">{{ $status->status }}</option>
										@endforeach
									</select>
								</div>
							</div>
							<div class="row">
								<div class="large-6 columns">
									<label>Pekerjaan</label>
									<input name="pekerjaan" type="text" placeholder="ISIKAN DENGAN PEKERJAAN PASIEN">
								</div>
								<div class="large-6 columns">
									<label>Tanggungan</label>
									<input name="tanggungan" type="text" placeholder="ISIKAN DENGAN TANGGUNGAN PASIEN">
								</div>
							</div>
						</fieldset>
						<fieldset>
							<legend>Alamat Pasien</legend>
							<div class="row">
								<div class="large-3 columns">
									<label for="customDropdown5">Provinsi</label>
									<select name="provinsi" id="customDropdown5" class="medium">
										@foreach ($provinsis as $provinsi)
											<option value="{{ $provinsi->id }}">{{ $provinsi->name }}</option>
										@endforeach
									</select>
								</div>
								<div class="large-3 columns">
									<label for="customDropdown6">Kabupaten / Kota</label>
									<select name="kabupaten" id="customDropdown6" class="medium">
										@foreach ($kabupatens as $kabupaten)
											<option value="{{ $kabupaten->id }}">{{ $kabupaten->name }}</option>
										@endforeach
									</select>
								</div>
								<div class="large-3 columns">
									<label for="customDropdown7">Kecamatan</label>
									<select name="kecamatan" id="customDropdown7" class="medium">
										@foreach ($kecamatans as $kecamatan)
											<option value="{{ $kecamatan->id }}">{{ $kecamatan->name }}</option>
										@endforeach
									</select>
								</div>
								<div class="large-3 columns">
									<label for="customDropdown8">Kelurahan</label>
									<select name="kelurahan" id="customDropdown8" class="medium">
										@foreach ($kelurahans as $kelurahan)
											<option value="{{ $kelurahan->id }}">{{ $kelurahan->name }}</option>
										@endforeach
									</select>
								</div>
							</div>
							<div class="row">
								<div class="large-12 columns">
									<label>Alamat</label>
									<textarea name="alamat" placeholder="ISIKAN DENGAN ALAMAT PASIEN." required></textarea>
								</div>
							</div>
						</fieldset>
						<input type="submit" class="purple button radius" value="Daftar" / style="width:100%;">
					</form>
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
