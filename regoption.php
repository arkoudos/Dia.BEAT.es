

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/jpg" href="./images/favicon.ico"/>
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
                
                <form action="user.php"  class="box" class="signup-form"  method="POST">
                    <h1>Register</h1>

                    <form class="signup-form" action="" method="POST">
                         <div> 
                        
                        <input type="radio" id="user" name="user_type" value="user">
                        <label for="user"><b style="color:#B58C0B; font-size:23px;">Χρήστης</b></label>
                        <br>
                        <br>
                        
                        <input type="radio" id="doctor" name="user_type" value="doctor">
                        <label for="doctor"><b style="color:#B58C0B; font-size:23.5px;">Γιατρός</b></label><br><br>
                        </div>
            <input class="btn" type="submit" name="signup" value="SIGN UP">
            </form>
            </div>
        </div>
    </div>
</div>


</body>


</html>