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
	table
	{
		text-align: center;
	}
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
    <td></td>
  </tr>
</table>
<table width="744" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr id="tieude">
    <td width="80">ID Thể loại</td>
    <td width="184">Tên thể loại</td>
    <td width="130">Thứ tự</td>
    <td width="87">Ẩn hiện</td>
    <td width="87"><a href="themtheloai.php">Thêm thể loại</a></td>
  </tr>
  <?php 
    $qrTL="SELECT * FROM theloai ORDER BY idTL";
    $queryTL=mysqli_query($conn,$qrTL);
    while($arrTL=mysqli_fetch_array($queryTL)){

 ?>
  <tr>
    <td><?php echo $arrTL["idTL"] ?></td>
    <td><?php echo $arrTL["TenTL"] ?></td>
    <td><?php echo $arrTL["ThuTu"] ?></td>
    <td><?php if($arrTL["AnHien"]==1) {echo "Hiện";} else {echo "Ẩn";} ?></td>
    <td><a href="xoatheloai.php?idTL= <?php echo $arrTL["idTL"] ?>">Xóa</a>-<a href="suatheloai.php?idTL= <?php echo $arrTL["idTL"] ?>">Sửa</a></td>
  </tr>
  <?php } ?>
</table>


</body>
</html>