<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Sample Application @yield('page-title', '')</title>
    <!-- favicon -->
    {{-- <link rel="shortcut icon" type="image/x-icon" href=""> --}}

    <link rel="stylesheet" href="{{ asset('auth/css/auth.css') }}">
    @stack('styles')
</head>

<body>
    <div class="align">
        @yield('auth-content')
    </div>

    @stack('scripts')
</body>

</html>
