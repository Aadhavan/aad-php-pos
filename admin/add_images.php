 <?php 

include '../inc/dbconnect.php';
include '../inc/page_head.php';
 include '../inc/page_navi.php';
include '../inc/page_sidebar.php';   
include '../inc/function.php';



$data=new pacific;

if(isset($_POST['submit'])){
/*echo "<script> alert('".$_POST['submit']."')</script>";*/

/*
*/
$curdate=date('Y-m-d');

/*$name=$_POST['promoname'];*/
$brandid=$_POST['brd_Name'];
$brandmod_id=$_POST['cat_name'];
$item_id=$_POST['modname'];

$type=0;
if($brandmod_id=="")
{
$type=1;
}
else
{
	$type=2;
}




/*$amount=$_POST['amt'];*/

  $target = "../global/images/";  
  $fileName1 = $_FILES['imgfile']['name'];

/*echo "<script> alert('".$brandid."')</script>";

echo "<script> alert('".$fileName1."')</script>";*/

  if($fileName1!='')
    {

      $fileTarget1   = $target.$fileName1;
      $tempFileName1 = $_FILES["imgfile"]["tmp_name"];
      move_uploaded_file($tempFileName1,$fileTarget1);

      $upd_img = array(
        "bimg" =>     mysqli_real_escape_string($data->con, $fileName1)
      );



if($type==1)
{


  $update_id = array(
      "intId"      =>    mysqli_real_escape_string($data->con, $brandid)
    );

      $update = $data->update('brand', $upd_img,$update_id);


}
else
{
	  $update_id = array(
      "bmodel_id"      =>    mysqli_real_escape_string($data->con, $brandid)
    );

      $update = $data->update('brandmodel', $upd_img,$update_id);
	
}


    }




}





?>



<div class="page">
  <div class="page-header">
    <h1 class="page-title">Images</h1>


  </div>

  <div class="page-content container-fluid">
   
    <div class="row">
 

       <div class="col-lg-6">
  <div class="panel">
     <div class="panel-body">
            <!-- Basic Form Elements Block -->
            <header class="panel-heading">
              <h3 class="panel-title">Add/Replace Images
            
              </h3>
            </header>
             <form action="" method="post" name="companyform" id="companyname" enctype="multipart/form-data" class="form-horizontal form-bordered">
                <!-- END Form Elements Title -->

                <!-- Basic Form Elements Content -->
               
                   
       <!--              <div class="form-group">
                        <label class="col-md-3 control-label" for="comName-text-input">Promotion Name</label>
                        <div class="col-md-9 txtOnly">
                            <input type="text" id="promoname" name="promoname" class="form-control" placeholder="Enter Text" value="" required="">
                       <span class="help-block">This is a help text</span> 
                        </div>
                    </div> -->

                 <div class="form-group">
                        <label class="col-md-3 control-label" for="brdName-select">For Categories</label>
                        <div class="col-md-9">
             <select class="form-control" id="brd_Name" name="brd_Name" onchange="brandmod(this.value)">
                                         <option value="">---Select Category Name---</option>
 <?php
$brand=mysqli_query($conn,'SELECT * FROM brand;');

while($brd=mysqli_fetch_array($brand))
{

                                         ?>
                                           
                                            <option value="<?php echo $brd['intId']; ?>" ><?php echo $brd['varBrandName']; ?></option>

<?php
}
?>

                                 
                          </select> 
            




                        </div>
                    </div>
                <div class="form-group">
                        <label class="col-md-3 control-label" for="brdName-select">For Category Models</label>
                        <div class="col-md-9">
                                           <select class="form-control" id="cat_name" name="cat_name" onclick="getmodel(this.value);">
                                            <option value="">---Select Category Model---</option>


 

                          </select> 
                    </div>
                    </div>

         

    <div class="form-group">
                        <label class="col-md-3 control-label" for="brdName-select">Image</label>
                        <div class="col-md-9">
                                        <input type="file" name="imgfile" id="imgfile">
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
                     </form>
                <!-- END Basic Form Elements Content -->
            
            <!-- END Basic Form Elements Block -->
        </div>

          
       
        

    </div>
    </div>
  </div>
  </div>
</div>




<?php include '../inc/page_footer.php';  ?>
<script>
  
function brandmod(val)
{
/*  alert(val);*/
var act="fet_brand";

$.ajax({
  type: "POST",
  url: "possale_functions.php",
  data:{id : val,action : act },
  success: function(data){


    $("#cat_name").html(data);

/*
alert(data);*/
/*qty = data;*/
/*  price=data.price*/
           }

         });

}

</script>
<!-- 
<script>
function getmodel(val)
{
var brd=  $("#brd_Name").val();

var act="fet_mod";

/*alert(brd);
alert(val);*/

$.ajax({
  type: "POST",
  url: "possale_functions.php",
  data:{id : val, brand : brd ,action : act },
  success: function(data){

/*alert(data);*/
    $("#modname").html(data);

/*
alert(data);*/
/*qty = data;*/
/*  price=data.price*/
           }

         });



}

</script> -->