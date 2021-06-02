<?php require_once "controllerUserData.php"; ?>
<?php
session_start();
$username = $_SESSION['username'];
$password = $_SESSION['password'];
if ($username != false && $password != false) {
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
    <title>Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="./css/profilestyle.css">

</head>
<?php include 'navbar.php'; ?>

<body style="background-color: lightblue;">

    <div class="container" style="margin-top:50px">

        <?php
        if (isset($_SESSION['STATUS'])) {
            echo "<h4>" . $_SESSION['STATUS'] . "</h4>";
            unset($_SESSION['STATUS']);
        }
        ?>


        <div class="container2" style="margin-top:10px">
            <div class="container7" style="margin-top:10px">
                <form action="profile_update.php" method="POST">
                    <?php
                    $db = mysqli_connect("localhost", "root", "", "diabeates");

                    $query = "SELECT name,surname,email,age,weight,height,address,measure,type,foodprog  FROM user where username='" . $username . "'";
                    $rows = mysqli_query($db, $query);

                    while ($row = mysqli_fetch_assoc($rows)) {

                        echo "<a href='#'style='color:blue; font-size: 13pt'><b>  Όνομα:  </b></a>";
                        echo $row["name"];
                        echo "<br>";


                        echo "<a href='#'style='color:blue; font-size: 13pt'><b>  Επίθετο:  </b></a>";
                        echo $row["surname"];
                        echo "<br>";

                        echo "<a href='#'style='color:blue; font-size: 13pt'><b>  Email:  </b></a>";
                        echo "<br>";
                        echo $row["email"];
                        echo "<br>";
                        echo "<br>";


                        echo "<a href='#'style='color:blue; font-size: 13pt'><b>  Ηλικία:  </b></a>";
                        echo $row["age"];
                        echo "<br>";

                        echo "<a href='#'style='color:blue; font-size: 13pt'><b>  Βάρος:  </b></a>";
                        echo $row["weight"];
                        echo "<br>";

                        echo "<a href='#'style='color:blue; font-size: 13pt'><b>  Ύψος:  </b></a>";
                        echo $row["height"];
                        echo "<br>";
                        echo "<br>";

                        echo "<a href='#'style='color:blue; font-size: 13pt'><b>  Διεύθυνση:  </b></a>";
                        echo "<br>";
                        echo $row["address"];
                        echo "<br>";


                        echo "<a href='#'style='color:blue; font-size: 13pt'><b>  Μέτρηση:  </b></a>";

                        echo $row["measure"];
                        echo "<br>";

                        echo "<a href='#'style='color:blue; font-size: 13pt'><b>  Τύπος Διαβήτη:  </b></a>";

                        echo $row["type"];

                        echo "<br>";
                    }
                    ?>

                    <button a href="profile_update.php" name="change" class="myButton">Αλλαγή</a></button>
                </form>
            </div>

            <?php
            if (isset($_SESSION['STATUS'])) {
                echo "<h4>" . $_SESSION['STATUS'] . "</h4>";
                unset($_SESSION['STATUS']);
            }
            ?>



            <div class="container5">

                <?php
                $db = mysqli_connect("localhost", "root", "", "diabeates");

                $query = "SELECT foodprog  FROM user where username='" . $username . "'";
                $rows = mysqli_query($db, $query);

                while ($row = mysqli_fetch_assoc($rows)) {
                    if ($row["foodprog"] == 'program2') {
                        echo '<img src="images/22.jpg">';
                    }
                    if ($row["foodprog"] == 'program1') {
                        echo '<img src="images/11.png">';
                    }
                    if ($row["foodprog"] == 'program3') {
                        echo '<img src="images/33.png">';
                    }
                    if ($row["foodprog"] == 'none') {
                        echo "Δεν επιλέχθηκε κάποιο πρόγραμμα";
                    }
                }
                ?>

            </div>

            <div class="container6">

                <?php
                $db = mysqli_connect("localhost", "root", "", "diabeates");

                $query = "SELECT exprog  FROM user where username='" . $username . "'";
                $rows = mysqli_query($db, $query);

                while ($row = mysqli_fetch_assoc($rows)) {
                    if ($row["exprog"] == 'program2') {
                        echo '<img src="images/ex2.png">';
                    }
                    if ($row["exprog"] == 'program1') {
                        echo '<img src="images/ex1.png">';
                    }
                    if ($row["exprog"] == 'program3') {
                        echo '<img src="images/ex3.png">';
                    }
                    if ($row["exprog"] == 'none') {
                        echo "Δεν επιλέχθηκε κάποιο πρόγραμμα";
                    }
                }
                ?>

            </div>




            <div class="container4">
                <h4><b>Δημιουργία/Aλλαγή:</b></h4>
                <a href="foodprogram.php" class="programbtn">Πρόγραμμα Γευμάτων</a><br>
                <a href="exprogram.php" class="programbtn">Πρόγραμμα Aσκήσεων</a>
            </div>


        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudeflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

<footer>
    <p class="p-3 bg-dark text-white text-center position:absolute bottom:0">&copy; Copyrights 2021<br>
        <a>All rights reserved</a>
        <br>
        <a> | Powered by -dia.beat.es Team- |</a>
    </p>
</footer>

</html>