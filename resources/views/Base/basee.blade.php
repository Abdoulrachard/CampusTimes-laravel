<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('/public/favicon.ico') }}" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  @vite('resources/js/timetable.js')

  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.11.1/sweetalert2.all.min.js" integrity="sha512-awhfGDoHs6zOw2bGnlOX1tFMpn62CLz2skNks2+LiDdJIRi9rkXrf5A1fVb7VgFyymxFVp6EfFqOZFr8sqPu6g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @vite('resources/css/app.css')
    @vite('resources/css/timetablejs.css')

    <title>@yield('title', "Campustimes")</title>
</head>
<style>
 
</style>
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
        <script>
          $(document).ready(function (){
          var timetable = new Timetable();
    
          timetable.setScope(9,3)
    
          timetable.addLocations(['Rotterdam', 'Madrid', 'Los Angeles', 'London', 'New York', 'Jakarta', 'Tokyo']);
    
          timetable.addEvent('Sightseeing', 'Rotterdam', new Date(2015,7,17,9,00), new Date(2015,7,17,11,30), { url: '#' });
          timetable.addEvent('Zumba', 'Madrid', new Date(2015,7,17,12), new Date(2015,7,17,13), { url: '#' });
          timetable.addEvent('Zumbu', 'Madrid', new Date(2015,7,17,13,30), new Date(2015,7,17,15), { url: '#' });
          timetable.addEvent('Lasergaming', 'London', new Date(2015,7,17,17,45), new Date(2015,7,17,19,30), { class: 'vip-only', data: { maxPlayers: 14, gameType: 'Capture the flag' } });
          timetable.addEvent('All-you-can-eat grill', 'New York', new Date(2015,7,17,21), new Date(2015,7,18,1,30), { url: '#' });
          timetable.addEvent('Hackathon', 'Tokyo', new Date(2015,7,17,11,30), new Date(2015,7,17,20)); // options attribute is not used for this event
          timetable.addEvent('Tokyo Hackathon Livestream', 'Los Angeles', new Date(2015,7,17,12,30), new Date(2015,7,17,16,15)); // options attribute is not used for this event
          timetable.addEvent('Lunch', 'Jakarta', new Date(2015,7,17,9,30), new Date(2015,7,17,11,45), { onClick: function(event) {
            window.alert('You clicked on the ' + event.name + ' event in ' + event.location + '. This is an example of a click handler');
          }});
          timetable.addEvent('Cocktails', 'Rotterdam', new Date(2015,7,18,00,00), new Date(2015,7,18,02,00), { class: 'vip-only' });
    
          var renderer = new Timetable.Renderer(timetable);
          renderer.draw('.timetable');
        })
        </script>

</body>
</html>