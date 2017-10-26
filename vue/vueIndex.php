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
        <link rel="stylesheet" href="../bootstrap4/css/bootstrap.css">
        <link rel="stylesheet" href="../css/normalize.css">
        <link rel="stylesheet" href="../css/main.css">
        <script src="../js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
      <main>
        <header>
          <h1>Liste Vehicule</h1>
          <article class="">
            <h2></h2>
            <?php if (isset($_POST['voiture'])) {
              ?>
              <form class="" action="" method="post">

              </form>
              <?php
            } ?>

          </article>
        </header>
        <section class='card'>
          <h2>Voiture</h2>
          <?php
          foreach ($afficheVoiture as $key => $value) {
            ?>
            <article class="card-block">
              <h2>nom vehicule : <?php echo $value['nom_vehicule']; ?></h2>
              <h4>marque : <?php echo $value['marque_vehicule']; ?></h4>
              <h6>type : <?php echo $value['type_vehicule']; ?></h6>
              <div class="">
                <p>poids : <?php echo $value['poids']; ?> tonnes</p>
                <p>couleur : <?php echo $value['couleur']; ?></p>
                <p>annee sortie : <?php echo $value['annee_sortie']; ?></p>
                <p>nombre de porte : <?php echo $value['nbPorte']; ?></p>
              </div>
              <section>
                <form class="" action="control/controlDetail" method="post">
                  <input style="display:none" type="text" name="id" value="<?php echo $value['id']; ?>">
                  <input type="submit" name="detailMoto" value="Detail">
                </form>
                <form class="" action="" method="post">
                  <input style="display:none" type="text" name="id" value="<?php echo $value['id']; ?>">
                  <input style="display:none" type="text" name="typeVehicule" value="<?php echo $value['type_vehicule']; ?>">
                  <input type="submit" name="effacerVoiture" value="Effacer">
                </form>
                <form class="" action="" method="post">
                  <input style="display:none" type="text" name="id" value="<?php echo $value['id'];?>"><br>
                  <label for="">type de vehicule : </label>
                  <input type="text" name="typeVehicule" value="<?php echo $value['type_vehicule']; ?>"><br>
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
                  <input type="text" name="nbPorte" value="<?php echo $value['nbPorte']; ?>"><br>
                  <input type="submit" name="updateVoiture" value="Mettre a Jour">
                </form>
              </section>
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
              <section>
                <form class="" action="" method="post">
                  <input type="text" name="id" value="<?php echo $value['id']; ?>">
                  <input type="submit" name="detailMoto" value="Detail">
                </form>
                <form class="" action="" method="post">
                  <input type="text" name="id" value="<?php echo $value['id']; ?>">
                  <input type="text" name="typeVehicule" value="<?php echo $value['type_vehicule']; ?>">
                  <input type="submit" name="effacerMoto" value="Effacer">
                </form>
                <form class="" action="" method="post">
                  <input type="text" name="id" value="<?php echo $value['id'];?>"><br>
                  <label for="">type de vehicule : </label>
                  <input type="text" name="typeVehicule" value="<?php echo $value['type_vehicule']; ?>"><br>
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
              </section>
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
              <section>
                <form class="" action="" method="post">
                  <input type="text" name="id" value="<?php echo $value['id']; ?>">
                  <input type="submit" name="detailCamion" value="Detail">
                </form>
                <form class="" action="" method="post">
                  <input type="text" name="id" value="<?php echo $value['id']; ?>">
                  <input type="text" name="typeVehicule" value="<?php echo $value['type_vehicule']; ?>">
                  <input type="submit" name="effacerCamion" value="Effacer">
                </form>
                <form class="" action="" method="post">
                  <input type="text" name="id" value="<?php echo $value['id'];?>"><br>
                  <label for="">type de vehicule : </label>
                  <input type="text" name="typeVehicule" value="<?php echo $value['type_vehicule']; ?>"><br>
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
                  <label for="">hauteur : </label>
                  <input type="text" name="hauteur" value="<?php echo $value['hauteur']; ?>"><br>
                  <input type="submit" name="updateCamion" value="Mettre a Jour">
                </form>
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
