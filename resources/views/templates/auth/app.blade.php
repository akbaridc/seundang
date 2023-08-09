@include('templates.includes.__head')


<body>

    <div class="auth-page-wrapper pt-5">
        <!-- auth page bg -->
        <div class="auth-one-bg-position" id="auth-particles" style="background: radial-gradient(#8b8383, transparent)">
            <div class="bg-overlay"></div>

            <div class="shape">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="0 0 1440 120">
                    <path d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z"></path>
                </svg>
            </div>
        </div>

        <!-- auth page content -->
        <div class="auth-page-content">
            <div class="container">
                <!-- content -->
                @yield('content')
                <!-- end content -->
            </div>

        </div>
        <!-- end auth page content -->

        <!-- footer -->
        @include('templates.includes.__footer-created')
        <!-- end Footer -->
    </div>
    <!-- end auth-page-wrapper -->

    @include('templates.includes.__vendor-scripts')
</body>

</html>
