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
      
                                           
if(!empty($_POST['comName']&&$_POST['comContactName']&&$_POST['comMobile']&&$_POST['comPostcode']&&$_POST['comCountry']))

{


/* echo '<script> alert("Added");</script>';*/

$insert_company = array(
      "com_name"            =>     mysqli_real_escape_string($data->con, $_POST['comName']),  
      "com_contact_name"    =>     mysqli_real_escape_string($data->con, $_POST['comContactName']), 
      "com_email"           =>     mysqli_real_escape_string($data->con, $_POST['comEmail']), 
      "com_phone"           =>     mysqli_real_escape_string($data->con, $_POST['comPhone']), 
      "com_mob"             =>     mysqli_real_escape_string($data->con, $_POST['comMobile']), 
      "com_address"         =>     mysqli_real_escape_string($data->con, $_POST['comAddress']), 
      "com_state"           =>     mysqli_real_escape_string($data->con, $_POST['comState']), 
      "com_postcode"        =>     mysqli_real_escape_string($data->con, $_POST['comPostcode']), 
      "com_country"         =>     mysqli_real_escape_string($data->con, $_POST['comCountry']), 
      "com_abn"             =>     mysqli_real_escape_string($data->con, $_POST['comABN']), 
      "com_acn"             =>     mysqli_real_escape_string($data->con, $_POST['comACN'])
      
      );  
       $insid = $data->insert('company', $insert_company);
      
 

   if($insid){

    echo '<script> alert("Company Added Successfully");window.location.assign("addcompany.php");</script>';
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

$update_company = array(
      "com_name"            =>     mysqli_real_escape_string($data->con, $_POST['comName']),  
      "com_contact_name"    =>     mysqli_real_escape_string($data->con, $_POST['comContactName']), 
      "com_email"           =>     mysqli_real_escape_string($data->con, $_POST['comEmail']), 
      "com_phone"           =>     mysqli_real_escape_string($data->con, $_POST['comPhone']), 
      "com_mob"             =>     mysqli_real_escape_string($data->con, $_POST['comMobile']), 
      "com_address"         =>     mysqli_real_escape_string($data->con, $_POST['comAddress']), 
      "com_state"           =>     mysqli_real_escape_string($data->con, $_POST['comState']), 
      "com_postcode"        =>     mysqli_real_escape_string($data->con, $_POST['comPostcode']), 
      "com_country"         =>     mysqli_real_escape_string($data->con, $_POST['comCountry']), 
      "com_abn"             =>     mysqli_real_escape_string($data->con, $_POST['comABN']), 
      "com_acn"             =>     mysqli_real_escape_string($data->con, $_POST['comACN'])
      
      );  


    $id = $_REQUEST['id'];


    $update_id = array(
      "com_id"      =>    mysqli_real_escape_string($data->con, $id)
    );

    $insid = $data->update('company', $update_company, $update_id);

if($insid){

    echo '<script> alert("Company Updated Successfully");window.location.assign("viewcompany.php");</script>';
   } 
   else{
    echo '<script> alert("Error");</script>';
   }



}

}



if($_REQUEST['flag'] == "Edit"){

$id=$_REQUEST['id'];

 $company = mysqli_query($conn,"SELECT * from company WHERE com_id ='$id';  "); 

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
              <h3 class="panel-title">Add Company
            
              </h3>
            </header>
                <!-- END Form Elements Title -->

                <!-- Basic Form Elements Content -->
               
                   
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="comName-text-input">Company Name</label>
                        <div class="col-md-9 txtOnly">
                            <input type="text" id="comName" name="comName" class="form-control" placeholder="Enter Text" value="<?php echo $com['com_name']; ?>" required="">
                           <!--  <span class="help-block">This is a help text</span> -->
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="col-md-3 control-label" for="comcontName-text-input">Contact  Name</label>
                        <div class="col-md-9 nametxtOnly">
                            <input type="text" id="comContactName" name="comContactName" class="form-control" placeholder="Contact Name" value="<?php echo $com['com_contact_name']; ?>" required="">
                           <!--  <span class="help-block">This is a help text</span> -->
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="comEmail">Email Input</label>
                        <div class="col-md-9">
                            <input type="email" id="email_address" name="comEmail" class="form-control" placeholder="Enter Email" value="<?php echo $com['com_email']; ?>" required="">
                            
                            <span id="error" style="display:none;color:red;">Wrong email</span>
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label " for="comPhone">Phone</label>
                        <div class="col-md-9">
                            <input type="text" id="phone" name="comPhone" class="form-control" placeholder="Enter Phone" value="<?php echo $com['com_phone']; ?>" onkeypress="validate(event)" required="">
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label " for="comMobile">Mobile</label>
                        <div class="col-md-9">
                            <input type="text" id="mobile" name="comMobile" class="form-control" placeholder="Enter Mobile" value="<?php echo $com['com_mob']; ?>" required="" onkeypress="validate(event)">
                            
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="comAddress">Address</label>
                        <div class="col-md-9">
                            <textarea id="comAddress" name="comAddress" rows="9" class="form-control" placeholder="Address.." required=""   style="height: 80px"><?php echo $com['com_address'];?></textarea>
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
              <h3 class="panel-title">Add Company               
              </h3>
              <div class="page-header-actions">
        <a class="btn btn-sm btn-default btn-outline btn-round" href="viewcompany.php">
        <i class="icon wb-link" aria-hidden="true"></i>
        <span class="hidden-sm-down">ViewCompany</span>
      </a>
      
      </div>
            </header>
                 <div class="form-group">
                        <label class="col-md-3 control-label " for="comState">State</label>
                        <div class="col-md-9 txtOnly">
                            <input type="text" id="comState" name="comState" class="form-control" placeholder="Enter State" value="<?php echo $com['com_state']; ?>" required="">
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="comPostcode">Post Code</label>
                        <div class="col-md-9 ">
                            <input type="text" id="comPostcode" name="comPostcode" class="form-control" placeholder="Enter Post code" value="<?php echo $com['com_postcode']; ?>" onkeypress="return postfun();" required="">
                            <p id="showmsg"></p>

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="comCountry">Country</label>
                        <div class="col-md-9 txtOnly">
                            <input type="text" id="comCountry" name="comCountry" class="form-control" placeholder="Enter Country" value="<?php echo $com['com_country']; ?>" required="">
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="comABN">ABN</label>
                        <div class="col-md-9">
                            <input type="text" id="comABN" name="comABN" class="form-control" placeholder="Enter ABN" value="<?php echo $com['com_abn']; ?>" onkeypress="validate(event)" required="">
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="comACN">ACN</label>
                        <div class="col-md-9">
                            <input type="text" id="comACN" name="comACN" class="form-control" placeholder="Enter ACN" value="<?php echo $com['com_acn']; ?>" onkeypress="validate(event)" required="">
                            
                        </div>
                    </div>
                      <div class="form-group form-actions">
                        <div class="col-md-9 col-md-offset-3">
                          <br>
                          
                            <button type="submit" name="submit" class="btn btn-sm btn-primary" id="comsubmit"><i class="fa fa-angle-right"></i> Submit</button>
                            <input type="hidden" name="taction" value="<?php if($_REQUEST['flag'] =='Edit') echo $_REQUEST['flag']; else echo 'Add'; ?>">
                            <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button>
                        </div>
                    </div>
                    <br>
            </div>
</div>
        </div>
       
        

    </div>
     </form>
  </div>
</div>




<?php include '../inc/page_footer.php';  ?>