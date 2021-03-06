<?php
class VoitureManager{
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

    //function for added a voiture object on the data base
    public function addVoiture(Voiture $voiture){
      $ajoutVoiture = $this->_bdd->prepare('INSERT INTO Vehicule(type_vehicule, nom_vehicule, marque_vehicule, poids, couleur, annee_sortie, nbPorte) VALUES (:type_vehicule, :nom_vehicule, :marque_vehicule, :poids, :couleur, :annee_sortie, :nbPorte)');
      $ajoutVoiture->bindValue(':type_vehicule', $voiture->getTypeVehicule(), PDO::PARAM_STR);
      $ajoutVoiture->bindValue(':nom_vehicule', $voiture->getNomVehicule(), PDO::PARAM_STR);
      $ajoutVoiture->bindValue(':marque_vehicule', $voiture->getMarqueVehicule(), PDO::PARAM_STR);
      $ajoutVoiture->bindValue(':poids', $voiture->getPoids(), PDO::PARAM_INT);
      $ajoutVoiture->bindValue(':couleur',$voiture->getCouleur(), PDO::PARAM_STR);
      $ajoutVoiture->bindValue(':annee_sortie', $voiture->getAnneeSortie(), PDO::PARAM_INT);
      $ajoutVoiture->bindValue(':nbPorte', $voiture->getNbPorte(),PDO::PARAM_INT);
      $ajoutVoiture->execute();
    }

    //function for deleted a voiture object on the data base
    public function deleteVoiture(Voiture $voiture){
      $casse = $this->_bdd->query('DELETE FROM Vehicule WHERE id = '.$voiture->getId().' AND type_vehicule = "voiture" ');
    }

    //function for updated a voiture object on the data base
    public function updateVoiture(Voiture $voiture){
      $miseAJourVoiture = $this->_bdd->prepare('UPDATE Vehicule SET nom_vehicule = :nom_vehicule, marque_vehicule = :marque_vehicule, poids = :poids, couleur = :couleur, annee_sortie = :annee_sortie, nbPorte = :nbPorte WHERE id = :id');
      $miseAJourVoiture->bindValue(':id',$voiture->getId(), PDO::PARAM_INT);
      $miseAJourVoiture->bindValue(':nom_vehicule',$voiture->getNomVehicule(), PDO::PARAM_STR);
      $miseAJourVoiture->bindValue(':marque_vehicule',$voiture->getMarqueVehicule(), PDO::PARAM_STR);
      $miseAJourVoiture->bindValue(':poids',$voiture->getPoids(), PDO::PARAM_INT);
      $miseAJourVoiture->bindValue(':couleur',$voiture->getCouleur(), PDO::PARAM_STR);
      $miseAJourVoiture->bindValue(':annee_sortie',$voiture->getAnneeSortie(), PDO::PARAM_INT);
      $miseAJourVoiture->bindValue(':nbPorte',$voiture->getNbPorte(), PDO::PARAM_INT);
      $miseAJourVoiture->execute();
    }

    //function for list all voiture objects
    public function afficheVoitures(){
      $afficheVoiture= $this->_bdd->query('SELECT id, type_vehicule, nom_vehicule, marque_vehicule, poids, couleur, annee_sortie, nbPorte from Vehicule WHERE type_vehicule = "voiture"');

      return $afficheVoiture->fetchAll();
    }

    public function afficheVoiture(Voiture $voiture){
      $afficheVoiture= $this->_bdd->query('SELECT id, type_vehicule, nom_vehicule, marque_vehicule, poids, couleur, annee_sortie, nbPorte from Vehicule WHERE id = '.$voiture->getId().' AND type_vehicule = "voiture"');

      return $afficheVoiture->fetch();
    }

} ?>
