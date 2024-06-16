<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="http://localhost/bootstrap/dist/css/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="http://localhost/fontawesome/css/all.min.css">
    <script src="http://localhost/bootstrap/dist/js/bootstrap.bundle.js"></script>
    @vite('resources/css/app.css')
    <title>@yield('title', "Inscription")</title>
</head>
<body>
    <div id="app" class="container mt-4  ">
       
        @yield('content')
    </div>
</body>
</html>