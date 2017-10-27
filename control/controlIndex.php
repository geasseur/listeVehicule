<?php

//CONTROLER PART WHERE MANAGERS WHERE LAUNCH AND THE VEHICULE'S DISPLAY IS CALL
$motoManager = new MotoManager($bdd);
$voitureManager = new VoitureManager($bdd);
$camionManager = new CamionManager($bdd);
$afficheVoiture = $voitureManager->afficheVoiture();
$afficheMoto = $motoManager->afficheMoto();
$afficheCamion = $camionManager->afficheCamion();

//CONTROLER PART FOR DELETE VEHICULE

//Delete Bike
if (isset($_POST['effacerMoto']) and !empty($_POST['id']) and !empty($_POST['typeVehicule'])) {
  $motoManager->deleteMoto($_POST['id'], $_POST['typeVehicule']);
  header('Location:index.php');
}

//delete Car
if (isset($_POST['effacerVoiture']) and !empty($_POST['id']) and !empty($_POST['typeVehicule'])) {
  $voitureManager->deleteVoiture($_POST['id'], $_POST['typeVehicule']);
  header('Location:index.php');
}

//delete Truck
if (isset($_POST['effacerCamion']) and !empty($_POST['id']) and !empty($_POST['typeVehicule'])) {
  $camionManager->deleteCamion($_POST['id'], $_POST['typeVehicule']);
  header('Location:index.php');
}

//CONTROLER PART FOR ADDED VEHICULE

//ADDED CAR
if (isset($_POST['newVoiture'])) {
  $voiture = new Voiture([
    'typeVehicule'=>'voiture',
    'nomVehicule'=>$_POST['nomVehicule'],
    'marqueVehicule'=>$_POST['marqueVehicule'],
    'poids'=>$_POST['poids'],
    'couleur'=>$_POST['couleur'],
    'anneeSortie'=>$_POST['anneeSortie'],
    'nbPorte'=>$_POST['nbPorte']
  ]);
  $voitureManager->addVoiture($voiture);
  header('Location:index.php');
}


// ADDED BIKE
if (isset($_POST['newMoto'])) {
  $moto = new Moto([
    'typeVehicule'=>'moto',
    'nomVehicule'=>$_POST['nomVehicule'],
    'marqueVehicule'=>$_POST['marqueVehicule'],
    'poids'=>$_POST['poids'],
    'couleur'=>$_POST['couleur'],
    'anneeSortie'=>$_POST['anneeSortie'],
    'volume'=>$_POST['volume']
  ]);
  $motoManager->addMoto($moto);
  header('Location:index.php');
}


//ADDED TRUCK
if (isset($_POST['newCamion'])) {
  $camion = new Camion([
    'typeVehicule'=>'camion',
    'nomVehicule'=>$_POST['nomVehicule'],
    'marqueVehicule'=>$_POST['marqueVehicule'],
    'poids'=>$_POST['poids'],
    'couleur'=>$_POST['couleur'],
    'anneeSortie'=>$_POST['anneeSortie'],
    'hauteur'=>$_POST['hauteur']
  ]);
  $camionManager->addCamion($camion);
  header('Location:index.php');
}

//CONTROLER PART FOR UPDATE VEHICULE

//UPDATE CAR

if (isset($_POST['updateVoiture'])) {
  $voitureManager->updateVoiture($_POST['id'], $_POST['typeVehicule'], $_POST['nomVehicule'], $_POST['marqueVehicule'], $_POST['poids'], $_POST['couleur'], $_POST['anneeSortie'], $_POST['nbPorte']);
  $afficheVoiture = $voitureManager->afficheVoiture();
}

//UPDATE BIKE
if (isset($_POST['updateMoto'])) {
  $voitureManager->updateVoiture($_POST['id'], $_POST['typeVehicule'], $_POST['nomVehicule'], $_POST['marqueVehicule'], $_POST['poids'], $_POST['couleur'], $_POST['anneeSortie'], $_POST['volume']);
  $afficheMoto = $motoManager->afficheMoto();
}

//UPDATE TRUCK
if (isset($_POST['updateCamion'])) {
  $voitureManager->updateVoiture($_POST['id'], $_POST['typeVehicule'], $_POST['nomVehicule'], $_POST['marqueVehicule'], $_POST['poids'], $_POST['couleur'], $_POST['anneeSortie'], $_POST['hauteur']);
  $afficheCamion = $camionManager->afficheCamion();
}

// if (!isset($_POST['updateVoiture']) and !isset($_POST['updateMoto'])) and !isset($_POST['updateCamion']) and !isset($_POST['']) {
//   # code...
// }

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
