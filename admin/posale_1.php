 <?php 
include '../inc/dbconnect.php';
include '../inc/page_head.php';
 include '../inc/page_navi.php';
include '../inc/page_sidebar.php';   
include '../inc/function.php';
?> 

<?php
/*echo "whattttt?????";
die;
*/

$data=new pacific;

if(isset($_POST['submit'])){
/*echo "<script> alert('".$_POST['submit']."')</script>";*/

/*
echo "<script> alert('".count($_POST['proid'])."')</script>";*/
$curdate=date('Y-m-d');

$cust_id=$_POST['cust_name'];
$notes=$_POST['note_hide'];
$discount=$_POST['doc'];

$billid=$data->gensoid();




/*echo "<script> alert('".$_SESSION['sessionid']."')</script>";*/

/*echo "<script> alert('".$billid."')</script>";*/
/*echo "<script> alert('".$cust_id."')</script>";
echo "<script> alert('".$notes."')</script>";
echo "<script> alert('".$discount."')</script>";


die;*/

if(count($_POST['proid']) > 0)
{
    for($i=0;$i<count($_POST['proid']);$i++)
    {

      $proid  = $_POST['proid'][$i];
      $pdtdis = $_POST['pqty'][$i];
      $purqty = $_POST['price'][$i];
      $itmtot = $_POST['itemtot'][$i];

/*echo "<script> alert('".$itmtot."')</script>";*/

$items=mysqli_query($conn,'SELECT * FROM items WHERE intId="'.$proid.'";');

$ite=mysqli_fetch_array($items);

$upd_qty=$ite['qty']-$purqty;


$items_det=mysqli_query($conn,'SELECT * FROM itemdetails WHERE itmpurorderId ="" AND itmId="'.$ite['pdt_id'].'"LIMIT 1 ;');

$ite_det=mysqli_fetch_array($items_det);

/*$val='SELECT * FROM itemdetails WHERE itmpurorderId ="" AND itmId="'.$ite['pdt_id'].'"LIMIT 1 ;';*/
/*echo "<script> alert('".$ite_det['itmimei']."')</script>";
die;*/


$tot_pdt_dis=$pdtdis*$purqty;

/*echo "<script> alert('".$tot_pdt_dis."')</script>";
die;*/

 $salesitem=array(
                "intOrderId"     =>     $billid,    
                "intCusId"       =>     mysqli_real_escape_string($data->con, $cust_id),
                /*"intCompId"      =>     mysqli_real_escape_string($data->con, $_POST['purcompany']),*/
                "taxid"          =>     mysqli_real_escape_string($data->con, 0),
                "discount"       =>     mysqli_real_escape_string($data->con, $tot_pdt_dis),
           /*     "payterms"       =>     mysqli_real_escape_string($data->con, $_POST['payterms']),*/
                "intItemId"      =>     mysqli_real_escape_string($data->con, $proid),
                "itemqty"        =>     mysqli_real_escape_string($data->con, $purqty), 
                "itemprice"      =>     mysqli_real_escape_string($data->con, $ite['price']),
                "itemname"       =>     mysqli_real_escape_string($data->con, $ite['itemname']),
                "itemimei"       =>     mysqli_real_escape_string($data->con, $ite_det['itmimei']), 
                "salesnotes"     =>     mysqli_real_escape_string($data->con, $notes),
                "total_discount" =>     mysqli_real_escape_string($data->con, $discount),
                "item_total"     =>     mysqli_real_escape_string($data->con, $itmtot),         
                "saledate"       =>     $curdate
           );  
         $insid = $data->insert('sales', $salesitem);         



  $update_inv_id = array(
      "intId"      =>    mysqli_real_escape_string($data->con, $proid)
    );

      $update_inv = array(
        "qty" =>     mysqli_real_escape_string($data->con,$upd_qty)
      );

      $update_inventory = $data->update('items', $update_inv,$update_inv_id);



  $update_imei_id = array(
      "intId"      =>    mysqli_real_escape_string($data->con, $ite_det['intId'])
    );

      $update_imei = array(
        "itmpurorderId" =>     mysqli_real_escape_string($data->con,"Sold")
      );

      $updateimei = $data->update('items', $update_imei,$update_imei_id);






/*echo "<script> alert('".$proid."')</script>";
echo "<script> alert('".$purqty."')</script>";
echo "<script> alert('".$pprice."')</script>";
echo "<script> alert('".$itmtot."')</script>";
*/





    }
  }



}







