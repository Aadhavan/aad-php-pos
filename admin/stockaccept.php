<?php 
include '../inc/dbconnect.php';
include '../inc/page_head.php';
include '../inc/page_navi.php';
include '../inc/page_sidebar.php';   



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

?> 


<?php 
if(isset($_POST['submit'])){

/*     echo '<script> alert("'.$_POST['submit'].'");</script>';*/
  if($_POST['submit']=="Accept")
  {
  $name = $_POST['check'];
print_r($name);
// optional
// echo "You chose the following color(s): <br>";

foreach ($name as $id){ 
/*    echo $color."<br />";*/

     /*echo '<script> alert("'.$id.'");</script>';*/ 

//Update in Retail POS


$sql = "UPDATE purchase SET status='4' WHERE intId='$id'; "; 
  $result = mysqli_query($conn,$sql) or die(mysqli_error());

$request=mysqli_query($conn,'SELECT * FROM purchase WHERE intId="'.$id.'"');

$req =mysqli_fetch_array($request);



//Update In Pacific ERP and Get Product Details

$sql2 = "UPDATE purchase_requests SET status='4' WHERE intId='$id'; "; 
  $result2 = mysqli_query($con,$sql2) or die(mysqli_error());


$item_que=mysqli_query($con,'SELECT * FROM items WHERE intId="'.$req['intItemId'].'"');

$item =mysqli_fetch_array($item_que);




$colour=mysqli_query($con,'SELECT * FROM colour WHERE colour_id="'.$item['color'].'"');

$col =mysqli_fetch_array($colour);



$capacity=mysqli_query($con,'SELECT * FROM capacity WHERE capacity_id="'.$item['capacity'].'"');

$cap =mysqli_fetch_array($capacity);


$brand=mysqli_query($con,'SELECT * FROM brand WHERE intId="'.$item['brand'].'"');

$brd =mysqli_fetch_array($brand);


$brand_model=mysqli_query($con,'SELECT * FROM brandmodel WHERE bmodel_id="'.$item['brandmodel'].'"');

$brd_mdl =mysqli_fetch_array($brand_model);

/*echo  "Item ID ".$req['intItemId']; echo "<br>";
echo  "color ".$item['color'];
echo  "capacity ".$item['capacity'];echo "<br>";
echo  "brand ".$item['brand'];echo "<br>";
echo  "brandmodel ".$item['brandmodel'];echo "<br>";echo "<br>";
echo "<br>";*/
  

//Check and Insert into Inventory

// For Brand Table Insertion

 
$brand_models=mysqli_query($conn,'SELECT * FROM brand WHERE par_id="'.$brd['intId'].'"');



if(mysqli_num_rows($brand_models)==0)
{


$brand_mod_id=mysqli_query($conn,'INSERT INTO brand ( varBrandName,varBrandDesc,intStatus,par_id ) VALUES ( "'.$brd['varBrandName'].'", "'.$brd['varBrandDesc'].'","'.$brd['intStatus'].'","'.$brd['intId'].'" );');




}

$brand_models=mysqli_query($conn,'SELECT * FROM brand WHERE par_id="'.$brd['intId'].'"');

  $brand_mod=mysqli_fetch_array($brand_models);

  $brand_mod_id=$brand_mod['intId'];




//For Brand Model Table Insertion and Checking

$brand_model_query=mysqli_query($conn,'SELECT * FROM brandmodel WHERE par_id="'.$brd_mdl['bmodel_id'].'" AND bmodel_brandid ="'.$brand_mod_id.'"');

if(mysqli_num_rows($brand_model_query)==0)
{

$brand_model_id=mysqli_query($conn,'INSERT INTO brandmodel ( bmodel_brandid ,bmodel_name,bmodel_desc,bmodel_status,par_id ) VALUES ( "'.$brand_mod_id.'", "'.$brd_mdl['bmodel_name'].'","'.$brd_mdl['bmodel_desc'].'","'.$brd_mdl['bmodel_status'].'","'.$brd_mdl['bmodel_id'].'" );');

}
$brand_model_query=mysqli_query($conn,'SELECT * FROM brandmodel WHERE par_id="'.$brd_mdl['bmodel_id'].'" AND bmodel_brandid ="'.$brand_mod_id.'"');

  $brand_model_fet=mysqli_fetch_array($brand_model_query);

  $brand_model_id=$brand_model_fet['bmodel_id'];



//For Colour Checking and Insertion


$color_qry=mysqli_query($conn,'SELECT * FROM colour WHERE par_id ="'.$col['colour_id'].'"');

if(mysqli_num_rows($color_qry)==0)
{

$color_id=mysqli_query($conn,'INSERT INTO colour (colour_name,colour_desc,colour_status,par_id ) VALUES ( "'.$col['colour_name'].'", "'.$col['colour_desc'].'","'.$col['colour_status'].'","'.$col['colour_id'].'");');

}

$color_qry=mysqli_query($conn,'SELECT * FROM colour WHERE par_id ="'.$col['colour_id'].'"');

  $col_id_fet=mysqli_fetch_array($color_qry);
  $color_id=$col_id_fet['colour_id'];


//For Capacity Checking and Insertion


$cap_qry=mysqli_query($conn,'SELECT * FROM capacity WHERE par_id ="'.$cap['capacity_id'].'"');

if(mysqli_num_rows($cap_qry)==0)
{

$cap_id=mysqli_query($conn,'INSERT INTO capacity ( capacity_name,capacity_desc ,capacity_status,par_id) VALUES ( "'.$cap['capacity_name'].'", "'.$cap['capacity_desc'].'","'.$cap['capacity_status'].'","'.$cap['capacity_id'].'");');

}

$cap_qry=mysqli_query($conn,'SELECT * FROM capacity WHERE par_id ="'.$cap['capacity_id'].'"');

  $cap_id_fet=mysqli_fetch_array($cap_qry);
  $cap_id=$cap_id_fet['capacity_id']; 



/*echo '<script> alert("'.$item['itemname'].'");</script>';
echo '<script> alert("'.$color_id.'");</script>';
echo '<script> alert("'.$cap_id.'");</script>';
echo '<script> alert("'.$brand_mod_id.'");</script>';
echo '<script> alert("'.$brand_model_id.'");</script>';*/
//For ITEM Checking and Insertion

/*echo 'SELECT * FROM items WHERE itemname ="'.$item['itemname'].'" AND color = "'.$color_id.'" AND capacity ="'.$cap_id.'" AND brand ="'.$brand_mod_id.'" AND brandmodel="'.$brand_model_id.'"';*/

$item_qry=mysqli_query($conn,'SELECT * FROM items WHERE pdt_id ="'.$item['intId'].'" AND color = "'.$color_id.'" AND capacity ="'.$cap_id.'" AND brand ="'.$brand_mod_id.'" AND brandmodel="'.$brand_model_id.'"');



if(mysqli_num_rows($item_qry)==0)
{

 /*echo 'INSERT INTO items (itemname,category,brand,brandmodel,qty,price,color,capacity,simtype,simsize,dimension,display,battery,nonremovable,rammemory,ostype,description,shortdescription,status,pdt_id) VALUES ( "'.$item['itemname'].'", "'.$item['category'].'", "'.$brand_mod_id.'", "'.$brand_model_id.'", "'.$req['approve_qty'].'", "'.$item['price'].'", "'.$color_id.'", "'.$cap_id.'", "'.$item['simtype'].'","'.$item['simsize'].'","'.$item['dimension'].'","'.$item['display'].'","'.$item['battery'].'","'.$item['nonremovable'].'","'.$item['rammemory'].'","'.$item['ostype'].'","'.$item['description'].'","'.$item['shortdescription'].'","'.$item['status'].'","'.$item['intId'].'");';*/


$item_id=mysqli_query($conn,'INSERT INTO items (itemname,category,brand,brandmodel,qty,price,color,capacity,simtype,simsize,dimension,display,battery,nonremovable,rammemory,ostype,description,shortdescription,status,pdt_id,itemtype) VALUES ( "'.$item['itemname'].'", "'.$item['category'].'", "'.$brand_mod_id.'", "'.$brand_model_id.'", "'.$req['approve_qty'].'", "'.$item['price'].'", "'.$color_id.'", "'.$cap_id.'", "'.$item['simtype'].'","'.$item['simsize'].'","'.$item['dimension'].'","'.$item['display'].'","'.$item['battery'].'","'.$item['nonremovable'].'","'.$item['rammemory'].'","'.$item['ostype'].'","'.addslashes($item['description']).'","'.addslashes($item['shortdescription']).'","'.$item['status'].'","'.$item['intId'].'","'.$item['itemtype'].'");');

}
else
{

$newqty=$req['approve_qty'];

$item_id=mysqli_query($conn,"UPDATE items SET qty=qty+'$newqty' WHERE pdt_id='".$item['intId']."';");


}




}

}
else if($_POST['submit']=="Return")
{

$name = $_POST['check'];

// optional
// echo "You chose the following color(s): <br>";

/*echo '<script> alert("'.$id.'");</script>';*/

foreach ($name as $id){ 

//Update in Retail POS


$sql = "UPDATE purchase SET status='5' WHERE intId='$id'; "; 
  $result = mysqli_query($conn,$sql) or die(mysqli_error());

$request=mysqli_query($conn,'SELECT * FROM purchase WHERE intId="'.$id.'"');

$req =mysqli_fetch_array($request);



//Update In Pacific ERP and Get Product Details

$sql2 = "UPDATE purchase_requests SET status='5' WHERE intId='$id'; "; 
  $result2 = mysqli_query($con,$sql2) or die(mysqli_error());


$item_que=mysqli_query($con,'SELECT * FROM items WHERE intId="'.$req['intItemId'].'"');

$item =mysqli_fetch_array($item_que);


}


}


}
?>








 <!-- Page -->
    <link rel="stylesheet" href="../global/vendor/intro-js/introjs.css">
   
