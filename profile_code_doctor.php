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
    $number =$_POST['number'];
    $address =$_POST['address'];
    $speciality =$_POST['speciality'];
    


    $query="UPDATE user SET name='$name', surname='$surname', email='$email', age='$age' , number='$number', address='$address' , 
             speciality='$speciality' WHERE username='$username' ";

    $query_run=mysqli_query($con, $query);   
    



    if($query_run)
        {
        $_SESSION['STATUS'] = "Data Updated";
        header("Location: home_doctor.php");
    }
    else
    {
        $_SESSION['STATUS'] = "Not Updated";
        header("Location: home_doctor.php");
    }

    
    
?>
