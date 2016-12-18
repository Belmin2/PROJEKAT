<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Post a job position or create your online resume by TheJobs!">
    <meta name="keywords" content="">

    <title>TheJobs - Typography</title>

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
          <a class="btn btn-sm btn-primary" href="user-login.php">Login</a> or <a href="user-register.php">register</a>
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
        <h1 class="text-center">Typography</h1>
        <p class="lead text-center">Use the following tags and classes to write a better documentation.</p>
      </div>
    </header>
    <!-- END Site header -->


    <!-- Main container -->
    <main>

      <section>
        <div class="container">

          <h4>Introduction</h4>
          <p>Typography (from the Greek words τύπος typos “form” and γράφειν graphein “to write”) is the art and technique of arranging type to make written language readable and beautiful. The arrangement of type involves selecting typefaces, point size, line length, line-spacing (leading), letter-spacing (tracking), and adjusting the space within letters pairs (kerning). <a href="http://en.wikipedia.org/wiki/Type_design">Type design</a> is a closely related craft, sometimes considered part of typography; most typographers do not design typefaces, and some type designers do not consider themselves typographers. In modern times, typography has been put in film, television and online broadcasts to add emotion to communication.</p>

          <p>Donec scelerisque urna nibh, et interdum ex pellentesque tincidunt. Morbi lorem felis, dapibus ac eleifend id, commodo at diam. Praesent finibus velit est, eget posuere nisi sodales eget. Nunc iaculis euismod malesuada. Aenean vitae <a href="#">sample link</a> mauris eu lacus <strong>strong text</strong> tempor consequat <em>italic sample</em> nec eu justo. Nullam convallis, lacus pretium blandit facilisis, leo elit aliquet urna, non cursus est odio ut purus. Quisque consequat posuere est id viverra.</p>

          <p class="lead">Is a closely related craft, sometimes considered part of typography; most typographers do not design typefaces, and some type designers do not consider themselves typographers. In modern times, typography has been put in film, television and online broadcasts to add emotion to communication.</p>

          <p>Proin libero justo, sollicitudin dictum sagittis eu, gravida vel erat. Mauris pharetra odio nec nisi ullamcorper bibendum. <a href="#">Aenean pharetra fermentum semper</a>. Etiam maximus, leo ac facilisis egestas, dolor lacus condimentum purus, quis consequat orci justo vitae nunc. Cras tortor mauris, finibus vitae tortor in, porta fermentum orci. Pellentesque bibendum pharetra maximus. Donec vitae porttitor mi. Cras mollis magna eu neque porta, ac mattis sem faucibus.</p>

          <p class="small">Is a closely related craft, sometimes considered part of typography; most typographers do not design typefaces, and some type designers do not consider themselves typographers. In modern times, typography has been put in film, television and online broadcasts to add emotion to communication.</p>

          <hr>

          <h1>Heading 1</h1>
          <h2>Heading 2</h2>
          <h3>Heading 3</h3>
          <h4>Heading 4</h4>
          <h5>Heading 5</h5>
          <h6>Heading 6</h6>

          <hr>

          <h4>Ordered List:</h4>
          <ol>
            <li>In posuere risus eget velit finibus luctus.</li>
            <li>Praesent lacinia nunc et fringilla condimentum.</li>
            <li>Vivamus sed ipsum facilisis, maximus magna eu, consequat odio.</li>
            <li>Etiam auctor ipsum nec consectetur venenatis.</li>
            <li>Praesent lacinia nunc et fringilla condimentum</li>
          </ol>

          <h4>Unordered List:</h4>
          <ul>
            <li>Phasellus posuere libero non velit sodales, sed efficitur nisi iaculis.</li>
            <li>Donec ut est eget ex vehicula egestas a eget urna.</li>
            <li>Vestibulum vulputate purus in posuere imperdiet.</li>
            <li>Mauris varius erat sed sagittis placerat.</li>
            <li>Cras bibendum libero sagittis suscipit imperdiet.</li>
          </ul>

          <hr>

          <h4>Blockquote</h4>
          <p>Computer technology revolutionized typography in the 20th century. Personal computers in the 1980s like the Macintosh allowed type designers to create types digitally using commercial graphic design software. Digital technology also enabled designers to create more experimental typefaces, alongside the practical fonts of traditional typography. Designs for typefaces could be created faster with the new technology, and for more specific functions. The cost for developing typefaces was drastically lowered, becoming widely available to the masses. The change has been called the “democratization of type” and has given new designers more opportunities to enter the field.</p>
          <blockquote>
            <p>Painting is concerned with all the 10 attributes of sight; which are: Darkness, Light, Solidity and Colour, Form and Position, Distance and Propinquity, Motion and Rest.</p>
            <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
          </blockquote>

          <p>Typography is performed by typesetters, compositors, typographers, graphic designers, art directors, manga artists, comic book artists, graffiti artists, clerical workers, and everyone else who arranges type for a product. Until the Digital Age, typography was a specialized occupation. Digitization opened up typography to new generations of visual designers and lay users, and David Jury, Head of Graphic Design at Colchester Institute in England, states that “typography is now something everybody does.”</p>

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
