<?php
$voiture = new Voiture([
  'typeVehicule'=>'voiture',
  'nomVehicule'=>'lion',
  'marqueVehicule'=>'saab',
  'poids'=>1.1,
  'couleur'=>'black',
  'anneeSortie'=>1992,
  'nbPorte'=>5
]);
var_dump($bdd);
$voitureManager = new VoitureManager($bdd);
//$nouvellevoiture = $voitureManager->addVoiture($voiture);
//$voitureManager->deleteVoiture(2, 'voiture');
$voitureManager->updateVoiture(3, 'voiture', 'super5', 'renault', 1.3, 'white', 1989, 5);
$afficheVoiture = $voitureManager->afficheVoiture();

var_dump($afficheVoiture); ?>
