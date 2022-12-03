<?php session_start()?> 
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
                        <button class="btn btn-light dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php
                                echo $_SESSION["nama"];
                            ?>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="Najma_After.php">Home</a></li>
                            <li><a class="dropdown-item" href="Najma_Profile.php">Profile</a></li>
                            <li><a class="dropdown-item" style="margin-left: 2.5px;" data-bs-toggle = "modal" data-bs-target= "#logout">Log Out</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Modal -->
<div class="modal fade"  id="logout" tabindex="-1" style="display: none;" role="dialog" labelledby="reminderlabel" aria-hidden="true"> 
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="reminderlabel">⚠️ Log Out</h5>
            </div>
            <div class="modal-body">
                <p> Are You Sure Want to Log Out? </p>
            </div>
            <div class="modal-footer">
                <div class="d-flex mx-auto justify-content">
                    <button type="button" class="btn btn-secondary"  style="margin-right: 2.5px;" data-bs-dismiss="modal">Cancel</button>
                    <a type="button" href="Najma_Logout.php" class="btn btn-danger form-control" style="margin-left: 2.5px;">Log Out</a>
                </div>
            </div>
        </div>
    </div>
</div>