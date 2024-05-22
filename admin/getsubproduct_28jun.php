  <?php
include '../inc/dbconnect.php';

if($_POST['data']!=0)
{
$id=$_POST['data'];

/*echo "<script> alert('".$id."')</script>";*/

$brand=mysqli_query($conn,'SELECT * FROM brandmodel WHERE bmodel_brandid="'.$id.'";');

?>
  <ul id="subitems" class="blocks blocks-100 blocks-xxl-5 blocks-lg-4 blocks-md-3 blocks-sm-2"
            data-plugin="animateList" data-child=">li">
<?php
while($ite=mysqli_fetch_array($brand))
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
?>
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


$itemsel=mysqli_query($conn,'SELECT * FROM items WHERE brand="'.$_POST['brd1'].'" AND brandmodel="'.$_POST['brd2'].'"');


?>
 <div class=" lightbox-block" id="colorcap" style="height:300px"  >
                     <div class="panel-body"> 
                        <div class="nav-tabs-horizontal nav-tabs-inverse" data-plugin="tabs">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item" role="presentation">
                    <a class="nav-link active" data-toggle="tab" href="#exampleTabsInverseOne" aria-controls="exampleTabsInverseOne"
                      role="tab">
                  Product Details
                </a>
                  </li>


<!--                   <li class="nav-item" role="presentation">
                    <a class="nav-link" data-toggle="tab" href="#exampleTabsInverseTwo" aria-controls="exampleTabsInverseTwo"
                      role="tab">
                  Capacity
                </a>
                  </li> -->
                </ul>
                <div class="tab-content p-20">
                  <div class="tab-pane active" id="exampleTabsInverseOne" role="tabpanel">
                      <div class="example">
<!--                         <div class="form-group">
                          <input type="checkbox" class="to-labelauty-icon" name="inputLableautyNoLabeledCheckbox"
                            data-plugin="labelauty" data-label="false" />
                          <span>Unchecked</span>
                        </div>
                        <div class="form-group">
                          <input type="checkbox" class="to-labelauty-icon" name="inputLableautyNoLabeledCheckbox"
                            data-plugin="labelauty" data-label="false" checked/>
                          <span>Checked</span>
                        </div> -->
                         
                      <div class="step col-md-4">
                         
                         <div class="example" style="  margin: 0px " >
                    <select data-plugin="selectpicker" name="colour_name" id="product_colour"  >
                    <?



echo'<option value="0">Select Colour</option>';
while($item=mysqli_fetch_array($itemsel))
{

  $customer=mysqli_query($conn,'SELECT * FROM colour WHERE colour_id="'.$item['color'].'" ');
$cust=mysqli_fetch_array($customer);

?>

                       <option value="<?php echo $cust['colour_id'] ?>" <?php if($colid!=0) echo 'selected="selected"'; ?>><?php echo $cust['colour_name'] ?></option>
                      


<?php 
}
?>



<!--   <option >Mustard</option> -->
                    <!--   <option>Ketchup</option>
                     <option>Relish</option> -->

                    </select>


<select data-plugin="selectpicker" name="capacity" id="product_cap"  >
                    <?



echo'<option value="0">Select Capacity</option>';

if($_POST['colid']!="")
{

$itemsel=mysqli_query($conn,'SELECT * FROM items WHERE brand="'.$_POST['brd1'].'" AND brandmodel="'.$_POST['brd2'].'" AND color="'.$colid.'"');

while($item=mysqli_fetch_array($itemsel))
{

  $customer=mysqli_query($conn,'SELECT * FROM capacity WHERE capacity_id="'.$item['capacity'].'" ');
$cust=mysqli_fetch_array($customer);

?>

                       <option value="<?php echo $item['intId'] ?>"><?php echo $cust['capacity_name'] ?></option>
                      


<?php 
}}
?>



<!--   <option >Mustard</option> -->
                    <!--   <option>Ketchup</option>
                     <option>Relish</option> -->

                    </select>





                  </div>
                   
                      </div>





                      </div>
                   
                  </div>

                </div>
              </div>

                      
                </div>                 

             <button class="btn btn-primary btn-outline" onclick="addprod()" data-dismiss="modal" type="button" >Add Product</button>
             <a id="model-close" class="popup-modal-dismiss btn btn-primary btn-outline" href="javascript:void(0)" onclick="getvalues()">Close</a> 
            </div>
<?php

}




/*  include '../inc/dbconnect.php';  
  	// Table name 
   $keyword = $_POST['data'];

	$sql = "select * from  items where itemname like '%".$keyword."%' "; 

	$result = mysqli_query($conn,$sql) or die(mysqli_error());
	if(mysqli_num_rows($result))
	{
		echo '<ul class="list">';
		while($row = mysqli_fetch_array($result))
		{
			$str     = $row['itmimei'];
			$itmimei    = $row['itmimei'];
			$pid     = $row['itmId'];
			 $pprice    = $row['price'];
			//$color    = $row['color'];
			//$capacity    = $row['capacity']; 


			$selitm  = "SELECT * FROM items where  intId=".$pid."";
			$qry_itm = mysqli_query($conn,$selitm);
			$fetitm  = mysqli_fetch_array($qry_itm); 
			$str1      = $fetitm['itemname'];
			 //$pprice      = $fetitm['price'];
			$color       = $fetitm['color'];
			$capacity    = $fetitm['capacity']; 
			$price    = $fetitm['price'];
            $salesprice   = $fetitm['salesprice'];

			$sel ="SELECT * FROM colour where  colour_id=".$color."";
			$qry = mysqli_query($conn,$sel);
			$fet = mysqli_fetch_array($qry);
			$clname = $fet['colour_name']; 

			$sel1 ="SELECT * FROM capacity where  capacity_id=".$capacity."";
			$qry1 = mysqli_query($conn,$sel1);
			$fet1 = mysqli_fetch_array($qry1);
			$cpname = $fet1['capacity_name']; 

			$pqty   = 0;
			$punit  = 0; 

			$start = strpos($str,$keyword); 
			$end   = similar_text($str,$keyword); 
			$last  = substr($str,$end,strlen($str));
			$first = substr($str,$start,$end);
			
			$final = '<span class="bold">'.$first.'</span>'.$last. ' '.$str1.' '. $fet['colour_name'].' '. $fet1['capacity_name'];
		
			echo '<li><a id="prodet" href=\'javascript:void(0);\' data-proid="'.$pid.'" data-proqty="'.$pqty.'"  data-proname="'.$str1.'"  data-prounit="'.$punit.'"  data-imei="'.$itmimei.'" data-price="'.$price.'" data-color="'.$clname.'" data-capacity="'.$cpname.'">'.$final.'</a></li>';  
		}
		echo "</ul>";
	}
	else
		echo 0;*/
	?>