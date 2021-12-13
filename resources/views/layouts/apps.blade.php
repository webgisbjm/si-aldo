<!DOCTYPE html>
<html>
<head>
    @include('components.frontend.meta')
    
    <title>{{ $title ?? 'SI-ALDO' }}</title>

    <link rel="apple-touch-icon" href="">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/favicon/favicon-76.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('img/favicon/favicon-120.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('img/favicon/favicon-152.png') }}">
    <link rel="icon" sizes="196x196" href="{{ asset('img/favicon/favicon-196.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon/favicon.ico') }}">

    @stack('before-style')

    @include('components.frontend.style')

    @stack('after-style')

</head>
<body>
    <noscript>You need to enable JavaScript to run this app.</noscript>


    @yield('header')

    @yield('hero')

    @yield('content')

    @yield('faq')
        
    @yield('footer')

    @stack('before-script')

        @include('components.frontend.script')
    
    @stack('after-script')

    
</body>
</html>