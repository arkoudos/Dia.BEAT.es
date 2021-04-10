<?php 
session_start();
require "connection.php";
$email = "";
$username = "";
$name = "";
$surname = "";
$errors = array();

// signup button
if(isset($_POST['signup']))
{
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $surname = mysqli_real_escape_string($con, $_POST['surname']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
    if($password !== $cpassword){
        $errors['password'] = "Passwords not matched ... Try Again";
    }
    $email_check = "SELECT * FROM user WHERE email = '$email'";
    $res = mysqli_query($con, $email_check);
    if(mysqli_num_rows($res) > 0){
        $errors['email'] = "Email that you have entered is already exist!";
    }
    $username_check = "SELECT * FROM user WHERE username = '$username'";
    $sc = mysqli_query($con, $username_check);
    if(mysqli_num_rows($sc) > 0 ){
        $errors['username'] = "The Username you have entered is already exists!";
    }
    if(count($errors) === 0)
    {
        $encpass = password_hash($password, PASSWORD_BCRYPT);
        date_default_timezone_set('Europe/Athens');
        $reg_date = date('Y/m/d H:i:s');
        $insert_data = "INSERT INTO user (username, password, name, surname, reg_date, email)
                        values('$username', '$encpass', '$name', '$surname', '$reg_date','$email')";
        $data_check = mysqli_query($con, $insert_data);
      

      if($data_check){
        $_SESSION['email']= $email;
        $_SESSION['password']=$password;
                header('location:index.php');

                exit();
                
            }else{
                $errors['db-error'] = "Failed while inserting data into database!";
            }
      
    }

}



   
// login button
if(isset($_POST['login'])){
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $check_username = "SELECT * FROM user WHERE username = '$username'";
    $res = mysqli_query($con, $check_username);

    if(mysqli_num_rows($res) > 0){
        $fetch = mysqli_fetch_assoc($res);
        $fetch_pass = $fetch['password'];
        if(password_verify($password, $fetch_pass)){
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            header('location:home.php');
        }else{
            $errors['username'] = "Incorrect username or password!";
        }
    }else{
        $errors['username'] = "It's look like you're not yet a member! <br> Click on the bottom link to create an account.";
    }
}
?>