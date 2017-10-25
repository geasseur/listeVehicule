<?php
class Vehicule{
  protected $marque_vehicule;
  protected $poids;
  protected $couleur;
  protected $annee_sortie;


    /**
     * Get the value of Marque Vehicule
     */
    public function getMarqueVehicule()
    {
        return $this->marque_vehicule;
    }

    /**
     * Set the value of Marque Vehicule
     */
    public function setMarqueVehicule($marque_vehicule)
    {
        $this->marque_vehicule = $marque_vehicule;

        return $this;
    }

    /**
     * Get the value of Poids
     */
    public function getPoids()
    {
        return $this->poids;
    }

    /**
     * Set the value of Poids
     */
    public function setPoids($poids)
    {
        $this->poids = $poids;

        return $this;
    }

    /**
     * Get the value of Couleur
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * Set the value of Couleur
     */
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;

        return $this;
    }

    /**
     * Get the value of Annee Sortie
     */
    public function getAnneeSortie()
    {
        return $this->annee_sortie;
    }

    /**
     * Set the value of Annee Sortie 
     */
    public function setAnneeSortie($annee_sortie)
    {
        $this->annee_sortie = $annee_sortie;

        return $this;
    }

} ?>
