<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <style>
        body { font-family: sans-serif; background: #f3f4f6; padding: 30px; }
        header { background: #4f46e5; color: white; padding: 15px; border-radius: 8px; }
    </style>
</head>
<body>
    <header>
        <h2>Belajar Blade Layout</h2>
    </header>

    <main>
        @yield('content')
    </main>

    <footer style="margin-top:20px; text-align:center;">
        <small>&copy; 2025 Laravel Blade Example</small>
    </footer>
</body>
</html>
