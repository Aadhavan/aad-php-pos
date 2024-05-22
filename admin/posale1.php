 <?php 
include '../inc/dbconnect.php';
include '../inc/page_head.php';
 include '../inc/page_navi.php';
include '../inc/page_sidebar.php';   

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
    <h1 class="page-title">pos</h1>


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
               <div class="panel-body" id="subcat" style="display: none;" >
                 <ul class="blocks blocks-100 blocks-xxl-5 blocks-lg-4 blocks-md-3 blocks-sm-2"
            data-plugin="animateList" data-child=">li"  >
               </ul> 
                 </div>

                  <div class="nav-tabs-horizontal" data-plugin="tabs" id="prodtabs">
                    <ul class="nav nav-tabs nav-tabs-line" role="tablist">
                      <li class="nav-item" role="presentation"><a class="nav-link active" data-toggle="tab" href="#exampleTabsLineOne"
                          aria-controls="exampleTabsLineOne" role="tab">Mobiles</a></li>
                      <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#exampleTabsLineTwo"
                          aria-controls="exampleTabsLineTwo" role="tab">Accessories</a></li>
                       
                    </ul>
                    <div class="tab-content pt-20">
                      <div class="tab-pane active" id="exampleTabsLineOne" role="tabpanel">
                        <div class="projects-wrap">
                          

          <ul id="parentcat" class="blocks blocks-100 blocks-xxl-5 blocks-lg-4 blocks-md-3 blocks-sm-2"
            data-plugin="animateList" data-child=">li">
            <li>
              <div class="panel">
                <figure class="overlay overlay-hover animation-hover">
                  <img class="caption-figure overlay-figure" src="../global/photos/placeholder.png">
                  <figcaption class="overlay-panel overlay-background overlay-fade text-center vertical-align" id="parcat" data-value="2">
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
                  <figcaption class="overlay-panel overlay-background overlay-fade text-center vertical-align" id="parcat" data-value="2" >
                     Apple 
                  
                  </figcaption>
                </figure>
                <div class="text-truncate "> <center>Samsung</center></div>
              </div>
            </li>
             
          </ul>
        </div>
                      </div>
                      <div class="tab-pane" id="exampleTabsLineTwo" role="tabpanel">
          <div class="projects-wrap"  >

         

          <ul id="" class="blocks blocks-100 blocks-xxl-5 blocks-lg-4 blocks-md-3 blocks-sm-2"
            data-plugin="animateList" data-child=">li">
             <li>
              <div class="panel">
                <figure class="overlay overlay-hover animation-hover">
                  <img class="caption-figure overlay-figure" src="../global/photos/placeholder.png">
                  <figcaption class="overlay-panel overlay-background overlay-fade text-center vertical-align" id="parcat" data-value="2">
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
                  <figcaption class="overlay-panel overlay-background overlay-fade text-center vertical-align" id="parcat" data-value="2" >
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
                  <figcaption class="overlay-panel overlay-background overlay-fade text-center vertical-align" id="parcat" data-value="2">
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
                  <figcaption class="overlay-panel overlay-background overlay-fade text-center vertical-align" id="parcat" data-value="2">
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
                  <figcaption class="overlay-panel overlay-background overlay-fade text-center vertical-align" id="parcat" data-value="2">
                     Apple 
                  
                  </figcaption>
                </figure>
                <div class="text-truncate "> <center>Apple</center></div>
              </div>
            </li>
          </ul>
        </div>
                      </div>
                      
                    </div>
                  </div>
                </div>
          

        <!-- <nav>
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
        </nav> -->
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
                         
                         <div class="example" style=" width:200px;margin: 0px ">
                    <select data-plugin="selectpicker">
                       <option>Select Customer</option>
                      <option>Mustard</option>
                      <option>Ketchup</option>
                      <option>Relish</option>
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
                    </div>
                  </div>
    
                               
           </div>


             
           <div class="example" style=" ">
                <div class="table-responsive">
                  <table class="table table-hover" data-role="content" data-plugin="selectable" data-row-selectable="true">
                    <thead class="bg-blue-grey-100">
                      <tr>                        
                        <th>
                          Items
                        </th>
                        <th>
                          Unit Price
                        </th>
                        <th>
                          Quantity
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
                    <tbody>
                      <tr>                        
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
                      </tr>
                       
                      
                    </tbody>
                  </table>
                </div>
                
              </div>
                  
            </div>
            
            <div class="row row-lg discountsys" style="margin:0 auto;">
             <div class="panel " style="width: 100%">

              <table class="table">
                 
                <tbody>
                 <tfoot class="hidden-xs hidden-sm hidden-md">
                <tr class="active">
                    <td width="200" class="text-left">Number of Products ( <span class="items-number">0</span> )</td>
                    <td width="150" class="text-right hidden-xs"></td>
                    <td width="150" class="text-right">Sub Total</td>
                    <td width="90" class="text-right"><span class="cart-value">$ 0.00 </span></td>
                </tr>
                <tr class="active">
                    <td>
                                        </td>
                    <td></td>
                    <td class="text-right cart-discount-notice-area">Discount on Cart</td>
                    <td class="text-right cart-discount-remove-wrapper"><span class="cart-discount pull-right">$ 0.00 </span></td>
                </tr>

                               
                
                <tr class="success">
                    <td class="text-right"></td>
                    <td class="text-right"></td>
                    <td class="text-right"><strong>
                        Net Payable                        </strong></td>
                    <td class="text-right"><span class="cart-topay pull-right">$ 0.00 </span></td>
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
                      
                      <div class="btn-group" aria-label="Basic example" role="group">
                    <button type="button" class="btn btn-outline btn-default" id="btnper">%</button>
                    <button type="button" class="btn btn-outline btn-default" id="btndol">$</button> 
                  </div>
                  <div id="dispercent" style="display: none;">
                   <input type="text" id="" class="form-control" name="touchSpinPostfix" data-plugin="TouchSpin"
                      data-min="0" data-max="100" data-step="0.1" data-decimals="2"
                      data-boostat="5" data-maxboostedstep="10" data-postfix="%"
                      value="55" />
                    </div>
                    <div id="disamt" style="display: none;"> 

                        <input type="text" id="disamt" class="form-control" name="touchSpinPrefix" data-plugin="TouchSpin"
                      data-min="-1000000000" data-max="1000000000" data-stepinterval="50"
                      data-maxboostedstep="10000000" data-prefix="$" value="0" />
                       <input type="hidden" name="distype" value=""> 
                     </div>

             <button class="btn btn-primary btn-outline" data-dismiss="modal" type="button">Add Discount</button>
                      <p style="float: right;"><a class="popup-modal-dismiss btn btn-primary btn-outline" href="javascript:void(0)">Dismiss</a></p>
            </div>
                      
                      

                    </div> 
                
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

                 <div class=" modal fade lightbox-block" id="colorcap" style="height:300px" >
                     <div class="panel-body"> 
                        <div class="nav-tabs-horizontal nav-tabs-inverse" data-plugin="tabs">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item" role="presentation">
                    <a class="nav-link active" data-toggle="tab" href="#exampleTabsInverseOne" aria-controls="exampleTabsInverseOne"
                      role="tab">
                  Color
                </a>
                  </li>
                  <li class="nav-item" role="presentation">
                    <a class="nav-link" data-toggle="tab" href="#exampleTabsInverseTwo" aria-controls="exampleTabsInverseTwo"
                      role="tab">
                  Capacity
                </a>
                  </li>
                </ul>
                <div class="tab-content p-20">
                  <div class="tab-pane active" id="exampleTabsInverseOne" role="tabpanel">
                      <div class="example">
                        <div class="form-group">
                          <input type="checkbox" class="to-labelauty-icon" name="inputLableautyNoLabeledCheckbox"
                            data-plugin="labelauty" data-label="false" />
                          <span>Unchecked</span>
                        </div>
                        <div class="form-group">
                          <input type="checkbox" class="to-labelauty-icon" name="inputLableautyNoLabeledCheckbox"
                            data-plugin="labelauty" data-label="false" checked/>
                          <span>Checked</span>
                        </div>
                         
                      </div>
                   
                  </div>
                  <div class="tab-pane" id="exampleTabsInverseTwo" role="tabpanel">
                      <div class="example">
                        <div class="form-group">
                          <input type="checkbox" class="to-labelauty-icon" name="inputLableautyNoLabeledCheckbox"
                            data-plugin="labelauty" data-label="false" />
                          <span>Unchecked</span>
                        </div>
                        <div class="form-group">
                          <input type="checkbox" class="to-labelauty-icon" name="inputLableautyNoLabeledCheckbox"
                            data-plugin="labelauty" data-label="false" checked/>
                          <span>Checked</span>
                        </div>
                         
                      </div>
                    
                     
                  </div> 
                </div>
              </div>

                      
                </div>                 

             <button class="btn btn-primary btn-outline" data-dismiss="modal" type="button">Add Discount</button>
             <a id="model-close" class="popup-modal-dismiss btn btn-primary btn-outline" href="javascript:void(0)">Close</a> 
            </div>

                   
                   
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

