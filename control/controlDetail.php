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

if (isset($_POST['detailMoto'])) {
    $affichageMoto = $motoManager->afficheMoto($_POST['id']);
}

if (isset($_POST['detailVoiture'])) {
    $affichageVoiture = $voitureManager->afficheVoiture($_POST['id']);
}

if (isset($_POST['detailCamion'])) {
    $affichageCamion = $camionManager->afficheCamion($_POST['id']);
}
if (isset($_POST['formulaireVoiture'])) {
  $affichageVoiture = $voitureManager->afficheVoiture($_POST['id']);
}

if (isset($_POST['formulaireMoto'])) {
  $affichageMoto = $motoManager->afficheMoto($_POST['id']);
}

if (isset($_POST['formulaireCamion'])) {
  $affichageCamion = $camionManager->afficheCamion($_POST['id']);
}

if (isset($_POST['updateVoiture'])) {
  $voitureManager->updateVoiture($_POST['id'], $_POST['typeVehicule'], $_POST['nomVehicule'], $_POST['marqueVehicule'], $_POST['poids'], $_POST['couleur'], $_POST['anneeSortie'], $_POST['nbPorte']);
  $afficheVoiture = $voitureManager->afficheVoiture($_POST['id']);
}

if (isset($_POST['updateMoto'])) {
  $motoManager->updateMoto($_POST['id'], $_POST['typeVehicule'], $_POST['nomVehicule'], $_POST['marqueVehicule'], $_POST['poids'], $_POST['couleur'], $_POST['anneeSortie'], $_POST['volume']);
  $afficheMoto = $motoManager->afficheMoto($_POST['id']);
}

if (isset($_POST['updateCamion'])) {
  $camionManager->updateCamion($_POST['id'], $_POST['typeVehicule'], $_POST['nomVehicule'], $_POST['marqueVehicule'], $_POST['poids'], $_POST['couleur'], $_POST['anneeSortie'], $_POST['hauteur']);
  $affichageCamion = $camionManager->afficheCamion($_POST['id']);
}

if (isset($_POST['deleteCamion'])) {
  $camionManager->deleteCamion($_POST['id'], $_POST['typeVehicule']);
  header('Location:../index.php');
}

require '../vue/vueDetail.php'; ?>
