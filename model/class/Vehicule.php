<?php
abstract class Vehicule{
  protected $marqueVehicule;
  protected $poids;
  protected $couleur;
  protected $anneeSortie;
  protected $typeVehicule;
  protected $nomVehicule;

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




    /**
     * Get the value of Marque Vehicule
     *
     * @return mixed
     */
    public function getMarqueVehicule()
    {
        return $this->marqueVehicule;
    }

    /**
     * Set the value of Marque Vehicule
     *
     * @param mixed marqueVehicule
     *
     * @return self
     */
    public function setMarqueVehicule($marqueVehicule)
    {
        $this->marqueVehicule = $marqueVehicule;

        return $this;
    }

    /**
     * Get the value of Poids
     *
     * @return mixed
     */
    public function getPoids()
    {
        return $this->poids;
    }

    /**
     * Set the value of Poids
     *
     * @param mixed poids
     *
     * @return self
     */
    public function setPoids($poids)
    {
        $this->poids = $poids;

        return $this;
    }

    /**
     * Get the value of Couleur
     *
     * @return mixed
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * Set the value of Couleur
     *
     * @param mixed couleur
     *
     * @return self
     */
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;

        return $this;
    }

    /**
     * Get the value of Annee Sortie
     *
     * @return mixed
     */
    public function getAnneeSortie()
    {
        return $this->anneeSortie;
    }

    /**
     * Set the value of Annee Sortie
     *
     * @param mixed anneeSortie
     *
     * @return self
     */
    public function setAnneeSortie($anneeSortie)
    {
        $this->anneeSortie = $anneeSortie;

        return $this;
    }

    /**
     * Get the value of Type Vehicule
     *
     * @return mixed
     */
    public function getTypeVehicule()
    {
        return $this->typeVehicule;
    }

    /**
     * Set the value of Type Vehicule
     *
     * @param mixed typeVehicule
     *
     * @return self
     */
    public function setTypeVehicule($typeVehicule)
    {
        $this->typeVehicule = $typeVehicule;

        return $this;
    }

    /**
     * Get the value of Nom Vehicule
     *
     * @return mixed
     */
    public function getNomVehicule()
    {
        return $this->nomVehicule;
    }

    /**
     * Set the value of Nom Vehicule
     *
     * @param mixed nomVehicule
     *
     * @return self
     */
    public function setNomVehicule($nomVehicule)
    {
        $this->nomVehicule = $nomVehicule;

        return $this;
    }

} ?>
