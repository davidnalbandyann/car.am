<?php

require '../vendor/autoload.php';
require 'smartyConfig.php';
require '../controllerSQL/loadCars.php';


$cars = $cars->getCars(); //returns cars as array of Car objects

$smarty->assign('cars', $cars);
 
$smarty->display('../templates/index.tpl');