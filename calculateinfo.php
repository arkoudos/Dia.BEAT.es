<?php require_once "controllerUserData.php"; ?>
<?php 
$username = $_SESSION['username'];
$password = $_SESSION['password'];

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

$sugar = $_POST['sugar'];
$user = $_POST['user'];

$user = $username;


$query = " insert into sugardata (sugar,user) values ('$sugar','$user') ";



echo "$query";


mysqli_query($con,$query);

header('location:home.php');


?> 