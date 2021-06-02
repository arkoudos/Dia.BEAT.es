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

    
    <link rel="stylesheet" type="text/css" href="./css/donatestyle.css">
</head>
<?php include 'doctor_navbar.php'; ?>
<body style="background-color: lightblue;">
    
<div   class="container" style= "margin-top:50px">    
        <div   class="container2" style= "margin-top:10px">
        <div   class="container3" style= "margin-top:10px">


            <form action="donateinfo.php" method="post">
                <p style="font-size:25px"><b>Ποσό Εισφοράς:</b></p>
                <input  type="number"  name="donateamount" text-align=center placeholder="Ποσό Εισφοράς" value required><br>
                <br>
                
        </div>
        <div   class="container4" style= "margin-top:10px">
                <p style="font-size:25px"><b>Aριθμός Κάρτας</b></p>    
                <input  type="number"  name="card" text-align=center placeholder="Aριθμός Κάρτας"  value required><br>
                <br>
                
                <p style="font-size:25px"><b>Όνομα Κατόχου:</b></p>
                <input  type="text"  name="user" text-align=center placeholder="Όνομα"><br>
                <br>
                <p style="font-size:25px"><b>Ημερομηνία Λήξης:</b></p> 
                <input  type="text"  name="date" text-align=center placeholder="Ημερομηνία Λήξης"  value required><br>
                <br>
                <p style="font-size:25px"><b>Cvv:</b></p>
                <input  type="number"  name="cvv" text-align=center placeholder="CVV"  value required><br>
                <br>
                                          
                <button a href="#" name="donatesave" class="myButton">Αποθήκευση</a></button>
                <br>
                <br>
            </form>

        </div>
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