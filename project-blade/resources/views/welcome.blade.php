<!DOCTYPE html>
<html>
<head>
    <title>Belajar Blade - Laravel</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f8fafc; margin: 40px; }
        .active { color: green; }
        .inactive { color: red; }
        .card { background: white; padding: 15px; margin-top: 20px; border-radius: 10px; box-shadow: 0 0 10px #ccc; }
    </style>
</head>
<body>
    <h1>Halo, {{ $name }} 🌸</h1>


    <p @class(['active' => $isActive, 'inactive' => !$isActive])>
        Status: {{ $isActive ? 'Aktif' : 'Tidak Aktif' }}
    </p>

    <div class="card">
        <h3>Daftar Pengguna</h3>
        @forelse ($users as $user)
            <p>{{ $loop->iteration }}. {{ $user }}</p>
        @empty
            <p>Tidak ada pengguna.</p>
        @endforelse
    </div>

    <p>Contoh raw HTML tanpa encoding:</p>
    {!! '<b>Ini teks tebal</b>' !!}

    <hr>

    <p>Contoh komentar Blade</p>
</body>
</html>
