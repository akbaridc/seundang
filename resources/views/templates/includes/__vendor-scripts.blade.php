<!-- JAVASCRIPT -->
<script src="{{ asset('assets/template') }}/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('assets/template') }}/libs/simplebar/simplebar.min.js"></script>
<script src="{{ asset('assets/template') }}/libs/node-waves/waves.min.js"></script>
<script src="{{ asset('assets/template') }}/libs/feather-icons/feather.min.js"></script>
<script src="{{ asset('assets/template') }}/js/pages/plugins/lord-icon-2.1.0.js"></script>
<script src="{{ asset('assets/template') }}/libs/swiper/swiper-bundle.min.js"></script>

<script src="{{ asset('assets/template') }}/js/plugins.js"></script>
@if (isset($includesJs))
    @foreach ($includesJs as $value)
        <script src="{{ $value }}"></script>
    @endforeach
@endif

@yield('script')
@stack('script')
