<?php

session_start();
include 'koneksi.php';
if (empty($_SESSION['username'])) {
    header("location:login.php?message=belum_login");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
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
        </div>
    </nav>

    <center>
        <br><br><br><br><br>
        <h1>HISTORY</h1>
        <br>
        <div class="border border-dark rounded-4 shadow-lg p-3 mb-5 bg-body rounded" style="width: 700px">
            <table style="width:660px">
                <?php
                   include('koneksi.php');
                   
                   $sql	= "SELECT * FROM pesanan INNER JOIN lapangan ON lapangan.id_lap=pesanan.id_lap";
			       $query	= mysqli_query($connect, $sql);

			       while ($data = mysqli_fetch_array($query)){ 
                ?>
                <tr>
                    <td style="width:150px">Tanggal Pesan</td>
                    <td style="width:20px">: </td>
                    <td style="width:200px"><?=$data['tanggal']?></td>
                </tr>
                <tr>
                    <td>Atas Nama</td>
                    <td>: </td>
                    <td><?=$data['atas_nama']?></td>
                    <td><a href="hapus.php?id=<?= $data['id_pesanan']; ?>"><button class="btn btn-outline-danger" style="margin-left:160px ; width: 95px">DELETE</button></a></td>
                    <td><a href="lihat.php?id=<?= $data['id_pesanan']; ?>"><button class="btn btn-dark" style="width: 95px">LIHAT</button></a></td>
                </tr>
                <tr>
                    <td>Lapangan</td>
                    <td>:</td>
                    <td><?=$data['lapangan']?><br></td>
                </tr>
                <tr>
                    <td><br></td>
                </tr>
                <?php } ?>
            </table>
        </div>
        </center>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
</body>
</html>