<!DOCTYPE html>
<html lang="en" class="{{ session('theme', '') }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>
    <title>Serviamus Foundation, Inc.</title>


    @vite('resources/css/app.css')
    @vite('resources/js/app.js')



    <link rel="icon" type="image/png" href="{{ asset('system_img/sfilogo.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/nprogress/0.2.0/nprogress.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/nprogress/0.2.0/nprogress.min.js"></script>




</head>

<body class="bg-gray-100 dark:bg-gray-950">

    {{--
    <div class="p-6">
        <h1 class="text-2xl font-bold">🌙 Tailwind Dark Mode</h1>

    </div> --}}


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