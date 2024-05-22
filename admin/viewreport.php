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
        <h1 class="page-title">Till Report</h1>
        



        <div class="page-header-actions">
          <a class="btn btn-sm btn-default btn-outline btn-round" href="http://datatables.net"
            target="_blank">
        <i class="icon wb-link" aria-hidden="true"></i>
        
      </a>
        </div>
      </div>

      <div class="page-content">
 <!--        <div class="panel"><center>
          <form method="POST" action="" >
<span aria-hidden="true" style="color: black;">From </span>  :  <input type="date" name="date1" >    
<span aria-hidden="true" style="color: black;">To </span>  :  <input type="date" name="date2" > 
<input type="Submit" name="submit" value="Go" class="btn btn-sm btn-primary">
        </form></center></div> -->
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
                    <th class="text-center" style="width: 100px;">Date</th>
                    <th class=" text-center visible-lg">Opening Amount</th>
                    <th class="text-center visible-lg">Sales Amount</th>
                    <th class=" text-center hidden-xs">Resale Amount</th>
                    <th class="text-right hidden-xs">Closing Amount</th>
                    
                </tr>
              </thead>
              <tfoot>
                 <tr>
                    <th class="text-center" style="width: 100px;">ID</th>
                    <th class="text-center" style="width: 100px;">Date</th>
                    <th class=" text-center visible-lg">Opening Amount</th>
                    <th class="text-center visible-lg">Sales Amount</th>
                    <th class=" text-center hidden-xs">Resale Amount</th>
                    <th class="text-right hidden-xs">Closing Amount</th>
                </tr>
              </tfoot>
              <tbody>
                <?php

/*if($cont==0)
{*/
/* $select_pu = "SELECT DISTINCT ent_date FROM till ORDER BY ent_date DESC";*/

 $select_pu =mysqli_query($conn,"SELECT DISTINCT ent_date FROM till ORDER BY ent_date DESC");
/*}
else
{
   $select_pu = "SELECT intId,intOrderId,intCusId,taxid,payterms,saledate,COUNT(*) as procount,sum(itemprice) as tot,sum(itemqty) as tqty FROM sales WHERE saledate BETWEEN '$dte1' AND '$dte2' GROUP BY `intOrderId` ORDER BY intId DESC";

}*/

 $slNO =1;
$open_amt=0;
$sales=0;
$resale=0;
$close=0;

                   while($till_tot =mysqli_fetch_array($select_pu))
                    { 
                       
$till_open=mysqli_query($conn,"SELECT sum(amount) as 'amt' FROM till WHERE ent_date = '".$till_tot['ent_date']."' AND invoice='' ");

/*echo "SELECT sum(amount) as amt FROM till WHERE ent_date = '".$till_tot['ent_date']."' AND invoice='' ";*/

$till_sales=mysqli_query($conn,"SELECT SUM(IF(description = 'Sales', amount, 0)) AS 'Sale',SUM(IF(description = 'Resale', amount, 0)) AS 'Resale' FROM till WHERE ent_date = '".$till_tot['ent_date']."' AND invoice <> '' ");

/*echo "SELECT SUM(IF(description = 'Sales', amount, 0)) AS 'Sale',SUM(IF(description = 'Resale', amount, 0)) AS 'Resale' FROM till WHERE ent_date = '".$till_tot['ent_date']."' AND invoice <>'' ";*/

$till_oamt =mysqli_fetch_array($till_open);


$open_amt=$till_oamt['amt'];


$till_samt =mysqli_fetch_array($till_sales);


$sales=$till_samt['Sale'];

$resale=$till_samt['Resale'];


$close=$open_amt+$sales-$resale;


if($open_amt=="")
{
  $open_amt=0;
}
 if($sales=="")
{
  $sales=0;
}
 if($resale=="")
{
$resale=0;
}
if($close=="")
{
$close=0;
}
                        ?>
                <tr>
                   <td class="text-center"> <strong> <?php echo $slNO; ?></strong> </td>
                   <td class="hidden-xs text-center"><?php echo $till_tot['ent_date'];?></td>
                   <td class="hidden-xs text-center"><?php echo $open_amt;?></td>
                   <td class="hidden-xs text-center"><?php echo $sales;?></td>
                   <td class="hidden-xs text-center"><?php echo $resale;?></td>
                    <td class="hidden-xs text-center"><?php echo $close;?></td>
                   
                    
                 
                </tr>
                <?php $slNO++;
                $open_amt=0;
$sales=0;
$resale=0;
$close=0; } ?>


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