<?php
require_once "controllerUserData.php";
require "connection.php";
$pedding_doc = "SELECT count(*) FROM user WHERE eidos = 'doctor' AND activated = 'false'";
$res = mysqli_query($con, $pedding_doc);
$reso = mysqli_fetch_array($res);
?>
<?php
session_start();
$username = $_SESSION['username'];
$password = $_SESSION['password'];
$type = $_SESSION['type'];
if ($username != false && $password != false && $type == 'admin') {
} else {
    header('Location:index.php');
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/jpg" href="./images/favicon.ico" />
    <title>Adminstrator Panel</title>
    <link rel="stylesheet" type="text/css" href="./css/admin.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>



</head>

<body style="background-color: lightblue;">
    <?php include 'admin_navbar.php'; ?>

    <div class="container">
        <div id="doctors">
            <h1><u>Pedding Doctors</u></h1>
            <div>
                <?php
                echo " <b><font color=blue size='5.5pt'>  $reso[0] </font></b>";
                ?>
            </div>
        </div>

        <div id="news">
            <h1><u>Pedding News</u></h1>
            <div>Fetching data from database....</div>
        </div>


        <div id="doctorProgram">
            <a href="#" class="myButton">Πρόγραμμα <br /> Γιατρών</a>
        </div>

        <div id="support">
            <a href="#" class="myButton">Παροχή <br /> Υποστήριξης</a>
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