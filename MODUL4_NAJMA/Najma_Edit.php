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
    <?php require("Najma_Navbar.php") ?>

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
                        <p style="color: grey;"> Edit Mobil <?php echo $get['nama_mobil']?> </p>
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
                                <div class="container-fluid py-2 mx-auto">
                                    <form method="POST" action="" enctype="multipart/form-data">
                                        <div class="row" style="width: 500px;">
                                            <div class="labeltext pt-2">
                                                <label for="car"> <b>Nama Mobil</b>  </label>
                                            </div>
                                            <div class="textinput pt-2">
                                                <input type="text" style="width: 100%; padding: 7px;" name="car" id="carname" placeholder="<?=$get['nama_mobil']?>" required>
                                            </div>
                            
                                            <div class="labeltext pt-2">
                                                <label for="name"> <b>Nama Pemilik</b>  </label>
                                            </div>
                                            <div class="textinput pt-2">
                                                <input type="text" style="width: 100%; padding: 7px;" name="name" id="ownername" placeholder="<?=$get['pemilik_mobil']?>" required>
                                            </div>
                            
                                            <div class="labeltext pt-2">
                                                <label for="merk"> <b>Merk Mobil</b>  </label>
                                            </div>
                                            <div class="textinput pt-2">
                                                <input type="text" style="width: 100%; padding: 7px;" name="merk" id="merkcar" placeholder="<?=$get['merk_mobil']?>" required>
                                            </div>
                            
                                            <div class="labeltext pt-2">
                                                <label for="date"> <b> Tanggal Beli </b> </label>
                                            </div>
                                            <div class="textinput pt-2">
                                                <input type="date" style="width: 100%; padding: 7px;" name="date"  <?=$get['tanggal_beli']?> required> 
                                            </div>
                            
                                            <div class="labeltext pt-2">
                                                <label for="desc"> <b>Deskripsi</b>  </label>
                                            </div>
                                            <div class="textinput pt-2">
                                                <textarea style="width: 100%; padding: 7px;" name="desc" id="desccar" required><?=$get['deskripsi']?></textarea>
                                            </div>
                            
                                            <div class="labeltext pt-2">
                                                <label for="foto"> <b> Foto Mobil </b> </label>
                                            </div>
                                            <div class="formfile pt-2">
                                                <input class="form-control" type="file" style="width: 100%; padding: 7px; border-color: black; border-radius: 2px;" name="foto" required>
                                            </div>

                                            <div class="radio pt-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="status" id="statuslunas"<?php if($get['status_pembayaran'] == "Lunas") {echo "checked";}?>  required>
                                                    <label class="form-check-label" for="status" style="font-weight: normal;">
                                                        Lunas
                                                    </label>
                                                </div>
                                            
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="status" id="statuspaylater" <?php if($get['status_pembayaran'] == "Belum Lunas") {echo "checked";}?> required>
                                                    <label class="form-check-label" for="status" style="font-weight: normal;">
                                                        Belum Lunas
                                                    </label>
                                                </div>
                                            </div>
                
                                            <!-- Button Edit -->
                                            <div class="d-flex justify-content gap-2 pt-3"></div>
                                                <button class="btn btn-dark bg-primary" type="submit" name="submit" id="submit" style="width:100px; margin-right: 5px;"> Selesai </button>
                                                <a href="./Najma_MyCar.php" class="btn btn-dark bg-secondary" type="button" name="cancel" id="cancel" style="width:100px; margin-left: 5px;"> Kembali </a>
                                            </div>
                                        </div>
                                    </form>
                            </th>
                        </tr>
                    </table>
                <?php
                }
            }

        ?>
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

            if (strlen($deskripsi) > 100) 
                $deskripsi = substr($deskripsi, 0, 100) . '...';
    
            move_uploaded_file($fotomobil, 'Upload/'.$foto);
    
            $update = "UPDATE modul3 SET nama_mobil='$mobil', pemilik_mobil='$nama', merk_mobil='$merk', tanggal_beli='$tanggal',deskripsi='$deskripsi',foto_mobil='$foto', status_pembayaran='$status' WHERE id_mobil='$id_mobil'";    

            $simpan = mysqli_query($connector, $update);
        }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>