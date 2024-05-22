<?php 
include '../inc/dbconnect.php';
include '../inc/page_head.php';
include '../inc/page_navi.php';
include '../inc/page_sidebar.php';   
include '../inc/function.php';   

$data=new pacific;
 

    $pur_result = $data->select('sales');

$cont=0;
$dte1=0;
$dte2=0;
if(isset($_POST['submit']))
{

/*echo "<script> alert('".$_POST['date1']."')</script>";
echo "<script> alert('".$_POST['date2']."')</script>";*/


$cont=1;
$dte1=$_POST['date1'];
$dte2=$_POST['date2'];

}

?> 
 
    
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
    
    
  </head>
  <body class="animsition">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    

    <!-- Page -->
    <div class="page">
      <div class="page-header">
        <h1 class="page-title">Sales Order View</h1>
        



        <div class="page-header-actions">
          <a class="btn btn-sm btn-default btn-outline btn-round" href="http://datatables.net"
            target="_blank">
        <i class="icon wb-link" aria-hidden="true"></i>
        
      </a>
        </div>
      </div>

      <div class="page-content">
        <div class="panel"><center>
          <form method="POST" action="" >
<span aria-hidden="true" style="color: black;">From </span>  :  <input type="date" name="date1" >    
<span aria-hidden="true" style="color: black;">To </span>  :  <input type="date" name="date2" > 
<input type="Submit" name="submit" value="Go" class="btn btn-sm btn-primary">
        </form></center></div>
        <!-- Panel Basic -->
        
        <!-- End Panel Basic -->

        <!-- Panel Table Individual column searching -->
        
        <!-- End Panel Table Individual column searching -->

        <!-- Panel Table Tools_____________________________________________________________________ -->
        <div class="panel">
          <div class="panel-body">
            <?php  if($_REQUEST['type']=='sales' && $_REQUEST['flag'] ='succ'){?>
             <div class="toast-example" id="exampleToastrSuccessShadow" aria-live="polite" data-plugin="toastr"
                      data-message="&lt;strong&gt;Well done!&lt;/strong&gt; You successfully read this important alert message."
                      data-container-id="toast-top-right" data-position-class="toast-top-right"
                      data-icon-class="toast-just-text toast-success toast-shadow"
                      role="alert">
                      <div class="toast toast-just-text toast-shadow toast-success">
                        <button type="button" class="toast-close-button" aria-label="Close">
                          <span aria-hidden="true">×</span>
                        </button>
                        <div class="toast-message">
                          <strong>Well done!</strong> You successfully read this important
                          alert message.</div>
                      </div>
                    </div>
                    <?php }?>
            <table class="table table-hover dataTable table-striped w-full" id="exampleTableTools">
              <thead>
                  <tr>
                    <th class="text-center" style="width: 100px;">ID</th>
                    <th class="text-center" style="width: 100px;">SORID</th>
                    <th class=" text-center visible-lg">Customer</th>
                    <th class="text-center visible-lg">Products</th>
                    <th class=" text-center hidden-xs">Total Qty</th>
                    <th class="text-right hidden-xs">Value</th>
                    <th>Payment</th>
                    <th class="hidden-xs text-center">Submitted</th>
                    <th class="text-center">Action</th>
                </tr>
              </thead>
              <tfoot>
                 <tr>
                    <th class="text-center" style="width: 100px;">ID</th>
                    <th class="text-center" style="width: 100px;">SORID</th>
                    <th class=" text-center visible-lg">Customer</th>
                    <th class="text-center visible-lg">Products</th>
                    <th class=" text-center hidden-xs">Total Qty</th>
                    <th class="text-right hidden-xs">Value</th>
                    <th>Payment</th>
                    <th class="hidden-xs text-center">Submitted</th>
                    <th class="text-center">Action</th>
                </tr>
              </tfoot>
              <tbody>
                <?php

