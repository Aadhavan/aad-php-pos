<?php 
include '../inc/dbconnect.php';
include '../inc/page_head.php';
include '../inc/page_navi.php';
include '../inc/page_sidebar.php';   
include '../inc/function.php';   

$data=new pacific;
 

    $pur_result = $data->select('resale_details');
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
        <h1 class="page-title">Resale Purchase View</h1>
        
        <div class="page-header-actions">
      <a class="btn btn-sm btn-default btn-outline btn-round" href="resale.php" target="resale.php">
        <i class="icon wb-link" aria-hidden="true"></i>
        <span class="hidden-sm-down">Resale</span>
      </a>
        </div>
      </div>

      <div class="page-content">
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
                    <!-- <th class="text-center" style="width: 100px;">SORID</th> -->
                    <th class=" text-center visible-lg">Customer</th>
                    <th class="text-center visible-lg">Product</th>
                    <th class=" text-center hidden-xs">Contact Number</th>
                    <th class="text-right hidden-xs">Purchase Cost</th>
                    <!-- <th>Payment</th> -->
                    <th class="hidden-xs text-center">Purchase Date</th>
                    <th class="text-center">Action</th>
                </tr>
              </thead>
              <tfoot>
                 <tr>
                   <th class="text-center" style="width: 100px;">ID</th>
                    <!-- <th class="text-center" style="width: 100px;">SORID</th> -->
                    <th class=" text-center visible-lg">Customer</th>
                    <th class="text-center visible-lg">Product</th>
                    <th class=" text-center hidden-xs">Contact Number</th>
                    <th class="text-right hidden-xs">Purchase Cost</th>
                    <!-- <th>Payment</th> -->
                    <th class="hidden-xs text-center">Purchase Date</th>
                    <th class="text-center">Action</th>
                </tr>
              </tfoot>
              <tbody>
                <?php
 $select_pu = "SELECT * FROM resale_details ORDER BY id DESC";
 $slNO =1;
                   $qry_con = mysqli_query($conn,$select_pu);
                   while($res_pur =mysqli_fetch_array($qry_con))
                    { 
                       // print_r($res_pur);
                      /*  $subId = $res_pur['intCusId'];
                         $orderID =   $res_pur['intOrderId'];*/
                       /*  echo $res_pur['id'];
*/
                       $brand=mysqli_query($conn,'SELECT * FROM brand WHERE intId = "'.$res_pur['brand'].'"');
$brd=mysqli_fetch_array($brand);


 $brand_mod=mysqli_query($conn,'SELECT * FROM brandmodel WHERE bmodel_id = "'.$res_pur['model'].'"');
$brdmod=mysqli_fetch_array($brand_mod);

 $capacity=mysqli_query($conn,'SELECT * FROM capacity WHERE capacity_id = "'.$res_pur['capacity'].'"');
$cap=mysqli_fetch_array($capacity);


  $color=mysqli_query($conn,'SELECT * FROM colour WHERE colour_id = "'.$res_pur['color'].'"');
$col=mysqli_fetch_array($color);






                        ?>
                <tr>
                   <!-- <td class="text-center"> <strong> <?php echo $res_pur['id']; ?></strong> </td> -->
                    <td class="text-center"><a href="resaleinvoice.php?seloid=<?php echo $res_pur['id']; ?>"><strong> <?php echo $slNO; ?></strong></a></td>
                    

                    <td class="visible-lg"><a href="javascript:void(0)"><?php $rand = rand(0, 7); echo $res_pur['customer_name']; ?></a></td>
                    

<td class="text-center visible-lg"><a href="javascript:void(0)"><?php echo $brd['varBrandName'].$brdmod['bmodel_name'].$col['colour_name'].$cap['capacity_name']; ?></a></td>

                    <td class="text-center visible-lg"><a href="javascript:void(0)"><?php echo $res_pur['contact_no']; ?></a></td>
                  <!--   <td class="hidden-xs"><?php  echo $res_pur['tqty']; ?></td> -->
                    

                    <td class="text-right hidden-xs"><strong>$<?php echo $res_pur['purchase_cost']; ?>.00</strong></td>
                    

                   
                    

                    <td class="hidden-xs text-center"><?php echo $res_pur['ent_date']?></td>
                    



                    <td class="text-center">
                    <div class="btn-group btn-group-xs">
                        <a href="resaleinvoice.php?seloid=<?php echo $res_pur['id']; ?> " data-toggle="tooltip" title="View" class="btn btn-default"><i class="fa fa-eye"></i></a>
                        <!-- <a href="salesorderlist.php?seloid=<?php echo $res_pur['id']; ?>&type=delete" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a> -->
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