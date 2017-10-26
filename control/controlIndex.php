<?php
// $voiture = new Voiture([
//   'typeVehicule'=>'voiture',
//   'nomVehicule'=>'lion',
//   'marqueVehicule'=>'saab',
//   'poids'=>1.1,
//   'couleur'=>'black',
//   'anneeSortie'=>1992,
//   'nbPorte'=>5
// ]);
$moto = new Moto([
    'typeVehicule'=>'moto',
    'nomVehicule'=>'cobra',
    'marqueVehicule'=>'suzuki',
    'poids'=>0.12,
    'couleur'=>'black',
    'anneeSortie'=>2009,
    'volume'=>950
]);
var_dump($bdd);
//$motoManager = new MotoManager($bdd);
//$nouvellevoiture = $voitureManager->addVoiture($voiture);
//$voitureManager->deleteVoiture(2, 'voiture');
//$voitureManager->updateVoiture(3, 'voiture', 'super5', 'renault', 1.3, 'white', 1989, 5);
$voitureManager = new VoitureManager($bdd);
$afficheVoiture = $voitureManager->afficheVoiture();

//var_dump($afficheVoiture); ?>
