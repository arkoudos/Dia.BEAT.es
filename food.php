<?php require_once "controllerUserData.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Φαγητά</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/food.css">

</head>
<?php
  include 'navbar.php';
?>
<body style="background-color: lightblue;">
       

<div   class="container">  



<table>
        <tr>
          <th></th>
          <th><b>Φαγητά</b></th>
          <th><b>Υδατάνθρακες</b></th>
        </tr>

   <?php
    $conn = mysqli_connect("localhost","root","","diabeates");
    if($conn-> connect_error){
     die("Connection failed:". $conn-> connect_error);
      }

   $sql="SELECT id,food,ydat from food";
   $result =$conn-> query($sql);

   if ($result-> num_rows >0){
   while ($row = $result-> fetch_assoc()){
    echo "<tr><td>". $row["id"] . "</td><td>" . $row["food"] . "</td><td>". $row["ydat"] . "</td><td>";
    }

    echo "</table>";
  }
   else{
    echo "0 result";
   }

   $conn-> close();
  ?>

<caption id="foodtable_caption">
               15 gr = 1 μονάδα ινσουλίνης <br>
               1 μονάδα ινσουλίνης = -50 πόντους ζαχάρου 
            </caption> 

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