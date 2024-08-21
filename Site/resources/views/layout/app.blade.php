<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="{{URL::asset('assets/images/favicon/2.png')}}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{URL::asset('assets/images/favicon/2.png')}}" />
    <meta name="theme-color" content="#e22454" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="apple-mobile-web-app-title" content="Voxo" />
    <meta name="msapplication-TileImage" content="{{URL::asset('assets/images/favicon/2.png')}}" />
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Voxo">
    <meta name="keywords" content="Voxo">
    <meta name="author" content="Voxo">
    <link rel="icon" href="{{URL::asset('assets/images/favicon/2.png')}}" type="image/x-icon" />
    <title>Index</title>

    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&amp;display=swap" rel="stylesheet">

    <!-- bootstrap css -->
    <link id="rtl-link" rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/vendors/bootstrap.css')}}">

    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/vendors/font-awesome.css')}}">

    <!-- feather icon css -->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/vendors/feather-icon.css')}}">

    <!-- animation css -->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/vendors/animate.css')}}">

    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/vendors/slick/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/vendors/slick/slick-theme.css')}}">

    <!-- Theme css -->
    <link id="color-link" rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/demo2_dark.css')}}">

</head>

<body class="theme-color2 ltr dark" style="--theme-color:#4b3e8e;">
   <!-- header start -->
   <header class="header-style-2" id="home">
      <div class="main-header navbar-searchbar">
         <div class="container-fluid-lg">
            <div class="row">
               <div class="col-lg-12 text-center">
                  <div class="main-menu">
                     <div class="menu-center">
                        <div class="brand-logo">
                           <a href="{{route('home')}}">
                              <img src="{{URL::asset('assets/images/logo.png')}}" class="img-fluid blur-up lazyload" style="width:120px;" alt="logo">
                           </a>
                        </div>
                     </div>
                     <div class="menu-right">
                         <ul>
                             @yield('cart_data')
                         </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </header>
   <!-- header end -->
   <!-- mobile fix menu start -->
   <!-- mobile fix menu end -->
	 @yield('content')
   <!-- footer start -->
   <footer class="footer-sm-space">
      <div class="main-footer">
         <div class="container">
            <div class="row gy-4">
               <div class="col-xl-12 col-lg-12 col-md-12 text-center">
                  <div class="footer-contact">
                     <div class="brand-logo">
                        <a href="{{route('home')}}" class="footer-logo">
                           <img src="{{URL::asset('assets/images/logo.png')}}" class="img-fluid blur-up lazyload" alt="logo">
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="sub-footer">
         <div class="container">
            <div class="row gy-3">
               <div class="col-md-12">
                  <p class="mb-0 font-dark text-center">© 2022, food Stamp Pakistan</p>
               </div>
            </div>
         </div>
      </div>
   </footer>
   <!-- footer end -->
   <!-- tap to top Section Start -->
   <div class="tap-to-top">
      <a href="#home">
      <i class="fas fa-chevron-up"></i>
      </a>
   </div>
   <!-- tap to top Section End -->
   <div class="bg-overlay"></div>
   <!-- latest jquery-->
   <script src="{{URL::asset('assets/js/jquery-3.5.1.min.js')}}"></script>
   <!-- Bootstrap js-->
   <script src="{{URL::asset('assets/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
   <!-- feather icon js-->
   <script src="{{URL::asset('assets/js/feather/feather.min.js')}}"></script>
   <!-- lazyload js-->
   <script src="{{URL::asset('assets/js/lazysizes.min.js')}}"></script>
   <!-- Slick js-->
   <script src="{{URL::asset('assets/js/slick/slick.js')}}"></script>
   <script src="{{URL::asset('assets/js/slick/slick-animation.min.js')}}"></script>
   <script src="{{URL::asset('assets/js/slick/custom_slick.js')}}"></script>
   <!-- newsletter js -->
   <script src="{{URL::asset('assets/js/newsletter.js')}}"></script>
   <!-- notify js -->
   <script src="{{URL::asset('assets/js/bootstrap/bootstrap-notify.min.js')}}"></script>
   <script src="{{URL::asset('assets/js/script.js')}}"></script>
   @yield('customJS')
</body>
</html>
