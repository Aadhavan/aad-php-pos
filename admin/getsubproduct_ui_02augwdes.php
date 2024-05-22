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

$value=0;
$inv=0;

$brand_check=mysqli_query($conn,'SELECT * FROM items WHERE brandmodel="'.$ite['bmodel_id'].'" ');

$value=mysqli_num_rows($brand_check);

/*echo "<script> alert('".$value."')</script>";*/

if($value==0)
{
  $inv=1;
}
else
{
  $brand_qty_check=mysqli_query($conn,'SELECT * FROM items WHERE brandmodel="'.$ite['bmodel_id'].'" WHERE qty = 0;');

if(mysqli_num_rows($brand_qty_check)==$brand_check)
{
$inv=1;
}
}


if($inv!=1)
{
if($_POST['tpe']=="Resale")
{

  $resale_check=mysqli_query($conn,'SELECT * FROM items WHERE brandmodel = "'.$ite['bmodel_id'].'" AND qty <> 0 AND category="Resale Product";');

if(mysqli_num_rows($resale_check))
{

if($ite['bmodel_name']!="")   
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
}

elseif($_POST['tpe']=="Access")
{/*
echo "<script> alert('".$ite['bmodel_name']."')</script>";
*/
/*$select_pdts=mysqli_query($conn,'SELECT * FROM brandmodel WHERE bmodel_name LIKE "%'.$ite['bmodel_name'].'%";');*/
$select_pdts=mysqli_query($conn,'SELECT * FROM items WHERE category="'.$_POST['cat'].'" AND brand="'.$_POST['data'].'";');
/*
$que='SELECT * FROM item WHERE itemname LIKE "%'.$ite['bmodel_name'].'%";';


echo "<script> alert('".$que."')</script>";*/

/*
while($brd_det=mysqli_fetch_array($select_pdts))
{
$item_det=mysqli_query($conn,'SELECT * FROM items WHERE brand = "'.$brd_det['brand'].'";');

echo "<script> alert('".$ite['bmodel_name']."')</script>";*/

while($accdet=mysqli_fetch_array($select_pdts))
{
/*$colour=mysqli_query($conn,'SELECT * FROM colour WHERE colour_id="'.$accdet['color'].'"');

$col=mysqli_fetch_array($colour);*/


$access_chk=mysqli_query($conn,'SELECT * FROM items WHERE brand="'.$accdet['brand'].'"  AND qty<>0');

/*echo "<script> alert('SELECT * FROM items WHERE brandmodel='".$brd_det['brand']."'  AND qty<>0')</script>";*/
/*
echo "<script> alert('".$ite['bmodel_name']."')</script>";*/
if(mysqli_num_rows($access_chk)!=0)
{

  if($accdet['itemname']!="")
  {
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
}
}
/*}*/
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
}
?>
  </ul>
<div>
  <button class="btn btn-primary btn-outline" onclick="back()" data-dismiss="modal" type="button" >BACK</button>
 </div>
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

$master = array();
/* echo "<script> alert('".$colid."')</script>";*/
    while($item=mysqli_fetch_array($itemsel))
{

  $customer=mysqli_query($conn,'SELECT * FROM colour WHERE colour_id="'.$item['color'].'" ');
$cust=mysqli_fetch_array($customer);
$colorname =  strtoupper(str_replace(' ', '',$cust['colour_name'])) ; 
/* echo "<script> alert('".$colorname."')</script>";
 echo "<script> alert('".in_array($colorname, $master)."')</script>";*/
 if(in_array($colorname, $master)!=1)
 {
array_push($master,$colorname);
 

?> 
   <li>
              <div class="panel">
                <figure class="overlay overlay-hover animation-hover <?php if($item['color'] == $colid) echo 'selected'; ?>" id="product_colour" data-value="<?php echo $cust['colour_id'] ?>">
                  <img class="caption-figure overlay-figure" src="../global/images/apple-logo.png">
                  <figcaption class="overlay-panel overlay-background overlay-fade text-center vertical-align"  data-value="<?php echo $cust['colour_id'] ?>" style="background-color: <?php echo $colorArray[$colorname] ?> !important;opacity: 0.97 !important;">
                                      
                  </figcaption>
                </figure>
                <div class="text-truncate "> <center><?php echo $cust['colour_name']; ?></center></div>
              </div>
            </li>
            <?php
             }
          }?>


          </ul>
          <div id="product_caps" style="padding-bottom: 10px;">
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
                            <input id="product_cap" name="product_cap" type="radio" value="<?php echo $item['intId'] ?> " onclick="display_det(this.value)"  >
                            <label for="inputBasicMale"><?php echo $cust['capacity_name'] ?> </label>
                          </div> 
                      

</div>

<?php 
}
}
?>
</div>
<div id="testdiv_test" style="display:none,">
</div>
 <div class="lightbox-block" id="colorcap" style="height:300px"  >
                                    
<?php
if($_POST['colid']!="")
{
  ?>
<div id="add_div">
<button class="btn btn-primary btn-outline" onclick="addprod()" data-dismiss="modal" type="button" >Add Product</button>

<input type="hidden" value="sec" id="secnd">
<a id="model-close" class="popup-modal-dismiss btn btn-primary btn-outline" href="javascript:void(0)" onclick="getvalues()">Cancel</a> 
</div>
<div id="select_div" style="display: none">
  <button class="btn btn-primary btn-outline" onclick="selectprod()" data-dismiss="modal" type="button" >Select Product</button>

<!-- <input type="hidden" value="sec" id="secnd"> -->

<a id="model-close" class="popup-modal-dismiss btn btn-primary btn-outline" href="javascript:void(0)" onclick="getvalues()">Cancel</a> 

</div>


   <?php 
}

?>
<input type="hidden" value="" id="secnd">
             <!-- <a id="model-close" class="popup-modal-dismiss btn btn-primary btn-outline" href="javascript:void(0)" onclick="getvalues()">Cancel</a> -->
            </div>
<?php

} 
 
  ?>
    <link rel="stylesheet" href="../assets/css/site.css">
<script>
    function display_det(val)
{



 $.ajax({
           type: "POST",
           url: "posget_prod.php",
           data: "data="+val,
           success: function(msg){ 

  /*alert(msg);*/
     $("#testdiv_test").css("display","block"); 
 $( "#testdiv_test" ).empty();
 $('#testdiv_test').html(msg);

 $('#add_div').hide();
  $('#select_div').css("display","block"); 
/*
$("#ajax_response").trigger("click");*/

           }

         });






}
</script>
<style>

/*figure.selected,figure:hover{
-webkit-box-shadow: -1px -1px 36px -3px rgba(28,122,246,1);
-moz-box-shadow: -1px -1px 36px -3px rgba(28,122,246,1);
box-shadow: -1px -1px 36px -3px rgba(28,122,246,1);

}*/
</style>


<script>
function selectprod()
{
 $('#keyword').focus();

 $("#coldisp2" ).empty();
   $("#prodtabs").css("display","block");
$('#dblemge').val("0");
}

  </script>