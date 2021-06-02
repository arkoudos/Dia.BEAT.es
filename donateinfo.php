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

$donateamount = $_POST['donateamount'];
$user = $_POST['user'] ?? "";
$user = $username;

$card = $_POST['card'];
$cvv = $_POST['cvv'];
$date=$_POST['date'];

$query = " insert into donatedata (donateamount,user,card,cvv,date) values ('$donateamount','$user','$card','$cvv', '$date') ";


mysqli_query($con,$query);



if($query_run)
{
$_SESSION['STATUS'] = "Donate Error;";
header("Location: home.php");
}
else
{
$_SESSION['STATUS'] = "Donate Successful";
header("Location: home.php");
}



?> 