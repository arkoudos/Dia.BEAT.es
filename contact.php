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

    <link rel="stylesheet" type="text/css" href="./css/contactstyle.css">
</head>
<?php include 'navbar.php'; ?>
<body style="background-color: lightblue;">
    

<div   class="container" style= "margin-top:50px">

<div   class="container3" style= "margin-top:50px">

        
 <?php
    $conn = mysqli_connect("localhost","root","","diabeates");
    if($conn-> connect_error){
     die("Connection failed:". $conn-> connect_error);
      }

   $sql="SELECT user,message from contactdata";
   $result =$conn-> query($sql);

   if ($result-> num_rows >0){
   while ($row = $result-> fetch_assoc()){
    echo "</td><td><b><i>" .$row["user"]. "</td><td></b></i>";
    echo "\n";
    echo "</td><td>:" . $row["message"]. "</td><td>";
    echo "<br>";
    }
  
    echo "</table>";
  }
   else{
    echo "No Result";
   }
   


   if ($result-> num_rows > 12){   
    mysqli_query($con,'TRUNCATE TABLE contactdata');
    }

   $conn-> close();
 ?>
  


</div>







<div   class="container2" style= "margin-top:10px">
        
        <form action="contactinfo.php" method="post">
         <div class="form-group">
             <label><b>Μήνυμα:</b></label>
             <input type="text" name="message" autocomplete="off" class="form-control" required></input>
          </div>

            <button type="submit" class="btn btn-success">Υποβολή</button>
             
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