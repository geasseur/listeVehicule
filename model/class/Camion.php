<?php
class Camion extends Vehicule{
  protected $hauteur;
    /*Get the value of Hauteur*/
    public function getHauteur()
    {
        return $this->hauteur;
    }

    /*Set the value of Hauteur*/
    public function setHauteur($hauteur)
    {
        $this->hauteur = $hauteur;

        return $this;
    }

}
 ?>
