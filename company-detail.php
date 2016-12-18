
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




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Post a job position or create your online resume by TheJobs!">
    <meta name="keywords" content="">

    <title>TheJobs - Company detail</title>

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

  <body class="nav-on-header smart-nav">

  <!-- Navigation bar -->
    <nav class="navbar">
      <div class="container"

        <!-- Logo -->
        <div class="pull-left">
          <a class="navbar-toggle" href="#" data-toggle="offcanvas"><i class="ti-menu"></i></a>

          <div class="logo-wrapper">
            <a class="logo" href="index.php"><img src="./pictures/logo.png" alt="logo"></a>
            <a class="logo-alt" href="index.php"><img src="./pictures/logo-alt.png" alt="logo-alt"></a>
          </div>

        </div>
        <!-- END Logo -->

        <!-- User account -->
        <div class="pull-right user-login">
          <a class="btn btn-sm btn-primary" href="user-login.php">Login</a> or <a href="user-register.php">register</a>
        </div>
        <!-- END User account -->

          <!--Navigation menu -->
        <div class="menu">
          <?php include 'menu-1.php';?>
          </div>
    
        <!-- END Navigation menu -->
      </div>
    </nav>
    <!-- END Navigation bar -->


    <!-- Page header -->
          <?php
$sql = "SELECT * FROM companies";
$query = mysqli_query($conn,$sql);
if (mysqli_num_rows($query)>0) {
  while ($row = mysqli_fetch_assoc($query)) {
    
?>
    <header class="page-header bg-img size-lg" style="background-image: url(./pictures/bg-banner2.jpg)">
 
      <div class="container">
        <div class="header-detail">
        
<img class="logo" src="<?php  echo $row['picture']?>">
          



        
          <div class="hgroup">
            <h1><?php echo $row['name'] ?></h1>
            <h3><?php echo $row['company_title'] ?></h3>
          </div>
          <hr>
          <p class="lead"><?php echo $row['short_discription'] ?></p>

          <ul class="details cols-3">
            <li>
              <i class="fa fa-map-marker"></i>
              <span><?php echo $row['location']?></span>
            </li>

            <li>
              <i class="fa fa-globe"></i>
              <a href="#"><?php echo $row['page_url']?></a>
            </li>

            <li>
              <i class="fa fa-users"></i>
              <span><?php echo $row['employees']?></span>
            </li>

            <li>
              <i class="fa fa-birthday-cake"></i>
              <span>From <?php echo $row['established']?></span>
            </li>

            <li>
              <i class="fa fa-phone"></i>
              <span><?php echo $row['contact']?></span>
            </li>

            <li>
              <i class="fa fa-envelope"></i>
              <a href="#"><?php echo $row['email']?></a>
            </li>
          </ul>

          <div class="button-group">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>

            <div class="action-buttons">
              <a class="btn btn-gray" href="#">Favorite</a>
              <a class="btn btn-success" href="#">Contact</a>
            </div>
          </div>

        </div>
      </div>
    </header>
    <!-- END Page header -->


    <!-- Main container -->
    <main>


      <!-- Company detail -->
      <section>
        <div class="container">

          <header class="section-header">
            <span>About</span>
            <h2>Company detail</h2>
          </header>
  <p><?php echo $row['description']?></p>
        </div>
      </section>
 <?php 
 }     
}
else{
echo "No companies";
}


 ?>
      <!-- END Company detail -->


      <!-- Open positions -->
      <section id="open-positions" class="bg-alt">
        <div class="container">
          <header class="section-header">
            <span>vacancies</span>
            <h2>Open positions</h2>
          </header>
          
         
            
      </section>
      <!-- END Open positions -->


    </main>
    <!-- END Main container -->


    <!-- Site footer -->
 <?php include 'footer.php'; ?>
    <!-- END Site footer -->


    <!-- Back to top button -->
    <a id="scroll-up" href="#"><i class="ti-angle-up"></i></a>
    <!-- END Back to top button -->

    <!-- Scripts -->
    <script src="./js/app.min.js"></script>
    <script src="./js/custom.js"></script>

  </body>
</html>
