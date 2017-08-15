<?php 
		if($_SESSION["idGroup"]==1)
		{
 ?>
 		<a href="admin" style="color:red;">Trang quản trị</a>
<?php } ?>
<h3>Chúc mừng <b style="color:red; font-size: 17px;"><?php echo $_SESSION["HoTen"] ?></b> đã đăng nhập thành công<h3>



<form  method="POST" action="index.php" >
<input type="submit" name="exit" value="Thoát">
</form>