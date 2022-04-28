<?php

require_once 'Bicycle.php';
require_once 'car.php'; 
require_once 'truck2.php';
require_once 'skateboard.php';
require_once 'highway.php';
require_once 'motorway.php'; 
require_once 'pedestrianway.php';
require_once 'residentialway.php';
require_once 'LightableInterface.php';


//Bicycle code
$bike = new Bicycle("blue", 1);
$bike->setCurrentSpeed(7);
var_dump($bike->switchOn());


//echo $bike->forward();
// echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
// echo $bike->brake();
// echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
// echo $bike->brake();

// // //Car code
$car = new Car ("red", 5, "electric");
$car->setCurrentSpeed(10);
var_dump($car->switchOn());

// // try {
// //     echo $car->start();
// // } catch (Exception $e) {
// //     echo 'Exception reçue : ', $e->getMessage(), "<br>";
// // }
// // echo "Let's go !", "<br>";

// try {
//     echo $car->start();
// } catch (Exception $e){
//     echo 'Exception reçue : ', $e->getMessage(), "<br>";
// } finally{
//     echo "Ma voiture roule comme un donut”", "<br>";
// }


//echo $car->forward();
// echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
// echo $car->brake();
// echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
// echo $car->brake();

// //Truck code
// $truck2 = new Truck2 (100, 'noir', 3, 'gasoil');

// echo '<br> Capacité de chargement : ' . $truck2->getStorageCapacity() . ' tonnes' . '<br>';
// echo $truck2->isItFull() . '<br>'; 
// echo 'Chargement : ' . $truck2->getLoad() . ' tonnes' . '<br>';

// echo '<br>' . $truck2->forward();
// echo '<br> Vitesse du camion : ' . $truck2->getCurrentSpeed() . ' km/h' . '<br>';
// echo $truck2->brake();
// echo '<br> Vitesse du camion : ' . $truck2->getCurrentSpeed() . ' km/h' . '<br>';
// echo $truck2->brake();

// //Skateboard code
// $skate = new Skateboard ("grey", 1); 

// //Motor way code
// $motorWay = new MotorWay (4, 130); 
// $motorWay->addVehicle($car);
// var_dump($motorWay);

// // //Pedestrian way code
// $pedestrianWay = new PedestrianWay (1, 10); 
// $pedestrianWay->addVehicle($bike); 
// var_dump($pedestrianWay);

// // // //Residential way code
// $residentialWay = new ResidentialWay (2, 50);
// $residentialWay->addVehicle($skate);
// var_dump($residentialWay); 
