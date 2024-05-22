<?php 
include '../inc/dbconnect.php';
include '../inc/page_head.php';
include '../inc/page_navi.php';
include '../inc/page_sidebar.php';  






if($_SERVER['HTTP_HOST']=='localhost'){

  $host_name='localhost';
  $host_user='root';
  $host_pass='';
  $host_db='pacific_erp';

}
else{
  $host_name='localhost';
  $host_user='infogenx_retusr';
  $host_pass='jYs}Ao%F#sWv';
  $host_db='infogenx_pacificerp';
}
$con= new mysqli($host_name,$host_user,$host_pass,$host_db);
if($con->conncect_error){
  die("Connction failed:" .$con->conncect_error);
}



$itemid=$_REQUEST['itid'];
$orderid=$_REQUEST['ordid'];

if(isset($_POST['submit'])){






$request=mysqli_query($conn,'SELECT * FROM purchase WHERE intId="'.$itemid.'"');

$req =mysqli_fetch_array($request);




$item_que=mysqli_query($conn,'SELECT * FROM items WHERE pdt_id="'.$req['intItemId'].'"');

if(mysqli_num_rows($item_que)==0)
{

//insertion of item here





$request=mysqli_query($conn,'SELECT * FROM purchase WHERE intId="'.$itemid.'"');

$req =mysqli_fetch_array($request);



$item_que=mysqli_query($con,'SELECT * FROM items WHERE intId="'.$req['intItemId'].'"');

$item =mysqli_fetch_array($item_que);




$colour=mysqli_query($con,'SELECT * FROM colour WHERE colour_id="'.$item['color'].'"');

$col =mysqli_fetch_array($colour);



$capacity=mysqli_query($con,'SELECT * FROM capacity WHERE capacity_id="'.$item['capacity'].'"');

$cap =mysqli_fetch_array($capacity);


$brand=mysqli_query($con,'SELECT * FROM brand WHERE intId="'.$item['brand'].'"');

$brd =mysqli_fetch_array($brand);


$brand_model=mysqli_query($con,'SELECT * FROM brandmodel WHERE bmodel_id="'.$item['brandmodel'].'"');

$brd_mdl =mysqli_fetch_array($brand_model);

// For Brand Table Insertion

 
$brand_models=mysqli_query($conn,'SELECT * FROM brand WHERE par_id="'.$brd['intId'].'"');



if(mysqli_num_rows($brand_models)==0)
{


$brand_mod_id=mysqli_query($conn,'INSERT INTO brand ( varBrandName,varBrandDesc,intStatus,par_id ) VALUES ( "'.$brd['varBrandName'].'", "'.$brd['varBrandDesc'].'","'.$brd['intStatus'].'","'.$brd['intId'].'" );');



}

$brand_models=mysqli_query($conn,'SELECT * FROM brand WHERE par_id="'.$brd['intId'].'"');

  $brand_mod=mysqli_fetch_array($brand_models);

  $brand_mod_id=$brand_mod['intId'];




//For Brand Model Table Insertion and Checking
/*
echo "<script> alert('".$_POST['typeofitem']."')</script>";*/


if($_POST['typeofitem']=="Access")
{

$category=mysqli_query($con,'SELECT * FROM category WHERE Category_name="'.$item['category'].'"');

$cat=mysqli_fetch_array($category);


$category_check=mysqli_query($conn,'SELECT * FROM category WHERE cid="'.$cat['id'].'"');



if(mysqli_num_rows($category_check)==0)

{


$cat_ins=mysqli_query($conn,'INSERT INTO category ( cid ,Category_name,Category_desc ) VALUES ( "'.$cat['id'].'", "'.$cat['Category_name'].'","'.$cat['Category_desc'].'" );');



 $brand_mod_id=$brd['intId'];



}







}

$brandname=$brd_mdl['bmodel_name'];

$brand_model_query=mysqli_query($conn,'SELECT * FROM brandmodel WHERE par_id="'.$brd_mdl['bmodel_id'].'" AND bmodel_brandid ="'.$brand_mod_id.'"');

if(mysqli_num_rows($brand_model_query)==0)
{

$brand_model_id=mysqli_query($conn,'INSERT INTO brandmodel ( bmodel_brandid ,bmodel_name,bmodel_desc,bmodel_status,par_id ) VALUES ( "'.$brand_mod_id.'", "'.$brd_mdl['bmodel_name'].'","'.$brd_mdl['bmodel_desc'].'","'.$brd_mdl['bmodel_status'].'","'.$brd_mdl['bmodel_id'].'" );');

}
$brand_model_query=mysqli_query($conn,'SELECT * FROM brandmodel WHERE par_id="'.$brd_mdl['bmodel_id'].'" AND bmodel_brandid ="'.$brand_mod_id.'"');

  $brand_model_fet=mysqli_fetch_array($brand_model_query);

  $brand_model_id=$brand_model_fet['bmodel_id'];



if($_POST['typeofitem']!="Access")
{
//For Colour Checking and Insertion


$color_qry=mysqli_query($conn,'SELECT * FROM colour WHERE par_id ="'.$col['colour_id'].'"');

if(mysqli_num_rows($color_qry)==0)
{

$color_id=mysqli_query($conn,'INSERT INTO colour (colour_name,colour_desc,colour_status,par_id ) VALUES ( "'.$col['colour_name'].'", "'.$col['colour_desc'].'","'.$col['colour_status'].'","'.$col['colour_id'].'");');

}

$color_qry=mysqli_query($conn,'SELECT * FROM colour WHERE par_id ="'.$col['colour_id'].'"');

  $col_id_fet=mysqli_fetch_array($color_qry);
  $color_id=$col_id_fet['colour_id'];


//For Capacity Checking and Insertion


$cap_qry=mysqli_query($conn,'SELECT * FROM capacity WHERE par_id ="'.$cap['capacity_id'].'"');

if(mysqli_num_rows($cap_qry)==0)
{

$cap_id=mysqli_query($conn,'INSERT INTO capacity ( capacity_name,capacity_desc ,capacity_status,par_id) VALUES ( "'.$cap['capacity_name'].'", "'.$cap['capacity_desc'].'","'.$cap['capacity_status'].'","'.$cap['capacity_id'].'");');

}

$cap_qry=mysqli_query($conn,'SELECT * FROM capacity WHERE par_id ="'.$cap['capacity_id'].'"');

  $cap_id_fet=mysqli_fetch_array($cap_qry);
  $cap_id=$cap_id_fet['capacity_id']; 

}

/*echo '<script> alert("'.$item['itemname'].'");</script>';
echo '<script> alert("'.$color_id.'");</script>';
echo '<script> alert("'.$cap_id.'");</script>';
echo '<script> alert("'.$brand_mod_id.'");</script>';
echo '<script> alert("'.$brand_model_id.'");</script>';*/
//For ITEM Checking and Insertion
/*
echo 'SELECT * FROM items WHERE itemname ="'.$item['itemname'].'" AND color = "'.$color_id.'" AND capacity ="'.$cap_id.'" AND brand ="'.$brand_mod_id.'" AND brandmodel="'.$brand_model_id.'"';*/





$item_qry=mysqli_query($conn,'SELECT * FROM items WHERE pdt_id ="'.$item['intId'].'" AND color = "'.$color_id.'" AND capacity ="'.$cap_id.'" AND brand ="'.$brand_mod_id.'" AND brandmodel="'.$brand_model_id.'"');




if(mysqli_num_rows($item_qry)==0)
{

/* echo 'INSERT INTO items (itemname,category,brand,brandmodel,price,color,capacity,simtype,simsize,dimension,display,battery,nonremovable,rammemory,ostype,description,shortdescription,status,pdt_id,itemtype) VALUES ( "'.$item['itemname'].'", "'.$item['category'].'", "'.$brand_mod_id.'", "'.$brand_model_id.'", "'.$item['price'].'", "'.$color_id.'", "'.$cap_id.'", "'.$item['simtype'].'","'.$item['simsize'].'","'.$item['dimension'].'","'.$item['display'].'","'.$item['battery'].'","'.$item['nonremovable'].'","'.$item['rammemory'].'","'.$item['ostype'].'","'.addslashes($item['description']).'","'.addslashes($item['shortdescription']).'","'.$item['status'].'","'.$item['intId'].'","'.$item['itemtype'].'");';
die;*/






$item_id=mysqli_query($conn,'INSERT INTO items (itemname,category,brand,brandmodel,price,color,capacity,simtype,simsize,dimension,display,battery,nonremovable,rammemory,ostype,description,shortdescription,status,pdt_id,itemtype) VALUES ( "'.$item['itemname'].'", "'.$item['category'].'", "'.$brand_mod_id.'", "'.$brand_model_id.'", "'.$item['price'].'", "'.$color_id.'", "'.$cap_id.'", "'.$item['simtype'].'","'.$item['simsize'].'","'.$item['dimension'].'","'.$item['display'].'","'.$item['battery'].'","'.$item['nonremovable'].'","'.$item['rammemory'].'","'.$item['ostype'].'","'.addslashes($item['description']).'","'.addslashes($item['shortdescription']).'","'.$item['status'].'","'.$item['intId'].'","'.$item['itemtype'].'");');

}






echo "<script> alert('New Product')</script>";

}
$item_que=mysqli_query($conn,'SELECT * FROM items WHERE pdt_id="'.$req['intItemId'].'"');
$item =mysqli_fetch_array($item_que);






/*
echo "<script> alert('".$itemid."')</script>";




echo "<script> alert('".$count."')</script>";*/


$count=count($_POST['imeiid']);
$nos=0;
for($i=0;$i<$count;$i++)
{
$imei=$_POST['imeiid'][$i];

/*echo "<script> alert('".$imei."')</script>";*/

if($imei!="")
{

$order_qty=mysqli_query($conn,"INSERT INTO `itemdetails` ( `itmId`, `itmname`,`itmimei`,`itmpurId`) VALUES('".$req['intItemId']."', '".$item['itemname']."','$imei', '$orderid')");



$del=mysqli_query($con,"DELETE FROM `itemdetails` WHERE itmimei = '".$imei."'");




$nos++;
}



}

if($_POST['imeiid']=="")
{

$nos=$_POST['itemqty'];



}





$items_qty=mysqli_query($conn,"UPDATE items SET qty=qty+'$nos' WHERE intId='".$item['intId']."';");

echo "UPDATE items SET qty=qty+'$nos' WHERE intId='".$item['intId']."';";





$sql = "UPDATE purchase SET vartotal=vartotal+$nos WHERE intId='$itemid'; "; 
  $result = mysqli_query($conn,$sql) or die(mysqli_error());

//Update In Pacific ERP and Get Product Details

$sql2 = "UPDATE purchase_requests SET vartotal=vartotal+$nos WHERE intId='$itemid'; "; 
  $result2 = mysqli_query($con,$sql2) or die(mysqli_error());

/*echo $sql = "UPDATE purchase SET vartotal=vartotal+$nos WHERE intId='$itemid'; "; */


$request=mysqli_query($conn,'SELECT * FROM purchase WHERE intId="'.$itemid.'"');

$req =mysqli_fetch_array($request);


if($req['approve_qty']==$req['vartotal'])
{

$sql = "UPDATE purchase SET status='4' WHERE intId='$itemid'; "; 
  $result = mysqli_query($conn,$sql) or die(mysqli_error());





//Update In Pacific ERP and Get Product Details

$sql2 = "UPDATE purchase_requests SET status='4' WHERE intId='$itemid'; "; 
  $result2 = mysqli_query($con,$sql2) or die(mysqli_error());
}


    header("Location:stockaccept.php");

}


