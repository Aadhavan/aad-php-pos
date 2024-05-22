<?php 
include '../inc/dbconnect.php';
include '../inc/page_head.php';
include '../inc/page_navi.php';
include '../inc/page_sidebar.php';   

?> 
 <!-- Page -->
    <link rel="stylesheet" href="../global/vendor/intro-js/introjs.css">
   
<!-- Page -->
<div class="page">
  <div class="page-header">
    <h1 class="page-title">Stock Accept</h1>


  </div>

  <div class="page-content container-fluid">
    <form action="" method="post" name="companyform" id="companyname" enctype="multipart/form-data" class="form-horizontal form-bordered">
    <div class="row">

       <div class="col-lg-12">
         <div class="panel" id="exampleReport">
          <div class="panel-body">
            <!-- <div class="panel-heading">
              <h4 class="panel-title">Stock Received</h4>
              <div class="panel-actions">
                <a class="panel-action icon wb-edit" data-toggle="tooltip" data-original-title="edit"
                  data-container="body" title=""></a>
                <a class="panel-action icon wb-reply" data-toggle="tooltip" data-original-title="send"
                  data-container="body" title=""></a>
                <a class="panel-action icon wb-trash" data-toggle="tooltip" data-original-title="move to trash"
                  data-container="body" title=""></a>
                <a class="panel-action icon wb-user" data-toggle="tooltip" data-original-title="uesrs"
                  data-container="body" title=""></a>
              </div>
            </div> -->
            <div class="example-wrap">
              <div class="example">
                <div class="table-responsive">
                  <table class="table table-hover" data-role="content" data-plugin="selectable" data-row-selectable="true">
                    <thead class="bg-blue-grey-100">
                      <tr>
                        <th>
                          <!-- <span class="checkbox-custom checkbox-primary">
                            <input class="selectable-all" type="checkbox">
                            <label></label>
                          </span> -->
                        </th>
                        <th>
                          S.NO
                        </th>
                        <th>
                          Order Id
                        </th>
                        <th>
                          Product Count
                        </th>
                        <th>
                          Total Quantity
                        </th>
                        <!-- <th>
                          <i class="icon wb-heart" aria-hidden="true"></i>
                        </th>
                        <th>
                          <i class="icon wb-chat" aria-hidden="true"></i>
                        </th> -->
                        <th>
                          Date Created
                        </th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <span class="checkbox-custom checkbox-primary">
                            <input class="selectable-item" type="checkbox">
                            <label></label>
                          </span>
                        </td>
                        <td><a href="javascript:void(0)">1</a>
                          <!-- <i
                            class="icon wb-help-circle ml-10 red-600" aria-hidden="true"
                            data-toggle="tooltip" data-original-title="help" data-container="body"
                            title=""></i> -->
                        </td>
                        <td>Revene for last quarter in state America for year 2013,
                          whith...</td>
                        <td>
                          <i class="fas fa-circle"><span class="ml-5">5</span></i>
                        </td>
                        <td>
                          <i class="icon wb-chat" aria-hidden="true"><span class="ml-5">22</span></i>
                        </td>
                        <td>
                          <span>6 minets ago</span>
                          <i class="icon wb-time ml-10" aria-hidden="true"></i>
                        </td>
                        <td>
                          <img class="avatar avatar-sm" src="../../../global/portraits/1.jpg" data-toggle="tooltip"
                            data-original-title="Crystal Bates" data-container="body"
                            title="">
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <span class="checkbox-custom checkbox-primary">
                            <input class="selectable-item" type="checkbox">
                            <label></label>
                          </span>
                        </td>
                        <td><a href="javascript:void(0)">2</a><!-- <i class="icon wb-help-circle ml-10 primary-600"
                            aria-hidden="true" data-toggle="tooltip" data-original-title="help"
                            data-container="body" title=""></i> --></td>
                        <td>Revene for last quarter in state America.</td>
                        <td>
                          <i class="icon wb-heart" aria-hidden="true"><span class="ml-5">8</span></i>
                        </td>
                        <td>
                          <i class="icon wb-chat" aria-hidden="true"><span class="ml-5">15</span></i>
                        </td>
                        <td>
                          <span>2 hourss ago</span>
                          <i class="icon wb-time ml-10" aria-hidden="true"></i>
                        </td>
                        <td>
                          <img class="avatar avatar-sm" src="../../../global/portraits/2.jpg" data-toggle="tooltip"
                            data-original-title="Maxime" data-container="body" title="">
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <span class="checkbox-custom checkbox-primary">
                            <input class="selectable-item" type="checkbox">
                            <label></label>
                          </span>
                        </td>
                        <td><a href="javascript:void(0)">3 </a><!-- i class="icon wb-help-circle ml-10 green-600"
                            aria-hidden="true" data-toggle="tooltip" data-original-title="help"
                            data-container="body" title=""></i> --></td>
                        <td>Text example here lorem ipsum</td>
                        <td>
                          <i class="icon wb-heart" aria-hidden="true"><span class="ml-5">2</span></i>
                        </td>
                        <td>
                          <i class="icon wb-chat" aria-hidden="true"><span class="ml-5">36</span></i>
                        </td>
                        <td>
                          <span>5 hours ago</span>
                          <i class="icon wb-time ml-10" aria-hidden="true"></i>
                        </td>
                        <td>
                          <img class="avatar avatar-sm" src="../../../global/portraits/3.jpg" data-toggle="tooltip"
                            data-original-title="Hammes" data-container="body" title="">
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <span class="checkbox-custom checkbox-primary">
                            <input class="selectable-item" type="checkbox">
                            <label></label>
                          </span>
                        </td>
                        <td><a href="javascript:void(0)">4</a><!-- <i class="icon wb-help-circle ml-10 blue-600"
                            aria-hidden="true" data-toggle="tooltip" data-original-title="help"
                            data-container="body" title=""></i> --></td>
                        <td>Lorem ipsum dolor sit amet</td>
                        <td>
                          <i class="icon wb-heart" aria-hidden="true"><span class="ml-5">4</span></i>
                        </td>
                        <td>
                          <i class="icon wb-chat" aria-hidden="true"><span class="ml-5">31</span></i>
                        </td>
                        <td>
                          <span>12 hours ago</span>
                          <i class="icon wb-time ml-10" aria-hidden="true"></i>
                        </td>
                        <td>
                          <img class="avatar avatar-sm" src="../../../global/portraits/4.jpg" data-toggle="tooltip"
                            data-original-title="Air Conditioner" data-container="body"
                            title="">
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <span class="checkbox-custom checkbox-primary">
                            <input class="selectable-item" type="checkbox">
                            <label></label>
                          </span>
                        </td>
                        <td><a href="javascript:void(0)">5</a><!-- <i class="icon wb-help-circle ml-10 orange-600"
                            aria-hidden="true" data-toggle="tooltip" data-original-title="help"
                            data-container="body" title=""></i> --></td>
                        <td>Lorem ipsum dolor sit amet</td>
                        <td>
                          <i class="icon wb-heart" aria-hidden="true"><span class="ml-5">5</span></i>
                        </td>
                        <td>
                          <i class="icon wb-chat" aria-hidden="true"><span class="ml-5">18</span></i>
                        </td>
                        <td>
                          <span>3 days ago</span>
                          <i class="icon wb-time ml-10" aria-hidden="true"></i>
                        </td>
                        <td>
                          <img class="avatar avatar-sm" src="../../../global/portraits/5.jpg" data-toggle="tooltip"
                            data-original-title="Milk Powder" data-container="body"
                            title="">
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                
              </div>
            </div>
             <div class="form-group form-actions">
                        <div class="col-md-9 col-md-offset-3">
                            <button type="submit" name="submit" id="cussubmit" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Accept</button>
                            <input type="hidden" name="taction" value="Add">
                            <button type="submit" class="btn btn-sm btn-success"><i class="fa wb-reply"></i> Return</button>
                        </div>
                    </div>
          </div>
        </div>
  
        </div> 

    </div>
     </form>
  </div>
