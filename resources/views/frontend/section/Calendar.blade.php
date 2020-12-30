<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
<link href='css/main.css' rel='stylesheet' />
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<script src='js/main.js'></script>
<script src="{{asset('js/app.js')}}"></script>
<script>

  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay'
      },
      initialDate: '2020-12-30',
      navLinks: true, // can click day/week names to navigate views
      selectable: true,
      selectMirror: true,
      select: function(arg) {
        var title = prompt('Evenement:');
        if (title) {
          calendar.addEvent({
            title: title,
            start: arg.start,
            end: arg.end,
            allDay: arg.allDay
          })
        }
        calendar.unselect()
      },
      eventClick: function(arg) {
        if (confirm("Veux-tu vraiment supprimer l'événement ?")) {
          arg.event.remove()
        }
      },
      editable: true,
      dayMaxEvents: true, // allow "more" link when too many events
      events: [
      ]
    });

    calendar.render();
  });

</script>
<style>


  #calendar {
    max-width: 60%;
    margin: 0 auto;
  }

</style>
</head>
<body style="background:url(./img/back.png); background-size: cover;">
    @include('frontend.components.header')
    <div class="row mx-0 pb-4" id="sectionClasse">
        <div class="col-2 text-center">
            <div class=" py-3">
                <a style="text-decoration:none" href="{{ route("eleves") }}">
                    <div class="cardd titre cardd-1 mx-auto d-flex justify-content-center" >
                        <h3>Eleves</h3>
                    </div>
                </a>
    
                <a style="text-decoration:none" href="{{ route("agenda") }}">
                    <div class="cardd cardd-1 mx-auto d-flex justify-content-center">
                        <h3 >Agenda</h3>
                    </div>
                </a>
    
                <a style="text-decoration:none" href="{{ route("exercice") }}" >
                    <div class="cardd cardd-1 mx-auto d-flex justify-content-center">
                        <h3>Exercice</h3>
                    </div>
                </a>
                        
            </div>
        </div>
    
        <div class="col-10 bg-dark my-4" >
            <div class="mt-3 p-3 bg-white text-dark" id='calendar'></div>
            
        </div>
    </div>


</body>
</html>

    