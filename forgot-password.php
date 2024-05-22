
<?php
ob_start();
include 'inc/dbconnect.php';
if(isset($_POST['submit'])){
    

$email =$_POST['email'];
   $reg_sel1 = "SELECT * from user where varMEmail = '".$email."'";
   $qry_reg1 =mysqli_query($conn,$reg_sel1);
  $count = mysqli_num_rows($qry_reg1);
  $row_reg1 =mysqli_fetch_array($qry_reg1);
    
    
   $password = $row_reg1['varMPassword'];

     $email = $row_reg1['varMEmail'];
    /* print_r($row_reg1);*/
if($count == 1){
    "Content-Type: {$fileatt_type};\n" .
   

   // $htmlbody = "Name:{$sfname}\n"."Email:{$email}\n"."Subject:{$lname}\n"."Message:{$msg}\n" ." password:{$password}\n"  ;
    //$htmlbody = "Name:".$fromName."</h3><h3>Email:".$fromEmail."</h3><p>Subject:".$subject."</p><p>Message:".$message."</p>";
    //Recipient Email Address

    $to=$email;
    $message="Please use this password to login";

     
    $subject = "Your Recovered Password";

$htmlContent = '
    <html>
     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <head>
        <title>Your password  From  Retail POS </title>
        <link href="http://infogenx.in/stock/css/bootstrap.min.css" rel="stylesheet" type="text/css" > 
        <link href="http://infogenx.in/stock/css/custom.css" rel="stylesheet" type="text/css">
        <style type="text/css">
        table.jambo_table {
    border: 1px solid rgba(221, 221, 221, 0.78)
}
table.jambo_table thead {
    background: rgb(76, 79, 79);
    color: #ECF0F1
}
table.jambo_table tbody tr:hover td {
    background: rgba(249, 217, 167, 0.20);
    border-top: 1px solid rgba(249, 217, 167, 0.20);
    border-bottom: 1px solid rgba(249, 217, 167, 0.20);
}
table.jambo_table tbody tr.selected {
    background: rgba(38, 185, 154, 0.16)
}
table.jambo_table tbody tr.selected td {
    border-top: 1px solid rgba(38, 185, 154, 0.4);
    border-bottom: 1px solid rgba(38, 185, 154, 0.4)
}
.dataTables_paginate a {
    background: #ff0000
}
.dataTables_wrapper {
    position: relative;
    clear: both;
    zoom: 1
}
.dataTables_processing {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 250px;
    height: 30px;
    margin-left: -125px;
    margin-top: -15px;
    padding: 14px 0 2px 0;
    border: 1px solid #ddd;
    text-align: center;
    color: #999;
    font-size: 14px;
    background-color: white
}
.dataTables_length {
    width: 40%;
    float: left
}
.dataTables_filter {
    width: 50%;
    float: right;
    text-align: right
}
.dataTables_info {
    width: 60%;
    float: left
}
.dataTables_paginate {
    float: right;
    text-align: right
}
table.dataTable th.focus,
table.dataTable td.focus {
    outline: 2px solid #1ABB9C !important;
    outline-offset: -1px
}
table.display {
    margin: 0 auto;
    clear: both;
    width: 100%
}
table.display thead th {
    padding: 8px 18px 8px 10px;
    border-bottom: 1px solid black;
    font-weight: bold;
    cursor: pointer
}
table.display tfoot th {
    padding: 3px 18px 3px 10px;
    border-top: 1px solid black;
    font-weight: bold
}
table.display tr.heading2 td {
    border-bottom: 1px solid #aaa
}
table.display td {
    padding: 3px 10px
}
table.display td.center {
    text-align: center
}
table.display thead th:active,
table.display thead td:active {
    outline: none
}
.dataTables_scroll {
    clear: both
}
.dataTables_scrollBody {
    *margin-top: -1px;
    -webkit-overflow-scrolling: touch
}
</style>
    </head>
    <body style="background-color:#F4F3F1;">
       
       
       <table id="datatable-buttons" class="table table-striped jambo_table bulk_action"   align="center" style="width:45% !important">
      <thead>
      <tr style="background-color:#FFF;"><td align="left"><img src="assets/images/logo-colored@2x.png" style="width:150px; "></td><td valign="middle"> <br> <h3 style="color:#444;top:20px;">Password From RETAIL POS</h3> </td></tr>
        <tr class="heading">
        <th colspan="2"> login details</th>
        </tr>
        </thead>
        <tbody> 
       
        <tr><td>Email</td><td>'.$email.'</td></tr>
        <tr><td>password</td><td>'.$password.'</td></tr>
        <tr><td></td><td></td></tr>
        <tr><td></td><td></td></tr>

         
    </body>
    </html>';
/*echo $htmlContent; die;
*/// Set content-type header for sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// Additional headers
$headers .= 'From: retail<info@retail.com>' . "\r\n";
$headers .= 'Cc: retail<info@retail.com>' . "\r\n";
//$headers .= 'Bcc: welcome2@example.com' . "\r\n";
 //echo $htmlContent; 
// Send email
 if(mail($to,$subject,$htmlContent,$headers))
{
      echo "Your Password has been sent to your email id";
    $url = 'index.php';
  ?>
    <meta http-equiv="refresh" content="1;url=<?php echo $url;?>" /> 
          <?php

    }else{
      echo "Failed to Recover your password, try again";
    }
 
  }else{
    echo "User name does not exist in database";
  }

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
    
    <title>Forgot password </title>
    
    <link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png">
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="global/css/bootstrap.min.css">
    <link rel="stylesheet" href="global/css/bootstrap-extend.min.css">
    <link rel="stylesheet" href="assets/css/site.min.css">
    
    <!-- Plugins -->
    <link rel="stylesheet" href="global/vendor/animsition/animsition.css">
    <link rel="stylesheet" href="global/vendor/asscrollable/asScrollable.css">
    <link rel="stylesheet" href="global/vendor/switchery/switchery.css">
    <link rel="stylesheet" href="global/vendor/intro-js/introjs.css">
    <link rel="stylesheet" href="global/vendor/slidepanel/slidePanel.css">
    <link rel="stylesheet" href="global/vendor/flag-icon-css/flag-icon.css">
        <link rel="stylesheet" href="assets/examples/css/pages/forgot-password.css">
    
    
    <!-- Fonts -->
    <link rel="stylesheet" href="global/fonts/web-icons/web-icons.min.css">
    <link rel="stylesheet" href="global/fonts/brand-icons/brand-icons.min.css">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
    
    <!--[if lt IE 9]>
    <script src="global/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->
    
    <!--[if lt IE 10]>
    <script src="global/vendor/media-match/media.match.min.js"></script>
    <script src="global/vendor/respond/respond.min.js"></script>
    <![endif]-->
    
    <!-- Scripts -->
    <script src="global/vendor/breakpoints/breakpoints.js"></script>
    <script>
      Breakpoints();
    </script>
  </head>
  <body class="animsition page-forgot-password layout-full">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->


    <!-- Page -->


    <div class="page vertical-align text-center" data-animsition-in="fade-in" data-animsition-out="fade-out">
      <div class="page-content vertical-align-middle animation-slide-top animation-duration-1">
        <h2>Forgot Your Password ?</h2>
        <p>Input your registered email to reset your password</p>

         <form name="ForgotForm" id="ForgotForm" action="forgot-password.php" method="post" role="form">
          <div class="form-group">
            <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
          </div>
          <div class="form-group">
            <button type="submit" name="submit" value="Login" class="btn btn-primary btn-block">Reset Your Password</button>
          </div>
        </form>

  <footer class="site-footer">
      <div class="site-footer-legal">© 2018 <a href="http://themeforest.net/item/remark-responsive-bootstrap-admin-template/11989202">Retail </a></div>
      <div class="site-footer-right">&nbsp;
        Crafted with <i class="red-600 wb wb-heart"></i> by <a href="https:infogenx.com">Infogenx</a>
      </div>
    </footer>
      </div>
    </div>
    <!-- End Page -->


    <!-- Core  -->
    <script src="global/vendor/babel-external-helpers/babel-external-helpers.js"></script>
    <script src="global/vendor/jquery/jquery.js"></script>
    <script src="global/vendor/popper-js/umd/popper.min.js"></script>
    <script src="global/vendor/bootstrap/bootstrap.js"></script>
    <script src="global/vendor/animsition/animsition.js"></script>
    <script src="global/vendor/mousewheel/jquery.mousewheel.js"></script>
    <script src="global/vendor/asscrollbar/jquery-asScrollbar.js"></script>
    <script src="global/vendor/asscrollable/jquery-asScrollable.js"></script>
    <script src="global/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>
    
    <!-- Plugins -->
    <script src="global/vendor/switchery/switchery.js"></script>
    <script src="global/vendor/intro-js/intro.js"></script>
    <script src="global/vendor/screenfull/screenfull.js"></script>
    <script src="global/vendor/slidepanel/jquery-slidePanel.js"></script>
    
    <!-- Scripts -->
    <script src="global/js/Component.js"></script>
    <script src="global/js/Plugin.js"></script>
    <script src="global/js/Base.js"></script>
    <script src="global/js/Config.js"></script>
    
    <script src="assets/js/Section/Menubar.js"></script>
    <script src="assets/js/Section/Sidebar.js"></script>
    <script src="assets/js/Section/PageAside.js"></script>
    <script src="assets/js/Plugin/menu.js"></script>
    
    <!-- Config -->
    <script src="global/js/config/colors.js"></script>
    <script src="assets/js/config/tour.js"></script>
    <script>Config.set('assets', 'assets');</script>
    
    <!-- Page -->
    <script src="assets/js/Site.js"></script>
    <script src="global/js/Plugin/asscrollable.js"></script>
    <script src="global/js/Plugin/slidepanel.js"></script>
    <script src="global/js/Plugin/switchery.js"></script>
    
    <script>
      (function(document, window, $){
        'use strict';
    
        var Site = window.Site;
        $(document).ready(function(){
          Site.run();
        });
      })(document, window, jQuery);
    </script>
  </body>
</html>
