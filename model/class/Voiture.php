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
 ?>
