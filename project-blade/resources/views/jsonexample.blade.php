<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>JSON Test</title>
</head>
<body>
    <h1>Rendering JSON</h1>

    <script>
        const json = {{ Js::from($json) }};

        console.log(json);

        document.write(`<p>Halo ${json.name} 🌸</p>`);
        document.write(`<p>Usia: ${json.age}</p>`);
        document.write(`<p>Skills: ${json.skills.join(', ')}</p>`);
    </script>
</body>
</html>
