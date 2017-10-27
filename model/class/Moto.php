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

 ?>
