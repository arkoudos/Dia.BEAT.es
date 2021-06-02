
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
    <title>Ιστορικό Μετρήσεων</title>
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
              events: 'loadMeasurement.php',
              selectable:true,
              selectHelper:true,
              select: function(start , end, allDay)
              {
                  var title = prompt("Enter measurement ");
                  if(title)
                  {
                      var start = $.fullCalendar.formatDate(start,"Y-MM-DD HH:mm:ss");
                      var end = $.fullCalendar.formatDate(end,"Y-MM-DD HH:mm:ss");
                      $.ajax({
                          url:"insertMeasurement.php",
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
                  var start = $.fullCalendar.formatDate(event.start,"Y-MM-DD HH:mm:ss");
                  var end= $.fullCalendar.formatDate(event.end,"Y-MM-DD HH:mm:ss");
                  var title = event.title;
                  var id = event.id;
                  $.ajax({
                      url:"updateMeasurement.php",
                      type:"POST",
                      data:{title:title, start:start, end:end, id:id},
                      success:function(){
                          calendar.fullCalendar('refetchEvents');
                          alert('Measurement Update');
                      }

                  })
              },

              eventDrop:function(event)
              {
                  var start = $.fullCalendar.formatDate(event.start,"Y-MM-DD HH:mm:ss");
                  var end = $.fullCalendar.formatDate(event.end,"Y-MM-DD HH:mm:ss");
                  var title = event.title;
                  var id = event.id;
                  $.ajax({
                      url:"updateMeasurement.php",
                      type:"POST",
                      data:{title:title, start:start, end:end, id:id},
                      success:function()
                      {
                          calendar.fullCalendar('refetchEvents');
                          alert("Measurement Updated");
                      }
                  });
              },

              eventClick:function(event)
              {
                  if(confirm("Are you sure you want to remove it?"))
                  {
                      var id=event.id;
                      $.ajax({
                          url:"deleteMeasurement.php",
                          type:"POST",
                          data:{id:id},
                          success:function()
                          {
                              calendar.fullCalendar('refetchEvents');
                              alert("Measurement Removed");
                          }
                      })
                  }
              }
           });
       })
     </script>
</head>


<body style="background-color: lightblue;">
<h2 style="text-align: center;">Καλώς ήρθατε στην σελίδα Ιστορικό Μετρήσεων</h2>
<p style="text-align: center;">Στην σελίδα ιστορίκο μετρήσεων μπορείτε να τοποθετήσετε τις καθημερινές μετρήσεις σας, ώστε να  
 διαθέτετε μια γενική εικόνα της υγείας σας.<br>
<br><h3 style="text-align: center;">Τρόπος αποθήκευσης της μέτρησής σας</h3> <p style="text-align: center;">Επιλλέξτε κλικάροντας στην μέρα που έγινε η μέτρησή σας ώστε να την καταχωρήσετε ,πληκτρολογήστε 
το νούμερο της μέτρησης και πατήστε οκ, πλέον η καταχωρησή σας έχει γίνει.<br>Έπειτα πατώντας το κουμπί 'week' ή 'day',μπορείτε να 
θέσετε ακριβώς την χρονική διάρκεια της ημέρας στην οποία έγινε η μέτρησή σας ρυθμίζοντας το μπλε πλαίσιο με την βοήθεια του ποντικιού σας.Με την ανανέωση της σελίδας, γίνεται αυτόματα και ανανέωση του μέσους όρους σε περίπτωση που έχετε πρόσθεσει ή αφαιρέσει μια μέτρησή σας.
</p>
  <div style="background-color: white "; class="container">
     <div  id="calendar"></div>
  </div>

  <div class="container2" style= "margin-top:10px">>
    <h3>Παρακάτω ακολουθεί ο Μέσος όρος των μετρησεών σας</h3>
    <?php
                    $connect=new PDO('mysql:host=localhost;dbname=diabeates','root','');
               
                
                    $query= "SELECT AVG(measurement) FROM measurement WHERE date(start_event) =  curdate() GROUP BY date(start_event) ";      
                    $query2 = "SELECT  WEEK(date(start_event),1) AS week ,AVG(measurement)  FROM  measurement GROUP BY WEEK(date(start_event),1)";
                    $query3 = "SELECT MONTH(date(start_event)) AS month,AVG(measurement) FROM measurement GROUP BY MONTH(date(start_event))"; 
                    $query1 ="SELECT AVG(measurement) FROM measurement WHERE date(start_event) >= DATE_FORMAT(curdate(),'%Y-%m-01') - INTERVAL 2 MONTH ";
               

                    $statement= $connect->prepare($query);
                
                    $statement->execute();
                
                    $result=$statement->fetchAll();
                    foreach($result as $row)
                    {
                        echo " <b><font color=#C42222 size='4.5pt'> Μέσος Όρος Μετρήσεων Ημέρας :  </font></b>".  $row['AVG(measurement)']  ;
                        echo "<br />";
                      
                    }
                    
                    $statement= $connect->prepare($query2);
                
                    $statement->execute();
                
                    $result=$statement->fetchAll();
                    foreach($result as $row)
                    {
                        echo " <b><font color=#C42222 size='4.5pt'> Μέσος Όρος Μετρήσεων Εβδομάδας " . $row['week'],  "  : </font></b>" . $row['AVG(measurement)'];
                        echo "<br />";
                      
                    }
               
                    $statement= $connect->prepare($query3);
                
                    $statement->execute();
                
                    $result=$statement->fetchAll();
                    foreach($result as $row)
                    {
                        echo " <b><font color=#C42222 size='4.5pt'> Μέσος Όρος Μετρήσεων Mήνα " . $row['month'],  "  : </font></b>" . $row['AVG(measurement)'];
                        echo "<br />";
                     
                    }
               
                    $statement= $connect->prepare($query1);
                
                    $statement->execute();
                
                    $result=$statement->fetchAll();
                    foreach($result as $row)
                    {
                        echo " <b><font color=#C42222 size='4.5pt'> Μέσος Όρος Μετρήσεων Tριμήνου :  </font></b>"  . $row['AVG(measurement)']  ;
                        echo "<br />";
                     
                    }
               
                  
                  ?> 
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