if($cont==0)
{
 $select_pu = "SELECT intId,  intOrderId,intCusId,taxid,payterms,saledate,COUNT(*) as procount,sum(itemprice) as tot,sum(itemqty) as tqty FROM sales GROUP BY `intOrderId` ORDER BY intId DESC";
}
else
{
   $select_pu = "SELECT intId,  intOrderId,intCusId,taxid,payterms,saledate,COUNT(*) as procount,sum(itemprice) as tot,sum(itemqty) as tqty FROM sales WHERE saledate BETWEEN '$dte1' AND '$dte2' GROUP BY `intOrderId` ORDER BY intId DESC";

}

 $slNO =1;
                   $qry_con = mysqli_query($conn,$select_pu);
                   while($res_pur =mysqli_fetch_array($qry_con))
                    { 
                       // print_r($res_pur);
                        $subId = $res_pur['intCusId'];
                         $orderID =   $res_pur['intOrderId'];

                         $sl =mysqli_query($conn,"SELECT * FROM sales where  intOrderId=$orderID  order by intId desc  ");
                        $ttot ='';$dicountp =0;
                        while($ordres = mysqli_fetch_array($sl))
                        {
                             $ptot= $ordres['itemprice']*$ordres['itemqty'] ;
                              $dicountp1 = $ordres['discount'] ;
                             $dicountp += $dicountp1;
                             $ttot+=$ptot;

                        }

                           $taxid = $res_pur['taxid'];
                             $paytermsid = $res_pur['payterms'];
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

                          $subt = $ttot - $dicountp;

                               $taxamt = $subt * $taxrate/100; 


                        ?>
                <tr>
                   <td class="text-center"> <strong> <?php echo $slNO; ?></strong> </td>
                    <td class="text-center"><a href="salesorderview.php?seloid=<?php echo $res_pur['intOrderId']; ?>"><strong> <?php echo $res_pur['intOrderId']; ?></strong></a></td>
                    <td class="visible-lg"><a href="javascript:void(0)"><?php $rand = rand(0, 7); echo $cus_result[0]['cus_contact_name']; ?></a></td>
                    <td class="text-center visible-lg"><a href="javascript:void(0)"><?php echo $res_pur['procount']; ?></a></td>
                    <td class="hidden-xs"><?php  echo $res_pur['tqty']; ?></td>
                    <td class="text-right hidden-xs"><strong>$<?php echo $subt ?>,00</strong></td>
                    <td><span class="label<?php $rand = rand(0, 3); echo ($labels[$rand]['class']) ? " " . $labels[$rand]['class'] : ""; ?>"><?php  echo $payres[0]['pay_name'];  ?></span></td>
                    <td class="hidden-xs text-center"><?php echo $res_pur['saledate']?></td>
                    <td class="text-center">
                    <div class="btn-group btn-group-xs">
                        <a href="salesorderview.php?seloid=<?php echo $res_pur['intOrderId']; ?> " data-toggle="tooltip" title="View" class="btn btn-default"><i class="fa fa-eye"></i></a>
                        <!-- <a href="salesorderlist.php?seloid=<?php echo $res_pur['intOrderId']; ?>&type=delete" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a> -->
                    </div>
                    </td>
                </tr>
                <?php $slNO++; } ?>


              </tbody>
            </table>
          </div>
        </div>
        <!-- End Panel Table Tools -->

        <!-- Panel Table Add Row -->
        
        <!-- End Panel Table Add Row -->

        <!-- Panel FixedHeader -->
        
        <!-- End Panel FixedHeader -->

      </div>
    </div>
    <!-- End Page -->

    <!-- Core  -->
   <!--  <script src="../global/vendor/babel-external-helpers/babel-external-helpers.js"></script>
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
    <script>Config.set('assets', '../../assets');</script> -->
    
    <!-- Page -->
    <script src="../assets/js/Site.js"></script>
    <script src="../global/js/Plugin/asscrollable.js"></script>
    <script src="../global/js/Plugin/slidepanel.js"></script>
    <script src="../global/js/Plugin/switchery.js"></script>
        <script src="../global/js/Plugin/datatables.js"></script>
    
        <script src="../assets/examples/js/tables/datatable.js"></script>
  </body>
</html>
<?php include '../inc/page_footer.php';  ?>