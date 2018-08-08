<!DOCTYPE html>
<html>
<head>
    <title>Informasi Reservasi</title>
</head>

<body>
<img src="mail.jpg" alt="">
<h2>Terimakasih telah melakukan reservasi di RSU Syifamedika</h2>
<h3>Detail Informasi</h3>
Nama Pasien    :  {{$rjpoli->pasien["nama_pasien"]}}
<br/>
No Rekam Medis :  {{$rjpoli->pasien["id_pasien"]}}
<br/>
No Reservasi :  {{$rjpoli->no_invoicepoli}}
<br/>
Nama Dokter :  {{$rjpoli->dokter["nama_dokter"]}}
<br/>
Klinik :  {{$rjpoli->klinik["nama_poli"]}}
<br/>
Pembiayaan :  {{$rjpoli->pembiayaan["nama_pembiayaan"]}}
<br/>

</body>

</html>
