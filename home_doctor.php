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
<?php include 'doctor_navbar.php'; ?>
<body style="background-color: lightblue;">
    


    <!-- MENU START -->
    <div   class="container" style="margin-bottom:50px;margin-top:50px">
    <style>
    img {
        opacity: 0.5;
        }
    </style>
    
    <img src="images/doctor.jpg"  width="1100" height="890">

    <div class="center">
            <a href="donate_doctor.php" class="homebutton">Εισφορά</a>
    </div>
      
    <div class="center2">
        <a href="#" class="homebutton">Υποστήριξη</a>
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


        </div>
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