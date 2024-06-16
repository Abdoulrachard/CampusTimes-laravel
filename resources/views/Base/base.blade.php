<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="http://localhost/bootstrap/dist/css/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    @vite('resources/css/app.css')
    <title>@yield('title', "Campustimes")</title>
</head>
<body>
    <div id="app">
            @include('partials.sidebar')
        <section id="content">
                @include('partials.header')
                <main>
                @include('partials.main')
                </main>
        </section>
        <footer>
            @include('partials.footer')
        </footer>
    </div>    
    <script src="http://localhost/bootstrap/dist/js/bootstrap.bundle.js"></script>
    @vite('resources/js/app.js')
</body>
</html>