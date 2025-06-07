<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acme Corp - Welcome</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <div class="text-2xl font-bold text-blue-700">Acme Corp</div>
            <ul class="flex space-x-6">
                <li><a href="#" class="text-gray-700 hover:text-blue-700">Home</a></li>
                <li><a href="#" class="text-gray-700 hover:text-blue-700">About</a></li>
                <li><a href="#" class="text-gray-700 hover:text-blue-700">Services</a></li>
                <li><a href="#" class="text-gray-700 hover:text-blue-700">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="container mx-auto px-4 py-16 text-center">
        <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-4">Welcome to Acme Corp</h1>
        <p class="text-lg text-gray-600 mb-8">We provide innovative solutions to help your business grow.</p>
        <a href="#" class="inline-block bg-blue-700 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-800 transition">Get Started</a>
    </section>

    <!-- Cards Section -->
    <section class="container mx-auto px-4 py-12">
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-lg shadow p-6 text-center">
                <div class="mb-4 text-blue-700">
                    <svg class="mx-auto w-12 h-12" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 8v4l3 3"></path><circle cx="12" cy="12" r="10"></circle></svg>
                </div>
                <h3 class="text-xl font-bold mb-2">Fast Delivery</h3>
                <p class="text-gray-600">We ensure quick and reliable delivery of our services.</p>
            </div>
            <div class="bg-white rounded-lg shadow p-6 text-center">
                <div class="mb-4 text-blue-700">
                    <svg class="mx-auto w-12 h-12" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M17 20h5v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2h5"></path><circle cx="12" cy="7" r="4"></circle></svg>
                </div>
                <h3 class="text-xl font-bold mb-2">Expert Team</h3>
                <p class="text-gray-600">Our team consists of experienced professionals.</p>
            </div>
            <div class="bg-white rounded-lg shadow p-6 text-center">
                <div class="mb-4 text-blue-700">
                    <svg class="mx-auto w-12 h-12" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 20l9-5-9-5-9 5 9 5z"></path><path d="M12 12V4"></path></svg>
                </div>
                <h3 class="text-xl font-bold mb-2">24/7 Support</h3>
                <p class="text-gray-600">We offer round-the-clock support for our clients.</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-white shadow mt-12">
        <div class="container mx-auto px-4 py-6 text-center text-gray-500">
            &copy; {{ date('Y') }} Acme Corp. All rights reserved.
        </div>
    </footer>
</body>

</html>