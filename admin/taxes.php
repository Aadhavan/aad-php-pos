<?php 
include '../inc/dbconnect.php';
include '../inc/page_head.php';
include '../inc/page_navi.php';
include '../inc/page_sidebar.php';   

include '../inc/function.php';
?> 
<?php
$data=new pacific;


$curdate=date('Y-m-d');
if(isset($_POST['submit'])){


/*echo "<script> alert('".$_POST['taxName']."')</script>";
echo "<script> alert('".$_POST['taxpercentage']."')</script>";*/
$taxname=$_POST['taxName'];
$taxperc=$_POST['taxpercentage'];


  $update_inv_id = array(
      "tax_id"      =>    mysqli_real_escape_string($data->con, "6")
    );

      $update_inv = array(
        "tax_des"  =>     mysqli_real_escape_string($data->con,$taxperc),
        "tax_name" =>     mysqli_real_escape_string($data->con,$taxname)
      );

      $update_inventory = $data->update('tax', $update_inv,$update_inv_id);

      
/*echo "<script> alert('".$update_inventory."')</script>";*/

}


$tax_det=mysqli_query($conn,'SELECT * FROM tax WHERE tax_id = "6"; ');
$tax=mysqli_fetch_array($tax_det);



?>

<!-- Page -->
<div class="page">
  <div class="page-header">
    <h1 class="page-title">Taxes</h1>


  </div>

  <div class="page-content container-fluid">
    <form action="" method="post" name="companyform" id="companyname" enctype="multipart/form-data" class="form-horizontal form-bordered">
    <div class="row">

       <div class="col-lg-6">
  <div class="panel">
     <div class="panel-body">
            <!-- Basic Form Elements Block -->
            <header class="panel-heading">
              <h3 class="panel-title">Taxes Rate
            
              </h3>
            </header>
                <form id="brandForm" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered">
 
                
                <!-- END Form Elements Title -->

                <!-- Basic Form Elements Content -->
               
                   
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="taxName-text-input">Tax Name</label>
                        <div class="col-md-9">
                            <input type="text" id="taxName" name="taxName" class="form-control" placeholder="Enter tax Name" value="<?php echo $tax['tax_name']; ?>" required="">
                           <!--  <span class="help-block">This is a help text</span> -->
                        </div>
                    </div>
                     
                    
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="taxName-text-input">Tax Percentage</label>
                        <div class="col-md-9">
                            <input type="text" id="taxpercentage" name="taxpercentage" class="form-control" placeholder="Enter tax Presentage" value="<?php echo $tax['tax_des']; ?>" required="">
                           <!--  <span class="help-block">This is a help text</span>$taxtype -->
                        </div>
                    </div>
