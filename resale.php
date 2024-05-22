<?php 
error_reporting(1);
include '../inc/dbconnect.php';
include '../inc/page_head.php';
include '../inc/page_navi.php';
include '../inc/page_sidebar.php';   
include '../inc/function.php';

?> 

<?php



$curdate=date('Y-m-d');

$check=mysqli_query($conn,'SELECT * FROM storestats WHERE ent_date = "'.$curdate.'" AND close_time ="0" ');


if(mysqli_num_rows($check)==0)
{
  $stat="OOPs! Counter Closed";

echo "<script> alert('".$stat."')</script>";

echo '<script>window.location.href = "till.php"</script>';
}
$data=new pacific;
$billid=$data->gensoidrs();
if(isset($_POST['submit'])){
/*echo "<script> alert('".$_POST["hiddenSigData"]."')</script>";
die;*/

$customer=mysqli_query($conn,'SELECT * FROM brandmodel WHERE bmodel_id="'.$_POST['Model'].'"');
$brd=mysqli_fetch_array($customer);




 $salesitem=array(   
                "customer_name"     =>     mysqli_real_escape_string($data->con, $_POST['Name']),
                /*"intCompId"      =>     mysqli_real_escape_string($data->con, $_POST['purcompany']),*/
                "contact_no"        =>     mysqli_real_escape_string($data->con, $_POST['comContactNo']),
                "lisence_no"        =>     mysqli_real_escape_string($data->con, $_POST['lisence']),
                "brand"             =>     mysqli_real_escape_string($data->con, $_POST['Brand']),
                "Model"             =>     mysqli_real_escape_string($data->con, $_POST['Model']),
                "color"             =>     mysqli_real_escape_string($data->con, $_POST['Color']), 
                "capacity"          =>     mysqli_real_escape_string($data->con, $_POST['Capacity']),
                "prodname"          =>     mysqli_real_escape_string($data->con, $brd['bmodel_name']),
                "imei"              =>     mysqli_real_escape_string($data->con, $_POST['imei']), 
                "purchase_cost"     =>     mysqli_real_escape_string($data->con, $_POST['Resale']),
                "description"       =>     mysqli_real_escape_string($data->con, $_POST['desc']),
                "signature"         =>     mysqli_real_escape_string($data->con, $_POST["hiddenSigData"]),
                "ent_date"          =>     mysqli_real_escape_string($data->con, $curdate)
           );  

         $insertid = $data->insert('resale_details', $salesitem); 


$salesitem2=array( 
                "ent_date"       =>     mysqli_real_escape_string($data->con, $curdate),
                "amount"         =>     mysqli_real_escape_string($data->con, $_POST['Resale']),
                "invoice"        =>     mysqli_real_escape_string($data->con, $billid), 
                "description"    =>     mysqli_real_escape_string($data->con, "Resale")
           );  
         $insid = $data->insert('till', $salesitem2); 

$rid=6000+$insid;




$checkitems=mysqli_query($conn,'SELECT * FROM items WHERE itemname="'.$_POST['prod_name'].'" AND category="Resale Product" AND brand="'.$_POST['Brand'].'" AND brandmodel="'.$_POST['Model'].'" AND color="'.$_POST['Color'].'" AND capacity="'.$_POST['Capacity'].'";');


if(mysqli_num_rows($checkitems)==0)
{

 $salesitem3=array(   
                "pdt_id"          =>     mysqli_real_escape_string($data->con, $rid),
                "itemname"        =>     mysqli_real_escape_string($data->con, $brd['bmodel_name']),
                "category"        =>     mysqli_real_escape_string($data->con, "Resale Product"),
                "brand"           =>     mysqli_real_escape_string($data->con, $_POST['Brand']),
                "brandmodel"      =>     mysqli_real_escape_string($data->con, $_POST['Model']),
                "qty"             =>     mysqli_real_escape_string($data->con, "1"), 
                "price"           =>     mysqli_real_escape_string($data->con, $_POST['Resale']),
                "color"           =>     mysqli_real_escape_string($data->con, $_POST['Color']),
                "capacity"        =>     mysqli_real_escape_string($data->con, $_POST['Capacity']), 
                "description"     =>     mysqli_real_escape_string($data->con, $_POST['desc']),
                "status"          =>     mysqli_real_escape_string($data->con, "1")
           );  
         $insid = $data->insert('items', $salesitem3); 

}
else
{

$check=mysqli_fetch_array($checkitems);



  $update_imei_id = array(
      "intId"      =>    mysqli_real_escape_string($data->con, $check['intId'])
    );

      $update_imei = array(
        "qty" =>     mysqli_real_escape_string($data->con,$check['qty']+1)
      );

      $updateimei = $data->update('items', $update_imei,$update_imei_id);



$rid=$pdt_id;
}






 $salesitem4=array(   
                "itmId"           =>     mysqli_real_escape_string($data->con, $rid),
                "purprice"        =>     mysqli_real_escape_string($data->con, $_POST['Resale']),
                "itmname"         =>     mysqli_real_escape_string($data->con, $_POST['prod_name']),
                "itmimei"         =>     mysqli_real_escape_string($data->con, $_POST['imei'])
               
           );  
         $insid = $data->insert('itemdetails', $salesitem4); 




$ordid = $insertid;



   $message ='<html>';
  $message .='<body class="email" style="background-color:#F0F6F9;width:100%">
    <div style="height:30px"> </div>
  <table   cellspacing="1" cellpadding="1" width="70%" style="margin:0 auto;background-color:#FFF;box-shadow: 0px 2px 4px #ddd;padding: 30px">
  <tr><td colspan="2"><img src="http://www.cellaphone.com.au/demo/img/logo.png" style="padding:4px;" width="280px"> </td><td colspan="2"> </td></tr> 
    <tr><td colspan="5"></td></tr>
     <tr style="background-color: #F7971B;"><th align="left" colspan="3" style="color: #fff;padding:4px">Invoice NO #'.$ordid.'  </th><th align="right" colspan="2" style="color: #fff;padding:4px">DATE :'.$curdate.'</th></tr>

    <tr><td colspan="3"><div id="company">
      <h2 class="name">'.$comanme.'</h2>
      <div>'.$comaddr.'</div>
      <div>'.$comstate.','.$comecountry.','.$comppcode.'</div>
      <div>ABN No : '.$comeabn.'  </div>
      <div>ACN No : '.$comemacn.'  </div>
       Phone/Mobile : '.$comphone.','.$commobile.'
      <div><a href="mailto:$comemail">'.$comemail.'</a></div>
    </div></td>
    <td colspan="2">';

 $select_pu = "SELECT * FROM resale_details WHERE id = '$ordid'";
                   $qry_con = mysqli_query($conn,$select_pu);
               $res_pur = mysqli_fetch_array($qry_con);
                
          
                      // $cus_email =$res_pur[0]['sup_email'];
           $message .="  <h4><strong>". $res_pur['customer_name']."</strong></h4>
                <address><br>".$res_pur['lisence_no']."<br>"."  
                     <i class='fa fa-phone'></i>  ". $res_pur['contact_no']."
              
                </address>";
          
                

                      
    $message .=' 
    </td>
  </tr>
</table> 
<table   cellspacing="1" cellpadding="1" width="70%" style="margin:0 auto;background-color:#FFF;box-shadow: 0px 2px 4px #ddd;padding: 30px">
  <thead>
     <tr style="background-color: #f6961b;">
        <th style="color: #fff;" class="text-center">#Id</th>
        <th style="color: #fff;" class="text-center"> Product Name</th>
        <th style="color: #fff;" class="text-center">IMEI </th>
        <th style="color: #fff;" class="text-center">Purchase Price</th>
        
    </tr>
  </thead>
  <tbody>';
$select_pu = "SELECT * FROM resale_details WHERE id = '$ordid'";
                   $qry_con = mysqli_query($conn,$select_pu);
               $res_pur = mysqli_fetch_array($qry_con);

$slID=1;
$brand=mysqli_query($conn,'SELECT * FROM brand WHERE intId = "'.$res_pur['brand'].'"');
$brd=mysqli_fetch_array($brand);


 $brand_mod=mysqli_query($conn,'SELECT * FROM brandmodel WHERE bmodel_id = "'.$res_pur['model'].'"');
$brdmod=mysqli_fetch_array($brand_mod);

 $capacity=mysqli_query($conn,'SELECT * FROM capacity WHERE capacity_id = "'.$res_pur['capacity'].'"');
$cap=mysqli_fetch_array($capacity);


  $color=mysqli_query($conn,'SELECT * FROM colour WHERE colour_id = "'.$res_pur['color'].'"');




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




                     $message .=' <tr style="background-color:#f9f9f9">
                        <td class="text-center" style="padding:4px"> <strong>  ID'.$slID.'</strong></td>
                        <td style="padding:4px">
                            <h4>'. $brd['varBrandName'].$brdmod['bmodel_name'].$col['colour_name'].$cap['capacity_name'].'</h4></td>
                          <td class="text-center" style="padding:4px"><strong>'.$res_pur['imei'].'</strong></td> 
                           <td class="text-center" style="padding:4px;text-align:center"><strong>'.$res_pur['purchase_cost'].'</strong></td>                        
                    </tr>';  

                                   $message .='</tbody> 
                                     <tfoot>
    <tr class="active">
    <td>

    <div id="signma" >
  Signature:
  <img src="http://www.infogenx.com/retailpos/admin/test.png" height="100" width="150">

    



    </td>
                        <td colspan="3" class="text-right" style="text-align:right"><span class="h4"><b>TOTAL</b>  :</span></td>
                        <td class="text-left" style="text-align:center"><span class="h4">'.  $res_pur['purchase_cost'].'</span></td>
                    </tr>';
 
                                        
 $message .= '<tr class="active">
                        <td colspan="3" style="text-align:right" class="text-right"><span class="h4" ><b>Purchase Price  </b></span></td>
                        <td class="text-left" style="text-align:center"><span class="h4">'.$res_pur['purchase_cost'].'</span></td>
                    </tr>';
                         
                         $message .= '                     
                    
                    
    <tr><td colspan="5"></td></tr>
    <tr><td colspan="5"></td></tr> 
  </tfoot>
</table>
<div id="thanks" style="width:70%;margin:0 auto;margin-top:30px">Thank you!<br>
  <div id="notices">
        <div>NOTICE:</div>
        <div class="notice">'.$res_pur['description'].'</div>
      </div> </div>
<div style="height:30px"></div>
       
    </body>
    </html>';    
$headers = "From: " .$comanme. strip_tags($comemail) . "\r\n";/*
$headers .= "Reply-To: ". strip_tags($_POST['req-email']) . "\r\n";*/
$headers .= "CC: sindhuja.t@infogenx.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n"; 
//echo $message;die;
 mail($cus_email, 'Invoice From Pacific Force', $message,$headers); 


    echo '<script>  window.location.assign("resale.php");</script>'; 

  }

