<?php 
require "../lib/dbCon.php";
require "../lib/trangquantri.php";
$idTL=$_GET["idTL"];
$qrxoa="DELETE FROM theloai WHERE idTL=$idTL";
$queryxoa=mysqli_query($conn,$qrxoa);
header('location:quanlitheloai.php');

 ?>
