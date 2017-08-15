<style type="text/css">
    .child-cat a
    {
        float:left;
    }

</style>
<?php 
        $qrmenu="SELECT * FROM theloai";
        $querymenu=mysqli_query($conn,$qrmenu);
        while($arr=mysqli_fetch_array($querymenu)){
            $idTL=$arr["idTL"];
?>
<div class="box-cat">
	<div class="cat">
    	<div class="main-cat">
        	<a href="index.php?p=tintrongloai&idLT=0 &idTL=<?php echo $idTL ?>"><?php echo $arr["TenTL"] ?></a>
        </div>
        <div class="child-cat">
        	<?php 
                        $qrmenucon="SELECT * FROM loaitin WHERE idTL='$idTL'";
                        $querymenucon=mysqli_query($conn,$qrmenucon);
                        while ($arrcon=mysqli_fetch_array($querymenucon)){

                     ?>
            <a href="index.php?p=tintrongloai&idLT=<?php echo $arrcon["idLT"] ?> &idTL=0"><?php echo $arrcon["Ten"] ?></a>
            <?php } ?>
        </div>
        <div class="clear"></div>
        <div class="cat-content">
   <?php  
     $qrTL="SELECT * FROM tin WHERE idTL=$idTL ORDER BY idTin DESC  LIMIT 0,1";
    $queryTL=mysqli_query($conn,$qrTL);
    while($arrTL=mysqli_fetch_array($queryTL)){

    ?>
            <div class="col1">
            	<div class="news">
                    <h3 class="title" ><a href="index.php?p=chitiettin&idTin=<?php echo $arrTL["idTin"] ?>"><?php echo $arrTL["TieuDe"] ?></a></h3>
                    <img class="images_news" src="upload/tintuc/<?php echo $arrTL["urlHinh"] ?>" align="left" />
                    <div class="des"><?php echo $arrTL["TomTat"] ?> </div>
                    <div class="clear"></div>
                   
				</div>
                
            </div>

            <div class="col2">
            <?php  
     $qrTL="SELECT * FROM tin WHERE idTL=$idTL ORDER BY idTin DESC  LIMIT 1,3";
    $queryTL=mysqli_query($conn,$qrTL);
    while($arrTL=mysqli_fetch_array($queryTL)){

    ?>
             <p class="tlq"><a href="index.php?p=chitiettin&idTin=<?php echo $arrTL["idTin"] ?>"> <?php echo $arrTL["TieuDe"] ?> </a>
                </a></p>
               <?php } ?> 
            </div>
            <?php } ?>    
        </div>
    </div>
</div>
<div class="clear"></div>
<?php } ?>

<!-- box cat-->



