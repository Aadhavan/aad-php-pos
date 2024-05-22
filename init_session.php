<?php
  session_start(); 
include 'inc/dbconnect.php';


/*   echo '<script>alert("maasn")</script>';*/

if($_REQUEST['flag']=="success")
{

$email=$_REQUEST['email']; 

if(!isset($_SESSION['isloggedin']))

{
session_destroy();


session_start();

/* echo '<script>alert("'.$email.'")</script>';*/

$query2 = mysqli_query($conn,"SELECT * from user where varMEmail='".$email."' ");
$res = mysqli_fetch_array($query2); 
/*
echo "SELECT * from user where varMEmail='".$email."' ";
die;*/

/*
 echo '<script>alert("'.$res ['varMName'].'")</script>';
 echo '<script>alert("'.$res ['intId'].'")</script>';
*/


  $_SESSION['name']   = $res ['varMName']; 
  $_SESSION['email']  = $res ['varMEmail'];
  $_SESSION['MintId'] = $res ['intId'];
  $_SESSION['type'] = $res ['varMType'];
/*  $_SESSION['userrole'] = $res ['varMType'];
*/  $_SESSION['sessionid'] = session_id();
  $_SESSION['isloggedin']="true";


 /*   echo '<script>alert("in'.$_SESSION['name'].'")</script>';
echo '<script>alert("in'.$_SESSION['email'].'")</script>';
echo '<script>alert("in'.$_SESSION['MintId'].'")</script>';
echo '<script>alert("in'.$_SESSION['sessionid'].'")</script>';
*/

    echo '<script> window.location.assign("admin/posale.php");</script>';


}
else
{
	    echo '<script> window.location.assign("admin/posale.php");</script>';
}
}
