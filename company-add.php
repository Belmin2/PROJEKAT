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
<?php
 if(isset($_FILES['logo_c'])){

     $errors= array();
      $file_name = $_FILES['logo_c']['name'];
      $file_size =$_FILES['logo_c']['size'];
      $file_tmp =$_FILES['logo_c']['tmp_name'];
      $file_type=$_FILES['logo_c']['type'];
      $img_path= "resume_img/".$file_name;
      $file_ext=strtolower(end(explode('.',$_FILES['logo_c']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="";
      }
      
  
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"resume_img/".$file_name);
       
      }else{
         print_r($errors);
      }
if (isset($_POST["submit"])) {
  $company_title = $_POST["company_title"];
  $short_discription = $_POST["short_discription"];
  $location = $_POST["location"];
  $name= $_POST["name"];
  $description = $_POST["description"];
  $contact = $_POST["contact"];
  $page_url = $_POST["page_url"];
  $employees = $_POST["employees"];
  $established= $_POST["established"];
  $email = $_POST["email"];

if (empty($company_title) || empty($short_discription) || empty($location) || empty($name)|| empty($description)|| empty($contact) || empty($page_url) || empty($employees)|| empty($established) || empty($email)|| empty($file_name)) {
echo "<h3 style='text-align:center;color:#0000;'>You did not fill out the requierd fields<h3>";
}
 else {
$sql = "INSERT INTO companies(company_title,short_discription,location,name,description,contact,page_url,employees,established,email,picture) VALUES ('$_POST[company_title]','$_POST[short_discription]','$_POST[location]','$_POST[name]','$_POST[description]','$_POST[contact]','$_POST[page_url]','$_POST[employees]','$_POST[established]','$_POST[email]','$img_path')";
$result = mysqli_query($conn,$sql);
if ($result) {
  echo "<h3 style='text-align:center;color:#0000;'>Your company Successfully saved<h3>";
} else {
  echo "<h3 style='text-align:center;color:#0000;'>Error<h3>";
}


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


    <title>TheJobs - Add company</title>

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
    <form action="company-add.php" method="POST" enctype="multipart/form-data">

      <!-- Page header -->
      <header class="page-header">
        <div class="container page-name">
          <h1 class="text-center">Add your company</h1>
          <p class="lead text-center">Create a profile for your company and put it online.</p>
        </div>

        <div class="container">

          <div class="row">
            <div class="col-xs-12">
              <div class="row">
                
                <div class="col-xs-12 col-sm-4 col-lg-2">
                  <div class="form-group">
                    <input type="file" name="logo_c" class="dropify" data-default-file="./pictures//logo-default.png">
                    <span class="help-block">A square logo</span>
                  </div>
                </div>

                <div class="col-xs-12 col-sm-8 col-lg-10">
                  <div class="form-group">
                    <input type="text" name="name" class="form-control input-lg" placeholder="Comapny name">
                  </div>
                  <div class="form-group">
                    <input type="text" name="company_title" class="form-control" placeholder="Headline (e.g. Internet and computer software)">
                  </div>

                  <div class="form-group">
                    <textarea class="form-control" name="short_discription" rows="3" placeholder="Short description"></textarea>
                  </div>
                </div>

              </div>
            </div>

            <div class="col-xs-12">
              <div class="row">

                <div class="form-group col-xs-12 col-sm-6 col-md-4">
                  <div class="input-group input-group-sm">
                    <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                    <input type="text" name="location" class="form-control" placeholder="Location, e.g. Melon Park, CA">
                  </div>
                </div>

                <div class="form-group col-xs-12 col-sm-6 col-md-4">
                  <div class="input-group input-group-sm">
                    <span class="input-group-addon"><i class="fa fa-users"></i></span>
                    <select name="employees" class="form-control ">
                      <option>0 - 9</option>
                      <option selected>10 - 99</option>
                      <option>100 - 999</option>
                      <option>1,000 - 9,999</option>
                      <option>10,000 - 99,999</option>
                      <option>100,000 - 999,999</option>
                    </select>
                    <span class="input-group-addon">Employer</span>
                  </div>
                </div>

                <div class="form-group col-xs-12 col-sm-6 col-md-4">
                  <div class="input-group input-group-sm">
                    <span class="input-group-addon"><i class="fa fa-globe"></i></span>
                    <input name="page_url" type="text" class="form-control" placeholder="Website address">
                  </div>
                </div>

                <div class="form-group col-xs-12 col-sm-6 col-md-4">
                  <div class="input-group input-group-sm">
                    <span class="input-group-addon"><i class="fa fa-birthday-cake"></i></span>
                    <input type="text" name="established" class="form-control" placeholder="Founded on, e.g. 2013">
                  </div>
                </div>

                <div class="form-group col-xs-12 col-sm-6 col-md-4">
                  <div class="input-group input-group-sm">
                    <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                    <input name="contact" type="text" class="form-control" placeholder="Phone number">
                  </div>
                </div>

                <div class="form-group col-xs-12 col-sm-6 col-md-4">
                  <div class="input-group input-group-sm">
                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                    <input type="text" name="email" class="form-control" placeholder="Email address">
                  </div>
                </div>

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

      

        <!-- Company detail -->
        <section class=" bg-alt">
          <div class="container">

            <header class="section-header">
              <span>About</span>
              <h2>Company detail</h2>
              <p>Write about your company, culture, benefits of working there, etc.</p>
            </header>
            
            <textarea name="description" class="summernote-editor"></textarea>

          </div>
        </section>
        <!-- END Company detail -->


        <!-- Submit -->
        <section>
          <div class="container">
            <header class="section-header">
              <span>Are you done?</span>
              <h2>Submit it</h2>
              <p>Please review your information once more and press the below button to put your company online.</p>
            </header>

            <p class="text-center"><button  class="btn btn-success btn-xl btn-round" name="submit" >Submit your company</button></p>

          </div>
        </section>
        <!-- END Submit -->


      </main>
      <!-- END Main container -->

    </form>

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
