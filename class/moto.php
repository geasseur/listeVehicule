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

} ?>
