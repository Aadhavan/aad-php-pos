  <!-- Stylesheets -->
   
        <link rel="stylesheet" href="../../global/vendor/select2/select2.css"> 
        <link rel="stylesheet" href="../../global/vendor/bootstrap-select/bootstrap-select.css"> 
        <link rel="stylesheet" href="../../assets/examples/css/forms/advanced.css">
    
 <?php 
include '../../inc/dbconnect.php';
include '../../inc/page_head.php';
 include '../../inc/page_navi.php';
include '../../inc/page_sidebar.php';   

?> 

        <link rel="stylesheet" href="../../assets/examples/css/uikit/modals.css">

 <link rel="stylesheet" href="../../assets/examples/css/uikit/modals.min.css?v4.0.2"> 
<div class="page">
  <div class="page-header">
    <h1 class="page-title">Supplier</h1>


  </div>

  <div class="page-content container-fluid">
    <form action="" method="post" name="companyform" id="companyname" enctype="multipart/form-data" class="form-horizontal form-bordered">
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
              <input class="form-control" id="inputSearch" name="search" placeholder="Start typing product name or scaning..." type="text" style="padding-left:5.073rem">
              <button type="button" class="input-search-close icon wb-close" aria-label="Close"></button>
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
                        Quoquo timeret omne redeamus ratione monet nosque requietis afferrent iste, pertinerent.
                        Postremo frustra oportet pueriliter finxerat eos offendit
                        fecerint, iudicem quieti scribi animumque pondere ancillae,
                        timeret stoicos iustitia parvam.
                      </div>
                      <div class="tab-pane" id="exampleTabsLineTwo" role="tabpanel">
                        Sole, latinas incurreret optari vivatur, porro delectu epicurus cadere impedit
                        fit ferreum concludaturque varias, omnium gloriosis vivendo
                        via filio contentam expeteretur fonte expectata, quosque
                        praetor quid iucunditatis fortitudinem esse.
                      </div>
                      
                    </div>
                  </div>
                </div>
           
                    </div>
                    </div>
               
                <!-- END Basic Form Elements Content -->
            
            <!-- END Basic Form Elements Block -->
        </div>
         <div class="col-lg-6">
  <div class="panel">
            <!-- Basic Form Elements Block -->
            <div class="panel-body">
      <div class="example-wrap">
                
                  <div class="example" style="border: 1px solid #888;width:200px;margin: 0px ">
                    <select data-plugin="selectpicker">
                       <option>Select Customer</option>
                      <option>Mustard</option>
                      <option>Ketchup</option>
                      <option>Relish</option>
                    </select>
                  </div>
                   <button class="btn btn-primary" data-target="#exampleFormModal" data-toggle="modal"
                      type="button">Generate</button>
                       <div class="modal fade" id="exampleFormModal" aria-hidden="false" aria-labelledby="exampleFormModalLabel"
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
                              <div class="col-xl-4 form-group">
                                <input type="text" class="form-control" name="firstName" placeholder="First Name">
                              </div>
                              <div class="col-xl-4 form-group">
                                <input type="email" class="form-control" name="lastName" placeholder="Last Name">
                              </div>
                              <div class="col-xl-4 form-group">
                                <input type="email" class="form-control" name="email" placeholder="Your Email">
                              </div>
                              <div class="col-xl-12 form-group">
                                <textarea class="form-control" rows="5" placeholder="Type your message"></textarea>
                              </div>
                              <div class="col-md-12 float-right">
                                <button class="btn btn-primary btn-outline" data-dismiss="modal" type="button">Add Comment</button>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                </div>
                               
           </div>


              <table class="table" id="cart-item-table-header">
            <thead>
                <tr class="active">
                    <td  class="text-left">Items</td>
                    <td  class="text-center hidden-xs">Unit Price</td>
                    <td  class="text-center">Quantity</td>
                       <td   class="text-right">Total Price</td>
                </tr>
            </thead>
        </table>
                  
            </div>
</div>
        </div>
       
        

    </div>
     </form>
  </div>
</div>
      <script src="../../global/vendor/babel-external-helpers/babel-external-helpers.js"></script>
    <script src="../../global/vendor/jquery/jquery.js"></script>  
     
        <script src="../../global/vendor/select2/select2.full.min.js"></script>  
        <script src="../../global/vendor/bootstrap-select/bootstrap-select.js"></script>  
    
    <!-- Scripts -->
    <script src="../../global/js/Component.js"></script>
    <script src="../../global/js/Plugin.js"></script>
    <script src="../../global/js/Base.js"></script>
    <script src="../../global/js/Config.js"></script>
      
    <!-- Page -->
    <script src="../../assets/js/Site.js"></script>  
        <script src="../../global/js/Plugin/select2.js"></script>  
        <script src="../../global/js/Plugin/bootstrap-select.js"></script> 
    
        <script src="../../assets/examples/js/forms/advanced.js"></script>
        <?php include '../../inc/page_footer.php';  ?>