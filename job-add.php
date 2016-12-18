
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


if (isset($_POST["submit"])) {
  $job_title=$_POST["job_title"];
  $company_id=$_POST["company_id"];
  $short_description=$_POST["short_description"];
  $application_url=$_POST["application_url"];
  $location=$_POST["location"];
  $form_work=$_POST["form_work"];
  $salary=$_POST["salary"];
  $working_hours=$_POST["working_hours"];
  $experience=$_POST["experience"];
  $certificate=$_POST["certificate"];
  $description=$_POST["description"];


if(empty($job_title) || empty($company_id) || empty ($short_description) ||  empty($application_url) || empty ($location) || empty($form_work) || empty($salary) || empty($working_hours) || empty($experience) || empty($certificate) || empty($description)){
echo "<h3 style='text-align:center;color:#0000;'>You did not fill out the requierd fields<h3>";

} 
else {
  $q = "INSERT INTO jobs (job_title, company_id, short_description, application_url, location, form_work, salary, working_hours, experience, certificate, description) VALUES ('$_POST[job_title]','$_POST[company_id]', '$_POST[short_description]','$_POST[application_url]','$_POST[location]','$_POST[form_work]',' $_POST[salary]','$_POST[working_hours]','$_POST[experience]', '$_POST[certificate]','$_POST[description]')";
$provjera = mysqli_query($conn,$q);

if ($provjera) {
  echo "<h3 style='text-align:center;color:#0000'>Successfully entered</h3>";
}
else{
  echo "Error";
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


    <title>TheJobs - Add job</title>

    <!-- Styles -->
    <link href="./css/app.min.css" rel="stylesheet">
    <link href="./css/summernote.css" rel="stylesheet">
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
        <div class="pull-right">

          <div class="dropdown user-account">
            <a class="dropdown-toggle" href="#" data-toggle="dropdown">
              <img src="./pictures/logo-envato.png" alt="avatar">
            </a>

            <ul class="dropdown-menu dropdown-menu-right">
              <li><a href="user-login.php">Login</a></li>
              <li><a href="user-register.php">Register</a></li>
              <li><a href="user-forget-pass.php">Forget pass</a></li>
              <li><a href="#">Logout</a></li>
            </ul>
          </div>

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
    <header class="page-header">
      <div class="container page-name">
        <h1 class="text-center">Add a new job</h1>
        <p class="lead text-center">Create a new vacancy for your company and put it online.</p>
      </div>

      <div class="container">

        <div class="row">
          <div class="form-group col-xs-12 col-sm-6">
            <form action="job-add.php" method="post">
            <input type="text" class="form-control input-lg" placeholder="Job title, e.g. Front-end developer" name="job_title" id="job_title">
        </div>
<?php
$sql = "SELECT * FROM companies";
$result = $conn->query($sql);
if (mysqli_num_rows($result) > 0) {
        
    ?>
  <div class="form-group col-xs-12 col-sm-6">
             
         <select id="company_id" name="company_id" class="form-control">
                <option>Select a company</option>
             <?php
          while($row = mysqli_fetch_assoc($result)) {

                ?>
          
             
            <option value="<?php echo $row['id']?>"><?php echo $row['name'] ?></option>
            
        <?php
                     }
                  } 
                  else {
                      echo " <h2 style='text-align:center;'>No companies</h2>";
                 

                  }
             ?>
                
            </select>
           
           <a class="help-block" href="company-add.html">Add new company</a>
          </div>
      

      
          <div class="form-group col-xs-12">
            <textarea class="form-control" name="short_description" id="short_description" rows="3" placeholder="Short description"></textarea>
          </div>

          <div class="form-group col-xs-12">
            <input type="text" name="application_url" id="application_url" class="form-control" placeholder="Application URL">
          </div>

          <div class="form-group col-xs-12 col-sm-6 col-md-4">
            <div class="input-group input-group-sm">
              <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
              <input type="text" class="form-control" name="location" id="location" placeholder="Location, e.g. Melon Park, CA">
            </div>
          </div>

          <div class="form-group col-xs-12 col-sm-6 col-md-4">
            <div class="input-group input-group-sm">
              <span class="input-group-addon"><i class="fa fa-briefcase"></i></span>
              <select name="form_work" id="form_work" class="form-control">
                <option value"full time">Full time</option>
                <option value="part time">Part time</option>
                <option value="intership">Internship</option>
                <option value="freelance">Freelance</option>
                <option value="remote">Remote</option>
              </select>
            </div>
          </div>

          <div class="form-group col-xs-12 col-sm-6 col-md-4">
            <div class="input-group input-group-sm">
              <span class="input-group-addon"><i class="fa fa-money"></i></span>
              <input type="text" class="form-control" name="salary" id="salary" placeholder="Salary">
            </div>
          </div>

          <div class="form-group col-xs-12 col-sm-6 col-md-4">
            <div class="input-group input-group-sm">
              <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
              <input type="text" name="working_hours" id="working_hours" class="form-control" placeholder="Working hours, e.g. 40">
              <span class="input-group-addon">hours / week</span>
            </div>
          </div>

          <div class="form-group col-xs-12 col-sm-6 col-md-4">
            <div class="input-group input-group-sm">
              <span class="input-group-addon"><i class="fa fa-flask"></i></span>
              <input type="text" class="form-control" name="experience" id="experience" placeholder="Experience, e.g. 5">
              <span class="input-group-addon">Years</span>
            </div>
          </div>

          <div class="form-group col-xs-12 col-sm-6 col-md-4">
            <div class="input-group input-group-sm">
              <span class="input-group-addon"><i class="fa fa-certificate"></i></span>
              <select name="certificate" id="certificate" class="form-control">
                <option>Postdoc</option>
                <option>Ph.D.</option>
                <option>Master</option>
                <option selected>Bachelor</option>
              </select>
            </div>
          </div>


        </div>

        <div class="button-group">
          <div class="action-buttons">
            <div class="upload-button">
              <button class="btn btn-block btn-primary">Choose a cover image</button>
              <input id="cover_img_file" type="file">
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

            <header class="section-header">
              <span>Description</span>
              <h2>Job detail</h2>
              <p>Write about your company, job description, skills required, benefits, etc.</p>
            </header>
            
            <textarea name="description" id="description" class="summernote-editor"></textarea>

          </div>
        </section>
        <!-- END Job detail -->


        <!-- Submit -->
        <section class="bg-alt">
          <div class="container">
            <header class="section-header">
              <span>Are you done?</span>
              <h2>Submit Job</h2>
              <p>Please review your information once more and press the below button to put your job online.</p>
            </header>

            <p class="text-center"><button name="submit" id="submit" class="btn btn-success btn-xl btn-round" >Submit your job</button></p>
   </form>
          </div>
        </section>
        <!-- END Submit -->


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
    <script src="./js/summernote.min.js"></script>
    <script src="./js/custom.js"></script>


  </body>
</html>
