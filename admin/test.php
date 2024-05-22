<?php
session_start();
include '../inc/dbconnect.php';
include '../inc/function.php';   
include '../inc/page_head.php';

if(isset($_REQUEST['print_id'])){

$type=0;


$print_output=$_REQUEST['print_id'];







$data=new pacific;
$ordid = $_REQUEST['print_id'];

 /* echo "<script> alert('".$ordid."')</script>";*/


if($_REQUEST['print_id']!="")
{

  $ids=mysqli_query($conn,'SELECT * FROM sales WHERE intId ="'.$_REQUEST['print_id'].'" ;');

$cust=mysqli_fetch_array($ids);

$ordid=$cust['intOrderId'];

  /*echo "<script> alert('".$ordid."')</script>";*/
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

?> 
 
    
    
    
    <script src="../global/vendor/breakpoints/breakpoints.js"></script>
    <script>
      Breakpoints();
    </script>
    <style type="text/css">
      .buttons-copy{display: none;}
    </style>
  </head>



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

    $cuswhere = array(
                    "cus_id"      =>   $CUSId
                    );
                    $cus_res = $data->select_where("customer",$cuswhere);

  





  $print_output='
  <body class="animsition">
   <div class="page">
  

      <div class="page-content ">
        <!-- Panel -->
        <div class="panel">
          <div class="panel-body" style="width:500px !important">
                <div class="page-header">
        <h1 class="page-title text-left">Invoice</h1>
        <a class="font-size-20" href="javascript:void(0)">#'. $ordid.'</a>
                  <br> <span>Invoice Date: '.$orderdate.'</span> 
      </div>
            <div class="row">
              <div class="col-lg-3 addrfrom">
                <h3>
                  <img class="mr-10" src="../assets/images/logo.png"
                    alt="...">  </h3>
           
             
  '. $addr.'
               
              </div>
              <div class="col-lg-3 offset-lg-6 text-right addrto custdetto">
                <h4>Invoice Info</h4>
                <p>
                  <a class="font-size-20" href="javascript:void(0)">#'.  $ordid .'</a>
                  <br> <span>Invoice Date: '.  $orderdate .'</span>

                  <br>  
                  <br>
                   <!-- Billing Address Content -->
             
               
                  <span class="font-size-20">'. $cus_res[0]["cus_contact_name"].'</span>
                </p>
                <address>
                 '. $cus_res[0]['cus_adress'] .','.
                    $cus_res[0]['cus_state'] .','.
                    $cus_res[0]['cus_country'].'-'.$cus_res[0]['cus_postcode'].' 
                  <br>
                  <abbr title="Phone"> <i class="fa fa-phone"></i>:</abbr>&nbsp;&nbsp; '. $cus_res[0]['cus_phone'].','. $cus_res[0]['cus_mobileno'].' 
                  <br> 
                    <i class="fa fa-envelope-o"></i> <a mailto:'. $cus_res[0]['cus_email'] .' href="javascript:void(0)">'. $cus_res[0]['cus_email'].'</a>
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
                         
                           <th class="text-right" style="width: 10%;">Discount</th>
                        <th class="text-right" style="width: 10%;">Price</th>
                        <th class="text-right" style="width: 10%;">Total</th>

                    
                  </tr>
                </thead>
                <tbody>'.
                  
                    $subtotal=0;$totdisamt =0;$twithdisamt=0;
                    $selsale = "SELECT * FROM sales where intOrderId ='".$ordid."'";
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

'
                    <tr>
                       <td class="text-center"> <strong> '.$slID.' </strong> </td>
                        <td class="text-center"> <strong>SID.'. $sloid .'</strong> </td>
                        <td> '. $item_res[0]['itemname'].'<br>
                        Color : '. $color_res[0]['colour_name'].'  &nbsp; Capacity  : '. $cap_res[0]['capacity_name'].' &nbsp;IMEI : '. $itemimei .'</td>
                     
                           <td class="text-right"><strong>'. $itmdis .'</strong></td>
                        <td class="text-right"><strong>'. $ressal['itemprice'] .' </strong></td> 
                 
                        <td class="text-right"><strong>'. $withdisamt .'</strong></td>
                    </tr>
'.
                      $j++;
                  }  

$twithdisamt-=$tot_discount;

                     $dispres +=$itmdis;
                          $disamt = $subtotal * $dispres/100; 
                             $subts = $subtotal - $disamt; 

                               $subt = $subtotal - $taxamt;
                            $taxamt = $twithdisamt * $taxrate/100;

                      $taxam=$twithdisamt- ($twithdisamt *(100/(100+$taxrate)));
                      $calculatedTaxRate =  $twithdisamt -$taxam ;

                          
                          
            '
                     <tr>
                        <td colspan="5" class="text-right text-uppercase"><strong>Total Discount:</strong></td>
                        <td class="text-right"><strong>'.  number_format($tot_discount,2).'</strong></td>
                    </tr> 
                      <tr>
                        <td colspan="5" class="text-right text-uppercase"><strong>Total Price:</strong></td>
                        <td class="text-right"><strong>'.  number_format($twithdisamt,2).'</strong></td>
                    </tr> 
                      <tr>
                        <td colspan="5" class="text-right text-uppercase"><strong>Net Price:</strong></td>
                        <td class="text-right"><strong>'.number_format($calculatedTaxRate,2).'</strong></td>
                    </tr> 

                    <tr>
                        <td colspan="5" class="text-right text-uppercase"><strong>Tax rate '. $taxrate.'%'.':</strong></td>
                        <td class="text-right"><strong>'. number_format($taxam,2) .'</strong></td>
                    </tr>
                    

                    <tr class="active">
                        <td colspan="5" class="text-right text-uppercase"><strong>Grand Total  :</strong></td>
                        <td class="text-right"><strong>'. number_format($twithdisamt,2).'</strong></td>
                    </tr>
                </tbody>
              </table>
            </div>
             <div class="col-lg-3 offset-lg-6 text-left addrto cusdet"  >
                <h4>Customer Info</h4>
                 
                   <!-- Billing Address Content -->

                   
               
                  <span class="font-size-20">'. $cus_res[0]['cus_contact_name'].'</span>
                </p>
                <address>
                  '.$cus_res[0]['cus_adress'] .',
                     '. $cus_res[0]['cus_state'].',

                     '. $cus_res[0]['cus_country'].' - '.$cus_res[0]['cus_postcode'].'
                  <br>
                  <abbr title="Phone"> <i class="fa fa-phone"></i>:</abbr>&nbsp;&nbsp;'. $cus_res[0]['cus_phone'].', '. $cus_res[0]['cus_mobileno'].'
                  <br> 
                    <i class="fa fa-envelope-o"></i> <a mailto:'. $cus_res[0]['cus_email'] .' href="javascript:void(0)">'. $cus_res[0]['cus_email'].'</a>
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
';




/*echo $print_output;*/








}
try
{

	
$name=$_SESSION['name'];




$brands=mysqli_query($conn,'SELECT * FROM printer_sett WHERE user_name ="'.$name.'"');

    $brd=mysqli_fetch_array($brands);

if(mysqli_num_rows($brands)==0)
{
	$type=2;
}

else
{
	$fp=pfsockopen($brd['ip'], $brd['port']);
/*    $what=fputs($fp, $print_output);
    fclose($fp);*/


/*$fp=pfsockopen("POS-X Receipt Printer", "w");*/
	/*$fp=fopen('',"w");*/
if($fp) {

/*	ftp_put($fp,'copies=1',$print_output,FTP_BINARY);*/
	fputs($fp, $print_output);

    fclose($fp);
     echo "<script> alert('Successfully Printed')</script>";

 echo '<script>window.location.href = "posale.php"</script>';

}
else
{
	$type=2;
}
    






}
    
}
catch (Exception $e) 
{
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}


if($type==2)
{

 echo '<script>window.location.href = "salesprint.php?print_id='.$_REQUEST['print_id'].'"</script>';
    
}

