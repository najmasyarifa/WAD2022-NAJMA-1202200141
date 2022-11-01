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

        $mine = "Najma_1202200141";

        if (isset ($_POST["carname"]))
            {
            $car = $_POST["carname"];
            if ($car == "Avanza") {
                $img = "Avanza.png";
            }
            elseif ($car == "Brio") {
                $img = "Brio.png";
            }
            elseif ($car == "Grand Livina") {
                $img = "Livina.png";
            }
        }
        else {
            $img = "Avanza.png";
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
        <h2 style="font-family: Times New Roman;"> Rent Your Car Now!</h2>
        
    </div>

    <div class="container-fluid py-2 mx-auto">
        <table class="table table-borderless mx-auto">
            <tr>
                <th class="col mx-auto">
                    <?
                        if (isset ($_POST["carname"]))
                            {
                            $car = $_POST["carname"];
                            if ($car == "Avanza") {
                                $img = "Avanza.png";
                            }
                            elseif ($car == "Brio") {
                                $img = "Brio.png";
                            }
                            elseif ($car == "Grand Livina") {
                                $img = "Livina.png";
                            }
                        }
                        else {
                            $car == "Avanza";
                            $img = "Avanza.png";
                        }
                    ?>
                    <img src=<?= $img ?> class="mx-auto d-flex justify-content-center" width="560px">
                </th>
                <th class="col mx-auto">
                    <form method="GET" action="Najma_mybooking.php">
                        <div class="row">
                            <div class="labeltext pt-2">
                                <label for="name"> Your Name </label>
                            </div>
                            <div class="textinput pt-2">
                                <input type="text" style="width: 100%; padding: 7px;" name="name" id="custname" value="<?=$mine?>" readonly>
                            </div>

                            <div class="labeltext pt-2">
                                <label for="date"> Book Date </label>
                            </div>
                            <div class="textinput pt-2">
                                <input type="date" style="width: 100%; padding: 7px;" name="date" id="bookdate" required>
                            </div>

                            <div class="labeltext pt-2">
                                <label for="time"> Start Time </label>
                            </div>
                            <div class="textinput pt-2">
                                <input type="time" style="width: 100%; padding: 7px;" name="time" id="starttime" required>
                            </div>

                            <div class="labeltext pt-2">
                                <label for="days"> Duration (Days) </label>
                            </div>
                            <div class="textinput pt-2">
                                <input type="number" min="1" max="31" style="width: 100%; padding: 7px;" name="days" id="durationdays" placeholder="1 - 31 (Days)" required>
                            </div>

                            <div class="labeltext pt-2">
                                <label for="cartype"> Car Type </label>
                            </div>

                            <div class="textinput pt-2">
                                <select class="form-select" aria-label="Default select example" name="cartype">
                                    <option value = Avanza> Avanza </option>
                                    <option value = Brio> Brio </option>
                                    <option value = "Grand Livina"> Grand Livina </option>
                                </select>
                            </div>

                            <div class="labeltext pt-2">
                                <label for="phone"> Phone Number</label>
                            </div>
                            <div class="textinput pt-2">
                                <input type="tel" min="11" max="12" style="width: 100%; padding: 7px;" name="phone" id="phonenumber" placeholder="08XXXXXXXXXX">
                            </div>

                            <div class="labeltext pt-2">
                                <label for="serv"> Add Services </label>
                            </div>

                            <div class="textinput pt-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="services[]" value="Health Protocol" id="Health Protocol">
                                    <label class="form-check-label" for="Health Protocol" style="font-weight: normal;">
                                      Health Protocol / Rp25.000
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="services[]" value="Driver" id="Driver">
                                    <label class="form-check-label" for="Driver" style="font-weight: normal;">
                                      Driver / Rp100.000
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="services[]" value="Fuel Filled" id="Fuel Filled">
                                    <label class="form-check-label" for="Fuel Filled" style="font-weight: normal;">
                                      Fuel Filled / Rp250.000
                                    </label>
                                  </div>
                            </div>

                            <div class="d-grid gap-2 pt-3">
                                <button class="btn btn-dark" type="submit" style="width:100%; background-color: rgb(37, 131, 198);"> Book </button>
                            </div>
                        </div>
                    </form>
                </th>
            </tr>
        </table>
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