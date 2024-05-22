<?php 
include '../inc/dbconnect.php';
include '../inc/page_head.php';
include '../inc/page_navi.php';
include '../inc/page_sidebar.php';   
include '../inc/function.php';   

$data=new pacific;
 


$data=new pacific;
$ordid = $_REQUEST['ordid'];




$curdate =  date('Y-m-d');
 $qtywhere = array(
     "intOrderId"      =>    $ordid
    );
    $salres = $data->select_where('purchase',$qtywhere); 



    $CUSId = $salres[0]['intCusId'];
    $taxid = $salres[0]['taxid'];
    $paytermsid = $salres[0]['payterms'];
      $orderdate = $salres[0]['purdate'];

       $apprdate = $salres[0]['appor_date'];

 /*   $subwhere = array(
      "cus_id"      =>    $subId
    );
    $cus_result = $data->select_where('customer',$subwhere);

    $taxdata = array(
      "tax_id"      =>    $taxid
    );

    $taxres = $data->select_where('tax',$taxdata);

      $paytrm = array(
      "pay_id"      =>    $paytermsid
    );
    $payres = $data->select_where('paymentterm',$paytrm); 
    $pur_result = $data->select('sales');
*/
?> 
 
    
    
     
    
    <!--[if lt IE 9]>
    <script src="../../../global/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->
    
    <!--[if lt IE 10]>
    <script src="../../../global/vendor/media-match/media.match.min.js"></script>
    <script src="../../../global/vendor/respond/respond.min.js"></script>
    <![endif]-->
    
    <!-- Scripts -->
    <script src="../global/vendor/breakpoints/breakpoints.js"></script>
    <script>
      Breakpoints();
    </script>
    <style type="text/css">
      .buttons-copy{display: none;}
    </style>
  </head>
  <body class="animsition">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    

    <!-- Page -->
   <div class="page">
      <div class="page-header">
        <h1 class="page-title text-left">Invoice</h1>
        <a class="font-size-20" href="javascript:void(0)">#<?php echo $ordid;?></a>
                  <br> <span>Order Date: <?php echo $orderdate;?></span> 
                  <br> <span>Approve Date: <?php echo $apprdate;?></span> 
                
      </div>

      <div class="page-content">
        <!-- Panel -->
        <div class="panel">
          <div class="panel-body container-fluid">
           

            <div class="page-invoice-table table-responsive" style="margin-top:25px">
              <table class="table table-hover text-right">
                <thead>
                  <tr>
                      <th class="text-center" style="width: 100px;">ID</th>
                        <th class="text-center" style="width: 100px;">SOrdID</th>
                        <th>Product Name</th>
                         
                           <th class="text-right" style="width: 10%;">Requested Qty</th>
                           <th class="text-right" style="width: 10%;">Recieved Qty</th>
                        <th class="text-right" style="width: 10%;">Price</th>
                        <th class="text-right" style="width: 10%;">Status</th>

                    
                  </tr>
                </thead>
                <tbody>
                   <?php
                    $subtotal=0;$totdisamt =0;$twithdisamt=0;
                    $selsale = "SELECT * FROM purchase where intOrderId ='".$ordid."'";
                    $qrysal =mysqli_query($conn,$selsale);
                    $j=1;
                    $tot_discount=0;
                    while($ressal = mysqli_fetch_array($qrysal))
                    {

                      
                    $slID = $ressal['intId'];
                    $cusId = $ressal['intCusId'];
                    $taxid = $ressal['taxid'];
                    $paytermsid = $ressal['taxid'];
                    $itemID = $ressal['intItemId'];
                    $sloid = $ressal["intOrderId"];
                     $dicountp = $ressal["total_discount"];
                      $itemimei = $ressal["itemimei"];

$tot_discount=$dicountp;
                    $itemwhere = array(
                    "intId"      =>    $itemID
                    ); 


                    $item_res = $data->select_where('items',$itemwhere);  

                    $promo=mysqli_query($conn,'SELECT * FROM promortion WHERE item ="'.$item_res[0]['intId'].'";');

                    $pro=mysqli_fetch_array($promo);
                    if(mysqli_num_rows($promo)==0)
                    {
                      $promo=mysqli_query($conn,'SELECT * FROM promortion WHERE brandmodel ="'.$item_res[0]['brandmodel'].'";');
                      $pro=mysqli_fetch_array($promo);

                    }
                    if(mysqli_num_rows($promo)==0)
                    {
                      $promo=mysqli_query($conn,'SELECT * FROM promortion WHERE brand ="'.$item_res[0]['brand'].'";');
                      $pro=mysqli_fetch_array($promo);
                    }
                    $itmdis = $pro['amount'];


                    $colorwhere = array(
                    "colour_id"      =>    $item_res[0]['color']
                    );



                    $color_res = $data->select_where('colour',$colorwhere);

                    $capwhere = array(
                    "capacity_id"      =>    $item_res[0]['capacity']
                    );
                    $cap_res = $data->select_where('capacity',$capwhere); 

                    $taxdata = array(
                    "tax_id"      =>    $taxid
                    );

                    $taxres = $data->select_where('tax',$taxdata);
                 // $taxrate = $taxres[0]['tax_des'];

                    $taxres   = mysqli_query($conn,"SELECT * FROM tax WHERE taxtype ='sale'");
                    $taxrates = mysqli_fetch_array($taxres);
                    $taxrate  = $taxrates['tax_des'];

                    $paytrm = array(
                    "pay_id"      =>    $paytermsid
                    );
                    $payres = $data->select_where('paymentterm',$paytrm);

                     $totitemprice =  $ressal['itemprice'];
 
                      $subtotal+=$totitemprice;

                    
                      $totdisamt += $itmdis;

                     $withdisamt = $totitemprice - $itmdis ;
                     $twithdisamt +=$withdisamt;


if($ressal['status']==1)
{
$status="Request Sent";
}
else if($ressal['status']==2)
{
$status="Request Approved";
}
else if($ressal['status']==3)
{
$status="Request Rejected";
}
  else if($ressal['status']==4)
  {
$status="Item Added to Inventory";
  }    
else if($ressal['status']==5)
{
$status="Product Returned";
}
else if($ressal['status']==6)
{
$status="Product Returned and Accepted";
}



 ?>
                    <tr>
                       <td class="text-center"> <strong> <?php echo $slID;?></strong> </td>
                        <td class="text-center"> <strong><?php echo $sloid;?></strong> </td>
                        <td> <?php echo $item_res[0]['itemname'].'<br>
                        Color : '. $color_res[0]['colour_name'].'  &nbsp; Capacity  : '. $cap_res[0]['capacity_name'];?>&nbsp;</td>
                       <!--  <td class="text-center"> <a href="salesorderview.php?retid=<?php echo $item_res[0]['intId'];?>&salid=<?php echo $slID;?>&itmqty=<?php echo $ressal['itemqty'];?>&seloid=<?php echo $_REQUEST['seloid'];?>&flag=return" data-toggle="tooltip" title="Return" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a></td> -->
                        <!-- <td class="text-center"><strong>720</strong></td> --> 
                           <td class="text-right"><strong><?php  echo $ressal['itemqty'];?></strong></td>
                        <td class="text-right"><strong><?php  echo $ressal['approve_qty'];?></strong></td> 
                 
                        <td class="text-right"><strong><?php  echo $ressal['itemprice']; ?></strong></td>
                        <td class="text-right"><strong><?php  echo $status; ?></strong></td>
                    </tr>
                    <?php  $j++;
                  } ?>
                  <?php  

