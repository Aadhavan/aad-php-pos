<?php 
include '../inc/dbconnect.php';
include '../inc/page_head.php';
include '../inc/page_navi.php';
include '../inc/page_sidebar.php';   
include '../inc/function.php';
?> 

<?php  
$data=new pacific;
$dat=new pacific2;
/*$ordid = $data->genorderID(7);*/
 
/*$ordid = $data->genpoid(); */
$curdate =  date('Y-m-d');
if(isset($_POST['submit']))
{
  
$order_id=mysqli_query($conn,'SELECT * FROM purchase ORDER BY intOrderId DESC LIMIT  1');

$oid=mysqli_fetch_array($order_id);

if($oid['intOrderId']=="")
{

$ord_id=5001;
}
else
{
$ord_id=$oid['intOrderId']+1;
}

/*echo "<script> alert('".$ord_id."')</script>";

die;*/

if(count($_POST['proid']) > 0)
{
    for($i=0;$i<count($_POST['proid']);$i++)
    {

      $proid  = $_POST['proid'][$i];
      $purqty = $_POST['pqty'][$i];
      $pprice = $_POST['price'][$i];

/*echo "<script> alert('".$proid."')</script>";
echo "<script> alert('".$purqty."')</script>";
echo "<script> alert('".$pprice."')</script>";*/


 /*     $pname  = $_POST['pname'][$i];*/
/*      $dis    = $_POST['discountrate'][$i];*/
        
/*echo $proid;
echo $purqty;*/
/*echo "<br>";*/
/*echo $pprice;
echo $pname;*/
/*echo $dis;*/


$purchaseitem=array(
        "intOrderId"        =>     mysqli_real_escape_string($data->con, $ord_id),
        "intItemId"         =>     mysqli_real_escape_string($data->con, $proid), 
        "itemqty"           =>     mysqli_real_escape_string($data->con, $purqty),
        "itemprice"         =>     mysqli_real_escape_string($data->con, $pprice),
        "purchasenotes"     =>     mysqli_real_escape_string($data->con, $comAddress),
        "purdate"           =>     mysqli_real_escape_string($data->con, $curdate)
       ); 
      $pinvntoryid = $data->insert('purchase', $purchaseitem);





$purchaseitem=array(
        "intOrderId"        =>     mysqli_real_escape_string($dat->conn, $ord_id),
        "intItemId"         =>     mysqli_real_escape_string($dat->conn, $proid), 
        "itemqty"           =>     mysqli_real_escape_string($dat->conn, $purqty),
        "itemprice"         =>     mysqli_real_escape_string($dat->conn, $pprice),
        "purchasenotes"     =>     mysqli_real_escape_string($dat->conn, $comAddress),
        "purdate"           =>     mysqli_real_escape_string($dat->conn, $curdate)
       ); 
      $pinvntoryid = $dat->insert('purchase_requests', $purchaseitem);




if($pinvntoryid){

        echo '<script>  window.location.assign("stockrequest.php");</script>'; 
   } 
   else{
    echo '<script> alert("Error");</script>';
   }



 

     

    }    

   



  } 
  else
    { echo "<script> alert('Please Select Item for purchase')</script>";
}
}

?>





 <!-- Page -->
    <link rel="stylesheet" href="../global/vendor/intro-js/introjs.css">
    <link rel="stylesheet" href="../global/vendor/slidepanel/slidePanel.css">
    <link rel="stylesheet" href="../global/vendor/flag-icon-css/flag-icon.css">
        <link rel="stylesheet" href="../assets/examples/css/tables/basic.css">
        <style type="text/css">
          #final input{ width: 150px }
        </style>
<!-- Page -->
<div class="page">
  <div class="page-header">
    <h1 class="page-title">Stock Request</h1>


  </div>

  <div class="page-content container-fluid">
    <form action="" method="post" name="companyform" id="companyname" enctype="multipart/form-data" class="form-horizontal form-bordered">
    <div class="row">

       <div class="col-lg-12">
  <div class="panel">
     <div class="panel-body">
            <!-- Basic Form Elements Block -->
            <header class="panel-heading">
              <h3 class="panel-title">Send Stock Request
            
              </h3>
            </header>
                <!-- END Form Elements Title -->

                <!-- Basic Form Elements Content -->
               
                <div class="form-group">
                        <label class="col-md-3 control-label" for="comName-text-input">Add Items</label>
                        <div class="col-md-10 txtOnly">
                            <input type="text" id="keyword" name="itemname" class="form-control" placeholder="Enter product name ex.App..." value="" > 