?>


<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap admin template">
    <meta name="author" content="">
    
    <title>DataTables | Remark Admin Template</title>
    
    <link rel="apple-touch-icon" href="../assets/images/apple-touch-icon.png">
    <link rel="shortcut icon" href="../assets/images/favicon.ico">
     
    <link type="text/css" href="../global/css/jquery.signature.css" rel="stylesheet"> 
    <!-- Stylesheets -->
    <link rel="stylesheet" href="../global/css/bootstrap.min.css">
    <link rel="stylesheet" href="../global/css/bootstrap-extend.min.css">
    <link rel="stylesheet" href="../assets/css/site.min.css">
    

<link type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css" rel="stylesheet"> 


    <!-- Plugins -->
    <link rel="stylesheet" href="../global/vendor/animsition/animsition.css">
    <link rel="stylesheet" href="../global/vendor/asscrollable/asScrollable.css">
    <link rel="stylesheet" href="../global/vendor/switchery/switchery.css">
    <link rel="stylesheet" href="../global/vendor/intro-js/introjs.css">
    <link rel="stylesheet" href="../global/vendor/slidepanel/slidePanel.css">
    <link rel="stylesheet" href="../global/vendor/flag-icon-css/flag-icon.css">
        <link rel="stylesheet" href="../global/vendor/datatables.net-bs4/dataTables.bootstrap4.css">
        <link rel="stylesheet" href="../global/vendor/datatables.net-fixedheader-bs4/dataTables.fixedheader.bootstrap4.css">
        <link rel="stylesheet" href="../global/vendor/datatables.net-fixedcolumns-bs4/dataTables.fixedcolumns.bootstrap4.css">
        <link rel="stylesheet" href="../global/vendor/datatables.net-rowgroup-bs4/dataTables.rowgroup.bootstrap4.css">
        <link rel="stylesheet" href="../global/vendor/datatables.net-scroller-bs4/dataTables.scroller.bootstrap4.css">
        <link rel="stylesheet" href="../global/vendor/datatables.net-select-bs4/dataTables.select.bootstrap4.css">
        <link rel="stylesheet" href="../global/vendor/datatables.net-responsive-bs4/dataTables.responsive.bootstrap4.css">
        <link rel="stylesheet" href="../global/vendor/datatables.net-buttons-bs4/dataTables.buttons.bootstrap4.css">
        <link rel="stylesheet" href="../assets/examples/css/tables/datatable.css">
    
   
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
    <!-- Fonts -->
        <link rel="stylesheet" href="../global/fonts/font-awesome/font-awesome.css">
    <link rel="stylesheet" href="../global/fonts/web-icons/web-icons.min.css">
    <link rel="stylesheet" href="../global/fonts/brand-icons/brand-icons.min.css">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
    



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
      .col-lg-6{float:left;}
      .col-md-offset-3 .btn{margin-bottom: 20px !important;}
    </style>
  </head>
  <body class="animsition">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- Page -->
    <div class="page">
      <div class="page-header">
        <h1 class="page-title">Stock Resale</h1>
        
        <div class="page-header-actions">
     <a class="btn btn-sm btn-default btn-outline btn-round" href="resalespurchase.php" target="resalespurchase.php">
        <i class="icon wb-link" aria-hidden="true"></i>
        <span class="hidden-sm-down">View Resale</span>
      </a>
        </div>
      </div>

      <form action="" method="post" name="companyform" id="companyname" enctype="multipart/form-data" class="form-horizontal form-bordered">
       <div class="col-lg-6">
  <div class="panel">
            <!-- Basic Form Elements Block -->
            <div class="block">
                <!-- Basic Form Elements Title -->
                <!-- END Form Elements Title -->

                <!-- Basic Form Elements Content -->
               
                   <br>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="comName-text-input">Customer Name</label>
                        <div class="col-md-9 txtOnly">
                            <input type="text" id="Name" name="Name" class="form-control" placeholder="Name" value="" required="">
                           <!--  <span class="help-block">This is a help text</span> -->
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="col-md-3 control-label" for="comcontName-text-input">Contact No</label>
                        <div class="col-md-9 nametxtOnly">
                            <input type="text" id="comContactNo" name="comContactNo" class="form-control" placeholder="Contact No" value="" required="">
                           <!--  <span class="help-block">This is a help text</span> -->
                        </div>
                    </div>

                     <div class="form-group">
                        <label class="col-md-3 control-label" for="comcontName-text-input">Lisence Number</label>
                        <div class="col-md-9 nametxtOnly">
                            <input type="text" id="lisence" name="lisence" class="form-control" placeholder="Lisence Number" value="" required="">
                           <!--  <span class="help-block">This is a help text</span> -->
                        </div>
                    </div>



                    <div class="form-group">
                        <label class="col-md-3 control-label" for="comEmail">Brand</label>
                        <div class="col-md-9">
                    <select data-plugin="selectpicker" id="Brand" name="Brand" class="form-control" required >
                   

