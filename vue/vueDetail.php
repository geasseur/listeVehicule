<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Index</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="../bootstrap4/css/bootstrap.css">
        <link rel="stylesheet" href="..css/normalize.css">
        <link rel="stylesheet" href="../css/main.css">
        <script src="../js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
      <main class='container'>
        <?php
        if (isset($_POST['detailMoto'])) {
            ?>
            <h3>nom Vehicule : <?php echo $affichageMoto['nom_vehicule']; ?></h3>
            <h4>marque : <?php echo $affichageMoto['marque_vehicule']; ?></h4>
            <h6>type : <?php echo $affichageMoto['type_vehicule']; ?></h6>
            <div class="">
              <p>poids : <?php echo $affichageMoto['poids']; ?> tonnes</p>
              <p>couleur : <?php echo $affichageMoto['couleur']; ?></p>
              <p>annee sortie : <?php echo $affichageMoto['annee_sortie']; ?></p>
              <p>Volume : <?php echo $affichageMoto['volume']; ?>cm3</p>
        <?php
        }
        if (isset($_POST['detailVoiture'])) {
            ?>
            <h3>nom Vehicule : <?php echo $affichageVoiture['nom_vehicule']; ?></h3>
            <h4>marque : <?php echo $affichageVoiture['marque_vehicule']; ?></h4>
            <h6>type : <?php echo $affichageVoiture['type_vehicule']; ?></h6>
            <div class="">
              <p>poids : <?php echo $affichageVoiture['poids']; ?> tonnes</p>
              <p>couleur : <?php echo $affichageVoiture['couleur']; ?></p>
              <p>annee sortie : <?php echo $affichageVoiture['annee_sortie']; ?></p>
              <p>nombre Porte : <?php echo $affichageVoiture['nbPorte']; ?>cm3</p>
        <?php
        }
        if (isset($_POST['detailCamion'])) {
            ?>
            <h3>nom Vehicule : <?php echo $affichageCamion['nom_vehicule']; ?></h3>
            <h4>marque : <?php echo $affichageCamion['marque_vehicule']; ?></h4>
            <h6>type : <?php echo $affichageCamion['type_vehicule']; ?></h6>
            <div class="">
              <p>poids : <?php echo $affichageCamion['poids']; ?> tonnes</p>
              <p>couleur : <?php echo $affichageCamion['couleur']; ?></p>
              <p>annee sortie : <?php echo $affichageCamion['annee_sortie']; ?></p>
              <p>hauteur : <?php echo $affichageCamion['hauteur']; ?>cm3</p>
        <?php
        }?>
      </main>
      <footer>
        <form class="" action="../index.php" method="post">
          <input type="submit" name="" value="retour">
        </form>
      </footer>
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
