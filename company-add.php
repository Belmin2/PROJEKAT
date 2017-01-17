<?php
 include 'conn.php';
?>
<?php
if(isset($_FILES['logo_c'])){
$file_name = $_FILES['logo_c']['name'];
$img_path= "resume_img/".$file_name;
$file_tmp =$_FILES['logo_c']['tmp_name'];
if ($file_name) {
    move_uploaded_file($_FILES['logo_c']['tmp_name'],"resume_img/".time().rand()."-".$file_name);
}
else{
  $error_msg['logo_c']="<p style='text-align:center;color:#FF0000'>Slika je obavezna,molimo dodajte je.<p>";
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
  $img_path= "resume_img/".$file_name;

 
 if (empty($company_title)|| empty($short_discription) || empty($location) || empty($name) || empty($description) || empty($contact) || empty($page_url) || ($employees==":") || empty($established) || empty($email)|| empty($file_name)) {
  
 
$error_msg['company_title']="<p style='color:#FF0000'>Polje je obavezno molimo popunite ga<p>";

 $error_msg['short_discription']="<p style='color:#FF0000'>Polje je obavezno molimo popunite ga<p>";

 $error_msg['location']="<p style='color:#FF0000'>Polje je obavezno molimo popunite ga<p>";

 $error_msg['name']="<p style='color:#FF0000'>Polje je obavezno molimo popunite ga<p>";

$error_msg['description'] = "<p style='text-align:center;color:#FF0000'>Polje je obavezno molimo popunite ga<p>";

 $error_msg['contact']="<p style='color:#FF0000'>Polje je obavezno molimo popunite ga<p>";

 $error_msg['page_url']="<p style='color:#FF0000'>Polje je obavezno molimo popunite ga<p>";

 $error_msg['employees']="<p style='color:#FF0000'>Polje je obavezno molimo popunite ga<p>";

 $error_msg['established']="<p style='color:#FF0000'>Polje je obavezno molimo popunite ga<p>";


 $error_msg['email']="<p style='color:#FF0000'>Polje je obavezno molimo popunite ga<p>";
 }
 else {
$sql = "INSERT INTO companies(company_title,short_discription,location,name,description,contact,page_url,employees,established,email,picture) VALUES ('$_POST[company_title]','$_POST[short_discription]','$_POST[location]','$_POST[name]','$_POST[description]','$_POST[contact]','$_POST[page_url]','$_POST[employees]','$_POST[established]','$_POST[email]','$img_path')";
$result = mysqli_query($conn,$sql);
if ($result) {
 echo "<script> alert('Vaš kompanija je uspješno spremljena')</script>";
} else {
echo "<script> alert('Došlo je do greške pokušajte ponovo')</script>";}
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


    <title>Dodavanje kompanije</title>

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
    <form action="company-add.php" method="POST" enctype="multipart/form-data">

      <!-- Page header -->
      <header class="page-header">
        <div class="container page-name">
          <h1 class="text-center">Dodajte vašu kompaniju</h1>
          <p class="lead text-center">Kreirajte profil za vašu kompaniju, i postavite ga online.</p>
        </div>

        <div class="container">

          <div class="row">
            <div class="col-xs-12">
              <div class="row">
                
                <div class="col-xs-12 col-sm-4 col-lg-2">
                  <div class="form-group">
                    <input type="file" name="logo_c" class="dropify"   data-default-file="./pictures//logo-default.png">
                    <span class="help-block">Logo</span>
                  </div>
                <?php if (isset($error_msg['logo_c'])) {
                  echo $error_msg['logo_c'];
                } 
                ?>
                </div>

                <div class="col-xs-12 col-sm-8 col-lg-10">
                  <div class="form-group">
                    <input type="text" name="name" class="form-control input-lg" value="<?php if(isset($_POST['name'])){echo$_POST['name'];}?>" placeholder="Ime kompanije">
                    <?php if (isset($error_msg['name'])) {
                  echo $error_msg['name'];
                } 
                ?>
                  </div>
                
                  <div class="form-group">
                    <input type="text" name="company_title" value="<?php if(isset($_POST['company_title'])) {echo $_POST['company_title'];}?>" class="form-control" placeholder="Naslov">
                      <?php if (isset($error_msg['company_title'])) {
                  echo $error_msg['company_title'];
                } 
                ?>
                  </div>
                
                  <div class="form-group">
                    <textarea class="form-control" name="short_discription" rows="3" placeholder="Kratki opis"><?php if(isset($_POST['short_discription'])) {echo $_POST['short_discription'];}?></textarea>
                      <?php if (isset($error_msg['short_discription'])) {
                  echo $error_msg['short_discription'];
                } 
                ?>
                  </div>
               
                </div>

              </div>
            </div>

            <div class="col-xs-12">
              <div class="row">

                <div class="form-group col-xs-12 col-sm-6 col-md-4">
                  <div class="input-group input-group-sm">
                    <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                    <input type="text" name="location" class="form-control" value="<?php if(isset($_POST['location'])){echo $_POST['location'];} ?>" placeholder="Lokacija ">
                  
                </div>
                   <?php if (isset($error_msg['location'])) {
                  echo $error_msg['location'];
                } 
                ?>
              </div>
   
                <div class="form-group col-xs-12 col-sm-6 col-md-4">
                  <div class="input-group input-group-sm">
                    <span class="input-group-addon"><i class="fa fa-users"></i></span>
                    <select name="employees"  class="form-control ">
                    
                      <option selected value=":">Broj zaposlenih</option> 
                      
                    
                       <option <?php if(isset($_POST['employees']) && $_POST['employees'] == "0 - 9") echo 'selected="seleceted"'; ?>>0 - 9</option>
                      <option <?php if(isset($_POST['employees']) && $_POST['employees'] == "10 - 99") echo 'selected="seleceted"'; ?>>10 - 99</option>
                      <option <?php if(isset($_POST['employees']) && $_POST['employees'] == "100 - 999") echo 'selected="seleceted"'; ?>>100 - 999</option>
                       <option <?php if(isset($_POST['employees']) && $_POST['employees'] == "1,000 - 9,999") echo 'selected="seleceted"'; ?>>1,000 - 9,999</option>
                      <option <?php if(isset($_POST['employees']) && $_POST['employees'] == "10,000 - 90,999") echo 'selected="seleceted"'; ?>>10,000 - 99,999</option>
                      <option <?php if(isset($_POST['employees']) && $_POST['employees'] == "100,000 - 999,999") echo 'selected="seleceted"'; ?>>100,000 - 999,999</option>

                  
 </select>
                    <span class="input-group-addon">Zaposlenici</span>
                 
          
                  </div>
                     <?php if (isset($error_msg['employees'])) {
                  echo $error_msg['employees'];
                } 
                ?>
                 
                </div>

                <div class="form-group col-xs-12 col-sm-6 col-md-4">
                  <div class="input-group input-group-sm">
                    <span class="input-group-addon"><i class="fa fa-globe"></i></span>
                    <input name="page_url" type="text" class="form-control" value="<?php if(isset($_POST['page_url'])){echo $_POST['page_url'];} ?>" placeholder="Web adresa">
                  </div>
                     <?php if (isset($error_msg['page_url'])) {
                  echo $error_msg['page_url'];
                } 
                ?>
                 

                </div>

                <div class="form-group col-xs-12 col-sm-6 col-md-4">
                  <div class="input-group input-group-sm">
                    <span class="input-group-addon"><i class="fa fa-birthday-cake"></i></span>
                    <input type="text" name="established" value="<?php if(isset($_POST['established'])){echo $_POST['established'];} ?>" class="form-control" placeholder="Osnovano od">
                  </div>
                   <?php if (isset($error_msg['established'])) {
                  echo $error_msg['established'];
                } 
                ?>
                </div>

                <div class="form-group col-xs-12 col-sm-6 col-md-4">
                  <div class="input-group input-group-sm">
                    <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                    <input name="contact" type="text" value="<?php if(isset($_POST['contact'])){echo $_POST['contact'];} ?>" class="form-control" placeholder="Broj telefona">
                  </div>
                    <?php if (isset($error_msg['contact'])) {
                  echo $error_msg['contact'];
                } 
                ?>
                </div>

                <div class="form-group col-xs-12 col-sm-6 col-md-4">
                  <div class="input-group input-group-sm">
                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                    <input type="text" name="email" value="<?php if(isset($_POST['email'])){echo $_POST['email'];} ?>" class="form-control" placeholder="Email adresa">
                  </div>
                   <?php if (isset($error_msg['email'])) {
                  echo $error_msg['email'];
                } 
                ?>
                </div>

              </div>
            </div>


          </div>

          <div class="button-group">
            <div class="action-buttons">
              <div class="upload-button">
                <button class="btn btn-block btn-primary">Odaberite cover fotografiju</button>
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
              <span>O kompaniji</span>
              <h2>Detalji kompanije</h2>
              <p>Pišite o vašoj kompaniji, kulturu, prednosti rada, itd</p>
            </header>
            
 <textarea   class="form-control" name="description" id="short_description"><?php if(isset($_POST['description'])) {echo $_POST['description'];}?></textarea>

          </div>
        <?php 
        if (isset($error_msg['description'])) {
          echo $error_msg['description'];
        }

        ?>
        </section>
        <!-- END Company detail -->


        <!-- Submit -->
        <section>
          <div class="container">
            <header class="section-header">
              <span>Jeste li završili?</span>
              <h2>Prosljedite to</h2>
              <p>Molimo pogledajte vaše informacije još jednom, i pritisnite dugme ispod da postavite vašu kompaniju online.</p>
            </header>

            <p class="text-center"><button  class="btn btn-success btn-xl btn-round" name="submit" >Pošaljite vašu kompaniju</button></p>

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