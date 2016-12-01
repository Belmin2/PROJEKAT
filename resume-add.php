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


    <title>Add your resume</title>

    <!-- Styles -->
    <link href="./css/app.min.css" rel="stylesheet">
    <link href="./css/summernote.css" rel="stylesheet">
    <link href="./css/custom.css" rel="stylesheet">

    <!-- Fonts -->
     <link rel="stylesheet" href="font-awesome_4.6.3/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Oswald:100,300,400,500,600,800%7COpen+Sans:300,400,500,600,700,800%7CMontserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <link rel="icon" href="favicon.ico">
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

        <!-- Navigation menu -->
        <ul class="nav-menu">
          <li>
            <a href="index.php">Home</a>
            <ul>
              <li><a href="index.php">Version 1</a></li>
              <li><a href="index-2.php">Version 2</a></li>
            </ul>
          </li>
          <li>
            <a class="active" href="#">Position</a>
            <ul>
              <li><a href="job-list-1.php">Browse jobs - 1</a></li>
              <li><a href="job-list-2.php">Browse jobs - 2</a></li>
              <li><a href="job-list-3.php">Browse jobs - 3</a></li>
              <li><a href="job-detail.php">Job detail</a></li>
              <li><a href="job-apply.php">Apply for job</a></li>
              <li><a class="active" href="job-add.php">Post a job</a></li>
              <li><a href="job-manage.php">Manage jobs</a></li>
              <li><a href="job-candidates.php">Candidates</a></li>
            </ul>
          </li>
          <li>
            <a href="#">Resume</a>
            <ul>
              <li><a href="resume-list.php">Browse resumes</a></li>
              <li><a href="resume-detail.php">Resume detail</a></li>
              <li><a href="resume-add.php">Create a resume</a></li>
              <li><a href="resume-manage.php">Manage resumes</a></li>
            </ul>
          </li>
          <li>
            <a href="#">Company</a>
            <ul>
              <li><a href="company-list.php">Browse companies</a></li>
              <li><a href="company-detail.php">Company detail</a></li>
              <li><a href="company-add.php">Create a company</a></li>
              <li><a href="company-manage.php">Manage companies</a></li>
            </ul>
          </li>
          <li>
            <a href="#">Pages</a>
            <ul>
              <li><a href="page-blog.php">Blog</a></li>
              <li><a href="page-post.php">Blog-post</a></li>
              <li><a href="page-about.php">About</a></li>
              <li><a href="page-contact.php">Contact</a></li>
              <li><a href="page-faq.php">FAQ</a></li>
              <li><a href="page-pricing.php">Pricing</a></li>
              <li><a href="page-typography.php">Typography</a></li>
              <li><a href="page-ui-elements.php">UI elements</a></li>
            </ul>
          </li>
        </ul>
        <!-- END Navigation menu -->

      </div>
    </nav>
    <!-- END Navigation bar -->



    <form action="resume-add.php" method="post"  enctype="multipart/form-data">

      <!-- Page header -->
      <header class="page-header">
        <div class="container page-name">
          <h1 class="text-center">Add your resume</h1>
          <p class="lead text-center">Create your resume and put it online.</p>
        </div>


        <div class="container">


<?php
   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $img_path= "resume_img/".$file_name;
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"resume_img/".$file_name);
         echo "<h3 style='text-align:center;color:#0000;'>Your picture has been successfully saved</h3>";
      }else{
         print_r($errors);
      }
if (empty($file_name)) {
  echo "<h2 style='text-align:center;'>Please add your image</h2>";
} else {
 



  $sql = "INSERT INTO resume(profile_img) VALUES('$img_path')";
$result = mysqli_query($conn,$sql);
  
}
   }
?>


