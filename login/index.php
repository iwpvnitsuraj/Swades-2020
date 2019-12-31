<?php
include('login.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
header("location: profile.php"); // Redirecting To Profile Page
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="shortcut icon" type="image/png" href="images/conso-icon.png">
  <title>SWADES'20 | LOGIN</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <script type="text/javascript">
      $(window).on('scroll', function(){
          if ($(window).scrollTop()) {
              $('nav').addClass('onscrollclass');
          }
          else{
              $('nav').removeClass('onscrollclass');
          }
      })
      $(window).on('scroll', function(){
          if ($(window).scrollTop()) {
              $('nav').removeClass('navigator');
          }
          else{
              $('nav').addClass('navigator');
          }
      })
  </script>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!------ Include the above in your HEAD tag ---------->
  <title>SWADES'20 | VNIT</title>
  <link rel="stylesheet" type="text/css" href="login-style.css">
</head>
<body style="background: black;">
  <nav class="">
       
        <div class="ecell-logo">
            <a href="https://consortium.ecellvnit.org/"><img src="images/ecell-logo.png" width="150px" height="50px" alt="ecell-logo"></a>
        </div>
        <ul class="nav-links">
            
        </ul>
    </nav>
    <div class="social-entre"><h1 style="margin-left: 0%; margin-top: 7%; color: white; text-align: center;">Social Entrepreneurs</h1></div>
  <div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <h1 class="welcomelogin">Welcome</h1>
    </div>
    

    <!-- Login Form -->
    <form class="form" action="" method="post">
      <input type="text" id="login" class="fadeIn second" name="username" placeholder="Team Name">
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="Password">
      <input type="submit" name="submit" value="login" id="login-button" class="fadeIn fourth" value="Log In">
      <span><?php echo $error; ?></span>
      <!--<input type="submit" class="fadeIn fourth" value="Log In">-->
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      Do not have an account? <a class="underlineHover" href="\ecellweb/swades-signup/index.php">Sign Up</a>
    </div>

  </div>
</div>
<script src="navbar.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('ul li').click(function(){
                $(this).siblings().removeClass('active');
                $(this).toggleClass('active');
            })
        })
    </script>
</body>
</html>
