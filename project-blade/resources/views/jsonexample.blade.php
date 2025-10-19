<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>JSON Test</title>
</head>
<body>
    <h1>Rendering JSON</h1>

    <script>
        const user = {{ Js::from($user) }};

        console.log(user);

        document.write(`<p>Halo ${user.name} 🌸</p>`);
        document.write(`<p>Usia: ${user.age}</p>`);
        document.write(`<p>Skills: ${user.skills.join(', ')}</p>`);
    </script>
</body>
</html>
