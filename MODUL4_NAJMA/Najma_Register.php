<!-- <?php
// session_start();
?> -->

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
        Email anda sudah terdaftar!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    <div class="alert alert-warning alert-dismissible" role="alert" id="alertwarning">
        Kata sandi yang anda masukkan tidak sama! Silahkan periksa kembali kata sandi anda.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    <!-- Tampilan Home -->
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
                        <h3 style="padding-top: 30px;"> Register </h3>
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
                                <label for="name"> <b>Nama</b>  </label>
                            </div>
                            <div class="textinput pt-1">
                                <input type="text" style="width: 100%; padding: 7px; border-radius: 10px; border-width: 1px;" name="name" id="name" required>
                            </div>
            
                            <div class="labeltext pt-1">
                                <label for="nohp"> <b>Nomor Handphone</b>  </label>
                            </div>
                            <div class="textinput pt-1">
                                <input type="tel" max="12" style="width: 100%; padding: 7px; border-radius: 10px; border-width: 1px;" name="nohp" id="nohp" required>
                            </div>
            
                            <div class="labeltext pt-1">
                                <label for="password"> <b> Kata Sandi </b> </label>
                            </div>
                            <div class="textinput pt-1">
                                <input type="password" style="width: 100%; padding: 7px; border-radius: 10px; border-width: 1px;" name="password" id="password" required>
                            </div>
            
                            <div class="labeltext pt-1">
                                <label for="repassword"> <b>Konfirmasi Sandi</b>  </label>
                            </div>
                            <div class="textinput pt-1">
                                <input type="password" style="width: 100%; padding: 7px; border-radius: 10px; border-width: 1px;" name="repassword" id="repassword" onkeyup="check();" required>
                            </div>
            
                            <div class="d-grid gap-2 pt-4">
                                <button class="btn btn-dark bg-primary" type="submit" name="daftar" id="daftar" style="width:100px;"> Daftar </button>
                            </div>

                            <div class="d-flex pt-4">
                                <p>Anda sudah punya akun?</p>
                                <a style="margin-left: 5px;" href="Najma_Login.php">Login</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script>
        var gagal = document.getElementById('alertgagal');
        gagal.style.display = 'none'

        var warning = document.getElementById('alertwarning');
        warning.style.display = 'none'
    </script>
  </body>
</html>


<!-- PHP Database -->
<?php
$connector = mysqli_connect("localhost:3308", "root", "","wad_modul4");

// SUBMIT REGISTER
if (isset($_POST['daftar'])){
    if (($_POST['password']) == ($_POST['repassword'])) {
        $email = $_POST['email'];
        $nama = $_POST['name'];
        $nohp = $_POST['nohp'];
        $pass = $_POST['password'];
        $repass = $_POST['repassword'];
        $select = "SELECT email FROM users WHERE email = '$email'";
        $query = mysqli_query($connector, $select);
        $get = mysqli_fetch_assoc($query);
        echo $get['email']; 
        $insert = "INSERT INTO users VALUES ('','$nama','$email','$pass','$nohp')";

        if ($email != $get['email']) {
        
            $simpan = mysqli_query($connector, $insert);

            $_SESSION["akun"] = 'sukses';
            echo "
            <script>
                document.location.href = './Najma_Login.php';
            </script>";
        } else {
            echo"
            <script>
                    gagal.style.display = 'block'
            </script>
            ";
        }
    } else {
        echo"
        <script>
                warning.style.display = 'block'
        </script>
        ";
    }
}
?>