</div>
 <link rel="stylesheet" href="../global/vendor/animsition/animsition.css">
    <link rel="stylesheet" href="../global/vendor/asscrollable/asScrollable.css">
    <link rel="stylesheet" href="../global/vendor/switchery/switchery.css">
    <link rel="stylesheet" href="../global/vendor/intro-js/introjs.css">
    <link rel="stylesheet" href="../global/vendor/slidepanel/slidePanel.css">
    <link rel="stylesheet" href="../global/vendor/flag-icon-css/flag-icon.css">
        <link rel="stylesheet" href="../assets/examples/css/tables/basic.css">

    <!-- Footer -->
       <!-- Core  -->
    <script src="../global/vendor/babel-external-helpers/babel-external-helpers.js"></script>
    <script src="../global/vendor/jquery/jquery.js"></script>
    <script src="../global/vendor/popper-js/umd/popper.min.js"></script>
    <script src="../global/vendor/bootstrap/bootstrap.js"></script>
    <script src="../global/vendor/animsition/animsition.js"></script>
    <script src="../global/vendor/mousewheel/jquery.mousewheel.js"></script>
    <script src="../global/vendor/asscrollbar/jquery-asScrollbar.js"></script>
    <script src="../global/vendor/asscrollable/jquery-asScrollable.js"></script>
    <script src="../global/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>
    
 
    <!-- Scripts -->
    <script src="../global/js/Component.js"></script>
    <script src="../global/js/Plugin.js"></script>
    <script src="../global/js/Base.js"></script>
    <script src="../global/js/Config.js"></script>
     
    
    <!-- Page -->
    <script src="../assets/js/Site.js"></script> 
    <script src="../global/js/Plugin/switchery.js"></script>
        <script src="../global/js/Plugin/peity.js"></script>
        <script src="../global/js/Plugin/asselectable.js"></script>
        <script src="../global/js/Plugin/selectable.js"></script>
        <script src="../global/js/Plugin/table.js"></script>
        <script src="../global/js/Plugin/asscrollable.js"></script>
    
        <script src="../assets/examples/js/charts/peity.js"></script>
<?php include '../inc/page_footer.php';  ?>