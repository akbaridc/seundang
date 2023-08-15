<!-- JAVASCRIPT -->
<script src="{{ asset('assets/template') }}/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('assets/template') }}/libs/simplebar/simplebar.min.js"></script>
<script src="{{ asset('assets/template') }}/libs/node-waves/waves.min.js"></script>
<script src="{{ asset('assets/template') }}/libs/feather-icons/feather.min.js"></script>
<script src="{{ asset('assets/template') }}/js/pages/plugins/lord-icon-2.1.0.js"></script>
<!-- Jquery -->
<script src="{{ asset('assets/template') }}/libs/jquery/dist/jquery.min.js"></script>
<!-- Sweet Alerts js -->
<script src="{{ asset('assets/template') }}/libs/sweetalert2/sweetalert2.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>>
<script src="{{ asset('assets/template') }}/js/pages/datatables.init.js"></script>

<!-- quill js -->
<script src="{{ asset('assets/template') }}/libs/quill/quill.min.js"></script>


@if (Session::get('success'))
    <script>
        Toast.fire({
            icon: 'success',
            title: "{{ Session::get('success') }}",
        });
    </script>
@endif
@if (Session::get('error'))
    <script>
        Toast.fire({
            icon: 'error',
            title: "{{ Session::get('error') }}",
        });
    </script>
@endif
@if (Session::get('warning'))
    <script>
        Toast.fire({
            icon: 'warning',
            title: "{{ Session::get('warning') }}",
        });
    </script>
@endif
@if (Session::get('info'))
    <script>
        Toast.fire({
            icon: 'info',
            title: "{{ Session::get('info') }}",
        });
    </script>
@endif

@include('templates.backend.includes.__extendAdditionJs')

@if (isset($extendsJs))
    @foreach ($extendsJs as $value)
        <script src="{{ $value }}"></script>
    @endforeach
@endif

<script src="{{ asset('assets/template') }}/js/app.js"></script>

@yield('script')
@stack('script')
