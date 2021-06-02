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

<?php 

    require "connection.php";

    $foodprog =$_POST['foodprog'];
    
   

    $query="UPDATE user SET foodprog='$foodprog' WHERE username='$username' ";

    $query_run=mysqli_query($con, $query);    
    

    if($query_run)
        {
              $_SESSION['STATUS'] = "Data updated"; 
              header("Location: home.php");    
        }
    else
    {
        $_SESSION['STATUS'] = "Not Updated";
        header("Location: home.php");
    }

    
    
?>
