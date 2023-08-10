<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-preloader="disable">

<head>
    <meta charset="utf-8" />
    <title>{{ $title }} | Velzon - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/template') }}/images/favicon.ico">

    <!-- Layout config Js -->
    <!-- <script src="{{ asset('assets/template') }}/js/layout.js"></script> -->
    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/template') }}/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets/template') }}/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets/template') }}/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ asset('assets/template') }}/css/custom.min.css" rel="stylesheet" type="text/css" />
    <!-- Sweet Alert css-->
    <link href="{{ asset('assets/template') }}/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />

    @if (isset($extendsCss))
        @foreach ($extendsCss as $value)
            <link rel="stylesheet" type="text/css" href="{{ $value }}" />
        @endforeach
    @endif
</head>
