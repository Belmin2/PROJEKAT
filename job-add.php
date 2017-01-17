
<?php
 include 'conn.php';
?>
<?php
if (isset($_POST["submit"])) {
  $job_title = $_POST["job_title"];
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
if (empty($job_title) || ($company_id =="NULL") || empty($short_description)|| empty($application_url)|| empty($location) || ($form_work=="NULL") || empty($salary)|| empty($working_hours)|| empty($experience) || ($certificate=="NULL")|| empty($description)) {
$error_msg['job_title'] = "<p style='color:#FF0000'>Polje je obavezno molimo popunite ga<p>";


$error_msg['company_id'] = "<p style='color:#FF0000'>Polje je obavezno molimo popunite ga<p>";


  
$error_msg['short_description'] = "<p style='color:#FF0000'>Polje je obavezno molimo popunite ga<p>";


 $error_msg['application_url'] = "<p style='color:#FF0000'>Polje je obavezno molimo popunite ga<p>";


$error_msg['location'] = "<p style='color:#FF0000'>Polje je obavezno molimo popunite ga<p>";


$error_msg['form_work'] = "<p style='color:#FF0000'>Polje je obavezno molimo popunite ga<p>";


$error_msg['salary'] = "<p style='color:#FF0000'>Polje je obavezno molimo popunite ga<p>";


$error_msg['working_hours'] = "<p style='color:#FF0000'>Polje je obavezno molimo popunite ga<p>";

$error_msg['experience'] = "<p style='color:#FF0000'>Polje je obavezno molimo popunite ga<p>";


$error_msg['certificate'] = "<p style='color:#FF0000'>Polje je obavezno molimo popunite ga<p>";


$error_msg['description'] = "<p style='text-align:center; color:#FF0000;'>Polje je obavezno molimo popunite ga<p>";
}


else {
  $q = "INSERT INTO jobs (job_title, company_id, short_description, application_url, location, form_work, salary, working_hours, experience, certificate, description) VALUES ('$_POST[job_title]','$_POST[company_id]', '$_POST[short_description]','$_POST[application_url]','$_POST[location]','$_POST[form_work]',' $_POST[salary]','$_POST[working_hours]','$_POST[experience]', '$_POST[certificate]','$_POST[description]')";
$provjera = mysqli_query($conn,$q);

if ($provjera) {
echo "<script> alert('Vaš oglas je uspješno spremljen' )</script>";
}


else{
echo "<script> alert('Došlo je do greške, pokušajte ponovo' )</script>";
}
if (!empty($job_title)) {
  $error_msg1="";
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


    <title>Objavite oglas</title>

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
              <li><a href="user-register.php">Registrujte </a></li>
              <li><a href="user-forget-pass.php">Zaboravili ste password?</a></li>
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

    <!-- Page header -->
    <header class="page-header">
      <div class="container page-name">
        <h1 class="text-center">Objavite oglas</h1>
        <p class="lead text-center">Kreirajte novi konkurs za vašu kompaniju i postavite ga online.</p>
      </div>

      <div class="container">

        <div class="row">
          <div class="form-group col-xs-12 col-sm-6">
            <form action="job-add.php" method="post">
            <input type="text" class="form-control input-lg" value="<?php if (isset($_POST['job_title'])){echo $_POST['job_title'];} ?>" placeholder="Naziv posla, npr. Front-end developer" name="job_title" id="job_title">
        <?php  if (isset($error_msg["job_title"])) {
          echo $error_msg['job_title'];
        }
     
        ?>

        
    
        </div>
<?php
$sql = "SELECT * FROM companies";
$result = $conn->query($sql);
if (mysqli_num_rows($result) > 0) {
        
    ?>
  <div class="form-group col-xs-12 col-sm-6">
             
         <select id="company_id" name="company_id" class="form-control">
                
    <option  value="NULL">Kompanija </option>

             <?php
          while($row = mysqli_fetch_assoc($result)) {
                ?>
            <option value="<?php echo $row['id']?>"<?php if(isset($_POST['company_id']) && $_POST['company_id'] == "$row[id]") echo 'selected = "selected"'; ?> ><?php echo $row['name'] ?></option>
            
        <?php
                     }
                  } 
                  else {
                      echo " <h2 style='text-align:center;'>Trenutno nema kompanija</h2>";
                 
                  }
             ?>
        
            </select>
               <?php  if (isset($error_msg["company_id"])) {
          echo $error_msg['company_id'];
        }
        ?>
 
           <a class="help-block" href="company-add.php"></a>
       
          </div>
      

      
          <div class="form-group col-xs-12">
            <textarea class="form-control" name="short_description"  rows="3" placeholder="Kratki opis"><?php if(isset($_POST['short_description'])) {echo $_POST['short_description'];}?></textarea>
           <?php  if (isset($error_msg["short_description"])) {
          echo $error_msg['short_description'];
        }
        ?>

          </div>

          <div class="form-group col-xs-12">
            <input type="text" name="application_url" id="application_url" value="<?php if (isset($_POST['application_url'])){echo $_POST['application_url'];} ?>" class="form-control" placeholder="URL Aplikacije">
             <?php  if (isset($error_msg["application_url"])) {
          echo $error_msg['application_url'];
        }
        ?>
          </div>

          <div class="form-group col-xs-12 col-sm-6 col-md-4">
            <div class="input-group input-group-sm">
              <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
              <input type="text" class="form-control" value="<?php if (isset($_POST['location'])){echo $_POST['location'];} ?>" name="location" id="location" placeholder="Lokacija">
      
            </div>
               <?php  if (isset($error_msg["location"])) {
          echo $error_msg['location'];
        }
        ?>
          </div>
       
          <div class="form-group col-xs-12 col-sm-6 col-md-4">
            <div class="input-group input-group-sm">
              <span class="input-group-addon"><i class="fa fa-briefcase"></i></span>
              <select name="form_work" id="form_work" class="form-control">
                <option value=":">Oblik rada</option>
                <option value"Puno vrijeme" <?php if (isset($_POST['form_work']) && $_POST['form_work'] =='Puno vrijeme')echo 'selected="selected"'; ?> >Puno vrijeme</option>
                  <option value="Skračeno vrijeme" <?php if(isset($_POST['form_work']) && $_POST['form_work'] == "Skračeno vrijeme")echo 'selected = "selected"'; ?>>Skračeno vrijeme</option>
                <option value="Staž" <?php if(isset($_POST['form_work']) && $_POST['form_work'] == 'Staž') echo 'selected = "selected"'; ?>>Staž</option>
                <option value="Honorarno"<?php if(isset($_POST['form_work']) && $_POST['form_work'] == 'Honorarno') echo 'selected = "selected"';?> >Honorarno</option>
                <option value="Udaljeni rad" <?php if(isset($_POST['form_work']) && $_POST['form_work'] == "Udaljeni rad") echo 'selected="selected"';?>>Udaljeni rad</option>
              </select>
            </div>
           <?php  if (isset($error_msg["form_work"])) {
          echo $error_msg['form_work'];
        }
        ?>
          </div>

          <div class="form-group col-xs-12 col-sm-6 col-md-4">
            <div class="input-group input-group-sm">
              <span class="input-group-addon"><i class="fa fa-money"></i></span>
              <input type="text" value="<?php if (isset($_POST['salary'])){echo $_POST['salary'];} ?>" class="form-control" name="salary" id="salary" placeholder="Plata">
            </div>
           <?php  if (isset($error_msg["salary"])) {
          echo $error_msg['salary'];
        }
        ?>
           </div>

          <div class="form-group col-xs-12 col-sm-6 col-md-4">
            <div class="input-group input-group-sm">
              <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
              <input value="<?php if (isset($_POST['working_hours'])){echo $_POST['working_hours'];} ?>" type="text" name="working_hours" id="working_hours" class="form-control" placeholder="Radni sati">
              <span class="input-group-addon">sati /sedmica</span>
            </div>
           <?php  if (isset($error_msg["working_hours"])) {
          echo $error_msg['working_hours'];
        }
        ?>
          </div>

          <div class="form-group col-xs-12 col-sm-6 col-md-4">
            <div class="input-group input-group-sm">
              <span class="input-group-addon"><i class="fa fa-flask"></i></span>
              <input type="text" value="<?php if (isset($_POST['experience'])){echo $_POST['experience'];} ?>" class="form-control" name="experience" id="experience" placeholder="Iskoustvo,e.g. 5">
              <span class="input-group-addon">Godine</span>
            </div>
          <?php  if (isset($error_msg["experience"])) {
          echo $error_msg['experience'];
        }
        ?>
         </div>

          <div class="form-group col-xs-12 col-sm-6 col-md-4">
            <div class="input-group input-group-sm">
              <span class="input-group-addon"><i class="fa fa-certificate"></i></span>
              <select  name="certificate" id="certificate" class="form-control">
                  <option value="NULL">Stepen obrazovanja </option>
                <option value="Postdoc"<?php if(isset($_POST['certificate']) && $_POST['certificate'] == 'Postdoc') echo 'selected="selected"'; ?>>Postdoc</option>
                <option value="Ph.D."<?php if(isset($_POST['certificate'])&& $_POST['certificate'] == 'Ph.D.') echo 'selected="selected"';?> >Ph.D.</option>
                <option value="Master"<?php if(isset($_POST['certificate'])&& $_POST['certificate'] == 'Master') echo 'selected = "selected"'; ?> >Master</option>
                <option value="Bachelor" <?php if(isset($_POST['certificate']) && $_POST['certificate'] == "Bachelor") echo 'selected = "selected"'; ?>>Bachelor</option>
              </select>
            <?php

  ?>
            </div>
          <?php  if (isset($error_msg["certificate"])) {
          echo $error_msg['certificate'];
        }
        ?>
          </div>


        </div>

        <div class="button-group">
          <div class="action-buttons">
            <div class="upload-button">
              <button class="btn btn-block btn-primary">Odaberite naslovnu fotografiju</button>
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
              <span>Opis</span>
              <h2>Detalji posla</h2>
              <p>Pišite o vašoj kompaniji, opis posla, vještine potrebne, prednosti, i sl.</p>
            </header>
            
 <textarea  class="form-control" name="description" ><?php if(isset($_POST['description'])) {echo $_POST['description'];}?></textarea>
          </div>
          <?php  if (isset($error_msg["description"])) {
          echo $error_msg['description'];
        }
        ?>
        </section>
        <!-- END Job detail -->


        <!-- Submit -->
        <section class="bg-alt">
          <div class="container">
            <header class="section-header">
              <span>Jesi li gotov?</span>
              <h2>Slanje posla</h2>
              <p>Molimo pregledajte vaše informacije još jednom i pritisnite dugme ispod da stavite svoj posao online.</p>
            </header>

            <p class="text-center"><button name="submit" id="submit" class="btn btn-success btn-xl btn-round" >Pošaljite svoj posao</button></p>
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
  <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>

  </body>
</html>