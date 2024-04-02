<?php

session_start();

if (empty($_SESSION['username'])) {
    header("login.php?message=belum_login");
}

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

    

    <center>
        <br><br><br>
    <h1>LAPANGAN</h1>
    <br>
                    <div class="border border-dark rounded-4 shadow-lg p-3 mb-5 bg-body rounded" style="width: 700px">
                    <br><br>
                    <form method="POST" action="pesanan_proses.php">
                        <div class="select1">
                                    <select name="id_lap" class="form-select" aria-label="Default select example" style="width:500px">

                                        <?php
                                        include('koneksi.php');

                                        $sql1    = "SELECT * FROM lapangan";
                                        $query    = mysqli_query($connect, $sql1);

                                        while ($data = mysqli_fetch_array($query)) {
                                        ?>
                                            <option value="<?php echo $data['id_lap']; ?>"> <?= $data['lapangan']; ?> </option>

                                        <?php } ?>

                                    </select>
                                </div>
                                <br>
                                
                            <div class="form">

                                <div class="mb-3" style="width:100%">
                                <input type="text" style="width: 500px" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Atas Nama" name="atas_nama" required>
                                </div>
                                <div>
                                <p align="left" style="margin-left: 100px" class="mb-0">Pilih Tanggal:</p>
                                    <Input class="form-control mb-3" type="date" name="tanggal_pesan" style="width: 500px">
                                </div>
                                <div>
                                <p align="left" style="margin-left: 100px" class="mb-0">Pilih Jam:</p>
                                        <select class="form-select mb-3" name="id_waktu" aria-label="Default select example" style="width:500px">

                                        <?php
                                        include('koneksi.php');

                                        $sql2    = "SELECT * FROM waktu";
                                        $query2    = mysqli_query($connect, $sql2);

                                        while ($data2 = mysqli_fetch_array($query2)) {

                                        ?>

                                            <option value="<?php echo $data2['id_waktu']; ?>"> <?= $data2['jam_mulai']; ?> - <?= $data2['jam_selesai']; ?> </option>

                                        <?php } ?>

                                    </select>
                                </div>
                                <textarea class="form-control" name="note" rows="3" placeholder="Note" style="width: 500px"></textarea>
                                <input type="date" name="tanggal" value="<?=date("Y-m-d")?>" hidden>
                                <br>
                                <button type="submit" style="width: 500px" class="btn btn-dark">
                                Submit
                                </button>
                                <br><br><br>
                            </div>
                        </form>
                    </div>
    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
</body>
</html>