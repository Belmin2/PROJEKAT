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

    <title>Kontaktirajte nas</title>

    <!-- Styles -->
    <link href="./css/app.min.css" rel="stylesheet">
    <link href="./css/custom.css" rel="stylesheet">

    <!-- Fonts -->
    <link rel="stylesheet" href="font-awesome_4.6.3/css/font-awesome.min.css">
<link href='http://fonts.googleapis.com/css?family=Raleway:100,300,400,500,600,800%7COpen+Sans:300,400,500,600,700,800%7CMontserrat:400,700' rel='stylesheet' type='text/css'>

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
          <a class="btn btn-sm btn-primary" href="user-login.php">Prijavite se</a> ili <a href="user-register.php">registrujte</a>
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


    <!-- Site header -->
    <header class="page-header bg-img size-lg" style="background-image: url(./pictures/bg-banner2.jpg)">
      <div class="container no-shadow">
        <h1 class="text-center">Kontaktirajte nas</h1>
        <p class="lead text-center">Pozdrav napišite poruku, i pratite nas na društvenim medijima.</p>
      </div>
    </header>
    <!-- END Site header -->


    <!-- Main container -->
    <main>

      <section>
        <div class="container">


          <br><br>

          <div class="row">
            <div class="col-sm-12 col-md-8">
              <?php 

            if (isset($_POST["submit"])) {              
              
              $name = $_POST["name"];
              $email = $_POST["email"];
              $message = $_POST["message"];
         


            if (empty($name) || empty($email) || empty($message)) {
              echo "<h3 style='text-align:center;color:#0000;'>You did not fill out the requierd fields<h3>";
            } 
            else {
              $subject = "Message has been sent to the page";
              $from = "From: $name<$email>";
           mail('bvk387@gmail.com', $subject, $message, $from);
         echo "Message has been succesefully sent";
          }
         }

              ?>




              <h4>Kontakt forma</h4>
              <form action="page-contact.php" method="POST">
                <div class="form-group">
                  <input type="text" name="name" class="form-control input-lg" placeholder="Ime">
                </div>

                <div class="form-group">
                  <input type="email"  name="email" class="form-control input-lg" placeholder="email">
                </div>

                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" placeholder="Poruka"></textarea>
                </div>
                
                <button type="submit" name="submit" class="btn btn-primary">Pošalji</button>
              </form>
           
            </div>

            <div class="col-sm-12 col-md-4">
              <h4>Informacije</h4>
              <div class="highlighted-block">
                <dl class="icon-holder">
                  <dt><i class="fa fa-map-marker"></i></dt>
                  <dd>Travnik</dd>

                  <dt><i class="fa fa-phone"></i></dt>
                  <dd>+38761700734</dd>

                  <dt><i class="fa fa-fax"></i></dt>
                  <dd>(+1) 123 456 7890</dd>

                  <dt><i class="fa fa-envelope"></i></dt>
                  <dd>bvk387@gmail.com</dd>
                </dl>
              </div>

              <br>

              <ul class="social-icons size-sm text-center">
                <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
              </ul>

            </div>
          </div>

        </div>
      </section>


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
