<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/jpg" href="./images/favicon.ico" />
    <title>Dia.BEAT.es</title>

    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
    </head>

<body>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
<?php 
session_start();
require "connection.php";

$user_type=$_POST['user_type'];


if(isset($_POST['user_type']))
{

    if ($user_type=='doctor')
    {
        echo '<form action="index.php"  class="box" class="signup-form"  method="POST">
        <h1>Register</h1>

        <input class="user-input" type="hidden" name="eidos" value='.$user_type.'>
            <input class="user-input" type="username" name="username" placeholder="Username" required>
            <input class="user-input" type="password" name="password" placeholder="Password" required>
            <input class="user-input" type="password" name="cpassword" placeholder="Confirm Password" required>
            <input class="user-input" type="text" name="name" placeholder="Name" required>
            <input class="user-input" type="text" name="surname" placeholder="Surname" required>
            <input class="user-input" type="email" name="email" placeholder="Email Address" required>
            <input class="user-input" type="text" name="age" placeholder="Age" required>
            <input class="user-input" type="text" name="number" placeholder="Telephone" required>
            <input class="user-input" type="text" name="address" placeholder="Address" required>
            <input class="user-input" type="text" name="speciality" placeholder="Speciality" required>


        <input class="btn" type="submit" name="signup" value="SIGN UP">

        </form>';
    }
    elseif ($user_type=='user')
    {
        echo '<form action="index.php"  class="box" class="signup-form"  method="POST">
        <h1>Register</h1>

        <input class="user-input" type="hidden" name="eidos" value='.$user_type.'>
        <input class="user-input" type="text" name="name" placeholder="Name" required>
        <input class="user-input" type="text" name="surname" placeholder="Surname" required>
        <input class="user-input" type="username" name="username" placeholder="Username" required>
        <input class="user-input" type="password" name="password" placeholder="Password" required>
        <input class="user-input" type="password" name="cpassword" placeholder="Confirm Password" required>
        <input class="user-input" type="email" name="email" placeholder="Email Address" required>
        <input class="user-input" type="text" name="age" placeholder="Age" required>
        <input class="user-input" type="text" name="weight" placeholder="Weight" required>
        <input class="user-input" type="text" name="height" placeholder="Height" required>

            <h2><b style="color:#1DA9AE; font-size:22px;">  Τύπος Διαβήτη </b></h2>
            <input type="radio" id="1" name="type" value="1">
            <label for="1"><b style="color:#B58C0B; font-size:18px;">1</b></label>
            
            <input type="radio" id="2" name="type" value="2">
            <label for="2"><b style="color:#B58C0B; font-size:18px;">2</b></label>

            <input type="radio" id="other" name="type" value="Άλλο">
            <label for="other"><b style="color:#B58C0B; font-size:18px;">Άλλο</b></label>

            <h2><b style="color:#1DA9AE; font-size:22px;">  Μονάδα Μέτρησης </b></h2>
            <input type="radio" id="1" name="measure" value="mg/dL">
            <label for="1"><b style="color:#B58C0B; font-size:18px;"> mg/dL </b></label>
            

            <input type="radio" id="2" name="measure" value="mmol/L">
            <label for="2"><b style="color:#B58C0B; font-size:18px;">  mmol/L </b></label>
            
        <input class="btn" type="submit" name="signup" value="SIGN UP">
        </form>';
    }
    else{
        header('location:index.php');
    }

   
}else{
    header('location:index.php');
}
?>
  </div>
        </div>
    </div>
</div>


</body>


</html>