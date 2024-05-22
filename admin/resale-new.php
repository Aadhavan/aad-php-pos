<?php 
include '../inc/dbconnect.php';
include '../inc/page_head.php';
include '../inc/page_navi.php';
include '../inc/page_sidebar.php';   

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
          <a class="btn btn-sm btn-default btn-outline btn-round" href="http://datatables.net"
            target="_blank">
        <i class="icon wb-link" aria-hidden="true"></i>
        
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
                        <label class="col-md-3 control-label" for="comName-text-input">Name</label>
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
                        <label class="col-md-3 control-label" for="comEmail">Brand</label>
                        <div class="col-md-9">
                    <select data-plugin="selectpicker" id="Brand" name="Brand" class="form-control" >
                    <?


$customer=mysqli_query($conn,'SELECT * FROM brand');
echo'<option value="0">Select Brand</option>';
while($cust=mysqli_fetch_array($customer))
{
?>
  <option value="<?php echo $cust['intId'] ?>"><?php echo $cust['varBrandName'] ?></option>                  
<?php 
}
?>            </select>
     </div>
                    </div>
                       <div class="form-group">
                        <label class="col-md-3 control-label" for="comName-text-input">Model No</label>
                        <div class="col-md-9 txtOnly">
                                                <select data-plugin="selectpicker" id="Model" name="Model" class="form-control" >
                    <?


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
                 <div class="form-group">
                        <label class="col-md-3 control-label" for="comName-text-input">Color</label>
                        <div class="col-md-9 txtOnly">
                    <select data-plugin="selectpicker" id="Color" name="Color" class="form-control" >
                    <?


$cust=mysqli_query($conn,'SELECT * FROM colour');
echo'<option value="0">Select Color</option>';
while($cus=mysqli_fetch_array($cust))
{
?>
  <option value="<?php echo $cus['colour_id'] ?>"><?php echo $cus['colour_name'] ?></option>                  
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
<select data-plugin="selectpicker" id="Capacity" name="Capacity" class="form-control" >
                    <?


$custo=mysqli_query($conn,'SELECT * FROM capacity');
echo'<option value="0">Select capacity</option>';
while($cust=mysqli_fetch_array($custo))
{
?>
  <option value="<?php echo $cus['capacity_id'] ?>"><?php echo $cust['capacity_name'] ?></option>                  
<?php 
}
?>            </select>                           <!--  <span class="help-block">This is a help text</span> -->
                        </div>
                    </div>
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
                            <input type="email" id="Resale" name="Resale" class="form-control" placeholder="Resale value" value="" required="">
                            
                        </div>
                    </div>
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
    <script>Config.set('assets', '../../assets');</script>
    
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
