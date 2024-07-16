<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Le projet CAMPUSTIMES est une application capable de gérer la planification des emplois du temps pour les administrateurs, étudiants et professeurs.">
    <meta name="robots" content="index, follow">
    <meta name="author" content="LAWINGNI Abdoul Rachard">
    <meta name="theme-color" content="#3c91e6">
    <!-- Safari on iOS -->
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#3c91e6">
    <link rel="icon" href="{{ asset('/public/favicon.ico') }}" type="image/x-icon">
    <link rel="manifest" href="{{ asset('/public/manifest.json') }}">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    {{-- <link rel="stylesheet" href="http://localhost/bootstrap/dist/css/bootstrap.min.css"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css" />
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.11.1/sweetalert2.all.min.js" integrity="sha512-awhfGDoHs6zOw2bGnlOX1tFMpn62CLz2skNks2+LiDdJIRi9rkXrf5A1fVb7VgFyymxFVp6EfFqOZFr8sqPu6g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="/css/timetablejs.css">
    <script src="/js/timetable.js"></script>
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WDH5CCKL');</script>
<!-- End Google Tag Manager -->
    <title>@yield('title', "Dashboard")</title>
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WDH5CCKL"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div id="app">
            @include('Partials.sidebar')
        <section id="content">
                @include('Partials.header')
                <main>
                @include('Partials.main')
                </main>
        </section>
        <footer>
            @include('Partials.footer')
        </footer>
    </div>    
    @vite('resources/js/app.js')
    @yield('scripts')
    <script>
        

$(document).ready(function () {

const testsGraph = {

    labels: ['Licence 1', 'Licence 2', 'Licence 3', 'Master I', 'Master II'],
    datasets: [
        {
            label: 'Enseignants',
            data: [3, 3, 3, 3, 3],
            borderColor: '#18aefa', // Couleur de la ligne
            backgroundColor: '#18aefa', // Couleur de fond
            fill: false, // Pas de remplissage sous la ligne
        },
        {
            label: 'Étudiants',
            data: [5, 6, 7, 8, 9],
            borderColor: '#3D5EE1', // Couleur de la ligne
            backgroundColor: '#3D5EE1', // Couleur de fond
            fill: false, // Pas de remplissage sous la ligne
        },
        {
            label: 'Cours',
            data: [2, 3, 4, 5, 10],
            borderColor: '#2A3042', // Couleur de la ligne
            backgroundColor: '#2A3042', // Couleur de fond
            fill: false, // Pas de remplissage sous la ligne
        }
    ]
};

// Configuration du graphique
const options = {
    responsive: true,
    title: {
        display: true,
        text: "Comparaison du nombre d'enseignants, de cours et d'étudiants"
    },
    scales: {
        y: {
            beginAtZero: true
        }
    }
};

// Création du graphique
const ctx = document.getElementById('graph-viewer')?.getContext('2d');
const myChart = ctx && new Chart(ctx, {
    type: 'bar',
    data: testsGraph,
    options: options
});

})

    </script>
</body>
</html>