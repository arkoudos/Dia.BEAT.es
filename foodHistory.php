<?php require_once "controllerUserData.php"; ?>
<?php include "navbar.php"; ?>

<?php 
session_start();
$username = $_SESSION['username'];
$password = $_SESSION['password'];
$type=$_SESSION['type'];
if($username != false && $password != false){
   
}else{
  header('Location:index.php');
    
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ιστορικό Γευμάτων</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>

    <script>
       $(document).ready(function(){
           var calendar = $('#calendar').fullCalendar({
               editable:true,
               header:{
                   left:'prev,next today',
                   center:'title',
                   right:'month,agendaWeek,agendaDay'
               },
              events: 'load.php',
              selectable:true,
              selectHelper:true,
              select: function(start , end, allDay)
              {
                  var title = prompt("Enter Food ");
                  if(title)
                  {
                      var start = $.fullCalendar.formatDate(start,"Y-MM-DD HH:mm:ss");
                      var end = $.fullCalendar.formatDate(end,"Y-MM-DD HH:mm:ss");
                      $.ajax({
                          url:"insert.php",
                          type:"POST",
                          data:{title:title,start:start,end:end},
                          success:function()
                          {
                              calendar.fullCalendar('refetchEvents');
                              alert("Added Successfully")
                          }
                      })
                  }
              },
              editable:true,
              eventResize:function(event)
              {
                  var start = $.fullCalendar.formatDate(event.start,"YY-MM-DD HH:mm:ss");
                  var end= $.fullCalendar.formatDate(event.end,"YY-MM-DD HH:mm:ss");
                  var title = event.title;
                  var id = event.id;
                  $.ajax({
                      url:"update.php",
                      type:"POST",
                      data:{title:title, start:start, end:end, id:id},
                      success:function(){
                          calendar.fullCalendar('refetchEvents');
                          alert('Food Update');
                      }

                  })
              },
              eventDrop:function(event)
              {
                  var start = $.fullCalendar.formatDate(event.start,"YY-MM-DD HH:mm:ss");
                  var end = $.fullCalendar.formatDate(event.end,"YY-MM-DD HH:mm:ss");
                  var title = event.title;
                  var id = event.id;
                  $.ajax({
                      url:"update.php",
                      type:"POST",
                      date:{title:title, start:start, end:end, id:id},
                      success:function()
                      {
                          calendar.fullCalendar('refetchEvents');
                          alert("Food Updated");
                      }
                  });
              },
              eventClick:function(event)
              {
                  if(confirm("Are you sure you want to remove it?"))
                  {
                      var id=event.id;
                      $.ajax({
                          url:"delete.php",
                          type:"POST",
                          data:{id:id},
                          success:function()
                          {
                              calendar.fullCalendar('refetchEvents');
                              alert("Food Removed");
                          }
                      })
                  }
              }
           });
       })
     </script>
</head>


<body style="background-color: lightblue;">
<h2 style="text-align: center;">Καλώς ήρθατε στην σελίδα Ιστορικό Γευμάτων</h2>
<p style="text-align: center;">Στην σελίδα ιστορίκο γευμάτων μπορείτε να τοποθετήσετε τα γεύματα που τρωτε καθόλη την διάρκεια της ημέρας, ώστε να  
 διαθέτετε μια γενική εικόνα της διατροφή σας.<br>Εκτός αυτού,μπορείτε να χρησιμοποιήσετε το ημερολόγιο και για σκοπούς υπενθύμισης,αφού
  έχετε την επιλογή να αποθηκεύσετε και ένα γεύμα που σχεδιάζετε να φάτε στο μέλλον</p>
<br><h3 style="text-align: center;">Τρόπος αποθήκευσης του γευματός σας</h3> <p style="text-align: center;">Επιλλέξτε κλικάροντας σε οποιαδήποτε μέρα ενδιαφέρεστε να καταχωρήσετε ένα γεύμα,πληκτρολογήστε 
το ονομα του γεύματος και πατήστε οκ, πλέον η καταχωρησή σας έχει γίνει.<br>Έπειτα πατώντας το κουμπί 'week' ή 'day',μπορείτε να 
θέσετε ακριβώς την χρονική διάρκεια του γευματός σας ρυθμίζοντας το μπλε πλαίσιο με την βοήθεια του ποντικιού σας.
</p>
  <div style="background-color: white "; class="container">
     <div  id="calendar"></div>
  </div>
 </body>
<footer>
    <p class="p-3 bg-dark text-white text-center position:absolute bottom:0">&copy; Copyrights 2021<br>
    All rights reserved
    <br>
    | Powered by -dia.beat.es Team- |
    </p>
</footer>

</html>
