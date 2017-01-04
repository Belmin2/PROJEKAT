<?php
 include 'conn.php';
?>
 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Post a job position or create your online resume by TheJobs!">
    <meta name="keywords" content="">

    <title>Detalji o poslu</title>

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
      <div class="container">

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
          <a class="btn btn-sm btn-primary" href="user-login.php">Prijavite se</a> ili <a href="user-register.php">registruj</a>
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
  $row = $_GET['id'];

  $sql = "SELECT * FROM jobs WHERE id='$row' ";
  $query =mysqli_query($conn,$sql);
  while ($row = mysqli_fetch_array($query)) {
    ?>



    <header class="page-header bg-img size-lg" style="background-image: url(./pictures/bg-banner2.jpg)">
      <div class="container">
        <div class="header-detail">
         
          <div class="hgroup">
            <h1><?php echo $row["job_title"]?></h1>
          
            
          </div>

          <time datetime="2016-03-03 20:00"><?php echo $row["created_at"]?></time>
          <hr>

          <p class="lead"><?php echo $row["short_description"]?></p>

          <ul class="details cols-3">
            <li>
              <i class="fa fa-map-marker"></i>
              <span><?php echo $row["location"]?></span>
            </li>

            <li>
              <i class="fa fa-briefcase"></i>
              <span>Full time</span>
            </li>

            <li>
              <i class="fa fa-money"></i>
              <span><?php echo $row["salary"]?></span>
            </li>

            <li>
              <i class="fa fa-clock-o"></i>
              <span><?php echo $row["working_hours"]?></span>
            </li>

            <li>
              <i class="fa fa-flask"></i>
              <span><?php echo $row["experience"]?></span>
            </li>

            <li>
              <i class="fa fa-certificate"></i>
              <a href="#"><?php echo $row["certificate"]?></a>
            </li>
          </ul>

          <div class="button-group">
            <ul class="social-icons">
              <li class="title">Podijeli na</li>
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>

            <div class="action-buttons">
              <a class="btn btn-primary" href="#">Priajvite se na linkedin</a>
              <a class="btn btn-success" href="#">Prijavite se</a>
            </div>
          </div>

        </div>
      </div>
    </header>

  <!-- END Page header -->
  


    <!-- Main container -->
    <main>

      <!-- Job detail -->
      <section>
        <div class="container">


          <p> <?php echo $row["description"] ?></p>
        

     
        </div>
      </section>
      <!-- END Job detail -->

    </main>
  <?php 

}
?>
  
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
