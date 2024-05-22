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

 if($_REQUEST['taction'] == "Add"){
      
                                           
if(!empty($_POST['cash_name']&&$_POST['cash_desc']))

{


/* echo '<script> alert("Added");</script>';*/

$insert_cash = array(
      "cash_name"            =>     mysqli_real_escape_string($data->con, $_POST['cash_name']),  
      "cash_desc"    =>     mysqli_real_escape_string($data->con, $_POST['cash_desc'])
      
      );  
       $insid = $data->insert('cash', $insert_cash);
      
 

   if($insid){

    echo '<script> alert("CashType Added Successfully");window.location.assign("cash.php");</script>';
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

$update_cash = array(
      "cash_name"            =>     mysqli_real_escape_string($data->con, $_POST['cash_name']),  
      "cash_desc"    =>     mysqli_real_escape_string($data->con, $_POST['cash_desc'])
            
      );  


    $id = $_REQUEST['id'];


    $update_id = array(
      "cash_id"      =>    mysqli_real_escape_string($data->con, $id)
    );

    $insid = $data->update('cash', $update_cash, $update_id);

if($insid){

    echo '<script> alert("CashType Updated Successfully");window.location.assign("cash.php");</script>';
   } 
   else{
    echo '<script> alert("Error");</script>';
   }



}

}



if($_REQUEST['flag'] == "Edit"){

$id=$_REQUEST['id'];

 $cash = mysqli_query($conn,"SELECT * from cash WHERE cash_id ='$id';  "); 

$com = mysqli_fetch_array($cash);


}
?>

<?php
if($_REQUEST['flag'] == "Delete"){


$id=$_REQUEST['id'];

     $update_id = array(
      "cash_id"      =>    mysqli_real_escape_string($data->con, $id)
    );

    $insid = $data->delete_where('cash', $update_id);


 echo '<script> alert("CashType Deleted Successfully");window.location.assign("cash.php");</script>';


}

?>
<!-- Page -->
<div class="page">
  <div class="page-header">
    <h1 class="page-title">Cash Type</h1>


  </div>

  <div class="page-content container-fluid">
    <form action="" method="post" name="companyform" id="companyname" enctype="multipart/form-data" class="form-horizontal form-bordered">
    <div class="row">

       <div class="col-lg-6">
  <div class="panel">
     <div class="panel-body">
            <!-- Basic Form Elements Block -->
            <header class="panel-heading">
              <h3 class="panel-title">Add Cash Type
            
              </h3>
            </header>
    <form action="" method="post" name="companyform" id="companyname" enctype="multipart/form-data" class="form-horizontal form-bordered">
  
                   
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="cashName-text-input">Cash Name</label>
                        <div class="col-md-9 txtOnly">
                            <input type="text" id="cash_name" name="cash_name" value="<?php echo $com['cash_name']; ?>" class="form-control" placeholder="Enter Cash Name" value="" required="">
                           <!--  <span class="help-block">This is a help text</span> -->
                        </div>
                    </div>
                     
                    
                     <div class="form-group">
                        <label class="col-md-3 control-label" for="payDescription">Description</label>
                        <div class="col-md-9">
                            <textarea id="cash_desc" name="cash_desc" rows="9" value="<?php echo $com['cash_desc']; ?>" class="form-control" placeholder="Cash Description.."></textarea>
                        </div>
                    </div>
                   
 
                 
                    <div class="form-group form-actions">
                        <div class="col-md-9 col-md-offset-3">
                            <button type="submit" name="submit" id="cussubmit" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Submit</button>
                            <input type="hidden" name="taction" value="<?php if($_REQUEST['flag'] =='Edit') echo $_REQUEST['flag']; else echo 'Add'; ?>">
                            <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button>
                        </div>
                    </div>
                     </form> 
                    </div>
                    </div>
               
                <!-- END Basic Form Elements Content -->
            
            <!-- END Basic Form Elements Block -->
        </div>
         <div class="col-lg-6">
             <div class="panel">
          <header class="panel-heading">
            <h3 class="panel-title">View Cash Type</h3>
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
                  <th>Cash Name</th>
                  <th>Description</th>
                    <th>Actions</th> 
                </tr>
              </thead>
              <tfoot>
                <tr>
                <th>S.No</th>
                  <th>Cash Name</th>
                  <th>Description</th>
                  <th>Actions</th>
                </tr>
              </tfoot>
              <tbody>

<?php
$i=0;
 $cash = mysqli_query($conn,"SELECT * from cash "); 

while($com = mysqli_fetch_array($cash))
{

$i++;
?>

                <tr>
                   <td><?php echo $i; ?></td>
                  <td><?php echo $com['cash_name']; ?></td>
                  <td><?php echo $com['cash_desc']; ?></td>
                         <td class="actions">
    
                    <a href="cash.php?id=<?php echo $com['cash_id'];?>&flag=Edit" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                      data-toggle="tooltip" data-original-title="Edit"><i class="icon wb-edit" aria-hidden="true"></i></a>
                    <a href="cash.php?id=<?php echo $com['cash_id'];?>&flag=Delete" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
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
     </form>
  </div>
</div> 
<?php include '../inc/page_footer.php';  ?>