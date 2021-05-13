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

$sugar = $_POST['sugar'];
$user = $_POST['user'] ?? "";
$user = $username;

$ypog = $_POST['ypog'] ?? "";
$ypog= 0;

$ans = $_POST['ans'] ?? "";
$num1 =100;
$num2=50;
$ans = ($sugar-$num1)/$num2;



if (($ans <= 0)) {
   $ans = 0;   
    }
if (($sugar >= 380)) {
 $ans = "$ans - ΚΙΝΔΥΝΟΣ ";   
 }




 if (($sugar < 100)){
    $ypog= $num1 - $sugar;
    }



$query = " insert into sugardata (sugar,ans,user,ypog) values ('$sugar','$ans','$user','$ypog') ";


mysqli_query($con,$query);

header('location:calculate.php');


?> 