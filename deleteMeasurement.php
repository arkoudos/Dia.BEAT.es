<?php
  if(isset($_POST["id"]))
  {
    $connect=new PDO('mysql:host=localhost;dbname=diabeates','root','');
    $query="
    DELETE FROM measurement WHERE id=:id
    ";
    $statement= $connect->prepare($query);
    $statement->execute(
        array(
            ':id' => $_POST['id']
        )
    );

  }
?>