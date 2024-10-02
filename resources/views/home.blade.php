<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 11</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="max-w-4xl mx-auto px-4">
   {{--<h1>BIENVENIDO A LA PAGINA PRINCIPAL</h1>--}} 
    </div>
    <x-alert type="Danger">
        <x-slot name="title">
            Titulo de Alerta 
        </x-slot>
        Contenido de la Alerta
    </x-alert>
</body>
</html>