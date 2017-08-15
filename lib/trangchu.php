<?php 
require("dbCon.php");
function tinmoinhat_mottin()
{
	$qrmottin="
		SELECT * FROM tin ORDER BY idTin DESC LIMIT 0,1
	";
	return mysqli_query($conn,$qrmottin);
}


 ?>