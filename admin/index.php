<?php include '../inc/dbconnect.php'; ?>
<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap admin template">
    <meta name="author" content="">
    
    <title>Dashboard POS | Sale</title>
    
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
        <link rel="stylesheet" href="../global/vendor/chartist/chartist.css">
        <link rel="stylesheet" href="../global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css">
        <link rel="stylesheet" href="../global/vendor/aspieprogress/asPieProgress.css">
        <link rel="stylesheet" href="../global/vendor/jquery-selective/jquery-selective.css">
        <link rel="stylesheet" href="../global/vendor/bootstrap-datepicker/bootstrap-datepicker.css">
        <link rel="stylesheet" href="../global/vendor/asscrollable/asScrollable.css">
        <link rel="stylesheet" href="../assets/examples/css/dashboard/team.css">
    
    
    <!-- Fonts -->
    <link rel="stylesheet" href="../global/fonts/web-icons/web-icons.min.css">
    <link rel="stylesheet" href="../global/fonts/brand-icons/brand-icons.min.css">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
    
    <!--[if lt IE 9]>
    <script src="global/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->
    
    <!--[if lt IE 10]>
    <script src="global/vendor/media-match/media.match.min.js"></script>
    <script src="global/vendor/respond/respond.min.js"></script>
    <![endif]-->
    
    <!-- Scripts -->
    <script src="../global/vendor/breakpoints/breakpoints.js"></script>
    <script>
      Breakpoints();
    </script>
  </head>
   <body class="animsition dashboard">
  <?php include '../inc/page_navi.php';?>    
  <?php include '../inc/page_sidebar.php';?>     
 
    <!-- Page -->
    <div class="page">
      <div class="page-content container-fluid">
        <div class="row" data-plugin="matchHeight" data-by-row="true">
          <!-- First Row -->
          <!-- Completed Options Pie Widgets -->
          <div class="col-xxl-3">
            <div class="row h-full" data-plugin="matchHeight">
              <div class="col-xxl-12 col-lg-6 col-sm-6">
                <div class="card card-shadow card-completed-options">
                  <div class="card-block p-30">
                    <div class="row">
                      <div class="col-8">
                        <div class="counter text-left blue-grey-700">
                          <div class="counter-label mt-10">Previous Day Sales
                                                    </div>
                          <div class="counter-number font-size-40 mt-10">
                          <?php 
                        $pinqry1= mysqli_query($conn,"SELECT * FROM till WHERE description = 'sales' AND ent_date = (CURDATE() - INTERVAL 1 DAY)");
                         

                                         $res1= mysqli_fetch_array($pinqry1);   ?>
                               
                              
                                    <h4><?php echo $res1['amount']?></h4>
                          </div>
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="pie-progress pie-progress-sm" >
                          <span class="pie-progress-number blue-grey-700 font-size-20">
                           <?php if($res1['amount']==""){ echo "AUD "."0";}else{ echo "AUD ".$res1['amount'];}?>
                          </span>
                        </div>
						
						<!-- <div class="pie-progress pie-progress-sm" data-plugin="pieProgress" data-valuemax="100"
                          data-barcolor="#57c7d4" data-size="100" data-barsize="10"
                          data-goal="86" aria-valuenow="86" role="progressbar">
                          <span class="pie-progress-number blue-grey-700 font-size-20">
                            AUD86
                          </span>
                        </div>  -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
			  <div class="col-xxl-12 col-lg-6 col-sm-6">
                <div class="card card-shadow card-completed-options">
                  <div class="card-block p-30">
                    <div class="row">
                      <div class="col-8">
                        <div class="counter text-left blue-grey-700">
                          <div class="counter-label mt-10">Today Day Sales
                                                    </div>
                          <div class="counter-number font-size-40 mt-10">
                          <?php 
                                 $pinqry1= mysqli_query($conn," SELECT * FROM till WHERE description = 'sales' AND ent_date = (CURDATE())"); 
                                         $res1= mysqli_fetch_array($pinqry1);   ?>
                               
                              
                                    <!-- <h4><?php echo $res1['amount']?></h4> -->
                          </div>
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="pie-progress pie-progress-sm" >
                          <span class="pie-progress-number blue-grey-700 font-size-20">
                           <?php if($res1['amount']==""){ echo "AUD "."0";}else{ echo "AUD ".$res1['amount'];}?>
                          </span>
                        </div>
						
						<!-- <div class="pie-progress pie-progress-sm" data-plugin="pieProgress" data-valuemax="100"
                          data-barcolor="#57c7d4" data-size="100" data-barsize="10"
                          data-goal="86" aria-valuenow="86" role="progressbar">
                          <span class="pie-progress-number blue-grey-700 font-size-20">
                            AUD86
                          </span>
                        </div>  -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
              
            </div>
          </div>
          <!-- End Completed Options Pie Widgets -->
          <!-- Team Total Completed -->

          <div class="col-xxl-4 col-lg-6 col-md-12">
          <!-- Panel Line Pie -->
          <div class="card card-shadow" id="chartLinePie">
            <div class="card-block p-0">
              <div class="bg-red-600 white p-30">
                <div class="font-size-20 clearfix">
                   Today Mobile Sales
           <!--  <span class="float-right">
                    <i class="icon wb-triangle-up" aria-hidden="true"></i> 260
                  </span> -->
                </div>
             <!--    <div class="font-size-14 red-200 clearfix">
                  2017.1.20
                  <span class="float-right">+12.5(2.8)</span>
                </div> -->
                <!-- <div class="ct-chart chart-line h-100"><!-- <svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100" height="100" class="ct-chart-line" style="width: 100; height: 100;"><g class="ct-grids"></g><g><g class="ct-series ct-series-a"><path d="M4,53.714L54.571,37.143L105.143,70.286L155.714,20.571L206.286,4L256.857,28.857L307.429,23.886L358,43.771" class="ct-line"></path><line x1="4" y1="53.71428571428571" x2="4.01" y2="53.71428571428571" class="ct-point" ct:value="4"></line><line x1="54.57142857142857" y1="37.14285714285714" x2="54.58142857142857" y2="37.14285714285714" class="ct-point" ct:value="5"></line><line x1="105.14285714285714" y1="70.28571428571428" x2="105.15285714285714" y2="70.28571428571428" class="ct-point" ct:value="3"></line><line x1="155.71428571428572" y1="20.57142857142857" x2="155.7242857142857" y2="20.57142857142857" class="ct-point" ct:value="6"></line><line x1="206.28571428571428" y1="4" x2="206.29571428571427" y2="4" class="ct-point" ct:value="7"></line><line x1="256.85714285714283" y1="28.85714285714286" x2="256.8671428571428" y2="28.85714285714286" class="ct-point" ct:value="5.5"></line><line x1="307.42857142857144" y1="23.885714285714286" x2="307.43857142857144" y2="23.885714285714286" class="ct-point" ct:value="5.8"></line><line x1="358" y1="43.77142857142859" x2="358.01" y2="43.77142857142859" class="ct-point" ct:value="4.6"></line></g></g><g class="ct-labels"></g></svg> </div> -->
              </div>
              <div class="p-30">
                <div class="row no-space">
                  <div class="col-7">
                  <!--   <p>
                      <span class="icon wb-medium-point cyan-600 mr-5"></span>35 Dietary intake</p>
                    <p class="mb-20">
                      <span class="icon wb-medium-point red-600 mr-5"></span>65 Motion capture</p> -->
