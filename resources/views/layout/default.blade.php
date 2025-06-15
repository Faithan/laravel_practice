<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>
    <title>Serviamus Foundation, Inc.</title>
    @vite('resources/css/app.css')
    <link rel="icon" type="image/png" href="{{ asset('system_img/sfilogo.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/nprogress/0.2.0/nprogress.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/nprogress/0.2.0/nprogress.min.js"></script>


    {{-- manually added --}}
    <script src="{{ asset('resources/js/scroll-animation.js') }}"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Start the progress bar
            NProgress.start();

            // Simulate page load completion
            window.onload = function () {
                NProgress.done();
            };
        });
    </script>
</head>

<body class="bg-gray-100">

    <!-- filepath: d:\laravel_practice\resources\views\index.blade.php -->


    <!-- Navigation -->
    @include('partials.nav')

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    @include('partials.footer')

    <!-- Scripts -->
    @vite('resources/js/app.js')
</body>

</html>