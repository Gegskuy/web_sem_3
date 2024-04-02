<?php
include 'koneksi.php';

$atas_nama       = $_POST['atas_nama'];
$tanggal     	 = $_POST['tanggal'];
$tanggal_pesan	 = $_POST['tanggal_pesan'];
$note       	 = $_POST['note'];
$id_lap       	 = $_POST['id_lap'];
$id_waktu        = $_POST['id_waktu'];

$sql	= "INSERT INTO pesanan VALUES('','$atas_nama','$tanggal','$tanggal_pesan','$note','$id_lap','$id_waktu')";

$query	= mysqli_query($connect, $sql);

if ($query) {
	header("location: konfirmasi.php");
} else {
	echo "Input Data Gagal";
}
?>