<?php
$tot_mob=0;
   $pinqry1= mysqli_query($conn," SELECT * FROM sales WHERE sale_type <> 'accessories' AND saledate = (CURDATE())"); 
                                      while($res1= mysqli_fetch_array($pinqry1))
                                      {
$tot_mob+=$res1['item_total'];



                                      } 


?>



                    <p><?php if($tot_mob==""){ echo "AUD "."0";}else{ echo "AUD ".$tot_mob;}?></p>

                  <!-- <?php 
                        $pinqry11= mysqli_query($conn,"SELECT * FROM sales WHERE sale_type <> 'accessories' AND saledate = (CURDATE())");
                         

                                         $res11= mysqli_fetch_array($pinqry11);   ?>
                           
                    <p class="font-size-20 mb-0" style="line-height:1;"><h4><?php echo $res11['item_total']?></h4></p> -->
                  </div>
                  <!-- <div class="col-4">
                    <div class="ct-chart chart-pie" style="height: 129px;">
                      <div class="vertical-align text-center" style="height:100; width:100; position:absolute; left:0; top:0;">
                        <div class="font-size-20  vertical-align-middle" style="line-height:1.1 ">
                          <div>   <?php 
                        $pinqry11= mysqli_query($conn,"SELECT * FROM sales WHERE sale_type <> 'Accessories' AND saledate = (CURDATE())");
                         

                                         $res11= mysqli_fetch_array($pinqry11);   ?>
                               
                              
                                    <h4><?php echo $res11['item_total']?></h4>
                                  </div>
                          <div>Total</div>
                        </div>
                      </div>
                    <svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100" height="100" class="ct-chart-donut" style="width: 100; height: 100;"><g class="ct-series ct-series-a"><path d="M119.505,96.534A54.5,54.5,0,0,0,75.414,10" class="ct-slice-donut" ct:value="35" style="stroke-width: 10px;"></path></g><g class="ct-series ct-series-b"><path d="M75.414,10A54.5,54.5,0,1,0,119.617,96.38" class="ct-slice-donut" ct:value="65" style="stroke-width: 10px;"></path></g></svg></div>
                  </div> -->
                </div>
              </div>
            </div>
          </div>
          <!-- End Panel Line Pie -->
        </div>
        <div class="col-xxl-4 col-lg-6 col-md-12">
          <!-- Panel Bar Pie -->
          <div class="card card-shadow" id="chartBarPie">
            <div class="card-block p-0">
              <div class="bg-blue-600 white p-30">
                <div class="font-size-20 clearfix">
                Today Accessories Sales
              <!--     <span class="float-right">
                    <i class="icon wb-triangle-up" aria-hidden="true"></i> 720
                  </span> -->
                </div>
            <!--     <div class="font-size-14 blue-200 clearfix">
                  2017.1.20
                  <span class="float-right">+120.5(5.0)</span>
                </div> -->
                <!-- <div class="ct-chart chart-bar h-100"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100" height="100" class="ct-chart-bar" style="width: 100; height: 100;"><g class="ct-grids"></g><g><g class="ct-series ct-series-a"><line x1="15.083333333333334" x2="15.083333333333334" y1="100" y2="66.66666666666666" class="ct-bar" ct:value="50"></line><line x1="45.25" x2="45.25" y1="100" y2="40" class="ct-bar" ct:value="90"></line><line x1="75.41666666666667" x2="75.41666666666667" y1="100" y2="33.33333333333333" class="ct-bar" ct:value="100"></line><line x1="105.58333333333333" x2="105.58333333333333" y1="100" y2="40" class="ct-bar" ct:value="90"></line><line x1="135.75" x2="135.75" y1="100" y2="26.66666666666667" class="ct-bar" ct:value="110"></line><line x1="165.91666666666669" x2="165.91666666666669" y1="100" y2="33.33333333333333" class="ct-bar" ct:value="100"></line><line x1="196.08333333333334" x2="196.08333333333334" y1="100" y2="20" class="ct-bar" ct:value="120"></line><line x1="226.25000000000003" x2="226.25000000000003" y1="100" y2="13.333333333333329" class="ct-bar" ct:value="130"></line><line x1="256.4166666666667" x2="256.4166666666667" y1="100" y2="23.33333333333333" class="ct-bar" ct:value="115"></line><line x1="286.5833333333333" x2="286.5833333333333" y1="100" y2="36.666666666666664" class="ct-bar" ct:value="95"></line><line x1="316.75" x2="316.75" y1="100" y2="46.666666666666664" class="ct-bar" ct:value="80"></line><line x1="346.9166666666667" x2="346.9166666666667" y1="100" y2="43.333333333333336" class="ct-bar" ct:value="85"></line></g></g><g class="ct-labels"></g></svg></div> -->
              </div>
              <div class="p-30">
                <div class="row no-space">
                  <div class="col-7">
                   <!--  <p>
                      <span class="icon wb-medium-point purple-600 mr-5"></span>70 Dietary intake</p>
                    <p class="mb-20">
                      <span class="icon wb-medium-point blue-600 mr-5"></span>30 Motion capture</p> -->