<?php
if (isset($_POST['submit'])) {
$name = $_POST["name"];
$headline = $_POST["headline"];
$short_description = $_POST["short_description"];
$location = $_POST["location"];
$page_url = $_POST["page_url"];
$salary = $_POST["salary"];
$age = $_POST["age"];
$contact =$_POST["contact"];
$email = $_POST["email"];
$tag_name = $_POST["tag_name"];
$degree_bachelor = $_POST["degree_bachelor"];
$major_computer_sience = $_POST["major_computer_sience"];
$school_name = $_POST["school_name"];
$date_from = $_POST["date_from"];
$date_to = $_POST["date_to"];
$education_discription = $_POST["education_discription"];
$company_name = $_POST["company_name"];
$position = $_POST["position"];
$work_date_from = $_POST["work_date_from"];
$work_date_to = $_POST["work_date_to"];
$work_description = $_POST["work_description"];
$skill_name = $_POST["skill_name"];
$skill_proficiency = $_POST["skill_proficiency"];



if (empty($name) || empty($headline) || empty($short_description) || empty($location) || empty($page_url)|| empty($salary)|| empty($age) || empty($contact)|| empty($email)||empty($tag_name) || empty($degree_bachelor) || empty($major_computer_sience) || empty($school_name) || empty($date_from)||empty($date_to) || empty($education_discription) ||empty($company_name)|| empty($position) || empty($work_date_from)||empty($work_date_to) || empty($work_description) || empty($skill_name) || empty($skill_proficiency)) {

echo "<h3 style='text-align:center;color:#0000;'>You did not fill out the requierd fields<h3>";

}

else {

$sql = "INSERT INTO resume (name,headline,short_description,location,page_url,salary,age,contact,email,tag_name,degree_bachelor,major_computer_sience,school_name,date_from,date_to,education_discription,company_name,position,work_date_from,work_date_to,work_description,skill_name,skill_proficiency) VALUES ('$_POST[name]','$_POST[headline]','$_POST[short_description]','$_POST[location]','$_POST[page_url]','$_POST[salary]','$_POST[age]','$_POST[contact]','$_POST[email]','$_POST[tag_name]','$_POST[degree_bachelor]','$_POST[major_computer_sience]','$_POST[school_name]','$_POST[date_from]','$_POST[date_to]','$_POST[education_discription]','$_POST[company_name]','$_POST[position]','$_POST[work_date_from]','$_POST[work_date_to]','$_POST[work_description]','$_POST[skill_name]','$_POST[skill_proficiency]')";
$result = mysqli_query($conn,$sql);
if ($result) {
  echo "<h3 style='text-align:center;color:#0000;'>Succes entered<h3>";

} else {
  echo "Error";
}
}

}






?>
          <div class="row">
            <div class="col-xs-12 col-sm-4">
              <div class="form-group">
                <input type="file" class="dropify" name="image" data-default-file="./pictures/belmin.jpg">
                <span class="help-block">Please choose a 4:6 profile picture.</span>
              </div>
            </div>

            <div class="col-xs-12 col-sm-8">
              <div class="form-group">
                <input type="text"  name="name" class="form-control input-lg" placeholder="Name">
              </div>
              
              <div class="form-group">
                <input type="text" name="headline" class="form-control" placeholder="Headline (e.g. Front-end developer)">
              </div>

              <div class="form-group">
                <textarea name="short_description" class="form-control" rows="3" placeholder="Short description about you"></textarea>
              </div>

              <hr class="hr-lg">

              <h6>Basic information</h6>
              <div class="row">

                <div class="form-group col-xs-12 col-sm-6">
                  <div class="input-group input-group-sm">
                    <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                    <input type="text" name="location" class="form-control" placeholder="Location, e.g. Melon Park, CA">
                  </div>
                </div>

                <div class="form-group col-xs-12 col-sm-6">
                  <div class="input-group input-group-sm">
                    <span class="input-group-addon"><i class="fa fa-globe"></i></span>
                    <input type="text" name="page_url" class="form-control" placeholder="Website address">
                  </div>
                </div>

                <div class="form-group col-xs-12 col-sm-6">
                  <div class="input-group input-group-sm">
                    <span class="input-group-addon"><i class="fa fa-usd"></i></span>
                    <input type="text" name="salary" class="form-control" placeholder="Salary, e.g. 85">
                    <span class="input-group-addon">Per hour</span>
                  </div>
                </div>

                <div class="form-group col-xs-12 col-sm-6">
                  <div class="input-group input-group-sm">
                    <span class="input-group-addon"><i class="fa fa-birthday-cake"></i></span>
                    <input name="age" type="text" class="form-control" placeholder="Age">
                    <span class="input-group-addon">Years old</span>
                  </div>
                </div>

                <div class="form-group col-xs-12 col-sm-6">
                  <div class="input-group input-group-sm">
                    <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                    <input name="contact" type="text" class="form-control" placeholder="Phone number">
                  </div>
                </div>

                <div class="form-group col-xs-12 col-sm-6">
                  <div class="input-group input-group-sm">
                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                    <input name="email" type="text" class="form-control" placeholder="Email address">
                  </div>
                </div>

              </div>

              <hr class="hr-lg">

              <h6>Tags list</h6>
              <div class="form-group">
                <input name="tag_name" type="text" value="HTML,CSS,Javascript" data-role="tagsinput" placeholder="Tag name">
                <span class="help-block">Write tag name and press enter</span>
              </div>

            </div>
          </div>

          <div class="button-group">
            <div class="action-buttons">

              <div class="upload-button">
                <button class="btn btn-block btn-gray">Choose a resume file</button>
                <input type="file">
              </div>

              <div class="upload-button">
                <button class="btn btn-block btn-primary">Choose a cover image</button>
                <input id="cover_img_file" type="file">
              </div>

            </div>
          </div>
        </div>
      </header>
      <!-- END Page header -->



 <!-- Education -->
        <section class=" bg-alt">
          <div class="container">

            <header class="section-header">
              <span>Latest degrees</span>
              <h2>Education</h2>
            </header>
            
            <div class="row">

