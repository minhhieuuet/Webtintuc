<?php 
	session_start();
	if(!isset($_SESSION["idUser"])&&$_SESSION["idGroup"]!=1){
		header("location:../index.php");
	}
	require "../lib/dbCon.php";
	require "../lib/trangquantri.php";
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Trang quan tri</title>
	<link rel="stylesheet" type="text/css" href="layout.css">
</head>
<style type="text/css">
	#tieude
	{
	font-size: 20px;
	background-color: yellow;
	text-align: center;
	}
	
}
</style>

<body>
	<button ><a href="../index.php">Quay về</a></button>
	<table width="1000" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td id="tieude">TRANG QUẢN TRỊ</td>
  </tr>
  <tr>
    <td ><?php require "menu.php" ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>


</body>
</html>