<div id="ajax_response"></div>
                          <div class="clearfix"></div>

                        </div>
                    </div>
                     <div class="form-group">
                        <div class="panel" id="exampleReport" style="width: 83%;    padding-left: 18px;">
           
            
            <div class="example-wrap" style="margin-bottom: 0px;">
              <div class="example">
                <div class="table-responsive">
                  <table class="table table-hover" data-role="content" data-plugin="selectable" data-row-selectable="true">
                    <thead class="bg-blue-grey-100">
                      <tr>
                         
                        <th>
                          Product Name  
                        </th>
                        <!-- <th>
                          Price
                        </th> -->
                        <th>
                          <i class="icon wb-shopping-cart" aria-hidden="true"></i> Stock in POS
                        </th>
                            <th>
                          <i class="icon wb-shopping-cart" aria-hidden="true"></i> Stock in Erp
                        </th>
                        <th>
                          <i class="icon wb-chat" aria-hidden="true"></i> Request Qty.
                        </th>
                        <th>
                          Action
                        </th>
                        <th></th>
                      </tr>
                    </thead>
                   <tbody id="upd-row"> 
                          
                        </tbody>
                  </table>
                </div>
              </div>
            </div>
          
        </div>
                       
                     </div>
                    
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="comAddress">Notes</label>
                        <div class="col-md-9">
                            <textarea id="comAddress" name="comAddress" rows="9" class="form-control" placeholder="Address.." required="" style="height: 80px;"></textarea>
                            <br>
                        </div>
                      </div>
                      <div class="form-group form-actions">
                        <div class="col-md-9 col-md-offset-3">
                            <button type="submit" name="submit" id="cussubmit" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Submit</button>
                            <input type="hidden" name="taction" value="Add">
                            <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button>
                        </div>
                    </div>
                    </div>
                    </div>
               
                <!-- END Basic Form Elements Content -->
            
            <!-- END Basic Form Elements Block -->
        </div> 

    </div>
     </form>
  </div>
</div>

  

<?php include '../inc/page_footer.php';  ?>


<script type="text/javascript" src="../assets/js/jquery.scannerdetection.js"></script>

<!-- 
   $("#keyword").scannerDetection({
timeBeforeScanTest: 200, // wait for the next character for upto 200ms
startChar: [120], // Prefix character for the cabled scanner (OPL6845R)
endChar: [13], // be sure the scan is complete if key 13 (enter) is detected
avgTimeByChar: 40, // it's not a barcode if a character takes longer than 40ms
onComplete: function(barcode){
  $.ajax({
           type: "POST",
           url: "getitemscan.php",
           data: "data="+barcode,
           success: function(msg){  
            
            $("#upd-row").append(msg);
        $("#keyword").val("");
         $('.remCF').click(function() { 
          
        $(this).parent().parent().remove();
          });
        }
      });
 



 
// $("#ajax_response").
  console.log(barcode); return false;} // main callback function
}); -->


  <script>



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


/*alert(keyword);*/

     if(keyword.length)
     {
       if(event.keyCode != 40 && event.keyCode != 38 && event.keyCode !=13  )
       {

         $("#loading").css("visibility","visible");
         $.ajax({
           type: "POST",
           url: "getitem.php",
           data: "data="+keyword,
           success: function(msg){  

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
       

/*
alert(proid);*/
var qty=null;
var price=null;
$.ajax({
  'async': false,
  type: "POST",
  url: "getitem.php",
  data:{id: proid },
  dataType: "json",
  success: function(data){


 qty = data.qty;
 price=data.price;
 erpqty=data.erpqty;

/*alert(data.test);*/

           }

         });

/*
alert(qty);
alert(price);*/






        var updrow ='<tr class="even pointer" id="final"><td>&nbsp;'+pname+' &nbsp;'+pcolor+' &nbsp; '+pcapcty+'<input type="hidden" name="pname[]" value="'+pname+'"><input type="hidden" name="proid[]" value="'+proid+'"> <input type="hidden" size="30" id="pdtprice'+proid+'" name="price[]" onkeyup="findtot('+proid+');" value="'+price+'" " class="form-control col-md-7"></td><td>&nbsp;'+qty+'&nbsp;</td><td>&nbsp;'+erpqty+'&nbsp;</td><td> <input type="text" id="purqty'+proid+'" name="pqty[]" onkeyup="findtot('+proid+');" size="30" value="'+pqty+'" " class="form-control col-md-5"></td><td>&nbsp; <a href="javascript:void(0);" class="remCF">Remove</a></td></tr>'; 
        


/*   var updrow ='<tr class="even pointer" id="final"><td>&nbsp;'+pname+' &nbsp;'+pcolor+' &nbsp; '+pcapcty+'<input type="hidden" name="pname[]" value="'+pname+'"><input type="hidden" name="proid[]" value="'+proid+'"></td><td> <input type="hidden" id="purprice'+proid+'" name="pprice[]" value="'+pprice+'" >&nbsp;&nbsp;&nbsp;'+pprice+' </td><td> <input type="text" id="purqty'+proid+'" name="pqty[]" onkeyup="findtot('+proid+');" value="'+pqty+'" " class="form-control col-md-2"></td><td><span>$ &nbsp;</span><span class="dis"><input type="text" name="discountrate[]" id="discountrate'+proid+'" onkeyup="findtot('+proid+');" value="0" class="form-control "></span></td><td><span id="totrest'+proid+'" class="form-control col-md-2"> </span></td><td>&nbsp; <a href="javascript:void(0);" class="remCF">Remove</a></td></tr>'; */

       $("#keyword").val(datavalues.text());
        $("#pid1").val(datavalues["0"].dataset.proid);
        $("#ajax_response").fadeOut("slow");

        $("#upd-row").append(updrow);
        $("#keyword").val("");
      
        

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

