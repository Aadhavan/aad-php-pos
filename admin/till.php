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
$data=new pacific;
$curdate=date('Y-m-d');



if(isset($_POST['submit'])){


/*echo "<script> alert('".$_POST['submit']."')</script>";*/
if($_POST['submit']=="amtsubmit")
{
if($_POST['amount']!=""&&$_POST['decription']!="")
{
 $salesitem=array( 
                "ent_date"       =>     mysqli_real_escape_string($data->con, $curdate),
                "amount"         =>     mysqli_real_escape_string($data->con, $_POST['amount']),         
                "description"    =>     mysqli_real_escape_string($data->con, $_POST['decription'])
           );  
         $insid = $data->insert('till', $salesitem);         
}
else
{
  echo "<script> alert('Amount and Description Should not be Empty')</script>";
}

}
elseif($_POST['submit']=="Open Counter")
{

$t=date('H:i:s');

/*echo "<script> alert('".$t."')</script>";
die;*/

 $salesitem=array( 
                "ent_date"       =>     mysqli_real_escape_string($data->con, $curdate),
                "open_time"         =>     mysqli_real_escape_string($data->con, $t)
           );  
         $insid = $data->insert('storestats', $salesitem); 




echo '<script>window.location.href = "posale.php"</script>';



}
elseif($_POST['submit']=="Close Counter")
{
$t=date('H:i:s');

  $update_inv_id = array(
      "ent_date"      =>    mysqli_real_escape_string($data->con, $curdate)
    );

      $update_inv = array(
        "close_time" =>     mysqli_real_escape_string($data->con,$t)
      );

      $update_inventory = $data->update('storestats', $update_inv,$update_inv_id);

  
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
   /*#upd-row{float: left;width:100%;overflow-y:auto;height: 340px;}*/
 </style>




<div class="page">


  <div class="page-content container-fluid">
    <form method="POST" action="" name="companyform" id="companyname" enctype="multipart/form-data" class="form-horizontal form-bordered">


                  
    <div class="row">

       <div class="col-lg-6">
           <div class="panel">
     
     <div class="panel-body panel-collapse"> 
<?php
$check=mysqli_query($conn,'SELECT * FROM storestats WHERE ent_date = "'.$curdate.'" AND close_time ="0" ');


if(mysqli_num_rows($check)==0)
{
  $stat="Closed";
}
else
{
  $stat="Open";
}

?>

            <table class="table table-hover" data-role="content" data-plugin="selectable" data-row-selectable="true" > 
              <tr ><td>Date</td><td> <?php echo $curdate;?></td></tr> 
              <tr ><td>Store</td><td><b> <?php echo $stat;?></b></td></tr>
    </table>
               
                    </div>
              
               
                <!-- END Basic Form Elements Content -->
            
            <!-- END Basic Form Elements Block -->
        </div>
     <div class="panel">

     <div class="panel-body panel-collapse"> 


                   
    
                <!-- Example Tabs -->
               
            <!-- <div class="btn-group" role="group">
            <a class="btn" href="javascript:void(0)" role="button"><i class="icon wb-search" aria-hidden="true"></i></a>
              <a class="btn" href="javascript:void(0)" role="button"><i class="icon fa-barcode" aria-hidden="true"></i></i></a> 
              
            </div> -->


                              <div class="form-group">
                        <label class="col-md-3 control-label" for="comName-text-input">Cash Amount</label>
                        <div class="col-md-9 txtOnly">
                            <input type="text" id="amount" name="amount" class="form-control" placeholder="Amount" value="<?php echo $com['com_name']; ?>" >
                           <!--  <span class="help-block">This is a help text</span> -->
                        </div>
                    </div>
       
                                        <div class="form-group">
                        <label class="col-md-3 control-label" for="comName-text-input">Description</label>
                        <div class="col-md-9 txtOnly">
                            <input type="text" size="50" id="decription"  name="decription" class="form-control" placeholder="Description" value="<?php echo $com['com_name']; ?>" >
                           <!--  <span class="help-block">This is a help text</span> -->
                        </div>
                    </div>


                                          <div class="form-group form-actions">
                        <div class="col-md-9 col-md-offset-3">
                          <br>
                          
                            <button type="submit" value="amtsubmit" name="submit" class="btn btn-sm btn-primary" id="comsubmit"><i class="fa fa-angle-right"></i> Add Amount</button>
                            <input type="hidden" name="taction" value="<?php if($_REQUEST['flag'] =='Edit') echo $_REQUEST['flag']; else echo 'Add'; ?>">
                          
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

<?php

$totalval=0;

                      $tdate=date('Y-m-d');

$brands=mysqli_query($conn,'SELECT * FROM till WHERE description <> "Sales" AND description <> "Resale" AND description <> "Refund" AND ent_date="'.$tdate.'" ');
/*
echo 'SELECT * FROM till WHERE description <> "Sales" OR description <> "Resale" AND ent_date="'.$tdate.'" ';*/

while($brds=mysqli_fetch_array($brands))
{

$totalval+=$brds['amount'];

}


$samt=0;
$sales=mysqli_query($conn,'SELECT * FROM till WHERE description = "Sales" AND ent_date="'.$tdate.'" ');

while($sal=mysqli_fetch_array($sales))
{
$samt+=$sal['amount'];

}
$totalval+=$samt;
$rsamt=0;
$resales=mysqli_query($conn,'SELECT * FROM till WHERE description = "Resale" AND ent_date="'.$tdate.'" ');

while($rsal=mysqli_fetch_array($resales))
{
$rsamt+=$rsal['amount'];

}
$totalval-=$rsamt;




$refund=mysqli_query($conn,'SELECT * FROM till WHERE description = "Refund" AND ent_date="'.$tdate.'" ');

while($ref=mysqli_fetch_array($refund))
{
$refunds+=$ref['amount'];

}
$totalval-=$refunds;



?>



  <div class="panel top-bar" style="height: 500px; margin-bottom: 0px">
            <!-- Basic Form Elements Block -->
            <div class="panel-body panel-collapse" style="  padding-bottom: 0px">
                <div class="example">
                    <h2>Cash Available  : $ <?php echo $totalval;  ?></h2>
                  </div>
    
                               
           </div>


             
           <div id="dtatab" class="example" style=" ">
                <div class="table-responsive">
                	<div style="height:390px; overflow-y: scroll;">
                  <table class="table table-hover" data-role="content" data-plugin="selectable" data-row-selectable="true" >
                    <thead class="bg-blue-grey-100">
                      <tr>                        
                        <td>
                          Description
                        </td>
                      <!--   <th>
                          Unit Price
                        </th> -->
                  
<!--                         <th style="width: 100px">
                          Discount
                        </th> -->
                        <td style="width: 100px">
                          Amount
                        </td>
                             
                      </tr>
                    </thead>
                    <tbody id="upd-row">
                    	<?php

$brands2=mysqli_query($conn,'SELECT * FROM till WHERE description <> "Sales" AND description <> "Resale" AND ent_date="'.$tdate.'" ');
while($brd=mysqli_fetch_array($brands2))
{

                      ?>

                <tr class="even pointer" id="final"><td><?php echo $brd['description']; ?></td><td>$ <?php echo $brd['amount'];?></td></tr>
<?php
/*$totalval=$brd['amount'];*/
}


?>



                     <tr class="even pointer" id="final"><td>Sales</td><td>$ <?php echo $samt;  ?></td></tr>  
                       <tr class="even pointer" id="final"><td>Re-sale Amount</td><td>$ -<?php echo $rsamt;  ?></td></tr>  
                    </tbody>

                  </table>
              </div>



                </div>
                
              </div>
                  
            </div>
            
            <div class="row row-lg discountsys" style="margin:0 auto;">
             <div class="panel " style="width: 100%">
              <table class="table">
                 
                <tbody>
                 <tfoot class="hidden-xs hidden-sm hidden-md">
                <tr class="active">
                    <td width="200" class="text-left" ><!-- Number of Products ( <span class="items-number" id="prodnos">0</span> )<input type="hidden" id="prodnos_h" value="0"> --></td>
                    <td width="150" class="text-right hidden-xs"></td>
                    <td width="150" class="text-right" >Total Cash</td>
                    <td width="90" class="text-right" >$ <span class="cart-value" id="subtotal"><?php echo $totalval;  ?> </span><input type="hidden" id="subtotal_h" value="0"></td>
                </tr>
   <!--              <tr class="active">
                    <td>
                                        </td>
                    <td></td>
                    <td class="text-right cart-discount-notice-area">Discount on Cart</td>
                    <td class="text-right cart-discount-remove-wrapper">$<span class="cart-discount pull-right" id="disconcar"> 0.00 </span></td>
              
                </tr> -->

                                 <input type="hidden" value="" id="doc" name="doc">    
                
<!--                 <tr class="success">
                    <td class="text-right"></td>
                    <td class="text-right"></td>
                    <td class="text-right"><strong>
                        Net Payable                        </strong></td>
                    <td class="text-right">$ <span class="cart-topay pull-right" id="netpay">0.00 </span></td>
                </tr> -->
            </tfoot>
                </tbody>
              </table>
              <table class="table">
                <tr>

                <td>
                       <div class="col-lg-12">
                <!-- Example Modal Popup -->
                
                  
                <input type="submit" value="Open Counter" name="submit" class="btn btn-primary  btn-round" style="float: left" value="Open Counter" />
            <input type="submit" value="Close Counter" name="submit" class="btn btn-primary  btn-round" style="float: right" value="Close Counter" /> 
               
                    </div>




                
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
    
    <!-- Plugins -->
    <script src="../global/vendor/switchery/switchery.js"></script>
    <script src="../global/vendor/intro-js/intro.js"></script>
    <script src="../global/vendor/screenfull/screenfull.js"></script>
    <script src="../global/vendor/slidepanel/jquery-slidePanel.js"></script>
    <script src="../global/vendor/webui-popover/jquery.webui-popover.min.js"></script>
    <script src="../global/vendor/bootstrap-touchspin/bootstrap-touchspin.min.js"></script>
    
    <!-- Scripts -->
    
    <script src="../assets/js/Section/Menubar.js"></script>
    <script src="../assets/js/Section/Sidebar.js"></script>
    <script src="../assets/js/Section/PageAside.js"></script>
    <script src="../assets/js/Plugin/menu.js"></script>
    
    <!-- Config -->
    <script src="../global/js/config/colors.js"></script>
    <script src="../assets/js/config/tour.js"></script>
    
    <!-- Page -->
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
    
    <!-- Plugins -->
    <script src="../global/vendor/switchery/switchery.js"></script>
    <script src="../global/vendor/intro-js/intro.js"></script>
    <script src="../global/vendor/screenfull/screenfull.js"></script>
    <script src="../global/vendor/slidepanel/jquery-slidePanel.js"></script>
        <script src="../global/vendor/magnific-popup/jquery.magnific-popup.js"></script>
    
    <!-- Scripts -->
    <script src="../global/js/Component.js"></script>
    <script src="../global/js/Plugin.js"></script>
    <script src="../global/js/Base.js"></script>
    <script src="../global/js/Config.js"></script>
    
    <script src="../assets/js/Section/Menubar.js"></script>
    <script src="../assets/js/Section/Sidebar.js"></script>
    <script src="../assets/js/Section/PageAside.js"></script>
    <script src="../assets/js/Plugin/menu.js"></script>
    
    <!-- Config -->
    <script src="../global/js/config/colors.js"></script>
    <script src="../assets/js/config/tour.js"></script>
    <script>Config.set('assets', '../assets');</script>
    
    <!-- Page -->
    <script src="../assets/js/Site.js"></script>
    <script src="../global/js/Plugin/asscrollable.js"></script>
    <script src="../global/js/Plugin/slidepanel.js"></script>
    <script src="../global/js/Plugin/switchery.js"></script>
        <script src="../global/js/Plugin/magnific-popup.js"></script>
    
        <script src="../assets/examples/js/advanced/lightbox.js"></script>
 <script type="text/javascript" src="../assets/js/jquery.scannerdetection.js"></script>
  <script>