<?php
class MotoManager{
  private $_bdd;

    public function __construct($bdd){
      $this->setBdd($bdd);
    }
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
    public function addMoto(Moto $moto){
      $ajoutMoto = $this->_bdd->prepare('INSERT INTO Vehicule(type_vehicule, nom_vehicule, marque_vehicule, poids, couleur, annee_sortie, volume) VALUES (:type_vehicule, :nom_vehicule, :marque_vehicule, :poids, :couleur, :annee_sortie, :volume)');
      $ajoutMoto->bindValue(':type_vehicule', $moto->getTypeVehicule(), PDO::PARAM_STR);
      $ajoutMoto->bindValue(':nom_vehicule', $moto->getNomVehicule(), PDO::PARAM_STR);
      $ajoutMoto->bindValue(':marque_vehicule', $moto->getMarqueVehicule(), PDO::PARAM_STR);
      $ajoutMoto->bindValue(':poids', $moto->getPoids(), PDO::PARAM_INT);
      $ajoutMoto->bindValue(':couleur',$moto->getCouleur(), PDO::PARAM_STR);
      $ajoutMoto->bindValue(':annee_sortie', $moto->getAnneeSortie(), PDO::PARAM_INT);
      $ajoutMoto->bindValue(':volume', $moto->getVolume(),PDO::PARAM_INT);
      $ajoutMoto->execute();
    }

    //function for deleted a bike object on the data base
    public function deleteMoto($id,$type_vehicule){
      $casseMoto = $this->_bdd->query('DELETE FROM Vehicule WHERE id = '.$id.' AND type_vehicule = "'.$type_vehicule.'" ');
    }

    //function for updated a bike object on the data base
    public function updateMoto($id,$type_vehicule, $nom_vehicule, $marque_vehicule, $poids, $couleur, $annee_sortie, $volume){
      $miseAJour = $this->_bdd->prepare('UPDATE Vehicule SET type_vehicule = :type_vehicule, nom_vehicule = :nom_vehicule, marque_vehicule = :marque_vehicule, poids=:poids, couleur=:couleur, annee_sortie=:annee_sortie, volume= :volume WHERE id = '.$id.'');
      $miseAJour->bindValue(':type_vehicule', $type_vehicule, PDO::PARAM_STR);
      $miseAJour->bindValue(':nom_vehicule', $nom_vehicule, PDO::PARAM_STR);
      $miseAJour->bindValue(':marque_vehicule', $marque_vehicule, PDO::PARAM_STR);
      $miseAJour->bindValue(':poids', $poids, PDO::PARAM_INT);
      $miseAJour->bindValue(':couleur', $couleur, PDO::PARAM_STR);
      $miseAJour->bindValue(':annee_sortie', $annee_sortie, PDO::PARAM_INT);
      $miseAJour->bindValue(':volume', $volume, PDO::PARAM_INT);
      $miseAJour->execute();
      //type_vehicule = '.$type_vehicule.', nom_vehicule = '.$nom_vehicule.', marque_vehicule = '.$marque_vehicule.', poids = '.$poids.', couleur = '.$couleur.', annee_sortie = '.$annee_sortie.', nbPorte = '.$nbPorte.' WHERE id = '.$id'
    }

    //function for list all bike objects
    public function afficheMoto(){
      $afficheMoto= $this->_bdd->query('SELECT id, type_vehicule, nom_vehicule, marque_vehicule, poids, couleur, annee_sortie, volume from Vehicule WHERE type_vehicule = "moto"');

      return $afficheMoto->fetchAll();
    }

} ?>
