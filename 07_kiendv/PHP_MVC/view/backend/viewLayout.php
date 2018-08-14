<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.ico" type="image/ico" />
    <title>Vinsofts | Dashboard</title>
    <!-- Bootstrap -->
    <link href="public/backend/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="public/backend/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <!-- NProgress -->
    <link href="public/backend/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="public/backend/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	 <!-- Datatables -->
    <link href="public/backend/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="public/backend/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="public/backend/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="public/backend/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="public/backend/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="public/backend/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="public/backend/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="public/backend/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="public/backend/build/css/custom.min.css" rel="stylesheet">
  </head>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="admin.php" class="site_title"><i class="fa fa-paw"></i> <span>Vinsofts | Dashboard</span></a>
            </div>
            <div class="clearfix"></div>
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="admin.php"><i class="fa fa-home"></i> Home</a>
                  </li>
                  <li><a><i class="fas fa-users"></i> Employees <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="admin.php?controller=Users">Users</a></li>
                      <li><a href="admin.php?controller=Teams">Teams</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->
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
                    <li><a href="admin.php?controller=Logout">Log Out<i style="float: right" class="fas fa-sign-out-alt"></i></a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
        <!-- page content -->
        <div class="right_col" role="main" style="min-height: 682px !important">
          <?php  
            if(file_exists("controller/backend/$controller") == true && $controller != "")
              include "controller/backend/$controller";
            else
              include "controller/backend/controllerDashboard.php";
          ?>
        </div>
        <!-- /page content -->
      </div>
    </div>
    <!-- jQuery -->
    <script src="public/backend/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="public/backend/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="public/backend/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="public/backend/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="public/backend/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="public/backend/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="public/backend/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- Datatables -->
    <script src="public/backend/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="public/backend/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="public/backend/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="public/backend/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="public/backend/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="public/backend/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="public/backend/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="public/backend/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="public/backend/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="public/backend/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="public/backend/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="public/backend/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="public/backend/vendors/jszip/dist/jszip.min.js"></script>
    <script src="public/backend/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="public/backend/vendors/pdfmake/build/vfs_fonts.js"></script>
    <!-- iCheck -->
    <script src="public/backend/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="public/backend/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="public/backend/vendors/Flot/jquery.flot.js"></script>
    <script src="public/backend/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="public/backend/vendors/Flot/jquery.flot.time.js"></script>
    <script src="public/backend/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="public/backend/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="public/backend/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="public/backend/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="public/backend/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="public/backend/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="public/backend/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="public/backend/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="public/backend/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="public/backend/vendors/moment/min/moment.min.js"></script>
    <script src="public/backend/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="public/backend/build/js/custom.min.js"></script>
  </body>
</html>