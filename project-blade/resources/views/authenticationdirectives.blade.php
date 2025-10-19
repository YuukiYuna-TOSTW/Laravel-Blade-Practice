<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contoh @auth dan @guest</title>
</head>
<body>
    <h1>Contoh Blade Directives @auth & @guest 🌸</h1>

    @auth
        <p>Selamat datang, {{ Auth::authentication()->name ?? 'authentication' }}! Kamu sudah login.</p>
    @endauth
    <!-- @auth merupakan bagian yang dijalankan ketika sudah melakukan login -->

    @guest
        <p>Kamu belum login. Silakan masuk untuk melihat konten.</p>
    @endguest
    <!-- @guest merupakan bagian yang dijalankan ketika belum melakukan login -->

    <hr>

    <script>
        const authentication = {{ Js::from($authentication) }};
        console.log("authentication info:", authentication);
    </script>
</body>
</html>
