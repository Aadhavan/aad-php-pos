<?php 
 /* include '../inc/dbconnect.php';  
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
/*
$conn= new mysqli($host_name,$host_user,$host_pass,$host_db);
if($conn->conncect_error){
  die("Connction failed:" .$conn->conncect_error);
}*/

 


	 $imeipre=array();

$imeipre=$_POST['sno'];

  	// Table name 
   $keyword = $_POST['data'];

/*print_r($imeipre);

print_r($keyword);*/
$maan="";

/*if($imeipre=="")
{
	$imeipre=0;
}*/

if (in_array($keyword, $imeipre))
{
$maan="Alre";
}
else
{
array_push($imeipre,$keyword);

}
/*echo $maan;
*/
	  $sql = "SELECT * from  itemdetails where itmimei = '".$keyword."' AND itmpurorderId='' "; 
	$result = mysqli_query($conn,$sql) or die(mysqli_error());
	if(mysqli_num_rows($result))
	{
	//	echo '<ul class="list">';
		while($row = mysqli_fetch_array($result))
		{
			$str     = $row['itmimei'];
			$itmimei    = $row['itmimei'];
			$pid     = $row['itmId'];
			 $pprice    = $row['price'];

			/* echo $str;
			 echo $itmimei;*/
			/* echo $pid;*/
		


			 		/*$color    = $row['color'];
			$capacity    = $row['capacity'];*/ 


			$selitm  = "SELECT * FROM items where  pdt_id=".$pid." AND qty>0";
			$qry_itm = mysqli_query($conn,$selitm);
			$fetitm  = mysqli_fetch_array($qry_itm); 
			$str1      = $fetitm['itemname'];
			 //$pprice      = $fetitm['price'];
			$color       = $fetitm['color'];
			$capacity    = $fetitm['capacity']; 
			$price    = $fetitm['price'];
            $salesprice   = $fetitm['salesprice'];

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
			$proid=$fetitm['intId'];


			if($fetitm['category']=="Resale Product")
{

$typeofs="[Refurbished]";
}



$promo=mysqli_query($conn,'SELECT * FROM promortion WHERE item ="'.$fetitm['pdt_id'].'";');

$pro=mysqli_fetch_array($promo);
if(mysqli_num_rows($promo)==0)
{
	$promo=mysqli_query($conn,'SELECT * FROM promortion WHERE brandmodel ="'.$fetitm['brandmodel'].'";');
	$pro=mysqli_fetch_array($promo);

}
if(mysqli_num_rows($promo)==0)
{
	$promo=mysqli_query($conn,'SELECT * FROM promortion WHERE brand ="'.$fetitm['brand'].'";');
	$pro=mysqli_fetch_array($promo);
}

$pro_amt=$pro['amount'];

$aft_dis=$price-$pro_amt;


			
		/*	$final = '<span class="bold">'.$first.'</span>'.$last. ' '.$str1.' '. $fet['colour_name'].' '. $fet1['capacity_name'];
		
			echo '<li><a id="prodet" href=\'javascript:void(0);\' data-proid="'.$pid.'" data-proqty="'.$pqty.'"  data-proname="'.$str1.'"  data-prounit="'.$punit.'"  data-imei="'.$itmimei.'" data-price="'.$price.'" data-color="'.$clname.'" data-capacity="'.$cpname.'">'.$final.'</a></li>';  */
/*
			$updrow ='<tr class="even pointer" id="final"><td>&nbsp;'.$str1.' &nbsp;'.$fet['colour_name'].' &nbsp; '.$fet1['capacity_name'].'<input type="hidden" name="pname[]" value="'.$str1.'"><input type="hidden" name="proid[]" value="'.$pid.'"></td><td> <input type="text" id="purqty'.$pid.'" name="pqty[]" onkeyup="findtot('.$pid.');" value="'.$pqty.'" "> <input type="hidden" id="purprice'.$pid.'" name="pprice[]" value="'.$price.'" >&nbsp;&nbsp;&nbsp;'.$price.' </td><td><span id="totrest'.$pid.'"> </span></td><td>&nbsp; <a href="javascript:void(0);" class="remCF">Remove</a></td></tr>';*/
/*echo $fetitm['itemname'];*/


/*$updrow ='<tr class="even pointer" id="final" value="good"><td><input type="hidden" id="ident'.$proid.'" name="sid[]" value="'.$proid.'">&nbsp;'.$str1.' &nbsp;'.$fet['colour_name'].' &nbsp; '.$fet1['capacity_name'].'<input type="hidden" name="pname[]" value="'.$str1.'"><input type="hidden" name="proid[]" value="'.$pid.'"></td><td><input type="hidden" name="pimei[]" value="'.$itmimei.'">'.$itmimei.'</td><td>&nbsp;<div style="float: left;margin-top: -15px;" id="tot'.$proid.'">'.$price.'</div><input type="hidden" class="itemtotal" name="itemtot[]" id="itemtot'.$proid.'" value="">&nbsp; </td><td onload="getid()">&nbsp; <a id="'.$proid.'" href="javascript:void(0);" class="remCF btn-danger btn btn-sm btn-icon btn-default btn-outline btn-round"><i class="icon wb-close" aria-hidden="true"></i></a><a id="editdis" href="javascript:void(0)" onclick="editdisc('.$proid.');" class="btn btn-sm btn-icon btn-default btn-outline btn-round"><i class="icon wb-pencil" aria-hidden="true"></i></a></td></tr>';*/


$sno++;

if($maan=="")
{
	$updrow ='<tr class="even pointer" id="final"><td><input type="hidden" id="ident'.$sno.'" name="sid[]" class="idcls" value="'.$proid.'">&nbsp;'.$str1.' &nbsp;'.$fet['colour_name'].' &nbsp; '.$fet1['capacity_name'].'<input type="hidden" name="pname[]" value="'.$str1.'"><input type="hidden" name="proid[]" value="'.$proid.'"> &nbsp;<div style="float: left;margin-top: 5px;"><input type="hidden" id="price'.$proid.'" class="pricls" value="'.$price.'" ></div>&nbsp; </td><td><input type="hidden" id="imei'.$proid.'" class="imeicls" name="imei[]" value="'.$itmimei.'">'.$itmimei.' <div id="hidden_div'.$proid.'" style="display: none;"><span class="discount">Discount:</span><input type="text" id="disc'.$proid.'" name="pqty[]" class="discamt discls form-control" onkeyup="findtot('.$proid.');" size="5" value="'.$pro_amt.'" " class="form-control col-md-2"><button onclick="closedisc('.$proid.');" type="button" class="input-search-close icon wb-close" aria-label="Close"></button></div></td><td>&nbsp;<div style="float: left; " id="tot'.$proid.'">$. '.$aft_dis.'<br><span class="price" id="dashpri">$. '.$price.'</span></div><input type="hidden" name="itemtot[]" id="itemtot'.$proid.'" class="aftdiscls" value="'.$aft_dis.'" class="itemtotal">&nbsp; <input type="hidden" name="typoes[]" value="'.$typeofs.'"></td><td>&nbsp; <a id="'.$proid.'" href="javascript:void(0);" class="remCFw btn-danger btn btn-sm btn-icon btn-default btn-outline btn-round"><i class="icon wb-close" aria-hidden="true"></i></a><a id="editdis" href="javascript:void(0)" onclick="editdisc('.$proid.');" class="btn btn-sm btn-icon btn-default btn-outline btn-round"><i class="icon wb-pencil" aria-hidden="true"></i></a></td></tr>'; 
}
else
{
	$updrow ="";
}


			
			echo $updrow;

		}
	//	echo "</ul>";
	}
	else
		echo"";
	?>