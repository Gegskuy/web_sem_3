<?php

session_start();
include 'koneksi.php';
if (empty($_SESSION['username'])) {
    header("login.php?message=belum_login");
}
$sql0="select MAX(id_pesanan) as idmax from pesanan";
$query0=mysqli_query($connect,$sql0);
$data0=mysqli_fetch_array($query0);
$idmax=$data0['idmax'];
$sql="select * from pesanan inner join lapangan on lapangan.id_lap=pesanan.id_lap inner join waktu on waktu.id_waktu=pesanan.id_waktu where id_pesanan='$idmax'";
$query=mysqli_query($connect,$sql);
$data=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>

    <br><br><br><br><br>

    <center>
    <h1>KONFIRMASI</h1>
    <br>
    
        <div class="border border-dark rounded-4 shadow-lg p-3 mb-5 bg-body rounded" style="width: 700px">
        <br>
            <table>
                <tr>
                    <th style="width:200px">Lapangan</th>
                    <td style="width:20px">:</td>
                    <td style="width:200px"><?=$data['lapangan']?></td>
                </tr>
                <tr>
                    <th>Atas nama</th>
                    <td>:</td>
                    <td><?=$data['atas_nama']?></td>
                </tr>
                <tr>
                    <th>Tanggal Pesan</th>
                    <td>:</td>
                    <td><?=$data['tanggal_pesan']?></td>
                </tr>
                <tr>
                    <th>Jam</th>
                    <td>:</td>
                    <td><?=$data['jam_mulai']?>-<?=$data['jam_selesai']?></td>
                </tr>
                <tr>
                    <th>Note</th>
                    <td>:</td>
                    <td><?=$data['note']?></td>
                </tr>
                <tr>
                    <th>Tanggal Pemesanan</th>
                    <td>:</td>
                    <td><?=$data['tanggal']?></td>
                </tr>
                <tr>
                    <th>Harga</th>
                    <td>:</td>
                    <td><?=$data['harga']?></td>
                </tr>
                <tr><td><br></td></tr>
                <tr>
                    <td><a href="edit.php?id=<?=$data['id_pesanan']?>" style="width:200px" class="btn btn-outline-dark">Edit</a></td>
                    <td></td>
                    <td><a href="home.php?id=<?= $data['id_pesanan']; ?>"><button class="btn btn-outline-danger" style="width: 200px">Batal</button></a></td>
                </tr>
            </table> 
            <br>
            <a href="nota.php?id=<?=$data['id_pesanan']?>" style="width:420px" class="btn btn-dark">Konfirmasi</a>
            <br>
        </div>
    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
</body>
</html>