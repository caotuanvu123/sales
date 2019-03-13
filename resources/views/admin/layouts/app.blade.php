<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Quản lí...  - @yield('title')</title>

  <!-- Fonts and Codebase framework -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,400i,600,700">
  <link rel="stylesheet" href="{{asset('template/fonts/fontawesome5/fa-brands-400.svg')}}">
  <link rel="stylesheet" id="css-main" href="{{asset('template/css/social_sales.min.css')}}">

   <!-- endinject -->
</head>

<body>
  <body>
    <div id="page-container" class="sidebar-o sidebar-inverse enable-page-overlay side-scroll page-header-fixed">
        <!-- Side Overlay-->
        {{-- <aside id="side-overlay">
            <!-- Side Header -->
            <div class="content-header content-header-fullrow bg-primary-dark">
                <div class="content-header-section align-parent">
                    <!-- Close Side Overlay -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <button type="button" class="btn btn-circle btn-dual-secondary align-v-r" data-toggle="layout" data-action="side_overlay_close">
                        <i class="fa fa-times text-danger"></i>
                    </button>
                    <!-- END Close Side Overlay -->

                    <!-- User Info -->
                    <div class="content-header-item">
                        <a class="img-link mr-5" href="javascript:void(0)">
                            <img class="img-avatar img-avatar32" src="assets/media/avatars/avatar12.jpg" alt="">
                        </a>
                        <a class="align-middle link-effect text-white-op font-w600" href="javascript:void(0)">Admin</a>
                    </div>
                    <!-- END User Info -->
                </div>
            </div>
            <!-- END Side Header -->

            <!-- Side Content -->
            <div class="content-side">
                <!-- Mini Stats -->
                <div class="block pull-t pull-r-l">
                    <div class="block-content block-content-full block-content-sm bg-primary">
                        <div class="row text-center">
                            <div class="col-4">
                                <div class="font-size-sm font-w600 text-uppercase text-white-op">Sales</div>
                                <div class="font-size-h4 text-white">985</div>
                            </div>
                            <div class="col-4">
                                <div class="font-size-sm font-w600 text-uppercase text-white-op">Tickets</div>
                                <div class="font-size-h4 text-white">251</div>
                            </div>
                            <div class="col-4">
                                <div class="font-size-sm font-w600 text-uppercase text-white-op">Projects</div>
                                <div class="font-size-h4 text-white">39</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Mini Stats -->

                <!-- Search -->
                <div class="block pull-r-l">
                    <div class="block-content block-content-full block-content-sm bg-body-light">
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control" id="side-overlay-search" name="side-overlay-search" placeholder="Search..">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-secondary px-10">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END Search -->

                <!-- Notifications -->
                <div class="block pull-r-l">
                    <div class="block-header bg-body-light">
                        <h3 class="block-title">Notifications</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                <i class="si si-refresh"></i>
                            </button>
                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                        </div>
                    </div>
                    <div class="block-content">
                        <ul class="list list-activity">
                            <li>
                                <i class="si si-wallet text-success"></i>
                                <div class="font-w600">+$29 New sale</div>
                                <div>
                                    <a href="javascript:void(0)">Admin Template</a>
                                </div>
                                <div class="font-size-xs text-muted">5 min ago</div>
                            </li>
                            <li>
                                <i class="si si-close text-danger"></i>
                                <div class="font-w600">Project removed</div>
                                <div>
                                    <a href="javascript:void(0)">Best Icon Set</a>
                                </div>
                                <div class="font-size-xs text-muted">26 min ago</div>
                            </li>
                            <li>
                                <i class="si si-pencil text-info"></i>
                                <div class="font-w600">You edited the file</div>
                                <div>
                                    <a href="javascript:void(0)">
                                        <i class="fa fa-file-text-o"></i> Docs.doc
                                    </a>
                                </div>
                                <div class="font-size-xs text-muted">3 hours ago</div>
                            </li>
                            <li>
                                <i class="si si-plus text-success"></i>
                                <div class="font-w600">New user</div>
                                <div>
                                    <a href="javascript:void(0)">StudioWeb - View Profile</a>
                                </div>
                                <div class="font-size-xs text-muted">5 hours ago</div>
                            </li>
                            <li>
                                <i class="si si-wrench text-warning"></i>
                                <div class="font-w600">Core v3.9 is available</div>
                                <div>
                                    <a href="javascript:void(0)">Update now</a>
                                </div>
                                <div class="font-size-xs text-muted">8 hours ago</div>
                            </li>
                            <li>
                                <i class="si si-user-follow text-pulse"></i>
                                <div class="font-w600">+1 Friend Request</div>
                                <div>
                                    <a href="javascript:void(0)">Accept</a>
                                </div>
                                <div class="font-size-xs text-muted">1 day ago</div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- END Notifications -->
            </div>
            <!-- END Side Content -->
        </aside> --}}
        <!-- END Side Overlay -->

        <!-- Sidebar -->
        <nav id="sidebar">
            <!-- Sidebar Content -->
            @include('admin.component.sidebar')
            <!-- Sidebar Content -->
        </nav>
        <!-- END Sidebar -->

        <!-- Header -->
        @include('admin.component.header')
        <!-- END Header -->

        <!-- Main Container -->
        <main id="main-container">
            <!-- Page Content -->
            @include('admin.component.alert')
            @include('admin.component.errors')
            @yield('content')
            <!-- END Page Content -->

        </main>
        <!-- END Main Container -->

        <!-- Footer -->
        <footer id="page-footer" class="bg-white opacity-0">
            <div class="content py-20 font-size-xs clearfix">
                <div class="float-right">
                    Crafted with <i class="fa fa-heart text-pulse"></i> by <a class="font-w600" href="https://1.envato.market/ydb" target="_blank">pixelcave</a>
                </div>
                <div class="float-left">
                    <a class="font-w600" href="https://1.envato.market/95j" target="_blank">Codebase 3.0</a> &copy; <span class="js-year-copy">2017</span>
                </div>
            </div>
        </footer>
        <!-- END Footer -->
    </div>
    <!-- END Page Container -->

    <!--
        Codebase JS Core

        Vital libraries and plugins used in all pages. You can choose to not include this file if you would like
        to handle those dependencies through webpack. Please check out assets/_es6/main/bootstrap.js for more info.

        If you like, you could also include them separately directly from the assets/js/core folder in the following
        order. That can come in handy if you would like to include a few of them (eg jQuery) from a CDN.

        assets/js/core/jquery.min.js
        assets/js/core/bootstrap.bundle.min.js
        assets/js/core/simplebar.min.js
        assets/js/core/jquery-scrollLock.min.js
        assets/js/core/jquery.appear.min.js
        assets/js/core/jquery.countTo.min.js
        assets/js/core/js.cookie.min.js
    -->
  <script src="{{asset('template/js/social_sales.core.js')}}"></script>

    <!--
        Codebase JS

        Custom functionality including Blocks/Layout API as well as other vital and optional helpers
        webpack is putting everything together at assets/_es6/main/app.js
    -->
    <script src="{{asset('template/js/social_sales.app.js')}}"></script>

    <!-- Page JS Plugins -->
  <script src="{{asset('template/js/chart.bundle.min.js')}}"></script>

    <!-- Page JS Code -->
    <script src="{{asset('template/js/db_classic.min.js')}}"></script>

</body>
</body>

</html>