<!-- Page -->
<div class="page">
  <div class="page-header">
    <h1 class="page-title">Stock Accept</h1>


  </div>

  <div class="page-content container-fluid">
    <form action="" method="post" name="companyform" id="companyname" enctype="multipart/form-data" class="form-horizontal form-bordered">
    <div class="row">

       <div class="col-lg-12">
         <div class="panel" id="exampleReport">
          <div class="panel-body">
            <!--<div class="panel-heading">
              <h4 class="panel-title">Stock Received</h4>
              <div class="panel-actions">
                <a class="panel-action icon wb-edit" data-toggle="tooltip" data-original-title="edit"
                  data-container="body" title=""></a>
                <a class="panel-action icon wb-reply" data-toggle="tooltip" data-original-title="send"
                  data-container="body" title=""></a>
                <a class="panel-action icon wb-trash" data-toggle="tooltip" data-original-title="move to trash"
                  data-container="body" title=""></a>
                <a class="panel-action icon wb-user" data-toggle="tooltip" data-original-title="uesrs"
                  data-container="body" title=""></a>
              </div>
            </div>-->
            <div class="example-wrap">
              <div class="example">
                <div class="table-responsive">
                  <table class="table table-hover" data-role="content" data-plugin="selectable" data-row-selectable="true">
                    <thead class="bg-blue-grey-100">
                      <tr>
                        
                      <th>
                          <span class="checkbox-custom checkbox-primary">
                            <input class="selectable-all" type="checkbox">
                            <label></label>
                          </span>
                        </th>
                        <th>
                          Stock Order ID
                        </th>
                        <th>
                          Product Name
                        </th>
                        <th>
                          Color
                        </th>
                        <th>
                          Capacity
                        </th>
                        <th>
                          Requested Qty
                        </th>
                        <th>
                          Received Qty
                        </th>
                        <th>Approval Date</th>
                      </tr>
                    </thead>
                    <tbody>

