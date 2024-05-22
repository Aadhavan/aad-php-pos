<?php 


include '../inc/dbconnect.php';  




  	// Table name 
   $keyword = $_POST['data'];
if($keyword!="")
{

if(is_numeric ($keyword))
{

if($_POST['tpe']=="")
{
$sql = "SELECT * from  items where intId ='".$keyword."'";
}
else
{
		$type="selected";
$sql = "SELECT * from  items where intId ='".$keyword."'";

}


}
else
{
		$sql = "SELECT * from  items where itemname like '%".$keyword."%'"; 
}


	$result = mysqli_query($conn,$sql) or die(mysqli_error());
	if(mysqli_num_rows($result))
	{

		if($type=="selected")
		{
echo '<ul class="list" id="active">';
		}
		else
		{
			echo '<ul class="list" >';
		}
		
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


$promo=mysqli_query($conn,'SELECT * FROM promortion WHERE item ="'.$row['pdt_id'].'";');

$pro=mysqli_fetch_array($promo);
if(mysqli_num_rows($promo)==0)
{
	$promo=mysqli_query($conn,'SELECT * FROM promortion WHERE brandmodel ="'.$row['brandmodel'].'";');
	$pro=mysqli_fetch_array($promo);

}
if(mysqli_num_rows($promo)==0)
{
	$promo=mysqli_query($conn,'SELECT * FROM promortion WHERE brand ="'.$row['brand'].'";');
	$pro=mysqli_fetch_array($promo);
}










$items=mysqli_query($conn,'SELECT * FROM itemdetails WHERE itmId="'.$row['pdt_id'].'" AND itmpurorderId="" LIMIT 1;');

$ite=mysqli_fetch_array($items);


			
			$final = '<span class="bold">'.$first.'</span>'.$last. ' '. $fet['colour_name'].' '. $fet1['capacity_name']."-".$ite['itmimei'];
		
			echo '<li><a id="prodet" href=\'javascript:void(0);\' data-proid="'.$pid.'" data-proqty="'.$pqty.'"  data-proname="'.$str.'" data-imei="'.$ite['itmimei'].'" data-promo="'.$pro['amount'].'" data-prounit="'.$punit.'" data-price="'.$pprice.'" data-color="'.$clname.'" data-capacity="'.$cpname.'">'.$final.'</a></li>';  
		}
		echo "</ul>";
	}
	else
		echo 0; 

}
elseif($_POST['id']!="")
{
			$sel1 ="SELECT * FROM items where  intId=".$_POST['id']."";
			$qry1 = mysqli_query($conn,$sel1);
			
if(mysqli_num_rows($qry1)==0)
{

$output =  array(
	             'qty'=>"Nil",
                 'price'=>"New Product"

                 
                 );
echo json_encode($output,JSON_FORCE_OBJECT);



}
else
{
	$row = mysqli_fetch_array($qry1);


$output =  array(
	             'qty'=>$row['qty'],
                 'price'=>$row['price']

                 
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

	$result = mysqli_query($conn,$sql) or die(mysqli_error());
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
			
			$final = '<span class="bold">'.$first.'</span>'.$last. ' '.$str1.' '. $fet['colour_name'].' '. $fet1['capacity_name'];
		
			echo '<li><a id="prodet" href=\'javascript:void(0);\' data-proid="'.$pid.'" data-proqty="'.$pqty.'"  data-proname="'.$str1.'"  data-prounit="'.$punit.'"  data-imei="'.$itmimei.'" data-price="'.$price.'" data-color="'.$clname.'" data-capacity="'.$cpname.'">'.$final.'</a></li>';  
		}
		echo "</ul>";
	}
	else
		echo 0;*/
	?>