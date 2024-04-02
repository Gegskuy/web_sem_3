<?php
include 'koneksi.php';
$id_pesanan=$_GET['id'];
$atas_nama       = $_POST['atas_nama'];
$tanggal     	 = $_POST['tanggal'];
$tanggal_pesan	 = $_POST['tanggal_pesan'];
$note       	 = $_POST['note'];
$id_lap       	 = $_POST['id_lap'];
$id_waktu        = $_POST['id_waktu'];

$sql	= "UPDATE pesanan set atas_nama='$atas_nama',tanggal='$tanggal',tanggal_pesan='$tanggal_pesan',note='$note',id_lap='$id_lap',id_waktu='$id_waktu' where id_pesanan='$id_pesanan'";

$query	= mysqli_query($connect, $sql);

if ($query) {
	header("location: konfirmasi.php");
} else {
	echo "Edit Data Gagal";
}
?>