 <?php 
 ob_start();
 error_reporting(1);
include '../inc/dbconnect.php';
include '../inc/page_head.php';
 include '../inc/page_navi.php';
include '../inc/page_sidebar.php';   
include '../inc/function.php';

?> 

<?php
/*echo "whattttt?????";
die;
*/

$curdate=date('Y-m-d');

$check=mysqli_query($conn,'SELECT * FROM storestats WHERE ent_date = "'.$curdate.'" AND close_time ="0" ');


if(mysqli_num_rows($check)==0)
{
  $stat="OOPs! Counter Closed";

echo "<script> alert('".$stat."')</script>";

echo '<script>window.location.href = "till.php"</script>';
}


$data=new pacific;
/*echo "<script> alert('".$_POST['submit']."')</script>";*/
if(isset($_POST['submit'])){







/*die;*/
/*echo "<script> alert('".count($_POST['proid'])."')</script>";
echo "<script> alert('".count($_POST['cust_name'])."')</script>";*/



$notes=$_POST['note_hide'];
$discount=$_POST['doc'];
    $pay_type=$_POST['payment_type'];
$billid=$data->gensoid();



$custnmae=mysqli_query($conn,'SELECT * FROM customer WHERE cus_contact_name ="'.$_POST['cust_name'].'" LIMIT 1 ;');

$cust=mysqli_fetch_array($custnmae);
$cust_id=$cust['cus_id'];
/*
echo "<script> alert('".$cust_id."')</script>";
die;*/
/*
echo "<script> alert('".$_SESSION['sessionid']."')</script>";

echo "<script> alert('".$billid."')</script>";

echo "<script> alert('".$pay_type."')</script>";
echo "<script> alert('".$discount."')</script>";


echo "<script> alert('".count($_POST['proid'])."')</script>";*/



if(count($_POST['proid']) > 0 && $cust_id!=0)
{

$bill_total=0;

        
    for($i=0;$i<count($_POST['proid']);$i++)
    {

      $proid  = $_POST['proid'][$i];
      $pdtdis = $_POST['pqty'][$i];
      $purqty = 1;
      $itmtot = $_POST['itemtot'][$i];
$typeofsale=$_POST['typoes'][$i];



$items=mysqli_query($conn,'SELECT * FROM items WHERE intId="'.$proid.'";');

$ite=mysqli_fetch_array($items);

$upd_qty=$ite['qty']-$purqty;


$items_det=mysqli_query($conn,'SELECT * FROM itemdetails WHERE itmpurorderId ="" AND itmId="'.$ite['pdt_id'].'"LIMIT 1 ;');

$ite_det=mysqli_fetch_array($items_det);

/*echo "<script> alert('".$ite_det['itmimei']."')</script>";*/

$val='SELECT * FROM itemdetails WHERE itmpurorderId ="" AND itmId="'.$ite['pdt_id'].'"LIMIT 1 ;';
/*echo "<script> alert('".$val."')</script>";*/
/*echo "<script> alert('".$ite_det['itmimei']."')</script>";
die;*/


$tot_pdt_dis=$pdtdis*$purqty;




if($typeofsale=="")
{
$imei=$ite_det['itmimei'];
$sale_type=$ite['category'];
}
elseif($_POST['tpesale']=="Resale")
{
  $imei=$ite_det['itmimei'];
$sale_type=$ite['category'];
}
elseif($_POST['tpesale']=="Accessories")
{
   $imei=$ite_det['itmimei'];
$sale_type=$ite['category'];
}

  

/*echo "<script> alert('".$imei."')</script>";

echo "<script> alert('".$sale_type."')</script>";*/


 $salesitem=array(
                "intOrderId"     =>     $billid,    
                "intCusId"       =>     mysqli_real_escape_string($data->con, $cust_id),
                /*"intCompId"      =>     mysqli_real_escape_string($data->con, $_POST['purcompany']),*/
                "taxid"          =>     mysqli_real_escape_string($data->con, "0"),
                "discount"       =>     mysqli_real_escape_string($data->con, $tot_pdt_dis),
                "payterms"       =>     mysqli_real_escape_string($data->con, $pay_type),
                "intItemId"      =>     mysqli_real_escape_string($data->con, $proid),
                "itemqty"        =>     mysqli_real_escape_string($data->con, $purqty), 
                "itemprice"      =>     mysqli_real_escape_string($data->con, $ite['price']),
                "itemname"       =>     mysqli_real_escape_string($data->con, $ite['itemname']),
                "itemimei"       =>     mysqli_real_escape_string($data->con, $imei), 
                "salesnotes"     =>     mysqli_real_escape_string($data->con, $notes),
                "total_discount" =>     mysqli_real_escape_string($data->con, $discount),
                "item_total"     =>     mysqli_real_escape_string($data->con, $itmtot),
                "sale_type"     =>     mysqli_real_escape_string($data->con, $sale_type),                         
                "saledate"       =>     $curdate
           );  
/* print_r($salesitem); */
       
         $insid = $data->insert('sales', $salesitem);         

$bill_total+=$itmtot;

/*echo "<script> alert('".$insid."')</script>";*/


  $update_inv_id = array(
      "intId"      =>    mysqli_real_escape_string($data->con, $proid)
    );

      $update_inv = array(
        "qty" =>     mysqli_real_escape_string($data->con,$upd_qty)
      );

      $update_inventory = $data->update('items', $update_inv,$update_inv_id);

if($_POST['tpesale']!="Accessories")
{

  $update_imei_id = array(
      "intId"      =>    mysqli_real_escape_string($data->con, $ite_det['intId'])
    );

      $update_imei = array(
        "itmpurorderId" =>     mysqli_real_escape_string($data->con,"Sold")
      );

      $updateimei = $data->update('itemdetails', $update_imei,$update_imei_id);
 

}

    }




$bill_total-=$discount;
if($pay_type=="Cash")
{
$salesitem=array( 
                "ent_date"       =>     mysqli_real_escape_string($data->con, $curdate),
                "amount"         =>     mysqli_real_escape_string($data->con, $bill_total),
                "invoice"        =>     mysqli_real_escape_string($data->con, $billid), 
                "description"    =>     mysqli_real_escape_string($data->con, "Sales")
           );  
         $insids = $data->insert('till', $salesitem); 
}

   /* echo '<script>window.location.href = "salesorder.php?flag=succ&type=sales"</script>';*/
     

/*     
    header("Location:salesorder.php?flag=succ&type=sales");*/


     echo '<script>window.location.href = "salesorderview.php?print_id='.$insid.'"</script>';
  }
else
{

echo "<script> alert('Please Give Valid Entries.')</script>";

}


}







