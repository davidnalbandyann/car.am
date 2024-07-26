<?php
include 'CarManager.php';

if (isset($_GET['index'])) {

    $index = intval($_GET['index']);

    $cars = new Cars('../cars.json');

    $cars->deleteCar($index);

    header('Location: ../view/index.php');
    exit();
} else {
    echo "Car index is missing.";
}
