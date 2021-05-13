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

$con = mysqli_connect('localhost','root');

if($con){
    echo "Conection successful";
}
else{
    echo "No connection";
}

mysqli_select_db($con, 'diabeates');

$message = $_POST['message'];
$user = $_POST['user'];

$user = $username;


$query = " insert into contactdata (message,user) values ('$message','$user') ";



echo "$query";


mysqli_query($con,$query);

header('location:contact_doctor.php');


?> 