<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, shrink-to-fit=no">
    <meta content="MyCustomer - JusticeLeague" name="description" />
    <meta content="JusticeLeague" name="author" />
    <title>MyCustomer</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/frontend/assets/img/favicon.png">

    <!-- CSS here -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="/frontend/assets/css/style.css">
    <link rel="stylesheet" href="/frontend/assets/css/header-footer.css">
    <link rel="stylesheet" href="/frontend/assets/css/index.css">
    <!-- Other Style CSS -->
    @yield('custom_css')
</head>

<body>


    <!-- Begin page -->
    <!--====================  heaer area ====================-->
    @include('partials.header')
    <!--====================  End of heaer area  ====================-->


    @yield('content')

    <!--====================  footer area ====================-->
    @include('partials.footer')
    <!--====================  End of footer area  ====================-->

    <!-- JS
============================================ -->

    <!-- Core JS here - dont touch -->
    <script src="/frontend/assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="/frontend/assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="/frontend/assets/js/popper.min.js"></script>
    <script src="/frontend/assets/js/bootstrap.min.js"></script>
    <script src="/frontend/assets/js/owl.carousel.min.js"></script>
    <script src="/frontend/assets/js/jquery.easing.min.js"></script>
    <script src="/frontend/assets/js/isotope.pkgd.min.js"></script>
    <script src="/frontend/assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="/frontend/assets/js/wow.min.js"></script>
    <script src="/frontend/assets/js/jquery.slicknav.min.js"></script>
    <script src="/frontend/assets/js/slick.min.js"></script>
    <script src="/frontend/assets/js/bundle.js"></script>

    <!-- Custom js-->
    <script src="/frontend/assets/js/main.js"></script>
    <script src="/frontend/assets/js/header-footer.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>


    @yield('javascript')

</body>

</html>
