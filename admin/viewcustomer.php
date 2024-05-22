<?php 
include '../inc/dbconnect.php';
include '../inc/page_head.php';
include '../inc/page_navi.php';
include '../inc/page_sidebar.php';   
include '../inc/function.php';

?> 
<?php
$data = new pacific; 

if($_REQUEST['flag'] == "Delete"){

$id=$_REQUEST['id'];

     $update_id = array(
      "cus_id"      =>    mysqli_real_escape_string($data->con, $id)
    );

    $insid = $data->delete_where('customer', $update_id);

 echo '<script> alert("Customer Deleted Successfully");window.location.assign("viewcustomer.php");</script>';


}

?>

<!-- Page -->
<div class="page">
  <div class="page-header">
    <h1 class="page-title">Customer</h1>


  </div>

  <div class="page-content container-fluid">
   
    <div class="row">


  
   <div class="panel col-md-12">
          <header class="panel-heading">
            <h3 class="panel-title">Customer Details</h3>
          </header>
          <div class="panel-body">
            <table class="table table-hover dataTable table-striped w-full" id="exampleTableTools">
              <thead>
                <tr>
                <th>S.No</th>
           <th>Name</th>

                   <th>Phone</th>
                 <th>Mobile</th>
                  <th>Email</th>
                  
                  <th>State</th>
                  <th>Postal Code</th>
                  <th>Country</th>
                  <th>Lisence Number</th>
                <th>Actions</th> 
                </tr>
              </thead>
              <tfoot>
                <tr>
                <th>S.No</th>
                  <th>Name</th>

                   <th>Phone</th>
                 <th>Mobile</th>
                  <th>Email</th>
     
                  <th>State</th>
                  <th>Postal Code</th>
                  <th>Country</th>
                  <th>Lisence Number</th>
               
                <th>Actions</th>
                </tr>
              </tfoot>
              <tbody>

<?php
$i=0;
 $company = mysqli_query($conn,"SELECT * from customer "); 

while($com = mysqli_fetch_array($company))
{

$i++;
?>

                <tr>
                   <td><?php echo $i; ?></td>
                  <td><?php echo $com['cus_contact_name']; ?></td>
                    <td><?php echo $com['cus_phone']; ?></td>
                <td><?php echo $com['cus_mobileno']; ?></td>
                  <td><?php echo $com['cus_email']; ?></td>
   
                  <td><?php echo $com['cus_state']; ?></td>
                  <td><?php echo $com['cus_postcode']; ?></td>
                  <td><?php echo $com['cus_country']; ?></td>
                  <td><?php echo $com['cus_license_no']; ?></td>
                  

               <td class="actions">
    
                    <a href="addcustomer.php?id=<?php echo $com['cus_id'];?>&flag=Edit" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                      data-toggle="tooltip" data-original-title="Edit"><i class="icon wb-edit" aria-hidden="true"></i></a>
                    <a href="viewcustomer.php?id=<?php echo $com['cus_id'];?>&flag=Delete" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
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
<?php include '../inc/page_footer.php';  ?>