<?php
 include 'conn.php';
?>
<?php 

if (isset($_POST["submit"])) {
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];

if (empty($name) || empty($email) || empty($password)) {
$error_msg['name'] = "<p style='color:#FF0000'>Polje je obavezno molimo popunite ga<p>";
$error_msg['email'] = "<p style='color:#FF0000'>Polje je obavezno molimo popunite ga<p>";
$error_msg['password'] = "<p style='color:#FF0000'>Polje je obavezno molimo popunite ga<p>";

} else {
$q = "INSERT INTO users(name,email,password) VALUES ('$_POST[name]','$_POST[email]','$_POST[password]')";
$provjera = mysqli_query($conn,$q);
if ($provjera) {

echo "<script> alert('Uspjesna registracija')</script>";
}

else{

echo "<script> alert('Došlo je do greške molimo pokušajte ponovo')</script>";
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

    <title>Registracija</title>

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
        <h1>Priajvite se na svoj račun </h1>

        <form action="user-register.php" method="POST">

          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="ti-user"></i></span>
              <input type="text" name="name" value="<?php if(isset($_POST['name'])){echo $_POST['name'];} ?>" class="form-control" placeholder="Vaše ime">
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
              <span class="input-group-addon"><i class="ti-email"></i></span>
              <input type="text" value="<?php if(isset($_POST['email'])){echo $_POST['email'];} ?>" name="email" class="form-control" placeholder="Vaša email adresa">
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
              <input type="password" value="<?php if(isset($_POST['password'])){echo $_POST['password'];} ?>" name="password"  class="form-control" placeholder="Odaberite password">
            </div>
                          <?php
if (isset($error_msg['password'])) {
  echo $error_msg['password'];
}
  ?>
          </div>

          <button class="btn btn-primary btn-block" name="submit" type="submit" >Prijavite se</button>

          <div class="login-footer">
            <h6>ili registrujte preko</h6>
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>

        </form>
      </div>

      <div class="login-links">
        <p class="text-center">Več imate račun <a class="txt-brand" href="user-login.php">Prijavite se</a></p>
      </div>

    </main>


    <!-- Scripts -->
    <script src="./js/app.min.js"></script>
    <script src="./js/custom.js"></script>

  </body>
</html>
