<?php

//Konekcija
$conn = mysqli_connect('localhost','root','','baza_1');
?>
<?php 
if (isset($_POST["submit"])) {
$email = $_POST["email"];
$password = $_POST["password"];

$q = "INSERT INTO login(email,password) VALUES ('$_POST[email]','$_POST[password]')";
$provjera = mysqli_query($conn,$q);
if ($provjera) {
  echo "Successful registration";
}

else{

  echo "An error occurred";
}

}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Post a job position or create your online resume by TheJobs!">
    <meta name="keywords" content="">

    <title>TheJobs - Login</title>

    <!-- Styles -->
    <link href="./css/app.min.css" rel="stylesheet">
    <link href="./css/custom.css" rel="stylesheet">

    <!-- Fonts -->
    <link rel="stylesheet" href="font-awesome_4.6.3/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Oswald:100,300,400,500,600,800%7COpen+Sans:300,400,500,600,700,800%7CMontserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <link rel="icon" href="./pictures/favicon.ico">
  </head>

  <body class="login-page">


    <main>

      <div class="login-block">
        <img src="./pictures/logo.png" alt="logo">
        <h1>Log into your account</h1>

        <form action="user-login.php" method="POST">

          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="ti-email"></i></span>
              <input type="text" name="email" class="form-control" placeholder="Email">
            </div>
          </div>
          
          <hr class="hr-xs">

          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="ti-unlock"></i></span>
              <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
          </div>

          <button class="btn btn-primary btn-block" name="submit" type="submit">Login</button>

          <div class="login-footer">
            <h6>Or login with</h6>
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>

        </form>
      </div>

      <div class="login-links">
        <a class="pull-left" href="user-forget-pass.php">Forget Password?</a>
        <a class="pull-right" href="user-register.php">Register an account</a>
      </div>

    </main>


    <!-- Scripts -->
    <script src="./js/app.min.js"></script>
    <script src="./js/custom.js"></script>

  </body>
</html>
