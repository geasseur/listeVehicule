<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
      <section>
        <h2>Voiture</h2>
        <?php
        foreach ($afficheVoiture as $key => $value) {
          ?>
          <article class="">
            <h2>nom Vehicule : <?php echo $value['nom_vehicule']; ?></h2>
            <h4>marque : <?php echo $value['marque_vehicule']; ?></h4>
            <h6>type : <?php echo $value['type_vehicule']; ?></h6>
            <div class="">
              <p>poids : <?php echo $value['poids']; ?> tonnes</p>
              <p>couleur : <?php echo $value['couleur']; ?></p>
              <p>annee sortie : <?php echo $value['annee_sortie']; ?></p>
              <p>nombre de porte : <?php echo $value['nbPorte']; ?></p>
            </div>
          </article>
          <?php
        } ?>
      </section>
      <section>
        <h2>Moto</h2>
        <?php
        foreach ($afficheMoto as $key => $value) {
          ?>
          <article class="">
            <h2>nom Vehicule : <?php echo $value['nom_vehicule']; ?></h2>
            <h4>marque : <?php echo $value['marque_vehicule']; ?></h4>
            <h6>type : <?php echo $value['type_vehicule']; ?></h6>
            <div class="">
              <p>poids : <?php echo $value['poids']; ?> tonnes</p>
              <p>couleur : <?php echo $value['couleur']; ?></p>
              <p>annee sortie : <?php echo $value['annee_sortie']; ?></p>
              <p>volume : <?php echo $value['volume']; ?> cm3</p>
            </div>
          </article>
          <?php
        } ?>
      </section>
      <section>
        <h2>Camion</h2>
        <?php
        foreach ($afficheCamion as $key => $value) {
          ?>
          <article class="">
            <h2>nom Vehicule : <?php echo $value['nom_vehicule']; ?></h2>
            <h4>marque : <?php echo $value['marque_vehicule']; ?></h4>
            <h6>type : <?php echo $value['type_vehicule']; ?></h6>
            <div class="">
              <p>poids : <?php echo $value['poids']; ?> tonnes</p>
              <p>couleur : <?php echo $value['couleur']; ?></p>
              <p>annee sortie : <?php echo $value['annee_sortie']; ?></p>
              <p>hauteur : <?php echo $value['hauteur']; ?> Metre</p>
            </div>
          </article>
          <?php
        } ?>
      </section>

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
