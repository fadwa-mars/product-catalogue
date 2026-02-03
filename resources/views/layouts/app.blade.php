<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'TP Laravel')</title>
    @vite(['resources/js/app.js'])
</head>
<body class="d-flex flex-column min-vh-100">
    @include('partials.navbar')
    
    <div class="d-flex flex-grow-1">
        @include('partials.sidebar')
        
        <main class="flex-grow-1 p-4">
            @yield('content')
        </main>
    </div>
    
    @include('partials.footer')
</body>
</html>