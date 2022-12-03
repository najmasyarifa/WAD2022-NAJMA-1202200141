<?php session_start();
$_SESSION ["Logout"] = "true";
header("location: Najma_Login.php");?>