<!DOCTYPE html>
<html>
<head>
    <title>Information Registrasi</title>
</head>

<body>
<img src="mail.jpg" alt="">
<h2>Terimakasih telah melakukan registrasi di RSU Syifamedika</h2>
<h3>Detail Inromasi</h3>
Nama Pasien    :  {{$pasien->nama_pasien}}
<br/>
No Rekam Medis :  {{$pasien->id_pasien}}
<br/>

<h2>No rekam medis dapat digunakan untuk melakukan reservasi</h2>
</body>

</html>
