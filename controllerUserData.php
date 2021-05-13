
<?php 

require "connection.php";
$email = "";
$eidos = "";
$username = "";
$name = "";
$surname = "";
$errors = array();





// signup button

if(isset($_POST['signup']))
{
    if( $_POST['eidos']=='user')
    {
        $username = mysqli_real_escape_string($con, $_POST['username']?? "") ;
        $name = mysqli_real_escape_string($con, $_POST['name']?? "");
        $surname = mysqli_real_escape_string($con, $_POST['surname']?? "");
        $email = mysqli_real_escape_string($con, $_POST['email']?? "");
        $password = mysqli_real_escape_string($con, $_POST['password']?? "");
        $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']?? "");    
        $eidos = mysqli_real_escape_string($con, $_POST['eidos']?? "");        
        $age = mysqli_real_escape_string($con, $_POST['age']?? "");
        $weight = mysqli_real_escape_string($con, $_POST['weight']?? "");
        $height = mysqli_real_escape_string($con, $_POST['height']?? "");
        $type = mysqli_real_escape_string($con, $_POST['type']?? "");
        $measure = mysqli_real_escape_string($con, $_POST['measure']?? "");
    

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
            $insert_data = "INSERT INTO user (eidos,username, password, name, surname, reg_date, email,age, weight, height, type, measure)
                            values('$eidos', '$username', '$encpass', '$name', '$surname', '$reg_date','$email', '$age','$weight','$height', '$type' ,'$measure')";
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
    }elseif($_POST['eidos']=='doctor')
    {
        $username = mysqli_real_escape_string($con, $_POST['username']?? "") ;
        $name = mysqli_real_escape_string($con, $_POST['name']?? "");
        $surname = mysqli_real_escape_string($con, $_POST['surname']?? "");
        $email = mysqli_real_escape_string($con, $_POST['email']?? "");
        $password = mysqli_real_escape_string($con, $_POST['password']?? "");
        $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']?? "");    
        $eidos = mysqli_real_escape_string($con, $_POST['eidos']?? "");        
        $age = mysqli_real_escape_string($con, $_POST['age']?? "");
        $number = mysqli_real_escape_string($con, $_POST['number']?? "");
        $address = mysqli_real_escape_string($con, $_POST['address']?? "");
        $speciality = mysqli_real_escape_string($con, $_POST['speciality']?? "");



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
            $insert_data = "INSERT INTO user (eidos,username, password, name, surname, reg_date, email ,age, number, address, speciality)
                            values('$eidos', '$username', '$encpass', '$name', '$surname', '$reg_date','$email', '$age','$number','$address', '$speciality')";
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
       $type = $fetch['eidos'];
        if(password_verify($password, $fetch_pass)){ 
            session_start();
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            
            $_SESSION['type']=$type;
           if($type=='doctor')
           {
                header("Location:home_doctor.php");
           }elseif ($type=='user'){
                header("Location:home.php");
           }
           else
           {
                $errors['username'] = "Incorrect username or password!";
                header("Location:index.php");
           }
        }else{
             $errors['username'] = "Incorrect username or password!";
             header("Location:index.php");
            
        }
    }else{
        $errors['username'] = "It's look like you're not yet a member! <br> Click on the bottom link to create an account.";
        header("Location:index.php");
    }

}
?>