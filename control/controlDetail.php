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

require '../vue/vueDetail.php'; ?>