?>





 <link rel="stylesheet" href="../global/vendor/select2/select2.css"> 
        <link rel="stylesheet" href="../global/vendor/bootstrap-select/bootstrap-select.css"> 
        <link rel="stylesheet" href="../assets/examples/css/forms/advanced.css">
        <link rel="stylesheet" href="../assets/examples/css/uikit/modals.css">

        <link rel="stylesheet" href="../global/css/bootstrap.min.css">
    <link rel="stylesheet" href="../global/css/bootstrap-extend.min.css">
    <link rel="stylesheet" href="../assets/css/site.min.css">

    <link rel="stylesheet" href="../global/vendor/intro-js/introjs.css">
    <link rel="stylesheet" href="../global/vendor/slidepanel/slidePanel.css">
    <link rel="stylesheet" href="../global/vendor/flag-icon-css/flag-icon.css">
        <link rel="stylesheet" href="../global/vendor/webui-popover/webui-popover.css">
        <link rel="stylesheet" href="../global/vendor/toolbar/toolbar.css">

        <link rel="apple-touch-icon" href="../assets/images/apple-touch-icon.png">
    <link rel="shortcut icon" href="../assets/images/favicon.ico">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="../global/css/bootstrap.min.css">
    <link rel="stylesheet" href="../global/css/bootstrap-extend.min.css">
    <link rel="stylesheet" href="../assets/css/site.min.css">
    
    <!-- Plugins -->
    <link rel="stylesheet" href="../global/vendor/animsition/animsition.css">
    <link rel="stylesheet" href="../global/vendor/asscrollable/asScrollable.css">
    <link rel="stylesheet" href="../global/vendor/switchery/switchery.css">
    <link rel="stylesheet" href="../global/vendor/intro-js/introjs.css">
    <link rel="stylesheet" href="../global/vendor/slidepanel/slidePanel.css">
    <link rel="stylesheet" href="../global/vendor/flag-icon-css/flag-icon.css">
        <link rel="stylesheet" href="../global/vendor/magnific-popup/magnific-popup.css">
        <link rel="stylesheet" href="../assets/examples/css/advanced/lightbox.css">
    
    
    <!-- Fonts -->
    

 <style type="text/css">
   .modal.show .modal-dialog{ background: #fff; }
   .discamt{float: left;width: 70px;padding: 0px 4px;border: none;height: 23px;}
   .discount{float: left; font-weight: bold;color:#000;}
   .wb-close{float: left;width: 20px;color: red;}
   figcaption.overlay-panel:hover{cursor: pointer;}
   /*#upd-row{float: left;width:100%;overflow-y:auto;height: 340px;}*/

.site-menubar-light .site-menu-item a {
    color: rgba(0, 0, 0, 0.9) !important;
}
.table td, .table th {
    color: black !important;

}

.step-title {
 
    color: #000000 !important;
}

.nav-tabs .nav-link {
    color: #000000 !important;
}


 </style>





















<div class="page">


  <div class="page-content container-fluid">
    <form method="POST" action="" name="companyform" id="companynames" enctype="multipart/form-data" class="form-horizontal form-bordered">
    <div class="row">

       <div class="col-lg-6">
     <div class="panel">
     <div class="panel-body panel-collapse"> 
                <!-- Example Tabs -->
               
            <!-- <div class="btn-group" role="group">
            <a class="btn" href="javascript:void(0)" role="button"><i class="icon wb-search" aria-hidden="true"></i></a>
              <a class="btn" href="javascript:void(0)" role="button"><i class="icon fa-barcode" aria-hidden="true"></i></i></a> 
              
            </div> -->
            <div class="input-search input-search-dark" style="margin:0 !important;max-width: 100%;border-radius: 0px !important;">
              <i class="input-search-icon wb-search" aria-hidden="true"></i>
              <i class="input-search-icon  icon fa-barcode wb-search" aria-hidden="true" style="padding-left: 30px;"></i>
              <input class="form-control" id="keyword" name="search" placeholder="Start typing product name or scanning..." type="text" style="padding-left:5.073rem" autocomplete="off">
              <button type="button" class="input-search-close icon wb-close" aria-label="Close" onclick="emptysearch()"></button>


<script>
function emptysearch()
{
$("#keyword").val("");


}


</script>


<div id="ajax_response"></div>
                          <div class="clearfix"></div>

            </div>
<div  id="category_div">
                    </div>
          
       <input type="hidden" id="dblemge" value="">
              <div class="example-wrap m-xl-0"> 
               <div class="panel-body" id="subcat" style="display: none;" >
                 <ul class="blocks blocks-100 blocks-xxl-5 blocks-lg-4 blocks-md-3 blocks-sm-2"
            data-plugin="animateList" data-child=">li"  >
               </ul> 
                 </div>


               <div class="panel-body" id="coldisp" style="display: none;" >
                 <ul class="blocks blocks-100 blocks-xxl-5 blocks-lg-4 blocks-md-3 blocks-sm-2"
            data-plugin="animateList" data-child=">li"  >
               </ul> 
                 </div>
               <div class="panel-body" id="coldisp2" style="display: none;" >
                 <ul class="blocks blocks-100 blocks-xxl-5 blocks-lg-4 blocks-md-3 blocks-sm-2"
            data-plugin="animateList" data-child=">li"  >
               </ul> 
                 </div>

                  <div class="nav-tabs-horizontal" data-plugin="tabs" id="prodtabs">
                    <ul class="nav nav-tabs nav-tabs-line" role="tablist">
                      <li class="nav-item" onclick="highlit(1);" role="presentation"><a class="nav-link active" data-toggle="tab" href="#exampleTabsLineOne"
                          aria-controls="exampleTabsLineOne" role="tab">Mobiles</a></li>
                      <li class="nav-item" onclick="highlit(2);" role="presentation"><a class="nav-link" data-toggle="tab" href="#exampleTabsLineTwo"
                          aria-controls="exampleTabsLineTwo" role="tab">Accessories</a></li>
                        <li class="nav-item" onclick="highlit(3);" role="presentation"><a class="nav-link" data-toggle="tab" href="#exampleTabsLineOne"
                          aria-controls="exampleTabsLineOne" role="tab">Resale</a></li>
                       
                    </ul>

<script>
function highlit(val)
{




if(val==3)
{
$("#tpesale").val("Resale");
}
else if(val==2)
{
$("#tpesale").val("Accessories");
}
else
{
$("#tpesale").val("");
}

}

</script>


                    <div class="tab-content pt-20">
                      <div class="tab-pane active" id="exampleTabsLineOne" role="tabpanel">
                        <div class="projects-wrap">
                        
<input type="hidden" name="tpesale" id="tpesale" value="">
          <ul id="parentcat" class="blocks blocks-100 blocks-xxl-5 blocks-lg-4 blocks-md-3 blocks-sm-2"
            data-plugin="animateList" data-child=">li" >
<?php

$acc_chk=mysqli_query($conn,'SELECT DISTINCT bmodel_brandid FROM brandmodel WHERE bmodel_desc NOT LIKE "%Accessories%"');

while($chk=mysqli_fetch_array($acc_chk))
{
$brands=mysqli_query($conn,'SELECT * FROM brand WHERE varBrandName NOT LIKE "%Accessories%" AND intId="'.$chk['bmodel_brandid'].'"');

while($brd=mysqli_fetch_array($brands))
{
?>

            <li>
              <div class="panel">
                <figure class="overlay overlay-hover animation-hover">
                  <img class="caption-figure overlay-figure" src="../global/images/<?php echo $brd['bimg'];  ?>" onerror=this.src="apple.png" height="50" width="42">
                  <figcaption class="overlay-panel overlay-background overlay-fade text-center vertical-align" id="parcat" data-value="<?php echo $brd['intId']; ?>">
                  <?php echo $brd['varBrandName']; ?>                
                  </figcaption>
                </figure>
                <div class="text-truncate "> <center><?php echo $brd['varBrandName']; ?></center></div>
              </div>
            </li>
           <li>
<?php
}
}
?>

             <!--  <div class="panel">
                <figure class="overlay overlay-hover animation-hover">
                  <img class="caption-figure overlay-figure" src="../global/photos/placeholder.png">
                  <figcaption class="overlay-panel overlay-background overlay-fade text-center vertical-align" id="parcat" data-value="2" >
                     Apple 
                  
                  </figcaption>
                </figure>
                <div class="text-truncate "> <center>Samsung</center></div>
              </div> -->
            </li>
             
          </ul>
        </div>
                      </div>

 <div class="tab-pane" id="exampleTabsLineTwo" role="tabpanel">
          <div class="projects-wrap"  >

         

          <ul id="" class="blocks blocks-100 blocks-xxl-5 blocks-lg-4 blocks-md-3 blocks-sm-2"
            data-plugin="animateList" data-child=">li">
<?php

$categs=array();

$categor=mysqli_query($conn,'SELECT * FROM brandmodel WHERE bmodel_desc="Accessories"');
while($cat=mysqli_fetch_array($categor))
{

$bnrand=mysqli_query($conn,'SELECT * FROM brand WHERE intId = "'.$cat['bmodel_brandid'].'"');

if(mysqli_num_rows($bnrand)!=0)
{
if(in_array($cat['bmodel_name'],$categs)==0)

{
  array_push($categs,$cat['bmodel_name']);

  print_r($categs);
/*
$itemdet=mysqli_query($conn,'SELECT * FROM items WHERE itemtype = "Accessories"');

while($accdet=mysqli_fetch_array($itemdet))
{

$brand=mysqli_query($conn,'SELECT * FROM brand WHERE intId="'.$accdet['brand'].'"');

$brd=mysqli_fetch_array($brand);

$colour=mysqli_query($conn,'SELECT * FROM colour WHERE colour_id="'.$accdet['color'].'"');

$col=mysqli_fetch_array($colour);*/
?>

  <!--       <li value="<?php echo $accdet['intId'];  ?>" onclick="accs(this.value)">
              <div class="panel">
                <figure class="overlay overlay-hover animation-hover">
                  <img class="caption-figure overlay-figure" src="../global/images/apple-logo.png">
                  <figcaption class="overlay-panel overlay-background overlay-fade text-center vertical-align" id="access" data-value="<?php echo $accdet['intId'];  ?>">
                           <?php echo $accdet['itemname'].$col['colour_name'];  ?>             
                  </figcaption>
                </figure>
                <div class="text-truncate "> <center><?php echo $accdet['itemname'].$col['colour_name'];  ?></center></div>
              </div>
            </li> -->

<li class="moose" value="<?php echo $cat['bmodel_id'];?>" onclick="cate(this.value)">
              <div class="panel">
                <figure class="overlay overlay-hover animation-hover">
                  <img class="caption-figure overlay-figure" src="../global/images/<?php echo $cat['bimg'];  ?>" onerror=this.src="apple.png" height="50" width="42">
                  <figcaption class="overlay-panel overlay-background overlay-fade text-center vertical-align" id="access" data-value="<?php echo $cat['bmodel_id'];  ?>">
                           <?php echo $cat['bmodel_name'];  ?>             
                  </figcaption>
                </figure>
                <div class="text-truncate "> <center><?php echo $cat['bmodel_name']  ?></center></div>
              </div>
            </li>



<?php
}
}
}
?>





          <!--      
     
           <li>
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
            </li>-->
          </ul>
        </div>
                      </div> 
                     </div>
                  </div>
                </div>
          

        <!-- <nav>
          <ul class="pagination pagination-no-border">
            <li class="disabled page-item">
              <a class="page-link" href="javascript:void(0)" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
              </a>
            </li>
            <li class="active page-item"><a class="page-link" href="javascript:void(0)">1 <span class="sr-only">(current)</span></a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0)">5</a></li>
            <li class="page-item">
              <a class="page-link" href="javascript:void(0)" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
              </a>
            </li>
          </ul>
        </nav> -->
                    </div>
              
               
                <!-- END Basic Form Elements Content -->
            
            <!-- END Basic Form Elements Block -->
        </div>
        
               
                <!-- END Basic Form Elements Content -->
            
            <!-- END Basic Form Elements Block -->
        </div>
         <div class="col-lg-6">
  <div class="panel top-bar" style="height: 400px; margin-bottom: 0px">
            <!-- Basic Form Elements Block -->
            <div class="panel-body panel-collapse" style="  padding-bottom: 0px">
                <div class="example">
                    <div class="steps row steps-xs">
<!-- 
                      <div class="step col-md-4">
                         
                         <div class="example" style="  margin: 0px " id="cust_tab" >
                    <select data-plugin="selectpicker" id="cust_name" name="cust_name"  >
                    <?php


$customer=mysqli_query($conn,'SELECT * FROM customer');
echo'<option value="0">Select Customer</option>';
while($cust=mysqli_fetch_array($customer))
{
?>

                       <option value="<?php echo $cust['cus_id'] ?>"><?php echo $cust['cus_contact_name'] ?></option>
                      


<?php 
}
?>





                    </select>
                  </div>
                   
                      </div> -->

 <div class="step col-md-4">
  <input type="text" class="form-control" id="cust_name" name="cust_name" value="" placeholder="Customer Name" autocomplete="off">
<div id="customer_names"></div>
</div>







                      <div class="step col-md-4 current" data-target="#exampleFormModal" data-toggle="modal" onclick="validate_cust()">
                        <span class="step-icon icon wb-user-add" aria-hidden="true"></span>
                        <div class="step-desc">
                          <span class="step-title">Add Customer</span>
                        </div>
                      </div>
                      <div class="step col-md-4" data-target="#exampleFormModal1" data-toggle="modal" onclick="note_valid()">
                        <span class="step-icon icon wb-time" aria-hidden="true"></span>
                        <div class="step-desc">
                          <span class="step-title">Add Notes</span>
                        </div>
                      </div>
                      <input type="hidden" id="note_hide" name="note_hide" value="">
                    </div>
                  </div>
    
                               
           </div>


             
           <div id="dtatab" class="example" style=" ">
                <div class="table-responsive">
                  <div style="height:390px; overflow-y: scroll;">
                  <table class="table table-hover" data-role="content" data-plugin="selectable" data-row-selectable="true" >
                    <thead class="bg-blue-grey-100">
                      <tr>                        
                        <td>
                          Items
                        </td>
                      <!--   <th>
                          Unit Price
                        </th> -->
                        <td>
                    <!--       Quantity -->IMEI
                        </td>
<!--                         <th style="width: 100px">
                          Discount
                        </th> -->
                        <td style="width: 100px">
                          Total
                        </td>
                         <td>
                          Action
                        </td>                       
                      </tr>
                    </thead>
                    <tbody id="upd-row">
                      
                
                       
                     
                    </tbody>

                  </table>
              </div>


<script>
function testing()
{
$('#dtatab tr').each(function () {
    var price = $(this).find("td:nth-child(3)").text()
/*    var quantity = $(this).find("td:nth-child(4) input").val()
    console.log( quantity + "   " + price);
*/
     
  /*  alert(quantity);*/
});
}
</script>
                </div>
                
              </div>
                  
            </div>
            
            <div class="row row-lg discountsys" style="margin:0 auto;">
             <div class="panel " style="width: 100%">
              <table class="table">
                 
                <tbody>
                 <tfoot class="hidden-xs hidden-sm hidden-md">
                <tr class="active">
                    <td width="200" class="text-left" >Number of Products ( <span class="items-number" id="prodnos">0</span> )<input type="hidden" id="prodnos_h" value="0"></td>
                    <td width="150" class="text-right hidden-xs"></td>
                    <td width="150" class="text-right" >Sub Total</td>
                    <td width="90" class="text-right" >$ <span class="cart-value" id="subtotal">0.00 </span><input type="hidden" id="subtotal_h" value="0"></td>
                </tr>

                <tr class="success">
                    <td class="text-right"></td>
                    <td class="text-right"></td>
                    <td class="text-right"><strong>
                        Net Price                        </strong></td>
                    <td class="text-right">$ <span class="cart-topay pull-right" id="netprice">0.00 </span></td>
                </tr>
<?php
$tax_que=mysqli_query($conn,'SELECT * FROM tax WHERE tax_id="6";');
$tax=mysqli_fetch_array($tax_que);



?>
<input type="hidden" value="<?php echo $tax['tax_des'];?>" id="taxrates">

                                <tr class="success">
                    <td class="text-right"></td>
                    <td class="text-right"></td>
                    <td class="text-right"><strong>
                        Tax Rate at <?php echo $tax['tax_des'];?>%                        </strong></td>
                    <td class="text-right">$ <span class="cart-topay pull-right" id="taxrate">0.00 </span></td>
                </tr>

                <tr class="active">
                    <td>
                                        </td>
                    <td></td>
                    <td class="text-right cart-discount-notice-area">Discount on Cart</td>
                    <td class="text-right cart-discount-remove-wrapper">$<span class="cart-discount pull-right" id="disconcar"> 0.00 </span></td>
              
                </tr>

                                 <input type="hidden" value="" id="doc" name="doc">    
                
                <tr class="success">
                    <td class="text-right"></td>
                    <td class="text-right"></td>
                    <td class="text-right"><strong>
                        Net Payable                        </strong></td>
                    <td class="text-right">$ <span class="cart-topay pull-right" id="netpay">0.00 </span></td>
                </tr>
            </tfoot>
                </tbody>
              </table>
              <table class="table">
                <tr><td>
                       <div class="col-lg-12">
                <!-- Example Modal Popup -->
                
                  
                  <div class="example bottom_section">
                    <a class="popup-modal btn btn-primary btn-outline" href="#exampleModal">Discount</a>

                    <div class="mfp-hide lightbox-block" id="exampleModal">
                      
                      
              <div class="nav-tabs-horizontal nav-tabs-inverse" data-plugin="tabs">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item" role="presentation">
                    <a class="nav-link active" data-toggle="tab" href="#exampleTabsInverseOne" aria-controls="exampleTabsInverseOne"
                      role="tab">
                  Percentage
                </a>
                  </li>
                  <li class="nav-item" role="presentation">
                    <a class="nav-link" data-toggle="tab" href="#exampleTabsInverseTwo" aria-controls="exampleTabsInverseTwo"
                      role="tab">
                  Dollar
                </a>
                  </li>
                </ul>
                   <div class="tab-content p-20">
                  <div class="tab-pane active" id="exampleTabsInverseOne" role="tabpanel">
                    <input type="text" class="form-control" id="dis_per" name="touchSpinPostfix" data-plugin="TouchSpin"
                      data-min="0" data-max="100" data-step="0.1" data-decimals="2"
                      data-boostat="5" data-maxboostedstep="10" data-postfix="%"
                      value="0" />
                      <br>
                      <button class="popup-modal-dismiss btn btn-primary btn-outline" data-dismiss="modal-dismiss" type="button" onclick="netdiscount(1);">Apply Discount</button>
                      <p style="float: right;"><a class="popup-modal-dismiss btn btn-primary btn-outline" onclick="resetdisc();" href="javascript:void(0)">Cancel</a></p>
                  </div>
                  <input type="hidden" id="tot_sum" value="">
                  <input type="hidden" id="tot_disc" value="">
                  <div class="tab-pane" id="exampleTabsInverseTwo" role="tabpanel">
                    <input type="text" class="form-control" id="dis_amt" name="touchSpinPrefix" data-plugin="TouchSpin"
                      data-min="0" data-max="1000000000" data-stepinterval="50"
                      data-maxboostedstep="10000000" data-prefix="$" value="0" />
                      <br>
                      <button class="popup-modal-dismiss btn btn-primary btn-outline" data-dismiss="modal-dismiss" type="button" onclick="netdiscount(2);">Apply Discount</button>
                      <p style="float: right;"><a class="popup-modal-dismiss btn btn-primary btn-outline" onclick="resetdisc(
                      );" href="javascript:void(0)">Cancel</a></p>
                  </div>
                </div>
              </div>
            </div>








 <div class="step col-md-4">
                         
                         <div class="example" style="  margin: 0px " id="pay_tab" >
                    <select data-plugin="selectpicker" name="payment_type" value="" >

                    <option value="Cash">Cash</option>

                    <option value="Card">Card</option>
