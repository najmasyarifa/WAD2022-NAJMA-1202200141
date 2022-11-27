<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-primary navbar-dark sticky-top">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" style="justify-content: left;" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item mx-2">
                    <a class="nav-link active" href="Najma_After.php"> Home </a>
                </li>

                <li class="nav-item mx-2">
                    <a class="nav-link active" href="Najma_MyCar.php"> My Car </a>
                </li>
            </ul>
        </div>
        <div class="collapse navbar-collapse" style="justify-content: right;" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item mx-2">
                    <a href="Najma_AddCar.php" type="button" class="btn btn-light">Add Car</a>
                </li>
                <li class="nav-item mx-2">
                    <div class="dropdown">
                        <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php
                                $nama_profile = $_SESSION["nama"];
                                echo $nama_profile
                            ?>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="Najma_After.php">Home</a></li>
                            <li><a class="dropdown-item" href="Najma_Profile.php">Profile</a></li>
                            <li><a class="dropdown-item" href="#">Logout</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>