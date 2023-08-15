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

        // Snow theme
        var snowEditor = document.querySelectorAll(".snow-editor");
        if (snowEditor) {
            Array.from(snowEditor).forEach(function(item) {
                var snowEditorData = {};
                var issnowEditorVal = item.classList.contains("snow-editor");
                if (issnowEditorVal == true) {
                    snowEditorData.theme = 'snow',
                        snowEditorData.modules = {
                            'toolbar': [
                                [{
                                    'font': []
                                }, {
                                    'size': []
                                }],
                                ['bold', 'italic', 'underline', 'strike'],
                                [{
                                    'color': []
                                }, {
                                    'background': []
                                }],
                                [{
                                    'script': 'super'
                                }, {
                                    'script': 'sub'
                                }],
                                [{
                                    'header': [false, 1, 2, 3, 4, 5, 6]
                                }, 'blockquote', 'code-block'],
                                [{
                                    'list': 'ordered'
                                }, {
                                    'list': 'bullet'
                                }, {
                                    'indent': '-1'
                                }, {
                                    'indent': '+1'
                                }],
                                ['direction', {
                                    'align': []
                                }],
                                ['link', 'image', 'video'],
                                ['clean']
                            ]
                        }
                }
                new Quill(item, snowEditorData);
            });
        }
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
