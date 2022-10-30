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
                        <a class="nav-link active" href="Najma_home.html"> Home </a>
                        <!-- href home diganti file Najma_home.php -->
                    </li>

                    <li class="nav-item mx-2">
                        <a class="nav-link active" href="Najma_bookingcar.html"> Booking </a>
                            <!-- href home diganti file Najma_booking.php -->
                    </li>

                    <li class="nav-item mx-2">
                        <a class="nav-link active" href="Najma_mybooking.html"> My Booking </a>
                            <!-- href home diganti file Najma_booking.php -->
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid text-center mt-3">
        <h2 style="font-family: Times New Roman;"> Rent Your Car Now!</h2>
        <!-- <p style="font-family: Times New Roman; margin-top: 20px;"> Find your best deal, here!</p> -->
    </div>

    <div class="container-fluid py-2 mx-auto">
        <table class="table mx-auto">
            <tr>
                <th class="col mx-auto" style="border-color: black; border-width: 5px;">
                    <img class="mx-auto d-block" width= "590px" src="Avanza.png">
                </th>
                <th class="col mx-auto" style="border-color: green; border-width: 5px;">
                    <form id="booking" action="">
                        <div class="row">
                            <div class="labeltext pt-2">
                                <label for="name"> Your Name </label>
                            </div>
                            <div class="textinput pt-2">
                                <input type="text" style="width: 100%; padding: 7px;" id="name" name="custname" placeholder="Your Name...">
                            </div>

                            <div class="labeltext pt-2">
                                <label for="name"> Book Date </label>
                            </div>
                            <div class="textinput pt-2">
                                <input type="date" style="width: 100%; padding: 7px;" id="date" name="bookdate">
                            </div>

                            <div class="labeltext pt-2">
                                <label for="name"> Start Time </label>
                            </div>
                            <div class="textinput pt-2">
                                <input type="time" style="width: 100%; padding: 7px;" id="time" name="starttime">
                            </div>

                            <div class="labeltext pt-2">
                                <label for="name"> Duration (Days) </label>
                            </div>
                            <div class="textinput pt-2">
                                <input type="number" min="1" max="31" style="width: 100%; padding: 7px;" id="days" name="durationdays" placeholder="1 - 31 (Days)">
                            </div>

                            <div class="labeltext pt-2">
                                <label for="name"> Car Type </label>
                            </div>

                            <div class="textinput pt-2">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Choose Car Type</option>
                                    <option value="1">Avanza</option>
                                    <option value="2">Brio</option>
                                    <option value="3">Grand Livina</option>
                                </select>
                            </div>

                            <div class="labeltext pt-2">
                                <label for="name"> Phone Number</label>
                            </div>
                            <div class="textinput pt-2">
                                <input type="tel" min="11" max="12" style="width: 100%; padding: 7px;" id="days" name="durationdays" placeholder="08XXXXXXXXXX">
                            </div>

                            <div class="labeltext pt-2">
                                <label for="name"> Add Services </label>
                            </div>

                            <div class="textinput pt-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault" style="font-weight: normal;">
                                      Health Protocol / Rp25.000
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault" style="font-weight: normal;">
                                      Driver / Rp100.000
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault" style="font-weight: normal;">
                                      Fuel Filled / Rp250.000
                                    </label>
                                  </div>
                            </div>

                            <div class="d-grid gap-2 pt-3">
                                <button class="btn btn-dark" type="button" style="width:100%; background-color: rgb(37, 131, 198);"> Book </button>
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