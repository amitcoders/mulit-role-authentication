<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="{{ url('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link href="{{ url('assets/vendor/fonts/circular-std/style.css" rel="stylesheet') }}">
    <link rel="stylesheet" href="{{ url('assets/libs/css/style.css')}}">
    <link rel="stylesheet" href="{{ url('assets/vendor/fonts/fontawesome/css/fontawesome-all.css') }}">
    <link rel="stylesheet" href="{{ url('assets/vendor/charts/chartist-bundle/chartist.css')}}">
    <link rel="stylesheet" href="{{ url('assets/vendor/charts/morris-bundle/morris.css') }}">
    <link rel="stylesheet" href="{{ url('assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/vendor/charts/c3charts/c3.css') }}">
    <link rel="stylesheet" href="{{ url('assets/vendor/fonts/flag-icon-css/flag-icon.min.css') }}">
    <title>Laravel Amit Dashboard</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="index.html">Concept</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
            </nav>
        </div>
       
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    @yield('content')

    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="{{ url('assets/vendor/jquery/jquery-3.3.1.min.js') }}"></script>
    <!-- bootstap bundle js -->
    <script src="{{ url('assets/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
    <!-- slimscroll js -->
    <script src="{{ url('assets/vendor/slimscroll/jquery.slimscroll.js') }}"></script>
    <!-- main js -->
    <script src="{{ url('assets/libs/js/main-js.js') }}"></script>
    <!-- chart chartist js -->
    <script src="{{ url('assets/vendor/charts/chartist-bundle/chartist.min.js') }}"></script>
    <!-- sparkline js -->
    <script src="{{ url('assets/vendor/charts/sparkline/jquery.sparkline.js') }}"></script>
    <!-- morris js -->
    <script src="{{ url('assets/vendor/charts/morris-bundle/raphael.min.js') }}"></script>
    <script src="{{ url('assets/vendor/charts/morris-bundle/morris.js') }}"></script>
    <!-- chart c3 js -->
    <script src="{{ url('assets/vendor/charts/c3charts/c3.min.js') }}"></script>
    <script src="{{ url('assets/vendor/charts/c3charts/d3-5.4.0.min.js') }}"></script>
    <script src="{{ url('assets/vendor/charts/c3charts/C3chartjs.js') }}"></script>
    <script src="{{ url('assets/libs/js/dashboard-ecommerce.js') }}"></script>
</body>
 
</html>