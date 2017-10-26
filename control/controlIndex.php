<?php
$motoManager = new MotoManager($bdd);
$voitureManager = new VoitureManager($bdd);
$camionManager = new CamionManager($bdd);
$afficheVoiture = $voitureManager->afficheVoiture();
$afficheMoto = $motoManager->afficheMoto();
$afficheCamion = $camionManager->afficheCamion();
if (isset($_POST['effacerMoto']) and !empty($_POST['id']) and !empty($_POST['typeVehicule'])) {
  $motoManager->deleteMoto($_POST['id'], $_POST['typeVehicule']);
}

if (isset($_POST['effacerVoiture']) and !empty($_POST['id']) and !empty($_POST['typeVehicule'])) {
  $voitureManager->deleteVoiture($_POST['id'], $_POST['typeVehicule']);
}

if (isset($_POST['effacerCamion']) and !empty($_POST['id']) and !empty($_POST['typeVehicule'])) {
  $camionManager->deleteCamion($_POST['id'], $_POST['typeVehicule']);
}

if (!isset($_POST['updateVoiture']) and !isset($_POST['updateMoto'])) and !isset($_POST['updateCamion']) and !isset($_POST['']) {
  # code...
}

// $voiture = new Voiture([
//   'typeVehicule'=>'voiture',
//   'nomVehicule'=>'lion',
//   'marqueVehicule'=>'saab',
//   'poids'=>1.1,
//   'couleur'=>'black',
//   'anneeSortie'=>1992,
//   'nbPorte'=>5
// ]);
// $moto = new Moto([
//     'typeVehicule'=>'moto',
//     'nomVehicule'=>'Licorne',
//     'marqueVehicule'=>'peugaut',
//     'poids'=>0.12,
//     'couleur'=>'white',
//     'anneeSortie'=>2102,
//     'volume'=>1950
// ]);


//COMMANDE POUR MOTO TEST

//var_dump($MotoManager);
//$nouvelleMoto = $motoManager->addMoto($moto);
//$motoManager->deleteMoto(7, 'moto');
//$motoManager->updateMoto(4, 'moto', 'cobra', 'renault', 0.15, 'white', 1989, 1500);


//COMMANDE POUR VOITURE TEST
// $nouvellevoiture = $voitureManager->addVoiture($voiture);
//$voitureManager->deleteVoiture(2, 'voiture');

//$voitureManager->updateVoiture(3, 'voiture', 'super5', 'renault', 1.3, 'white', 1989, 5);


//var_dump($afficheVoiture);

//COMMANDE TEST CAMION
// $camion = new Camion([
//     'typeVehicule'=>'camion',
//     'nomVehicule'=>'coloss',
//     'marqueVehicule'=>'Audi',
//     'poids'=>15.3,
//     'couleur'=>'black',
//     'anneeSortie'=>2102,
//     'hauteur'=>2.5
//   ]);

//$nouveauCamion = $camionManager->addCamion($camion);
//$camionManager->deleteCamion(9, 'camion');
//$camionManager->updateCamion(8, 'camion', 'colosse', 'mercedes', 15.4, 'grey', 2017, 3.1);
  //var_dump($camion); ?>
