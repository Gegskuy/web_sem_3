<!DOCTYPE html>
<html lang="en">
<head>
    <title>LOGIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <center>
        <br><br><br><br><br><br><br>
        <h1>Login</h1>
        <br>
        <?php
            if(isset($_GET['message']))
            {
                if($_GET['message']=="failed")
                {
                    echo "<font color='#ff0000'> Ada yang salah nih!<br><br>";
                }
                elseif($_GET['message']=="logout")
                {
                    echo "Anda telah berhasil logout<br><br>";
                }
                elseif($_GET['message']=="belum_login")
                {
                    echo "Anda harus login terlebih dahulu untuk mengakses admin<br><br>";
                }
            }
        ?>
        
        <form method="POST" action="login_proses.php">
            <div class="mb-3" style="width:100%">
            <input type="text" style="width: 500px" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username" name="username" required>
            </div>
            <div class="mb-3" style="width:100%">
            <input type="password" style="width: 500px" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required>
            </div>
            Belum Punya Akun? <a href="register.php">daftar di sini</a>
            <br><br>
            <button type="submit" style="width: 500px" class="btn btn-dark">
            Login
            </button>
        </form>
    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>