<?php
if (isset($_POST['submit'])){ 
$nama = $_POST['nama'];
$tgl_lahir = $_POST['tgl_lahir'];
$pekerjaan = $_POST['pekerjaan'];

function hitung_umur($tgl_lahir){
	$birthDate = new DateTime($tgl_lahir);
	$today = new DateTime("today");
	if ($birthDate > $today) { 
	    exit("0 tahun 0 bulan 0 hari");
	}
	$y = $today->diff($birthDate)->y;
    return $y." tahun ";
    
}

if ($pekerjaan == "Supir") {
    $gaji = "Rp.6000000";
} elseif ($pekerjaan == "Karyawan") {
    $gaji = "Rp.4000000";
} elseif ($pekerjaan == "Petani") {
    $gaji = "Rp.10000000";
} elseif ($pekerjaan == "Dokter") {
    $gaji = "Rp.15000000";
} elseif ($pekerjaan == "Bidan") {
    $gaji = "Rp.5000000";
} elseif ($pekerjaan == "MUA") {
    $gaji = "Rp.9000000";
} else {
}

$umur = hitung_umur($tgl_lahir);
echo "
<html>
        <body>
            <h1>Form Input</h1>
            <p>Nama : $nama</p>
            <p>Tanggal Lahir: $tgl_lahir </p>
            <p>Pekerjaan : $pekerjaan </p>
            <p>Umur : $umur </p>
            <p>Gaji: $gaji </p>
        </body>
</html>
";}
?>