/*echo "<script> alert('".$itemid."')</script>";
echo "<script> alert('".$orderid."')</script>";*/

$order_qty=mysqli_query($conn,'SELECT * FROM purchase WHERE intId ="'.$itemid.'";');

$oqty=mysqli_fetch_array($order_qty);

/*echo "<script> alert('".$oqty['approve_qty']."')</script>";*/
?>
    <link rel="stylesheet" href="../global/vendor/intro-js/introjs.css">
   
<!-- Page -->
<div class="page">

<div class="page-content container-fluid">

  <div class="page-header">
    <h1 class="page-title">IMEI Number Entry</h1>


  </div>
  <form method="POST" >
<div class="page">


  <div class="page-content container-fluid">
 <div class="example-wrap">
                <h4 class="example-title">Order Id - <?php echo $orderid; ?></h4>
  
                  <div class="example table-responsive">
                    <table class="table">
                      <thead>
<?php  

$item_type=mysqli_query($con,'SELECT * FROM items WHERE intId ="'.$oqty['intItemId'].'";');

$ite_type=mysqli_fetch_array($item_type);


if($ite_type['itemtype']=="accessories")
{
?>
 <tr>
                          <th>#</th>
                          <th>Product Name</th>
                          <th>Qty</th>
                          
                        </tr>
                           </thead>
                      <tbody>

 <tr>
                          <td><?php echo 1;?></td>
                          <td><?php echo $ite_type['itemname'];?></td>
                          <td><input type="text" class="form-control"  name="itemqty" id="itemqty" value="<?php echo $oqty['approve_qty']; ?>"></td>
                          <input type="hidden" name="typeofitem" value="Access">
                        </tr>
                    




<?php
}
else
{
?>

                        <tr>
                          <th>#</th>
                          <th>Product Name</th>
                          <th>IMEI</th>
                          
                        </tr>
                           </thead>
                      <tbody>
<?php

?>
                   

<?php



for($i=0;$i<$oqty['approve_qty']-$oqty['vartotal'];$i++)
{

$item_det=mysqli_query($con,'SELECT * FROM items WHERE intId ="'.$oqty['intItemId'].'";');

$ite=mysqli_fetch_array($item_det);

	?>

                        <tr>
                          <td><?php echo $i+1;?></td>
                          <td><?php echo $ite['itemname'];?></td>
                          <td><input type="text" class="itmserialkey form-control"  name="imeiid[]" id="imei<?php echo $i;?>" test-data="<?php echo $i;?>" pid-data ="<?php echo $ite['intId'];?>" onkeydown="nextline(event)"></td>
                          <input type="hidden" class="dos" value="<?php echo $i;?>">
                        </tr>
                    
           

<!-- onkeypress="te4st_function(this.value,$(this).attr('id'),event);" -->
<?php

}
  }
