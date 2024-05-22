<?php 
include '../inc/dbconnect.php';
include '../inc/page_head.php';
include '../inc/page_navi.php';
include '../inc/page_sidebar.php';   
include '../inc/function.php';   

$data=new pacific;
 

$ordid = $_REQUEST['intCusId'];
 ?> 
 
    
    
     
    
    <!--[if lt IE 9]>
    <script src="../../../global/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->
    
    <!--[if lt IE 10]>
    <script src="../../../global/vendor/media-match/media.match.min.js"></script>
    <script src="../../../global/vendor/respond/respond.min.js"></script>
    <![endif]-->
    
    <!-- Scripts -->
    <script src="../global/vendor/breakpoints/breakpoints.js"></script>
    <script>
      Breakpoints();
    </script>
    <style type="text/css">
      .buttons-copy{display: none;}
    </style>
  </head>
  <body class="animsition">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    

    <!-- Page -->
   <div class="page">
      <div class="page-header">
        <h1 class="page-title text-left">Invoice</h1>
         <?php 
                          $selsale = "SELECT * FROM repair  where intId ='".$ordid."'";
                    $qrysal =mysqli_query($conn,$selsale);
                    $res = mysqli_fetch_array($qrysal);
                  ?> 
        <a class="font-size-20" href="javascript:void(0)">#<?php echo $res['intCusId'];?></a>
        <br>
          <span class="font-size-20"><?php echo $res['name']; ?></span>        
      </div>

      <div class="page-content">
        <!-- Panel -->
        <div class="panel">
          <div class="panel-body container-fluid">
            <div class="row">
              <div class="col-lg-3 addrfrom">
                <h3>
                  <img class="mr-10" src="../assets/images/logo.png"
                    alt="...">  </h3>
                <?php
                $addr ='<div id="company">
      <h2 class="name">'.$comanme.'</h2>
      <div>'.$comaddr.'</div>
      <div>'.$comstate.','.$comecountry.','.$comppcode.'</div>
      <div>ABN No : '.$comeabn.'  </div>
      <div>ACN No : '.$comemacn.'  </div>
       <i class="fa fa-phone"></i> : '.$comphone.','.$commobile.'
      <div><i class="fa fa-envelope-o"></i> : '.$comemail.' </div>
    </div>';
    echo  $addr;
                ?>
              </div>
              <div class="col-lg-3 offset-lg-6 text-right addrto custdetto">
                <h4>Invoice Info</h4>
                <p>
                  <a class="font-size-20" href="javascript:void(0)">#<?php echo $res['intCusId'];?></a>
                  

              
                  <br>
                   <!-- Billing Address Content -->
                       <?php 
                           $selsale = "SELECT * FROM repair where intId ='".$ordid."'";
                    $qrysal =mysqli_query($conn,$selsale);
                    $res = mysqli_fetch_array($qrysal);
                  ?> 
               
                  <span class="font-size-20"><?php echo $res['name']; ?></span>
                </p>
                <address>
                <!--   <?php echo $res['address']; ?>, -->
                     
                                  <br>
                  <abbr title="Phone"> <i class="fa fa-phone"></i>:</abbr>&nbsp;&nbsp;<?php echo $res['contactNo']; ?>
                  <br> 
                   
                </address>
               
                
              </div>
            </div>

            <div class="page-invoice-table table-responsive" style="margin-top:25px">
              <table class="table table-hover text-right">
                <thead>
                  <tr>
                      <th class="text-center" style="width: 70px;">ID</th>
                        <th class="text-center" style="width: 60px;">Product Name</th>
                       
                         
                      <th class="text-right" style="width: 20%;">Reason</th>
                        <th class="text-right" style="width: 20%;">Repair value</th>

                    
                  </tr>
                </thead>
                <tbody>
                   <?php
                  
                    $selsale = "SELECT * FROM repair where intId ='".$ordid."'";
                    $qrysal =mysqli_query($conn,$selsale);
                    $j=1;
                    while($ressal = mysqli_fetch_array($qrysal))
                    {
                    
                   ?>
                    <tr>
                       <td class="text-center"> <?php echo $j;?> </td>
                        <td class="text-center"> <?php echo $ressal['productname'];?> </td>
                  <td class="text-right"><?php  echo $ressal['reason'];?></td> 
                 
                        <td class="text-right"><?php  echo $ressal['value'];?></td> 
                    </tr>
                    <?php  $j++;
                  } ?>
                          <?php 
                           $selsale = "SELECT * FROM repair where intId ='".$ordid."'";
                    $qrysal =mysqli_query($conn,$selsale);
                    $ressal = mysqli_fetch_array($qrysal);
                  ?>               
                        
                      <tr>
                        <td colspan="3" class="text-right text-uppercase"><strong>Total Price:</strong></td>
                        <td class="text-right"><strong><?php echo  $ressal['value'];?></strong></td>
                    </tr> 
           

                                

                    <tr>
                        <td colspan="3" class="text-right text-uppercase"><strong>Grand Total  :</strong></td>
                        <td class="text-right"><strong><?php echo  $ressal['value'];?></strong></td>
                    </tr>
                </tbody>
              </table>
            </div>
             <div class="col-lg-3 offset-lg-6 text-left addrto cusdet"  >
                <h4>Customer Info</h4>
                 
                   <!-- Billing Address Content -->
                           <?php 
                           $selsale = "SELECT * FROM repair where intId ='".$ordid."'";
                    $qrysal =mysqli_query($conn,$selsale);
                    $ressal = mysqli_fetch_array($qrysal);
                  ?>
               
                  <span class="font-size-20"><?php echo $ressal['name']; ?></span>
                </p>
                <address>
                 <!--  <?php echo $ressal['address']; ?>, -->
                
                  
                  <br>
                  <abbr title="Phone"> <i class="fa fa-phone"></i>:</abbr>&nbsp;&nbsp;<?php echo $ressal['contactNo']; ?>
                  <br> 
                                </address>
               
                
              </div>

           <!--  <div class="text-right clearfix">
              <div class="float-right">
                <p>Sub - Total amount:
                  <span>$4800</span>
                </p>
                <p>VAT:
                  <span>$35</span>
                </p>
                <p class="page-invoice-amount">Grand Total:
                  <span>$4835</span>
                </p>
              </div>
            </div> -->

            <div class="text-right">
             <!--  <button type="submit" class="btn btn-animate btn-animate-side btn-primary">
                <span><i class="icon wb-shopping-cart" aria-hidden="true"></i> Proceed
                  to payment</span>
              </button> -->
              <button type="button" class="btn btn-animate btn-animate-side btn-default btn-outline"
                onclick="replace()">
                <span><i class="icon wb-print" aria-hidden="true"></i> Print</span>
              </button>
            </div>
          </div>
        </div>
        <!-- End Panel -->
      </div>
    </div>
    <!-- End Page -->

    <!-- Core  -->
    
  </body>
</html>
<?php include '../inc/page_footer.php';  ?>
<style type="text/css">
.cusdet{ display: none; }
    @media print{ 
        .site-navbar,.site-menubar,.site-footer,.custdetto {display: none;}
        .hr{display: none;}
        .pull-left  {display: none;}
        .pull-left #year-copy  a{display: none;}
        .addrfrom{ float: left;  }
        .addrto{ float: right;  }
        .page-content {margin-top:-30px;padding: 0px}
        .page{margin-left:50px;}
        .cusdet{ display: block; }

}
@page { margin:0mm 0mm; size:auto;}
</style>
<script>
  function replace()
  {

    window.location.replace("repairprint.php?intCusId=<?php echo $ordid;?>");
  }


  </script>