
<?php 
session_start();

include 'inc/dbconnect.php'; 

?>
<?php /*include '../inc/config.php';*/

/*echo '<script>alert("in'.$_SESSION['name'].'")</script>';
echo '<script>alert("in'.$_SESSION['email'].'")</script>';
echo '<script>alert("in'.$_SESSION['MintId'].'")</script>';
echo '<script>alert("in'.$_SESSION['sessionid'].'")</script>';
*/
?>
 <?php 
    if(isset($_POST['submit']))
    {
$email = mysqli_real_escape_string($conn,$_POST['email']);
$password = mysqli_real_escape_string($conn,$_POST['password']);
 
if($_POST['email'] !='' && $_POST['password'] !=''){
  
$query = mysqli_query($conn,"SELECT * from user where varMEmail='$email' and varMPassword='$password'");
if(mysqli_num_rows($query)!=0){ 
$query2 = mysqli_query($conn,"SELECT * from user where varMEmail='$email' ");
$res   = mysqli_fetch_array($query2); 

  $_SESSION['name']   = $res ['varMName']; 
  $_SESSION['email']  = $res ['varMEmail'];
  $_SESSION['MintId'] = $res ['intId'];
  $_SESSION['type'] = $res ['varMType'];
/*  $_SESSION['userrole'] = $res ['varMType'];
*/  $_SESSION['sessionid'] = session_id();
  $_SESSION['isloggedin']="true";
    
    $tyoe=$res ['varMType'];
 /*   $email=$res ['varMEmail'];*/
/*echo '<script>alert("'.$_SESSION['name'].'")</script>';
echo '<script>alert("'.$_SESSION['email'].'")</script>';
echo '<script>alert("'.$_SESSION['MintId'].'")</script>';
echo '<script>alert("'.$_SESSION['sessionid'].'")</script>';*/
  
/*die;*/ 
          echo '<script> window.location.assign("init_session.php?flag=success&email='.$email.'");</script>';

  /*      header("Location: init_session.php");*/
}
else{


        
//  echo '<script>alert("Email id or password is worng.");window.location.assign("index.php");</script>';
/* echo "<script>alert('Email and Password is mismatch...');</script>";
   reindex("index.php");*/
    header("location:index.php?type=login&flag=error#loginerror");
}
}
}
      


 /*if(isset($_POST['reset'])) {
    $email=$_POST['reminder-email'];

    $query1=mysqli_query($conn,"SELECT * from user where varMEmail='$email'");
    if(mysqli_num_rows($query1)>0)
    {
$query2 = mysqli_query($conn,"SELECT * from user where varMEmail='$email' ");
$res1   = mysqli_fetch_array($query2);*/
   /*echo '<script>alert("'.$res1 ['varMName'].'")</script>';
 echo '<script>alert("'.$res1 ['varMPassword'].'")</script>';
 echo '<script>alert("'.$res1 ['varMEmail'].'")</script>';*/
 
   /* $uname= $res1 ['varMName'];
    $pass= $res1['varMPassword'];
     $email = $res1['varMEmail'];
    }*/

    /*echo '<script>alert("Email id or password is worng")</script>';*/
/*}
$to = $email;

       $subject = "User Name and Password for retailpos";


$message1='<div style="width:100%;background-color:rgb(240, 246, 249);padding:15px 0px;">
        <center><h2>Account Details</h2></center><br>
        <table width="80%" cellpadding="4" border="0" align="center" style="margin:0 auto;background-color:#FFF;padding:5px;">
        <tr>
        <td style="padding:3px"><b>User Name:</b></td> <td>'.$uname.'</td>
        </tr>
        <tr>
        <td style="padding:3px"><b>Password:</b></td> <td>'.$pass.'</td>
        </tr>
       
        </table></div>';

        $headers1 = 'MIME-Version: 1.0'."\r\n";
        $headers1 .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
        $headers1 .= "From: noreply@retailpos.com";  
    if(mail($email, $subject, $message1, $headers1))
    {
     echo "Success";
 
    }
else
{
 echo "Failure";

}*/
?>

