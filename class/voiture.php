<?php
class Voiture extends Vehicule{
  protected $nb_porte;

      /*Get the value of Nb Porte*/
      public function getNbPorte()
      {
          return $this->nb_porte;
      }

      /*Set the value of Nb Porte*/
      public function setNbPorte($nb_porte)
      {
          $this->nb_porte = $nb_porte;

          return $this;
      }
}

class VoitureManager{
  private $_bdd;

  public function __construct(array $donnees){
    $this->setBdd($_bdd);
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
      $ajoutVoiture->bindValue(':couleur',$voiture->getCouleur(), PDO::PARAM_STR, PDO::PARAM_STR);
      $ajoutVoiture->bindValue(':annee_sortie', $voiture->getAnneeSortie(), PDO::PARAM_INT);
      $ajoutVoiture->bindValue(':nbPorte', $voiture->getNbPorte(),PDO::PARAM_INT);
      $ajoutVoiture->execute();
    }

    //function for deleted a voiture object on the data base
    public function deleteVoiture($id){
      $casse = $this->_bdd->query('DELETE FROM Vehicule WHERE id = '.$id' ');
    }

    //function for updated a voiture object on the data base
    public function updateVoiture($id,$type_vehicule, $nom_vehicule, $marque_vehicule, $poids, $couleur, $annee_sortie, $nbPorte){
      $miseAJour = $this->_bdd->prepare('UPDATE Vehicule SET :type_vehicule, :nom_vehicule, :marque_vehicule, :poids, :couleur, :annee_sortie, :nbPorte ');
      $ajoutVoiture->bindValue(':type_vehicule', $type_vehicule, PDO::PARAM_STR);
      $ajoutVoiture->bindValue(':nom_vehicule', $nom_vehicule, PDO::PARAM_STR);
      $ajoutVoiture->bindValue(':marque_vehicule', $marque_vehicule, PDO::PARAM_STR);
      $ajoutVoiture->bindValue(':poids', $poids, PDO::PARAM_INT);
      $ajoutVoiture->bindValue(':couleur', $couleur, PDO::PARAM_STR);
      $ajoutVoiture->bindValue(':annee_sortie', $annee_sortie, PDO::PARAM_INT);
      $ajoutVoiture->bindValue(':nbPorte', $nbPorte, PDO::PARAM_INT);
      $ajoutVoiture->execute();
      //type_vehicule = '.$type_vehicule.', nom_vehicule = '.$nom_vehicule.', marque_vehicule = '.$marque_vehicule.', poids = '.$poids.', couleur = '.$couleur.', annee_sortie = '.$annee_sortie.', nbPorte = '.$nbPorte.' WHERE id = '.$id'
    }

    //function for list all voiture objects
    public function afficheVoiture(){
      $afficheVoiture= $this->_bdd->query('SELECT type_vehicule, nom_vehicule, marque_vehicule, poids, couleur, annee_sortie, nbPorte from Vehicule');

      return $afficheVoiture->fetchAll();
    }

} ?>
