<?php 
  $connect=new PDO('mysql:host=localhost;dbname=diabeates','root','');

  if(isset($_POST["title"]))
  {
      $query = "
      INSERT INTO measurement (measurement,start_event,end_event)
      VALUES (:measurement, :start_event , :end_event)";

      $statement= $connect->prepare($query);
      $statement->execute(
        array(
          ':measurement' => $_POST['title'],
          ':start_event' => $_POST['start'],
          ':end_event' => $_POST['end']
        )
        );
  }

  ?>