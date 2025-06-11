<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>
      <title>Serviamus Foundation, Inc.</title>
    @vite('resources/css/app.css')
    <link rel="icon" type="image/png" href="{{ asset('system_img/sfilogo.png') }}">

</head>

<body class="bg-gray-100">
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