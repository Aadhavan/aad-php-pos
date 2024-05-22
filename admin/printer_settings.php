<?php 
include '../inc/dbconnect.php';
include '../inc/page_head.php';
include '../inc/page_navi.php';
include '../inc/page_sidebar.php';   
include '../inc/function.php';  

?>
<?php


$data = new pacific;  

$uname=$_SESSION['name'];

if(isset($_POST['submit'])){


 if($_REQUEST['action'] == "Add"){


$ip=$_POST['ip'];
$port=$_POST['port'];




$insert_company = array(
      "user_name"            =>     mysqli_real_escape_string($data->con, $uname),  
      "ip"                   =>     mysqli_real_escape_string($data->con, $ip), 
      "port"                 =>     mysqli_real_escape_string($data->con, $port)
      
      );  
       $insid = $data->insert('printer_sett', $insert_company);




 }
elseif($_REQUEST['action'] == "Update")
{


$ip=$_POST['ip'];
$port=$_POST['port'];


$insert_company = array(
      "ip"            =>     mysqli_real_escape_string($data->con, $ip),  
      "port"          =>     mysqli_real_escape_string($data->con, $port)
      
      );  


    $id = $_REQUEST['id'];


    $update_id = array(
      "user_name"      =>    mysqli_real_escape_string($data->con, $uname)
    );

    $insid = $data->update('printer_sett', $insert_company, $update_id);







}
}

$brands=mysqli_query($conn,'SELECT * FROM printer_sett WHERE user_name ="'.$uname.'"');

if(mysqli_num_rows($brands)!=0)
{
    $brd=mysqli_fetch_array($brands);
$type="goos";

}







?>



<div class="page">
  <div class="page-header">
    <h1 class="page-title">Printer</h1>


  </div>

  <div class="page-content container-fluid">
    <form action="" method="post" name="companyform" id="companyname" enctype="multipart/form-data" class="form-horizontal form-bordered">
    <div class="row">
<div class="col-lg-6">
  <div class="panel">
     <div class="panel-body">
            <!-- Basic Form Elements Block -->
            <header class="panel-heading">
              <h3 class="panel-title">Printer Settings
            
              </h3>
            </header>
                <!-- END Form Elements Title -->

                <!-- Basic Form Elements Content -->
               
                   
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="comName-text-input">Printer IP</label>
                        <div class="col-md-9 txtOnly">
                            <input type="text" id="ip" name="ip" class="form-control" placeholder="Printer IP" value="<?php echo $brd['ip']  ?>" required="">
                           <!--  <span class="help-block">This is a help text</span> -->
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="col-md-3 control-label" for="comcontName-text-input">PORT</label>
                        <div class="col-md-9 nametxtOnly">
                            <input type="text" id="port" name="port" class="form-control" placeholder="PORT" value="<?php echo $brd['port']  ?>" required="">
                           <!--  <span class="help-block">This is a help text</span> -->
                        </div>
                    </div>
               
                    </div>
                    </div>
               <button type="submit" name="submit" class="btn btn-sm btn-primary" id="comsubmit"><i class="fa fa-angle-right"></i> Submit</button>
                            <input type="hidden" name="action" value="<?php if($type =='goos') echo 'Update'; else echo 'Add'; ?>">
                            <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button>
                <!-- END Basic Form Elements Content -->
            
            <!-- END Basic Form Elements Block -->
        </div>


    </div></form></div></div>

    <?php include '../inc/page_footer.php';  ?>