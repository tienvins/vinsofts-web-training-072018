<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/Templates/images/favicon.ico" type="image/ico" />

    <title>QUẢN LÍ NHÂN Sự</title>

    <!-- Bootstrap -->
    <link href="Templates/public/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="Templates/public/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="Templates/public/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="Templates/public/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="Templates/public/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="Templates/public/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="Templates/public/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="Templates/public/build/css/custom.min.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="Templates/public/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="Templates/public/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="Templates/public/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="Templates/public/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="Templates/public/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
</head>

<body class="nav-md">
<div class="container body">
    <?php
        include_once "Templates/_master/header.php";
    ?>
        <!-- page content -->
        <div class="right_col" role="main">
            <?php
            if(isset($_GET['controller'])&& isset($_GET['action'])){
                $action     = $_GET['action'];
                $controller = $_GET['controller'];
                $CTName     = $controller.'Controller';
                require_once 'Controller/'.$CTName.'.php';
                $controller = new $CTName();
                $controller->$action();
            }
            else {
                require_once 'Controller/TeamController.php';
                $controller = new TeamController();
                $controller->showTeam();
            }

            ?>
        </div>
        <!-- /page content -->
    <?php
    include_once "Templates/_master/footer.php";
    ?>
    </div>
</div>

<!-- jQuery -->
<script src="Templates/public/vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="Templates/public/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="Templates/public/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="Templates/public/vendors/nprogress/nprogress.js"></script>
<!-- iCheck -->
<script src="Templates/public/vendors/iCheck/icheck.min.js"></script>
<!-- Chart.js -->
<script src="Templates/public/vendors/Chart.js/dist/Chart.min.js"></script>
<!-- gauge.js -->
<script src="Templates/public/vendors/gauge.js/dist/gauge.min.js"></script>
<!-- bootstrap-progressbar -->
<script src="Templates/public/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="Templates/public/vendors/iCheck/icheck.min.js"></script>
<!-- Skycons -->
<script src="Templates/public/vendors/skycons/skycons.js"></script>
<!-- Flot -->
<script src="Templates/public/vendors/Flot/jquery.flot.js"></script>
<script src="Templates/public/vendors/Flot/jquery.flot.pie.js"></script>
<script src="Templates/public/vendors/Flot/jquery.flot.time.js"></script>
<script src="Templates/public/vendors/Flot/jquery.flot.stack.js"></script>
<script src="Templates/public/vendors/Flot/jquery.flot.resize.js"></script>
<!-- Flot plugins -->
<script src="Templates/public/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
<script src="Templates/public/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
<script src="Templates/public/vendors/flot.curvedlines/curvedLines.js"></script>
<!-- DateJS -->
<script src="Templates/public/vendors/DateJS/build/date.js"></script>
<!-- JQVMap -->
<script src="Templates/public/vendors/jqvmap/dist/jquery.vmap.js"></script>
<script src="Templates/public/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="Templates/public/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="Templates/public/vendors/moment/min/moment.min.js"></script>
<script src="Templates/public/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

<!-- Datatables -->
<script src="Templates/public/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="Templates/public/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="Templates/public/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="Templates/public/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<script src="Templates/public/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="Templates/public/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="Templates/public/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="Templates/public/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="Templates/public/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="Templates/public/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="Templates/public/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<script src="Templates/public/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
<script src="Templates/public/vendors/jszip/dist/jszip.min.js"></script>
<script src="Templates/public/vendors/pdfmake/build/pdfmake.min.js"></script>
<script src="Templates/public/vendors/pdfmake/build/vfs_fonts.js"></script>

<!-- Custom Theme Scripts -->
<script src="Templates/public/build/js/custom.min.js"></script>

</body>
</html>
