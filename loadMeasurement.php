<?php
$connect=new PDO('mysql:host=localhost;dbname=diabeates','root','');


$data=array();//store events table data

$query= "SELECT * FROM measurement ORDER BY id"; 

$statement= $connect->prepare($query);

$statement->execute();

$result=$statement->fetchAll();

foreach($result as $row)
{
    $data[] = array(
        'id' => $row["id"],
        'title' => $row["measurement"],
        'start' => $row["start_event"],
        'end'  => $row["end_event"]
    );
}
echo json_encode($data);

?>
       