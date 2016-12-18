
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

    <title>TheJobs - Job list</title>

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

        <!-- Navigation menu -->
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
        <h1 class="text-center">Browse jobs</h1>
        <p class="lead text-center">Use following search box to find jobs that fits you better</p>
      </div>

      <div class="container">
        <form action="#">

          <div class="row">
            <div class="form-group col-xs-12 col-sm-4">
              <input type="text" class="form-control" placeholder="Keyword: job title, skills, or company">
            </div>

            <div class="form-group col-xs-12 col-sm-4">
              <input type="text" class="form-control" placeholder="Location: city, state or zip">
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


            <div class="form-group col-xs-12 col-sm-4">
              <h6>Contract</h6>
              <div class="checkall-group">
                <div class="checkbox">
                  <input type="checkbox" id="contract1" name="contract" checked>
                  <label for="contract1">All types</label>
                </div>

                <div class="checkbox">
                  <input type="checkbox" id="contract2" name="contract">
                  <label for="contract2">Full-time <small>(354)</small></label>
                </div>

                <div class="checkbox">
                  <input type="checkbox" id="contract3" name="contract">
                  <label for="contract3">Part-time <small>(284)</small></label>
                </div>

                <div class="checkbox">
                  <input type="checkbox" id="contract4" name="contract">
                  <label for="contract4">Internship <small>(169)</small></label>
                </div>

                <div class="checkbox">
                  <input type="checkbox" id="contract5" name="contract">
                  <label for="contract5">Freelance <small>(480)</small></label>
                </div>
              </div>
            </div>


            <div class="form-group col-xs-12 col-sm-4">
              <h6>Hourly rate</h6>
              <div class="checkall-group">
                <div class="checkbox">
                  <input type="checkbox" id="rate1" name="rate" checked>
                  <label for="rate1">All rates</label>
                </div>

                <div class="checkbox">
                  <input type="checkbox" id="rate2" name="rate">
                  <label for="rate2">$0 - $50 <small>(364)</small></label>
                </div>

                <div class="checkbox">
                  <input type="checkbox" id="rate3" name="rate">
                  <label for="rate3">$50 - $100 <small>(684)</small></label>
                </div>

                <div class="checkbox">
                  <input type="checkbox" id="rate4" name="rate">
                  <label for="rate4">$100 - $200 <small>(195)</small></label>
                </div>

                <div class="checkbox">
                  <input type="checkbox" id="rate5" name="rate">
                  <label for="rate5">$200+ <small>(39)</small></label>
                </div>
              </div>
            </div>


            <div class="form-group col-xs-12 col-sm-4">
              <h6>Academic degree</h6>
              <div class="checkall-group">
                <div class="checkbox">
                  <input type="checkbox" id="degree1" name="degree" checked>
                  <label for="degree1">All degrees</label>
                </div>

                <div class="checkbox">
                  <input type="checkbox" id="degree2" name="degree">
                  <label for="degree2">Associate degree <small>(216)</small></label>
                </div>

                <div class="checkbox">
                  <input type="checkbox" id="degree3" name="degree">
                  <label for="degree3">Bachelor's degree <small>(569)</small></label>
                </div>

                <div class="checkbox">
                  <input type="checkbox" id="degree4" name="degree">
                  <label for="degree4">Master's degree <small>(439)</small></label>
                </div>

                <div class="checkbox">
                  <input type="checkbox" id="degree5" name="degree">
                  <label for="degree5">Doctoral degree <small>(84)</small></label>
                </div>
              </div>
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
              <h5>We found <strong>357</strong> matches, you're watching <i>10</i> to <i>20</i></h5>
            </div>
   

    <?php 

$sql = "SELECT * FROM jobs INNER JOIN companies ON jobs.company_id = companies.id";
$result = $conn->query($sql);
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
          ?>


        

              <div class="col-xs-12">

              <a class="item-block" href="job-detail.php?id=<?php echo $row['id']?>">
                <header>
                  <img src="<?php echo $row["picture"] ?>" alt="">
                 <div class="hgroup">
                <h4><?php echo $row['job_title'] ?></h4>
               
           <h5><?php echo $row['name'] ?> <span class="label label-success"><?php echo $row['form_work'] ?></span></h5>

             </div>
                  <time><?php echo $row['created_at'] ?></time>
             

                </header>
                  
                <div class="item-body">
                  <?php echo $row['short_description'] ?>
                </div>

                <footer>
                  <ul class="details cols-3">
                    <li>
                      <i class="fa fa-map-marker"></i>
                      <span> <?php echo $row['location'] ?></span>
                    </li>

                    <li>
                      <i class="fa fa-money"></i>
                      <span> <?php echo $row['salary'] ?></span>
                    </li>

                    <li>
                      <i class="fa fa-certificate"></i>
                      <span><?php echo $row['certificate'] ?></span>
                    </li>
                  </ul>


                </footer>
              </a>
        

            </div>
     <?php
                     }
                  } 
                  else {
                      echo "No results";
                 

                  }
             ?>

 
            <!-- END Job item -->

          </div>


          <!-- Page navigation -->
          <nav class="text-center">
            <ul class="pagination">
              <li>
                <a href="#" aria-label="Previous">
                  <i class="ti-angle-left"></i>
                </a>
              </li>
              <li><a href="#">1</a></li>
              <li class="active"><a href="#">2</a></li>
              <li><a href="#">3</a></li>
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