<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap admin template">
    <meta name="author" content="">
    
    <title>Login</title>
    
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
        <link rel="stylesheet" href="assets/examples/css/pages/login-v2.css">
    
    
    <!-- Fonts -->
    <link rel="stylesheet" href="global/fonts/web-icons/web-icons.min.css">
    <link rel="stylesheet" href="global/fonts/brand-icons/brand-icons.min.css">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
    
    <!--[if lt IE 9]>
    <script src="../../../global/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->
    
    <!--[if lt IE 10]>
    <script src="../../../global/vendor/media-match/media.match.min.js"></script>
    <script src="../../../global/vendor/respond/respond.min.js"></script>
    <![endif]-->
    
    <!-- Scripts -->
    <script src="global/vendor/breakpoints/breakpoints.js"></script>
    <script>
      Breakpoints();
    </script>
  </head>
  <style type="text/css">  
  /*.page-dark.layout-full::before{z-index:0 !important;}*/
  .page-dark.layout-full .brand{margin-bottom: 0px !important;}
  .brand{text-align: center;}
  .brand-img{width: 40% !important;}
  .brand-text.font-size-40{color:#3e8ef7 !important;font-size: 100px!important;text-shadow:-2px -2px #fff !important;}
  .page-login-v2 .page-brand-info p{opacity: 1 !important;max-width:100% !important;font-weight: 400;
    font-size: 28px !important;}
  .navbar-toolbar .nav-item.hidden-float .nav-link{margin-left:50px !important;}
  .page-brand-info.row{background: #ffffff52;}
  .page-login-v2 .page-brand-info {margin: 220px 87px 0 0px; padding: 15px;text-align: center;}
  .page-content{padding: 1px !important;}
  .page-brand-info p{text-align: center;width: 90% !important;}
  .btn-primary{background-color: #f7971b;border-color: #f7971b;}
  .btn-primary:hover{background-color: #f7971b;border-color: #f7971b;}
  </style>
  <body class="animsition page-login-v2 layout-full page-dark">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->


    <style>
      body {
        background: transparent;
      }
    </style>
    <!-- Page -->
   

 
</script>
  <script language="JavaScript"> 
      
    $(function() {
        $( "#dialog" ).dialog();
    }); 
setTimeOut(function() {
    $( "#dialog" ).dialog( "close" )
}, 5000);


    function setText(){ 
      document.loginForm.submit();

    } 
    function tempAlert(msg,duration)
{
     var el = document.createElement("div");
     el.setAttribute("style","position:absolute;top:40%;left:20%;background-color:white;");
     el.innerHTML = msg;
     setTimeout(function(){
      el.parentNode.removeChild(el);
     },duration);
     document.body.appendChild(el);
}


    </script>
    <div class="page" data-animsition-in="fade-in" data-animsition-out="fade-out">
      <div class="page-content">
        <div class=" ">
      <div class="page-brand-info row">
          <div class="brand col-md-9 col-md-offset-2">
            <img class="brand-img" src="assets/images/logo@2x.png" alt="...">
            <!-- <br> -->
            <!-- <h1 class="brand-text font-size-40">Cellaphone</h1> -->
          </div>
         <!--  <p class="font-size-20">Point of Sale for Mobile Phone & accessories store</p> -->
        </div>
        <div style="margin:0 !important;padding: 0px; background: #f7971b;/*! padding: 10px; */width: 100%;" class="page-brand-info brand no-padding"><div class="col-md-9 col-md-offset-2 "><p class="font-size-20">Point of Sale for Mobile Phone &amp; accessories store</p></div></div>
      </div>

        <div class="page-login-main animation-slide-right animation-duration-1">
          <div class="brand hidden-md-up">
            <img class="brand-img" src="assets/images/logo-colored@2x.png" alt="...">
            <h3 class="brand-text font-size-40">Cellaphone</h3>
          </div>
          <div style="width: 100%; text-align: center;">
          <img class="" src="assets/images/logo-300.png" alt="...">
        </div>
          <h2 style="color:#000;width: 100%;text-align: center;">Signin</h2>
          <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->

          <form method="post" action="">
            <div class="form-group">
              <label class="sr-only" for="inputEmail">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Email">
            </div>
            <div class="form-group">
              <label class="sr-only" for="inputPassword">Password</label>
              <input type="password" class="form-control" id="password" name="password"
                placeholder="Password">
            </div>
            <div class="form-group clearfix">
              <div class="checkbox-custom checkbox-inline checkbox-primary float-left">
                <input type="checkbox" id="rememberMe" name="rememberMe">
                <label for="rememberMe">Remember me</label>
              </div>
              <a class="float-right"  <a href="forgot-password.php" id="link-reminder-login">Forgot password?</a>
            </div>
            <button type="submit" name="submit" class="btn btn-primary btn-block">Sign in</button>
          </form>

         <!--  <p>No account? <a href="register-v2.html">Sign Up</a></p> -->

          <!-- <footer class="page-copyright">
            <p>WEBSITE BY Creation Studio</p>
            <p>© 2018. All RIGHT RESERVED.</p>
            <div class="social">
              <a class="btn btn-icon btn-round social-twitter mx-5" href="javascript:void(0)">
            <i class="icon bd-twitter" aria-hidden="true"></i>
          </a>
              <a class="btn btn-icon btn-round social-facebook mx-5" href="javascript:void(0)">
            <i class="icon bd-facebook" aria-hidden="true"></i>
          </a>
              <a class="btn btn-icon btn-round social-google-plus mx-5" href="javascript:void(0)">
            <i class="icon bd-google-plus" aria-hidden="true"></i>
          </a>
            </div>
          </footer> -->
        </div>

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
        <script src="global/vendor/jquery-placeholder/jquery.placeholder.js"></script>
    
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
        <script src="global/js/Plugin/jquery-placeholder.js"></script>
<!--      <script language="JavaScript"> 
      
    $(function() {
        $( "#dialog" ).dialog();
    }); 
setTimeOut(function() {
    $( "#dialog" ).dialog( "close" )
}, 5000);


    function setText(){ 
      document.loginForm.submit();

    } 
    function tempAlert(msg,duration)
{
     var el = document.createElement("div");
     el.setAttribute("style","position:absolute;top:40%;left:20%;background-color:white;");
     el.innerHTML = msg;
     setTimeout(function(){
      el.parentNode.removeChild(el);
     },duration);
     document.body.appendChild(el);
}


    </script> -->
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
