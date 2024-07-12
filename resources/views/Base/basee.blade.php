<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('/public/favicon.ico') }}" type="image/x-icon">
    <meta name="theme-color" content="#3c91e6">
    <!-- Safari on iOS -->
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#3c91e6">
    <link rel="manifest" href="{{ asset('/public/manifest.json') }}">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.11.1/sweetalert2.all.min.js" integrity="sha512-awhfGDoHs6zOw2bGnlOX1tFMpn62CLz2skNks2+LiDdJIRi9rkXrf5A1fVb7VgFyymxFVp6EfFqOZFr8sqPu6g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="/css/timetablejs.css">
    <script src="/js/timetable.js"></script>
    <title>@yield('title', "Campustimes")</title>
</head>
<body>
    <div id="app">
            @include('Partialls.sidebars')
        <section id="content">
                @include('Partialls.headers')
                <main>
                @include('Partialls.mains')
                </main>
        </section>
        <footer>
            @include('Partialls.footers')
        </footer>
    </div>

        @vite('resources/js/app.js')
        @vite( 'resources/js/timetable.js')
</body>
</html>