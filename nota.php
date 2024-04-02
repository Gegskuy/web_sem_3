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
<nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
        <a class="navbar-brand" href="">GG LAPANGAN</a>
     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="history.php">History</a>
        </li>
    </ul>
      <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item" style="float: right">
          <a class="nav-link active" aria-current="page" href="logout.php">Logout</a>
        </li>
        </ul>
        </div>
    </nav>

    
    <br><br><br><br><br>
    <center>
    <h1>NOTA</h1>
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
            </table> 
            <br>
            <a href="home.php" class="btn btn-dark" role="button">
            Back
            </a>
        </div>
        
    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
</body>
</html>