?>


                      </tbody>
                    </table>
                  </div>
                </div>
       <button type="submit" name="submit" value="submit" class="btn btn-animate btn-animate-vertical btn-success">
                    <span><i class="icon wb-dropleft" aria-hidden="true"></i>Save to Inventory</span>
                  </button>

</form>
</div>
</div>
</div>
 <link rel="stylesheet" href="../global/vendor/animsition/animsition.css">
    <link rel="stylesheet" href="../global/vendor/asscrollable/asScrollable.css">
    <link rel="stylesheet" href="../global/vendor/switchery/switchery.css">
    <link rel="stylesheet" href="../global/vendor/intro-js/introjs.css">
    <link rel="stylesheet" href="../global/vendor/slidepanel/slidePanel.css">
    <link rel="stylesheet" href="../global/vendor/flag-icon-css/flag-icon.css">
        <link rel="stylesheet" href="../assets/examples/css/tables/basic.css">

    <!-- Footer -->
       <!-- Core  -->
    <script src="../global/vendor/babel-external-helpers/babel-external-helpers.js"></script>
    <script src="../global/vendor/jquery/jquery.js"></script>
    <script src="../global/vendor/popper-js/umd/popper.min.js"></script>
    <script src="../global/vendor/bootstrap/bootstrap.js"></script>
    <script src="../global/vendor/animsition/animsition.js"></script>
    <script src="../global/vendor/mousewheel/jquery.mousewheel.js"></script>
    <script src="../global/vendor/asscrollbar/jquery-asScrollbar.js"></script>
    <script src="../global/vendor/asscrollable/jquery-asScrollable.js"></script>
    <script src="../global/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>
    
 
    <!-- Scripts -->
    <script src="../global/js/Component.js"></script>
    <script src="../global/js/Plugin.js"></script>
    <script src="../global/js/Base.js"></script>
    <script src="../global/js/Config.js"></script>
     
    
    <!-- Page -->
    <script src="../assets/js/Site.js"></script> 
    <script src="../global/js/Plugin/switchery.js"></script>
        <script src="../global/js/Plugin/peity.js"></script>
        <script src="../global/js/Plugin/asselectable.js"></script>
        <script src="../global/js/Plugin/selectable.js"></script>
        <script src="../global/js/Plugin/table.js"></script>
        <script src="../global/js/Plugin/asscrollable.js"></script>
    
        <script src="../assets/examples/js/charts/peity.js"></script>