?>





 <link rel="stylesheet" href="../global/vendor/select2/select2.css"> 
        <link rel="stylesheet" href="../global/vendor/bootstrap-select/bootstrap-select.css"> 
        <link rel="stylesheet" href="../assets/examples/css/forms/advanced.css">
        <link rel="stylesheet" href="../assets/examples/css/uikit/modals.css">

        <link rel="stylesheet" href="../global/css/bootstrap.min.css">
    <link rel="stylesheet" href="../global/css/bootstrap-extend.min.css">
    <link rel="stylesheet" href="../assets/css/site.min.css">

    <link rel="stylesheet" href="../global/vendor/intro-js/introjs.css">
    <link rel="stylesheet" href="../global/vendor/slidepanel/slidePanel.css">
    <link rel="stylesheet" href="../global/vendor/flag-icon-css/flag-icon.css">
        <link rel="stylesheet" href="../global/vendor/webui-popover/webui-popover.css">
        <link rel="stylesheet" href="../global/vendor/toolbar/toolbar.css">

        <link rel="apple-touch-icon" href="../assets/images/apple-touch-icon.png">
    <link rel="shortcut icon" href="../assets/images/favicon.ico">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="../global/css/bootstrap.min.css">
    <link rel="stylesheet" href="../global/css/bootstrap-extend.min.css">
    <link rel="stylesheet" href="../assets/css/site.min.css">
    
    <!-- Plugins -->
    <link rel="stylesheet" href="../global/vendor/animsition/animsition.css">
    <link rel="stylesheet" href="../global/vendor/asscrollable/asScrollable.css">
    <link rel="stylesheet" href="../global/vendor/switchery/switchery.css">
    <link rel="stylesheet" href="../global/vendor/intro-js/introjs.css">
    <link rel="stylesheet" href="../global/vendor/slidepanel/slidePanel.css">
    <link rel="stylesheet" href="../global/vendor/flag-icon-css/flag-icon.css">
        <link rel="stylesheet" href="../global/vendor/magnific-popup/magnific-popup.css">
        <link rel="stylesheet" href="../assets/examples/css/advanced/lightbox.css">
    
    
    <!-- Fonts -->
    

 <style type="text/css">
   .modal.show .modal-dialog{ background: #fff; }
 </style>





















<div class="page">
  <div class="page-header">
    <h1 class="page-title">Supplier</h1>


  </div>

  <div class="page-content container-fluid">
    <form method="POST" action="" name="companyform" id="companyname" enctype="multipart/form-data" class="form-horizontal form-bordered">
    <div class="row">

       <div class="col-lg-6">
  <div class="panel">
     <div class="panel-body panel-collapse"> 
                <!-- Example Tabs -->
               
            <!-- <div class="btn-group" role="group">
            <a class="btn" href="javascript:void(0)" role="button"><i class="icon wb-search" aria-hidden="true"></i></a>
              <a class="btn" href="javascript:void(0)" role="button"><i class="icon fa-barcode" aria-hidden="true"></i></i></a> 
              
            </div> -->
            <div class="input-search input-search-dark" style="margin:0 !important;max-width: 100%;border-radius: 0px !important;">
              <i class="input-search-icon wb-search" aria-hidden="true"></i>
              <i class="input-search-icon  icon fa-barcode wb-search" aria-hidden="true" style="padding-left: 30px;"></i>
              <input class="form-control" id="keyword" name="search" placeholder="Start typing product name or scaning..." type="text" style="padding-left:5.073rem" autocomplete="off">
              <button type="button" class="input-search-close icon wb-close" aria-label="Close"></button>

<div id="ajax_response"></div>
                          <div class="clearfix"></div>

            </div>
       
              <div class="example-wrap m-xl-0">
                  <div class="nav-tabs-horizontal" data-plugin="tabs">
                    <ul class="nav nav-tabs nav-tabs-line" role="tablist">
                      <li class="nav-item" role="presentation"><a class="nav-link active" data-toggle="tab" href="#exampleTabsLineOne"
                          aria-controls="exampleTabsLineOne" role="tab">Mobiles</a></li>
                      <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#exampleTabsLineTwo"
                          aria-controls="exampleTabsLineTwo" role="tab">Accessories</a></li>
                       
                    </ul>
                    <div class="tab-content pt-20">
                      <div class="tab-pane active" id="exampleTabsLineOne" role="tabpanel">
                        <div class="projects-wrap">
          <ul class="blocks blocks-100 blocks-xxl-5 blocks-lg-4 blocks-md-3 blocks-sm-2"
            data-plugin="animateList" data-child=">li">
            <li>
              <div class="panel">
                <figure class="overlay overlay-hover animation-hover">
                  <img class="caption-figure overlay-figure" src="../global/photos/placeholder.png">
                  <figcaption class="overlay-panel overlay-background overlay-fade text-center vertical-align">
                     Apple 
                  
                  </figcaption>
                </figure>
                <div class="text-truncate "> <center>Apple</center></div>
              </div>
            </li>
           <li>
              <div class="panel">
                <figure class="overlay overlay-hover animation-hover">
                  <img class="caption-figure overlay-figure" src="../global/photos/placeholder.png">
                  <figcaption class="overlay-panel overlay-background overlay-fade text-center vertical-align">
                     Apple 
                  
                  </figcaption>
                </figure>
                <div class="text-truncate "> <center>Samsung</center></div>
              </div>
            </li>
            <li>
              <div class="panel">
                <figure class="overlay overlay-hover animation-hover">
                  <img class="caption-figure overlay-figure" src="../global/photos/placeholder.png">
                  <figcaption class="overlay-panel overlay-background overlay-fade text-center vertical-align">
                     Apple 
                  
                  </figcaption>
                </figure>
                <div class="text-truncate "> <center>HTC</center></div>
              </div>
            </li>
            <li>
              <div class="panel">
                <figure class="overlay overlay-hover animation-hover">
                  <img class="caption-figure overlay-figure" src="../global/photos/placeholder.png">
                  <figcaption class="overlay-panel overlay-background overlay-fade text-center vertical-align">
                     Apple 
                  
                  </figcaption>
                </figure>
                <div class="text-truncate "> <center>Lenova</center></div>
              </div>
            </li>
            <li>
              <div class="panel">
                <figure class="overlay overlay-hover animation-hover">
                  <img class="caption-figure overlay-figure" src="../global/photos/placeholder.png">
                  <figcaption class="overlay-panel overlay-background overlay-fade text-center vertical-align">
                     Apple 
                  
                  </figcaption>
                </figure>
                <div class="text-truncate "> <center>Apple</center></div>
              </div>
            </li>
            <li>
              <div class="panel">
                <figure class="overlay overlay-hover animation-hover">
                  <img class="caption-figure overlay-figure" src="../global/photos/placeholder.png">
                  <figcaption class="overlay-panel overlay-background overlay-fade text-center vertical-align">
                     Apple 
                  
                  </figcaption>
                </figure>
                <div class="text-truncate "> <center>Apple</center></div>
              </div>
            </li>
          </ul>
        </div>
                      </div>
                      <div class="tab-pane" id="exampleTabsLineTwo" role="tabpanel">
                       <div class="projects-wrap">
          <ul class="blocks blocks-100 blocks-xxl-5 blocks-lg-4 blocks-md-3 blocks-sm-2"
            data-plugin="animateList" data-child=">li">
            <li>
              <div class="panel">
                <figure class="overlay overlay-hover animation-hover">
                  <img class="caption-figure overlay-figure" src="../global/photos/placeholder.png">
                  <figcaption class="overlay-panel overlay-background overlay-fade text-center vertical-align">
                    <div class="btn-group">
                      <div class="dropdown float-left">
                        <button type="button" class="btn btn-icon btn-pure btn-default" title="Setting"><i class="icon wb-settings" aria-hidden="true"></i></button>
                        <div class="dropdown-menu" role="menu">
                          <a class="dropdown-item" href="">Copy</a>
                          <a class="dropdown-item" href="">Rename</a>
                        </div>
                      </div>
                      <button type="button" class="btn btn-icon btn-pure btn-default" title="Delete"
                        data-tag="project-delete"><i class="icon wb-trash" aria-hidden="true"></i></button>
                    </div>
                    <button type="button" class="btn btn-outline btn-default project-button">View Project</button>
                  </figcaption>
                </figure>
                <div class="time float-right">Feb 22, 2018</div>
                <div class="text-truncate">Lorem ipsum</div>
              </div>
            </li>
            <li>
              <div class="panel">
                <figure class="overlay overlay-hover animation-hover">
                  <img class="caption-figure overlay-figure" src="../global/photos/placeholder.png">
                  <figcaption class="overlay-panel overlay-background overlay-fade text-center vertical-align">
                    <div class="btn-group">
                      <div class="dropdown float-left">
                        <button type="button" class="btn btn-icon btn-pure btn-default" title="Setting"><i class="icon wb-settings" aria-hidden="true"></i></button>
                        <div class="dropdown-menu" role="menu">
                          <a class="dropdown-item" href="">Copy</a>
                          <a class="dropdown-item" href="">Rename</a>
                        </div>
                      </div>
                      <button type="button" class="btn btn-icon btn-pure btn-default" title="Delete"
                        data-tag="project-delete"><i class="icon wb-trash" aria-hidden="true"></i></button>
                    </div>
                    <button type="button" class="btn btn-outline btn-default project-button">View Project</button>
                  </figcaption>
                </figure>
                <div class="time float-right">Mar 10, 2018</div>
                <div class="text-truncate">Voluptate pariatur</div>
              </div>
            </li>
            
            <li>
              <div class="panel">
                <figure class="overlay overlay-hover animation-hover">
                  <img class="caption-figure overlay-figure" src="../global/photos/placeholder.png">
                  <figcaption class="overlay-panel overlay-background overlay-fade text-center vertical-align">
                    <div class="btn-group">
                      <div class="dropdown float-left">
                        <button type="button" class="btn btn-icon btn-pure btn-default" title="Setting"><i class="icon wb-settings" aria-hidden="true"></i></button>
                        <div class="dropdown-menu" role="menu">
                          <a class="dropdown-item" href="">Copy</a>
                          <a class="dropdown-item" href="">Rename</a>
                        </div>
                      </div>
                      <button type="button" class="btn btn-icon btn-pure btn-default" title="Delete"
                        data-tag="project-delete"><i class="icon wb-trash" aria-hidden="true"></i></button>
                    </div>
                    <button type="button" class="btn btn-outline btn-default project-button">View Project</button>
                  </figcaption>
                </figure>
                <div class="time float-right">Oct 8, 2018</div>
                <div class="text-truncate">Dolor veniam</div>
              </div>
            </li>
            <li>
              <div class="panel">
                <figure class="overlay overlay-hover animation-hover">
                  <img class="caption-figure overlay-figure" src="../global/photos/placeholder.png">
                  <figcaption class="overlay-panel overlay-background overlay-fade text-center vertical-align">
                    <div class="btn-group">
                      <div class="dropdown float-left">
                        <button type="button" class="btn btn-icon btn-pure btn-default" title="Setting"><i class="icon wb-settings" aria-hidden="true"></i></button>
                        <div class="dropdown-menu" role="menu">
                          <a class="dropdown-item" href="">Copy</a>
                          <a class="dropdown-item" href="">Rename</a>
                        </div>
                      </div>
                      <button type="button" class="btn btn-icon btn-pure btn-default" title="Delete"
                        data-tag="project-delete"><i class="icon wb-trash" aria-hidden="true"></i></button>
                    </div>
                    <button type="button" class="btn btn-outline btn-default project-button">View Project</button>
                  </figcaption>
                </figure>
                <div class="time float-right">Oct 18, 2018</div>
                <div class="text-truncate">Minim officia</div>
              </div>
            </li>
          </ul>
        </div>
                      </div>
                      
                    </div>
                  </div>
                </div>
          

        <nav>
          <ul class="pagination pagination-no-border">
            <li class="disabled page-item">
              <a class="page-link" href="javascript:void(0)" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
              </a>
            </li>
            <li class="active page-item"><a class="page-link" href="javascript:void(0)">1 <span class="sr-only">(current)</span></a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0)">5</a></li>
            <li class="page-item">
              <a class="page-link" href="javascript:void(0)" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
              </a>
            </li>
          </ul>
        </nav>
                    </div>
                    </div>
               
                <!-- END Basic Form Elements Content -->
            
            <!-- END Basic Form Elements Block -->
        </div>
         <div class="col-lg-6">
  <div class="panel top-bar" style="height: 500px; margin-bottom: 0px">
            <!-- Basic Form Elements Block -->
            <div class="panel-body panel-collapse" style="  padding-bottom: 0px">
                <div class="example">
                    <div class="steps row steps-xs">

                      <div class="step col-md-4">
                         
                         <div class="example" style=" width:200px;margin: 0px " id="cust_tab" >
                    <select data-plugin="selectpicker" name="cust_name"  >
                    <?


