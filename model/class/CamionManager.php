<?php
class CamionManager{
  private $_bdd;

  public function __construct(array $donnees){
    $this->setBDD($_bdd);
  }
  /*Get the value of Bdd */
  public function getBdd()
  {
      return $this->_bdd;
  }

  /* Set the value of Bdd*/
  public function setBdd($_bdd)
  {
      $this->_bdd = $_bdd;

      return $this;
  }

  //function for added a truck object on the data base
  public function addCamion(Voiture $camion){
    $ajoutCamion = $this->_bdd->prepare('INSERT INTO Vehicule(type_vehicule, nom_vehicule, marque_vehicule, poids, couleur, annee_sortie, hauteur) VALUES (:type_vehicule, :nom_vehicule, :marque_vehicule, :poids, :couleur, :annee_sortie, :hauteur)');
    $ajoutCamion->bindValue(':type_vehicule', $camion->getTypeVehicule(), PDO::PARAM_STR);
    $ajoutCamion->bindValue(':nom_vehicule', $camion->getNomVehicule(), PDO::PARAM_STR);
    $ajoutCamion->bindValue(':marque_vehicule', $camion->getMarqueVehicule(), PDO::PARAM_STR);
    $ajoutCamion->bindValue(':poids', $camion->getPoids(), PDO::PARAM_INT);
    $ajoutCamion->bindValue(':couleur',$camion->getCouleur(), PDO::PARAM_STR, PDO::PARAM_STR);
    $ajoutCamion->bindValue(':annee_sortie', $camion->getAnneeSortie(), PDO::PARAM_INT);
    $ajoutCamion->bindValue(':hauteur', $camion->getNbPorte(),PDO::PARAM_INT);
    $ajoutCamion->execute();
  }

  //function for deleted a voiture object on the data base
  public function deleteCamion($id){
    $casse = $this->_bdd->query('DELETE FROM Vehicule WHERE id = '.$id' ');
  }

  //function for updated a voiture object on the data base
  public function updateCamion($id,$type_vehicule, $nom_vehicule, $marque_vehicule, $poids, $couleur, $annee_sortie, $hauteur){
    $miseAJourCamion = $this->_bdd->prepare('UPDATE Vehicule SET :type_vehicule, :nom_vehicule, :marque_vehicule, :poids, :couleur, :annee_sortie, :hauteur ');
    $miseAJourCamion->bindValue(':type_vehicule', $type_vehicule, PDO::PARAM_STR);
    $miseAJourCamion->bindValue(':nom_vehicule', $nom_vehicule, PDO::PARAM_STR);
    $miseAJourCamion->bindValue(':marque_vehicule', $marque_vehicule, PDO::PARAM_STR);
    $miseAJourCamion->bindValue(':poids', $poids, PDO::PARAM_INT);
    $miseAJourCamion->bindValue(':couleur', $couleur, PDO::PARAM_STR);
    $miseAJourCamion->bindValue(':annee_sortie', $annee_sortie, PDO::PARAM_INT);
    $miseAJourCamion->bindValue(':hateur', $hauteur, PDO::PARAM_INT);
    $miseAJourCamion->execute();
  }
} ?>
