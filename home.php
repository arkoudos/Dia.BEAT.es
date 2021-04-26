<?php require_once "controllerUserData.php"; ?>
<?php 
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

    <link rel="stylesheet" type="text/css" href="./css/home2.css">
    
</head>
<?php include 'navbar.php'; ?>
<body>
    


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
        <a href="#" class="homebutton">Εισφορά</a>
    </div>
      
    <div class="center2">
        <a href="#" class="homebutton">Ιστορικό Γευμάτων</a> 
        <a href="#" class="homebutton">Ιστορικό Μετρήσεων</a>
        <a href="#" class="homebutton">Εξαγωγή Αποτελεσμάτων</a>
    </div>

    <div class="center3">
        <div   class="container2" style= "margin-top:20px">
        </div>
    </div>

    <div class="center4">
    <a href="#" class="homebutton">Υποστήριξη</a>
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