$customer=mysqli_query($conn,'SELECT * FROM customer');

while($cust=mysqli_fetch_array($customer))
{
?>

                       <option value="<?php echo $cust['cus_id'] ?>"><?php echo $cust['cus_contact_name'] ?></option>
                      


<?php 
}
?>



<!--   <option >Mustard</option> -->
                    <!--   <option>Ketchup</option>
                     <option>Relish</option> -->

                    </select>
                  </div>
                   
                      </div>
                      <div class="step col-md-4 current" data-target="#exampleFormModal" data-toggle="modal">
                        <span class="step-icon icon wb-pluse" aria-hidden="true"></span>
                        <div class="step-desc">
                          <span class="step-title">Add Customer</span>
                        </div>
                      </div>
                      <div class="step col-md-4" data-target="#exampleFormModal1" data-toggle="modal">
                        <span class="step-icon icon wb-time" aria-hidden="true"></span>
                        <div class="step-desc">
                          <span class="step-title">Add Notes</span>
                        </div>
                      </div>
                      <input type="hidden" id="note_hide" name="note_hide" value="">
                    </div>
                  </div>
    
                               
           </div>


             
           <div id="dtatab" class="example" style=" ">
                <div class="table-responsive">
                  <table class="table table-hover" data-role="content" data-plugin="selectable" data-row-selectable="true" >
                    <thead class="bg-blue-grey-100">
                      <tr>                        
                        <th>
                          Items
                        </th>
                        <th>
                          Unit Price
                        </th>
                        <th>
                    <!--       Quantity -->IMEI
                        </th>
                        <th>
                          Discount
                        </th>
                        <th>
                          Total
                        </th>
                         <th>
                          Action
                        </th>                       
                      </tr>
                    </thead>
                    <tbody id="upd-row">
                  <!--     <tr>                        
                        <td> Apple Iphone x RED
                        </td>
                        <td>$1600</td>
                        <td>
                         <input type="text" class="form-control" data-plugin="asSpinner" value="0" />
                        </td>
                        <td>
                          <input type="text" class="form-control"  value="625" />
                        </td>                         
                        <td>
                          $ 2000
                        </td>
                        <td>
                          remove
                        </td>
                      </tr> -->
                       
                      
                    </tbody>

                  </table>


