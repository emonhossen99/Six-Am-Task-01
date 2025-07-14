<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title') - {{ env('APP_NAME') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <style>
        a{
            text-decoration: none;
        }
        .login-buttton button, .register-buttton button{
            width: 70%;
            padding: 10px 15px;
            font-weight: 600;
            background: #18182a;
            border: 1px solid #18182a;
        }

        #login-page-div, #register-page-div {
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
            padding: 50px 50px;
            border-radius: 4px;
            border: 1px solid #faebe6;
            background: #ffffff;
        }

        #login-page-section,  #register-page-section{
            background: #fbf2f2;
        }

        .main_header_logo img {
            width: 120px;
        }

        .required::after {
            content: '*';
            color: red;
        }
    </style>
    @stack('styles')
</head>

<body>
    @yield('content')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Toastr JS-->
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        function flashMessage(status, message) {
            toastr.options = {
                "closeButton": true,
                "debug": false,
                "newestOnTop": false,
                "progressBar": true,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
            switch (status) {
                case 'success':
                    toastr.success(message);
                    break;

                case 'error':
                    toastr.error(message);
                    break;

                case 'info':
                    toastr.info(message);
                    break;

                case 'warning':
                    toastr.warning(message);
                    break;
            }
        }

        @if (Session::get('success'))
            flashMessage('success', "{{ Session::get('success') }}")
        @elseif (Session::get('error'))
            flashMessage('error', "{{ Session::get('error') }}")
        @elseif (Session::get('info'))
            flashMessage('info', "{{ Session::get('info') }}")
        @elseif (Session::get('warning'))
            flashMessage('warning', "{{ Session::get('warning') }}")
        @endif
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>

</html>
