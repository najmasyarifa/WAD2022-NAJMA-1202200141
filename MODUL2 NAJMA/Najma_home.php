<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        EAD Rent Car
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>

  <body>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark sticky-top">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" style="justify-content: center;" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item mx-2">
                        <a class="nav-link active" href="Najma_home.php"> Home </a>
                        <!-- href home diganti file Najma_home.php -->
                    </li>

                    <li class="nav-item mx-2">
                        <a class="nav-link active" href="Najma_booking.php"> Booking </a>
                            <!-- href home diganti file Najma_booking.php -->
                    </li>

                    <li class="nav-item mx-2">
                        <a class="nav-link active" href="Najma_mybooking.php"> My Booking </a>
                            <!-- href home diganti file Najma_booking.php -->
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid text-center mt-3">
        <h2 style="font-family: Times New Roman;"> WELCOME TO EAD RENT</h2>
        <p style="font-family: Times New Roman; margin-top: 20px;"> Find your best deal, here!</p>
    </div>
    
    <div class="container-fluid py-2">
        <form method="post" action="Najma_booking.php">
            <div class="row mx-auto">
            
    
                <!-- Mobil Avanza -->
                <div class="card mx-auto" style="width: 350px;">
                    <img width = "340" height="180" src="Avanza.png" class="card-img-top" alt="1cm">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item" style="font-size: 20pt; text-align: center;"> <b>Avanza</b> </li>
                        <li class="list-group-item"> 8 Kursi </li>
                        <li class="list-group-item"> 1.500cc </li>
                        <li class="list-group-item"> Manual </li>
                    </ul>
                    <input class="btn btn-secondary" type="submit" name="submit" value="Book Now">
                    <!-- href diganti php ke avanza -->
                </div>


            <!-- <form method="post" action="Najma_booking.html"> -->
                <!-- Mobil Brio -->
                <div class="card mx-auto" style= "width: 350px;">
                    <img height = "160" style="margin-top: 10px; margin-bottom: 10px;" src="Brio.png" class="card-img-top" alt="1cm">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item" style="font-size: 20pt; text-align: center;"> <b>Brio</b> </li>
                        <li class="list-group-item"> 5 Kursi </li>
                        <li class="list-group-item"> 1.200cc </li>
                        <li class="list-group-item"> Matic </li>
                    </ul>
                    <input class="btn btn-secondary" type="submit" name="submit" value="Book Now">
                    <!-- href diganti php ke avanza -->
                </div>
            <!-- </form> -->

            <!-- <form method="post" action="Najma_booking.html"> -->
                <!-- Mobil Grand Livina -->
                <div class="card mx-auto" style="width: 350px;">
                    <img src="Livina.png" class="card-img-top" alt="1cm">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item" style="font-size: 20pt; text-align: center;"> <b> Grand Livina </b> </li>
                        <li class="list-group-item"> 5 Kursi </li>
                        <li class="list-group-item"> 1.200cc </li>
                        <li class="list-group-item"> Matic </li>
                    </ul>
                    <input class="btn btn-secondary" type="submit" name="submit" value="Book Now">
                    <!-- href diganti php ke avanza -->
                </div>
            </form>
        </div>
    </div>

    <footer style="background-color: lightgrey; height: 50px; margin-top: 30px;">
        <div class="container-fluid" data-bs-toggle = "modal" data-bs-target= "#crnajem">
            <p class="text-center text-muted py-2">Created by NAJMA_1202200141</p>
        </div>
    </footer>

    <div class="modal fade"  id="crnajem" tabindex="-1" style="display: none;" role="dialog" labelledby="crnajemlabel" aria-hidden="true"> 
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="crnajemlabel">Copyright</h5>
                </div>
                <div class="modal-body">
                    <p> Nama Lengkap : Najma Syarifa Rahmah</p>
                    <p> NIM : 1202200141</p>
                    <p> Kelas : SI4406</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>