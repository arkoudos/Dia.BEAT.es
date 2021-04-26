<?php require_once "controllerUserData.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dia.BEAT.es</title>

    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
</head>
<body>

    <!-- Login Form  Start-->
    <div class="form">
        <form action="index.php" class="login-form" method="POST">
            <i class="fas fa-user-circle"></i>

            <!-- Incorrect data notification start-->
            <?php
                if (count($errors) == 1){
            ?>
        
            <div class="alert alert-danger ">

            <?php
                foreach ($errors as $showerror){
                    echo $showerror;
                }
            ?>
            </div>
            <?php
            }
            elseif (count($errors) > 1){
            ?>
                <div class="alert alert-danger">
            <?php
                foreach ($errors as $showerror){
            ?>
                <li><?php echo $showerror; ?></li>
            <?php
                }
            ?>
                </div>
            <?php
            }
            ?>
            <!-- Incorrect data notification end-->
            <!-- <input class="user-input" type="text" name="user_or_email" placeholder="Username or Email" required value="<//?php echo $email ?>"> -->
            <input class="user-input" type="username" name="username" placeholder="Username" required value="<?php echo $username ?>">
            <input class="user-input" type="password" name="password" placeholder="Password" required>
            <div class="options-01">
                <label class="remember-me"><input type="checkbox" name="">Remember me</label>
            </div>

            <input class="btn" type="submit" name="login" value="LOGIN">

            <div class="options-02">
                <p>Not Registered? <a href="#">Create an Account</a></p>
            </div>
        </form>
    
    <!-- Login Form  End-->

    <!-- Signup Form Start -->
        <form class="signup-form" action="" method="POST">
            <i class="fas fa-user-plus"></i>
            <input class="user-input" type="username" name="username" placeholder="Username" required value="<?php echo $username ?>">
            <input class="user-input" type="password" name="password" placeholder="Password" required>
            <input class="user-input" type="password" name="cpassword" placeholder="Confirm Password" required>
            <input class="user-input" type="text" name="name" placeholder="Name" required value="<?php echo $name ?>">
            <input class="user-input" type="text" name="surname" placeholder="Surname" required value="<?php echo $surname ?>">
            <input class="user-input" type="email" name="email" placeholder="Email Address" required value="<?php echo $email ?>">

            
                
            <input class="btn" type="submit" name="signup" value="SIGN UP">
            <div class="options-02">
                <p>Already Registered? <a href="#">Sign In</a></p>
            </div>
        </form>
    </div>
    <!-- Signup Form End -->

    <script type="text/javascript" src="./js/index.js"></script>
    
</body>
</html>