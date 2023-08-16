<?php
session_start();
include_once("connexion.php");
$name = $_POST['name'];
$passADMIN = $_POST['passADMIN'];
$sel = "SELECT * FROM admin WHERE adminNOM='$name' and adminPASS='$passADMIN'";
$req = mysqli_query($con,$sel);
if (mysqli_num_rows($req)==1){
    $_SESSION["passADMIN"]=$_POST['passADMIN'];
    header("location:index.php");
}
else {
    header("location:admin.php");
}


?>