<?php include '../inc/page_footer.php';  ?>

 <script type="text/javascript" src="../assets/js/jquery.scannerdetection.js"></script>
<script>

      $(".itmserialkey").scannerDetection({

timeBeforeScanTest: 200, // wait for the next character for upto 200ms

startChar: [120], // Prefix character for the cabled scanner (OPL6845R)

endChar: [13], // be sure the scan is complete if key 13 (enter) is detected

avgTimeByChar: 40, // it's not a barcode if a character takes longer than 40ms

onComplete: function(barcode){  


var x=$(this).attr('id');

var y=$(this).attr('pid-data');

var z=$(this).attr('test-data');

/*
$(this).next('input').focus();*/
/*alert(x);*/
// $("#ajax_response").

/*

var row = $(this).closest('tr').val();*/

/*alert(y);*/
/*return false;*/

te4st_function(barcode,x,y,z);

  } // main callback function






});

  </script>


<script>

function nextline(value)
{


/*alert(val.keyCode);*/

if(value.keyCode==13||value.which==9)
{
var x=event.target.id;


var barcode=$("#"+x).val();

var z=$("#"+x).attr('test-data');



var y=$("#"+x).attr('pid-data');

/*alert(x);*/
/*alert(z);*/
/*alert(barcode);*/
/*alert(y);*/




  value.preventDefault();


  te4st_function(barcode,x,y,z);
}


}

