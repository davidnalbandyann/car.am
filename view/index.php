<?php

require '../vendor/autoload.php';
require 'smartyConfig.php';
require '../controller/loadCars.php';




$cars = getCarsFromJson('../cars.json');

$smarty->assign('cars', $cars);

 
$smarty->display('../templates/index.tpl');