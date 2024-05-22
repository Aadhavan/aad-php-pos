  <?php
include '../inc/dbconnect.php';

if($_POST['data']!=0)
{
$id=$_POST['data'];

$ald_brd=array();
?>

  <ul id="subitems" class="blocks blocks-100 blocks-xxl-5 blocks-lg-4 blocks-md-3 blocks-sm-2"
            data-plugin="animateList" data-child=">li">
<?php
if($_POST['tpe']=="Access_brd")
{

$brand_check=mysqli_query($conn,'SELECT DISTINCT brand,category  FROM items WHERE category="'.$id.'" ');

while($ite=mysqli_fetch_array($brand_check))
{

$brand=mysqli_query($conn,'SELECT * FROM brand WHERE par_id="'.$ite['brand'].'" ');

$brd=mysqli_fetch_array($brand);


$dat=$brd['par_id'];
/*$goos=in_array($dat,$ald_brd);*/


if(!in_array($dat,$ald_brd))
{
if($brd['par_id']!="")
{

  $ald_brd=array_push($ald_brd,$brd['varBrandName']);
?>

            <li value="<?php echo $brd['par_id'];?>"  onclick="cate(this.value)">
              <div class="panel">
                <figure class="overlay overlay-hover animation-hover">
                  <img class="caption-figure overlay-figure" src="../global/images/apple-logo.png">
                  <figcaption class="overlay-panel overlay-background overlay-fade text-center vertical-align" id="parbrd" data-value="<?php echo $brd['par_id']; ?>">
                     <?php echo $brd['varBrandName']; ?>                  
                  </figcaption>
                </figure>
                <div class="text-truncate "> <center><?php echo $brd['varBrandName']; ?></center></div>
              </div>
<input type="hidden" id="cate<?php echo $brd['par_id']; ?>" value="<?php echo $id;  ?>">
            </li>


<?php
}
}
}
	}
}
?>  </ul>
<div>
  <button class="btn btn-primary btn-outline" onclick="back()" data-dismiss="modal" type="button" >BACK</button>
 </div>