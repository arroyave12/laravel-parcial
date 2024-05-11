@extends('layout')

@section('content')
    <div class="container">
        <h1>Bienvenido a mi parcial</h1>
    </div>
@endsection


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 100px auto;
            text-align: center;
        }
        h1 {
            color: #333;
        }
        p {
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Bienvenido</h1>
        <p>Este es el home de tu aplicación Laravel. ¡Comienza a desarrollar tu increíble proyecto!</p>
    </div>
</body>
</html>
