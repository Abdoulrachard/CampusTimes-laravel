var timetable = new Timetable();
    
timetable.setScope(7,20)

timetable.addLocations(['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche']);
timetable.addEvent('Mathematiqe', 'Mardi', new Date(2015,7,17,9,30), new Date(2015,7,17,11,45), { onClick: function(event) {
  window.alert('You clicked on the ' + event.name + ' event in ' + event.location + '. This is an example of a click handler');
}});

var renderer = new Timetable.Renderer(timetable);
renderer.draw('.timetable');