<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@verbatim Contoh @verbatim</title>
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>
<body>
    <h1>Contoh @verbatim dengan Project Lama</h1>

    <!-- Kita pakai @verbatim untuk bagian template Alpine.js -->
    @verbatim
    <div x-data="{ message: 'Halo, ini dari Alpine.js!' }">
        <p>{{ message }}</p>
        <button @click="message = 'Alpine.js keren 🌸'">Ubah Pesan</button>
    </div>
    @endverbatim

    <hr>

    <!-- Menampilkan data PHP menggunakan Js::from() -->
    <script>
        const verbatim = {{ Js::from($verbatim) }};
        console.log(verbatim);

        document.write(`<p>Nama: ${verbatim.name}</p>`);
        document.write(`<p>Usia: ${verbatim.age}</p>`);
        document.write(`<p>Skills: ${verbatim.skills.join(', ')}</p>`);
    </script>
</body>
</html>
