@extends('Base.base')
 @section('title') Emploi du temps  @endsection

 @section('content')
  <h6 class="d-flex align-items-center justify-content-center mt-3 text-muted">Emploi de la semaine {{ $timetable->week }} | {{ $timetable->level->label }}</h6>
    <div class="timetable my-5 animate__animated animate__zoomIn"></div>
 @endsection
 @section('scripts')
     <script>
       
       var timetable = new Timetable();
    
    timetable.setScope(7,20)

    timetable.addLocations(['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche']);
    timetable.addEvent('Probabilité', 'Mardi', new Date(2024,6,24,8,0), new Date(2024,6,24,10,0), { onClick: function(event) {
    //   Swal.fire({
    //     title: 'Détail du cours',
    //     text: + event.name + ' event in ' + event.location + '',
        
    //     confirmButtonText: 'OK'
    // });
},

} ,
timetable.addEvent('Langage c', 'Mercredi', new Date(2024,6,24,14,0), new Date(2024,6,24,18,0))

);

    var renderer = new Timetable.Renderer(timetable);
    renderer.draw('.timetable');

        

     </script>
 @endsection