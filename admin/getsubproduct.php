  <?php
include '../inc/dbconnect.php';

if($_POST['data']!=0)
{
$id=$_POST['data'];

/*echo "<script> alert('".$id."')</script>";*/




if($_POST['tpe']=="Access")
{
$brand=mysqli_query($conn,'SELECT * FROM brandmodel WHERE bmodel_id="'.$id.'";');

}
else
{
    $brand=mysqli_query($conn,'SELECT * FROM brandmodel WHERE bmodel_brandid="'.$id.'";');
}

?>
  <ul id="subitems" class="blocks blocks-100 blocks-xxl-5 blocks-lg-4 blocks-md-3 blocks-sm-2"
            data-plugin="animateList" data-child=">li">
<?php
while($ite=mysqli_fetch_array($brand))
{

if($_POST['tpe']=="Resale")
{
?>

            <li>
              <div class="panel">
                <figure class="overlay overlay-hover animation-hover">
                  <img class="caption-figure overlay-figure" src="../global/images/apple-logo.png">
                  <figcaption class="overlay-panel overlay-background overlay-fade text-center vertical-align" id="parcat" data-value="<?php echo $ite['bmodel_id']; ?>">
                     <?php echo $ite['bmodel_name']; ?>                  
                  </figcaption>
                </figure>
                <div class="text-truncate "> <center><?php echo $ite['bmodel_name']; ?></center></div>
              </div>
            </li>


<?php
}

elseif($_POST['tpe']=="Access")
{
/*echo "inside";*/
$select_pdts=mysqli_query($conn,'SELECT * FROM brandmodel WHERE bmodel_name LIKE "%'.$ite['bmodel_name'].'%";');

while($brd_det=mysqli_fetch_array($select_pdts))
{
$item_det=mysqli_query($conn,'SELECT * FROM items WHERE brandmodel = "'.$brd_det['bmodel_id'].'";');

while($accdet=mysqli_fetch_array($item_det))
{
$colour=mysqli_query($conn,'SELECT * FROM colour WHERE colour_id="'.$accdet['color'].'"');

$col=mysqli_fetch_array($colour);

?>
<li value="<?php echo $accdet['intId'];  ?>" onclick="accs(this.value)">
              <div class="panel">
                <figure class="overlay overlay-hover animation-hover">
                  <img class="caption-figure overlay-figure" src="../global/images/apple-logo.png">
                  <figcaption class="overlay-panel overlay-background overlay-fade text-center vertical-align" id="access" data-value="<?php echo $accdet['intId'];  ?>">
                           <?php echo $accdet['itemname'].$col['colour_name'];  ?>             
                  </figcaption>
                </figure>
                <div class="text-truncate "> <center><?php echo $accdet['itemname'].$col['colour_name'];  ?></center></div>
              </div>
            </li>
<?php
}
}
}
else
{


  ?>




            <li>
              <div class="panel">
                <figure class="overlay overlay-hover animation-hover">
                  <img class="caption-figure overlay-figure" src="../global/images/apple-logo.png">
                  <figcaption class="overlay-panel overlay-background overlay-fade text-center vertical-align" id="parcat" data-value="<?php echo $ite['bmodel_id']; ?>">
                     <?php echo $ite['bmodel_name']; ?>                  
                  </figcaption>
                </figure>
                <div class="text-truncate "> <center><?php echo $ite['bmodel_name']; ?></center></div>
              </div>
            </li>
          <!--  <li>
              <div class="panel">
                <figure class="overlay overlay-hover animation-hover">
                  <img class="caption-figure overlay-figure" src="../global/photos/placeholder.png">
                  <figcaption class="overlay-panel overlay-background overlay-fade text-center vertical-align" id="parcat" data-value="2" >
                     Apple 
                  
                  </figcaption>
                </figure>
                <div class="text-truncate "> <center>Samsung</center></div>
              </div>
            </li>
            <li>
              <div class="panel">
                <figure class="overlay overlay-hover animation-hover">
                  <img class="caption-figure overlay-figure" src="../global/photos/placeholder.png">
                  <figcaption class="overlay-panel overlay-background overlay-fade text-center vertical-align" id="parcat" data-value="2">
                     Apple 
                  
                  </figcaption>
                </figure>
                <div class="text-truncate "> <center>HTC</center></div>
              </div>
            </li>
            <li>
              <div class="panel">
                <figure class="overlay overlay-hover animation-hover">
                  <img class="caption-figure overlay-figure" src="../global/photos/placeholder.png">
                  <figcaption class="overlay-panel overlay-background overlay-fade text-center vertical-align" id="parcat" data-value="2">
                     Apple 
                  
                  </figcaption>
                </figure>
                <div class="text-truncate "> <center>Lenova</center></div>
              </div>
            </li>
            <li>
              <div class="panel">
                <figure class="overlay overlay-hover animation-hover">
                  <img class="caption-figure overlay-figure" src="../global/photos/placeholder.png">
                  <figcaption class="overlay-panel overlay-background overlay-fade text-center vertical-align" id="parcat" data-value="2">
                     Apple 
                  
                  </figcaption>
                </figure>
                <div class="text-truncate "> <center>Apple</center></div>
              </div>
            </li> -->
        

  <?php 
}
}
?><div>
  <button class="btn btn-primary btn-outline" onclick="back()" data-dismiss="modal" type="button" >BACK</button>
 </div>

  </ul>
  
<?php
}

