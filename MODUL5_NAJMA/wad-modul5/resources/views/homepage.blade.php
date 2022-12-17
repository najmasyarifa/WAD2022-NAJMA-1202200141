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
    @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    
    <!-- Bagian Home -->
    <div class="container-fluid py-2">
        <div class="row" style="margin-left: 125px;">

            <!-- Pemisah Konten -->
            <div class="card border-0" style="width: 500px; height: 500px;">
                <div  class="my-auto">

                    <!-- Kolom kiri -->
                    <h1> Selamat Datang Di Show Room Najma </h1>
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquaa. </p>
                    <a href="/addcar" type="button" class="btn btn-primary mt-3">Add Car</a>
                    
                    <!-- Footer -->
                    <nav class="navbar navbar-expand-xl navbar-light sticky-top" style="fill-opacity: 0;">
                        <div class="collapse navbar-collapse" id = "main-nav">
                            <ul class="navbar-nav mt-5">
                                <li class="nav-item">
                                    <img src="{{ asset('image/logo-ead.png') }}" width="110" height="35" alt="LogoEAD">
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
                <img class="my-auto mx-auto rounded-3" src="{{ asset('image/BMW.jpg') }}" style="width: 350px; height: 350px;">
            </div>

        </div>
    </div>
    
    <!-- Modal Copyright -->
    @include ('copyright')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>