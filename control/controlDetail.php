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
    $affichageMoto = $motoManager->afficheMoto($_POST['id']);
}
//part for display car information
if (isset($_POST['detailVoiture'])) {
    $affichageVoiture = $voitureManager->afficheVoiture($_POST['id']);
}
//part for display truck information
if (isset($_POST['detailCamion'])) {
    $affichageCamion = $camionManager->afficheCamion($_POST['id']);
}

//part for display car information after update
if (isset($_POST['formulaireVoiture'])) {
  $affichageVoiture = $voitureManager->afficheVoiture($_POST['id']);
}
//part for display bike information after update
if (isset($_POST['formulaireMoto'])) {
  $affichageMoto = $motoManager->afficheMoto($_POST['id']);
}
//part for display truck information after update
if (isset($_POST['formulaireCamion'])) {
  $affichageCamion = $camionManager->afficheCamion($_POST['id']);
}

//for update car information
if (isset($_POST['updateVoiture'])) {
  $voitureManager->updateVoiture($_POST['id'], $_POST['nomVehicule'], $_POST['marqueVehicule'], $_POST['poids'], $_POST['couleur'], $_POST['anneeSortie'], $_POST['nbPorte']);
  $affichageVoiture = $voitureManager->afficheVoiture($_POST['id']);
}

// for update bike information
if (isset($_POST['updateMoto'])) {
  $motoManager->updateMoto($_POST['id'], $_POST['nomVehicule'], $_POST['marqueVehicule'], $_POST['poids'], $_POST['couleur'], $_POST['anneeSortie'], $_POST['volume']);
  $affichageMoto = $motoManager->afficheMoto($_POST['id']);
}

//for update truck information
if (isset($_POST['updateCamion'])) {
  $camionManager->updateCamion($_POST['id'], $_POST['nomVehicule'], $_POST['marqueVehicule'], $_POST['poids'], $_POST['couleur'], $_POST['anneeSortie'], $_POST['hauteur']);
  $affichageCamion = $camionManager->afficheCamion($_POST['id']);
}

//for delete truck
if (isset($_POST['deleteCamion'])) {
  $camionManager->deleteCamion($_POST['id'], $_POST['typeVehicule']);
  header('Location:../index.php');
}

//for delete bike
if (isset($_POST['deleteMoto'])) {
  $motoManager->deleteMoto($_POST['id'], $_POST['typeVehicule']);
  header('Location:../index.php');
}

//for delete car
if (isset($_POST['deleteVoiture'])) {
  $voitureManager->deleteVoiture($_POST['id'], $_POST['typeVehicule']);
  header('Location:../index.php');
}

require '../vue/vueDetail.php'; ?>