elseif($_POST['brd1']!="")
{

if($_POST['colid']=="")
{
  $colid=0;
}
else
{
  $colid=$_POST['colid'];

}



if($_POST['tpe']=="Resale")
{
$itemsel=mysqli_query($conn,'SELECT * FROM items WHERE brand="'.$_POST['brd1'].'" AND brandmodel="'.$_POST['brd2'].'" AND category="Resale Product"');
}
else
{

$itemsel=mysqli_query($conn,'SELECT * FROM items WHERE brand="'.$_POST['brd1'].'" AND brandmodel="'.$_POST['brd2'].'" AND category="condition_new" AND qty>0');
} 


?>
<ul id="pitems" class="blocks blocks-100 blocks-xxl-5 blocks-lg-4 blocks-md-3 blocks-sm-2"
            data-plugin="animateList" data-child=">li">
    <?php
    while($item=mysqli_fetch_array($itemsel))
{

  $customer=mysqli_query($conn,'SELECT * FROM colour WHERE colour_id="'.$item['color'].'" ');
$cust=mysqli_fetch_array($customer);
$colorname =  strtoupper(str_replace(' ', '',$cust['colour_name'])) ; 
 

?> 
   <li>
              <div class="panel">
                <figure class="overlay overlay-hover animation-hover" id="product_colour" data-value="<?php echo $cust['colour_id'] ?>">
                  <img class="caption-figure overlay-figure" src="../global/images/apple-logo.png">
                  <figcaption class="overlay-panel overlay-background overlay-fade text-center vertical-align"  data-value="<?php echo $cust['colour_id'] ?>" style="background-color: <?php echo $colorArray[$colorname] ?> !important;opacity: 0.97 !important;">
                                      
                  </figcaption>
                </figure>
                <div class="text-truncate "> <center><?php echo $cust['colour_name']; ?></center></div>
              </div>
            </li>
            <?php }?>
          </ul>
          <div id="product_caps" >
            <div class="form-group">
           <?php

 

if($_POST['colid']!="")
{
/*echo "<script> alert('".$_POST['tpe']."')</script>";*/

if($_POST['tpe']=="Resale")
{
$itemsel=mysqli_query($conn,'SELECT * FROM items WHERE brand="'.$_POST['brd1'].'" AND brandmodel="'.$_POST['brd2'].'" AND color="'.$colid.'" AND category="Resale Product" ');

/*echo 'SELECT * FROM items WHERE brand="'.$_POST['brd1'].'" AND brandmodel="'.$_POST['brd2'].'" AND color="'.$colid.'" AND category="Resale Product" ';*/

}
else
{
  $itemsel=mysqli_query($conn,'SELECT * FROM items WHERE brand="'.$_POST['brd1'].'" AND brandmodel="'.$_POST['brd2'].'" AND color="'.$colid.'" AND category="condition_new" AND qty>0');

 /* echo 'SELECT * FROM items WHERE brand="'.$_POST['brd1'].'" AND brandmodel="'.$_POST['brd2'].'" AND color="'.$colid.'" AND category="condition_new"';  */
}


while($item=mysqli_fetch_array($itemsel))
{

  $customer=mysqli_query($conn,'SELECT * FROM capacity WHERE capacity_id="'.$item['capacity'].'" ');
$cust=mysqli_fetch_array($customer);

?>
<div class="radio-custom radio-default radio-inline">
                            <input id="product_cap" name="product_cap" type="radio" value="<?php echo $item['intId'] ?>"  >
                            <label for="inputBasicMale"><?php echo $cust['capacity_name'] ?> </label>
                          </div> 
                      

<?php 
}
}
?>
</div>
</div>
 <div class=" lightbox-block" id="colorcap" style="height:300px"  >
                                    
<?php
if($_POST['colid']!="")
{
  ?>
<button class="btn btn-primary btn-outline" onclick="addprod()" data-dismiss="modal" type="button" >Add Product</button>

<input type="hidden" value="sec" id="secnd">

   <?php 
}

?>
<input type="hidden" value="" id="secnd">
             <a id="model-close" class="popup-modal-dismiss btn btn-primary btn-outline" href="javascript:void(0)" onclick="getvalues()">Cancel</a> 
            </div>
<?php

} 
 
  ?>
    <link rel="stylesheet" href="../assets/css/site.css">