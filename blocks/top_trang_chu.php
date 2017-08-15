<?php 
$conn=mysqli_connect("localhost","root","","webtintuc");
  mysqli_query($conn,"SET NAMES 'utf8'");
  require "lib/trangquantri.php";
  $qrmottin="
    SELECT * FROM tin ORDER BY idTin DESC LIMIT 0,1
  ";
  $tinmoinhat_mottin= mysqli_query($conn,$qrmottin);
$qrnhieutin="
    SELECT * FROM tin ORDER BY idTin DESC LIMIT 1,30
  ";
  $tinmoinhat_nhieutin= mysqli_query($conn,$qrnhieutin);
 ?>
<div id="slide-left">
        	<div id="slideleft-main">
             
              <?php while($arrmottin=mysqli_fetch_array($tinmoinhat_mottin)){
                ?>
                <img src="upload/tintuc/<?php echo $arrmottin["urlHinh"] ?>"  /><br />
                <h2 class="title"><a href="index.php?p=chitiettin&idTin=<?php echo $arrmottin["idTin"] ?>"><?php echo $arrmottin["TieuDe"] ?></a> </h2>
                <div class="des">
                    <?php echo $arrmottin["TomTat"]; ?> 
                </div>
                <?php } ?>
            	
                
        	</div>
            <div id="slideleft-scroll">
            	
              <div class="content_scoller width_common" style="overflow: auto;height:235px" >
            <ul>
               <?php while($arrnhieutin=mysqli_fetch_array($tinmoinhat_nhieutin)){
                ?>
               <li>
                <div class="title_news">
               		<a href="<?php echo $arrnhieutin["idTin"] ?>-<?php echo changeTitle($arrnhieutin["TieuDe_KhongDau"])?>.html" class="txt_link"><?php echo $arrnhieutin["TieuDe"] ?> </a> 
                </div>
              </li>
              <?php } ?>
               
            </ul>
            </div>			
            
			<div id="gocnhin">
                <img alt="" src="http://khoapham.vn/images/logoKhoaPham.png" width="100%"></a>
                <div class="title_news"></div>
            </div>
                
            </div>
</div>


     