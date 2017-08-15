
<?php 
	session_start();
	if(!isset($_SESSION["idUser"])&&$_SESSION["idGroup"]!=1){
		header("location:../index.php");
	}
	require "../lib/dbCon.php";
	require "../lib/trangquantri.php";
 ?>
 <?php 
  if(isset($_POST["btnThem"]))
    {
      if(isset($_POST["anhien"]))
      {
        $anhien=1;
      }
      $IDTTL= $_POST['IDTTL'];
      $TenTL=$_POST['TenTTL'];
      $TenTLKD=changeTitle($_POST['TenTTL']);
      $ThuTu=$_POST['thutuTTL'];
      $anhien=$_POST['anhien'];
      $qrTTL="INSERT INTO theloai (idTL,TenTL,TenTL_KhongDau,AnHien,ThuTu) VALUES ('$IDTTL','$TenTL',' $TenTLKD','$anhien','$ThuTu') ";
      $queryTTL=mysqli_query($conn,$qrTTL);
      header('Location:quanlitheloai.php');
    }
    
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
	<table width="922" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="918" id="tieude">TRANG QUẢN TRỊ</td>
  </tr>
  <tr>
    <td ><?php require "menu.php" ?></td>
  </tr>
  <tr>
  <form method="POST" action="themtheloai.php">
    <td><table width="505" border="1" cellspacing="0" cellpadding="0">
      <tr>
        <td width="220" align="center">ID Thể loại</td>
        <td width="279"><input type="text" name="IDTTL"></td>
      </tr>
      <tr>
        <td align="center">Tên thể loại</td>
        <td><input type="text" name="TenTTL"></td>
      </tr>
      <tr>
        <td align="center">Thứ tự</td>
        <td><input type="text" name="thutuTTL"></td>
      </tr>
      <tr>
        <td align="center">Ẩn - Hiện</td>
        <td>
          <p>
            <label>
              <input name="anhien" type="radio" id="anhien_0" value="0">
              Ẩn</label>
            <br>
            <label>
              <input type="radio" name="anhien" value="1" id="anhien_1">
              Hiện</label>
            <br>
          </p>
      
      </tr>
      <tr>
        <td bgcolor="#D6D6D6">&nbsp;</td>
        <td align="center" bgcolor="#D6D6D6"><form name="form1" method="post" action="">
          <input type="submit" name="btnThem" id="btnThem" value="Thêm">
        </form></td>
      </tr>
    </table></td>
    </form>
  </tr>
</table>


</body>
</html>

