<!DOCTYPE html>
<html>
<head>
    <title>Uji HTML Entity Encoding</title>
</head>
<body style="font-family: sans-serif; text-align:center; margin-top:50px;">
    <h2>🔒 Blade Echo Encoding Test</h2>

    <p><strong>Versi Aman (Encoded):</strong></p>
    <div style="border:1px solid #ccc; padding:10px; background:#f9f9f9;">
        {{ $html }}
        <!-- {{ $html }} membuat browser tidak mengeksekusi HTML dan JavaScript didalam tampilan -->
    </div>

    <p><strong>Versi Tidak Aman (Raw HTML):</strong></p>
    <div style="border:1px solid #ccc; padding:10px; background:#fff;">
        {!! $html !!}
        <!-- {!! $html !!} membuat browser mengeksekusi HTML dan JavaScript didalam tampilan -->
    </div>
</body>
</html>
