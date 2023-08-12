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
<script src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

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

<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).on("input", ".numeric", function(event) {
            this.value = this.value.replace(/[^\d.]+/g, '');
        });
    })

    const Toast = Swal.mixin({
        toast: true,
        position: "top-end",
        showConfirmButton: false,
        timer: 3000,
        didOpen: (toast) => {
            toast.addEventListener("mouseenter", Swal.stopTimer);
            toast.addEventListener("mouseleave", Swal.resumeTimer);
        },
    });

    const message = (msg, msgtext, msgtype) => {
        Swal.fire(msg, msgtext, msgtype);
    }

    const messageTopRight = (type, msg) => {
        Toast.fire({
            icon: type,
            title: msg,
        });
    }

    const postData = async (url = '', data = {}, type, callbackSuccess, disabledButtonAction = "", multipartFormdata =
        "") => {
        const showLoading = (condition, params = 0) => {
            disabledButtonAction !== "" ? $(disabledButtonAction).prop("disabled", condition) : '';
            Swal.fire({
                title: '<div class="spinner-border" role="status"></div> <span>Loading ...</span>',
                timerProgressBar: false,
                showConfirmButton: false,
                allowOutsideClick: false,
                timer: params
            });
        }
        showLoading(true)

        if (type === "GET") {
            await fetch(url).then((response) => {
                if (response.ok) return response.json();
                throw new Error('Something went wrong');
            }).then((data) => {
                showLoading(false, 10)
                callbackSuccess(data)
            }).catch((error) => {
                showLoading(false, 10)
                message("Error", error, 'error')
            });
        }

        if (type === "POST") {
            if (multipartFormdata === "") {
                await fetch(url, {
                    method: type,
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(data)
                }).then((response) => {
                    if (response.ok) return response.json();
                    throw new Error(`${response.status} ${response.statusText}`);
                }).then((data) => {
                    showLoading(false, 10)
                    callbackSuccess(data)
                }).catch((error) => {
                    showLoading(false, 10)
                    message("Error", error.message, 'error')
                });
            }

            if (multipartFormdata === "multipart-formdata") {
                await fetch(url, {
                    method: type,
                    body: data.formData
                }).then((response) => {
                    if (response.ok) return response.json();
                    throw new Error(`${response.status} ${response.statusText}`);
                }).then((data) => {
                    showLoading(false, 10)
                    callbackSuccess(data)
                }).catch((error) => {
                    showLoading(false, 10)
                    message("Error", error.message, 'error')
                });
            }

            if (multipartFormdata !== "" && multipartFormdata !== "multipart-formdata") return message("Error!",
                'If you upload file, parameter the last must be <strong>multipart-formdata</strong>',
                'error')

        }
    }

    const messageBoxBeforeRequest = (textMessage, textButtonConfirm, textButtonCancel) => {
        return Swal.fire({
            title: "Apakah anda yakin?",
            text: textMessage,
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: textButtonConfirm,
            cancelButtonText: textButtonCancel
        })
    }
</script>


@if (isset($extendsJs))
    @foreach ($extendsJs as $value)
        <script src="{{ $value }}"></script>
    @endforeach
@endif

<script src="{{ asset('assets/template') }}/js/app.js"></script>

@yield('script')
@stack('script')
