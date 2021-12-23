<!DOCTYPE html>
<html>
<head>
    @include('components.frontend.meta')
    
    <title>{{ $title ?? 'SI-ALDO' }}</title>

    @stack('before-style')

    @include('components.frontend.style')

    @stack('after-style')

</head>
<body>
    <noscript>You need to enable JavaScript to run this app.</noscript>


    @yield('header')

    @yield('content')

    @yield('faq')
        
    @yield('footer')

    @stack('before-script')

        @include('components.frontend.script')
    
    @stack('after-script')

    
</body>
</html>