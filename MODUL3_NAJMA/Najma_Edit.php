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
                            <a class="nav-link active" href="Najma_MyCar.php"> My Car </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- PHP Database -->
        <?php
            $id_mobil = $_GET["id_mobil"];
            $query = "SELECT * FROM modul3 WHERE id_mobil=$id_mobil";

            $select = mysqli_query($connector,$query);
        ?>

        <!-- Edit Mobil -->
        <div class="container-fluid py-2 mx-auto">
            <?php
                if($select) {
                    while($get = mysqli_fetch_assoc($select)){ ?>
                        <div class="card-body pt-3" style="margin-left: 70px;">
                            <!-- Header -->
                            <h5><b> Edit Mobil </b></h5>
                            <p style="color: grey;"> Edit Mobil <?php $get['nama_mobil']?> </p>
                        </div>
            
                        <!-- Pemisah Konten -->
                        <table class="table table-borderless mx-auto">
                            <tr>
            
                                <!-- Gambar Mobil -->
                                <th class="col mx-auto pt-4">
                                    <img src="Upload/<?php echo $get['foto_mobil']?>" class="mx-auto d-flex justify-content-center rounded-3" style="width: 500px;">
                                </th>
            
                                <!-- List Detail -->
                                <th class="col mx-auto">
                                    <div class="row" style="width: 500px;">
                                        <div class="labeltext pt-2">
                                            <label for="car"> <b>Nama Mobil</b>  </label>
                                        </div>
                                        <div class="textinput pt-2">
                                            <input type="text" style="width: 100%; padding: 7px;" name="car" id="carname" value="<?=$get['nama_mobil']?>" required>
                                        </div>
                        
                                        <div class="labeltext pt-2">
                                            <label for="name"> <b>Nama Pemilik</b>  </label>
                                        </div>
                                        <div class="textinput pt-2">
                                            <input type="text" style="width: 100%; padding: 7px;" name="name" id="ownername" value="<?=$get['pemilik_mobil']?>" required>
                                        </div>
                        
                                        <div class="labeltext pt-2">
                                            <label for="merk"> <b>Merk Mobil</b>  </label>
                                        </div>
                                        <div class="textinput pt-2">
                                            <input type="text" style="width: 100%; padding: 7px;" name="merk" id="merkcar" value="<?=$get['merk_mobil']?>" required>
                                        </div>
                        
                                        <div class="labeltext pt-2">
                                            <label for="date"> <b> Tanggal Beli </b> </label>
                                        </div>
                                        <div class="textinput pt-2">
                                            <input type="date" style="width: 100%; padding: 7px;" name="date" value="<?=$get['tanggal_beli']?>" required>
                                        </div>
                        
                                        <div class="labeltext pt-2">
                                            <label for="desc"> <b>Deskripsi</b>  </label>
                                        </div>
                                        <div class="textinput pt-2">
                                            <textarea style="width: 100%; padding: 7px;" name="desc" id="desccar" value="<?=$get['deskripsi']?>" required></textarea>
                                        </div>
                        
                                        <div class="labeltext pt-2">
                                            <label for="foto"> <b> Foto Mobil </b> </label>
                                        </div>
                                        <div class="formfile pt-2">
                                            <input class="form-control" type="file" style="width: 100%; padding: 7px; border-color: black; border-radius: 2px;" name="foto" value="<?=$get['foto_mobil']?>" required>
                                        </div>
                        
                                        <div class="labeltext pt-2">
                                            <label for="status"> Status Pembayaran </label>
                                        </div>
                        
                                        <div class="radio pt-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="status" value="<?=$get['status_pembayaran']?>" id="statuslunas" required>
                                                <label class="form-check-label" for="status" style="font-weight: normal;">
                                                    Lunas
                                                </label>
                                            </div>
                                        
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="status" value="<?=$get['status_pembayaran']?>" id="statuspaylater" required>
                                                <label class="form-check-label" for="status" style="font-weight: normal;">
                                                    Belum Lunas
                                                </label>
                                            </div>
                                        </div>
            
                                        <!-- Button Edit -->
                                        <div class="d-grid gap-2 pt-3">
                                            <a href="Najma_MyCar.php" class="btn btn-dark bg-primary" type="submit" style="width:100px;"> Edit </a>
                                        </div>
                                    </div>
                                </th>
                            </tr>
                        </table>
                    <?php
                    }
                }

            ?>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>