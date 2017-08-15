<?php 
 $conn=mysqli_connect("localhost","root","","webtintuc");
  mysqli_query($conn,"SET NAMES 'utf8'");
 ?>
 
<div class="box-cat" style="z-index: 1000;">
	<div class="cat">
    	<div class="main-cat">
        	<a href="#">Tin xem nhiều</a>
        </div>
       
        <div class="clear"></div>
        <div class="cat-content">
        	<?php 

 $qrtxn="SELECT * FROM tin ORDER BY SoLanXem DESC LIMIT 0,9";
 $querytxn=mysqli_query($conn,$qrtxn);
 while($arrtinxn=mysqli_fetch_array($querytxn)){

  ?>
            <div class="col1">
            	<div class="news">
                  <img width="119" height="76" class="images_news" src="upload/tintuc/<?php echo $arrtinxn["urlHinh"] ?>"  />
                    <h3 class="title" ><a  href="index.php?p=chitiettin&idTin=<?php echo $arrtinxn["idTin"] ?>"><?php echo $arrtinxn["TieuDe"] ?></a><span class="hit"></span></h3>
                    <div class="clear"></div>
				</div>
            </div>
            
            <?php } ?>
           
            
            
            

            
        </div>
    </div>
</div>
<div class="clear"></div>