<!--                     <?php 


$customer=mysqli_query($conn,'SELECT * FROM customer');
echo'<option value="0">Select Customer</option>';
while($cust=mysqli_fetch_array($customer))
{
?> -->

                     <!--   <option value="<?php echo $cust['cus_id'] ?>"><?php echo $cust['cus_contact_name'] ?></option> -->
                      


<!-- <?php 
}
?> -->



<!--   <option >Mustard</option> -->
                    <!--   <option>Ketchup</option>
                     <option>Relish</option> -->

                    </select>
                  </div>
                   
                  </div>
<!-- 
                 <div class=" modal fade lightbox-block" id="colorcap" style="height:300px" >
                     <div class="panel-body"> 
                        <div class="nav-tabs-horizontal nav-tabs-inverse" data-plugin="tabs">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item" role="presentation">
                    <a class="nav-link active" data-toggle="tab" href="#exampleTabsInverseOne" aria-controls="exampleTabsInverseOne"
                      role="tab">
                  Product Details
                </a>
                  </li> -->


<!--                   <li class="nav-item" role="presentation">
                    <a class="nav-link" data-toggle="tab" href="#exampleTabsInverseTwo" aria-controls="exampleTabsInverseTwo"
                      role="tab">
                  Capacity
                </a>
                  </li> -->
<!--                 </ul>
                <div class="tab-content p-20">
                  <div class="tab-pane active" id="exampleTabsInverseOne" role="tabpanel">
                      <div class="example"> -->
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
<!--                          
                      <div class="step col-md-4">
                         
                         <div class="example" style="  margin: 0px " >
                    <select data-plugin="selectpicker" name="colour_name" id="product_colour"  >
                    <?php


$customer=mysqli_query($conn,'SELECT * FROM colour');
echo'<option value="0">Select Colour</option>';
while($cust=mysqli_fetch_array($customer))
{
?>

                       <option value="<?php echo $cust['colour_id'] ?>"><?php echo $cust['colour_name'] ?></option>
                      


<?php 
}
?>
 -->


