  <?php
include '../inc/dbconnect.php';

if($_POST['data']!=0)
{



$customer=mysqli_query($conn,'SELECT * FROM items WHERE intId="'.$_POST['data'].'" ');
$cust=mysqli_fetch_array($customer);

echo "<table>";

echo "<tr><td>Available Units:</td><td><input type='text' value='".$cust['qty']."' disabled></td></tr>";

echo "<tr><td>Price:</td><td><input type='text' value='$".$cust['price']."' disabled></td></tr>";
echo "</table>";
}
