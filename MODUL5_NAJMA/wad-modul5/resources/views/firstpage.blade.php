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
                    <a class="nav-link active me-2" href="/"> Home </a>
                </div>
            </div>
            <div class="collapse navbar-collapse" style="justify-content: right;" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <a class="nav-link active me-2" href="/login"> Login </a>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Isi Konten Home -->
    @include ('home')
    
    <!-- Modal Copyright -->
    @include ('copyright')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>