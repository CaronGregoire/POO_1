<?php

require_once 'Bicycle.php';

$bike = new Bicycle('red');
$bike->setColor = 'red';
$bike->getCurrentSpeed = 800;

echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed . ' km/h' . '<br>';
echo $bike->brake();

require_once 'Car.php';


$homer = new Car('yellow', 5, 'huile de colza');
$homer->getCurrentSpeed = 80;

echo $homer->start();
echo '<br>La voiture d\'Homer démarre ' . $homer->start() . '<br>';
echo '<br>' . $homer->forward() . '</br>';
echo '<br> Homer roule à ' . $homer->getCurrentSpeed . 'km/h' . '<br>';
echo '<br> La voiture d\'Homer roule grâce à de l\' ' . $homer->getEnergy() . '<br>';
echo $homer->brake();

?>