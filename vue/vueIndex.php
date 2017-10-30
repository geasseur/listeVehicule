<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Index</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/style.css">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="bootstrap4/css/bootstrap.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="../js/vendor/modernizr-2.8.3.min.js"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
        <header class="container bg-faded">
          <h1>Liste Vehicule</h1>
          <article>
            <h2>Nouveau Vehicule</h2>
            <!-- forms for display forms for car, bike or truck -->
            <article class="d-flex justify-content-around">
              <form class="d-inline-block" action="" method="post">
                <input class='btn material-icons bg-primary' type="submit" name="voiture" value="directions_car">
              </form>
              <form class="d-inline-block" action="" method="post">
                <input class='btn material-icons bg-primary' type="submit" name="moto" value="motorcycle">
              </form>
              <form class="d-inline-block" action="" method="post">
                <input class='btn material-icons bg-primary'type="submit" name="camion" value="directions_transit">
              </form>
            </article>
            <?php if (isset($_POST['voiture'])) {
              ?>
              <!-- form for create a new car -->
              <h3>Nouvelle Voiture</h3>
              <form class=" formulaireCreation" action="" method="post">
                <input style="display:none" type="text" name="id" value=""><br>
                <label for="">nom du vehicule : </label>
                <input type="text" name="nomVehicule" value=""><br>
                <label for="">marque du vehicule : </label>
                <input type="text" name="marqueVehicule" value=""><br>
                <label for="">poids : </label>
                <input type="text" name="poids" value=""><br>
                <label for="">couleur : </label>
                <input type="text" name="couleur" value=""><br>
                <label for="">annee de sortie : </label>
                <input type="text" name="anneeSortie" value=""><br>
                <label for="">nombre de Portes : </label>
                <input type="text" name="nbPorte" value=""><br>
                <input class='btn bg-primary' type="submit" name="newVoiture" value="Nouvelle Voiture">
              </form>
              <?php
            }
            if (isset($_POST['moto'])) {
              ?>
              <!-- form for create a new bike -->
              <h3>Nouvelle moto</h3>
              <form class="formulaireCreation" action="" method="post">
                <input style="display:none" type="text" name="id" value=""><br>
                <label for="">nom du vehicule : </label>
                <input type="text" name="nomVehicule" value=""><br>
                <label for="">marque du vehicule : </label>
                <input type="text" name="marqueVehicule" value=""><br>
                <label for="">poids : </label>
                <input type="text" name="poids" value=""><br>
                <label for="">couleur : </label>
                <input type="text" name="couleur" value=""><br>
                <label for="">annee de sortie : </label>
                <input type="text" name="anneeSortie" value=""><br>
                <label for="">Volume: </label>
                <input type="text" name="volume" value=""><br>
                <input class='btn bg-primary' type="submit" name="newMoto" value="Nouvelle Moto">
              </form>
              <?php
            }
            if (isset($_POST['camion'])) {
              ?>
              <!-- form for create a new truck -->
              <h3>Nouveau Camion</h3>
              <form class="formulaireCreation" action="" method="post">
                <input style="display:none" type="text" name="id" value=""><br>
                <label for="">nom du vehicule : </label>
                <input type="text" name="nomVehicule" value=""><br>
                <label for="">marque du vehicule : </label>
                <input type="text" name="marqueVehicule" value=""><br>
                <label for="">poids : </label>
                <input type="text" name="poids" value=""><br>
                <label for="">couleur : </label>
                <input type="text" name="couleur" value=""><br>
                <label for="">annee de sortie : </label>
                <input type="text" name="anneeSortie" value=""><br>
                <label for="">hauteur : </label>
                <input type="text" name="hauteur" value=""><br>
                <input class='btn bg-primary' type="submit" name="newCamion" value="Nouveau Camion">
              </form>
              <?php
            } ?>

          </article>
        </header>
        <main class='container bg-faded'>
          <h3>Voiture</h3>
          <section class='d-flex justify-content-around flex-wrap'>
            <?php
            foreach ($afficheVoiture as $key => $value) {
              ?>
              <article class="bg-faded carteVehicule card m-2 col-sm-12 col-md-5 col-lg-3 d-inline-block ">
                <h3>nom vehicule : <?php echo $value['nom_vehicule']; ?></h3>
                <h4>marque : <?php echo $value['marque_vehicule']; ?></h4>
                <h6>type : <?php echo $value['type_vehicule']; ?></h6>
                <div class="">
                  <p>poids : <?php echo $value['poids']; ?> tonnes</p>
                  <p>couleur : <?php echo $value['couleur']; ?></p>
                  <p>annee sortie : <?php echo $value['annee_sortie']; ?></p>
                  <p>nombre de porte : <?php echo $value['nbPorte']; ?></p>
                </div>
                <section class="d-flex justify-content-around p-3 flex-wrap">
                  <!-- FORM FOR DETAIL CAR -->
                  <form class="" action="control/controlDetail.php" method="post">
                    <input style="display:none" type="text" name="id" value="<?php echo $value['id']; ?>">
                    <input class="btn bg-success material-icons" type="submit" name="detailVoiture" value="zoom_in">
                  </form>
                  <!-- FORM FOR DELETE CAR -->
                  <form class="" action="" method="post">
                    <input style="display:none" type="text" name="id" value="<?php echo $value['id']; ?>">
                    <input style="display:none" type="text" name="typeVehicule" value="<?php echo $value['type_vehicule']; ?>">
                    <input class='btn bg-danger material-icons' type="submit" name="effacerVoiture" value="delete_sweep">
                  </form>
                  <?php if (isset($_POST['formulaireVoiture'])) {?>
                    <!-- form for update Car -->
                    <form class="" action="" method="post">
                      <input style="display:none" type="text" name="id" value="<?php echo $value['id'];?>"><br>
                      <label for="">nom du vehicule : </label>
                      <input type="text" name="nomVehicule" value="<?php echo $value['nom_vehicule']; ?>"><br>
                      <label for="">marque du vehicule : </label>
                      <input type="text" name="marqueVehicule" value="<?php echo $value['marque_vehicule']; ?>"><br>
                      <label for="">poids : </label>
                      <input type="text" name="poids" value="<?php echo $value['poids']; ?>"><br>
                      <label for="">couleur : </label>
                      <input type="text" name="couleur" value="<?php echo $value['couleur']; ?>"><br>
                      <label for="">annee de sortie : </label>
                      <input type="text" name="anneeSortie" value="<?php echo $value['annee_sortie']; ?>"><br>
                      <label for="">nombre de Porte : </label>
                      <input type="text" name="nbPorte" value="<?php echo $value['nbPorte']; ?>"><br>
                      <input type="submit" name="updateVoiture" value="Mettre a Jour">
                    </form>
                    <?php
                  }
                  elseif (!isset($_POST['formulaireVoiture'])) {
                    ?>
                    <!-- FORM FOR DISPLAY FORM FOR UPDATE -->
                    <form class="" action="" method="post">
                      <input class='btn bg-primary material-icons' type="submit" name="formulaireVoiture" value="system_update">
                    </form>
                    <?php
                  } ?>
                </section>
              </article>
              <?php
            } ?>
          </section>
          <h3>Moto</h3>
          <section class="d-flex justify-content-around flex-wrap">
            <?php
            foreach ($afficheMoto as $key => $value) {
              ?>
              <article class="bg-faded carteVehicule card m-2 col-sm-12 col-md-5 col-lg-3 d-inline-block p-3">
                <h3>nom Vehicule : <?php echo $value['nom_vehicule']; ?></h3>
                <h4>marque : <?php echo $value['marque_vehicule']; ?></h4>
                <h6>type : <?php echo $value['type_vehicule']; ?></h6>
                <div class="">
                  <p>poids : <?php echo $value['poids']; ?> tonnes</p>
                  <p>couleur : <?php echo $value['couleur']; ?></p>
                  <p>annee sortie : <?php echo $value['annee_sortie']; ?></p>
                  <p>volume : <?php echo $value['volume']; ?> cm3</p>
                </div>
                <section class='d-flex justify-content-around flex-wrap'>
                  <!-- FORM FOR DETAIL BIKE -->
                  <form class="" action="control/controlDetail.php" method="post">
                    <input style="display:none" type="text" name="id" value="<?php echo $value['id']; ?>">
                    <input class="btn bg-success material-icons" type="submit" name="detailMoto" value="zoom_in">
                  </form>

                  <!-- FORM FOR DELETE BIKE -->
                  <form class="" action="" method="post">
                    <input style="display:none" type="text" name="id" value="<?php echo $value['id']; ?>">
                    <input style="display:none" type="text" name="typeVehicule" value="<?php echo $value['type_vehicule']; ?>">
                    <input class='btn bg-danger material-icons' type="submit" name="effacerMoto" value="delete_sweep">
                  </form>
                  <?php if (isset($_POST['formulaireMoto'])) {?>
                    <!-- form for update Bike -->
                    <form class="" action="" method="post">
                      <input style="display:none" type="text" name="id" value="<?php echo $value['id'];?>"><br>
                      <label for="">nom du vehicule : </label>
                      <input type="text" name="nomVehicule" value="<?php echo $value['nom_vehicule']; ?>"><br>
                      <label for="">marque du vehicule : </label>
                      <input type="text" name="marqueVehicule" value="<?php echo $value['marque_vehicule']; ?>"><br>
                      <label for="">poids : </label>
                      <input type="text" name="poids" value="<?php echo $value['poids']; ?>"><br>
                      <label for="">couleur : </label>
                      <input type="text" name="couleur" value="<?php echo $value['couleur']; ?>"><br>
                      <label for="">annee de sortie : </label>
                      <input type="text" name="anneeSortie" value="<?php echo $value['annee_sortie']; ?>"><br>
                      <label for="">volume : </label>
                      <input type="text" name="volume" value="<?php echo $value['volume']; ?>"><br>
                      <input type="submit" name="updateMoto" value="Mettre a Jour">
                    </form>
                    <?php
                  }
                  elseif (!isset($_POST['formulaireMoto'])) {
                    ?>
                    <!-- FORM FOR DISPLAY FORM FOR UPDATE BIKE -->
                    <form class="" action="" method="post">
                      <input class='btn bg-primary material-icons' type="submit" name="formulaireMoto" value="system_update">
                    </form>
                    <?php
                  }?>
                </section>
              </article>
              <?php
            } ?>
          </section>
          <h3>Camion</h3>
          <section class="d-flex justify-content-around flex-wrap">
            <?php
            foreach ($afficheCamion as $key => $value) {
              ?>
              <article class="bg-faded carteVehicule card m-2 col-sm-12 col-md-5 col-lg-3 d-inline-block">
                <h3>nom Vehicule : <?php echo $value['nom_vehicule']; ?></h3>
                <h4>marque : <?php echo $value['marque_vehicule']; ?></h4>
                <h6>type : <?php echo $value['type_vehicule']; ?></h6>
                <div class="">
                  <p>poids : <?php echo $value['poids']; ?> tonnes</p>
                  <p>couleur : <?php echo $value['couleur']; ?></p>
                  <p>annee sortie : <?php echo $value['annee_sortie']; ?></p>
                  <p>hauteur : <?php echo $value['hauteur']; ?> Metre</p>
                </div>
                <section class='d-flex justify-content-around flex-wrap'>
                  <!-- FORM FOR DETAIL ON TRUCK -->
                  <form class="" action="control/controlDetail.php" method="post">
                    <input style="display:none" type="text" name="id" value="<?php echo $value['id']; ?>">
                    <input class="btn bg-success material-icons" type="submit" name="detailCamion" value="zoom_in">
                  </form>
                  <!-- Form FOR DELETE TRUCK -->
                  <form class="" action="" method="post">
                    <input style="display:none" type="text" name="id" value="<?php echo $value['id']; ?>">
                    <input style="display:none" type="text" name="typeVehicule" value="<?php echo $value['type_vehicule']; ?>">
                    <input class='btn bg-danger material-icons' type="submit" name="effacerCamion" value="delete_sweep">
                  </form>
                  <?php if (isset($_POST['formulaireCamion'])) {?>
                    <!-- form for update truck -->
                    <form class="" action="" method="post">
                      <input style="display:none" type="text" name="id" value="<?php echo $value['id'];?>"><br>
                      <label for="">nom du vehicule : </label>
                      <input type="text" name="nomVehicule" value="<?php echo $value['nom_vehicule']; ?>"><br>
                      <label for="">marque du vehicule : </label>
                      <input type="text" name="marqueVehicule" value="<?php echo $value['marque_vehicule']; ?>"><br>
                      <label for="">poids : </label>
                      <input type="text" name="poids" value="<?php echo $value['poids']; ?>"><br>
                      <label for="">couleur : </label>
                      <input type="text" name="couleur" value="<?php echo $value['couleur']; ?>"><br>
                      <label for="">annee de sortie : </label>
                      <input type="text" name="anneeSortie" value="<?php echo $value['annee_sortie']; ?>"><br>
                      <label for="">volume : </label>
                      <input type="text" name="hauteur" value="<?php echo $value['hauteur']; ?>"><br>
                      <input type="submit" name="updateCamion" value="Mettre a Jour">
                    </form>
                    <?php
                  }
                  elseif (!isset($_POST['formulaireCamion'])) {
                    ?>
                    <!-- Form FOR DISPLAY FORM FOR UPDATE TRUCK -->
                    <form class="" action="" method="post">
                      <input class='btn bg-primary material-icons' type="submit" name="formulaireCamion" value="system_update">
                    </form>
                    <?php
                  }?>
                </section>
              </article>
              <?php
            } ?>
          </section>
        </main>


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