<!--   <option >Mustard</option> -->
                    <!--   <option>Ketchup</option>
                     <option>Relish</option> -->

                 <!--    </select>
                  </div>
                   
                      </div>

<div id="capacitydiv">
</div>





                      </div>
                   
                  </div>

                </div>
              </div>

                      
                </div>                 

             <button class="btn btn-primary btn-outline" data-dismiss="modal" type="button">Add Discount</button>
             <a id="model-close" class="popup-modal-dismiss btn btn-primary btn-outline" href="javascript:void(0)">Close</a> 
            </div> -->

<div id="coldisp" class="modal hide"  role="dialog">



</div>
<div class="ajax_response">
<div id="testdiv" style="display:none">
</div>
</div>
</div>
            <input type="submit" name="submit" value="submit" id="subfun" class="btn btn-primary  btn-round" style="float: right"  /> 
             



                    </div>

<script>
function netdiscount(val)
{
var total=$("#subtotal").text();

var tot=parseInt(total);

var net_amt=0;
//alert(val);
  if(val==1)
  {
      var dis=$("#dis_per").val();
var pref=$("#dis_per").data("postfix");


var disc=parseInt(dis);
/*alert(disc);*/
var per=disc/100;
var diff=tot*per;
net_amt=tot-diff;

var tax=total/((10/100)+1);
var tax_diff=total-tax;






$("#netprice").text(tax);
$("#taxrate").text(tax_diff);

$("#netpay").text(net_amt);
$("#disconcar").text(diff);
$("#doc").val(diff);



  }
else{
  var dis2=$("#dis_amt").val();
var pref2=$("#dis_amt").data("prefix");
var amt=parseInt(dis2);
net_amt=tot-amt;
var diff=tot-net_amt;

var tax=total/((10/100)+1);
var tax_diff=total-tax;





/*
$("#netprice").text(tax);*/
//$("#taxrate").text(tax_diff);



$("#netpay").text(net_amt);
$("#disconcar").text(diff);
$("#doc").val(diff);
}

  


}


</script>
                  
<script>
function resetdisc()
{
  var total=$("#subtotal").text();

var tot=parseInt(total);


net_amt=tot;
var diff=0;
$("#netpay").text(net_amt);
$("#disconcar").text(diff);
$("#doc").val(diff);
}
</script>



                
                <!-- End Example Modal Popup -->
              </div>

                </td>
                </tr>
              </table>

              </table>
            </div>
               
             
              
            </div>
</div>
        </div>
       
        

    </div>
     </form>
  </div>
</div> 


                   
                       <div class="modal fade" id="exampleFormModal" aria-hidden="false" aria-labelledby="exampleFormModalLabel"
                      role="dialog" tabindex="-1">
                      <div class="modal-dialog modal-simple">
                        <form class="modal-content" name="add customer" id="addnewcusr">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span>
                            </button>
                            <h4 class="modal-title" id="exampleFormModalLabel">Add New Customer</h4>
                          </div>
                          <div class="modal-body">
                            <div class="row">
                              <div class="col-xl-4 form-group">
                                <input type="text" id="name" class="form-control" name="firstName" placeholder="Name" >
                              </div>

                              <div class="col-xl-4 form-group">
                                <input type="email" id="email" class="form-control" name="email" placeholder="Your Email" >
                              </div>
                             <div class="col-xl-4 form-group">
                                <input type="text" id="mobile" class="form-control" name="mobile" placeholder="Mobile Number" >
                              </div>

   <div class="col-xl-12 form-group">
<textarea class="form-control" rows="5" id="address" name="address" placeholder="Address" ></textarea>
  </div>
  <div class="col-md-12 float-right">
<button class="btn btn-primary btn-outline" id="add_butt" data-dismiss="modal" type="button" onclick=" addcust();">Add Customer</button>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
  <!--              
<script>
function validate_cust()
{
	 var name=$("#name").val();
  var email=$("#email").val();
  var mobile=$("#mobile").val();
  var addr=$("#address").val();


  if($.trim(name)==""||$.trim(email)==""||$.trim(mobile)==""||$.trim(addr)=="")
{
	
	$("#add_butt").prop('disabled', true);
}
else
{
	
	$("#add_butt").prop('disabled', false);
}

}

</script>

 -->

<script>
function validate_cust()
{
  
  $('#addnewcusr').validate({ // initialize the plugin
        rules: {

          firstName: {
                required: true,
                minlength: 5
            },
            email: {
                required: true,
                email: true
            },
             mobile: {
              required: true,
      number: true,
      minlength:10
            }
        }



    });
}

</script>


<script>
function addcust()
{
  var name=$("#name").val();
  var email=$("#email").val();
  var mobile=$("#mobile").val();
  var addr=$("#address").val();

/*alert(name);
alert(email);
alert(mobile);
alert(addr);
*/

var act="AddCus";
$.ajax({
  'async': false,
  type: "POST",
  url: "possale_functions.php",
  data:{nme : name,mail : email,mob : mobile,address: addr,action:act},
/*   dataType: "json",*/
  success: function(data){
$("#cust_name").val(name);
/*    (data.cus_name);*/
/*
  $("#cust_tab").html(data);  */ 
/*alert(data);*/


           }

         });



}

</script>

<script>
function normal()
{

      var act="Cusfet";
     

$.ajax({

  type: "POST",
  url: "possale_functions.php",
  data:{action:act},
  success: function(data){

/*alert(data);*/
 $("#cust_tab").html(data);

           }

         });
}

</script>



<!-- <script>
 function getdistrict() {

      var act="Cusfet";
     

$.ajax({

  type: "POST",
  url: "possale_functions.php",
  data:{action:act},
  success: function(data){

/*alert(data);*/
 $("#cust_tab").html(data);

           }

         });
    }

</script> -->



                       <div class="modal fade" id="exampleFormModal1" aria-hidden="false" aria-labelledby="exampleFormModalLabel"
                      role="dialog" tabindex="-1">
                      <div class="modal-dialog modal-simple">
                        <form class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span>
                            </button>
                            <h4 class="modal-title" id="exampleFormModalLabel">Set The Messages</h4>
                          </div>
                          <div class="modal-body">
                            <div class="row">
                              
                              <div class="col-xl-12 form-group">
                                <textarea class="form-control" name="notes" id="note" rows="5" placeholder="Type your message" onkeyup="note_valid()"></textarea>
                              </div>
                              <div class="col-md-12 float-right">
                                <button class="btn btn-primary btn-outline" data-dismiss="modal" type="button" id="note_nutt" onclick="addnotes();">Add Notes</button>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div> 
<script>
function note_valid()
{
	var note=$("#note").val();


  if($.trim(note)=="")
{
	
	$("#note_nutt").prop('disabled', true);
}
else
{
	
	$("#note_nutt").prop('disabled', false);
}




}
</script>
<script>
 function addnotes()
{
  var notes=$("#note").val();
  $("#note_hide").val(notes);

}