<option value="0">Select Brand</option>
                    <?php

$customer=mysqli_query($conn,'SELECT * FROM brand');

while($cust = mysqli_fetch_array($customer))
{
?>
  <option value="<?php echo $cust['intId']; ?>"><?php echo $cust['varBrandName']; ?></option>                  
<?php 
}
?>            </select>
     </div>
                    </div>
                       <div class="form-group">
                        <label class="col-md-3 control-label" for="comName-text-input">Model No</label>
                        <div class="col-md-9 txtOnly">
                                                <select data-plugin="selectpicker" id="Model" name="Model" class="form-control"required >
                    <?php


$customer1=mysqli_query($conn,'SELECT * FROM brandmodel');
echo'<option value="0">Select Brand Model</option>';
while($cust1=mysqli_fetch_array($customer1))
{
?>

                       <option value="<?php echo $cust1['bmodel_id'] ?>"><?php echo $cust1['bmodel_name'] ?></option>
                      


<?php 
}
?>


                 </select>
                          
                           <!--  <span class="help-block">This is a help text</span> -->
                        </div>
                    </div>
 <div class="form-group">
                        <label class="col-md-3 control-label" for="comName-text-input">Color</label>
                        <div class="col-md-9 txtOnly">
                    <select data-plugin="selectpicker" id="Color" name="Color" class="form-control" required>
                    <?php


