<?php
    include 'koneksi.php';

    $id     = $_GET['id'];

    $sql    = "DELETE FROM pesanan WHERE id_pesanan='$id'";
    $query  = mysqli_query($connect, $sql);

    if($query) 
    {
        header("location: history.php");
    }
    else
    {
        echo "Hapus Data Gagal";
    }

?>