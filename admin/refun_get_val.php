<?php 
 /*   
  	// Table name 
   $keyword = $_POST['data'];

	$sql = "select * from  items where itemname like '%".$keyword."%'"; 

	$result = mysqli_query($conn,$sql) or die(mysqli_error());
	if(mysqli_num_rows($result))
	{
		echo '<ul class="list">';
		while($row = mysqli_fetch_array($result))
		{
			$str    = $row['itemname'];
			$pid    = $row['intId'];
			$pprice    = $row['price'];
			$color    = $row['color'];
			$capacity    = $row['capacity'];
			$sel ="SELECT * FROM colour where  colour_id=".$color."";
			$qry = mysqli_query($conn,$sel);
			$fet = mysqli_fetch_array($qry);
			$clname = $fet['colour_name']; 

			$sel1 ="SELECT * FROM capacity where  capacity_id=".$capacity."";
			$qry1 = mysqli_query($conn,$sel1);
			$fet1 = mysqli_fetch_array($qry1);
			$cpname = $fet1['capacity_name']; 

			$pqty   = 0;
			$punit  = 0; 

			$start = strpos($str,$keyword); 
			$end   = similar_text($str,$keyword); 
			$last  = substr($str,$end,strlen($str));
			$first = substr($str,$start,$end);
			
			$final = '<span class="bold">'.$first.'</span>'.$last. ' '. $fet['colour_name'].' '. $fet1['capacity_name'];
		
			echo '<li><a id="prodet" href=\'javascript:void(0);\' data-proid="'.$pid.'" data-proqty="'.$pqty.'"  data-proname="'.$str.'"  data-prounit="'.$punit.'" data-price="'.$pprice.'" data-color="'.$clname.'" data-capacity="'.$cpname.'">'.$final.'</a></li>';  
		}
		echo "</ul>";
	}
	else
		echo 0;*/
	?>
	<?php 
include '../inc/dbconnect.php';
  /* if($_SERVER['HTTP_HOST']=='localhost'){

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
$conn= new mysqli($host_name,$host_user,$host_pass,$host_db);
if($conn->conncect_error){
  die("Connction failed:" .$conn->conncect_error);
}*/
  	// Table name 
   $keyword = $_POST['data'];

	  $sql = "SELECT * from  sales where itemimei = '".$keyword."' ORDER BY intOrderId  DESC LIMIT 1 ";

	$result = mysqli_query($conn,$sql) or die(mysqli_error());
	$key = mysqli_fetch_array($result);

/*	echo $key['intOrderId'];*/

 $sql2 = "SELECT * from  refund where sales_inv = '".$key['intOrderId']."' ";
$result2 = mysqli_query($conn,$sql2);

/*	echo mysqli_num_rows($result2);
*/



	if(mysqli_num_rows($result2) == 0)
	{
	//	echo '<ul class="list">';
		 $sql = "SELECT * from  sales where itemimei = '".$keyword."' ORDER BY intOrderId  DESC LIMIT 1 ";

	$result = mysqli_query($conn,$sql);
		while($row = mysqli_fetch_array($result))
		{
			$str     = $row['itemimei'];
			$itmimei    = $row['itemimei'];
			$pid     = $row['intItemId'];
			 $pprice    = $row['itemprice'];
			/*$color    = $row['color'];
			$capacity    = $row['capacity'];*/ 


			$selitm  = "SELECT * FROM items where intId=".$pid."";
			$qry_itm = mysqli_query($conn,$selitm);
			$fetitm  = mysqli_fetch_array($qry_itm); 
			$str1      = $fetitm['itemname'];
			 //$pprice      = $fetitm['price'];
			$color       = $fetitm['color'];
			$capacity    = $fetitm['capacity'];

			$price    = $fetitm['price'];
          /*  $salesprice   = $fetitm['salesprice'];*/

			$sel ="SELECT * FROM colour where  colour_id=".$color."";
			$qry = mysqli_query($conn,$sel);
			$fet = mysqli_fetch_array($qry);
			$clname = $fet['colour_name']; 

			$sel1 ="SELECT * FROM capacity where  capacity_id=".$capacity."";
			$qry1 = mysqli_query($conn,$sel1);
			$fet1 = mysqli_fetch_array($qry1);
			$cpname = $fet1['capacity_name']; 

			$pqty   = 0;
			$punit  = 0; 

			$start = strpos($str,$keyword); 
			$end   = similar_text($str,$keyword); 
			$last  = substr($str,$end,strlen($str));
			$first = substr($str,$start,$end);
			
$custnme=mysqli_query($conn,'SELECT * FROM customer WHERE cus_id ="'.$row['intCusId'].'";');

$cust=mysqli_fetch_array($custnme);




		/*	$final = '<span class="bold">'.$first.'</span>'.$last. ' '.$str1.' '. $fet['colour_name'].' '. $fet1['capacity_name'];
		
			echo '<li><a id="prodet" href=\'javascript:void(0);\' data-proid="'.$pid.'" data-proqty="'.$pqty.'"  data-proname="'.$str1.'"  data-prounit="'.$punit.'"  data-imei="'.$itmimei.'" data-price="'.$price.'" data-color="'.$clname.'" data-capacity="'.$cpname.'">'.$final.'</a></li>';  */
/*
			$updrow ='<tr class="even pointer" id="final"><td>&nbsp;'.$str1.' &nbsp;'.$fet['colour_name'].' &nbsp; '.$fet1['capacity_name'].'<input type="hidden" name="pname[]" value="'.$str1.'"><input type="hidden" name="proid[]" value="'.$pid.'"></td><td> <input type="text" id="purqty'.$pid.'" name="pqty[]" onkeyup="findtot('.$pid.');" value="'.$pqty.'" "> <input type="hidden" id="purprice'.$pid.'" name="pprice[]" value="'.$price.'" >&nbsp;&nbsp;&nbsp;'.$price.' </td><td><span id="totrest'.$pid.'"> </span></td><td>&nbsp; <a href="javascript:void(0);" class="remCF">Remove</a></td></tr>';*/

$updrow ='<tr class="even pointer" id="final"><td>&nbsp;'.$str1.' &nbsp;'.$fet['colour_name'].' &nbsp; '.$fet1['capacity_name'].'<input type="hidden" name="invoice[]" value="'.$row['intOrderId'].'"><input type="hidden" name="imeino[]" value="'.$itmimei.'"><input type="hidden" name="proid[]" value="'.$pid.'"></td><td>'.$str.'</td><td><a href="salesorderview.php?seloid='.$row['intOrderId'].'" target="_blank">'.$row['intOrderId'].'</a></td><td>'.$row['saledate'].'</td><td>'.$cust['cus_contact_name'].'</td><td>'.$row['item_total'].'</td><input type="hidden" id="itempri'.$_POST['data'].'" value="'.$row['itemprice'].'"><input type="hidden" id="itemdisc'.$_POST['data'].'" value="'.$row['discount'].'"><input type="hidden" id="finprice'.$_POST['data'].'" value="'.$row['item_total'].'"> </tr>';


/*
<td>&nbsp; <a href="javascript:void(0);" class="remCF">Remove</a></td>*/

			
			echo $updrow;

		}
	//	echo "</ul>";
	}
	else
		echo 0;
	?>