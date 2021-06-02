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

    <link rel="stylesheet" type="text/css" href="./css/foodprogramstyle.css">
  
</head>
<?php include 'navbar.php'; ?>
<body style="background-color: lightblue;">
    
            
 <div class="container">

                    <form action="profile_foodprogram.php" method="POST">
                        <div> 

                        <br>
                        <label>
                        <input type="radio" id="food1" name="foodprog" value="program1">
                        <img src="images/11.png">
                        </label>

                        <br>
                        <br>
                        <label>
                        <input type="radio" id="food2" name="foodprog" value="program2">
                        <img src="images/22.jpg">
                        </label>

                        <br>
                        <br>
                        <label>
                        <input type="radio" id="food3" name="foodprog" value="program3" >
                        <img src="images/33.png">
                        </label>

                        <br>
                        <br>
                        <input type="radio" id="food4" name="foodprog" value="none">
                        <label for="food4"><b style="color:#B6BC38; font-size:23.5px;">Κανένα</b></label><br><br>

                        <button a href="profile.php" name="foodprogram" class="myButton">Αποθήκευση</a></button>

                        </div>
                    </form>
                          
    </div>        
       


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudeflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

<footer>
    <p class="p-3 bg-dark text-white text-center position:absolute bottom:0">&copy; Copyrights 2021<br>
        <a>All rights reserved</a>
        <br>
        <a> | Powered by -dia.beat.es Team- |</a>
    </p>
</footer>

</html>