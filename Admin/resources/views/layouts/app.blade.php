<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{URL::asset('images/favicon.png')}}">
    <!-- Page Title  -->
    <title>Foodstamp Pakistan</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{URL::asset('assets/css/dashlite.css?ver=2.9.0')}}">
    <link id="skin-default" rel="stylesheet" href="{{URL::asset('assets/css/theme.css?ver=2.9.0')}}">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.1/dist/leaflet.css" />
</head>

<body class="nk-body bg-lighter npc-default has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
            <div class="nk-sidebar nk-sidebar-fixed is-light " data-content="sidebarMenu">
                <div class="nk-sidebar-element nk-sidebar-head">
                    <div class="nk-sidebar-brand">
                        <a href="{{route('dashboard')}}" class="logo-link nk-sidebar-logo">
                            <img class="logo-light logo-img" src="https://cdn5.f-cdn.com/contestentries/1208062/27174046/5a366342c17d7_thumb900.jpg" srcset="https://cdn5.f-cdn.com/contestentries/1208062/27174046/5a366342c17d7_thumb900.jpg 2x" alt="logo">
                            <img class="logo-dark logo-img" src="https://cdn5.f-cdn.com/contestentries/1208062/27174046/5a366342c17d7_thumb900.jpg" srcset="https://cdn5.f-cdn.com/contestentries/1208062/27174046/5a366342c17d7_thumb900.jpg 2x" alt="logo-dark">
                            <img class="logo-small logo-img logo-img-small" src="https://cdn5.f-cdn.com/contestentries/1208062/27174046/5a366342c17d7_thumb900.jpg" srcset="https://cdn5.f-cdn.com/contestentries/1208062/27174046/5a366342c17d7_thumb900.jpg 2x" alt="logo-small">
                        </a>
                    </div>
                    <div class="nk-menu-trigger mr-n2">
                        <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
                        <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                    </div>
                </div><!-- .nk-sidebar-element -->
                <div class="nk-sidebar-element">
                    <div class="nk-sidebar-content">
                        <div class="nk-sidebar-menu" data-simplebar>
                            <ul class="nk-menu">
                                <li class="nk-menu-item">
                                    <a href="{{route('dashboard')}}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-dashlite"></em></span>
                                        <span class="nk-menu-text">Dashboard</span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="{{route('Stamp.index')}}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-plus-medi"></em></span>
                                        <span class="nk-menu-text">Stamps</span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="{{route('Restaurant.index')}}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-plus-medi"></em></span>
                                        <span class="nk-menu-text">Restaurant</span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="{{route('Order.index')}}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-plus-medi"></em></span>
                                        <span class="nk-menu-text">Orders</span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="{{route('logout')}}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-block-over"></em></span>
                                        <span class="nk-menu-text">Sign Out</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                            </ul><!-- .nk-menu -->
                        </div><!-- .nk-sidebar-menu -->
                    </div><!-- .nk-sidebar-content -->
                </div><!-- .nk-sidebar-element -->
            </div>
            <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                <div class="nk-header nk-header-fixed is-light">
                    <div class="container-fluid">
                        <div class="nk-header-wrap">
                            <div class="nk-menu-trigger d-xl-none ml-n1">
                                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                            </div>
                            <div class="nk-header-brand d-xl-none">
                                <a href="{{route('dashboard')}}" class="logo-link">
                                    <img class="logo-light logo-img" src="https://cdn5.f-cdn.com/contestentries/1208062/27174046/5a366342c17d7_thumb900.jpg" srcset="https://cdn5.f-cdn.com/contestentries/1208062/27174046/5a366342c17d7_thumb900.jpg 2x" alt="logo">
                                    <img class="logo-dark logo-img" src="https://cdn5.f-cdn.com/contestentries/1208062/27174046/5a366342c17d7_thumb900.jpg" srcset="https://cdn5.f-cdn.com/contestentries/1208062/27174046/5a366342c17d7_thumb900.jpg 2x" alt="logo-dark">
                                </a>
                            </div><!-- .nk-header-brand -->
                            <div class="nk-header-tools">
                                <ul class="nk-quick-nav">
                                    <li class="dropdown user-dropdown">
                                        <a href="#" class="dropdown-toggle mr-n1" data-toggle="dropdown">
                                            <div class="user-toggle">
                                                <div class="user-avatar sm">
                                                    <em class="icon ni ni-user-alt"></em>
                                                </div>
                                                <div class="user-info d-none d-xl-block">
                                                    <div class="user-name dropdown-indicator">{{Auth::user()->name}}</div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="profile{{route('dashboard')}}"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                                                    <li><a href="profile{{route('dashboard')}}"><em class="icon ni ni-setting-alt"></em><span>Account Setting</span></a></li>
                                                    <li><a class="dark-switch" href="#"><em class="icon ni ni-moon"></em><span>Dark Mode</span></a></li>
                                                </ul>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="{{route('logout')}}"><em class="icon ni ni-signout"></em><span>Sign out</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div><!-- .nk-header-wrap -->
                    </div><!-- .container-fliud -->
                </div>
                <!-- main header @e -->
                <!-- content @s -->
                <div class="nk-content ">
                    {{$slot}}
                </div>
                <!-- content @e -->
                <!-- footer @s -->
                <div class="nk-footer">
                    <div class="container-fluid">
                        <div class="nk-footer-wrap">
                            <div class="nk-footer-copyright"> &copy; 2022 Foodstamp Pakistan
                            </div>

                        </div>
                    </div>
                </div>
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- JavaScript -->
    <script src="{{URL::asset('assets/js/bundle.js?ver=2.9.0')}}"></script>
    <script src="{{URL::asset('assets/js/scripts.js?ver=2.9.0')}}"></script>
    <script src='https://maps.google.com/maps/api/js?key=AIzaSyCz28tqD4fCIznGDZu5_NL9Vl7lDZZn5lw&libraries=geometry'></script>
    <script src="https://unpkg.com/leaflet@1.0.1/dist/leaflet.js"></script>
    <script src="{{URL::asset('assets/js/polyoffset.js')}}"></script>
    <script src="https://www.chartjs.org/dist/2.6.0/Chart.bundle.js"></script>
    <script src="https://www.chartjs.org/samples/2.6.0/utils.js"></script>
    @yield('customJS')
</body>

</html>
