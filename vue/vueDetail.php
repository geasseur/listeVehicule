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
        // DISPLAY BIKE
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
              <form class="" action="" method="post">
                <input style="display:none" type="text" name="id" value="<?php echo $affichageMoto['id'];?>"><br>
                <input type="submit" name="formulaireMoto" value="update">
              </form>
        <?php
        }
        // FORM FOR UPDATE BIKE
        if (isset($_POST['formulaireMoto'])) {?>
          <form class="" action="" method="post">
            <input style="display:none" type="text" name="id" value="<?php echo $affichageMoto['id'];?>"><br>
            <label for="">type de vehicule : </label>
            <input type="text" name="typeVehicule" value="<?php echo $affichageMoto['type_vehicule']; ?>"><br>
            <label for="">nom du vehicule : </label>
            <input type="text" name="nomVehicule" value="<?php echo $affichageMoto['nom_vehicule']; ?>"><br>
            <label for="">marque du vehicule : </label>
            <input type="text" name="marqueVehicule" value="<?php echo $affichageMoto['marque_vehicule']; ?>"><br>
            <label for="">poids : </label>
            <input type="text" name="poids" value="<?php echo $affichageMoto['poids']; ?>"><br>
            <label for="">couleur : </label>
            <input type="text" name="couleur" value="<?php echo $affichageMoto['couleur']; ?>"><br>
            <label for="">annee de sortie : </label>
            <input type="text" name="anneeSortie" value="<?php echo $affichageMoto['annee_sortie']; ?>"><br>
            <label for="">volume : </label>
            <input type="text" name="volume" value="<?php echo $affichageMoto['volume']; ?>"><br>
            <input type="submit" name="updateMoto" value="Mettre a Jour">
          </form>
          <?php
        }
        if (isset($_POST['detailVoiture'])) {
            ?>
            <!-- Display CAR -->
            <h3>nom Vehicule : <?php echo $affichageVoiture['nom_vehicule']; ?></h3>
            <h4>marque : <?php echo $affichageVoiture['marque_vehicule']; ?></h4>
            <h6>type : <?php echo $affichageVoiture['type_vehicule']; ?></h6>
            <div class="">
              <p>poids : <?php echo $affichageVoiture['poids']; ?> tonnes</p>
              <p>couleur : <?php echo $affichageVoiture['couleur']; ?></p>
              <p>annee sortie : <?php echo $affichageVoiture['annee_sortie']; ?></p>
              <p>nombre Porte : <?php echo $affichageVoiture['nbPorte']; ?> portes</p>
              <form class="" action="" method="post">
                <input style="display:none" type="text" name="id" value="<?php echo $affichageVoiture['id'];?>"><br>
                <input type="submit" name="formulaireVoiture" value="update">
              </form>
        <?php
        // FORM FOR UPDATE CAR
        }
        if (isset($_POST['formulaireVoiture'])) {?>
          <form class="" action="" method="post">
            <input style="display:none" type="text" name="id" value="<?php echo $affichageVoiture['id'];?>"><br>
            <label for="">type de vehicule : </label>
            <input type="text" name="typeVehicule" value="<?php echo $affichageVoiture['type_vehicule']; ?>"><br>
            <label for="">nom du vehicule : </label>
            <input type="text" name="nomVehicule" value="<?php echo $affichageVoiture['nom_vehicule']; ?>"><br>
            <label for="">marque du vehicule : </label>
            <input type="text" name="marqueVehicule" value="<?php echo $affichageVoiture['marque_vehicule']; ?>"><br>
            <label for="">poids : </label>
            <input type="text" name="poids" value="<?php echo $affichageVoiture['poids']; ?>"><br>
            <label for="">couleur : </label>
            <input type="text" name="couleur" value="<?php echo $affichageVoiture['couleur']; ?>"><br>
            <label for="">annee de sortie : </label>
            <input type="text" name="anneeSortie" value="<?php echo $affichageVoiture['annee_sortie']; ?>"><br>
            <label for="">nombre de Porte : </label>
            <input type="text" name="nbPorte" value="<?php echo $affichageVoiture['nbPorte']; ?>"><br>
            <input type="submit" name="updateVoiture" value="Mettre a Jour">
          </form>
          <?php
        }
            ?>
            <!-- display TRUCK  -->
            <h3>nom Vehicule : <?php echo $affichageCamion['nom_vehicule']; ?></h3>
            <h4>marque : <?php echo $affichageCamion['marque_vehicule']; ?></h4>
            <h6>type : <?php echo $affichageCamion['type_vehicule']; ?></h6>
            <div class="">
              <p>poids : <?php echo $affichageCamion['poids']; ?> tonnes</p>
              <p>couleur : <?php echo $affichageCamion['couleur']; ?></p>
              <p>annee sortie : <?php echo $affichageCamion['annee_sortie']; ?></p>
              <p>hauteur : <?php echo $affichageCamion['hauteur']; ?> mètres</p>
              <form class="" action="" method="post">
                <input style="display:none" type="text" name="id" value="<?php echo $affichageCamion['id'];?>"><br>
                <input type="submit" name="formulaireCamion" value="update">
              </form>
              <form class="" action="" method="post">
                <input type="text" name="id" value="<?php echo $affichageCamion['id'];?>">
                <input type="text" name="typeVehicule" value="<?php echo $affichageCamion['type_vehicule']; ?>">
                <input type="submit" name="deleteCamion" value="effacer">
              </form>
        <?php
        if (isset($_POST['formulaireCamion'])) {
          ?>
          <form class="" action="" method="post">
            <input style="display:none" type="text" name="id" value="<?php echo $affichageCamion['id'];?>"><br>
            <label for="">type de vehicule : </label>
            <input type="text" name="typeVehicule" value="<?php echo $affichageCamion['type_vehicule']; ?>"><br>
            <label for="">nom du vehicule : </label>
            <input type="text" name="nomVehicule" value="<?php echo $affichageCamion['nom_vehicule']; ?>"><br>
            <label for="">marque du vehicule : </label>
            <input type="text" name="marqueVehicule" value="<?php echo $affichageCamion['marque_vehicule']; ?>"><br>
            <label for="">poids : </label>
            <input type="text" name="poids" value="<?php echo $affichageCamion['poids']; ?>"><br>
            <label for="">couleur : </label>
            <input type="text" name="couleur" value="<?php echo $affichageCamion['couleur']; ?>"><br>
            <label for="">annee de sortie : </label>
            <input type="text" name="anneeSortie" value="<?php echo $affichageCamion['annee_sortie']; ?>"><br>
            <label for="">hauteur : </label>
            <input type="text" name="hauteur" value="<?php echo $affichageCamion['hauteur']; ?>"><br>
            <input type="submit" name="updateCamion" value="Mettre a Jour">
          </form>
        <?php }?>
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