<?php









 $select_pu = "SELECT * FROM purchase WHERE status='2'";
                   $qry_con = mysqli_query($conn,$select_pu);

while($res =mysqli_fetch_array($qry_con))
                    { 

//Data from Pacific ERP

  $item_det = "SELECT * FROM items WHERE intId='".$res['intItemId']."'";
                $item_que = mysqli_query($con,$item_det);

$ite =mysqli_fetch_array($item_que);

$color=mysqli_query($con,'SELECT * FROM colour WHERE colour_id="'.$ite['color'].'"');

$col =mysqli_fetch_array($color);



$capacity=mysqli_query($con,'SELECT * FROM capacity WHERE capacity_id="'.$ite['capacity'].'"');

$cap =mysqli_fetch_array($capacity);



?>
                      <tr>
                        <td>
                          <span class="checkbox-custom checkbox-primary">
                            <input class="selectable-item" type="checkbox" name="check[]"  value="<?php echo $res['intId']; ?>" >
                            <label></label>
                          </span>
                        </td>
                        <td><a href="stockcheck.php?ordid=<?php echo $res['intOrderId'];?>&itid=<?php echo $res['intId'];  ?>"><?php echo $res['intOrderId'];  ?><a> </td>

                        <td><?php echo $ite['itemname'];  ?> </td>
                        <td>
                          <!-- <i class="icon wb-heart" aria-hidden="true"><span class="ml-5">5</span></i> -->
                        <?php echo $col['colour_name'];  ?>
                        </td>
                        <td>
                          <!-- <i class="icon wb-chat" aria-hidden="true"><span class="ml-5">22</span></i> -->
                          <?php echo $cap['capacity_name'];  ?>
                        </td>
                        <td>
                          <!-- <span>6 minets ago</span> -->
                          <?php echo $res['itemqty'];  ?>
                          <!-- <i class="icon wb-time ml-10" aria-hidden="true"></i> -->
                        </td>
                        
                        <td><?php echo $res['approve_qty'];  ?></td>
                        <td>
                        
                          <?php echo $res['appor_date'];  ?>
                        </td>



                      </tr>

                      <?php
}
                      ?>
                     
                    </tbody>
                  </table>
                </div>
                
              </div>
            </div>
             <div class="form-group form-actions">
                        <div class="col-md-9 col-md-offset-3">
                            <!-- <button type="submit" name="submit" id="cussubmit" value="Accept" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Accept</button> -->
                            <input type="hidden" name="taction" value="Add">
                            <button type="submit" data-type="return" name="submit" value="Return" class="btn btn-sm btn-success"><i class="fa wb-reply"></i> Return</button>
                        </div>
                    </div>
          </div>
        </div>
  
        </div> 

    </div>
     </form>
  </div>
