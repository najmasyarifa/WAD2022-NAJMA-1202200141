<?php
$connector = mysqli_connect("localhost:3308", "root", "","showroom_najma_table");
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
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark sticky-top">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" style="justify-content: left;" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item mx-2">
                        <a class="nav-link active" href="Najma_Home.php"> Home </a>
                    </li>

                    <li class="nav-item mx-2">
                        <a class="nav-link active" href="Najma_MyCar.html"> My Car </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Form Tambah Mobil -->
    <div class="container-fluid py-2 mx-auto">
        <form style="margin-left: 100px; margin-right: 300px;" method="POST" action="Najma_AddCar.php" enctype="multipart/form-data">
            
            <!-- Header -->
            <h3> Tambah Mobil </h3>
            <p style="color: grey;"> Tambah mobil baru anda ke list show room</p>
            <br>

            <!-- Form Input -->
            <div class="row">
                <div class="labeltext pt-2">
                    <label for="car"> <b>Nama Mobil</b>  </label>
                </div>
                <div class="textinput pt-2">
                    <input type="text" style="width: 100%; padding: 7px;" name="car" id="carname" placeholder="Nama Mobil Anda" required>
                </div>

                <div class="labeltext pt-2">
                    <label for="name"> <b>Nama Pemilik</b>  </label>
                </div>
                <div class="textinput pt-2">
                    <input type="text" style="width: 100%; padding: 7px;" name="name" id="ownername" placeholder="Nama Anda" required>
                </div>

                <div class="labeltext pt-2">
                    <label for="merk"> <b>Merk Mobil</b>  </label>
                </div>
                <div class="textinput pt-2">
                    <input type="text" style="width: 100%; padding: 7px;" name="merk" id="merkcar" placeholder="Merk Mobil Anda" required>
                </div>

                <div class="labeltext pt-2">
                    <label for="date"> <b> Tanggal Beli </b> </label>
                </div>
                <div class="textinput pt-2">
                    <input type="date" style="width: 100%; padding: 7px;" name="date" id="buydate" required>
                </div>

                <div class="labeltext pt-2">
                    <label for="desc"> <b>Deskripsi</b>  </label>
                </div>
                <div class="textinput pt-2">
                    <textarea style="width: 100%; padding: 7px;" name="desc" id="desccar" placeholder="Masukan Deskripsi Mobil Anda" required></textarea>
                </div>

                <div class="labeltext pt-2">
                    <label for="foto"> <b> Foto Mobil </b> </label>
                </div>
                <div class="formfile pt-2">
                    <input class="form-control" type="file" style="width: 100%; padding: 7px; border-color: black; border-radius: 2px;" name="foto" id="carpict" required>
                </div>

                <div class="labeltext pt-2">
                    <label for="status"> <b>Status Pembayaran</b> </label>
                </div>

                <div class="radio pt-2">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status[]" value="Lunas" id="statuslunas" required>
                        <label class="form-check-label" for="status" style="font-weight: normal;">
                          Lunas
                        </label>
                    </div>
                
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status[]" value="Belum Lunas" id="statuspaylater" required>
                        <label class="form-check-label" for="status" style="font-weight: normal;">
                          Belum Lunas
                        </label>
                    </div>
                </div>

                <div class="d-grid gap-2 pt-3">
                    <button class="btn btn-dark bg-primary" type="submit" name="submit" style="width:100px;"> Selesai </button>
                </div>
            </div>
        </form>
    </div>

    <!-- PHP Database -->
    <?php
        if (isset($_POST['submit'])){
            $mobil = $_POST['car'];
            $nama = $_POST['name'];
            $merk = $_POST['merk'];
            $tanggal = $_POST['date'];
            $deskripsi = $_POST['desc'];
            $foto = $_FILES['foto']['name'];
            $fotomobil = $_FILES['foto']['tmp_name'];
            $status = $_POST['status'];

            move_uploaded_file($fotomobil, 'Upload/'.$foto);

            $select = "SELECT * FROM 'modul3'";

            mysqli_query($connector, $select);

            $insert = "INSERT INTO modul3('id_mobil','nama_mobil','pemilik_mobil','merk_mobil','tanggal_beli','deskripsi','foto_mobil','status_pembayaran') VALUES ('','$mobil','$nama','$merk','$tanggal','$deskripsi','$foto','$status')";

            mysqli_query($connector, $insert);

            if (mysqli_affected_rows($connector) > 0){ ?>
                <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header">
                        <img src="..." class="rounded me-2" alt="...">
                        <strong class="me-auto">Bootstrap</strong>
                        <small>11 mins ago</small>
                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body">
                        Hello, world! This is a toast message.
                    </div>
                </div> <?
                }
            else { ?>
                <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header">
                        <img src="..." class="rounded me-2" alt="...">
                        <strong class="me-auto">Bootstrap</strong>
                        <small>11 mins ago</small>
                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body">
                        Hello, world! This is a toast message.
                    </div>
                </div> <?
                
            }
        }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>