</script>
      
 
        <?php include '../inc/page_footer.php';  ?>
          <link rel="stylesheet" href="../global/vendor/asspinner/asSpinner.css">


        <script src="../global/vendor/asspinner/jquery-asSpinner.min.js"></script>
        <script src="../global/js/Plugin/asspinner.js"></script>


      <script src="../global/vendor/babel-external-helpers/babel-external-helpers.js"></script>
    <script src="../global/vendor/jquery/jquery.js"></script>  
     
        <script src="../global/vendor/select2/select2.full.min.js"></script>  
        <script src="../global/vendor/bootstrap-select/bootstrap-select.js"></script>  
    
    <!-- Scripts -->
    <script src="../global/js/Component.js"></script>
    <script src="../global/js/Plugin.js"></script>
    <script src="../global/js/Base.js"></script>
    <script src="../global/js/Config.js"></script>
      
    <!-- Page -->

    <script>Config.set('assets', '../assets');</script>
     

    <script src="../assets/js/Site.js"></script>  
        <script src="../global/js/Plugin/select2.js"></script>  
        <script src="../global/js/Plugin/bootstrap-select.js"></script> 
    
        <script src="../assets/examples/js/forms/advanced.js"></script>
  <script>
      (function(document, window, $){
        'use strict';
    
        var Site = window.Site;
        $(document).ready(function(){
          Site.run();
          
        });
      })(document, window, jQuery);
    </script>
    <style type="text/css">.no-padding{padding:0 !important;} .top-bar .example,.discountsys .example{ margin-top:0px; margin-bottom: 0px } 
    .bottom_section .popup-modal.btn {float:left;}
    .bottom_section .step.col-md-4 {float:left;margin-left: 10px; padding: 0px 0px !important;border-radius: 4px;/*border:1px solid #3e8ef7;*/ color: #3e8ef7 !important;}
    .bottom_section .bootstrap-select .btn-select{border:1px solid #3e8ef7;color:#3e8ef7 !important; }</style>
     <script src="../global/js/Plugin/asscrollable.js"></script>
    <script src="../global/js/Plugin/slidepanel.js"></script>
    <script src="../global/js/Plugin/switchery.js"></script>
    <script src="../global/js/Plugin/webui-popover.js"></script>
    <script src="../global/js/Plugin/toolbar.js"></script>  

    <script src="../global/vendor/switchery/switchery.js"></script>
    <script src="../global/vendor/intro-js/intro.js"></script>
    <script src="../global/vendor/screenfull/screenfull.js"></script>
    <script src="../global/vendor/slidepanel/jquery-slidePanel.js"></script>
    <script src="../global/vendor/webui-popover/jquery.webui-popover.js"></script>
    <script src="../global/vendor/toolbar/jquery.toolbar.js"></script>
    <script src="../global/vendor/babel-external-helpers/babel-external-helpers.js"></script>
    <script src="../global/vendor/popper-js/umd/popper.min.js"></script>
    <script src="../global/vendor/bootstrap/bootstrap.js"></script>
    <script src="../global/vendor/animsition/animsition.js"></script>
    <script src="../global/vendor/mousewheel/jquery.mousewheel.js"></script>
    <script src="../global/vendor/asscrollbar/jquery-asScrollbar.js"></script>
    <script src="../global/vendor/asscrollable/jquery-asScrollable.js"></script>
    <script src="../global/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>
    
    
    <script src="../global/vendor/switchery/switchery.js"></script>
    <script src="../global/vendor/intro-js/intro.js"></script>
    <script src="../global/vendor/screenfull/screenfull.js"></script>
    <script src="../global/vendor/slidepanel/jquery-slidePanel.js"></script>
    <script src="../global/vendor/webui-popover/jquery.webui-popover.min.js"></script>
    <script src="../global/vendor/bootstrap-touchspin/bootstrap-touchspin.min.js"></script>
    
     
    
    <script src="../assets/js/Section/Menubar.js"></script>
    <script src="../assets/js/Section/Sidebar.js"></script>
    <script src="../assets/js/Section/PageAside.js"></script>
    <script src="../assets/js/Plugin/menu.js"></script>
    
   
    <script src="../global/js/config/colors.js"></script>
    <script src="../assets/js/config/tour.js"></script>
    
    
   <script src="../assets/examples/js/uikit/tooltip-popover.js"></script>
   <script src="../global/vendor/babel-external-helpers/babel-external-helpers.js"></script>
   <script src="../global/vendor/jquery/jquery.js"></script>
   <script src="../global/vendor/popper-js/umd/popper.min.js"></script>
   <script src="../assets/examples/js/forms/advanced.js"></script>

   <script src="../global/vendor/babel-external-helpers/babel-external-helpers.js"></script>
    <script src="../global/vendor/jquery/jquery.js"></script>
    <script src="../global/vendor/popper-js/umd/popper.min.js"></script>
    <script src="../global/vendor/bootstrap/bootstrap.js"></script>
    <script src="../global/vendor/animsition/animsition.js"></script>
    <script src="../global/vendor/mousewheel/jquery.mousewheel.js"></script>
    <script src="../global/vendor/asscrollbar/jquery-asScrollbar.js"></script>
    <script src="../global/vendor/asscrollable/jquery-asScrollable.js"></script>
    <script src="../global/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>
    

    <script src="../global/vendor/switchery/switchery.js"></script>
    <script src="../global/vendor/intro-js/intro.js"></script>
    <script src="../global/vendor/screenfull/screenfull.js"></script>
    <script src="../global/vendor/slidepanel/jquery-slidePanel.js"></script>
        <script src="../global/vendor/magnific-popup/jquery.magnific-popup.js"></script>
   
    <script src="../global/js/Component.js"></script>
    <script src="../global/js/Plugin.js"></script>
    <script src="../global/js/Base.js"></script>
    <script src="../global/js/Config.js"></script>
    
    <script src="../assets/js/Section/Menubar.js"></script>
    <script src="../assets/js/Section/Sidebar.js"></script>
    <script src="../assets/js/Section/PageAside.js"></script>
    <script src="../assets/js/Plugin/menu.js"></script> 
    <script src="../global/js/config/colors.js"></script>
    <script src="../assets/js/config/tour.js"></script>
    <script>Config.set('assets', '../assets');</script>
    
   
    <script src="../assets/js/Site.js"></script>
    <script src="../global/js/Plugin/asscrollable.js"></script>
    <script src="../global/js/Plugin/slidepanel.js"></script>
    <script src="../global/js/Plugin/switchery.js"></script> 
        <script src="../global/js/Plugin/magnific-popup.js"></script>
    <script src="../assets/js/jquery.validate.js"></script>
        <script src="../assets/examples/js/advanced/lightbox.js"></script> 
 <script type="text/javascript" src="../assets/js/jquery.scannerdetection.js"></script> 








  <script>






var code=[];
var seccode=[];

    $("#keyword").scannerDetection({
timeBeforeScanTest: 200, // wait for the next character for upto 200ms
startChar: [120], // Prefix character for the cabled scanner (OPL6845R)
endChar: [13], // be sure the scan is complete if key 13 (enter) is detected
avgTimeByChar: 40, // it's not a barcode if a character takes longer than 40ms
onComplete: function(barcode){

var nors=0;
/*
  alert(barcode);*/
  $.ajax({
           type: "POST",
           url: "posget_itemscan.php",
           data: {data:barcode,sno:code},
           success: function(msg){  
        /*    alert(msg);*/
if($.trim(msg))
{
    $("#upd-row").append(msg);
        


          goos();
          code.push(barcode);



}

$("#keyword").val("");



         
         $('.remCFw').click(function() { 
          




var nors1=nors+1;

if(nors!=nors1)
{

  var subtt=$("#subtotal_h").val();

  if(subtt!=0)
  {
          var piD =$(this).attr('id');
         
/*alert(piD);*/

        /*    disval = $("#disc"+piD).val();
         */

            var prival = $("#itemtot"+piD).val();
           var pridis = $("#disc"+piD).val();

var priimei = $("#imei"+piD).val();


code.pop(priimei);
      /*         alert(disval);
                  alert(prival);*/ 
           var originalp=$("#price"+piD).val();
           var subtot=$("#subtotal").text();
var sum=parseInt(subtot);

var nettot=nettot-sum - prival;
$("#subtotal").html(sum - prival);
$("#subtotal_h").val(sum - prival);

var totdis=sum - prival;

/*alert(prival);
*/





var total_sum=$("#tot_sum").val();
total_sum=parseInt(total_sum);
$("#tot_sum").val(total_sum-originalp);


/*$("#tot_sum").val(totdis);*/
/*alert(totdis);*/
var prevdis=$("#tot_disc").val();
prevdis=parseInt(prevdis);
/*alert(prevdis);
alert(pridis);*/

$("#tot_disc").val(prevdis-pridis);

  






 var disval=$("#disconcar").val();

 if(disval=="")
  disval=0;

var nettot2=totdis - disval;  
/*alert(nettot2);
alert(disval);*/




nops=$("#prodnos_h").val();
nops=parseInt(nops);
/*alert(nops);*/

nops-=1;

$("#prodnos").html(nops);
$("#prodnos_h").val(nops);

$("#netpay").html(nettot2-disval);

var taxrate=$("#taxrates").val();

var tax=parseInt(totdis/((taxrate/100)+1));
var tax_diff=parseInt(totdis-tax);






$("#netprice").text(tax);
$("#taxrate").text(tax_diff); 

        $(this).parent().parent().remove();

}
}
nors++;



      
          });
        }
      });
 

testing();

 
// $("#ajax_response").
  console.log(barcode); return false;} // main callback function
});
   
     $("#purchasesubmit").click(function() {  

   
 $("#purchase_Form" ).submit(); 

});   
     
      $(document).ready(function(){
      $('#newneverused').click(function() {
      if($('#newneverused').is(':checked')) { $("#usedid").css("display", "none"); $("#supplierid").css("display", "block");  $("#purcompanyid").css("display", "block");  }

      });
        $('#newbrand').click(function() {
      if($('#newbrand').is(':checked')) { $("#usedid").css("display", "none"); $("#supplierid").css("display", "block");  $("#purcompanyid").css("display", "block");  }

      });
      //newneverused  
       $('#preowned').click(function() {
      if($('#preowned').is(':checked')) { $("#usedid").css("display", "block"); $("#supplierid").css("display", "none");  
      $("#purcompanyid").css("display", "none");    }

      });

       
       
    });
               
     $(document).ready(function(){
    



  $(document).click(function(){
  $("#ajax_response").fadeOut('slow');
  });

  $("#keyword").focus();
  var offset = $("#keyword").offset();
  var width = $("#keyword").width()-2;
  $("#ajax_response").css("left",offset.left); 
  $("#ajax_response").css("width",width);





  $("#keyword").keyup(function(event){  
     var keyword = $("#keyword").val();

     if(keyword.length)
     {
       if(event.keyCode != 40 && event.keyCode != 38 && event.keyCode !=13  )
       {

         $("#loading").css("visibility","visible");
         $.ajax({
           type: "POST",
           url: "posget_item.php",
           data: {data:keyword,imc:code},
           success: function(msg){  
/*alert(msg);*/
          if(msg != 0)
          {
             
          
              $("#ajax_response").fadeIn("slow").html(msg);

      

          }
          else
          {
            $("#ajax_response").fadeIn("slow"); 
            $("#ajax_response").html('<div style="text-align:;">No Matches Found</div>');
          }
          $("#loading").css("visibility","hidden");
           }
         });
       }
       else
       {
        switch (event.keyCode)
        {
         case 40:
         {
            found = 0;
            $("li").each(function(){
             if($(this).attr("class") == "selected")
              found = 1;
            });
            if(found == 1)
            {
            var sel = $("li[class='selected']");
            sel.next().addClass("selected");
            sel.removeClass("selected");
            }
            else
            $("li:first").addClass("selected");
           }
         break;
         case 38:
         {
            found = 0;
            $("li").each(function(){
             if($(this).attr("class") == "selected")
              found = 1;
            });
            if(found == 1)
            {
            var sel = $("li[class='selected']");
            sel.prev().addClass("selected");
            sel.removeClass("selected");
            }
            else
            $("li:last").addClass("selected");
         }
         break;
         case 13:
          $("#ajax_response").fadeOut("slow");
          $("#keyword").val($("li[class='selected'] a").text());
         break;
        }
       }
     }
     else
     $("#ajax_response").fadeOut("slow");
  });
  $("#ajax_response").mouseover(function(){ 
    $(this).find("li a:first-child").mouseover(function () {
         $(this).addClass("selected"); 
    });
    $(this).find("li a:first-child").mouseout(function () {
        $(this).removeClass("selected"); 
    });  
    //$(this).find("li a:first-child").click(function () {   
   
  });
  $('#ajax_response').on('touchstart', function (e) {
    $(this).find("li a:first-child").mouseover(function () {
         $(this).addClass("selected"); 
    });
    $(this).find("li a:first-child").mouseout(function () {
        $(this).removeClass("selected"); 
    });  
    //$(this).find("li a:first-child").click(function () {   

     });

  var sno=0;
var sum = 0;
var totdis =0;
var nettot =0;
var nop=0;
var qty=0;
var price=0;
 var aftdis=0;
var nops=0;
   var nors =0;

  $("#ajax_response").click(function(){ 
 var datavalues=0;
  datavalues = $(this).find("li a.selected");
   $(this).find("#ajax_response");
       
console.log(datavalues);

var typo=$("#tpesale").val();

/*var check=$("#active").html();*/

/*alert(check);*/


/*
alert("what??");*/
if(datavalues.length==0)
{
/*alert("maam");*/
datavalues = $("#active").find("li a");  

}


var access= $("#tpesale").val();

/*alert(access);*/
/*if(datavalues.length==0)
{
alert("maam");*/
/*datavalues = $("#active").find("li a").last();*/

/*datavalues = $('ul').eq("active").find('li').last();  

}*/




/*alert("got");*/




/*console.log(datavalues);*/
 /*$("#addprod").click(function(){ 

alert("Entered"); 

 });*/
/*

$(document).on("click", "a", function(){
   $(this).text("It works!");
});*/
/*this.value = $("#active").find("li a");*/
 
/*console.log(this.value);*/



/*alert(datavalues["0"].dataset.proname);*/


/*alert("then");
*/

        //console.log($(this)); 
       // console.log($(this)["0"].childNodes);
        //alert($(this)["length"]) ;
        var j=1; 
        
       // var pname  = $(this).text(); 

        var pname  = datavalues["0"].dataset.proname;
        var proid  = datavalues["0"].dataset.proid;
        var pqty   = datavalues["0"].dataset.proqty;  
        var punit  = datavalues["0"].dataset.prounit; 
        var pprice = datavalues["0"].dataset.price; 
        var pcolor = datavalues["0"].dataset.color; 
        var pcapcty = datavalues["0"].dataset.capacity; 
        var imeino = datavalues["0"].dataset.imei;
        var discount = datavalues["0"].dataset.promo;
/*alert(imeino);*/

var typoes=$("#tpesale").val();
var typeofs=""
/*alert(typoes);*/
if(typoes=="Resale")
{

typeofs="[Refurbished]";
}

$.ajax({
  'async': false,
  type: "POST",
      url: "posget_item.php",
        data:{id: proid,imc:code},
       dataType: "json",
      success: function(data){

/*alert(data.qty);*/
 qty = data.qty;
 price=data.price;
 aftdis=price-discount;
/*alert(price);*/
           }

         });




/*
alert(qty);
alert(price);<button class="btn btn-sm btn-icon btn-default btn-outline btn-round">
                              <i class="icon wb-pencil" aria-hidden="true"></i>
                            </button>*/


/*
<input type="text" size="30" id="pdtprice'+proid+'" name="price[]" onkeyup="findtot('+proid+');" value="'+price+'" " class="form-control col-md-2">*/

/*&nbsp;'+qty+'&nbsp;*/


sno++;

        var updrow ='<tr class="even pointer" id="final"><td><input type="hidden" id="ident'+sno+'" name="sid[]" value="'+proid+'">&nbsp;'+pname+' &nbsp;'+pcolor+' &nbsp; '+pcapcty+typeofs+'<input type="hidden" name="pname[]" value="'+pname+'"><input type="hidden" name="proid[]" value="'+proid+'"> &nbsp;<div style="float: left;margin-top: 5px;"><input type="hidden" id="price'+proid+'" value="'+price+'" ></div>&nbsp; </td><td><input type="hidden" id="imei'+proid+'" name="imei[]" value="'+imeino+'">'+imeino+' <div id="hidden_div'+proid+'" style="display: none;"><span class="discount">Discount:</span><input type="text" id="disc'+proid+'" name="pqty[]" class="discamt form-control" onkeyup="findtot('+proid+');" size="5" value="'+discount+'" " class="form-control col-md-2"><button onclick="closedisc('+proid+');" type="button" class="input-search-close icon wb-close" aria-label="Close"></button></div></td><td>&nbsp;<div style="float: left; " id="tot'+proid+'">$. '+aftdis+'<br><span class="price" id="dashpri">$. '+price+'</span></div><input type="hidden" name="itemtot[]" id="itemtot'+proid+'" value="'+aftdis+'" class="itemtotal">&nbsp; <input type="hidden" name="typoes[]" value="'+typoes+'"></td><td>&nbsp; <a id="'+proid+'" href="javascript:void(0);" class="remCF btn-danger btn btn-sm btn-icon btn-default btn-outline btn-round"><i class="icon wb-close" aria-hidden="true"></i></a><a id="editdis" href="javascript:void(0)" onclick="editdisc('+proid+');" class="btn btn-sm btn-icon btn-default btn-outline btn-round"><i class="icon wb-pencil" aria-hidden="true"></i></a></td></tr>'; 



/*
   */
/*
quantity------>
<td><input type="text" class="form-control" data-plugin="asSpinner" size="50" id="purqty'+proid+'" name="price[]" onkeyup="findtot('+proid+');" value="1" " class="form-control col-md-2"></td>  */



/*   var updrow ='<tr class="even pointer" id="final"><td>&nbsp;'+pname+' &nbsp;'+pcolor+' &nbsp; '+pcapcty+'<input type="hidden" name="pname[]" value="'+pname+'"><input type="hidden" name="proid[]" value="'+proid+'"></td><td> <input type="hidden" id="purprice'+proid+'" name="pprice[]" value="'+pprice+'" >&nbsp;&nbsp;&nbsp;'+pprice+' </td><td> <input type="text" id="purqty'+proid+'" name="pqty[]" onkeyup="findtot('+proid+');" value="'+pqty+'" " class="form-control col-md-2"></td><td><span>$ &nbsp;</span><span class="dis"><input type="text" name="discountrate[]" id="discountrate'+proid+'" onkeyup="findtot('+proid+');" value="0" class="form-control "></span></td><td><span id="totrest'+proid+'" class="form-control col-md-2"> </span></td><td>&nbsp; <a href="javascript:void(0);" class="remCF">Remove</a></td></tr>'; */

display_main();


  code.push(imeino);



       $("#keyword").val(datavalues.text());
        $("#pid1").val(datavalues["0"].dataset.proid);
        $("#ajax_response").fadeOut("slow");

        $("#upd-row").append(updrow);
        $("#keyword").val("");
        console.log(datavalues["0"].dataset.price);
             $("#active").remove();
         // sum += parseFloat(datavalues["0"].dataset.price); 

         

/*alert(sum);

alert(totdis);*/
/*
alert(parseFloat(datavalues["0"].dataset.price));
alert(parseFloat(datavalues["0"].dataset.promo));*/

nop++;
  if(nop==1)        
{
    sum += parseFloat(datavalues["0"].dataset.price); 
          totdis += parseFloat(datavalues["0"].dataset.promo);
/*alert(sum);
alert(totdis);*/

var prev_sum=$("#tot_sum").val();
var prev_dis=$("#tot_disc").val();

if(prev_sum=="")
prev_sum=0;
if(prev_dis=="")
prev_dis=0;


sum=sum+parseInt(prev_sum);
totdis=totdis+parseInt(prev_dis);


          $("#tot_sum").val(sum);
          $("#tot_disc").val(totdis);
}
else
{
var sums = parseFloat(datavalues["0"].dataset.price); 
var totdiss = parseFloat(datavalues["0"].dataset.promo);

sums=parseInt(sums);
totdiss=parseInt(totdiss);


var prev_sum=$("#tot_sum").val();
var prev_dis=$("#tot_disc").val();

/*alert(prev_sum);
alert(prev_dis);*/

prev_sum=parseInt(prev_sum);
prev_dis=parseInt(prev_dis);

/*alert(sums);
alert(prev_sum);*/
sum=prev_sum+sums;
totdis=prev_dis+totdiss;

/*
alert(totdis);*/
$("#tot_sum").val(sum)
$("#tot_disc").val(totdis)

/*alert(sum);
alert(totdis);*/

}
  nettot = sum-totdis;  
/*  alert(nettot);*/
/*$('.itemtotal').each(function(){
    sum += parseFloat(this.value);

}); */  


$("#subtotal").html(nettot);
$("#subtotal_h").val(nettot);

nops=$("#prodnos_h").val();

nops=parseInt(nops);

nops+=1;
$("#prodnos").html(nops);
$("#prodnos_h").val(nops);

/*$("#disconcar").html(totdis);*/
$("#netpay").html(nettot);


var taxrate=$("#taxrates").val();

var tax=parseFloat(nettot/((taxrate/100)+1)).toFixed(2);
var tax_diff=parseFloat(nettot-tax).toFixed(2);






$("#netprice").text(tax);
$("#taxrate").text(tax_diff);         

        /*$("#final").on('click','.remCF',function(){
        $(this).parent().parent().remove();
    });*/


    var disval =0; var prival =0; var totless =0;
 
var nors1=nors+1;



        $('.remCF').click(function() { 
/*alert(nors);*/

if(nors!=nors1)
{
          var piD =$(this).attr('id');
         
/*alert(piD);*/

        /*    disval = $("#disc"+piD).val();
         */

            var prival = $("#itemtot"+piD).val();
           var pridis = $("#disc"+piD).val();

           /*    alert(disval);*/
            /*      alert(prival); */
           var originalp=$("#price"+piD).val();
           var subtot=$("#subtotal").text();
var sum=parseInt(subtot);

nettot=nettot-sum - prival;
$("#subtotal").html(sum - prival);
$("#subtotal_h").val(sum - prival);

var totdis=sum - prival;

/*alert(prival);*/






var total_sum=$("#tot_sum").val();
total_sum=parseInt(total_sum);
$("#tot_sum").val(total_sum-originalp);


/*$("#tot_sum").val(totdis);*/
/*alert(totdis);*/
var prevdis=$("#tot_disc").val();
prevdis=parseInt(prevdis);
/*alert(prevdis);
alert(pridis);*/

$("#tot_disc").val(prevdis-pridis);

  






 var disval=$("#disconcar").val();

 if(disval=="")
  disval=0;

var nettot2=totdis - disval;  
/*alert(nettot2);
alert(disval);*/




nops=$("#prodnos_h").val();
nops=parseInt(nops);
/*alert(nops);*/

nops-=1;

$("#prodnos").html(nops);
$("#prodnos_h").val(nops);

$("#netpay").html(nettot2-disval);

var taxrate=$("#taxrates").val();

var tax=parseInt(totdis/((taxrate/100)+1));
var tax_diff=parseInt(totdis-tax);






$("#netprice").text(tax);
$("#taxrate").text(tax_diff); 



$(this).parent('a').remove();
//$('.remCF id'+piD).remove();
        $(this).parent().parent().remove();

}

nors++;


          });

        
        /*$.ajax(
          {
            url: "stock.php?pname="+$(this).text()+"&pid="+$(this)["0"].dataset.proid,
            type: "POST",
            success: function (message)
            {  
              $("#final").html(message);  
            }
          });*/ 
   });
}); 





function accs(val)
{
var type="Access";

/*alert(val);*/

 $.ajax({
           type: "POST",
           url: "posget_item.php",
           data: {data : val, tpe:type,imc:code},
           success: function(msg){ 

/*  alert(msg);*/
 $( "#testdiv" ).empty();
 $('#testdiv').html(msg);
  $('#category_div').empty();

  $("#category_div").css("display","none");

$("#ajax_response").trigger("click");

           }

         });



}

</script>






<!-- <script type="text/javascript">
  
$("#upd-row").on("remove", function () {
    alert("Element was removed");
})

</script> -->



<script>
  function editdisc(disval){
/*var iid="hidden_div"+disval;
    alert(iid);*/
$("#hidden_div"+disval).css("display","block"); 

  }

function closedisc(disval)
{
$("#hidden_div"+disval).css("display","none"); 

}

function findtot(val)
{

/*Product Discount Edition*/

/*alert(val);*/

var price=$("#price"+val).val();
var disc=$("#disc"+val).val();
var cur_tot=$("#itemtot"+val).val();



/*alert(disc);*/

/*var qty=1;*/


/*alert(cur_tot);*/
/*alert(price);*/







if(price=="")
price=0;
if(disc=='')
disc=0;
if(cur_tot=='')
cur_tot=0;

var final=parseFloat(price)-parseFloat(disc);

var diff=parseFloat(cur_tot)-parseFloat(final);

/*alert(diff);*/
/*
alert(final);*/
$("#itemtot"+val).val(final);

var filalh='$'+final+'<br><span class="price" id="dashpri">$.'+price+'</span>';

$("#tot"+val).html(filalh);


var subtot=$("#subtotal_h").val();

var curr_tot=$("#tot_disc").val();


curr_tot=parseFloat(curr_tot);
/*
alert(curr_tot);
alert(diff);*/
$("#tot_disc").val(curr_tot+diff); 


$("#subtotal_h").val(subtot-diff);
$("#subtotal").html(subtot-diff);


$("#netpay").html(subtot-diff);


var taxrate=$("#taxrates").val();

var nettot=subtot-diff;

var tax=parseInt(nettot/((taxrate/100)+1));
var tax_diff=parseInt(nettot-tax);






$("#netprice").text(tax);
$("#taxrate").text(tax_diff);  
/*
alert(subtot);*/




/*var totdis=sum - prival;*/



/*  disval=$("#disconcar").val();*/
 


/*if(qtyr==0)
{
$("#purqty"+val).val(qtyr);
}
else
{
  $("#purqty"+val).val(qtyr);
}



var discr=parseInt(disc);
var pricer=parseInt(price);

var dis=pricer-discr;
var tot=qtyr*dis;

$("#itemtot"+val).val(tot);
$("#tot"+val).html(tot);

totalval(val);*/

}
</script>


<script>
function checkqty(qty,val)
{
/*alert("run");*/
  var qty;
/*var price=null;*/

var act="Check";
$.ajax({
  'async': false,
  type: "POST",
  url: "possale_functions.php",
  data:{id : val,quty : qty,action : act },
  success: function(data){
/*
alert(data);*/
qty = data;
/*  price=data.price*/
           }

         });
/*alert(qty);*/
return qty;
}
</script>







<script>

function totalval(ids)
{


/*
 $(':checkbox:checked:not("#checkAll")').each(function(i){


          val = $(this).val();
});*/

    /*   $('td',this).each(function(){
            alert($(this).text());

        });
*/
/*  var myArray = $('input[name="sid[]"]').map(function(){
       return this.val;
    }).get();*/



/*alert(ids);*/

  var len =$('input[name="sid[]"]').length;
/*alert(len);*/

var netpdt=0;
var netamt=0;
/*for(var i=1;i<=len;i++)
{*/
  var qtyr=0;
  var tot=0;

/*var ids=$("#ident"+i).val();*/

/*alert(ids);*/
var total=$("#tot"+ids).text();
var qty=1;
 if(total=='')
total=0;
 if(qty=='')
qty=0;

qtyr=parseInt(qty);
tot=parseInt(total);

netpdt+=qtyr;
netamt+=tot;
/*}*/

var sum = 0;
$('.itemtotal').each(function(){
    sum += parseFloat(this.value);

}); 
$("#subtotal").text(sum);/*

$("#subtotal").text(netamt);*/

var disamt=$("#disconcar").text();
var ndisc=parseInt(disamt);
/*alert(ndisc);*/
var net_amt=netamt-ndisc;
/*alert(netpdt);
alert(netamt);*/

$("#prodnos").text(netpdt);

$("#netpay").text(net_amt);

/*var net=$("#prodnos").text();
var npdt=$("#subtotal").text();

var netr=parseInt(net);
var npdtr=parseInt(npdt);*/

/*alert(netr);
alert(npdtr);*/

/*$("#prodnos").text(netr+qty);
$("#subtotal").text(netr+npdt);*/

/*alert(net);
alert(npdt);
alert(total);
alert(qty);*/


}

</script>

       



<style type="text/css">
  #loading{
    visibility:hidden;
    padding-left:5px;
}
#ajax_response{
    border : 1px solid #8789E7;
    background : #FFFFFF;
    position:absolute;
    display:none;
    padding:2px 2px;
    top:auto;
    z-index: 99999 !important;
    left: 15px !important;
}
#holder{
    width : 350px;
}
.list {
    padding:0px 0px;
    margin:0px;
    list-style : none;
}
.list li a{
    text-align : left;
    padding:2px;
    cursor:pointer;
    display:block;
    text-decoration : none;
    color:#000000;
}
.selected{
    background : #CCCFF2;
}
.bold{
    font-weight:bold;
    color: #131E9F;
}
.about{
    text-align:right;
    font-size:10px;
    margin : 10px 4px;
}
.about a{
    color:#BCBCBC;
    text-decoration : none;
}
.about a:hover{
    color:#575757;
    cursor : default;
}

