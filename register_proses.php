<?php
    session_start();

    include 'koneksi.php';

    $username   = $_POST['username'];
    $password   = md5($_POST['password']);

    $sql = "INSERT INTO user VALUES('', '$username', '$password')";
    $query = mysqli_query($connect, $sql) or die(mysqli_error($connect));

    if($query)
    {
        header("location: login.php");
    }
    else
    {
        header("location: register.php?message=failed");
    }
?>