<?php 
session_start();

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Artifika" rel="stylesheet">


    <title>DEMO</title>

    <style>
    body{
      font-family: 'Artifika', serif;
    }
    form{
      border: 2px solid #EBEBEB;
      border-radius: 5px;
      padding: 20px;
    }
    </style>
  </head>
  <body>
    <div class="container pt-5 mt-5">
          <form style="width: 500px;" class="m-auto" method="post" action="">
               <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
               </div>
               <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
               </div>
               <div class="form-group form-check">
                    <input name="remember" type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Remember me</label>
               </div>
               
              <?php 

              if(isset($_POST['submit'])){

                $pre_set_email = "sam@something.com";
                $pre_set_pass = "test12345";

                $form_email = $_POST['email'];
                $form_password = $_POST['password'];
                $check = isset($_POST['remember']);


                if($form_email == $pre_set_email && $form_password == $pre_set_pass){
                  $_SESSION['email'] = $form_email;
                  if($check  == 1){
                    setcookie('email', $form_email, time() + 60);
                    echo $_COOKIE['email'];
                  }
                  header("Location: index.php");
                }else{
                  echo '<div class="alert alert-danger" role="alert">
                  invalid email or password
                </div>';
                }
                
              }

              ?>
               <button name="submit" type="submit" class="btn btn-primary w-100">Submit</button>
          </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  </body>
</html>