<script>
function testing()
{
$('#dtatab tr').each(function () {
    var price = $(this).find("td:nth-child(3)").text()
/*    var quantity = $(this).find("td:nth-child(4) input").val()
    console.log( quantity + "   " + price);
*/
    alert(price);
  /*  alert(quantity);*/
});
}
</script>
                </div>
                
              </div>
                  
            </div>
            
            <div class="row row-lg discountsys" style="margin:0 auto;">
             <div class="panel " style="width: 100%">
              <table class="table">
                 
                <tbody>
                 <tfoot class="hidden-xs hidden-sm hidden-md">
                <tr class="active">
                    <td width="200" class="text-left" >Number of Products ( <span class="items-number" id="prodnos">0</span> )</td>
                    <td width="150" class="text-right hidden-xs"></td>
                    <td width="150" class="text-right" >Sub Total</td>
                    <td width="90" class="text-right" >$ <span class="cart-value" id="subtotal">0.00 </span></td>
                </tr>
                <tr class="active">
                    <td>
                                        </td>
                    <td></td>
                    <td class="text-right cart-discount-notice-area">Discount on Cart</td>
                    <td class="text-right cart-discount-remove-wrapper">$<span class="cart-discount pull-right" id="disconcar"> 0.00 </span></td>
              
                </tr>

                                 <input type="hidden" value="" id="doc" name="doc">    
                
                <tr class="success">
                    <td class="text-right"></td>
                    <td class="text-right"></td>
                    <td class="text-right"><strong>
                        Net Payable                        </strong></td>
                    <td class="text-right">$ <span class="cart-topay pull-right" id="netpay">0.00 </span></td>
                </tr>
            </tfoot>
                </tbody>
              </table>
              <table class="table">
                <tr><td>
                       <div class="col-lg-6">
                <!-- Example Modal Popup -->
                
                  
                  <div class="example">
                    <a class="popup-modal btn btn-primary btn-outline" href="#exampleModal">Discount</a>

                    <div class="mfp-hide lightbox-block" id="exampleModal">
                      
                      
              <div class="nav-tabs-horizontal nav-tabs-inverse" data-plugin="tabs">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item" role="presentation">
                    <a class="nav-link active" data-toggle="tab" href="#exampleTabsInverseOne" aria-controls="exampleTabsInverseOne"
                      role="tab">
                  Percentage
                </a>
                  </li>
                  <li class="nav-item" role="presentation">
                    <a class="nav-link" data-toggle="tab" href="#exampleTabsInverseTwo" aria-controls="exampleTabsInverseTwo"
                      role="tab">
                  Dollar
                </a>
                  </li>
                </ul>
                <div class="tab-content p-20">
                  <div class="tab-pane active" id="exampleTabsInverseOne" role="tabpanel">
                    <input type="text" class="form-control" id="dis_per" name="touchSpinPostfix" data-plugin="TouchSpin"
                      data-min="0" data-max="100" data-step="0.1" data-decimals="2"
                      data-boostat="5" data-maxboostedstep="10" data-postfix="%"
                      value="55" />
                      <br>
                      <button class="btn btn-primary btn-outline" data-dismiss="modal" type="button" onclick="netdiscount(1);">Add Discount</button>
                      <p style="float: right;"><a class="popup-modal-dismiss btn btn-primary btn-outline" href="javascript:void(0)">Dismiss</a></p>
                  </div>
                  <div class="tab-pane" id="exampleTabsInverseTwo" role="tabpanel">
                    <input type="text" class="form-control" id="dis_amt" name="touchSpinPrefix" data-plugin="TouchSpin"
                      data-min="-1000000000" data-max="1000000000" data-stepinterval="50"
                      data-maxboostedstep="10000000" data-prefix="$" value="0" />
                      <br>
                      <button class="btn btn-primary btn-outline" data-dismiss="modal" type="button" onclick="netdiscount(2);">Add Discount</button>
                      <p style="float: right;"><a class="popup-modal-dismiss btn btn-primary btn-outline" href="javascript:void(0)">Dismiss</a></p>
                  </div>
                </div>
              </div>
            </div>
            <button type="submit" value="submit" name="submit" class="btn btn-primary btn-outline">Generate bill
            </button>       
                    </div>

