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
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./css/calculatestyle.css">
    
 </head>
 <?php include 'navbar.php'; ?>


<body style="background-color: lightblue;">
    
 <div   class="container" style= "margin-top:50px">    
        <div   class="container2" style= "margin-top:10px">
            <form action="calculateinfo.php" method="post">
              <h2><b>Προσθήκη Μέτρησης</b></h2> 
                <input  type="number"  name="sugar" text-align=center placeholder="Προσθήκη Μέτρησης"require>
                <br>
                <br>

                                          
                <button a href="#" name="calc" class="myButton">Αποθήκευση</a></button>
                <br>
                <br>
                
                
                <b>Τελευταίος Υπολογισμός</b>
                <br>
                <b>Μονάδων Ινσουλίνης:</b>
                <br>

                <?php    
                    $conn = mysqli_connect("localhost","root","","diabeates");
                     if($conn-> connect_error){
                     die("Connection failed:". $conn-> connect_error);
                        }
                   
                     $sql="SELECT ans FROM sugardata WHERE id=(SELECT max(id) FROM sugardata where user='".$username."')";
                     $result =$conn-> query($sql);

                     
                    if ($result-> num_rows >0){
                         while ($row = $result-> fetch_assoc()){
                         echo " <b><font color=blue size='5.5pt'>  $row[ans] </font></b>";
                         }
                     
                    }
                ?>

            </form>
            


            <div class="container3" style= "margin-top:5px">
            <h2><b>Προτεινόμενα Φαγητά</b></h2>
            <br>
           
               
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