<!doctype html>
<html lang="en">
@include('layouts.header')
    <body>
        <div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">
            <div class="app-header header-shadow">
                <div class="app-header__logo">
                    <div class="logo-src"></div>
                    <div class="header__pane ms-auto">
                        <div>
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="app-header__mobile-menu">
                    <div>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="app-header__menu">
                    <span>
                        <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper">
                                <i class="fa fa-ellipsis-v fa-w-6"></i>
                            </span>
                        </button>
                    </span>
                </div>
                <div class="app-header__content">
                    
                    <div class="app-header-right">
                       
                        <div class="header-btn-lg pe-0">
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left">
                                        <div class="btn-group">
                                            <a data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                                <img width="42" class="rounded-circle" src="images/avatars/1.jpg" alt="">
                                                <i class="fa fa-angle-down ms-2 opacity-8"></i>
                                            </a>
                                            <div tabindex="-1" role="menu" aria-hidden="true"
                                                class="rm-pointers dropdown-menu-lg dropdown-menu dropdown-menu-right">
                                                <div class="dropdown-menu-header">
                                                    <div class="dropdown-menu-header-inner bg-info">
                                                        <div class="menu-header-image opacity-2" style="background-image: url('images/dropdown-header/city3.jpg');"></div>
                                                        <div class="menu-header-content text-start">
                                                            <div class="widget-content p-0">
                                                                <div class="widget-content-wrapper">
                                                                    <div class="widget-content-left me-3">
                                                                        <img width="42" class="rounded-circle"
                                                                            src="images/avatars/1.jpg"  alt="">
                                                                    </div>
                                                                    <div class="widget-content-left">
                                                                        <div class="widget-heading">Alina Mcloughlin</div>
                                                                        <div class="widget-subheading opacity-8">A short profile description</div>
                                                                    </div>
                                                                    <div class="widget-content-right me-2">
                                                                        <button class="btn-pill btn-shadow btn-shine btn btn-focus">Logout</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="scroll-area-xs" style="height: 150px;">
                                                    <div class="scrollbar-container ps">
                                                        <ul class="nav flex-column">
                                                            <li class="nav-item-header nav-item">Activity</li>
                                                            <li class="nav-item">
                                                                <a href="javascript:void(0);" class="nav-link">
                                                                    Chat
                                                                    <div class="ms-auto badge rounded-pill bg-info">8</div>
                                                                </a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a href="javascript:void(0);" class="nav-link">Recover Password</a>
                                                            </li>
                                                            <li class="nav-item-header nav-item">
                                                                My Account
                                                            </li>
                                                            <li class="nav-item">
                                                                <a href="javascript:void(0);" class="nav-link">
                                                                    Settings
                                                                    <div class="ms-auto badge bg-success">New</div>
                                                                </a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a href="javascript:void(0);" class="nav-link">
                                                                    Messages
                                                                    <div class="ms-auto badge bg-warning">512</div>
                                                                </a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a href="javascript:void(0);" class="nav-link">Logs</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <ul class="nav flex-column">
                                                    <li class="nav-item-divider mb-0 nav-item"></li>
                                                </ul>
                                                <div class="grid-menu grid-menu-2col">
                                                    <div class="g-0 row">
                                                        <div class="col-sm-6">
                                                            <button class="btn-icon-vertical btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-warning">
                                                                <i class="pe-7s-chat icon-gradient bg-amy-crisp btn-icon-wrapper mb-2"></i>
                                                                Message Inbox
                                                            </button>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <button class="btn-icon-vertical btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-danger">
                                                                <i class="pe-7s-ticket icon-gradient bg-love-kiss btn-icon-wrapper mb-2"></i>
                                                                <b>Support Tickets</b>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul class="nav flex-column">
                                                    <li class="nav-item-divider nav-item"></li>
                                                    <li class="nav-item-btn text-center nav-item">
                                                        <button class="btn-wide btn btn-primary btn-sm"> Open Messages</button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-content-left  ms-3 header-user-info">
                                        <div class="widget-heading"> Alina Mclourd</div>
                                        <div class="widget-subheading"> VP People Manager</div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
           
            <div class="app-main">
               
                    @include('layouts.sidemenu')
               
                <div class="app-main__outer">
                     @yield('content')
                    @include('layouts.footer')
                </div>
            </div>
        </div>
       
        <div class="app-drawer-overlay d-none animated fadeIn"></div>
        <!-- plugin dependencies -->
         <!-- plugin dependencies -->
         <script type="text/javascript" src="{{url('ui/vendors/jquery/dist/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{url('ui/vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
        <script type="text/javascript" src="{{url('ui/vendors/moment/moment.js')}}"></script>
        <script type="text/javascript" src="{{url('ui/vendors/metismenu/dist/metisMenu.js')}}"></script>
        <script type="text/javascript" src="{{url('ui/vendors/bootstrap4-toggle/js/bootstrap4-toggle.min.js')}}"></script>
        <script type="text/javascript" src="{{url('ui/vendors/jquery-circle-progress/dist/circle-progress.min.js')}}"></script>
        <script type="text/javascript" src="{{url('ui/vendors/perfect-scrollbar/dist/perfect-scrollbar.min.js')}}"></script>
        <script type="text/javascript" src="{{url('ui/vendors/toastr/build/toastr.min.js')}}"></script>
        <script type="text/javascript" src="{{url('ui/vendors/jquery.fancytree/dist/jquery.fancytree-all-deps.min.js')}}"></script>
        <script type="text/javascript" src="{{url('ui/vendors/apexcharts/dist/apexcharts.min.js')}}"></script>
        <script type="text/javascript" src="{{url('ui/vendors/smartwizard/dist/js/jquery.smartWizard.min.js')}}"></script>
        <!-- custome.js -->
        <script type="text/javascript" src="{{url('ui/js/charts/apex-charts.js')}}"></script>
        <script type="text/javascript" src="{{url('ui/js/circle-progress.js')}}"></script>
        <script type="text/javascript" src="{{url('ui/js/demo.js')}}"></script>
        <script type="text/javascript" src="{{url('ui/js/scrollbar.js')}}"></script>
        <script type="text/javascript" src="{{url('ui/js/toastr.js')}}"></script>
        <script type="text/javascript" src="{{url('ui/js/treeview.js')}}"></script>
        <script type="text/javascript" src="{{url('ui/js/form-components/toggle-switch.js')}}"></script>
        <script type="text/javascript" src="{{url('ui/js/form-components/form-wizard.js')}}"></script>
        <script type="text/javascript" src="{{url('ui/js/app.js')}}"></script>
    </body>
</html>