<script>
function netdiscount(val)
{
var total=$("#subtotal").text();

var tot=parseInt(total);

var net_amt=0;
  if(val==1)
  {
      var dis=$("#dis_per").val();
var pref=$("#dis_per").data("postfix");


var disc=parseInt(dis);
alert(disc);
var per=disc/100;
var diff=tot*per;
net_amt=tot-diff;
$("#netpay").text(net_amt);
$("#disconcar").text(diff);
$("#doc").val(diff);



  }
else{
  var dis2=$("#dis_amt").val();
var pref2=$("#dis_amt").data("prefix");
var amt=parseInt(dis2);
net_amt=tot-amt;
var diff=tot-net_amt;
$("#netpay").text(net_amt);
$("#disconcar").text(diff);
$("#doc").val(diff);
}

  


}


</script>
                  
                
                <!-- End Example Modal Popup -->
              </div>

                </td>
                </tr>
              </table>

              </table>
            </div>
               
             
              
            </div>
</div>
        </div>
       
        

    </div>
     </form>
  </div>
</div> 
                
                   
                   
                       <div class="modal fade" id="exampleFormModal" aria-hidden="false" aria-labelledby="exampleFormModalLabel"
                      role="dialog" tabindex="-1">
                      <div class="modal-dialog modal-simple">
                        <form class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span>
                            </button>
                            <h4 class="modal-title" id="exampleFormModalLabel">Add New Customer</h4>
                          </div>
                          <div class="modal-body">
                            <div class="row">
                              <div class="col-xl-4 form-group">
                                <input type="text" id="name" class="form-control" name="firstName" placeholder=" Name">
                              </div>

                              <div class="col-xl-4 form-group">
                                <input type="email" id="email" class="form-control" name="email" placeholder="Your Email">
                              </div>
                             <div class="col-xl-4 form-group">
                                <input type="text" id="mobile" class="form-control" name="mobile" placeholder="Mobile Number">
                              </div>
   <div class="col-xl-12 form-group">
<textarea class="form-control" rows="5" id="address" placeholder="Address"></textarea>
  </div>
  <div class="col-md-12 float-right">
<button class="btn btn-primary btn-outline" data-dismiss="modal" type="button" onclick="addcust();">Add Customer</button>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                      
<script>
function addcust()
{
  var name=$("#name").val();
  var email=$("#email").val();
  var mobile=$("#mobile").val();
  var addr=$("#address").val();

/*alert(name);
alert(email);
alert(mobile);
alert(addr);
*/

var act="AddCus";
$.ajax({
  'async': false,
  type: "POST",
  url: "possale_functions.php",
  data:{nme : name,mail : email,mob : mobile,address: addr,action:act},
/*   dataType: "json",*/
  success: function(data){

/*    alert(data.cus_name);*/

  $("#cust_tab").html(data);   
/*alert(data);*/


           }

         });



}

</script>

<script>
function normal()
{

      var act="Cusfet";
     

$.ajax({

  type: "POST",
  url: "possale_functions.php",
  data:{action:act},
  success: function(data){

/*alert(data);*/
 $("#cust_tab").html(data);

           }

         });
}

</script>



<!-- <script>
 function getdistrict() {

      var act="Cusfet";
     

$.ajax({

  type: "POST",
  url: "possale_functions.php",
  data:{action:act},
  success: function(data){

/*alert(data);*/
 $("#cust_tab").html(data);

           }

         });
    }

</script> -->



                       <div class="modal fade" id="exampleFormModal1" aria-hidden="false" aria-labelledby="exampleFormModalLabel"
                      role="dialog" tabindex="-1">
                      <div class="modal-dialog modal-simple">
                        <form class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span>
                            </button>
                            <h4 class="modal-title" id="exampleFormModalLabel">Set The Messages</h4>
                          </div>
                          <div class="modal-body">
                            <div class="row">
                              
                              <div class="col-xl-12 form-group">
                                <textarea class="form-control" name="notes" id="note" rows="5" placeholder="Type your message"></textarea>
                              </div>
                              <div class="col-md-12 float-right">
                                <button class="btn btn-primary btn-outline" data-dismiss="modal" type="button" onclick="addnotes();">Add Notes</button>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div> 
<script>
 function addnotes()
{
  var notes=$("#note").val();
  $("#note_hide").val(notes);

}