$cust=mysqli_query($conn,'SELECT * FROM colour');
echo'<option value="0">Select Color</option>';
while($cus=mysqli_fetch_array($cust))
{
?>
  <option value="<?php echo $cus['colour_id'] ?>"><?php echo $cus['colour_name']; ?></option>                  
<?php 
}
?>            </select>

                            <!-- <input type="text" id="Color" name="Color" class="form-control" placeholder="Color" value="" required=""> -->
                           <!--  <span class="help-block">This is a help text</span> -->
                        </div>
                    </div>
<div class="form-group">
                        <label class="col-md-3 control-label" for="comName-text-input">Capacity</label>
                        <div class="col-md-9 txtOnly">
<select data-plugin="selectpicker" id="Capacity" name="Capacity" class="form-control" required>
                    <?php


$custo=mysqli_query($conn,'SELECT * FROM capacity');
echo'<option value="0">Select capacity</option>';
while($cust=mysqli_fetch_array($custo))
{
?>
  <option value="<?php echo $cust['capacity_id'] ?>"><?php echo $cust['capacity_name']; ?></option>                  
<?php 
}
?>            </select>                           <!--  <span class="help-block">This is a help text</span> -->
                        </div>
                    </div>
              

                    <br>
                    </div>
                   

                    

                   
               
                <!-- END Basic Form Elements Content -->
            </div>
            <!-- END Basic Form Elements Block -->
        </div>
         <div class="col-lg-6">
  <div class="panel">
            <!-- Basic Form Elements Block -->
            <div class="block">
                 <br>

                         
                     
