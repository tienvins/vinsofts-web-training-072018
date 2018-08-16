
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Gentelella Alela! | </title>

        <!-- Bootstrap -->
    <link href="public/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="public/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <!-- NProgress -->
    <link href="public/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="public/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
   <!-- Datatables -->
    <link href="public/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="public/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="public/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="public/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="public/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="public/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="public/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="public/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="public/build/css/custom.min.css" rel="stylesheet">

  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="home" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="public/production/images/img.jpg" alt="public." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Doe</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="home"><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> User <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="user">View User</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> Teams <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="teams">View Teams</a></li>
                      
                    </ul>
                  </li>
                </ul>
              </div>


            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="admin.php?controller=logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt="">John Doe
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were wherepublic.
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were wherepublic.
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were wherepublic.
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were wherepublic.
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          
          <!-- /top tiles -->

          
          <br />


          <?php  
            if(file_exists($controller))
              include $controller;
            else{
              include("controller/controller_aaa.php");
            }
          ?>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="public/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="public/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="public/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="public/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="public/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="public/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="public/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- Datatables -->
    <script src="public/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="public/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="public/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="public/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="public/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="public/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="public/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="public/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="public/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="public/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="public/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="public/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="public/vendors/jszip/dist/jszip.min.js"></script>
    <script src="public/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="public/vendors/pdfmake/build/vfs_fonts.js"></script>
    <!-- iCheck -->
    <script src="public/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="public/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="public/vendors/Flot/jquery.flot.js"></script>
    <script src="public/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="public/vendors/Flot/jquery.flot.time.js"></script>
    <script src="public/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="public/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="public/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="public/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="public/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="public/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="public/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="public/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="public/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="public/vendors/moment/min/moment.min.js"></script>
    <script src="public/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="public/build/js/custom.min.js"></script>

	
  </body>
</html>
