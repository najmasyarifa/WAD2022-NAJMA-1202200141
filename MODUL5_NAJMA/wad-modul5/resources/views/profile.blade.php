<?php 
$connector = mysqli_connect("localhost:3308", "root", "","wad_modul4");
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EAD Rent Car</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    
    <!-- Navbar -->
    @include ('navbar')

    <!-- Alert Notification -->
    <div class="alert alert-warning alert-dismissible" role="alert" id="alertgagal">
        Update profile gagal!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>   

    <div class="alert alert-success alert-dismissible" role="alert" id="alertberhasil">
        Update profile berhasil!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    <!-- Form Profile -->
    <div class="container-fluid py-2 mx-auto">

        <!-- Header -->
        <h3 class="pt-3" style="text-align: center;"> PROFILE </h3>
        <br>

        <!-- Form Output Profile -->
        <form method="POST" action="" style="margin-left: 100px; margin-right: 100px;">
            <div class="row">
                <div class="d-flex textinput pt-2">
                    <div class="d-flex mx-auto">
                        <label> <b>Email</b>  </label>
                        <input type="text" style="width: 500px; padding: 7px; margin-left: 208px;" name="email" id="email" value="ifaa.rahma14@gmail.com" readonly>
                    </div>
                </div>

                <div class="d-flex textinput pt-2">
                    <div class="mx-auto">
                        <label> <b>Nama</b>  </label>
                        <input type="text" style="width: 500px; padding: 7px; margin-left: 200px;" name="nama" id="nama" value="Najma Syarifa Rahmah" required>
                    </div>
                </div>

                <div class="d-flex textinput pt-2">
                    <div class="mx-auto">
                        <label> <b>Nomor Handphone</b>  </label>
                        <input type="text" style="width: 500px; padding: 7px;margin-left: 100px" name="nohp" id="nohp" value="088210950944" required>
                    </div>
                </div>

                <div class="d-flex pt-2">
                    <div class="mx-auto">
                        <hr class="bg-color-dark" style="width: 1000px; border-width: 1px; opacity: 5;">
                    </div>
                </div>

                <div class="d-flex textinput pt-2">
                    <div class="mx-auto">
                        <label> <b>Kata Sandi</b>  </label>
                        <input type="password" style="width: 500px; padding: 7px; margin-left: 167px;" name="password" id="password" placeholder="Kata Sandi" required>
                    </div>
                </div>

                <div class="d-flex textinput pt-2">
                    <div class="mx-auto">
                        <label> <b>Konfirmasi Kata Sandi</b>  </label>
                        <input type="password" style="width: 500px; padding: 7px; margin-left: 80px;" name="repassword" id="repassword" placeholder="Konfirmasi Kata Sandi" required>
                    </div>
                </div>

                <div class="d-flex textinput pt-2">
                    <div class="mx-auto">
                        <label> <b>Warna Navbar</b>  </label>
                        <input type="text" style="width: 500px; padding: 7px; margin-left: 139px;" name="warnanav" id="warnanav" placeholder="Blue" disabled>
                    </div>
                </div>

                <div class="d-flex textinput pt-4">
                    <div class="mx-auto">
                        <button class="btn btn-dark bg-primary" type="submit" name="update" id="update" style="width:100px;"> Update </button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <script>
        var berhasil = document.getElementById('alertberhasil');
        berhasil.style.display = 'none'

        var gagal = document.getElementById('alertgagal');
        gagal.style.display = 'none'
    </script>

  </body>
</html>