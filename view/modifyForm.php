<?php
require '../controller/manageCars.php';
require '../vendor/autoload.php';
require 'smartyConfig.php';

if (isset($_GET['index'])) {
    $index = intval($_GET['index']);
    $cars = new Cars('../cars.json');
    $car = $cars->getCars()[$index];
} else {
    echo "Car index is missing.";
    exit();
}

$smarty->assign('index', $index);
$smarty->assign('car', $car);


$smarty->display('../templates/modifyForm.tpl');
