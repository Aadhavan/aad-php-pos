  <?php

include '../inc/dbconnect.php';





if($_SERVER['HTTP_HOST']=='localhost'){

  $host_name='localhost';
  $host_user='root';
  $host_pass='';
  $host_db='pacific_erp';

}
else{
  $host_name='localhost';
  $host_user='infogenx_retusr';
  $host_pass='jYs}Ao%F#sWv';
  $host_db='infogenx_pacificerp';
}
$con= new mysqli($host_name,$host_user,$host_pass,$host_db);
if($con->conncect_error){
  die("Connction failed:" .$con->conncect_error);
}



$type="";






/*echo $_POST['id'];*/

if($_POST['id']!="")
{
$id=$_POST['id'];

$pid=$_POST['pid'];




if($_POST['tpe']=="Resale")
{

$imei=mysqli_query($conn,'SELECT * FROM itemdetails WHERE itmimei="'.$id.'" AND itmpurorderId="";');

if(mysqli_num_rows($imei)==0)

{
$type="False";
}
else
{
  $type="Its There";
}

$output =  array(
               'values'=>$type

                 
                 );
echo json_encode($output,JSON_FORCE_OBJECT);




}
else
{
$imei=mysqli_query($conn,'SELECT * FROM itemdetails WHERE itmimei="'.$id.'" AND itmpurorderId="";');
/*
echo 'SELECT * FROM itemdetails WHERE itmimei="'.$id.'";';
*/

if(mysqli_num_rows($imei)==0)

{

$pdt_check=mysqli_query($con,'SELECT * FROM itemdetails WHERE itmimei ="'.$id.'" AND itmId="'.$pid.'";');

if(mysqli_num_rows($pdt_check)==0)
{
$type="mismatch";
}
else
{
	$type="new";
}


}





if($type=="new")
{
	
$output =  array(
	             'values'=>"False"
                 
                 );
echo json_encode($output,JSON_FORCE_OBJECT);
}
else if($type=="mismatch")
{
$output =  array(
	             'values'=>"Mismatch"
                 
                 );
echo json_encode($output,JSON_FORCE_OBJECT);

}
else
{
	
$output =  array(
	             'values'=>"True"

                 
                 );
echo json_encode($output,JSON_FORCE_OBJECT);
}
}
}
?>