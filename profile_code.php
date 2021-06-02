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

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
            
    $age =$_POST['age'];
    $weight =$_POST['weight'];
    $height =$_POST['height'];
    $type =$_POST['type'];
    $measure =$_POST['measure'];
    $address=$_POST['address'];


    $query="UPDATE user SET name='$name', surname='$surname', email='$email', age='$age' , weight='$weight',  height='$height', type='$type', measure='$measure',address='$address' WHERE username='$username' ";

    $query_run=mysqli_query($con, $query);   
    

   

    if($query_run)
        {
        $_SESSION['STATUS'] = "<b><font color=green size='5pt'> -Data Updated-</font></b>";
        header("Location: home.php");
    }
    else
    {
        $_SESSION['STATUS'] = "<b><font color=black size='5pt'> -Data NOT Updated-</font></b>";
        header("Location: home.php");
    }

    
    
?>
