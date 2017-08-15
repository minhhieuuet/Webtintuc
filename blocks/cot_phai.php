<?php 
$conn=mysqli_connect("localhost","root","","webtintuc");
  mysqli_query($conn,"SET NAMES 'utf8'");
 $qrTL="SELECT * FROM loaitin  LIMIT 0,4";
    $queryTL=mysqli_query($conn,$qrTL);
    while($arrTL=mysqli_fetch_array($queryTL)){

 ?>
<!-- box cat -->
<div class="box-cat">
	<div class="cat">
    	<div class="main-cat">
        	<a href="index.php?p=tintrongloai&idLT=<?php echo $arrTL["idLT"] ?>%20&idTL=0&trang=1"><?php echo $arrTL["Ten"] ?></a>
        </div>
       
        <div class="clear"></div>
        <div class="cat-content">
        	<div class="col1">
            <?php 
            $arrtheloai=$arrTL["idLT"];
            $qrmottin="SELECT * FROM tin WHERE idLT='$arrtheloai' ORDER BY idTin  DESC LIMIT 0,1 "; 
            $tinmoinhat_mottin= mysqli_query($conn,$qrmottin);
            $qrnhieutin="SELECT * FROM tin WHERE idLT='$arrtheloai' ORDER BY idTin  DESC LIMIT 1,4"; 
            $tinmoinhat_nhieutin= mysqli_query($conn,$qrnhieutin);
            ?>
            	<?php while($arrmottin=mysqli_fetch_array($tinmoinhat_mottin)){
                    ?>
                <div class="news">
                <h3 class="title" ><a href="index.php?p=chitiettin&idTin=<?php echo $arrmottin["idTin"] ?>"> <?php echo $arrmottin["TieuDe"]  ?></a></h3>
                  <img class="images_news" src="upload/tintuc/<?php echo $arrmottin["urlHinh"] ?>" align="left" />
                    <div class="des"><?php echo $arrmottin["TomTat"] ?> </div>
                  
                  
                    <div class="clear"></div>
                   
				</div>
                <?php } ?>
            </div>
            <div class="col2">
            <?php while($arrnhieutin=mysqli_fetch_array($tinmoinhat_nhieutin)){ ?>
           <h3 class="tlq"><a href="index.php?p=chitiettin&idTin=<?php echo $arrnhieutin["idTin"] ?>"><?php echo $arrnhieutin["TieuDe"] ?></a></h3>
           <?php } ?>
            
           
            </div> 
           
        </div>
    
    </div>

</div>
<div class="clear"></div>
<?php } ?>
<!-- //box cat -->


<!-- box cat -->

<!-- //box cat -->