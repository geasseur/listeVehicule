<?php
class Moto extends Vehicule{
  protected $volume;

    /*Get the value of Volume*/
    public function getVolume()
    {
        return $this->volume;
    }

    /*Set the value of Volume*/
    public function setVolume($volume)
    {
        $this->volume = $volume;

        return $this;
    }

}

class MotoManager{
  private $_bdd;


    /*Get the value of Bdd*/
    public function getBdd()
    {
        return $this->_bdd;
    }

    /*Set the value of Bdd*/
    public function setBdd($_bdd)
    {
        $this->_bdd = $_bdd;

        return $this;
    }

    //function for added a bike object on the data base
    public function addMoto(Voiture $moto){
      $ajoutMoto = $this->_bdd->prepare('INSERT INTO Vehicule(type_vehicule, nom_vehicule, marque_vehicule, poids, couleur, annee_sortie, volume) VALUES (:type_vehicule, :nom_vehicule, :marque_vehicule, :poids, :couleur, :annee_sortie, :volume)');
      $ajoutMoto->bindValue(':type_vehicule', $moto->getTypeVehicule(), PDO::PARAM_STR);
      $ajoutMoto->bindValue(':nom_vehicule', $moto->getNomVehicule(), PDO::PARAM_STR);
      $ajoutMoto->bindValue(':marque_vehicule', $moto->getMarqueVehicule(), PDO::PARAM_STR);
      $ajoutMoto->bindValue(':poids', $moto->getPoids(), PDO::PARAM_INT);
      $ajoutMoto->bindValue(':couleur',$moto->getCouleur(), PDO::PARAM_STR, PDO::PARAM_STR);
      $ajoutMoto->bindValue(':annee_sortie', $moto->getAnneeSortie(), PDO::PARAM_INT);
      $ajoutMoto->bindValue(':volume', $moto->getNbPorte(),PDO::PARAM_INT);
      $ajoutMoto->execute();
    }

    //function for deleted a bike object on the data base
    public function deleteMoto($id){
      $casseMoto = $this->_bdd->query('DELETE FROM Vehicule WHERE id = '.$id' ');
    }

    //function for updated a bike object on the data base
    public function updateMoto($id,$type_vehicule, $nom_vehicule, $marque_vehicule, $poids, $couleur, $annee_sortie, $volume){
      $miseAJour = $this->_bdd->prepare('UPDATE Vehicule SET :type_vehicule, :nom_vehicule, :marque_vehicule, :poids, :couleur, :annee_sortie, :volume');
      $ajoutMoto->bindValue(':type_vehicule', $type_vehicule, PDO::PARAM_STR);
      $ajoutMoto->bindValue(':nom_vehicule', $nom_vehicule, PDO::PARAM_STR);
      $ajoutMoto->bindValue(':marque_vehicule', $marque_vehicule, PDO::PARAM_STR);
      $ajoutMoto->bindValue(':poids', $poids, PDO::PARAM_INT);
      $ajoutMoto->bindValue(':couleur', $couleur, PDO::PARAM_STR);
      $ajoutMoto->bindValue(':annee_sortie', $annee_sortie, PDO::PARAM_INT);
      $ajoutMoto->bindValue(':volume', $volume, PDO::PARAM_INT);
      $ajoutMoto->execute();
      //type_vehicule = '.$type_vehicule.', nom_vehicule = '.$nom_vehicule.', marque_vehicule = '.$marque_vehicule.', poids = '.$poids.', couleur = '.$couleur.', annee_sortie = '.$annee_sortie.', nbPorte = '.$nbPorte.' WHERE id = '.$id'
    }

    //function for list all bike objects
    public function afficheMoto(){
      $afficheMoto= $this->_bdd->query('SELECT type_vehicule, nom_vehicule, marque_vehicule, poids, couleur, annee_sortie, volume from Vehicule');

      return $afficheMoto->fetchAll();
    }

} ?>
