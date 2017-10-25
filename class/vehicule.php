<?php
abstract class Vehicule{
  protected $marque_vehicule;
  protected $poids;
  protected $couleur;
  protected $annee_sortie;
  protected $type_vehicule;
  protected $nom_vehicule;

  public function __construct(array $donnees){
    $this->hydrate($donnees);
  }

  public function hydrate(array $donnees){
    foreach ($donnees as $key => $value){
      $method = 'set'.ucfirst($key);
      if (method_exists($this, $method)){
        $this->$method($value);
      }
    }
  }

    /*Get the value of Marque Vehicule*/
    public function getMarqueVehicule()
    {
        return $this->marque_vehicule;
    }

    /*Set the value of Marque Vehicule*/
    public function setMarqueVehicule($marque_vehicule)
    {
        $this->marque_vehicule = $marque_vehicule;

        return $this;
    }

    /*Get the value of Poids*/
    public function getPoids()
    {
        return $this->poids;
    }

    /*Set the value of Poids*/
    public function setPoids($poids)
    {
        $this->poids = $poids;

        return $this;
    }

    /*Get the value of Couleur*/
    public function getCouleur()
    {
        return $this->couleur;
    }

    /*Set the value of Couleur*/
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;

        return $this;
    }

    /*Get the value of Annee Sortie*/
    public function getAnneeSortie()
    {
        return $this->annee_sortie;
    }

    /*Set the value of Annee Sortie*/
    public function setAnneeSortie($annee_sortie)
    {
        $this->annee_sortie = $annee_sortie;

        return $this;
    }


    /*Get the value of Type Vehicule*/
    public function getTypeVehicule()
    {
        return $this->type_vehicule;
    }

    /*Set the value of Type Vehicule*/
    public function setTypeVehicule($type_vehicule)
    {
        $this->type_vehicule = $type_vehicule;

        return $this;
    }

    /*Get the value of Nom Vehicule*/
    public function getNomVehicule()
    {
        return $this->nom_vehicule;
    }

    /*Set the value of Nom Vehicule*/
    public function setNomVehicule($nom_vehicule)
    {
        $this->nom_vehicule = $nom_vehicule;

        return $this;
    }

} ?>
