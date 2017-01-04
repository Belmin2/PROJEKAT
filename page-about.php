<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Post a job position or create your online resume by TheJobs!">
    <meta name="keywords" content="">

    <title>O stranici</title>

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

        <!-- Navigation menu -->
             <?php include 'menu-1.php';?>
        <!-- END Navigation menu -->

      </div>
    </nav>
    <!-- END Navigation bar -->


    <!-- Site header -->
    <header class="page-header bg-img size-lg" style="background-image: url(./pictures/bg-banner2.jpg)">
      <div class="container no-shadow">
        <h1 class="text-center">O nama</h1>
        <p class="lead text-center">Nastavite sa čitanjem ove stranice, i saznajte kako smo nastali i ko stoji iza toga.</p>
      </div>
    </header>
    <!-- END Site header -->


    <!-- Main container -->
    <main>



      <!-- About -->
      <section>
        <div class="container">

          <h5>Prvi dan</h5>
          <p>Računarske tehnologije su doprinijele revoluciji tipografije u 20. stoljeću.Tip osobnih računala u 1980. kao Macintosh dozvoljavao je dizajnerima da stvore tipove digitalno pomoću komercijalnog softvera za grafički dizajn. Digitalna tehnologija omogućila dizajnerima da stvore više eksperimentalnih pisma,uz praktične fontovi tradicionalnih tipografije.Dizajn za pisma moze se stvoriti brže s novom tehnologijom.Troškovi za razvoj pisma su se drastično spustili, postaje široko dostupna mnogima. Promjena je nazvana "demokratizaciju tipa" i dala je novim dizajnerima više mogućnosti.</p>
          <p>Pellentesque ullamcorper erat non malesuada dictum. Cras nec dui metus. Nam non consequat turpis. Aenean ut arcu porttitor, auctor nibh tempor, interdum quam. Etiam eu vehicula magna. Quisque ut egestas sem. Phasellus rutrum, nibh et efficitur condimentum, eros erat pellentesque est, ut malesuada nunc magna vel velit. In hac habitasse platea dictumst. Praesent volutpat dignissim tortor dignissim imperdiet. Cras accumsan vulputate dolor, nec condimentum nulla tincidunt eu.</p>

          <h5>Kako smo to riješili?</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in tristique odio. Quisque nec sollicitudin est. Sed vel malesuada diam. Donec laoreet scelerisque imperdiet. Sed eleifend porta lorem a dictum. Sed lorem lorem, rhoncus eget posuere eget, bibendum ut odio. Nulla lacinia nunc et fermentum lobortis. Fusce scelerisque, lacus tincidunt pellentesque luctus, tellus risus consectetur dui, ut accumsan tellus leo vel mauris. Aenean id tortor lacus.</p>

          <h5>Šta je naše rješenje?</h5>
          <p>Quisque lobortis accumsan tempus. Mauris pretium neque eu posuere molestie. Maecenas tincidunt eleifend egestas. Vestibulum tellus augue, laoreet sit amet quam nec, pulvinar luctus nisl. In consequat elit et aliquet posuere. Mauris porttitor est a ipsum vehicula, non porttitor quam tincidunt. Proin id orci tortor. Integer sit amet enim a nisi sagittis ultrices. Sed efficitur feugiat lobortis. In in lorem mauris. Ut placerat velit ut ligula placerat, eu accumsan sapien luctus. Vivamus in est sit amet felis dictum dapibus. Sed et eros sed massa porttitor volutpat vel at orci. Proin et lacus molestie, bibendum nisi eu, bibendum velit.</p>

        </div>
      </section>
      <!-- END About -->






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
