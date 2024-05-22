



<?php 
include '../inc/dbconnect.php';  
include '../inc/function.php';  

$data = new pacific;  

if($_POST['action']=="Check")
{
$qty=$_POST['quty'];
$id=$_POST['id'];



$quantity=mysqli_query($conn,'SELECT * FROM items WHERE intId ="'.$id.'";');

/*echo 'SELECT * FROM items WHERE intId ="$id";';*/

$quant=mysqli_fetch_array($quantity);



if($quant['qty']>=$qty)
{

$curr_qty=$qty;
}
else
{
$curr_qty=$quant['qty'];
}
/*echo $quant['qty'];*/

echo $curr_qty;
}
else if($_POST['action']=="AddCus")
{
$name=$_POST['nme'];
$email=$_POST['mail'];
$mnos=$_POST['mob'];
$addr=$_POST['address'];


$insert_company = array(
      "cus_contact_name"    =>     mysqli_real_escape_string($data->con, $name),  
      "cus_email"           =>     mysqli_real_escape_string($data->con, $email), 
      "cus_mobileno"        =>     mysqli_real_escape_string($data->con, $mnos), 
      "cus_adress"          =>     mysqli_real_escape_string($data->con, $addr)
      
      );  
       $insid = $data->insert('customer', $insert_company);


$customer=mysqli_query($conn,'SELECT * FROM customer WHERE cus_id ="'.$insid.'" ');

$cust=mysqli_fetch_array($customer);
/*
echo $cust['cus_contact_name'];*/

/*
echo "<input type='hidden' name='cust_name' id='cust_name' value='".$cust['cus_id']."'><h4>".$cust['cus_contact_name']."</h4><button type='button' class='input-search-close icon wb-close' aria-label='Close' onclick='normal();'></button>";*/
/*$output =  array(
	             'cust_id'=>$cust['cus_id'],
                 'cus_name'=>$cust['cus_contact_name']

                 
                 );
echo json_encode($output,JSON_FORCE_OBJECT);*/




/*
if($insid)
{
	echo "Success";
}
else
{
	echo "Fails";
}*/
}
else if($_POST['action']=='Cusfet')
{

$customer=mysqli_query($conn,'SELECT * FROM customer');
?>
 <select data-plugin="selectpicker" name="cust_name" >
<?php
while($cust=mysqli_fetch_array($customer))
{
?>

                       <option value="<?php echo $cust['cus_id'] ?>"><?php echo $cust['cus_contact_name'] ?></option>
                      


<?php 
}
?>
</select>
<?php
}
else if($_POST['action']=='fet_brand')
{
$id=$_POST['id'];
?>
<option value="">---Select Category Model---</option>
<?php
$brand_mod=mysqli_query($conn,'SELECT * FROM brandmodel WHERE bmodel_brandid ="'.$id.'"');

while($cust=mysqli_fetch_array($brand_mod))
{
?>

                       <option value="<?php echo $cust['bmodel_id'] ?>"><?php echo $cust['bmodel_name'] ?></option>
                      


<?php 
}


}
else if($_POST['action']=='fet_mod')
{
$id=$_POST['id'];
$brand_id=$_POST['brand'];


$brand_mod=mysqli_query($conn,'SELECT * FROM items WHERE brand = "'.$brand_id.'" AND brandmodel ="'.$id.'"');

?>
<option value="">---Select Model---</option>
<?php



while($cust=mysqli_fetch_array($brand_mod))
{




$colour=mysqli_query($conn,'SELECT * FROM colour WHERE colour_id="'.$cust['color'].'"');

$col =mysqli_fetch_array($colour);



$capacity=mysqli_query($conn,'SELECT * FROM capacity WHERE capacity_id="'.$cust['capacity'].'"');

$cap =mysqli_fetch_array($capacity);


$name=$cust['itemname'].$col['colour_name'].$cap['capacity_name'];


?>

                       <option value="<?php echo $cust['pdt_id'] ?>"><?php echo $name; ?></option>
                      


<?php 
}


}

if(!empty($_POST["keyword"])) {
  
$query ="SELECT * FROM customer WHERE cus_contact_name like '" . $_POST["keyword"] . "%' ORDER BY cus_contact_name LIMIT 0,6";
$result = mysqli_query($conn,$query);
if(!empty($result)) {
?>
<ul id="country-list" style=" float:left;list-style:none;margin-top:-3px;padding:0;width:200px;position: absolute;z-index:1;">
<?php
foreach($result as $country) {
?>
<li style="padding: 5px; background: #ffffff; border-bottom: #bbb9b9 1px solid;cursor:pointer;font-size: 18px;" onClick="selectCountry('<?php echo $country["cus_contact_name"]; ?>');"><?php echo $country["cus_contact_name"]; ?></li>
<?php } ?>
</ul>
<?php } } 