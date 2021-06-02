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

                    <form action="profile_exprogram.php" method="POST">
                        <div> 

                        <br>
                        <label>
                        <input type="radio" id="ex1" name="exprog" value="program1">
                        <img src="images/ex1.png">
                        </label>

                        <br>
                        <br>
                        <label>
                        <input type="radio" id="ex2" name="exprog" value="program2">
                        <img src="images/ex2.png">
                        </label>

                        <br>
                        <br>
                        <label>
                        <input type="radio" id="ex3" name="exprog" value="program3" >
                        <img src="images/ex3.png">
                        </label>

                        <br>
                        <br>
                        <input type="radio" id="ex4" name="exprog" value="none">
                        <label for="ex4"><b style="color:#B6BC38; font-size:23.5px;">Κανένα</b></label><br><br>

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