<?php 
include '../inc/dbconnect.php';
include '../inc/page_head.php';
include '../inc/page_navi.php';
include '../inc/page_sidebar.php';   
include '../inc/function.php';   


  


$data=new pacific;
/*$ordid = $_REQUEST['seloid'];
*/

if($_REQUEST['print_id']!="")
{

  $ids=mysqli_query($conn,'SELECT * FROM sales WHERE intId ="'.$_REQUEST['print_id'].'" ;');

$cust=mysqli_fetch_array($ids);

$ordid=$cust['intOrderId'];
/*
  echo "<script> alert('".$ordid."')</script>";*/
}


$curdate =  date('Y-m-d');
 $qtywhere = array(
     "intOrderId"      =>    $ordid
    );
    $salres = $data->select_where('sales',$qtywhere); 
    $CUSId = $salres[0]['intCusId'];
    $taxid = $salres[0]['taxid'];
    $paytermsid = $salres[0]['payterms'];
      $orderdate = $salres[0]['saledate'];
$saletype=$salres[0]['sale_type'];
    $subwhere = array(
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


/*echo "<script> alert('gos')</script>";*/


?> 
 
    
    
     
    
    <!--[if lt IE 9]>
    <script src="../../../global/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->
    
    <!--[if lt IE 10]>
    <script src="../../../global/vendor/media-match/media.match.min.js"></script>
    <script src="../../../global/vendor/respond/respond.min.js"></script>
    <![endif]-->
    
    <!-- Scripts -->
 
  <!--   <style type="text/css">
      .buttons-copy{display: none;}
    </style> -->
  </head>
  <body class="animaition">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    

    <!-- Page -->
   <div class="page">
  

      <div class="page-content ">
        <!-- Panel -->
        <div class="panel">
          <div class="panel-body" style="width:400px !important">
                <div class="page-header">
        <h1 class="page-title text-left">Invoice</h1>
        <a class="font-size-20" href="javascript:void(0)">#<?php echo $ordid;?></a>
                  <br> <span>Invoice Date: <?php echo $orderdate;?></span> 
      </div>
            <div class="row">
              <div class="col-lg-3 addrfrom">
                <h3>
                  <img class="mr-10" src="../assets/images/logo.png"
                    alt="...">  </h3>
                <?php
                $addr ='<div id="company">
      <h2 class="name">'.$comanme.'</h2>
      <div>'.$comaddr.'</div>
      <div>'.$comstate.','.$comecountry.','.$comppcode.'</div>
      <div>ABN No : '.$comeabn.'  </div>
      <div>ACN No : '.$comemacn.'  </div>
       <i class="fa fa-phone"></i> : '.$comphone.','.$commobile.'
      <div><i class="fa fa-envelope-o"></i> : '.$comemail.' </div>
    </div>';
    echo  $addr;
                ?>
              </div>
              <div class="col-lg-3 offset-lg-6 text-right addrto custdetto">
                <h4>Invoice Info</h4>
                <p>
                  <a class="font-size-20" href="javascript:void(0)">#<?php echo $ordid;?></a>
                  <br> <span>Invoice Date: <?php echo $orderdate;?></span>

                  <br>  
                  <br>
                   <!-- Billing Address Content -->
                <?php     $cuswhere = array(
                    "cus_id"      =>   $CUSId
                    );
                    $cus_res = $data->select_where('customer',$cuswhere);

?> 
               
                  <span class="font-size-20"><?php echo $cus_res[0]['cus_contact_name']; ?></span>
                </p>
                <address>
                  <?php echo $cus_res[0]['cus_adress']; ?>,
                     <?php echo $cus_res[0]['cus_state']; ?> 
                  <?php echo $cus_res[0]['cus_country']; ?> - <?php echo $cus_res[0]['cus_postcode']; ?>
                  <br>
                  <abbr title="Phone"> <i class="fa fa-phone"></i>:</abbr>&nbsp;&nbsp;<?php echo $cus_res[0]['cus_phone']; ?>, <?php echo $cus_res[0]['cus_mobileno']; ?>
                  <br> 
                    <i class="fa fa-envelope-o"></i> <a mailto:<?php echo $cus_res[0]['cus_email'];?> href="javascript:void(0)"><?php echo $cus_res[0]['cus_email'];?></a>
                </address>
               
                
              </div>
            </div>

            <div class="page-invoice-table table-responsive" style="margin-top:25px">
              <table class="table table-hover text-right">
                <thead>
                  <tr>
                      <th class="text-center" style="width: 100px;">ID</th>
                        <th class="text-center" style="width: 100px;">SOrdID</th>
                        <th>Product Name</th>
                         
                           <th class="text-right" style="width: 10%;">Disc.</th>
                        <th class="text-right" style="width: 10%;">Price</th>
                        <th class="text-right" style="width: 10%;">Total</th>

                    
                  </tr>
                </thead>
             <tbody>
                   <?php
                    $subtotal=0;$totdisamt =0;$twithdisamt=0;
                    $selsale = "SELECT * FROM sales where intOrderId ='".$ordid."'";
                    $qrysal =mysqli_query($conn,$selsale);
                    $j=1;
                    $tot_discount=0;

$slID=1;
                    while($ressal = mysqli_fetch_array($qrysal))
                    {

 /*                   $slID = $ressal['intId'];*/
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

/*echo "<script> alert('".$saletype."')</script>";*/


if($saletype=="manual")
{
$pdtname=$ressal["itemname"];
}
else
{
$pdtname=$item_res[0]['itemname'];
}






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


if($saletype=="manual")
{
  $itmdis = 0;
}




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
 
                


if($saletype=="manual")
{
  $withdisamt = $ressal['item_total'];
  $twithdisamt+=$withdisamt;
}
else
{
        $subtotal+=$totitemprice;

                    
                      $totdisamt += $itmdis;

                     $withdisamt = $totitemprice - $itmdis ;
                     $twithdisamt +=$withdisamt;
}



               
 ?>
                    <tr>
                       <td class="text-center"> <strong> <?php echo $slID;?></strong> </td>
                        <td class="text-center"> <strong>SID.<?php echo $sloid;?></strong> </td>
                        <td> <?php if($saletype=="manual")
{ echo $pdtname.'<br>
                        Quantity : '. $ressal["itemqty"];  } else
{echo $pdtname.'<br>
                        Color : '. $color_res[0]['colour_name'].'  &nbsp; Capacity  : '. $cap_res[0]['capacity_name'];?>&nbsp;IMEI :<?php echo $itemimei;} ?></td>
                       <!--  <td class="text-center"> <a href="salesorderview.php?retid=<?php echo $item_res[0]['intId'];?>&salid=<?php echo $slID;?>&itmqty=<?php echo $ressal['itemqty'];?>&seloid=<?php echo $_REQUEST['seloid'];?>&flag=return" data-toggle="tooltip" title="Return" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a></td> -->
                        <!-- <td class="text-center"><strong>720</strong></td> --> 
                           <td class="text-left"><strong><?php  echo $itmdis;?></strong></td>
                        <td class="text-left"><strong><?php  echo $ressal['itemprice'];?></strong></td> 
                 
                        <td class="text-left"><strong><?php  echo $withdisamt; ?></strong></td>
                    </tr>
                    <?php  $slID++; $j++;
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
                     <tr>
                        <td colspan="5" class="text-right text-uppercase"><strong>Total Discount:</strong></td>
                        <td class="text-right"><strong><?php echo  number_format($tot_discount,2); ?></strong></td>
                    </tr> 
                      <tr>
                        <td colspan="5" class="text-right text-uppercase"><strong>Total Price:</strong></td>
                        <td class="text-right"><strong><?php echo  number_format($twithdisamt,2); ?></strong></td>
                    </tr> 
                      <tr>
                        <td colspan="5" class="text-right text-uppercase"><strong>Net Price:</strong></td>
                        <td class="text-right"><strong><?php echo  number_format($calculatedTaxRate,2); ?></strong></td>
                    </tr> 

                    <tr>
                        <td colspan="5" class="text-right text-uppercase"><strong>Tax rate <?php echo $taxrate.'%'; 

                        ?>:</strong></td>
                        <td class="text-right"><strong><?php echo number_format($taxam,2); ?></strong></td>
                    </tr>
                    

                    <tr class="active">
                        <td colspan="5" class="text-right text-uppercase"><strong>Grand Total  :</strong></td>
                        <td class="text-right"><strong><?php  echo number_format($twithdisamt,2)?></strong></td>
                    </tr>
                </tbody>
              </table>
            </div>
             <div class="col-lg-3 offset-lg-6 text-left addrto cusdet"  >
                <h4>Customer Info</h4>
                 
                   <!-- Billing Address Content -->
                <?php     $cuswhere = array(
                    "cus_id"      =>   $CUSId
                    );
                    $cus_res = $data->select_where('customer',$cuswhere);

?> 
               
                  <span class="font-size-20"><?php echo $cus_res[0]['cus_contact_name']; ?></span>
                </p>
                <address>
                  <?php echo $cus_res[0]['cus_adress']; ?>,
                     <?php echo $cus_res[0]['cus_state']; ?> 
                  <?php echo $cus_res[0]['cus_country']; ?> - <?php echo $cus_res[0]['cus_postcode']; ?>
                  <br>
                  <abbr title="Phone"> <i class="fa fa-phone"></i>:</abbr>&nbsp;&nbsp;<?php echo $cus_res[0]['cus_phone']; ?>, <?php echo $cus_res[0]['cus_mobileno']; ?>
                  <br> 
                    <i class="fa fa-envelope-o"></i> <a mailto:<?php echo $cus_res[0]['cus_email'];?> href="javascript:void(0)"><?php echo $cus_res[0]['cus_email'];?></a>
                </address>
               
                
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
.panel-body {
    position: relative;
    padding: 3px;
}
@page { margin:0mm 0mm; size:auto;}
</style>
<script>
  $(document).ready(function(){

window.print();


setTimeout("closePrintView()", 500);

/*document.location.href = "posale.php";*/
/*window.location.href = "posale.php";*/
  });
 
    
  function closePrintView() {
        document.location.href = "posale.php";
    }

</script>