<?php
   if(isset($_FILES['logo1'])){
      $errors= array();
      $file_name = $_FILES['logo1']['name'];
      $file_size =$_FILES['logo1']['size'];
      $file_tmp =$_FILES['logo1']['tmp_name'];
      $file_type=$_FILES['logo1']['type'];
      $img_path= "resume_img/".$file_name;
      $file_ext=strtolower(end(explode('.',$_FILES['logo1']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"resume_img/".$file_name);
         echo "<h3 style='text-align:center;color:#0000;'>Your logo has been successfully saved</h3>";
      }else{
         print_r($errors);
      }
if (empty($file_name)) {
  echo "<h2 style='text-align:center;'>Please add your logo</h2>";
} else {
 



  $sql = "INSERT INTO resume(education_img) VALUES('$img_path')";
$result = mysqli_query($conn,$sql);
  
}
   }
?>

              <div class="col-xs-12">
                <div class="item-block">
                  <div class="item-form">
  
                    <button class="btn btn-danger btn-float btn-remove"><i class="ti-close"></i></button>

                    <div class="row">
  
                      <div class="col-xs-12 col-sm-4">
                        <div class="form-group">
                          <input type="file" name="logo1" class="dropify" data-default-file="./pictures/logo-default.png">
                          <span class="help-block">Please choose a square logo</span>
                        </div>
                      </div>

                      <div class="col-xs-12 col-sm-8">
                        <div class="form-group">
                          <input type="text" name="degree_bachelor" class="form-control" placeholder="Degree, e.g. Bachelor">
                        </div>

                        <div class="form-group">
                          <input type="text" name="major_computer_sience" class="form-control" placeholder="Major, e.g. Computer Science">
                        </div>
                        <div class="form-group">
                          <input type="text"  name="school_name" class="form-control" placeholder="School name, e.g. Massachusetts Institute of Technology">
                        </div>

                        <div class="form-group">
                          <div class="input-group">
                            <span class="input-group-addon">Date from</span>
                            <input type="text" name="date_from" class="form-control" placeholder="e.g. 2012">
                            <span class="input-group-addon">Date to</span>
                            <input type="text" name="date_to" class="form-control" placeholder="e.g. 2016">
                          </div>
                        </div>

                        <div class="form-group">
                          <textarea class="form-control" rows="3" name="education_discription" placeholder="Short description"></textarea>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>

              <div class="col-xs-12 duplicateable-content">
                <div class="item-block">
                  <div class="item-form">
  
                    <button class="btn btn-danger btn-float btn-remove"><i class="ti-close"></i></button>

                    <div class="row">
                      <div class="col-xs-12 col-sm-4">
                        <div class="form-group">
                           <input type="file" name="logo1c" class="dropify" data-default-file="./pictures/logo-default.png">
                          <span class="help-block">Please choose a square logo</span>
                        </div>
                      </div>

                      <div class="col-xs-12 col-sm-8">
                        <div class="form-group">
                          <input type="text" name="degree_bachelor1" class="form-control" placeholder="Degree, e.g. Bachelor">
                        </div>

                        <div class="form-group">
                          <input type="text" name="major_computer_sience1" class="form-control" placeholder="Major, e.g. Computer Science">
                        </div>
                        <div class="form-group">
                          <input type="text"  name="school_name1" class="form-control" placeholder="School name, e.g. Massachusetts Institute of Technology">
                        </div>

                        <div class="form-group">
                          <div class="input-group">
                            <span class="input-group-addon">Date from</span>
                            <input type="text" name="date_from1" class="form-control" placeholder="e.g. 2012">
                            <span class="input-group-addon">Date to</span>
                            <input type="text" name="date_to1" class="form-control" placeholder="e.g. 2016">
                          </div>
                        </div>

                        <div class="form-group">
                       <textarea class="form-control" rows="3" name="education_discription1" placeholder="Short description"></textarea>

                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>

              <div class="col-xs-12 text-center">
                <br>
                <button class="btn btn-primary btn-duplicator">Add education</button>
              </div>


            </div>
          </div>
        </section>
        <!-- END Education -->


        <!-- Work Experience -->
        <section>
          <div class="container">
            <header class="section-header">
              <span>Past positions</span>
              <h2>Work Experience</h2>
            </header>
            
            <div class="row">
                   <?php
   if(isset($_FILES['logo2'])){
      $errors= array();
      $file_name = $_FILES['logo2']['name'];
      $file_size =$_FILES['logo2']['size'];
      $file_tmp =$_FILES['logo2']['tmp_name'];
      $file_type=$_FILES['logo2']['type'];
      $img_path= "resume_img/".$file_name;
      $file_ext=strtolower(end(explode('.',$_FILES['logo2']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"resume_img/".$file_name);
         echo "<h3 style='text-align:center;color:#0000;'>Your logo has been successfully saved</h3>";
      }else{
         print_r($errors);
      }
if (empty($file_name)) {
  echo "<h2 style='text-align:center;'>Please add your logo</h2>";
} else {
 



  $sql = "INSERT INTO resume (work_img) VALUES('$img_path')";
$result = mysqli_query($conn,$sql);
  
}
   }
?>
              <div class="col-xs-12">
                <div class="item-block">
                  <div class="item-form">
  
                    <button class="btn btn-danger btn-float btn-remove"><i class="ti-close"></i></button>

                    <div class="row">
                      <div class="col-xs-12 col-sm-4">
                        <div class="form-group">
                          <input type="file" name="logo2" class="dropify" data-default-file="./pictures/logo-default.png">
                          <span class="help-block">Please choose a square logo</span>
                        </div>
                      </div>

                      <div class="col-xs-12 col-sm-8">
                        <div class="form-group">
                          <input type="text" name="company_name" class="form-control" placeholder="Company name">
                        </div>

                        <div class="form-group">
                          <input name="position" type="text" class="form-control" placeholder="Position, e.g. UI/UX Researcher">
                        </div>

                        <div class="form-group">
                          <div class="input-group">
                            <span class="input-group-addon">Date from</span>
                            <input name="work_date_from" type="text" class="form-control" placeholder="e.g. 2012">
                            <span class="input-group-addon">Date to</span>
                            <input name="work_date_to" type="text" class="form-control" placeholder="e.g. 2016">
                          </div>
                        </div>

                      </div>

                      <div class="col-xs-12">
                        <div class="form-group">
                          <textarea name="work_description" class="summernote-editor"></textarea>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>

              <div class="col-xs-12 duplicateable-content">
                <div class="item-block">
                  <div class="item-form">
  
                    <button class="btn btn-danger btn-float btn-remove"><i class="ti-close"></i></button>

                    <div class="row">
                      <div class="col-xs-12 col-sm-4">
                        <div class="form-group">
                          <input type="file" class="dropify" data-default-file="assets/img/logo-default.png">
                          <span class="help-block">Please choose a square logo</span>
                        </div>
                      </div>

                      <div class="col-xs-12 col-sm-8">
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Company name">
                        </div>

                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Position, e.g. UI/UX Researcher">
                        </div>

                        <div class="form-group">
                          <div class="input-group">
                            <span class="input-group-addon">Date from</span>
                            <input type="text" class="form-control" placeholder="e.g. 2012">
                            <span class="input-group-addon">Date to</span>
                            <input type="text" class="form-control" placeholder="e.g. 2016">
                          </div>
                        </div>

                      </div>

                      <div class="col-xs-12">
                        <div class="form-group">
                          <textarea class="summernote-editor"></textarea>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>

              <div class="col-xs-12 text-center">
                <br>
                <button class="btn btn-primary btn-duplicator">Add experience</button>
              </div>


            </div>

          </div>
        </section>
        <!-- END Work Experience -->


        <!-- Skills -->
        <section class=" bg-alt">
          <div class="container">
            <header class="section-header">
              <span>Expertise Areas</span>
              <h2>Skills</h2>
            </header>
            
            <div class="row">

              <div class="col-xs-12">
                <div class="item-block">
                  <div class="item-form">
  
                    <button class="btn btn-danger btn-float btn-remove"><i class="ti-close"></i></button>

                    <div class="row">
                      <div class="col-xs-12 col-sm-6">
                        <div class="form-group">
                          <input name="skill_name" type="text" class="form-control" placeholder="Skill name, e.g. HTML">
                        </div>
                      </div>

                      <div class="col-xs-12 col-sm-6">

                        <div class="form-group">
                          <div class="input-group">
                            <input name="skill_proficiency" type="text" class="form-control" placeholder="Skill proficiency, e.g. 90">
                            <span class="input-group-addon">%</span>
                          </div>
                        </div>

                      </div>
                    </div>

                  </div>
                </div>
              </div>

              <div class="col-xs-12 duplicateable-content">
                <div class="item-block">
                  <div class="item-form">
  
                    <button class="btn btn-danger btn-float btn-remove"><i class="ti-close"></i></button>

                    <div class="row">
                      <div class="col-xs-12 col-sm-6">
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Skill name, e.g. HTML">
                        </div>
                      </div>

                      <div class="col-xs-12 col-sm-6">

                        <div class="form-group">
                          <div class="input-group">
                            <input type="text" class="form-control" placeholder="Skill proficiency, e.g. 90">
                            <span class="input-group-addon">%</span>
                          </div>
                        </div>

                      </div>
                    </div>

                  </div>
                </div>
              </div>

              <div class="col-xs-12 text-center">
                <br>
                <button class="btn btn-primary btn-duplicator">Add experience</button>
              </div>


            </div>

          </div>
        </section>
        <!-- END Skills -->



        <!-- Submit -->
        <section class=" bg-img" style="background-image: url(./pictures/bg-facts.jpg);">
          <div class="container">
            <header class="section-header">
              <span>Are you done?</span>
              <h2>Submit resume</h2>
              <p>Please review your information once more and press the below button to put your resume online.</p>
            </header>

            <p class="text-center"><button class="btn btn-success btn-xl btn-round" name="submit" id="submit">Submit your resume</button></p>

          </div>
        </section>
        <!-- END Submit -->


      </main>
      <!-- END Main container -->

    </form>

    <!-- Site footer -->
    <footer class="site-footer">

      <!-- Top section -->
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>About</h6>
            <p class="text-justify">An employment website is a web site that deals specifically with employment or careers. Many employment websites are designed to allow employers to post job requirements for a position to be filled and are commonly known as job boards. Other employment sites offer employer reviews, career and job-search advice, and describe different job descriptions or employers. Through a job website a prospective employee can locate and fill out a job application.</p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Company</h6>
            <ul class="footer-links">
              <li><a href="page-about.html">About us</a></li>
              <li><a href="page-typography.html">How it works</a></li>
              <li><a href="page-faq.html">Help center</a></li>
              <li><a href="page-typography.html">Privacy policy</a></li>
              <li><a href="page-contact.html">Contact us</a></li>
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Trendeing jobs</h6>
            <ul class="footer-links">
              <li><a href="job-list.html">Front-end developer</a></li>
              <li><a href="job-list.html">Android developer</a></li>
              <li><a href="job-list.html">iOS developer</a></li>
              <li><a href="job-list.html">Full stack developer</a></li>
              <li><a href="job-list.html">Project administrator</a></li>
            </ul>
          </div>
        </div>

        <hr>
      </div>
      <!-- END Top section -->

      <!-- Bottom section -->
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyrights &copy; 2016 All Rights Reserved by <a href="http://themeforest.net/user/shamsoft">ShaMSofT</a>.</p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- END Bottom section -->

    </footer>
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
