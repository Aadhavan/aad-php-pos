<?php

	session_start(); 
	

/*echo '<script>alert("se'.$_SESSION['name'].'")</script>';
echo '<script>alert("se'.$_SESSION['email'].'")</script>';
echo '<script>alert("se'.$_SESSION['MintId'].'")</script>';
echo '<script>alert("se'.$_SESSION['isloggedin'].'")</script>';
*/
/*echo '<script>alert("se'.$_SESSION['isloggedin'].'")</script>';*/

if(!isset($_SESSION['isloggedin']))

{
	 echo '<script> window.location.assign("../index.php");</script>';


} 



?>