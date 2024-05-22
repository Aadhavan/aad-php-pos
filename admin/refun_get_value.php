<?php 

include '../inc/dbconnect.php'; 

   if($_SERVER['HTTP_HOST']=='localhost'){

  $host_name='localhost';
  $host_user='root';
  $host_pass='';
  $host_db='retailpos';

}
else{
  $host_name='localhost';
  $host_user='infogenx_retusr';
  $host_pass='jYs}Ao%F#sWv';
  $host_db='infogenx_pacificerp';
}
$con= new mysqli($host_name,$host_user,$host_pass,$host_db);
if($con->connect_error){
  die("Connction failed:" .$con->conncect_error);
}





  	// Table name 
   $keyword = $_POST['data'];
if($keyword!="")
{



$sql = "SELECT * from  sales where itemimei = '".$keyword."' ";

	 
	$result = mysqli_query($con,$sql) or die(mysqli_error());




	if(mysqli_num_rows($result))
	{

if(is_numeric ($keyword))
{
		echo '<ul class="list" id="active">';
}
else
{
echo '<ul class="list">';

}

	$row = mysqli_fetch_array($result);
			$str    = $row['itemname'];
			$pid    = $row['intItemId'];
			$pprice    = $row['itemprice'];

$sel1 ="SELECT * FROM items where  intId=".$row['intItemId']."";
			$qry1 = mysqli_query($conn,$sel1);
			$itm = mysqli_fetch_array($qry1);


			$color    = $itm['color'];
			$capacity    = $itm['capacity'];
			$sel ="SELECT * FROM colour where  colour_id=".$color."";
			$qry = mysqli_query($con,$sel);
			$fet = mysqli_fetch_array($qry);
			$clname = $fet['colour_name']; 

			$sel1 ="SELECT * FROM capacity where  capacity_id=".$capacity."";
			$qry1 = mysqli_query($con,$sel1);
			$fet1 = mysqli_fetch_array($qry1);
			$cpname = $fet1['capacity_name']; 


$prod_qty=mysqli_query($conn,'SELECT * FROM items WHERE pdt_id ="'.$pid.'";');

$quant=mysqli_fetch_array($prod_qty);





			$pqty   = $quant['qty'];
			$punit  = $quant['qty']; 

			$start = strpos($str,$keyword); 
			$end   = similar_text($str,$keyword); 
			$last  = substr($str,$end,strlen($str));
			$first = substr($str,$start,$end);
			
			$final = '<span class="bold">'.$first.'</span>'.$last. ' '. $fet['colour_name'].' '. $fet1['capacity_name'];
	
		/*	if(is_numeric($keyword))
			{*/

echo '<li ><a class="sele" id="prodet" href=\'javascript:void(0);\' data-proid="'.$pid.'" data-proqty="'.$pqty.'"  data-proname="'.$str.'"  data-prounit="456" data-price="'.$pprice.'" data-color="'.$clname.'" data-capacity="'.$cpname.'">'.$final.'</a></li>'; 
/*
			}else
			{
echo '<li><a id="prodet" href=\'javascript:void(0);\' data-proid="'.$pid.'" data-proqty="'.$pqty.'"  data-proname="'.$str.'"  data-prounit="'.$punit.'" data-price="'.$pprice.'" data-color="'.$clname.'" data-capacity="'.$cpname.'">'.$final.'</a></li>'; 

			}*/
			 




		
		echo "</ul>";
	}
	else
		echo 0; 

}
elseif($_POST['id']!="")
{
			$sel1 ="SELECT * FROM items where  pdt_id=".$_POST['id']."";
			$qry1 = mysqli_query($conn,$sel1);
			
	$row = mysqli_fetch_array($qry1);
	
$sel2="SELECT * FROM items where  intId =".$_POST['id']."";


			$qryies = mysqli_query($con,$sel2);


$row2= mysqli_fetch_array($qryies);



if(mysqli_num_rows($qry1)==0)
{



$output =  array(
	             'qty'=>"Nil",
                 'price'=>"New Product",
                 'erpqty'=>$row2['qty']
                

                 
                 );
echo json_encode($output,JSON_FORCE_OBJECT);



}
else
{
/*	$row = mysqli_fetch_array($qry1);*/


$output =  array(
	             'qty'=>$row['qty'],
                 'price'=>$row['price'],
                 'erpqty'=>$row2['qty']

                 
                 );
echo json_encode($output,JSON_FORCE_OBJECT);

}


}

	?>
	<?php 












/*  include '../inc/dbconnect.php';  
  	// Table name 
   $keyword = $_POST['data'];

	$sql = "select * from  items where itemname like '%".$keyword."%' "; 

	$result = mysqli_query($con,$sql) or die(mysqli_error());
	if(mysqli_num_rows($result))
	{
		echo '<ul class="list">';
		while($row = mysqli_fetch_array($result))
		{
			$str     = $row['itmimei'];
			$itmimei    = $row['itmimei'];
			$pid     = $row['itmId'];
			 $pprice    = $row['price'];
			//$color    = $row['color'];
			//$capacity    = $row['capacity']; 


			$selitm  = "SELECT * FROM items where  intId=".$pid."";
			$qry_itm = mysqli_query($con,$selitm);
			$fetitm  = mysqli_fetch_array($qry_itm); 
			$str1      = $fetitm['itemname'];
			 //$pprice      = $fetitm['price'];
			$color       = $fetitm['color'];
			$capacity    = $fetitm['capacity']; 
			$price    = $fetitm['price'];
            $salesprice   = $fetitm['salesprice'];

			$sel ="SELECT * FROM colour where  colour_id=".$color."";
			$qry = mysqli_query($con,$sel);
			$fet = mysqli_fetch_array($qry);
			$clname = $fet['colour_name']; 

			$sel1 ="SELECT * FROM capacity where  capacity_id=".$capacity."";
			$qry1 = mysqli_query($con,$sel1);
			$fet1 = mysqli_fetch_array($qry1);
			$cpname = $fet1['capacity_name']; 

			$pqty   = 0;
			$punit  = 0; 

			$start = strpos($str,$keyword); 
			$end   = similar_text($str,$keyword); 
			$last  = substr($str,$end,strlen($str));
			$first = substr($str,$start,$end);
			
			$final = '<span class="bold">'.$first.'</span>'.$last. ' '.$str1.' '. $fet['colour_name'].' '. $fet1['capacity_name'];
		
			echo '<li><a id="prodet" href=\'javascript:void(0);\' data-proid="'.$pid.'" data-proqty="'.$pqty.'"  data-proname="'.$str1.'"  data-prounit="'.$punit.'"  data-imei="'.$itmimei.'" data-price="'.$price.'" data-color="'.$clname.'" data-capacity="'.$cpname.'">'.$final.'</a></li>';  
		}
		echo "</ul>";
	}
	else
		echo 0;*/
	?>