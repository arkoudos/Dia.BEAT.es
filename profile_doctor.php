<?php require_once "controllerUserData.php"; ?>
<?php 
session_start();
$username = $_SESSION['username'];
$password = $_SESSION['password'];
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

    <link rel="stylesheet" type="text/css" href="./css/profilestyle_doctor.css">
  
</head>
<?php include 'doctor_navbar.php'; ?>
<body style="background-color: lightblue;">
    





<div   class="container" style= "margin-top:50px">

            <?php
            if(isset($_SESSION['STATUS']))
                    {
                    echo "<h4>" .$_SESSION['STATUS']. "</h4>";
                    unset($_SESSION['STATUS']);


                    }
            ?>
    
        <div   class="container2" style= "margin-top:10px">
            
        <form action="profile_update_doctor.php" method="POST">
      
                <?php
                $db = mysqli_connect("localhost","root","","diabeates");

                $query = "SELECT name,surname,email,age,number,address,speciality  FROM user where username='".$username."'";
                $rows = mysqli_query($db, $query);

                while($row = mysqli_fetch_assoc($rows))
                {
                
                echo "<a href='#'style='color:blue; font-size: 13pt'><b>  Όνομα:  </b></a>";
                echo $row["name"];
                echo"<br>";
                

                echo "<a href='#'style='color:blue; font-size: 13pt'><b>  Επίθετο:  </b></a>";
                echo $row["surname"];
                echo"<br>";

                echo "<a href='#'style='color:blue; font-size: 13pt'><b>  Email:  </b></a>";
                echo $row["email"];
                echo"<br>";
                echo"<br>";

                echo "<a href='#'style='color:blue; font-size: 13pt'><b>  Ηλικία:  </b></a>";
                echo $row["age"];
                echo"<br>";

                echo "<a href='#'style='color:blue; font-size: 13pt'><b>  Τηλέφωνο:  </b></a>";
                echo $row["number"];
                echo"<br>";

                echo "<a href='#'style='color:blue; font-size: 13pt'><b>  Διεύθυνση:  </b></a>";
                echo $row["address"];
                echo"<br>";

                echo"<br>";
                echo "<a href='#'style='color:blue; font-size: 13pt'><b>  Ειδικότητα:  </b></a>";
                echo $row["speciality"];
                echo"<br>";

                }
                ?>

                <div   class="container3" style= "margin-top:10px">
                <button a href="profile_update_doctor.php" name="change" class="myButton">Αλλαγή</a></button>
                        
                </div>
                </form>

</div>
</div>


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
