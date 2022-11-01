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

    <?php
        if (isset ($_POST["book"]))
            $tanggal = $_GET['date'];
            $jam = $_GET['time'];
            $durasi = $_GET['days'];
            $mobil = $_GET['cartype'];
            $telpon = $_GET['phone'];
            $cin = date("d-m-Y H:i", strtotime("$jam"));
            $cout = date("d-m-Y H:i", strtotime($durasi . " " . "days" , strtotime($cin)));

            $price = 0;
            if ($mobil == "Avanza") {
                $price = 300000;
            }
            elseif ($mobil == "Brio") {
                $price = 200000;
            }
            elseif ($mobil == "Livina") {
                $price = 250000;
            }

            $addons = 0; 
            if (isset($_GET["services"])){
                foreach ($_GET["services"] as $rentservice ){
                    if ($rentservice == "Health Protocol"){
                        $addons += 25000;
                    }
                    if ($rentservice == "Driver"){
                        $addons += 100000;
                    }
                    if ($rentservice == "Fuel Filled"){
                        $addons += 250000;
                    }
                }
            }
            else{
                $addons += 0;}

            $total = ($price * $durasi) + $addons;

            function rupiah($total) {
                $totalprice = "Rp" . number_format($total,'2',',','.');;
                return $totalprice;
            }
            
    ?>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark sticky-top">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" style="justify-content: center;" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item mx-2">
                        <a class="nav-link active" href="Najma_home.php"> Home </a>
                    </li>

                    <li class="nav-item mx-2">
                        <a class="nav-link active" href="Najma_booking.php"> Booking </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid text-center mt-3">
        <h2 style="font-family: Times New Roman;"> Thank You NAJMA_1202200141 for Reserving! </h2>
        <p style="font-family: Times New Roman; margin-top: 20px;"> Please double check your reservation details </p>
    </div>

    <div class="container-fluid">
        <div class="table-responsive">
            <table class="table mx-auto text-center">
                <thead>
                    <tr scope="col" style="border-bottom-color: grey; border-bottom-width: 5px;">
                        <th> Book No. </th>
                        <th> Name </th>
                        <th> Check In </th>
                        <th> Checkout </th>
                        <th> Car Type </th>
                        <th> Phone Number </th>
                        <th> Service(s) </th>
                        <th> Total Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> <?= rand(1000000000, 9999999999);?> </th>
                        <td> Najma_1202200141 </td>
                        <td> <?= $cin ?> </td>
                        <td> <?= $cout ?> </td>
                        <td> <?= $mobil?> </td>
                        <td> <?= $telpon?></td>
                        <td> <ul>
                                <?php
                                    if(isset($_GET['services'])){
                                        foreach ($_GET["services"] as $rentservice ){
                                            echo "<li>$rentservice</li>";
                                        }
                                    }
                                    else{
                                        echo "No Service";
                                    }
                                ?>
                            </ul>  </td>
                        <td> <?php echo rupiah($total);?> </td>
                    </tr>
                </tbody>
            </table>
          </div>
    </div>

    <footer style="background-color: lightgrey; height: 50px; margin-top: 255px;">
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