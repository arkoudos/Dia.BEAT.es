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
    <title>Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="./css/home2.css">
    
</head>
<?php include 'navbar.php'; ?>
<body style="background-color: lightblue;">
    


    <!-- MENU START -->
    <div   class="container" style="margin-bottom:50px;margin-top:50px">
    <style>
    img {
        opacity: 0.5;
        }
    </style>
    
    <img src="images/home_menu_bg.png"  width="1100" height="890">

    <div class="center">
        <a href="calculate.php" class="homebutton">Υπολογισμός Ινσουλίνης</a>
        <a href="food.php" class="homebutton">Φαγητά</a> 
        <a href="donate.php" class="homebutton">Εισφορά</a>
    </div>
      
    <div class="center2">
        <a href="foodHistory.php" class="homebutton">Ιστορικό Γευμάτων</a> 
        <a href="measurementsHistory.php" class="homebutton">Ιστορικό Μετρήσεων</a>
        <a href="#" class="homebutton">Εξαγωγή Αποτελεσμάτων</a>
    </div>

    <div class="center3">
        <div   class="container2" style= "margin-top:20px">

                    <?php
                    if(isset($_SESSION['STATUS']))
                    {
                    echo "<h4>" .$_SESSION['STATUS']. "</h4>";
                    unset($_SESSION['STATUS']);
                    }
                    ?>



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
                        echo " <b><font color=#C42222 size='4.5pt'> Μέσος Όρος Μετρήσεων Ημέρας :</font></b>".  $row['AVG(measurement)']  ;
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
                        echo " <b><font color=#C42222 size='4.5pt'> Μέσος Όρος Μετρήσεων τριμηνου :</font></b>".  $row['AVG(measurement)']  ;
                        echo "<br />";
                     
                    }
               
                  
                  ?>           

        </div>
    </div>

    <div class="center4">
    <a href="help.php" class="homebutton">Υποστήριξη</a>
    </div>
</div>
<!-- MENU END -->



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudeflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

<footer>
    <p class="p-3 bg-dark text-white text-center position:absolute bottom:0">&copy; Copyrights 2021<br>
    All rights reserved
    <br>
    | Powered by -dia.beat.es Team- |
    </p>
</footer>

</html>
