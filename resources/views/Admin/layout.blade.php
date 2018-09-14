<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>German Fernandez - Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" sizes="114x114" href="{{{ asset('assets/img/favicon.png') }}}">

    <!-- DataTables -->
    <link href="/admin/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="/admin/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="/admin/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Multi Item Selection examples -->
    <link href="/admin/plugins/datatables/select.bootstrap4.min.css" rel="stylesheet" type="text/css" />+

    <!-- App css -->
    <link href="/admin/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/admin//css/icons.css" rel="stylesheet" type="text/css" />
    <link href="/admin/css/metismenu.min.css" rel="stylesheet" type="text/css" />
    <link href="/admin/css/style.css" rel="stylesheet" type="text/css" />

    <script src="/admin/js/modernizr.min.js"></script>

</head>


<body>

<!-- Begin page -->
<div id="wrapper">

    <!-- ========== Left Sidebar Start ========== -->
    <div class="left side-menu">

        <div class="slimscroll-menu" id="remove-scroll">

            <!-- LOGO -->
            <div class="topbar-left">
                <a href="index.html" class="logo">
                            <span>
                                <img src="/gf/images/gf/logoGF.png" alt="" height="50">
                            </span>
                    <i>
                        <img src="/gf/images/gf/logoGF.png" alt="" height="50">
                    </i>
                </a>
            </div>

            <!-- User box -->
            <div class="user-box">
                <div class="user-img">
                    <img src="/admin/images/fernando_perfil.jpg" alt="user-img" title="Mat Helme" class="rounded-circle img-fluid">
                </div>
                <h5><a href="#">{{auth()->user()->name}}</a> </h5>
                <p class="text-muted">Administrador</p>
            </div>

            <!--- Sidemenu -->
            <div id="sidebar-menu">

                @include('Admin.partials.navegacion')

            </div>
            <!-- Sidebar -->

            <div class="clearfix"></div>

        </div>
        <!-- Sidebar -left -->

    </div>
    <!-- Left Sidebar End -->



    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->

    <div class="content-page">

        <!-- Top Bar Start -->
        <div class="topbar">

            <nav class="navbar-custom">

                <ul class="list-unstyled topbar-right-menu float-right mb-0">

                   {{-- <li class="hide-phone app-search">
                        <form>
                            <input type="text" placeholder="Search..." class="form-control">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </li>--}}

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button"
                           aria-haspopup="false" aria-expanded="false">
                            <i class="fi-bell noti-icon"></i>
                            <span class="badge badge-danger badge-pill noti-icon-badge">4</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg">

                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5 class="m-0"><span class="float-right"><a href="" class="text-dark"><small>Clear All</small></a> </span>Notification</h5>
                            </div>

                            <div class="slimscroll" style="max-height: 230px;">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-success"><i class="mdi mdi-comment-account-outline"></i></div>
                                    <p class="notify-details">Caleb Flakelar commented on Admin<small class="text-muted">1 min ago</small></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-info"><i class="mdi mdi-account-plus"></i></div>
                                    <p class="notify-details">New user registered.<small class="text-muted">5 hours ago</small></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-danger"><i class="mdi mdi-heart"></i></div>
                                    <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">3 days ago</small></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-warning"><i class="mdi mdi-comment-account-outline"></i></div>
                                    <p class="notify-details">Caleb Flakelar commented on Admin<small class="text-muted">4 days ago</small></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-purple"><i class="mdi mdi-account-plus"></i></div>
                                    <p class="notify-details">New user registered.<small class="text-muted">7 days ago</small></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-custom"><i class="mdi mdi-heart"></i></div>
                                    <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">13 days ago</small></p>
                                </a>
                            </div>

                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                View all <i class="fi-arrow-right"></i>
                            </a>

                        </div>
                    </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button"
                           aria-haspopup="false" aria-expanded="false">
                            <i class="fi-speech-bubble noti-icon"></i>
                            <span class="badge badge-custom badge-pill noti-icon-badge">6</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg">

                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5 class="m-0"><span class="float-right"><a href="" class="text-dark"><small>Clear All</small></a> </span>Chat</h5>
                            </div>

                            <div class="slimscroll" style="max-height: 230px;">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon"><img src="assets/images/users/avatar-2.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                    <p class="notify-details">Cristina Pride</p>
                                    <p class="text-muted font-13 mb-0 user-msg">Hi, How are you? What about our next meeting</p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon"><img src="assets/images/users/avatar-3.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                    <p class="notify-details">Sam Garret</p>
                                    <p class="text-muted font-13 mb-0 user-msg">Yeah everything is fine</p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon"><img src="assets/images/users/avatar-4.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                    <p class="notify-details">Karen Robinson</p>
                                    <p class="text-muted font-13 mb-0 user-msg">Wow that's great</p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon"><img src="assets/images/users/avatar-5.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                    <p class="notify-details">Sherry Marshall</p>
                                    <p class="text-muted font-13 mb-0 user-msg">Hi, How are you? What about our next meeting</p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon"><img src="assets/images/users/avatar-6.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                    <p class="notify-details">Shawn Millard</p>
                                    <p class="text-muted font-13 mb-0 user-msg">Yeah everything is fine</p>
                                </a>
                            </div>

                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                View all <i class="fi-arrow-right"></i>
                            </a>

                        </div>
                    </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button"
                           aria-haspopup="false" aria-expanded="false">
                            <img src="/admin/images/fernando_perfil.jpg" alt="user" class="rounded-circle"> <span class="ml-1">{{auth()->user()->name}}<i class="mdi mdi-chevron-down"></i> </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h6 class="text-overflow m-0">Hola !</h6>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fi-head"></i> <span>Mi Perfil</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fi-cog"></i> <span>Configuración</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fi-help"></i> <span>Soporte</span>
                            </a>
                            <!-- item-->

                            <form class="formLogout" method="POST" action="{{ route('logout') }}">
                                @csrf
                            <button href="" id="logoutAdmin" type="submit" class="dropdown-item notify-item btn">
                                    <i class="fi-power" ></i> <span>Logout</span>
                            </button>
                            </form>
                        </div>
                    </li>

                </ul>

                <ul class="list-inline menu-left mb-0">
                    <li class="float-left">
                        <button class="button-menu-mobile open-left disable-btn">
                            <i class="dripicons-menu"></i>
                        </button>
                    </li>
                    <li>

                        @section('headerClientes')
                         @show

                    </li>

                </ul>

            </nav>

        </div>
        <!-- Top Bar End -->



        <!-- Start Page content -->
        <div class="content">
            <div class="container-fluid">

               @yield('contenido')

            </div> <!-- container -->

        </div> <!-- content -->

        <footer class="footer text-right">
            © 2018 Germán Fernandes. All rights reserved.
        </footer>

    </div>


    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->


