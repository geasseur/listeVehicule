<?php

//CONTROLER PART WHERE MANAGERS WHERE LAUNCH AND THE VEHICULE'S DISPLAY IS CALL
$motoManager = new MotoManager($bdd);
$voitureManager = new VoitureManager($bdd);
$camionManager = new CamionManager($bdd);
$afficheVoiture = $voitureManager->afficheVoitures();
$afficheMoto = $motoManager->afficheMotos();
$afficheCamion = $camionManager->afficheCamions();

//CONTROLER PART FOR DELETE VEHICULE

//Delete Bike
if (isset($_POST['effacerMoto']) and !empty($_POST['id']) and !empty($_POST['typeVehicule'])) {
  $moto = new Moto([
    'id'=>$_POST['id']
  ]);
  $motoManager->deleteMoto($moto);
  header('Location:index.php');
}

//delete Car
if (isset($_POST['effacerVoiture']) and !empty($_POST['id']) and !empty($_POST['typeVehicule'])) {
  $voiture = new Voiture([
    'id'=>$_POST['id']
  ]);
  $voitureManager->deleteVoiture($voiture);
  header('Location:index.php');
}

//delete Truck
if (isset($_POST['effacerCamion']) and !empty($_POST['id']) and !empty($_POST['typeVehicule'])) {
  $camion = new Camion([
    'id'=>$_POST['id']
  ]);
  $camionManager->deleteCamion($camion);
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
  $voiture = new Voiture([
    'id'=>$_POST['id'],
    'typeVehicule'=>'voiture',
    'nomVehicule'=>$_POST['nomVehicule'],
    'marqueVehicule'=>$_POST['marqueVehicule'],
    'poids'=>$_POST['poids'],
    'couleur'=>$_POST['couleur'],
    'anneeSortie'=>$_POST['anneeSortie'],
    'nbPorte'=>$_POST['nbPorte']
  ]);
  $voitureManager->updateVoiture($voiture);
  $afficheVoiture = $voitureManager->afficheVoitures();
}

//UPDATE BIKE
if (isset($_POST['updateMoto'])) {
  $moto = new Moto([
    'id'=>$_POST['id'],
    'typeVehicule'=>'moto',
    'nomVehicule'=>$_POST['nomVehicule'],
    'marqueVehicule'=>$_POST['marqueVehicule'],
    'poids'=>$_POST['poids'],
    'couleur'=>$_POST['couleur'],
    'anneeSortie'=>$_POST['anneeSortie'],
    'volume'=>$_POST['volume']
  ]);
  $motoManager->updateMoto($moto);
  $afficheMoto = $motoManager->afficheMotos();
}

//UPDATE TRUCK
if (isset($_POST['updateCamion'])) {
  $camion = new Camion([
    'id'=>$_POST['id'],
    'typeVehicule'=>'camion',
    'nomVehicule'=>$_POST['nomVehicule'],
    'marqueVehicule'=>$_POST['marqueVehicule'],
    'poids'=>$_POST['poids'],
    'couleur'=>$_POST['couleur'],
    'anneeSortie'=>$_POST['anneeSortie'],
    'hauteur'=>$_POST['hauteur']
  ]);
  $camionManager->updateCamion($camion);
  $afficheCamion = $camionManager->afficheCamions();
}
