<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
      data-sidebar-image="none">

<head>
    <meta charset="utf-8"/>
    <title>COUNCIL - Administration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description"/>
    <meta content="Themesbrand" name="author"/>
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('administration/assets/images/favicon.ico')}}">

    <!-- Sweet Alert css-->
    <link href="{{asset('administration/assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css"/>

    <!-- Layout config Js -->
    <script src="{{asset('administration/assets/js/layout.js')}}"></script>
    <!-- Bootstrap Css -->
    <link href="{{asset('administration/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <!-- Icons Css -->
    <link href="{{asset('administration/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css"/>
    <!-- App Css-->
    <link href="{{asset('administration/assets/css/app.min.css')}}" rel="stylesheet" type="text/css"/>
    <!-- custom Css-->
    <link href="{{asset('administration/assets/css/custom.min.css')}}" rel="stylesheet" type="text/css"/>
    @stack('head')
</head>

<body>

<!-- Begin page -->

<div id="layout-wrapper">

    <header id="page-topbar">
        <div class="layout-width">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box horizontal-logo">
                        <a href="{{url('/')}}" class="logo logo-dark">
                            {{--<span class="logo-sm">
                                <img src="administration/assets/images/logo-sm.png" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="administration/assets/images/logo-dark.png" alt="" height="17">
                            </span>--}}
                            <span style="color: white;">COUNCIL SYSTEM</span>
                        </a>

                        <a href="{{url('/')}}" class="logo logo-light">
                            {{-- <span class="logo-sm">
                                 <img src="administration/assets/images/logo-sm.png" alt="" height="22">
                             </span>
                            <span class="logo-lg">
                                 <img src="administration/assets/images/logo-light.png" alt="" height="17">
                             </span>--}}

                            <span style="color: white;">COUNCIL SYSTEM</span>
                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger"
                            id="topnav-hamburger-icon">
                    <span class="hamburger-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                    </button>

                    <!-- App Search-->
                    <form class="app-search d-none d-md-block">
                        <div class="position-relative">
                            <input type="text" class="form-control" placeholder="Search..." autocomplete="off"
                                   id="search-options" value="">
                            <span class="mdi mdi-magnify search-widget-icon"></span>
                            <span class="mdi mdi-close-circle search-widget-icon search-widget-icon-close d-none"
                                  id="search-close-options"></span>
                        </div>
                        <div class="dropdown-menu dropdown-menu-lg" id="search-dropdown">
                            <div data-simplebar style="max-height: 320px;">
                                <!-- item-->
                                <div class="dropdown-header">
                                    <h6 class="text-overflow text-muted mb-0 text-uppercase">Recent Searches</h6>
                                </div>

                                <div class="dropdown-item bg-transparent text-wrap">
                                    <a href="{{url('/')}}" class="btn btn-soft-secondary btn-sm btn-rounded">how to
                                        setup
                                        <i
                                            class="mdi mdi-magnify ms-1"></i></a>
                                    <a href="{{url('/')}}" class="btn btn-soft-secondary btn-sm btn-rounded">buttons <i
                                            class="mdi mdi-magnify ms-1"></i></a>
                                </div>
                                <!-- item-->
                                <div class="dropdown-header mt-2">
                                    <h6 class="text-overflow text-muted mb-1 text-uppercase">Pages</h6>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="ri-bubble-chart-line align-middle fs-18 text-muted me-2"></i>
                                    <span>Analytics Dashboard</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="ri-lifebuoy-line align-middle fs-18 text-muted me-2"></i>
                                    <span>Help Center</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="ri-user-settings-line align-middle fs-18 text-muted me-2"></i>
                                    <span>My account settings</span>
                                </a>

                                <!-- item-->
                                <div class="dropdown-header mt-2">
                                    <h6 class="text-overflow text-muted mb-2 text-uppercase">Members</h6>
                                </div>

                                <div class="notification-list">
                                    <!-- item -->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                                        <div class="d-flex">
                                            <img src="administration/assets/images/users/avatar-2.jpg"
                                                 class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                            <div class="flex-1">
                                                <h6 class="m-0">Angela Bernier</h6>
                                                <span class="fs-11 mb-0 text-muted">Manager</span>
                                            </div>
                                        </div>
                                    </a>
                                    <!-- item -->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                                        <div class="d-flex">
                                            <img src="administration/assets/images/users/avatar-3.jpg"
                                                 class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                            <div class="flex-1">
                                                <h6 class="m-0">David Grasso</h6>
                                                <span class="fs-11 mb-0 text-muted">Web Designer</span>
                                            </div>
                                        </div>
                                    </a>
                                    <!-- item -->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                                        <div class="d-flex">
                                            <img src="administration/assets/images/users/avatar-5.jpg"
                                                 class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                            <div class="flex-1">
                                                <h6 class="m-0">Mike Bunch</h6>
                                                <span class="fs-11 mb-0 text-muted">React Developer</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="text-center pt-3 pb-1">
                                <a href="pages-search-results.html" class="btn btn-primary btn-sm">View All Results <i
                                        class="ri-arrow-right-line ms-1"></i></a>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="d-flex align-items-center">

                    <div class="dropdown d-md-none topbar-head-dropdown header-item">
                        <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                                id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                            <i class="bx bx-search fs-22"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                             aria-labelledby="page-header-search-dropdown">
                            <form class="p-3">
                                <div class="form-group m-0">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search ..."
                                               aria-label="Recipient's username">
                                        <button class="btn btn-primary" type="submit"><i
                                                class="mdi mdi-magnify"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>


                    <div class="ms-1 header-item d-none d-sm-flex">
                        <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                                data-toggle="fullscreen">
                            <i class='bx bx-fullscreen fs-22'></i>
                        </button>
                    </div>

                    <div class="ms-1 header-item d-none d-sm-flex">
                        <button type="button"
                                class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle light-dark-mode">
                            <i class='bx bx-moon fs-22'></i>
                        </button>
                    </div>


                    <div class="dropdown ms-sm-3 header-item topbar-user">
                        <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                        <span class="d-flex align-items-center">
                            <span class="text-start ms-xl-2">
                                <span
                                    class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">Administrator</span>
                                <span
                                    class="d-none d-xl-block ms-1 fs-12 text-muted user-name-sub-text">COUNCIL SYSTEM</span>
                            </span>
                        </span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <h6 class="dropdown-header">Welcome Admin!</h6>
                            <a class="dropdown-item" href="pages-profile.html"><i
                                    class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span
                                    class="align-middle">Profile</span></a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i
                                    class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span
                                    class="align-middle" data-key="t-logout">Logout</span></a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ========== App Menu ========== -->
    <div class="app-menu navbar-menu">
        <!-- LOGO -->
        <div class="navbar-brand-box">
            <!-- Dark Logo-->
            <a href="{{url('/')}}" class="logo logo-dark">
                {{--<span class="logo-sm">
                    <img src="administration/assets/images/logo-sm.png" alt="" height="22">
                </span>
                <span class="logo-lg">
                    <img src="administration/assets/images/logo-dark.png" alt="" height="17">
                </span>--}}

                <span style="color: white;">WEBSITE ADMIN</span>
            </a>
            <!-- Light Logo-->
            <a href="{{url('/')}}" class="logo logo-light">
                {{-- <span class="logo-sm">
                     <img src="administration/assets/images/logo-sm.png" alt="" height="22">
                 </span>
                <span class="logo-lg">
                     <img src="administration/assets/images/logo-light.png" alt="" height="17">
                 </span>--}}
                <span style="color: white;"> ADMINISTARTOR  </span>
            </a>
            <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
                    id="vertical-hover">
                <i class="ri-record-circle-line"></i>
            </button>
        </div>
        <!-- LOGO -->

        <!-- SIDEBARD -->
        <div id="scrollbar">
            <div class="container-fluid">

                <div id="two-column-menu">
                </div>
                <ul class="navbar-nav" id="navbar-nav">
                    <li class="menu-title"><span data-key="t-menu" style="color: white;">ADMINISTRATION</span></li>
                    <!-- utilities -->
                    <li class="nav-item">
                        <a style="text-transform: capitalize" class="nav-link menu-link collapsed" href="#sidebarDashboards" data-bs-toggle="collapse"
                           role="button"
                           aria-expanded="false" aria-controls="sidebarDashboards">
                             <span data-key="t-dashboards">ABOUT US</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarDashboards">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="{{url('/admin/registrar')}}" style="text-transform: capitalize" class="nav-link {{(request()->is('admin/professions*')) ? 'active' : '' }}" data-key="t-analytics">
                                        REGISTRAR </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('/admin/who_we_are')}}" style="text-transform: capitalize" class="nav-link {{(request()->is('admin/professions*')) ? 'active' : '' }}" data-key="t-analytics">
                                        WHO WE ARE </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('/admin/what_we_do')}}" style="text-transform: capitalize" class="nav-link {{(request()->is('admin/profession_qualifications*')) ? 'active' : '' }}"
                                       data-key="t-ecommerce"> WHAT WE DO</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('/admin/strategic_goal')}}" style="text-transform: capitalize" class="nav-link {{(request()->is('admin/strategic_goal*')) ? 'active' : '' }}"
                                       data-key="t-ecommerce"> STRATEGIC GOALS</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('/admin/our_history')}}" style="text-transform: capitalize" class="nav-link {{(request()->is('admin/registers*')) ? 'active' : '' }}" data-key="t-crypto">
                                        OUR HISTORY </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('/admin/council_structure')}}" style="text-transform: capitalize" class="nav-link {{(request()->is('admin/council_structure*')) ? 'active' : '' }}" data-key="t-crypto">
                                        COUNCIL STRUCTURE </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{url('/admin/council_member')}}" style="text-transform: capitalize" class="nav-link {{(request()->is('admin/qualification_categories*')) ? 'active' : '' }}" data-key="t-crypto">
                                        COUNCIL MEMBERS </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{url('/admin/committee')}}" style="text-transform: capitalize" class="nav-link {{(request()->is('admin/requirement_categories*')) ? 'active' : '' }}" data-key="t-crypto">
                                        COMMITTEES </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <!-- REGISTRATION -->
                    <li class="nav-item">
                        <a style="text-transform: capitalize" class="nav-link menu-link collapsed" href="#payment_utilities" data-bs-toggle="collapse"
                           role="button"
                           aria-expanded="false" aria-controls="payment_utilities">
                             <span data-key="t-dashboards">REGISTRATION</span>
                        </a>
                        <div class="collapse menu-dropdown" id="payment_utilities">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="{{url('/admin/registration_pathway')}}" style="text-transform: capitalize" class="nav-link {{(request()->is('admin/registration_pathway*')) ? 'active' : '' }}" data-key="t-analytics">
                                        REGISTRATION PATHWAYS </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{url('/admin/form_category')}}" style="text-transform: capitalize" class="nav-link {{(request()->is('admin/form_category*')) ? 'active' : '' }}" data-key="t-analytics">
                                        REGISTRATION FORMS </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{url('/admin/banking_detail')}}" style="text-transform: capitalize" class="nav-link {{(request()->is('admin/banking_detail*')) ? 'active' : '' }}" data-key="t-analytics">
                                        BANKING DETAILS </a>
                                </li>


                                <li class="nav-item">
                                    <a href="{{url('/admin/designated_institution')}}" style="text-transform: capitalize" class="nav-link {{(request()->is('admin/designated_institution*')) ? 'active' : '' }}" data-key="t-analytics">
                                        DESIGNATED HEALTH INSTITUTION </a>
                                </li>

                            </ul>
                        </div>
                    </li>

                    <!-- the education -->
                    <li class="nav-item">
                        <a style="text-transform: capitalize" class="nav-link menu-link collapsed" href="#statuses_utilities" data-bs-toggle="collapse"
                           role="button"
                           aria-expanded="false" aria-controls="statuses_utilities">
                            <span data-key="t-dashboards">EDUCATION</span>
                        </a>
                        <div class="collapse menu-dropdown" id="statuses_utilities">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="{{url('/admin/exam')}}" style="text-transform: capitalize" class="nav-link {{(request()->is('admin/exam*')) ? 'active' : '' }}" data-key="t-analytics">
                                        COUNCIL EXAMINATION </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{url('/admin/fitness_practice')}}" style="text-transform: capitalize" class="nav-link {{(request()->is('admin/fitness_practice*')) ? 'active' : '' }}" data-key="t-analytics">
                                        FITNESS TO PRACTICE </a>
                                </li>


                                <li class="nav-item">
                                    <a href="{{url('/admin/training_institution')}}" style="text-transform: capitalize" class="nav-link {{(request()->is('admin/training_institution*')) ? 'active' : '' }}" data-key="t-analytics">
                                   APPROVED TRAINING INSTITUTIONS</a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{url('/admin/internship_institution')}}" style="text-transform: capitalize" class="nav-link {{(request()->is('admin/internship_institution*')) ? 'active' : '' }}" data-key="t-analytics">
                                        INTERNSHIP TRAINING INSTITUTIONS </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{url('/admin/log_book')}}" style="text-transform: capitalize" class="nav-link {{(request()->is('admin/log_book*')) ? 'active' : '' }}" data-key="t-analytics">
                                        LOG BOOKS</a>
                                </li>

                            </ul>
                        </div>
                    </li>

                    <!-- Policies and Guidelines -->
                    <li class="nav-item">
                        <a style="text-transform: capitalize" class="nav-link menu-link" href="{{url('/admin/internal_policy')}}" role="button" aria-expanded="false" aria-controls="statuses_utilities">
                            <span data-key="t-dashboards">INTERNAL POLICIES</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a style="text-transform: capitalize" class="nav-link menu-link" href="{{url('/admin/external_policy')}}" role="button" aria-expanded="false" aria-controls="statuses_utilities">
                            <span data-key="t-dashboards">EXTERNAL POLICIES </span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a style="text-transform: capitalize" class="nav-link menu-link" href="{{url('/admin/act')}}" role="button" aria-expanded="false" aria-controls="statuses_utilities">
                            <span data-key="t-dashboards">ACTS </span>
                        </a>
                    </li>


                    <!-- the public -->
                    <li class="nav-item">
                        <a style="text-transform: capitalize" class="nav-link menu-link collapsed" href="#contact_utilities" data-bs-toggle="collapse"
                           role="button"
                           aria-expanded="false" aria-controls="contact_utilities">
                            <span data-key="t-dashboards">THE PUBLIC</span>
                        </a>
                        <div class="collapse menu-dropdown" id="contact_utilities">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="{{url('/admin/complaint')}}" style="text-transform: capitalize" class="nav-link {{(request()->is('admin/restorations*')) ? 'active' : '' }}"
                                       data-key="t-ecommerce"> COMPLAINTS</a>
                                </li>

                               {{-- <li class="nav-item">
                                    <a href="{{url('/admin/online_services')}}" style="text-transform: capitalize" class="nav-link {{(request()->is('admin/payment_categories*')) ? 'active' : '' }}" data-key="t-analytics">
                                        ONLINE SERVICES </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{url('/admin/registered_doctors')}}" style="text-transform: capitalize" class="nav-link {{(request()->is('admin/payment_categories*')) ? 'active' : '' }}" data-key="t-analytics">
                                        REGISTERED DOCTORS </a>
                                </li>--}}

                                <li class="nav-item">
                                    <a href="{{url('/admin/our_resource')}}" style="text-transform: capitalize" class="nav-link {{(request()->is('admin/our_resource*')) ? 'active' : '' }}" data-key="t-analytics">
                                        RESOURCES </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('/admin/newsletter')}}" style="text-transform: capitalize" class="nav-link {{(request()->is('admin/newsletter*')) ? 'active' : '' }}" data-key="t-analytics">
                                        NEWSLETTER </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('/admin/important_link')}}" style="text-transform: capitalize" class="nav-link {{(request()->is('admin/important_link*')) ? 'active' : '' }}" data-key="t-analytics">
                                        QUICK LINKS </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a style="text-transform: capitalize" class="nav-link menu-link collapsed" href="#faqs" data-bs-toggle="collapse"
                           role="button"
                           aria-expanded="false" aria-controls="faqs">
                            <span data-key="t-dashboards">FAQs</span>
                        </a>
                        <div class="collapse menu-dropdown" id="faqs">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="{{url('/admin/faq_category')}}" style="text-transform: capitalize" class="nav-link {{(request()->is('admin/faq_category*')) ? 'active' : '' }}"
                                       data-key="t-ecommerce"> FAQs CATEGORIES</a>
                                </li>

                            </ul>
                        </div>
                    </li>



                    <!-- contact us -->
                    <li class="nav-item">
                        <a style="text-transform: capitalize" class="nav-link menu-link collapsed" href="#reports_utilities" data-bs-toggle="collapse"
                           role="button"
                           aria-expanded="false" aria-controls="reports_utilities">
                            <span data-key="t-dashboards">CONTACT US</span>
                        </a>

                    </li>


                    <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-pages">Pages</span></li>


                </ul>
            </div>
            <!-- Sidebar -->
        </div>
        <!-- SIDEBARD -->

        <div class="sidebar-background"></div>
    </div>
    <!-- Left Sidebar End -->
    <!-- Vertical Overlay-->
    <div class="vertical-overlay"></div>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

    @yield('content')
    <!-- End Page-content -->

        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>document.write(new Date().getFullYear())</script>
                        © COUNCIL.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Designed & Developed by Leading Digital
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<!--start back-to-top-->
<button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
    <i class="ri-arrow-up-line"></i>
</button>
<!--end back-to-top-->

<!-- JAVASCRIPT -->
<script src="{{asset('administration/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('administration/assets/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{asset('administration/assets/libs/node-waves/waves.min.js')}}"></script>
<script src="{{asset('administration/assets/libs/feather-icons/feather.min.js')}}"></script>
<script src="{{asset('administration/assets/js/pages/plugins/lord-icon-2.1.0.js')}}"></script>
<script src="{{asset('administration/assets/js/plugins.js')}}"></script>

<!-- list.js min js -->
<script src="{{asset('administration/assets/libs/list.js/list.min.js')}}"></script>
<script src="{{asset('administration/assets/libs/list.pagination.js/list.pagination.min.js')}}"></script>

<!-- Sweet Alerts js -->
<script src="{{asset('administration/assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>

<script src="{{asset('administration/assets/js/pages/crm-companies.init.js')}}"></script>

<!-- App js -->
<script src="{{asset('administration/assets/js/app.js')}}"></script>
@stack('scripts')

</body>

</html>