figure.selected,figure.selected:hover{
-webkit-box-shadow: 0px -1px 20px 0px rgba(28,122,246,1);
-moz-box-shadow: 0px -1px 20px 0px rgba(28,122,246,1);
box-shadow: 0px -1px 20px 0px rgba(28,122,246,1);
}
span.dis{width: 90%;
display: inline-block;}
.price{font-size:12px;text-decoration: line-through;}
</style>

<script>$(function(){ FormsGeneral.init(); });</script>

<script type="text/javascript">
  //$("#parcat figcaption").on('click', function() {
    var $myListElems = $('#parentcat').find('figcaption');



$myListElems.dblclick(function() {
/*  alert("maan");*/

$('#dblemge').val("2");


});

/*$myListElems.one('click',function(){*/
$myListElems.click(function(){
/*if(ice==2)
{
alert("dc");
}
ice=0;*/
/*alert("heree");*/
var cd = $('#dblemge').val();

/*alert(cd);*/
if(cd!=2)
{
/*alert(cd);*/
$('#dblemge').val("2");
var types=$("#tpesale").val();
/*alert(type);
*/
    var proid= $(this).data("value");
      var proid2=0;
    $(this).data("value") ;
   /* alert($(this).data("value") );*/
    $.ajax({
           type: "POST",
           url: "getsubproduct_ui.php",
           data: {data: proid,tpe:types},
           success: function(msg){  
            
/*alert(msg);*/
              $("#subcat").css("display","block"); 
            $("#subcat").append(msg);
            $("#prodtabs").css("display","none"); 
           /* $("#prodtabs").remove();*/


                 var $myListElems = $('#subitems').find('figcaption');
          $myListElems.click(function(){
         /*   $myListElems.dblclick(function() {*/

 proid2= $(this).data("value"); 
/*    alert($(this).data("value"));
alert(proid);*/
var typesee=$("#tpesale").val();


$.ajax({
  'async': false,
  type: "POST",
      url: "getsubproduct_ui.php",
        data:{brd1: proid,brd2 : proid2,tpe :typesee},
      success: function(data){
/*
alert(data);*/
/* $('#coldisp').html(data).modal('show');*/
/* qty = data.qty;
 price=data.price*/

            $("#coldisp").css("display","block"); 
            $("#coldisp").append(data);
            $("#subcat").css("display","none"); 
            $("#subcat").empty();
            /**/
gooses();
           }

         });
var dls=0;
function gooses()
{
/*
  alert("sppes");
*/
$("#pitems").mouseover(function(){ 
    $(this).find("li figure:first-child").mouseover(function () {
         $(this).addClass("selected"); 
    });
    $(this).find("li figure:first-child").mouseout(function () {
        $(this).removeClass("selected"); 
    });  
  
var x=0;   
     /*alert("heree");*/
    var $myListElemss = $('#pitems').find('figcaption');

/*    var $myListElems = $(this).find("li figure.selected");*/
/*    alert("see to it");
*/
$('#dblemge').val("0");
$myListElemss.dblclick(function() {
/*  alert("maan");*/

$('#dblemge').val("3");


});

$myListElemss.click(function () {   
//});
//$('li figure.selected').click(function() {
/*  alert( "Handler for  called." ); */
var dataid = $(this).data("value");
$('#pitems').find('figcaption.selected').addClass("selected");
/*  $(this).addClass("selected"); */
var cd = $('#dblemge').val();

/*alert(cd);*/
if(cd!=2)
{

$('#dblemge').val("2");
var color=$(this).data("value");
   //alert(color); 
var typese=$("#tpesale").val(); 

$.ajax({
  'async': false,
  type: "POST",
      url: "getsubproduct_ui.php",
        data:{brd1: proid,brd2 : proid2, colid :color, tpe :typese, dataID :dataid },
      success: function(dataset){ 
       /* alert(dataset);*/

if(x==0)
{
   $("#coldisp2").css("display","block"); 
}
     $("#coldisp2").empty();
    $("#coldisp2").append(dataset);

    $("#coldisp").css("display","none"); 
    $("#coldisp").empty();




 $myListElemssas = $('#pitems').find('figcaption');

/*alert($myListElemss);*/

$myListElemssas.trigger("click");


$myListElemssas.click(function () {  

dls++;
gooses();


});



    /*$('#pitems').find('li figure.selected').trigger('click');
           $('#subitems').trigger('click');*/
           }

         });





function addprod()
{
/*  alert("goos");*/
  var pid=$('#product_cap').val();
  //alert(pid);
$('#dblemge').val("0");
  if(pid==0)
  {
  alert("Please Choose Colour and Capacity of the Phone");
  }
  else
  {
 $.ajax({
           type: "POST",
           url: "posget_item.php",
           data: "data="+pid,
           success: function(msg){ 

/*  alert(msg);*/
 $( "#testdiv" ).empty();
 $('#testdiv').html(msg);


$("#ajax_response").trigger("click");

           }

         });




  }

 
  
} 





}
});
});
 }
          }); 


           /*$("#model-close").click(function(){*/
/*            $(".modal-backdrop").remove(); */
    /*      $(".modal-backdrop").css("display","none"); 
              $('#colorcap').modal('hide');
               $("#colorcap").css("display","none");  */
       /*       $("#colorcap").remove();*/ 

      /*     }); */           

        /* $('.remCF').click(function() { 
          
        $(this).parent().parent().remove();
          });*/
        }
      }); 


}


  });

   $(document).ready(function() { 
    
  $("#btnper").click(function () { 
        $("#dispercent").css("display","block");
        $("#disamt").css("display","none");
        $("#distype").val('percenage');
  
    });
  $("#btndol").click(function () {
        $("#dispercent").css("display","none");
        $("#disamt").css("display","block");
        $("#distype").val('amount');
 
    });
});
</script>


