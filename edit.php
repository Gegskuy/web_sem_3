<?php

session_start();
include 'koneksi.php';

if (empty($_SESSION['username'])) {
    header("login.php?message=belum_login");
}
$id_pesanan=$_GET['id'];
$sql="select * from pesanan where id_pesanan='$id_pesanan'";
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
    <center>
        <br><br><br><br><br>
        <h1>EDIT PESANAN</h1>
        <br>
        <div class="border border-dark rounded-4 shadow-lg p-3 mb-5 bg-body rounded" style="width: 700px">
            <br><br>
            <form method="POST" action="edit_proses.php?id=<?=$id_pesanan?>">
                <div class="select1">
                        <select name="id_lap" class="form-select" aria-label="Default select example" style="width:500px">

                            <?php
                            include('koneksi.php');

                            $sql1    = "SELECT * FROM lapangan";
                            $query1    = mysqli_query($connect, $sql1);

                            while ($data1 = mysqli_fetch_array($query1)) {
                                if($data['id_lapangan']==$data1['id_lap']){
                                    $pilih="selected";
                                }
                                else{
                                    $pilih="";
                                }
                            ?>
                                <option value="<?php echo $data1['id_lap']; ?>" <?=$pilih?>> <?= $data1['lapangan']; ?> </option>

                            <?php } ?>

                        </select>
                    </div>
                    <br>
                    
                <div class="form">

                    <div class="mb-3" style="width:100%">
                    <input type="text" style="width: 500px" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Atas Nama" name="atas_nama" value=<?=$data['atas_nama']?> required>
                    </div>
                    <div>
                    <p align="left" style="margin-left: 100px" class="mb-0">Pilih Tanggal:</p>
                        <Input class="form-control mb-3" type="date" name="tanggal_pesan" value=<?=$data['tanggal_pesan']?> style="width: 500px">
                    </div>
                    <div>
                    <p align="left" style="margin-left: 100px" class="mb-0">Pilih Jam:</p>
                            <select class="form-select mb-3" name="id_waktu" aria-label="Default select example" style="width:500px">

                            <?php
                            include('koneksi.php');

                            $sql2    = "SELECT * FROM waktu";
                            $query2    = mysqli_query($connect, $sql2);

                            while ($data2 = mysqli_fetch_array($query2)) {
                                if($data['id_waktu']==$data2['id_waktu']){
                                    $pilih="selected";
                                }
                                else{
                                    $pilih="";
                                }
                            ?>

                                <option value="<?php echo $data2['id_waktu']; ?>"> <?= $data2['jam_mulai']; ?> - <?= $data2['jam_selesai']; ?> </option>

                            <?php } ?>

                        </select>
                    </div>
                    <input type="text" class="form-control" name="note" value=<?=$data['note']?> rows="3" placeholder="Note" style="width: 500px">
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