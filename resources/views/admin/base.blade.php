<!DOCTYPE html>

<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin | @yield('title')</title>

    <!-- Bootstrap -->
    <link href="{{ url('admin') }}/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ url('admin') }}/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ url('admin') }}/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ url('admin') }}/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- Switchery -->
    <link href="{{ url('admin') }}/vendors/switchery/dist/switchery.min.css" rel="stylesheet">


    <!-- bootstrap-progressbar -->
    <link href="{{ url('admin') }}/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{ url('admin') }}/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="{{ url('admin') }}/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ url('admin') }}/build/css/custom.min.css" rel="stylesheet">
</head>
<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="#" class="site_title"><i class="fa fa-paw"></i>
                        <span>Admin Page</span>
                    </a>
                </div>



                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section active">
                        <h3>General</h3>
                        <ul class="nav side-menu" style="">
                            <li class="active">
                                <a>
                                    <i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span>
                                </a>
                                <ul class="nav child_menu" style="display: block;">
                                    <li class="current-page">
                                        <a href="{{ url('admin/order/index') }}">Danh Sách Đơn Hàng</a>
                                    </li>

                                </ul>
                            </li>


                            <li><a><i class="fa fa-edit"></i> Danh Mục <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="{{ url('admin/catalog/index') }}">Danh Sách</a></li>
                                    <li><a href="{{ url('admin/catalog/addForm') }}">Thêm</a></li>

                                </ul>
                            </li>

                            <li><a><i class="fa fa-edit"></i> Sản Phẩm <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="{{ url('admin/product/index') }}">Danh Sách</a></li>
                                    <li><a href="{{ url('admin/product/addForm') }}">Thêm</a></li>

                                </ul>
                            </li>

                        </ul>
                    </div>


                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <div class="sidebar-footer hidden-small">
                    <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Settings">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="" data-original-title="FullScreen">
                        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Lock">
                        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="" href="{{ url('admin/logout') }}" data-original-title="Logout">
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
                                Admin
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">

                                <li>
                                    <a href="{{ url('admin/logout') }}"><i class="fa fa-sign-out pull-right"></i> Đăng Xuất</a>
                                </li>
                            </ul>
                        </li>


                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main" style="min-height: 1704px;">
            <!-- top tiles -->

            @yield('main')

        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
            <div class="pull-right">
                Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>

    <!-- jQuery -->
    <script src="{{ url('admin') }}/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="{{ url('admin') }}/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="{{ url('admin') }}/vendors/fastclick/lib/fastclick.js"></script>

    <script src="{{ url('admin') }}/vendors/switchery/dist/switchery.min.js"></script>

    <!-- NProgress -->
    <script src="{{ url('admin') }}/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="{{ url('admin') }}/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="{{ url('admin') }}/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{ url('admin') }}/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="{{ url('admin') }}/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="{{ url('admin') }}/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="{{ url('admin') }}/vendors/Flot/jquery.flot.js"></script>
    <script src="{{ url('admin') }}/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="{{ url('admin') }}/vendors/Flot/jquery.flot.time.js"></script>
    <script src="{{ url('admin') }}/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="{{ url('admin') }}/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="{{ url('admin') }}/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="{{ url('admin') }}/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="{{ url('admin') }}/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="{{ url('admin') }}/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="{{ url('admin') }}/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="{{ url('admin') }}/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="{{ url('admin') }}/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{ url('admin') }}/vendors/moment/min/moment.min.js"></script>
    <script src="{{ url('admin') }}/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{ url('admin') }}/build/js/custom.min.js"></script>

</div>
</body>


</html>