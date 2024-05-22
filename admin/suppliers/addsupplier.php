<?php 
include '../../inc/dbconnect.php';
include '../../inc/page_head.php';
include '../../inc/page_navi.php';
include '../../inc/page_sidebar.php';   

?> 
<!-- Page -->
<div class="page">
  <div class="page-header">
    <h1 class="page-title">Supplier</h1>


  </div>

  <div class="page-content container-fluid">
    <form action="" method="post" name="companyform" id="companyname" enctype="multipart/form-data" class="form-horizontal form-bordered">
    <div class="row">

       <div class="col-lg-6">
  <div class="panel">
     <div class="panel-body">
            <!-- Basic Form Elements Block -->
            <header class="panel-heading">
              <h3 class="panel-title">Add Supplier
            
              </h3>
            </header>
                <!-- END Form Elements Title -->

                <!-- Basic Form Elements Content -->
               
                <div class="form-group">
                        <label class="col-md-3 control-label" for="comName-text-input">Supplier Name</label>
                        <div class="col-md-9 txtOnly">
                            <input type="text" id="comName" name="comName" class="form-control" placeholder="Enter Text" value="" required="">
                           <!--  <span class="help-block">This is a help text</span> -->
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="col-md-3 control-label" for="comcontName-text-input">Contact  Name</label>
                        <div class="col-md-9 nametxtOnly">
                            <input type="text" id="comContactName" name="comContactName" class="form-control" placeholder="Contact Name" value="" required="">
                           <!--  <span class="help-block">This is a help text</span> -->
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="comEmail">Email Input</label>
                        <div class="col-md-9">
                            <input type="email" id="email_address" name="comEmail" class="form-control" placeholder="Enter Email" value="" required="">
                            
                            <span id="error" style="display:none;color:red;">Wrong email</span>
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label " for="comPhone">Phone</label>
                        <div class="col-md-9">
                            <input type="text" id="phone" name="comPhone" class="form-control" placeholder="Enter Phone" value="" onkeypress="validate(event)" required="">
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label " for="comMobile">Mobile</label>
                        <div class="col-md-9">
                            <input type="text" id="mobile" name="comMobile" class="form-control" placeholder="Enter Mobile" value="" required="" onkeypress="validate(event)">
                            
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="comAddress">Address</label>
                        <div class="col-md-9">
                            <textarea id="comAddress" name="comAddress" rows="9" class="form-control" placeholder="Address.." required="" style="height: 80px;"></textarea>
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
              <h3 class="panel-title">Add Supplier Elements               
              </h3>
              <div class="page-header-actions">
        <a class="btn btn-sm btn-default btn-outline btn-round" href="https://mkoryak.github.io/floatThead/" target="_blank">
        <i class="icon wb-link" aria-hidden="true"></i>
        <span class="hidden-sm-down">ViewSuppliers</span>
      </a>

      </div>
            </header>
                  <div class="form-group">
                        <label class="col-md-3 control-label " for="comState">State</label>
                        <div class="col-md-9 txtOnly">
                            <input type="text" id="comState" name="comState" class="form-control" placeholder="Enter State" value="" required="">
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="comPostcode">Post Code</label>
                        <div class="col-md-9 ">
                            <input type="text" id="comPostcode" name="comPostcode" class="form-control" placeholder="Enter Post code" value="" onkeypress="return postfun();" required="">
                            <p id="showmsg"></p>

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="comCountry">Country</label>
                        <div class="col-md-9 txtOnly">
                            <input type="text" id="comCountry" name="comCountry" class="form-control" placeholder="Enter Country" value="" required="">
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="comABN">ABN</label>
                        <div class="col-md-9">
                            <input type="text" id="comABN" name="comABN" class="form-control" placeholder="Enter ABN" value="" onkeypress="validate(event)" required="">
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="comACN">ACN</label>
                        <div class="col-md-9">
                            <input type="text" id="comACN" name="comACN" class="form-control" placeholder="Enter ACN" value="" onkeypress="validate(event)" required="">
                            
                        </div>
                    </div>
                      <div class="form-group form-actions">
                        <div class="col-md-9 col-md-offset-3">
                          <br>
                          
                            <button type="submit" name="submit" class="btn btn-sm btn-primary" id="comsubmit"><i class="fa fa-angle-right"></i> Submit</button>
                            <input type="hidden" name="taction" value="Add">
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




<?php include '../../inc/page_footer.php';  ?>