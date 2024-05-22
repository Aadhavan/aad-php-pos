<?php
/*session_start();*/
include '../inc/dbconnect.php';
include '../inc/session.php';

/*echo '<script>alert("'.$_SESSION['name'].'")</script>';
echo '<script>alert("'.$_SESSION['email'].'")</script>';
echo '<script>alert("'.$_SESSION['MintId'].'")</script>';
echo '<script>alert("'.$_SESSION['sessionid'].'")</script>';
echo '<script>alert("'.$_SESSION['type'].'")</script>';
*/



if($_SESSION['type']=="administrator")
{
?>

<div class="site-menubar site-menubar-light">

      <div class="site-menubar-body">
        <ul class="site-menu" data-plugin="menu">
          <li class="site-menu-item has-sub dashe">
            <a href="index.php">
                    <i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
                    <span class="site-menu-title">Dashboard</span>
                        <div class="site-menu-badge">
                            <span class="badge badge-pill badge-success">3</span>
                        </div>
                </a>
          </li>
                    <li class="site-menu-item has-sub tille">
            <a href="till.php">
                    <i class="site-menu-icon wb-book" aria-hidden="true"></i>
                    <span class="site-menu-title">Till</span>
                        
                </a>
          </li>
          <li class="site-menu-item has-sub goos">
            <a href="posale.php">
                    <i class="site-menu-icon wb-layout" aria-hidden="true"></i>
                    <span class="site-menu-title">POS</span>
                        
                </a>
          </li>

        <li class="site-menu-item has-sub goos">
            <a href="refund.php">
                    <i class="site-menu-icon wb-layout" aria-hidden="true"></i>
                    <span class="site-menu-title">Refund</span>
                        
                </a>
          </li>

          <li class="site-menu-item has-sub">
            <a href="javascript:void(0)">
                    <i class="site-menu-icon wb-file" aria-hidden="true"></i>
                    <span class="site-menu-title">Master Pages</span>
                </a>
            <ul class="site-menu-sub">
              <li class="site-menu-item has-sub">
                <a href="javascript:void(0)">
                  <span class="site-menu-title">Company</span>
                  <span class="site-menu-arrow"></span>
                </a>
                <ul class="site-menu-sub">
                  <li class="site-menu-item">
                    <a class="animsition-link" href="addcompany.php">
                      <span class="site-menu-title">Add Company</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="viewcompany.php">
                      <span class="site-menu-title">ViewCompany</span>
                    </a>
                  </li>

                </ul>
              </li>
                                <li class="site-menu-item">
                    <a class="animsition-link" href="add_images.php">
                      <span class="site-menu-title">Add Image</span>
                    </a>
                  </li>
				  
				  <li class="site-menu-item">
                    <a class="animsition-link" href="printer_settings.php">
                      <span class="site-menu-title">Add Printer</span>
                    </a>
                  </li>
				  
  <!--             <li class="site-menu-item has-sub">
                <a href="javascript:void(0)">
                  <span class="site-menu-title">Suppliers</span>
                  <span class="site-menu-arrow"></span>
                </a>
                <ul class="site-menu-sub">
                  <li class="site-menu-item">
                    <a class="animsition-link" href="addsupplier.php">
                      <span class="site-menu-title">Add Supplier</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="#">
                      <span class="site-menu-title">View Suppliers</span>
                    </a>
                  </li>
                </ul>
              </li> -->
              <li class="site-menu-item has-sub">
                <a href="javascript:void(0)">
                  <span class="site-menu-title">Customers</span>
                  <span class="site-menu-arrow"></span>
                </a>
                <ul class="site-menu-sub">
                <li class="site-menu-item">
                <a class="animsition-link" href="addcustomer.php">
                  <span class="site-menu-title">Add customer</span>

                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="viewcustomer.php">
                  <span class="site-menu-title">View Customers</span>
                </a>
              </li>
            </ul>
              </li>
              <li class="site-menu-item has-sub">
                <a href="javascript:void(0)">
                  <span class="site-menu-title">Cash Type</span>
                  <span class="site-menu-arrow"></span>
                </a>
                <ul class="site-menu-sub">
                  <li class="site-menu-item">
                    <a class="animsition-link" href="cash.php">
                      <span class="site-menu-title">Add Type</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="site-menu-item has-sub">
                <a href="javascript:void(0)">
                  <span class="site-menu-title">Taxes</span>
                  <span class="site-menu-arrow"></span>
                </a>
                <ul class="site-menu-sub">
                  <li class="site-menu-item">
                    <a class="animsition-link" href="taxes.php">
                      <span class="site-menu-title">Add Taxes</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="site-menu-item has-sub">
                <a href="javascript:void(0)">
                  <span class="site-menu-title">Payment Terms</span>
                  <span class="site-menu-arrow"></span>
                </a>
                <ul class="site-menu-sub">
                  <li class="site-menu-item">
                    <a class="animsition-link" href="payterms.php">
                      <span class="site-menu-title">Add PayTerms</span>
                    </a>
                  </li>
                </ul>
              </li>
               <li class="site-menu-item  ">
                <a href="promotion.php">
                  <span class="site-menu-title">Promotion Discount</span>
                  <span class="site-menu-arrow"></span>
                </a>
                
              </li>
            </ul>
          </li>
           <li class="site-menu-item has-sub">
            <a href="javascript:void(0)">
                    <i class="site-menu-icon wb-file" aria-hidden="true"></i>
                    <span class="site-menu-title">Inventory</span>
                </a>
            <ul class="site-menu-sub">
              <li class="site-menu-item has-sub">
                <a href="stockrequest.php">
                  <span class="site-menu-title">Stock Request</span>
                  
                </a>                
              </li>
              <li class="site-menu-item has-sub">
                <a href="stockaccept.php">
                  <span class="site-menu-title">Stock Accept</span>
                  
                </a>                
              </li>
              <li class="site-menu-item has-sub">
                <a href="stockorder.php">
                  <span class="site-menu-title">Stock Order</span>
                  
                </a>                
              </li>
              <li class="site-menu-item has-sub">
                <a href="inventoryitems.php">
                  <span class="site-menu-title">Inventory Items</span>
                  
                </a>                
              </li>
              <li class="site-menu-item has-sub">
                <a href="returnitems.php">
                  <span class="site-menu-title">Return Items</span>
                  
                </a>                
              </li>
               
              
            </ul>
          </li>
          <li class="site-menu-item has-sub">
            <a href="repair.php">
                    
                    <i class="site-menu-icon wb-hammer" aria-hidden="true"></i>
                    <span class="site-menu-title">Repair</span>
                        
                </a>
                     <ul class="site-menu-sub">
              <li class="site-menu-item has-sub">
                <a href="viewrepair.php">Repair List</span>
                  
                </a>                
              </li>
            </ul>
          </li>
          <li class="site-menu-item has-sub">
            <a href="resale.php">
                    <i class="site-menu-icon wb-bookmark" aria-hidden="true"></i>
                    <span class="site-menu-title">Resale</span>
                        
                </a>
                        <ul class="site-menu-sub">
              <li class="site-menu-item has-sub">
                <a href="resalespurchase.php">Resale List</span>
                  
                </a>                
              </li>
            </ul>
          </li>

           <li class="site-menu-item has-sub">
            <a href="salesorder.php">
                    <i class="site-menu-icon wb-bookmark" aria-hidden="true"></i>
                    <span class="site-menu-title">Sales Order</span>
                        
                </a>
 
 <ul class="site-menu-sub">
              <li class="site-menu-item has-sub">
                <a href="viewreport.php">Report List</span>
                  
                </a>                
              </li>
            </ul>
                    



          </li>
           
        </ul>  </div>
            </div>
<?php
}
else if($_SESSION['type']=="user")
{
?>


<div class="site-menubar site-menubar-light">

      <div class="site-menubar-body">
        <ul class="site-menu" data-plugin="menu">
          <li class="site-menu-item has-sub active open">
            <a href="index.php">
                    <i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
                    <span class="site-menu-title">Dashboard</span>
                        <div class="site-menu-badge">
                            <span class="badge badge-pill badge-success">3</span>
                        </div>
                </a>
          </li>
          <li class="site-menu-item has-sub">
            <a href="posale.php">
                    <i class="site-menu-icon wb-layout" aria-hidden="true"></i>
                    <span class="site-menu-title">POS</span>
                        
                </a>
          </li>
     
              <li class="site-menu-item has-sub">
            
          <li class="site-menu-item has-sub">
            <a href="repair.php">
                    
                    <i class="site-menu-icon wb-hammer" aria-hidden="true"></i>
                    <span class="site-menu-title">Repair</span>
                        
                </a>
          </li>
          <li class="site-menu-item has-sub">
            <a href="resale.php">
                    <i class="site-menu-icon wb-bookmark" aria-hidden="true"></i>
                    <span class="site-menu-title">Resale</span>
                        
                </a>
          </li>

           <li class="site-menu-item has-sub">
            <a href="salesorder.php">
                    <i class="site-menu-icon wb-bookmark" aria-hidden="true"></i>
                    <span class="site-menu-title">Sales Order</span>
                        
                </a>
          </li>
           
        </ul>  </div>

</div>

  <?php
}

?>

    <script src="../global/vendor/jquery/jquery.js"></script>  

    <script>
$(".goos").on('mousedown touchstart', function(){

window.location.href = "posale.php";

 });

$(".tille").on('mousedown touchstart', function(){

window.location.href = "till.php";

 });


$(".dashe").on('mousedown touchstart', function(){

window.location.href = "index.php";

 });
</script>