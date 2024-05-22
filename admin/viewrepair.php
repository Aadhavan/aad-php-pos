<?php 
include '../inc/dbconnect.php';
include '../inc/page_head.php';
include '../inc/page_navi.php';
include '../inc/page_sidebar.php';   
include '../inc/function.php';   

$data = new pacific;

if($_REQUEST['flag'] == "Delete"){


$id=$_REQUEST['id'];

     $update_id = array(
      "intId"      =>    mysqli_real_escape_string($data->con, $id)
    );

    $insid = $data->delete_where('repair', $update_id);


 echo '<script> alert("Repair Deleted Successfully");window.location.assign("viewrepair.php");</script>';


}

?>
    
    
      <!-- Page -->
    <div class="page">
      <div class="page-header">
        <h1 class="page-title">Repair View</h1>
        </div>
        <div class="page-content container-fluid">
   
    <div class="row">


  
   <div class="panel">
          <header class="panel-heading">
            <h3 class="panel-title">Repair Details</h3>
          </header>
          <div class="panel-body">
            <table class="table table-hover dataTable table-striped w-full" id="exampleTableTools">
              <thead>
                  <tr>
                    <th class="text-center" style="width: 100px;">ID</th>
                      <th class="text-center" style="width: 100px;">SORID</th>
                    <th class="text-center" style="width: 100px;">Name</th>
                 <th class=" text-center visible-lg">Contact No</th>
 <th class="text-center visible-lg">Product Name</th>
                    
                    <th class="hidden-xs text-center">Repair value</th>
                    <th class="text-center">Action</th>
                </tr>
              </thead>
              <tfoot>
                 <tr>
                    <th class="text-center" style="width: 100px;">ID</th>
                     <th class="text-center" style="width: 100px;">SORID</th>
                    <th class="text-center" style="width: 100px;">Name</th>
                    <th class=" text-center visible-lg">Contact No</th>
                     <th class="text-center visible-lg">Product Name</th>
                    
                    <th class="text-right hidden-xs">Model No</th>
                    <th class="hidden-xs text-center">Repair value</th>
                    <th class="text-center">Action</th>
                </tr>
              </tfoot>
              <tbody>
                <?php
                $i=0;
               /* $sessid=$_SESSION['MintId'];*/
               $pinqry = mysqli_query($conn,"SELECT * from repair order by intId DESC"); 
                while ($res = mysqli_fetch_array($pinqry))
                {
                  $i++;
                ?>
 

                <tr>

         <td><?php echo $i; ?></td>
               <td><?php echo $res['intCusId']; ?></td>
                  <td><?php echo $res['name']; ?></td>

                  <td><a href="javascript:void(0)"><?php echo $res['contactNo']; ?></a></td>
                      <td><a href="javascript:void(0)"><?php echo $res['productname']; ?></a></td>

                  <td><?php echo $res['value']; ?></td>
                   <td class="actions">
    
                  
                       <a href="repairview.php?intCusId=<?php echo $res['intId']; ?> " data-toggle="tooltip" title="View" class="btn btn-default"><i class="fa fa-eye"></i></a>
                         <a href="repair.php?id=<?php echo $res['intId'];?>&flag=Edit" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                      data-toggle="tooltip" data-original-title="Edit"><i class="icon wb-edit" aria-hidden="true"></i></a>
                    <!-- <a href="viewrepair.php?id=<?php echo $res['intId'];?>&flag=Delete" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
                      data-toggle="tooltip" data-original-title="Remove"><i class="icon wb-trash" aria-hidden="true"></i></a> -->
                  </td>         
                </tr>
                <?php } ?>


              </tbody>
            </table>
          </div>
        </div></div></div></div>


<?php include '../inc/page_footer.php'; ?>