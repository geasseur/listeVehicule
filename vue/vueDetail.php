<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Détail</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="../bootstrap4/css/bootstrap.css">
        <link rel="stylesheet" href="../css/normalize.css">
        <link rel="stylesheet" href="../css/main.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
      <main class='container bg-faded detail'>
        <?php
        // DISPLAY BIKE
        if (isset($_POST['detailMoto']) or isset($_POST['updateMoto'])) {
            ?>
            <section class='bg-faded'>
              <h3>nom Vehicule : <?php echo $affichageMoto['nom_vehicule']; ?></h3>
              <h4>marque : <?php echo $affichageMoto['marque_vehicule']; ?></h4>
              <h6>type : <?php echo $affichageMoto['type_vehicule']; ?></h6>
              <p class="card-text">poids : <?php echo $affichageMoto['poids']; ?> tonnes</p>
              <p>couleur : <?php echo $affichageMoto['couleur']; ?></p>
              <p>annee sortie : <?php echo $affichageMoto['annee_sortie']; ?></p>
              <p>Volume : <?php echo $affichageMoto['volume']; ?>cm3</p>
              <div class="d-flex justify-content-around align-items-bottom p-3">
                <form class="d-inline-block align-top" action="" method="post">
                  <input style="display:none" type="text" name="id" value="<?php echo $affichageMoto['id'];?>"><br>
                  <input class="btn material-icons bg-primary bg-primary" type="submit" name="formulaireMoto" value="system_update">
                </form>
                <form class="d-inline-block align-top" action="" method="post">
                  <input style="display:none" type="text" name="id" value="<?php echo $affichageMoto['id'];?>">
                  <input style="display:none" type="text" name="typeVehicule" value="<?php echo $affichageMoto['type_vehicule']; ?>">
                  <input class="btn material-icons bg-danger" type="submit" name="deleteMoto" value="delete_sweep">
                </form>
            </section>
        <?php
        }
        // FORM FOR UPDATE BIKE
        if (isset($_POST['formulaireMoto'])) {?>
          <form class="" action="" method="post">
            <input style="display:none" type="text" name="id" value="<?php echo $affichageMoto['id'];?>"><br>
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
            <input class="btn material-icons bg-primary" type="submit" name="updateMoto" value="system_update">
          </form>
          <?php
        }
        if (isset($_POST['detailVoiture']) or isset($_POST['updateVoiture'])) {
            ?>
            <!-- Display CAR -->
            <section class='bg-faded'>
              <h3>nom Vehicule : <?php echo $affichageVoiture['nom_vehicule']; ?></h3>
              <h4>marque : <?php echo $affichageVoiture['marque_vehicule']; ?></h4>
              <h6>type : <?php echo $affichageVoiture['type_vehicule']; ?></h6>
              <p>poids : <?php echo $affichageVoiture['poids']; ?> tonnes</p>
              <p>couleur : <?php echo $affichageVoiture['couleur']; ?></p>
              <p>annee sortie : <?php echo $affichageVoiture['annee_sortie']; ?></p>
              <p>nombre Porte : <?php echo $affichageVoiture['nbPorte']; ?> portes</p>
              <div class="d-flex justify-content-around align-item-center">
                <form class="" action="" method="post">
                  <input style="display:none" type="text" name="id" value="<?php echo $affichageVoiture['id'];?>"><br>
                  <input class='btn material-icons bg-primary' type="submit" name="formulaireVoiture" value="system_update">
                </form>
                <form class="" action="" method="post">
                  <input style="display:none" type="text" name="id" value="<?php echo $affichageVoiture['id'];?>">
                  <input style="display:none" type="text" name="typeVehicule" value="<?php echo $affichageVoiture['type_vehicule']; ?>">
                  <input class='btn material-icons bg-danger' type="submit" name="deleteVoiture" value="delete_sweep">
                </form>
              </div>
            </section>
        <?php
        // FORM FOR UPDATE CAR
        }
        if (isset($_POST['formulaireVoiture'])) {?>
          <form class="" action="" method="post">
            <input style="display:none" type="text" name="id" value="<?php echo $affichageVoiture['id'];?>"><br>
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
            <input class='btn material-icons bg-primary' type="submit" name="updateVoiture" value="system_update">
          </form>
          <?php
        }
        if (isset($_POST['detailCamion']) or isset($_POST['updateCamion'])) {
            ?>
            <!-- display TRUCK  -->
            <section class='bg-faded'>
              <h3>nom Vehicule : <?php echo $affichageCamion['nom_vehicule']; ?></h3>
              <h4>marque : <?php echo $affichageCamion['marque_vehicule']; ?></h4>
              <h6>type : <?php echo $affichageCamion['type_vehicule']; ?></h6>
              <p>poids : <?php echo $affichageCamion['poids']; ?> tonnes</p>
              <p>couleur : <?php echo $affichageCamion['couleur']; ?></p>
              <p>annee sortie : <?php echo $affichageCamion['annee_sortie']; ?></p>
              <p>hauteur : <?php echo $affichageCamion['hauteur']; ?> mètres</p>
              <div class="d-flex justify-content-around align-item-center">
                <form class="" action="" method="post">
                  <input style="display:none" type="text" name="id" value="<?php echo $affichageCamion['id'];?>"><br>
                  <input class='btn material-icons bg-primary' type="submit" name="formulaireCamion" value="system_update">
                </form>
                <form class="" action="" method="post">
                  <input style="display:none" type="text" name="id" value="<?php echo $affichageCamion['id'];?>">
                  <input style="display:none" type="text" name="typeVehicule" value="<?php echo $affichageCamion['type_vehicule']; ?>">
                  <input class='btn material-icons bg-danger' type="submit" name="deleteCamion" value="delete_sweep">
                </form>
              </div>
            </section>
        <?php
        }
        if (isset($_POST['formulaireCamion'])) {
          ?>
          <!-- form for update truck -->
          <form class="" action="" method="post">
            <input style="display:none" type="text" name="id" value="<?php echo $affichageCamion['id'];?>"><br>
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
            <input class='btn material-icons bg-primary' type="submit" name="updateCamion" value="system_update">
          </form>
        <?php }?>
      </main>
      <footer>
        <form class="ml-5 mt-5" action="../index.php" method="post">
          <input class='btn material-icons bg-success' type="submit" name="" value="fast_rewind">
        </form>
      </footer>
      <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
      <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
      <script src="../js/plugins.js"></script>
      <script src="../js/main.js"></script>
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