<script>
function addprod()
{
/*  alert("goos");*/
  var pid=$('#product_cap').val();
  //alert(pid);
$('#dblemge').val("0");
  if(pid==0)
  {
  alert("Please Choose Colour and Capacity of the Phone");
  }
  else
  {
 $.ajax({
           type: "POST",
           url: "posget_item.php",
           data: "data="+pid,
           success: function(msg){ 

/*  alert(msg);*/
 $( "#testdiv" ).empty();
 $('#testdiv').html(msg);


$("#ajax_response").trigger("click");

           }

         });




  }

 
  
} 

</script>

<script>
  function getvalues()
  {

var id=$('#secnd').val();


/*alert(id);*/

$('#dblemge').val("0");

if(id!="")
{    $("#coldisp2" ).empty();
   $("#prodtabs").css("display","block");
 
}
else
{
    $("#coldisp" ).empty();
   $("#prodtabs").css("display","block");
 
}

 
  }


</script>


<script>
function display_main()
{
  /*alert("i s u");*/
   $( "#coldisp2" ).empty();
   $("#prodtabs").css("display","block");
}

</script>

<script>
function back()
{
   $("#prodtabs").css("display","block");
$('#dblemge').val("0");
  $('#category_div').empty();

  $("#category_div").css("display","none");
       $("#subcat").css("display","none"); 
            $("#subcat").empty();

}