<script type="text/javascript">
  //$("#parcat figcaption").on('click', function() {
    var $myListElems = $('#parentcat').find('figcaption');
$myListElems.click(function(){
 
    var proid= $(this).data("value");
    $(this).data("value") ;
    alert($(this).data("value") );
    $.ajax({
           type: "POST",
           url: "getsubproduct.php",
           data: "data="+proid,
           success: function(msg){  
            

              $("#subcat").css("display","block"); 
            $("#subcat").append(msg);
            $("#prodtabs").css("display","none"); 
            $("#prodtabs").remove();
                 var $myListElems = $('#subitems').find('figcaption');
          $myListElems.click(function(){
            $("#colorcap").css("display","block"); 
              $('#colorcap').modal('show'); 
          });
           $("#model-close").click(function(){
            $(".modal-backdrop").remove(); 
              $('#colorcap').modal('hide'); 
              $("#colorcap").remove(); 

           });            

        /* $('.remCF').click(function() { 
          
        $(this).parent().parent().remove();
          });*/
        }
      });

  });

   $(document).ready(function() { 
    
  $("#btnper").click(function () { 
        $("#dispercent").css("display","block");
        $("#disamt").css("display","none");
        $("#distype").val('percenage');
  
    });
  $("#btndol").click(function () {
        $("#dispercent").css("display","none");
        $("#disamt").css("display","block");
        $("#distype").val('amount');
 
    });
});
</script>