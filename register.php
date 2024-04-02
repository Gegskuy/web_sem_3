<!DOCTYPE html>
<html lang="en">
<head>
    <title>REGISTER</title>
    <link rel="stylesheet" type="text/css" href="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
    <center>
        <br><br><br><br><br><br><br>
        <h1>Register Page</h1>
        ___________________________________________<br>
        Silahkan Daftar Akun Terlebih Dahulu
        <br><br>

        <?php
            if(isset($_GET['message']))
            {
                if($_GET['message']=="berhasil")
                {
                    echo "Anda harus login terlebih dahulu untuk mengakses admin";
                }
            }
        ?>


        <form method="POST" action="register_proses.php">
            <div class="mb-3" style="width:100%">
            <input type="text" style="width: 500px" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username" name="username" required>
            </div>
            <div class="mb-3" style="width:100%">
            <input type="password" style="width: 500px" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required>
            </div>
            Sudah Punya Akun? <a href="login.php">login di sini</a>
            <br><br>
            <button type="submit" style="width: 500px" class="btn btn-dark">
            Daftar
            </button>
        </form>
    </center>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
</body>
</html>