</script>



<!-- <script>
$(document).ready(function(){
   
});
</script> -->

<script>

$('#subfun').click(function(e) {
 
var cname=$("#cust_name").val();
if(cname==0)
{
   alert("Check Customer Name");
  e.preventDefault();
}
else
{
    $("#companynames").submit("submit");
}

});
/*
function check_det()
{

var cname=$("#cust_name").val();


if(cname==0)
{
  $(this).(function(e){
alert(cname);  
e.preventDefault();
return  false;
}
}
else
{
  alert(cname)


}


}*/

</script>


 <script>
     $(document).ready(function(){
     
  $("#cust_name").keyup(function(){

    $.ajax({
    type: "POST",
    url: "possale_functions.php",
    data:'keyword='+$(this).val(),
    beforeSend: function(){
      $("#cust_name").css("background","#FFF url(LoaderIcon.gif) no-repeat 300px");
    },
    success: function(data){
 /*     alert(data);*/
      $("#customer_names").show();
      $("#customer_names").html(data);
      $("#cust_name").css("background","#FFF");
    }
    });
  });
});

  </script> 

  <script>

  function selectCountry(val) {
    $("#cust_name").val(val);
$("#customer_names").hide();




}
  </script>

  <script>
var count=0;


function goos()
{
/*alert("Maan");*/

 /*alert($(".idcls", this).val());*/
/*var numItems = $('.idcls').length;
alert(numItems);

var value=$( ".idcls" ).last().val();
alert(value);
*/

var id=$(".idcls").last().val();
var discount=$(".discls").last().val();
var amt=$(".pricls").last().val();
var aftdisc=$(".aftdiscls").last().val();

if(parseFloat(amt)-parseFloat(discount)!=parseFloat(aftdisc))
{
aftdisc=amt-discount;
}


/*alert(imei);*/

/*alert(id);
alert(discount);
alert(amt);
alert(aftdisc);
*/



var prev_sum=$("#tot_sum").val();
var prev_dis=$("#tot_disc").val();

if(prev_sum=="")
  prev_sum=0;
if(prev_dis=="")
  prev_dis=0;


/*alert(prev_sum);
alert(prev_dis);*/

prev_sum=parseInt(prev_sum);
prev_dis=parseInt(prev_dis);

var sum=prev_sum+parseInt(aftdisc);
var totdis=prev_dis+parseInt(discount);









$("#tot_sum").val(sum)
$("#tot_disc").val(totdis)

/*alert(sum);
alert(totdis);*/

var nettot = amt-discount;  
 /* alert(nettot);*/
/*$('.itemtotal').each(function(){
    sum += parseFloat(this.value);

}); */  





var sst=$("#subtotal_h").val();

nettot=nettot+parseInt(sst);



$("#subtotal").html(nettot);
$("#subtotal_h").val(nettot);

nops=$("#prodnos_h").val();

nops=parseInt(nops);

nops+=1;
$("#prodnos").html(nops);
$("#prodnos_h").val(nops);

/*$("#disconcar").html(totdis);*/
$("#netpay").html(nettot);


var taxrate=$("#taxrates").val();

var tax=parseFloat(nettot/((taxrate/100)+1)).toFixed(2);
var tax_diff=parseFloat(nettot-tax).toFixed(2);






$("#netprice").text(tax);
$("#taxrate").text(tax_diff);    










}



</script>

<script>
  var def;
function cate(val)
{


  
var type="Access";
/*alert(val);*/
 $.ajax({
           type: "POST",
           url: "getsubproduct_ui.php",
           data: {data: val,tpe:type},
           success: function(msg){  
         /*   alert(msg);*/
            
if(def==msg)
{
  /*alert("mans");*/
return false;
}
else
{
        $("#category_div").css("display","block"); 
            $("#category_div").append(msg);
            $("#prodtabs").css("display","none");
def=msg;
}
        

}

});

def=0;

}
  </script>