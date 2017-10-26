<?php
session_start();
function chargerClasse($classname)
{
  include 'model/class/'.$classname.'.php';
}

spl_autoload_register('chargerClasse');
require 'model/connexion.php';
require 'control/controlIndex.php';
require 'vue/vueIndex.php';
//machin ?>
