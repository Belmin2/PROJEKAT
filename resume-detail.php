<?php
session_start();
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

    <title>TheJobs - Resume detail</title>

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
$sql = "SELECT * FROM resume";
$query = mysqli_query($conn,$sql);
if (mysqli_num_rows($query)>0) {
while ($row = mysqli_fetch_assoc($query)) {
  
  ?>


    <header class="page-header bg-img" style="background-image: url(./pictures/bg-banner1.jpg)">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-4">
            <img src="<?php echo $row ["profile_img"]?>" alt="">
          </div>

          <div class="col-xs-12 col-sm-8 header-detail">
            <div class="hgroup">
              <h1><?php echo $row["name"] ?></h1>
              <h3><?php echo $row["headline"] ?></h3>
            </div>
            <hr>
            <p class="lead"> <?php echo $row["short_description"] ?></p>

            <ul class="details cols-2">
              <li>
                <i class="fa fa-map-marker"></i>
                <span><?php echo $row["location"] ?></span>
              </li>

              <li>
                <i class="fa fa-globe"></i>
                <a href="#"><?php echo $row["page_url"] ?></a>
              </li>

              <li>
                <i class="fa fa-money"></i>
                <span><?php echo $row["salary"] ?></span>
              </li>

              <li>
                <i class="fa fa-birthday-cake"></i>
                <span><?php echo $row["age"] ?></span>
              </li>

              <li>
                <i class="fa fa-phone"></i>
                <span><?php echo $row["contact"] ?></span>
              </li>

              <li>
                <i class="fa fa-envelope"></i>
                <a href="#"><?php echo $row["email"] ?></a>
              </li>
            </ul>

            <div class="tag-list">

              <span><?php echo $row["tag_name"] ?></span>
                <span><?php echo $row["tag_name"] ?></span>
                  <span><?php echo $row["tag_name"] ?></span>

           
            </div>
          </div>
        </div>

        <div class="button-group">
          <ul class="social-icons">
            <li><a class="facebook" href="https://www.facebook.com/vedin.karic?fref=ts"><i class="fa fa-facebook"></i></a></li>
            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
            <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
          </ul>

          <div class="action-buttons">
            <a class="btn btn-gray" href="#">Download CV</a>
            <a class="btn btn-success" data-toggle="modal" data-target="#modal-contact" href="#">Contact me</a>
          </div>
        </div>
      </div>
    </header>
    <!-- END Page header -->


    <!-- Main container -->
    <main>


      <!-- Education -->
      <section>
        <div class="container">

          <header class="section-header">
            <span>Latest degrees</span>
            <h2>Education</h2>
          </header>
          
         
            <div class="col-xs-12">
              <div class="item-block">
                <header>
                  <img src="<?php echo $row ["education_img"]?>" alt="">
                  <div class="hgroup">
                    <h4><?php echo $row ["degree_bachelor"]?><small>Computer Science</small></h4>
                    <h5><?php echo $row ["school_name"]?></h5>
                  </div>
                  <h6 class="time"><?php echo $row ["date_from"]?>-<?php echo $row ["date_to"]?></h6>
                </header>
                <div class="item-body">
                  <p><?php echo $row ["education_discription"]?></p>
                </div>
              </div>
            </div>
          </div>

        </div>
      </section>
      <!-- END Education -->


      <!-- Work Experience -->
      <section class="bg-alt">
        <div class="container">
          <header class="section-header">
            <span>Past positions</span>
            <h2>Work Experience</h2>
          </header>
          
          <div class="row">

            <!-- Work item -->
            <div class="col-xs-12">
              <div class="item-block">
                <header>
                  <img src="<?php echo $row ["work_img"]?>" alt="">
                  <div class="hgroup">
                    <h4><?php echo $row ["company_name"]?></h4>
                    <h5><?php echo $row ["position"]?></h5>
                  </div>
                  <h6 class="time"><?php echo $row ["work_date_from"]?>-<?php echo $row ["work_date_to"]?></h6>
                </header>
                <div class="item-body">
                  <p>Responsibilities:</p>
                  <ul>
                    <li> <?php echo $row ["work_description"]?></li>
                  
                  </ul>
                </div>
              </div>
            </div>
            <!-- END Work item -->


</div>

        </div>
      </section>
      <!-- END Work Experience -->


      <!-- Skills -->
      <section>
        <div class="container">
          <header class="section-header">
            <span>Expertise Areas</span>
            <h2>Skills</h2>
          </header>
          
          <br>
          <ul class="skills cols-3">
            <li>
              <div>
                <span class="skill-name">HTML</span>
                <span class="skill-value">100%</span>
              </div>
              <div class="progress">
                <div class="progress-bar" style="width: 100%;"></div>
              </div>
            </li>

            <li>
              <div>
                <span class="skill-name">CSS</span>
                <span class="skill-value">95%</span>
              </div>
              <div class="progress">
                <div class="progress-bar" style="width: 95%;"></div>
              </div>
            </li>

            <li>
              <div>
                <span class="skill-name">Javascript</span>
                <span class="skill-value">80%</span>
              </div>
              <div class="progress">
                <div class="progress-bar" style="width: 80%;"></div>
              </div>
            </li>

            <li>
              <div>
                <span class="skill-name">Photoshop</span>
                <span class="skill-value">60%</span>
              </div>
              <div class="progress">
                <div class="progress-bar" style="width: 60%;"></div>
              </div>
            </li>

            <li>
              <div>
                <span class="skill-name">ReactJS</span>
                <span class="skill-value">70%</span>
              </div>
              <div class="progress">
                <div class="progress-bar" style="width: 70%;"></div>
              </div>
            </li>

            <li>
              <div>
                <span class="skill-name">Team work</span>
                <span class="skill-value">90%</span>
              </div>
              <div class="progress">
                <div class="progress-bar" style="width: 90%;"></div>
              </div>
            </li>
          </ul>

        </div>
      </section>
      <!-- END Skills -->


    </main>
<?php 
}
}
else{
  echo "No resume";
}

?>



    <!-- END Main container -->


    <!-- Site footer -->
  <?php include 'footer.php'; ?>
    <!-- END Site footer -->


    <!-- Back to top button -->
    <a id="scroll-up" href="#"><i class="ti-angle-up"></i></a>
    <!-- END Back to top button -->


    <!-- Contact modal -->
    <div class="modal fade" id="modal-contact" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">
              <span aria-hidden="true">&times;</span>
            </button>
            <h5 class="modal-title" id="myModalLabel">Send message</h5>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="subject" class="control-label">Subject</label>
                <input type="text" class="form-control" id="subject">
              </div>
              <div class="form-group">
                <label for="message-text" class="control-label">Message</label>
                <textarea class="form-control" id="message-text"></textarea>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-gray" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Send</button>
          </div>
        </div>
      </div>
    </div>


    <!-- Scripts -->
    <script src="./js/app.min.js"></script>
    <script src="./js/custom.js"></script>

  </body>
</html>
