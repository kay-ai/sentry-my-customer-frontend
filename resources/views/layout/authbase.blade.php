<!DOCTYPE html>
<html lang="en">


<head>
        <meta charset="utf-8" />
        <title>mycustomer - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="MyCustomer - JusticeLeague" name="description" />
        <meta content="JusticeLeague" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="/backend/assets/images/favicon.ico">

        <!-- plugins -->
        <link href="/backend/assets/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="/backend/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="/backend/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="/backend/assets/css/app.min.css" rel="stylesheet" type="text/css" />


        <!-- Other Style CSS -->
        @yield('custom_css')


</head>

<body class="authentication-bg">

        <!-- Begin page -->
        <div id="wrapper">



            @yield('content')



        </div>

    <!-- JS
============================================ -->

   <!-- Vendor js -->
   <script src="/backend/assets/js/vendor.min.js"></script>

   <!-- optional plugins -->
   <script src="/backend/assets/libs/moment/moment.min.js"></script>
   <script src="/backend/assets/libs/apexcharts/apexcharts.min.js"></script>
   <script src="/backend/assets/libs/flatpickr/flatpickr.min.js"></script>

   <!-- page js -->
   <script src="/backend/assets/js/pages/dashboard.init.js"></script>

   <!-- App js -->
   <script src="/backend/assets/js/app.min.js"></script>



    @yield('javascript')
</body>

</html>