</div>
<!-- END wrapper -->



<!-- jQuery  -->
<script src="/admin/js/jquery.min.js"></script>
<script src="/admin/js/popper.min.js"></script>
<script src="/admin/js/bootstrap.min.js"></script>
<script src="/admin/js/metisMenu.min.js"></script>
<script src="/admin/js/waves.js"></script>
<script src="/admin/js/jquery.slimscroll.js"></script>

<!-- Flot chart -->
<script src="/admin/plugins/flot-chart/jquery.flot.min.js"></script>
<script src="/admin/plugins/flot-chart/jquery.flot.time.js"></script>
<script src="/admin/plugins/flot-chart/jquery.flot.tooltip.min.js"></script>
<script src="/admin/plugins/flot-chart/jquery.flot.resize.js"></script>
<script src="/admin/plugins/flot-chart/jquery.flot.pie.js"></script>
<script src="/admin/plugins/flot-chart/jquery.flot.crosshair.js"></script>
<script src="/admin/plugins/flot-chart/curvedLines.js"></script>
<script src="/admin/plugins/flot-chart/jquery.flot.axislabels.js"></script>


<!-- Required datatable js -->
<script src="/admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/admin/plugins/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Buttons examples -->
<script src="/admin/plugins/datatables/dataTables.buttons.min.js"></script>
<script src="/admin/plugins/datatables/buttons.bootstrap4.min.js"></script>
<script src="/admin/plugins/datatables/jszip.min.js"></script>
<script src="/admin/plugins/datatables/pdfmake.min.js"></script>
<script src="/admin/plugins/datatables/vfs_fonts.js"></script>
<script src="/admin/plugins/datatables/buttons.html5.min.js"></script>
<script src="/admin/plugins/datatables/buttons.print.min.js"></script>

<!-- Key Tables -->
<script src="/admin/plugins/datatables/dataTables.keyTable.min.js"></script>

<!-- Responsive examples -->
<script src="/admin/plugins/datatables/dataTables.responsive.min.js"></script>
<script src="/admin/plugins/datatables/responsive.bootstrap4.min.js"></script>

<!-- Selection table -->
<script src="../plugins/datatables/dataTables.select.min.js"></script>

<!-- KNOB JS -->
<!--[if IE]>
<script type="text/javascript" src="/admin/plugins/jquery-knob/excanvas.js"></script>
<![endif]-->
<script src="/admin/plugins/jquery-knob/jquery.knob.js"></script>

<!-- Dashboard Init -->
<script src="/admin/pages/jquery.dashboard.init.js"></script>

<!-- App js -->
<script src="/admin/js/jquery.core.js"></script>
<script src="/admin/js/jquery.app.js"></script>
<script src="/admin/js/admin.js"></script>

@section('dataTablesClientes')

@show

</body>
</html>