<?php
    session_start();
    $connector = mysqli_connect("localhost:3308", "root", "","wad_modul4");
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EAD Rent Car</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>

    <!-- Alert Notification -->
    <div class="alert alert-danger alert-dismissible" role="alert" id="alertgagal">
        Login gagal! Email atau kata sandi tidak terdaftar. Silahkan cek kembali.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>   

    <!-- Tampilan Login -->
    <div class="container-fluid">
        <div class="row">

            <!-- Kolom Kanan -->
            <div class="col">
                <div class="bg bg-left">
                    <img src="BMW.jpg" style="height: 577px; width: 100%;">
                </div>
            </div>

            <!-- Kolom kiri -->
            <div class="col" style="width: 600px;">
                <div  class="my-auto">
                    <form class="mx-auto" style="width: 90%;" method="POST" action="">
            
                        <!-- Header -->
                        <h3 style="padding-top: 120px;"> Register </h3>
                        <p style="color: grey;"></p>
            
                        <!-- Form Input -->
                        <div class="row">
                            <div class="labeltext pt-1">
                                <label for="mail"> <b>Email</b>  </label>
                            </div>
                            <div class="textinput pt-1">
                                <input type="text" style="width: 100%; padding: 7px; border-radius: 10px; border-width: 1px;" name="email" id="email" required>
                            </div>
            
                            <div class="labeltext pt-1">
                                <label for="password"> <b> Kata Sandi </b> </label>
                            </div>
                            <div class="textinput pt-1">
                                <input type="password" style="width: 100%; padding: 7px; border-radius: 10px; border-width: 1px;" name="password" id="password" required>
                            </div>

                            <div class="textinput pt-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" value="remember" id="remember">
                                    <label class="form-check-label" for="remember" style="font-weight: normal;">
                                      Remember me
                                    </label>
                                  </div>
                            </div>
            
                            <div class="d-grid gap-2 pt-4">
                                <button class="btn btn-dark bg-primary" type="submit" name="login" id="login" style="width:100px;"> Login </button>
                            </div>

                            <div class="d-flex pt-4">
                                <p>Anda belum punya akun?</p>
                                <a style="margin-left: 5px;" href="Najma_Register.php">Register</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <script>
        var gagal = document.getElementById('alertgagal');
        gagal.style.display = 'none'
    </script>

  </body>
</html>

<!-- PHP Database -->
<?php

    if (isset($_SESSION["gagal"])){
        echo "
        <script>
            gagal.style.display = 'block'
        </script>
        ";
        session_destroy();
    }


    if (isset($_POST['login'])){
        $email = $_POST['email'];
        $pass = $_POST['password'];
    
        $select = "SELECT * FROM users WHERE email='$email' AND password='$pass'";
        $query = mysqli_query($connector, $select);

        if (mysqli_num_rows($query) == 0) {
            $_SESSION["gagal"] = true;
            echo"
            <script>
                document.location.href = './Najma_Login.php';
            </script>
        ";

        } elseif (mysqli_num_rows($query) == 1) {
            $check = mysqli_fetch_assoc($query);

            $_SESSION["nama"] = $check['nama'];
            $_SESSION["email"] = $email;
            $_SESSION["no_hp"] = $check['no_hp'];
            $_SESSION["password"] = $pass;
            
            header("location:Najma_After.php");
        }
    }
?>