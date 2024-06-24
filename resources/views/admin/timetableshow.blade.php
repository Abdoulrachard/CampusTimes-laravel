@extends('Base.base')
 @section('title') Emploi du temps  @endsection

 @section('content')
    <div class="timetable my-5 animate__animated animate__zoomIn"></div>
 @endsection
 @section('scripts')
     <script>
       
       var timetable = new Timetable();
    
    timetable.setScope(7,20)

    timetable.addLocations(['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche']);
    timetable.addEvent('Probabilité', 'Mardi', new Date(2024,6,24,8,0), new Date(2024,6,24,10,0), { onClick: function(event) {
      Swal.fire({
        title: 'Détail du cours',
        text: + event.name + ' event in ' + event.location + '',
        
        confirmButtonText: 'OK'
    });
}});

    var renderer = new Timetable.Renderer(timetable);
    renderer.draw('.timetable');

        

     </script>
 @endsection