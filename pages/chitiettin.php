<?php 
 $conn=mysqli_connect("localhost","root","","webtintuc");
  mysqli_query($conn,"SET NAMES 'utf8'");
 ?>
 <?php 
 $idTin=$_GET["idTin"];
 $qrctt="SELECT * FROM tin WHERE idTin='$idTin'";
 $queryctt=mysqli_query($conn,$qrctt);
 $arrtin=mysqli_fetch_array($queryctt);
 $idTinchinh=$idTin;
 $idLT=$arrtin["idLT"];
  ?>
  <?php 
   $idTL=$arrtin["idTL"];
    $qrTL="SELECT * FROM theloai WHERE idTL=$idTL";
    $queryTL=mysqli_query($conn,$qrTL);
    $arrTL=mysqli_fetch_array($queryTL);
?>
<?php 
   
    $qrLT="SELECT * FROM loaitin WHERE idLT=$idLT";
    $queryLT=mysqli_query($conn,$qrLT);
    $arrLT=mysqli_fetch_array($queryLT);
?>
<?php echo "Trang chủ".">>".$arrTL["TenTL"].">>".$arrLT["Ten"] ?>
<h1 class="title"><?php echo $arrtin["TieuDe"] ?></h1>
<div class="des">
<?php echo $arrtin["TomTat"] ?>
</div>
<div class="chitiet">
<!--noi dung-->
  <table align="center" border="0" cellpadding="3" cellspacing="0">
  <tbody>
    <tr>
      <td><img  src="upload/tintuc/<?php echo $arrtin["urlHinh"] ?>" data-width="500" data-pwidth="480"></td>
    </tr>
    
  </tbody>
</table>
<?php echo $arrtin["Content"] ?>


<!--//noi dung-->
</div>
<div class="clear"></div>
<a class="btn_quantam" id="vne-like-anchor-1000000-3023795" href="#" total-like="21"></a>
<div class="number_count"><span id="like-total-1000000-3023795">21</span></div>
<!--face-->
<div class="left"><div class="fb-like fb_iframe_widget" data-send="false" data-layout="button_count" data-width="450" data-show-faces="true" data-href="http://vnexpress.net/tin-tuc/the-gioi/ukraine-gianh-kiem-soat-nhieu-khu-vuc-gan-hien-truong-mh17-3023795.html" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=&amp;href=http%3A%2F%2Fvnexpress.net%2Ftin-tuc%2Fthe-gioi%2Fukraine-gianh-kiem-soat-nhieu-khu-vuc-gan-hien-truong-mh17-3023795.html&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;send=false&amp;show_faces=true&amp;width=450"></div></div>
<!--twister-->
<div class="left"></div>
<!--google-->
<div class="left"><div id="___plusone_0" style="text-indent: 0px; margin: 0px; padding: 0px; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: baseline; display: inline-block; width: 90px; height: 20px; background: transparent;"></div></div>

<div class="clear"></div>
<div id="tincungloai">
<div class="clear"></div>
	<ul>
    <?php
      $qrcount="SELECT COUNT(*) FROM tin WHERE idLT='$idLT'";
    
      settype($querycount,"int");
      $from=RAND(0,$querycount-3);

      $qrcungloai="SELECT * FROM tin WHERE idLT='$idLT' AND idTin!='$idTinchinh' ORDER BY idTin DESC LIMIT 0,3 ";
      $querycungloai=mysqli_query($conn,$qrcungloai);
      while($arrcungloai=mysqli_fetch_array($querycungloai)){
     ?>
    	
        <li>       
             <a href="#"><img width="170px" height="136" src="upload/tintuc/<?php echo $arrcungloai["urlHinh"] ?>" alt="<?php echo $arrcungloai["TomTat"] ?>"></a> <br />
 			 <a class="title" href="index.php?p=chitiettin&idTin=<?php echo $arrcungloai["idTin"] ?>"><?php echo $arrcungloai["TieuDe"] ?><?php echo $arrcungloai["idTL"] ?></a>
             <span class="no_wrap">   
        </li>
        <?php } ?>
        
    </ul>
</div>
<div class="clear:both"></div> 