</script>
      
 
        <?php include '../inc/page_footer.php';  ?>
          <link rel="stylesheet" href="../global/vendor/asspinner/asSpinner.css">


        <script src="../global/vendor/asspinner/jquery-asSpinner.min.js"></script>
        <script src="../global/js/Plugin/asspinner.js"></script>


      <script src="../global/vendor/babel-external-helpers/babel-external-helpers.js"></script>
    <script src="../global/vendor/jquery/jquery.js"></script>  
     
        <script src="../global/vendor/select2/select2.full.min.js"></script>  
        <script src="../global/vendor/bootstrap-select/bootstrap-select.js"></script>  
    
    <!-- Scripts -->
    <script src="../global/js/Component.js"></script>
    <script src="../global/js/Plugin.js"></script>
    <script src="../global/js/Base.js"></script>
    <script src="../global/js/Config.js"></script>
      
    <!-- Page -->

    <script>Config.set('assets', '../assets');</script>
     

    <script src="../assets/js/Site.js"></script>  
        <script src="../global/js/Plugin/select2.js"></script>  
        <script src="../global/js/Plugin/bootstrap-select.js"></script> 
    
        <script src="../assets/examples/js/forms/advanced.js"></script>
  <script>
      (function(document, window, $){
        'use strict';
    
        var Site = window.Site;
        $(document).ready(function(){
          Site.run();
          
        });
      })(document, window, jQuery);
    </script>
    <style type="text/css">.no-padding{padding:0 !important;} .top-bar .example,.discountsys .example{ margin-top:0px; margin-bottom: 0px } </style>
    <script type="text/javascript"></script>
    <script src="../global/js/Plugin/asscrollable.js"></script>
    <script src="../global/js/Plugin/slidepanel.js"></script>
    <script src="../global/js/Plugin/switchery.js"></script>
    <script src="../global/js/Plugin/webui-popover.js"></script>
    <script src="../global/js/Plugin/toolbar.js"></script>  

    <script src="../global/vendor/switchery/switchery.js"></script>
    <script src="../global/vendor/intro-js/intro.js"></script>
    <script src="../global/vendor/screenfull/screenfull.js"></script>
    <script src="../global/vendor/slidepanel/jquery-slidePanel.js"></script>
    <script src="../global/vendor/webui-popover/jquery.webui-popover.js"></script>
    <script src="../global/vendor/toolbar/jquery.toolbar.js"></script>
    <script src="../global/vendor/babel-external-helpers/babel-external-helpers.js"></script>
    <script src="../global/vendor/popper-js/umd/popper.min.js"></script>
    <script src="../global/vendor/bootstrap/bootstrap.js"></script>
    <script src="../global/vendor/animsition/animsition.js"></script>
    <script src="../global/vendor/mousewheel/jquery.mousewheel.js"></script>
    <script src="../global/vendor/asscrollbar/jquery-asScrollbar.js"></script>
    <script src="../global/vendor/asscrollable/jquery-asScrollable.js"></script>
    <script src="../global/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>
    
    <!-- Plugins -->
    <script src="../global/vendor/switchery/switchery.js"></script>
    <script src="../global/vendor/intro-js/intro.js"></script>
    <script src="../global/vendor/screenfull/screenfull.js"></script>
    <script src="../global/vendor/slidepanel/jquery-slidePanel.js"></script>
    <script src="../global/vendor/webui-popover/jquery.webui-popover.min.js"></script>
    <script src="../global/vendor/bootstrap-touchspin/bootstrap-touchspin.min.js"></script>
    
    <!-- Scripts -->
    
    <script src="../assets/js/Section/Menubar.js"></script>
    <script src="../assets/js/Section/Sidebar.js"></script>
    <script src="../assets/js/Section/PageAside.js"></script>
    <script src="../assets/js/Plugin/menu.js"></script>
    
    <!-- Config -->
    <script src="../global/js/config/colors.js"></script>
    <script src="../assets/js/config/tour.js"></script>
    
    <!-- Page -->
   <script src="../assets/examples/js/uikit/tooltip-popover.js"></script>
   <script src="../global/vendor/babel-external-helpers/babel-external-helpers.js"></script>
   <script src="../global/vendor/jquery/jquery.js"></script>
   <script src="../global/vendor/popper-js/umd/popper.min.js"></script>
   <script src="../assets/examples/js/forms/advanced.js"></script>

   <script src="../global/vendor/babel-external-helpers/babel-external-helpers.js"></script>
    <script src="../global/vendor/jquery/jquery.js"></script>
    <script src="../global/vendor/popper-js/umd/popper.min.js"></script>
    <script src="../global/vendor/bootstrap/bootstrap.js"></script>
    <script src="../global/vendor/animsition/animsition.js"></script>
    <script src="../global/vendor/mousewheel/jquery.mousewheel.js"></script>
    <script src="../global/vendor/asscrollbar/jquery-asScrollbar.js"></script>
    <script src="../global/vendor/asscrollable/jquery-asScrollable.js"></script>
    <script src="../global/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>
    
    <!-- Plugins -->
    <script src="../global/vendor/switchery/switchery.js"></script>
    <script src="../global/vendor/intro-js/intro.js"></script>
    <script src="../global/vendor/screenfull/screenfull.js"></script>
    <script src="../global/vendor/slidepanel/jquery-slidePanel.js"></script>
        <script src="../global/vendor/magnific-popup/jquery.magnific-popup.js"></script>
    
    <!-- Scripts -->
    <script src="../global/js/Component.js"></script>
    <script src="../global/js/Plugin.js"></script>
    <script src="../global/js/Base.js"></script>
    <script src="../global/js/Config.js"></script>
    
    <script src="../assets/js/Section/Menubar.js"></script>
    <script src="../assets/js/Section/Sidebar.js"></script>
    <script src="../assets/js/Section/PageAside.js"></script>
    <script src="../assets/js/Plugin/menu.js"></script>
    
    <!-- Config -->
    <script src="../global/js/config/colors.js"></script>
    <script src="../assets/js/config/tour.js"></script>
    <script>Config.set('assets', '../assets');</script>
    
    <!-- Page -->
    <script src="../assets/js/Site.js"></script>
    <script src="../global/js/Plugin/asscrollable.js"></script>
    <script src="../global/js/Plugin/slidepanel.js"></script>
    <script src="../global/js/Plugin/switchery.js"></script>
        <script src="../global/js/Plugin/magnific-popup.js"></script>
    
        <script src="../assets/examples/js/advanced/lightbox.js"></script>
 <script type="text/javascript" src="../assets/js/jquery.scannerdetection.js"></script>
  <script>


    $("#keyword").scannerDetection({
timeBeforeScanTest: 200, // wait for the next character for upto 200ms
startChar: [120], // Prefix character for the cabled scanner (OPL6845R)
endChar: [13], // be sure the scan is complete if key 13 (enter) is detected
avgTimeByChar: 40, // it's not a barcode if a character takes longer than 40ms
onComplete: function(barcode){


/*  alert(barcode);*/
  $.ajax({
           type: "POST",
           url: "posget_itemscan.php",
           data: "data="+barcode,
           success: function(msg){  
           /* alert(msg);*/
            $("#upd-row").append(msg);
        $("#keyword").val("");
         $('.remCF').click(function() { 
          
        $(this).parent().parent().remove();
          });
        }
      });
 

testing();

 
// $("#ajax_response").
  console.log(barcode); return false;} // main callback function
});
   
     $("#purchasesubmit").click(function() {  

   
 $("#purchase_Form" ).submit(); 

});   
     
      $(document).ready(function(){
      $('#newneverused').click(function() {
      if($('#newneverused').is(':checked')) { $("#usedid").css("display", "none"); $("#supplierid").css("display", "block");  $("#purcompanyid").css("display", "block");  }

      });
        $('#newbrand').click(function() {
      if($('#newbrand').is(':checked')) { $("#usedid").css("display", "none"); $("#supplierid").css("display", "block");  $("#purcompanyid").css("display", "block");  }

      });
      //newneverused  
       $('#preowned').click(function() {
      if($('#preowned').is(':checked')) { $("#usedid").css("display", "block"); $("#supplierid").css("display", "none");  
      $("#purcompanyid").css("display", "none");    }

      });

       
       
    });
               
     $(document).ready(function(){
    



  $(document).click(function(){
  $("#ajax_response").fadeOut('slow');
  });

  $("#keyword").focus();
  var offset = $("#keyword").offset();
  var width = $("#keyword").width()-2;
  $("#ajax_response").css("left",offset.left); 
  $("#ajax_response").css("width",width);





  $("#keyword").keyup(function(event){  
     var keyword = $("#keyword").val();

     if(keyword.length)
     {
       if(event.keyCode != 40 && event.keyCode != 38 && event.keyCode !=13  )
       {

         $("#loading").css("visibility","visible");
         $.ajax({
           type: "POST",
           url: "posget_item.php",
           data: "data="+keyword,
           success: function(msg){  
/*alert(msg);*/
          if(msg != 0)
          {
             
          
              $("#ajax_response").fadeIn("slow").html(msg);

      

          }
          else
          {
            $("#ajax_response").fadeIn("slow"); 
            $("#ajax_response").html('<div style="text-align:;">No Matches Found</div>');
          }
          $("#loading").css("visibility","hidden");
           }
         });
       }
       else
       {
        switch (event.keyCode)
        {
         case 40:
         {
            found = 0;
            $("li").each(function(){
             if($(this).attr("class") == "selected")
              found = 1;
            });
            if(found == 1)
            {
            var sel = $("li[class='selected']");
            sel.next().addClass("selected");
            sel.removeClass("selected");
            }
            else
            $("li:first").addClass("selected");
           }
         break;
         case 38:
         {
            found = 0;
            $("li").each(function(){
             if($(this).attr("class") == "selected")
              found = 1;
            });
            if(found == 1)
            {
            var sel = $("li[class='selected']");
            sel.prev().addClass("selected");
            sel.removeClass("selected");
            }
            else
            $("li:last").addClass("selected");
         }
         break;
         case 13:
          $("#ajax_response").fadeOut("slow");
          $("#keyword").val($("li[class='selected'] a").text());
         break;
        }
       }
     }
     else
     $("#ajax_response").fadeOut("slow");
  });
  $("#ajax_response").mouseover(function(){ 
    $(this).find("li a:first-child").mouseover(function () {
         $(this).addClass("selected"); 
    });
    $(this).find("li a:first-child").mouseout(function () {
        $(this).removeClass("selected"); 
    });  
    //$(this).find("li a:first-child").click(function () {   
   
  });
  $('#ajax_response').on('touchstart', function (e) {
    $(this).find("li a:first-child").mouseover(function () {
         $(this).addClass("selected"); 
    });
    $(this).find("li a:first-child").mouseout(function () {
        $(this).removeClass("selected"); 
    });  
    //$(this).find("li a:first-child").click(function () {   

     });

  var sno=0;

  $("#ajax_response").click(function(){ 
  var datavalues = $(this).find("li a.selected");
   $(this).find("#ajax_response");
       

        //console.log($(this)); 
       // console.log($(this)["0"].childNodes);
        //alert($(this)["length"]) ;
        var j=1; 
        
       // var pname  = $(this).text(); 
        var pname  = datavalues["0"].dataset.proname;
        var proid  = datavalues["0"].dataset.proid;
        var pqty   = datavalues["0"].dataset.proqty;  
        var punit  = datavalues["0"].dataset.prounit; 
        var pprice = datavalues["0"].dataset.price; 
        var pcolor = datavalues["0"].dataset.color; 
        var pcapcty = datavalues["0"].dataset.capacity; 
        var imeino = datavalues["0"].dataset.imei;
/*alert(proid);*/
var qty=0;
var price=0;


$.ajax({
  'async': false,
  type: "POST",
      url: "posget_item.php",
        data:{id: proid },
       dataType: "json",
      success: function(data){

/*alert(data.qty);*/
 qty = data.qty;
 price=data.price
           }

         });

/*
alert(qty);
alert(price);*/


/*
<input type="text" size="30" id="pdtprice'+proid+'" name="price[]" onkeyup="findtot('+proid+');" value="'+price+'" " class="form-control col-md-2">*/

/*&nbsp;'+qty+'&nbsp;*/


sno++;

        var updrow ='<tr class="even pointer" id="final"><td><input type="hidden" id="ident'+sno+'" name="sid[]" value="'+proid+'">&nbsp;'+pname+' &nbsp;'+pcolor+' &nbsp; '+pcapcty+'<input type="hidden" name="pname[]" value="'+pname+'"><input type="hidden" name="proid[]" value="'+proid+'"></td><td>&nbsp;<div style="float: left;margin-top: 10px;" id="price'+proid+'" value="'+price+'">'+price+'</div>&nbsp; </td><td>     <input type="hidden" id="imei'+proid+'" name="imei[]" value="'+imeino+'">'+imeino+'</td><td> <input type="text" id="disc'+proid+'" name="pqty[]" class="form-control" onkeyup="findtot('+proid+');" size="30" value="" " class="form-control col-md-2">$</td><td>&nbsp;<div style="float: left;margin-top: -15px;" id="tot'+proid+'">'+price+'</div><input type="hidden" name="itemtot[]" id="itemtot'+proid+'" value="">&nbsp; </td><td>&nbsp; <a href="javascript:void(0);" class="remCF">Remove</a></td></tr>'; 

   
/*
quantity------>
<td><input type="text" class="form-control" data-plugin="asSpinner" size="50" id="purqty'+proid+'" name="price[]" onkeyup="findtot('+proid+');" value="1" " class="form-control col-md-2"></td>  */



/*   var updrow ='<tr class="even pointer" id="final"><td>&nbsp;'+pname+' &nbsp;'+pcolor+' &nbsp; '+pcapcty+'<input type="hidden" name="pname[]" value="'+pname+'"><input type="hidden" name="proid[]" value="'+proid+'"></td><td> <input type="hidden" id="purprice'+proid+'" name="pprice[]" value="'+pprice+'" >&nbsp;&nbsp;&nbsp;'+pprice+' </td><td> <input type="text" id="purqty'+proid+'" name="pqty[]" onkeyup="findtot('+proid+');" value="'+pqty+'" " class="form-control col-md-2"></td><td><span>$ &nbsp;</span><span class="dis"><input type="text" name="discountrate[]" id="discountrate'+proid+'" onkeyup="findtot('+proid+');" value="0" class="form-control "></span></td><td><span id="totrest'+proid+'" class="form-control col-md-2"> </span></td><td>&nbsp; <a href="javascript:void(0);" class="remCF">Remove</a></td></tr>'; */

       $("#keyword").val(datavalues.text());
        $("#pid1").val(datavalues["0"].dataset.proid);
        $("#ajax_response").fadeOut("slow");

        $("#upd-row").append(updrow);
        $("#keyword").val("");
      totalval(proid);
        

        /*$("#final").on('click','.remCF',function(){
        $(this).parent().parent().remove();
    });*/
        $('.remCF').click(function() { 
          
        $(this).parent().parent().remove();


          });
        
        /*$.ajax(
          {
            url: "stock.php?pname="+$(this).text()+"&pid="+$(this)["0"].dataset.proid,
            type: "POST",
            success: function (message)
            {  
              $("#final").html(message);  
            }
          });*/ 
   });
}); 
</script>