</div>
 <link rel="stylesheet" href="../global/vendor/animsition/animsition.css">
    <link rel="stylesheet" href="../global/vendor/asscrollable/asScrollable.css">
    <link rel="stylesheet" href="../global/vendor/switchery/switchery.css">
    <link rel="stylesheet" href="../global/vendor/intro-js/introjs.css">
    <link rel="stylesheet" href="../global/vendor/slidepanel/slidePanel.css">
    <link rel="stylesheet" href="../global/vendor/flag-icon-css/flag-icon.css">
        <link rel="stylesheet" href="../assets/examples/css/tables/basic.css">

    <!-- Footer -->
       <!-- Core  -->
    <script src="../global/vendor/babel-external-helpers/babel-external-helpers.js"></script>
    <script src="../global/vendor/jquery/jquery.js"></script>
    <script src="../global/vendor/popper-js/umd/popper.min.js"></script>
    <script src="../global/vendor/bootstrap/bootstrap.js"></script>
    <script src="../global/vendor/animsition/animsition.js"></script>
    <script src="../global/vendor/mousewheel/jquery.mousewheel.js"></script>
    <script src="../global/vendor/asscrollbar/jquery-asScrollbar.js"></script>
    <script src="../global/vendor/asscrollable/jquery-asScrollable.js"></script>
    <script src="../global/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>
    
 
    <!-- Scripts -->
    <script src="../global/js/Component.js"></script>
    <script src="../global/js/Plugin.js"></script>
    <script src="../global/js/Base.js"></script>
    <script src="../global/js/Config.js"></script>
     
    
    <!-- Page -->
    <script src="../assets/js/Site.js"></script> 
    <script src="../global/js/Plugin/switchery.js"></script>
        <script src="../global/js/Plugin/peity.js"></script>
        <script src="../global/js/Plugin/asselectable.js"></script>
        <script src="../global/js/Plugin/selectable.js"></script>
        <script src="../global/js/Plugin/table.js"></script>
        <script src="../global/js/Plugin/asscrollable.js"></script>
    
        <script src="../assets/examples/js/charts/peity.js"></script>
<?php include '../inc/page_footer.php';  ?>