<!--       <div class="form-group">
                        <label class="col-md-3 control-label" for="comName-text-input">Product Name</label>
                        <div class="col-md-9 txtOnly">
<input type="text" id="prod_name" name="prod_name" class="form-control" placeholder="Product Name" value="" required="">
                          
                            <span class="help-block">This is a help text</span>
                        </div>
                    </div> -->

                     <div class="form-group">
                        <label class="col-md-3 control-label" for="comcontName-text-input">IMEI</label>
                        <div class="col-md-9 nametxtOnly">
                            <input type="text" id="imei" name="imei" class="form-control" placeholder="IMEI" value="" required="">
                           <!--  <span class="help-block">This is a help text</span> -->
                        </div>
                    </div>



                    <div class="form-group">
                        <label class="col-md-3 control-label" for="comEmail">Resale value</label>
                        <div class="col-md-9">
                            <input type="text" id="Resale" name="Resale" class="form-control" placeholder="Resale value" value="" required="">
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="comEmail">Description</label>
                        <div class="col-md-9">
<textarea id="desc" name="desc" height="20" ></textarea>

                           <!--  <input type="email" id="Resale" name="Resale" class="form-control" placeholder="Resale value" value="" required=""> -->
                            
                        </div>
                    </div>

<!-- Button trigger modal -->
<div class="form-group">
<input type="checkbox" name="check" id="check" value="check" data-toggle="modal" data-target="#exampleModalLong">
  I Agree the Terms and Conditions

</div>
<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Terms And Conditions</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="modal-body">
        <p>Terms and Conditions are a set of rules and guidelines that a user must agree to in order to use your website or mobile app. </p>
        <p>It acts as a legal contract between you (the company) who has the website or mobile app and the user who access your website and mobile app.</p>
        <p>It’s up to you to set the rules and guidelines that the user must agree to. You can think of your Terms and Conditions agreement as the legal agreement where you maintain your rights to exclude users from your app in the event that they abuse your app, and where you maintain your legal rights against potential app abusers, and so on.</p>
        <p>Terms and Conditions are also known as Terms of Service or Terms of Use.</p>
        <p>This type of legal agreement can be used for both your website and your mobile app. It’s not required (it’s not recommended actually) to have separate Terms and Conditions agreements: one for your website and one for your mobile app.</p>
   
      </div>
      </div>
      <div class="form-group" id="signaturediv">    
               <label class="col-md-3 control-label" for="
               " required="">Signature</label>  
