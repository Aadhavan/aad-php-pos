<?php 
include '../inc/dbconnect.php';
include '../inc/page_head.php';
include '../inc/page_navi.php';
include '../inc/page_sidebar.php';   
include '../inc/function.php';   

$data=new pacific;
 


$data=new pacific;
$ordid = $_REQUEST['seloid'];
$curdate =  date('Y-m-d');


$select_pu = "SELECT * FROM resale_details WHERE id = '$ordid'";
                   $qry_con = mysqli_query($conn,$select_pu);
               $res_pur = mysqli_fetch_array($qry_con);


/*echo "<script> alert('".$res_pur['ent_date']."')</script>";*/


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
                  <br> <span>Invoice Date: <?php echo $res_pur['ent_date'];?></span> 
      </div>

      <div class="page-content">
        <!-- Panel -->
        <div class="panel">
          <div class="panel-body container-fluid">
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
                  <br> <span>Invoice Date: <?php echo  $res_pur['ent_date'];?></span>

                  <br>  
                  <br>
                   <!-- Billing Address Content -->
                <?php     


$brand=mysqli_query($conn,'SELECT * FROM brand WHERE intId = "'.$res_pur['brand'].'"');
$brd=mysqli_fetch_array($brand);


 $brand_mod=mysqli_query($conn,'SELECT * FROM brandmodel WHERE bmodel_id = "'.$res_pur['model'].'"');
$brdmod=mysqli_fetch_array($brand_mod);

 $capacity=mysqli_query($conn,'SELECT * FROM capacity WHERE capacity_id = "'.$res_pur['capacity'].'"');
$cap=mysqli_fetch_array($capacity);


  $color=mysqli_query($conn,'SELECT * FROM colour WHERE colour_id = "'.$res_pur['color'].'"');
$col=mysqli_fetch_array($color);










?> 

 
               
                  <span class="font-size-20"><?php echo $res_pur['customer_name']; ?></span>
                </p>
                <address>
              Lisence :     <?php echo $res_pur['lisence_no']; ?>,
                  
                  <br>
                 <abbr title="Phone"> <i class="fa fa-phone"></i>:</abbr>&nbsp;&nbsp;<?php echo $res_pur['contact_no']; ?>
                  <br> 
                   
                </address>
               
                
              </div>
            </div>

            <div class="page-invoice-table table-responsive" style="margin-top:25px">
              <table class="table table-hover text-right">
                <thead>
                  <tr>
                      <th class="text-center" style="width: 100px;">ID</th>
                        <!-- <th class="text-center" style="width: 100px;">SOrdID</th> -->
                        <th>Product Name</th>
                         
                           <th class="text-right" style="width: 10%;">IMEI</th>
                        <th class="text-right" style="width: 10%;">Purchase Price</th>
                      <!--   <th class="text-right" style="width: 10%;">Total</th> -->

                    
                  </tr>
                </thead>
                <tbody>
                   <?php
                   $slID=1;
               
 ?>
                    <tr>
                       <td class="text-center"> <strong> <?php echo $slID;?></strong> </td>
                       <!--  <td class="text-center"> <strong>SID.<?php echo $sloid;?></strong> </td> -->
                        <td> <?php echo $brd['varBrandName'].$brdmod['bmodel_name'].$col['colour_name'].$cap['capacity_name'];?></td>
                       <!--  <td class="text-center"> <a href="salesorderview.php?retid=<?php echo $item_res[0]['intId'];?>&salid=<?php echo $slID;?>&itmqty=<?php echo $ressal['itemqty'];?>&seloid=<?php echo $_REQUEST['seloid'];?>&flag=return" data-toggle="tooltip" title="Return" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a></td> -->
                        

                        <td class="text-right"><strong><?php echo $res_pur['imei']; ?></strong></td>
                        <td class="text-right"><strong><?php  echo $res_pur['purchase_cost'];?></strong></td> 
                 
                       <!--  <td class="text-right"><strong><?php  echo $withdisamt; ?></strong></td> -->
                    </tr>
                    <?php  $j++;
              

