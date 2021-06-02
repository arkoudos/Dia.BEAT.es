<?php
   $connect=new PDO('mysql:host=localhost;dbname=diabeates','root','');
   if(isset($_POST["id"]))
   {
       $query="
       UPDATE measurement
       SET measurement=:measurement, start_event=:start_event, end_event=:end_event
       WHERE id=:id
       ";
       $statement = $connect->prepare($query);
       $statement->execute(
           array(
            ':measurement' => $_POST['title'],
            ':start_event' => $_POST['start'],
            ':end_event' => $_POST['end'],
            ':id' => $_POST['id']
           )
       );
   }
?>