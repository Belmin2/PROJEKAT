<?php
 include 'conn.php';
?>
<?php 
session_start();
if (isset($_SESSION["name"])) {
  echo '<h3 style="text-align:center;">Login succes, Wellcome - '.$_SESSION['name'].'</h3>';
  echo "<p class='text-center'><a class='btn btn-sm btn-primary' href='logout.php'>Logout</a></p>";


} 
else {
   header("loocation: login.php");
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

    <title>TheJobs</title>

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
          <a class="btn btn-sm btn-primary" href="user-login.php">Prijavite se</a> ili <a href="user-register.php">registrujte</a>
        </div>
        <!-- END User account -->

          <!--Navigation menu -->
        <div class="menu">
          <?php include 'menu-1.php';?>
          </div>
    
        <!-- END Navigation menu -->
    <!-- Site header -->
    <header class="site-header size-lg text-center" style="background-image: url(./pictures/bg-banner1.jpg)">
      <div class="container">
        <div class="col-xs-12">
          <br><br>
           <h2>Nudimo <mark>1,259</mark>radnih mjesta odmah!</h2>
          <h5 class="font-alt">Pronađite vašu želju u minuti</h5>
          <br><br><br>
          <form class="header-job-search">
            <div class="input-keyword">
              <input type="text" class="form-control" placeholder="Opis posla, vještina, ili kompanija">
            </div>

            <div class="input-location">
              <input type="text" class="form-control" placeholder="Grad, država ili poštanski">
            </div>

            <div class="btn-search">
              <button class="btn btn-primary" type="submit">Pronađi posao</button>
              <a href="#">Napredno pretraživanje</a>
            </div>
          </form>
        </div>

      </div>
    </header>
    <!-- END Site header -->


    <!-- Main container -->
    <main>



      <!-- Recent jobs -->
      <section>
        <div class="container">
          <header class="section-header">
            <span>NAJNOVIJE</span>
            <h2>Nedavni poslovi</h2>
          </header>

          <div class="row item-blocks-connected">

<?php 
$sql = "SELECT * FROM companies INNER JOIN jobs ON jobs.company_id = companies.id";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
?>

            <!-- Job item -->
            <div class="col-xs-12">
              <a class="item-block" href="job-detail.php?id=<?php echo $row['id']?>">
                <header>
                  <img src="<?php echo $row["picture"] ?>" alt="">
                  <div class="hgroup">
                    <h4><?php echo $row["job_title"] ?></h4>
                    <h5><?php echo $row["name"] ?></h5>
                  </div>
                  <div class="header-meta">
                    <span class="location"><?php echo $row["location"] ?></span>
                    <span class="label label-success"><?php echo $row["form_work"] ?></span>
                  </div>
                </header>
              </a>
            </div>
            <!-- END Job item -->

  <?php
                     }
                  } 
                  else {
                      echo "No results";
                 

                  }
             ?>


          </div>

          <br><br>
          <p class="text-center"><a class="btn btn-info" href="#">Pregledajte sve poslove</a></p>
        </div>
      </section>
      <!-- END Recent jobs -->


      <!-- Facts -->
      <section class="bg-img bg-repeat no-overlay section-sm" style="background-image: url(./pictures/bg-pattern.png)">
        <div class="container">

          <div class="row">
            <div class="counter col-md-3 col-sm-6">
              <p><span data-from="0" data-to="6890"></span>+</p>
              <h6>Poslovi</h6>
            </div>

            <div class="counter col-md-3 col-sm-6">
              <p><span data-from="0" data-to="1200"></span>+</p>
              <h6>Članovi</h6>
            </div>

            <div class="counter col-md-3 col-sm-6">
              <p><span data-from="0" data-to="36800"></span>+</p>
              <h6>Rezime</h6>
            </div>

            <div class="counter col-md-3 col-sm-6">
              <p><span data-from="0" data-to="15400"></span>+</p>
              <h6>Kompanija</h6>
            </div>
          </div>

        </div>
      </section>
      <!-- END Facts -->


      <!-- How it works -->
      <section>
        <div class="container">

          <div class="col-sm-12 col-md-6">
            <header class="section-header text-left">
              <span>TOK RADA</span>
              <h2>Kako radi</h2>
            </header>

            <p class="lead">Pellentesque et pulvinar orci. Suspendisse sed euismod purus. Pellentesque nunc ex, ultrices eu enim non, consectetur interdum nisl. Nam congue interdum mauris, sed ultrices augue lacinia in. Praesent turpis purus, faucibus in tempor vel, dictum ac eros.</p>
            <p>Nulla quis felis et orci luctus semper sit amet id dui. Aenean ultricies lectus nunc, vel rhoncus odio sagittis eu. Sed at felis eu tortor mattis imperdiet et sed tortor. Nullam ac porttitor arcu. Vivamus tristique elit id tempor lacinia. Donec auctor at nibh eget tincidunt. Nulla facilisi. Nunc condimentum dictum mattis.</p>
            
            
            <br><br>
            <a class="btn btn-primary" href="page-typography.php">Sazanjte više</a>
          </div>

          <div class="col-sm-12 col-md-6 hidden-xs hidden-sm">
            <br>
            <img class="center-block" src="./pictures/how-it-works.png" alt="how it works">
          </div>

        </div>
      </section>
      <!-- END How it works -->

  <!-- Categories -->
      <section class="bg-alt">
        <div class="container">
          <header class="section-header">
            <span>Kategorije</span>
            <h2>Popularni poslovi</h2>
            <p>Ovdje su najpopularnije kategorije</p>
          </header>

          <div class="category-grid">
            <a href="#">
              <i class="fa fa-laptop"></i>
              <h6>Tehnologija</h6>
              <p>Dezajner, Developer, IT Servis, Front-end developer, Projekt manadzment</p>
            </a>

            <a href="#">
              <i class="fa fa-line-chart"></i>
              <h6>Računovodstvo</h6>
              <p>Finansije, Poreska usluge,Knjigovodstvo,Ljudski resursi</p>
            </a>

            <a href="#">
              <i class="fa fa-medkit"></i>
              <h6>Medicina</h6>
              <p>Doktor, Medicinska sestra,Stomatološke usluge</p>
            </a>

            <a href="#">
              <i class="fa fa-cutlery"></i>
              <h6>Hrana</h6>
              <p>Restorani,Prehrana, Kaffe Shop, Blagajnik, Konobarica</p>
            </a>

            <a href="#">
              <i class="fa fa-newspaper-o"></i>
              <h6>Mediji</h6>
              <p>Žurnalizam, Novine, Reporter,Snimatelj</p>
            </a>

            <a href="#">
              <i class="fa fa-institution"></i>
              <h6>Vlada</h6>
              <p>Federalni Zakon, Ljudski resursi, Menadžer, Biolog</p>
            </a> 
          </div>

          <p class="text-center"><a class="btn btn-info" href="">Pregledaj sve kategorije</a></p>

        </div>
      </section>
      <!-- END Categories -->
      <!-- Newsletter -->
      <section class="bg-img text-center" style="background-image: url(./pictures/bg-facts.jpg)">
        <div class="container">
          <h2><strong>Upiši</strong></h2>
          <h6 class="font-alt">Nabavi sedmično nove poslove isporuči ih u inbox</h6>
          <br><br>
          <form class="form-subscribe" action="#">
            <div class="input-group">
              <input type="text" class="form-control input-lg" placeholder="Vaša email adresa">
              <span class="input-group-btn">
                <button class="btn btn-success btn-lg" type="submit">Pretpalti</button>
              </span>
            </div>
          </form>
        </div>
      </section>
      <!-- END Newsletter -->


    </main>
    <!-- END Main container -->

<?php 
include "footer.php";
?>
   

    <!-- Back to top button -->
    <a id="scroll-up" href="#"><i class="ti-angle-up"></i></a>
    <!-- END Back to top button -->

    <!-- Scripts -->
    <script src="./js/app.min.js"></script>
    <script src="./js/custom.js"></script>

  </body>
</html>
