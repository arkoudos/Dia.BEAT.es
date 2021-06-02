<!DOCTYPE html>

  <head>
    <meta charset="utf-8">
   
    <link rel="shortcut icon" type="image/jpg" href="./images/favicon.ico" />
    <link rel="stylesheet" href="css/navbar.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
  
  
    <nav>

      <ul>
        
  <a href="home_doctor.php"><img src="images/diabeates_logo.png"  height="58"></a>
<li class="logo"></li>

<li class="items"><a href="home_doctor.php">Home</a></li>
<li class="items"><a href="profile_doctor.php">Profile</a></li>
<li class="items"><a href="news_doctor.php">News</a></li>
<li class="items"><a href="contact_doctor.php">Contact</a></li>
<li class="btn"><a href="#"><i class="fas fa-bars"></i></a></li>
<li class="items"><a href="logout.php"><i class="btn btn-outline-success my-2 my-sm-0"> Logout</i></a></li>
</ul>

</nav>
    <script>
      $(document).ready(function(){
        $('.btn').click(function(){
          $('.items').toggleClass("show");
          $('ul li').toggleClass("hide");
        });
      });
    </script>
  </body>
</html>

