@include('templates.backend.includes.__header')

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        @include('templates.backend.includes.__navbar')

        @include('templates.backend.includes.__sidebar')

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">
                    @include('templates.backend.includes.__breadcumb')

                    @yield('content')

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            @include('templates.backend.includes.__footer')
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    @include('templates.backend.includes.__vendor-script')
</body>

</html>
