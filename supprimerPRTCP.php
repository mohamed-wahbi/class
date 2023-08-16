<?php
include_once("connexion.php");
$id=$_GET["id"];
$req = mysqli_query($con,"DELETE FROM participant WHERE prtcpID=$id");
header("Location:index.php");
?> 