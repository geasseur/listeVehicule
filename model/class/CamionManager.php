<?php
class CamionManager{
  private $_bdd;

  public function __construct($bdd){
    $this->setBdd($bdd);
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
  public function addCamion(Camion $camion){
    $ajoutCamion = $this->_bdd->prepare('INSERT INTO Vehicule(type_vehicule, nom_vehicule, marque_vehicule, poids, couleur, annee_sortie, hauteur) VALUES (:type_vehicule, :nom_vehicule, :marque_vehicule, :poids, :couleur, :annee_sortie, :hauteur)');
    $ajoutCamion->bindValue(':type_vehicule', $camion->getTypeVehicule(), PDO::PARAM_STR);
    $ajoutCamion->bindValue(':nom_vehicule', $camion->getNomVehicule(), PDO::PARAM_STR);
    $ajoutCamion->bindValue(':marque_vehicule', $camion->getMarqueVehicule(), PDO::PARAM_STR);
    $ajoutCamion->bindValue(':poids', $camion->getPoids(), PDO::PARAM_INT);
    $ajoutCamion->bindValue(':couleur',$camion->getCouleur(), PDO::PARAM_STR);
    $ajoutCamion->bindValue(':annee_sortie', $camion->getAnneeSortie(), PDO::PARAM_INT);
    $ajoutCamion->bindValue(':hauteur', $camion->getHauteur(),PDO::PARAM_INT);
    $ajoutCamion->execute();
  }

  //function for deleted a voiture object on the data base
  public function deleteCamion(Camion $camion){
    $casse = $this->_bdd->query('DELETE FROM Vehicule WHERE id = '.$camion->getId().' AND type_vehicule = "camion" ');
  }

  //function for updated a voiture object on the data base
  public function updateCamion(Camion $camion){
    $miseAJourCamion = $this->_bdd->prepare('UPDATE Vehicule SET nom_vehicule = :nom_vehicule, marque_vehicule = :marque_vehicule, poids = :poids, couleur = :couleur, annee_sortie = :annee_sortie, hauteur = :hauteur WHERE id = :id ');
    $miseAJourCamion->bindValue(':id', $camion->getId(), PDO::PARAM_INT);
    $miseAJourCamion->bindValue(':nom_vehicule', $camion->getNomVehicule(), PDO::PARAM_STR);
    $miseAJourCamion->bindValue(':marque_vehicule', $camion->getMarqueVehicule(), PDO::PARAM_STR);
    $miseAJourCamion->bindValue(':poids', $camion->getPoids(), PDO::PARAM_INT);
    $miseAJourCamion->bindValue(':couleur', $camion->getCouleur(), PDO::PARAM_STR);
    $miseAJourCamion->bindValue(':annee_sortie', $camion->getAnneeSortie(), PDO::PARAM_INT);
    $miseAJourCamion->bindValue(':hauteur', $camion->getHauteur(), PDO::PARAM_INT);
    $miseAJourCamion->execute();
  }

  public function afficheCamions(){
    $afficheCamion= $this->_bdd->query('SELECT id, type_vehicule, nom_vehicule, marque_vehicule, poids, couleur, annee_sortie, hauteur from Vehicule WHERE type_vehicule = "camion"');

    return $afficheCamion->fetchAll();
  }

  public function afficheCamion(Camion $camion){
    $afficheCamion= $this->_bdd->query('SELECT id, type_vehicule, nom_vehicule, marque_vehicule, poids, couleur, annee_sortie, hauteur from Vehicule WHERE id = '.$camion->getId().' AND type_vehicule = "camion"');

    return $afficheCamion->fetch();
  }
} ?>
