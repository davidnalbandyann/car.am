<?php

require '../controllerSQL/connectToDB.php';
require '../vendor/autoload.php';
require 'smartyConfig.php';



if (isset($_GET['index'])) {

    $index = intval($_GET['index']);

    $car = $cars->getCarByID($index);
    
} else {
    echo "Car index is missing.";
    exit();
}

$smarty->assign('index', $index);
$smarty->assign('car', $car);


$smarty->display('../templates/modifyForm.tpl');
