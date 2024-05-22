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
      
                                           
if(!empty($_POST['varMName']&&$_POST['varMEmail']&&$_POST['varMPassword']))
{


/* echo '<script> alert("Added");</script>';*/

$insert_company = array(
        "intMId"              =>     mysqli_real_escape_string($data->con, '1'),
        "varMName"            =>     mysqli_real_escape_string($data->con, $_POST['varMName']),  
        "varMEmail"           =>     mysqli_real_escape_string($data->con, $_POST['varMEmail']), 
        "varMPassword"        =>     mysqli_real_escape_string($data->con, $_POST['varMPassword']),
        "varMType"            =>     mysqli_real_escape_string($data->con, "administrator")
   
      );  
       $insid = $data->insert('user', $insert_company);
      
 

   if($insid){

    echo '<script> alert("Profile Added Successfully");window.location.assign("profile.php");</script>';
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
/* echo '<script> alert("Added");</script>';*/
  $update_company = array(
      "varMName"            =>     mysqli_real_escape_string($data->con, $_POST['varMName']),  
      "varMEmail"           =>     mysqli_real_escape_string($data->con, $_POST['varMEmail']), 
      "varMPassword"           =>     mysqli_real_escape_string($data->con, $_POST['varMPassword'])
           
      );  


    $id = $_REQUEST['id'];


    $update_id = array(
      "intId"      =>    mysqli_real_escape_string($data->con, $id)
    );

    $insid = $data->update('user', $update_company, $update_id);

if($insid){

    echo '<script> alert("Profile Updated Successfully");window.location.assign("profile.php");</script>';
   } 
   else{
    echo '<script> alert("Error");</script>';
   }

}

}

if($_REQUEST['flag'] == "Edit"){

$id=$_REQUEST['id'];

 $company = mysqli_query($conn,"SELECT * from user WHERE intId ='$id';  "); 

$com = mysqli_fetch_array($company);


}

?>

<!-- Page -->
<div class="page">
  <div class="page-header">
    <h1 class="page-title">Profile Settings</h1>


  </div>

  <div class="page-content container-fluid">
    <form action="" method="post" name="companyform" id="companyname" enctype="multipart/form-data" class="form-horizontal form-bordered" autocomplete="off">
    <div class="row">

       <div class="col-lg-6">
  <div class="panel">
     <div class="panel-body">
            <!-- Basic Form Elements Block -->
            <header class="panel-heading">
              <h3 class="panel-title">Profile
            
              </h3>
            </header>
                <form id="brandForm" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered">
                     <div class="form-group">
                        <label class="col-md-3 control-label" for="taxName-text-input">Name</label>
                        <div class="col-md-9">
                            <input type="text" id="varMName" name="varMName" class="form-control" placeholder="Enter Name" value="<?php echo $com['varMName']; ?>" required="">
                           <!--  <span class="help-block">This is a help text</span> -->
                        </div>
                    </div>                                        
                            
                          <div class="form-group">
                        <label class="col-md-3 control-label" for="comEmail">Email Input</label>
                        <div class="col-md-9">
                            <input type="email" id="varMEmail" name="varMEmail" class="form-control" placeholder="Enter Email" value="<?php echo $com['varMEmail']; ?>" required="">
                            
                            <span id="error" style="display:none;color:red;">Wrong email</span>
                            
                        </div>
                    </div>
             
                            <div class="form-group">
                            <label class="col-md-3 control-label" for="varPassword">Password</label>
                            <div class="col-md-9">
                              <input type="password" id="varMPassword" name="varMPassword" class="form-control" value="<?php echo $com['varMPassword'];?>" placeholder="Password">
                              </div>
                         </div>
                      <div class="form-group form-actions">
                        <div class="col-md-9 col-md-offset-3">
                  <button type="submit" name="submit" class="btn btn-sm btn-primary" id="submitbrand"><i class="fa fa-angle-right"></i>  Update</button>
                  <input type="hidden" name="taction" value="<?php if($_REQUEST['flag'] =='Edit') echo $_REQUEST['flag']; else echo 'Add'; ?>">
                    <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button>
                        </div>
                        <br>
                    </div>
                  </form> 
                    </div>
                    </div>
               
                      </div>
                   <div class="col-lg-6">
             <div class="panel">
          <header class="panel-heading">
            <h3 class="panel-title">View Profile</h3>
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
         <table class="table table-hover dataTable table-striped w-full" id="exampleTadbleTools">
              <thead>
                <tr>
                <th>S.No</th>
                  <th>Name</th>
                  <th>User Name</th>
                  <th>Password</th>
                    <th>Actions</th> 
                </tr>
              </thead>
              <tfoot>
                <tr>
                <th>S.No</th>
                 <th>User Name</th>
                  <th>Password</th>
                  <th>Actions</th>
                </tr>
              </tfoot>
              <tbody>

<?php
$i=0;
 $paymentterm = mysqli_query($conn,"SELECT * from user "); 

while($com = mysqli_fetch_array($paymentterm))
{

$i++;
?>

                <tr>
                   <td><?php echo $i; ?></td>
                  <td><?php echo $com['varMName']; ?></td>
                  <td><?php echo $com['varMEmail']; ?></td>
                   <td><?php echo $com['varMPassword']; ?></td>
                         <td class="actions">
    
                    <a href="profile.php?id=<?php echo $com['intId'];?>&flag=Edit" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                      data-toggle="tooltip" data-original-title="Edit"><i class="icon wb-edit" aria-hidden="true"></i></a>
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