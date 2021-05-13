<?php require "controllerUserData.php"; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                <form action="controllerUserData.php"  class="box" class="login-form"  method="POST">
                    <h1>Login</h1>
                    

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

                    <b><p class="text-muted"> Please enter your login and password!</p></b>
                    <input class="user-input" type="username" name="username" placeholder="Username" required value="<?php echo $username ?>">
                    <input class="user-input" type="password" name="password" placeholder="Password" required>
                    

                    <input class="btn" type="submit" name="login" value="LOGIN">
                    <br>
                     <p style="color:#0FE9F2; font-size:16px;">Not Registered? <a href="regoption.php"><b style="color:#6B5BE9; font-size:18px;">  Create an Account </b></a> </p>
                </form>
            </div>
        </div>
    </div>
</div>






</body>


</html>