<?php
$tot_mob=0;
   $pinqry1= mysqli_query($conn," SELECT * FROM sales WHERE sale_type = 'accessories' AND saledate = (CURDATE())"); 
                                      while($res1= mysqli_fetch_array($pinqry1))
                                      {
$tot_mob+=$res1['item_total'];



                                      } 


?>



                    <p><?php if($tot_mob==""){ echo "AUD "."0";}else{ echo "AUD ".$tot_mob;}?></p>



                 <!--    <p>Total Amount AUD62</p> -->
                      <?php 
                        $pinqry111= mysqli_query($conn,"SELECT * FROM sales WHERE sale_type = 'Accessories' AND saledate = (CURDATE())");
                         

                                         $res111= mysqli_fetch_array($pinqry111);   ?>
                           
                    <p class="font-size-20 mb-0" style="line-height:1;"><h4><?php echo $res111['item_total']?></h4></p>
                  </div>
                  <!-- <div class="col-4">
                    <div class="ct-chart chart-pie" style="height: 129px;">
                      <div class="vertical-align text-center" style="height:100; width:100; position:absolute; left:0; top:0;">
                        <div class="font-size-20  vertical-align-middle" style="line-height:1.1 ">
                          <div> <?php 
                        $pinqry111= mysqli_query($conn,"SELECT * FROM sales WHERE sale_type = 'Accessories' AND saledate = (CURDATE())");
                         

                                         $res111= mysqli_fetch_array($pinqry111);   ?>
                               
                              
                                    <h4><?php echo $res111['item_total']?></h4></div>
                          <div>Total</div>
                        </div>
                      </div>
                    <svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100" height="100" class="ct-chart-donut" style="width: 100; height: 100;"><g class="ct-series ct-series-a"><path d="M23.581,81.341A54.5,54.5,0,1,0,75.414,10" class="ct-slice-donut" ct:value="70" style="stroke-width: 10px;"></path></g><g class="ct-series ct-series-b"><path d="M75.414,10A54.5,54.5,0,0,0,23.641,81.522" class="ct-slice-donut" ct:value="30" style="stroke-width: 10px;"></path></g></svg></div>
                  </div> -->
                </div>
              </div>
            </div>
          </div>
          <!-- End Panel Bar Pie -->
        </div>
                  <div class="col-xxl-12">
            <div id="teamCompletedWidget" class="card card-shadow example-responsive">
              <div class="card-block p-20 pb-25">
                <div class="row pb-40" data-plugin="matchHeight">
                  <div class="col-md-6 col-sm-12">
                    <div class="counter text-left pl-10">
                      <div class="counter-label">Item Report</div>
                      <div class="counter-number-group text-truncate">
                        <?php

