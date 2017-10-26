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
$motoManager = new MotoManager($bdd);
//var_dump($MotoManager);
//$nouvelleMoto = $motoManager->addMoto($moto);
//$motoManager->deleteMoto(7, 'moto');
//$motoManager->updateMoto(4, 'moto', 'cobra', 'renault', 0.15, 'white', 1989, 1500);


//COMMANDE POUR VOITURE TEST
// $nouvellevoiture = $voitureManager->addVoiture($voiture);
//$voitureManager->deleteVoiture(2, 'voiture');
$voitureManager = new VoitureManager($bdd);
$voitureManager->updateVoiture(3, 'voiture', 'super5', 'renault', 1.3, 'white', 1989, 5);
$afficheVoiture = $voitureManager->afficheVoiture();
$afficheMoto = $motoManager->afficheMoto();

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
$camionManager = new CamionManager($bdd);
//$nouveauCamion = $camionManager->addCamion($camion);
//$camionManager->deleteCamion(9, 'camion');
$afficheCamion = $camionManager->afficheCamion();
//$camionManager->updateCamion(8, 'camion', 'colosse', 'mercedes', 15.4, 'grey', 2017, 3.1);
  //var_dump($camion); ?>