$twithdisamt-=$tot_discount;

                     $dispres +=$itmdis;
                          $disamt = $subtotal * $dispres/100; 
                             $subts = $subtotal - $disamt; 

                               $subt = $subtotal - $taxamt;
                            $taxamt = $twithdisamt * $taxrate/100;

                      $taxam=$twithdisamt- ($twithdisamt *(100/(100+$taxrate)));
                      $calculatedTaxRate =  $twithdisamt -$taxam ;

                          
                          
                    ?> 
        <!--              <tr>
                        <td colspan="3" class="text-right text-uppercase"><strong>Total Discount:</strong></td>
                        <td class="text-right"><strong><?php echo  number_format($tot_discount,2); ?></strong></td>
                    </tr>  -->
                      <tr>
                        <td colspan="3" class="text-right text-uppercase"><strong>Total Price:</strong></td>
                        <td class="text-right"><strong><?php echo $res_pur['purchase_cost']; ?></strong></td>
                    </tr> 
         <!--              <tr>
                        <td colspan="3" class="text-right text-uppercase"><strong>Net Price:</strong></td>
                        <td class="text-right"><strong><?php echo  number_format($calculatedTaxRate,2); ?></strong></td>
                    </tr> --> 

<!--                     <tr>
                        <td colspan="3" class="text-right text-uppercase"><strong>Tax rate <?php echo $taxrate.'%'; 

                        ?>:</strong></td>
                        <td class="text-right"><strong><?php echo number_format($taxam,2); ?></strong></td>
                    </tr> -->
                    

                    <tr class="active">
                        <td colspan="3" class="text-right text-uppercase"><strong>Purchase Price  :</strong></td>
                        <td class="text-right"><strong><?php echo $res_pur['purchase_cost'];?></strong></td>
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
<div class="text-left">
             <!--  <button type="submit" class="btn btn-animate btn-animate-side btn-primary">
                <span><i class="icon wb-shopping-cart" aria-hidden="true"></i> Proceed
                  to payment</span>
              </button> -->
             <!--  <button type="button" class="btn btn-animate btn-animate-side btn-default btn-outline"
                onclick="javascript:window.print();">
                <span><i class="icon wb-print" aria-hidden="true"></i> Print</span>
              </button> -->
<?php
require_once('jSignature_Tools_Base30.php');

function base30_to_jpeg($base30_string, $output_file) {

    $data = str_replace('image/jsignature;base30,', '', $base30_string);
    $converter = new jSignature_Tools_Base30();
    $raw = $converter->Base64ToNative($data);
//Calculate dimensions
$width = 0;
$height = 0;
foreach($raw as $line)
{
    if (max($line['x'])>$width)$width=max($line['x']);
    if (max($line['y'])>$height)$height=max($line['y']);
}

// Create an image
    $im = imagecreatetruecolor($width+20,$height+20);


// Save transparency for PNG
    imagesavealpha($im, true);
// Fill background with transparency
    $trans_colour = imagecolorallocatealpha($im, 255, 255, 255, 127);
    imagefill($im, 0, 0, $trans_colour);
// Set pen thickness
    imagesetthickness($im, 2);
// Set pen color to black
    $black = imagecolorallocate($im, 0, 0, 0);   
// Loop through array pairs from each signature word
    for ($i = 0; $i < count($raw); $i++)
    {
        // Loop through each pair in a word
        for ($j = 0; $j < count($raw[$i]['x']); $j++)
        {
            // Make sure we are not on the last coordinate in the array
            if ( ! isset($raw[$i]['x'][$j])) 
                break;
            if ( ! isset($raw[$i]['x'][$j+1])) 
            // Draw the dot for the coordinate
                imagesetpixel ( $im, $raw[$i]['x'][$j], $raw[$i]['y'][$j], $black); 
            else
            // Draw the line for the coordinate pair
            imageline($im, $raw[$i]['x'][$j], $raw[$i]['y'][$j], $raw[$i]['x'][$j+1], $raw[$i]['y'][$j+1], $black);
        }
    } 

//Create Image
    $ifp = fopen($output_file, "wb"); 
    imagepng($im, $output_file);
    fclose($ifp);  
    imagedestroy($im);

    return $output_file; 
}

//test
$imgStr=$res_pur['signature'];

$sogan=base30_to_jpeg($imgStr, 'test.png');


?>
<div id="signma" >
  Signature:
  <img src="<?php echo $sogan; ?>" height="62" width="150">

</div>

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

            <div class="text-right">
             <!--  <button type="submit" class="btn btn-animate btn-animate-side btn-primary">
                <span><i class="icon wb-shopping-cart" aria-hidden="true"></i> Proceed
                  to payment</span>
              </button> -->
              <button type="button" class="btn btn-animate btn-animate-side btn-default btn-outline"
                onclick="javascript:window.print();">
                <span><i class="icon wb-print" aria-hidden="true"></i> Print</span>
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


<script src="../assets/js/flashcanvas.js"></script>

  <script src="../assets/js/jSignature.min.js"></script>






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
  $(document).ready(function(){

window.print();

  });
 
  </script>