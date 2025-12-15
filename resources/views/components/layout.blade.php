<!DOCTYPE html>
<html lang="en" data-theme="lofi" class="h-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chirper Home</title>
    
    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />
    
    {{-- DaisyUI CDN (Included here for simplicity, but often better via package manager) --}}
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />
    
    {{-- Vite Assets --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen flex flex-col bg-base-200 font-sans">
    
    {{-- Navigation Bar (Header) --}}
    <nav class="navbar bg-base-100">
        <div class="navbar-start">
            <a href="/" class="btn btn-ghost text-xl">Chirper</a>
        </div>
        <div class="navbar-end gap-2">
            <a href="/#" class="btn btn-ghost btn-sm">Sign In</a>
            <a href="/#" class="btn btn-primary btn-sm" style="color:white;">Sign Up</a>
        </div>
    </nav>
    
    {{-- Main Content Area --}}
    {{-- The 'flex-1' class ensures this element expands to fill all available vertical space, pushing the footer down. --}}
    <main class="flex-1 container mx-auto px-4 py-8">
        {{ $slot }}
    </main>
    
    {{-- Footer --}}
    <footer class="footer footer-center p-5 bg-base-300 text-base-content text-xs">
        <div>
            <p>© 2024 Chirper. All rights reserved.</p>
        </div>
    </footer>
    
</body>

</html>