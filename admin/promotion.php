<?php 
include '../inc/dbconnect.php';
include '../inc/page_head.php';
include '../inc/page_navi.php';
include '../inc/page_sidebar.php';   
include '../inc/function.php';
?> 


<?php

$data=new pacific;

if(isset($_POST['submit'])){
/*echo "<script> alert('".$_POST['submit']."')</script>";*/
if($_REQUEST['taction'] == "Add"){
/*
echo "<script> alert('".count($_POST['proid'])."')</script>";*/
$curdate=date('Y-m-d');

$name=$_POST['promoname'];
$brandid=$_POST['brd_Name'];
$brandmod_id=$_POST['cat_name'];
$item_id=$_POST['modname'];
$amount=$_POST['amt'];

if($name!=""&&$amount!="")
{
 $salesitem=array(
               
                "name"           =>     mysqli_real_escape_string($data->con, $name),
                "brand"          =>     mysqli_real_escape_string($data->con, $brandid),
                "brandmodel"     =>     mysqli_real_escape_string($data->con, $brandmod_id),
                "item"           =>     mysqli_real_escape_string($data->con, $item_id),
                "amount"         =>     mysqli_real_escape_string($data->con, $amount), 
                "date"           =>     mysqli_real_escape_string($data->con, $curdate)
           );  
         $insid = $data->insert('promortion', $salesitem);     

if($insid)
{
 echo '<script> alert("Promotion Discount Added Successfully");window.location.assign("promotion.php");</script>';
}
}
else
{
   echo '<script> alert("Please Enter Valid Details");window.location.assign("promotion.php");</script>';
}


}

else
{

$update_paymentterm = array(
                "name"           =>     mysqli_real_escape_string($data->con, $name),
                "brand"          =>     mysqli_real_escape_string($data->con, $brandid),
                "brandmodel"     =>     mysqli_real_escape_string($data->con, $brandmod_id),
                "item"           =>     mysqli_real_escape_string($data->con, $item_id),
                "amount"         =>     mysqli_real_escape_string($data->con, $amount), 
                "date"           =>     mysqli_real_escape_string($data->con, $curdate)
            
      );  


    $id = $_REQUEST['id'];


    $update_id = array(
      "id"      =>    mysqli_real_escape_string($data->con, $id)
    );

    $insid = $data->update('promortion', $update_paymentterm, $update_id);

if($insid){

    echo '<script> alert("Promotion Discount Updated Successfully");window.location.assign("promotion.php");</script>';
   } 
   else{
    echo '<script> alert("Error");</script>';
   }



}

}


if($_REQUEST['flag'] == "Edit"){

$id=$_REQUEST['id'];

 $paymentterm = mysqli_query($conn,"SELECT * from promortion WHERE id ='$id';  "); 

$com = mysqli_fetch_array($paymentterm);


}
?>

<?php
if($_REQUEST['flag'] == "Delete"){


$id=$_REQUEST['id'];

     $update_id = array(
      "id"      =>    mysqli_real_escape_string($data->con, $id)
    );

    $insid = $data->delete_where('promortion', $update_id);


 echo '<script> alert("Promotion Discount Deleted Successfully");window.location.assign("promotion.php");</script>';


}

?>

<!-- Page -->
<div class="page">
  <div class="page-header">
    <h1 class="page-title">Promotion</h1>


  </div>

  <div class="page-content container-fluid">
   
    <div class="row">
 

       <div class="col-lg-6">
  <div class="panel">
     <div class="panel-body">
            <!-- Basic Form Elements Block -->
            <header class="panel-heading">
              <h3 class="panel-title">Add Promotion
            
              </h3>
            </header>
             <form action="" method="post" name="companyform" id="companyname" enctype="multipart/form-data" class="form-horizontal form-bordered">
                <!-- END Form Elements Title -->

                <!-- Basic Form Elements Content -->
               
                   
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="comName-text-input">Promotion Name</label>
                        <div class="col-md-9 txtOnly">
                            <input type="text" id="promoname" name="promoname" class="form-control" placeholder="Enter Text" value="<?php echo $com['name']; ?>" required="">
                           <!--  <span class="help-block">This is a help text</span> -->
                        </div>
                    </div>

                 <div class="form-group">
                        <label class="col-md-3 control-label" for="brdName-select">Category Name</label>
                        <div class="col-md-9">
             <select class="form-control" id="brd_Name" name="brd_Name" onchange="brandmod(this.value)">
                                         <option value="">---Select Category Name---</option>
 <?php
$brand=mysqli_query($conn,'SELECT * FROM brand;');

