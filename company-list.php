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

    <title>TheJobs - Company list</title>

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

  <body class="nav-on-header smart-nav bg-alt">

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
    <header class="page-header bg-img" style="background-image: url(./pictures/bg-banner1.jpg);">
      <div class="container page-name">
        <h1 class="text-center">Browse companies</h1>
        <p class="lead text-center">Use following search box to find companies that fits you better</p>
      </div>

      <div class="container">
        <form action="#">

          <div class="row">
            <div class="form-group col-xs-12 col-sm-4">
              <input type="text" class="form-control" placeholder="Keyword">
            </div>

            <div class="form-group col-xs-12 col-sm-4">
              <input type="text" class="form-control" placeholder="Location">
            </div>

            <div class="form-group col-xs-12 col-sm-4">
              <select class="form-control selectpicker" multiple>
                <option selected>All categories</option>
                <option>Developer</option>
                <option>Designer</option>
                <option>Customer service</option>
                <option>Finance</option>
                <option>Healthcare</option>
                <option>Sale</option>
                <option>Marketing</option>
                <option>Information technology</option>
                <option>Others</option>
              </select>
            </div>

          </div>

          <div class="button-group">
            <div class="action-buttons">
              <button class="btn btn-primary">Apply filter</button>
            </div>
          </div>

        </form>

      </div>

    </header>
    <!-- END Page header -->


    <!-- Main container -->
    <main>
      <section class="no-padding-top bg-alt">
        <div class="container">
          <div class="row">

            <div class="col-xs-12">
              <br>
           
            </div>

<?php 
$sql = "SELECT * FROM companies";
$query = mysqli_query($conn,$sql);
if (mysqli_num_rows($query)>0) {
  while ($row = mysqli_fetch_assoc($query)) {
 
 ?>
 
<!-- Company detail -->
            <div class="col-xs-12">
              <a class="item-block" href="company-detail.php">
                <header>
                  <img src="<?php echo $row["picture"] ?>" alt="">
                  <div class="hgroup">
                    <h4><?php echo $row["name"] ?></h4>
                    <h5><?php echo $row["company_title"] ?></h5>
                  </div>
                  <span class="open-position"></span>
                </header>

                <div class="item-body">
                  <p><?php echo $row["short_discription"] ?></p>
                </div>
              </a>
            </div>
            <!-- END Company detail -->
 <?php 
 }     
}
else{
echo "No companies";
}


 ?>


            <!-- Page navigation -->
            <nav class="text-center">
              <ul class="pagination">
                <li>
                  <a href="#" aria-label="Previous">
                    <i class="ti-angle-left"></i>
                  </a>
                </li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li class="active"><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li>
                  <a href="#" aria-label="Next">
                    <i class="ti-angle-right"></i>
                  </a>
                </li>
              </ul>
            </nav>
            <!-- END Page navigation -->

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
