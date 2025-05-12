<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .watermark {
            position: fixed;
            bottom: 10px;
            right: 15px;
            opacity: 0.7;
            font-size: 20px;
            pointer-events: none;
            user-select: none;
        }
    </style>
</head>
<body>
<div class="container py-4">
    @yield('content')
</div>

<div class="watermark">Ramdhan Sidiq</div>
</body>
</html>