</script>



  <script>
/*.change(


*/
function te4st_function(val,ids,tpe,datase){

/*if(tpe=="bar")
{*/
   var id =ids ;
    var is=val;

/*}*/
/*    else
    {



if(tpe.which === 13)
{


  var id=ids;
 var is=val;

  tpe.preventDefault(); 
}
else
{
  return false;
}



    }
*/
/*alert(id);
*/
/*  var is=$("#"+id).val();*/

 
/*  alert(is);*/







$.ajax({
  'async': false,
  type: "POST",
      url: "check_item.php",
        data:{id: is,pid:tpe},
        dataType: "json",
      success: function(data){
/*alert(data);
*/
if(data.values=="False")
{

datase=parseInt(datase)+1;

$("#imei"+datase).focus();


}
else if(data.values=="Mismatch")
{
    alert("Wrong IMEI Please Check.");
$("#"+id).val("");
$("#"+id).focus();
}
else
{
  alert("IMEI Aleready in DB");
$("#"+id).val("");
$("#"+id).focus();
}


/*alert(bc);*/

/*alert(data.qty);*/
/* qty = data.qty;
 price=data.price;
 aftdis=price-discount;*/
/*alert(price);*/

/*alert(barcode);*/
  /*console.log(barcode); */

           }

       });

}

</script>
