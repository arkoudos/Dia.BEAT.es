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

    <link rel="stylesheet" type="text/css" href="./css/profilestyle.css">
  
</head>
<?php include 'navbar.php'; ?>
<body style="background-color: light#00008B;">
    





<div   class="container" style= "margin-top:50px">

        <div   class="container2" style= "margin-top:10px">
            
        <form action="profile_code.php" method="POST">
                <a style='color:#0000CD; font-size: 15pt'><b>  Username:  </b></a><?php echo "<b><font color=#191970 size='4.5pt'> $username </font></b>"?>
                <br>
        
            <a style='color:#00008B; font-size: 13pt'><b>  Όνομα:  </b></a>       
            <input class="user-input" type="text" name="name" placeholder="Name" value required><br> 

            <a style='color:#00008B; font-size: 13pt'><b>  Επίθετο:  </b></a> 
            <input class="user-input" type="text" name="surname" placeholder="Surname" value required><br> 

            <a style='color:#00008B; font-size: 13pt'><b>  Email:  </b></a>
            <input class="user-input" type="email" name="email" placeholder="Email Address" value required><br> 
            <br>

            <a style='color:#00008B; font-size: 13pt'><b>  Ηλικία:  </b></a>  
            <input class="user-input" type="text" name="age" placeholder="Age" value required><br> 

            <a style='color:#00008B; font-size: 13pt'><b>  Βάρος:  </b></a>
            <input class="user-input" type="text" name="weight" placeholder="Weight" value required><br> 

            <a style='color:#00008B; font-size: 13pt'><b>  Ύψος:  </b></a>
            <input class="user-input" type="text" name="height" placeholder="Height" value required><br> 

            <a style='color:#00008B; font-size: 13pt'><b>  Διεύθυνση:  </b></a>
            <input class="user-input" type="text" name="address" placeholder="Address" value required><br> 
           
            <a style='color:#00008B; font-size: 13pt'><b> Τύπος Διαβήτη:  </b></a>
            <input type="radio" id="1" name="type" value="1" required>
            <label for="1"><b style="color:#2F4F4F; font-size:18px;">1</b></label>            
            <input type="radio" id="2" name="type" value="2">
            <label for="2"><b style="color:#2F4F4F; font-size:18px;">2</b></label>
            <input type="radio" id="other" name="type" value="Άλλο">
            <label for="other"><b style="color:#2F4F4F; font-size:18px;">Άλλο</b></label><br>

            <a style='color:#00008B; font-size: 13pt'><b> Mέτρηση:  </b></a>
            <input type="radio" id="1" name="measure" value="mg/dL" required>
            <label for="1"><b style="color:#2F4F4F; font-size:18px;"> mg/dL </b></label>          
            <input type="radio" id="2" name="measure" value="mmol/L">
            <label for="2"><b style="color:#2F4F4F; font-size:18px;">  mmol/L </b></label><br>


            <button type=submit name="savechanges" class="myButton">Αποθήκευση</a></button>
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