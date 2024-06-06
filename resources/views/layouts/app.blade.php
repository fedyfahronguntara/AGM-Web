<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts & Icons -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"
    />

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/libraries/bootstrap/css/bootstrap.min.css') }}">
    @stack('style-alt')
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}" />
    <link href="{{ asset('backend/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
<link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

<!-- Custom styles for this template-->
<link href="{{ asset('backend/css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>
<body>


    @include('partials.header')

    @yield('content')

    @include('partials.footer')

    <script src="{{ asset('frontend/assets/libraries/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
    @stack('script-alt')
</body>
</html>
