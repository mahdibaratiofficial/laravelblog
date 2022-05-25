<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title','AdminPanel')</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('src/adminsrc/vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('src/adminsrc/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('src/adminsrc/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('/src/adminsrc/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('/src/adminsrc/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('src/adminsrc/js/select.dataTables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('src/adminsrc/css/main.css') }}" media="all">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('src/adminsrc/css/vertical-layout-light/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('src/adminsrc/images/favicon.png') }}" />
</head>

<body>

    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->

        @include('admin.layouts.header')

        <!-- partial -->

        <div class="container-fluid page-body-wrapper">

            <!-- partial:partials/_settings-panel.html -->

            @include('admin.layouts.setting')

            <!-- partial -->

            <!-- partial:partials/_sidebar.html -->

            @include('admin.layouts.sidebar')

            <!-- partial -->

            @yield('Content')

            <!-- partial:partials/_footer.html -->
            <!-- partial -->

            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->



</body>
<!-- plugins:js -->
<script src="{{ asset('src/adminsrc/vendors/js/vendor.bundle.base.js') }}"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{ asset('src/adminsrc/vendors/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('src/adminsrc/vendors/datatables.net/jquery.dataTables.js') }}"></script>
<script src="{{ asset('src/adminsrc/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
<script src="{{ asset('src/adminsrc/js/dataTables.select.min.js') }}"></script>

<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{ asset('src/adminsrc/js/off-canvas.js') }}"></script>
<script src="{{ asset('src/adminsrc/js/hoverable-collapse.js') }}"></script>
<script src="{{ asset('src/adminsrc/js/template.js') }}"></script>
<script src="{{ asset('src/adminsrc/js/settings.js') }}"></script>
<script src="{{ asset('src/adminsrc/js/todolist.js') }}"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="{{ asset('src/adminsrc/js/dashboard.js') }}"></script>
<script src="{{ asset('src/adminsrc/js/Chart.roundedBarCharts.js') }}"></script>
<!-- End custom js for this page-->

</html>