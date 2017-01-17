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
              <li><a href="user-login.php">Prijavite se</a></li>
              <li><a href="user-register.php">Registrujte</a></li>
              <li><a href="user-forget-pass.php">Zaboravili ste pasword?</a></li>
              <li><a href="#">Odjava</a></li>
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



    <form action="resume-add.php" method="post"  enctype="multipart/form-data">

      <!-- Page header -->
      <header class="page-header">
        <div class="container page-name">
          <h1 class="text-center">Dodajte svoj rezime</h1>
          <p class="lead text-center">Kreirajte svoj rezime i postavite ga online</p>
        </div>


        <div class="container">


<?php
if(isset($_FILES['image'])){
if(isset($_FILES['logo1'])){  
if(isset($_FILES['logo2'])){

$file_name = $_FILES['image']['name'];
$img_path= "resume_img/".$file_name;
$file_tmp =$_FILES['image']['tmp_name'];
if ($file_name) {
    move_uploaded_file($_FILES['image']['tmp_name'],"resume_img/".time().rand()."-".$file_name);
}
else{
  $error_msg['image']="<p style='text-align:center;color:#FF0000'>Profilna slika je obavezna, molimo dodajte je.<p>";
}
$file_name1 = $_FILES['logo1']['name'];
$img_path1= "resume_img/".$file_name;
$file_tmp =$_FILES['logo1']['tmp_name'];
if ($file_name) {
    move_uploaded_file($_FILES['logo1']['tmp_name'],"resume_img/".time().rand()."-".$file_name);
}
else{
  $error_msg['logo1']="<p style='text-align:center;color:#FF0000'>Logo je obavezan,molimo dodajte ga.<p>";
}

$file_name2 = $_FILES['logo2']['name'];
$img_path2= "resume_img/".$file_name;
$file_tmp =$_FILES['logo2']['tmp_name'];
if ($file_name) {
    move_uploaded_file($_FILES['logo2']['tmp_name'],"resume_img/".time().rand()."-".$file_name);
}
else{
  $error_msg['logo2']="<p style='text-align:center;color:#FF0000'>Logo je obavezan,molimo dodajte ga.<p>";
}

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



if (empty($name) || empty($headline) || empty($short_description) || empty($location) || empty($page_url)|| empty($salary)|| empty($age) || empty($contact)|| empty($email)||empty($tag_name) || empty($degree_bachelor) || empty($major_computer_sience) || empty($school_name) || empty($date_from)||empty($date_to) || empty($education_discription) ||empty($company_name)|| empty($position) || empty($work_date_from)||empty($work_date_to) || empty($work_description) || empty($skill_name) || empty($skill_proficiency) || empty($file_name)|| empty($file_name1)||empty($file_name2)) {
$error_msg['name'] = "<p style='color:#FF0000'>Polje je obavezno molimo popunite ga<p>";
$error_msg['headline'] = "<p style='color:#FF0000'>Polje je obavezno molimo popunite ga<p>";
$error_msg['short_description'] = "<p style='color:#FF0000'>Polje je obavezno molimo popunite ga<p>";
$error_msg['location'] = "<p style='color:#FF0000'>Polje je obavezno molimo popunite ga<p>";
$error_msg['page_url'] = "<p style='color:#FF0000'>Polje je obavezno molimo popunite ga<p>";
$error_msg['salary'] = "<p style='color:#FF0000'>Polje je obavezno molimo popunite ga<p>";
$error_msg['age'] = "<p style='color:#FF0000'>Polje je obavezno molimo popunite ga<p>";
$error_msg['contact'] = "<p style='color:#FF0000'>Polje je obavezno molimo popunite ga<p>";
$error_msg['email'] = "<p style='color:#FF0000'>Polje je obavezno molimo popunite ga<p>";
$error_msg['tag_name'] = "<p style='color:#FF0000'>Polje je obavezno molimo popunite ga<p>";
$error_msg['degree_bachelor'] = "<p style='color:#FF0000'>Polje je obavezno molimo popunite ga<p>";
$error_msg['major_computer_sience'] = "<p style='color:#FF0000'>Polje je obavezno molimo popunite ga<p>";
$error_msg['school_name'] = "<p style='color:#FF0000'>Polje je obavezno molimo popunite ga<p>";
$error_msg['date_from'] = "<p style='text-align:center; color:#FF0000;'>Polja su obavezna molimo popunite ih<p>";
$error_msg['date_to'] = "<p style='color:#FF0000' >Polje je obavezno molimo popunite ga<p>";
$error_msg['education_discription'] = "<p style='text-align:center; color:#FF0000;'>Polje je obavezno molimo popunite ga<p>";
$error_msg['company_name'] = "<p style='color:#FF0000'>Polje je obavezno molimo popunite ga<p>";
$error_msg['position'] = "<p style='color:#FF0000'>Polje je obavezno molimo popunite ga<p>";
$error_msg['work_date_from'] = "<p style='text-align:center; color:#FF0000;'>Polja su obavezna molimo popunite ih<p>";
$error_msg['work_date_to'] = "<p style='color:#FF0000'>Polje je obavezno molimo popunite ga<p>";
$error_msg['work_description'] = "<p style='text-align:center; color:#FF0000;'>Polje je obavezno molimo popunite ga<p>";
$error_msg['skill_name'] = "<p style='text-align:center; color:#FF0000;'>Polja su obavezna molimo popunite ih<p>";
$error_msg['skill_proficiency'] = "<p style='color:#FF0000'>Polje je obavezno molimo popunite ga<p>";

}
else
 {

$sql = "INSERT INTO resume (name,headline,short_description,location,page_url,salary,age,contact,email,tag_name,degree_bachelor,major_computer_sience,school_name,date_from,date_to,education_discription,company_name,position,work_date_from,work_date_to,work_description,skill_name,skill_proficiency,profile_img,education_img,work_img) VALUES ('$_POST[name]','$_POST[headline]','$_POST[short_description]','$_POST[location]','$_POST[page_url]','$_POST[salary]','$_POST[age]','$_POST[contact]','$_POST[email]','$_POST[tag_name]','$_POST[degree_bachelor]','$_POST[major_computer_sience]','$_POST[school_name]','$_POST[date_from]','$_POST[date_to]','$_POST[education_discription]','$_POST[company_name]','$_POST[position]','$_POST[work_date_from]','$_POST[work_date_to]','$_POST[work_description]','$_POST[skill_name]','$_POST[skill_proficiency]','$img_path','$img_path1','$img_path2')";
$result = mysqli_query($conn,$sql);
if ($result) {
echo "<script> alert('Vaš rezime je uspješno spremljen' )</script>" ;

} else {
echo "<script> alert('Došlo je do greške pokušajte ponovo' )</script>" ;}
}

}


}
}
}





