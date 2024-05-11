<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi aplicación')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <style>
        body {
            padding-top: 4rem;
        }

        .navbar-item-logo {
            font-weight: bold;
            font-size: 1.5rem;
            color: #333;
            text-decoration: none;
        }
        .navbar {
            background-color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