<div id="signatureDiv">
 
 <canvas  class="jSignature" width="856" ></canvas>.

</div>
<button name="signclear"  onclick="return signclr()">Clear Sign</button>
</div>
<input type="hidden" id="hiddenSigData" value="goos" name="hiddenSigData"  />

      <div class="modal-footer">
        <button type="submit" name="submit" class="btn btn-primary" id="comsubmit" data-dismiss="modal">I Agree</button>
         <button type="button" id="comsubmit" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



<!-- 
               <div class="form-group">
                    <input type="checkbox" required name="check" value="check" id="check"> I Agree the <a href ="#" onclick="myFunction()" >Terms and Conditions</a>
                  </div> -->
<!-- <div id="signatureDiv" style="width: 450px; height: 200px;" class="form-control kbw-signature"><canvas width="424" height="186">Your browser doesn't support signing</canvas></div> -->
                      <div class="form-group form-actions">
                        <div class="col-md-9 col-md-offset-3">

                            <button type="submit" name="submit" class="btn btn-sm btn-primary" id="comsubmit"><i class="fa fa-angle-right"></i> Submit</button>
                            <input type="hidden" name="taction" value="Add">
                            <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button>

                        </div>
                    </div>



                    
            </div>
</div>
        </div>
       
         </form>
                 
    </div>

    <!-- End Page -->

<!-- <script>

$( document ).ready(function() {
var div1 = $('#check').val();

if(div1!="checked")
{
   $('#signaturediv').hide();
  $('#hiddenSigData').hide();
 }
});

    </script> -->
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
    <script>Config.set('assets', '../../assets');</script>
    
   
    <script src="../assets/js/Site.js"></script>
    <script src="../global/js/Plugin/asscrollable.js"></script>
    <script src="../global/js/Plugin/slidepanel.js"></script>
    <script src="../global/js/Plugin/switchery.js"></script>
       



 <script src="../global/js/Plugin/datatables.js"></script>
    
        <script src="../assets/examples/js/tables/datatable.js"></script>
  </body>
</html>
<?php include '../inc/page_footer.php';  ?>




    <script src="../assets/js/jquery.signfield-en.min.js"></script>
    <script src="../assets/js/jquery.signfield.min.js"></script>

    <script  src="../assets/js/jquery.ui.touch-punch.min.js"></script>
    <script src="../assets/js/jquery.signature.js"></script>


<script src="../assets/js/flashcanvas.js"></script>

  <script src="../assets/js/jSignature.min.js"></script>





<script>
function signclr()
{
  $("#signatureDiv").empty("");
    $("#signatureDiv").jSignature();
    return false;
}

</script>

<script>
 $('#comsubmit').click(function(){

            var sigData = $('#signatureDiv').jSignature('getData','base30');
            $('#hiddenSigData').val(sigData);
         });

</script>

<script>
$('#imei').change(function(){
/*     var id = $(this).attr('id');*/

/*alert(id);*/

  var is=$("#imei").val();
/*  alert(is);*/
$.ajax({
  'async': false,
  type: "POST",
      url: "check_item.php",
        data:{id: is},
        dataType: "json",
      success: function(data){
/*alert(data);*/

if(data.values=="False")
{
   return false;

}
else
{
  alert("IMEI Aleready in DB");
$("#imei").val("");
$("#imei").focus();
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

});

</script>
<script>
$(document).ready(function() {
$("#signatureDiv").empty("");
          $("#signatureDiv").jSignature();

          /*alert("hjhui");*/
      });


$('#signatureDiv').signature(); 
 alert("goos");
$('#removeSignature').click(function() { 
    var destroy = $(this).text() === 'Remove'; 
    $(this).text(destroy ? 'Re-attach' : 'Remove'); 
    $('#signatureDiv').signature(destroy ? 'destroy' : {}); 
}); 
 
$('#disableSignature').click(function() { 
    var enable = $(this).text() === 'Enable'; 
    $(this).text(enable ? 'Disable' : 'Enable'); 
    $('#signatureDiv').signature(enable ? 'enable' : 'disable'); 
});

</script>