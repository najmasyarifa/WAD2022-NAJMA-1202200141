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
                <div class="navbar-nav">
                    <a class="nav-link active me-2" href="Najma_FirstPage.php"> Home </a>
                </div>
            </div>
            <div class="collapse navbar-collapse" style="justify-content: right;" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <a class="nav-link active me-2" href="Najma_Login.php"> Login </a>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Bagian Home -->
    <div class="container-fluid py-2">
        <div class="row" style="margin-left: 125px;">

            <!-- Pemisah Konten -->
            <div class="card border-0" style="width: 500px; height: 500px;">
                <div  class="my-auto">

                    <!-- Kolom kiri -->
                    <h1> Selamat Datang Di Show Room Najma </h1>
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquaa. </p>
                    
                    <!-- Footer -->
                    <nav class="navbar navbar-expand-xl navbar-light sticky-top" style="fill-opacity: 0;">
                        <div class="collapse navbar-collapse" id = "main-nav">
                            <ul class="navbar-nav mt-5">
                                <li class="nav-item">
                                    <img src="logo-ead.PNG" width="110" height="35" alt="LogoEAD">
                                </li>
                                
                                <li class="nav-item mx-5">
                                    <p class="text-center text-muted py-2" data-bs-toggle = "modal" data-bs-target= "#crnajem" >NAJMA_1202200141</p>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            
            <!-- Kolom Kanan -->
            <div class="card border-0" style="width: 500px; height: 500px;">
                <img class="my-auto mx-auto rounded-3" src="BMW.jpg" style="width: 350px; height: 350px;">
            </div>
        </div>
    </div>
    
    <!-- Modal Copyright -->
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