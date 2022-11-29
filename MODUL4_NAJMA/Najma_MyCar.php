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
    <?php require("Najma_Navbar.php")?>

    <!-- Header -->
    <div class="container-fluid py-2 mx-auto">
        <h4 class="pt-2" style="margin-left: 10px;"> My Show Room </h4>
        <p style="color: grey;margin-left: 10px;"> List Show Room Najma_1202200141</p>
        <br>

        <!-- PHP Database -->
        <?php

            $mobil = "SELECT * FROM modul3";
            $query = mysqli_query($connector, $mobil); ?>           

            <div class="row mx-auto">
                <?php while ($get = mysqli_fetch_assoc($query)) {  ?>
                    <!-- Tampilan Mobil -->                
                    <div class="card mx-3 mt-3" style="width: 300px;">
                        <img class="img-thumbnail rounded-3 mt-3" src="Upload/<?php echo $get['foto_mobil']?>" alt="" style= "width: 300 px; max-height: 150px; background-position: center center; background-repeat: no-repeat;">
                        <div class="card-body">
                            <h5><b> <?php echo $get['nama_mobil']?> </b></h5>
                            <p> <?php echo $get['deskripsi']?> </p>
                        </div>

                        <div class="d-flex justify-content pt-2 pb-2">
                            <a type="button" href="Najma_Detail.php?id_mobil=<?php echo $get['id_mobil']?>" class="btn btn-primary form-control" style="margin-right: 2.5px;">Detail</a>
                            <button type="submit" class="btn btn-danger form-control" style="margin-left: 2.5px;" data-bs-toggle = "modal" data-bs-target= "#reminder">Delete</button>
                        </div>
                    
                    </div>
                <?php
                } 
                ?>
            </div>
    </div>

    <!-- Modal -->
    <div class="modal fade"  id="reminder" tabindex="-1" style="display: none;" role="dialog" labelledby="reminderlabel" aria-hidden="true"> 
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="reminderlabel">⚠️ Delete</h5>
                </div>
                <div class="modal-body">
                    <p> Are You Sure Want to Delete? </p>
                </div>
                <div class="modal-footer">
                    <div class="d-flex mx-auto justify-content">
                        
                        <?php
                            $mobil = "SELECT id_mobil FROM modul3";
                            $query = mysqli_query($connector, $mobil); 
                            $get = mysqli_fetch_assoc($query); 
                        ?>

                        <button type="button" class="btn btn-secondary"  style="margin-right: 2.5px;" data-bs-dismiss="modal">Cancel</button>
                        <a type="button" href="Delete.php?id_mobil=<?php echo $get['id_mobil']?>" class="btn btn-danger form-control" style="margin-left: 2.5px;">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Car Total -->
    <footer style="background-color: white; height: 50px; margin-top: 30px;">
        <div class="container-fluid">
            <p> Jumlah Mobil : <?php echo mysqli_num_rows($query)?> </p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>