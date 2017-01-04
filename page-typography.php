<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Post a job position or create your online resume by TheJobs!">
    <meta name="keywords" content="">

    <title>Tipografija</title>

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
          <a class="btn btn-sm btn-primary" href="user-login.php">Prijavite se</a> ili <a href="user-register.php">Registrujte</a>
        </div>
        <!-- END User account -->

        <!-- Navigation menu -->
    <?php include 'menu-1.php'; ?>
        <!-- END Navigation menu -->

      </div>
    </nav>
    <!-- END Navigation bar -->


    <!-- Site header -->
    <header class="page-header bg-img size-lg" style="background-image: url(./pictures/bg-banner2.jpg)">
      <div class="container no-shadow">
        <h1 class="text-center">Tipografija</h1>
        <p class="lead text-center">Koristite sljedeće oznake i klase, i napišite bolju dokumentaciju.</p>
      </div>
    </header>
    <!-- END Site header -->


    <!-- Main container -->
    <main>

      <section>
        <div class="container">

          <h4>Uvod</h4>
          <p> Tipografija (nastala od Grčke riječi τύπος "forma" i γράφειν pisati), to je umjetnost i tehnika uređenja, da pisani jezik bude čitljiv i lijep.Aranžman tipa ukljčuje odabir pisama,veličinu, dužinu linija,razmak-linija,i podešavanje prostora unutar slova.Dizajn je usko povezan zanat, ponekad se smatra dijelom tipografije,većina tipografa se ne bavi dizajnom, i neke vrste dizajnera sebe ne smatraju tipografima.U modernom vremenu tipografija se javlja u filmu, televiziji i online emisije dodaju emocije u komunikaciji.</p>

          <hr>

          <h1>Heading 1</h1>
          <h2>Heading 2</h2>
          <h3>Heading 3</h3>
          <h4>Heading 4</h4>
          <h5>Heading 5</h5>
          <h6>Heading 6</h6>

          <hr>

          <h4>Uređena lista:</h4>
          <ol>
            <li>In posuere risus eget velit finibus luctus.</li>
            <li>Praesent lacinia nunc et fringilla condimentum.</li>
            <li>Vivamus sed ipsum facilisis, maximus magna eu, consequat odio.</li>
            <li>Etiam auctor ipsum nec consectetur venenatis.</li>
            <li>Praesent lacinia nunc et fringilla condimentum</li>
          </ol>

          <h4>Neuređena lista:</h4>
          <ul>
            <li>Phasellus posuere libero non velit sodales, sed efficitur nisi iaculis.</li>
            <li>Donec ut est eget ex vehicula egestas a eget urna.</li>
            <li>Vestibulum vulputate purus in posuere imperdiet.</li>
            <li>Mauris varius erat sed sagittis placerat.</li>
            <li>Cras bibendum libero sagittis suscipit imperdiet.</li>
          </ul>

          <hr>

          <h4>Admin</h4>
          <p>Računarske tehnologije su doprinijele revoluciji tipografije u 20. stoljeću.Tip osobnih računala u 1980. kao Macintosh dozvoljavao je dizajnerima da stvore tipove digitalno pomoću komercijalnog softvera za grafički dizajn. Digitalna tehnologija omogućila dizajnerima da stvore više eksperimentalnih pisma,uz praktične fontovi tradicionalnih tipografije.Dizajn za pisma moze se stvoriti brže s novom tehnologijom.Troškovi za razvoj pisma su se drastično spustili, postaje široko dostupna mnogima. Promjena je nazvana  "demokratizaciju tipa" i dala je novim dizajnerima više mogućnosti.</p>
          <blockquote>
            <p>Slikarstvo se bavi svih 10 atribute a to su: Tama, svjetlo, čvrstine i boja, oblik i položaj, udaljenost i bliskost, pokret i odmor.</p>
            <footer>Neko poznat u <cite title="Source Title">izvornom naslovu</cite></footer>
          </blockquote>

          <p>U digitalnom dobu, tipografija je specijalizirano zanimanje. Digitalizacija je prenijela tipografiju na nove generacije vizuelnih dizajnera i  David Jury voditelj grafičkog dizajna u Colchester instituta u Engleskoj, navodi sljedeće"tipografija je sada nešto što svi rade".</p>

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