$twithdisamt-=$tot_discount;

                     $dispres +=$itmdis;
                          $disamt = $subtotal * $dispres/100; 
                             $subts = $subtotal - $disamt; 

                               $subt = $subtotal - $taxamt;
                            $taxamt = $twithdisamt * $taxrate/100;

                      $taxam=$twithdisamt- ($twithdisamt *(100/(100+$taxrate)));
                      $calculatedTaxRate =  $twithdisamt -$taxam ;

                          
                          
                    ?> 
                 
                </tbody>
              </table>
            </div>


           <!--  <div class="text-right clearfix">
              <div class="float-right">
                <p>Sub - Total amount:
                  <span>$4800</span>
                </p>
                <p>VAT:
                  <span>$35</span>
                </p>
                <p class="page-invoice-amount">Grand Total:
                  <span>$4835</span>
                </p>
              </div>
            </div> -->

            <div class="text-left">
             <!--  <button type="submit" class="btn btn-animate btn-animate-side btn-primary">
                <span><i class="icon wb-shopping-cart" aria-hidden="true"></i> Proceed
                  to payment</span>
              </button> -->
              <button type="button" class="btn btn-animate btn-animate-side btn-default btn-outline"
                onclick="replace()">
                <span><i class="icon wb-print" aria-hidden="true"></i> Back</span>
              </button>
            </div>
          </div>
        </div>
        <!-- End Panel -->
      </div>
    </div>
    <!-- End Page -->

    <!-- Core  -->
    
  </body>
</html>
<?php include '../inc/page_footer.php';  ?>
<style type="text/css">
.cusdet{ display: none; }
    @media print{ 
        .site-navbar,.site-menubar,.site-footer,.custdetto {display: none;}
        .hr{display: none;}
        .pull-left  {display: none;}
        .pull-left #year-copy  a{display: none;}
        .addrfrom{ float: left;  }
        .addrto{ float: right;  }
        .page-content {margin-top:-30px;padding: 0px}
        .page{margin-left:50px;}
        .cusdet{ display: block; }

}
@page { margin:0mm 0mm; size:auto;}
</style>
<script>
  function replace()
  {
        window.location.replace("stockorder.php");
   
  }


  </script>