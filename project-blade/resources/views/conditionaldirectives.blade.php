<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contoh Conditional Blade</title>
</head>
<body>
    <h1>Halo, {{ $conditional['name'] }} 🌸</h1>

    @unless (Auth::check())
        <p>You are not signed in.</p>
    @endunless
    <!-- @unless merupakan bagian yang dijalankan apabial suatu kondisi bernilai False -->

    @isset($records)
        <h2>Daftar Records:</h2>
        <ul>
            @foreach($records as $record)
                <li>{{ $record['title'] }}</li>
            @endforeach
        </ul>
    @endisset
    <!-- @isset merupakan bagian yang dijalankan apabila suatu kondisi terdefinisi dan bukan null -->

    @empty($records)
        <p>Tidak ada records.</p>
    @endempty
    <!-- @empty merupakan bagian yang dijalankan jika kondisi bernilai kosong -->

    <hr>

    <script>
        const conditional = {{ Js::from($conditional) }};
        const records = {{ Js::from($records) }};

        if (!conditional.role) {
            console.log("conditional role tidak tersedia");
        }

        if(records.length === 0){
            console.log("Records kosong");
        } else {
            console.log("Records ada:", records);
        }
    </script>
</body>
</html>