?>
          <div class="row">
            <div class="col-xs-12 col-sm-4">
              <div class="form-group">
                <input type="file" class="dropify" name="image" data-default-file="./pictures/belmin.jpg">
                <span class="help-block">Molimo dodajte 4:6 profilnu fotografiju.</span>
              </div>
           <?php if (isset($error_msg['image'])) {
                  echo $error_msg['image'];
                } 
                ?>
            </div>

            <div class="col-xs-12 col-sm-8">
              <div class="form-group">
                <input type="text"  name="name" value="<?php if (isset($_POST['name'])) {echo $_POST['name'];}?>" class="form-control input-lg" placeholder="Ime">
             <?php if(isset($error_msg['name'])) {
              echo $error_msg['name'];
             }
             ?>
              
              </div>
              
              <div class="form-group">
                <input type="text" name="headline" class="form-control"value="<?php if (isset($_POST['headline'])) {echo $_POST['headline'];}?>" placeholder="Naslov (Front-end developer)">
             <?php if(isset($error_msg['headline'])) {
              echo $error_msg['headline'];
             }
             ?>
              </div>

              <div class="form-group">
                <textarea name="short_description" class="form-control"  rows="3" placeholder="Kratki opis o vama"><?php if (isset($_POST['short_description'])) {echo $_POST['short_description'];}?></textarea>
              <?php if(isset($error_msg['short_description'])) {
              echo $error_msg['short_description'];
             }
             ?>
              </div>

              <hr class="hr-lg">

              <h6>Osnovne informacije</h6>
              <div class="row">

                <div class="form-group col-xs-12 col-sm-6">
                  <div class="input-group input-group-sm">
                    <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                    <input type="text" name="location" value="<?php if (isset($_POST['location'])) {echo $_POST['location'];}?>" class="form-control" placeholder="Lokacija">
                  </div>
                <?php if(isset($error_msg['location'])) {
              echo $error_msg['location'];
             }
             ?>
                </div>

                <div class="form-group col-xs-12 col-sm-6">
                  <div class="input-group input-group-sm">
                    <span class="input-group-addon"><i class="fa fa-globe"></i></span>
                    <input type="text" name="page_url" value="<?php if(isset($_POST['page_url'])){echo $_POST['page_url'];} ?>" class="form-control" placeholder="Web adresa">
                  </div>
                  <?php if(isset($error_msg['page_url'])) {
              echo $error_msg['page_url'];
             }
             ?>
                </div>

                <div class="form-group col-xs-12 col-sm-6">
                  <div class="input-group input-group-sm">
                    <span class="input-group-addon"><i class="fa fa-usd"></i></span>
                    <input type="text" name="salary" value="<?php if(isset($_POST['salary'])){echo $_POST['salary'];} ?>" class="form-control" placeholder="Plata">
                    <span class="input-group-addon">Per hour</span>
                  </div>
                   <?php if(isset($error_msg['salary'])) {
              echo $error_msg['salary'];
             }
             ?>
                </div>

                <div class="form-group col-xs-12 col-sm-6">
                  <div class="input-group input-group-sm">
                    <span class="input-group-addon"><i class="fa fa-birthday-cake"></i></span>
                    <input name="age" value="<?php if(isset($_POST['age'])){echo $_POST['age'];} ?>" type="text" class="form-control" placeholder="Godine">
                    <span class="input-group-addon">Godine starosti</span>
                  </div>
                     <?php if(isset($error_msg['age'])) {
              echo $error_msg['age'];
             }
             ?>
                </div>

                <div class="form-group col-xs-12 col-sm-6">
                  <div class="input-group input-group-sm">
                    <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                    <input name="contact" type="text" value="<?php if(isset($_POST['contact'])){echo $_POST['contact'];} ?>" class="form-control" placeholder="Broj telefona">
                  </div>
                      <?php if(isset($error_msg['contact'])) {
              echo $error_msg['contact'];
             }
             ?>
                </div>

                <div class="form-group col-xs-12 col-sm-6">
                  <div class="input-group input-group-sm">
                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                    <input name="email"  value="<?php if(isset($_POST['email'])){echo $_POST['email'];} ?>" type="text" class="form-control" placeholder="Email addresa">
                  </div>
                     <?php if(isset($error_msg['email'])) {
              echo $error_msg['email'];
             }
             ?>
                </div>

              </div>

              <hr class="hr-lg">

              <h6>Tags lista</h6>
              <div class="form-group">
                <input  name="tag_name" type="text" value="<?php if(isset($_POST['tag_name'])){echo $_POST['tag_name'];} ?>" data-role="tagsinput" placeholder="Vještina">
                <span class="help-block">Napišite tag i pritisnite enter</span>
              </div>
      <?php if(isset($error_msg['tag_name'])) {
              echo $error_msg['tag_name'];
             }
             ?>
            </div>
          </div>

          <div class="button-group">
            <div class="action-buttons">

              <div class="upload-button">
                <button class="btn btn-block btn-gray">Odaberite rezime datoteku</button>
                <input type="file">
              </div>

              <div class="upload-button">
                <button class="btn btn-block btn-primary">Odaberite cover fotografiju</button>
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
              <span>Posljedni stepen</span>
              <h2>Obrazovanje</h2>
            </header>
            
            <div class="row">


              <div class="col-xs-12">
                <div class="item-block">
                  <div class="item-form">
  
                    <button class="btn btn-danger btn-float btn-remove"><i class="ti-close"></i></button>

                    <div class="row">
  
                      <div class="col-xs-12 col-sm-4">
                        <div class="form-group">
                          <input type="file" name="logo1" class="dropify" data-default-file="./pictures/logo-default.png">
                          <span class="help-block">Molimo izaberite logo</span>
                        </div>
                            <?php if(isset($error_msg['logo1'])) {
                         echo $error_msg['logo1'];
                           }
                            ?>
                      </div>

                      <div class="col-xs-12 col-sm-8">
                        <div class="form-group">
                          <input type="text" value="<?php if(isset($_POST['degree_bachelor'])){echo $_POST['degree_bachelor'];} ?>" name="degree_bachelor" class="form-control" placeholder="Stepen obrazovanja">
                        <?php if(isset($error_msg['degree_bachelor'])) {
                             echo $error_msg['degree_bachelor'];
                               }
                                ?>
                      </div>
                              
                        <div class="form-group">
                          <input type="text" name="major_computer_sience" value="<?php if(isset($_POST['major_computer_sience'])){echo $_POST['major_computer_sience'];} ?>" class="form-control" placeholder="Major računarskih nauka">
                        <?php if(isset($error_msg['major_computer_sience'])) {
                             echo $error_msg['major_computer_sience'];
                               }
                                ?>
                        </div>
                        <div class="form-group">
                          <input type="text"  value="<?php if(isset($_POST['school_name'])){echo $_POST['school_name'];} ?>" name="school_name" class="form-control" placeholder="Ime škole">
                        <?php if(isset($error_msg['school_name'])) {
                             echo $error_msg['school_name'];
                               }
                                ?>
                        </div>

                        <div class="form-group">
                          <div class="input-group">
                            <span class="input-group-addon">Datum od</span>
                            <input type="text" value="<?php if(isset($_POST['date_from'])){echo $_POST['date_from'];} ?>" name="date_from" class="form-control" placeholder=" 2012">
                           
                            <span class="input-group-addon">Datum do</span>
                            <input type="text" value="<?php if(isset($_POST['date_to'])){echo $_POST['date_to'];} ?>" name="date_to" class="form-control" placeholder=" 2016">
                         
                          </div>
                          <?php if(isset($error_msg['date_from']) && isset($error_msg['date_to'])) {
                             echo $error_msg['date_from'];
                               }
                                ?>
                      

                        <div class="form-group">
                          <textarea class="form-control" rows="3" name="education_discription" placeholder="Kratki opis"><?php if(isset($_POST['education_discription'])){echo $_POST['education_discription'];} ?></textarea>
                        <?php if(isset($error_msg['education_discription'])) {
                             echo $error_msg['education_discription'];
                               }
                                ?>
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
                          <span class="help-block">Molimo izaberite loho</span>
                        </div>
                      </div>

                      <div class="col-xs-12 col-sm-8">
                        <div class="form-group">
                          <input type="text" name="degree_bachelor1" class="form-control" placeholder="Stepen obrazovanja">
                        </div>

                        <div class="form-group">
                          <input type="text" name="major_computer_sience1" class="form-control" placeholder="Major,računarskih nauka">
                        </div>
                        <div class="form-group">
                          <input type="text"  name="school_name1" class="form-control" placeholder="Ime škole">
                        </div>

                        <div class="form-group">
                          <div class="input-group">
                            <span class="input-group-addon">Datum od</span>
                            <input type="text" name="date_from1" class="form-control" placeholder="2012">
                            <span class="input-group-addon">Datum do</span>
                            <input type="text" name="date_to1" class="form-control" placeholder=" 2016">
                          </div>
                        </div>

                        <div class="form-group">
                       <textarea class="form-control" rows="3" name="education_discription1" placeholder="Kratki opis"></textarea>

                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>

              <div class="col-xs-12 text-center">
                <br>
                <button class="btn btn-primary btn-duplicator">Dodajte obrazovanje</button>
              </div>


            </div>
          </div>
        </section>
        <!-- END Education -->


        <!-- Work Experience -->
        <section>
          <div class="container">
            <header class="section-header">
              <span>Posljednja pozicija</span>
              <h2>Radno iskustvo</h2>
            </header>
            
            <div class="row">

              <div class="col-xs-12">
                <div class="item-block">
                  <div class="item-form">
  
                    <button class="btn btn-danger btn-float btn-remove"><i class="ti-close"></i></button>

                    <div class="row">
                      <div class="col-xs-12 col-sm-4">
                        <div class="form-group">
                          <input type="file" name="logo2" class="dropify" data-default-file="./pictures/logo-default.png">
                          <span class="help-block">Molimo izaberite logo</span>
                        </div>
                      <?php if(isset($error_msg['logo2'])) {
                             echo $error_msg['logo2'];
                               }
                                ?>
                      </div>

                      <div class="col-xs-12 col-sm-8">
                        <div class="form-group">
                          <input type="text" value="<?php if(isset($_POST['company_name'])){echo $_POST['company_name'];} ?>" name="company_name" class="form-control" placeholder="Ime kompanije">
                        <?php if(isset($error_msg['company_name'])) {
                             echo $error_msg['company_name'];
                               }
                                ?>
                        </div>

                        <div class="form-group">
                          <input name="position"value="<?php if(isset($_POST['position'])){echo $_POST['position'];} ?>" type="text" class="form-control" placeholder="Pozcija">
                        <?php if(isset($error_msg['position'])) {
                             echo $error_msg['position'];
                               }
                                ?>
                        </div>

                        <div class="form-group">
                          <div class="input-group">
                            <span class="input-group-addon">Datum od</span>
                            <input name="work_date_from" value="<?php if(isset($_POST['work_date_from'])){echo $_POST['company_name'];} ?>" type="text" class="form-control" placeholder="e.g. 2012">
                            <span class="input-group-addon">Datum do</span>
                            <input name="work_date_to" value="<?php if(isset($_POST['work_date_to'])){echo $_POST['work_date_to'];} ?>" type="text" class="form-control" placeholder="e.g. 2016">
                          </div>
                       <?php if(isset($error_msg['work_date_from']) && isset($_POST['work_date_to'])) {
                             echo $error_msg['work_date_from'];
                               }
                                ?>
                        </div>

                      </div>

                      <div class="col-xs-12">
                        <div class="form-group">
                          <textarea name="work_description" class="form-control"><?php if(isset($_POST['work_description'])){echo $_POST['work_description'];}?></textarea>
                      <?php if(isset($error_msg['work_description'])) {
                             echo $error_msg['work_description'];
                               }
                                ?>
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
                      <div class="col-xs-12 col-sm-4">
                        <div class="form-group">
                          <input type="file" class="dropify" data-default-file="assets/img/logo-default.png">
                          <span class="help-block">Molimo odaberite logo</span>
                        </div>
                      </div>

                      <div class="col-xs-12 col-sm-8">
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Ime kompanije ">
                        </div>

                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Pozicija">
                        </div>

                        <div class="form-group">
                          <div class="input-group">
                            <span class="input-group-addon">Datum od</span>
                            <input type="text" class="form-control" placeholder="2012">
                            <span class="input-group-addon">Datum do</span>
                            <input type="text" class="form-control" placeholder="2016">
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
                <button class="btn btn-primary btn-duplicator">Dodajte iskustvo</button>
              </div>


            </div>

          </div>
        </section>
        <!-- END Work Experience -->


       
        <!-- Skills -->
        <section class=" bg-alt">
          <div class="container">
            <header class="section-header">
              <span>Ekspertsko podrucje</span>
              <h2>Vještine</h2>
            </header>
            
            <div class="row">

              <div class="col-xs-12">
                <div class="item-block">
                  <div class="item-form">
  
                    <button class="btn btn-danger btn-float btn-remove"><i class="ti-close"></i></button>

                    <div class="row">
                      <div class="col-xs-12 col-sm-6">
                        <div class="form-group">
                          <input name="skill_name" value="<?php if(isset($_POST['skill_name'])){echo $_POST['skill_name'];} ?>" type="text" class="form-control" placeholder="Ime vještine, npr. HTML">
                        </div>
                      </div>

                      <div class="col-xs-12 col-sm-6">

                        <div class="form-group">
                          <div class="input-group">
                            <input name="skill_proficiency" value="<?php if(isset($_POST['skill_proficiency'])){echo $_POST['skill_proficiency'];} ?>" type="text" class="form-control" placeholder="Znanje vještine, e.g. 90">
                            <span class="input-group-addon">%</span>
                          </div>
                        </div>

                      </div>
                    </div>
                          <?php if(isset($error_msg['skill_name']) && isset($error_msg['skill_proficiency'])) {
                             echo $error_msg['skill_name'];
                               }
                                ?>
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
                          <input type="text" class="form-control" placeholder="Ime vještine,  HTML">
                        </div>
                      </div>

                      <div class="col-xs-12 col-sm-6">

                        <div class="form-group">
                          <div class="input-group">
                            <input type="text" class="form-control" placeholder="Znanje vještine e.g. 90">
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
                <button class="btn btn-primary btn-duplicator">Dodajte iskustvo</button>
              </div>


            </div>

          </div>
        </section>
        <!-- END Skills -->




        <!-- Submit -->
        <section class=" bg-img" style="background-image: url(./pictures/bg-facts.jpg);">
          <div class="container">
            <header class="section-header">
              <span>Jeste li završili?</span>
              <h2>Pošaljite rezime</h2>
              <p>Molimo pogledajte vaše informacije još jednom, i pritisnite dugme ispod da postavite vaš rezime online .</p>
            </header>

            <p class="text-center"><button class="btn btn-success btn-xl btn-round" name="submit" id="submit">Pošaljite vaš rezime</button></p>

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
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>


  </body>
</html>
