
<?php

session_start();
if(isset($_COOKIE['email'])){
  $_SESSION['email'] = $_COOKIE['email'];
}
if(!isset($_SESSION['email']) ){
  header("Location: login.php");
}

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Artifika" rel="stylesheet">


    <title>Log In</title>
    
    <style>
    body{
      font-family: 'Artifika', serif;
    }
    </style>
  </head>
  <body>
       <div class="container">
          <div class="jumbotron mt-5">
               <h1 class="display-4">Hello, world!</h1>
               <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
               <hr class="my-4">
               <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
               <a class="btn btn-primary btn-lg" href="logout.php" role="button">Log out</a>
          </div>
       </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  </body>
</html>