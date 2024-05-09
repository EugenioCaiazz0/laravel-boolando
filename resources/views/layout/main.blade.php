<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Styles -->
    @vite('resources/js/app.js') <!-- ELEMENTO FONDAMENTALE NEL TEMPLATE, INDIRIZZA VITE AD APP.JS PER PRENDERE SCSS QUINDI VA RIPORTATO NELL'HEAD DEL LAYOUT-->

    <title> Laravel - Boolando  </title>

</head>

<body>

@include('partials.header');

<main>
    @yield('content')
</main>

@include('partials.footer');

</body>

</html>
