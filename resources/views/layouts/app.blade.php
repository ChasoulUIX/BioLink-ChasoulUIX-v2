<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ChasoulUIX - Portfolio</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans antialiased bg-gray-900 text-white">
    <div class="min-h-screen bg-gradient-to-b from-gray-900 to-gray-800">
        <nav class="bg-gray-800/80 backdrop-blur-md border-b border-gray-700 fixed w-full z-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-center h-16">
                    <div class="flex items-center">
                        <a href="/" class="group">
                            <span class="text-2xl font-bold bg-gradient-to-r from-blue-400 to-blue-600 bg-clip-text text-transparent hover:from-blue-500 hover:to-blue-700 transition-all duration-300">
                                ChasoulUIX
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Page Content -->
        <main class="pt-16">
            @yield('content')
        </main>
    </div>

    <!-- Add smooth scroll behavior -->
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
</body>
</html>