<!-- <script type="text/javascript">
  
$("#upd-row").on("remove", function () {
    alert("Element was removed");
})

</script> -->



<script>
function findtot(val)
{

/*alert(val);*/
var qty=1;
var disc=$("#disc"+val).val();
var price=$("#price"+val).text();

/*alert(price);*/

if(qty=="")
qty=0;
if(disc=='')
disc=0;


var ret=checkqty(qty,val);

var qtyr=parseInt(ret);

if(qtyr==0)
{
/*  ret=0;*/
$("#purqty"+val).val(qtyr);
}
else
{
  $("#purqty"+val).val(qtyr);
}



var discr=parseInt(disc);
var pricer=parseInt(price);

var dis=pricer-discr;
var tot=qtyr*dis;

$("#itemtot"+val).val(tot);
$("#tot"+val).html(tot);

totalval(val);

}
</script>


<script>
function checkqty(qty,val)
{
/*alert("run");*/
  var qty;
/*var price=null;*/

var act="Check";
$.ajax({
  'async': false,
  type: "POST",
  url: "possale_functions.php",
  data:{id : val,quty : qty,action : act },
  success: function(data){
/*
alert(data);*/
qty = data;
/*  price=data.price*/
           }

         });
/*alert(qty);*/
return qty;
}
</script>







