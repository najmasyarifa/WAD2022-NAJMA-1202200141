<?php 
$connector = mysqli_connect("localhost:3308", "root", "","showroom_najma_table");

$id_mobil = $_GET["id_mobil"];

$del = "DELETE FROM modul3 WHERE id_mobil=$id_mobil";
$delquery = mysqli_query($connector, $del);

header("location: ./Najma_MyCar.php");
?>