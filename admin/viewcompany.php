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
      "com_id"      =>    mysqli_real_escape_string($data->con, $id)
    );

    $insid = $data->delete_where('company', $update_id);


 echo '<script> alert("Company Deleted Successfully");window.location.assign("viewcompany.php");</script>';


}

?>


<!-- Page -->
<div class="page">
  <div class="page-header">
    <h1 class="page-title">Company</h1>


  </div>

  <div class="page-content container-fluid">
   
    <div class="row">


  
   <div class="panel">
          <header class="panel-heading">
            <h3 class="panel-title">Company Details</h3>
          </header>
          <div class="panel-body">
            <table class="table table-hover dataTable table-striped w-full" id="exampleTableTools">
              <thead>
                <tr>
                <th>S.No</th>
                  <th>Name</th>
                  <th>Contact Name</th>
                   <th>Phone</th>
                 <th>Mobile</th>
                  <th>Email</th>
                 
                  <th>Postal Code</th>
                  <th>Country</th>
                  <th>ABN</th>
                  <th>ACN</th>
                <th>Actions</th> 
                </tr>
              </thead>
              <tfoot>
                <tr>
                <th>S.No</th>
                  <th>Name</th>
                  <th>Contact Name</th>
                   <th>Phone</th>
                 <th>Mobile</th>
                  <th>Email</th>
                 
                  <th>Postal Code</th>
                  <th>Country</th>
                  <th>ABN</th>
                  <th>ACN</th>
                <th>Actions</th>
                </tr>
              </tfoot>
              <tbody>

<?php
$i=0;
 $company = mysqli_query($conn,"SELECT * from company "); 

while($com = mysqli_fetch_array($company))
{

$i++;
?>

                <tr>
                   <td><?php echo $i; ?></td>
                  <td><?php echo $com['com_name']; ?></td>
                  <td><?php echo $com['com_contact_name']; ?></td>
                    <td><?php echo $com['com_phone']; ?></td>
                <td><?php echo $com['com_mob']; ?></td>
                  <td><?php echo $com['com_email']; ?></td>

                  <td><?php echo $com['com_postcode']; ?></td>
                  <td><?php echo $com['com_country']; ?></td>
                  <td><?php echo $com['com_abn']; ?></td>
                  <td><?php echo $com['com_acn']; ?></td>

               <td class="actions">
    
                    <a href="addcompany.php?id=<?php echo $com['com_id'];?>&flag=Edit" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                      data-toggle="tooltip" data-original-title="Edit"><i class="icon wb-edit" aria-hidden="true"></i></a>
                    <a href="viewcompany.php?id=<?php echo $com['com_id'];?>&flag=Delete" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
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