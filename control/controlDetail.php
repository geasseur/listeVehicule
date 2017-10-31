<?php
function chargerClasse($classname)
{
  include '../model/class/'.$classname.'.php';
}

spl_autoload_register('chargerClasse');
require '../model/connexion.php';
$motoManager = new MotoManager($bdd);
$voitureManager = new VoitureManager($bdd);
$camionManager = new CamionManager($bdd);

//part for display Bike information
if (isset($_POST['detailMoto'])) {
  $moto = new Moto([
    'id'=>$_POST['id']
  ]);
    $affichageMoto = $motoManager->afficheMoto($moto);
}
//part for display car information
if (isset($_POST['detailVoiture'])) {
  $voiture = new Voiture([
    'id'=>$_POST['id']
  ]);
    $affichageVoiture = $voitureManager->afficheVoiture($voiture);
}
//part for display truck information
if (isset($_POST['detailCamion'])) {
  $camion = new Camion([
    'id'=>$_POST['id']
  ]);
  $affichageCamion = $camionManager->afficheCamion($camion);
}

//part for display car information after update
if (isset($_POST['formulaireVoiture'])) {
  $voiture = new Voiture([
    'id'=>$_POST['id']
  ]);
    $affichageVoiture = $voitureManager->afficheVoiture($voiture);
}
//part for display bike information after update
if (isset($_POST['formulaireMoto'])) {
  $moto = new Moto([
    'id'=>$_POST['id']
  ]);
    $affichageMoto = $motoManager->afficheMoto($moto);
}
//part for display truck information after update
if (isset($_POST['formulaireCamion'])) {
  $camion = new Camion([
    'id'=>$_POST['id']
  ]);
  $affichageCamion = $camionManager->afficheCamion($camion);
}

//for update car information
if (isset($_POST['updateVoiture'])) {
  $voiture = new Voiture([
    'id'=>$_POST['id'],
    'nomVehicule'=>$_POST['nomVehicule'],
    'marqueVehicule'=>$_POST['marqueVehicule'],
    'poids'=>$_POST['poids'],
    'couleur'=>$_POST['couleur'],
    'anneeSortie'=>$_POST['anneeSortie'],
    'nbPorte'=>$_POST['nbPorte']
  ]);
  $voitureManager->updateVoiture($voiture);
  $affichageVoiture = $voitureManager->afficheVoiture($voiture);
}

// for update bike information
if (isset($_POST['updateMoto'])) {
  $moto = new Moto([
    'id'=>$_POST['id'],
    'nomVehicule'=>$_POST['nomVehicule'],
    'marqueVehicule'=>$_POST['marqueVehicule'],
    'poids'=>$_POST['poids'],
    'couleur'=>$_POST['couleur'],
    'anneeSortie'=>$_POST['anneeSortie'],
    'volume'=>$_POST['volume']
  ]);
  $motoManager->updateMoto($moto);
  $affichageMoto = $motoManager->afficheMoto($moto);
}

//for update truck information
if (isset($_POST['updateCamion'])) {
  $camion = new Camion([
    'id'=>$_POST['id'],
    'nomVehicule'=>$_POST['nomVehicule'],
    'marqueVehicule'=>$_POST['marqueVehicule'],
    'poids'=>$_POST['poids'],
    'couleur'=>$_POST['couleur'],
    'anneeSortie'=>$_POST['anneeSortie'],
    'hauteur'=>$_POST['hauteur']
  ]);
  $camionManager->updateCamion($camion);
  $affichageCamion = $camionManager->afficheCamion($camion);
}

//for delete truck
if (isset($_POST['deleteCamion'])) {
  $camion = new Camion([
    'id'=>$_POST['id']
  ]);
  $camionManager->deleteCamion($camion);
  header('Location:../index.php');
}

//for delete bike
if (isset($_POST['deleteMoto'])) {
  $moto = new Moto([
    'id'=>$_POST['id']
  ]);
  $motoManager->deleteMoto($moto);
  header('Location:../index.php');
}

//for delete car
if (isset($_POST['deleteVoiture'])) {
  $voiture = new Voiture([
    'id'=>$_POST['id']
  ]);
  $voitureManager->deleteVoiture($voiture);
  header('Location:../index.php');
}

require '../vue/vueDetail.php'; ?>