<!--                     <div class="form-group">
                    <label class="col-md-3 control-label" for="purcompany-select">Tax Type</label>
                    <div class="col-md-9">
                        <label class="radio-inline" for="product-condition-new">
                                <input id="sales" name="taxtype" value="sale" type="radio"> To Sales
                            </label>
                            <label class="radio-inline" for="product-condition-used">
                                <input id="purchase" name="taxtype" value="purchase" type="radio"> To Purchase
                            </label> 
                    </div> 
                </div> -->
                   
 
                 
                      <div class="form-group form-actions">
                        <div class="col-md-9 col-md-offset-3">
                                                             <button type="submit" name="submit" class="btn btn-sm btn-primary" id="submitbrand"><i class="fa fa-angle-right"></i>  Update</button>
                                                           
                           
                            <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button>
                        </div>
                        <br>
                    </div>
                  </form> 
                    </div>
                    </div>
               
                <!-- END Basic Form Elements Content -->
            
            <!-- END Basic Form Elements Block -->
        </div>
        <!--  <div class="col-lg-6">
             <div class="panel">
          <header class="panel-heading">
            <h3 class="panel-title">View Taxs</h3>
          </header>
          <div class="panel-body">
            <div class="row">
              <div class="col-md-6">
                <div class="mb-15">
                  <button id="addToTable" class="btn btn-outline btn-primary" type="button">
                    <i class="icon wb-plus" aria-hidden="true"></i> Add row
                  </button>
                </div>
              </div>
            </div>
            <table class="table table-bordered table-hover table-striped" cellspacing="0" id="exampleAddRow">
              <thead>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr class="gradeA">
                  <td>Trident</td>
                  <td>Internet Explorer 5.5</td>
                  <td>Win 95+</td>
                  <td class="actions">
                    <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing save-row"
                      data-toggle="tooltip" data-original-title="Save" hidden><i class="icon wb-wrench" aria-hidden="true"></i></a>
                    <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing cancel-row"
                      data-toggle="tooltip" data-original-title="Delete" hidden><i class="icon wb-close" aria-hidden="true"></i></a>
                    <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                      data-toggle="tooltip" data-original-title="Edit"><i class="icon wb-edit" aria-hidden="true"></i></a>
                    <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
                      data-toggle="tooltip" data-original-title="Remove"><i class="icon wb-trash" aria-hidden="true"></i></a>
                  </td>
                </tr>
                <tr class="gradeA">
                  <td>Trident</td>
                  <td>Internet Explorer 6</td>
                  <td>Win 98+</td>
                  <td class="actions">
                    <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing save-row"
                      data-toggle="tooltip" data-original-title="Save" hidden><i class="icon wb-wrench" aria-hidden="true"></i></a>
                    <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing cancel-row"
                      data-toggle="tooltip" data-original-title="Delete" hidden><i class="icon wb-close" aria-hidden="true"></i></a>
                    <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                      data-toggle="tooltip" data-original-title="Edit"><i class="icon wb-edit" aria-hidden="true"></i></a>
                    <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
                      data-toggle="tooltip" data-original-title="Remove"><i class="icon wb-trash" aria-hidden="true"></i></a>
                  </td>
                </tr>
                <tr class="gradeA">
                  <td>Trident</td>
                  <td>AOL browser (AOL desktop)</td>
                  <td>Win XP</td>
                  <td class="actions">
                    <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing save-row"
                      data-toggle="tooltip" data-original-title="Save" hidden><i class="icon wb-wrench" aria-hidden="true"></i></a>
                    <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing cancel-row"
                      data-toggle="tooltip" data-original-title="Delete" hidden><i class="icon wb-close" aria-hidden="true"></i></a>
                    <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                      data-toggle="tooltip" data-original-title="Edit"><i class="icon wb-edit" aria-hidden="true"></i></a>
                    <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
                      data-toggle="tooltip" data-original-title="Remove"><i class="icon wb-trash" aria-hidden="true"></i></a>
                  </td>
                </tr>
                <tr class="gradeA">
                  <td>Gecko</td>
                  <td>Firefox 1.0</td>
                  <td>Win 98+ / OSX.2+</td>
                  <td class="actions">
                    <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing save-row"
                      data-toggle="tooltip" data-original-title="Save" hidden><i class="icon wb-wrench" aria-hidden="true"></i></a>
                    <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing cancel-row"
                      data-toggle="tooltip" data-original-title="Delete" hidden><i class="icon wb-close" aria-hidden="true"></i></a>
                    <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                      data-toggle="tooltip" data-original-title="Edit"><i class="icon wb-edit" aria-hidden="true"></i></a>
                    <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
                      data-toggle="tooltip" data-original-title="Remove"><i class="icon wb-trash" aria-hidden="true"></i></a>
                  </td>
                </tr>
                <tr class="gradeA">
                  <td>Trident</td>
                  <td>Camino 1.0</td>
                  <td>OSX.2+</td>
                  <td class="actions">
                    <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing save-row"
                      data-toggle="tooltip" data-original-title="Save" hidden><i class="icon wb-wrench" aria-hidden="true"></i></a>
                    <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing cancel-row"
                      data-toggle="tooltip" data-original-title="Delete" hidden><i class="icon wb-close" aria-hidden="true"></i></a>
                    <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                      data-toggle="tooltip" data-original-title="Edit"><i class="icon wb-edit" aria-hidden="true"></i></a>
                    <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
                      data-toggle="tooltip" data-original-title="Remove"><i class="icon wb-trash" aria-hidden="true"></i></a>
                  </td>
                </tr>
                
              
              </tbody>
            </table>
          </div>
        </div>
  

        </div >-->
       
        

    </div>
     </form>
  </div>
</div> 
<?php include '../inc/page_footer.php';  ?>