<script>

function totalval(ids)
{
/*
 $(':checkbox:checked:not("#checkAll")').each(function(i){


          val = $(this).val();
});*/

    /*   $('td',this).each(function(){
            alert($(this).text());

        });
*/
/*  var myArray = $('input[name="sid[]"]').map(function(){
       return this.val;
    }).get();*/



/*alert(ids);*/

  var len =$('input[name="sid[]"]').length;
/*alert(len);*/

var netpdt=0;
var netamt=0;
/*for(var i=1;i<=len;i++)
{*/
  var qtyr=0;
  var tot=0;

/*var ids=$("#ident"+i).val();*/

/*alert(ids);*/
var total=$("#tot"+ids).text();
var qty=1;
 if(total=='')
total=0;
 if(qty=='')
qty=0;

qtyr=parseInt(qty);
tot=parseInt(total);

netpdt+=qtyr;
netamt+=tot;
/*}*/

$("#subtotal").text(netamt);

var disamt=$("#disconcar").text();
var ndisc=parseInt(disamt);
/*alert(ndisc);*/
var net_amt=netamt-ndisc;
/*alert(netpdt);
alert(netamt);*/

$("#prodnos").text(netpdt);

$("#netpay").text(net_amt);

/*var net=$("#prodnos").text();
var npdt=$("#subtotal").text();

var netr=parseInt(net);
var npdtr=parseInt(npdt);*/

/*alert(netr);
alert(npdtr);*/

/*$("#prodnos").text(netr+qty);
$("#subtotal").text(netr+npdt);*/

/*alert(net);
alert(npdt);
alert(total);
alert(qty);*/


}

</script>

    <script>
function getid()
{
  alert("dioi");
}

    </script>          



<style type="text/css">
  #loading{
    visibility:hidden;
    padding-left:5px;
}
#ajax_response{
    border : 1px solid #8789E7;
    background : #FFFFFF;
    position:absolute;
    display:none;
    padding:2px 2px;
    top:auto;
    z-index: 99999 !important;
    left: 15px !important;
}
#holder{
    width : 350px;
}
.list {
    padding:0px 0px;
    margin:0px;
    list-style : none;
}
.list li a{
    text-align : left;
    padding:2px;
    cursor:pointer;
    display:block;
    text-decoration : none;
    color:#000000;
}
.selected{
    background : #CCCFF2;
}
.bold{
    font-weight:bold;
    color: #131E9F;
}
.about{
    text-align:right;
    font-size:10px;
    margin : 10px 4px;
}
.about a{
    color:#BCBCBC;
    text-decoration : none;
}
.about a:hover{
    color:#575757;
    cursor : default;
}
span.dis{width: 90%;
display: inline-block;}
</style>

<script>$(function(){ FormsGeneral.init(); });</script>