<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "baza_1";

// Create connection
$conn = mysqli_connect($servername, $username, $password , $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
<?php 

if (isset($_POST["submit"])) {
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];

if (empty($name) || empty($email) || empty($password)) {
echo "You did not fill out the required fields.";
} else {
$q = "INSERT INTO register(name,email,password) VALUES ('$_POST[name]','$_POST[email]','$_POST[password]')";
$provjera = mysqli_query($conn,$q);
if ($provjera) {
  echo "Successful registration";
}

else{

  echo "An error occurred";
}

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

    <title>TheJobs - Register</title>

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
        <img src="./pictures/logo.png" alt="">
        <h1>Log into your account</h1>

        <form action="user-register.php" method="POST">

          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="ti-user"></i></span>
              <input type="text" name="name" class="form-control" placeholder="Your name">
            </div>
          </div>
          
          <hr class="hr-xs">

          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="ti-email"></i></span>
              <input type="text" name="email" class="form-control" placeholder="Your email address">
            </div>
          </div>
          
          <hr class="hr-xs">

          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="ti-unlock"></i></span>
              <input type="password" name="password" class="form-control" placeholder="Choose a password">
            </div>
          </div>

          <button class="btn btn-primary btn-block" name="submit" type="submit" >Sign up</button>

          <div class="login-footer">
            <h6>Or register with</h6>
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>

        </form>
      </div>

      <div class="login-links">
        <p class="text-center">Already have an account? <a class="txt-brand" href="user-login.html">Login</a></p>
      </div>

    </main>


    <!-- Scripts -->
    <script src="./js/app.min.js"></script>
    <script src="./js/custom.js"></script>

  </body>
</html>
