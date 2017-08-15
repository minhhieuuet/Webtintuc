<style type="text/css">
    .pagination {
    display: inline-block;
    margin-left:5%;

}

.pagination a {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;

}

.pagination a.active {
    background-color: red;
    color: white;
}

.pagination a:hover:not(.active) {background-color: #ddd;}
</style>

<?php 
$conn=mysqli_connect("localhost","root","","webtintuc");
  mysqli_query($conn,"SET NAMES 'utf8'");
 ?>
 <?php 
$idTL=$_GET["idTL"];
$idLT=$_GET["idLT"];
  ?>
  <?php 
   
    $qrTL="SELECT * FROM theloai WHERE idTL='$idTL'";
    $queryTL=mysqli_query($conn,$qrTL);
    $arrTL=mysqli_fetch_array($queryTL);
?>
<?php 
   
    $qrLT="SELECT * FROM loaitin WHERE idLT=$idLT";
    $queryLT=mysqli_query($conn,$qrLT);
    $arrLT=mysqli_fetch_array($queryLT);
?>
 <?php echo "Trang chủ".">>".$arrTL["TenTL"].$arrLT["Ten"] ?>
<?php 
    $trang=$_GET["trang"];
    $sotinmottrang=10;
    $from=($trang-1)*$sotinmottrang;
    $idTL=$_GET["idTL"];
    $qrTL="SELECT * FROM tin WHERE idTL='$idTL' LIMIT $from,$sotinmottrang";
    $queryTL=mysqli_query($conn,$qrTL);
    $qrST=" SELECT * FROM tin WHERE  idLT='$idLT' OR idTL='$idTL' ";
    $queryST=mysqli_query($conn,$qrST);
    $sotrang=ceil(mysqli_num_rows($queryST)/($sotinmottrang));
    while($arrTL=mysqli_fetch_array($queryTL)){
?>
<div class="box-cat">
	<div class="cat1">
    	
        <div class="clear"></div>
        <div class="cat-content">
        	<div class="col0 col1">
            	<div class="news">
                    <h3 class="title" ><a href="index.php?p=chitiettin&idTin=<?php echo $arrTL["idTin"] ?>"><?php echo $arrTL["TieuDe"] ?></a></h3>
                    <img class="images_news" src="upload/tintuc/<?php echo $arrTL["urlHinh"] ?>" align="left" />
                    <div class="des"><?php echo $arrTL["TomTat"] ?> </div>
                    <div class="clear"></div>
                   
				</div>
            </div>
            
        </div>
    </div>
</div>
<?php } ?>

<?php 
    $idLT=$_GET["idLT"];
    $qrLT="SELECT * FROM tin WHERE idLT='$idLT' LIMIT $from,10";
    $queryLT=mysqli_query($conn,$qrLT);
    while($arrLT=mysqli_fetch_array($queryLT)){
?>
<div class="box-cat">
    <div class="cat1">
        
        <div class="clear"></div>
        <div class="cat-content">
            <div class="col0 col1">
                <div class="news">
                    <h3 class="title" ><a href="index.php?p=chitiettin&idTin=<?php echo $arrLT["idTin"] ?>"><?php echo $arrLT["TieuDe"] ?></a></h3>
                    <img class="images_news" src="upload/tintuc/<?php echo $arrLT["urlHinh"] ?>" align="left" />
                    <div class="des"><?php echo $arrLT["TomTat"] ?> </div>
                    <div class="clear"></div>
                   
                </div>
            </div>
            
        </div>
    </div>
</div>
<?php } ?>
<div class="pagination">
<?php       
        for($i=1;$i<$sotrang;$i=$i+1){
 ?>
        <a href="index.php?p=tintrongloai&idTL=<?php echo $idTL ?>&idLT=<?php echo $idLT ?>&trang=<?php echo $i ?>"><?php echo $i ?></a>
<?php } ?>
</div>
<!-- box cat-->






