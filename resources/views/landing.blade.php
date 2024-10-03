<!-- resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>N.U.E Offshore Resources Ltd</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"> <!-- Tailwind CDN -->
</head>
<body class="bg-gray-900 text-white">
    <!-- Hero Section -->
    <div class="relative h-screen bg-cover bg-center" style="background-image: url('{{ asset('images/hero-background.jpg') }}');">
        <!-- Navigation -->
        <nav class="absolute top-0 left-0 w-full flex justify-between items-center px-8 py-4 bg-transparent">
            <div class="logo">
                <img src="{{ asset('images/logo.png') }}" alt="Company Logo" class="h-12"> <!-- Logo here -->
            </div>
            <ul class="flex space-x-8">
                <li><a href="#" class="text-white text-lg hover:text-red-500">Home</a></li>
                <li><a href="#" class="text-white text-lg hover:text-red-500">About</a></li>
                <li><a href="#" class="text-white text-lg hover:text-red-500">Services</a></li>
                <li><a href="#" class="text-white text-lg hover:text-red-500">Careers</a></li>
                <li><a href="#" class="text-white text-lg hover:text-red-500">PPE</a></li>
                <li><a href="#" class="bg-red-600 hover:bg-red-700 text-white px-6 py-2 rounded-full text-lg">Contact</a></li>
            </ul>
        </nav>

        <!-- Hero Content -->
        <div class="flex flex-col justify-center items-center h-full text-center">
            <h1 class="text-5xl md:text-6xl font-bold mb-4">WELCOME TO N.U.E OFFSHORE RESOURCES LTD</h1>
            <p class="text-xl md:text-2xl mb-8">Expanding the frontiers with exceeding grace</p>
        </div>

        <!-- Upcut Shape at the Bottom -->
        <div class="absolute bottom-0 left-0 w-full">
            <svg class="w-full h-20" viewBox="0 0 1440 320">
                <path fill="#1F2937" fill-opacity="1" d="M0,320L1440,0L1440,320L0,320Z"></path>
            </svg>
        </div>

        <!-- Certifications (Lower Corner) -->
        <div class="absolute bottom-0 left-0 right-0 flex justify-center mb-8 space-x-4">
            <img src="{{ asset('images/bimco.png') }}" alt="BIMCO" class="h-12">
            <img src="{{ asset('images/cert1.png') }}" alt="Certification 1" class="h-12">
            <img src="{{ asset('images/cert2.png') }}" alt="Certification 2" class="h-12">
            <img src="{{ asset('images/cert3.png') }}" alt="Certification 3" class="h-12">
        </div>
    </div>
</body>
</html>
