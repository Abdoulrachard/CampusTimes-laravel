<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('/public/favicon.ico') }}" type="image/x-icon">
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
    <title>@yield('title', "Campustimes")</title>
</head>
<body>
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