while($brd=mysqli_fetch_array($brand))
{

                                         ?>
                                           
                                            <option value="<?php echo $brd['intId']; ?>" ><?php echo $brd['varBrandName']; ?></option>

<?php
}
?>

                                 
                          </select> 
            




                        </div>
                    </div>
                <div class="form-group">
                        <label class="col-md-3 control-label" for="brdName-select">Category Model</label>
                        <div class="col-md-9">
                                           <select class="form-control" id="cat_name" name="cat_name" onclick="getmodel(this.value);">
                                            <option value="">---Select Category Model---</option>


 

                          </select> 
                    </div>
                    </div>

                <div class="form-group">
                        <label class="col-md-3 control-label" for="brdName-select">Model Name</label>
                        <div class="col-md-9">
              <select class="form-control" id="modname" name="modname">
              <option value="">---Select Category Model---</option>
                                       

                          </select> 
                    </div>
                    </div>

 
                    <div class="form-group" id="ifYes" >
                    <label class="col-md-3 control-label" for="brdName-select">Enter Amount</label>
      <div class="col-md-9"> <input type='text' id='amt' value="<?php echo $com['amount']; ?>" name='amt' class="form-control"></div>
 </div> 
     
                                       
                            <div class="form-group form-actions">
                        <div class="col-md-9 col-md-offset-3">
                          <br>
                          
                            <button type="submit" name="submit" class="btn btn-sm btn-primary" id="comsubmit"><i class="fa fa-angle-right"></i> Submit</button>
                            <input type="hidden" name="taction" value="Add">
                            <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button>
                        </div>
                    </div>
                     </form>
                <!-- END Basic Form Elements Content -->
            
            <!-- END Basic Form Elements Block -->
        </div>

          
       
        

    </div>
    </div>
    <div class="col-lg-6">
             <div class="panel">
          <header class="panel-heading">
            <h3 class="panel-title">View Promotion</h3>
          </header>
          <div class="panel-body">
            <div class="row">
              <div class="col-md-6">
               <!--  <div class="mb-15">
                  <button id="addToTable" class="btn btn-outline btn-primary" type="button">
                    <i class="icon wb-plus" aria-hidden="true"></i> Add row
                  </button>
                </div> -->
              </div>
            </div>
         <table class="table table-hover dataTable table-striped w-full" id="exampleTableTools">
              <thead>
                <tr>
                <th>S.No</th>
                  <th>Name</th>
                  <th>Category Name</th>
                    <th>Category Model</th>
                 <th>Model Name</th> 
                     <th>Amount</th>
                    <th>Actions</th> 
                </tr>
              </thead>
              <tfoot>
                <tr>
                <th>S.No</th>
                  <th>Name</th>
                  <th>Category Name</th>
                    <th>Category Model</th>
                  <th>Model Name</th>
                     <th>Amount</th>
                  <th>Actions</th>
                </tr>
              </tfoot>
              <tbody>

<?php
$i=0;
 $promortion = mysqli_query($conn,"SELECT * from promortion "); 

while($com = mysqli_fetch_array($promortion))
{
$pinqry1 = mysqli_query($conn,"select * from brand WHERE intId='".$com['brand']."'"); 
  $res1 = mysqli_fetch_array($pinqry1); 
  $pinqry11 = mysqli_query($conn,"select * from brandmodel WHERE bmodel_id='".$com['brandmodel']."'"); 
      $res11 = mysqli_fetch_array($pinqry11); 
     
$i++;
?>

                <tr>
                   <td><?php echo $i; ?></td>
                  <td><?php echo $com['name']; ?></td>
                  <td><?php echo $res1['varBrandName']; ?></td>
                    <td><?php echo $res11['bmodel_name']; ?></td>

 <?php
 $pinqry = mysqli_query($conn,"SELECT * from items WHERE pdt_id='".$com['item']."'");
      $res = mysqli_fetch_array($pinqry); 
      $pinqry = mysqli_query($conn,"SELECT * from colour WHERE colour_id='". $res['color']."'"); 
      $res1 = mysqli_fetch_array($pinqry); 
      $pinqry = mysqli_query($conn,"SELECT * from capacity WHERE capacity_id='". $res['capacity']."'"); 
      $res11 = mysqli_fetch_array($pinqry); ?>

                  <td><?php echo $res1['colour_name']; ?>
                  <?php echo $res11['capacity_name']; ?></td> 
                    <td><?php echo $com['amount']; ?></td>
                 
                         <td class="actions">
    
                    <a href="promotion.php?id=<?php echo $com['id'];?>&flag=Edit" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                      data-toggle="tooltip" data-original-title="Edit"><i class="icon wb-edit" aria-hidden="true"></i></a>
                    <a href="promotion.php?id=<?php echo $com['id'];?>&flag=Delete" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
                      data-toggle="tooltip" data-original-title="Remove"><i class="icon wb-trash" aria-hidden="true"></i></a>
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
  </div>
  </div>
</div>




<?php include '../inc/page_footer.php';  ?>
<script>
  
function brandmod(val)
{
/*  alert(val);*/
var act="fet_brand";

$.ajax({
  type: "POST",
  url: "possale_functions.php",
  data:{id : val,action : act },
  success: function(data){


    $("#cat_name").html(data);

/*
alert(data);*/
/*qty = data;*/
/*  price=data.price*/
           }

         });

}

</script>

<script>
function getmodel(val)
{
var brd=  $("#brd_Name").val();

var act="fet_mod";

/*alert(brd);
alert(val);*/

$.ajax({
  type: "POST",
  url: "possale_functions.php",
  data:{id : val, brand : brd ,action : act },
  success: function(data){

/*alert(data);*/
    $("#modname").html(data);

/*
alert(data);*/
/*qty = data;*/
/*  price=data.price*/
           }

         });



}

</script>