$itemsamt=0;
$items=0;

 $pinqry111= mysqli_query($conn,"SELECT * FROM sales WHERE MONTH(saledate) = MONTH(CURRENT_DATE())");

while($pl=mysqli_fetch_array($pinqry111))
{
  $itemsamt+=$pl['itemprice'];
  $items+=$pl['itemqty'];


}




                        ?>
                        <span>Monthly Sales:AUD <?php echo $itemsamt;?></span>
                        <span><?php echo $items;?> (Pdts)</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <ul class="list-inline mr-50">
                      <li class="list-inline-item">
                        Mobile Report
                      </li>
                      <li class="list-inline-item">
                       Accessories Report
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="ct-chart"></div>
              </div>
            </div>
          </div>
          <!-- End Team Total Completed -->
          <!-- End First Row -->
          <!-- Second Row -->
          <!-- Personal -->
          
          <!-- End Personal -->
          <!-- To Do List -->
          
          <!-- End To Do List -->
          <!-- Recent Activity -->
          
          <!-- End Recent Activity -->
          <!-- End Second Row -->
        </div>
      </div>
    </div>
    <!-- End Page -->

    <!-- Add Item Dialog -->
    <div id="addtodoItemForm" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="addtodoItemForm"
      aria-hidden="true">
      <div class="modal-dialog modal-simple">
        <form class="modal-content form-horizontal" role="form" action="#" method="post">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="moadl-title">Create New To Do Item</h4>
          </div>
          <div class="modal-body">
            <div class="form-group row">
              <label class="col-sm-2 form-control-label" for="title">Title:</label>
              <div class="col-sm-10">
                <input id="title" class="form-control" type="text" name="title" />
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 form-control-label" for="dueDate">Due Date</label>
              <div class="col-sm-10">
                <div class="input-group">
                  <input id="dueDate" class="form-control" type="text" data-plugin="datepicker" data-container="#addtodoItemForm"
                  />
                  <span class="input-group-addon">
                    <i class="icon wb-calendar" aria-hidden="true"></i>
                  </span>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 form-control-label" for="people">People:</label>
              <div class="col-sm-10">
                <select id="people" multiple="multiple" class="plugin-selective">
                </select>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <div class="form-actions">
              <button class="btn btn-primary" data-dismiss="modal" type="button">
                Add This Item
              </button>
              <a class="btn btn-sm btn-white" data-dismiss="modal" href="javascript:void(0)">
            Cancel
          </a>
            </div>
          </div>
        </form>
      </div>
    </div>
    <!-- End Add Item Dialog -->

    <!-- Edit Dialog -->
    <div class="modal fade" id="edittodoItemForm" aria-hidden="true" aria-labelledby="edittodoItemForm"
      role="dialog" tabindex="-1" data-show="false">
      <div class="modal-dialog modal-simple">
        <form class="modal-content form-horizontal" action="#" method="post" role="form">
          <div class="modal-header">
            <button type="button" class="close" aria-hidden="true" data-dismiss="modal">×</button>
            <h4 class="modal-title">Edit To Do Item</h4>
          </div>
          <div class="modal-body">
            <div class="form-group row">
              <label class="col-sm-2 form-control-label" for="editTitle">Title:
              </label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="editTitle" name="editTitle">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 form-control-label" for="editStarts">Due Date:
              </label>
              <div class="col-sm-10">
                <div class="input-group">
                  <input type="text" class="form-control" id="editDueDate" name="editDueDate" data-container="#edittodoItemForm"
                    data-plugin="datepicker">
                  <span class="input-group-addon">
                    <i class="icon wb-calendar" aria-hidden="true"></i>
                  </span>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 form-control-label" for="editPeople">People:
              </label>
              <div class="col-sm-10">
                <select id="editPeople" multiple="multiple" class="plugin-selective"></select>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <div class="form-actions">
              <button class="btn btn-primary" data-dismiss="modal" type="button">Save</button>
              <button class="btn btn-danger" data-dismiss="modal" type="button">Delete</button>
              <a class="btn btn-sm btn-white" data-dismiss="modal" href="javascript:void(0)">Cancel</a>
            </div>
          </div>
        </form>
      </div>
    </div>
    <!-- End Edit Dialog -->

   <!-- Footer -->
    <footer class="site-footer">
      <div class="site-footer-legal">© 2018 <a href="http://www.infogenx.com">Retail</a></div>
      <div class="site-footer-right">
        Crafted with <i class="red-600 wb wb-heart"></i> by <a href="https:infogenx.com">Infogenx</a>
      </div>
    </footer>
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
    
    <!-- Plugins -->
    <script src="../global/vendor/switchery/switchery.js"></script>
    <script src="../global/vendor/intro-js/intro.js"></script>
    <script src="../global/vendor/screenfull/screenfull.js"></script>
    <script src="../global/vendor/slidepanel/jquery-slidePanel.js"></script>
        <script src="../global/vendor/chartist/chartist.js"></script>
        <script src="../global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.js"></script>
        <script src="../global/vendor/aspieprogress/jquery-asPieProgress.js"></script>
        <script src="../global/vendor/matchheight/jquery.matchHeight-min.js"></script>
        <script src="../global/vendor/jquery-selective/jquery-selective.min.js"></script>
        <script src="../global/vendor/bootstrap-datepicker/bootstrap-datepicker.js"></script>
    
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
    <script src="global/js/config/colors.js"></script>
    <script src="assets/js/config/tour.js"></script>
    <script>Config.set('assets', 'assets');</script>
    
    <!-- Page -->
    <script src="../assets/js/Site.js"></script>
    <script src="../global/js/Plugin/asscrollable.js"></script>
    <script src="../global/js/Plugin/slidepanel.js"></script>
    <script src="../global/js/Plugin/switchery.js"></script>
        <script src="../global/js/Plugin/matchheight.js"></script>
        <script src="../global/js/Plugin/aspieprogress.js"></script>
        <script src="../global/js/Plugin/bootstrap-datepicker.js"></script>
        <script src="../global/js/Plugin/asscrollable.js"></script>
    
        <script src="../assets/examples/js/dashboard/team.js"></script>
  </body>
</html>


