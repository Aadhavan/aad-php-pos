<?php 
include '../inc/dbconnect.php';
include '../inc/page_head.php';
include '../inc/page_navi.php';
include '../inc/page_sidebar.php';   
include '../inc/function.php';  
?> 
<?php

$data = new pacific;  
if(isset($_POST['submit'])){
  $cusID =$data->genid(); 
/*  echo "<script> alert('".$cusID."')</script>";*/

 if($_REQUEST['taction'] == "Add"){
      
                                           
if(!empty($_POST['name']&&$_POST['contactNo']&&$_POST['productname']&&$_POST['reason']&&$_POST['value']))

{

/*
 echo '<script> alert("Added");</script>';*/

$insert_repair = array(

      "intCusId"          =>   mysqli_real_escape_string($data->con, $cusID),
      "name"            =>     mysqli_real_escape_string($data->con, $_POST['name']),  
      "contactNo"    =>     mysqli_real_escape_string($data->con, $_POST['contactNo']), 
      "productname"           =>     mysqli_real_escape_string($data->con, $_POST['productname']),
      "reason"         =>     mysqli_real_escape_string($data->con, $_POST['reason']), 
      "value"           =>     mysqli_real_escape_string($data->con, $_POST['value']) 
     
      );  
       $insid = $data->insert('repair', $insert_repair);
/*      
 
print_r ($intCusId);*/

   if($insid){

    echo '<script> alert("Repair Added Successfully");window.location.assign("viewrepair.php");</script>';
   } 
   else{
    echo '<script> alert("Error");</script>';
   }
}
else

{

 echo '<script> alert("Please fill the Required Fields");</script>';

}


}
else
{

$update_repair = array(
      "name"            =>     mysqli_real_escape_string($data->con, $_POST['name']),  
      "contactNo"    =>     mysqli_real_escape_string($data->con, $_POST['contactNo']), 
      "productname"           =>     mysqli_real_escape_string($data->con, $_POST['productname']),  
      "reason"         =>     mysqli_real_escape_string($data->con, $_POST['reason']), 
      "value"           =>     mysqli_real_escape_string($data->con, $_POST['value']) 
          );  


    $id = $_REQUEST['id'];


    $update_id = array(
      "intId"      =>    mysqli_real_escape_string($data->con, $id)
    );

    $insid = $data->update('repair', $update_repair, $update_id);

if($insid){

    echo '<script> alert("Repair Updated Successfully");window.location.assign("repair.php");</script>';
   } 
   else{
    echo '<script> alert("Error");</script>';
   }



}

}


 if($_REQUEST['flag'] == "Edit"){
 $id =$_REQUEST['id'];

    $update_id = array(
      "intId"      =>    mysqli_real_escape_string($data->con, $id)
    );

    $insid = $data->select_where('repair', $update_id);
 }

?>

    <style type="text/css">
      .buttons-copy{display: none;}
      .col-lg-6{float: left;}
    </style>

    <!-- Page -->
    <div class="page">
      <div class="page-header">
        <h1 class="page-title">Repair</h1>
        
           <div class="page-header-actions">
        <a class="btn btn-sm btn-default btn-outline btn-round" href="viewrepair.php" target="viewrepair.php">
        <i class="icon wb-link" aria-hidden="true"></i>
        <span class="hidden-sm-down">View Repair</span>
      </a>
      
      </div>
      </div>

      <form action="" method="post" name="repairform" id="repairform" enctype="multipart/form-data" class="form-horizontal form-bordered">
       <div class="col-lg-6">
  <div class="panel">
    <div class="panel-body">
            <!-- Basic Form Elements Block -->
            <div class="block">
                <!-- Basic Form Elements Title -->
                <!-- END Form Elements Title -->

                <!-- Basic Form Elements Content -->
               
                   <br>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="comName-text-input">Name</label>
                        <div class="col-md-9 txtOnly">
                            <input type="text" id="name" name="name" class="form-control" placeholder="Name" value="<?php echo $insid[0]['name']; ?>" required="">
                           <!--  <span class="help-block">This is a help text</span> -->
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="col-md-3 control-label" for="comcontName-text-input">Contact No</label>
                        <div class="col-md-9 nametxtOnly">
                            <input type="text" id="contactNo" name="contactNo" class="form-control" placeholder="Contact No" value="<?php echo $insid[0]['contactNo']; ?>" required="">
                           <!--  <span class="help-block">This is a help text</span> -->
                        </div>
                    </div>
                 
                         <div class="form-group">
                        <label class="col-md-3 control-label" for="comEmail">Product Name</label>
                        <div class="col-md-9">
                            <input type="text" id="productname" name="productname" class="form-control" placeholder="Enter Product Name" value="<?php echo $insid[0]['productname']; ?>" required="">
                            
                        </div>
                    </div>
          
                    <br>
                    </div>
                   

                    

                   
               </div>
                <!-- END Basic Form Elements Content -->
            </div>
            <!-- END Basic Form Elements Block -->
        </div>
         <div class="col-lg-6">
  <div class="panel">
     <div class="panel-body">
            <!-- Basic Form Elements Block -->
            <div class="block">
                 <br>
                
                     <div class="form-group">
                        <label class="col-md-3 control-label" for="comcontName-text-input">Reason</label>
                        <div class="col-md-9 nametxtOnly">
                            <textarea  id="reason" name="reason" class="form-control" placeholder="Reason" value="<?php echo $insid[0]['reason']; ?>" required=""></textarea>
                           <!--  <span class="help-block">This is a help text</span> -->
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="comEmail">Repair value</label>
                        <div class="col-md-9">
                            <input type="text" id="value" name="value" class="form-control" placeholder="Repair value" value="<?php echo $insid[0]['value']; ?>" required="">
                            
                        </div>
                    </div>
                         <div class="form-group form-actions">
                        <div class="col-md-9 col-md-offset-3">
                          <br>
                          
                            <button type="submit" name="submit" class="btn btn-sm btn-primary" id="submit"><i class="fa fa-angle-right"></i> Submit</button>
                         
                            <input type="hidden" name="taction" value="<?php if($_REQUEST['flag'] =='Edit') echo $_REQUEST['flag']; else echo 'Add'; ?>">
                            <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button>
                        </div>
                    </div>
                    
            </div>
          </div>
</div>
        </div>
       
         </form>
    </div>
    <!-- End Page -->


  
<?php include '../inc/page_footer.php';  ?>
