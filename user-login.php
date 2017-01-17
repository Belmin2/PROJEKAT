<?php
session_start();
 include 'conn.php';

?>
<?php 
if (isset($_POST["submit"])) {
$name = $_POST ["name"];
$password = $_POST["password"];

if(empty($name) && empty($password)){
$error_msg['name'] = "<p style='color:#FF0000'>Polje je obavezno molimo popunite ga<p>";
$error_msg['password'] = "<p style='color:#FF0000'>Polje je obavezno molimo popunite ga<p>";
}


$query = "SELECT * FROM users WHERE name='$name' AND password ='$password'";


$results = mysqli_query($conn,$query) or die(mysqli_error());
$rows = mysqli_num_rows($results);
if($rows == 1){

$_SESSION["name"] = $_POST["name"];
header("location:index.php");
}
else{
echo"<script> alert('Došlo je do greške,molimo pokušajte ponovo, provjerite vaš email i password')</script>";

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

    <title>Prijava</title>

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
       
         <a class="logo"><img src="./pictures/logo.png" alt="logo"></a>
        <h1>Priajvite se na svoj račun </h1>

        <form action="user-login.php" method="POST">

         <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="ti-user"></i></span>
              <input type="text" value="<?php if (isset($_POST['name'])){echo $_POST['name'];} ?>" name="name" class="form-control" placeholder="Vaše ime">
            </div>
          <?php
          if (isset($error_msg['name'])) {
            echo $error_msg['name'];
          }

          ?>
          </div>
          
          <hr class="hr-xs">

          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="ti-unlock"></i></span>
              <input type="password" value="<?php if (isset($_POST['password'])){echo $_POST['password'];} ?>" name="password" class="form-control" placeholder="Password">
            </div>
           <?php
          if (isset($error_msg['password'])) {
            echo $error_msg['password'];
          }
          ?>
          </div>

          <button class="btn btn-primary btn-block" name="submit" type="submit">Prijavi se</button>

          <div class="login-footer">
            <h6>Ili prijavite preko</h6>
            <ul class="social-icons">
              <li><a class="#" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="#" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="#" href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>

        </form>
      </div>

      <div class="login-links">
        <a class="pull-left" href="#">Zaboravili ste password?</a>
        <a class="pull-right" href="#">Registrujte korisnički račun</a>
      </div>

    </main>


    <!-- Scripts -->
    <script src="./js/app.min.js"></script>
    <script src="./js/custom.js"></script>

  </body>
</html>
