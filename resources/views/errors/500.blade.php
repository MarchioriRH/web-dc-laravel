<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Error 500 - Error Interno del Servidor</title>
    <style>
        body {
            background: #f8fafc;
            color: #333;
            font-family: Arial, sans-serif;
            text-align: center;
            padding-top: 10%;
        }
        h1 {
            font-size: 5em;
            margin-bottom: 0.2em;
            color: #e3342f;
        }
        p {
            font-size: 1.5em;
            margin-bottom: 1em;
        }
        a {
            color: #3490dc;
            text-decoration: none;
            font-weight: bold;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>500</h1>
    <p>¡Ups! Ha ocurrido un error interno en el servidor.</p>
    <p>Por favor, intenta de nuevo más tarde.</p>
    <a href="{{ url('/') }}">Volver al inicio</a>
</body>
</html>