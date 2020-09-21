<?php



require 'Personnage.php';
require 'Archer.php';


$merlin = new Personnage('Merlin');

$harry = new Personnage('Harry');



$legolas = new Archer('Legolas');

$legolas->atteque($harry);

var_dump($legolas, $harry);
