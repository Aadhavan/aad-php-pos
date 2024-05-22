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
      
                                           
if(!empty($_POST['comContactName']&&$_POST['comEmail']&&$_POST['comMobile']&&$_POST['comAddress']&&$_POST['customer_license_no']))

{




$target = "customerfiles/";  
  $fileName1 = $_FILES['customer_license_file']['name'];


/* echo '<script> alert("Added");</script>';*/

$insert_company = array(
      "cus_contact_name"    =>     mysqli_real_escape_string($data->con, $_POST['comContactName']),  
      "cus_email"           =>     mysqli_real_escape_string($data->con, $_POST['comEmail']), 
      "cus_phone"           =>     mysqli_real_escape_string($data->con, $_POST['comPhone']), 
      "cus_mobileno"        =>     mysqli_real_escape_string($data->con, $_POST['comMobile']), 
      "cus_adress"          =>     mysqli_real_escape_string($data->con, $_POST['comAddress']), 
      "cus_state"           =>     mysqli_real_escape_string($data->con, $_POST['comState']), 
      "cus_postcode"        =>     mysqli_real_escape_string($data->con, $_POST['comPostcode']), 
      "cus_country"         =>     mysqli_real_escape_string($data->con, $_POST['comCountry']), 
      "cus_license_no"      =>     mysqli_real_escape_string($data->con, $_POST['customer_license_no'])
      
      );  
       $insid = $data->insert('customer', $insert_company);
      
   $update_id = array(
      "cus_id"      =>    mysqli_real_escape_string($data->con, $insid)
    );

      $fileTarget1 = $target.$id.'_'.$fileName1;
      $tempFileName1 = $_FILES["customer_license_file"]["tmp_name"];
      move_uploaded_file($tempFileName1,$fileTarget1);

      $upd_img = array(
        "cus_license_imge" =>     mysqli_real_escape_string($data->con, $id.'_'.$fileName1)
      );

      $update = $data->update('customer', $upd_img,$update_id);






   if($insid){

    echo '<script> alert("Customer Added Successfully");window.location.assign("viewcustomer.php");</script>';
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
else{

$insert_company = array(
      "cus_contact_name"    =>     mysqli_real_escape_string($data->con, $_POST['comContactName']),  
      "cus_email"           =>     mysqli_real_escape_string($data->con, $_POST['comEmail']), 
      "cus_phone"           =>     mysqli_real_escape_string($data->con, $_POST['comPhone']), 
      "cus_mobileno"        =>     mysqli_real_escape_string($data->con, $_POST['comMobile']), 
      "cus_adress"          =>     mysqli_real_escape_string($data->con, $_POST['comAddress']), 
      "cus_state"           =>     mysqli_real_escape_string($data->con, $_POST['comState']), 
      "cus_postcode"        =>     mysqli_real_escape_string($data->con, $_POST['comPostcode']), 
      "cus_country"         =>     mysqli_real_escape_string($data->con, $_POST['comCountry']), 
      "cus_license_no"      =>     mysqli_real_escape_string($data->con, $_POST['customer_license_no'])
      
      ); 

    $id = $_REQUEST['id'];

  $update_id = array(
      "cus_id"      =>    mysqli_real_escape_string($data->con, $id)
    );



$target = "customerfiles/";  
  $fileName1 = $_FILES['customer_license_file']['name'];


$fileTarget1 = $target.$id.'_'.$fileName1;
      $tempFileName1 = $_FILES["customer_license_file"]["tmp_name"];
      move_uploaded_file($tempFileName1,$fileTarget1);

      $upd_img = array(
        "cus_license_imge" =>     mysqli_real_escape_string($data->con, $id.'_'.$fileName1)
      );

      $update = $data->update('customer', $upd_img,$update_id);

  if($update){

    echo '<script> alert("Customer Updated Successfully");window.location.assign("viewcustomer.php");</script>';
   } 
   else{
    echo '<script> alert("Error");</script>';
   }



}











}


if($_REQUEST['flag'] == "Edit"){

$id=$_REQUEST['id'];

 $company = mysqli_query($conn,"SELECT * from customer WHERE cus_id ='$id';  "); 

$com = mysqli_fetch_array($company);


}


?>
<!-- Page -->
<div class="page">
  <div class="page-header">
    <h1 class="page-title">Company</h1>


  </div>

  <div class="page-content container-fluid">
    <form action="" method="post" name="companyform" id="companyname" enctype="multipart/form-data" class="form-horizontal form-bordered">
    <div class="row">

 <style type="text/css">
/*#companyname .col-md-9{max-width: 100% !important;}
.pull-right .btn-default{padding: 10px;}
#companyname .block-title{margin: 0px 0px 20px;
    background-color: #f9fafc;
    border-bottom: 1px solid #eaedf1;}
#comAddress{height: 46px !important;}
.block-title .btn-default{float: right;}
.block-title h2{display: inline-block;
    font-size: 15px;
    line-height: 1.4; 
    margin: 0;
    padding: 10px 16px 7px;
    font-weight: normal;}/*
.col-lg-6{float:left !important;} 
.tab-content{border: 1px solid #3e8ef7;}
.nav-item .nav-link.active{border: 1px solid #3e8ef7 !important; border-bottom: none !important; top: 2px !important;}
.product-image-wrapper img{width: 75px;}
body > div.wrapper > div > div.content {
    padding-top: 10px;
}

.checkout-header .btn {
    box-shadow: 1px 1px 1px 0px #909090;
    border: solid 1px #cacaca;
    margin-right: 8px;
}

.checkout-header .btn-warning {
    background: #ff6262;
    color: #FFF;
    border: solid 1px #ca0000;
}
.shadowed-dropdown {
    box-shadow: 0px 2px 5px 0px #717171;
    border: solid 1px #9a9a9a;
}
.products-grid .item{list-style:none !important;width: 25% !important; float:left !important;}*/
</style> 

       <div class="col-lg-6">
  <div class="panel">
     <div class="panel-body">
            <!-- Basic Form Elements Block -->
            <header class="panel-heading">
              <h3 class="panel-title">Add Customer
            
              </h3>
            </header>
                <!-- END Form Elements Title -->

                <!-- Basic Form Elements Content -->
               
                   
                   
                     <div class="form-group">
                        <label class="col-md-3 control-label" for="comcontName-text-input">Contact  Name</label>
                        <div class="col-md-9 nametxtOnly">
                            <input type="text" id="comContactName" name="comContactName" class="form-control" placeholder="Contact  Name" value="<?php echo $com['cus_contact_name']; ?>" required=""> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="comEmail">Email Input</label>
                        <div class="col-md-9">
                            <input type="email" id="email_address" name="comEmail" class="form-control" placeholder="Enter Email" value="<?php echo $com['cus_email']; ?>" required="">
                            <span id="error" style="display:none;color:red;">Wrong email</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="comPhone">Phone</label>
                        <div class="col-md-9">
                            <input type="text" id="comPhone" name="comPhone" class="form-control" placeholder="Enter Phone" value="<?php echo $com['cus_phone']; ?>" onkeypress="validate(event)" required="">

                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="comMobile">Mobile</label>
                        <div class="col-md-9">
                            <input type="text" id="comMobile" name="comMobile" class="form-control" placeholder="Enter Mobile" value="<?php echo $com['cus_mobileno']; ?>" onkeypress="validate(event)" required="">
                            
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="comAddress">Address</label>
                        <div class="col-md-9">
                            <textarea id="comAddress" name="comAddress" rows="9" class="form-control" placeholder="Address.." required="" style="height: 80px"><?php echo $com['cus_adress']; ?> </textarea>
                            <br>
                        </div>
                      </div>

                    </div>
            </div>
               
                <!-- END Basic Form Elements Content -->
            
            <!-- END Basic Form Elements Block -->
        </div>
         <div class="col-lg-6">
  <div class="panel">
            <!-- Basic Form Elements Block -->
            <div class="panel-body">
                 <header class="panel-heading">
              <h3 class="panel-title"></h3>
              <div class="page-header-actions">
        <a class="btn btn-sm btn-default btn-outline btn-round" href="viewcustomer.php">
        <i class="icon wb-link" aria-hidden="true"></i>
        <span class="hidden-sm-down">Viewcustomers</span>
      </a>
      
      </div>
            </header>
              <div class="form-group">
                        <label class="col-md-3 control-label" for="comState">State</label>
                        <div class="col-md-9 txtOnly">
                            <input type="text" id="comState" name="comState" class="form-control" placeholder="Enter State" value="<?php echo $com['cus_state']; ?>" required="">
                            
                        </div>


                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="comPostcode">Post Code</label>
                        <div class="col-md-9">
                            <input type="text" id="comPostcode" name="comPostcode" class="form-control" placeholder="Enter Post Code" value="<?php echo $com['cus_postcode']; ?>" onkeypress="return postfun();">
                              <p id="showmsg"></p>
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="comCountry">Country</label>
                        <div class="col-md-9 txtOnly">
                            <input type="text" id="comCountry" name="comCountry" class="form-control" placeholder="Enter Country" value="<?php echo $com['cus_country']; ?>" required="">
                            
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="cus_license_no">ABN / License</label>
                        <div class="col-md-9">
                            <input type="text" id="customer_license_no" name="customer_license_no" class="form-control" placeholder="Enter License Number" value="<?php echo $com['cus_license_no']; ?>" onkeypress="return IsAlphaNumeric(event);" ondrop="return false;" onpaste="return false;">
                            
                        </div>
                    </div>
                     

                        <div class="form-group">
                        <label class="col-md-3 control-label" for="cus_license_no">License Image</label>
                        <div class="col-md-9">
                            <input type="file" id="customer_license_file" name="customer_license_file" class="form-control" value=""><?php echo $com['cus_license_imge']; ?>
                                                   </div>
                       
                    </div>

                      <div class="form-group form-actions">
                        <div class="col-md-9 col-md-offset-3">
                            <button type="submit" name="submit" id="cussubmit" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Submit</button>
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
</div>




<?php include '../inc/page_footer.php';  ?>