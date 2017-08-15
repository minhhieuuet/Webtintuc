<?php 
	session_start();
	if(!isset($_SESSION["idUser"])&&$_SESSION["idGroup"]!=1){
		header("location:../index.php");
	}
	require "../lib/dbCon.php";
	require "../lib/trangquantri.php";
 ?>
 <?php 

      $idTL=$_GET['idTL'];
      $qrSua="SELECT * FROM theloai WHERE idTL=$idTL";
      $querySua=mysqli_query($conn,$qrSua);
      $arrSua=mysqli_fetch_array($querySua);

      if($arrSua["AnHien"]==1)
      {
        $check=" checked=&ldquo;checked&ldquo; ";
      }
      else
      {
        $check="";
      }
      
?>
 <?php 
      echo $idTL;
      if(isset($_POST["btnSua"]))
      {
      $TenTL=$_POST['TenTL'];
      $TenTLkhongdau=changeTitle($_POST['TenTL']);
      $ThuTu=$_POST['ThuTu'];
      $anhien=$_POST['anhien'];
      echo $idTL;
     

      echo $qrTL="UPDATE 'theloai' SET TenTL='$TenTL',TenTL_KhongDau='$TenTLkhongdau',ThuTu='$ThuTu',AnHien='$anhien' WHERE 'theloai'.idTL=12 ";
      mysqli_query($conn,$qrTL);
      
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
	<table width="1002" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="998" id="tieude">TRANG QUẢN TRỊ</td>
  </tr>
  <tr>
    <td ><?php require "menu.php" ?>
    <form method="POST" action="suatheloai.php">
<table width="509" border="1" cellspacing="0" cellpadding="0">

  <tr>
    <td width="129">Tên thể loại</td>
    <td width="374"><input type="text" name="TenTL" value="<?php echo $arrSua['TenTL'] ?> " ></td>
  </tr>
  <tr>
    <td>Thứ tự</td>
    <td><input type="text" name="ThuTu" value="<?php echo $arrSua["ThuTu"] ?>"> </td>
  </tr>
  <tr>
    <td>Ẩn hiện</td>
    <td>
      <p>
        <label>
          <input type="radio" name="anhien" value="0" id="anhien_0" checked="checked">
          Ẩn</label>
        <br>
        <label>
          <input type="radio" name="anhien" value="1" id="anhien_1" <?php echo $check;   ?> >
          Hiện</label>
        <br>
      </p>
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="center">
     <submit name="btnSua" id="btnSua" >Sửa</submit>
    </td>
  </tr>

</table>
  </form>

</body>
</html>